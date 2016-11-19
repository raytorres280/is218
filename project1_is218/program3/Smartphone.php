<?php
class Smartphone {
  protected $_brand;
  protected $_model;
  protected $_screenSize;
  protected $_bootLoader;

  function __construct()
  {

  }

  function setBrand($brand) { $this->_brand = $brand; }
  function setModel($model) { $this->_model = $model; }
  function setScreenSize($screenSize) { $this->_screenSize = $screenSize; }
  function setBootLoader($bootLoader) { $this->_bootLoader = $bootLoader; }

  function getBrand() { return $this->_brand; }
  function getModel() { return $this->_model; }
  function getScreenSize() { return $this->_screenSize; }
  function getBootLoader() { return $this->_bootLoader; }

  function bootup() {
    $this->_bootLoader->bootup();
  }
}

class iPhone extends Smartphone {
  function __construct()
  {
    $this->setBrand("Apple");
    $this->setModel("iPhone 6");
    $this->setScreenSize('4.7"');
    $this->setBootLoader(new iosBootLoader());
  }
}

class Pixel extends Smartphone {
  function __construct()
  {
    $this->setBrand("Google");
    $this->setModel("Pixel");
    $this->setScreenSize('5.0"');
    $this->setBootLoader(new AndroidBootLoader());
  }
}
 ?>
