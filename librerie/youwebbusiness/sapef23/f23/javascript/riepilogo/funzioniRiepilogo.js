
function funzioniRiepilogoJS(action) {
	if (!getSubmitted()) {
        document.f23MainForm.action = action;
        document.f23MainForm.target = 'frCenter';
        document.f23MainForm.submit();
     }
}

function eliminaDaRiepilogoJS(action) {
	var id = $('input[name=checkedItems]:radio:checked').val();
	document.f23MainForm.action = action + id;
	document.f23MainForm.target = "frCenter";
	  if (isAlmenoUnaDelegaSelezionata() == true) {
	 	  if (confirm('Confermi la cancellazione delle deleghe selezionate?')) {
	  	 	  if (!getSubmitted()) {
	          	document.f23MainForm.submit();
	          }
	      }
	  } else {
    	  //nessuna delega selezionata
		  if (!getSubmitted()) {
        	document.f23MainForm.submit();
          }
      }
}

function revocaRiepilogoJS(action) {
	document.f23MainForm.action = action;
    document.f23MainForm.target = "frCenter";

	  if (document.f23MainForm.selectedRevoca.value == '') {
	  	 return null;
	  } else {
	  	  if (confirm('Confermi la revoca della delega selezionata?')) {
				  if (!getSubmitted()) {
	          	document.f23MainForm.submit();
	          }
	      }
	  }
}

function cercaModelliRiepilogoJS(action) {
	if (!getSubmitted()) {
		mostra_loading_screen();		
        document.f23MainForm.action = action;
        document.f23MainForm.submit();

        if (document.getElementById('erroreRiepilogo')) {
		   	   document.getElementById('erroreRiepilogo').style.display = 'none';
        }
	}
}

function getDelegaRiepilogoJS(action) {
	if (!getSubmitted()) {
		   mostra_loading_screen();
          document.f23MainForm.action = action;
          document.f23MainForm.target = "frCenter";
          document.f23MainForm.submit();
   }
}

function checkRadioFunctionsRiepilogoJS(oppositeClass) {
	$.each( $('input[type=radio][class='+oppositeClass+']'), function(i,n) {
			if( $(n).is(":checked") ) {
				$('input[type=radio][class='+oppositeClass+']').prop('checked', false);
			}
	})
	abilitaPulsantiFuncRiepilogoJS(oppositeClass);
}

function abilitaPulsantiFuncRiepilogoJS(oppositeClass) {
	if (oppositeClass == "radioSelInLista"){
		$('.revocaF23riepilogo').removeAttr("disabled");
		$('.inviaF23riepilogo, .eliminaF23riepilogo').attr("disabled","disabled");
	}
	if(oppositeClass == "radioRevocaInLista"){
		$('.inviaF23riepilogo, .eliminaF23riepilogo').removeAttr("disabled");
		$('.revocaF23riepilogo').attr("disabled","disabled");
 	}
}

function spedizioneButtonRiepilogo(action) {
	document.confermaForm.action = action;
	document.confermaForm.submit();
}