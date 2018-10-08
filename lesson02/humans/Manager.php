<?php
require_once 'Employee.php';

class Manager extends Employee {

    private static $count = 0;

    private $employees = [];

    /**
     * Manager constructor.
     * @param string $lastName
     * @param string $firstName
     * @param string $middleName
     * @param int $age
     * @param int $payment
     */
    public function __construct($lastName, $firstName, $middleName, $age, $payment)
    {
        parent::__construct($lastName, $firstName, $middleName, $age, $payment);
        self::$count++;
    }

    public function addEmployee(Employee $employee) {
        return $this->employees[$employee->getLastName()] =  $employee;
    }

    /**
     * @param string $lastName
     */
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

    /**
     * @return int
     */
    public static function count() {
        return self::$count;
    }
}