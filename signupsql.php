<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$address = filter_input(INPUT_POST, 'address');
$gender = filter_input(INPUT_POST, 'gender');
$bdate = filter_input(INPUT_POST, 'bdate');
$password=md5($password);
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
    $sql = "INSERT INTO unverified_account (firstname, lastname, email, address, password, gender,usertype, bdate)
    values ('$firstname','$lastname','$email', '$address', '$password', '$gender' ,'u', '$bdate')";
    header("Location: signup.php?error=Email already used.");
if ($conn->query($sql)){
header("Location: Index.php?error=Account Successfully created");
}

$conn->close();
}

?>