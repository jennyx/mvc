<?php

namespace App\Controller;

use App\Card\DeckOfCards;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardControllerJson extends AbstractController
{
    #[Route("/api/deck", name: "api_deck", methods: ['GET'])]
    public function deck(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCards();

        $data = [
            "apiDeck" => $deck->getDeck()
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    #[Route("/api/deck/shuffle", name: "api_shuffle", methods: ['POST'])]
    public function shuffle(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCards();
        $session->set("apiShuffle", $deck->shuffledDeck());
        if ($session->has('apiDrawDeck')) {
            $session->set("apiDrawDeck", $deck->shuffledDeck());
        }

        $data = [
            "apiShuffledCards" => $deck->shuffledDeck()
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    #[Route("/api/deck/draw", name: "api_draw", methods: ['POST'])]
    public function draw(
        SessionInterface $session
    ): Response {

        if (!$session->has('apiDrawDeck')) {
            $deck = new DeckOfCards();
            $session->set("apiDrawDeck", $deck->shuffledDeck());
        }

        $deck = $session->get("apiDrawDeck");
        $card = array_shift($deck);

        $session->set("apiDrawDeck", $deck);

        if (empty($deck)) {
            $this->addFlash(
                'warning',
                'No cards left, deck is empty!'
            );
        }

        $data = [
            "card" => $card,
            "cardsLeft" => count($deck)
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    #[Route("/api/deck/draw/{num<\d+>}", name: "api_draw_many")]
    public function drawManyCallback(
        int $num,
        SessionInterface $session
    ): Response
    {

        if (!$session->has('apiDrawDeck')) {
            $deck = new DeckOfCards();
            $session->set("apiDrawDeck", $deck->shuffledDeck());
        }

        $deck = $session->get("apiDrawDeck");
        $cardsLeft = count($deck);

        if (empty($deck)) {
            $this->addFlash(
                'warning',
                'No cards left, deck is empty!'
            );
        }

        if ($num > $cardsLeft) {
            $this->addFlash(
                'warning',
                'Not enough cards in deck!'
            );
        }
        
        $cards = [];
        for ($i = 1; $i <= $num; $i++) {
            array_push($cards, array_shift($deck));
        }

        $session->set("apiDrawDeck", $deck);

        $data = [
            "cards" => $cards,
            "cardsLeft" => count($deck)
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    #[Route("/card/deck/draw_many_post", name: "api_draw_many_post", methods: ['POST'])]
    public function drawMany(
        Request $request
    ): Response
    {
        $cardsLeft = $request->request->get('numCards');

        return $this->redirectToRoute('api_draw_many', ['num' => $cardsLeft]);
    }
    
}
