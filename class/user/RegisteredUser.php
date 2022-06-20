<?php

    require_once __DIR__ . '/User.php';

    class RegisteredUser extends User{
        private $name;
        private $surname;
        private $card_number;
        private $card_expiration;
        private $discount = 20;

        public function __construct($_name, $_surname, $_card_number, $_card_expiration){

            parent::__construct($_name, $_surname, $_card_number, $_card_expiration);

        }

        # setter

        #
        
        # getter
            public function getDiscount(){
                return $this->discount;
            }
        #
    }

?>