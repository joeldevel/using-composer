<?php
namespace MyClasses\CustomNamesPace;

class AnotherClass {
  private $value;
  public function __construct($value){
    $this->value = $value;
  }
  public function getValue(){
    return $this->value;
  }
}
