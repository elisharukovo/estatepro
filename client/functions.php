     <?php
	require('config.php');

     function clean($str)
	   {
	 $str = trim($str);
	 global $dbcon;
     return mysqli_real_escape_string($dbcon, $str);
     }
	 
	function validate_required(){
	    foreach($_POST as $val) {
		    if(trim($val) == '' || empty($val)) {
			    echo "<div class='alert alert-danger'>Please fill all the fields</div>";
			    exit;
            }
        }
    }
	
	function total_paid($id)
	{
		global $dbcon;
		$query = "select sum(amount_paid) as total_paid from payments where house_id='$id'";
		$result=mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
		$row = mysqli_fetch_array($result);
		$total_paid = $row['total_paid'];
		return $total_paid;
	}
	 
    ?>
     
<script language="javascript">
function lettersOnly(evt) {
evt = (evt) ? evt : event;
var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
((evt.which) ? evt.which : 0));
if ( (charCode < 65 || charCode > 90 ) &&
(charCode < 97 || charCode > 122) && (charCode != 39)) {
if(charCode != 8){

return false;
}

}
return true;
}
         </script>
         
         
     <SCRIPT language=Javascript>
	   function isNumberKey(evt)
	     {
		 var charCode = (evt.which) ? evt.which : event.keyCode
		 if (charCode > 31 && (charCode < 48 || charCode > 57))
		     return false;
             return true;
	     }
	  </SCRIPT>
      