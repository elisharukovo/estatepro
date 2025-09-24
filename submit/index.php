<?php
// Database configuration
$db_host     = "localhost";
$db_username = "root";
$db_password = "";
$db_name     = "estatepro";

// Create database connection
$con = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 


$success_message = '';
$error_message = '';


if(isset($_POST["submit"])){

	$title = $_POST['title'];
	$description = $_POST['description'];
	
    $upload_path = "images/";
		$image = basename($_FILES["image"]["name"]);
		$file_path = $upload_path . $image;
		$file_type = pathinfo($file_path,PATHINFO_EXTENSION);

    $allow_types = array('jpg','png','jpeg','gif','pdf');
    if(in_array($file_type, $allow_types)){
        // Upload file to server path 
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $file_path)){
            // Insert image file name into database
            $insert = $con->query("INSERT INTO gre_stands (title, pic, description) VALUES ('$title', '$image', '$description')");
            if($insert)
              $success_message = $title. " image has been uploaded successfully";
            else
              $error_message = "Inserting into database failed. Try again";
             
        }
        else
            $error_message = "Sorry, there was an error uploading your file.";
    }
    else
      $error_message = 'Invalid format or image missing';
}
else
  $error_message = 'Select a file to upload'; ?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Submiting Page</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/about.css">
<link rel="stylesheet" type="text/css" href="../styles/login.css">
<link rel="stylesheet" type="text/css" href="../styles/about_responsive.css">

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
			
				
			
		</div>

		<!-- Header Content -->
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<!--<a href="#" class="site-logo"><img src="images/logo.png" alt=""> <p color="white" font-family="Calibri"></p> </a>-->
		<div class="logo"><a href="indez.php"><span>EstatePro</span></a></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="../index.php">Home</a></li>
					<li><a href="../about.php">About us</a></li>
					<li><a href="../listings.php">Listings</a></li>
					<li><a href="../blog.php">News</a></li>
					<li><a href="../contact.php">Contact</a></li>
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
					<li><a href="">Login</a></li>
					
				</ul>
			</div>
			<nav class="menu_nav">
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="../about.php">About us</a></li>
					<li><a href="../listings.php">Listings</a></li>
					<li><a href="../blog.php">News</a></li>
					<li><a href="../contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="../images/about.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">Submitting List Page</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- Menu -->



<!--uPLOADNING CODE -->
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<h1>Upload Listings</h1>
				<hr><h4>
				<?= $success_message.'<br>'.$error_message; ?> </h4>
				<hr>
				<form class="" method="POST" action="index.php" enctype="multipart/form-data"> 
					<div class="form-group">
						<label>Title</label>
						<input name="title" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea name="description" class="form-control"> </textarea> 
					</div>
					<div class="form-group">
						<label>Image</label><br>
						<input type="file" name="image" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-default">Upload</button>
					</div>
				</form>
				<hr>
				<?= $success_message.'<br>'.$error_message; ?>
				<hr>
			</div>
			<div class="col-md-4">
			</div>
		</div>
		<br><br>
		<h1>Uploads</h1>
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th>Title</th>
					<th>Image Link</th>
					<th>Description</th>
				</tr>
				<?php $query = $con->query("SELECT * FROM gre_stands ORDER BY title DESC");

				if($query->num_rows > 0){
				    while($row = $query->fetch_assoc()){ ?>
						<tr>
							<td><?= $row["title"]; ?></td>
							<td>
								<a href="images/<?= $row["pic"]; ?>" target="_blank">View Image</a></td>
							<td><?= $row["description"]; ?></td>
						</tr>
				<?php } 
			}?>
			</table>
		</div> 

</body>


		<!-- uPLOADING CODE EDN HERER -->
	

	</body>
</html>

<?php include('_footer.php'); ?>