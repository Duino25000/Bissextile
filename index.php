<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="asset/CSS/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	

	<h1>Table de multiplication et année bissextile.</h1>

	<div id="blocPrincipal">
		<section id="tableMultiplication">
			<h2>Les tables de miltiplication</h2>
			<p>Entrez un chiffre et affichez sa table de multiplication jusqu'a 10.</p>
			<label for="table" id="label_table"></label>
			<input type="text" name="table" id="table" />
			<div class="boutonVerif" onclick="checkTable()"><i class="fas fa-check"></i></div>
			<div class="zoneAffichage"><p id="txtTable"></p></div>
		</section>

		<section id="anneeBissextile">
			<h2>Année bissextile</h2>
			<p>Entrez une année et vérifiez si l'année est bissextile ou non.</p>
			<label for="bissextile" id="label_bissextile"></label>
			<input type="text" name="bissextile" id="bissextile" />
			<div class="boutonVerif" onclick="checkAnnee()"><i class="fas fa-check"></i></div>
			<div class="zoneAffichage"><p id="txtAnnee"></p></div>
		</section>
	</div>


	<script src="asset/JS/script.js"></script>
</body>
</html>