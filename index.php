<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Formation Course - IKNSA</title>
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

     <div class="jumbotron">

        <?php
        	echo "Les apports de PHP 7 <br>";
        	echo 1 <=> 1; // 0
        	//echo "a" <=> "a"; // 0
        	echo "<br> Les operations 1 <=> 2 <br>";
			echo 1 <=> 2; // -1
			//echo "a" <=> "b"; // -1
        	echo "<br> Les operations 2 <=> 1 <br>";
			echo 2 <=> 1; // 1
			//echo "b" <=> "a"; // 1

			echo "Les tableaux <br>";
			echo [] <=> []; // 0
			echo [1, 2, 3] <=> [1, 2, 3]; // 0
			echo [1, 2, 3] <=> []; // 1
			echo [1, 2, 3] <=> [1, 2, 1]; // 1
			echo [1, 2, 3] <=> [1, 2, 4]; // -1

	    ?>
     </div>

 	<footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>