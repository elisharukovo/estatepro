    <?php require_once('header.php'); ?>
	<?php require_once('sidebar.php'); ?>

    <div class="content">
	
	<p>&nbsp;</p>
	
	<div class="alert alert-info"><strong>Payments Made</strong></div>
	
	<table class="table table-striped table-bordered">
        <tr>
		    <th>Stand id</th>
			<th>Town</th>
			<th>Surburb</th>
			<th>Payment Method</th>
			<th>Amount Paid</th>
			<th>Date Of Payment</th>
		</tr>	
		<?php
		$query = "select *, date_format(date_paid,'%d %M, %Y %H:%i:%s') 
		          as formatted_date from payments,stands 
		          where payments.stand_id=stands.id 
		          and payments.username='$_SESSION[client]' order by payments.id desc";
		$result=mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
        
		while($row = mysqli_fetch_array($result))
		{
			$id=$row['id'];
			$town=$row['town'];
			$surburb=$row['surburb'];
			$payment_method=$row['payment_method'];
			$amount_paid=$row['amount_paid'];
			$date_paid=$row['date_paid'];
			$formatted_date=$row['formatted_date'];
			
			echo "<tr>
			<td>$id</td>
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