<?php

namespace Acme\Auth;

class User
{
    public function __construct(private $username, private $password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}