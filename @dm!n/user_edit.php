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
    <link rel="stylesheet" href="../assets/css/login.css">

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
                    <i class="fas fa-fw fa-table"></i>
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
                                <a class="dropdown-item" href="booking.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Booking product
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

<!-- User update and delete operation -->
<?php 
if(isset($_POST['update_btn'])){
    $id = $_POST['update_id'];
    $query = "SELECT * FROM user WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach ($query_run as $row)
    {

?>
<div>
    <form action="delete.php" method="post">
        <div class="form-outline mb-4">
 	        <!-- <label class="form-label" for="typeEmailX-2" >Id</label><br> -->
            <input type="hidden" id="typeEmailX-2" name="edit_id" value="<?php echo  $row['id']; ?>">
        </div>
        <div class="form-outline mb-4">
 	        <label class="form-label" for="typeEmailX-2" >Username</label><br>
            <input type="text" id="typeEmailX-2" name="edit_username" value="<?php echo  $row['username']; ?>">
        </div>
        <div class="form-outline mb-4">
 	        <label class="form-label" for="typeEmailX-2" >Email</label><br>
            <input type="text" id="typeEmailX-2" name="edit_email" value="<?php echo  $row['email']; ?>">
        </div>
        <div class="form-outline mb-4">
 	        <label class="form-label" for="typeEmailX-2" >Password</label><br>
            <input type="text" id="typeEmailX-2" name="edit_password" value="<?php echo  $row['password']; ?>">
        </div>
        <div class="form-outline mb-4">
 	        <label class="form-label" for="typeEmailX-2" >Confirm</label><br>
            <input type="text" id="typeEmailX-2" name="edit_confirm" value="<?php echo  $row['confirm']; ?>">
        </div>
        <div class="form-outline mb-4">
 	        <label class="form-label" for="typeEmailX-2" >Usertype</label><br>
            <input type="text" id="typeEmailX-2" name="edit_usertype" value="<?php echo  $row['usertype']; ?>">
        </div>
        
        <a href="panel.php" class="btn btn-primary">Cancel</a>
        <button type="submit" name="edit_update" class="btn btn-primary">Update</button>
    </form>
</div>
<?php
    }
}
?>
                
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


</body>

</html>

