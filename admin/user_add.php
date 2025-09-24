    <?php require_once('header.php'); ?>
	<?php require_once('sidebar.php'); ?>

    <div class="content">
	
	<div class="alert alert-info"><Strong>Add New User</strong></div>
	
	<form id="myForm"  method="POST" action="process_user.php">
		<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" maxlength="50" autocomplete="off" required autofocus>
		</div>
		
		<div class="form-group">
			<label for="name">:Name</label>
			<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" maxlength="50" autocomplete="off" required >
		</div>
		
		<div class="form-group">
			<label for="surname">Surname:</label>
			<input type="text" class="form-control" id="surname" placeholder="Enter Surname" name="surname" maxlength="50" autocomplete="off" required >
		</div>
		
		<div class="form-group">
			<label for="gender">Gender:</label><br>
			<input type="radio" id="male" name="gender" value="Male"> Male<br>
			<input type="radio" id="female" name="gender" value="Female"> Female
		</div>
		
		<div class="form-group">
			<label for="address">Address:</label>
			<input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" maxlength="50" autocomplete="off" required>
		</div>
		
		<div class="form-group">
			<label for="address">Contact Number:</label>
			<input type="number" class="form-control" id="contact" placeholder="Enter Contact Numbers" name="contact" maxlength="50" autocomplete="off" required>
		</div>
									
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" maxlength="20" required >
		</div>
									
		<div class="form-group">
			<label for="confirm_password">Confirm Password:</label>
			<input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" maxlength="20" required >
		</div>
									
		<div id="ack"></div>
									
		<button id="submit" type="submit" class="btn btn-primary">Save</button>
	</form>
								
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/my_script.js"></script>
	
	</div>
		
	</div>

</body>
</html>

<?php //include('_footer.php'); ?>