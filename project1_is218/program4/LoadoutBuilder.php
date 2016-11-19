<?php

include 'Loadout.php';

class LoadoutBuilder {

  private $loadout = null;


  function __construct()
  {
    $this->loadout = new Loadout();
  }
  function addPrimaryWeapon(PrimaryWeapon $primaryWeapon) {
    $this->loadout->setPrimaryWeapon($primaryWeapon);
  }
  function addSecondaryWeapon(SecondaryWeapon $secondaryWeapon) {
    $this->loadout->setSecondaryWeapon($secondaryWeapon);
  }
  function addGrenade(Grenade $grenade) {
    $this->loadout->setGrenade($grenade);
  }
  function addGadget(Gadget $gadget) {
    $this->loadout->setGadget($gadget);
  }
  function getLoadout() { return $this->loadout; }

  // function showWeapon() { return $this->weapon; }
  //
  // function setDamage($damage) { $this->damage = $damage; }
  // function setRange($range) { $this->range = $range; }
  // function setRateOfFire($rateOfFire) { $this->rateOfFire = $rateOfFire; }
  // function setAccuracy($accuracy) { $this->accuracy = $accuracy; }
  // function setMobility($mobility) { $this->mobility = $mobility; }

}
