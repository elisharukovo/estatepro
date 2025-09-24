<?php 
    require_once("session_status.php");
	require_once("../functions.php");
?>

<?php
$id=$_GET['id'];
$price=$_GET['price'];
$contact = get_contact($_SESSION['client']);

$query = "select * from stands where id='$_GET[id]'";
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
         $date = $row['dat'];
	 }
		?>

<!DOCTYPE html>
<html>
<head>
<title>Payment Portal</title>
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
	
	<div class="alert alert-info"><Strong>Payment Platform</strong></div>
	
    <button id='btn-bank' class="btn btn-success">Bank Transfer</button><br><br>
        
	<form role="form" id="bank" class="form-horizontal" action="<?php $_PHP_SELF ?>" method="POST" target="my-iframe">
      
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Transferring To:</label></div>
               <div class="col-12 col-md-9"><input type="text" id="company_account" name="company_account" class="form-control" value="Mornef Investments Account" readonly></div>
        </div>
                          
        <div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Card Number:</label></div>
               <div class="col-12 col-md-9"><input type="number" id="cardnumber" name="cardnumber" onkeypress="return isNumberKey(event)" maxlength="16" class="form-control" value="<?php echo $cardnumber ?>" required></div>
        </div>
		
		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">PIN:</label></div>
               <div class="col-12 col-md-9"><input type="number" id="pin" name="pin" class="form-control" maxlength="16" onkeypress="return isNumberKey(event)" value="<?php echo $pin ?>" required></div>
        </div>

		<div class="row form-group">
               <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Amount</label></div>
               <div class="col-12 col-md-9"><input type="number" id="amount" name="amount" class="form-control" value="<?php echo $price ?>" readonly></div>
        </div>
                             
        <div class="row form-group">
            <div class="col col-md-3"><label for="hf-password" class=" form-control-label"></label></div>
            <div class="col-12 col-md-9"><button type="submit" name="submitBank" id="submit2" class="btn btn-primary" >Pay</button></div>
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
	 
    if(isset($_POST['submitBank']))
	{
		$cardnumber = clean($_POST["cardnumber"]);
		$pin = clean($_POST["pin"]);
		$amount = clean($_POST["amount"]);
		
		if(strlen($cardnumber)<7)
        {
			?>
			<script type="text/javascript">
			    alert("A valid cardnumber is no less than 7 digits");
            </script>
            <?php
            exit;
        }
		
		$sql = "insert into payments(username,stand_id,payment_method,amount_paid) values('$_SESSION[client]','$id','Bank Transfer','$amount');";
		$sql .= "update stands set status=1, username='$_SESSION[client]', date_added=now() where id='$id';";
		$sql .= "Insert into ozekimessageout (receiver,msg,status) 
		         values 
				 ('$contact', 'Congratulations! for buying a Stand. Your payment of $ $amount have been successfully received. 
				    Your title deeds are being processed','send')";
		
		$result = mysqli_multi_query($dbcon, $sql) or die(mysqli_error($dbcon));
		
		
			?>
            <script language="javascript">
			    alert("Congratulations! for buying a stand. Your payment of $ <?php echo $amount; ?> have been successfully received");
                parent.location = 'stands_for_sale.php';
            </script>
            <?php
	   
    }
    ?>	