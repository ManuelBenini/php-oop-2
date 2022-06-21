<?php

    require_once __DIR__ . '/Product.php';

    class AnimalGame extends Product{
        private $material;

        public function __construct($_name, $_price, $_category, $_buy_period_from, $_buy_period_to, $_code, $_material){

            parent::__construct($_name, $_price, $_category, $_buy_period_from, $_buy_period_to, $_code);

            $this->material = $_material;
        }

        # setter
            public function setMaterial($_material){
                $this->material = $_material;
            }
        #
        
        # getter
            public function getMaterial(){
                return $this->material;
            }
        #
    }

?>