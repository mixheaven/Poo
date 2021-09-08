<?php

require_once 'Speedometer.php';
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

var_dump(Car::ALLOWED_ENERGIES);

$bike = new Bicycle("blue", 1);
echo $bike->forward();


$car = new Car('green', 4, 'electric', true);
echo $car->forward();


$truck = new Truck('reed', 3, 'fuel', 100);
$truck->SetStorage(50);
echo $truck->forward();


echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake() . '<br>';
echo 'Le camion est: ' . $truck->getStorageLevel();

$motorWay = new MotorWay(4, 130);
$motorWay->addVehicle(new Car('green', 5, 'electric',true));


$residentialWay = new ResidentialWay(1, 10);
$residentialWay->addVehicle(new Truck('white', 3, 'fuel', 200));
;

$pedestrianWay = new PedestrianWay(2, 50);
$pedestrianWay->addVehicle(new Bicycle('orange', 1));


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
    echo "ma voiture roule comme un donut"."<br>"."<br>";
}


echo "les feux de la voiture sont : " . ($car->switchOn()?'allumé':'éteint'). "<br>";
echo "les feux de la voiture sont : " . ($car->switchOn()?'allumé':'éteint'). "<br>";

$bike->setCurrentSpeed(5);
echo "le vélo roule à " . $bike->getCurrentSpeed() . "km/h, les feux du vélo sont : ".($bike->switchOn()?'allumé':'éteint'). "<br>";
$bike->setCurrentSpeed(10);
echo "le vélo roule à " . $bike->getCurrentSpeed() . "km/h, les feux du vélo sont : ".($bike->switchOn()?'allumé':'éteint'). "<br>";
echo "les feux du vélo sont : ".($bike->switchOff()?'allumé':'éteint'). "<br>";


echo " 10 km/h représente une vitesse de : " . Speedometer::convertKmInMiles(10) . "Mp/h" ."<br>";
echo " 10 Mp/h rprésente une vitesse de : " . Speedometer::convertMilesInKm(10) . "Km/h";
 
?> 