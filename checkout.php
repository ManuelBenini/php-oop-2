<?php 

    require_once __DIR__ . '/products.php';

    # entro nell'array e seleziono l'elemento scelto dall'utente tramite passaggio GET
    $selected_product = $products[$_GET['product']];

    require_once __DIR__ . '/customer.php';
?>


<!DOCTYPE html>

    <?php require_once __DIR__ . '/head.php' ?>

    <link rel="stylesheet" href="./css/checkout/main.css">

    <title>Dogg-E Checkout Page</title>

<body>

    <?php require_once __DIR__ . '/header.php' ?>

    <main>

        <div class="container text-center mt-4">
    
            <!-- Stampo informazioni sul prodotto acquistato -->
            <h2 class="pb-3">You are buying:</h2>
    
            <h4>Name: <?php echo $selected_product->getName(); ?></h4>
            <h4>Category: <?php echo $selected_product->getCategory(); ?></h4>

            <!-- controllo se esiste Weight dentro la classe e lo stampo, stessa cosa per Material -->
            <?php if(method_exists($selected_product, 'getWeight')){ echo '<h4>Weight: '. $selected_product->getWeight() . 'kg</h4>'; }?>
            <?php if(method_exists($selected_product, 'getMaterial')){ echo '<h4>Material: '. $selected_product->getMaterial() . '</h4>'; }?>

            <h4>Disponibility:</h4>
    
            <ul>
                <li>from <?php echo $selected_product->getBuyPeriodFrom(); ?></li>
                <li>to <?php echo $selected_product->getBuyPeriodTo(); ?></li>
            </ul>
    
            <!-- Stampo la descrizione solo se esiste, è possibile non inserirla non essendo obbligatoria -->
            <?php if($product->getDescription()): ?>
            <h4>description: <?php echo $selected_product->getDescription(); ?></h4>
            <?php endif; ?>

            <h4>Price: <?php echo $selected_product->getPrice(); ?>&dollar;</h4>

    
            <!-- Stampo informazioni dell'utente -->
            <h2 class="pt-5 pb-3"><?php echo $user->getDiscountDescription() ?></h2>
    
            <h4>Name: <?php echo $user->getName(); ?></h4>
            <h4>Surname: <?php echo $user->getSurname(); ?></h4>
            <h4>Card number: <?php echo $user->getCardNumber(); ?></h4>
            <h4>Email: <?php echo $user->getEmail(); ?></h4>
            <h4>Address: <?php echo $user->getFullAddress(); ?></h4>
            <h4 class="mt-3">Card expiration date: <?php echo $user->getFullCardExpirationDate(); ?></h4>
            <h4><?php echo $user->getCardStatus(); ?></h4>
    
            <!-- Calcolo lo sconto, applico il 20% se l'utente è registrato, altrimenti lascio il costo totale invariato -->
            <h2>The total expense will be of 
                <?php echo 
                    $products[$_GET['product']]->getPrice() - ($products[$_GET['product']]->getPrice() * $user->getDiscountAmount() / 100)
                ?>&euro;
            </h2>
    
        </div>
    </main>

    <?php require_once __DIR__ . '/footer.php' ?>
    
</body>
</html>