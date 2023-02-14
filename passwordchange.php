<?php
include "connection.php";
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  <title>JKR</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/password.css">

  </head>
  <body>

<?php 



if($_GET['secret']){
  $email = base64_decode($_GET['secret']);
  $queryemail = "SELECT * FROM user WHERE email='$email' ";
  $check = mysqli_query($connection, $queryemail);
  $resultemail = mysqli_num_rows($check);
  if($resultemail>0)
  {
?>
    <div class="mainDiv">
      <div class="cardStyle">
        <form action="request.php" method="post" name="signupForm" id="signupForm">         

          
          <h2 class="formTitle">
             UPDATE YOUR PASSWORD
          </h2>

        <div class="inputDiv">
          <label class="inputLabel" for="password">Email</label>
          <input type="email" id="password" name="email" required value="<?php echo  $email; ?>"  autocomplete="off">
        </div>
          
        <div class="inputDiv">
          <label class="inputLabel" for="password" autocomplete="off">New Password</label>
          <input type="password" id="password" name="password" required>
        </div>
          
        <div class="inputDiv">
          <label class="inputLabel" for="confirmPassword" autocomplete="off">Confirm Password</label>
          <input type="password" id="confirmPassword" name="confirm">
        </div>
        
        <div class="buttonWrapper">
          <button type="submit"   class="submitButton pure-button pure-button-primary" name="submit">
            Update password
          </button>
        </div>
          
      </form>
      </div>
    </div>
<?php
  }
}
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


