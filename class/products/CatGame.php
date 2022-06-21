<?php

    require_once __DIR__ . '/Product.php';

    class CatGame extends Product{
        private $type;
        private $material;

        public function __construct($_name, $_price, $_category, $_buy_period_from, $_buy_period_to, $_type, $_material){

            parent::__construct($_name, $_price, $_category, $_buy_period_from, $_buy_period_to);

            $this->type = $_type;
            $this->material = $_material;
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