<!DOCTYPE html>
<?php include 'header.php';?>
<div class="container">
<form id="logInForm" method="post" class="jumbotron col-xs-12 col-md-4 col-md-offset-4" action="login.php">
	<div class="form-group col-xs-12">
		<label for="exampleInputName">Your first and last name</label>
		<input type="name" class="form-control" name="name" placeholder="Username" required>
	</div>
	 
	<div class="form-group col-xs-12">
		<label for="exampleInputPassword">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Password" required>
	</div>
  <button type="submit" class="btn btn-default center-block">Log in</button>
 </div><!--container-->
 </form>
  <?php include 'footer.php';?>