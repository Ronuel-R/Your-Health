<?php 
SESSION_START();
include('header.php');
$loginError = '';
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include ('Chat.php');
	$chat = new Chat();
	$user = $chat->loginUsers($_POST['email'], md5($_POST['pwd']));	
	if(!empty($user)) {
		$_SESSION['email'] = $user[0]['email'];
		$_SESSION['userid'] = $user[0]['userid'];
		$chat->updateUserOnline($user[0]['userid'], 1);
		$lastInsertId = $chat->insertUserLoginDetails($user[0]['userid']);
		$_SESSION['login_details_id'] = $lastInsertId;
		header("Location:index.php");
	} else {
		$loginError = "Invalid email or password!";
	}
}

?>
<style>
.container{
	background: white;
}
</style>

<title>Your Health</title>
<?php include('container.php');?>
<br></br><br></br>
<div class="container">		
	<h2>Chat: Login</h1>		
	<div class="row">
		<div class="col-sm-4">
			<h4>Chat Login:</h4>		
			<form method="post">
				<div class="form-group">
				<?php if ($loginError ) { ?>
					<div class="alert alert-warning"><?php echo $loginError; ?></div>
				<?php } ?>
				</div>
				<div class="form-group">
					<label for="email">User:</label>
					<input type="email" class="form-control" name="email" required>
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" name="pwd" required>
				</div>  
				<button type="submit" name="login" class="btn btn-info">Login</button>
			</form>
			<br>
		</div>
		
	</div>
</div>	
<?php include('footer.php');?>






