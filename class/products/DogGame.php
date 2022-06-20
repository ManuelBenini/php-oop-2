<?php

    require_once __DIR__ . '/Product.php';

    class DogGame extends Product{
        private $name;
        private $price;
        private $category;
        private $buy_period;
        private $type;
        private $material;

        public function __construct($_name, $_price, $_category, $_buy_period, $_type){

            parent::__construct($_name, $_price, $_category, $_buy_period);

            $this->type = $_type;
        }

        # setter
            public function setType($_type){
                $this->type = $_type;
            }

            public function setMaterial($_material){
                $this->material = $_material;
            }
        #
        
        # getter
            public function getType(){
                return $this->type;
            }

            public function getMaterial(){
                return $this->material;
            }
        #
    }

?>