<?php

include "samsungGalaxy.php";

class Mobile {

    public $mobileType;
    public $phoneName;
    public $batteryCapacitype;
    
    use samsungGalaxy;

    public function mobileType($mobileType)
    {
        $this->mobileType = $mobileType;
        return $this;
    }

    public function getMobileInfo()
    {
        return $this->phoneName . " is a " . 
                $this->mobileType . " mobile having battery capacity of " . 
                $this->batteryCapacitype;
    }
}

$obj = new Mobile;

echo $obj->smartPhoneName()->mobileType('android')->battery('2000mh')->getMobileInfo();

?>