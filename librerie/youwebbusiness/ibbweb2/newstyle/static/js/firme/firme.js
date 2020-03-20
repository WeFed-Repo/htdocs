//FUNZIONI PER LA PAGINA listEsiti.jsp per le operazioni di Firma ed Elimina

//setting parametri generali (non all'interno del ciclo) per la funzione di firma
function setSignParameter(stato,tipo,intest, currDistintaId)
{


	//devo eseguire i controlli sugli alert come per il bottone conferma (qui vanno gestiti solo i WR, KR)
	//*** IMPORTANTISSIMO ***
	//mostra gli alert o i confirm che provengono dai campi CodSegnalUtente della stored elenco_generale;
	//il testo dei messaggi e' configurato nel file di properties. Dalla stored arriva il codice del messaggio nel formato
	//WC_NSDD dove WC=tipo di messaggio (confirm o alert) NSDD=codice del msg presente nel file di properties
	//Il messaggio viene popolato da FirmaDistinteAction.lista
	if (document.getElementById('check_firma_'+currDistintaId).checked)
	{
		var goOn = manageAlertSegnalUtente(currDistintaId, 'row'); 
	}

						
	//document.getElementById('STATO').value=stato;
	//document.getElementById('TIPO').value=tipo;
	//document.getElementById('intestatario').value=intest;
	
}

//quando si checka un checkbox per la firma si deve deselezionare il checkbox della elimina
function uncheckElimina(idSupportoDispositivo)
{
	if (document.getElementById('check_elimina_'+idSupportoDispositivo).checked)
	{
		document.getElementById('check_elimina_'+idSupportoDispositivo).checked=false;
	}
	
}

function escapeRegExp(str) {
  return str.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
}

function replaceAll(find, replace, str) {
  return str.replace(new RegExp(escapeRegExp(find), 'g'), replace);
}

//quando si checka un checkbox per elimina si deve deselezionare il checkbox della firma
function uncheckFirma(idSupportoDispositivo)
{	
	if ((document.getElementById('check_firma_'+idSupportoDispositivo)!=null))
	{
		if (document.getElementById('check_firma_'+idSupportoDispositivo).type=='checkbox')
		{
			if (document.getElementById('check_firma_'+idSupportoDispositivo).checked)
			{
				document.getElementById('check_firma_'+idSupportoDispositivo).checked=false;
			}
		}
	}
}




