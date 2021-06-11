<?php

abstract class HighWay
{
    private $currentVehicles;

    private $nbLane;

    private $maxSpeed;
    
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->setMaxSpeed($maxSpeed);
        $this->setNbLane($nbLane);
        
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxspeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getNbLane(int $nbLane): int
    {
        return $this->nbLane;
    }

    public function setNblane(int $nbLane)
    {
        $this->nbLane = $nbLane;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;
    }

    abstract public function addVehicle(Vehicle $vehicle);

}






?>