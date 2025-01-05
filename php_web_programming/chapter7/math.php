<?php
//수학
$result_sin = sin(M_PI / 6);
$result_cos = cos(M_PI / 6);
$result_tan = tan(M_PI / 6);

print($result_sin . "<br>" . $result_cos . "<br>" . $result_tan);
print("<br>");
// 로그. sqrt, pow. 함수
$result = log(10);
print("log(10) = $result <br>");
$result = log10(10);
print("log10(10) = $result<br>");
$result = sqrt(49);
print("sqrt(49) = $result<br>");
$result = pow(10, 2);
print("pow(10,2) = $result<br>");
//log(10) = 2.302585092994
//log10(10) = 1
//sqrt(49) = 7
//pow(10,2) = 100


// bcadd, bcsub, bcmul, bcdiv -. 큰수 사칙연산
// bcmod : 나머지 값 반환
// bcsqrt : 제곱근 값 반환
// bcpow : 거듭제곱
$num1 = 999999999999999999;
$num2= $num1+2;

echo($num2."<br>"); // 1.0E+22
$num2 = bcadd($num1, 2);
echo ($num2);

//

?>
