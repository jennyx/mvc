<?php

namespace App\Card;

class Card
{
    protected $value;
    protected $suit;

    public function __construct($value = null, $suit = null)
    {
        $this->value = $value;
        $this->suit = $suit;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getSuit()
    {
        return $this->suit;
    }
}
