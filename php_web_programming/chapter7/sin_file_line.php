<?php

// 실행하는 파일, 라인 알려주기
print __FILE__."<br>";
print __LINE__."<br>";


// 운영체제, PHP 버전상수
print(PHP_OS."<br>" );
print(PHP_VERSION."<br>");

// Globals 배열 -> 미리 정의된 상수를 배열에 저장하고 있다.
echo ("<pre>");
print_r($GLOBALS);

// phpinfo() -= > php 상태 정보를 표형식으로 출력하느 ㄴ것

//phpinfo();


// define : $없이 상수 정의하는 함수

define("R2",1.13123124);
print(R2);



?>
