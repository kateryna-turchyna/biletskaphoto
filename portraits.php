<!DOCTYPE html>
<?php include 'header.php';?>
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="gal">
				<a href="#gallery" data-slide-to="0" class="grid__item grid__sizer"><img src="portraits/feeling.jpg" data-toggle="modal" data-target="#myModal"></a>
		   
				<a href="#gallery" data-slide-to="1" class="grid__item" ><img src="portraits/grass.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="2" class="grid__item"><img src="portraits/sun.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="3" class="grid__item"><img src="portraits/lonely.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="4" class="grid__item"><img src="portraits/mood_portrait.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="5" class="grid__item"><img src="portraits/professional_headshots_woman.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="6" class="grid__item"><img src="portraits/professional_portrait_woman.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="7" class="grid__item"><img src="portraits/small_girl_with_flowers.jpg" data-toggle="modal" data-target="#myModal"></a>
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
								<div class="item active"><img src="portraits/feeling.jpg" class="image-responsive center-block" alt="item0">
								</div>
								
								<div class="item center-block"> <img src="portraits/grass.jpg" class="image-responsive center-block" alt="item1">
								</div>
								
								<div class="item center-block"> <img src="portraits/sun.jpg" class="image-responsive center-block" alt="item2">
								</div>
								
								<div class="item center-block"> <img src="portraits/lonely.jpg" class="image-responsive center-block" alt="item3">
								</div>
								
								<div class="item center-block vertical"><img src="portraits/mood_portrait.jpg" class="image-responsive center-block" alt="item4">
								</div>
								
								<div class="item center-block"><img src="portraits/professional_headshots_woman.jpg" class="image-responsive center-block" alt="item0">
								</div>
								
								<div class="item center-block"><img src="portraits/professional_portrait_woman.jpg" class="image-responsive center-block" alt="item0">
								</div>
							 
								<div class="item center-block"><img src="portraits/small_girl_with_flowers.jpg" class="image-responsive center-block" alt="wedding in lincoln park">
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
		
<?php include 'footer.php';?>