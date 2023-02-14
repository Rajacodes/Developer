<?php

include 'connection.php';
session_start();
if(!isset($_SESSION['email'])){
  header('location: index.php');
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
    <link rel="stylesheet" href="assets/css/mycode.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>    
    
  <?php

include "connection.php";
if (isset($_POST['submit'])){
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$comment = $_POST['commit'];
    $message = $_POST['message'];
	

	$query = "INSERT INTO comment(email, phone, commit, message) VALUES('$email','$phone', '$comment','$message')";
	$result1 = mysqli_query($connection, $query);

	
    if($result1){
        $_SESSION['success']='your data is deleted';
        header('location:profile.php');
    }
    else{
        $_SESSION['success']='your data is not deleted';
        header('location:index.php');

    }	
}

?>



    <div class="container">
        <div class="main-body">
        
              <!-- Breadcrumb -->
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container"> 
        
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="profile.php">Home </a>
                </li>  
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Products</a>
                </li>
              </ul>
              <ul class="navbar-nav navbar-right>
                <li class="nav-item ">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="logout.php"> Logout </a>
                  </li>
              </ul>
            </div>

          </nav>
              <!-- /Breadcrumb -->
        
              <section id="contact">
	<div class="sectionheader">	<h1>CONTACT</h1></div>
	<article>
	<p>Customer having any queries about the product and drawbacks mentioned it in below mail icon click view itslef.</p>
		
			<label for="checkcontact" class="contactbutton"><div class="mail"></div></label><input id="checkcontact" type="checkbox">
	
			<form action="contact.php" method="post" class="contactform"><br>
			<p class="input_wrapper"><input type="text" name="email" value=""  id ="contact_sujet" autocomplete="off">
        <label for="contact_sujet">EMAIL</label></p>
				<p class="input_wrapper"><input type="text" name="phone" value=""  id ="contact_email" autocomplete="off">
        <label for="contact_email">PHONE</label></p>
				<p class="input_wrapper"><input type="text" name="commit" value=""  id ="contact_sujet" autocomplete="off">
        <label for="contact_sujet">SUBJECT</label></p>
				<p class="textarea_wrapper"><textarea name="message" id="contact_message" autocomplete="off"></textarea></p>
				<button name="submit" class="btn btn-primary">Submit</button>		
			</form>
	</article>
</section>
          
           
               
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>