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
        header('location:index.php');
    }
    else{
        $_SESSION['success']='your data is not deleted';
        header('location:comment.php');

    }	
}

?>