//mostra gli alert o i confirm che provengono dai campi CodSegnalUtente della stored elenco_generale
//return goOn = 1 se si deve tornare all'elenco
//return goOn = 2 se si puo continuare a visualizzare i messaggi successivi
//il parametro di input rowOrConfirm mi dice se devo gestire gli eventi sulla riga (onClick sul checkbox firma) oppure sul bottone Conferma
function manageAlertSegnalUtente(currDistintaId, rowOrConfirm)
{

	//WC, WR, KR, KC	

	var tipoAlertUtente1 = document.getElementById('tipoAlertSegnalUtente1_'+currDistintaId).value;
	var tipoAlertUtente2 = document.getElementById('tipoAlertSegnalUtente2_'+currDistintaId).value;
	var tipoAlertUtente3 = document.getElementById('tipoAlertSegnalUtente3_'+currDistintaId).value;
	var tipoAlertUtente4 = document.getElementById('tipoAlertSegnalUtente4_'+currDistintaId).value;						
	//messaggi di alert che dipendono dalle valorizzazioni delle colonne CSEGUT1_Cod_Segnal_Utente_1 (della stored elenco_generale)
	//questi messaggi sono stati inseriti da FirmaDistinteAction.lista
	var msgSegnalUtente1 = document.getElementById('msgSegnalUtente1_'+currDistintaId).value;
	var msgSegnalUtente2 = document.getElementById('msgSegnalUtente2_'+currDistintaId).value;
	var msgSegnalUtente3 = document.getElementById('msgSegnalUtente3_'+currDistintaId).value;
	var msgSegnalUtente4 = document.getElementById('msgSegnalUtente4_'+currDistintaId).value;
	//codici dei messaggi presenti nel file di properties (VLOD, SCVL, VLFU ETC)
	var codMsgSegnalUtente1 = document.getElementById('codMsgSegnalUtente1_'+currDistintaId).value;
	var codMsgSegnalUtente2 = document.getElementById('codMsgSegnalUtente2_'+currDistintaId).value;
	var codMsgSegnalUtente3 = document.getElementById('codMsgSegnalUtente3_'+currDistintaId).value;
	var codMsgSegnalUtente4 = document.getElementById('codMsgSegnalUtente4_'+currDistintaId).value;	

	//sostituisco [apice] presente nel testo con '
	msgSegnalUtente1 = replaceAll('[apice]','\'',msgSegnalUtente1);
	msgSegnalUtente2 = replaceAll('[apice]','\'',msgSegnalUtente2);
	msgSegnalUtente3 = replaceAll('[apice]','\'',msgSegnalUtente3);
	msgSegnalUtente4 = replaceAll('[apice]','\'',msgSegnalUtente4);
	
	var goOn;
	
	goOn = chooseVisualizationSegnalUtente(msgSegnalUtente1, tipoAlertUtente1, codMsgSegnalUtente1, currDistintaId, rowOrConfirm );
	
	if (goOn == 2 )
		goOn = chooseVisualizationSegnalUtente(msgSegnalUtente2, tipoAlertUtente2, codMsgSegnalUtente2, currDistintaId, rowOrConfirm  );
		
	if (goOn == 2 )
		goOn = chooseVisualizationSegnalUtente(msgSegnalUtente3, tipoAlertUtente3, codMsgSegnalUtente3, currDistintaId, rowOrConfirm  );
		
	if (goOn == 2 )
		goOn = chooseVisualizationSegnalUtente(msgSegnalUtente4, tipoAlertUtente4, codMsgSegnalUtente4, currDistintaId, rowOrConfirm  );
		
	
	return goOn;	
						
}

//visualizza il messaggio scegliendo in base alla tipologia se e' un alert o un confirm
//retCode=1 si deve ritornare alla lista
//retCode=2 si puo continuare con i messaggi di alert
//GESTIONE PARTICOLARE SOLO PER codMsg=VLOD: visualizzare il messaggio solo se le ore sono > 11.00
//il parametro di input rowOrConfirm mi dice se devo gestire gli eventi sulla riga (onClick sul checkbox firma) oppure sul bottone Conferma
function chooseVisualizationSegnalUtente(msg, tipo, codMsg, currDistintaId, rowOrConfirm)
{

	var retCode = 2;


	if ( (msg != '')  && (msg != null) )
		{
		
			//INIZIO gestione caso particolare VLOD
		/*
			if (codMsg == 'VLOD')
			{
				var viewVLOD = checkVLODTime(); //confronto se sono gia' passate le 11.00
				if (viewVLOD == 1){ //se sono passate le 11.00 allora visualizzo il messaggio
					if(! confirm(msg) ){
						uncheckFirma(currDistintaId); //LO TRATTO COME UN WR (WORNING RIGA)
					}
					retCode =  1; // in entrambi i casi si ritona alla lista						 
					
				}
				
			}
			*/
			//FINE gestione caso particolare VLOD	

			
			//GESTIONE DEI MESSAGGI PER ONCLICK SUL CHECKBOX DELLA FIRMA
			if (rowOrConfirm == 'row')
			{
				//WR  OK=accetta il checkbox firma e si torna alla lista  CANCEL=elimina il checkbox della firma e si torna alla lista
				if (tipo == 'WR') //WARNING RIGA
				{
					 if(! confirm(msg) ){
						uncheckFirma(currDistintaId);
						}
						retCode =  1; // in entrambi i casi si ritona alla lista
				}
				 //KR  OK=elimina il check e torna alla lista 
				else if (tipo == 'KR') //KO RIGA
				{
				  alert(msg);
				  uncheckFirma(currDistintaId);
				  retCode =  1;
				  
				}			
			}
			
			
			//GESTIONE DEI MESSAGGI SU BOTTONE CONFERMA
			if (rowOrConfirm == 'confirm')
			{
				//WC  OK=va avanti  CANCEL=torna alla lista
				if (tipo == 'WC') //WARNING CONFERMA
				{
					if(! confirm(msg) )
						retCode = 1;
					else
						retCode =  2;
										
				}		
				//KC  OK=torna alla lista
				else if (tipo == 'KC') //KO CONFERMA
				{
				 alert(msg);
				 retCode =  1;
				}	
			}		
			

		}
		
		return retCode;
}

