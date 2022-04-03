<?php

class Deck
{
    // C D H S
    protected $cards = [
        'Ac', '2c', '3c', '4c', '5c', '6c', '7c', '8c', '9c', 'Tc', 'Jc', 'Qc', 'Kc',
        'Ad', '2d', '3d', '4d', '5d', '6d', '7d', '8d', '9d', 'Td', 'Jd', 'Qd', 'Kd',
        'Ah', '2h', '3h', '4h', '5h', '6h', '7h', '8h', '9h', 'Th', 'Jh', 'Qh', 'Kh',
        'As', '2s', '3s', '4s', '5s', '6s', '7s', '8s', '9s', 'Ts', 'Js', 'Qs', 'Ks',
    ];

    protected $deltCards = [];

    public function getDeck()
    {
        return $this->cards;
    }
    
    public function deal()
    {
        $randCard = rand(0, 51);

        while(!isset($this->cards[$randCard]))
        {
            $randCard = rand(0, 51);
        }

        $this->deltCards[] = $this->cards[$randCard];

        unset($this->cards[$randCard]);
        
        return $this->deltCards;
    }

    public function shuffle()
    {
        for($i = 1; $i < 100; $i++)
        {
            $randCard1 = rand(0, 51);
            $randCard2 = rand(0, 51);

            while(!isset($this->cards[$randCard1]) || !isset($this->cards[$randCard2]))
            {
                $randCard1 = rand(0, 51);
                $randCard2 = rand(0, 51);
            }

            [$this->cards[$randCard1], $this->cards[$randCard2]] = [$this->cards[$randCard2], $this->cards[$randCard1]];  
        }

        return $this->cards;
    }

}