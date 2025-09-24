<?php
require_once('../functions.php');
$id = clean($_GET['id']);
$sql = "DELETE FROM stands WHERE id= '$id'";
$result=mysqli_query($dbcon, $sql) or die("something went wrong");
$sql = "select image_name from images WHERE stand_id= '$id'";
$result=mysqli_query($dbcon, $sql) or die("something went wrong");
while($row=mysqli_fetch_array($result)){
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