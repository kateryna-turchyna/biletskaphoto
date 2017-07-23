<!DOCTYPE html>
<?php include 'header.php';?>
<div class="container">
	<form method="post" class="jumbotron col-xs-12 col-md-4 col-md-offset-4" action="register.php">
		<div class="form-group">
			<label for="exampleInputName">Your first and last name</label>
			<input type="name" class="form-control" name="name" placeholder="Username" required>
		</div>
		 <div class="form-group">
			<label for="exampleInputEmail">Email address</label>
			<input type="email" class="form-control required email" name="email" id="exampleInputEmail1" placeholder="Enter email">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Password" required>
			<input class="form-control input-spaced" name="confirmation" placeholder="Confirmation" type="password" required/>
	  </div>
	  <div class="checkbox">
		<label>
		  <input type="checkbox"> Yes, I want to get promotions by e-mail</input>
		</label>
	  </div>
	  <button type="submit" class="btn btn-default center-block">Submit</button>
	</form>
  </div><!--container-->
  <?php include 'footer.php';?>