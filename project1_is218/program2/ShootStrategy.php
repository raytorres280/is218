<?php
interface Shoot {
  function shoot();
}
class ShootMegaTank implements Shoot {
  function shoot() {
    $damage = 1000;
    echo 'Mega Tank fired a round.';
  }
}
class ShootMicroTank implements Shoot {
  function shoot() {
    $damage = 250;
    echo 'Micro Tank fired a round.';
  }
}
class ShootTank implements Shoot {
  function shoot() {
    $damage = 500;
    echo 'Tank fired a round.';
  }
}

?>
