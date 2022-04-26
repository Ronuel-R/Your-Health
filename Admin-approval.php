<?php
include "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleforpending.css">
    <link rel="icon" href="Images/logo3.png"type="image">
    <title>User Pending Approval</title>
</head>
<body>
    <div class="center">
    <body>
        <div class = "menu-bar">
        <div class ="logogo">
        <img class ="logo" src="Images/logo3.png"> 
        <Span>Your Health</span>
        <ul>
                <li class = "active"><a href="admin-dashboard.php"><i class="fa-solid fa-house-chimney-heart"></i>Home</a></li>
                <li><a href="Admin-approval.php">Pending Users</a></li>
                <li><a href="Admin-app-approve.php">Pending Appointments</a></li>
                <li><a href="Logout.php">Logout</a></li>
            </ul>
            </div>
            </div>
            <div class = "container">
            <ul class="tab-container">
<h1>User Register</h1>

<table id = "users">
    <tr>
    <th>userid</th>
    <th>Email Address</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Action</th>
</tr>
<?php
$query = "SELECT * from Accounts WHERE status = 'pending'order by userid ASC";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result)){
?>
<tr>
    
    <td><?php echo $row['userid'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['firstname'];?></td>
    <td><?php echo $row['lastname'];?></td>
    <td>
        <form action = Admin-approval.php method = "POST">
            <input type = "hidden" name="userid" value= "<?php echo $row['userid'];?>"/>
            <input type = "submit" name="approve" value= "Approve"/>
            <input type = "submit" name="deny" value= "Deny"/>
</form>
</td>
</tr>
<?php
}
?>
</table>
</div>
</ul>
</div>
<?php
if(isset($_POST['approve'])){
    $userid = $_POST['userid'];
    $select = "UPDATE Accounts SET status= 'approved' WHERE userid='$userid'";
    $result = mysqli_query($conn,$select);
    $query = "INSERT INTO chat_users (userid, email, password)
    SELECT userid, email, password FROM yourhealth.accounts WHERE userid='$userid';";
    $result1 = mysqli_query($conn1,$query);

    echo '<script type = "text/javascript">';
    echo 'alert("User Approved!");';
    echo 'window.location.href = "Admin-approval.php"';
    echo '</script>';
    
}
if(isset($_POST['deny'])){
    $userid = $_POST['userid'];
    $select = "DELETE FROM Accounts WHERE userid= '$userid'";
    $result = mysqli_query($conn, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Denied!");';
    echo 'window.location.href = "Admin-approval.php"';
    echo '</script>';
}?>
</body>
</html>