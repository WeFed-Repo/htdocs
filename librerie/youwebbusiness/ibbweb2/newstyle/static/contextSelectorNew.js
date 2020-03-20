// funzione che svuota la select passata come parametro
function cleanSelect(select) {
	
	for(var i = select.options.length-1; i >= 0; i--) {
		select.options[i] = null;
	}
	
}

function setTipoEsito(){
	if(document.getElementsByName('tipoEsitoBen')[0] != undefined){
		var ideAzienda = document.getElementsByName('contextSelectorData.id')[0].value;
		var ideBanca = document.getElementsByName('contextSelectorData.banca')[0].value;
		var fieldTipoEsitoBen = document.getElementsByName('tipoEsitoBen')[0];
		if (ideAzienda == '' || ideBanca == ''){
			fieldTipoEsitoBen.value='UNCB';
		} else{
			var tpeCUC = aziende[ideAzienda]['tpeCUCAzienda'];
			var tpeAbi = aziende[ideAzienda]['banche'][ideBanca]['codTipologiaBanca'];
			var tmpStr='';
			tmpStr = (tpeCUC == 'CBI')? 'CB':'UN';
			fieldTipoEsitoBen.value = (tpeAbi == 'GR' || tpeAbi == 'PR')?(tmpStr + 'GR'):(tmpStr + 'CB');
		}
		CCUCABI_HIDDENSelects.fillSelect(2);
		if(document.forms[0].elements['esitoBneficiario'].checked){
			lockFieldByID('CCUCABI_HIDDEN-2', false, true);
		}else{
			lockFieldByID('CCUCABI_HIDDEN-2', true, true);
		}
		document.getElementsByName('disposizione.modalitaEsito')[0].value = document.forms[0].elements['CCUCABI_HIDDEN-2'].value;
	}
}
// funzione che gestisce il cambiamento di intestatario
function changeIntestatario() {
	var ideAzienda = document.getElementsByName('contextSelectorData.id')[0].value;
	document.getElementsByName('contextSelectorData.iban')[0].value='';
	document.getElementsByName('contextSelectorData.codTipologiaBanca')[0].value = '';
	populateBanche(ideAzienda);
	populateConti(ideAzienda, '');
	populateIbanSpese(ideAzienda, '', '');
	populateIdentificativoCdtr(ideAzienda);
	// se l'intestatario è valido popolo i suoi dettagli altrimenti li svuoto
	if(ideAzienda != '')
		detailIntestatario(aziende[ideAzienda],null);
	// altrimenti svuoto i dettagli di eventuali intestatari selezionati in precedenza
	else
		detailIntestatario(null,null);
	setTipoEsito();
}

// funzione che gestisce il cambiamento di banca
function changeBanca() {
	var ideAzienda = document.getElementsByName('contextSelectorData.id')[0].value;
	var ideBanca = document.getElementsByName('contextSelectorData.banca')[0].value;
	document.getElementsByName('contextSelectorData.iban')[0].value = '';
	document.getElementsByName('contextSelectorData.codTipologiaBanca')[0].value = '';
	populateConti(ideAzienda, ideBanca);
	populateIbanSpese(ideAzienda, ideBanca, '');
	populateIdentificativoCdtr(ideAzienda);
	setTipoEsito();
}

