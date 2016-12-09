<?php

class html {
  protected $html;

  public function getHTML() {

  return $this->html;
  }
}

class HTMLTable extends html {

  public function getTable($arry) {

    if(is_assoc($arry)) {//find way to check if associative array.
      $this->html = '<table>' . '<tbody>';

      for($row = 0; $row < count($arry); $row++) {
        $this->html = $this->html . '<tr>'; //table isnt problem, this is though.
        for($col = 0; $col < count($arry[$row]); $col++) {
          $this->html = $this->html . '<td>' . $arry[$row][$col] . '</td>';
        }
        $this->html = $this->html . '</tr>';
      }

      $this->html = $this->html . '</tbody>' . '</table>';
    }//associative array
    else {
      $this->html = '<table>' . '<tbody>'; //need to insert mdl css classes in loop some how...

      //first loop is for headings.
      $this->html = $this->html . '<tr>';
      for($col = 0; $col < count($arry[0]); $col++) {
        $this->html = $this->html . '<th>' . $arry[0][$col] . '</th>';
      }
      $this->html = $this->html . '</tr>';

      //second loop is for table.
      for($row = 1; $row < count($arry); $row++) {
        $this->html = $this->html . '<tr>'; //table isnt problem, this is though.
        for($col = 0; $col < count($arry[$row]); $col++) {
          $this->html = $this->html . '<td>' . $arry[$row][$col] . '</td>';
        }
        $this->html = $this->html . '</tr>';
      }

      $this->html = $this->html . '</tbody>' . '</table>';
  }//non-associative array

  return $this->html;
 }
 public static function is_associative_array($arry) {
  foreach(array_keys($arry) as $key)
    if (!is_int($key)) return TRUE;
  return FALSE;
 }
 public static function is_assoc(array $array) {
    // Keys of the array
    $keys = array_keys($array);

    // If the array keys of the keys match the keys, then the array must
    // not be associative (e.g. the keys array looked like {0:0, 1:1...}).
    return array_keys($keys) !== $keys;
}

}
//$obj = new HTMLTable;
$cars = array(
  array('year', 'make', 'model'),
  array(2016, 'Honda', 'Civic'),
  array(2013, 'Subaru', 'Brz'),
  array(2001, 'BMW', 'M5'),
  array(2009, 'chevy', 'corvette')
);

$cars_associative = array(
  array('year'=>2016, 'make'=>'subaru', 'model'=>'impreza'),
  array('year'=>1993, 'make'=>'mazda', 'model'=>'rx7'),
  array('year'=>2005, 'make'=>'nissan', 'model'=>'skyline')

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

