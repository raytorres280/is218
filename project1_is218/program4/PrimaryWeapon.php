<?php
include 'Weapon.php';

abstract class PrimaryWeapon extends Weapon {

}

class AssaultRifle extends PrimaryWeapon {
  function __construct()
  {
    $this->damage = "medium";
    $this->range = "medium";
    $this->rateofFire = "burst";
    $this->accuracy = "high";
    $this->mobility = "medium";
  }
}

class SubMachineGun extends PrimaryWeapon {
  function __construct()
  {
    $this->damage = "low";
    $this->range = "low";
    $this->rateofFire = "auto";
    $this->accuracy = "high";
    $this->mobility = "high";
  }
}

class LightMachineGun extends PrimaryWeapon {
  function __construct()
  {
    $this->damage = "high";
    $this->range = "medium";
    $this->rateofFire = "high";
    $this->accuracy = "low";
    $this->mobility = "low";
  }
}

class SniperRifle extends PrimaryWeapon {
  function __construct()
  {
    $this->damage = "high";
    $this->range = "high";
    $this->rateofFire = "semi";
    $this->accuracy = "high";
    $this->mobility = "medium";
  }
}

?>