// funzione che gestisce il cambiamento di conto corrente
function changeConto(type) {
	var ideRapporto=document.getElementsByName('contextSelectorData.conto')[0].value;
	var ideAzienda=document.getElementsByName('contextSelectorData.id')[0].value;
	// se il conto è vuoto svuoto anche i suoi dettagli
	document.getElementsByName('contextSelectorData.codTipologiaBanca')[0].value = '';
	if (ideRapporto == '') {
		document.getElementsByName('contextSelectorData.iban')[0].value='';
		populateIbanSpese(ideAzienda, '', ideRapporto);
	}
	// altrimenti cerco a chi appartiene il conto selezionato e gestisco tutti gli altri campi di conseguenza
	else {
		
 		for(var tempAzienda in aziende) {
			for(var tempBanca in aziende[tempAzienda]['banche']) {
				for(var tempRapporto in aziende[tempAzienda]['banche'][tempBanca]['rapporti']) {
					if (tempRapporto == ideRapporto) {
						if(type=='updateDistinta'){
							detailIntestatario(aziende[tempAzienda],ideAzienda);
						}else if (type=='insert' || type=='updateCBI' || type=='insertCopia' 
							|| type=='riprovaBoniSepa' 
							|| type=='copiaBoniSepa' 
							|| type=='updateBoniSepa' 
							|| type=='updateIncassiSepa' 
							|| type=='copiaIncassiSepa' 
							|| type=='riprovaIncassiSepa'
							|| type=='riprovaStipSepa'
							|| type=='copiaStipSepa'
							|| type=='updateStipSepa'
							|| type=='inserimentoNuovoMandato'
							|| type=='copiaNuovoMandato'){
							detailIntestatario(aziende[tempAzienda],'');
						}
						
						// avendo ripopolato le select devo riselezionare anche i valori scelti
						if(type=='updateDistinta'){
							document.getElementsByName('contextSelectorData.id')[0].value=tempAzienda;
							document.getElementsByName('contextSelectorData.banca')[0].value = aziende[tempAzienda]['banche'][tempBanca]['ideBanca'];
							document.getElementsByName('contextSelectorData.abi')[0].value = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codAbiRapporto'];
							document.getElementsByName('contextSelectorData.cab')[0].value = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codCabRapporto'];
							document.getElementsByName('contextSelectorData.descrizioneRapporto')[0].value = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['desDescrRapporto'];
							document.getElementsByName('contextSelectorData.conto')[0].value=aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['ideRapportoBanca'];
							document.getElementsByName('contextSelectorData.iban')[0].value = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codIbanEstRapporto'];
							document.getElementsByName('contextSelectorData.codTipologiaBanca')[0].value = aziende[tempAzienda]['banche'][tempBanca]['codTipologiaBanca'];
						}	
						else{ 
							if(type=='insert' || type=='insertCopia' 
								|| type=='riprovaBoniSepa' 
								|| type=='copiaBoniSepa' 
								|| type=='updateBoniSepa' 
								|| type=='updateIncassiSepa' 
								|| type=='copiaIncassiSepa' 
								|| type=='riprovaIncassiSepa'
								|| type=='riprovaStipSepa'
								|| type=='copiaStipSepa'
								|| type=='updateStipSepa'
								|| type=='inserimentoNuovoMandato'
								|| type=='copiaNuovoMandato'){
								
								populateBanche(tempAzienda);
								populateConti(tempAzienda, tempBanca);
								populateIdentificativoCdtr(tempAzienda);
								
								document.getElementsByName('contextSelectorData.id')[0].value=tempAzienda;
								document.getElementsByName('contextSelectorData.banca')[0].value = aziende[tempAzienda]['banche'][tempBanca]['ideBanca'];
								document.getElementsByName('contextSelectorData.abi')[0].value = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codAbiRapporto'];
								document.getElementsByName('contextSelectorData.cab')[0].value = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codCabRapporto'];
								document.getElementsByName('contextSelectorData.descrizioneRapporto')[0].value = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codNroRapporto'];
								document.getElementsByName('contextSelectorData.conto')[0].value=aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['ideRapportoBanca'];
								document.getElementsByName('contextSelectorData.iban')[0].value = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codIbanEstRapporto'];
								document.getElementsByName('contextSelectorData.codTipologiaBanca')[0].value = aziende[tempAzienda]['banche'][tempBanca]['codTipologiaBanca'];
							}else if (type=='update'){
								populateBanche(tempAzienda);
								populateConti(tempAzienda, tempBanca);
								populateIdentificativoCdtr(tempAzienda);
								
								document.getElementsByName('contextSelectorData.id')[0].value=tempAzienda;
								document.getElementsByName('contextSelectorData.banca')[0].value = aziende[tempAzienda]['banche'][tempBanca]['ideBanca'];
								document.getElementsByName('contextSelectorData.abi')[0].value = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codAbiRapporto'];
								document.getElementsByName('contextSelectorData.cab')[0].value = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codCabRapporto'];
								document.getElementsByName('contextSelectorData.descrizioneRapporto')[0].value = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codNroRapporto'];
								document.getElementsByName('contextSelectorData.conto')[0].value=aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['ideRapportoBanca'];
								document.getElementsByName('contextSelectorData.iban')[0].value = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codIbanEstRapporto'];
								document.getElementsByName('contextSelectorData.codTipologiaBanca')[0].value = aziende[tempAzienda]['banche'][tempBanca]['codTipologiaBanca'];
								
								document.getElementsByName('contextSelectorData.descrizione')[0].value=aziende[tempAzienda]['desRagSocAzienda'];
								document.getElementsByName('contextSelectorData.cf')[0].value=aziende[tempAzienda]['codFiscaleAzienda'];
								
								if(document.getElementsByName('contextSelectorData.desCuc').length != 0){
								 	document.getElementsByName('contextSelectorData.cuc')[0].value = aziende[tempAzienda]['codCUCAzienda'];
								 	document.getElementsByName('contextSelectorData.desCuc')[0].value = aziende[tempAzienda]['desCUCAzienda'];
								 	document.getElementsByName('contextSelectorData.tpeCuc')[0].value = aziende[tempAzienda]['tpeCUCAzienda'];
								 	if(document.getElementsByName('contextSelectorData.sia')[0].length != 0){
								 		document.getElementsByName('contextSelectorData.sia')[0].value = aziende[tempAzienda]['codSIAAzienda']; //inserito per TM
								 	}
								 	if(document.getElementsByName('contextSelectorData.tpeCuc')[0].value != '')
								 		gestioneTpeCuc(document.getElementsByName('contextSelectorData.tpeCuc')[0].value);
								 }
							}else{
								populateBanche(tempAzienda);
								populateConti(tempAzienda, tempBanca);
								document.getElementsByName('contextSelectorData.id')[0].value=tempAzienda;
								document.getElementsByName('contextSelectorData.banca')[0].value = tempBanca;
								document.getElementsByName('contextSelectorData.conto')[0].value = tempRapporto;
								document.getElementsByName('contextSelectorData.iban')[0].value = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codIbanEstRapporto'];
								document.getElementsByName('contextSelectorData.codTipologiaBanca')[0].value = aziende[tempAzienda]['banche'][tempBanca]['codTipologiaBanca'];
							}
						}
						
						//controllo se presente il campo codiceUnivoco e lo popolo con SIA+ABI+TIMESTAMP DI ADESSO
						if (document.getElementsByName('contextSelectorData.codiceUnivoco') && (document.getElementsByName('contextSelectorData.codiceUnivoco').length != 0)){ 
							var str_temp = trimString(document.getElementsByName('contextSelectorData.timestampData')[0].value);
						
							str_temp = str_temp.replace(/ /g,'');
							str_temp = str_temp.replace(/-/g,'');
							str_temp = str_temp.replace(/:/g,'');
							str_temp = str_temp.replace(/\./g,'');
							var abi="";
							var iban=document.getElementsByName('contextSelectorData.iban')[0].value;
							if(iban!="" && iban.length >=10){
								abi=iban.substring(5,10)
							}
							document.getElementsByName('contextSelectorData.codiceUnivoco')[0].value = document.getElementsByName('contextSelectorData.sia')[0].value.substring(0, 5) + abi + str_temp;
						}
						changeCodiceUnivoco('disposizione.keyDisposizione', type);
						setTipoEsito();
						populateIbanSpese(tempAzienda, tempBanca, ideRapporto);
						return;
					}
				}
			}
		}
	}
	
}

