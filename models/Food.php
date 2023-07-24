<?php
require_once __DIR__ . './Product.php';

// Create child class from Product
class Food extends Product
{
    // Class properties
    public $price_x_kg;
    public $ingredients;

    // Class construct
    function __construct($name, $price, $weight, $brand, $type, $animal, $id, $price_x_kg, $ingredients)
    {
        // Inherit from parent
        parent::__construct($name, $price, $weight, $brand, $type, $animal, $id);

        // New child proprerties
        $this->price_x_kg = $price_x_kg;
        $this->ingredients = $ingredients;
    }
}




// TEST
$crocchette = new Food('crocchette per cani', 20, 12, 'purina', 'Cibo', 'dog', 234234234, 3, 'sdsdfsdfsdf');

var_dump($crocchette);
