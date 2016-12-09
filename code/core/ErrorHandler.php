 <?php

class ErrorHandler {

  protected $errorHandler;

  public function __construct(ErrorHandler $errorHandler)
  {
    $this->errorHandler = $errorHandler;
  }
}
 ?>
