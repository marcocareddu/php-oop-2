<?php
include __DIR__ . '../../models/Product.php';
include __DIR__ . '../../models/Food.php';
include __DIR__ . '../../models/Toy.php';

$osso = new Toy('Extreme Goodie Bone', 11.44, 1, 'KONG ', 'Gioco', 'dog', 34543567, 'Gomma', 0.20, 'black');
$crocchette = new Food('Crocchette per cani', 48.90, 12, 'Monge', 'Cibo', 'dog', 234234234, 3, 'Pesce (salmone disidratato 26%, fresco 10%), riso (15%), polpa di barbabietola essiccata, lievito di birra, olio di pesce (olio di salmone), proteine animali idrolizzate (fegato), sostanze minerali, prodotti del lievito (mannano oligo saccaridi MOS 1%), xilo-oligosaccaride (XOS 0,3%), yucca schidigera (0,3%), farina di alghe (spirulina - Arthrospira platensis 0,3%), prodotti ottenuti dalla trasformazione di vegetali (radice di Echinacea purpurea 0,2%, Origanum Vulgare 0,1%), aglio essiccato (0,2%), glucosamina (0,057%), solfato di condroitina (0,04%)');
$umido = new Food('Le Ghiottonerie', 29.99, 3, 'Felix', 'Cibo', 'cat', 345678345, 4, 'Carni e derivati* (14%, di cui manzo 4%), Estratti di proteine vegetali, Pesci e sottoprodotti dei pesci, Sostanze minerali, Zuccheri.*bocconcini: 44% Carni e derivati.');

$all_products = [$osso, $crocchette, $umido];
