<?php
 require_once 'Vehicle.php';
 require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableIntreface
{
    public function switchOn()
    {
        if($this->getcurrentSpeed() >10){
            
            return true;
            
        }
        return false;
    }

    public function switchOff()
    {
        return false;
    }
   


}


?>