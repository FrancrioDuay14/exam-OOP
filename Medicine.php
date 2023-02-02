<?php
    require_once "Product.php";

    class Medicine extends Product{
        private $dose;
        private $type;
        private $expirationDate;
        
        function setDose($dose){
            $this->dose = $dose;
        }

        function setType($type){
            $this->type = $type;
        }

        function setExpirationDate($ExpirationDate){
            $this->expirationDate = $expirationDate;
        }

        function getType(){
            return $this->type;
         }

        function getDose(){
           return $this->dose;
        }

        function getExpirationDate(){
            return $this->expirationDate;
        }

        function computeSRP(){
           return getPrice() * 2;
        }

        
    }




?>