function changeCodiceUnivoco(elementName, action) {
    var elements = document.getElementsByName(elementName);
    if (!elements || elements.length == 0) {
        return;
    }
    var codUnivocoField = elements[0];
    var currentCodUnivoco = codUnivocoField.value;
    var lastGeneratedCodUnivocoField = document.getElementById('lastCodiceUnivoco');
    var lastGeneratedCodUnivoco = ( lastGeneratedCodUnivocoField ? lastGeneratedCodUnivocoField.value : '' );
    // utente ha modificato a mano codice univoco
    /*
    if ((action != 'update') && (currentCodUnivoco != '') && (lastGeneratedCodUnivoco != currentCodUnivoco)) {
        return;
    }
    if ((action == 'update') && (currentCodUnivoco != '')) {
        return;
    }
    */
    if ((currentCodUnivoco != '') && (lastGeneratedCodUnivoco != currentCodUnivoco)) {
        return;
    }

    var now = new Date();
    var str_temp = (now.getDate() < 10 ? '0' : '') + now.getDate() + '/' + (now.getMonth() < 9 ? '0' : '') + (now.getMonth() + 1) + '/' + now.getFullYear() + now.getHours() + now.getMinutes() + now.getSeconds();
    var abi = "";
    var iban = document.getElementsByName('contextSelectorData.iban')[0].value;
    if (iban != "" && iban.length >= 10){
        abi = iban.substring(5,10);
    }
    var codUnivoco = document.getElementsByName('contextSelectorData.cuc')[0].value + abi + str_temp;
    codUnivocoField.value = codUnivoco;
    if (lastGeneratedCodUnivocoField) { lastGeneratedCodUnivocoField.value = codUnivoco; }
}

