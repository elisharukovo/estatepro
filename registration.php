<?php require_once('functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Client Registration</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="myHOME - real estate template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/blog.css">
	<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
	<link rel="shortcut icon" type="image/jpeg" href="images/logo.png">
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
						
						<li><a href="https://www.linkedin.com/in/elisharukovo" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://www.linkedin.com/in/elisharukovo" target="_blank"><i class="fa fa-twitter"  aria-hidden="true"></i></a></li>
						
					</ul>
				</div>
				<div class="log_reg d-flex flex-row align-items-center justify-content-start">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="login.php">Login</a></li>
						
					</ul>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#"><span>EstatePro</span></a></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="listings.php">Listings</a></li>
					<li><a href="blog.php">News</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li class="active"><a href="registration.php">Client Registration</a></li>
				</ul>
			</nav>
			
			<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
		</div>

	</header>

	<!-- Menu -->

	<div class="menu text-right">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_log_reg">
			<div class="log_reg d-flex flex-row align-items-center justify-content-end">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="active"><a href="#">Client Registration</a></li>
				</ul>
			</div>
			<nav class="menu_nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="listings.php">Listings</a></li>
					<li><a href="blog.php">News</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">Client Registration</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				
				<!-- Blog Posts -->
				<div class="col-lg-9">
					<div class="blog_posts">

				

						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_post_image">
								<div class="container">
								<h2>Client Registration form</h2>
								
								<form id="myForm"  method="POST" action="process_registration.php">
								    <div class="form-group">
									    <label for="username">Username:</label>
										<input type="text" class="form-control" id="username" placeholder="Username" name="username" maxlength="50" autocomplete="off" required autofocus>
									</div>
									
									<div class="form-group">
									    <label for="name">Name:</label>
										<input type="text" class="form-control" id="name" onkeypress="return lettersOnly(event);" placeholder="Name" name="name" maxlength="30" autocomplete="off" required>
									</div>
									
									<div class="form-group">
									    <label for="surname">Surname:</label>
										<input type="text" class="form-control" id="surname" onkeypress="return lettersOnly(event);" placeholder="Surname" name="surname" maxlength="30" autocomplete="off" required>
									</div>
									
									<div class="form-group">
									    <label for="gender">Gender:</label>
										<select class="form-control" id="gender" name="gender" required>
										   <option value="">..Select Gender</option>
										   <option>Male</option>
										   <option>Female</option>
										</select>
										</div>
									
									<div class="form-group">
									    <label for="address">Address:</label>
										<input type="text" class="form-control" id="address" placeholder="Address" name="address" maxlength="50" autocomplete="off" required>
									</div>
									
									<div class="form-group">
									    <label for="contact">Contact:</label>
										<input type="text" class="form-control" id="contact" onkeypress="return isNumberKey(event);" placeholder="Contact Number" name="contact" maxlength="30" autocomplete="off" required>
									</div>
									
									<div class="form-group">
									    <label for="password">Password:</label>
										<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" maxlength="20" required>
									</div>
									
									<div class="form-group">
									    <label for="confirm_password">Confirm Password:</label>
										<input type="password" class="form-control" id="confirm_password" placeholder="Confirm password" name="confirm_password" maxlength="20" required>
									</div>
									
									<div id="ack"></div>
									
									<button id="submit" type="submit" class="btn btn-primary">Register</button>
								</form>
								
								<script type="text/javascript" src="js/jquery.min.js"></script>
								<script type="text/javascript" src="js/my_script.js"></script>
							    </div>
							</div>
							
						</div>

					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar">
						
						<!-- Search -->
						<div class="sidebar_search">
							<form action="#" class="sidebar_search_form">
								<input type="text" class="sidebar_search_input" required="required">
								<button class="sidebar_search_button"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Categories -->
						<div class="categories">
							<div class="sidebar_title"><h3>Categories</h3></div>
							<div class="sidebar_list">
								<ul>
									<li><a href="">EstatePro</a></li>
									<li><a href="">Legal Aid</a></li>
									<li><a href="">Lifestyle & Living</a></li>
									<li><a href="">Uncategorized</a></li>
								</ul>
							</div>
						</div>
					
					
					</div>
				</div>

			</div>
		</div>
	</div>

</body>
</html>
<?php include('_footer.php'); ?>