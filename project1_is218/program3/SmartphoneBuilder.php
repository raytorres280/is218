<?php
include 'CaseDecorator.php';
include 'BootStrategy.php';
class SmartphoneBuilder {
  protected $smartphone = null;

  function __construct()
  {
    $this->smartphone = new Smartphone();
  }
  function buildBrand($brand) {
    $this->smartphone->setBrand($brand);
  }
  function buildScreenSize($screenSize) {
    $this->smartphone->setScreenSize($screenSize);
  }
  function buildModel($model) {
    $this->smartphone->setModel($model);
  }
  function buildBootLoader(BootLoader $bootLoader) {
    $this->smartphone->setBootLoader($bootLoader);
  }

  function getSmartphone() { return $this->smartphone; }

}
 ?>
