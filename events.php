<!DOCTYPE html>
<?php include 'header.php';?>
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="gal">

				<a href="#gallery" data-slide-to="0" class="grid__item grid__sizer"><img src="events/birthday_girl.jpg" data-toggle="modal" data-target="#myModal"></a>
		   
				<a href="#gallery" data-slide-to="1" class="grid__item" ><img src="events/cheers.jpg" data-toggle="modal" data-target="#myModal"></a>
	   
				<a href="#gallery" data-slide-to="2" class="grid__item"><img src="events/dad_and_son.jpg" data-toggle="modal" data-target="#myModal"></a>
		  
				<a href="#gallery" data-slide-to="3" class="grid__item"><img src="events/girl_at_babyshower.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="4" class="grid__item"><img src="events/make_a_wish.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="5" class="grid__item"><img src="events/man_at_the_event.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="6" class="grid__item"><img src="events/mom_and_son.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="7" class="grid__item"><img src="events/woman_smiling.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="8" class="grid__item"><img src="events/dessert_with_blueberry.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="9" class="grid__item"><img src="events/dessert_in_cup.jpg" data-toggle="modal" data-target="#myModal"></a>
				
		<!--begin modal window-->
	<div class="modal fade modal-fullscreen force-fullscreen" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content center-block">
				<div class="modal-header">
					<div class="pull-left">Wedding/Couples</div>
						<button type="button" class="close" data-dismiss="modal" title="Close"> <span class="glyphicon glyphicon-remove"></span></button>
				</div>

			<div class="modal-body center-block">
			<!--begin carousel-->
				<div id="gallery" class="carousel slide carousel-fade center-block" data-ride="carousel" data-interval="false">
				<div class="carousel-inner center-block">
				
					<div class="item active center-block"><img src="events/birthday_girl.jpg" alt="birthday girl">
					</div>
					
					<div class="item center-block"> <img src="events/cheers.jpg" alt="cheers">
					</div>
					
					<div class="item center-block"> <img src="events/dad_and_son.jpg" alt="dad and son">
					</div>
					
					<div class="item center-block"> <img src="events/girl_at_babyshower.jpg" alt="girl at babyshower">
					</div>
					
					<div class="item center-block"><img src="events/make_a_wish.jpg" alt="make a wish">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="events/man_at_the_event.jpg" alt="man at the event">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="events/mom_and_son.jpg" alt="mom and son">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="events/woman_smiling.jpg" alt="woman smiling">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="events/dessert_with_blueberry.jpg" alt="dessert with blueberry">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="events/dessert_in_cup.jpg" alt="dessert in cup">
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
		</div>
	</div>
</div>
<?php include 'footer.php';?>