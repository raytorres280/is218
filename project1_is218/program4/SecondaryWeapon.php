<?php
include 'Weapon.php';

abstract class SecondaryWeapon extends Weapon {

}

class Colt45 extends SecondaryWeapon {

  function __construct()
  {
    $this->damage = "medium";
    $this->range = "low";
    $this->rateofFire = "semi";
    $this->accuracy = "medium";
    $this->mobility = "high";
  }
}

class Deagle extends SecondaryWeapon {

  function __construct()
  {
    $this->damage = "high";
    $this->range = "medium";
    $this->rateofFire = "semi";
    $this->accuracy = "medium";
    $this->mobility = "high";
  }
}
 ?>
