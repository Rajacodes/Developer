<?php 
include "connection.php";

?>

<?php
if (isset($_POST['edit_update'])){
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $mobile = $_POST['edit_mobile'];
    $address = $_POST['edit_address'];       
    
    $update_query = "UPDATE user SET username='$username', mobile='$mobile', address='$address'  WHERE id='$id' ";
    $update_run = mysqli_query($connection, $update_query);
    if($update_run){
   
        echo "Update success";
        header("location:profile.php");
    }else {
        echo "Update failure";
  
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php 
if(isset($_POST['update_btn'])){
    $id = $_POST['update_id'];
    $query = "SELECT * FROM user WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach ($query_run as $row)
    {

?>
<div>
    <form action="action.php" method="post"  enctype='multipart/form-data'>
        <div class="form-outline mb-4">
 	        <!-- <label class="form-label" for="typeEmailX-2" >Id</label><br> -->
            <input type="hidden" id="typeEmailX-2" name="edit_id" value="<?php echo  $row['id']; ?>">
        </div>
        <div class="form-outline mb-4">
 	        <label class="form-label" for="typeEmailX-2" >Username</label><br>
            <input type="text" id="typeEmailX-2" name="edit_username" value="<?php echo  $row['username']; ?>">
        </div>
      
        <div class="form-outline mb-4">
 	        <label class="form-label" for="typeEmailX-2" >Mobile</label><br>
            <input type="text" id="typeEmailX-2" name="edit_mobile" value="<?php echo  $row['mobile']; ?>">
        </div>
        <div class="form-outline mb-4">
 	        <label class="form-label" for="typeEmailX-2" >Address</label><br>
            <input type="text" id="typeEmailX-2" name="edit_address" value="<?php echo  $row['address']; ?>">
        </div>
       
        
        <a href="profile.php" class="btn btn-primary">Cancel</a>
        <button type="submit" name="edit_update" class="btn btn-primary">Update</button>
    </form>
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



