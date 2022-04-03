<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$address = filter_input(INPUT_POST, 'address');
$gender = filter_input(INPUT_POST, 'gender');
$bdate = filter_input(INPUT_POST, 'bdate');
if (!empty($firstname)){
if (!empty($lastname)){
if (!empty($email)){
if (!empty($password)){
if (!empty($address)){
if (!empty($gender)){
if (!empty($bdate)){
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
    $sql = "INSERT INTO account (firstname, lastname, email, address, password, gender, bdate)
    values ('$firstname','$lastname','$email', '$address', '$password', '$gender' , '$bdate')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
header("Index.php");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
    echo "Birthday should not be empty";
    die();
    }
    }
else{
echo "Gender should not be empty";
die();
}
}
else{
echo "Address should not be empty";
die();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Email should not be empty";
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