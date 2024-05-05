<?php

namespace App\Controller;

use App\Card\CardGraphic;
use App\Card\DeckOfCards;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardController extends AbstractController
{
    #[Route("/card", name: "card")]
    public function card(
        SessionInterface $session
    ): Response {
        return $this->render('card/home.html.twig');
    }

    #[Route("/card/deck", name: "deck")]
    public function deck(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCards();
        $session->set("deck", $deck->getDeck());

        $data = [
            "cards" => $session->get("deck")
        ];

        return $this->render('card/deck.html.twig', $data);
    }

    #[Route("card/deck/shuffle", name: "shuffle")]
    public function shuffle(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCards();
        $session->set("shuffle", $deck->shuffledDeck());

        $data = [
            "shuffledCards" => $session->get("shuffle")
        ];

        return $this->render('card/shuffle.html.twig', $data);
    }

    #[Route("card/deck/draw", name: "draw")]
    public function draw(SessionInterface $session
    ): Response {

        if (!$session->has('drawDeck')) {
            $deck = new DeckOfCards();
            $session->set("drawDeck", $deck->shuffledDeck());
        }

        $deck = $session->get("drawDeck");
        $card = array_shift($deck);

        $session->set("drawDeck", $deck);

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

        return $this->render('card/draw.html.twig', $data);
    }

    #[Route("card/deck/draw/:number", name: "draw_many")]
    public function drawMany(int $num,
        SessionInterface $session
    ): Response {

        if (!$session->has('drawDeck')) {
            $deck = new DeckOfCards();
            $session->set("drawDeck", $deck->shuffledDeck());
        }

        if ($num > 52) {
            throw new \Exception("Can not draw more than 52 cards!");
        }

        $deck = $session->get("drawDeck");
        $cards = array_shift($deck);

        $session->set("drawDeck", $deck);

        if (empty($deck)) {
            $this->addFlash(
                'warning',
                'No cards left, deck is empty!'
            );
        }

        $data = [
            "card" => $cards,
            "cardsLeft" => count($deck)
        ];

        return $this->render('card/draw.html.twig', $data);
    }
}
