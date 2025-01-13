<?php

setcookie("country","KR");



?>
<?php
$fruit = array(
    "사과" => 10,
    "배" => 20,
    "복숭아" => 30,
    "수박" => 40,
    "감" => 50,
    "토마토" => 60,
    "바나나" => 70,
    "키위" => 80,
    "파인애플" => 90,
    "대추" => 100
);
while(list($name,$price)=each($fruit)){
    print($name."/".$price."<br>");
}
?>
<a href="cookie2.php">Next page</a>
