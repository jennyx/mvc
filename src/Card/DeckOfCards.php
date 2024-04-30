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
        return $this->deck; 
    }

    public function getDeck(): string
    {
        $deckOfCards = $this->deck();
        return $deckOfCards;
    }

    public function shuffledCards() 
    {
        return shuffle($this->deck);
    }
}
