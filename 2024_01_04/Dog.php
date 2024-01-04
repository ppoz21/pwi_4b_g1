<?php

class Dog
{
    private string $name;
    private string $breed;
    private int $age;
    private string $color;

    public function __construct(
        string $name,
        string $breed,
        int $age,
        string $color
    ) {
        $this->name = $name;
        $this->breed = $breed;
        $this->age = $age;
        $this->color = $color;
    }

    public function __destruct()
    {
        echo "Bye bye!";
    }

    function bark(): void
    {
        echo "Woof! Woof!";
    }

    function eat(): void
    {
        echo "Nom nom nom";
    }
}
