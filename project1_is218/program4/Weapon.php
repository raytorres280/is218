<?php
include 'AttackStrategy.php';
abstract class Weapon {

  protected $weapon = NULL;


  protected $damage;
  protected $range;
  protected $rateofFire;
  protected $accuracy;
  protected $mobility;
  protected $fireWeapon = null;

  function getDamage() { return $this->damage; }
  function getRange() { return $this->range; }
  function getRateOfFire() { return $this->range; }
  function getAccuracy() { return $this->accuracy; }
  function getMobility() { return $this->mobility; }

  function setDamage($damage) { $this->damage = $damage; }
  function setRange($range) { $this->range = $range; }
  function setRateOfFire($rateOfFire) { $this->rateOfFire = $rateOfFire; }
  function setAccuracy($accuracy) { $this->accuracy = $accuracy; }
  function setMobility($mobility) { $this->mobility = $mobility; }

  function shoot() { $this->fireWeapon->shoot(); }
}

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
    $this->fireWeapon = new ShootAssaultRifle();
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
    $this->fireWeapon = new ShootSubmachineGun();
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
    $this->fireWeapon = new ShootLightMachineGun();
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
    $this->fireWeapon = new ShootSniperRifle();
  }
}

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
    $this->fireWeapon = new ShootColt45();
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
    $this->fireWeapon = new ShootDeagle();
  }
}
?>
