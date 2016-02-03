<!-- PHP Wrapper - 500 Server Error -->
<html>
	<head>
		<title>RJP Detail Pros</title>
		<meta charset="UTF-8" />
		<link href="EricMeyerReset.css" rel="stylesheet" />
		<link href="styles.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:700italic' rel='stylesheet' type='text/css'>
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
<h1>500 Server Error</h1>
<p>
A misconfiguration on the server caused a hiccup.
Check the server logs, fix the problem, then try again.
</p>
<hr>

<?
  echo "URL: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."<br>\n";
  $fixer = "checksuexec ".escapeshellarg($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']);
  echo `$fixer`;
?>


			<footer>
				<p>Copyright&copy; 2015 rjpdetail.com</p>
			</footer>
		</div>
	</body>
</html>
