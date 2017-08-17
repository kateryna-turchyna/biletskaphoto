<!DOCTYPE html>
<?php include 'header.php'; ?>
<div class="container">
	<div id="Carousel" class="carousel slide carousel-fade">
  <!-- Indicators -->
  <ol class="carousel-indicators">
            <li data-target="Carousel" data-slide-to="0" class="active"></li>
            <li data-target="Carousel" data-slide-to="1"></li>
            <li data-target="Carousel" data-slide-to="2"></li>
        </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner center-block" role="listbox">
   
    <div class="item active col-xs-12 col-md-10 col-md-offset-1 col-lg-12 col-lg-offset-0">
      <img src="boy.JPG"  alt="Picture of a boy in the sunshine" >
     </div>
  
    <div class="item col-xs-12 col-md-10 col-md-offset-1 col-md-offset-1 col-lg-12 col-lg-offset-0">
      <img src="girl.JPG" class="img-responsive" alt="Picture of the girl in the green grass" >
      
    </div>
	
	<div class="item col-xs-12 col-md-10 col-md-offset-1 col-md-offset-1 col-lg-12 col-lg-offset-0">
      <img src="girl2.JPG" class="img-responsive" alt="Picture of a girl" >
      
    </div>

  </div>
	</div>
	<!-- Controls -->
	<a class="left carousel-control hidden-xs" href="#Carousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control hidden-xs" href="#Carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
	
	<!--subscribsion-->
	<div class="row center-block">
		<h3 class="col-xs-6 subscription-text">Subscribe for our news and get a discount!</h3>
		<form class="form-inline col-xs-6 subscription-main" method="POST" action="subscribe_jhanna.php">
			<div class="form-group">
				<input type="text" name="name" class="form-control" placeholder="Name">
			</div>
			<div class="form-group">
				<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			</div>
			<button type="submit" class="btn btn-default">Subscribe</button>
		</form>
	</div>


<?php include 'footer.php';?>
