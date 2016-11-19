<?php
//STRATEGY pattern
interface Movement { //no matter what object is passed, you want it to move.
  function move();
}

class MovementSpeed1 implements Movement { //store each 'movementspeed' as a class, so you can create an object that represents any given type of movement.
  function move() { echo "I move the quickest"; }
}

class MovementSpeed2 implements Movement {
  function move() { echo "I'm neither fast nor slow"; }
}

class MovementSpeed3 implements Movement {
  function move() { echo "I move the slowest"; }
}
?>
