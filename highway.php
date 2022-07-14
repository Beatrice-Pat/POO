<?php
require_once 'vehicule.php';
require_once 'truck.php';
require_once 'bike.php';
require_once 'car.php';


//classe
abstract class HighWay {
    public array $currentVehicles;
    public int $nbLane;
    public int $maxSpeed;
    
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    public function setCurrentVehicles(array $currentVehicles): void
    {
        if ($currentVehicles >= 0) {
            $this->currentVehicles = $currentVehicles;
        }
    }
    public function getNbLane($nbLane): int
    {
        return $this->nbLane;
    }
    public function setNbLane(int $nbLane)
    {
        $this->nbLane;
    }
    public function getMaxSpeed($maxSpeed): int
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed;
    }
    //abstration
    abstract public function addVehicle(Vehicle $vehicle);
}
//classe finale enfant
final class MotorWay extends HighWay {
    //public array $currentVehicles;
    public int $nbLane = 4;
    public int $maxSpeed = 130;
    //implantation de la fonction abstraite
    public function addVehicle(Vehicle $vehicle): void 
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicules[] = $vehicle;
        }
    }

}
//classe finale enfant
final class PedestrianWay extends HighWay {
    public int $nbLane = 1;
    public int $maxSpeed = 10;
    public function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Velo OR $vehicle instanceof Skateboard) {
            $this->currentVehicules[] = $vehicle;
        }
    }
}
//classe finale enfant
final class ResidentialWay extends HighWay {
    public int $nbLane = 2;
    public int $maxSpeed = 50;
    public function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicules[] = $vehicle;
        }
    }
}
//instanciation d'une nouvelle voie
$motorWay = new MotorWay;
echo $motorWay->nbLane . '<br>';
echo $motorWay->maxSpeed . 'km/h <br>';
var_dump($motorWay);
echo '<br>';
//instanciation d'une nouvelle voie
$pedestrianWay = new PedestrianWay;
echo $pedestrianWay->nbLane . '<br>';
echo $pedestrianWay->maxSpeed . 'km/h <br>';
var_dump($pedestrianWay);
echo '<br>';
//instanciation d'une nouvelle voie
$residentialWay = new ResidentialWay;
echo $residentialWay->nbLane . '<br>';
echo $residentialWay->maxSpeed . 'km/h <br>';
var_dump($residentialWay);
echo '<br>';