//confronta se l'orario attuale e' maggiore delle ore 11.00
//return 1 = l'ora attuale e' maggiore delle 11.00 (quindi visualizzare il messaggio VLOD)
function checkVLODTime()
{

	var currentdate = new Date();
	var aaaa = currentdate.getFullYear();
	var MM= currentdate.getMonth();
	var dd = currentdate.getDate();
				
    var preimpostata = new Date(aaaa, MM, dd, 11,00,00); //oggi alle 11

     
    var diff = preimpostata.getTime()  - currentdate.getTime();
     
    //Se la data preimpostata è già passata
    if(diff <= 0){
		return 1;
    }
    //Se la data preimpostata non è ancora passata
    else {
		return -1;
    }
}

  
  
  


					function myCheckForm(tipo)
					{  	
					if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; } 
					
		
					var dispoList= Array();
					var oneCheckedFirm = false;
					var oneCheckedDelete = false;
					var noChecked = true;
					var arrElementsCount = document.masterform.elements.length;
					var tipoALIBAN = 11;
					var tipoALRID = 10;
					var numberCheckedFirm=0;
					var numberDispoInCheckedFirm=0;
					
					var max_numero_disposizioni_firma = document.getElementById('max_numero_disposizioni_firma').value;
					var max_numero_distinte_firma = document.getElementById('max_numero_distinte_firma').value;

					
						for (var i=0; i<arrElementsCount; i++)
						{
						
						
							// Controllo che non esista almeno un checkbox ceccato
							if (document.masterform.elements[i].type == 'checkbox' && document.masterform.elements[i].name.substring(0,3) != 'chk'&& document.masterform.elements[i].checked)
								noChecked = false;
						
						
							// Controllo che esista almeno un checkbox delete ceccato
							if (document.masterform.elements[i].type == 'checkbox' && document.masterform.elements[i].value == 'delete' && document.masterform.elements[i].checked)
								oneCheckedDelete = true;
							if (document.masterform.elements[i].type == 'checkbox' && document.masterform.elements[i].value == 'firm' && document.masterform.elements[i].checked)
								oneCheckedFirm = true;
								
							
							if (document.masterform.elements[i].type == 'checkbox' && document.masterform.elements[i].value == 'firm' && document.masterform.elements[i].checked)
							{
								numberCheckedFirm++;
								var currDistintaId = document.masterform.elements[i].name;

								var numDispoElementId = 'dispo_' + currDistintaId;
								var numDispo = document.getElementById(numDispoElementId).value;
								//var numDispo = numDispoElement.value();

								if (numDispo) {
									var s = numDispo.replace(/^\s+|\s+$/g, '');
									var n = parseInt(s, 10);
									numberDispoInCheckedFirm = numberDispoInCheckedFirm + n;
								}
								
							}

						}

						//se non ci sono operazioni di delete allora controllo quelle di firma
						if (oneCheckedFirm)
						{
	
							//*** IMPORTANTISSIMO ***
							//mostra gli alert o i confirm che provengono dai campi CodSegnalUtente della stored elenco_generale;
							//il testo dei messaggi e' configurato nel file di properties. Dalla stored arriva il codice del messaggio nel formato
							//WC_NSDD dove WC=tipo di messaggio (confirm o alert) NSDD=codice del msg presente nel file di properties
							//Il messaggio viene popolato da FirmaDistinteAction.lista
							var goOn = manageAlertSegnalUtente(currDistintaId, 'confirm'); 

							if (goOn == 1){
								return false;
							}
						}


						if (noChecked)
						{
							alert('Nessuna occorrenza selezionata.');
							return false;
						}
						
						if (oneCheckedDelete && oneCheckedFirm)
						{
						  alert('Selezionare solo operazioni dello stesso tipo');
						  return false;
						}
						
						//controllo numero massimo disposizioni firmabili
						//PRENDERE IL PARAMETRO DA CONFIG
				 		if ((numberCheckedFirm > 1) && (numberDispoInCheckedFirm > max_numero_disposizioni_firma))
						{
							//var s='Attenzione! E\' possibile firmare contemporaneamente fino a %N% disposizioni. Diminuire il numero di distinte da firmare contemporaneamente.';
							var s=document.getElementById('msg_maxdisposizioni').value;
							s=s.replace("%N%",max_numero_disposizioni_firma);
							alert(s);
							return false;
						}						

						//PRENDERE IL PARAMETRO DA CONFIG
						if (numberCheckedFirm>max_numero_distinte_firma ){
							//var s='Attenzione! E\' possibile firmare contemporaneamente fino a %N% distinte';
							var s=document.getElementById('msg_maxdistinte').value;
							s=s.replace("%N%",max_numero_distinte_firma);
							alert(s);
							return false;
						}


						// Se c'e' almeno un checkbox di tipo elimina chiedo la conferma per proseguire con la richiesta.
						if (oneCheckedDelete)
						{
							scelta = confirm('Confermi l\'eliminazione degli elementi selezionati?');
							if(scelta){
								document.masterform.action='/ibbweb2/firma/deleteDistinte.action';
								//compongo gli id distinta (del nuovo) 
								var id='';
								
								for (var i=0; i<arrElementsCount; i++) 
								{
									if (document.masterform.elements[i].type == 'checkbox' && document.masterform.elements[i].value == 'delete' && document.masterform.elements[i].checked)  
									{
									    var curDistintaId = document.masterform.elements[i].name;
										//recupero la data aggiornamento
										var dataAgg = document.getElementById('dtagg_'+curDistintaId).value;
										var tipoDisp = document.getElementById('tipodisp_'+curDistintaId).value;
										var idDist = document.getElementById('iddist_'+curDistintaId).value;
										
										id= curDistintaId + '@' + dataAgg + '@' + tipoDisp + '@' + idDist + '|' + id;
									}
								}
			
								id = id.substring(0,id.length -1);					
								document.masterform.id.value = id;
								return true;
							}
							else
								return false;
						}
						
						

						if (oneCheckedFirm)
						{

						
							var id='';
							//typeIds serve per dire al vecchio quali sono gli id delle distinte e i relativi tipi da firmare
							//Es. id:tipo|id:tipo|id:tipo
							var typeIds='';
							
							for (var i=0; i<arrElementsCount; i++) 
							{
								if (document.masterform.elements[i].type == 'checkbox' && document.masterform.elements[i].value == 'firm' && document.masterform.elements[i].checked)  
								{
									var curDistintaId = document.masterform.elements[i].name;
								
									id= id + curDistintaId +'|';
									var tipoDisp = document.getElementById('codtipodisp_'+curDistintaId).value; 
									typeIds= typeIds + document.masterform.elements[i].name + ':' + tipoDisp + '|';
								}
						    }
		
						    id = id.substring(0,id.length -1);
							typeIds = typeIds.substring(0,typeIds.length -1);
							
							
							//alert(id);
							document.masterform.action = "/ibbweb/insertcarnet";
							document.masterform.id.value = id;
							document.masterform.typeids.value = typeIds;
							
							
							//popolo il form per il passaggio dei parametri in POST verso la funzione di Firma
							//document.firmaDistintaForm['TIPO'].value=tipo;
							//document.firmaDistintaForm['intestatario'].value=intest;
							//document.firmaDistintaForm['id_supporto_disp'].value=idDisp;
							
							//document.getElementById('STATO').value=stato;
							//document.getElementById('TIPO').value=tipo;
							//document.getElementById('intestatario').value=intest;

	
							var ce = false;
							var sepa = false;
							var dataScadenzaRiga = null;
						    var fibWarning = false;
							for(var i=0; i < document.masterform.elements.length; i++)
						    {
							  if ( (document.masterform.elements[i].value=='firm') && (document.masterform.elements[i].checked) )
							  {
							    for(var j=0; j<dispoList.length; j++) {
							      if ( ( dispoList[j].id==document.masterform.elements[i].name )&&((dispoList[j].tipo =='63'  )||(dispoList[j].tipo =='200'  )||(dispoList[j].tipo =='201'  ) )) 
							      {
							        ce|=(!checkValidDate(dispoList[j].data_pagamento))||(!checkValidDate(dispoList[j].data_esecuzione));
							      }
							      else{
							       if (( dispoList[j].id==document.masterform.elements[i].name )&&(dispoList[j].tipo =='28'  )){
								        dataScadenzaRiga = dateObject(dispoList[j].data_pagamento);
								        ce = scadenzaMinoreUgualeOggi(dataScadenzaRiga);
							       }
							       else if (( dispoList[j].id==document.masterform.elements[i].name )&&(dispoList[j].tipo =='151'  )){
								      	ce|=(!checkValidDate(dispoList[j].data_esecuzione));
								      	sepa = true;
							       }
							       else if (( dispoList[j].id==document.masterform.elements[i].name )&&(dispoList[j].tipo =='152'  )){
								      	ce|=(!checkValidDate(dispoList[j].data_esecuzione));
								      	sepa = true;
							       }
							       else if (( dispoList[j].id==document.masterform.elements[i].name )&&(dispoList[j].tipo =='171'  )){
								      	ce|=(!checkValidDate(dispoList[j].data_esecuzione));
								      	sepa = true;
							       }
							      }
							    }



							  }	
						    }
								
		

var messaggioControlloDate = 'Attenzione!!!\nUna o piu\' disposizioni potrebbero contenere una data esecuzione e/o\ndata valuta banca beneficiario precedenti alla data odierna.\nSi desidera comunque procedere?';
			
							if (ce){ 

								if(sepa){

									if(!confirm("Attenzione!!!\nUna o piu\' distinte potrebbero avere una data esecuzione precedenti alla data odierna.\nSi desidera comunque procedere?"))
									{ return false; }
								}else{
	
									if(!confirm(messaggioControlloDate))
									{  return false;}									
								}
							}
							
							
						 	//return true;
							submitCount++;
														
						}
					}
					
	/* Deseleziona tutti i checkBox */
	function clearCheckBox()
	{
		for(var i=0; i<document.masterform.elements.length; i++)
		{
			if ( (document.masterform.elements[i].value=='disaggregate') || (document.masterform.elements[i].value=='delete') || (document.masterform.elements[i].value=='firm'))
				document.masterform.elements[i].checked=0;
		}
	}

					
					

