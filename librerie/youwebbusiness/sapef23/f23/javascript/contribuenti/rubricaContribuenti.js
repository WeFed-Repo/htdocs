function selezionaPersonaFisica(entryPoint, nuovo) {
	if(entryPoint){
		valorizzaBackup(nuovo);
	}
	if (personaFisicaSelected == true) {
		return;
	}
	personaFisicaSelected = true;
	personaGiuridicaSelected = false;

	abilitaCampiPersonaGiuridica(false);
	abilitaCampiPersonaFisica(true);

	if ( document.forms[1].elements['personaFisicaFlag'].value == "true"){	
		valorizzaCampi(true);
	}
	else {
		pulisciPersonaFisica();
	}
	
	jQuery("#giuridica").removeClass("nonSelezionato");
	jQuery("#giuridica").addClass("selezionato");
	jQuery("#fisica").removeClass("selezionato");
	jQuery("#fisica").addClass("nonSelezionato");
	jQuery("#tipoContribuente").val("personaFisica");
	
	$('.schedaPersonaFisica').show();
	$('.schedaPersonaGiuridica').hide();
}

function selezionaPersonaGiuridica(entryPoint, nuovo) {
	if(entryPoint){
		valorizzaBackup(nuovo);
	}
	if (personaGiuridicaSelected == true) {
		return;
	}
	personaFisicaSelected = false;
	personaGiuridicaSelected = true;

	abilitaCampiPersonaFisica(false);
	abilitaCampiPersonaGiuridica(true);

	if ( document.forms[1].elements['personaFisicaFlag'].value == "false"){
		valorizzaCampi(false);
	} else {
		pulisciPersonaGiuridica();
	}
			
	jQuery("#fisica").removeClass("nonSelezionato");
	jQuery("#fisica").addClass("selezionato");
	jQuery("#giuridica").removeClass("selezionato");
	jQuery("#giuridica").addClass("nonSelezionato");
	jQuery("#tipoContribuente").val("personaGiuridica");
		
	$('.schedaPersonaFisica').hide();
	$('.schedaPersonaGiuridica').show();
}

function abilitaCampiPersonaFisica(flagAbilita){
	var disabledToSet;
	var classNameToSet;
	
	if(flagAbilita == true){
		disabledToSet = false;
		classNameToSet = "form-control personaFisicaTrack";
		$('.dataNascitaHtml').removeAttr('disabled');
	}
	else {
		disabledToSet = true;
		classNameToSet = "form-control personaFisicaTrack solaLettura";
		$('.dataNascitaHtml').attr("disabled","disabled");
	}

	document.forms[1].elements['nome'].disabled = disabledToSet;
	document.forms[1].elements['nome'].className = classNameToSet;
	document.forms[1].elements['cognome'].disabled = disabledToSet;
	document.forms[1].elements['cognome'].className = classNameToSet;
	document.forms[1].elements['codiceFiscale'].disabled = disabledToSet;
	document.forms[1].elements['codiceFiscale'].className = classNameToSet + " codFiscFisica";
	document.forms[1].elements['sesso'].disabled = disabledToSet;
	document.forms[1].elements['sesso'].className = classNameToSet;
	document.forms[1].elements['comuneNascita'].disabled = disabledToSet;
	document.forms[1].elements['comuneNascita'].className = classNameToSet;
	document.forms[1].elements['provinciaNascita'].disabled = disabledToSet;
	document.forms[1].elements['provinciaNascita'].className = classNameToSet;
	document.forms[1].elements['indirizzoDomicilio'].disabled = disabledToSet;
	document.forms[1].elements['indirizzoDomicilio'].className = classNameToSet + " personaGiuridicaTrack";
	document.forms[1].elements['comuneDomicilio'].disabled = disabledToSet;
	document.forms[1].elements['comuneDomicilio'].className = classNameToSet + " personaGiuridicaTrack";
	document.forms[1].elements['provinciaDomicilio'].disabled = disabledToSet;
	document.forms[1].elements['provinciaDomicilio'].className = classNameToSet + " personaGiuridicaTrack";
	document.forms[1].elements['codiceFiscale2'].disabled = disabledToSet;
	document.forms[1].elements['codiceFiscale2'].className = classNameToSet + " personaGiuridicaTrack";
}

