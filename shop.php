<?php

    require_once __DIR__ . '/class/products/DogGame.php';
    require_once __DIR__ . '/class/products/DogFood.php';
    require_once __DIR__ . '/class/products/CatGame.php';
    require_once __DIR__ . '/class/products/CatFood.php';

    $products = [];

    $cat_game_1 = new CatGame('palla', 150, 'gioco per gatti', 'gennaio-dicembre', 'umore', 'legno');
    $products[] = $cat_game_1;

    $cat_food_1 = new CatFood('tonno', 150, 'cibo per gatti', 'luglio-ottobre', 'cibo' );
    $products[] = $cat_food_1;

    $dog_game_1 = new DogGame('palla', 210, 'gioco per cani', 'gennaio-dicembre', 'umore', 'plastica');
    $products[] = $dog_game_1;

    $dog_food_1 = new DogFood('biscottini', 150, 'cibo per cani', 'gennaio-marzo', 'cibo');
    $products[] = $dog_food_1;

    require_once __DIR__ . '/class/user/User.php';
    require_once __DIR__ . '/class/user/RegisteredUser.php';

    $is_user_registered = empty($_GET['user']) ? 0 : $_GET['user'];

    if($is_user_registered === 1){
        $user = new RegisteredUser('Ugo', 'De Ughi', '123456789', '19/05/2023');
    }else{
        $user = new User('Ugo', 'De Ughi', '123456789', '19/05/2023');
    }

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
                <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-oop-2/checkout.php">Vai all'acquisto</a>

            </div>
        <?php endforeach; ?>
    </div>
    <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-oop-2/checkout.php">Prosegui all'acquisto!</a>
</body>
</html>