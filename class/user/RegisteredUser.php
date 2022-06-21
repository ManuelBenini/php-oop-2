<?php

    require_once __DIR__ . '/User.php';

    class RegisteredUser extends User{
        private $password;

        public function __construct($_name, $_surname, $_password, $_card_number, $_card_expiration, $_email, $_address){

            parent::__construct($_name, $_surname, $_card_number, $_card_expiration, $_email, $_address);

            $this->password = $_password;
        }

        # setter
            public function setPassword($_password){
                $this->password = $_password;
            }
        #
        
        # getter
            public function getDiscount(){
                return $this->discount;
            }

            public function getPassword(){
                return $this->password;
            }
        #
    }

?>