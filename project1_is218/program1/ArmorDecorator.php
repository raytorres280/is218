<?php
include 'Soldier.php';
class ArmorDecorator extends Soldier {
  protected $armor;
  protected $soldier;

  function __construct(Soldier $soldier) {
    $this->soldier = $soldier;
    $this->armor = 100;
  }

  function getArmorLeft() { return $this->armor; }
  //how would I call destructor in the case that the armor reaches 0..?

  function takeHitToArmor($damage) { $this->armor = $this->armor - $damage; }
}
 ?>
