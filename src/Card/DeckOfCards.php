<?php

namespace App\Card;

use App\Card\Card;
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

    public function getDeck(): array
    {
        $deckOfCards = [];
        $deck = $this->deck();
        foreach ($this->deck as $card) {
            $deckOfCards[] = $card;
        }
        return $deckOfCards;
    }

    public function shuffledCards(): array
    {
        $shuffledCards = $this->getDeck();
        shuffle($shuffledCards);
        return $shuffledCards;
    }
}
