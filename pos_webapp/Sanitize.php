<?php
class Validation {
  function validate($id) {
    switch($id) {
      case 'email':
        echo filter_var($id, FILTER_SANITIZE_EMAIL);
        echo "<br/><br/>";
        break;
    
    }
  }
}
//[\w\s]+ regex for name validation
?>
