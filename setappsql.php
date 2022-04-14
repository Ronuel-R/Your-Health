<?php
session_start(); 
include "db_connect.php";

$depselect = filter_input(INPUT_POST, 'depselect');
$Doctorselect = filter_input(INPUT_POST, 'Doctorselect');
$dateselect = filter_input(INPUT_POST, 'dateselect');
$message = filter_input(INPUT_POST, 'message');
$email = $_SESSION['email'];
$host = "localhost";
$dbemail = "root";
$dbpassword = "";
$dbname = "yourhealth";

$conn = new mysqli ($host, $dbemail, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
        $sql = "INSERT INTO Appointment (Department,email, Doctor, date, Message,status)
        values ('$depselect','$email','$Doctorselect','$dateselect', '$message','pending')";
      
if ($conn->query($sql)){
    echo '<script type = "text/javascript">';
    echo 'alert("Wait for Admin Approval");';
    echo 'window.location.href = "mp.php"';
    echo '</script>';
}

$conn->close();
}

?>