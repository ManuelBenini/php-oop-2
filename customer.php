<?php 

    require_once __DIR__ . '/class/user/User.php';

    # Creo un nuovo utente ed aggiungo l'indirizzo e le informazioni della carta di credito
    $user = new User('John', 'Wolf', '123456789', '19 May 2025', 'johnwolfe@gmail.com', $_GET['user']);
    $user->setAddress('Via Cesare Cremonini', 15 , 'Palermo' , 90011 , 'Italy');
    $user->setCreditCard('1234546895147536','john Wolf', 2023 , 6 , '235');

    # se l'utente è registrato, viene anche inserita una password (ed anche cambiato il valore della proprietà "Discount" all'interno della classe)
    if($user->getIsRegistered()){
        $user->setPassword(12345);
    }

?>