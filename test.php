<!DOCTYPE html>
<html>
<head>
<style>
.main-text
{
    position: absolute;
    top: 50px;
    width: 96.66666666666666%;
    color: #FFF;
}
.btn-min-block
{
    min-width: 170px;
    line-height: 26px;
}
.btn-clear
{
    color: #FFF;
    background-color: transparent;
    border-color: #FFF;
    margin-right: 15px;
}
.btn-clear:hover
{
    color: #000;
    background-color: #FFF;
}


.my-max img {
	max-height: 800px;
}
.my-max .item-active {

}
</style>
</head>
<body>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<div class="container">

	
	<div class="row text-center">
      <h3>The Large Modal</h3>
      <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#largeModal">Click to open Modal</a>
	</div>
	<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			
			    <div class="row">
					<div class="col-md-12">
						<div id="carousel-example-generic" class="carousel slide my-max" data-ride="carousel"  data-interval="false">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner " >
								<div class="item active">
									<img src="wedding/bride_moment.jpg" alt="First slide" class="image-responsive center-block">
								</div>
								<div class="item">
									<img src="wedding/bride_and_groom.jpg" alt="Second slide" class="image-responsive center-block">
								</div>
								<div class="item">
									<img src="wedding/bride_in_the_chicago.jpg" alt="Third slide" class="image-responsive center-block">
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
									href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
									</span></a>
						</div>
						<div class="main-text hidden-xs">
							<div class="col-md-12 text-center">
								<div class="">
									<a class="btn btn-clear btn-sm btn-min-block" href="http://www.jquery2dotnet.com/">Login</a><a class="btn btn-clear btn-sm btn-min-block"
										href="http://www.jquery2dotnet.com/">Registration</a></div>
							</div>
						</div>
					</div>
				</div>
			
			
			
		  </div>
		  <div class="modal-body">
			<h3>Modal Body</h3>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
	
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>