<?php

$variable1 = (isset($_GET["variable1"])) ? $_GET["variable1"] : NULL;
$anneeRecu = $variable1;
$pattern  = "/[0-9]+/";

/****************************************************************************/

/*****************************************************************************/

if(preg_match($pattern, $anneeRecu))
    {

    	if (($anneeRecu%4==0) AND ($anneeRecu%100!=0) OR ($anneeRecu%400==0)){
    		echo "L'année saisie est bissextille";
			}

	else{
		echo "L'année saisie n'est pas bissextille";
		}
    }
    
else{
	echo "Format non valide\n Entrez seulement des chiffres";
}

?>