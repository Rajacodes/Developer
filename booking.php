<?php
session_start();
ob_start();
include "connection.php";
if(!isset($_SESSION['usertype'])){
    if($_SESSION['usertype'] !== 'user'){
        header('location: login.php');
    }   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JKR</title>
    <!-- Stylesheet -->
    
    <!---Boxicons CDN Setup for icons-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/book.css">

</head>
<body>

<?php 
if(isset($_POST['book_btn'])){
    $id = $_POST['book_id'];
    $query = "SELECT * FROM products WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach ($query_run as $row)
    {

?>
    <div class="container">
        <div class="single-product">
            <div class="row">
                <div class="col-1">
                    <div class="product-image">
                        <div class="product-image-main">
                            <img src="assets/images/collection/<?php echo  $row['image1']; ?>" alt=""  class="image-list">
                        </div>
                        <div class="product-image-slider">
                            <img src="assets/images/collection/<?php echo  $row['image1']; ?>" alt=""  class="image-list">
                            <img src="assets/images/collection/<?php echo  $row['image1']; ?>" alt=""  class="image-list">
                            <img src="assets/images/collection/<?php echo  $row['image1']; ?>" alt=""  class="image-list">
                            <img src="assets/images/collection/<?php echo  $row['image1']; ?>" alt=""  class="image-list">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="breadcrumb">
                        <span><a href="index.php">Home</a></span>
                        <span><a href="contact.php">Contact</a></span>
                        <span class="active"><?php echo  $row['proname']; ?></span>
                    </div>

                    <div class="product">
                        <div class="product-title">
                            <h2><?php echo  $row['proname']; ?></h2>
                        </div>
                        <div class="product-rating">
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <!-- <span class="review"></span> -->
                        </div>
                        <div class="product-price">
                            <span class="offer-price"><?php echo  $row['proprice']; ?></span>
                            
                        </div>

                        <div class="product-details">
                            <h3>Description</h3>
                            <p><?php echo  $row['des']; ?></p>
                        </div><br><br><br>
                        <div class="product-size">
                      
                        </div>
                        <div class="product-color">
                            
                        </div>
                        <span class="divider"></span>

                        <div class="product-btn-group">
                            
                            <!-- <div class="button add-cart"><i class='bx bxs-cart' ></i> Add to Cart</div> -->
                            <form action="emailbooking.php" method='post'>
                                <input type="hidden" name='email_id' value="<?php echo $row['id']; ?> ">
                                <div class='button buy-now'><i class='bx bxs-zap' ><input type='submit' name='email_btn' value="Book Now"></i> </div> 
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    }
}
?>

    <!--script-->
    <script src="assets/js/book.js"></script>
    
</body>
</html>

