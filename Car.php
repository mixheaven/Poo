<?php

class Car
 {
     //déclaration de variable
    private string $color;

    private string $energy;

    private int $currentSpeed = 0;

    private int $nbSeats;

    private int $energyLevel = 100;

    private int $nbWheels = 4;
    //création de costructeur
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
       
    }
    //cration des setteurs
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function setEnergy(string $energy): void
    {
        $this->enregy= $energy;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed>=0)
        {
            $this->currentSpeed = $currentSpeed;
        }
    }
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats= $nbSeats;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        if($energyLevel>=0)
        {
            $this->energyLevel = $energyLevel;
        }
    }

    //création des getteurs
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    
    public function getColor(): string
   {
       return $this->color;
   }
    public function getEnergy(): string
   {
       return $this->energy;
   }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function start(): string
    {
        $this->getCurrentSpeed = 0;
        return "Start the engine.";
    }
    public function forward(): string
    {
        $this->currentSpeed = 50;
        return "go on !";
    }
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed >0)
        {
            $this->currentSpeed--;
            $sentence .= "Brake it !!!";
        }
        $sentence .= "I'mStopped !";
        return $sentence;
    }



 }
 ?>