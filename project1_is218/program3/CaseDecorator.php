<?php
include 'Smartphone.php';

class PhoneWithCase extends Smartphone {
  protected $_phone;
  protected $_caseName;

  function __construct($phone)
  {
    $this->_phone = $phone;
  }

  function addCase($caseName) {
    $this->_caseName = $caseName;
  }
}
 ?>
