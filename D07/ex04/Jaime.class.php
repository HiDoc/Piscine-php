<?php
class Jaime extends Lannister {
  public function sleepWith($var){
    if ($var instanceof Cersei)
      print("With pleasure, but only in a tower in Winterfell, then.\n");
    else
      parent::sleepWith($var);
  }
}
 ?>
