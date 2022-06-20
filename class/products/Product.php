<?php 

    class Product{
        private $name;
        private $price;
        private $category;
        private $buy_period;

        public function __construct($_name, $_price, $_category, $_buy_period){
            $this->name = $_name;
            $this->price = $_price;
            $this->category = $_category;
            $this->buy_period = $_buy_period;
        }

        # setter
            public function setName($_name){
                $this->name = $_name;
            }
            public function setPrice($_price){
                $this->price = $_price;
            }
            public function setCategory($_category){
                $this->category = $_category;
            }
            public function setBuyPeriod($_buy_period){
                $this->buy_period = $_buy_period;
            }
        #

        # getter
            public function getName(){
                return $this->name;
            }
            public function getPrice(){
                return $this->price;
            }
            public function getCategory(){
                return $this->category;
            }
            public function getBuyPeriod(){
                return $this->buy_period;
            }
        #
    };

?>