<?php
// people ->student / professor / staff
//
//
class People
{
    protected $name;
    protected $age;

    function printPeople()
    {
        print "Name : " . $this->name . " + " . $this->age;
    }

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class Student extends People
{
    private $studentId;

    function __construct($name, $age, $id)
    {
        parent::__construct($name, $age);
        $this->studentId = $id;
    }
    function printStudent(){
        print $this->studentId." / ".$this->name." / ".$this->age;
    }

}

$object_student = new Student("asdf",1,2);
$object_student->printPeople();
echo "<br>";
$object_student->printStudent();

?>
