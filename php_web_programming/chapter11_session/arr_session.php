<?php
session_start();
$_SESSION['fruit'] = array("Apple", "Banana");

foreach ($_SESSION['fruit'] as $fr) {
    print $fr."<br>";
}


?>