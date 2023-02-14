<?php
include "connection.php";
session_start();
if(!isset($_SESSION['usertype'])){
    if($_SESSION['usertype'] !== 'user'){
        header('location: login.php');
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

    <title>JKR</title>

    <!-- Custom fonts for this template-->
    <link href="@dm!n/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="@dm!n/css/sb-admin-2.min.css" rel="stylesheet">
 

</head>

<body class="bg-gradient-primary">

<?php 
if(isset($_POST['email_btn'])){
    $id = $_POST['email_id'];
    $query = "SELECT * FROM products WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach ($query_run as $row)
    {

?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block ">
                              <!-- <img src="/assets/images/image2/logo.jpg" alt="" width="500px"> -->
                              <marquee><h1>JKR </h1></marquee><br><br><br><br><br>
                              <marquee direction="right"><h1>FENCING </h1></marquee><br><br><br><br><br>
                              <marquee><h1>COMPANY</h1></marquee><br><br><br><br><br>
                              
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Product Booking</h1>
                                    
                                    </div>
                                    <form class="user" action="emailbooking.php"  method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name="name"
                                                placeholder="Enter Name ..." autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name="email"
                                                placeholder="Enter Email Address..." autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name="address"
                                                placeholder="Enter Address..." autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name="phone"
                                                placeholder="Enter phone..." autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name="material" value="<?php echo  $row['proname']; ?>"
                                                placeholder="Enter material ..." autocomplete="off">
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name="comment"
                                                placeholder="Enter comment ..." autocomplete="off">
                                        </div>
                                      
                                        
                                        <input type="submit" class="btn btn-primary btn-user btn-block"
                                                 name="forget" value="Book Now"
                                                >
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
?>

    <!-- Bootstrap core JavaScript-->
    <script src="@dm!n/vendor/jquery/jquery.min.js"></script>
    <script src="@dm!n/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="@dm!n/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="@dm!n/js/sb-admin-2.min.js"></script>
   

</body>

</html>


<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/PHPMailer.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_REQUEST['forget'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $phone = $_REQUEST['phone'];
    $material = $_REQUEST['material'];
    $comment = $_REQUEST['comment'];

    $emailquery = "SELECT * FROM user WHERE email='$email' ";
	$emailrun = mysqli_query($connection, $emailquery);
    
	if(mysqli_num_rows($emailrun) > 0){
        try {

            $message = '<div>
            <h2> If you book a product by using JKR FENCING COMPANY.</h2><br>
            <h5> Our customer service will response through the mail and phone number </h5><br>
                                         
            </div>';
           
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
            $email = $email;                  //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'jkrfencing2023@gmail.com';                     //SMTP username
            $mail->Password   = '';                               //SMTP password
            $mail->SMTPSecure = "tls";             //Enable implicit TLS encryption "tls"
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('jkrfencing2023@gmail.com', 'JKR');
            $mail->addAddress($email);     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional need
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Welcome to JKR Fencing company';
            $mail->Body    = $message;
            $mail->AltBody = 'JKR FENCING WEBSITE';
        
                  
            
            $query = "INSERT INTO booking(name, email, address, phone, material, comment) VALUES('$name', '$email', '$address','$phone', '$material','$comment')";
            $result1 = mysqli_query($connection, $query);
          
            // $mail->send();
            if ($mail->Send()) { 
                echo $result1;
                header("Location:index.php?product= booking successfull");
            }else {
                echo "Product does not booking successfull";
                
            }
        
           
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        
        }
        
		
	}
	else {
        echo "Email is not found ";
    }



}
?>