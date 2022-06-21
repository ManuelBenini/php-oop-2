<?php 

    require_once __DIR__ . '/class/products/AnimalGame.php';
    require_once __DIR__ . '/class/products/AnimalFood.php';

    # array contenente tutti i prodotti del sito. Verranno ciclati nella pagina "Shop"
    $products = [];

    # variabile numerica che ci permetterà di capire con precisione quale prodotto è stato selezionato dall'utente
    $selectedProduct = 0;

    # istanze e push dentro l'array dei prodotti
        $cat_food_1 = new AnimalFood('fish', 170, 'Food for cats', 'January', 'July', 992245, 50 );
        $cat_food_1->setDescription('Fish for every cat in the world! Nutritious and...Expensive');
        $products[] = $cat_food_1;

        $dog_food_1 = new AnimalFood('Biscuits', 150, 'Food for dogs', 'January', 'March', 912323, 30);
        $dog_food_1->setDescription('Biscuits for every dog in the world! Nutrients and...Expensive');
        $products[] = $dog_food_1;

        $cat_game_1 = new AnimalGame('Ball', 110, 'Games for cats', 'January', 'December', 'Humour', 'Wood');
        $cat_game_1->setDescription('The "ball", not a simple ball...');
        $products[] = $cat_game_1;

        $dog_game_1 = new AnimalGame('Bone', 210, 'Games for dogs', 'July', 'October', 'Humour', 'Plastic');
        $dog_game_1->setDescription('The ultimate bone!');
        $products[] = $dog_game_1;
    #

?>