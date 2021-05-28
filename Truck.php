<?php
 
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private $storage;
    
    private $storageLevel = 0;
    
    public function __construt(string $color, int $nbSeats, int $storage)
    {
        parent:: __construct($color, $nbSeats);
        $this->setStorage($storage);
    }

    public function isFull(): string
    {
        $sentence = "";
        while ($this->storageLevel < $this->storage)
        {
            $this->storageLevel++;
            $sentence = "Il y a encore de la place, tu peux charger René!!!" . '<br>';
        }
        $sentence .="y a pus de place!!!";
        return $sentence;
    }
    public function getStorage(): int
    {
        return $this->storage;
    }
    
    public function SetStorage(int $storage)
    {
        $this->storage = $storage;
    }
    public function getStorageLevel(): int
    {
        return $this->storageLevel;
    }
    public function SetStorageLevel(int $storageLevel)
    {
        $this->storageLevel = $storageLevel;
    }
    

}


 ?>
