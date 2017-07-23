<!DOCTYPE html>
<?php include 'header.php';?>
<?
include __DIR__ . '/init.php'; 
define("MAILGUN_KEY", 'key-4efdc4e775dcb24f76df7029e1a67995');
define("MAILGUN_DOMAIN", "sandbox824a6bda3ee64f08a82923fcf66a3789.mailgun.org");

//Auto generate the session ID and get it
session_start();
$name = $_SESSION['name'];

// connection to the db
$db = new PDO(
    'mysql:host=localhost;dbname=jhanna',
    'root',
    'password'
);

        $st = $db->prepare("SELECT rev_text, score, name FROM reviews");
		$st->execute();
		// $result = $st->fetchAll();
		// print_r($result);
		while($row = $st->fetch()) {
			echo '<div class="container">';
				echo '<div class="print_review">';
					echo '<p><h4>'.$row['name'].'</h4> left a review:</p>';
					echo '<p>'.$row['rev_text'].'</p>';
					echo '<p> The score is'.$row['score'].'</p>';
				echo '</div>';
			echo '</div>';
		}
?>
<?php include 'footer.php';?>