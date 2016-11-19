<?php
abstract class Item {
  abstract function addCheeseCake(Item $cake);
  abstract function removeCheeseCake(Item $cake);
  abstract function giveToCustomer();
}

class StrawberryCheeseCake extends Item {
  function addCheeseCake(Item $cake) {
    throw new Exception('needs to be order, not a single cheesecake');
  }
  function removeCheeseCake(Item $cake) {
    throw new Exception('needs to be order, not a single cheesecake');
  }
  function giveToCustomer() { echo 'customer is eating the strawberry cheesecake'; }
}

class BananaCheeseCake extends Item {
  function addCheeseCake(Item $cake) {
    throw new Exception('needs to be order, not a single cheesecake');
  }
  function removeCheeseCake(Item $cake) {
    throw new Exception('needs to be order, not a single cheesecake');
  }
  function giveToCustomer() { echo 'customer is eating the  banana cheesecake'; }
}

class Order extends Item {
  protected $cheesecakeOrder = array();

  function addCheeseCake(Item $cake) {
    if(in_array($cake, $this->cheesecakeOrder, true)) {
      return;
    }
    $this->cheesecakeOrder[] = $cake;
  }
  function removeCheeseCake(Item $cake) {
    $this->cheesecakeOrder = array_udiff($this->cheesecakeOrder, array($cake), function($a, $b) { return ($a===$b)?0:1; });
  }
  function giveToCustomer() {
    foreach ($this->cheesecakeOrder as $cake) {
      $cake->giveToCustomer();
      echo '<br>';
    }
  }
}
?>
