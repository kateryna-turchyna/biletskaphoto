<?php
include __DIR__ . '/init.php'; 
define("MAILGUN_KEY", 'key-4efdc4e775dcb24f76df7029e1a67995');
define("MAILGUN_DOMAIN", "sandbox824a6bda3ee64f08a82923fcf66a3789.mailgun.org");

//Auto generate the session ID and get it
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmation = $_POST['confirmation'];

// connection to the db
$db = new PDO(
    'mysql:host=localhost;dbname=jhanna',
    'root',
    'password'
);

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["name"]))
        {
            echo("You must provide your username.");
			exit;
        }
        else if (empty($_POST["password"]) || empty($_POST["confirmation"]))
        {
            echo("You must provide your password and confirmation.");
			exit;
        }
        else if($_POST["password"]!== $_POST["confirmation"])
        {
           echo("Your confirmation doesn`t match the password");
			exit;
        }
		else if (empty($_POST["email"]))
		{ 
			echo("You must provide your email");
			exit;
		}

        // checks if the username is a dublicate
        $st = $db->prepare("SELECT count(*) as cnt FROM users WHERE email = :email");
		$st->bindParam(':email', $email);
		$st->execute();
		$result = $st->fetchColumn();
        if($result != 0)
        {
            echo("SORRY, the user with provided e-mail is already registered");
			exit;
            
        }
        // if not - inrset into database
        else
        {
           $st = $db->prepare("insert into users (name, email, password) values (?,?,?)");
			$st->execute([$name, $email, $password]);
           
           //store their id in the session
		   $_SESSION['name']=$name;
		  $id = session_id();
		   
        
        }
		header('Location: leave_review.php');
    }

?>