<?php
	/*ob_start();*/
	require_once("functions.php");
	/*ob_end_clean();*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Listings</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="myHOME - real estate template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/listings.css">
	<link rel="stylesheet" type="text/css" href="styles/listings_responsive.css">
	<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" type="image/jpeg" href="images/logo.png">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>
	
	<!-- Header -->

	<header class="header">
		
		<!-- Header Bar -->
		<div class="header_bar d-flex flex-row align-items-center justify-content-start">
			<div class="header_list">
				
			</div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<div class="social">
					<ul class="d-flex flex-row align-items-center justify-content-start">						
						<li><a href="https://www.linkedin.com/in/elisharukovo" target="_target"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://www.linkedin.com/in/elisharukovo" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						
					</ul>
				</div>
				<div class="log_reg d-flex flex-row align-items-center justify-content-start">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li><a href="login.php">Login</a></li>
						
					</ul>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#"><span class="symbol">EstatePro</span></a></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li class="active"><a href="listings.php">Listings</a></li>
					<li><a href="blog.php">News</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="registration.php">Client Registration</a></li>
				</ul>
			</nav>
			<div class="submit ml-auto"><a href="submit/login.php">submit listing</a></div>
			<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
		</div>


	</header>

	<!-- Menu -->

	<div class="menu text-right">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_log_reg">
			<div class="log_reg d-flex flex-row align-items-center justify-content-end">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="#">Login</a></li>
		
				</ul>
			</div>
			<nav class="menu_nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="listings.php">Listings</a></li>
					<li><a href="blog.php">News</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="registration.php">Client Registration</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/listings.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">Listings</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Listings -->

	<div class="listings">
		<div class="container">
			<br><br>

	<h3 align="center">Properties Available</h3>
			<div class="row">
				<div class="col">
					
					<!-- Sorting -->
					<div class="sorting d-flex flex-md-row flex-column align-items-start justify-content-start">
						

					</div>

					<!-- Listings Container -->
					<div class="listings_container">

						<!-- Listing -->
						<?php
						$query = "select *, DATE_FORMAT(date_added, '%M %d, %Y') AS dat from stands order by id desc";
						$result=mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
          
	 while($row = mysqli_fetch_array($result))
	 {
		 $id = $row['id'];
		 $image_name=$row['image'];
		 $image="images/$image_name";
         $surburb = $row['surburb'];
         $description = $row['description'];
         $price = $row['price'];
		 $stand_size = $row['stand_size'];
         $toilets = $row['toilets'];
         $rooms = $row['rooms'];
         $garages = $row['garages'];
         $date = $row['dat'];
		 ?>
						
					 
						<div class="listing_box house sale">
							<div class="listing">
								<div class="listing_image">
									<div class="listing_image_container">
										<a rel="facebox" href="facebox_view.php?id=<?php echo $id; ?>"><img src="<?php echo $image; ?>" alt="Image"></a>
									</div>
									<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
										<div class="tag tag_house"><a href="listings.php">house</a></div>
										<div class="tag tag_sale"><a href="listings.php">for sale</a></div>
									</div>
									<div class="tag_price listing_price">$ <?php echo $price; ?></div> 
									
									
								</div>
								<div class="listing_content">
									<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
										<img src="images/icon_1.png" alt="">
										<a href="single.php"><strong><?php echo $surburb; ?></strong><br>
										<?php echo $description; ?></a>
									</div>
									<div class="listing_info">
										<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
											<li class="property_area d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_2.png" alt="" data-toggle="tooltip" data-placement="top" title="Stand Size:<?php echo $stand_size; ?> square metres">
												<span data-toggle="tooltip" data-placement="top" title="Stand Size:<?php  echo $stand_size; ?> square metres"><?php echo $stand_size; ?> sqm</span>
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_3.png" alt="" data-toggle="tooltip" data-placement="top" title="Toilets:<?php echo $toilets; ?>">
												<span data-toggle="tooltip" data-placement="top" title="Toilets:<?php echo $toilets; ?>"><?php echo $toilets; ?></span>
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_4.png" alt="" data-toggle="tooltip" data-placement="top" title="Rooms:<?php echo $rooms; ?>">
												<span data-toggle="tooltip" data-placement="top" title="Rooms:<?php echo $rooms; ?>"><?php echo $rooms; ?></span>
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_5.png" alt="" data-toggle="tooltip" data-placement="top" title="Garages:<?php echo $garages; ?>">
												<span data-toggle="tooltip" data-placement="top" title="Garages:<?php echo $garages; ?>"><?php echo $garages; ?></span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
	<?php
	 }
	 ?>
						


					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					
					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_about">
							<div class="footer_logo"><a href="#">my<span>home</span></a></div>
							<div class="footer_text">
								<p>EstatePro is a registered estate agency company which provides immovable properties to valued clients according to their specifications. <br> We also provide value added property management to our clients</p> <p><b>Like and follow us on Social Medias</b></p>
							</div>
							<div class="social">
								<ul class="d-flex flex-row align-items-center justify-content-start">									
									<li><a href="https://www.linkedin.com/in/elisharukovo" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="https://www.linkedin.com/in/elisharukovo" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								
								</ul>
							</div>
							<div class="footer_submit"><a href="#">submit listing</a></div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_column">
							<div class="footer_title">Information</div>
							<div class="footer_info">
								
							</div>
							<div class="footer_links usefull_links">
								<div class="footer_title">Usefull Links</div>
								<ul>
									<li><a href="">Testimonials</a></li>
									<li><a href="listings.php">Listings</a></li>
									<li><a href="blog.php">News</a></li>
									<li><a href="contact.php">Contact Agents</a></li>
									<li><a href="about.php">About us</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_links">
							<div class="footer_title">Properties Types</div>
							<ul>
								<li><a href="#">Properties for rent</a></li>
								<li><a href="#">Properties for sale</a></li>
								<li><a href="#">Commercial</a></li>
								<li><a href="#">Homes</a></li>
								<li><a href="#">Villas</a></li>
								<li><a href="#">Office</a></li>
								<li><a href="#">Residential</a></li>
								<li><a href="#">Appartments</a></li>
								<li><a href="#">Off plan</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_title">Featured Property</div>
						<div class="listing_small">
							<div class="listing_small_image">
								<div>
									<img src="images/listing_1.jpg" alt="">
								</div>
								<div class="listing_small_tags d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="listing_small_tag tag_house"><a href="listings.php">Build a house</a></div>
									<div class="listing_small_tag tag_sale"><a href="listings.php">of your dream</a></div>
								</div>
								<div class="listing_small_price">Contact us now</div>
							</div>
							<div class="listing_small_content">
								<div class="listing_small_location d-flex flex-row align-items-start justify-content-start">
									<img src="images/icon_1.png" alt="">
									<a href="single.php"></a>
								</div>
								<div class="listing_small_info">
									<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_3.png" alt="">
											<span></span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_4.png" alt="">
											<span></span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_5.png" alt="">
											<span></span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
							<div class="copyright order-md-1 order-2">
Copyright &copy; All rights reserved | Designed & Maintained </i> by <a href="https://www.linkedin.com/in/elisharukovo" target="_blank">Elisha Rukovo</a>
</div>
							<nav class="footer_nav order-md-2 order-1 ml-md-auto">
								<ul class="d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About us</a></li>
									<li><a href="listings.php">Listings</a></li>
									<li><a href="blog.php">News</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>


<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="js/listings.js"></script>
<script src="js/facebox.js" type="text/javascript"></script>
</body>
</html>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'resources/loading.gif',
        closeImage   : 'resources/closelabel.png'
      })
    })
  </script>