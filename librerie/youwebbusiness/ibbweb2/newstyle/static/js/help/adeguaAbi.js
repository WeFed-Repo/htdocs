/*
	libreria di funzioni usate per cambiare dinamicamente
	la directory di img e css in base al codice abi.
	Tutto si basa sul fatto che la pagina index.htm ( frameset complessivo )
	venga chiamata con la qstring "abi"
	
*/
//--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

/*
	<FUNZIONE label="getCurrentABI">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione.............</COMMENTO>	
	</FUNZIONE>
*/

function getCurrentABI(){


	var abiTMP = new String();
	var abiChiamante  = new String();
	if(parent.frames.length != 0){// chiamata da link aiuto/guide nel frame top
		if (parent.parent){
			abiChiamante = top.opener.parent.topframe.document.dummy.abi.value; // campo hidden definito nel top-html.xsl
		}
		else{
			abiChiamante = parent.opener.document.dummy.abi.value;
		}
	}else{// chiamata dalle altre pagine
		abiChiamante = opener.parent.topframe.document.dummy.abi.value;
	}

	return abiChiamante;

}

function reindirizzaIMG(){

	var abi = getCurrentABI();
	
	var abiGrafica = '05188';

	//tutte le immagine della guida e degli help sono in comune tra tutti gli abi e si usa la cartella 05188
	//tranne che per gli abi del LC che utilizzano la sottocartella 99001	
	if ((abi == '99001') || (abi == '99003')||(abi == '99004'))
	{
		abiGrafica = '99001'
	}
	
	adeguaDir(document.images,abiGrafica);

}

/*
	<FUNZIONE label="adeguaDir">
	<AUTORE></AUTORE>
	<COMMENTO>
		Questa funzione prende un array di oggetti riferiti da URL
		come immagini e al relativo URL vi aggiunge una directory
	    passata come parametro.
	</COMMENTO>
	<PARAMETRO label="arrayOggetti" DESCRIZIONE=""/>
	<PARAMETRO label="dirToAdd" DESCRIZIONE=""/>
	</FUNZIONE>
*/

function adeguaDir(arrayOggetti,dirToAdd){

	// cambio dir alle immagini
	
	var dirIMG = "images/" + dirToAdd + "/"
	var dirCSS = "styles/" + dirToAdd + "/";
	for( var i=0;i < arrayOggetti.length; i++ ){
		var urlImgTMP = arrayOggetti[i].src;
		var immagine = urlImgTMP.split("images");
		arrayOggetti[i].src = immagine[0] + dirIMG + immagine[1];
	}
	// cambio foglio di stile
	var urlFoglioDiStile = document.getElementById("cssRef").href; 
	var foglioStile = urlFoglioDiStile.split("styles/");
	document.getElementById("cssRef").href = foglioStile[0] + dirCSS + foglioStile[1];
	
	
//	// cambio dir alle immagini di sfondo nelle tabelle
	var allTABLE = document.getElementsByTagName("table"); 
	for (var i=0; i<allTABLE.length; i++){;
		var urlImgBCKGR = allTABLE[i].getAttribute("background");
		if (urlImgBCKGR){
			var immagine = urlImgBCKGR.split("images");
			allTABLE[i].setAttribute("background",immagine[0] + dirIMG + immagine[1]);
		}
	}
	// cambio dir alle immagini di sfondo nelle celle
	var allTD = document.getElementsByTagName("td");
	for (var i=0; i<allTD.length; i++){
		var tdBG = allTD[i].getAttribute("background")
		if ( tdBG){
			//var urlImgBCKGR = allTD[i].background;
			var immagine = tdBG.split("images");
			allTD[i].setAttribute("background", immagine[0] + dirIMG + immagine[1]);	
		}
	}
	
}

/*
	<FUNZIONE label="chiudiPopUp">
	<AUTORE></AUTORE>
	<COMMENTO>Funzione per la chiusura delle pagine di help da frameset</COMMENTO>	
	</FUNZIONE>
*/

function chiudiPopUp(){
	if(parent.leftF)
	{
		top.close()
	}
	else
	{
		window.close();
	}
}


/*
	<FUNZIONE label="chiudiPopUp">
	<AUTORE></AUTORE>
	<COMMENTO>Funzione per la chiusura delle pagine di help da frameset</COMMENTO>	
	</FUNZIONE>
*/

function closePopUp(){
	if(parent.leftF)
	{
		top.close()
	}
	else
	{
		window.close();
	}
}