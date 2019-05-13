function getXMLHttpRequest() {
	var xhr = null;
	
	if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e) {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
		} else {
			xhr = new XMLHttpRequest(); 
		}
	} else {
		alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
		return null;
	}
	
	return xhr;
}
/*************************************************************/
function checkTable(){
	var chiffreSaisie = document.querySelector("#table").value;
	var chgtTxtTable = document.querySelector("#txtTable");
	var sVar2 = encodeURIComponent(chiffreSaisie);

	var xhr = getXMLHttpRequest(); 
		xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
			chgtTxtTable.innerHTML= ""+xhr.responseText;
			}
			
		};

		xhr.open("GET", "asset/PHP/traitementTable.php?variable2=" + sVar2 , true);
		xhr.send(null);
}

/*******************************************************************/
function checkAnnee(){
	var anneeSaisie = document.querySelector("#bissextile").value;
	var chgtTxtAnnee = document.querySelector("#txtAnnee");
	var sVar1 = encodeURIComponent(anneeSaisie);

	var xhr = getXMLHttpRequest(); 
		xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
			chgtTxtAnnee.innerHTML= ""+xhr.responseText;
			}
		};

		xhr.open("GET", "asset/PHP/traitementAnnee.php?variable1=" + sVar1 , true);
		xhr.send(null);
}
/************************************************************/