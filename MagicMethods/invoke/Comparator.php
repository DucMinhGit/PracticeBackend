<?php 

class Comparator
{
    public function __construct(private $key)
    {
        $this->key = $key;
    }

    public function __invoke($a, $b)
    {
        return $a[$this->key] <=> $b[$this->key];
    }
}