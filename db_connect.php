<?php

$sname= "localhost";
$email= "root";
$password = "";
$db_name = "yourhealth";

$conn = mysqli_connect($sname, $email, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}