<?php

	if (isset($_POST['username']) && isset($_POST['password'])){
		if($_POST['username'] == 'albert' && $_POST['password'] == 'albert'){
			$result = "Logged In";
		}
		else{
			$result = "You are an Imposter";
		}
	}

?>

<!DOCTYPE>

<html>

	<head>
		<title>Login Page</title>
	</head>

	<body>
		<h1><?php echo $result; ?></h1>

		<form method = "post" action = "login.php">
			<input type = "text" name = "username" placeholder = "Username" /><br />
			<input type = "password" name = "password" placeholder = "Password" /><br />

			<input type = "submit" />
		</form>

	</body>



</html>