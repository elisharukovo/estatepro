<?php 
    require_once("session_status.php");
	require_once("../functions.php");
?>

<?php
$query = "select * from houses where id='$_GET[id]'";
$result=mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
          
	 while($row = mysqli_fetch_array($result))
	 {
		 $id = $row['id'];
		 $image_name=$row['image'];
		 $image="../images/$image_name";
         $surburb = $row['surburb'];
         $description = $row['description'];
         $price = $row['price'];
		 $stand_size = $row['stand_size'];
         $toilets = $row['toilets'];
         $rooms = $row['rooms'];
         $garages = $row['garages'];
         $date = $row['dat'];
	 }
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
				<h4>Mornef Investments</h4>
			</div>
		</div>

	</header>

	<!-- Blog -->

	<div class="blog">
	
	<?php include_once('sidebar.php'); ?>

    <div class="content">
	
	<div class="alert alert-info"><Strong>Edit House Details</strong></div>
	
	<form action="<?php $_PHP_SELF ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
        
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Surburb</label></div>
               <div class="col-12 col-md-9"><input type="text" id="surburb" name="surburb" class="form-control" value="<?php echo $surburb ?>" required></div>
        </div>
                          
        <div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Description</label></div>
               <div class="col-12 col-md-9"><input type="text" id="description" name="description" class="form-control" value="<?php echo $description ?>" required></div>
        </div>
		
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Price</label></div>
               <div class="col-12 col-md-9"><input type="number" id="price" name="price" class="form-control" min="1" value="<?php echo $price ?>" required></div>
        </div>

		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Stand Size(Sqm)</label></div>
               <div class="col-12 col-md-9"><input type="number" id="stand_size" name="stand_size" class="form-control" value="<?php echo $stand_size ?>" required></div>
        </div>
		
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Number of Toilets</label></div>
               <div class="col-12 col-md-9"><input type="number" id="toilets" name="toilets" class="form-control" min="0" max="5" value="<?php echo $toilets ?>" required></div>
        </div>
		
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Number of Rooms</label></div>
               <div class="col-12 col-md-9"><input type="number" id="rooms" name="rooms" class="form-control" min="0" max="20" value="<?php echo $rooms ?>" required></div>
        </div>

		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Number of Garages</label></div>
               <div class="col-12 col-md-9"><input type="number" id="garages" name="garages" class="form-control" min="0" max="5" value="<?php echo $garages ?>" required></div>
        </div>
                             
        <div class="row form-group">
            <div class="col col-md-3"><label for="hf-password" class=" form-control-label"></label></div>
            <div class="col-12 col-md-9"><input type="submit" value="Update" name="submit" class="btn btn-success" ></div>
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
     $surburb =  $_POST['surburb'];
     $description =  $_POST['description'];
	 $price =  $_POST['price'];
     $stand_size =  $_POST['stand_size'];
     $toilets =  $_POST['toilets'];
	 $rooms =  $_POST['rooms'];
     $garages =  $_POST['garages'];	
     
     $query2 = "update houses set surburb='$surburb', description='$description', price='$price', stand_size='$stand_size', toilets='$toilets', rooms='$rooms', garages='$garages' where id='$_GET[id]'";
     $result2 = mysqli_query($dbcon, $query2) or die(mysqli_error($dbcon));
	 
     if($result2){
     ?>
     <script type="text/javascript">
     alert("House successfully Updated");
     parent.location = 'houses_for_sale.php';
     </script>
     <?php
	 exit();
     }
     }
?>