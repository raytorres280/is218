<?php
abstract class Equipment {
  protected $description;
}

abstract class Grenade extends Equipment {

protected $description;

}

class FragGrenade extends Grenade {

  function __construct()
  {
    $this->description = "Standard timed fuze hand grenade with all around performance and balanced range and damage.";
  }
}

class FlashbangGrenade extends Grenade {

  function __construct()
  {
    $this->description = "Hand grenade with a suppressive Flash Bang effect to temporarily blind enemies in close quarters.";
  }
}

abstract class Gadget extends Equipment {
  protected $description;


  }

class Camera extends Gadget {

  function __construct()
  {
    $this->description = "A hidden camera to stick on walls to monitor for enemies.";
  }
}

class RepairTool extends Gadget {
  function __construct()
  {
    $this->description = "Restores health to vehicles.";
  }
}
 ?>
