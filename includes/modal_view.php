
					<!-- student payment modal -->
					<div id="<?php echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<form method="post" action="save_fee.php" >
					<div class="modal-header" style="font-size:14px;font-family:Times New Roman;">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					
					<h3 id="myModalLabel" style="font-size:14px;">Customer Details</h3>
					</div>
					<div class="modal-body">
					<div class="">
					
					<p>NAME: <strong><?php //echo //$name; ?></strong></p>
					<p>ADDRESS: <strong><?php //echo $address; ?></strong></p>
                                        <p>STATE: <strong><?php //echo $state; ?></strong></p>
					<p>ZIP: <strong><?php //echo $zip; ?></strong></p>
                                        <p>PHONE: <strong><?php //echo $phone; ?></strong></p>
					<p>REMARKS: <strong><?php //echo $remarks; ?></strong></p>
                                   
					</div>
					</div>
					<div class="modal-footer">
					</div>
					</form>
					</div>
					
					
				
					