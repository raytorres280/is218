<?php

interface Shoot {
function shoot();
}

class ShootAssaultRifle implements Shoot {
  function shoot() {
    echo "Burst Fired!";
  }
}

class ShootSubmachineGun implements Shoot {
  function shoot() {
    echo "Spray Fired";
  }
}

class ShootLightMachineGun implements Shoot {
  function shoot() {
    echo "Spray Fired";
  }
}

class ShootSniperRifle implements Shoot {
  function shoot() {
    echo "sniped";
  }
}

class ShootColt45 implements Shoot {
  function shoot() {
    echo "pew pew";
  }
}

class ShootDeagle implements Shoot {
  function shoot() {
    echo "bang bang";
  }
}

?>
