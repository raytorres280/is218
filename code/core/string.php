<?php
//start string functions
$teststr = 'teststring';
print_r(chunk_split($teststr, 4)); //breaks up string into small strings of declared size.
echo '<br>';

$teststr = 'this is another t7e7s7t7.';
print_r(count_chars($teststr, 1)); //returns instances of each character in string.


$str = '<br>';
echo htmlentities($str); //converts string to html entity.
echo '<br>';

$str = "&lt;b&gt;HELLO&lt;/b&gt;"; //converts html codes to standard characters.
echo htmlspecialchars_decode($str);
echo '<br>';

$str2 = 'Lowercase';
print_r(lcfirst($str2)); //converts first character to lowercase.
echo '<br>';

$str = ' hello world ';
echo ltrim($str); //trims whitespace from the left of string.
echo '<br>';

$str = ' hello world ';
echo rtrim($str); //trims whitespace from right of string.
echo '<br>';

$str = ' hello world ';
echo trim($str); //trims whitespace.
echo '<br>';

$str = 'this will be converted to binary or hex.';
echo md5($str); //converts string to binary or hex equivalent.
echo '<br>';

$str = 'this is a quiz';
echo str_replace('quiz', 'test', $str); //replaces value in string with another value.
echo '<br>';

$str = 'array';
print_r(str_split($str)); //splits string into array
echo '<br>';

$str = 'find the match in the sentence';
echo stripos($str, 'match'); //returns position of value in string.
echo '<br>';

$str = 'IM ANGRY';
echo strtolower($str); // makes string lowercase.
echo '<br>';


?>

