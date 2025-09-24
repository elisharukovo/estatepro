
	<?php require_once('header.php'); ?>
	<?php require_once('sidebar.php'); ?>
	
	<div class="content">
	
	<p>&nbsp;</p>
	
	<div class="alert alert-info"><Strong>Purchased Stands</strong></div>
			
<div class="listings_container">			
						  
	<?php
	$query = "select *, DATE_FORMAT(date_added, '%M %d, %Y') AS dat from stands where status=1 and username='$_SESSION[client]' order by id desc";
	$result=mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
          
	 while($row = mysqli_fetch_array($result))
	 {
		 $id = $row['id'];
		 $image_name=$row['image'];
		 $image="../images/$image_name";
         $surburb = $row['surburb'];
         $description = $row['description'];
         $price = $row['price'];
		 $stand_size = $row['stand_size'];
		 $status = $row['status'];
		 $title_deeds = $row['title_deeds'];
         $date = $row['dat'];
		 
		 if($title_deeds!=="")
		 {
			$action="<a href='../title_deeds/$title_deeds' title='View Title Deeds'>
			            <button class='btn btn-success'>View Title Deeds</button>
						</a>"; 
		 }
		 else
		 {
			 $action="<button class='btn btn-danger'>Title Deeds are being processed</button>";
		 }
						?> 
						<div class='listing_box house sale'>
							<div class='listing'>
								<div class='listing_image'>
									<div class='listing_image_container'>
										<a rel='facebox' href='facebox_view.php?id=<?php echo $id; ?>'><img src='<?php echo $image ?>' alt='image'></a>
									</div>
									<div class='tags d-flex flex-row align-items-start justify-content-start flex-wrap'>
										<div class='tag tag_house'><a href='#'>Stand</a></div>
										<div class='tag tag_sale'><a href='#'><?php echo $date ?></a></div>
									</div>
									<div class='tag_price listing_price'>$ <?php echo $price; ?></div>
								</div>
								<div class='listing_content'>
									<div class='prop_location listing_location d-flex flex-row align-items-start justify-content-start'>
										<img src='../images/icon_1.png' alt=''>
										<a href='#'><strong><?php echo $surburb;?></strong>
										<p class='description'><?php echo $description;?></p></a>
									</div>
									<div class='listing_info'>
										<ul class='d-flex flex-row align-items-center justify-content-start flex-wrap'>
											<li class='property_area d-flex flex-row align-items-center justify-content-start'>
												<img src='../images/icon_2.png' alt='' data-toggle='tooltip' data-placement='top' title='Stand Size:<?php echo $stand_size;?> square metres'>
												<span data-toggle='tooltip' data-placement='top' title='Stand Size:<?php echo $stand_size; ?> square metres'><?php echo $stand_size;?> sqm</span>
											</li>
										</ul>
				                         <?php echo $action; ?>
									</div>
								</div>
							</div>
						</div>
	<?php
	 }
	 ?>			  
						  
						  
	</div>					  
						  
</div>
		
	</div>

</div>
</body>
</html>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../styles/bootstrap-4.1.2/popper.js"></script>
<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/progressbar/progressbar.min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="../js/listings.js"></script>
<script src="../js/facebox.js" type="text/javascript"></script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'resources/loading.gif',
        closeImage   : '../resources/closelabel.png'
      })
    })
  </script>