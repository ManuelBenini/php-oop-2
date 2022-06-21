<?php

    require_once __DIR__ . '/Product.php';

    class AnimalFood extends Product{
        private $weight;

        public function __construct($_name, $_price, $_category, $_buy_period_from, $_buy_period_to, $_code, $_weight){

            parent::__construct($_name, $_price, $_category, $_buy_period_from, $_buy_period_to, $_code);

            $this->weight = $_weight;
        }

        # setter
            public function setWeigth($_weight){
                $this->weight = $_weight;
            }
        #
        
        # getter
            public function getWeight(){
                return $this->weight;
            }
        #
    }

?>