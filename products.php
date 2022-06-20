<?php 

    require_once __DIR__ . '/class/products/DogGame.php';
    require_once __DIR__ . '/class/products/DogFood.php';
    require_once __DIR__ . '/class/products/CatGame.php';
    require_once __DIR__ . '/class/products/CatFood.php';

    $products = [];
    $selectedProduct = 0;

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

    $is_user_registered = $_GET['user'];

    if($is_user_registered == 1){
        $user = new RegisteredUser('Ugo', 'De Ughi', 'sonoUGO', '123456789', '19 May 2023' , 'ugodeugi@gmail.com', 'viaSangiovanni' );
    }else{
        $user = new User('John', 'Wolf', '123456789', '19 May 2021', 'johnwolfe@gmail.com', 'via Cesare Cremonini');
    }

?>