<?php
include 'Weapon.php';
class AttachmentDecorator extends PrimaryWeapon {
  protected $weapon;
  protected $sight;
  protected $barrel;
  protected $gadget;

  function construct(Weapon $weapon)
  {
    $this->weapon = $weapon;
  }

  function addSight() {
    $this->sight = "red dot sight";
  }
  function addBarrel() {
    $this->barrel = "silencer";
  }

  function addGadget() {
    $this->gadget = "flashlight";
  }

  function getModifiedWeapon() {
    return $this;
  }
}
 ?>
