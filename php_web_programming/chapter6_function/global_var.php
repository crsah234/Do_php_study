<?php
// 글로벌 함수 만들기 -. global
function make_ten()
{
    global $i;
    $i = $i + 10;
}

$i = 0;
print($i . "<br>");
make_ten();
print($i);
print("<br>");
//// 정적변수
// static 변수 만들기


function inc()
{
    static $i = 1;
    print($i . "<br>");
    $i = $i + 1;
}
for($j=1;$j<=10;$j++){
    inc();

}
//1
//2
//3
//4
//5
//6
//7
//8
//9
//10

//// call by value -> 값이 안바뀜
function swap1($a,$b){
    $temp = $a;
    $a = $b;
    $b=$temp;
}
$a = 3;
$b = 4;
swap1($a,$b);
print($a." ".$b); // 3, 4 => 3,4
// 값에 의한 콜이 기에 값이 안바뀜

//// call by reference -> 주소로 값을 바꿈
// &$a, 등 변수에 주소값인 & 붙임.
function swap2(&$a,&$b){
    $temp = $a;
    $a = $b;
    $b=$temp;
}
print("<br>");
$a = 3;
$b = 4;
swap2($a,$b);
print($a." ".$b); // 3, 4 => 4,3
// 바뀜



?>

