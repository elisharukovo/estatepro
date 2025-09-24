
	<?php require_once('header.php'); ?>
	<?php require_once('sidebar.php'); ?>
	
	<div class="content">
	
	<p>&nbsp;</p>
	
	<div class="alert alert-info"><Strong>Houses For Sale</strong></div>
			
<div class="listings_container">			
						  
	<?php
	$query = "select *, DATE_FORMAT(date_added, '%M %d, %Y') AS dat from houses where status=0 order by id desc";
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
         $toilets = $row['toilets'];
         $rooms = $row['rooms'];
         $garages = $row['garages'];
         $date = $row['dat'];
						?> 
						<div class='listing_box house sale'>
							<div class='listing'>
								<div class='listing_image'>
									<div class='listing_image_container'>
										<a rel='facebox' href='facebox_view.php?id=<?php echo $id; ?>'>
										   <img src='<?php echo $image ?>' alt='image' height="300">
										</a>
									</div>
									<div class='tags d-flex flex-row align-items-start justify-content-start flex-wrap'>
										<div class='tag tag_house'><a href='#'>house</a></div>
										<div class='tag tag_sale'><a href='#'>for sale</a></div>
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
											<li class='d-flex flex-row align-items-center justify-content-start'>
												<img src='../images/icon_3.png' alt='' data-toggle='tooltip' data-placement='top' title='Toilets:<?php echo $toilets; ?>'>
												<span data-toggle='tooltip' data-placement='top' title='Toilets:<?php echo $toilets; ?>'><?php echo $toilets; ?></span>
											</li>
											<li class='d-flex flex-row align-items-center justify-content-start'>
												<img src='../images/icon_4.png' alt='' data-toggle='tooltip' data-placement='top' title='Rooms:<?php echo $rooms; ?>'>
												<span data-toggle='tooltip' data-placement='top' title='Rooms:<?php echo $rooms; ?>'><?php echo $rooms; ?></span>
											</li>
											<li class='d-flex flex-row align-items-center justify-content-start'>
												<img src='../images/icon_5.png' alt='' data-toggle='tooltip' data-placement='top' title='Garages:<?php echo $garages; ?>'>
												<span data-toggle='tooltip' data-placement='top' title='Garages:<?php echo $garages; ?>'><?php echo $garages; ?></span>
											</li>
										</ul>
				
										<a href='payment.php?id=<?php echo $id; ?>&price=<?php echo $price; ?>' title='Purchase A House' id='$id'>
										    <button class='btn btn-info'>Cash</button>
										</a>
										
										<a href='terms_and_conditions.php?id=<?php echo $id; ?>&price=<?php echo $price; ?>' title='Purchase A House' id='$id'>
										    <button class='btn btn-success'>Installment</button>
										</a>
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