function abilitaCampiPersonaGiuridica(flagAbilita){
	var disabledToSet;
	var classNameToSet;
	
	if(flagAbilita == true){
		disabledToSet = false;
		classNameToSet = "form-control personaGiuridicaTrack";
		$('.dataNascitaHtml').removeAttr('disabled');
	}
	else {
		disabledToSet = true;
		classNameToSet = "form-control personaGiuridicaTrack solaLettura";
		$('.dataNascitaHtml').attr('disabled','disabled');
	}

	document.forms[1].elements['codiceFiscaleIva'].className = classNameToSet + " codFiscGiuridica";
	document.forms[1].elements['codiceFiscaleIva'].disabled = disabledToSet;
	document.forms[1].elements['ragioneSociale'].className = classNameToSet;
	document.forms[1].elements['ragioneSociale'].disabled = disabledToSet;
	document.forms[1].elements['indirizzoDomicilio'].className = classNameToSet + " personaFisicaTrack";
	document.forms[1].elements['indirizzoDomicilio'].disabled = disabledToSet;	
	document.forms[1].elements['comuneDomicilio'].className = classNameToSet + " personaFisicaTrack";
	document.forms[1].elements['comuneDomicilio'].disabled = disabledToSet;
	document.forms[1].elements['provinciaDomicilio'].className = classNameToSet + " personaFisicaTrack";
	document.forms[1].elements['provinciaDomicilio'].disabled = disabledToSet;
	document.forms[1].elements['codiceFiscale2'].className = classNameToSet + " personaFisicaTrack";
	document.forms[1].elements['codiceFiscale2'].disabled = disabledToSet;
}

function valorizzaCampi(personaFisica) {
	if	(personaFisica){
		document.forms[1].elements['nome'].value = document.forms[1].elements['backupNome'].value;
		document.forms[1].elements['cognome'].value = document.forms[1].elements['backupCognome'].value
		document.forms[1].elements['codiceFiscale'].value = document.forms[1].elements['backupCodiceFiscale'].value
		document.forms[1].elements['sesso'].selectedIndex = document.forms[1].elements['backupSesso'].value;
		document.forms[1].elements['comuneNascita'].value = document.forms[1].elements['backupComuneNascita'].value;
		document.forms[1].elements['provinciaNascita'].value = document.forms[1].elements['backupProvinciaNascita'].value;
		document.forms[1].elements['dataNascitaHtml'].value = document.forms[1].elements['backupDataNascitaHtml'].value;
		document.forms[1].elements['indirizzoDomicilio'].value = document.forms[1].elements['capDomicilio'].value;
		document.forms[1].elements['comuneDomicilio'].value = document.forms[1].elements['backupComuneDomicilio'].value;
		document.forms[1].elements['provinciaDomicilio'].value = document.forms[1].elements['backupProvinciaDomicilio'].value;
		document.forms[1].elements['codiceFiscale2'].value = document.forms[1].elements['backupCodiceFiscale2'].value;
	} else {
		document.forms[1].elements['codiceFiscaleIva'].value = document.forms[1].elements['backupCodiceFiscaleIva'].value
		document.forms[1].elements['ragioneSociale'].value = document.forms[1].elements['backupRagioneSociale'].value;
		document.forms[1].elements['codiceFiscale'].value = document.forms[1].elements['backupCodiceFiscale'].value;
		document.forms[1].elements['indirizzoDomicilio'].value = document.forms[1].elements['capDomicilio'].value;
		document.forms[1].elements['comuneDomicilio'].value = document.forms[1].elements['backupComuneDomicilio'].value;
		document.forms[1].elements['provinciaDomicilio'].value = document.forms[1].elements['backupProvinciaDomicilio'].value;
		document.forms[1].elements['codiceFiscale2'].value = document.forms[1].elements['backupCodiceFiscale2'].value;
	}
}

