<?php
interface BootLoader {
  function bootup();
}

class AndroidBootLoader implements BootLoader {
  function bootup() {
    echo "android booting image";
  }
}

class iosBootLoader implements Bootloader {
  function bootup() {
    echo "iOS booting image";
  }
}
 ?>
