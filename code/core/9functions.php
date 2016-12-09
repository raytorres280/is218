<?php

function test($arg1, $arg2) {
  $args = func_get_args();
  foreach($args as $n) {
    echo "$n";
    echo '<br>';
  }

}
test('a', 'test');

$files = glob('*.php');
print_r($files);
echo '<br>';
print_r(memory_get_usage());
echo '<br>';
echo "that was memory usage, this is cpu usage...";
echo '<br>';
//print_r(getrusage());
echo '<br>';
print_r(__LINE__);
echo '<br>';
print_r(__FILE__);
echo '<br>';
print_r(__DIR__);
echo '<br>';
print_r(__NAMESPACE__);

echo 'I can use this for users.. ' . uniqid();
echo '<br>';
$array = array('this', 'is', 'a', 'test');

$string = serialize($array);
print_r($string);
echo '<br>';

$plomo = ' o plata??';
print_r(strlen($plomo));
echo '<br>';
$compressed = gzcompress($plomo);
print_r(strlen($compressed));
echo '<br>';


function shutdown() {
  echo "function called before shutdown";

}

register_shutdown_function('shutdown');
?>
