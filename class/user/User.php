<?php

    class User{
        private $name;
        private $surname;
        private $card_number;
        private $card_expiration;
        private $email;
        private $address;

        public function __construct($_name, $_surname, $_card_number, $_card_expiration, $_email, $_address){
            $this->name = $_name;
            $this->surname = $_surname;
            $this->card_number = $_card_number;
            $this->card_expiration = $_card_expiration;
            $this->email = $_email;
            $this->address = $_address;
        }

        # setter
            public function setName($_name){
                $this->name = $_name;
            }
            public function setSurname($_surname){
                $this->surname = $_surname;
            }
            public function setCardNumber($_card_number){
                $this->card_number = $_card_number;
            }
            public function setCardExpiration($_card_expiration){
                $this->card_expiration = $_card_expiration;
            }
            public function setEmail($_email){
                $this->email = $_email;
            }
            public function setAddress($_address){
                $this->address = $_address;
            }
        #

        # getter
            public function getName(){
                return $this->name;
            }
            public function getSurname(){
                return $this->surname;
            }
            public function getCardNumber(){
                return $this->card_number;
            }
            public function getCardExpiration(){
                return $this->card_expiration;
            }
            public function getEmail(){
                return $this->email;
            }
            public function getAddress(){
                return $this->address;
            }
        #
    }

?>