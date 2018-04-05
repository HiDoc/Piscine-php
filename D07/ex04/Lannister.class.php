<?php
class Lannister {
  public function sleepWith($var){
    if ($var instanceof Stark)
      print("Let's do this\n");
    if (is_subclass_of($var, 'Lannister'))
      print("Not even if I'm drunk !\n");
  }
}
 ?>
