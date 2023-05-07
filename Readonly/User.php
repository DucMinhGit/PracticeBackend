<?php

class User {

    private readonly string $username;
    private readonly UserProfile $profile;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function setProfile(UserProfile $profile) 
    {
        $this->profile = $profile;
    }

    public function profile():UserProfile 
    {
        return $this->profile;
    }

    public function getUsername():void 
    {
        echo $this->username;
    }
}

$user = new User('Joe');

$user->setProfile(new UserProfile('Harry', '08854245'));

$user->profile()->changeName("Marguire");

$user->profile()->getName();
?>