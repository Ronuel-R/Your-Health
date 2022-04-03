<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Near You</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="background-image">
    <h1>Your Health </h1>
    <h2>Sign up</h2>
    <div class="Sign-up">
    <form method="post" action="connect.php">
    <input type="Firstname" class="input-box" placeholder="First name" name="firstname">
    <input type="Lastname" class="input-box" placeholder="Last name" name="lastname">
    <p><input type="email" class="input-box1" placeholder="Email/Phone #"name="email"></p>
    <input type="Password" class="input-box1" placeholder="Password"name="password">
    <p><hr>
    <span> 
        <label for="day">Day:</label>
        <select name="day" id="day"></select>

        <label for="month">Month:</label>
        <select name="month" id="month"></select>

        <label for="year">Year:</label>
        <select name="year" id="year"></select>
    </span>
</hr></p>
<input type="radio" class="gender" name="gender">Male
<input type="radio" class="gender" name="gender">Female

    <p><span><input type="checkbox"></span> I agree to the terms of services</p>
    <p><span><input type="checkbox"></span> Do you agree to share your location</p>
    <button type="submit" class="signupbutton" value="submit">Sign up</button>
    
    </form>
</div>

    </div>

</body>
</html>