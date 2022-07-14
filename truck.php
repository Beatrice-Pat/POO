<?php
require_once 'vehicule.php';

class Truck extends Vehicle
{
    private int $storage = 1200;
    private int $chargement = 0;
    

    public function __construct(int $chargement, string $energy, string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    public function getChargement(): int
    {
        return $this->chargement;
    }

    public function setChargement(int $chargement): void
    {
        $this->chargement = $chargement;
    }

    public function isFull(): string
    {
        $sentence = "";
        if ($this->chargement >= $this->storage){
            return $sentence = "full";
        } else {
            return $sentence = "is filling";
        }
    }

   
    
}