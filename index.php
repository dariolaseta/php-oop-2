<?php 
include_once __DIR__ . "/classes/animalFood.php";
include_once __DIR__ . "/classes/animalToys.php";

$productArray = [];

$croccantini = new AnimalFood("Croccantini");
$croccantini-> price("5€");
$croccantini->category("Gatto");
$croccantini->image("croccantini.png");
array_push($productArray, $croccantini);

$bone = new AnimalToys("Osso");
$bone-> price("2€");
$bone-> category("Cane");
$bone-> image("bone-img.jpg");
array_push($productArray, $bone);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style/style.css">
        <title>PHP oop 2</title>
    </head>
    <body>
        <div class="container">
            <div class="box">
                <?php 
                    foreach ($productArray as $key => $product){
                    ?>
                        <div>
                            <p><?php echo $key ?></p>

                            <?php
                            foreach ($product as $key => $info){
                            ?>
                                <p><?php echo $info ?></p>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                ?>
            </div>
        </div>
    </body>
</html>