<?php
class Human {
    private $firstName, $lastName, $middleName;
    private $age;

    private static $count = 0;

    public function __construct($lastName, $firstName, $middleName, $age)
    {
        self::$count++;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->age = $age;
    }

    public function birthday() {
       return $this->age++;
    }

    public function rename($firstName, $lastName, $middleName)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function getFullName()
    {
        return $this->lastName . ' ' . $this->firstName . ' ' . $this->middleName;
    }

    public static function count() {
        return self::$count;
    }

    public static function showCount() {
        echo 'Humans ' . self::$count . '/' . (Student::count()+ Employee::count()) . PHP_EOL;
    }
}

class Student extends Human
{
    const TYPE_OCHN = 1;
    const TYPE_ZAOCHN = 2;

    private $course = 1;
    private static $count = 0;

    private $type = self::TYPE_OCHN;

    private $marks = [];

    public static function typesList()
    {
        return [
            self::TYPE_OCHN => 'Очный',
            self::TYPE_ZAOCHN => 'Заочный',
        ];
    }

    public function __construct($lastName, $firstName, $middleName, $age, $type, $course)
    {
        parent::__construct($lastName, $firstName, $middleName, $age);
        self::$count++;
        $this->type = $type;
        $this->course = $course;
    }

    public function getType() {
        return $this->type;
    }

    public function courseUp(){
        $this->course++;
    }

    public function getCourse(){
        return $this->course;
    }

    public function getStudent() {
        return [
            $this->getFullName(),
            $this->getType(),
            $this->getCourse()
        ];
    }

    public function pushMark($mark) {
        return $this->marks[] = $mark;
    }

    public function getMarks() {
        return $this->marks;
    }

    public function showMarks() {
        print_r($this->getMarks());
    }

    public static function showCount()
    {
        echo 'Students ' . self::count() . PHP_EOL;
    }

    public static function count() {
        return self::$count;
    }
}

class Employee extends Human{

    private static $count = 0;

    private $payment = 0;

    private $payments = [];

    public function changePayment($payment) {
        $this->payment = $payment;
    }

    public function getPayment(){
        return $this->payment;
    }

    public function payOut($date, $payment = 0) {
        $payment == 0 ? $this->payments[$date] =  $this->payment : $this->payments[$date]= $payment;
    }

    public function getPayments() {
        return $this->payments;
    }
    public function __construct($lastName, $firstName, $middleName, $age, $payment)
    {
        parent::__construct($lastName, $firstName, $middleName, $age);
        self::$count++;
        $this->payment = $payment;
    }

    public static function showCount() {
        echo 'Employees ' . self::$count . '/' . Manager::count() . PHP_EOL;
    }

    public static function count() {
        return self::$count;
    }
}

class Manager extends Employee {

    private static $count = 0;

    private $employees = [];

    public function __construct($lastName, $firstName, $middleName, $age, $payment)
    {
        parent::__construct($lastName, $firstName, $middleName, $age, $payment);
        self::$count++;
    }

    public function addEmployee(Employee $employee) {
        return $this->employees[$employee->getLastName()] =  $employee;
    }

    public function remEmployee ($lastName) {
        unset($this->employees[$lastName]);
    }
    public function getEmployees(){
        return $this->employees;
    }

    public static function showCount()
    {
        echo 'Managers ' . self::count() . PHP_EOL;
    }

    public static function count() {
        return self::$count;
    }
}

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
