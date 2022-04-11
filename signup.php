<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Near You</title>
    <link rel="stylesheet" href="styleforsu.css">
    <link rel="icon" href="Images/logo3.png"type="image">
</head>
<body>
    
    <div class="background-image">
    <img src="Images/logo3.png" width="150" height="150" style="margin-left:30px">
    <h2>Sign up</h2>
    <div class="Sign-up">
    <form method="post" action="signupsql.php">
    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
    <input type="Firstname" class="input-box" placeholder="First name" name="firstname" required>
    <input type="Lastname" class="input-box" placeholder="Last name" name="lastname" required>
    <p><input type="email" class="input-box1" placeholder="Email/Phone #" name="email" oninvalid="this.setCustomValidity('Please Enter valid Email Address');" oninput="setCustomValidity('')" required></p>
    <input type="Password" class="input-box1" placeholder="Password"name="password" pattern=".{8,}" oninvalid="this.setCustomValidity('Must contain 8 or more characters');" oninput="setCustomValidity('')" required>
    <input type="address" class="input-box1" placeholder="Province/Municipality/City/Zip Code" name="address" required>
    <p><hr>
    <span>
    <input type="date" name="bdate" class="form-control" required="" oninvalid="this.setCustomValidity('Please Select Date of Birth');" oninput="setCustomValidity('')"/>
    </hr></p>
    <input type="radio" class="gender" name="gender" value="M">Male
    <input type="radio" class="gender" name="gender" value="F">Female

    <p><span><input type="checkbox" name="c" required="" oninvalid="this.setCustomValidity('Please check this box if you want to proceed');" oninput="setCustomValidity('')"></span> I've read and accept the Terms & Conditions</p>
    <p><span><input type="checkbox" required="" oninvalid="this.setCustomValidity('Please check this box if you want to proceed');" oninput="setCustomValidity('')"></span > I agree to share my location</p>
    <button type="submit" class="signupbutton" value="confirm" name="s">Sign up</button>
    </form>

</div>
    </div>

</body>

</html>
