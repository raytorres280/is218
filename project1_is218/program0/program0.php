<?php
include 'Factory.php';


$factory = new CheeseCakeFactory();
$cake1 = $factory->makeStrawberryCheesecake();
$cake2 = $factory->makeBananaCheesecake();
$cake3 = $factory->makeStrawberryCheesecake();
$cake1->giveToCustomer();
echo '<br>';
echo '<br>';
$order1 = $factory->makeOrder();
$order1->addCheeseCake($cake1);
$order1->addCheeseCake($cake2);
$order1->addCheeseCake($cake3);
$order1->giveToCustomer();
 ?>
