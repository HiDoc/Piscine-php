<?php
require_once("Vertex.class.php");
class Vector {
  private $_x;
  private $_y;
  private $_z;
  private $_w = 0.0;
  public static $verbose = False;

  public function __construct($array = []) {
    $orig; $dest;
    if (!isset($array['orig']))
      $orig = new Vertex(['x' => 0, 'y' => 0, 'z' => 0]);
    else {
      $orig = $array['orig'];
    }
    if (isset($array['dest']))
    {
      $dest = $array['dest'];
      $this->_x = $dest->__get('x') - $orig->__get('x');
      $this->_y = $dest->__get('y') - $orig->__get('y');
      $this->_z = $dest->__get('z') - $orig->__get('z');
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
    $y = sprintf("%.2f", $this->_y);
    $z = sprintf("%.2f", $this->_z);
    $w = sprintf("%.2f", $this->_w);
    return "Vector( x: " . $x . ", y: " . $y . ", z: ". $z .", w: " . $w . " )";
  }

  public function __get($property) {
    foreach (get_object_vars($this) as $value) {
      if ($value = '_' . $property)
        return ($this->$value);
    }
  }

  public static function doc(){
    require_once("Vector.doc.txt");
  }

  public function magnitude() {
    return (sqrt(($this->_x ** 2) + ($this->_y ** 2) + ($this->_z ** 2)));
  }

  public function normalize() {
    $magnitude = $this->magnitude();
    $x = $this->_x / $magnitude;
    $y = $this->_y / $magnitude;
    $z = $this->_z / $magnitude;
    return (new Vector(["dest" => new Vertex(['x' => $x, 'y' => $y, 'z' => $z])]));
  }

  public function add( $rhs ) {
    $x = $this->_x + $rhs->__get('x');
    $y = $this->_y + $rhs->__get('y');
    $z = $this->_z + $rhs->__get('z');
    return (new Vector(["dest" => new Vertex(['x' => $x, 'y' => $y, 'z' => $z])]));
  }

  public function sub( $rhs ) {
    $x = $this->_x - $rhs->__get('x');
    $y = $this->_y - $rhs->__get('y');
    $z = $this->_z - $rhs->__get('z');
    return (new Vector(["dest" => new Vertex(['x' => $x, 'y' => $y, 'z' => $z])]));
  }

  public function scalarProduct( $k ) {
    $x = $this->_x * $k;
    $y = $this->_y * $k;
    $z = $this->_z * $k;
    return (new Vector(["dest" => new Vertex(['x' => $x, 'y' => $y, 'z' => $z])]));
  }

  public function opposite() {
      return ($this->scalarProduct(-1));
  }

  public function dotProduct( $rhs ) {
    $bx = $rhs->__get('x');
    $by = $rhs->__get('y');
    $bz = $rhs->__get('z');
    return ($this->_x * $bx + $this->_y * $by + $this->_z * $bz);
  }

  public function cos( $rhs ) {
    $ma = $this->magnitude();
    $mb = $rhs->magnitude();
    return ($rhs->dotProduct($this) / ($mb * $ma));
  }

  public function crossProduct( $rhs ) {
    $u1 = $this->_x;
    $u2 = $this->_y;
    $u3 = $this->_z;
    $v1 = $rhs->__get('x');
    $v2 = $rhs->__get('y');
    $v3 = $rhs->__get('z');
    $x = $u2 * $v3 - $u3 * $v2;
    $y = $u3 * $v1 - $u1 * $v3;
    $z = $u1 * $v2 - $u2 * $v1;
    return (new Vector(["dest" => new Vertex(['x' => $x, 'y' => $y, 'z' => $z])]));
  }
}
 ?>
