<?php

    require_once __DIR__ . '/../trait/Address.php';
    require_once __DIR__ . '/CreditCard.php';

    class User{
        private $name;
        private $surname;
        private $card_number;
        private $email;
        private $discount_amount;
        private $discount_description;
        private $password;
        private $is_registered;
        private $card;
        private $card_status = 'Valid credit card';
        use Address;

        public function __construct($_name, $_surname, $_card_number, $_email, $_is_registered){
            $this->name = $_name;
            $this->surname = $_surname;
            $this->card_number = $_card_number;
            $this->email = $_email;
            $this->is_registered = $_is_registered;
            $this->discountCheck();
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
            public function setEmail($_email){
                $this->email = $_email;
            }
            public function setDiscountAmount($_discount_amount){
                $this->discount_amount = $_discount_amount;
            }
            public function setDiscountDescription($_discount_description){
                $this->discount_description = $_discount_description;
            }
            public function setPassword($_password){
                $this->password = $_password;
            }
            public function setCreditCard($_number,$_name, $_expired_date_y, $_expired_date_m, $_cvv){

                try{
                  $this->card = new CreditCard($_number,$_name, $_expired_date_y, $_expired_date_m, $_cvv);
                }catch (Exception $e){
                  $this->card_status = $e->getMessage();
                }
          
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
            public function getEmail(){
                return $this->email;
            }
            public function getDiscountAmount(){
                return $this->discount_amount;
            }
            public function getDiscountDescription(){
                return $this->discount_description;
            }
            public function getIsRegistered(){
                return $this->is_registered;
            }
            public function getCardStatus(){
                return $this->card_status;
            }
            public function getFullCardExpirationDate(){
                return $this->card->getExpDateM() . ' / ' . $this->card->getExpDateY();
            }
        #

        private function discountCheck(){
            if($this->is_registered){
                $this->discount_amount = 20;
                $this->discount_description = 'The user is registered and is entitled to a discount of 20&percnt;&#33;';
            }else{
                $this->discount_amount = 0;
                $this->discount_description = 'the user is not registered, therefore will not receive the discount of 20&percnt;.';
            }
        }
    }

?>