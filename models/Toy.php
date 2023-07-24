<?php
require_once __DIR__ . './Product.php';

// Create child class from Product
class Toy extends Product
{
    // Class properties
    public $material;
    public $size;
    public $color;

    // Class construct
    function __construct($name, $price, $weight, $brand, $type, $animal, $id, $material, $size, $color)
    {
        // Inherit from parent
        parent::__construct($name, $price, $weight, $brand, $type, $animal, $id);

        // New child proprerties
        $this->material = $material;
        $this->size = $size;
        $this->color = $color;
    }
}

// TEST
$osso = new Toy('Osso per cani', 20, 12, 'purina', 'Gioco', 'dog', 234234234, 'plastic', 14, 'red');

var_dump($osso);
