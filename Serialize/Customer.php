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

    // public function __sleep()
    // {
    //     return ['id', 'name'];
    // }

    public function __serialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}
?>