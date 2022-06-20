<?php

    class User{
        private $name;
        private $surname;
        private $card_number;
        private $card_expiration;

        public function __construct($_name, $_surname, $_card_number, $_card_expiration){
            $this->name = $_name;
            $this->surname = $_surname;
            $this->card_number = $_card_number;
            $this->card_expiration = $_card_expiration;
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
    #
    }

?>