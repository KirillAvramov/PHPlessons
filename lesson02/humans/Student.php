<?php
require_once 'Human.php';

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

    /**
     * Student constructor.
     * @param string $lastName
     * @param string $firstName
     * @param string $middleName
     * @param int $age
     * @param int $type
     * @param int $course
     */
    public function __construct($lastName, $firstName, $middleName, $age, $type, $course)
    {
        parent::__construct($lastName, $firstName, $middleName, $age);
        self::$count++;
        $this->type = $type;
        $this->course = $course;
    }

    /**
     * @return int
     */
    public function getType() {
        return $this->type;
    }

    public function courseUp(){
        $this->course++;
    }

    public function getCourse(){
        return $this->course;
    }

    /**
     * @return array
     */
    public function getStudent() {
        return [
            $this->getFullName(),
            $this->getType(),
            $this->getCourse()
        ];
    }

    /**
     * @param int $mark
     * @return mixed
     */
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

    /**
     * @return int
     */
    public static function count() {
        return self::$count;
    }
}