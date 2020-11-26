<?php

class Company {
  private $name;

  function __construct($name) {
    $this->name = $name;
  }

  public function setCompanyName($name) {
    $this->name = $name;
  }

  public function getCompanyName() {
    return $this->name;
  }
}

?>