var serverError = false;

$(window).resize(function(){
    
	heightLimit = $(window).height();
	return heightLimit;
});


$(function() {
//definizione variabili per le date
	today = new Date();
	mm_corrente = today.getMonth() + 1;
	aa_corrente = today.getFullYear();
	if (mm_corrente < 10) {
	   	mm_corrente = "0" + mm_corrente.toString();
	}
	heightLimit = $(window).height();
	/*if(/iPhone|iPad|iPod|Android|IEMobile/i.test(navigator.userAgent) ) {
		$('.combobox').selectpicker('mobile');
	}*/
	
	$('.modal').on('shown.bs.modal', function () {
		if(!(/iPhone|iPad|iPod|Android|IEMobile/i.test(navigator.userAgent)) &&  $(this).find('.modal-dialog').outerHeight() > heightLimit) {
			$(this).find('.modal-body').addClass('overflowScreen').css({
					'height': (heightLimit - 200) + 'px',
					'overflow-y': 'auto',
					'overflow-x': 'hidden'
			});
		}
		
	})
	$('.modal').on('hidden.bs.modal', function () {
		if($(this).find('.overflowScreen').length>0) {
			$(this).find('.modal-body').removeClass('overflowScreen').css({
					'height': 'auto'
			})
		}
	})
	
	//hack per prevenire autocomplete
	$($('.autocompleteoff')).append("<div style=\"display: none;\"><input type=\"text\" id=\"PreventChromeAutocomplete\" name=\"PreventChromeAutocomplete\" autocomplete=\"autocompleteOff\" />");
	
})
function setCatprofessione(el) {    
	elObj = $('#' + el);
	var  optionToAppend='',
	     optionToCicle,
	     nOption;
  switch(elObj.val()) {
  		case 'Lavoratore autonomo':
  			nOption = ['commercialista', 'avvocato', 'notaio', 'medico', 'ingegnere', 'architetto', 'geometra', 'ragioniere', 'perito', 'consulente finanziario', 'agente assicurativo', 'agente', 'rappresentante di commercio', 'consulente aziendale', 'autotrasportatore (proprietario)', 'artista', 'sportivo professionale', 'agricoltore coldiretto e simili', 'artigiano (barbiere, sarto, ecc...)', 'commerciante', 'pubblico esercente', 'socio di societa\'', 'collaboratrice domestica', 'lavoro a domicilio', 'altro lavoro in proprio'];
//  			nOption = ['casalinga','pensionato','disoccupato','studente','militare di leva','redditiere'];
			break;
  		case 'Lavoratore dipendente a tempo indeterminato':
  			nOption = ['dirigente','funzionario', 'clero', 'medico ospedaliero', 'impiegato', 'operaio specializzato', 'paramedico','commesso', 'operaio comune', 'guardia', 'bidello', 'portiere', 'camionista', 'militare ufficiale', 'militare sotto ufficiale', 'militare non graduato', 'vigile del fuoco', 'vigile urbano', 'docente universitario, magistrato', 'insegnante di ruolo'];
//  		nOption = ['casalinga','pensionato','disoccupato','studente','militare di leva','redditiere'];
			break;
  		case 'Lavoratore dipendente a tempo determinato / prestazione d\'opera (sup.30 mesi)':
  			nOption = ['dirigente','funzionario', 'clero', 'medico ospedaliero', 'impiegato', 'operaio specializzato', 'paramedico','commesso', 'operaio comune', 'guardia', 'bidello', 'portiere', 'camionista', 'militare ufficiale', 'militare sotto ufficiale', 'militare non graduato', 'vigile del fuoco', 'vigile urbano', 'docente universitario', 'magistrato', 'insegnante di ruolo'];
//  		nOption = ['casalinga','pensionato','disoccupato','studente','militare di leva','redditiere'];
			break;
  		case 'Lavoratore dipendente a tempo determinato / prestazione d\'opera (inf.30 mesi)':
  			nOption = ['dirigente', 'funzionario', 'clero', 'medico ospedaliero', 'impiegato', 'operaio specializzato', 'paramedico','commesso', 'operaio comune', 'guardia', 'bidello', 'portiere', 'camionista', 'militare ufficiale', 'militare sotto ufficiale', 'militare non graduato', 'vigile del fuoco', 'vigile urbano', 'docente universitario', 'magistrato', 'insegnante di ruolo'];
//  		nOption = ['casalinga','pensionato','disoccupato','studente','militare di leva','redditiere'];
			break;
		case 'Lavoratore con contratto di lavoro particolare (es.: a progetto, di formazione, ecc.)':
			nOption = ['dirigente', 'funzionario', 'clero', 'medico ospedaliero', 'impiegato', 'operaio specializzato', 'paramedico','commesso', 'operaio comune', 'guardia', 'bidello', 'portiere', 'camionista', 'lavoratore con contratto a tempo determinato', 'militare ufficiale', 'militare sotto ufficiale', 'militare non graduato', 'vigile del fuoco', 'vigile urbano', 'docente universitario', 'magistrato', 'insegnante di ruolo'];
//			nOption = ['funzionario','dirigente','impiegato','quadro','a tempo determinato','docente universitario','magistrato','insegnante di ruolo','rappresentante del clero','medico ospedaliero','commesso','paramedico','operaio specializzato', 'operaio comune','guardia','bidello','portiere','camionista','millitare ufficiale','militare sottoufficiale','militare non graduato','vigile del fuoco','vigile urbano'];
			break;
  		case 'Soggetto senza occupazione':
  			nOption = ['redditiere', 'casalinga', 'pensionato', 'disoccupato', 'militare di leva', 'studente'];
//  		nOption = ['commercialista','architetto','ingegnere','medico','notaio','avvocato','consulente finanziario','perito','ragioniere','geometra','agente assicurazione','agente','rappresentante di commercio', 'consulente aziendale','agricoltore diretto e simili','autotrasportatore (proprietario)','artista','sportivo professionale','artigiano (barbiere, sarto, etc.)','commerciante','pubblico esercente','socio di societa','collaboratrice domestica','lavoro a domicilio','altro lavoro in proprio'];
			break;
		default:
  			nOption = [];
			break;
    }
	if(nOption.length>0) {
	for(i=0;i < nOption.length; i++) {
		 optionToCicle = '<option value="' + nOption[i] + '">' + nOption[i] +'</option>';
		 optionToAppend +=  optionToCicle;
	}
	}
	else {
	 optionToAppend = '';
	}
	if(el=='catProfessionale') {refreshOptions('mol','professione',optionToAppend)};
	if(el=='catProfessionale_int1') {refreshOptions('mol','professione_int1',optionToAppend)};
	
 }
