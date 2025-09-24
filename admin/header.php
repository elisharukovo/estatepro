<?php 
    require_once("session_status.php");
	require_once("../functions.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="myHOME - real estate template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.3.4/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.3.4/animate.css">
	<link rel="stylesheet" type="text/css" href="../styles/listings.css">
	<link rel="stylesheet" type="text/css" href="../styles/listings_responsive.css">
	<link rel="stylesheet" type="text/css" href="../styles/custom.css">
	<link rel="stylesheet" type="text/css" href="../css/facebox.css" media="screen"  />
	<link rel="shortcut icon" type="image/jpeg" href="../images/logo.png">
</head>

<body >
<div class="super_container">
	<div class="super_overlay"></div>
	
	<!-- Header -->

	<header class="header">
		
		
		<!-- Header Bar -->
		<div class="header_bar d-flex flex-row align-items-center justify-content-start">
			
				<h4><center>EstatePro</center></h4>
			
		</div>	
		

	</header>

	<!-- Blog -->

	<div class="main-container" >
	
	<div class="alert alert-danger" style="width:100%; background-color:rgb(241,241,255)">
	    <span class="text-danger"><h5>Staff Portal : <?php echo $_SESSION['fullname']; ?></h5>
	</span></div>