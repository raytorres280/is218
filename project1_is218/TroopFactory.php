<?php
include 'GroundTroop.php';
include 'Pilot.php';

class TroopFactory {
  function makeTroop($troopType) {
    switch($troopType) {
      case 'ground':
        $troop = new GroundTroop();
        break;
      case 'air':
        $troop = new Pilot();
        break;
    }
    return $troop;
  }
  function makeGroundSquad($name) {
    $squad = new GroundSquad();
    return $squad;
  }
}
?>
