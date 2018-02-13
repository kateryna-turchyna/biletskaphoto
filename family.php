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
	
	  <div class="modal fade modal-fullscreen force-fullscreen" id="myModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			
			    <div class="row">
					<div class="col-md-12">
						<div id="gallery" class="carousel carousel-fade" data-ride="carousel"  data-interval="false">
							<div class="carousel-inner " >
								<div class="item active"><img src="family/girl_on_a_swing.jpg" class="image-responsive center-block" alt="item0">
								</div>
								
								<div class="item center-block vertical"> <img src="family/girls_playing_with_flowers.jpg" class="image-responsive center-block" alt="item1">
								</div>
								
								<div class="item center-block"> <img src="family/happy_mother_son.jpg" class="image-responsive center-block" alt="item2">
								</div>
								
								<div class="item center-block"> <img src="family/laughing_family.jpg" class="image-responsive center-block" alt="item3">
								</div>
								
								<div class="item center-block"><img src="family/mom_and_daughter.jpg" class="image-responsive center-block" alt="item4">
								</div>
								
								<div class="item center-block"><img src="family/mother_and_daughter.jpg" class="image-responsive center-block" alt="item0">
								</div>
								
								<div class="item center-block"><img src="family/mother_small_daughter.jpg" class="image-responsive center-block" alt="item0">
								</div>
							 
								<div class="item center-block"><img src="portraits/sisters.jpg" class="image-responsive center-block" alt="wedding in lincoln park">
								</div>
								
							</div>
							<a class="left carousel-control" href="#gallery" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a>
							<a class="right carousel-control" href="#gallery" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
					</div>
				</div>
		  <div class="modal-footer">
			<button class="btn-sm close" type="button" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>
</div>
 
	</div>
		
<?php include 'footer.php';?>