//funzioni generiche per la correzione dei form:
//emulazione del change su finte select
function submitCombobox(form) {
	/*$('#'+ form).find('.required').click(function(event){
		$(this).closest('.form-control').find('select').valid();
	});*/
	//if(/Android/i.test(navigator.userAgent) ) {
		$('#'+ form).find('select.required').bind('change',function(){
			$(this).valid();
		} )
	//}
}
//funzione per spostare focus da un capo a quello succcessivo dello stesso gruppo
function spostaFocus(el,elNext,lim) {
  el = $('#' + el);
  elNext = $('#' + elNext);
  el.bind('keyup', function() {
	 if(el.val().length==lim){
		elNext.focus();
	}
  }) 
 }
//funzione abilita e disabilita select alla selezione di un'altra select
function abilitaSelect(selPre,selToAb) {
	$('#' + selPre).bind('change',function(){
		if($(this).val()!='') {
			$('#' + selToAb).closest('.combobox').prop('disabled', false);
			//$('#' + selToAb).closest('.combobox').selectpicker('refresh');
		}
		else {
			$('#' + selToAb).closest('.combobox').prop('disabled', true);
			//$('#' + selToAb).closest('.combobox').selectpicker('refresh');
		}
		
	})
}
//funzione per la ricostruzione delle select
function refreshOptions(form,selToAgg,optionToAppend) {

var classRequired = ($('#' +selToAgg).hasClass('required')) ? 'required' : '',
    attrDisabled = ($('#' +selToAgg).attr('disabled') && optionToAppend=='') ? 'disabled' : '',
	contentToAppend = '<select name="' + selToAgg + '"' + 'id="' + selToAgg + '"' + ' ' + 'class="form-control combobox' + ' ' + classRequired +'">' + '<option value="">Seleziona</option>' + optionToAppend + '</select>';
	$('#' +selToAgg).closest('.form-group').removeClass('has-success').removeClass('has-error').find('.error').remove();
	//$('#' +selToAgg).closest('.combobox').selectpicker('destroy');
	$('#' +selToAgg).remove();
	$(contentToAppend).insertAfter($('label[for=' + selToAgg +']'));
	if(optionToAppend=='') {$('#' +selToAgg).attr('disabled',true)}
	//$('#' +selToAgg).selectpicker();
	//$('.combobox').selectpicker('mobile');
	submitCombobox(form)
}

