<?php
include __DIR__ . '/init.php'; 
define("MAILGUN_KEY", 'key-4efdc4e775dcb24f76df7029e1a67995');
define("MAILGUN_DOMAIN", "sandbox824a6bda3ee64f08a82923fcf66a3789.mailgun.org");

//Auto generate the session ID and get it
session_start();
$name = $_POST['name'];
$password = $_POST['password'];

// connection to the db
$db = new PDO(
    'mysql:host=localhost;dbname=jhanna',
    'root',
    'password'
);

    //if user reached page via POST (as by submitting a form via POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		//Retrieve the field values from our login form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
        
		// validate submission
        if (empty($_POST["name"]))
        {
            echo("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            echo("You must provide your password.");
        }

        // query database for user
		$sql = "SELECT user_id, name, password FROM users WHERE name = :name";
		$st = $db->prepare($sql);
		//Bind value.
		$st->bindParam(':name', $name);
		$st->execute();
		$user = $st->fetch(PDO::FETCH_ASSOC);
		
		//If $row is FALSE.
    if($user === false){
        //Could not find a user with that username!
        //PS: You might want to handle this error in a more user-friendly manner!
        die('Incorrect username / password combination!');
    } else{
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.
		//If Password = password in the database, the login has been successful.
        if($password===$user['password']){
            //Provide the user with a login session.
           $id = session_id();
		   $_SESSION['name']=$name;
			// echo session_id();
            $_SESSION['logged_in'] = time();
            
            //Redirect to our protected page, which we called index.php
             header('Location: leave_review.php');
            exit;
            
        } else{
            //$validPassword was FALSE. Passwords do not match.
            die('Incorrect username / password combination!');
        }
    }
       
    }

?>