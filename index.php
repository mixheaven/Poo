<?php


require_once 'Bicycle.php';
$bike = new Bicycle();
$bike->setColor('blue');
$bike->setCurrentSpeed(0);

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->setColor('yelow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->setColor('black');
$tornado->setCurrentSpeed(0);

// Instanciation d'une voiture
require_once 'Car.php';
$mustang = new Car('red', 4,'nitrogène' );
echo $mustang->start();
echo '<br> Vitesse de la voiture ; ' .$mustang->getCurrentSpeed() . 'km/h' . '<br>';
echo $mustang->forward();
echo '<br> Vitesse de la voiture ; ' .$mustang->getCurrentSpeed() . 'km/h' . '<br>';
echo $mustang->brake();
echo '<br> Vitesse de la voiture ; ' .$mustang->getCurrentSpeed() . 'km/h' . '<br>';




var_dump($bike);
$bike->dump();


// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
// Moving bike
echo $tornado->forward();
echo '<br> Vitesse de tornado : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse de tornado: ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake();




?>