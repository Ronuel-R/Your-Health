<?php

$sname= "localhost";
$email= "root";
$password = "";
$db_name = "yourhealth";

$conn = mysqli_connect($sname, $email, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
$sname1= "localhost";
$email1= "root";
$password1 = "";
$db_name1 = "chat_system";

$conn1 = mysqli_connect($sname1, $email1, $password1, $db_name1);

if (!$conn1) {
	echo "Connection failed!";
}
?>