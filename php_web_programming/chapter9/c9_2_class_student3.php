<?php

class Student1
{
    private $studentId;
    private $studentName;

    public function printStudent()
    {
        print "ID : " . $this->studentId . "<br>";
        print "NAME : " . $this->studentName . "<br>";
    }
}

$object = new Student1;
//$object->studentId = 20171234;
//$object->studentName = "Alice"; -> 접근 불가 -> private

// 하기는 setter 취급해줌
class Student2
{
    private $studentId;
    private $studentName;

    public function printStudent()
    {
        print "ID : " . $this->studentId . "<br>";
        print "NAME : " . $this->studentName . "<br>";
    }

    /**
     * @param mixed $studentId
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    }

    public function setStudentName($studentName)
    {
        $this->studentName = $studentName;
    }
}
$object = new Student2;
$object->setStudentName("김주완");
$object->setStudentId("GimJooWan");
$object->printStudent();
//
//ID : GimJooWan
//NAME : 김주완
?>