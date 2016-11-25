<?php
include 'AtWarSingleton.php';
//include 'Soldier.php';
include 'ArmorDecorator.php';

$single = AtWarSingleton::getInstance(); //when you call singleton call class.method() instead of  $x = new object() since you want to call method directly.
$single->setAtWar(true);
$single->setEnemyCountry("Germany");
print_r($single->getEnemyCountry());
echo '<br>';
$err = AtWarSingleton::getInstance();
print_r($err->getAtWar()); //will print true even tho default is false, $err refers to same instance as $single. singleton works.
echo '<br>';

$grunt = new Medic();
print_r("weapon is: " . $grunt->getWeapon());
echo '<br>';
print_r($grunt);
echo '<br>';
$grunt->tryToMove(); //strategy works.

$enhancedGrunt = new ArmorDecorator($grunt); //how to go back to regular grunt after armor hits 0? prototype pattern, memento pattern??

echo '<br>';
print_r($enhancedGrunt->getArmorLeft());

?>
