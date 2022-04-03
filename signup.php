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
    <form method="post" action="connect.php">
    <input type="Firstname" class="input-box" placeholder="First name" name="firstname">
    <input type="Lastname" class="input-box" placeholder="Last name" name="lastname">
    <p><input type="email" class="input-box1" placeholder="Email/Phone #"name="email"></p>
    <input type="Password" class="input-box1" placeholder="Password"name="password">
    <input type="address" class="input-box1" placeholder="Province/Municipality/City/Zip Code" name="address">
    <p><hr>
    <span>
    <input type="date" name="bdate" class="form-control"/>
    </hr></p>
    <input type="radio" class="gender" name="gender" value="M">Male
    <input type="radio" class="gender" name="gender" value="F">Female

    <p><span><input type="checkbox" name="c"></span> I agree to the Terms & Conditions</p>
    <p><span><input type="checkbox"></span> I agree to share my location</p>


    <button type="submit" class="signupbutton" value="confirm" name="s">Sign up</button>
    
    </form>
    <?php
if(isset($_POST['s']))
{
    if(!isset($_POST['c']))
    {echo "Please Click on terms and condition";
    
    }
    else
    {$action = "connect.php";
    }
}
?>
</div>
    </div>

</body>

</html>
