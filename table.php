<?php

class html {
  protected $html;

  public function getHTML() {

  return $this->html;
  }
}

class HTMLTable extends html {

  public function getTable($arry) {

    $this->html = '<table>' . '<tbody>';
    for($row = 0; $row < count($arry); $row++) {
      $this->html = $this->html . '<tr>';
      for($col = 0; $col < count($arry[$row]); $col++) {
        $this->html = $this->html . '<td>' . $arry[$row][$col] . '</td>';
      }
      $this->html = $this->html . '</tr>';
    }
    $this->html = $this->html . '</tbody>';
  return $this->html;
  }
}

//$obj = new HTMLTable;
$cars = array(
  array(2016, 'Honda', 'Civic'),
  array(2013, 'Subaru', 'Brz'),
  array(2001, 'BMW', 'M5'),
  array(2009, 'chevy', 'corvette')
);
$obj = new HTMLTable;
echo $obj->getTable($cars);
// echo '<table>';
// echo '<tbody>';
// for($row = 0; $row < count($cars); $row++) {
//   echo '<tr>';
//   for($col = 0; $col < count($cars[$row]); $col++) {
//     echo'<td>'.$cars[$row][$col].'</td>';
//   }
//   echo '</tr>';
// }
// echo '</tbody>';
// echo '</table>';
?>

