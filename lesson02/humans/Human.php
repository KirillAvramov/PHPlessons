<?php

/**
 * Class Human
 * @property string $firstName
 * @property string $lastName
 * @property string $middleName
 * @property int $age
 */
class Human {
    private $firstName, $lastName, $middleName;
    private $age;

    private static $count = 0;

    /**
     * Human constructor.
     * @param string $lastName
     * @param string $firstName
     * @param string $middleName
     * @param int $age
     */
    public function __construct($lastName, $firstName, $middleName, $age)
    {
        self::$count++;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->age = $age;
    }

    public function birthday() {
        $this->age++;
    }

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $middleName
     */
    public function rename($firstName, $lastName, $middleName)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->lastName . ' ' . $this->firstName . ' ' . $this->middleName;
    }

    /**
     * @return int
     */
    public static function count() {
        return self::$count;
    }

    public static function showCount() {
        echo 'Humans ' . self::$count . '/' . (Student::count()+ Employee::count()) . PHP_EOL;
    }
}
