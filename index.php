<?php


require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

$truck = new Truck('green', 3 , 50);
$truck->setCurrentSpeed(40);
$truck->SetStorage(50);

echo $truck->forward() . '<br>';
echo 'Vitesse du camion ' . $truck->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck->brake() . '<br>';
echo 'Le camion posséde ' . $truck->getStorageLevel() . ' tone ';
echo $truck->isFull() . ' le camion est chagré à ' . $truck->getStorageLevel() . 

?>
