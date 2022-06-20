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
                <h4>Category: <?php echo $product->getCategory(); ?></h4>
                <h4>Type: <?php echo $product->getType(); ?></h4>
                <h4>Name: <?php echo $product->getName(); ?></h4>
                <?php if(method_exists($product, 'getMaterial')){ echo '<h4>Material: '. $product->getMaterial() . '</h4>'; }?>
                <h4>Disponibility:</h4>
                <ul>
                    <li>from <?php echo $product->getBuyPeriodFrom(); ?></li>
                    <li>to <?php echo $product->getBuyPeriodTo(); ?></li>
                </ul>
                <h4>Price: <?php echo $product->getPrice(); ?></h4>
                <?php if(strtotime($product->getBuyPeriodFrom()) < strtotime('now') AND strtotime($product->getBuyPeriodTo()) > strtotime('now')){ ?>
                    <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-oop-2/checkout.php?user=<?php echo $_GET['user'] ?>&product=<?php echo $selectedProduct; $selectedProduct++?>">Vai all'acquisto</a>

                <?php }else{ ?>
                    <span>Non disponibile</span>
                <?php } ?>

            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>