// funzione che svuota la select passata come parametro
function cleanSelect(select) {
	for(var i = select.options.length-1; i >= 0; i--) {
		select.options[i] = null;
	}
}

// funzione che gestisce il cambiamento di intestatario
function changeIntestatario() {
	var idIntestatario = document.getElementsByName('contextSelectorData.id')[0].value;
	document.getElementsByName('contextSelectorData.iban')[0].value='';
	populateBanche(idIntestatario);
	populateConti(idIntestatario, '');
	
	// se l'intestatario è valido popolo i suoi dettagli altrimenti li svuoto
	if(idIntestatario != '')
		detailIntestatario(intestatari[idIntestatario],null);
	// altrimenti svuoto i dettagli di eventuali intestatari selezionati in precedenza
	else
		detailIntestatario(null,null);
}

// funzione che gestisce il cambiamento di banca
function changeBanca() {
	var idIntestatario = document.getElementsByName('contextSelectorData.id')[0].value;
	var abiBanca = document.getElementsByName('contextSelectorData.banca')[0].value;
	document.getElementsByName('contextSelectorData.iban')[0].value = '';
	populateConti(idIntestatario, abiBanca);
}

// funzione che gestisce il cambiamento di conto corrente
function changeConto(type) {
	var selectedConto=document.getElementsByName('contextSelectorData.conto')[0].value;
	var selectedIntestatario=document.getElementsByName('contextSelectorData.id')[0].value
	// se il conto è vuoto svuoto anche i suoi dettagli
	if (selectedConto == '') {
		document.getElementsByName('contextSelectorData.iban')[0].value='';
	}
	// altrimenti cerco a chi appartiene il conto selezionato e gestisco tutti gli altri campi di conseguenza
	else {
		for(var tempIntestatario in intestatari) {
			for(var tempBanca in intestatari[tempIntestatario]['banche']) {
				for(var tempConto in intestatari[tempIntestatario]['banche'][tempBanca]['conti']) {
					if (tempConto == selectedConto) {
						detailIntestatario(intestatari[tempIntestatario],selectedIntestatario);
						
						// avendo ripopolato le select devo riselezionare anche i valori scelti
							if(type=='updateDistinta'){
								document.getElementsByName('contextSelectorData.id')[0].value=intestatari[tempIntestatario]['descrizione'];
								document.getElementsByName('contextSelectorData.banca')[0].value = intestatari[tempIntestatario]['banche'][tempBanca]['descrizione'];
								document.getElementsByName('contextSelectorData.abi')[0].value = intestatari[tempIntestatario]['banche'][tempBanca]['abi'];
								document.getElementsByName('contextSelectorData.cab')[0].value = intestatari[tempIntestatario]['banche'][tempBanca]['cab'];
								document.getElementsByName('contextSelectorData.descrizioneRapporto')[0].value = intestatari[tempIntestatario]['banche'][tempBanca]['conti'][tempConto]['descrizioneRapporto'];
								document.getElementsByName('contextSelectorData.conto')[0].value=intestatari[tempIntestatario]['banche'][tempBanca]['conti'][tempConto]['descCc'];
								document.getElementsByName('contextSelectorData.iban')[0].value = intestatari[tempIntestatario]['banche'][tempBanca]['conti'][tempConto]['iban'];
								
							
							}else{
								populateBanche(tempIntestatario)
								populateConti(tempIntestatario, tempBanca);
								document.getElementsByName('contextSelectorData.id')[0].value=tempIntestatario;
								document.getElementsByName('contextSelectorData.banca')[0].value = tempBanca;
								document.getElementsByName('contextSelectorData.conto')[0].value=selectedConto;
								document.getElementsByName('contextSelectorData.iban')[0].value = intestatari[tempIntestatario]['banche'][tempBanca]['conti'][tempConto]['iban'];
							
							//controllo se presente il campo codiceUnivoco e lo popolo con SIA+ABI+TIMESTAMP DI ADESSO
							if (document.getElementsByName('contextSelectorData.codiceUnivoco') && (document.getElementsByName('contextSelectorData.codiceUnivoco').length != 0))
							{ 
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
						}
						return;
					}
				}
			}
		}
	}
}

// funzione che popola la select delle banche con tutte le banche esistenti o con solo quelle di un intestatario
// a seconda dei parametri passati
function populateBanche(intestatario) {
	var banche = new Array();
	if (intestatario == '') {
		for(var tempIntestatario in intestatari) {
			for(var tempBanca in intestatari[tempIntestatario]['banche']) {
			//Tolgo il caso in cui un intestatario non ha banche
				if(tempBanca!=''){
					banche[tempBanca] = intestatari[tempIntestatario]['banche'][tempBanca];
				}
				
			}
		}
	}
	else {
		for(var tempBanca in intestatari[intestatario]['banche']) {
			banche[tempBanca] = intestatari[intestatario]['banche'][tempBanca];
		}
	}
	
	select = document.getElementsByName('contextSelectorData.banca')[0];
	cleanSelect(select);
	select.options[select.length] = new Option('', '');
	for(var i in banche) {
		var banca = banche[i];
		select.options[select.length] = new Option(banca['descrizione'], banca['idBanca']);
	}
}

// funzione che popola la select dei conti correnti con tutti i conti, con solo quelli di un intestatario o di una
// sola banca a seconda dei parametri passati
function populateConti(intestatario, banca) {
	var conti = new Array();
	if (intestatario == '' && banca == '') {
		for(var tempIntestatario in intestatari) {
			for(var tempBanca in intestatari[tempIntestatario]['banche']) {
				for(var tempConto in intestatari[tempIntestatario]['banche'][tempBanca]['conti']) {
				//Tolgo il caso in cui un intestatario non ha banche e non ha conti
					if(tempConto!=''){
						conti[tempConto] = intestatari[tempIntestatario]['banche'][tempBanca]['conti'][tempConto];
					}
					
				}
			}
		}
	}
	else if (intestatario == '' && banca != '') {
		for(var tempIntestatario in intestatari) {
			if (intestatari[tempIntestatario]['banche'][banca]) {
				for(var tempConto in intestatari[tempIntestatario]['banche'][banca]['conti']) {
					conti[tempConto] = intestatari[tempIntestatario]['banche'][banca]['conti'][tempConto];
				}
			}
		}
	}
	else if (intestatario != '' && banca == '') {
		for(var tempBanca in intestatari[intestatario]['banche']) {
			for(var tempConto in intestatari[intestatario]['banche'][tempBanca]['conti']) {
				conti[tempConto] = intestatari[intestatario]['banche'][tempBanca]['conti'][tempConto];
			}
		}
	}
	else if (intestatario != '' && banca != '') {
		conti = intestatari[intestatario]['banche'][banca]['conti'];
	}
	
	//select = document.getElementsByName('bonificoSepa.grpHdr.initgPty.id.orgId.prtryId.id')[0];
	select=document.getElementsByName('contextSelectorData.conto')[0];
	cleanSelect(select);
	select.options[select.length] = new Option('', '');
	for(var i in conti) {
		var conto = conti[i];
		select.options[select.length] = new Option(conto['descCc'], i);
	}
}

// funzione che compila o svuota i dettagli dell'intestatario a seconda del parametro passato
function detailIntestatario(intestatario,intestatarioSelezionato) {
	
	if (intestatario != null) {
		if(intestatarioSelezionato==null || intestatarioSelezionato!=intestatario['id']){
			document.getElementsByName('contextSelectorData.descrizione')[0].value = intestatario['descrizione'];
			document.getElementsByName('contextSelectorData.cf')[0].value = intestatario['codiceFiscale'];
		}	
			if(document.getElementsByName('contextSelectorData.cuc').length != 0){
			 	document.getElementsByName('contextSelectorData.cuc')[0].value = intestatario['cuc'];
			 }
			//TODO SISTEMARE NON RICONOSCE QUESTI CAMPI
			document.getElementsByName('contextSelectorData.indirizzoIntestatario')[0].value=intestatario['indirizzoIntestatario'];
			document.getElementsByName('contextSelectorData.capIntestatario')[0].value=intestatario['capIntestatario'];
			document.getElementsByName('contextSelectorData.provinciaIntestatario')[0].value=intestatario['provinciaIntestatario'];
			document.getElementsByName('contextSelectorData.localitaIntestatario')[0].value=intestatario['localitaIntestatario'];
			document.getElementsByName('contextSelectorData.idPaeseDefaultElcos')[0].value=intestatario['idPaeseDefaultElcos'];
			document.getElementsByName('contextSelectorData.nazioneUic')[0].value=intestatario['nazioneUic'];
			document.getElementsByName('contextSelectorData.nazioneISO')[0].value=intestatario['nazioneISO'];
							
			if(document.getElementsByName('contextSelectorData.sia').length != 0){
				document.getElementsByName('contextSelectorData.sia')[0].value = intestatario['sia'];
			}
			if (document.getElementsByName('contextSelectorData.firmaMittente') && (document.getElementsByName('contextSelectorData.firmaMittente').length != 0)){
				document.getElementsByName('contextSelectorData.firmaMittente')[0].value = intestatario['firmaMittente'];
			}
		
	}
	else {
		document.getElementsByName('contextSelectorData.descrizione')[0].value = '';
		document.getElementsByName('contextSelectorData.cf')[0].value ='';
		if (document.getElementsByName('contextSelectorData.firmaMittente') && (document.getElementsByName('contextSelectorData.firmaMittente').length != 0)){
				document.getElementsByName('contextSelectorData.firmaMittente')[0].value ='';
		}
		if(document.getElementsByName('contextSelectorData.cuc').length != 0){
			document.getElementsByName('contextSelectorData.cuc')[0].value = '';
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
			for(var tempIntestatario in intestatari) {
				for(var tempBanca in intestatari[tempIntestatario]['banche']) {
					for(var tempConto in intestatari[tempIntestatario]['banche'][tempBanca]['conti']) {
						if (selectIban == intestatari[tempIntestatario]['banche'][tempBanca]['conti'][tempConto]['iban']) {
							document.getElementsByName('contextSelectorData.conto')[0].value=tempConto;
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
								document.getElementsByName('contextSelectorData.descrizione')[0].value=descrizioneOrdinante;
								document.getElementsByName('contextSelectorData.cf')[0].value=codiceFiscale;
								if (document.getElementsByName('contextSelectorData.codiceUnivoco')){
								 	document.getElementsByName('contextSelectorData.codiceUnivoco')[0].value=codiceUnivoco;
								}
								if (document.getElementsByName('contextSelectorData.firmaMittente')){
									document.getElementsByName('contextSelectorData.firmaMittente')[0].value=fimaMitente ;
								}
							}
							
							return;
						}
					}
				}
			}
		}
	
}


