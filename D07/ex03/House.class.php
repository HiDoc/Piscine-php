<?php
abstract class House {
	abstract function getHouseName();
	abstract function getHouseMotto();
	abstract public function getHouseSeat();

  public function introduce(){
    print ("House " . $this->getHouseName() . " of " . $this->getHouseSeat() .
    ' : "' . $this->getHouseMotto() . '"' . "\n");
  }
}
 ?>
