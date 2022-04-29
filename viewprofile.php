
<?php
session_start();
include "db_connect.php";

$firstname =$_SESSION["firstname"];
$lastname =$_SESSION["lastname"];
?>

<!DOCTYPE html>
<html>
 <head>
      <title>User Profile</title>
      <link rel="shortcut icon" type="image/png" href="logo3.png">
      
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>

<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
  rel="stylesheet"
/>
<?php
include('header.php');?>


<link rel="stylesheet" href="styleforvp.css">

</head>
<body class="bg-light">
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
<div class="col-sm-6">
<?php if (isset($_SESSION['specialty'])) { ?>
  <p class="font-weight-bold">Specialty:</p>
  <h6 class="text-muted"><?php echo $_SESSION['specialty']?></h6>
  <?php } ?>
</div>
</div>



</body>
</html>