<?php

$variable1 = (isset($_GET["variable1"])) ? $_GET["variable1"] : NULL;
$variable2 = (isset($_GET["variable2"])) ? $_GET["variable2"] : NULL;
$anneeRecu = $variable1;
$nombreRecu = $variable2;

//echo "Variable envoyé avec succes"; //affiche une str.
//echo "$anneeRecu"; //affiche la valeur de la variable.
//echo gettype($nbr2); //affiche le typre de la variable.
//$nbr2 = intval($anneeRecu);//pour convertir la str en int.

/****************************************************************************/
/*if (($anneeRecu%4==0) AND ($anneeRecu%100!=0) OR ($anneeRecu%400==0)){
		echo "L'année saisie est bissextille";
	}

	else{
		echo "L'année saisie n'est pas bissextille";
	}
*/
/*****************************************************************************/
for ($i = 1; $i <= 10; $i++) {
	$resultat = ($nombreRecu*$i);
    echo ("$nombreRecu x $i = $resultat<br>");
}


?>