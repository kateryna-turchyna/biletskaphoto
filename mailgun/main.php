<?
include __DIR__.'/vendor/autoload.php';
define("MAILGUN_KEY", 'key-4efdc4e775dcb24f76df7029e1a67995');
define("MAILGUN_DOMAIN", "sandbox824a6bda3ee64f08a82923fcf66a3789.mailgun.org");


//  Instantiate the client.
$mgClient = new Mailgun\Mailgun(MAILGUN_KEY);

// Make the call to the client.
$result = $mgClient->sendMessage(MAILGUN_DOMAIN,
array(
	'from'    => 'Mailgun Sandbox <postmaster@sandbox824a6bda3ee64f08a82923fcf66a3789.mailgun.org>',
	'to'      => 'tmp10 <tmp10625801@gmail.com>',
	'subject' => 'Hello tmp10',
	'html'    => '<b>Congratulations</b> tmp10, you just sent an email with Mailgun!  You are truly awesome!  You can see a record of this email in your logs: https://mailgun.com/cp/log .  You can send up to 300 emails/day from this sandbox server.  Next, you should add your own domain so you can send 10,000 emails/month for free.'
	)
);