// funzione che popola la select delle banche con tutte le banche esistenti o con solo quelle di un intestatario
// a seconda dei parametri passati
function populateBanche(azienda) {
	var banche = new Array();
	if (azienda == '') {
		for(var tempAzienda in aziende) {
			for(var tempBanca in aziende[tempAzienda]['banche']) {
			//Tolgo il caso in cui un intestatario non ha banche
				if(tempBanca!=''){
					banche[tempBanca] = aziende[tempAzienda]['banche'][tempBanca];
				}
				
			}
		}
	}
	else {
		for(var tempBanca in aziende[azienda]['banche']) {
			banche[tempBanca] = aziende[azienda]['banche'][tempBanca];
		}
	}
	
	select = document.getElementsByName('contextSelectorData.banca')[0];
	cleanSelect(select);
	select.options[select.length] = new Option('', '');
	for(var i in banche) {
		var banca = banche[i];
		select.options[select.length] = new Option(banca['desBanca'], banca['ideBanca']);
	}
}

// funzione che popola la select dei conti correnti con tutti i conti, con solo quelli di un intestatario o di una
// sola banca a seconda dei parametri passati
function populateConti(azienda, banca) {
	var rapporti = new Array();
	if (azienda == '' && banca == '') {
		for(var tempAzienda in aziende) {
			for(var tempBanca in aziende[tempAzienda]['banche']) {
				for(var tempRapporto in aziende[tempAzienda]['banche'][tempBanca]['rapporti']) {
				//Tolgo il caso in cui un intestatario non ha banche e non ha conti
					if(tempRapporto!=''){
						rapporti[tempRapporto] = aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto];
					}
					
				}
			}
		}
	}
	else if (azienda == '' && banca != '') {
		for(var tempAzienda in aziende) {
			if (aziende[tempAzienda]['banche'][banca]) {
				for(var tempRapporto in aziende[tempAzienda]['banche'][banca]['rapporti']) {
					rapporti[tempRapporto] = aziende[tempAzienda]['banche'][banca]['rapporti'][tempRapporto];
				}
			}
		}
	}
	else if (azienda != '' && banca == '') {
		for(var tempBanca in aziende[azienda]['banche']) {
			for(var tempRapporto in aziende[azienda]['banche'][tempBanca]['rapporti']) {
				rapporti[tempRapporto] = aziende[azienda]['banche'][tempBanca]['rapporti'][tempRapporto];
			}
		}
	}
	else if (azienda != '' && banca != '') {
		rapporti = aziende[azienda]['banche'][banca]['rapporti'];
	}
	
	//select = document.getElementsByName('bonificoSepa.grpHdr.initgPty.id.orgId.prtryId.id')[0];
	select=document.getElementsByName('contextSelectorData.conto')[0];
	cleanSelect(select);
	select.options[select.length] = new Option('', '');
	for(var i in rapporti) {
		var rapporto = rapporti[i];
		select.options[select.length] = new Option(rapporto['codNroRapporto'],rapporto['ideRapportoBanca']);
	}
}

function populateIbanSpese(azienda, banca, idRapporto){
	var rapporti = new Array();
	select=document.getElementsByName('contextSelectorData.ibanSpese')[0];
	if (select != undefined){
		if (azienda != '' && banca != '' && idRapporto !='') {
			rapporti = aziende[azienda]['banche'][banca]['rapporti'];
			cleanSelect(select);
			select.options[select.length] = new Option('', '');
			for(var i in rapporti) {
				var rapporto = rapporti[i];
				if (rapporto['ideRapportoBanca'] != idRapporto){
					select.options[select.length] = new Option(rapporto['codIbanEstRapporto'],rapporto['codIbanEstRapporto']);
				}
			}
			if (select.length == 1){
				cleanSelect(select);
				select.options[select.length] = new Option('', '');
				select.disabled = true;
			}else{
				select.disabled = false;
			}
		}else{
			cleanSelect(select);
			select.options[select.length] = new Option('', '');
			select.disabled = true;
		}
	}
}

