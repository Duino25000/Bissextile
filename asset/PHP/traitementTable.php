<?php

$variable2 = (isset($_GET["variable2"])) ? $_GET["variable2"] : NULL;
$nombreRecu = $variable2;

$pattern  = "/[0-9]+/";

//echo "Variable envoyé avec succes"; //affiche une str.
//echo "$anneeRecu"; //affiche la valeur de la variable.
//echo gettype($nbr2); //affiche le typre de la variable.
//$nbr2 = intval($anneeRecu);//pour convertir la str en int.

/****************************************************************************

*/

if(preg_match($pattern, $nombreRecu))
    {
        //echo "valide";
        for ($i = 1; $i <= 10; $i++) {
        	$resultat = ($nombreRecu*$i);
    		echo ("$nombreRecu x $i = $resultat<br>");
		}
    }

else{
	echo "Format non valide\n Entrez seulement des chiffres";
}
?>