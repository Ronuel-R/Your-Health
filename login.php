<?php 
session_start(); 
include "db_connect.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);
	$pass=md5($pass);

	if (empty($email)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM account WHERE email='$email' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['firstname'] = $row['firstname'];
            	$_SESSION['lastname'] = $row['lastname'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorrect Username or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorrect Username or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}