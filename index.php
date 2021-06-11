<?php

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

var_dump(Car::ALLOWED_ENERGIES);

$bicycle = new Bicycle("blue", 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric', true);
echo $car->forward();
var_dump($car);

$truck = new Truck('reed', 3, 'fuel', 100);
$truck->SetStorage(50);
echo $truck->forward();
var_dump($truck);

echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake() . '<br>';
echo 'Le camion est: ' . $truck->getStorageLevel();

$motorWay = new MotorWay(4, 130);
$motorWay->addVehicle(new Car('green', 5, 'electric',true));
var_dump($motorWay);

$residentialWay = new ResidentialWay(1, 10);
$residentialWay->addVehicle(new Truck('white', 3, 'fuel', 200));
var_dump($residentialWay);

$pedestrianWay = new PedestrianWay(2, 50);
$pedestrianWay->addVehicle(new Bicycle('orange', 1));
var_dump($pedestrianWay);

echo $car->getParkBrake();
try
{
    $car->start();
}
catch(Exception $e)
{
    echo $e;
    $car->setParkBrake(false);
}
finally
{
    echo "ma voiture roule comme un donut <br/>";
}
?> 