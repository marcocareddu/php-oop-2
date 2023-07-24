<?php
require_once __DIR__ . './Product.php';

// Create child class from Product
class Food extends Product
{
    // Class properties
    public $weight;
    public $price_x_kg;
    public $ingredients;


    // Class construct
    function __construct($name, $price, $brand, $type, $animal, $id, $weight, $price_x_kg, $ingredients)
    {
        // Inherit from parent
        parent::__construct($name, $price, $brand, $type, $animal, $id);

        // New child proprerties
        $this->weight = $weight;
        $this->price_x_kg = $price_x_kg;
        $this->ingredients = $ingredients;
    }
}




// TEST
$crocchette = new Food('crocchette per cani', 20, 'purina', 'Cibo', 'dog', 234234234, 12, 3, 'Riso (40%), proteine di pollo trasformate (17%), pesce fresco (15%), piselli, patate
(8%), polpe di barbabietola essiccate, grasso di pollo, farina di pesce, semi di
lino (2%), proteine di fegato idrolizzate, lievito, farina di alghe marine (0,15%),
prodotti del lievito (MOS mannano-oligosaccaridi 0,1%), cloruro di sodio, prodotti
ottenuti dalla trasformazione di vegetali (radice di tarassaco in polvere
Taraxacum officinale W. 0,02%, gambo ananas disidratato  Ananas comusus
0,02%), semi di cardo mariano (Silybum marianum L.) (0,02%), yucca schidigera (0,016%),
glucosamina (0,004%), solfato di condroitina (0,002%)');

var_dump($crocchette);
