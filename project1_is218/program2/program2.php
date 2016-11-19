<?php
include 'TankAdapter.php';
$tankFactory = new TankFactory();
$tank1 = $tankFactory->makeTank();

print_r($tank1); //strangely enough wrapping in a factory removes privacy. I can see everything even though properties are private.

$tank2 = $tankFactory->makeMegaTank();
echo '<br>';
print_r($tank2);
echo '<br>';

$boostedVehicle = new GroundVehicle($tank2);
$boostedVehicle->speedBoost();
echo '<br>';
print_r($tank2);
echo '<br>';

$tank2->fireWeapon(); 
?>
