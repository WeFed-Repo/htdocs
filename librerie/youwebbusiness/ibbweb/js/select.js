/*
	<FUNZIONE label="makeChooseOption">
	<AUTORE></AUTORE>
	<COMMENTO> Constructos of options, build object used to store options selected</COMMENTO>
	<PARAMETRO label="OPTId" DESCRIZIONE=""/>
	<PARAMETRO label="OPTValue" DESCRIZIONE=""/>	
	</FUNZIONE>
*/

function makeChooseOption( OPTId, OPTValue )
{
	this.OPTId = OPTId;
	this.OPTValue = OPTValue;
}

/*
	<FUNZIONE label="removeOption">
	<AUTORE></AUTORE>
	<COMMENTO>This function remove an option from a give select. Will be removed the option with the specified value.</COMMENTO>
	<PARAMETRO label="targetSelect" DESCRIZIONE=""/>
	<PARAMETRO label="optionValue" DESCRIZIONE=""/>	
	</FUNZIONE>
*/

function removeOption( targetSelect, optionValue )
{
	for ( var i = 0; i < targetSelect.length; ++i)
	{
		if( targetSelect[i].value == optionValue )
		{
			targetSelect[i] = null;
			targetSelect.selectedIndex=0;
		}
	}

}

/*
	<FUNZIONE label="addOption">
	<AUTORE></AUTORE>
	<COMMENTO>This function add an option OBJ to a given select.</COMMENTO>
	<PARAMETRO label="targetSelect" DESCRIZIONE=""/>
	<PARAMETRO label="sourceSelect" DESCRIZIONE=""/>
	<PARAMETRO label="idSource" DESCRIZIONE=""/>	
	</FUNZIONE>
*/

function addOption( targetSelect, sourceSelect, idSource )
{
	targetSelect[targetSelect.length] = new Option(sourceSelect[idSource].text,sourceSelect[idSource].value,true,true);
}

/*
	<FUNZIONE label="moveFromSelectToSelect">
	<AUTORE></AUTORE>
	<COMMENTO>This function move an option from one select to another one and disable buttons while transfer options.</COMMENTO>
	<PARAMETRO label="fromSelect" DESCRIZIONE=""/>
	<PARAMETRO label="toSelect" DESCRIZIONE=""/>
	<PARAMETRO label="BTN1" DESCRIZIONE=""/>
	<PARAMETRO label="BTN2" DESCRIZIONE=""/>	
	</FUNZIONE>
*/

function moveFromSelectToSelect( fromSelect, toSelect, BTN1, BTN2 )
{
	var lengthFrom = fromSelect.length;
	var lengthTo = toSelect.length;
	var allOptionSelected = new Array();

	// disabling buttons to void spurious hit due to delay
	BTN1.disabled = true;
	BTN2.disabled = true;

	for ( var i=0; i<lengthFrom; ++i)
	{ // building an array of option selected
		if ( fromSelect[i].selected )
			allOptionSelected[allOptionSelected.length] = new makeChooseOption( i, fromSelect[i].value ) ;
	}
	if (lengthFrom > 0)
	{ // test to see if options to be moved are present
		for (var i = 0; i < allOptionSelected.length; ++i)
		{
			// adding the option to the toSelect
			addOption( toSelect, fromSelect, allOptionSelected[i].OPTId );
		}
		for (var i = 0; i < allOptionSelected.length; ++i)
		{
			//removing the option from the fromSelect
			removeOption( fromSelect, allOptionSelected[i].OPTValue ); // remove the option with a specified value
		}
	}
	fromSelect.selectedIndex = -1;
	toSelect.selectedIndex = -1;
	allOptionSelected.length = 0;
	// enabling buttons
	BTN1.disabled = false;
	BTN2.disabled = false;
}

/*
	<FUNZIONE label="SendResult">
	<AUTORE></AUTORE>
	<COMMENTO>Esegue il submit</COMMENTO>
	<PARAMETRO label="form" DESCRIZIONE=""/>
	<PARAMETRO label="action" DESCRIZIONE=""/>	
	</FUNZIONE>
*/

function SendResult(form, action)
{
	form.elementiSelezionati.value = '';
	for (i=0;i<form.destra.options.length;i++)
	{
		if(i==0)
			form.elementiSelezionati.value = form.destra.options[i].value;
		else
			form.elementiSelezionati.value = form.elementiSelezionati.value + ',' + form.destra.options[i].value;
	}
	form.action=action;
	return true;
}

