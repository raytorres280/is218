<?php
include 'Movement.php';
abstract class Soldier {
  private $name;
  private $rank;
  private $type;
  private $weapon;
  protected $movementSpeed;

  function __construct() { }

  function getName() { return $this->name; }
  function getRank() { return $this->rank; }
  function getType() { return $this->type; }
  function getWeapon() { return $this->weapon; }

  function setName($name) { $this->name = $name; }
  function setRank($rank) { $this->rank = $rank; }
  function setType($type) { $this->type = $type; }
  function setWeapon($weapon) { $this->weapon = $weapon; }
  function setMovementSpeed($movementSpeed) { $this->movementSpeed = $movementSpeed; }
  function tryToMove() {
    $this->movementSpeed->move();
  }
}
class Medic extends Soldier {
  public function __construct() {
    $this->rank = "pvt";
        $this->setWeapon("M16");
        $this->setMovementSpeed(new MovementSpeed2()); //create a movementspeed object based on requirements from interface.
         //is there an easier way to modify parent properties inside child class?
  }
}

class Engineer extends Soldier {
  public function __construct() {
        $this->setWeapon("RPG");
        $this->setMovementSpeed(new MovementSpeed2()); //create a movementspeed object based on requirements from interface.
         //is there an easier way to modify parent properties inside child class?
  }
}

class Support extends Soldier {
  public function __construct() {
        $this->setWeapon("m249");
        $this->setMovementSpeed(new MovementSpeed3()); //create a movementspeed object based on requirements from interface.
         //is there an easier way to modify parent properties inside child class?
  }
}

class Recon extends Soldier {
  public function __construct() {
        $this->setWeapon("m40");
        $this->setMovementSpeed(new MovementSpeed1()); //create a movementspeed object based on requirements from interface.
         //is there an easier way to modify parent properties inside child class?
  }
}
 ?>
