<?php
class SmartphoneBuilder{
  private $smartphone = null;

  function _construct()
  {

  }
  function buildBrand($brand) {
    $this->smartphone->_brand = $brand;
  }
  function buildScreenSize($screenSize) {
    $this->smartphone->_screenSize = $screenSize;
  }
  function buildModel($model) {
    $this->smartphone->_model = $model;
  }

  function getSmartphone() { return $this->smartphone; }
}
 ?>
