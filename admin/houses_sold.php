    <?php require_once('header.php'); ?>
	<?php require_once('sidebar.php'); ?>

    <div class="content">
	
	<p>&nbsp;</p>
	
	<div class="alert alert-info"><strong>Houses Sold</strong></div>
	
	<table class="table table-striped table-bordered">
        <tr>
			<th>Client</th>
			<th>Address</th>
			<th>Contact</th>
			<th>Property ID</th>		
			<th>Surburb</th>
			<th>Description</th>
			<th>Price</th>
			<th>Title Deeds</th>
			<th>Date Sold</th>
		</tr>	
		<?php
		$query = "select *, houses.id as property_id from clients,houses where clients.username=houses.username order by houses.id desc";
		$result=mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
        
		while($row = mysqli_fetch_array($result))
		{
			$id = $row['id'];
			$client=$row['name'].' '.$row['surname'];
			$gender=$row['gender'];
			$address=$row['address'];
			$contact=$row['contact'];
			$property_id=$row['property_id'];
			$surburb=$row['surburb'];
			$description=$row['description'];
			$price=$row['price'];
			$title_deeds=$row['title_deeds'];
			$date_purchased=$row['date_purchased'];
			
			
			if($title_deeds==""){$title_deeds="<a href='title_deeds_upload.php?id=$id'><span class='text-danger'>Click to Upload</span></a>";}
			else {$title_deeds="<a href='../title_deeds/$title_deeds'><span class='text-success'>View</span></a>";}
				
			
			echo "<tr>
			<td>$client</td>
			<td>$address</td>
			<td>$contact</td>
			<td>$property_id</td>
			<td>$surburb</td>
			<td>$description</td>
			<td>$ $price</td>
			<td>$title_deeds</td>
			<td>$date_purchased</td>
			</tr>";
		}
		?>
    </table>	
								
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