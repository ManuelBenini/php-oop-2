<!DOCTYPE html>
    <?php require_once __DIR__ . '/head.php' ?>

    <link rel="stylesheet" href="css/home/style.css">

    <title>Home - Dogg-E Shop</title>
</head>
<body>

    <?php require_once __DIR__ . '/header.php' ?>

    <main>
        <div class="container text-center pt-5">
    
            <h2>Effettuare acquisti come:</h2>
    
            <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-oop-2/shop.php?user=1" class="me-5">Utente registrato</a>
            <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-oop-2/shop.php?user=0">Visitatore</a>
            
        </div>

    </main>

    <?php require_once __DIR__ . '/footer.php' ?>

</body>
</html>