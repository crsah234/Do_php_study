<?php
session_start();
print($_SESSION['G']);
print($_SESSION['A']);
print($_SESSION['B']);

print(session_save_path());
?>

