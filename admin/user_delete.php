     <?php
	 include_once('../functions.php');
	 
	 $id = clean($_GET['id']);
	 
	 $query = "DELETE FROM `users` WHERE id= '$id'";
     $result=mysqli_query($dbcon, $query);
	 
	 if(!mysqli_query($dbcon, $query))
	 {
     $logMessage = 'MySQL Error: ' . mysqli_error($dbcon);
     // Call your logger here.
     die('There was an error in the query');
     } 
	 $callingPage=$_SERVER['HTTP_REFERER'];
	 header('location: '.$callingPage);
	 @mysqli_free_result($result);
     @mysqli_close($dbcon);
     ?>