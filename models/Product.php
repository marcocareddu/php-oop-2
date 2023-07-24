<?php

// Create general product class
class Product
{
    // Class properties
    protected $name;
    protected $price;
    protected $brand;
    protected $type;
    protected $animal;

    // Class construct
    function __construct($name, $price, $brand, $type, $animal)
    {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->type = $type;
        $this->animal = $animal;
    }

    // Class Methods
    function setAnimal($type)
    {
        $animals = ['cat', 'dog', 'bird', 'fish'];
        if (!in_array($type, $animals)) return;
        else {
            $this->animal = $type;
        }
    }
}
