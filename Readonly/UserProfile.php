<?php
class UserProfile {

    public function __construct(private string $name, private string $phone)
    {}

    public function changePhone(string $phone) 
    {
        $this->phone = $phone;
    }

    public function changeName(string $name) 
    {
        $this->name = $name;
    }

    public function getPhone():void 
    {
        echo $this->phone;
    }

    public function getName():void 
    {
        echo $this->name;
    }
}
?>