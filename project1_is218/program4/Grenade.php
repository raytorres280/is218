<?php
include 'Equipment.php';

abstract class Grenade extends Equipment {

protected $description;

}

class FragGrenade extends Grenade {

  function __construct()
  {
    $this->description = "Standard timed fuze hand grenade with all around performance and balanced range and damage."
  }
}

class FlashbangGrenade extends Grenade {

  function __construct()
  {
    $this->description = "Hand grenade with a suppressive Flash Bang effect to temporarily blind enemies in close quarters."
  }
}
 ?>
