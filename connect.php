<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
if (!empty($firstname)){
if (!empty($lastname)){
if (!empty($email)){
if (!empty($password)){
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
    $sql = "INSERT INTO account (firstname, lastname, email, password)
    values ('$firstname','$lastname','$email','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "email should not be empty";
die();
}
}
else{
echo "lastname should not be empty";
die();
}
}
else{
echo "firstname should not be empty";
die();
}
?>