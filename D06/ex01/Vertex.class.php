<?php
require_once("Color.class.php");
class Vertex {
  private $_x;
  private $_y;
  private $_z;
  private $_w = 1.0;
  private $_color;
  public static $verbose = False;

  public function __construct($arr = []) {
      if (isset($arr['x']) && isset($arr['y']) && isset($arr['z']))
      {
        $this->_x = floatval($arr['x']);
        $this->_y = floatval($arr['y']);
        $this->_z = floatval($arr['z']);
        if (isset($arr['w']))
          $this->_w = doubleval($arr['w']);
        if (isset($arr['color']))
          $this->_color = $arr['color'];
        else {
          $this->_color = new Color(["rgb" => 0xFFFFFF]);
        }
        if (self::$verbose === True)
          echo $this->__toString() . " constructed.\n";
      }
  }
  public function __destruct(){
    if (self::$verbose === True)
      echo $this->__toString() . " destructed.\n";
  }
  public function __toString(){
    $x = sprintf("%.2f", $this->_x);
    $y = sprintf("%.2f", $this->_x);
    $z = sprintf("%.2f", $this->_x);
    $w = sprintf("%.2f", $this->_x);
    $color = (self::$verbose == false) ? "" : ", " . $this->_color->__toString();
    return "Vertex( x: " . $x . ", y: " . $y . ", z: ". $z .", w: " . $w
      . $color . " )";
  }
  public function __get($property) {
    foreach (get_object_vars($this) as $value) {
      if ($value = '_' . $property)
        return ($this->$value);
    }
  }
  public function __set($property, $val){
    foreach (get_object_vars($this) as $value) {
      if ($value = '_' . $property)
        $this->$value = $val;
    }
  }
  public static function doc(){
    require_once("Vertex.doc.txt");
  }
}
 ?>
