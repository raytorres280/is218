<?php
include 'LoadoutDirector.php';

$rifle1 = new AssaultRifle();

print_r($rifle1);
echo '<br>';
$loadoutBuilder = new LoadoutBuilder();
print_r($loadoutBuilder);
echo '<br>';
$loadoutDirector = new LoadoutDirector($loadoutBuilder);
print_r($loadoutDirector);
echo '<br>';
$loadout1 = $loadoutDirector->buildLoadout(new AssaultRifle(), new Deagle(), new FragGrenade(), new RepairTool());
print_r($loadout1);

echo '<br>';
$loadout1->getPrimaryWeapon()->shoot();

$loadout1->setPrimaryWeapon(new AttachmentDecorator($loadout1->getPrimaryWeapon()));

$loadout1->getPrimaryWeapon()->addSight();

echo '<br>';
print_r($loadout1);

 ?>
