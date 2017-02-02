<?php   
	session_start(); //to ensure you are using same session
	session_destroy(); //destroy the session
	// header("location:index.php"); //to redirect back to "index.php" after logging out
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>page de logout</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		</head>
		<body>
			<H1>Vous avez bien été déconnecté</H1>
			<a href="index.php">RETOUR MENU</a>
		</body>
	</html>