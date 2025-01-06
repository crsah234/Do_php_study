<?php
// 역순의 문자열 strrev()
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$str1 = strrev($str);
echo $str1; // ZYXWVUTSRQPONMLKJIHGFEDCBA
echo "<br>";

// 문자열 나누기 substr()
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ 12345678910";
$str1 = substr($str, 2, 5);
echo $str1;//  //CDEFG [2]부터 5개

// 문자열 빈공간 지우기 trim(), chop()==rtrim()
echo "<br>";
$str0 = " Apple Banana Pear a ";
$str1 = chop($str0);// ==rtrim()
echo $str1;

$str2 = ltrim($str0);
$str3 = rtrim($str0);
$str4 = trim($str0);

// 문자열 길이 strlen()
echo " <Br>";
$num = strlen($str0);
echo $num;

// sscanf()
// 문자열을 주어진 문자열(변수)로 분리하고자 할때 sscanf()를 사용
echo "<br>";
$date = "September 30 2017";
sscanf($date, "%s %d %d",$month,$day,$year);
echo $month."/".$day."/".$year;
//September
//30
//2017

// str_repeat() : 반복
$str = "1234";
echo "<br>";
print (str_repeat($str,2)); // 12341234

// explode() : 구분자를 지정하여 주어진 문자열 분리할때
$str = "1/2/3/4";
$value = explode("/",$str);
echo "<br>";
print_r($value); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )

$value = explode("/",$str,2); // limit = 2
echo "<br>";
print_r($value); // Array ( [0] => 1 [1] => 2/3/4 )

// implode() : 배열원소를 결합하여 문장 하나로 만들때
$numbers = array(1,2,3,4);
$string1 = implode($numbers);
echo"<br>$string1"; // 1234




?>
