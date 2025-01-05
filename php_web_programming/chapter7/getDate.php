<?php
// getdate()
$seoul = getdate();

print("현재시간 : " . $seoul['year'] . "년" . $seoul['mon'] . "월" . $seoul['mday'] . "일" .
    ($seoul['hours'] + 9) . "시" . $seoul['minutes'] . "분" . $seoul['seconds'] . "초");

// gmdate()

$year = gmdate('Y'); // Year
$mon = gmdate('m'); // Month
$day = gmdate('d'); // Day
$hour = gmdate('G'); // hour
$min = gmdate('i'); // Minutes
$sec = gmdate('s'); // Second

$seoul = getdate(mktime($hour+9,$min,$sec,$mon,$day,$year));
echo "<pre>";
print_r($seoul);
//Array
//(
//    [seconds] => 43
//    [minutes] => 59
//    [hours] => 19
//    [mday] => 5
//    [wday] => 0
//    [mon] => 1
//    [year] => 2025
//    [yday] => 4
//    [weekday] => Sunday
//[month] => January
//[0] => 1736107183
//)

?>
