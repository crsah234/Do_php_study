<?php
//// 대소문자 변환
$str = "Apple pie";
// 대문자 변환
$str1 = strtoupper($str);
echo $str1 . "<br>";

//소문자 변환
$str2 = strtolower($str);
echo $str2 . "<br>";

// 첫번째 문자 대문자로 변환
$str3 = ucfirst($str);
echo $str3 . "<br>";

// 각 문자열의 단어의 첫 째 자 대문자로 변경
$str4 = ucwords($str);
echo $str4 . "<br>";



//// URL 다루기
// parse_url : 문자열 url에 저장된 값을 배열에 scheme, host, path, query 형식으로 반환하는 것이다.
$str1 = "http://www.php.edu/testurl.html?name=kim&age=28";

$str2 = parse_url("$str1");
echo "<pre>";
// var_dump() : 파라미터안에 들어있는 값의 형식이나 값의 모든 정보를 보여주는 함수이다.
var_dump($str2);
print("<br>");
//array(4) {
//    ["scheme"]=>
//  string(4) "http"
//    ["host"]=>
//  string(11) "www.php.edu"
//    ["path"]=>
//  string(13) "/testurl.html"
//    ["query"]=>
//  string(15) "name=kim&age=28"
//}

// parse_str($str2["query"], $array1) :
parse_str($str2["query"],$array); // $array에 저장하고 싶은 값을 넣어줌
print_r($array);
//Array
//(
//    [name] => kim
//    [age] => 28
//)






?>
