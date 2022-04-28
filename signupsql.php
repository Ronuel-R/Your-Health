<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$phonenum = filter_input(INPUT_POST, 'phonenum');
$password1 = filter_input(INPUT_POST, 'password1');
$password2 = filter_input(INPUT_POST, 'password2');
$address = filter_input(INPUT_POST, 'address');
$gender = filter_input(INPUT_POST, 'gender');
$bdate = filter_input(INPUT_POST, 'bdate');

if ($password1 === $password2){
$password1=md5($password1);
$firstname1 = ucfirst($firstname);
$lastname1 = ucfirst($lastname);
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
    $sql = "INSERT INTO Accounts (firstname, lastname, email, address, password, gender,usertype, bdate, status , phonenum, avatar)
    values ('$firstname1','$lastname1','$email', '$address', '$password1', '$gender' ,'u', '$bdate' , 'pending','$phonenum', 'user1.jpg')";
    
    header("Location: signup.php?error=Email already used.");
if ($conn->query($sql)){
header("Location: Index.php?error=Account Successfully created");
}

$conn->close();
}
}else{
    header("Location: signup.php?error=Password does not match.");
}

?>