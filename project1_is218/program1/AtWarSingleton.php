<?php
//SINGLETON PATTERN
class AtWarSingleton {
  private $atWar = false;
  private $enemyCountry;
  private static $instance;

  function __construct() { }

  static function  getInstance() { //make method that calls construct static, as you only want one.
    if( empty(self::$instance)) {
      self::$instance = new AtWarSingleton();
    }
    return self::$instance;
  }
  function setAtWar($atWar) {
    $this->atWar = $atWar;
  }
  function setEnemyCountry($country) {
    $this->enemyCountry = $country;
  }

  function getAtWar() { return $this->atWar; }

  function getEnemyCountry() { return $this->enemyCountry; }
  
}
 ?>
