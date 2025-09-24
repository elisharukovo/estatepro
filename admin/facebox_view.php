<?php require_once('../functions.php'); ?>
<link rel="stylesheet" href="../css/w3.css">
<style>
.mySlides {display:none;}
</style>
					
					<h2 class="w3-center">Slideshow</h2>
					

<div class="w3-content w3-display-container" style="background-color:blue">
<?php
	    $id=$_GET['id'];
        $query = mysqli_query($dbcon, "select * from images where house_id='$id'")or die(mysqli_error($dbcon));
		
            while($row= mysqli_fetch_array($query)){
                $id =$row['id'];
                $house_id = $row['house_id'];
				$image_name = $row['image_name'];
				?>
				<img class="mySlides" src="../images/<?php echo $image_name; ?>" style="width:100%">
				<?php
			}  
		?>
  

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

					
				
					