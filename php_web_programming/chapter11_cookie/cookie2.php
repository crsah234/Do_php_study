<?php


print "Country : ".$_COOKIE['country'];
echo "<br>";

// 쿠키는 사용자의 데이터를 브라우저에 저장함
// 동일한 컴퓨터에 다른 종류의 브라우저에 저장된 쿠키 값은 읽을 수 없다.

setcookie("country","UK");
print "Country : ".$_COOKIE['country'];
echo "<br>";


unset($_COOKIE['country']);
print "Country : ".$_COOKIE['country'];

?>
