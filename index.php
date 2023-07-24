<?php
// Import Classes
include __DIR__ . './models/Product.php';
include __DIR__ . './models/Food.php';
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
                <?= $crocchette->name ?>
            </div>
        </div>
    </div>
</body>

</html>