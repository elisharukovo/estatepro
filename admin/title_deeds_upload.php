 <?php require_once('header.php'); ?>
	<?php require_once('sidebar.php'); ?>
    <div class="content">
	
	<div class="alert alert-info"><Strong>Upload Title Deeds</strong></div>
	
	<form action="<?php $_PHP_SELF ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    
        <div class="row form-group">
            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Select File:</label></div>
            <div class="col-12 col-md-9"><input type="file" name="file" class="form-control" required></div>
        </div>
                             
        <div class="row form-group">
            <div class="col col-md-3"><label for="hf-password" class=" form-control-label"></label></div>
            <div class="col-12 col-md-9"><input type="submit" value="Upload" name="submit" class="btn btn-success" ></div>
        </div>
    </form>
								
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/my_script.js"></script>
	
</div>
		
	</div>

</body>
</html>

<?php //include('_footer.php'); ?>

<?php
	 
     if(isset($_POST['submit']))
	 {
	 
     $newname=date("ymdhis").".jpg";
     $size=$_FILES['file']['size'];
     $type=$_FILES['file']['type'];
     $tmp_name=$_FILES['file']['tmp_name'];
     $error=$_FILES['file']['error'];
	 
     $target = "../title_deeds/$newname";
     
     $query2 = "update houses set title_deeds='$newname' where id='$_GET[id]'";
     $result2 = mysqli_query($dbcon, $query2) or die(mysqli_error($dbcon));
	 
     if($result2){
		 
     move_uploaded_file($tmp_name, $target);
     ?>
     <script type="text/javascript">
     alert("Title Deeds successfully Uploaded");
     parent.location = 'houses_sold.php';
     </script>
     <?php
	 exit();
     }
     }
?>