//funzione per il controllo di un campo senza caratteri numerici
function ctrlLetter(element) {
	var	elementText = $(element).val();
	for (var i=0; i < elementText.length; i++) {
  		if (( elementText.charAt(i) >= '0') && (elementText.charAt(i) <= '9')) {
  			return false;
  		}
  	}
  	return true;
}
//funzione per i controlli della data di nascita
function ctrlDataNascita(gg,mm,aa,element) {
 var mese = $('#' + mm).val(),
	 anno = $('#' + aa).val(),
	 giorno = $('#' + gg).val(),
	 limite,
	 bisestile = true;
	
 if(anno!='') {
 if ((anno % 4) == 0) {
  		if ((anno % 100) == 0) {
  			if ((anno%400) == 0) {
    			bisestile = true;
			} 
    		else {
    			bisestile = false;
    		}
  		} 
  		else {
    		bisestile = true;
  		}
  	} 
  	else {
  		bisestile = false;
  	}
 }
 switch (mese) {
  		case '10':
  		case '12':
  		case '01':
  		case '03':
  		case '05':
  		case '07':
  		case '08':
  			limite = 31;
  			break;
  		case '04':
  		case '06':
  		case '09':
  		case '11':
  			limite=30;
  			break;
  		case '02':
			limite=29;
			if (!bisestile) {
      			limite = 28;
      		}
			break;
		default:
  			limite = 31;
      		if (!bisestile) {
      			limite = 28;
      		}
  	}
if (mese!='' && giorno<=31 && giorno!=29 && $(element).attr('name')==mm && giorno > limite) {
	return false;
}
else if (anno!='' && $(element).attr('name')==aa && limite==28 && giorno==29) {
	return false;
}
else{
	return true;
}
	
}
function ctrlCodiceFiscale(codiceInserito, cognome, nome, gg, mm, aa, sesso) {
	var codiceIns =  $('#' + codiceInserito).val().toUpperCase(),
		cognomeIns = $('#' + cognome).val().toUpperCase(),
		nomeIns = $('#' + nome).val().toUpperCase(),
		dataNascitaIns = $('#' + gg).val() + '/' + $('#' + mm).val() + '/' + $('#' + aa).val(),
		ggmmaa = dataNascitaIns.split("/"),
		sessoIns = ($('input[name=' + sesso + ']').eq(1).is(':checked')) ? 'F' : 'M',
		txtCodFis = "",
		vocali = "",
		consonanti = "",
		aaF,
		mmF,
		ggF,
		sessoF,
		set1,
		set2,
		setpari,
		setdispari,
		s,
		re= /^([A-Za-z]{6}[0-9lmnpqrstuvLMNPQRSTUV]{2}[abcdehlmprstABCDEHLMPRST]{1}[0-9lmnpqrstuvLMNPQRSTUV]{2}[A-Za-z]{1}[0-9lmnpqrstuvLMNPQRSTUV]{3}[A-Za-z]{1})|([0-9]{11})$/;
		
		
		//	RICAVO IL COGNOME (1-3)
		for (var i = 0; i < cognomeIns.length; i++) {
			a = cognomeIns.charAt(i);
			if (/[AEIOU]/.test(a)) {
				vocali += a;
			}
			if (/[BCDFGHJKLMNPQRSTVWXYZ]/.test(a)) {
				consonanti += a;
			}
		}
		consonanti = (consonanti+vocali+"XXX").substr(0,3);
		txtCodFis = consonanti; 
		
		//	RICAVO IL NOME (4-6)
		var vocali = "",
			consonanti = "";
		for (var i = 0; i < nomeIns.length; i++) {
			a = nomeIns.charAt(i);
			if (/[AEIOU]/.test(a)) {
				vocali += a;
			}
			if (/[BCDFGHJKLMNPQRSTVWXYZ]/.test(a)) {
				consonanti += a;
			}
		}
		if (consonanti.length > 3) {
		//	isolo la prima, terza e quarta consonante
		consonanti = consonanti.charAt(0)+consonanti.substr(2,2);
		} 
		else {
			consonanti = (consonanti+vocali+"XXX").substr(0,3);
		}
		txtCodFis += consonanti;
		
		//	Anno di nascita (7-8)
		if(gg != null )
		{
			aa = (10000+parseFloat(ggmmaa[2])).toString().substr(3);
			txtCodFis += aa;
		}
		//	Mese di nascita (9)
		if(mm != null )
		{
			txtCodFis += (" ABCDEHLMPRST").charAt(ggmmaa[1]);
		}
		//	Giorno di nascita e sesso (10-11)
		if(sesso != null )
		{
		sessoF = (sessoIns=="F") ? 140 :100;
		ggF = (parseFloat(ggmmaa[0]) + sessoF).toString().substr(1);
		txtCodFis += ggF;
		}
		
		//ultimi caratteri
		 set1 = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		 set2 = "ABCDEFGHIJABCDEFGHIJKLMNOPQRSTUVWXYZ";
		 setpari = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		 setdisp = "BAKPLCQDREVOSFTGUHMINJWZYX";
		 s = 0;
			for (i = 1; i <= 13; i += 2) {
				s += setpari.indexOf(set2.charAt( set1.indexOf( codiceIns.charAt(i) )));
			}
			for (i = 0; i <= 14; i += 2) {
				s += setdisp.indexOf(set2.charAt(set1.indexOf(codiceIns.charAt(i))));
			}
		
		if (txtCodFis.length>6 && s%26 != codiceIns.charCodeAt(15)-'A'.charCodeAt(0)) {
			return false;
		}
		
		else if (txtCodFis.length>6 && codiceIns.substring(0, 11) != txtCodFis)
		{
			return false;
		}
		else if (!re.test(codiceIns))
		{
			return false;
		}
		else {
		   return true
		  
		}
}
function ctrlMail(mail) {
	var	mailAdress = $('input[name='+ mail+ ']').val(),
	    re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
	if (re.test(mailAdress)) {
        return true; 
    } else {
        return false;
    };
} 

