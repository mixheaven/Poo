<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent:: __construct($nbLane, $maxSpeed);
    }
public function addVehicle(Vehicle $vehicle)
{
    $this->currentVehicles[] = $vehicle;
}

}

?>