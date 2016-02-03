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

$package = $_POST['package'];
$date = $_POST['date'];
$vehicle = $_POST['vehicle'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$to = "rjpdetailpros@gmail.com";
$subject = "Order from RJP Customer";

$message ="$name has ordered $package" . "\n\n Clean date: $date" . "\n\n Vehicle: $vehicle" . "\n\n Comments: $message" . "\n\n $name" . "\n Phone: $phone" . "\n reply e-mail: $mail";

mail ($to, $subject, $message, "From: " . $name);

echo "<section id='dark2'>";
echo "<h2>Your order has been placed!</h2>";
echo "<p>Note that larger vehicles require an estimate for proper pricing</p>";
echo "<p>Before your vehicle is cleaned make sure to remove all valuble items. RJP Detail Pros is not responsible for damaged, or missing items left in vehicle.</p>";
echo "</section>";


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