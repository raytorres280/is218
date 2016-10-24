<?php

$arry = array('make'=>'subaru', 'subaru'=>'blue');
print_r(array_keys($arry)); //prints array of keys from inserted array.
echo '<br>';

print(array_search('subaru', $arry)); //searches for value and gives you the key if it gets a match.
echo '<br>';
$arrywlk = array('m', 'a', 'g', 'i', 'c');
function walk_example($item) {
  echo $item;
  echo " ";
}

array_walk($arrywlk, 'walk_example'); // uses a function on each item in an array.
echo '<br>';
array_pop($arrywlk); //removes last item in array.
print_r($arrywlk);
echo '<br>';

array_push($arrywlk, 'c'); //puts an item at the end of the array.
print_r($arrywlk);
echo '<br>';

$wlk2 = array('letter1', 'letter2', 'letter3', 'letter4', 'letter5');
$wlk3 = array_combine($wlk2, $arrywlk); //combines two regular arrays into an associative array.
print_r($wlk3);
echo '<br>';

$test_implode = implode($arrywlk); //combines an array into a string. can pass separator as an argument.
echo $test_implode;
echo '<br>';

$wlk4 = explode(' ', 'this is a test'); //separates string by value specified, and returns it back as an array.
print_r($wlk4);
echo '<br>';
$wlk5 = array ('a', 'test');

$wlkintersect = array_intersect($wlk4, $wlk5); //checks for matches between two arrays.
print_r($wlkintersect);
echo '<br>';

print_r(array_flip($wlk2)); //flips values and keys
echo '<br>';

print_r(array_rand($wlk2)); //returns random keys.
echo '<br>';

print_r(array_reverse($wlk2)); //returns array in reverse order.
echo '<br>';

print_r(array_shift($wlk2)); //pops element from the front of the array and returns it as value.
echo '<br>';

array_unshift($wlk2, 'letter0');//adds element to beginning of array, replaces first value if index == 0
print_r($wlk2);
echo '<br>';

$wlk = array ('s', 'a', 's');
print_r(array_unique($wlk)); //removes duplicate values from array.
echo '<br>';

shuffle($wlk2);
print_r($wlk2); // shuffles elements in array
echo '<br>';

?>

