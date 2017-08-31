<!DOCTYPE html>
<?php include 'header.php';?>
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="gal">
				<a href="#gallery" data-slide-to="0" class="grid__item grid__sizer"><img src="family/girl_on_a_swing.jpg" data-toggle="modal" data-target="#myModal"></a>
		   
				<a href="#gallery" data-slide-to="1" class="grid__item" ><img src="family/girls_playing_with_flowers.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="2" class="grid__item"><img src="family/happy_mother_son.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="3" class="grid__item"><img src="family/laughing_family.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="4" class="grid__item"><img src="family/mom_and_daughter.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="5" class="grid__item"><img src="family/mother_and_daughter.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="6" class="grid__item"><img src="family/mother_small_daughter.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="7" class="grid__item"><img src="family/sisters.jpg" data-toggle="modal" data-target="#myModal"></a>
			</div>
		</div>
	</div>
		<!--begin modal window-->
	<div class="modal fade modal-fullscreen force-fullscreen" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content center-block">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" title="Close"> <span class="glyphicon glyphicon-remove"></span></button>
				</div>

			<div class="modal-body center-block">
			<!--begin carousel-->
				<div id="gallery" class="carousel slide carousel-fade center-block" data-ride="carousel" data-interval="false">
				<div class="carousel-inner center-block">
				
					<div class="item active center-block"><img src="family/girl_on_a_swing.jpg" alt="feeling">
					</div>
					
					<div class="item horizontal_modal center-block"> <img src="family/girls_playing_with_flowers.jpg" alt="girl on the grass">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="family/happy_mother_son.jpg.jpg" alt="girl with sunglasses">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="family/laughing_family.jpg" alt="lonely">
					</div>
					
					<div class="item vertical_modal center-block"><img src="family/mom_and_daughter.jpg" alt="mood portrait">
					</div>
					
					<div class="item vertical_modal center-block"><img src="family/mother_and_daughter.jpg" alt="sunny pregnancy">
					</div>
					
					<div class="item vertical_modal center-block"><img src="family/mother_small_daughter.jpg" alt="girls playing with flowers">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="family/sisters.jpg" alt="mom and daughter">
					</div>
					
					
				<!--end carousel-inner-->
				</div>
				<!--Begin Previous and Next buttons-->
				<a class="left carousel-control" href="#gallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#gallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
				<!--end carousel--></div>

	<!--end modal-body-->
			</div>
			
			<!--<div class="modal-footer">
			<div class="pull-left">
			<small>Pictures by Jhanna Biletska</small>
			</div>
			<button class="btn-sm close" type="button" data-dismiss="modal">Close</button>-->
			<!--end modal-footer-->
			</div>
	<!--end modal-content--></div>
	<!--end modal-dialog--></div>
	<!--end myModal--></div>	
			
			
</div>
		
<?php include 'footer.php';?>