<?php 
    require_once("session_status.php");
	require_once("../functions.php");
?>

<?php
$id=$_GET['id'];
$price=$_GET['price'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../styles/blog.css">
	<link rel="stylesheet" type="text/css" href="../styles/blog_responsive.css">
	<link rel="stylesheet" type="text/css" href="../styles/custom.css">
	<link rel="shortcut icon" type="image/jpeg" href="../images/logo.png">
<style>
p
{
	color:rgb(43, 46, 53);
}
</style>

</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>
	
	<!-- Header -->

	<header class="header">
		
		<!-- Header Bar -->
		<div class="header_bar d-flex flex-row align-items-center justify-content-start">
			<div class="header_list">
				<h4>Mornef Investments</h4>
			</div>
		</div>

	</header>

	<!-- Blog -->

	<div class="blog">
	
	<?php include_once('sidebar.php'); ?>

    <div class="content">
	
	<div class="alert alert-info"><Strong>Terms and Conditions</strong></div>
	
	<h4>Failure To Pay</h4>
     <p>We repossess the stand or house</p>

    <h4>Inflation</h4>
	<p>All installments are subject to adjustments accordingly</p>
	
	<h4>Death</h4>
	<p>If the client dies, the stand or house will be given to the surviving spouse or the the children. If they are
	    not able to pay the remaining balance, they will be given back the paid installments and Mornef Investments repossess the stand or house </p>

    <a href='payment2.php?id=<?php echo $id; ?>&price=<?php echo $price; ?>' title='Accept Terms and conditions' id='$id'>
        <button type="submit" name="submitCash" id="submit2" class="btn btn-primary" >Agree</button>
	</a>
	<div>
	
	</div>
	
</div>
		
	</div>

</body>
</html>