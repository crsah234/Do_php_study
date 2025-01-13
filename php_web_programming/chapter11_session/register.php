<?php
session_start();

$_SESSION['var1'] = "variable1";
$_SESSION['var2'] = "variable2";

echo $_SESSION['var1'];
echo"<br>";
echo $_SESSION['var2'];
echo"<br>";

unset($_SESSION['var1']);
//삭제됨

session_unset();// 모든 세션 초기화

echo $_SESSION['var1'];
echo"<br>";
echo $_SESSION['var2'];
echo"<br>";


?>