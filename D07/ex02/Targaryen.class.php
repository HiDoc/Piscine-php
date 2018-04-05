<?php
class Targaryen {

  public function resistsFire() {
		return False;
	}
  public function getBurned() {
    return ($this->resistsFire() === True) ? "emerges naked but unharmed" : "burns alive";
  }
}
 ?>
