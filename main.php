<?php

include ("company.php");
include ("department.php");
include ("employee.php");

$company = new Company("Google");

$dept = new Department("Software Engineering");

$employee = new Employee("Alif", "Jr Software Dev", 7000000, $company, $dept);
echo $employee->getEmployeeProfile();

?>