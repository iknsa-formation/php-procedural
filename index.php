<?php
    require_once 'db.php';

    /*CREATE TABLE IF NOT EXISTS `users` (
	  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	  `firstname` VARCHAR(100) UNIQUE NOT NULL DEFAULT '',
	  `lastname` VARCHAR(100) UNIQUE NOT NULL DEFAULT '',
	  `adresse` VARCHAR(100) UNIQUE NOT NULL DEFAULT '',
	  `fonction` VARCHAR(100) UNIQUE NOT NULL DEFAULT '',
	  PRIMARY KEY (`id`)
	)ENGINE = InnoDB;*/

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Course - IKNSA</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>
  <body>
    <!-- Page Content -->
    <header>
        <div class="logo"><img src="img/logo.png" alt="Logo"></div>
        <nav>
            <ul>
                <li><a href="index.html">Home Page</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>

        <div class="breadcrumb">
            <span>You are here</span>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="page.html">About Us</a></li>
            </ul>
        </div>
    </header>
     <main>
       
        <?php
           // if (isset($_POST['firstname']) &&  isset($_POST['lastname']) &&  isset($_POST['adresse']) &&  isset($_POST['fonction'])){
           /* if (count($_POST) >0){
                $prenom = $_POST['firstname'];
                $nom = $_POST['lastname'];
                $adresse = $_POST['adresse'];
                $fonction = $_POST['fonction'];
                echo "Prénom: " .$prenom . "<br>";
                echo "Nom: " .$nom . "<br>";
                echo "Adresse: " .$adresse. "<br>";
                echo "Fonction: " .$fonction. "<br>";
            }*/
            /* INSERT INTO BDD */
             if (count($_POST) >0){
                $prenom = $_POST['firstname'];
                $nom = $_POST['lastname'];
                $adresse = $_POST['adresse'];
                $fonction = $_POST['fonction'];
                echo "Prénom: " .$prenom . "<br>";
                echo "Nom: " .$nom . "<br>";
                echo "Adresse: " .$adresse. "<br>";
                echo "Fonction: " .$fonction. "<br>";
                /*
                * Instertion dans la base de donnée
                */
                
                $sql = "INSERT INTO users(firstname,lastname,adresse,fonction) VALUES('".$prenom."','".$nom."','".$adresse."','".$fonction."')";
                
                
                $insert = mysqli_query ($connection,$sql);
                if ($insert) {
                    echo "<div class='alert alert-success' role='alert'>
                          L'utilisateur $prenom $nom a été ajouté en base!
                        </div>" ;
                } else {
                    echo "<div class='alert alert-danger' role='alert'>
                          Oups! Insertion échoué
                        </div>";
                }
                mysqli_close($connection);
            }
            /* FIN INSERT */
        ?>
    </main>
    <footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>