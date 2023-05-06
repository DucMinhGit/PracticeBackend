<?php 
class StudentDetails {
    public static $id = 0;
    public static $name = '';
    public static $address = '';

    public static function setStudentId($id) {
        static::$id = $id;
        return new static;
    }

    public static function setStudentName($name) {
        static::$name = $name;
        return new static;
    }

    public static function setStudentAddress($address) {
        static::$address = $address;
        return new static;
    }

    public static function getStudentInfo() {
        return 'Student '. static::$name. ' of id '.static::$id. ' stays at '. static::$address;
    }
}

echo StudentDetails::setStudentId(1)->setStudentName('Duc Minh')->setStudentAddress('Da Nang')->getStudentInfo();

?>