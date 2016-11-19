<?php
include 'Composite.php';

class CheeseCakeFactory {
  function makeStrawberryCheesecake() {
    return new StrawberryCheeseCake();
  }
  function makeBananaCheesecake() {
    return new BananaCheeseCake();
  }
  function makeOrder() {
    return new Order();
  }
}
 ?>
