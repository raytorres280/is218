<?php
include 'AttachmentDecorator.php';
include 'Equipment.php';

class Loadout {
  private $primaryWeapon;
  private $secondaryWeapon;
  private $grenade;
  private $gadget;

  function __construct()
  {

  }
  function setPrimaryWeapon(PrimaryWeapon $primary) {
    $this->primaryWeapon = $primary;
  }
  function setSecondaryWeapon(SecondaryWeapon $secondary) {
    $this->secondaryWeapon = $secondary;
  }
  function setGrenade(Grenade $grenade) {
    $this->grenade = $grenade;
  }
  function setGadget(Gadget $gadget) {
    $this->gadget = $gadget;
  }

  function getPrimaryWeapon() { return $this->primaryWeapon; }

  function showLoadout() {
    print_r($this->primaryWeapon);
  }
}
 ?>
