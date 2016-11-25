<?php
include 'SmartphoneBuilder.php';

class SmartphoneDirector {
  protected $_builder = null;

  function __construct($builder)
  {
    $this->_builder = $builder;
  }

  function buildSmartphone($screen, $brand, $model, BootLoader $bootLoader) {
    $this->_builder->buildScreenSize($screen);
    $this->_builder->buildBrand($brand);
    $this->_builder->buildModel($model);
    $this->_builder->buildBootLoader($bootLoader);
    return $this->_builder->getSmartphone();
  }
}
 ?>
