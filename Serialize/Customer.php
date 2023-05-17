<?php
class Customer
{
    public function __construct(private int $id, private string $name, private string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function getInitial()
    {
        if($this->name !== '')
        {
            return strtoupper(substr($this->name, 0, 1));
        }
    }
}
?>