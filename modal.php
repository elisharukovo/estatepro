<?php require_once('../web/config.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Testing</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="shortcut icon" type="image/jpeg" href="images/logo.png">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

<form action="" method="post">
    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
        <div class="pull-right" style="font-size:14px;font-family:Times New Roman;">
            <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
        </div>
        
        <thead>
            <tr>
                <th>Name</th>
                <th class="empty"></th>
            </tr>
        </thead>
        
        <tbody>
            
            <?php
	    
            $query = mysqli_query($dbcon, "select * from customer")or die(mysqli_error($dbcon));
		
            while($row= mysqli_fetch_array($query)){
                $id =$row['id'];
                $name = $row['NAME'];
		$address = $row['ADDRESS'];
                $state = $row['STATE'];
		$zip = $row['ZIP'];
                $phone = $row['PHONE'];
	        $remarks = $row['REMARKS'];
                                   
		?>
		<tr>
		<td><?php echo $name; ?></td> 
	    
	 <!-- <td><?php echo $receipt; ?></td> -->
	
		<td class="empty" width="250">
		<a data-toggle="modal" href="#<?php echo $id; ?>" id="#<?php echo $id; ?>" class="btn btn-inverse" name=""><i class="icon-money icon-large"></i> View Full Details</a>
		<?php include('includes/modal_view.php'); ?>	
		</td>
		</tr>
	  <?php  }?> 	  
	 
	  			
		</tbody>
	</table>
	</form

     
    
</body>
</html>

