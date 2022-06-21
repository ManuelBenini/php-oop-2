<?php

trait Address{
  private $street;
  public $street_number;
  public $city;
  public $state;
  public $postal_code;

  // getter e setter...

  public function setAddress($_street, $street_number, $city, $postal_code , $state){
    $this->street = $_street;
    $this->street_number = $street_number;
    $this->city = $city;
    $this->postal_code = $state;
    $this->state = $postal_code;
  }

  public function getFullAddress(){
    return $this->street . ' ' . $this->street_number . ' ' . $this->city . ' ' . $this->postal_code . ' ' . $this->state;
  }

  public function getStreet(){
    return $this->street;
  }
}

?>