<?php
include 'table.php';
  $myFile = fopen("testcsv.csv", 'r'); //read mode 'r', write mode 'w', etc
  //fclose($myFile);

  $array_csv = array();
  while(!feof($myFile)) {
    $array_csv[] = fgetcsv($myFile);
  }
  $obj = new HTMLTable;
  echo $obj->getTable($array_csv);
?>