function generaCaptcha() {
	$('.generaCaptcha').bind('click', function() {
		$(this).closest('.form-group').find('.captchaImg').attr('src', './generaIMG.do?a='+Math.random()+ "'")
	})
}
function spostaFocusOnError(validator,errors) {
	var firstError = validator.errorList[0].element,
		offsetError = $(firstError).offset()
		if(!$('.modal:visible').length>0) $('html, body').animate({scrollTop:offsetError.top-215}, 'slow');
		firstError.focus();
}

//controlla errori lato server
function viewServerValidation(hiddenToCheck,splitter) {
	var fieldsErrors = $('#' + hiddenToCheck),
		fieldsErrorsArray,
		fieldId,
		divElement
	if (fieldsErrors.val().length > 0 ) {
		fieldsErrorsArray = fieldsErrors.val().split(splitter);
		for (var index = 0; index < fieldsErrorsArray.length; index++) {
			fieldId = fieldsErrorsArray[index];
			divElement = $('#'+ fieldId).closest('.form-group');
			if(divElement != null) {
			   serverError= true;
			   $('#'+ fieldId).valid();
			   serverError= false;
			   /*divElement.addClass('has-error');
			   var htmlError = '<label id="" class="error" for="">Verifica</label>';
			   $(htmlError).appendTo(divElement)*/
			}
		}
	}
	}
//chiamata ajax form
function ajaxFormSubmitAsynch(formID, actionParams, callBack, boxToshow)
{	
	var form = $('#' + formID);
	if (form.length>0)
	{
		actionParams  = form.serialize();
		form.addClass('loading');
		$.ajax({
			type: "GET",
			//simula librerie
			url: (location.href.indexOf("//librerie") > 0) ? '../librerie/include/commons/ajax/contatti.php' : form.attr("action"),
			contentType: "json",
			data: actionParams,
			success: function(data)
				{
					form.removeClass('loading');
					callBack(data);
				},
			failure: function()
				{
					
					var mess = "<strong>Errore tecnico durante l'invio della richiesta.</strong>";
					form.removeClass('loading');
					$('#' + boxToshow).show().html(mess);
					//reset form
					form.hide();
					//reset form
				}
		});		
	}
}

  