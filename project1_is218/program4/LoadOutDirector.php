<?php
include 'LoadoutBuilder.php';

class LoadoutDirector {
  private $_builder = null;

  function __construct()
  {
    $this->_builder = new LoadoutBuilder();
  }

  function buildLoadout(PrimaryWeapon $primary, SecondaryWeapon $secondary, Grenade $grenade, Gadget $gadget) {
    $this->_builder->addPrimaryWeapon($primary);
    $this->_builder->addSecondaryWeapon($secondary);
    $this->_builder->addGrenade($grenade);
    $this->_builder->addGadget($gadget);
    return $this->_builder->getLoadout();
  }
}
 ?>
