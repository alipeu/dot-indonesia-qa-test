<?php

class Department {
  private $name;

  function __construct($name) {
    $this->name = $name;
  }

  public function setDepartmentName($name) {
    $this->name = $name;
  }

  public function getDepartmentName() {
    return $this->name;
  }
}

?>