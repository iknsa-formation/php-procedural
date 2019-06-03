<?php
$servername = "localhost";
$username = "formation";
$password = "PassPhp";
$dbname = "formation_php";
// Create connection
define('SERVENAME', 'localhost');
define('DBNAME', 'formation_php');
define('DBUSER', 'formation');
define('DBPASS', 'PassPhp');
//$connection = new mysqli($servername, $username, $password, $dbname);
/*$connection = new mysqli(SERVENAME, DBUSER, DBPASS, DBNAME);
     /*if (!$connection) {
        die('<strong> Impossible de se connecter, veuillez revoir les accés</strong><br>');
    } else {
        echo '<strong> Super ! j\'ai réussi à me connecter à ma base de donnée </strong><br>';
    }*/
    $connection = mysqli_connect(SERVENAME, DBUSER, DBPASS, DBNAME
    );
	if (!$connection) {
	    die('<strong> Impossible de se connecter, veuillez revoir les accés</strong><br>'. mysqli_connect_error());
	} else {
		echo '<strong> Super ! j\'ai réussi à me connecter à ma base de donnée </strong><br>';
	}
?>