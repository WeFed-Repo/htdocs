
/*
	<FUNZIONE label="elencoTab">
	<AUTORE>Lorenzo - Mario</AUTORE>
	<COMMENTO>
		Oggetto contenente l elemento Tab
		del Tab html
	</COMMENTO>
	<PARAMETRO label="href" DESCRIZIONE="la funzione javascript da chiamare"/>
	<PARAMETRO label="multilingua" DESCRIZIONE="descrizione che compare nel tab"/>
	<PARAMETRO label="livello" DESCRIZIONE="livello del tab (1, 2 , n)"/>
	</FUNZIONE>
*/
function elencoTab(href,multilingua,livello)
{
	this.href = href;
	this.multilingua=multilingua;
	this.livello=livello;							
}

/*
	<FUNZIONE label="writeHTMLTab">
	<AUTORE>Lorenzo - Mario</AUTORE>
	<COMMENTO>
		Scrive l' HTML dei tab nei TR dell' html (con id=riga1, riga2, rigan)
	</COMMENTO>
	<PARAMETRO label="elementoDaSelezionare" DESCRIZIONE="l elemento tab cliccato"/>
	<PARAMETRO label="abi" DESCRIZIONE="l' abi (utilizzato per variare la grafica)"/>
	<PARAMETRO label="livello" DESCRIZIONE="livello del tab (1, 2 , n)"/>
	</FUNZIONE>
*/
function writeHTMLTab(elementoDaSelezionare,abi,livello)
{		
	var result="";

	var classetabAttiva="tabAttivaContiNuovo";																
	var classetabDisattiva="tabCliccabileContiNuovo";																
	var classetab ="";	

	var classelinkAttiva="link_tabAttivaConti";																
	var classelinkDisattiva="link_tabCliccabileConti";																
	var classelink ="";		
	
	var immagineAngoloAttivo= "" //"img/"+abi+"/angolo_tab_attiva.gif";																
	var immagineAngoloDisattivo= "" //"img/"+abi+"/angolo_tab_cliccabile_conti.gif";																
	var immagineAngoloAttivoUltimo= "" //"img/"+abi+"/angolo_tab_attiva-ultimo.gif";
	var immagineAngoloDisattivoUltimo= "" //"img/"+abi+"/angolo_tab_cliccabile_ultimo.gif";	
	var immagineAngolo ="";
	
	var numeroTabLivello=0;
	var larghezzaTabLivello=0;
	
	result+= '<table border="0" cellpadding="0" cellspacing="0" width="100%"><tr>';
	
	for (index=0;index <tabArray.length;index++)
	{
		if(tabArray[index]!=undefined)
		{
			if (tabArray[index].livello == livello)
			{
				numeroTabLivello++;
			}
		}
	}
	
	larghezzaTabLivello=(100/numeroTabLivello)-2;
	var elementoTabCorrente = 1;
	for (index=0;index <tabArray.length;index++)
	{
		if(tabArray[index]!=undefined)
		{
			if (tabArray[index].livello == livello)
			{
				if (index==elementoDaSelezionare)
				{
					classelink = classelinkAttiva;
					classetab = classetabAttiva;
					immagineAngolo = immagineAngoloAttivo;
					if (elementoTabCorrente==numeroTabLivello)
						immagineAngolo=immagineAngoloAttivoUltimo;
				}
				else
				{
					classelink = classelinkDisattiva;
					classetab = classetabDisattiva
					immagineAngolo = immagineAngoloDisattivo;
					if (elementoTabCorrente==numeroTabLivello)
						immagineAngolo=immagineAngoloDisattivoUltimo;
				}
				elementoTabCorrente++;
				result+= '<td width="' + larghezzaTabLivello + '%" style="cursor:hand" onclick="'  + tabArray[index].href + '" height="19" class="' + classetab + '">'+ tabArray[index].multilingua;
				if(index!=tabArray.length-1){
				result+= '</td><td width="14" class="tabSpacer"></td>';}		
			}
		}
	}
	
	result+= '</tr></table>';
	
	return result;	
}

/*
	<FUNZIONE label="caricagrafica">
	<AUTORE>Lorenzo - Mario</AUTORE>
	<COMMENTO>
		Carica la grafica dei TAB chiamando la funzione writeHTMLTab
	</COMMENTO>
	<PARAMETRO label="elementoDaSelezionare" DESCRIZIONE="l elemento tab cliccato"/>
	<PARAMETRO label="abi" DESCRIZIONE="l' abi (utilizzato per variare la grafica)"/>
	</FUNZIONE>
*/
function caricagrafica(elementoDaSelezionare,abi)
{
	if (elementoDaSelezionare=='')
		elementoDaSelezionare = elementoSelezionatoDefault;
	
	var element1;
	if (tabArray[elementoDaSelezionare].livello == 1)
	{
		element1 =document.getElementById("riga2");
		element1.className = "link_tabCliccabileConti";
		element2 =document.getElementById("riga1");
		element2.className ="";						
	}
	else
	{
		element1 =document.getElementById("riga1");
		element1.className ="";
		element2 =document.getElementById("riga2");
		element2.className = "link_tabCliccabileConti";
	}
	element1.innerHTML	= writeHTMLTab(elementoDaSelezionare,abi,1);
	element2.innerHTML	= writeHTMLTab(elementoDaSelezionare,abi,2);

}