     <?php
	 require_once('../functions.php');
	 
	 $id = clean($_GET['id']);
	 
	 $query = "DELETE FROM `houses` WHERE id= '$id'";
     $result=mysqli_query($dbcon, $query) or die("something went wrong");
	 
	 $query2 = "select image_name from `images` WHERE house_id= '$id'";
     $result2=mysqli_query($dbcon, $query2) or die("something went wrong");
	 
	 while($row=mysqli_fetch_array($results2))
	 {
		 $image_name = $row['image_name'];
		 if(file_exists('../images/$image_name'))
		 {
			 unlink('../images/$image_name');
		 }
	 }
	 
	 $callingPage=$_SERVER['HTTP_REFERER'];
	 header('location: '.$callingPage);
	 mysqli_free_result($result);
     mysqli_close($dbcon);
	 exit();
     ?>