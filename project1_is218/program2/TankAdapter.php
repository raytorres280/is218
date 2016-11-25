<?php
include 'TankFactory.php';
class GroundVehicle {
  private $vehicle;

  function __construct(Tank $tank)
  {
    $this->vehicle = $tank;
  }
  function speedBoost() {
    echo '$tank vehicle got a speed boost';
  }

}
?>
