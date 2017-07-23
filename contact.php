<!DOCTYPE html>
<?php include 'header.php';?>
	<div class="container">
		<div class="jumbotron">
			<h2 class="text-center contact_header">Contact me</h2>
				<div class="row center-block">
					<div class="col-xs-12 col-sm-6 contact_me_info">
						<p class="text-center">Zhanna Biletska</p>
						<p class="text-center">Chicago, Illinois</p>
						<p class="text-center">biletskaphoto@gmail.com</p>
						<p class="text-center">Skype: love_fairytale</p>
						<!--<img src="contact_me.jpg" class="img-responsive" alt="Jhanna Biletska">-->
					</div>
					<div class="col-xs-12 col-sm-6">
						<form method="post" action="contact_form.php">
							<div class="form-group">
								<input type="text" name="name" class="form-control" id="exampleInputName3" placeholder="Your Name">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" name="subject" class="form-control" placeholder="Subject">
							</div>
							<textarea class="form-control" name="message" placeholder="Message" rows="4"></textarea>
								<label>*What is 2+2? (Anti-spam)</label>
								<input name="human" placeholder="Type Here">
								<button name="submit" type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
				
		</div><!--jumbotron-->
<?php include 'footer.php';?>