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
</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>
	
	<!-- Header -->

	<header class="header">
		
		<!-- Header Bar -->
		<div class="header_bar d-flex flex-row align-items-center justify-content-start">
			<div class="header_list">
				<h4>Gweru Real Estates</h4>
			</div>
		</div>

	</header>

	<!-- Blog -->

	<div class="blog">
	
	<div class="sidebar">
  <a class="active" href="./">Home</a>
  <a href="index.php">Houses</a>
  <a href="change_password.php">Change Password</a>
  <a href="../logout.php">Logout</a>
</div>

    <div class="content">
	
	<div class="alert alert-info"><Strong>Add Images</strong></div>
	
	<form action="<?php $_PHP_SELF ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    
        <div class="row form-group">
            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Select File:</label></div>
            <div class="col-12 col-md-9"><input type="file" name="file" class="form-control" required></div>
        </div>
                             
        <div class="row form-group">
            <div class="col col-md-3"><label for="hf-password" class=" form-control-label"></label></div>
            <div class="col-12 col-md-9"><input type="submit" value="Upload" name="submit" class="btn btn-success" ></div>
        </div>
    </form>
								
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/my_script.js"></script>
	
</div>
		
	</div>

</body>
</html>

<?php //include('_footer.php'); ?>

<?php
	 
     if(isset($_POST['submit']))
	 {
	 
     $newname=date("ymdhis").".jpg";
     $size=$_FILES['file']['size'];
     $type=$_FILES['file']['type'];
     $tmp_name=$_FILES['file']['tmp_name'];
     $error=$_FILES['file']['error'];
	 
     $target = "../images/$newname";
     
     $query2 = "insert into images(house_id,image_name) values('$_GET[id]','$newname')";
     $result2 = mysqli_query($dbcon, $query2) or die(mysqli_error($dbcon));
	 
     if($result2){
		 
     move_uploaded_file($tmp_name, $target);
     ?>
     <script type="text/javascript">
     alert("Image successfully Uploaded");
     parent.location = 'index.php';
     </script>
     <?php
	 exit();
     }
     }
?>