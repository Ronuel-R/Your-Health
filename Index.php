<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Near You</title>
    <link rel="stylesheet" href="StyleforLi.css">
</head>
<body>
    <div class="background-image">
   <br><br><br><br><br><br><br><br><div img class="img-logo">
   <div class="center">
        <h1> Log In </h1>
        
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

       <!-- <h1> <div img class="little-logo"> </h1> -->
        <form method="post" action="login.php">
            <div class="txt_field">
                <span></span>
                <input type="text" name="email" required >
                <label> Email </label>
             </div>
             <div class="txt_field">
                <input type="Password" name="password"required >
                <span></span>
                <label>Password</label>
             </div>
             <div class="Fpass">Forgot Password?</div>
             <button type="submit" class="signupbutton" value="login">Login</button>
             <div class="SignUp_link">
                 Create Account? <a href="signup.php"> Sign up Here! </a>
                 </form>
                 </div>
</body>
</html>