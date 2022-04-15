<?php
session_start(); 
include "db_connect.php";
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Your Health</title>
	<link rel="icon" href="Images/logo3.png"type="image">
	<link rel="stylesheet" href="styleforchat.css" type="text/css" />
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</head>
<body>
	
	<div class="centeralised">

	<table id = "users">
	
    <tr>
    <th>Sender</th>
    <th><?php echo $email?></th>
</tr>
<form action="" method="POST">
<tr>
    <th>Receiver</th>
    <th><select id="recipient" name= "recipient"  style="padding: 5px 10px  ">
	 <option> Select recipient </option> 
<?php
$query = "SELECT * from accounts WHERE status = 'approved' && usertype = 'u' order by date ASC";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result)){
?>
            <option> <?php echo $row['email'];?> </option>
			<?php }?>
</select>
</th>
</tr>
</table>

	<div class="chathistory"></div>
	<div class="chatbox">
		
		
			
			<textarea class="txtarea" id="message" name="message"></textarea>
		</form>
	</div>
	</div>
	
	<script>
		$(document).ready(function(){
			loadChat();
		});
		
		$('#message').keyup(function(e){
			var message = $(this).val();	
			if( e.which == 13 ){
				$.post('handlers/ajax.php?action=SendMessage&message='+ message,'&recipient='+recipient, function(response){
					
					loadChat();
					$('#message').val('');
				}
				);
			}
		});
		function loadChat()
		{
			$.post('handlers/ajax.php?action=getChat', function(response){
				
				$('.chathistory').html(response);
			});
		}
		setInterval(function(){
			loadChat();
		}, 2000);
	</script>
</body>
</html>