function populateIdentificativoCdtr(azienda){
	text=document.getElementsByName('contextSelectorData.identificativoCdtr')[0];
	if (text != undefined){
			var precedente = text.value;
			var da_cambiare = false;
			if (azienda != ''){
				var identificativoCdtr = aziende[azienda]['identificativoCdtr']
				if (precedente != '') {
					for(var tempAzienda in aziende) {
						var identificativoCdtrDefault = aziende[tempAzienda]['identificativoCdtr'];
						if (precedente == identificativoCdtrDefault){
							da_cambiare = true;
						}
					}
				}else {
					da_cambiare = true;
				}
				
				if (da_cambiare){
					text.value = identificativoCdtr;
				}
				
			}else{
				text.value = '';
			}
	}
}

// funzione che compila o svuota i dettagli dell'intestatario a seconda del parametro passato
function detailIntestatario(azienda,aziendaSelezionato) {
	if (azienda != null) {
		if(aziendaSelezionato==null || aziendaSelezionato!=azienda['ideAzienda']){
			document.getElementsByName('contextSelectorData.descrizione')[0].value = azienda['desRagSocAzienda'];
			if(azienda['codFiscaleAzienda'] != null && azienda['codFiscaleAzienda'].replace(/^\s+|\s+$/g,"").length != 0 && azienda['codFiscaleAzienda'] != 'null'){
				document.getElementsByName('contextSelectorData.cf')[0].value = azienda['codFiscaleAzienda'];
			}else{
				if(azienda['codPartIvaAzienda'] != null && azienda['codPartIvaAzienda'].replace(/^\s+|\s+$/g,"").length != 0 && azienda['codPartIvaAzienda'] != 'null'){
					document.getElementsByName('contextSelectorData.cf')[0].value = azienda['codPartIvaAzienda'];
				}else{
					document.getElementsByName('contextSelectorData.cf')[0].value = '';
				}
			}
		}	
			if(document.getElementsByName('contextSelectorData.desCuc').length != 0){
			 	document.getElementsByName('contextSelectorData.cuc')[0].value = azienda['codCUCAzienda'];
			 	document.getElementsByName('contextSelectorData.desCuc')[0].value = azienda['desCUCAzienda'];
			 	document.getElementsByName('contextSelectorData.tpeCuc')[0].value = azienda['tpeCUCAzienda'];
			 	if(document.getElementsByName('contextSelectorData.sia').length != 0){
			 		document.getElementsByName('contextSelectorData.sia')[0].value = azienda['codSIAAzienda']; //inserito per TM
			 	}
			 	if(document.getElementsByName('contextSelectorData.tpeCuc')[0].value != '')
			 		gestioneTpeCuc(document.getElementsByName('contextSelectorData.tpeCuc')[0].value);
			 }
			//TODO SISTEMARE NON RICONOSCE QUESTI CAMPI
			document.getElementsByName('contextSelectorData.indirizzoIntestatario')[0].value=azienda['desIndizizzoAzienda'];
			document.getElementsByName('contextSelectorData.capIntestatario')[0].value=azienda['codCAPAzienda'];
			document.getElementsByName('contextSelectorData.provinciaIntestatario')[0].value=azienda['codProvinciaAzienda'];
			document.getElementsByName('contextSelectorData.localitaIntestatario')[0].value=azienda['desLocalitaAzienda'];
			//document.getElementsByName('contextSelectorData.idPaeseDefaultElcos')[0].value=azienda['idPaeseDefaultElcos'];
			document.getElementsByName('contextSelectorData.nazioneUic')[0].value=azienda['codUicAzienda'];
			document.getElementsByName('contextSelectorData.nazioneISO')[0].value=azienda['codIsoAzienda'];
							
			if(document.getElementsByName('contextSelectorData.sia').length != 0){
				document.getElementsByName('contextSelectorData.sia')[0].value = azienda['codSIAAzienda'];
			}
			if (document.getElementsByName('contextSelectorData.firmaMittente') && (document.getElementsByName('contextSelectorData.firmaMittente').length != 0)){
				document.getElementsByName('contextSelectorData.firmaMittente')[0].value = azienda['genFirmaAzienda'];
			}
		
	}
	else {
		document.getElementsByName('contextSelectorData.descrizione')[0].value = '';
		document.getElementsByName('contextSelectorData.cf')[0].value ='';
		if (document.getElementsByName('contextSelectorData.firmaMittente') && (document.getElementsByName('contextSelectorData.firmaMittente').length != 0)){
				document.getElementsByName('contextSelectorData.firmaMittente')[0].value ='';
		}
		if(document.getElementsByName('contextSelectorData.desCuc').length != 0){
			document.getElementsByName('contextSelectorData.cuc')[0].value = '';
			document.getElementsByName('contextSelectorData.desCuc')[0].value = '';
			document.getElementsByName('contextSelectorData.tpeCuc')[0].value = '';
			if(document.getElementsByName('contextSelectorData.sia').length != 0){
				document.getElementsByName('contextSelectorData.sia')[0].value = ''; // inserito per TM
			}
		}
		//TODO SISTEMARE NON RICONOSCE QUESTI CAMPI
		document.getElementsByName('contextSelectorData.indirizzoIntestatario')[0].value='';
		document.getElementsByName('contextSelectorData.capIntestatario')[0].value='';
		document.getElementsByName('contextSelectorData.provinciaIntestatario')[0].value='';
		document.getElementsByName('contextSelectorData.localitaIntestatario')[0].value='';
		document.getElementsByName('contextSelectorData.idPaeseDefaultElcos')[0].value='';
		document.getElementsByName('contextSelectorData.nazioneUic')[0].value='';
		document.getElementsByName('contextSelectorData.nazioneISO')[0].value='';
		if(document.getElementsByName('contextSelectorData.sia').length != 0)
			document.getElementsByName('contextSelectorData.sia')[0].value = '';
		}
		
	
}

