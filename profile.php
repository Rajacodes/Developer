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

$currentuser = $_SESSION['email'];
$sql = "SELECT * FROM user WHERE email = '$currentuser'";

$proquery = mysqli_query($connection, $sql);

if ($proquery){
  if(mysqli_num_rows($proquery)>0){
    while($row = mysqli_fetch_array($proquery)){
      

?>

    <div class="container">
        <div class="main-body">
        
              <!-- Breadcrumb -->
            
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container"> 
        
            <a class="navbar-brand" href="#"> Hai <?php echo $row['username']; ?></a>
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
        
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        
                          <img  class="image" src="assets/images/collection/index.png"  class="rounded-circle" width="150px"><br>

                        <!-- <form action="profile.php" method="post" enctype='multipart/form-data'>
                         
                          <button class="btn btn-primary" name="submit">upload</button>
                        </form> -->
                        <div class="mt-3">
                          <h4><?php echo $row["username"] ; ?></h4>
                          <p class="text-secondary mb-1"><?php echo $row["email"] ; ?></p>
                          <p class="text-muted font-size-sm"><?php echo $row["address"] ; ?></p>
                          <a href="logout.php"><button type='' name='' class="btn btn-primary">Logout</button></a>                       
                          
                        </div>
                      </div>
                    </div>
                  </div>
           
                </div>
                <div class="col-md-8"><br>
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Username</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row["username"] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row["email"] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row["mobile"] ; ?>
                        </div>
                      </div>
                      
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row["address"] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">

                        <form action="action.php" method='post'>
                          <input type="hidden" name='update_id' value="<?php echo $row['id']; ?> ">
                           <button type='submit' name='update_btn' class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" >Edit</button>
                        </form>

                        
                        </div>
                      </div>
                    </div>
                  </div>




    
    
                </div>
              </div>
    
            </div>
        </div>


<?php
    }
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