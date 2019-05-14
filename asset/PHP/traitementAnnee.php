<?php

$anneeRecu = (isset($_GET["variable1"])) ? $_GET["variable1"] : NULL;


//$pattern  = "/[0-9]+/";
$pattern = '/^[0-9]{1,999}(\[0-9]+)?$/';
/****************************************************************************/
if(preg_match($pattern, $anneeRecu))
    {
    	if (($anneeRecu%4==0) AND ($anneeRecu%100!=0) OR ($anneeRecu%400==0)){
    		echo "L'année saisie est bissextile";
			}

	else{
		echo "L'année saisie n'est pas bissextile";
		}
    }

else{
	echo "Format non valide. Entrez une année.";
}

?>