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
<h1>User Register</h1>

<table id = "users">
    <tr>
    <th>Date Created</th>
    <th>Email Address</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Action</th>
</tr>
<?php
$query = "SELECT * from Accounts WHERE status = 'pending'order by date ASC";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result)){
?>
<tr>
    
    <td><?php echo $row['date'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['firstname'];?></td>
    <td><?php echo $row['lastname'];?></td>
    <td>
        <form action = Admin-approval.php method = "POST">
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
<?php
if(isset($_POST['approve'])){
    $date = $_POST['date'];
    $select = "UPDATE Accounts SET status= 'approved' WHERE date='$date'";
    $result = mysqli_query($conn,$select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Approved!");';
    echo 'window.location.href = "Admin-approval.php"';
    echo '</script>';
}
if(isset($_POST['deny'])){
    $date = $_POST['date'];
    $select = "DELETE FROM Accounts WHERE date= '$date'";
    $result = mysqli_query($conn, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Denied!");';
    echo 'window.location.href = "Admin-approval.php"';
    echo '</script>';
}?>
</body>
</html>