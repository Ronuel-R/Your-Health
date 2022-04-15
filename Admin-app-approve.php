<?php
include "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleforpendingapp.css">
    <link rel="icon" href="Images/logo3.png"type="image">
    <title>User Pending Approval</title>
</head>
<body>
    <div class="center">
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
<h1>Appointment Approval</h1>

<table id = "users">
    <tr>
    <th>Date Created</th>
    <th>Email Address</th>
    <th>Doctor</th>
    <th>Department</th>
    <th>Message</th>
    <th>Action</th>
</tr>
<?php
$query = "SELECT * from appointment WHERE status = 'pending'order by date ASC";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result)){
?>
<tr>
    
    <td><?php echo $row['date'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['Doctor'];?></td>
    <td><?php echo $row['Department'];?></td>
    <td><?php echo $row['Message'];?></td>
    <td>
        <form action = Admin-app-approve.php method = "POST">
            <input type = "hidden" name="date" value= "<?php echo $row['date'];?>"/>
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
    $date = $_POST['date'];
    $select = "UPDATE appointment SET status= 'approved' WHERE date='$date'";
    $result = mysqli_query($conn,$select);

    echo '<script type = "text/javascript">';
    echo 'alert("Appointment Approved!");';
    echo 'window.location.href = "Admin-app-approve.php"';
    echo '</script>';
}
if(isset($_POST['deny'])){
    $date = $_POST['date'];
    $select = "DELETE FROM appointment WHERE date= '$date'";
    $result = mysqli_query($conn, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("Appointment Denied!");';
    echo 'window.location.href = "Admin-app-approve.php"';
    echo '</script>';
}?>
</body>
</html>