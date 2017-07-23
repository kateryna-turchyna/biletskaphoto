<!DOCTYPE html>
<?php include 'header.php';?>

<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
			<div class="container center-block" id="container" style="visibility:hidden">
				<div class="grid center-block">
		  
				<a href="#gallery" data-slide-to="0" class="grid__item grid__sizer"><img src="portraits/feeling.jpg" data-toggle="modal" data-target="#myModal"></a>
		   
				<a href="#gallery" data-slide-to="1" class="grid__item" ><img src="portraits/girl on the grass.jpg" data-toggle="modal" data-target="#myModal"></a>
	   
				<a href="#gallery" data-slide-to="2" class="grid__item"><img src="portraits/girl on a swing.jpg" data-toggle="modal" data-target="#myModal"></a>
		  
				<a href="#gallery" data-slide-to="3" class="grid__item"><img src="portraits/girl portrait.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="4" class="grid__item"><img src="portraits/girl with sunglasses.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="5" class="grid__item"><img src="portraits/lonely.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="6" class="grid__item"><img src="portraits/man in winter mountains.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="7" class="grid__item"><img src="portraits/mood portrait.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="8" class="grid__item"><img src="portraits/boy cowboy.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="9" class="grid__item"><img src="portraits/silhouettes.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="10" class="grid__item"><img src="portraits/mother and daughter.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="11" class="grid__item"><img src="portraits/romantic pregnancy.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="12" class="grid__item"><img src="portraits/sisters.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				<a href="#gallery" data-slide-to="13" class="grid__item"><img src="portraits/sunny pregnancy.jpg" data-toggle="modal" data-target="#myModal"></a>
				
				
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
				
					<div class="item active center-block"><img src="portraits/feeling.jpg" alt="feeling">
					</div>
					
					<div class="item horizontal_modal center-block"> <img src="portraits/girl on the grass.jpg" alt="girl on the grass">
					</div>
					
					<div class="item vertical_modal center-block"> <img src="portraits/girl on the swing.jpg" alt="girl on the swing">
					</div>
					
					<div class="item vertical_modal center-block"> <img src="portraits/girl portrait.jpg" alt="girl portrait">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="portraits/girl with sunglasses.jpg" alt="girl with sunglasses">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="portraits/lonely.jpg" alt="lonely">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="portraits/man in winter mountains.jpg" alt="man in winter mountains">
					</div>
					
					<div class="item vertical_modal center-block"><img src="portraits/mood portrait.jpg" alt="mood portrait">
					</div>
					
					<div class="item vertical_modal center-block"><img src="portraits/boy cowboy.jpg" alt="boy cowboy">
					</div>
					
					<div class="item vertical_modal center-block"><img src="portraits/silhouettes.jpg" alt="silhouettes">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="portraits/mother and daughter.jpg" alt="mother and daughter">
					</div>
					
					<div class="item vertical_modal center-block"><img src="portraits/romantic pregnancy.jpg" alt="romantic pregnancy">
					</div>
					
					<div class="item horizontal_modal center-block"><img src="portraits/sisters.jpg" alt="sisters">
					</div>
					
					<div class="item vertical_modal center-block"><img src="portraits/sunny pregnancy.jpg" alt="sunny pregnancy">
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
</div>	
<script>

window.onload = orgGrid;

function orgGrid()
{
	 // Masonry grid setup
	$(".grid").masonry({
	  itemSelector: ".grid__item",
	  columnWidth: ".grid__sizer",
	  gutter: 15,
	  percentPosition: true
	 });
	 $("#container").css("visibility", "visible");
}


// Image replacement handler
$(document).on("click", ".js-button", function() {
var imageSrc = $(this).parents(".grid__item").find("img").attr("src");
$(".js-download").attr("href", imageSrc);
$(".js-modal-image").attr("src", imageSrc);
$(document).on("click", ".js-heart", function() {
$(this).toggleClass("active");
});
});
</script>


<?php include 'footer.php';?>