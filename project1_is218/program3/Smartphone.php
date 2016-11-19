<?php
class Smartphone {
  $_brand;
  $_model;
  $_screenSize;

  function __construct()
  {

  }

  function setBrand($brand) { $this->_brand = $brand; }
  function setModel($model) { $this->_model = $model; }
  function setScreenSize($screenSize) {$this->_screenSize = $screenSize; }

  function getBrand() { return $this->_brand; }
  function getModel() { return $this->_model; }
  function getScreenSize() { return $this->_screenSize; }
  
}
 ?>
