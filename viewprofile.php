<?php
session_start();
include "db_connect.php";
$firstname =$_SESSION["firstname"];
$lastname =$_SESSION["lastname"];
?>
<!DOCTYPE html>
<html>
 <head>
      <title>Profile Card</title>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="styleforvp.css">
</head>
<body class="bg-light">
<div class = "menu-bar">
        <div class ="logogo">
        <img class ="logo" src="Images/logo3.png"> 
        <Span>Your Health</span>
        <ul>
                <li class = "active"><a href="#"><i class="fa-solid fa-house-chimney-heart"></i>Home</a></li>
                <li><a href="ChatSystem/index.php">Message</a></li>
                <li><a href="#">Schedules</a>
                <div class="sub-menu-1">
                    <ul>
                <li><a href="setapp.php"> Set Appointments   </a></li>
                <li><a href="#"> Your Appointments</a></li>       
                    </ul>
                </div> </li>
                <li><a href="#">Profile</a>
                <div class="sub-menu-2">
                <ul>
                <li><a href="#"> Account Settings</a></li>
                <li><a href="viewprofile.php"> View Profile</a></li>
                <li><a href="logout.php"> Logout</a></li>
                </ul>
                </div></li>
                <li><a href="#">About</a>
                <div class="sub-menu-3">
                <ul>
                <li><a href="#"> Mission</a></li>
                <li><a href="#"> Vission</a></li>
                <li><a href="#"> Team</a></li>
                </ul>
                </div>
            </li>
                <li><a href="#">Help</a>
                <div class="sub-menu-4">
                <ul>
                <li><a href="#"> Contact US</a></li>
                <li><a href="#"> Settings</a></li>
                <li><a href="#"> Report</a></li>
                </ul>
                </div>
            </li>
            </ul>
            </div>
            </div>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 mt-5 pt-5">
        <div class="row z-depth-3">
          <div class="col-sm-4 bg-info rounded-left">
            <div class="card-block text-center text-white">
              <br></br>
           <?php echo '<img id="profile-img" src="ChatSystem/userpics/'.$_SESSION['avatar'].'" />';?>
              <h2 class="font-Weiht-bold mt-4"><?php echo $firstname ,' ',$lastname?></h2>
              <p>
              <?php echo $_SESSION["gender"]?>
            </p>
              <i class="far fa-edit fa-2x mb-4"></i>
</div>
</div>
<div class="col-sm-8 bg-white rounded-right">
  <h5 class="mt-3 text-center">User Information</h5>
  <hr class="badge-primary mt-0 w-25">
  <div class="row">
    <div class="col-sm-6">
      <p class="font-weight-bold">Email:</p>
      <h6 class="text-muted"><?php echo $_SESSION['email']?></h6>
</div>
<div class="col-sm-6">
      <p class="font-weight-bold">Phone Number:</p>
      <h6 class="text-muted"><?php echo $_SESSION['phonenum']?></h6>
</div>
</div>
<h4 class="mt-3">Others</h4>
<hr class="bg-primary">
<div class="row">
  <div class="col-sm-6">
    <p class="font-weight-bold">Birthday:</p>
    <h6 class="text-muted"><?php echo $_SESSION['bdate']?></h6>
</div>
<div class="col-sm-6">
  <p class="font-weight-bold">Address:</p>
  <h6 class="text-muted"><?php echo $_SESSION['address']?></h6>
</div>
</div>



</body>
</html>