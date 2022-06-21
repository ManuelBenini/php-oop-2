<?php


class CreditCard{

  // tutti i date della carta devono essere validi quindi sono tutti privati perché verranno impostanti dai setter
  private $number;
  private $name;
  private $cvv;
  private $expired_date_y;
  private $expired_date_m;

  public function __construct($_number,$_name, $_expired_date_y, $_expired_date_m, $_cvv){

    $this->number = $this->checkValidNumber($_number);
    $this->name = $_name;
    $this->cvv = $this->checkValidCvv($_cvv);
    $this->checkValidExpiredDate($_expired_date_y, $_expired_date_m);
    $this->expired_date_y = $_expired_date_y;
    $this->expired_date_m = $_expired_date_m;

  }

  private function checkValidNumber($number){
    // controllo se la stringa contiene solo numeri
    if(!preg_match("/^[0-9]+$/", $number) || strlen($number) != 16 ){
      throw new Exception('Numero carta di credito non valido');
    }
    // se il numero è valido lo restituisco
    return $number;
  }

  private function checkValidCvv($cvv){
    // controllo se la stringa contiene solo numeri
    if(!preg_match("/^[0-9]+$/", $cvv) || strlen($cvv) != 3 ){
      throw new Exception('Numero CVV non valido');
    }
    // se il numero è valido lo restituisco
    return $cvv;
  }

  private function checkValidExpiredDate($_expired_date_y, $_expired_date_m){

    // verifico che oggi sia inferiore al primo giorno del mese successivo al mese/anno della scadenza della carta
    $today_y = date("Y");
    $today_m = date("n");

    # var_dump($today_y);
    # var_dump($today_m);

    $valid_date = true;

    if($today_y > $_expired_date_y)
    {
      $valid_date = false;
    }

    if($today_y == $_expired_date_y){

      if($today_m > $_expired_date_m){
        $valid_date = false;
      }
    }

    if(!$valid_date ){
      throw new Exception('Credit card has expired');
    }

  }

  # getter
    public function getNumber(){
      return $this->number;
    }
    public function getName(){
      return $this->name;
    }
    public function getCvv(){
      return $this->cvv;
    }
    public function getExpDateY(){
      return $this->expired_date_y;
    }
    public function getExpDateM(){
      return $this->expired_date_m;
    }
  #


}