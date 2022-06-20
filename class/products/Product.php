<?php 

    class Product{
        private $name;
        private $price;
        private $category;
        private $buy_period_from;
        private $buy_period_to;

        public function __construct($_name, $_price, $_category, $_buy_period_from, $_buy_period_to){
            $this->name = $_name;
            $this->price = $_price;
            $this->category = $_category;
            $this->buy_period_from = $_buy_period_from;
            $this->buy_period_to = $_buy_period_to;
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
            public function setBuyPeriodFrom($_buy_period_from){
                $this->buy_period = $_buy_period_from;
            }
            public function setBuyPeriodTo($_buy_period_to){
                $this->buy_period = $_buy_period_to;
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
            public function getBuyPeriodFrom(){
                return $this->buy_period_from;
            }
            public function getBuyPeriodTo(){
                return $this->buy_period_to;
            }
        #
    };

?>