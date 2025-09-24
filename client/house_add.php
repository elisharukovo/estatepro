    <?php require_once('header.php'); ?>
	<?php require_once('sidebar.php'); ?>

    <div class="content">
	
	<div class="alert alert-info"><Strong>Add New House</strong></div>
	
	<form action="<?php $_PHP_SELF ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
        
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Surburb</label></div>
               <div class="col-12 col-md-9"><input type="text" id="surburb" name="surburb" class="form-control" required></div>
        </div>
                          
        <div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Description</label></div>
               <div class="col-12 col-md-9"><input type="text" id="description" name="description" class="form-control" required></div>
        </div>
		
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Price</label></div>
               <div class="col-12 col-md-9"><input type="number" id="price" name="price" class="form-control" min="1" required></div>
        </div>

		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Stand Size(Sqm)</label></div>
               <div class="col-12 col-md-9"><input type="number" id="stand_size" name="stand_size" class="form-control" required></div>
        </div>
		
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Number of Toilets</label></div>
               <div class="col-12 col-md-9"><input type="number" id="toilets" name="toilets" class="form-control" min="0" max="5" required></div>
        </div>
		
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Number of Rooms</label></div>
               <div class="col-12 col-md-9"><input type="number" id="rooms" name="rooms" class="form-control" min="0" max="20" required></div>
        </div>

		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Number of Garages</label></div>
               <div class="col-12 col-md-9"><input type="number" id="garages" name="garages" class="form-control" min="0" max="5" required></div>
        </div>
                              
          
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
     $surburb =  $_POST['surburb'];
     $equipment =  $_POST['equipment'];
     $description =  $_POST['description'];
	 $price =  $_POST['price'];
     $stand_size =  $_POST['stand_size'];
     $toilets =  $_POST['toilets'];
	 $rooms =  $_POST['rooms'];
     $garages =  $_POST['garages'];
	 
     $newname=date("ymdhis").".jpg";
     $size=$_FILES['file']['size'];
     $type=$_FILES['file']['type'];
     $tmp_name=$_FILES['file']['tmp_name'];
     $error=$_FILES['file']['error'];
	 
     $target = "../images/$newname";
     
     $query2 = "insert into houses(image, surburb, description, price, stand_size, toilets, rooms, garages)
					values('$newname','$surburb','$description','$price','$stand_size','$toilets','$rooms', '$garages')";
     $result2 = mysqli_query($dbcon, $query2) or die(mysqli_error($dbcon));
	 
	 $last_id = mysqli_insert_id($dbcon);
	 
	 $query3 = "insert into images(house_id,image_name) values('$last_id','$newname')";
     $result3 = mysqli_query($dbcon, $query3) or die(mysqli_error($dbcon));
	 
     if($result2){
		 
     move_uploaded_file($tmp_name, $target);
     ?>
     <script type="text/javascript">
     alert("House successfully Uploaded");
     parent.location = 'index.php';
     </script>
     <?php
	 exit();
     }
     }
?>