<?php

class LoginValidator {

  public function validateEmail($email) {
    if ($email != "") {
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }
    if ($email != "") {
      $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    if ($email != false || $email != "") {
      return $email;
    }
    else {
      echo "enter a valid email";
    }
  }

  public function validatePassword($pwd) {
    if ($pwd != "") {
      $pwd = filter_var($pwd, FILTER_SANITIZE_STRING);
    }
    if ($pwd != false || $pwd != "") {
      return $pwd;
    }
    else {
      echo "enter a valid password";
    }
  }

}
 ?>
