<?php
session_start();

echo "세션 시작!!<p>";

$a=$_SESSION['userid']="kdhong";
$_SESSION['username']="홍길동";

echo $_SESSION['userid'];
echo"<br>";
echo $a;
echo"<br>";
echo $_SESSION['username'];
?>
