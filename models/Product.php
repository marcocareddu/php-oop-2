<?php

// Create general product class
class Product
{
    // Class properties !Public for testing
    public $name;
    public $price;
    public $brand;
    public $type;
    public $animal;

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
        if (!in_array($animal, $animals)) return;
        $this->animal = $animal;
    }
}

// Test
$shampoo = new Product('shampoo per cani', 20, 'purina', 'Pulizia', 'dog');
