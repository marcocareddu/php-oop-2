<?php

// Create general product class
class Product
{
    // Class properties
    private $name;
    private $price;
    private $brand;
    private $type;
    private $animal;

    // Class construct
    function __construct($name, $price, $brand, $type, $animal)
    {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->type = $type;
        $this->setAnimal($animal);
    }

    // Class Methods
    function setAnimal($animal)
    {
        $animals = ['cat', 'dog', 'bird', 'fish'];
        if (!in_array($this->animal, $animals)) return;
        $this->animal = $animal;
    }
}
