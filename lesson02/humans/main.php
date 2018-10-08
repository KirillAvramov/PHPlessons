<?php
include 'Human.php';
require_once 'Student.php';
require_once 'Employee.php';
require_once 'Manager.php';

$student0 = new Student('Sidorov0', 'Petya', 'Petrov', 22, 2, 3);
$student1 = new Student('Sidorov1', 'Petya', 'Petrov', 20, 1, 2);

$human0 = new Human('Грозный', 'Иван', 'Васильевич', 54);
$human1 = new Human('Ульянов', 'Владимир', 'Ильич', 54);
$human2 = new Human('Романов', 'Петр', 'Алексеевич', 53);

$employee0 = new Employee('Возняк', 'Стивен', 'Гэри', 69, 100);
$employee1 = new Employee('Ритчи', 'Деннис', 'Макалистэйр', 70, 100);

$manager0 = new Manager('Гильберт', 'Дэвид', 'Отто', 81, 100);

$manager0->birthday();
$manager0->addEmployee($employee0);
$manager0->addEmployee($employee1);
print_r($manager0->getEmployees());
$manager0->remEmployee($employee0->getLastName());
print_r($manager0->getEmployees());

$student1->pushMark(5);
$student1->pushMark(5);
$student1->pushMark(3);
$student1->showMarks();

$employee1->payOut('23.09.2018', 200);
$employee1->payOut('23.10.2018', 50);
$employee1->payOut('23.11.2018');
print_r($employee1->getPayments());


Human::showCount();
Student::showCount();
Employee::showCount();
Manager::showCount();