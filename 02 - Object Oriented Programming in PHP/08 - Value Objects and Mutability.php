<?php

// Avoids primitive obsession - and readability
// Helps with consistency
// Immutable

class Age
{
    private $age;

    public function __construct($age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('That makes no sense');
        }

        $this->age = $age;
    }

    public function increment()
    {
        return new self($this->age + 1);
    }

    public function get()
    {
        return $this->age;
    }
}

$age = new Age(35);
$newAge = $age->increment();
var_dump($newAge->get());

//function register(string $name, Age $age)
//{
//
//}
//
//$age = new Age(35);
//
//register('John Doe', $age);