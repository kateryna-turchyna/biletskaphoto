<?
include __DIR__ . '/init.php'; 
define("MAILGUN_KEY", 'key-4efdc4e775dcb24f76df7029e1a67995');
define("MAILGUN_DOMAIN", "sandbox824a6bda3ee64f08a82923fcf66a3789.mailgun.org");

//Auto generate the session ID and get it
session_start();
$id = session_id();
$name = $_SESSION['name'];
$rating = $_POST['rating'];
$rev_text = $_POST['text'];
$time_review = date("Y-m-d H:i:s");

// connection to the db
$db = new PDO(
    'mysql:host=localhost;dbname=jhanna',
    'root',
    'password'
);

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
	$st = $db->prepare("insert into reviews (rev_text, score, name, time) values (?,?,?,?)");
	$st->execute([$rev_text, $rating, $name, $time_review]);
	
	header('Location: leave_review.php');
	}
?>