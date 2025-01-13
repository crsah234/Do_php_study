<?php
global $a;
$a= 1;

echo $a; //1
echo "<br>";

$a=2;
echo $a; // 2


function A(){
    global $n;
    print $n."<br>";
}

function B(){
    $n = 'B'; // 이게 왜 B가 안먹히지.. 정적 적용범위라서 그런가...
                // Global $a가 아닌 지역변수이기 때문
    A();
}
$n = 'N';
A(); // N
B(); // N


?>