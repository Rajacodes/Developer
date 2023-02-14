<?php
session_start();
include "connection.php";

// Comment
require_once "comment.php";

?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>JKR</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

		
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/@dm!n/css/sb-admin-2.css" rel="stylesheet">

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
	
		<!--welcome-hero start -->
		<header id="home" class="welcome-hero">

			<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<!--/.carousel-indicator -->
			
				<!--/.carousel-indicator -->

				<!--/.carousel-inner -->
				<div class="carousel-inner" role="listbox">
					<!-- .item -->
					<div class="item active">
						<div class="single-slide-item slide1">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="col-sm-7">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													
													<h2>ABOUT OUR COMPANY</h2>
													<p>
														JKR fencing company started its journey from 2000 in Chennai, Trichy and Pondicherry. The company’s foundations were built on to revolutionise the fencing market by providing high quality & innovative perimeter security solutions. 
														JKR fencing started off by manufacturing, exporting and services fencing material provinding such that Chain link, Barbed wire, Concertina, Precost compound wall, RCC pole and with persistence & commitment towards customer satisfaction, it experienced exponential growth in global markets with a wide range of product offerings. We strive hard to provide best solutions in perimeter security, demarcation, road safety, soil conservation and stabilization
													</p>
													
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="assets/images/image2/logo.jpg" alt="slider image">
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->

					</div><!-- /.item .active-->
					</div><!-- /.item .active-->


			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->



<!--------------------- PROFILE  --------------------->
  

<!--------------------------- Header Navigation ----------------------------->
				        
			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

				        <div class="container">            
				            <!-- Start Atribute Navigation -->
				            <div class="attr-nav">
				                <ul>
				                	<li class="search">
				                		<a href="#"><span class="lnr lnr-magnifier"></span></a>
				                	</li><!--/.search-->
				                
				                    <li class="dropdown">
				                        <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown" >
				                            <span class="lnr lnr-cart"></span>
											
				                        </a>
				                        <ul class="dropdown-menu cart-list s-cate">
				                            <li class="single-cart-list">
				        
				                                <div class="cart-list-txt">
				                                	<h4><a href="profile.php">Profile</a></h4>
				                                </div><!--/.cart-list-txt-->
				                                
				                            </li><!--/.single-cart-list -->

											<li class="single-cart-list">
				        
												<div class="cart-list-txt">
													<h4><a href="#material">Product</a></h4>
												</div><!--/.cart-list-txt-->
						
											</li><!--/.single-cart-list -->

											<li class="single-cart-list">
				        
												<div class="cart-list-txt">
													<h4><a href="contact.php">Contact</a></h4>
												</div><!--/.cart-list-txt-->
						
											</li><!--/.single-cart-list -->

											<li class="single-cart-list">
				        
												<div class="cart-list-txt">
													<h4><a href="logout.php">Logout</a></h4>
												</div><!--/.cart-list-txt-->
						
											</li><!--/.single-cart-list -->

				                            
				                        </ul>
				                    </li><!--/.dropdown-->
				                </ul>
				            </div><!--/.attr-nav-->
				            <!-- End Atribute Navigation -->

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="index.html">JKR FEN<span>CING COMPANY</span></a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
								<li class=" scroll active"><a href="#home">home</a></li>
				                    <li class="scroll"><a href="#material">material</a></li>
				                    <li class="scroll"><a href="#service">service</a></li>
				                    <li class="scroll"><a href="#newsletter">contact</a></li>
				                    <li><a href="register.php">Register</a></li>	
						    		<li><a href="login.php">Sign in</a></li>	
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->


