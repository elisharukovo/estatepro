<?php 
    require_once("session_status.php");
	require_once("../functions.php");
	require_once('header.php');
	require_once('sidebar.php');
	
$query = "select * from clients where username='$_SESSION[client]'";
$result=mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
          
   while($row = mysqli_fetch_array($result))
   {
	 $username = $row["username"];
	 $name = $row["name"];
	 $surname = $row["surname"];
	 $gender = $row["gender"];
	 $address = $row["address"];
	 $contact = $row["contact"];
   }
?>


    <div class="content">
	
	<div class="alert alert-info"><Strong>Client Profile Details</strong></div>
	
	<form action="<?php $_PHP_SELF ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
        
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Username</label></div>
               <div class="col-12 col-md-9"><input type="text" id="surburb" name="surburb" class="form-control" value="<?php echo $username ?>" readonly></div>
        </div>
                          
        <div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Name</label></div>
               <div class="col-12 col-md-9"><input type="text" id="description" name="description" class="form-control" value="<?php echo $name ?>" readonly></div>
        </div>
		
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Surname</label></div>
               <div class="col-12 col-md-9"><input type="text" id="price" name="price" class="form-control" min="1" value="<?php echo $surname ?>" readonly></div>
        </div>

		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Gender</label></div>
               <div class="col-12 col-md-9"><input type="text" id="stand_size" name="stand_size" class="form-control" value="<?php echo $gender ?>" readonly></div>
        </div>
		
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Address</label></div>
               <div class="col-12 col-md-9"><input type="text" id="toilets" name="toilets" class="form-control" min="0" max="5" value="<?php echo $address ?>" readonly></div>
        </div>
		
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Contact</label></div>
               <div class="col-12 col-md-9"><input type="text" id="rooms" name="rooms" class="form-control" min="0" max="20" value="<?php echo $contact ?>" readonly></div>
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
     parent.location = 'index.php';
     </script>
     <?php
	 exit();
     }
     }
?>