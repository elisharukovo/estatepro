<?php require_once('functions.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Testing</title>
	<link href="styles/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="shortcut icon" type="image/jpeg" href="images/logo.png">
</head>

<body>

<form action="" method="post">
    <?php
	$db = mysqli_connect("localhost","root","","estatepro");
						$query = "select *, DATE_FORMAT(date_added, '%M %d, %Y') AS dat from stands order by id desc";
						$result=mysqli_query($db, $query) or die(mysqli_error($dbcon));
          
	 while($row = mysqli_fetch_array($result))
	 {
		 $id = $row['id'];
		 ?>
						
					 
						
									<a data-toggle="modal" href="#<?php echo $id; ?>" id="#<?php echo $id; ?>">View Pics</a>
									<?php include("includes/modal_view.php"); ?>
	<?php
	 }
	 ?>
	</form>
	
	

     
    
</body>
</html>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
