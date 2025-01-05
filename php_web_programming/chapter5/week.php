<?php
$week = array("sun", "mon", "tue", "wedn", "thr", "fri", "sat");
$weekend = array($week[6], $week[0]);
print($weekend[0] . " " . $weekend[1]);


//// 멀티타입 매열
print("<br>");
$multitype = array(20, 3.14, 'A', 'Bob');
foreach ($multitype as $a) {
    print($a . " ");
}

$numbers = array(10, 20, 30, 40);
print("<br>");
print_r($numbers); // Array ( [0] => 10 [1] => 20 [2] => 30 [3] => 40 )

//// 연상 배열
// 코드와 같이 임의로 인덱스 값을 변경할 수 있다.
print("<br>");
$numbers1 = array(10, 20, 30, 5 => 30, 40);
// Array ( [0] => 10 [1] => 20 [2] => 30 [5] => 30 [6] => 40 )
print_r($numbers1);

// 문자를 키로 가져서 진행 할 수 있음.
print("<br>");
$freshman = array(
    "David" => "Computer",
    "Alice" => "Math",
    "Elsa" => "Physics"
);

print_r($freshman);
//Array ( [David] => Computer [Alice] => Math [Elsa] => Physics )

// 원소를 배열로 가질수 가 있다.

$freshman1 = array(
    "David" => "Computer",
    "Alice" => "Math",
    "Elsa" => "Physics",
    "Chris" => array("Electronics", "Statistics")
);
print("<br>");
print_r($freshman1["Chris"]);
// Array ( [0] => Electronics [1] => Statistics )

//// 다차원 배열
$twpd_array = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
print("<br>");
$temp = $twpd_array[2][1];
print($temp); // 8

//// 연상 배열 삭제하기
//// unset()

$freshman2 = array(
    "David" => "Computer",
    "김주완" => "단소살인마",
    "Elsa" => "Physics",
    "Chris" => array("Electronics", "Statistics")
);
print("<br>");
print_r($freshman2);
print("<br>");
unset($freshman2["김주완"]);
print_r($freshman2);
//Array ( [David] => Computer [김주완] => 단소살인마 [Elsa] => Physics [Chris] => Array ( [0] => Electronics [1] => Statistics ) )
//Array ( [David] => Computer [Elsa] => Physics [Chris] => Array ( [0] => Electronics [1] => Statistics ) )

//// foreach 문
$freshman2 = array(
    "David" => "Computer",
    "김주완" => "단소살인마",
    "Elsa" => "Physics",
    "Chris" => array("Electronics", "Statistics")
);
print("<br>");
foreach ($freshman2 as $temp2) {
    print_r($temp2);
    print(" ");
}
// Computer 단소살인마 Physics Array ( [0] => Electronics [1] => Statistics )

//// array_diff  둘이상의 배열을 서로 비교할 때 사용함

$arr1 = array("A", "B", "C", "D", "E", "F", "G");
$arr2 = array("A", "B", "C");
$arr3 = array("A", "B", "C", "D");
print("<br>");
print_r(array_diff($arr1, $arr2, $arr3));

//// 일반 배열의 정렬
// sort()
$arrays = array("DAVID", "ALICE");

sort($arrays);
print("<br>");
print_r($arrays);

// natsort()
$arrays1 = array("sample1", "sample11", "sample12", "sample13", "sample2", "sample21", "sample22", "sample23", "sample24");

natsort($arrays);
print("<br>");
print_r($arrays1);
//Array ( [0] => sample1 [1] => sample11 [2] => sample12 [3] => sample13
//[4] => sample2 [5] => sample21 [6] => sample22 [7] => sample23 [8] => sample24 )

//// 연상배열의 정렬
// 1. asort() / 순방향 / 값
// 2. arsort() / 역방향 / 값
// 3. ksort() / 순방향 / 키
// 4. krsort() / 역방향 / 키

$fruit1 = array(
    "Apple" => "Red",
    "Peach" => "Pink",
    "Banana" => "Yellow"
);

$fruit2 = array(
    "Apple" => "Red",
    "Peach" => "Pink",
    "Banana" => "Yellow"
);



?>
