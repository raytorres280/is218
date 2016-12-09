<?php
include 'Editor.php';
include 'Manager.php';
$obj = new Editor("jerry");
$objRef = new ReflectionObject($obj);
var_dump($objRef->hasProperty("name")); //check for a specific property in reflectionpobj.

echo '<br>';

$classrefl = new ReflectionClass('Editor');
$methodrefl = $classrefl->getMethod('getEditorName'); //tries to find a name match to method you search for in reflection class.
var_dump($methodrefl);


print_r($classrefl->getFileName()); //gets filename of reflection class's original class.

var_dump($classrefl->getDefaultProperties()); //self explanatory

$manager = new ReflectionClass('Manager');
var_dump($manager->isAbstract()); //tells you if a class is abstract or not. abstract keyword.

$comment = new ReflectionClass('Editor');
var_dump($comment->getDocComment()); //gets comment from document, otherwise returns false if it's empty


//passing by value vs by reference

$x = 0;
$y = 2;
function value($xtest) {
  $xtest = 1;
}
function reference(&$ytest) {
  $ytest = 3;
}
reference($y);
value($x);

print_r($y); //reference saves the change to original.
echo '<br>';
print_r($x); //only scope of function

?>
