<?php
    // On démarre la session AVANT d'écrire du code HTML
    session_cache_limiter();
    session_start();

    // On s'amuse à créer quelques variables de session dans $_SESSION
    $_SESSION['prenom'] = 'Julien';
    $_SESSION['nom'] = 'Boubou';
    $_SESSION['age'] = 27;


    $monfichier = fopen('number.php', 'r+');
    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
    $pages_vues += 1; // On augmente de 1 ce nombre de pages vues
    fseek($monfichier, 0); // On remet le curseur au début du fichier
    fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
    fclose($monfichier);
    echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
    // setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true);
    //
?>


<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Login</title>
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <!-- <link rel="stylesheet" href="style.css"> -->
            <!--    <script type="text/javascript" src="script.js"></script> -->
        </head>
        <body>
            <form action="vue.php" method='post'>
            <table align="center" border="0">
                <tr>
                    <td>Login :</td>
                    <td><input type="text" name="login" maxlength="250"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" maxlength="10"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="test"  value="log in"></td>
                </tr>
            </table>
            </form>
            <p>Re-bonjour !</p>
            <p>
                Je me souviens de toi ! Tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
                Et ton âge hummm... Tu as <?php echo $_SESSION['age']; ?> ans, c'est ça ? :-D
            </p>
        </body>
    </html>