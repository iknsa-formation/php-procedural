<?php
    /* Utilisation de get */
    /*if (isset($_GET['firstname']) &&  isset($_GET['lastname']) &&  isset($_GET['adresse']) &&  isset($_GET['fonction'])){
        $prenom = $_GET['firstname'];
        $nom = $_GET['lastname'];
        $adresse = $_GET['adresse'];
        $fonction = $_GET['fonction'];
        echo "Prénom: " .$prenom . "<br>";
        echo "Nom: " .$nom;
        echo "Adresse: " .$adresse;
        echo "Fonction: " .$fonction;
    }*/
    /* Fin utilisation de get */
     /* Utilisation de post */
    if (isset($_POST['firstname']) &&  isset($_POST['lastname']) &&  isset($_POST['adresse']) &&  isset($_POST['fonction'])){
        $prenom = $_POST['firstname'];
        $nom = $_POST['lastname'];
        $adresse = $_POST['adresse'];
        $fonction = $_POST['fonction'];
        echo "Prénom: " .$prenom . "<br>";
        echo "Nom: " .$nom;
        echo "Adresse: " .$adresse;
        echo "Fonction: " .$fonction;
    }
    /* Fin utilisation de POST */
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
        <h1>Get in touch</h1>
        <form method="post" action="index.php">
            <div class="form-group zoneRadio">
                <label>Title</label>
                <input type="radio" name="title" tabindex="1"><span>Mr.</span>
                <input type="radio" name="title" tabindex="2"><span>Mrs.</span>
                <input type="radio" name="title" tabindex="3"><span>Miss.</span>
            </div>

            <div class="form-group">
                <label for="firstname">FirstName*:</label>
                <input type="text" name="firstname" id="firstname" tabindex="4">
            </div>

            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname">
            </div>

            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" name="adresse" id="adresse">
            </div>
                 <div class="form-group">
                    <label for="fonction">Fonction:</label>
                    <input type="text" name="fonction" id="fonction">
                </div>
            
            <div class="required-fields">
                *: Required fields
            </div>
            <div class="form-group">
                <input type="submit" value="SEND">
            </div>
        </form>
    </main>

 <footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>