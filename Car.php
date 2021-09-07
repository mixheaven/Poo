<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableIntreface
 {
    public const ALLOWED_ENERGIES= 
    [
        'fuel',
        'electric',
    ];

    private string $energy;

    private int $energyLevel;

    private $parkBrake;
    


    public function __construct(string $color, int $nbSeats, string $energy, bool $parkBrake)
    {
        parent:: __construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->parkBrake = $parkBrake;
        
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
       if(in_array($energy, self::ALLOWED_ENERGIES))
       {
           $this->enregy = $energy;
       }
       return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    public function setParkBrake(bool $parkBrake): void
    {
        $this->parkBrake = $parkBrake;
    }

    public function getParkBrake(): string
    {
        if($this->parkBrake)
        {
            return 'le frain à main est levé <br/>';
        }return'le frain à main est baissé <br/>';
    }
    
    public function start()
    {
       
        if($this->parkBrake === true)
        {
            throw new Exception("Baisses le frain à main avant de partir ! </br>");
        }
        
        echo "Je démarre <br/>";
    }

    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return false; 
    }




 }
 ?>