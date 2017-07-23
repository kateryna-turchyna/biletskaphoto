<?php

include __DIR__.'/init.php';
define("MAILGUN_KEY", 'key-4efdc4e775dcb24f76df7029e1a67995');
define("MAILGUN_DOMAIN", "sandbox824a6bda3ee64f08a82923fcf66a3789.mailgun.org");
//Auto generate the session ID and get it
	session_start();
	$name = $_POST['name'];
    $email = $_POST['email'];
	$subject = $_POST['subject'];
    $message = $_POST['message'];
	$human = $_POST['human'];
	$from = 'TrueMomentphotography'; 
    $to = 'kateryna.turchyna@gmail.com'; 
	
	// connection to the db
$db = new PDO(
    'mysql:host=localhost;dbname=jhanna',
    'root',
    'password'
);

$st = $db->prepare("insert into contact_me (name, email, subject, message) values (?,?,?,?)");
$st->execute([$name, $email, $subject, $message]);
	
//  Instantiate the client.
$mgClient = new Mailgun\Mailgun(MAILGUN_KEY);

// Make the call to the client.

$result = $mgClient->sendMessage(MAILGUN_DOMAIN,
	array(
		'from'    => 'Jhanna Biletska Photography <postmaster@sandbox824a6bda3ee64f08a82923fcf66a3789.mailgun.org>',
		'to'      => 'tmp10 <tmp10625801@gmail.com>',
		'subject' => $subject,
		'html'    => 'Jhanna, you get an email from' . $from . '.' . '<br/>' . $name . " ". $email.' wrote you: ' . $message
	)
);

//  Instantiate the client.
$mgClient = new Mailgun\Mailgun(MAILGUN_KEY);

// Make the call to the client.
$result = $mgClient->sendMessage(MAILGUN_DOMAIN,
array(
	'from'    => 'Jhanna Biletska Photography <postmaster@sandbox824a6bda3ee64f08a82923fcf66a3789.mailgun.org>',
	'to'      => $email,
	'subject' => 'Hello' . ' ' . $name,
	'html'    => '<b>Congratulations</b>' . ' ' . $name . '<br/>'. 'You are subscribed for our discounts and news.'
	)
);



include __DIR__.'/header.php';
?>
<div class="container">
	<div class="jumbotron">
		<h3 class="text-center">Your message has been successfully sent!</h3>
		<h3 class="text-center">We will contact you asap!</h3>
	</div>
</div>
