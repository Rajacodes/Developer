<?php
include "connection.php";
session_start();
?>

<?php
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];
  if($password == $confirm){
    $reset_query = "UPDATE user SET  password='$password', confirm='$confirm' WHERE email='$email' ";
    $reset_run = mysqli_query($connection, $reset_query);

    if($reset_run){
      $mes1 = "Your password update successfullly"; 
      echo $mes1;
      header("location:login.php");
    }else {
      $mes2 = "Your password does not update successfullly";
      echo $mes2;
    }

  }
  else {
    echo "Password does not match";
  }
}

?>