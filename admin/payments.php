    <?php require_once('header.php'); ?>
	<?php require_once('sidebar.php'); ?>

    <div class="content">
	
	<p>&nbsp;</p>
	
	<div class="alert alert-info"><strong>Payments Made</strong></div>
	
	<table class="table table-striped table-bordered">
        <tr>
			<th>Client</th>
			<th>Property id</th>
			<th>Town</th>
			<th>Surburb</th>
			<th>Payment Method</th>
			<th>Amount Paid</th>
			<th>Date Of Payment</th>
		</tr>	
		<?php
		$query = "select *, stands.id as property_id, date_format(date_paid,'%d %M, %Y %H:%i:%s') as formatted_date 
		         from clients,payments,stands
				 where stands.id=payments.stand_id
				 and clients.username=payments.username order by payments.id desc";
		$result=mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
        
		while($row = mysqli_fetch_array($result))
		{
			$client=$row['name'].' '.$row['surname'];
			$property_id=$row['property_id'];
			$town=$row['town'];
			$surburb=$row['surburb'];
			$payment_method=$row['payment_method'];
			$amount_paid=$row['amount_paid'];
			$date_paid=$row['date_paid'];
			$formatted_date=$row['formatted_date'];
			
			echo "<tr>
			<td>$client</td>
			<td>$property_id</td>
			<td>$town</td>
			<td>$surburb</td>
			<td>$payment_method</td>
			<td>$ $amount_paid</td>
			<td>$formatted_date</td>
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