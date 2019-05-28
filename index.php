<?php
	echo 'Fichier: ' . __FILE__ . '<br>';
	echo 'Ligne: ' . __LINE__ . '<br>';

	class test {
		function foo() {
			echo 'Fonction: ' .    FUNCTION 	. "\n";
			echo 'Classe: ' .    CLASS 	. "\n";
		}
	}
	test::foo();
	// ou alors
	$test = new test();
	$test->foo();


/* LES CONSTANTES */

	class MaClasse {
		const CONSTANTE = "Texte ici";
		function afficher()
		{
		echo self::CONSTANTE;
		}
	}

	$instance = new MaClasse;
	$instance->afficher();

	define("CONSTANTE", "Texte ici --> define");  
echo CONSTANTE; // affiche  "Texte ici"
?>