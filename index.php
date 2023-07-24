<?php
// Import Classes
require_once __DIR__ . './data/db.php';
?>



<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<!-- Include Head -->
<?php include __DIR__ . './includes/head.inc'; ?>

<body>
    <div class="container d-flex justify-content-center">
        <div class="mt-3">

            <h1>Boolshop</h1>
            <div class="pt-3">

                <!-- Foreach Here -->
                <?php foreach ($all_products as $product) : ?>

                    <div class="card">
                        <div class=" card-body">
                            <h5 class="card-title"><?= $product->name ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $product->price ?>€</h6>
                            <p class="card-text">Marca: <?= $product->brand ?></p>
                        </div>
                    </div>

                <?php endforeach ?>


            </div>
        </div>
    </div>
</body>

</html>