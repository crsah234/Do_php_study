<?php
$fruit = array("사과" => 10, "배" => 20, "복숭아" => 30, "감" => 40);
$low = $_POST['low'];
echo "가격이 ".$low."원 이하인 과일의 목록입니다.";

print "<table border=1><tr><th>이름</th><th>가격</th></tr>";
foreach($fruit as $name => $price){
    if($price<=$low){
        print("<tr><th>".$name."</th><th>".$price."</th></tr>");
    }
}
print "</table>"
?>
