<?php
session_start();
ob_start();
include "../connection.php";
if(!isset($_SESSION['usertype'])){
    if($_SESSION['usertype'] !== 'admin'){
        header('location: ../login.php');
    }   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN PANEL</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- <link href="../assets/images/collection/" rel="stylesheet"> -->

</head>

<body id="page-top">

 
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN PANEL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="product.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Product</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="booking.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Booking product</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="comment.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Comments</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">



</ul>
        <!-- End of Sidebar -->
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
            

             
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                            
                            
                        </li>

                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                 
                                </a>
                               
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Your Name</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="r&g!st&r.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Register
                                </a>
                                <a class="dropdown-item" href="index.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    User detail
                                </a>
                                <a class="dropdown-item" href="product.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Product
                                </a>
                                <a class="dropdown-item" href="comment.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Comment
                                </a>
                                <a class="dropdown-item" href="../logout.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
<!-- Product insert code -->
<div>
    <form action="product.php" method="post" enctype='multipart/form-data'>
        
        <div class="form-outline mb-4">
 	        <label class="form-label" for="typeEmailX-2" >Product name</label><br>
            <input type="text" id="typeEmailX-2" name="proname" placeholder="fencing material name">
        </div>
        <div class="form-outline mb-4">
 	        <label class="form-label" for="typeEmailX-2" >Product price</label><br>
            <input type="text" id="typeEmailX-2" name="proprice" placeholder="material price">
        </div>
        <div class="form-outline mb-4">
 	        <label class="form-label" for="typeEmailX-2" >Product description</label><br>
            <input type="text" id="typeEmailX-2" name="des" placeholder="About your product detail write">
        </div>
        <div class="form-outline mb-4">
 	        <label class="form-label" for="typeEmailX-2" >Product image</label>
            <input type="file" id="typeEmailX-2" name="image">
        </div>
      
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div><br><br>


<!-- Product delete operation -->
<div>
<table class="table table-bordered">
  <thead class="">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>      
      <th scope="col">Price</th>
      <th scope="col">Image</th> 
      <th scope="col">Description</th>  
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    <?php
	    $arrival = "select * from products";
		$proresult = mysqli_query($connection, $arrival);
		while($row = mysqli_fetch_assoc($proresult)){
            $id = $row["id"];
			$email = $row["proname"];
			$phone = $row["proprice"];
            $hello  = $row['des'];
            $commit = $row["image1"];

    ?>

			
    <tr>
        <td><?php echo $row['id']; ?></td>        
        <td><?php echo $row['proname'];  ?></td>
        <td><?php echo $row['proprice'];  ?></td>
        <td><?php echo $row['des'];  ?></td>
        <td><img src="../assets/images/collection/<?php echo $row['image1']; ?>" alt="new-arrivals images" width="150px"></td>
        

        <td>
          <form action="product.php" method='post'>
            <input type="hidden" name='product_id' value="<?php echo $row['id']; ?> ">
            <button type='submit' name='product_btn' class="btn btn-primary">Delete</button>
          </form>
        </td>
              
<?php

if(isset($_POST['product_btn'])){

    $id=$_POST['product_id'];


    $query="DELETE FROM products WHERE id='$id'";
    $query_run=mysqli_query($connection,$query);

    if($query_run){
        $path = "../assets/images/collection/".$row["image1"];
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
        }
    ?>
  </tbody>
 
</table>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    


</body>

</html>

<?php
if(isset($_POST['submit'])){
    $proname = $_POST['proname'];
    $proprice = $_POST['proprice'];
    $des = $_POST['des'];

// image 1
    $image= $_FILES['image']['name'];  
    $tmpname = $_FILES['image']['tmp_name'];
    echo $image;
    echo $tmpname;
    $folder = '../assets/images/collection/';
    move_uploaded_file($tmpname,$folder.$image);

    $queryupdate = "INSERT INTO products(proname, proprice, des, image1) VALUES('$proname','$proprice', '$des', '$image') ";
    $updaterun = mysqli_query($connection, $queryupdate);
    if($updaterun){
    
        header('location:product.php?modify= product update successfull');
    }
    else{
        header('location:product.php?modify= product does not update successfull');
    }
}
?>




