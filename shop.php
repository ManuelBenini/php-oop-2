<?php

    require_once __DIR__ . '/products.php';

?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once __DIR__ . '/head.php' ?>
    <link rel="stylesheet" href="./css/shop/main.css">
    <title>Dogg-E Shop</title>
</head>
<body>
    <?php require_once __DIR__ . '/header.php' ?>

    <div class="container d-flex justify-content-between">
        <?php foreach($products as $product): ?>
            <div class="card mb-card d-flex flex-column justify-content-between mt-5">
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
                    <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-oop-2/checkout.php?user=<?php echo $_GET['user'] ?>&product=<?php echo $selectedProduct; $selectedProduct++?>">Go to purchase</a>

                <?php }else{ ?>
                    <span>Not available</span>
                <?php } ?>

            </div>
        <?php endforeach; ?>
    </div>
    <?php require_once __DIR__ . '/footer.php' ?>
</body>
</html>