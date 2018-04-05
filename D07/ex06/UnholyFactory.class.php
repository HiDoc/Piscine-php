<?php
require_once("Fighter.class.php");
class UnholyFactory {

  public $type = [];
  public $classes = [];
  public function __construct(){
    $type = [];
  }

  public function absorb($abs){
    if (is_subclass_of($abs, 'Fighter'))
    {
      if (count($this->type) == 0)
      {
        array_push($this->type, $abs->type);
        $this->classes[] = [$abs->type => $abs];
        print("(Factory absorbed a fighter of type ". $abs->type .")\n");
      }
      else if (in_array($abs->type, $this->type) == false) {
        array_push($this->type, $abs->type);
        $this->classes[] = [$abs->type => $abs];
        print("(Factory absorbed a fighter of type ". $abs->type .")\n");
      }
      else {
        print("(Factory already absorbed a fighter of type ". $abs->type .")\n");
      }
    }
    else {
      print("(Factory can't absorb this, it's not a fighter)\n");
    }
  }
  
  public function fabricate($rf){
    if (in_array($rf, $this->type)){
      print("(Factory fabricates a fighter of type " . $rf .")\n");
      foreach ($this->classes as $classe) {
        foreach ($classe as $key => $value) {
          if ($key == $rf){
            return $value;
          }
        }
      }
    }
    else
      print("(Factory hasn't absorbed any fighter of type ". $rf .")\n");
  }

}
 ?>
