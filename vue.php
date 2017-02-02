<?php  
session_cache_limiter();
session_start();

		// elseif (empty($_POST['pass']) && empty($_POST['login'])) {
		// echo "les champs ne sont pas renseigné";
		// header('Location:erreur.php')
		// }
	if (empty($_POST['login']) || empty($_POST['pass'])){
		// a tester : $_SESSION['login']  -  $_SESSION['pass']
        echo "ERREUR : tous les champs n'ont pas ete renseignés.";
        header('Location:erreur.php');
    }

	if( isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['pass']) && !empty($_POST['pass'])) { 
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pass'] = $_POST['pass'];
		}

?> 

<!DOCTYPE html>
	<html>
		<head>
			<title>MA PAGE CONNECTE</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			
		</head>
		<body>
			<h1><?php echo $_SESSION['prenom']." ".$_SESSION['nom']; ?></h1>
			<ul>
				<li><strong>Votre pseudo est : <?php echo $_SESSION['login'];?></strong></li>
				<li><strong>Votre pwd est : <?php echo $_SESSION['pass'];?></strong></li>
			</ul>
			<div class="alert alert-success">
 			<strong>Success!</strong> Informations utilisateur.
			</div>
			<ul>
				<li><a href="logout.php">Déconnection</a></li>
				<li><a href="https://fr-fr.facebook.com/">lien facebook</a></li>
			</ul>
		</body>
	</html>