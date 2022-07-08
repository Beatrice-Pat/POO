<?php
require_once 'bicycle.php';
require_once 'car.php';
$bike = new Bicycle('blue');
$car = new Car;
var_dump($bike);
var_dump($car);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';

echo $bike->forward();
echo '<br> Vitesse de la voiture : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse de la voiture : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';



?>