<?php

    require_once __DIR__ . '/products.php';

    require_once __DIR__ . '/customer.php';

?>

<!DOCTYPE html>
<html lang="en">

    <?php require_once __DIR__ . '/head.php' ?>

    <link rel="stylesheet" href="./css/shop/main.css">
    
    <title>Dogg-E Shop</title>

</head>
<body>

    <?php require_once __DIR__ . '/header.php' ?>

    <main>

        <div class="container d-flex justify-content-between">
    
            <?php foreach($products as $product): ?>
    
                <div class="card mb-card d-flex flex-column justify-content-between mt-5">
    
                    <!-- Stampo le caratteristiche di ogni prodotto -->
                    <h4>Name: <?php echo $product->getName(); ?></h4>
                    <h4>Category: <?php echo $product->getCategory(); ?></h4>

                    <!-- controllo se esiste Weight dentro la classe e lo stampo, stessa cosa per Material -->
                    <?php if(method_exists($product, 'getWeight')){ echo '<h4>Weight: '. $product->getWeight() . 'kg</h4>'; }?>
                    <?php if(method_exists($product, 'getMaterial')){ echo '<h4>Material: '. $product->getMaterial() . '</h4>'; }?>
    
                    <h4>Disponibility:</h4>
                    <ul>
                        <li>from <?php echo $product->getBuyPeriodFrom(); ?></li>
                        <li>to <?php echo $product->getBuyPeriodTo(); ?></li>
                    </ul>
    
                    <!-- Stampo la descrizione solo se esiste, è possibile non inserirla non essendo obbligatoria -->
                    <?php if($product->getDescription()): ?>
                    <h4>description: <?php echo $product->getDescription(); ?></h4>
                    <?php endif; ?>

                    <h4>Price: <?php echo $product->getPrice(); ?>&dollar;</h4>
    
                    <!-- Controllo se il prodotto è disponibile-->
                    <?php
                        if($product->getDisponibilityStatus()){ ?>
    
                        <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-oop-2/checkout.php?user=<?php echo $_GET['user'] ?>&product=<?php echo $selectedProduct; $selectedProduct++?>">Go to purchase</a>
    
                    <?php }else{ ?>

                        <span>Product not available</span>
                    <?php } ?>
    
                </div>
            <?php endforeach; ?>
    
        </div>
    </main>

    <?php require_once __DIR__ . '/footer.php' ?>

</body>
</html>