//Funzione che dato l'IBAN trova il conto correlato
function detailIBAN(type, ibanSelezionato){
	if(ibanSelezionato!=''){
		var codiceUnivoco='';
		if (document.getElementsByName('contextSelectorData.codiceUnivoco') && (document.getElementsByName('contextSelectorData.codiceUnivoco').length != 0)){
			codiceUnivoco=document.getElementsByName('contextSelectorData.codiceUnivoco')[0].value;
		}
		var fimaMitente='';
		if (document.getElementsByName('contextSelectorData.firmaMittente') && (document.getElementsByName('contextSelectorData.firmaMittente').length != 0)){
			fimaMitente=document.getElementsByName('contextSelectorData.firmaMittente')[0].value ;
		}
		for(var tempAzienda in aziende) {
			for(var tempBanca in aziende[tempAzienda]['banche']) {
				for(var tempRapporto in aziende[tempAzienda]['banche'][tempBanca]['rapporti']) {
					if (ibanSelezionato == aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codIbanEstRapporto']) {
						document.getElementsByName('contextSelectorData.conto')[0].value=tempRapporto;
						changeConto(type);
						if(type=='update'){
							document.getElementsByName('contextSelectorData.descrizione')[0].value=descrizioneOrdinante;
							document.getElementsByName('contextSelectorData.cf')[0].value=codiceFiscale;
							if (document.getElementsByName('contextSelectorData.codiceUnivoco')){
							 	document.getElementsByName('contextSelectorData.codiceUnivoco')[0].value=codiceUnivoco;
							}
							if (document.getElementsByName('contextSelectorData.firmaMittente')){
								document.getElementsByName('contextSelectorData.firmaMittente')[0].value=fimaMitente ;
							}
						}
						if(type=='insertCopia'){
						}
						return;
					}
				}
			}
		}
	}
}

