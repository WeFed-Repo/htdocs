function help(str) {
   window.open(str,'help','toolbar=no,location=no,status=no,scrollbars=yes,resizable=yes,width=700,height=500');
}

function helpTabella(str) {
     window.open(str,'help','toolbar=no,location=no,status=no,scrollbars=no,resizable=yes,width=450,height=400,left=285,top=135');
}

function helpTabellaProvince(str) {
    window.open(str,'help','toolbar=no,location=no,status=no,scrollbars=no,resizable=yes,width=450,height=400,left=285,top=135');
}

function helpRubrica(str) {
     window.open(str,'help','toolbar=no,location=no,status=no,scrollbars=auto,resizable=yes,width=900,height=500,left=60,top=85');
}

  <!-- inizio sezione relativa alla valorizzazione automatica dei campi codici tributi -->

	var suffisso = ".image";
	var lastSelected = "";
	var lastDeselected = "";

	function getImageName(oggetto) {
		return oggetto.name + suffisso;
	}

	function selezionato(oggetto) {

		selectedObject = document.getElementsByName(getImageName(lastSelected))[0];
		deselectedObject = document.getElementsByName(getImageName(lastDeselected))[0];
		currentObject = document.getElementsByName(getImageName(oggetto))[0];

		if (deselectedObject) {
			if  (lastDeselected != oggetto) {
				deselectedObject.style.display = "none";
			}
		}


		if (selectedObject) {
			if (lastSelected != oggetto) {
				selectedObject.style.display = "none";
			}
		}


		if (currentObject) {
			currentObject.style.display = "";
		}


		lastSelected = oggetto;
		lastDeselected = "";
	}

	function deselezionato(oggetto) {
		lastDeselected = oggetto;
		lastSelected = "";
	}

	function deselezionaTutti() {

		if (!lastSelected && lastDeselected) {
			deselectedObject = document.getElementsByName(getImageName(lastDeselected))[0];
			if (deselectedObject) {
				document.getElementsByName(getImageName(lastDeselected))[0].style.display = "none";
			}
		}
	}

	function ricercaTributo(oggetto, tipoRicerca, showHelpAction) {

		if (lastDeselected) {
			lastDeselected.focus();
		}

		lastSelected = oggetto;
		lastDeselected = "";

		returnField = oggetto.name.substring(0, oggetto.name.lastIndexOf(suffisso));
		fieldValue = document.getElementsByName(returnField)[0].value;
		
		if (fieldValue.indexOf('\'') != -1) {
	  		fieldValue='';
	  	}
	  	if (fieldValue.indexOf('\\') != -1) {
	  		fieldValue='';
	  	}
		if (fieldValue.indexOf('%') != -1) {
	  		fieldValue='';
	  	}
	  	
		help(showHelpAction + '?tipoRicerca=' + tipoRicerca + '&returnField=' + returnField + '&fieldValue=' + fieldValue);
	}
	
	
	

	function ricercaRegione(oggetto, showHelpUrl) {

		if (lastDeselected) {
			lastDeselected.focus();
		}

		lastSelected = oggetto;
		lastDeselected = "";

		returnField = oggetto.name.substring(0, oggetto.name.lastIndexOf(suffisso));
		helpTabella(showHelpUrl + '?returnField=' + returnField);
	}

  <!-- fine sezione relativa alla valorizzazione automatica dei campi codici tributi -->
  <!-- codice modifica $3401$ -->
<!-- segnalazione $8209$ -->
