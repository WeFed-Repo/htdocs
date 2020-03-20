function selezionaPersonaSezioniJS(fromRubrica, nCont) {
	document.forms['f23MainForm'].elements['contribuente.codFis' + nCont].disabled = false;
	document.forms['f23MainForm'].elements['contribuente.codFis' + nCont].className = 'form-control';
	
	document.forms['f23MainForm'].elements['contribuente.cognome' + nCont].disabled = false;
	document.forms['f23MainForm'].elements['contribuente.cognome' + nCont].className = 'form-control';
	if (!fromRubrica) {
		document.forms['f23MainForm'].elements['contribuente.cognome' + nCont].value = document.forms['f23MainForm'].elements['backupCognome' + nCont].value;
	}

	document.forms['f23MainForm'].elements['contribuente.nome' + nCont].disabled = false;
	document.forms['f23MainForm'].elements['contribuente.nome' + nCont].className = 'form-control';
	if (!fromRubrica) {
		document.forms['f23MainForm'].elements['contribuente.nome' + nCont].value = document.forms['f23MainForm'].elements['backupNome' + nCont].value;
	}

	document.forms['f23MainForm'].elements['contribuente.sesso' + nCont].disabled = false;
	document.forms['f23MainForm'].elements['contribuente.sesso' + nCont].className = 'form-control';
	if (!fromRubrica) {
		document.forms['f23MainForm'].elements['contribuente.sesso' + nCont].selectedIndex = document.forms['f23MainForm'].elements['backupSesso' + nCont].value;
	}
	document.forms['f23MainForm'].elements['contribuente.dataNascita1Html'].disabled = false;
	document.forms['f23MainForm'].elements['contribuente.dataNascita1Html'].className = 'form-control dataNascitaHtml';
	
	document.forms['f23MainForm'].elements['contribuente.dataNascita2Html'].disabled = false;
	document.forms['f23MainForm'].elements['contribuente.dataNascita2Html'].className = 'form-control dataNascitaHtml ';
	
	$('.dataNascitaHtml' + nCont).datepicker('enable');
	
	if (!fromRubrica) {
		document.forms['f23MainForm'].elements['contribuente.dataNascitaHtml' + nCont].value = document.forms['f23MainForm'].elements['backupDataNascita' + nCont].value;
	}

	document.forms['f23MainForm'].elements['contribuente.comNas' + nCont].disabled = false;
	document.forms['f23MainForm'].elements['contribuente.comNas' + nCont].className = 'form-control';
	if (!fromRubrica) {
		document.forms['f23MainForm'].elements['contribuente.comNas' + nCont].value = document.forms['f23MainForm'].elements['backupComuneNascita' + nCont].value;
	}

	document.forms['f23MainForm'].elements['contribuente.provNas' + nCont].disabled = false;
	document.forms['f23MainForm'].elements['contribuente.provNas' + nCont].className = 'form-control';
	if (!fromRubrica) {
		document.forms['f23MainForm'].elements['contribuente.provNas' + nCont].value = document.forms['f23MainForm'].elements['backupProvinciaNascita' + nCont].value;
	}
}
	
function compilaContribuenteZeroJS(nCont) {
	document.getElementsByName("contribuente.codFis" + nCont)[0].value = '';
	document.getElementsByName("contribuente.cognome" + nCont)[0].value = '';
	document.getElementsByName("contribuente.nome" + nCont)[0].value = '';
	document.getElementsByName("contribuente.sesso" + nCont)[0].value = '';
	document.forms['f23MainForm'].elements['contribuente.sesso' + nCont].selectedIndex = 0;
	document.getElementsByName("contribuente.dataNascita" + nCont + "Html")[0].value = '';
	document.getElementsByName("contribuente.comNas" + nCont)[0].value = '';
	document.getElementsByName("contribuente.provNas" + nCont)[0].value = '';
	document.getElementsByName("nuovoContribuente")[0].value = '1';
}

function impostazioniSlider1JS() {
	$('.slider1').slider({
		min: 0,
  		max: 1,
  		range: "min",
  		slide:function(event,ui){
   			if (ui.value==0){
      			$('#flagUpdateContribuente1Id').val('0');
				$('.off').css("font-weight", "bold");
				$('.on').css("font-weight", "");

		   	}else if (ui.value==1){
      			$('#flagUpdateContribuente1Id').val('1');
				$('.on').css("font-weight", "bold");
				$('.off').css("font-weight", "");

		    }
  		}
	});
}

function impostazioniSlider2JS() {
	$('.slider2').slider({
		min: 0,
  		max: 1,
  		range: "min",
  		slide:function(event,ui){
   			if (ui.value==0){
      			$('#flagUpdateContribuente2Id').val('0');
				$('.off').css("font-weight", "bold");
				$('.on').css("font-weight", "");

		   	}else if (ui.value==1){
      			$('#flagUpdateContribuente2Id').val('1');
				$('.on').css("font-weight", "bold");
				$('.off').css("font-weight", "");

		    }
  		}
	});
}

function setSlider1JS() {
	if ($('#flagUpdateContribuente1Id').val() == '0') {
		console.log($('#flagUpdateContribuente1Id').val())
		$('.slider1').slider('value', 0 );
	} else if ($('#flagUpdateContribuente1Id').val() == '1'){
		console.log($('#flagUpdateContribuente1Id').val())
		$('.slider1').slider('value', 1 );
	}

	$('.off').css("font-weight", "bold");
};

function setSlider2JS(){
	if ($('#flagUpdateContribuente2Id').val() == '0') {
		console.log($('#flagUpdateContribuente2Id').val())
		$('.slider2').slider('value', 0 );
	} else if ($('#flagUpdateContribuente2Id').val() == '1'){
		console.log($('#flagUpdateContribuente2Id').val())
		$('.slider2').slider('value', 1 );
	}

	$('.off').css("font-weight", "bold");
};
