<?php
require_once 'Human.php';

/**
 * Class Employee
 *
 * @property int $payment
 * @property array $payments
 */
class Employee extends Human{

    private static $count = 0;

    private $payment = 0;

    private $payments = [];

    /**
     * @param int $payment
     */
    public function changePayment($payment) {
        $this->payment = $payment;
    }

    /**
     * @return int
     */
    public function getPayment(){
        return $this->payment;
    }

    /**
     * @param string $date
     * @param int $payment
     */
    public function payOut($date, $payment = 0) {
        $payment == 0 ? $this->payments[$date] =  $this->payment : $this->payments[$date]= $payment;
    }

    /**
     * @return array
     */
    public function getPayments() {
        return $this->payments;
    }

    /**
     * Employee constructor.
     * @param string $lastName
     * @param string $firstName
     * @param string$middleName
     * @param int $age
     * @param int $payment
     */
    public function __construct($lastName, $firstName, $middleName, $age, $payment)
    {
        parent::__construct($lastName, $firstName, $middleName, $age);
        self::$count++;
        $this->payment = $payment;
    }

    public static function showCount() {
        echo 'Employees ' . self::$count . '/' . Manager::count() . PHP_EOL;
    }

    /**
     * @return int
     */
    public static function count() {
        return self::$count;
    }
}
