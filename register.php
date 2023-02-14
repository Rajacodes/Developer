<?php
//DATABASE CONNECTION
include "connection.php";
session_start();

if (isset($_POST['signup'])){
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$email = mysqli_real_escape_string($connection,$_POST['email']);
	$password = mysqli_real_escape_string($connection,$_POST['password']);
	$confirm = mysqli_real_escape_string($connection,$_POST['confirm']);
	$usertype = mysqli_real_escape_string($connection, $_POST['usertype']);

	$emailquery = "SELECT * FROM user WHERE email='$email' ";
	$emailrun = mysqli_query($connection, $emailquery);
	if(mysqli_num_rows($emailrun) > 0){
		echo "Aready taken the email";
		
	}
	else {
		if($password === $confirm){
			$regquery = "INSERT INTO user(username, email, password, confirm, usertype) VALUES('$username', '$email','$password', '$confirm','$usertype')";
			$queryrun = mysqli_query($connection, $regquery);
			if($queryrun){
				header('location:login.php?sucess=User profile added');
			}
			else {
				header('location:register.php?error=User profile not added');
			}
		}
		else{
	
			echo "Password does not match";
			
		}
	}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>JKR</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="assets/css/register.css">
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Create shopping account</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="register.php" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required="" autocomplete="off">
					<input class="text email" type="email" name="email" placeholder="Email" required=""autocomplete="off">
					<input class="text" type="password" name="password" placeholder="Password" required="" autocomplete="off">
					<input class="text w3lpass" type="password" name="confirm" placeholder="Confirm Password" required="" autocomplete="off">
					<input class="text" type="hidden" name="usertype" placeholder="Username" required="" value="user" autocomplete="off">
					
					<input type="submit" name="signup" value="SIGNUP">
				</form>
				<p>Already  have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>

</body>
</html>



