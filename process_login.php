     <?php
	 session_start();
	 
     include_once ('functions.php');
	 
     $login_error='';
     
     $username = clean($_POST["username"]);
     $pass = clean($_POST["password"]);
	 $password = SHA1($pass);
	 
	 $query  = "SELECT * from users where username='$username' AND password = '$password'";
     $result = mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
	 
	 $count = mysqli_num_rows($result);
	 
	 if($count>0)
	 {
		 $row=mysqli_fetch_array($result);
		 $_SESSION['user'] = $username;
		 $_SESSION['fullname'] = $row['name'].' '.$row['surname'];
		 ?>
            <script language="javascript">
            parent.location = 'admin/'
            </script>
            <?php 
			exit;
	 }
 	
     else
     {
		 echo "<div class='alert alert-danger'>Access Denied</div>";
     }
	
     ?>