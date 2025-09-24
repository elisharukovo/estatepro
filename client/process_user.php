     <?php
	 require_once("session_status.php");
	 require_once ('../functions.php');
	 
	 $username = clean($_POST['username']);
	 $name = clean($_POST['name']);
	 $surname = clean($_POST['surname']);
	 $name = clean($_POST['name']);
	 $gender = clean($_POST['gender']);
     $address = clean($_POST['address']); 
	 $password = clean($_POST['password']);
     $confirm_password = clean($_POST['confirm_password']);
	 
	 validate_required();	 
     	 
	 $query = "select * from users where username = '$username'";
	 $result = mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
	 $count = mysqli_num_rows($result);
		   
     if($count>0)
	 {
		 echo "<div class='alert alert-danger'>Username already in use</div>";
		 exit;
	 } 
		   
     if(strlen($password)< 5)
	 {
		 echo "<div class='alert alert-danger'>Password is too short</div>";
		 exit;
	 } 
		   
     if(strcmp(sha1($password),sha1($confirm_password))!= 0 )
	 {
		 echo "<div class='alert alert-danger'>Password did not match</div>";
		 exit;
	 }

      $password = sha1($password);	 
	
	 $query1 = "insert into users(username,name,surname,gender,address,password) values('$username','$name','$surname','$gender','$address','$password')";		
     $result1 = mysqli_query($dbcon, $query1) or die(mysqli_error($dbcon));
	 	 
     if($result1)
     {
     ?>
     <script language="javascript">
     alert("New User Created");
     location = 'users.php'
     </script>
     <?php
	 exit;
     }
     mysqli_close($dbcon);
     ?>