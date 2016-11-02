<?php
$test = null;
if(isset($test)) {
  echo "has a value";
  echo '<br>';
}

elseif(is_null($test)) {
  echo "null";
  echo '<br>';
}
else {
  echo "what happened?";
  echo '<br>';
}

$test;
if(isset($test)) {
  echo "has a value";
  echo '<br>';
}
elseif(empty($test)) {
  echo "declared, but empty";
  echo '<br>';
}
elseif(is_null($test)) {
  echo "null";
  echo '<br>';
}
else {
  echo "what happened?";
  echo '<br>';
}

$test = "no longer null";
if(isset($test)) {
  echo "has a value";
  echo '<br>';
}
elseif(empty($test)) {
  echo "declared, but empty";
  echo '<br>';
}
elseif(is_null($test)) {
  echo "null";
  echo '<br>';
}
else {
  echo "what happened?";
  echo '<br>';
}

$test = 9;
if(isset($test)) {
  echo "has a value";
  echo '<br>';
}
elseif(empty($test)) {
  echo "declared, but empty";
  echo '<br>';
}
elseif(is_null($test)) {
  echo "null";
  echo '<br>';
}
else {
  echo "what happened?";
  echo '<br>';
}
?>

