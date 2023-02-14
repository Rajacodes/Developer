<?php
session_start();

// DATABASE 
include 'connection.php';


?>

<?php
if(isset($_POST['signin'])){
	$email = mysqli_real_escape_string($connection,$_POST['email']);
	$password = mysqli_real_escape_string($connection,$_POST['password']);
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM user WHERE email='$email' AND password='$password' ";
	$result= mysqli_query($connection, $query);
	$usertype= mysqli_fetch_array($result);
	if($usertype['usertype']=='admin'){
		$_SESSION['email']=$email;
		$_SESSION['usertype'] = 'admin';
		header("location:@dm!n/index.php");
		
		
	} 
	elseif($usertype['usertype']=='user'){
		$_SESSION['email']=$email;
		$_SESSION['usertype'] = 'user';	
		
		echo ("username and password are incorrect");
		header("location:index.php");
		
	}
	else {
		header("location:login.php?login=username and password are incorrect");
		echo "Invalid credential";		

	}
}
?>





<!doctype html>
<html lang="en">
  <head>
  <title>JKR</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/login.css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
 <section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
			<form action="login.php" method="POST">

            <h3 class="mb-5">Sign in</h3>

            <div class="form-outline mb-4">
            	  <label class="form-label" for="typeEmailX-2" autocomplete="off">Email</label>
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" name="email">
            
            </div>

            <div class="form-outline mb-4">
            	<label class="form-label" for="typePasswordX-2" autocomplete="off">Password</label>
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password">
              
            </div>

       

            <button class="btn btn-primary btn-lg btn-block"  name="signin">Sign in</button> 
			
			<div class="text-center">
                <a class="small" href="forgetpassword.php">Forget password !</a>
    		</div>

			<div class="text-center">
                <a class="small" href="register.php">Create an Account!</a>
            </div>

			</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>