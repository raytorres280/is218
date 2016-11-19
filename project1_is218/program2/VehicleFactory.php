<?php
class Tank {
  public $weapon;
  private $health;
  private $crewSize;

  function __construct() {
    $this->weapon = "120mm";
    $this->health = 1000;
    $this->crewSize = 3;
  }

}

class VehicleFactory {
  function makeTank() {
    $tank = new Tank();
    return $tank;
  }



 ?>
