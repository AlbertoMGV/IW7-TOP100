<?php 

session_start(); 

// Comprobamos la variable get

if (@$_GET["idioma"]) { 

			switch ($_GET["idioma"]) {

				// español

				case 'es':

					$_SESSION["idioma"]=$_GET["idioma"]; 

					break;

				// ingles

				case 'en':

					$_SESSION["idioma"]=$_GET["idioma"]; 

					break;

				// si no existe lo ponemos en español

				default:

					$_SESSION["idioma"]="es"; 

					break;

			}

} elseif (!$_SESSION["idioma"]) { 

	// Si el get no existe definimos el español

$_SESSION["idioma"]="es"; 

} 

// incluimos el idioma con las definiciones 

include("".$_SESSION["idioma"].".html.php"); 

?> 