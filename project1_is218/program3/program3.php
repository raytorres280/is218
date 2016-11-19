<?php
include 'SmartphoneDirector.php';

$builder = new SmartphoneBuilder();
$director = new SmartphoneDirector($builder);
$phone1 = $director->buildSmartphone('4.7"', 'Apple', 'iPhone', new iosBootLoader());
print_r($phone1);
echo '<br>';
$phone1->bootup();

$phoneandcase = new PhoneWithCase($phone1);
$phoneandcase->addCase("Otterbox");
echo '<br>';

print_r($phoneandcase);
 ?>
