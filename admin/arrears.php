    <?php require_once('header.php'); ?>
	<?php require_once('sidebar.php'); ?>

    <div class="content">
	
	<p>&nbsp;</p>
	
	<div class="alert alert-info"><strong>Arrears</strong></div>
	
	<table class="table table-striped table-bordered">
        <tr>
			<th>Client</th>
			<th>Address</th>
			<th>Contact</th>
			<th>Property id</th>
			<th>Surburb</th>
			<th>Description</th>
			<th>Price</th>
			<th>Total Paid</th>
			<th>Balance</th>
			<th>Date Sold</th>
		</tr>	
		<?php
		$query = "select *,stands.id as property_id from clients,stands where clients.username=stands.username and stands.status=2 order by stands.id desc";
		$result=mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
        
		while($row = mysqli_fetch_array($result))
		{
			$id = $row['id'];
			$client=$row['name'].' '.$row['surname'];
			$address=$row['address'];
			$contact=$row['contact'];
			$property_id=$row['property_id'];
			$surburb=$row['surburb'];
			$description=$row['description'];
			$price=$row['price'];
			$balance=get_balance($id);
			$total_paid=$price-$balance;
			$date_purchased=$row['date_purchased'];				
			
			echo "<tr>
			<td>$client</td>
			<td>$address</td>
			<td>$contact</td>
			<td>$property_id</td>
			<td>$surburb</td>
			<td>$description</td>
			<td>$ $price</td>
			<td>$ $total_paid</td>
			<td><span class='text-danger'>$ $balance</span></td>
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