function helpPhone(str) {
	 openHelpModalPopup(str,'AIUTO PER LA COMPILAZIONE',400, 300);
	$('.ui-dialog-titlebar-close').on('tap touchmove touchstart click focus', function() {
		closeModalPopup();
	});
}

function openHelpModalPopupPhone(source, title, width, height) {
	 openHelpModalPopup(source,title,width, height);
	$('.ui-dialog-titlebar-close').on('tap touchmove touchstart click focus', function() {
		closeModalPopup();
	});
}

function helpTablet(str) {
	 openHelpModalPopup(str,'AIUTO PER LA COMPILAZIONE',650, 400);
	$('.ui-dialog-titlebar-close').on('tap touchmove touchstart click focus', function() {
		closeModalPopup();
	});
}
function helpTributoTablet(str) {
	 openHelpModalPopup(str,'AIUTO PER LA COMPILAZIONE',800, 350);
	$('.ui-dialog-titlebar-close').on('tap touchmove touchstart click focus', function() {
		closeModalPopup();
	});
}
function helpIMU(str) {
	 openHelpModalPopup(str,'AIUTO PER LA COMPILAZIONE', 700, 550);
}
function helpIMUTablet(str) {
	openHelpModalPopup(str,'AIUTO PER LA COMPILAZIONE', 700, 550);
	$('.ui-dialog-titlebar-close').on('tap touchmove touchstart click focus', function() {
		closeModalPopup();
	});
}

function helpSemplificatoPhone(str) {
	helpPhone(str);
}

function helpSemplificato(str) {
	openHelpModalPopup(str,'AIUTO PER LA COMPILAZIONE', 915, 644);
}

function helpSemplificatoTablet(str) {
	openHelpModalPopup(str,'AIUTO PER LA COMPILAZIONE', 915, 644);
	$('.ui-dialog-titlebar-close').on('tap touchmove touchstart click focus', function() {
		closeModalPopup();
	});
}

function helpTabella(str) {
	 openHelpModalPopup(str,'AIUTO PER LA COMPILAZIONE', 450, 400);
}

function helpRubrica(str) {
	 openHelpModalPopup(str,'AIUTO PER LA COMPILAZIONE', 900, 500);
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

	function ricercaTributoPhone(oggetto, tipoRicerca, showHelpAction) {
		
		
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
	  	
		helpPhone(showHelpAction + '?tipoRicerca=' + tipoRicerca + '&returnField=' + returnField + '&fieldValue=' + fieldValue);
	}
	
	function ricercaTributoTablet(oggetto, tipoRicerca, showHelpAction) {

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
	  	
		helpTablet(showHelpAction + '?tipoRicerca=' + tipoRicerca + '&returnField=' + returnField + '&fieldValue=' + fieldValue);
	}
	
	function ricercaTributoSemplificatoTablet(oggetto, tipoRicerca, sezione, showHelpAction) {
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
	  	
		helpTributoTablet(showHelpAction + '?tipoRicerca=' + tipoRicerca + '&returnField=' + returnField + '&fieldValue=' + fieldValue + '&sezione=' + sezione);
	}
	
	function ricercaTributoSemplificatoPhone(oggetto, tipoRicerca, sezione, showHelpAction) {
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
	  	
		helpPhone(showHelpAction + '?tipoRicerca=' + tipoRicerca + '&returnField=' + returnField + '&fieldValue=' + fieldValue + '&sezione=' + sezione);
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


	function ricercaRegioneTablet(oggetto, showHelpUrl) {

		if (lastDeselected) {
			lastDeselected.focus();
		}

		lastSelected = oggetto;
		lastDeselected = "";

		returnField = oggetto.name.substring(0, oggetto.name.lastIndexOf(suffisso));
		helpTablet(showHelpUrl + '?returnField=' + returnField);
	}

	var popupWindowId;


function openHelpModalPopup(source, title, width, height) {
	top.document.body.scrollIntoView();
	popupWindowId = "modalPopupId" + new Date().getTime();
	var modal = "<div id=\"" + popupWindowId + "\" style=\"overflow:auto; -webkit-overflow-scrolling: touch; overflow-y: scroll;overflow-x: auto; z-index:1001;\">";//-webkit-overflow-scrolling: touch; overflow-y: scroll;
	
	modal += "<iframe name='Window_Popup' height='100%' width='100%' frameborder='0' scrolling='auto' allowtransparency='true' src='" + source + "'></iframe>";
	modal += "</div>";
	$("body").append(modal);
	disableScroll();
	showDialogWidthHeight(popupWindowId,
			title,
			width,
			height
	);
}

function closeModalPopup() {
	enableScroll();
	$( "#" + popupWindowId ).dialog("close");
	$( "#" + popupWindowId ).remove();
}


function showDialogWidthHeight(dialog_id, titolo, width_px, height_px) {
	var d = $( "#" + dialog_id ).dialog({
			modal: true,
			resizable: false,
			draggable: true,
			closeOnEscape: true, 
			title: titolo,
			width: width_px,
			height: height_px,
			maxHeight: height_px,
			open : function() {
           var win = $(window);
           $(this).parent().css({          
          	left: (win.width() - $(this).parent().outerWidth())/2
           	//top: (win.height() - $(this).parent().outerHeight())/2
           });
        },
				dialogClass: "pop",
				beforeClose: function( event, ui ) { 
				enableScroll();
			}
	});
}

  <!-- fine sezione relativa alla valorizzazione automatica dei campi codici tributi -->
  <!-- codice modifica $3401$ -->
  <!-- codice modifica $8209-->