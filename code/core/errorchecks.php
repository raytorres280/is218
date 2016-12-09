<?php
include 'Editor.php';
if(!file_exists('Editor.php')) {
die("didnt include editor");
}
else {
echo 'you included the file';
}
echo '<br>';




echo '<br>';



try{
  $data = (string)3;
  if($data == "3"){

    throw new Exception();
  }
  else {
    echo "safe";
  }
}
catch(Exception $e) {
echo 'worked';
echo '<br>';
echo $e->getMessage();

}


if(!file_exists('error.php')) {
die("didnt include file");
}
else {
echo 'you included the file';
}
?>
