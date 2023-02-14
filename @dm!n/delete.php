<?php
session_start();
ob_start();
include "../connection.php";
if(!isset($_SESSION['usertype'])){
    if($_SESSION['usertype'] !== 'admin'){
        header('location: ../login.php');
    }   
}


if(isset($_POST['delete_btn'])){

    $id=$_POST['delete_id'];

    $query="DELETE FROM user WHERE id='$id'";
    $query_run=mysqli_query($connection,$query);

    if($query_run){
        header('location:index.php?your data is deleted');
    }
    else{
 
        header('location:index.php?your data is not deleted');

    }
}

?>

<?php
if (isset($_POST['edit_update'])){
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $confirm = $_POST['edit_confirm'];
    $usertype = $_POST['edit_usertype'];      
    
    $update_query = "UPDATE user SET username='$username', email='$email', password='$password', confirm='$confirm', usertype='$usertype' WHERE id='$id' ";
    $update_run = mysqli_query($connection, $update_query);
    if($update_run){
        echo "Update success";
        header("location:index.php?modify=update successfull");
    }else {
        echo "Update failure";
  
    }
}
?>

<?php

if(isset($_POST['comment_btn'])){

    $id=$_POST['comment_id'];

    $query="DELETE FROM comment WHERE id='$id'";
    $query_run=mysqli_query($connection,$query);

    if($query_run){
 
        header('location:comment.php?modify=delete succesfull');
    }
    else{

        header('location:comment.php?modify=delete not succesfull');

    }
}

?>

<?php

if(isset($_POST['product_btn'])){

    $id=$_POST['product_id'];
    $image1 = $_POST['product_image1'];

    $query="DELETE FROM products WHERE id='$id'";
    $query_run=mysqli_query($connection,$query);

    if($query_run){
        $path = "../assets/images/collection/".$_POST['product_image1'];
        if(!unlink($path)){
            header('location:product.php?modify=product delete not succesfull');

        }else {
            header('location:product.php?modify=product delelte succesfull');
        }
       
    }
    else{
        header('location:product.php?modify=product not succesfull');

    }
}

?>


<?php

if(isset($_POST['book_btn'])){

    $id=$_POST['book_id'];

    $query1="DELETE FROM booking WHERE id='$id'";
    $query_run1=mysqli_query($connection,$query1);

    if($query_run1){
 
        header('location:booking.php?modify=delete succesfull');
    }
    else{

        header('location:booking.php?modify=delete not succesfull');

    }
}

?>