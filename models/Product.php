<?php

// Create general product class
class Product
{
    // Class properties !Public for testing
    public $name;
    public $price;
    public $weight;
    public $brand;
    public $type;
    public $animal;
    public $id;

    // Class construct
    function __construct($name, $price, $weight, $brand, $type, $animal, $id)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->brand = $brand;
        $this->type = $type;
        $this->setAnimal($animal);
        $this->id = $id;
    }

    // Class Methods
    function setAnimal($animal)
    {
        $animals = ['cat', 'dog', 'bird', 'fish'];
        if (!in_array($animal, $animals)) return;
        $this->animal = $animal;
    }
}