function detailIBANeAzienda(type, ibanSelezionato, idAziendaSelezionato){
	if(ibanSelezionato!=''){
		var codiceUnivoco='';
		if (document.getElementsByName('contextSelectorData.codiceUnivoco') && (document.getElementsByName('contextSelectorData.codiceUnivoco').length != 0)){
			codiceUnivoco=document.getElementsByName('contextSelectorData.codiceUnivoco')[0].value;
		}
		var fimaMitente='';
		if (document.getElementsByName('contextSelectorData.firmaMittente') && (document.getElementsByName('contextSelectorData.firmaMittente').length != 0)){
			fimaMitente=document.getElementsByName('contextSelectorData.firmaMittente')[0].value ;
		}
		for(var tempAzienda in aziende) {
			for(var tempBanca in aziende[tempAzienda]['banche']) {
				for(var tempRapporto in aziende[tempAzienda]['banche'][tempBanca]['rapporti']) {
					if (ibanSelezionato == aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codIbanEstRapporto']) {
						if (idAziendaSelezionato == aziende[tempAzienda]['ideAzienda']){
							document.getElementsByName('contextSelectorData.conto')[0].value=tempRapporto;
							changeConto(type);
							if(type=='update'){
								document.getElementsByName('contextSelectorData.descrizione')[0].value=descrizioneOrdinante;
								document.getElementsByName('contextSelectorData.cf')[0].value=codiceFiscale;
								if (document.getElementsByName('contextSelectorData.codiceUnivoco')){
								 	document.getElementsByName('contextSelectorData.codiceUnivoco')[0].value=codiceUnivoco;
								}
								if (document.getElementsByName('contextSelectorData.firmaMittente')){
									document.getElementsByName('contextSelectorData.firmaMittente')[0].value=fimaMitente ;
								}
							}
							if(type=='insertCopia'){
							}
							return;
						}
					}
					
				}
			}
		}
	}
}

function detailIBANeAziendaIncassi(type, ibanSelezionato, idAziendaSelezionato, ibanSpese){
	detailIBANeAzienda(type, ibanSelezionato, idAziendaSelezionato);
	if (ibanSpese != ''){
		if (document.getElementsByName('contextSelectorData.ibanSpese')){
			document.getElementsByName('contextSelectorData.ibanSpese')[0].value=ibanSpese;
		}
	}
}
//Funzione che dato l'IBAN trova il conto correlato
function selectIBAN(type){
	var selectIban=document.getElementsByName('contextSelectorData.iban')[0].value;
	var descrizioneOrdinante=document.getElementsByName('contextSelectorData.descrizione')[0].value
	var codiceFiscale=document.getElementsByName('contextSelectorData.cf')[0].value
	var codiceUnivoco='';
	if (document.getElementsByName('contextSelectorData.codiceUnivoco') && (document.getElementsByName('contextSelectorData.codiceUnivoco').length != 0)){
		codiceUnivoco=document.getElementsByName('contextSelectorData.codiceUnivoco')[0].value;
	}
	var fimaMitente='';
	if (document.getElementsByName('contextSelectorData.firmaMittente') && (document.getElementsByName('contextSelectorData.firmaMittente').length != 0)){
		fimaMitente=document.getElementsByName('contextSelectorData.firmaMittente')[0].value ;
	}
	if(selectIban!=''){
			for(var tempAzienda in aziende) {
				for(var tempBanca in aziende[tempAzienda]['banche']) {
					for(var tempRapporto in aziende[tempAzienda]['banche'][tempBanca]['rapporti']) {
						if (selectIban == aziende[tempAzienda]['banche'][tempBanca]['rapporti'][tempRapporto]['codIbanEstRapporto']) {
							document.getElementsByName('contextSelectorData.conto')[0].value=tempRapporto;
							changeConto(type);
							if(type=='update'){
								document.getElementsByName('contextSelectorData.descrizione')[0].value=descrizioneOrdinante;
								document.getElementsByName('contextSelectorData.cf')[0].value=codiceFiscale;
								if (document.getElementsByName('contextSelectorData.codiceUnivoco')){
								 	document.getElementsByName('contextSelectorData.codiceUnivoco')[0].value=codiceUnivoco;
								}
								if (document.getElementsByName('contextSelectorData.firmaMittente')){
									document.getElementsByName('contextSelectorData.firmaMittente')[0].value=fimaMitente ;
								}
							}
							if(type=='insertCopia'){
								//document.getElementsByName('contextSelectorData.descrizione')[0].value=descrizioneOrdinante;
								//document.getElementsByName('contextSelectorData.cf')[0].value=codiceFiscale;
								//if (document.getElementsByName('contextSelectorData.codiceUnivoco')){
								//	document.getElementsByName('contextSelectorData.codiceUnivoco')[0].value=codiceUnivoco;
								//}
								//if (document.getElementsByName('contextSelectorData.firmaMittente')){
								//	document.getElementsByName('contextSelectorData.firmaMittente')[0].value=fimaMitente ;
								//}
							}
							
							return;
						}
					}
				}
			}
		}
	
}


