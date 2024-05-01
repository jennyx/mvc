<?php

namespace App\Controller;

use App\Card\CardGraphic;
use App\Card\DeckOfCards;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardController extends AbstractController
{
    #[Route("/card", name: "card")]
    public function card(SessionInterface $session
    ): Response {
        return $this->render('card/home.html.twig');
    }

    #[Route("/card/deck", name: "deck")]
    public function deck(SessionInterface $session
    ): Response {
        $deck = new DeckOfCards();
        $session->set("deck", $deck->getDeck());

        $data = [
            "cards" => $session->get("deck")
        ];

        return $this->render('card/deck.html.twig', $data);
    }

    #[Route("/card/shuffle", name: "shuffle")]
    public function shuffle(SessionInterface $session
    ): Response {
        $deck = new DeckOfCards();
        $session->set("shuffle", $deck->shuffledCards());

        $data = [
            "shuffledCards" => $session->get("shuffle")
        ];

        return $this->render('card/shuffle.html.twig', $data);
    }

    

}
