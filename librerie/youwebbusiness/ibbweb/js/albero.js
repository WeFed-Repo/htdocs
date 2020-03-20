var elementi = new Array(); // Array contenente i dati....



/*
	<FUNZIONE label="selDeselFigli">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>
		In una struttura ad albero seleziona o deseleziona tutti i figli
		L'array elementi va valorizzato nell' xsl
		(vedi poteri firma)
	</COMMENTO>
	<PARAMETRO label="currentCheckBox" DESCRIZIONE="il checkbox corrente cliccato"/>
	<PARAMETRO label="id" DESCRIZIONE="nome del checkbox"/>	
	</FUNZIONE>
*/
function selDeselFigli(currentCheckBox, id){
	var isChecked = currentCheckBox.checked;
	for(i=0; i<elementi.length; i++)
	{
		if (elementi[i].padre == id)
		{
			str = 'document.albero.' + elementi[i].id + '.checked=' + isChecked;
			eval(str);
		}
	}
}


/*
	<FUNZIONE label="selDeselPadre">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>
		In una struttura ad albero seleziona o deseleziona il padre
		L'array elementi va valorizzato nell' xsl
		(vedi poteri firma)
	</COMMENTO>
	<PARAMETRO label="idPadre" DESCRIZIONE="nome del padre"/>
	</FUNZIONE>
*/
function selDeselPadre(idPadre){
	var numCheckSelected = 0;
	for(i=0; i<elementi.length; i++)
	{
		str = 'document.albero.' + elementi[i].id + '.checked;';
		if (elementi[i].padre == idPadre && eval(str)){
			numCheckSelected += 1;
			break;
		}
	}
	if (numCheckSelected == 0)
		str = 'document.albero.' + idPadre + '.checked=false;';
	else
		str = 'document.albero.' + idPadre + '.checked=true;';
	eval(str);
}


/*
	<FUNZIONE label="selDeselFigliNipoti">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>
		In una struttura ad albero a 3 livelli seleziona o deseleziona i filgi e i nipoti
		L'array elementi va valorizzato nell' xsl
		(vedi poteri firma)
	</COMMENTO>
	<PARAMETRO label="currentCheckBox" DESCRIZIONE="checkbox corrente cliccato"/>
	<PARAMETRO label="id" DESCRIZIONE="nome del checkbox corrente cliccato"/>
	</FUNZIONE>
*/
function selDeselFigliNipoti(currentCheckBox, id){
	var isChecked = currentCheckBox.checked;
	for(i=0; i<elementi.length; i++)
	{
		if (elementi[i].padre == id || elementi[i].nonno == id)
		{
			str = 'document.albero.' + elementi[i].id + '.checked=' + isChecked;
			eval(str);
		}
	}
}


/*
	<FUNZIONE label="selDeselPadreFiglio">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>
		In una struttura ad albero  a 3 livelli seleziona o deseleziona il padre e i figli
		L'array elementi va valorizzato nell' xsl
		(vedi poteri firma)
	</COMMENTO>
	<PARAMETRO label="currentCheckBox" DESCRIZIONE="checkbox corrente cliccato"/>
	<PARAMETRO label="id" DESCRIZIONE="nome del checkbox corrente cliccato"/>
	<PARAMETRO label="idPadre" DESCRIZIONE="nome del padre"/>
	</FUNZIONE>
*/
function selDeselPadreFiglio(currentCheckBox, id, idPadre){
	selDeselFigli(currentCheckBox,id);
	selDeselPadre(idPadre)
}


/*
	<FUNZIONE label="selDeselPadreNonno">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>
		In una struttura ad albero a 3 livelli seleziona o deseleziona il padre e il nonno
		L'array elementi va valorizzato nell' xsl
		(vedi poteri firma)
	</COMMENTO>
	<PARAMETRO label="idPadre" DESCRIZIONE="nome del padre"/>
	<PARAMETRO label="idNonno" DESCRIZIONE="nome del nonno"/>
	</FUNZIONE>
*/
function selDeselPadreNonno(idPadre, idNonno){
	
	var figliSelezionati = 0;
	var nipotiSelezionati = 0;
	for(i=0; i<elementi.length; i++)
	{
		str = 'document.albero.' + elementi[i].id + '.checked;';
		if (elementi[i].padre == idPadre && eval(str)){
			figliSelezionati += 1;
			nipotiSelezionati += 1;
			break;
		}
		if (elementi[i].nonno == idNonno && eval(str)){
			nipotiSelezionati += 1;
		}
	}
	
	if (figliSelezionati == 0)
		str = 'document.albero.' + idPadre + '.checked=false;';
	else
		str = 'document.albero.' + idPadre + '.checked=true;';
	eval(str);
	
	if (nipotiSelezionati == 0)
		str = 'document.albero.' + idNonno + '.checked=false;';
	else
		str = 'document.albero.' + idNonno + '.checked=true;';
	eval(str);
}
