<?php 
    require_once("session_status.php");
	require_once("../functions.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/blog.css">
<link rel="stylesheet" type="text/css" href="../styles/blog_responsive.css">
<link rel="stylesheet" type="text/css" href="../styles/custom.css">
<link rel="shortcut icon" type="image/jpeg" href="../images/logo.png">
</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>
	
	<!-- Header -->

	<header class="header">
		
		<!-- Header Bar -->
		<div class="header_bar d-flex flex-row align-items-center justify-content-start">
			<div class="header_list">
				<h4>EstatePro Investments</h4>
			</div>
		</div>

	</header>

	<!-- Blog -->

	<div class="blog">
	
	<?php include_once('sidebar.php'); ?>

    <div class="content">
	
	<div class="alert alert-info"><Strong>Change Password</strong></div>
	
	<form id="myForm"  method="POST" action="process_password.php">
								    <div class="form-group">
									    <label for="username">Old Password:</label>
										<input type="password" class="form-control" id="old_password" placeholder="Enter Old Password" name="old_password" maxlength="20" autocomplete="off" autofocus>
									</div>
									
									<div class="form-group">
									    <label for="password">New Password:</label>
										<input type="password" class="form-control" id="new_password" placeholder="Enter New Password" name="new_password" maxlength="20">
									</div>
									
									<div class="form-group">
									    <label for="password">Confirm Password:</label>
										<input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" maxlength="20">
									</div>
									
									<div id="ack"></div>
									
									<button id="submit" type="submit" class="btn btn-primary">Change</button>
								</form>
								
								<script type="text/javascript" src="../js/jquery.min.js"></script>
								<script type="text/javascript" src="../js/my_script.js"></script>
	
</div>
		
	</div>

</body>
</html>
<?php //include('_footer.php'); ?>