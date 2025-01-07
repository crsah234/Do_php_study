<?php

class Student1
{
    public $studentId;
    public $studentName;

    public function printStudent($id, $name)
    {
        print "ID : " . $id . "<br>";
        print "Name : " . $name . "<br>";
    }
}

$object = new Student1(); // 객체선언 new 선언
$object->studentId = 20171234; // -> 객체내에 멤버변수 자바의 점.연산자랑 비슷한듯
$object->studentName = "Alice";

$object->printStudent($object->studentId, $object->studentName);


class Student2
{
    public $studentId;
    public $studentName;

    public function printStudent()
    {
        print "ID : " . $this->studentId . "<br>";
        print "Name : " . $this->studentName . "<br>";

    }

}

$object = new Student2();
$object->studentId = 20171234;
$object->studentName = "Alice";

$object->printStudent();


?>