function openEsitiPopUp(url, titolo, larghezza, altezza)
{
    var sinistra = 0;
    var sopra = 0;
    var popupStampa;
    if (titolo=='Dettaglio Esiti') {
      if(window.screenX) {
        sinistra = (window.outerWidth/2)+window.screenX-(larghezza/2);
        sopra = (window.outerHeight/2)+window.screenY-(altezza/2);
      } else {
        // Per Internet Explorer
        sinistra = (screen.availWidth/2)-(larghezza/2);
        sopra = (screen.availHeight/2)-(altezza/2);
      }
      parametri = "height="+altezza+",width="+larghezza+",resizable=yes,scrollbars=no,screenX="+sinistra+",left="+sinistra+",screenY="+sopra+",top="+sopra+",dependent=yes";
      var popupStampa = window.open(url, "DettaglioEsito", parametri);
           
    }
    if(titolo=='Stampa') {
      if(window.screenX) {
        sinistra = (window.outerWidth/2)+window.screenX-(larghezza/2);
        sopra = (window.outerHeight/2)+window.screenY-(altezza/2);
      } else {
        // Per Internet Explorer
        sinistra = (screen.availWidth/2)-(larghezza/2);
        sopra = (screen.availHeight/2)-(altezza/2);
      }
      parametri = "height="+altezza+",width="+larghezza+",resizable=yes,scrollbars=no,screenX="+sinistra+",left="+sinistra+",screenY="+sopra+",top="+sopra+",dependent=yes";
      popupStampa = window.open(url, "Stampa", parametri);
    }
}

