<?php
$test2 = null;

switch(isset($test2)) {
  case true:
    echo 'the variable is set!';
    echo '<br>';
    break;
  case false:
    echo 'the variable is not set';
    echo '<br>';
    break;
}
$test2 = 3;
switch(isset($test2)) {
  case true:
    echo 'the variable is set!';
    echo '<br>';
    break;
  case false:
    echo 'the variable is not set';
    echo '<br>';
    break;
}

$test3;

switch(empty($test3)) {
  case true:
    echo 'variable was declared but not set';
    echo '<br>';
    break;
  case false:
    echo 'variable contains a value';
    echo '<br>';
    break;
}

$test3 = 'not empty';

switch(empty($test3)) {
  case true:
    echo 'variable was declared but not set';
    echo '<br>';
    break;
  case false:
    echo 'variable contains a value';
    echo '<br>';
    break;
}
?>
