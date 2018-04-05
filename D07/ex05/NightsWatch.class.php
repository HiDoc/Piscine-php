<?php
require_once("IFighter.class.php");

class NightsWatch implements IFighter {
  public $fgt;

  public function recruit($var)
  {
    if ($var instanceof IFighter){
      $this->fgt[] = $var;
    }
  }
  public function fight(){
    foreach ($this->fgt as $fighter) {
      $fighter->fight();
    }
  }
}
 ?>
