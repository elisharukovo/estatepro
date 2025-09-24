     <?php
	 require_once("session_status.php");
	 require_once ('../functions.php');
	 
     $username = clean($_SESSION['client']);
	 $old_password = clean($_POST['old_password']);
     $new_password = clean($_POST['new_password']); 
     $confirm_password = clean($_POST['confirm_password']);
	 
	 if(strlen($old_password)<1 || strlen($new_password)<1 || strlen($confirm_password)<1)
	 {
		 echo "<div class='alert alert-danger'>Please fill all fields</div>";
		 exit;
	 }
	 
     	 
	 $query = "select * from users where username = '$username'";
	 $result = mysqli_query($dbcon, $query);
	      
	 while($row = mysqli_fetch_array($result))
	 {
		 $old_password_db = $row['password'];
     }
		   
     if(strcmp(sha1($old_password),$old_password_db)!= 0 )
	 {
		 echo "<div class='alert alert-danger'>Old Password is incorrect</div>";
		 exit;
	 } 
		   
     if(strlen($new_password)< 5)
	 {
		 echo "<div class='alert alert-danger'>Password is too short</div>";
		 exit;
	 } 
		   
     if(strcmp(sha1($new_password),sha1($confirm_password))!= 0 )
	 {
		 echo "<div class='alert alert-danger'>Password did not match</div>";
		 exit;
	 }

      $password = sha1($new_password);	 
	
	 $query1 = "Update users set password = '$password' where username = '$username'";		
     $result1 = mysqli_query($dbcon, $query1);
	 	 
     if($result1)
     {
     ?>
     <script language="javascript">
     alert("Password reset was successiful created");
     location = 'index.php'
     </script>
     <?php
	 exit;
     }
     mysqli_close($dbcon);
     ?>