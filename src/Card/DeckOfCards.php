<?php

namespace App\Card;

use App\Card\CardGraphic;

class DeckOfCards {

    private $deck = [];

    public function deck() 
    {
        $cg = new CardGraphic();
        $values = count($cg->deckOfCards);

        for ($i=1; $i <= $values; $i++) {
            $graphicCard = new CardGraphic($i);
            $this->deck[] = $graphicCard->getAsString();
        }
    }

    public function getDeck()
    {
        $deckOfCards = [];
        $deck = $this->deck();
        foreach ($this->deck as $card) {
            $deckOfCards[] = $card;
        }
        return $deckOfCards;
    }

    public function shuffledDeck()
    {
        $shuffledDeck = $this->getDeck();
        shuffle($shuffledDeck);
        return $shuffledDeck;
    }

    public function countDeck()
    {
        return count($this->getDeck());
    }

    public function drawCard()
    {
        // $deck = $this->getDeck();
        if (empty($deck)) {
            return null;
        }
        // $this->hand = array_shift($deck);
        return array_shift($deck);
    }

}
