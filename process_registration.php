     <?php
	 session_start();
     require_once ('functions.php');
     
     $username = clean($_POST["username"]);
	 $name = clean($_POST["name"]);
	 $surname = clean($_POST["surname"]);
	 $gender = clean($_POST["gender"]);
	 $address = clean($_POST["address"]);
	 $contact = clean($_POST["contact"]);
	 $password = clean($_POST["password"]);
	 $confirm_password = clean($_POST["confirm_password"]);
     
	 $encripted_password = SHA1($password);
	 
	 validate_required();
	 
	 if(strlen($password)<5)
	 {
		 echo "<div class='alert alert-danger'>Password should be at least 5 characters long</div>";
		 exit;
	 }
	 
	 if(strcmp($password,$confirm_password)!= 0)
	 {
		 echo "<div class='alert alert-danger'>Password did not match</div>";
		 exit;
	 }
	 
	 $query1  = "SELECT * from clients where username='$username'";
	 $result1 = mysqli_query($dbcon, $query1) or die(mysqli_error($dbcon));
	 $count1 = mysqli_num_rows($result1);
	 
	 if($count1>0)
	 {
		 echo "<div class='alert alert-danger'>Username Already in use</div>";
		 exit;
	 }
	 
	 $query2 = "insert into clients(username,name,surname,gender,address,contact,password) values('$username','$name','$surname','$gender','$address','$contact','$encripted_password')";	
	 $result2 = mysqli_query($dbcon, $query2) or die(mysqli_error($dbcon));
     ?>
     <script language="javascript">
     alert("You have successifully registered. You can now login to access your portal");
     location = 'login.php'
     </script>