<?php
include 'Equipment.php';

abstract class Gadget extends Equipment {
  protected $description;


  }

class Camera extends Gadget {

  function __construct()
  {
    $this->description = "A hidden camera to stick on walls to monitor for enemies.";
  }
}

class RepairTool extends Gadget {
  function __construct()
  {
    $this->description = "Restores health to vehicles.";
  }
}
 ?>
