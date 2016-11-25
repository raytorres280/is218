<?php
interface Validator {

  public validate($data);
}
//create more as time goes by.
EmailValidator implements Validator {

  private $email;

  function __construct($email)
  {
    $this->email = $email;
  }

  function validate($data) {
    $clean;
    $error = "invalid email";
    if ($data != "") {
      $clean = filter_var($data, FILTER_SANITIZE_EMAIL);
      if ($data != "" && filter_var($data, FILTER_VALIDATE_EMAIL)) {
        return $clean;
      }
    }
    return $error;
  }
}

LoginValidator extends EmailValidator implements Validator {

  private $password;

  function __construct($email, $password)
  {
    parent::__construct($email);
    $this->password = $password;
  }

  function validate($data) {
    $this->email = parent::validate($this->email);

    if (condition) {
      # code...
    }
  }
}

$validator = new LoginValidator("abc@aol.com", "abc123");
 ?>
