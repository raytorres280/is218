<?php
include 'table.php';
  $myFile = fopen("testcsv.csv", 'r'); //read mode 'r', write mode 'w', etc
  //fclose($myFile);

  $array_csv = array();
  while(!feof($myFile)) {
    $array_csv[] = fgetcsv($myFile);
  }


  $obj = new HTMLTable;

  //echo filter_var($array_csv[0][0], FILTER_SANITIZE_STRING);
  // for ($i = 0; i < count($array_csv); i++) {
  //   for ($j = 0; j < count($array_csv[i]); j++) {
  //     $array_csv[i][j] = filter_var($array_csv[i][j], FILTER_SANITIZE_STRING);
  //   }
  // }

  foreach($array_csv as $arry) {
    foreach($arry as $item) {
      $item = filter_var($item, FILTER_SANITIZE_STRING);
    }
  }
  echo $obj->getTable($array_csv);
  //test for updates


?>
