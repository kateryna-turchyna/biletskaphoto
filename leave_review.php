<!DOCTYPE html>
<?php include 'header.php';?>

<div class="jumbotron container">
	<h3 class="text-center">Please rate our service, share your experience with others</h3>
</div>
<div class="container">
	<form method="post" class="text-center" action="ratings.php">
	<legend>Please rate our service:</legend>
	<div class="rating center-block">
			<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
			<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
			<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
			<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
			<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
	</div>
		<textarea class="form-control" name="text" placeholder="Your comment" rows="3"></textarea>
		<button type="submit" class="btn btn-lg center-block submit-button-leave-review">Submit</button>
	</form>
</div>

<?
include __DIR__ . '/init.php'; 
define("MAILGUN_KEY", 'key-4efdc4e775dcb24f76df7029e1a67995');
define("MAILGUN_DOMAIN", "sandbox824a6bda3ee64f08a82923fcf66a3789.mailgun.org");
// connection to the db
$db = new PDO(
    'mysql:host=localhost;dbname=jhanna',
    'root',
    'password'
);
	
	$st = $db->prepare("SELECT rev_text, score, name FROM reviews");
	$st->execute();
		
	while($row = $st->fetch()) {
		echo '<div class="container">';
			echo '<div class="row">';
				echo '<div class="print_review col-xs-12 col-sm-6 col-sm-offset-3">';
					echo '<div class="row">';
						echo '<div class="col-xs-12 col-md-3">';
							echo '<h4>'.$row['name'].'</h4>';
						echo '</div>';
						
						echo '<div class="col-xs-12 col-md-4 stars_review_print">';
							if ($row['score']==1) {
									echo '<div class="rating center-block">
											<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
											<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
											<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
											<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
											<input type="radio" id="star1" name="rating" value="1" /><label style="color: #f70" for="star1" title="Sucks big time">1 star</label>
										</div>';
							}else if ($row['score']==2) {
									echo '<div class="rating center-block">
											<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
											<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
											<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
											<input type="radio" id="star2" name="rating" value="2" /><label style="color: #f70" for="star2" title="Kinda bad">2 stars</label>
											<input type="radio" id="star1" name="rating" value="1" /><label style="color: #f70" for="star1" title="Sucks big time">1 star</label>
										</div>';
							}else if ($row['score']==3){
									echo '<div class="rating center-block">
											<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
											<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
											<input type="radio" id="star3" name="rating" value="3" /><label style="color: #f70" for="star3" title="Meh">3 stars</label>
											<input type="radio" id="star2" name="rating" value="2" /><label style="color: #f70" for="star2" title="Kinda bad">2 stars</label>
											<input type="radio" id="star1" name="rating" value="1" /><label style="color: #f70" for="star1" title="Sucks big time">1 star</label>
										</div>';
							}else if ($row['score']==4){
									echo '<div class="rating center-block">
											<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
											<input type="radio" id="star4" name="rating" value="4" /><label style="color: #f70" for="star4" title="Pretty good">4 stars</label>
											<input type="radio" id="star3" name="rating" value="3" /><label style="color: #f70" for="star3" title="Meh">3 stars</label>
											<input type="radio" id="star2" name="rating" value="2" /><label style="color: #f70" for="star2" title="Kinda bad">2 stars</label>
											<input type="radio" id="star1" name="rating" value="1" /><label style="color: #f70" for="star1" title="Sucks big time">1 star</label>
										</div>';
							}else {
									echo '<div class="rating center-block">
											<input type="radio" id="star5" name="rating" value="5" /><label style="color: #f70" for="star5" title="Rocks!">5 stars</label>
											<input type="radio" id="star4" name="rating" value="4" /><label style="color: #f70" for="star4" title="Pretty good">4 stars</label>
											<input type="radio" id="star3" name="rating" value="3" /><label style="color: #f70" for="star3" title="Meh">3 stars</label>
											<input type="radio" id="star2" name="rating" value="2" /><label style="color: #f70" for="star2" title="Kinda bad">2 stars</label>
											<input type="radio" id="star1" name="rating" value="1" /><label style="color: #f70" for="star1" title="Sucks big time">1 star</label>
										</div>';
							}
						echo '</div>';
					echo '</div>';
					echo '<p class="text-center">'.$row['rev_text'].'</p>';
					// $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['time']);
					// echo $date->format('Y-m-d');
					echo '<p>'.$row['time'].'</p>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
	}
	
?>
<?php include 'footer.php';?>