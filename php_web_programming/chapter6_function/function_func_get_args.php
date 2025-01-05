<!---->
<?php

//// 가변 파라미터 함수 구현
// func_get_args() -> 유저가 전달한 가변 파라미터 가져올 수 있음
function my_print()
{
    $args = func_get_args();
    foreach ($args as $arg) {
        print "파라미터 : $arg <br>";
    }

}

my_print("Apple", "Banana", "Cherry");


//// 재귀함수
// 팩토리얼 함수 구현

function factorial($n)
{
    if ($n == 1) return (1);
    return ($n * factorial($n - 1));
}

for ($i = 1; $i < 10; $i++) {
    print("팩토리얼 $i : ");
    print(factorial($i));
    print("<br>");
}
//팩토리얼 1 : 1
//팩토리얼 2 : 2
//팩토리얼 3 : 6
//팩토리얼 4 : 24
//팩토리얼 5 : 120
//팩토리얼 6 : 720
//팩토리얼 7 : 5040
//팩토리얼 8 : 40320
//팩토리얼 9 : 362880
//

//// 피보나치 함수 구현
function fibo($num)
{
    if ($num == 0 || $num == 1) return ($num);
    return (fibo($num - 1) + fibo($num - 2));
}

for ($i = 0; $i <= 4; $i++) {
print("fibo($i) ".fibo($i)."<br>");

}


?>


