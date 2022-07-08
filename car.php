<?php

class Car 
{
    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private string $color = 'red';
    private int $nbSeats = 5;
    private string $energy = 'diesel';
    private int $energyLevel = 30;

    public function construct(string $color, int $nbSeats, string $energy)
    {
       $this-> color = $color;
       $this-> nbSeats = $nbSeats;
       $this-> energy = $energy;
    }
    public function foward() : string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }
    public function brake() : string
    {
        $sentence = "";
   while ($this->currentSpeed > 0) {
         $this->currentSpeed--;
         $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
    }  
    public function start(): string
    {
       $this->begin = ""; 
       return $this->begin;
    }
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function getColor() : string
    {
    return $this->color;
    }
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }
    public function getNbSeats() : int
    {
        return $this-> setNbSeats;
    }
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }
    public function getEnergy() : string
    {
        return $this->energy;
    }
    public function setEnergyLevel(string $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function getEnergyLevel() : string
    {
        return $this->energyLevel;
    }
}


?>