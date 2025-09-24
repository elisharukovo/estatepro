    <?php require_once('header.php'); ?>
	<?php require_once('sidebar.php'); ?>

    <div class="content">
	
	<a href="user_add.php"><button class="btn btn-success">Add New User</button></a>
	
	<p>&nbsp;</p>
	
	<div class="alert alert-info"><strong>Users</strong></div>
	
	<table class="table table-striped table-bordered">
        <tr>
		    <th>Username</th>
			<th>Name</th>
			<th>Surname</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Contact</th>
			<th></th>
		</tr>	
		<?php
		$query = "select * from users order by id asc";
		$result=mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
        
		while($row = mysqli_fetch_array($result))
		{
			$id = $row['id'];
			$username=$row['username'];
			$name=$row['name'];
			$surname=$row['surname'];
			$gender=$row['gender'];
			$address=$row['address'];
			$contact=$row['contact'];
			
			echo "<tr>
			<td>$username</td>
			<td>$name</td>
			<td>$surname</td>
			<td>$gender</td>
			<td>$address</td>
			<td>$contact</td>
			<td><a href='user_delete.php?id=$id' title='Delete' id='$id' onclick='return confirm(\"Are you sure you want to delete?\")'><button class='btn btn-danger'>Delete</button></a></td>
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