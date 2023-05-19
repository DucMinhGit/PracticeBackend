<?php

class Customer
{
    public function __construct(
        private int $id,
        private string $name,
        private string $email
    ) {}

    public function getInitial()
    {
        if ($this->name !== '') {
            return strtoupper(substr($this->name, 0, 1));
        }
    }
}