<?php
require_once 'bicycle.php';
require_once 'car.php';
require_once 'truck.php';
require_once 'exemple.php';
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
echo $car->brake();


var_dump($car);
//var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck(0, 'fuel','grey', 3);
$truck -> setCurrentSpeed(50);
echo '<br> Démarrage : ' . $truck -> getCurrentSpeed() . 'km/h' . '<br>';
echo $truck->forward();
$truck -> setChargement(600);
echo $truck -> getChargement();
echo $truck->forward();
echo $truck->isFull();
$truck -> setChargement(600);
echo $truck -> getChargement();
echo $truck->isFull();


var_dump($truck);

/*$velo = new Velo;
$velo ->color = 'blue';
$velo ->currentSpeed = 0;
echo $velo->forward();
echo '<br> Vitesse du vélo : ' . $velo->currentSpeed . ' km/h' . '<br>';
echo $velo->brake();
echo '<br> Vitesse du vélo : ' . $velo->currentSpeed . ' km/h' . '<br>';
echo $velo->brake();
var_dump($velo);*/

?>