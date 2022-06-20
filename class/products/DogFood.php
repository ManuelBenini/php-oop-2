<?php

    require_once __DIR__ . '/Product.php';

    class DogFood extends Product{
        private $name;
        private $price;
        private $category;
        private $buy_period_from;
        private $buy_period_to;
        private $type;

        public function __construct($_name, $_price, $_category, $_buy_period_from, $_buy_period_to, $_type){

            parent::__construct($_name, $_price, $_category, $_buy_period_from, $_buy_period_to);

            $this->type = $_type;
        }

        # setter
            public function setType($_type){
                $this->type = $_type;
            }

        #
        
        # getter
            public function getType(){
                return $this->type;
            }

        #
    }

?>