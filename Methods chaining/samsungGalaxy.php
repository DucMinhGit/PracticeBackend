<?php 
trait samsungGalaxy {
    public function smartPhoneName() {
        $this->phoneName = __TRAIT__;
        return $this;
    } 

    public function battery($batteryCapacity) {
        $this->batteryCapacity = $batteryCapacity;
        return $this;
    }
}
