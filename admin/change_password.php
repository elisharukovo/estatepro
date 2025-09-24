<?php require_once('header.php'); ?>
	<?php require_once('sidebar.php'); ?>

    <div class="content">
	
	<p>&nbsp;</p>
	
	<div class="alert alert-info"><Strong>Change Password</strong></div>
	
	<form id="myForm"  method="POST" action="process_password.php">
								    <div class="form-group">
									    <label for="username">Old Password:</label>
										<input type="password" class="form-control" id="old_password" placeholder="Enter Old Password" name="old_password" maxlength="20" autocomplete="off" autofocus>
									</div>
									
									<div class="form-group">
									    <label for="password">New Password:</label>
										<input type="password" class="form-control" id="new_password" placeholder="Enter New Password" name="new_password" maxlength="20">
									</div>
									
									<div class="form-group">
									    <label for="password">Confirm Password:</label>
										<input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" maxlength="20">
									</div>
									
									<div id="ack"></div>
									
									<button id="submit" type="submit" class="btn btn-primary">Change</button>
								</form>
								
								<script type="text/javascript" src="../js/jquery.min.js"></script>
								<script type="text/javascript" src="../js/my_script.js"></script>
	
</div>
		
	</div>

</body>
</html>
<?php //include('_footer.php'); ?>