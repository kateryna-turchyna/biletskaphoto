<!DOCTYPE html>
<html lang="en">
<head>
	<title>Biletska Photo</title>
	<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
  
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js"></script>
	<link rel = "stylesheet" href = "bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="main-igor.css">
</head>
<body>




<!--<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials
  <span class="caret"></span></button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
    <li role="presentation"><a role="menuitem" href="#">HTML</a></li>
    <li role="presentation"><a role="menuitem" href="#">CSS</a></li>
    <li role="presentation"><a role="menuitem" href="#">JavaScript</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" href="#">About Us</a></li>
  </ul>
</div>-->




<nav class="navbar navbar-default">
	<div class="container">
		<img src="logo/big_logo.png" class="col-md-3 hidden-sm hidden-xs"/>
	</div>
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="logo/small_logo_2.png" class="hidden-lg hidden-md"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="hoverStyle"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
			<li class="dropdown" id="menu1"><a>Gallery</a>
					<ul class="dropdown-menu">
						<li><a href="wedding.php">Wedding/Love-story</a></li>
						<li><a href="portraits.php">Portrait</a></li>
						<li><a href="family.php">Family</a></li>
						<li><a href="events.php">Events</a></li>
					</ul>
			</li>
			<li class="hoverStyle"><a href="about.php">About</a></li>
			<li class="hoverStyle"><a href="prices.php">Prices</a></li>
			<li class="hoverStyle"><a href="contact.php">Contact</a></li>
			<li class="hoverStyle"><a href="reviews.php">Reviews</a></li>
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<script>
    $(document).ready(function () {
        var location = window.location.href;
        $('#bs-example-navbar-collapse-1 li a').each(function(){
            if( this.href.length > 0 && location.indexOf(this.href)>-1) {
               $(this).parent().addClass('active');
			   // alert("Location: " + location +
				// "; type: " + (typeof location) +
				// "; length: " + (location.length)
			   // );
			   // alert("current: " + this.href +
				// "; type: " + (typeof this.href) +
				// "; length: " + (this.href.length)
			   // );
			   // alert("index of: " + location.indexOf(this.href));
            }
        });
    });
</script>





