/*
 *
 * Utilizzata per la paginazione
 */
function submit(action) {
    if (document.masterform['pagesize'].value!='') action = action+ "&esitiPageSize="+document.masterform['pagesize'].value;
    document.forms['masterform'].action = action; 
    document.forms['masterform'].submit();          
}

function getFirstItemForPage(requestedPage)
{
        var requestedPageNumber = ((requestedPage == undefined) || (isNaN(requestedPage))) ? 1 : requestedPage;
        var esitiPageSize = (stringIsEmpty(document.masterform['pagesize'].value)) ? getQueryParam('esitiPageSize') : document.masterform['pagesize'].value;
        var first_item = ((esitiPageSize * ( requestedPageNumber - 1)));
        if ((!first_item) || (isNaN(first_item))) {
            first_item = 0;
        }
        return first_item;
}

function navigaPerPagina() {
    var current = location.search;
    // pagina alla quale vuole andare utente
    var p = document.masterform['pagina'].value;
    if (stringIsEmpty(p)) {
        return;
    } else if (p == 0) {
        p = 1;
        document.masterform['pagina'].value = '1';
    }
    else
    {                                               
        var numRecord = document.masterform['numrecord'].value;
        var numRecordPerPagine = document.masterform['pagesize'].value;
        var maxNumPagine = 0;
        if(numRecordPerPagine > 0)
        {
            if ((numRecord % numRecordPerPagine) == 0)
                maxNumPagine = numRecord/numRecordPerPagine;
            else
                maxNumPagine = Math.ceil(numRecord/numRecordPerPagine); 
        }
        if ((p > maxNumPagine) && (maxNumPagine > 1))
        {
            p = maxNumPagine;
            document.masterform['pagina'].value = maxNumPagine;
        }
    }
    // inserimento in querystring
    var dtPageParam = document.masterform['nomeCampoPagina'].value;
    var dtpageQs = getQsForParam(dtPageParam);
    var newDtPageQs = dtPageParam+'='+p;
    if (dtpageQs) {
      current = current.replace(dtpageQs, newDtPageQs);
    } else {
      current += '&'+newDtPageQs;
    }
    // offset
    var first_item = getFirstItemForPage(p);
    var offsetParam = 'esitiOffset';
    var offsetQs = getQsForParam(offsetParam);
    var newOffsetQs = offsetParam+'='+first_item;
    if (offsetQs) {
      current = current.replace(offsetQs, newOffsetQs);
    } else {
      current += '&'+newOffsetQs;
    }
    var url = location.protocol + "//" + location.host + '/ibbweb2/firma/listaFirmaDistinte.action'; //location.pathname;
    var queryString = ( (current) ? ((current.indexOf('?') === 0) ? current : '?'+current) : '');
    location.href = url + queryString;
}

    function onlyRealNumbers(evento){   
        if(window.event || !evento.which) // IE o NE?
        {
            tasto = evento.keyCode; // per IE
        }
        else if(evento) // netscape
        {
            tasto = evento.which;
        }
        
        // gestione caso tasto backspace e tab
        if (tasto == 8 || tasto == 9 )
        {
            return true;
        }   

        if ((tasto < 48 || tasto > 57) && tasto != 13)
        {
            return false;
        }   

        if( tasto == 13  )//premuto invio
        {
            //navigaPerPagina();
            //occorre eseguire una chiamata alla submit opportunamente modificata   
            return false;
        }
        return true;  
    }

    function goToPage(valorePagina) {
    	var dtSortParam = document.masterform['dtSort'].value;
        var query;
        var p = valorePagina;
        //log.warn('gotToPage(): '+p);
        //document.getElementById('link').value = '${action}'+'.action';
        var link = p;
        //link=link.substring(link.indexOf('(')+2,link.indexOf(')')-1);
        var url;
        var pos = link.indexOf('?');

        if(pos >= 0) {
            query = link.substring(pos+1);
            url = link.substring(0, pos);
        } else {
            query = "";
            url = link;
        }
        
        var keyValuePairs = [];
        var requestedPageParam = document.masterform['nomeCampoPagina'].value;
        //"<%= new org.displaytag.util.ParamEncoder("esiti").encodeParameterName(org.displaytag.tags.TableTagParameters.PARAMETER_PAGE) %>";
        var requestedPageNumber = 1;
        
        //var p;
        if(query) {
            var qParams = query.split("&");
            for(var i=0; i < qParams.length; i++) {
                keyValuePairs[i] = qParams[i];
                //log.debug('keyValuePairs:   '+keyValuePairs[i]);
                /*
                if (keyValuePairs[i].substring(keyValuePairs[i].length-4)=="-p=1") {
                    keyValuePairs[i] = keyValuePairs[i].substring(0,keyValuePairs[i].length-4)+'-p='+p;
                } 
                if (keyValuePairs[i].substring(keyValuePairs[i].length-3)=="-p=") {
                    keyValuePairs[i] = keyValuePairs[i].substring(0,keyValuePairs[i].length-3)+'-p='+p;
                }
                if (keyValuePairs[i].indexOf(requestedPageParam) === 0) {
                    p = keyValuePairs[i].substring(keyValuePairs[i].indexOf('=')+1);
                }
                */
            }
        }

        var first_item = getFirstItemForPage(p);
        document.forms[0].elements['first_item_count'].value = first_item;
        var eoElement = document.forms[0].elements['esitiOffset'];
        eoElement.value = first_item;
        tmp = '';
        // --- offset
        var _offset = false;
        var _dtSorted = false;
        for(var i=0; i < keyValuePairs.length ; i++) {
            //log.warn(' ===== '+keyValuePairs[i]);
            if (/=$/.test(keyValuePairs[i])) {
                log.info('Skipping empty var "'+keyValuePairs[i]+'"');
            } else if (keyValuePairs[i].indexOf('tipodispo=') == 0){
                log.info('Skipping tipodispo var "'+keyValuePairs[i]+'"');
            } else if (keyValuePairs[i].indexOf('fromFilter=') == 0){
                log.info('Skipping fromFilter var "'+keyValuePairs[i]+'"');
            } else {
                tmp += keyValuePairs[i]+'&';
            }
            if (keyValuePairs[i].indexOf('esitiOffset') === 0) {
                _offset = true;
            }
            if (keyValuePairs[i].indexOf(dtSortParam+'=') === 0) {
                _dtSorted = true;
            }
        }
        if (!_offset) {
            tmp += 'esitiOffset='+first_item+'&';
        }
        if (!_dtSorted) {
            tmp += 'fromFilter=true&';
        }
        // --- tipo dispo
        /*
        if (document.forms[0].elements['tipodispo'] != null) {
          var tipodispo = document.forms[0].elements['tipodispo'].value;
          tmp += 'tipodispo='+tipodispo+'&';
        }
        */
        tmp = tmp.substring(0,tmp.length -1 );
        //log.warn('tmp: '+tmp);
        
        //document.forms['masterform'].action = url+'?'+tmp; 
        //document.forms['masterform'].submit();
        location.href = url+'?'+tmp;
    }

    function setItemPage(number, action)
    {   
        document.masterform.pagesize.value=number;
        submit(action);
    }
    
    function setColorItem()
    {
        if(is_ie4up)
         {
            document.all['item_10'].className = 'testoBlackSmallBold';
            document.all['item_20'].className = 'testoBlackSmallBold';
            document.all['item_50'].className = 'testoBlackSmallBold';
            document.all['item_100'].className = 'testoBlackSmallBold';
            document.all['item_'+document.masterform.max_items_number.value].className = 'testoRedSmallBold';
        }
        else
        {
            document.links['item_10'].className = 'testoBlackSmallBold';
            document.links['item_20'].className = 'testoBlackSmallBold';
            document.links['item_50'].className = 'testoBlackSmallBold';
            document.links['item_100'].className = 'testoBlackSmallBold';
            document.links['item_'+document.masterform.max_items_number.value].className = 'testoRedSmallBold';
        }
    }
    
 function fincaturaTitolo(){
    var k=0;    
    var all = document.getElementsByTagName('*');   
    for(i=0; i<all.length; i++ )
    if (all[i].className=="sottoTitoloTabella fincaturaTabella")    
    {
    newnode=document.createElement("img");
    newnode.setAttribute('src',"../static/images/pager/fincatura-viola.gif");
    newnode.setAttribute('name',"dynamic");
    newnode.setAttribute('id',"dynamic"+k);
    all[i].appendChild(newnode);
    k++; 
    }
}