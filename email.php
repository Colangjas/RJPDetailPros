<DOCTYPE html>
<html>
	<head>
		<title>RJP Detail Pros</title>
		<meta charset="UTF-8" />
		<link href="EricMeyerReset.css" rel="stylesheet" />
		<link href="styles.css" rel="stylesheet" />
	</head>
	<body>
		<div id="inner">
			<div id="upper">
			<header>
				<h1>RJP Detail Pros</h1>
			</header>
			<nav>
				<ul>
					<a href="index.htm"><li>Schedule</li></a>
					<a href="package.htm"><li>Packages</li></a>
					<a href="care.htm"><li>Personal Care</li></a>
					<a href="contact.htm"><li>Contact</li></a>
				</ul>
			</nav>
			</div>
			<article id="mail">
				<section>

<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$to = "rjpdetailpros@gmail.com";
$subject = "Message from RJP visitor";

$message = $message . "\n\n $name" . "\n Phone: $phone" . "\n reply e-mail: $mail";

mail ($to, $subject, $message, "From: " . $name);
echo "<p>Your message has been sent</p>";


?>

</section>
				<section>
				<h2>We Proudly Use <a href="http://mothers.com/" target="_blank"><img src="images/mothersLogo.png" alt="Mother's Polishes and Wax" /></a></h2>
				</section>
			</article>
			<footer>
				<p>Copyright&copy; 2015 rjpdetail.com</p>
			</footer>
		</div>
	</body>
</html>