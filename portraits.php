<!DOCTYPE html>
<?php include 'header.php';?>
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="gal">
				<a href="#gallery" data-slide-to="0" class="grid__item grid__sizer"><img src="portraits/feeling.jpg" data-toggle="modal" data-target="#myModal"></a>
		   
				<a href="#gallery" data-slide-to="1" class="grid__item" ><img src="portraits/grass.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="2" class="grid__item"><img src="portraits/girl_with_sunglasses.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="3" class="grid__item"><img src="portraits/lonely.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="4" class="grid__item"><img src="portraits/mood_portrait.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="5" class="grid__item"><img src="portraits/professional_headshots_woman.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="6" class="grid__item"><img src="portraits/professional_portrait_woman.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="7" class="grid__item"><img src="portraits/small_girl_with_flowers.jpg" data-toggle="modal" data-target="#myModal"></a>
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
				
					<div class="item active center-block"><img src="portraits/feeling.jpg" alt="feeling">
					</div>
					
					<div class="item horizontal_modal center-block"> <img src="portraits/grass.jpg" alt="girl on the grass">
					</div>
					
					<div class="item vertical_modal center-block"> <img src="portraits/girl_with_sunglasses" alt="girl on the swing">
					</div>
					
					<div class="item vertical_modal center-block"> <img src="portraits/lonely.jpg" alt="girl portrait">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="portraits/mood_portrait.jpg" alt="girl with sunglasses">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="portraits/professional_headshots_woman.jpg" alt="lonely">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="portraits/professional_portrait_woman.jpg" alt="man in winter mountains">
					</div>
					
					<div class="item vertical_modal center-block"><img src="portraits/small_girl_with_flowers.jpg" alt="mood portrait">
					</div>
					
				<!--end carousel-inner-->
				</div>
				<!--Begin Previous and Next buttons-->
				<a class="left carousel-control" href="#gallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#gallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
				<!--end carousel--></div>

	<!--end modal-body-->
			</div>
			
			<div class="modal-footer">
			<div class="pull-left">
			<small>Pictures by Jhanna Biletska</small>
			</div>
			<button class="btn-sm close" type="button" data-dismiss="modal">Close</button>
			<!--end modal-footer-->
			</div>
	<!--end modal-content--></div>
	<!--end modal-dialog--></div>
	<!--end myModal--></div>	
			
			
</div>
		
<?php include 'footer.php';?>