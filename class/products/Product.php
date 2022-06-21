<?php 

    class Product{
        private $name;
        private $price;
        private $category;
        private $buy_period_from;
        private $buy_period_to;
        private $description;
        private $code;
        private $disponibility_status = 0;

        public function __construct($_name, $_price, $_category, $_buy_period_from, $_buy_period_to, $_code){
            $this->name = $_name;
            $this->price = $_price;
            $this->category = $_category;
            $this->buy_period_from = $_buy_period_from;
            $this->buy_period_to = $_buy_period_to;
            $this->code = $_code;
            $this->disponibilityCheck();
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
            public function setDescription($_description){
                $this->description = $_description;
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
            public function getDescription(){
                return $this->description;
            }
            public function getDisponibilityStatus(){
                return $this->disponibility_status;
            }
        #

        private function disponibilityCheck(){
            # confronto i mesi del prodotto con i mesi attuali per sapere se è disponibile o no
            
            if(strtotime($this->buy_period_from) < strtotime('now') AND strtotime($this->buy_period_to) > strtotime('now')){
                $this->disponibility_status = 1;
            }
        }
    };

?>