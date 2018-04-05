<?php
class Color {
  public $red;
  public $green;
  public $blue;
  public static $verbose = false;

  public function __construct($arr = [])
  {
    if (isset($arr['rgb']))
    {
      $color = intval($arr['rgb']);
      $this->red = ($color >> 16);
      $this->green = ($color >> 8) & 0xFF;
      $this->blue = ($color & 0xFF);
    }
    else if (isset($arr['blue']) && isset($arr['red']) && isset($arr['green']))
    {
      $this->red = intval($arr['red']);
      $this->green = intval($arr['green']);
      $this->blue = intval($arr['blue']);
    }
    else {
      $this->red = 0;
      $this->green = 0;
      $this->blue = 0;
    }
    if (self::$verbose === True)
      echo $this->__toString() . " constructed.\n";
  }

  public function __toString(){
    $red = str_pad($this->red , 4 ," ", STR_PAD_LEFT );
    $grn = str_pad($this->green , 4 ," ", STR_PAD_LEFT );
    $blu = str_pad($this->blue , 4 ," ", STR_PAD_LEFT );
    return ("Color( red:" . $red . ", green:" . $grn . ", blue:" . $blu . " )");
  }

  public function __destruct(){
    if (self::$verbose === True)
      echo $this->__toString() . " destructed.\n";
  }

  public function static doc(){
    require_once("Color.doc.txt");
  }

  public function add(Color $toAdd){
    $red = $this->red + $toAdd->red;
    $green = $this->green + $toAdd->green;
    $blue = $this->blue + $toAdd->blue;
    return (new Color(["red" => $red, "green" => $green, "blue" => $blue]));
  }

  public function sub(Color $toSub){
    $red = $this->red - $toSub->red;
    $green = $this->green - $toSub->green;
    $blue = $this->blue - $toSub->blue;
    return (new Color(["red" => $red, "green" => $green, "blue" => $blue]));
  }

  public function mult($f){
    $red = $this->red * $f;
    $green = $this->green * $f;
    $blue = $this->blue * $f;
    return (new Color(["red" => $red, "green" => $green, "blue" => $blue]));
  }
}
 ?>
