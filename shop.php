<?php

    require_once __DIR__ . '/products.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogg-E Shop</title>
</head>
<body>
    <div class="container">
        <?php foreach($products as $product): ?>
            <div class="mb-card">
                <h4>categoria: <?php echo $product->getCategory(); ?></h4>
                <h4>tipo: <?php echo $product->getType(); ?></h4>
                <h4>nome: <?php echo $product->getName(); ?></h4>
                <?php if(method_exists($product, 'getMaterial')){ echo '<h4>materiale: '. $product->getMaterial() . '</h4>'; }?>
                <h4>disponibilità: <?php echo $product->getBuyPeriod(); ?></h4>
                <h4>prezzo: <?php echo $product->getPrice(); ?></h4>
                <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-oop-2/checkout.php?user=<?php echo $_GET['user'] ?>&product=<?php echo $selectedProduct; $selectedProduct++?>">Vai all'acquisto</a>

            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>