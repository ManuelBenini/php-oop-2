<?php 

    require_once __DIR__ . '/products.php';

?>


<!DOCTYPE html>
    <?php require_once __DIR__ . '/head.php' ?>
<body>

    <div class="container text-center">
        <h2>Hai selezionato:</h2>
        <h4>Categoria: <?php echo $products[$_GET['product']]->getCategory(); ?></h4>
        <h4>Tipo: <?php echo $products[$_GET['product']]->getType(); ?></h4>
        <h4>Nome: <?php echo $products[$_GET['product']]->getName(); ?></h4>
        <?php if(method_exists($products[$_GET['product']], 'getMaterial')){ echo '<h4>materiale: '. $products[$_GET['product']]->getMaterial() . '</h4>'; }?>
        <h4>Disponibilità: <?php echo $products[$_GET['product']]->getBuyPeriod(); ?></h4>
        <h4>Prezzo: <?php echo $products[$_GET['product']]->getPrice(); ?></h4>

        <br>
        <br>

        <?php if($_GET['user'] == 1){?>
            <h2>L'utente risulta registrato ed ha diritto ad uno sconto del 20&percnt;&#33;</h2>
            <h4>Nome: <?php echo $user->getName(); ?></h4>
            <h4>Cognome: <?php echo $user->getSurname(); ?></h4>
            <h4>Numero carta: <?php echo $user->getCardNumber(); ?></h4>
            <h4>Email: <?php echo $user->getEmail(); ?></h4>
            <h4>Indirizzo: <?php echo $user->getAddress(); ?></h4>
            <h4 class="mt-3">Scadenza carta: <?php echo $user->getCardExpiration(); ?></h4>
            <?php if(strtotime($user->getCardExpiration()) > strtotime('now')){ ?>
                <h5>La carta non è scaduta, può continuare con l'acquisto</h5>
            <?php }else{ ?>
                <h5>La carta è scaduta e non può continuare con l'acquisto</h5>
            <?php }; ?>
            <h2>La spesa totale sar&agrave; di: <?php echo $products[$_GET['product']]->getPrice() -  ($products[$_GET['product']]->getPrice() * 20 / 100) ?></h2>
        <?php } else{ ?>
            <h2>l'utente non &egrave; registrato, quindi non ricever&agrave; lo sconto del 20&percnt;.</h2>
            <h4>Nome: <?php echo $user->getName(); ?></h4>
            <h4>Cognome: <?php echo $user->getSurname(); ?></h4>
            <h4>Numero carta: <?php echo $user->getCardNumber(); ?></h4>
            <h4>Email: <?php echo $user->getEmail(); ?></h4>
            <h4>Indirizzo: <?php echo $user->getAddress(); ?></h4>
            <h4>Scadenza carta: <?php echo $user->getCardExpiration(); ?></h4>
            <?php if(strtotime($user->getCardExpiration()) > strtotime('now')){ ?>
                <h5>La carta non è scaduta, può continuare con l'acquisto</h5>
            <?php }else{ ?>
                <h5>La carta è scaduta e non può continuare con l'acquisto</h5>
            <?php }; ?>
            <h3>La spesa totale sar&agrave; di: <?php echo $products[$_GET['product']]->getPrice()?></h3>
        <?php } ?>
        
    </div>
    
</body>
</html>