function valorizzaBackup(nuovo) {
	document.forms[1].elements['backupNome'].value = document.forms[1].elements['nome'].value;
	document.forms[1].elements['backupCognome'].value = document.forms[1].elements['cognome'].value;
	document.forms[1].elements['backupRagioneSociale'].value = document.forms[1].elements['ragioneSociale'].value;
	document.forms[1].elements['backupCodiceFiscale'].value = document.forms[1].elements['codiceFiscale'].value;
	document.forms[1].elements['backupSesso'].value = document.forms[1].elements['sesso'].selectedIndex;
	document.forms[1].elements['backupProvinciaNascita'].value = document.forms[1].elements['provinciaNascita'].value;
	document.forms[1].elements['backupComuneNascita'].value = document.forms[1].elements['comuneNascita'].value;
	document.forms[1].elements['backupDataNascitaHtml'].value = document.forms[1].elements['dataNascitaHtml'].value;
	document.forms[1].elements['capDomicilio'].value = document.forms[1].elements['indirizzoDomicilio'].value;
	document.forms[1].elements['backupCodiceFiscaleIva'].value = document.forms[1].elements['codiceFiscaleIva'].value;
	document.forms[1].elements['backupComuneDomicilio'].value = document.forms[1].elements['comuneDomicilio'].value;
	document.forms[1].elements['backupProvinciaDomicilio'].value = document.forms[1].elements['provinciaDomicilio'].value;
	document.forms[1].elements['backupCodiceFiscale2'].value = document.forms[1].elements['codiceFiscale2'].value;
	if(nuovo) {
		$(".isNuovo").val("true");
		$('.buttonSwitchFisica, .buttonSwitchGiuridica').removeAttr("disabled");
	} else {
		$(".isNuovo").val("false");
		if( document.forms[1].elements['personaFisicaFlag'].value == "true" )
			$('.buttonSwitchGiuridica').attr("disabled","disabled");
		if( document.forms[1].elements['personaFisicaFlag'].value == "false" )
			$('.buttonSwitchFisica').attr("disabled","disabled");
	}			
}

function pulisciPersonaFisica() {
	$(".personaFisicaTrack").val("");
	if ($(".isNuovo").val()=="false") {
		$(".codFiscFisica").val($(".backupCodiceFiscaleIva").val()).attr("disabled","disabled");
	}
	$('#dataNascitaId').val("");
}

function pulisciPersonaGiuridica() {
	$(".personaGiuridicaTrack").val("");
	if ($(".isNuovo").val()=="false") {
		$(".codFiscGiuridica").val($(".backupCodiceFiscale").val()).attr("disabled","disabled");
	}
	$('#dataNascitaId').val("");
}

function inserisciNuovoModelloJS(backupAction) {
	mostra_loading_screen();
	document.forms[0].target = "frCenter";
	document.forms[0].action = backupAction;
	document.forms[0].submit();
}

function annullaModificaContribuenteJS(name) {
	var el = document.createElement('input');
	el.type = 'hidden';
	el.name = name;
	el.value = 'Annulla';
	document.forms[1].appendChild(el);
	mostra_loading_screen();
	document.forms[1].target = "frCenter";
	document.forms[1].submit();
}

function salvaModificaContribuenteJS(name) {
	var el = document.createElement('input');
	el.type = 'hidden';
	el.name = name;
	el.value = 'Salva';
	document.forms[1].appendChild(el);
	mostra_loading_screen();
	document.forms[1].target = "frCenter";
	document.forms[1].submit();
}

function annullaInserisciNuovoContribuenteJS(name) {
	var el = document.createElement('input');
	el.type = 'hidden';
	el.name = name;
	el.value = 'Annulla';
	document.forms[1].appendChild(el);
	mostra_loading_screen();
	document.forms[1].target = "frCenter";
	document.forms[1].submit();
}

function salvaNuovoInserisciNuovoContribuenteJS(name) {
	var el = document.createElement('input');
	el.type = 'hidden';
	el.name = name;
	el.value = 'Salva';
	document.forms[1].appendChild(el);
	mostra_loading_screen();
	document.forms[1].target = "frCenter";
	document.forms[1].submit();
}
