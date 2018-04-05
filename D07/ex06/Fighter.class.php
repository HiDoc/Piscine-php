<?php
abstract class Fighter {
  public $type;

  public function __construct($typename){
    $this->type = $typename;
  }
  abstract public function fight($target);
}

 ?>
