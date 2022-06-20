<?php 

    require_once __DIR__ . '/products.php';

?>


<!DOCTYPE html>
    <?php require_once __DIR__ . '/head.php' ?>
<body>

    <div class="container text-center">
        <h2>You are buying:</h2>
        <h4>Category: <?php echo $products[$_GET['product']]->getCategory(); ?></h4>
        <h4>Type: <?php echo $products[$_GET['product']]->getType(); ?></h4>
        <h4>Name: <?php echo $products[$_GET['product']]->getName(); ?></h4>
        <?php if(method_exists($products[$_GET['product']], 'getMaterial')){ echo '<h4>Material: '. $products[$_GET['product']]->getMaterial() . '</h4>'; }?>
        <h4>Disponibility:</h4>
        <ul>
            <li>from <?php echo $products[$_GET['product']]->getBuyPeriodFrom(); ?></li>
            <li>to <?php echo $products[$_GET['product']]->getBuyPeriodTo(); ?></li>
        </ul>
        <h4>Price: <?php echo $products[$_GET['product']]->getPrice(); ?></h4>

        <br>
        <br>

        <?php if($_GET['user'] == 1){?>
            <h2>The user is registered and is entitled to a discount of 20&percnt;&#33;</h2>
        <?php }else{ $user->setDiscount(0)?>
            <h2>the user is not; registered, therefore will not receive; discount of 20&percnt;.</h2>
        <?php } ?>
        <h4>Name: <?php echo $user->getName(); ?></h4>
        <h4>Surname: <?php echo $user->getSurname(); ?></h4>
        <h4>Card number: <?php echo $user->getCardNumber(); ?></h4>
        <h4>Email: <?php echo $user->getEmail(); ?></h4>
        <h4>Address: <?php echo $user->getAddress(); ?></h4>
        <h4 class="mt-3">Card expiration date: <?php echo $user->getCardExpiration(); ?></h4>
        <?php if(strtotime($user->getCardExpiration()) > strtotime('now')){ ?>
            <h5>The card has not expired, you can continue with the purchase</h5>
        <?php }else{ ?>
            <h5>The card has expired and cannot continue with the purchase</h5>
        <?php }; ?>
        <h2>The total expense will be of <?php echo $products[$_GET['product']]->getPrice() - ($products[$_GET['product']]->getPrice() * $user->getDiscount() / 100) ?>&euro;</h2>
    </div>
    
</body>
</html>