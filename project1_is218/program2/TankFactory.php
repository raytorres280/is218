<?php
include 'ShootStrategy.php';
class Tank {
  private $weapon = "120mm";
  private $health = 1000;
  private $crewSize = 3;
  protected $damage;

  function __construct()
  {
    $this->damage = new ShootTank();
  }
  function fireWeapon() {
    $this->damage->shoot();
  }
}
class MegaTank extends Tank {
  function __construct() {
    $this->weapon = "rail gun";
    $this->health = 10000;
    $this->crewSize = 8;
    $this->damage = new ShootMegaTank();
  }
}
class MicroTank extends Tank {
  function __construct()
  {
    $this->weapon = "40mm";
    $this->health = 500;
    $this->crewSize = 2;
    $this->damage = new ShootMicroTank();
  }
}
class TankFactory {
  function makeTank() {
    $tank = new Tank();
    return $tank;
  }
  function makeMegaTank() {
    $megatank = new MegaTank();
    return $megatank;
  }
  function makeMicroTank() {
    $microtank = new MicroTank();
    return $microtank;
  }
}
?>
