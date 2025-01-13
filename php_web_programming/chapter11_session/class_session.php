<?php
session_start();


class Complex
{
    private $real;
    private $imaginary;

    function Complex($real, $imaginary)
    {
        $this->real = $real;
        $this->imaginary = $imaginary;
        var_dump($imaginary);
    }
    function printComplex()
    {
        if ($this->imaginary > 0) {

            return $this->real . "+" . $this->imaginary . "i";

        } else if ($this->imaginary == 0) {
            return $this->real;
        } else return $this->real . $this->imaginary . "i";
    }


}


$complex = new Complex();
var_dump($complex);
var_dump($complex->Complex(2,3));
var_dump($complex->printComplex());
//var_dump($complex->printComplex());
echo $complex->printComplex();


$_SESSION['complex1']=serialize($complex);
//print_r($_SESSION['complex1']) ;

?>
<a href="./view_class_session.php">Next Page</a>