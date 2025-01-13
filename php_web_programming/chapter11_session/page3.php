<?php
session_start();
$_SESSION['G'] = "This is a global variable";

print($_SESSION['G']);
echo "<br>";

$_SESSION['A'] = 10;
$_SESSION['B'] = 20;
?>
<a href="./page4.php">next page</a>
