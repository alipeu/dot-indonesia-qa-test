<?php

class Employee {
  private $name;
  private $title;
  private $salary;
  private $company;
  private $dept;

  function __construct($name, $title, $salary, Company $company, Department $dept) {
    $this->name = $name;
    $this->title = $title;
    $this->salary = $salary;
    $this->company = $company;
    $this->dept = $dept;
  }

  public function setEmployeeName($name) {
    $this->name = $name;
  }

  public function getEmployeeTitle() {
    return $this->title;
  }

  public function getEmployeeProfile() {
    return "{$this->name}, {$this->title}, {$this->salary}, {$this->company->getCompanyName()}, {$this->dept->getDepartmentName()}\n";
  }

  public function getEmployeeMonthlySalary($day) {
    return $this->salary * $day;
  }
}

?>