<!------------------------------ Product -------------------------------->

		<section id="material" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>Materials</h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">
					<?php
						$arrival = "select * from products";
						$proresult = mysqli_query($connection, $arrival);
						while($row = mysqli_fetch_assoc($proresult)){
							$id = $row['id'];
							$name = $row["proname"];
							$price = $row["proprice"];
							$image = $row["image1"];
					?>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="assets/images/collection/<?php echo $image; ?>" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p>Click me</p>
									</div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<td>
          										<form action="booking.php" method='post'>
            										<input type="hidden" name='book_id' value="<?php echo $row['id']; ?> ">
            										<button type='submit' name='book_btn' class="btn btn-primary">Book <span> </span> now</button>
          										</form>
        									</td>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#"><?php echo $name;?></a></h4>
								<p class="arrival-product-price"><?php echo $price; ?></p>
							</div>
						</div>
						
						<?php
							}
						?>

						
					</div>
				</div>
			</div><!--/.container-->

		<!--blog start -->
		<section id="service" class="blog">
			<div class="container">
				<div class="section-header">
					<h2>SERVICE</h2> <br> <br><br>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img height="250" src="assets/images/image1/place1.jpg" alt="wire1.jpg">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#"></a></h2>
									<h3> <a href="#">CHENNAI</a> / Branch office 1</h3>
									<p>
										jkr fencing contractor, radha nagar, chrompet, <br>chennai : 620044
									</p>
								</div>
							</div>
							
						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="assets/images/image1/place2.jpg" alt="place2.jpg">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#"></a></h2>
									<h3><a href="#">TRICHY</a> / Branch office 2 </h3>
									<p>
										jkr fencing contractor, near national collage, karumandapam, trichy : 620001
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="assets/images/image1/place3.jpg" alt="place3.jpg">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#"></a></h2>
									<h3><a href="#">PONDICHERRY</a> / Branch office 3 </h3>
									<p>
										jkr fencing contractor, ganapathi nagar, muthuaiyapat, <br>Pondicherry : 01
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
			
		</section><!--/.blog-->
		<!--blog end -->


		<!-- clients strat -->
		<section id="clients"  class="clients">
			<div class="container">
				<div class="owl-carousel owl-theme" id="client">
						<div class="item">
							
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c3.jpg" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c4.jpg" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							
						</div><!--/.item-->

						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c2.jpg" alt="brand-image" />
							</a>
					</div><!--/.owl-carousel-->

			</div><!--/.container-->

		</section><!--/.clients-->	
		<!-- clients end -->

		<!--newsletter strat -->
		<section id="newsletter"  class="newsletter">
		<div class="container">
				<div class="hm-footer-details">
					<div class="row">

						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-foot-title">
								<h4 class="map">MAP DETAIL </h4> <br>
							</div><!--/.hm-foot-title-->
							<div class="">
								
									<a href="https://www.google.com/maps/place/JKR+FENCING+Construction-karunakaran+T/@11.6050908,78.8306021,16z/data=!4m5!3m4!1s0x3bab715a6240cb0d:0x7b304fd44f74f4fe!8m2!3d11.6050352!4d78.830534" target="_blank">
										<img  width="400px" height="3000px" src="assets/images/image1/map.png" alt="map">
									</a>	
							
											
							</div><!--/.hm-foot-menu-->
							
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
							<div class="hm-foot-title">
									<h4>OWNER INFORMATION</h4> <br>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-para">
									<p>
										Fencing advisor : T.Karunakaran <br> 
										Email : karunasmart18@gmail.com <br> 
										Phone : +91 9715114100 <br>   
										Head office : 390, Middle street, A.Vasudevanur, Chinnasalem (Taluk), Kallakurichi (District),Tamil Nadu 606201
									
									</p>
								</div><!--/.hm-foot-para-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6  col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>comment</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-para">
									<p>
										Please fill out the feedback 
									</p>
								</div><!--/.hm-foot-para-->
<!----------------------- Comment box ------------------------------------------>
								<div class="hm-foot-email">
									<div class="foot-email-box">
									<form action="comment.php" method="post">
										<input type="email" class="form-control" placeholder="Enter Email Here...." name="email" autocomplete="off"><br>
										<input type="text" class="form-control" placeholder="Enter Phone Here...." name="phone" autocomplete="off"><br>
    									<input type="text" class="form-control" placeholder="Enter Subject Here...." name="commit" autocomplete="off"><br>
										<input type="text" class="form-control" placeholder="Enter Message Here...." name="message"autocomplete="off"><br>
										<button name="submit" class="btn btn-primary">Submit</button>
									</form>

									</div><!--/.foot-email-box-->
									
								</div><!--/.hm-foot-email-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.hm-footer-details-->

			</div><!--/.container-->

		</section><!--/newsletter-->	
		<!--newsletter end -->


		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="https://www.facebook.com/profile.php?id=100004800796667" target="_parent"><i class="fa fa-facebook"></i></a>	
						<a href="https://www.instagram.com/karuna9952/?utm_source=qr" target="_blank"><i class="fa fa-instagram"></i></a>
						<a href="https://www.youtube.com/channel/UCBEumlYWvri5XYv2dGnT2FA" target="_blank"><i class="fa fa-youtube"></i></a>
					</div>
					<p>
						&copy;2023. designed and developed by Rajadurai
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>