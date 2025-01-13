<?php
session_start();

$complex = unserialize($_SESSION['complex1']);
var_dump($complex);
//echo $complex -> printComplex();

?>