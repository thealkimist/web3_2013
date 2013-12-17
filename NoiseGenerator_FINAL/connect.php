<?php


require_once('config.php');
if (CONSUMER_KEY === '' || CONSUMER_SECRET === '' || CONSUMER_KEY === 'CONSUMER_KEY_HERE' || CONSUMER_SECRET === 'CONSUMER_SECRET_HERE') {
  echo 'You need a consumer key and secret to test the sample code. Get one from <a href="https://dev.twitter.com/apps">dev.twitter.com/apps</a>';
  exit;
}

$content = '<a href="./redirect.php"><img src="./images/lighter.png" alt="Sign in with Twitter"/></a>';
 

?>

<!DOCTYPE html>

<html>

	
	<head>
		<title>Ns-aph-o-rism</title>
		<meta name = "description" content = "Randomly generates tweets based on NSA revelations">

		<meta property = "og:type" content = "website">

		<link rel = "stylesheet" type = "text/css" href = "css/main.css"/>
		
	</head>

	<body>

	<div class = "title">
		<section class = "title-name">Ns-aph-o-rism</section>
		<h2 class = "definition">n. A short pithy saying based on the NSA's list of "suspicious" words.</h2>
	</div>

	<div class = "twitter-login">
		<a href="redirect.php" class="twitter-login-button" data-lang="en">Login</a>
	</div>

	<div id = "twitter-generate">
		<a href="index.php" class="twitter-generate-button" data-lang="en">Generate</a>
	</div>

	<div id = "twitter-button">
		<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Post</a>
	</div>


	<div class = "description">
		<p>Using a list of 600+ words that the NSA uses to flag potential "dangerous" users, 
		Nsaphorism generates more digital noise via Twitter by incorporating that list with common sayings.</p>
	</div>



	</body>
<script type = "text/javascript" src = "js/main.js"></script>
	

</html>

