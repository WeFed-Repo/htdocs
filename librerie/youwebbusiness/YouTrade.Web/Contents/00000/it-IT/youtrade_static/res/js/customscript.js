/** 
 * Copyright 2015 Enterprise S.p.A. (Rome, Italy).  
 * Use is subject to license terms. All rights reserved. 
 *  
 *  http://www.enterprisespa.it 
 */

var iniz, fine, PATH, STATIC_FILES_PATH;
refreshPATH();
var msgwindow;
var back = ""; 								// parametro back
var PAR_BACK = "&CBACKY=Y&ABACKY=T";	 	// parametro attiva solo pulsante "TornaIndietro"
var PAR_BACK_N = "&CBACKY=N&ABACKY=T"; 		// parametro disattiva solo pulsante "Torna Indietro"
var SAVEDATABEFORECALLHOST = "&REQUESTSAVEDATABEFORECALLHOST=Y";	// parametro salva i dati nel container quando si cambia progetto funzone da gestionale a gestionale
var TRACK_NOTBACK = "&TRACK_NOT_TORNAINDIETRO=Y"; 					// parametro del "non" TornaIndietro nel Tracking quando la transazione e KO
var naviga = "";
var NAV_Y = "&NAVIGA=Y"; 					// parametro attiva navigazione
var NAV_N = "&NAVIGA=N"; 					// parametro disattiva navigazione
var MERGE_Y = "&MERGE=Y"; 					// fa il merge container
var MERGETORNAIND_Y = "&MERGETORNAIND=Y"; 	// fa il merge container
var MERGETORNAINDIBIS_Y = "&MERGETORNAINDIBIS=Y"; // fa il merge container ibis
var MERGE_N = "&MERGE=N"; 					// non fa il merge container
var SAVE_CURRENT = "&SAVE_CURRENT=S"; 		// salva il container corrente anche se prog/funzione e' uguale
var KEEP_CFG = "&KEEP_CFG=Y"; 				// mantiene la configurazione se cambia progetto/funzione
var DISCARD_CFG = "&DISCARD_CFG=Y"; 		// elimina la configurazione se stesso progetto/funzione
var SERVLET = 'EnterpriseMain?FUNZIONE='; 	// nome della servlet - action del form

/* Help/Testo Popups - default variables */
var currHelpLabel = "";
var currHelpLabel2 = "";
var currHelpLabel3 = "";
var currHelpLabel4 = "";

var currHelpDescription = "";
var currHelpDescription2 = "";
var currHelpDescription3 = "";
var currHelpDescription4 = "";

var currHelpPopupTitle = "";

var sectionArray = new Array(); 			// Array Sezioni pagina

var busy = false;							//Previene la non cliccabilità di altri pulsanti se e' gia' stata fatta una submit 
var dontSkippy = false;

var multirigaArray = createMultirigaArray(); 			// Array dei campi multiriga
var customLanguage = {"decimal": ",", "thousands": ".", "info": "Mostra _START_ - _END_ di _TOTAL_ occorrenze",	"infoEmpty": "Mostra 0 - 0 di 0 occorrenze", "infoFiltered": "(Filtrate _MAX_ occorrenze totali)", "infoPostFix": "", "thousands": ",",	"lengthMenu": 'Mostra <select>'+'<option value="8">8</option>'+'<option value="24">24</option>'+'<option value="32">32</option>'+'<option value="-1">Tutti</option>'+'</select> risultati per pagina', "loadingRecords": "Caricamento...", "processing": "Elaborazione...",	"search": "Cerca in Lista:", "zeroRecords": "Nessun record trovato", "paginate": { "first": "Primo", "last": "Ultimo", "next": "Successivo", "previous": "Precedente"},	"aria": { "sortAscending":  ": attivare per ordinare colonna ascendente", "sortDescending": ": attivare per ordinare colonna discendente"}};
var customLanguageE = {"decimal": ",", "thousands": ".", "info": "Show _START_ - _END_ of _TOTAL_ occurrences",	"infoEmpty": "Show 0 - 0 di 0 occurrences", "infoFiltered": "(Filtered _MAX_ total occurrences)", "infoPostFix": "", "thousands": ",",	"lengthMenu": 'Show <select>'+'<option value="8">8</option>'+'<option value="24">24</option>'+'<option value="32">32</option>'+'<option value="-1">All</option>'+'</select> results per page', "loadingRecords": "Loading...", "processing": "Processing...",	"search": "Search:", "zeroRecords": "No record found", "paginate": { "first": "First", "last": "Last", "next": "Next", "previous": "Previous"},	"aria": { "sortAscending":  ": activate to order column by ascending key", "sortDescending": ": activate to order column by descending key"}};

var msgFail = "<p class=\"msgFail\">Si e' verificato un problema temporaneo, siete pregati di riprovare piu' tardi.</p>";
var waitPrint = "Apertura stampa, attendere prego...";

var numeroPraticaSel = ""; 



Bridge.instance.beforeLoading(function () {
    //ma. clearing array on each load prevents multiple registrations (and section open/close bug)
    sectionArray = new Array();
});

/**
 * @utilizzo valorizza PATH con la root principale
 */
function refreshPATH() {
	iniz = (document.URL).indexOf('/', 8);
	fine = (document.URL).lastIndexOf('/');
	PATH = (document.URL).substring(iniz, fine + 1);

	if (!STATIC_FILES_PATH)
        STATIC_FILES_PATH = PATH
}

/**
 * @utilizzo Gestione dell'apertura/chiusura delle finestre.
 */
function tryWin(){
	try{		
		if (typeof msgwindow == "object"){
			if (typeof msgwindow.name == "string"){
				msgwindow.focus();
				return;
			}			
		}
	}catch (e) {
		alert(e.description);
	}		
};
function closeWin(){
	try{
		if (typeof msgwindow == "object"){
			if (typeof msgwindow.name == "string"){
				try{
					msgwindow.close();
					delete msgwindow;
				}catch (e) {
					alert(e.description)
					return;
			  	}
			}
		}
	}catch(e){
		//alert(e.description);
	}
};

/**
 * @utilizzo crea un array di cd di tipo multiriga
 * @return array object
 */
function createMultirigaArray(){
	var array = new Array(); 		// radice codice dato
	array[0] = "C36840";			
	array[1] = "C36800";
	array[2] = "C368E0";
	array[3] = "C36850";
	array[4] = "C368E1";
	array[5] = "C36900";
	array[6] = "C368B0";
	array[7] = "CCOM10";
	
	var arrayItem = new Array(); 	// max progressivo	
	arrayItem[0] = "4";
	arrayItem[1] = "4";
	arrayItem[2] = "4";
	arrayItem[3] = "6";
	arrayItem[4] = "4";
	arrayItem[5] = "6";
	arrayItem[6] = "4";
	arrayItem[7] = "6";
	
	var multiArray = new Array();
	var radice;
	var int = 0;
	for (var index = 0; index < array.length; index++) {		
		radice =  array[index];		
		for (var i = 1; i <= arrayItem[index]; i++) {
			multiArray[int] = radice+i;
			int++;
		}		
	}
	return multiArray;
}

function ricercaAjaxAnagraficaFromIban(progFunz, obj, progrCd_Bk, isBonifici) {
	var aForm = document.forms['formInserimento'];
	var cleaned = false;	
	
	try {
		cleaned = cleanDataRicAnagrafica(aForm, progrCd_Bk);
		cleaned = true;

		if (cleaned) {
			var url = PATH + "AjaxControllerServlet";
			var hashParameters = {};
			assumiGeneralParameters(aForm,progFunz,hashParameters);			
			hashParameters = getDataFormAnagrafica(progrCd_Bk,hashParameters);			
			jQuery.ajax({
				type : 'POST',
				url : url,
				data : hashParameters,
				dataType : "xml",
				success : function(data) {
					if(isErroreFunzione(data))return; //se errore lo mostra ed esce 
					fillCompletamentoAnagraficaBanca(data, aForm, progrCd_Bk, isBonifici); 	//ricerca anagrafica banca
				},
				error : function() {
					alert(alertMsg);
				}
			});
		}

	} catch (e) {
		 alert("AjaxSearch="+e.description);
	}		
}

/**
 * @utilizzo chiamate ajax
 */	  		
function ricercaAjax(progFunz, obj, progrCd_Cli,progrCd_Bk,isBonifici) {
	// puo' assumere:
	// - 01BRIC Ricerca Anagrafica Banca
	// - RIFPRATICA: Riferimento Pratica
	// - X1C030: Riferimento NickName
	var aForm = document.forms['formInserimento'];
	var cleaned = false;
	
	try {
		if (progFunz == "01BRIC") { // ricerca anagrafica banca
			cleaned = cleanDataRicAnagrafica(aForm, progrCd_Cli);
			cleaned = true;
		}
		if (progFunz == "RIFPRATICA") { // riferimento pratica
			cleaned = cleanDataRifPratica(aForm);
			cleaned = true;
		}
		if (progFunz == "X1C030") { // ricerca in rubrica (nickname)
			cleaned = cleanDataRicRubrica(aForm, progrCd_Cli,progrCd_Bk);
			cleaned = true;
		}

		if (progFunz == "01VIBA") { // ricerca iban
			cleaned = cleanDataRicAnagrafica(aForm, progrCd_Cli);
			cleanData("086" + progrCd_Cli);
			cleaned = true;
		}
		
		if (cleaned) {
			if (obj.value == "")return;

			obj.value = obj.value.toUpperCase();//esegue l'uppercase del campo da cui parte lo skip
			 
			var url = PATH + "AjaxControllerServlet";
			var hashParameters = {};
			assumiGeneralParameters(aForm,progFunz,hashParameters);
			
			if (progFunz == "01BRIC") {// ricerca anagrafica banca
				hashParameters = getDataFormAnagrafica(progrCd_Cli,hashParameters);
			} else if (progFunz == "RIFPRATICA") { // riferimento pratica
				hashParameters = getDataFormRifPratica(aForm,hashParameters);
				var progFunzPratica = aForm.FUNZIONE.value.substring(0, 2) + "V" + aForm.FUNZIONE.value.substring(3, 6);
				assumiGeneralParameters(aForm,progFunzPratica,hashParameters);
			} else if (progFunz == "X1C030") { // ricerca in rubrica (nickname)
				hashParameters = getDataFormRicRubrica(aForm,hashParameters);
			} else if (progFunz == "01VIBA") { // ricerca iban
				if (obj.value.length < 5)return;
				hashParameters = getDataFormIBAN(aForm,hashParameters,obj);
			}

			jQuery.ajax({
				type : 'POST',
				url : url,
				data : hashParameters,
				dataType : "xml",
				success : function(data) {
					if(isErroreFunzione(data))return; //se errore lo mostra ed esce
					
					if      (progFunz == "01BRIC")fillCompletamentoAnagraficaBanca(data, aForm, progrCd_Cli, isBonifici); 	//ricerca anagrafica banca
					else if (progFunz == "RIFPRATICA") fillCompletamentoRifPratica(data, aForm);				//ricerca pratica	
					else if (progFunz == "X1C030") fillCompletamentoRicRubrica(data, aForm, progrCd_Cli, progrCd_Bk, isBonifici);			//ricerca in rubrica (nickname)
					else if (progFunz == "01VIBA")fillCompletamentoIban(data, aForm, progrCd_Cli, isBonifici); 	//ricerca IBAN
				},
				error : function() {
					alert(alertMsg);
				}
			});
		}

	} catch (e) {
		 alert("AjaxSearch="+e.description);
	}
}
/**
 * @utilizzo mostra l'errore host dopo chiamata ajax
 */
function isErroreFunzione(xmldoc){
	// *** ESITO KO - ERRORE HOST ***
	var esito = $(xmldoc).find('ISERRORE').text();
	var alertMsg1 = "Si e' verificato un errore. \nDescrizione: ";
	var alertMsg2 = " \nCodice Errore: ";
	if(linguaLabelsT1500 == "E"){
		alertMsg1 = "There was an Error. \nDescription: ";
		alertMsg2 = " \nError Code: ";
	}
	if (esito == "S") {
		var codErr_obj = "";
		$(xmldoc).find("CODICEERRORE").each(function() {
			codErr_obj = $(this).text();
		});

		var descCorta_obj = "";
		$(xmldoc).find("DESCRIZIONECORTA").each(function() {
			descCorta_obj = $(this).text();
		});
		
		alert(alertMsg1 + descCorta_obj + alertMsg2 + codErr_obj);
		return true;
	}
	return false;
}


/**
 * @utilizzo riporta dati in pagina
 */
function fillCompletamentoIban(xmldoc, aForm, progrCd, isBonifici) {
	try {
		// *** ESITO OK ***
		findXmlAndSetValueOnMap(xmldoc, aForm, "086" + progrCd);
		findXmlAndSetValueOnMap(xmldoc, aForm, "085" + progrCd);
		findXmlAndSetValueOnMap(xmldoc, aForm, "084" + progrCd);
		//per le funzioni dei bonifici è necessario scaricare il valore della banca con attributo B solo se il codice Bic è valorizzato
		if($("#C086" + progrCd).val() == "" || $("#C086" + progrCd).val()== opzionaleVar)return;
		ricercaAjaxAnagraficaFromIban('01BRIC',$("#C086" + progrCd).val(),"90",isBonifici);
	} catch (e) {
		alert("filldoElimina=" + e.description);
	}
}

/**
 * @utilizzo riporta dati in pagina
 */
function fillCompletamentoAnagraficaBanca(xmldoc, aForm, progrCd, isBonifici) {
	try {
		// *** ESITO OK ***
		findXmlAndSetValueOnMap(xmldoc, aForm, "086" + progrCd);
		findXmlAndSetValueOnMap(xmldoc, aForm, "085" + progrCd);
		findXmlAndSetValueOnMap(xmldoc, aForm, "084" + progrCd);
		//per le funzioni dei bonifici è necessario scaricare il valore della banca con attributo B solo se il codice Bic è valorizzato
		if($("#C086" + progrCd).val() == "" || $("#C086" + progrCd).val()== opzionaleVar)isBonifici=false;
		findXmlAndSetValueOnMap(xmldoc, aForm, "217" + progrCd, '', '', '', isBonifici);
		findXmlAndSetValueOnMap(xmldoc, aForm, "218" + progrCd, '', '', '', isBonifici);
		findXmlAndSetValueOnMap(xmldoc, aForm, "219" + progrCd, '', '', '', isBonifici);
		findXmlAndSetValueOnMap(xmldoc, aForm, "220" + progrCd, '', '', '', isBonifici);
		findXmlAndSetValueOnMap(xmldoc, aForm, "221" + progrCd, '', '', '', isBonifici);
		
	} catch (e) {
		alert("filldoElimina=" + e.description);
	}
}
/**
 * @utilizzo riporta dati in pagina
 */
function fillCompletamentoRifPratica(xmldoc, aForm) {
	try {
		findXmlAndSetValueOnMap(xmldoc, aForm, "003D0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "02700");
		findXmlAndSetValueOnMap(xmldoc, aForm, "02701");
		findXmlAndSetValueOnMap(xmldoc, aForm, "02930");
		findXmlAndSetValueOnMap(xmldoc, aForm, "02950");
		findXmlAndSetValueOnMap(xmldoc, aForm, "08640");
		findXmlAndSetValueOnMap(xmldoc, aForm, "08690");
		findXmlAndSetValueOnMap(xmldoc, aForm, "086B0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "086L0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "11000");
		findXmlAndSetValueOnMap(xmldoc, aForm, "1300C");
		findXmlAndSetValueOnMap(xmldoc, aForm, "13110");
		findXmlAndSetValueOnMap(xmldoc, aForm, "21740");
		findXmlAndSetValueOnMap(xmldoc, aForm, "21790");
		findXmlAndSetValueOnMap(xmldoc, aForm, "217B0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "217F0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "217L0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "21840");
		findXmlAndSetValueOnMap(xmldoc, aForm, "21890");
		findXmlAndSetValueOnMap(xmldoc, aForm, "218B0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "218F0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "218L0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "21940");
		findXmlAndSetValueOnMap(xmldoc, aForm, "21990");
		findXmlAndSetValueOnMap(xmldoc, aForm, "219B0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "219F0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "219L0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "22040");
		findXmlAndSetValueOnMap(xmldoc, aForm, "22090");
		findXmlAndSetValueOnMap(xmldoc, aForm, "220B0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "220F0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "220L0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "22100");
		findXmlAndSetValueOnMap(xmldoc, aForm, "22140");
		findXmlAndSetValueOnMap(xmldoc, aForm, "221B0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "221F0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "221L0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "22190");
		findXmlAndSetValueOnMap(xmldoc, aForm, "30420");
		findXmlAndSetValueOnMap(xmldoc, aForm, "31920");
		findXmlAndSetValueOnMap(xmldoc, aForm, "31930");
		findXmlAndSetValueOnMap(xmldoc, aForm, "33700");
		findXmlAndSetValueOnMap(xmldoc, aForm, "36851");
		findXmlAndSetValueOnMap(xmldoc, aForm, "36852");
		findXmlAndSetValueOnMap(xmldoc, aForm, "36853");
		findXmlAndSetValueOnMap(xmldoc, aForm, "368C0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "368D0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "368E1");
		findXmlAndSetValueOnMap(xmldoc, aForm, "368EA");
		findXmlAndSetValueOnMap(xmldoc, aForm, "368FA");
		findXmlAndSetValueOnMap(xmldoc, aForm, "37000");
		findXmlAndSetValueOnMap(xmldoc, aForm, "4040A");
		findXmlAndSetValueOnMap(xmldoc, aForm, "42160", '', '', true);
		findXmlAndSetValueOnMap(xmldoc, aForm, "42170", '', '', true);
		findXmlAndSetValueOnMap(xmldoc, aForm, "42180", '', '', true);
		findXmlAndSetValueOnMap(xmldoc, aForm, "42190");
		findXmlAndSetValueOnMap(xmldoc, aForm, "421A0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "421B0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "421C0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "421D0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "421E0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "421F0");
		findXmlAndSetValueOnMap(xmldoc, aForm, "42530");
		findXmlAndSetValueOnMap(xmldoc, aForm, "42540");
		findXmlAndSetValueOnMap(xmldoc, aForm, "42550");
		findXmlAndSetValueOnMap(xmldoc, aForm, "42570");
		findXmlAndSetValueOnMap(xmldoc, aForm, "94060");
		findXmlAndSetValueOnMap(xmldoc, aForm, "9410N");
		findXmlAndSetValueOnMap(xmldoc, aForm, "9410A");
		findXmlAndSetValueOnMap(xmldoc, aForm, "9410B");
		findXmlAndSetValueOnMap(xmldoc, aForm, "96110");
		findXmlAndSetValueOnMap(xmldoc, aForm, "96120");
		findXmlAndSetValueOnMap(xmldoc, aForm, "96140");
		findXmlAndSetValueOnMap(xmldoc, aForm, "42560", true);// select
		findXmlAndSetValueOnMap(xmldoc, aForm, "00700", true);// select
		findXmlAndSetValueOnMap(xmldoc, aForm, "04400", true, true);// select paese

	} catch (e) {
		alert("fillCompletamentoRifPratica=" + e.description);
	}
}
/**
 * @utilizzo riporta dati in pagina
 */
function fillCompletamentoRicRubrica(xmldoc, aForm, progrCd_Cli, progrCd_Bk, isBonifici) {
	try {		
		//completamento dati cliente
		findXmlAndSetValueOnMap(xmldoc, aForm, "217" + progrCd_Cli);
		findXmlAndSetValueOnMap(xmldoc, aForm, "218" + progrCd_Cli);
		findXmlAndSetValueOnMap(xmldoc, aForm, "219" + progrCd_Cli);
		findXmlAndSetValueOnMap(xmldoc, aForm, "220" + progrCd_Cli);
		findXmlAndSetValueOnMap(xmldoc, aForm, "221" + progrCd_Cli);
		findXmlAndSetValueOnMap(xmldoc, aForm, "04400", true,true);// select paese
		//completamento dati banca
		findXmlAndSetValueOnMap(xmldoc, aForm, "086" + progrCd_Bk);
				//per le funzioni dei bonifici è necessario scaricare il valore della banca con attributo B solo se il codice Bic è valorizzato
		if($("#C086" + progrCd_Bk).val() == "" || $("#C086" + progrCd_Bk).val()== opzionaleVar)isBonifici=false;
		findXmlAndSetValueOnMap(xmldoc, aForm, "217" + progrCd_Bk, '', '', '', isBonifici);
		findXmlAndSetValueOnMap(xmldoc, aForm, "218" + progrCd_Bk, '', '', '', isBonifici);
		findXmlAndSetValueOnMap(xmldoc, aForm, "219" + progrCd_Bk, '', '', '', isBonifici);
		findXmlAndSetValueOnMap(xmldoc, aForm, "220" + progrCd_Bk, '', '', '', isBonifici);
		findXmlAndSetValueOnMap(xmldoc, aForm, "221" + progrCd_Bk, '', '', '', isBonifici);
	} catch (e) {
		alert("fillCompletamentoRicRubrica=" + e.description);
	}
}


/**
 * @return context root dell'applicazione
 */
function getContextRoot() {
	var iniz = (document.URL).indexOf('/', 8);
	var fine = (document.URL).indexOf('/', iniz + 1);
	return (document.URL).substring(iniz, fine + 1);
}
/**
 * @utilizzo valorizza attributi campi
 */
function manageAttributi(obj) {
	var attr = "#A" + obj.name.substring(1, obj.name.length);
	if(isMultiriga(obj.name)) attr = "#A" + obj.name.substring(1,5)+"0";
	$(attr).val("D");
}
/**
 * @utilizzo cambia stile ai campi obbligatori
 */
function manageStyleFields(obj, obbl) {
	var codice = "#" + obj.name;
	if(obbl=="S" || $(codice).hasClass('obbl')){ //se il campo e' obbligatorio
		var type = $(codice).attr('type');
		
		if (type && type==='checkbox') { //tipo checkbox
			if($(codice).is(':checked')){
				$(codice).removeClass('obbl');
				$(codice).addClass('normal');
			} else {
				$(codice).removeClass('normal');
				$(codice).addClass('obbl');
			}
			return;
		}
		
		if ($(codice).val() != '') { //default inputs
			$(codice).removeClass('obbl');
			$(codice).addClass('normal');
	
		} else {
			$(codice).removeClass('normal');
			$(codice).addClass('obbl');
		}
	}
}
/**
 * @utilizzo controlla formato campi data
 */
function checkdate(w) {

	var err = 0;
	var dataInferiore1990 = "no";
	var d = new String(document.forms['formInserimento'].elements[w].value);
	var dapp = document.forms['formInserimento'].elements[w].value;
	var attr = "A" + w.substring(1, w.length);

	var alertMsg1 = "Attenzione, il valore appena inserito non e\' valido come campo 'data'.";
	var alertMsg2 = "Attenzione, la data non contiene i caratteri '/'.";
	var alertMsg3 = "Attenzione, la data deve essere compresa tra 1990 e 2100.";
	if(linguaLabelsT1500 == "E"){
		alertMsg1 = "Attention, the value just entered is invalid as field 'date'.";
		alertMsg2 = "Attention, the date just entered doesn't contain the characters '/'.";
		alertMsg3 = "Attention, the date must be between 1990 and 2100.";
	}
	
	// FS controllo sulla correttezza formale della data
	// deve contenere solo numerici e "/"
	if (d.length > 0) {
		chr = d.match(/[^\s\/0123456789]/g);
		if (chr != null) {
			document.forms['formInserimento'].elements[w].value = dapp;
			alert(alertMsg1);
			document.forms['formInserimento'].elements[w].value = "";
			document.forms['formInserimento'].elements[w].focus();
			return false;
		}
	}

	if (d.length > 0) {
		// se si inserisce tutta la data senza utilizzare il completamento
		// automatico, devo mettere l'attributo cmq a "D"
		if (d.length == 10) {
			document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
															// attributo a D per
															// firefox
		}
		if (d.length == 9) {
			if (d.substring(1, 2) == '/')
				mess = '0' + d;
			else
				mess = d.substring(0, 3) + '0' + d.substring(3, 9);
			window.document.forms['formInserimento'].elements[w].value = mess;
			d = document.forms['formInserimento'].elements[w].value;
			document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
															// attributo a D per
															// firefox
		}
		if (d.length == 8) {
			chGG = d.substring(0, 1);
			chBarra1 = d.substring(1, 2);
			chMese = d.substring(2, 3);
			chBarra2 = d.substring(3, 4);
			chAnno = d.substring(4, 8);

			if (isNaN(chGG))
				err = 1;
			if (chBarra1 != '/')
				err = 1;
			if (isNaN(chMese))
				err = 1;
			if (chBarra2 != '/')
				err = 1;
			if (isNaN(chAnno))
				err = 1;
			else {
				mess = '0' + chGG + '/0' + d.substring(2, 8);
				window.document.forms['formInserimento'].elements[w].value = mess;
				d = document.forms['formInserimento'].elements[w].value;
				document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
																// attributo a D
																// per firefox
			}
		}
		if (d.length == 6) {
			giornomese = window.document.forms['formInserimento'].elements[w].value;
			dynToday = new Date();
			yy = dynToday.getFullYear();
			mess = giornomese.substring(0, 6) + yy.toString();
			window.document.forms['formInserimento'].elements[w].value = mess;
			d = document.forms['formInserimento'].elements[w].value;
			document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
															// attributo a D per
															// firefox
		}
		if (d.length == 5) {
			giornomese = window.document.forms['formInserimento'].elements[w].value;
			dynToday = new Date();
			yy = dynToday.getFullYear();
			if (d.substring(4, 5) == '/') {
				if (d.substring(1, 2) == '/') {
					mess = '0' + giornomese + yy.toString();
				} else {
					gg = giornomese.substring(0, 3);
					me = giornomese.substring(3, 5);
					mess = gg + '0' + me + yy.toString();
				}
			} else {
				mess = giornomese.substring(0, 3) + giornomese.substring(3, 5)
						+ '/' + yy.toString();
			}
			window.document.forms['formInserimento'].elements[w].value = mess;
			d = document.forms['formInserimento'].elements[w].value;
			document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
															// attributo a D per
															// firefox
		}
		if (d.length == 4) {
			if (d.substring(2, 3) == '/') {
				giornoMese = window.document.forms['formInserimento'].elements[w].value;
				dynToday = new Date();
				yy = dynToday.getFullYear();
				mess = giornoMese.substring(0, 3) + '0'
						+ giornoMese.substring(3, 4) + '/' + yy.toString();
				window.document.forms['formInserimento'].elements[w].value = mess;
				d = document.forms['formInserimento'].elements[w].value;
				document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
																// attributo a D
																// per firefox
			}
			if (d.substring(1, 2) == '/') {
				if (d.substring(3, 4) == '/') {
					dynGiorno = d.substring(0, 2);
					dynMese = d.substring(2, 4);
					dynToday = new Date();
					yy = dynToday.getFullYear();
					mess = '0' + dynGiorno + '0' + dynMese + +yy.toString();
					window.document.forms['formInserimento'].elements[w].value = mess;
					d = document.forms['formInserimento'].elements[w].value;
					document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
																	// attributo
																	// a D per
																	// firefox
				} else {
					giornoMese = window.document.forms['formInserimento'].elements[w].value;
					dynToday = new Date();
					yy = dynToday.getFullYear();
					mess = '0' + giornoMese + '/' + yy.toString();
					window.document.forms['formInserimento'].elements[w].value = mess;
					d = document.forms['formInserimento'].elements[w].value;
					document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
																	// attributo
																	// a D per
																	// firefox
				}
			}
		}
		if (d.length == 3) {
			if (d.substring(2, 3) == '/') {
				giorno = window.document.forms['formInserimento'].elements[w].value;
				dynToday = new Date();
				mm = dynToday.getMonth() + 1;
				if (mm.toString().length == 1) {
					mm = '0' + mm;
				}
				;
				yy = dynToday.getFullYear();
				mess = giorno.toString() + mm.toString() + '/' + yy.toString();
				window.document.forms['formInserimento'].elements[w].value = mess;
				d = document.forms['formInserimento'].elements[w].value;
				document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
																// attributo a D
																// per firefox
			}
			if (d.substring(1, 2) == '/') {
				giornoMese = window.document.forms['formInserimento'].elements[w].value;
				dynToday = new Date();
				yy = dynToday.getFullYear();
				mess = '0' + giornoMese.substring(0, 2) + '0'
						+ giornoMese.substring(2, 3) + '/' + yy.toString();
				window.document.forms['formInserimento'].elements[w].value = mess;
				d = document.forms['formInserimento'].elements[w].value;
				document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
																// attributo a D
																// per firefox
			}
		}
		if (d.length == 2) {
			if (isNaN(d)) {
				chPrimo = d.substring(0, 1);
				chSecondo = d.substring(1, 2);
				if (isNaN(chPrimo)) {
					err = 1;
				} else if (chSecondo == '/') {
					giorno = window.document.forms['formInserimento'].elements[w].value;
					dynToday = new Date();
					mm = dynToday.getMonth() + 1;
					if (mm.toString().length == 1) {
						mm = '0' + mm;
					}
					;
					yy = dynToday.getFullYear();
					mess = '0' + giorno + mm.toString() + '/' + yy.toString();
					window.document.forms['formInserimento'].elements[w].value = mess;
					d = document.forms['formInserimento'].elements[w].value;
					document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
																	// attributo
																	// a D per
																	// firefox
				} else {
					err = 1;
				}
			} else if (d == '00') {
				d = document.forms['formInserimento'].elements[w].value;
				document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
																// attributo a D
																// per firefox
				err = 1;
			} else {
				giorno = window.document.forms['formInserimento'].elements[w].value;
				dynToday = new Date();
				mm = dynToday.getMonth() + 1;
				if (mm.toString().length == 1) {
					mm = '0' + mm;
				}
				yy = dynToday.getFullYear();
				mess = giorno.toString() + '/' + mm.toString() + '/'
						+ yy.toString();
				window.document.forms['formInserimento'].elements[w].value = mess;
				d = document.forms['formInserimento'].elements[w].value;
				document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
																// attributo a D
																// per firefox
			}
		}
		if (d.length == 1) {
			if (isNaN(d)) {
				d = document.forms['formInserimento'].elements[w].value;
				document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
																// attributo a D
																// per firefox
				err = 1;
			} else if (d == '0') {
				d = document.forms['formInserimento'].elements[w].value;
				document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
																// attributo a D
																// per firefox
				err = 1;
			} else {
				giorno = window.document.forms['formInserimento'].elements[w].value;
				dynToday = new Date();
				mm = dynToday.getMonth() + 1;
				yy = dynToday.getFullYear();
				if (mm.toString().length == 1) {
					mess = '0' + giorno.toString() + '/' + '0' + mm.toString()
							+ '/' + yy.toString();
					window.document.forms['formInserimento'].elements[w].value = mess;
					d = document.forms['formInserimento'].elements[w].value;
					document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
																	// attributo
																	// a D per
																	// firefox
				} else {
					mess = '0' + giorno.toString() + '/' + mm.toString() + '/'
							+ yy.toString();
					window.document.forms['formInserimento'].elements[w].value = mess;
					d = document.forms['formInserimento'].elements[w].value;
					document.forms['formInserimento'].elements[attr].value = "D";// valorizzo
																	// attributo
																	// a D per
																	// firefox
				}
			}
		}

		if (d.length == 0)
			err = 1;
		g = d.substring(0, 2); // giorni
		barra1 = d.substring(2, 3); // '/'
		m = d.substring(3, 5); // mesi
		barra2 = d.substring(5, 6); // '/'
		an = d.substring(6, 10); // anno

		// basic error checking

		if (g < 1 || g > 31)
			err = 1;
		if (barra1 != '/')
			err = 1;
		if (m < 1 || m > 12)
			err = 1;
		if (barra2 != '/')
			err = 1;
		if (an < 1990 || an > 2100)
			dataInferiore1990 = "si";
		if (isNaN(g))
			err = 1;
		if (isNaN(m))
			err = 1;
		if (isNaN(an))
			err = 1;
		if (an.length < 4)
			err = 1;
		if (m == 4 || m == 6 || m == 9 || m == 11) { // mesi con 30 giorni
			if (g == 31)
				err = 1;
		}
		if (m == 2) { // febbraio
			var b = parseInt(an / 4);
			if (isNaN(b))
				err = 1;
			if (g > 29)
				err = 1;
			if (g == 29 && ((an / 4) != parseInt(an / 4)))
				err = 1;
		}
	}
	if (err == 1) {
		document.forms['formInserimento'].elements[w].value = dapp;
		// P12 h18) Ibis Review
		var slash1 = document.forms['formInserimento'].elements[w].value.substring(2, 3);
		var slash2 = document.forms['formInserimento'].elements[w].value.substring(5, 6);
		// Se la data e' di 8 caratteri ma senza '/' visualizziamo l errore di
		// mancanza degli stessi
		if ((slash1 != "/" || slash2 != "/")
				&& document.forms['formInserimento'].elements[w].value.length == 8) {
			alert(alertMsg2);
			document.forms['formInserimento'].elements[w].focus();
			return false;
		} else
			alert(alertMsg1);
		document.forms['formInserimento'].elements[w].value = "";
		document.forms['formInserimento'].elements[w].focus();
		return false;
	} else if (dataInferiore1990 == "si") {// le date inferiori al 1990 non
											// sono accettate
		document.forms['formInserimento'].elements[w].value = dapp;
		alert(alertMsg3);
		document.forms['formInserimento'].elements[w].value = "";
		document.forms['formInserimento'].elements[w].focus();
		return false;
	}
};

/**
 * @utilizzo controlla formato campi importo
 */

function checkimp(fld) {

	pos, pos2 = "-1";
	var dec, val, valInt, pos, pos2 = "";
	val = new String(document.forms['formInserimento'].elements[fld].value);
	var attrfld = "A" + fld.substring(1, fld.length);

	chr = val.match(/[^\s\,\.0123456789]/g);
	
	var alertMsg1 = "ATTENZIONE: \nNel campo appena digitato\nci sono degli spazi tra le cifre.";
	var alertMsg2 = "ATTENZIONE: \nInserire solo numeri.";
	var alertMsg3 = "ATTENZIONE: \nInserire o punti o virgole per delimitare i decimali. \nNon entrambi";
	var alertMsg4 = "ATTENZIONE: \nTroppi punti";
	var alertMsg5 = "ATTENZIONE: \nTroppe virgole";
	if(linguaLabelsT1500 == "E"){
		alertMsg1 = "ATTENTION: \nIn just typed field\nthere are spaces between the numbers.";
		alertMsg2 = "ATTENTION: \nType only numbers.";	
		alertMsg3 = "ATTENTION: \nInsert or points or commas to delimit the decimal. \nNot both";
		alertMsg4 = "ATTENTION: \nToo many points";
		alertMsg5 = "ATTENTION: \nToo many commas";
	}

	if (val.match(/\S\s+\S/g) != null)
		alert(alertMsg1);

	if (chr != null) {
		alert(alertMsg2);
		val = "";
		document.forms['formInserimento'].elements[fld].value = val;
		return false;
	} else {
		pos = val.lastIndexOf(".");
		pos2 = val.lastIndexOf(",");
		if ((pos != "-1") && (pos2 != "-1")) {
			alert(alertMsg3);
			val = "";
		} else {
			if (pos != "-1") {
				dec = val.substring(pos + 1, val.length);
				valInt = val.substring(0, pos);
				var punti = valInt.match(/\./g);
				if (punti != null) {
					alert(alertMsg4);
					val = "";
					valInt = "";
				}
			} else if (pos2 != "-1") {
				dec = val.substring(pos2 + 1, val.length);
				valInt = val.substring(0, pos2);
				var virgole = valInt.match(/\,/g);
				if (virgole != null) {
					alert(alertMsg5);
					val = "";
					valInt = "";
				}
			} else {
				dec = "";
				valInt = val;
			}
			if (valInt == "")
				val = "";
			else {
				if (dec != "")
					val = valInt + "," + dec;
				else
					val = valInt;
			}
		}
	}
	document.forms['formInserimento'].elements[fld].value = val;
	document.forms['formInserimento'].elements[attrfld].value = "D";// valorizzo attributo a D
													// per firefox
}
/**
 * @utilizzo controlla formato campi numerici
 */

function checknum(fld, a, b) {

	var ret = checkimp(fld);

	var alertMsg1 = "ATTENZIONE: \nL\'intero deve essere di massimo ";
	var alertMsg2 = " cifre.";
	var alertMsg3 = "ATTENZIONE: \nI decimali devono essere di massimo ";

	if(linguaLabelsT1500 == "E"){
		alertMsg1 = "ATTENTION: \nThe integer must have maximum ";
		alertMsg2 = " digit.";
		alertMsg3 = "ATTENTION: \nThe decimal must have maximum ";
	}
	
	// alert(ret);
	if (ret == false) {
		document.forms['formInserimento'].elements[fld].focus();
		return false;
	} else {
		val = new String(document.forms['formInserimento'].elements[fld].value);
		pos = val.lastIndexOf(",");
		if (pos == '-1') {
			intero = val;
			decimali = 0;
		} else {
			intero = val.substring(0, pos);
			decimali = val.substring(pos + 1, val.length);
		}
		if (a) {
			if (a < intero.length) {
				alert(alertMsg1 + a + alertMsg2);
				document.forms['formInserimento'].elements[fld].value = "";
				document.forms['formInserimento'].elements[fld].focus();
				return false;
			}
		}
		if (b) {
			if (b < decimali.length) {
				alert(alertMsg3 + b + alertMsg2);
				document.forms['formInserimento'].elements[fld].value = "";
				document.forms['formInserimento'].elements[fld].focus();
				return false;
			}
		}
		return true;
	}
}
/**
 * @utilizzo gestisce campi obbligatori sul campo specifico
 */
function checkObbligatorioTipoUtilizzo(obj) {
	if ($("#C421E0").val() == "D" || $("#C421E0").val() == "M") {
		if ($(obj).val() == "") {
			manageObbligatori(true, "#"+obj.name);//set a obbligatorio
		}
	}
}

/**
 * @utilizzo gestisce la paginazione delle liste Client/Host
 */
function managePaginazione(azione, progAzioneFunz, params) {
	if(document.forms['formInserimento'].CH1020.value == ""){
		document.forms['formInserimento'].CH1020.value = "1";
	}
	var current_page = document.forms['formInserimento'].CH1020.value;
	var tot_page = document.forms['formInserimento'].CH1030.value;

	var alertMsg1 = "Attenzione!!\nImpossibile visualizzare la pagina precedente.\nLa pagina attuale e\' la prima.";
	var alertMsg2 = "Attenzione!!\nImpossibile visualizzare la pagina successiva.\nLa pagina attuale e\' l'ultima.";
	if(linguaLabelsT1500 == "E"){
		alertMsg1 = "Attention!!\nUnable to display the previous page.\nCurrent page is the first page.";
		alertMsg2 = "Attention!!\nUnable to display the next page.\nCurrent page is the last page.";
	}
	
	if (azione == 'M') {
		if (current_page == 1) {
			alert(alertMsg1);
		} else {
			current_page--;
			document.forms['formInserimento'].CH1020.value = current_page;
			document.forms['formInserimento'].AH1020.value = "D";
			doCallServer('', false, progAzioneFunz, "");// esegue la submit della form
		}
		return;
	} else if (azione == 'P') {
		if (current_page == tot_page) {
			alert(alertMsg2);
		} else {
			current_page++;
			document.forms['formInserimento'].CH1020.value = current_page;
			document.forms['formInserimento'].AH1020.value = "D";
			doCallServer('', false, progAzioneFunz, "");// esegue la submit della form
		}
		return;
	}
}

/**
 * @utilizzo controlli speicifici sui campi
 * @return boolean
 */
function checkTag48Tag46(){
	var alertMsg1 = "Valorizzare il TAG:46A Documenti Richiesti.";
	if(linguaLabelsT1500 == "E"){
		alertMsg1 = "Value the field TAG:46A Documents Required.";
	}
	if(document.forms['formInserimento'].elements["C368E01"]){
		if(document.forms['formInserimento'].elements["C368E01"].value!="" || document.forms['formInserimento'].elements["C368E02"].value!="" || document.forms['formInserimento'].elements["C368E03"].value!="" || document.forms['formInserimento'].elements["C368E04"].value!=""){
			if(document.forms['formInserimento'].elements["C96140"]){
				if(document.forms['formInserimento'].elements["C96140"].value==""){
					alert(alertMsg1);
                    var legendObject = getLegendContenitoreID(document.forms['formInserimento'].elements["C96140"]);// Cattura l'oggetto legend relativo alla sezione dell'oggetto obj
                    var divContenitore = legendObject.replace("legend", "");// Cattura l'oggetto div contenitore relativo al campo obj
                    closeOtherSection(divContenitore);// chiude tutti gli altri div
                    $("#div" + divContenitore).show("slow"); // apre quello in cui e' presente il campo obbligatorio
                    $('#C96140').delay(600).focus();
		            return true;
				}
			}
		}
	}
	return false;
}

	
/**
 * @utilizzo posiziona focus su campo otp
 */
function focusOTP(){
	//versione JAVA - campo OTP
	if($("#CA1960").val() != undefined){
		$("#CA1960").focus();
	}else{ 	//versione .Net - PinPad
		$("#field-otp-youtrade").focus();	
	}
}

/**
 * @param codPul - codice pulsante
 * @param azione - azione pulsante
 * 
 * @utilizzo Invia in submit la form - UTILIZZATA NELLE MAPPE MASTER
 */
function dynAction(codPul,azione) {

	if(busy)return;
	
	var params = "";
	var prog = progettoFunzioneGlobal.substring(0, 2);
	var funz = progettoFunzioneGlobal.substring(2, 5);
	
//	if(azione!="Z" && azione!="BACKREFRESH"){		
//		if(checkTag48Tag46())return;
//	}
	if (controllaObbl(codPul,azione)) { //ritorna true o false se si tratta di azione/pulsante su cui controllare le obbl
		if (!checkObbl(document.forms['formInserimento']))
			return;
	}

	if (!checkAttributi(document.forms['formInserimento']))
		return;
	// CONTROLLI sulla presenza della Select Gruppi Firma e valore WFLAG
	try{
		if (!gestioneGruppiFirmaCheck())return;
	}catch(e){
				
	}
	var iform = document.forms['formInserimento'];
	if (azione != "Z" && azione != "BACKREFRESH") {
		if (typeof iform.CWRECS == 'object' && typeof iform.CWREC1 == 'object'){
			iform.CWREC1.value = iform.CWRECS.value;
			iform.CWRECS.value = "";		
		}		
	}else{
		if (typeof iform.CWRECS == 'object' && typeof iform.CWREC1 == 'object'){
			if(iform.CWREC1.value != "")iform.CWRECS.value = iform.CWREC1.value;
			else if(iform.CWREC2.value != "")iform.CWRECS.value = iform.CWREC2.value;
			iform.CWREC1.value = "";		
		}	
	}
	
	/* **************************************************** */
	/* ******** CODICE PULSANTE - ECCEZIONI ALL'AZIONE HOST */
	/* **************************************************** */
	if(codPul!=null){
		if(codPul=="0839"){ //importa da Garanzie
			// **** Submit della Form ****
			var progAzioneFunz = "06" + "T" + "336";
			doCallServer('', false, progAzioneFunz, params);// esegue la submit della form
			return;
		}else if(codPul=="0884"){ //importa da Crediti - richiesta Consulenza
			// **** Submit della Form ****
			var progAzioneFunz = "06" + "T" + "279";
			doCallServer('', false, progAzioneFunz, params);// esegue la submit della form
			return;
		}else if(codPul=="0886"){ //importa da Crediti - richiesta Apertura
			// **** Submit della Form ****
			var progAzioneFunz = "06" + "T" + "280";
			doCallServer('', false, progAzioneFunz, params);// esegue la submit della form
			return;
		}else if(codPul=="0825"){ // pulsante salva beneficiario
			if(isYouTrade(prog,funz)){
				// **** Submit della Form ****
				var progAzioneFunz = "06" + "D" + "225"; // prog/funz inserimento beneficiario
				params = params + SAVEDATABEFORECALLHOST; // parametro per salvare il contaier vecchio prima di passare alla funzione di inserimento beneficiario
				doCallServer('', false, progAzioneFunz, params);// esegue la submit della form
				return;
			 }else{
				 var progAzioneFunz = prog + azione + funz;
				 doCallServer('', false, progAzioneFunz, params);// esegue la submit della form
				 return;
			 }
		}
		//elementi pratica o leggi alert o scrivi comunicazione
		else if(codPul=="0855" || codPul=="0858" || codPul=="0859"){ //il progetto funzione viene cambiato da Host, quindi il client manda in submit la pagina aggiungendo il BACK
			// **** Submit della Form ****
			var progAzioneFunz = prog + azione + funz;
			params = PAR_BACK + NAV_Y; //+ MERGE_Y
			doCallServer('', false, progAzioneFunz, params);// esegue la submit della form
			return;
		}else if(codPul == "0851"){ //crea Fac-Simile Garanzie
			var progAzioneFunz = "06" + "M" + "356"; //prog/funz creazione fac-simile garanzie
			params = params + SAVEDATABEFORECALLHOST; //parametro per salvare il contaier vecchio prima di passare alla funzione creazione fac-simile
			doCallServer('', false, progAzioneFunz, params);// esegue la submit della form
			return;			
		}else if(codPul == "0885"){ //crea Fac-Simile Credoc
			var progAzioneFunz = "06" + "M" + "276"; //prog/funz creazione fac-simile credoc
			params = params + SAVEDATABEFORECALLHOST; //parametro per salvare il contaier vecchio prima di passare alla funzione creazione fac-simile
			doCallServer('', false, progAzioneFunz, params);// esegue la submit della form
			return;			
		}else if(codPul == "0843"){ //leggi comunicazione
			leggiComunicazione();
			return;
		}else if(codPul == "0856"){ //uploadFile
			return;
		} else if (codPul == "0861") { //firma digitale
			var progAzioneFunz = prog + azione + funz;
			callDigitalSignature('06D246',progAzioneFunz);
		    return;
		} else if (codPul == "0888") { //stampa messaggi swift
			var progAzioneFunz = prog + azione + funz;
			callStampaMsg(progAzioneFunz);
			return;
		} else if (codPul == "1688") { //se verifica - necessario per bonifici
			params = params + '&CF0830=S&AF0830=C';
			// **** Submit della Form ****
			var progAzioneFunz = prog + azione + funz;
			doCallServer('', false, progAzioneFunz, params);// esegue la submit della form
			return;
		} else if (codPul == "1753") { //excel
		    var progAzioneFunz = prog + "T" + funz;
		    var params = "Ibis.do?" + NAV_N;
		    params = params + '&STAMPA_EXCEL=S';
		    refreshPATH();
		    var preparingMessageHtml = "Stiamo preparando il file, attendere prego...";
		    var failMessageHtml = "Si e' verificato un problema temporaneo durante il reperimento del file, provare di nuovo.";

		    if (linguaLabelsT1500 == "E") {
		        preparingMessageHtml = "Getting file, wait please";
		        failMessageHtml = "A temporary error has been encountered while getting file, please try again."
		    }

		    var hashParameters = {};
		    hashParameters['FUNZIONE'] = progAzioneFunz;
		    hashParameters['WSESSIONID'] = sessIdGlobal;
		    assumiCOAUTAjax(document.forms['formInserimento'], hashParameters);

		    var url = PATH + params;
		    $.fileDownload(url, {
		        preparingMessageHtml: preparingMessageHtml,
		        failMessageHtml: failMessageHtml,
		        httpMethod: "POST",
		        data: hashParameters
		    });
		    return;
        } 
	}
	
	/* ***************************************************** */
	/* ******** AZIONI AI PULSANTI ************************* */
	/* ***************************************************** */

	// Azione 1, 2, 3 = Recovery Firma, Respingi Pratica, Tracking Firma
	// Chiamata Ajax alla servlet getGruppiFirma
	if (azione == "1") { // Recovery Firma
		gestisceGruppiFirma("1", prog, funz);
		return;
		
	} else if (azione == "2") { // Respingi Pratica
		gestisceGruppiFirma("2", prog, funz);
		return;
		
	} else if (azione == "3") { // Tracking Firma
		gestisceGruppiFirma("3", prog, funz);
		return;
		
	} else if (azione == "L") { // ricerca pratica da pulsante
		dynNick('06D243');
		return;
		
	} else if ((azione == "P") || (azione == "M")) { //M = Pagina precedente P = successiva 
		managePaginazione(azione, prog + "T" + funz);
		return;
		
	} else if (azione == "T") { // RIPULISCO I FLAG H1020-H1030
		if (typeof iform.CH1020 == 'object')
			iform.CH1020.value = "";
		if (typeof iform.CH1030 == 'object')
			iform.CH1030.value = "";
		
	} 
//	else 
//		if (azione == "N") {
//		document.forms['formInserimento'].FUNZIONE.value = prog + azione + funz;
//		dynParameter = 'PrintReport?REPORT_TYPE=csv';
//		document.forms['formInserimento'].action = dynParameter;
//		document.forms['formInserimento'].submit();
//		return;
//		
//	} 
	else if (azione == "Z") { 			// torna indietro
		params = params + '&TORNAINDIETRO=S';
	} else if (azione == "BACKREFRESH") { 	// torna indietro refresh
		params = params + '&REFRESH=true&TORNAINDIETRO=S';
		azione = "D";
	} 
	else if(azione == "C" || azione == "K" || azione == "G"){ //Conferma, Congela, Salva
		
		openTextareaBox();
		
	}
	
	// **** Submit della Form ****
	var progAzioneFunz = prog + azione + funz;
	doCallServer('', false, progAzioneFunz, params);// esegue la submit della form
}



function activateTxMonitorForNextCall(url) {
    var params = "txMonitor=true";
    if (!url) registerOneTimeAdditionalParams(params);

    return url + "?" + params;
}

/**
 * 
 * @param prog
 * @param funz
 */
function isYouTrade(prog,funz){
	if(prog == "06" && 
		(funz=="640" || funz=="245" || funz=="525" 
			|| funz=="532" || funz=="527")){
		return true;
	}else{
		return false;
	}
}


/**
 * 
 */
function callStampaMsg(progAzioneFunzToStart) {
    
    if (busy) return;

    var params = "Ibis.do?"+ NAV_N;
    refreshPATH();
    
    var preparingMessageHtml = "Stiamo preparando il file, attendere prego...";
    var failMessageHtml = "Si e' verificato un problema temporaneo durante il reperimento del file, provare di nuovo.";
   
    if(linguaLabelsT1500 == "E"){
        preparingMessageHtml = "Getting file, wait please";
        failMessageHtml = "A temporary error has been encountered while getting file, please try again."
    }
   
    var hashParameters = {};
    hashParameters['FUNZIONE'] = progAzioneFunzToStart;
    hashParameters['WSESSIONID'] = sessIdGlobal;
	assumiCOAUTAjax(document.forms['formInserimento'],hashParameters);
    
    var url = PATH + params;
    $.fileDownload(url, {
        preparingMessageHtml: preparingMessageHtml,
        failMessageHtml: failMessageHtml,
        httpMethod: "POST",
        data: hashParameters
    });
}

/**
 * @Reindirizza a Firma digitale
 */
function callDigitalSignature(returnFunction,progAzioneFunz) {
    
    if (busy) return;
     
    var $form = $("#formInserimento");
    var $el = $form.find("[name=CA2170]");
    if ($el.length > 1) {
        //radio
        $el = $form.find("input:radio[name=CA2170]:checked");
    }
    //cancella il valore opzionale dai campi non valorizzati prima di chiamare Host
    ctrlFieldFacoltativi();
    var firmaSingola= ($el.val() == 'S');
    
    var nessunaFirma = ($el.val() == 'N');

    if (firmaSingola) {
        //firma digitale 
        activateTxMonitorForNextCall();
        var params = '&returnFunction=' + returnFunction;
        doCallServer('DigitalSignature/Begin', false, progAzioneFunz, params);
    } else if (nessunaFirma) {
        var params = "";
        doCallServer('', false, progAzioneFunz, params);// esegue la submit della form
        return;
    } else {
        //firma disgiunta: download PDF
        $form.find("[name=FUNZIONE]").val(progAzioneFunz);
        var data = $form.serialize();
        var url = activateTxMonitorForNextCall("Ibis.do");

        $.fileDownload(url, {
            preparingMessageHtml: "We are preparing the files , please wait...",
            failMessageHtml: "Operation succesfully completed",
            httpMethod: "POST",
            data: data
        });         
    }
}

/**
 * @utilizzo aggiunge parametri specifici presenti sul record selezionato e cambia p/f 
 */
function leggiComunicazione(){
	if(progettoFunzioneGlobal == '06501'){
		var tllVal = $("#C93290").val(); //valore della tll - funzione 06_501
		var valAlert = tllVal.substring(191,192);
		var progAzioneFunz = "";
		var params = "";
		if(valAlert == 'C' || valAlert == 'D'){ //se presenti piu comuinicazioni
			progAzioneFunz = "06P308";
			var rifPratica = tllVal.substring(23,39);
			var prodotto = tllVal.substring(192,195);
			params = PAR_BACK + NAV_Y + "&C38100="+rifPratica+"&A38100=D&CJ3100="+prodotto+"&AJ3100=D"; //aggiunge rif.pratica e prodotto del record
			if(valAlert == 'C'){
				params = params + "&CF0640=D&AF0640=D"; //D - alert multipli da leggere
			}else{
				params = params + "&CF0640=L&AF0640=D"; //L - alert multipli letti/archiviati
			}
		}
		else if(valAlert == 'A' || valAlert == 'B'){
			progAzioneFunz = "06P627";
			params = PAR_BACK + NAV_Y; 
		}
		else{			
			return;
		}			
	}
	
	doCallServer('', false, progAzioneFunz, params);// esegue la submit della form
}

/**
 * @utilizzo mostra la textarea prima di inviare la form in submit, altrimenti non viaggia il c.d.
 */
function openTextareaBox(){
			$('textarea').each(function () {
				if($(this).val() != ""){
					var legendObject = getLegendContenitoreID($(this).attr('name').substring(0,6));// Cattura l'oggetto legend relativo alla sezione dell'oggetto obj
				    var divContenitore = legendObject.replace("legend", "");// Cattura l'oggetto div contenitore relativo al campo obj
				    $("#div" + divContenitore).show(); // apre il div in cui e' presente il campo obbligatorio
				}
			})
		}
/**
 * @param progAzioneFunz progetto azione funzione da richiamare
 * @param progressivoCli progressivo di due crt del cod.dato cliente
 * @param progressivoBk  progressivo di due crt del cod.dato banca
 * 
 * @utilizzo chiamate ajax
 */	
function dynNick(progAzioneFunz,progressivoCli,progressivoBk) {
	
	if(busy)return;
	
			var coaut = assumiCOAUT(document.forms['formInserimento']);
			var params = PAR_BACK + NAV_Y + "&FUNZIONE="+progAzioneFunz + "&WSESSIONID=" + sessIdGlobal + coaut;
			if(progAzioneFunz=="06D243" || progettoFunzioneGlobal.substring(0, 2)=="95" ){
				params = params + "&AH0240=D&CH0240=" + progettoAzioneFunzioneGlobal.substring(2,6);//azione + funzione
				params = params + "&A42100=D&C42100=" + progettoAzioneFunzioneGlobal.substring(2,3);//azione
				params = params + "&A24PFO=D&C24PFO="+progettoFunzioneGlobal; //progetto + funzione
			}
			if(progressivoCli){
				params = params + "&CPRGCD="+progressivoCli+"&APRGCD=D";
			}
			if(progressivoBk){
				params = params + "&CPRGBK="+progressivoBk+"&APRGBK=D";
			}
	params = params + "&REQUESTSAVEDATABEFORECALLHOST=Y";
	doCallServer('', false, progAzioneFunz, params); //non esegue la submit ma richiama il server passando solo dati sulla request
	return;

}

/**
 * Il metodo disabilita il pulsante Invia qualora il 
 * record visualizzato sia di tipo Escussione Conforme
 * 
 * segnalazione - MW01030 
 * 
 */
function managePullInvia(){
	if($("#C0110B").val()!=""){
		if($("#C0110B").val() == "C"){
			 $("#butt0800").attr('disabled', 'true').addClass('disabled');
		}
	}
}

/**
 * richiamato sull'onload della lista - disabilita tutti i pulsanti eccetto il trova 
 */
function disablePullOnLoad(azione){
	if(azione!="G"){ //se l'azione e diversa dal salva
		$("#div_bottoniHost").find('input[type=button]').each(function() {
			if (this.id != 'butt0811' && this.id != 'butt0836' && this.id != 'butt1753' && (this.id != 'Z' || this.id != 'BACKREFRESH')) {  //trova o BACK
				$(this).attr('disabled', 'true').addClass('disabled');	
			}    	
	    });
	}
}

/**
 * Il metodo disabilita il pulsante Upload Pdf e Scrivi Comunicazione
 * qualora la pratica non presenti il numero di riferimento
 * perche ancora da inviare a banca
 * 
 * @param selRec
 * @param isSel
 */
function managePullSenzaRiferimento(selRec, isSel){
	var riferimentoTll = "CAMPO_"+selRec+"_2";
	var riferimentoPratica = $("#"+riferimentoTll).val();
	if(isSel){
		if(riferimentoPratica != ''){
		   	$('#fileupload').prop('disabled', false).parent().removeClass('disabled');   
		   	$("#butt0859").removeAttr('disabled').removeClass('disabled');
		   	$("#butt0855").removeAttr('disabled').removeClass('disabled');
		}else{
		   	$('#fileupload').prop('disabled', true).parent().addClass('disabled');
		    $("#butt0859").attr('disabled', 'true').addClass('disabled');
		    $("#butt0855").attr('disabled', 'true').addClass('disabled');
		} 
	}else{
		$('#fileupload').prop('disabled', true).parent().addClass('disabled');
		$("#butt0859").attr('disabled', 'true').addClass('disabled');
		$("#butt0855").attr('disabled', 'true').addClass('disabled');
	}
} 

/**
 * Il metodo disabilita il pulsante leggi comunicazioni 
 * qualora non ci siano comunicazioni da visualizzare
 * 
 * @param selRec
 * @param isSel
 */
function managePullLeggiComunicazioni(selRec, isSel){
	//disattiva leggi comunicazioni            
	var campotreno = "TRENO_"+selRec;
	var valRec = "";
	if(document.forms['formInserimento'].elements[campotreno]) valRec = document.forms['formInserimento'].elements[campotreno].value;
	var valAlert = valRec.substring(191,192);
	
	if(isSel){
		if(valAlert == ' '){
		    $('#butt0843').attr('disabled', 'true').addClass('disabled');
		}else{
		    $('#butt0843').removeAttr('disabled').removeClass('disabled');
		} 
	}else{
		$("#butt0843").attr('disabled', 'true').addClass('disabled');
	}
}
/**
 * @param codlista codice dato della TLL di lista
 * @param selRec index del record selezionato
 * 
 * @utilizzo ripulisce data e numero 10100-10200, valorizza il c.d. di TLL con il record selezionato
 */	
function dynSelezionaRecordOneClick(codlista, selRec) {
	
	var table = $('#myTable').DataTable();
	var selPage = table.page();
	
	var selezione = document.forms['formInserimento'];
	//Ripulisce Data e Numero Log (per correggere errore aggiornamento log pilota)
	$("#C10100").val("");
	$("#A10100").val("");
	$("#C10200").val("");
	$("#A10200").val("");
	
	//NUOVA GESTIONE MEMORIZZAZIONE RECORD
	var nomeCampoRecSel = "RECSEL_" + progettoFunzioneGlobal;
	if(selezione.elements[nomeCampoRecSel]){
		selezione.elements[nomeCampoRecSel].value = selRec;
	}
	var cwrec = "CWRECS";

	//valorizza il campo hidden dei parametri di selezione che contiene il Numero del Record selezionato
	if(selezione.elements[cwrec]){
		selezione.elements[cwrec].value = selRec + "," + selPage; //numero record selezionato + pagina del record selezionato
	}
	// valorizza la lista con il record selezionato
	var campotreno = "TRENO_"+selRec;
	if(selezione.elements[campotreno] && selezione.elements[campotreno].value!= ''){
		var valRec = selezione.elements[campotreno].value;
		$("#C" + codlista).val(valRec);
		$("#A" + codlista).val("D");		
	}
}

/**
* Viene richiamato sul onClick delle pagine della lista
* ripulisce il record selezionato salvato sul campo WRECS
*/
function cleanCWRECS(){
	var cwrec = "CWRECS";
	var selezione = document.forms['formInserimento'];
	selezione.elements[cwrec].value = "";	
}

/**
* Il metodo permette il salvataggio del record quando si passa da una lista ad un'altra lista 
* e poi al dettaglio
*/
function manageNavListe(){
	var cwrec1 = "CWREC1";
	var cwrec2 = "CWREC2";
	var cwrec = "CWRECS";
	var selezione = document.forms['formInserimento'];
	selezione.elements[cwrec2].value = selezione.elements[cwrec1].value;	
	selezione.elements[cwrec1].value = selezione.elements[cwrec].value;	
}



/**
 * @param codlista
 * @param selRec
 * 
 * @utilizzo legge dal record il progetto funzione da passare ad Host per la visualizzazione di diverse transazioni
 */
function dynSelezionaRecordElementiPratica(codlista, selRec){

	var progFunzHiddenTll = $("#CAMPOI_" + selRec + "_1").val(); // progetto funzione hidden nella TLL (primo campo hidden nella lista)
	
	var prog = progFunzHiddenTll.substring(0, 2);
	var azione = progFunzHiddenTll.substring(2, 3);
	var funz = progFunzHiddenTll.substring(3);
	
	var params = PAR_BACK + NAV_Y; //+ MERGE_Y
	
	var progAzioneFunz = prog + azione + funz;
	//se l'elemento è una stamnpa Host appoggia il prog/funz 06C270 o 06C271 sulla tll
	if(progAzioneFunz == '06C270' || progAzioneFunz == '06C271'){
		var valRec =  $("#TRENO_" + selRec).val();
        var params = "Ibis.do?"+NAV_N;
        refreshPATH();
        var preparingMessageHtml = "Stiamo preparando il file, attendere prego...";
        var failMessageHtml = "Si e' verificato un problema temporaneo durante il reperimento del file, provare di nuovo.";
       
        if(linguaLabelsT1500 == "E"){
            preparingMessageHtml = "Getting file, wait please";
            failMessageHtml = "A temporary error has been encountered while getting file, please try again."
        }
       
        var hashParameters = {};
        hashParameters['FUNZIONE'] = progAzioneFunz;
        hashParameters['WSESSIONID'] = sessIdGlobal;
		assumiCOAUTAjax(document.forms['formInserimento'],hashParameters);
		hashParameters['C93270'] = valRec;
		hashParameters['A93270'] = 'D';

    	var url = PATH + params;
        $.fileDownload(url, {
            preparingMessageHtml: preparingMessageHtml,
            failMessageHtml: failMessageHtml,
            httpMethod: "POST",
            data: hashParameters
        });
        return false; 
	}else{
		doCallServer('', false, progAzioneFunz, params);	
	}	 
}
/**
 * @param codlista
 * @param selRec
 * 
 * @utilizzo ripulisce data e numero 10100-10200, valorizza il c.d. di TLL con il record selezionato
 */	
function dynSelezionaRecordElencoModelli(codlista, selRec) {
	var prog = progettoFunzioneGlobal.substring(0, 2);
	var funz = progettoFunzioneGlobal.substring(2, 5);
	//Ripulisce Data e Numero Log (per correggere errore aggiornamento log pilota)
	$("#C10100").val("");
	$("#A10100").val("");
	$("#C10200").val("");
	$("#A10200").val("");

	// valorizza la lista con il record selezionato
	var campotreno = "TRENO_"+selRec;
	var valRec = document.forms['formInserimento'].elements[campotreno].value;
	
	$("#C" + codlista).val(valRec);
	$("#A" + codlista).val("D");
	var progAzioneFunz = prog + "V" + funz;
	var params="";
	if(prog == '06' && (funz== '336' || funz== '279' || funz== '280')){
		params = "&CLEAR=TRUE&ALEAR=D";
	}else{
		params = PAR_BACK + NAV_Y; //+ MERGE_Y
	}
	
	doCallServer('', false, progAzioneFunz, params);//params
}

/**
 * @param codlista
 * @param selRec
 * @param prog_param 
 * @param funz_param
 * 
 * @utilizzo ripulisce data e numero 10100-10200, valorizza il c.d. di TLL con il record selezionato
 * imposta funz_param e prog_param se valorizzati
 */
function dynSelezionaRecord(codlista, selRec, prog_param, funz_param) {
	var prog = progettoFunzioneGlobal.substring(0, 2);
	var funz = progettoFunzioneGlobal.substring(2, 5);
	if(prog_param)prog = prog_param;
	if(funz_param)funz = funz_param;
	//sola visualizzazione - disabilitato il doppioclik
	if(isListaJqWidgetReadonly(prog,funz)){
		return;
	}	
	//Ripulisce Data e Numero Log (per correggere errore aggiornamento log pilota)
	$("#C10100").val("");
	$("#A10100").val("");
	$("#C10200").val("");
	$("#A10200").val("");
	
	// valorizza la lista con il record selezionato
	var campotreno = "TRENO_"+selRec;
	var valRec = document.forms['formInserimento'].elements[campotreno].value;
	$("#C" + codlista).val(valRec);
	$("#A" + codlista).val("D");
	var progAzioneFunz = prog + "V" + funz;
	//per lista notifiche garanzie ricevute
	if(codlista == '93390'){		
		var comunicazione = valRec.substring(170,171);
		//se presenten una sola comunicazione apro dettaglio comunicazione
		if(comunicazione == 'A'){
			progAzioneFunz = "06P627";
		//se presenti piu comunicazioni apro inquiry comunicazioni
		}else if(comunicazione == 'C'){
			progAzioneFunz = "06P308";
		//altrimenti non chiamo Host
		}else{
			return;
		}
	}	
	var params = PAR_BACK + NAV_Y; //+ MERGE_Y
	doCallServer('', false, progAzioneFunz, params);//params
}

/**
 * @param prog
 * @param funz
 * 
 * @utilizzo set liste di sola visualizzazione
 * @return boolean
 */
function isListaJqWidgetReadonly(prog,funz){
	if (prog+funz == '06661'){
		return true;
	}else {
		return false;
	}	
}
/**
 * @param progrBk
 * @param selRec
 * 
 * @utilizzo Ricerca Banca del Beneficiario: imposta parametri da inviare sulla request
 */
function dynSelezionaRecordRicercaBancaDelBeneficiario(progrBk, selRec){
	var prog = progettoFunzioneGlobal.substring(0, 2);
	var funz = progettoFunzioneGlobal.substring(2, 5);

	var params = "&C086"+progrBk+"=" + $("#CAMPO_" + selRec + "_1").val() + "&A086"+progrBk+"=D"; // nickname
	
	params = params + "&C217"+progrBk+"=" + $("#CAMPO_" + selRec + "_2").val() + "&A217"+progrBk+"=D"; // rag soc
	params = params + "&C218"+progrBk+"=&A218"+progrBk+"=D"; // rag soc
	params = params + "&C219"+progrBk+"=&A219"+progrBk+"=D"; // ind
	params = params + "&C220"+progrBk+"=&A220"+progrBk+"=D"; // cap
	params = params + "&C221"+progrBk+"=" + $("#CAMPO_" + selRec + "_3").val() + "&A221"+progrBk+"=D"; // loc
	
	params = params + '&TORNAINDIETRO=S' + MERGETORNAINDIBIS_Y; 
	
	var progAzioneFunz = prog + "Z" + funz;

	doCallServer('', true, progAzioneFunz, params); //non esegue la submit della form, passa solo i parametri sulla request

}
/**
 * @param progressivoCli
 * @param selRec
 * @param progressivoCli
 * 
 * @utilizzo Ricerca Beneficiari: imposta parametri da inviare sulla request
 */
function dynSelezionaRecordRicercaBeneficiari(progressivoCli, selRec, progressivoBk) {
	var prog = progettoFunzioneGlobal.substring(0, 2);
	var funz = progettoFunzioneGlobal.substring(2, 5);
	
	var params = "&C37000=" + $("#CAMPO_" + selRec + "_1").val() + "&A37000=D"; // nickname
	params = params + "&C084"+progressivoCli+"=" + $("#CAMPO_" + selRec + "_3").val() + "&A084"+progressivoCli+"=D"; // cat
	params = params + "&C217"+progressivoCli+"=" + $("#CAMPO_" + selRec + "_2").val() + "&A217"+progressivoCli+"=D"; // rag soc 1
	params = params + "&C218"+progressivoCli+"=" + $("#CAMPOI_" + selRec + "_1").val() + "&A218"+progressivoCli+"=D"; // rag soc 2
	
	params = params + "&C219"+progressivoCli+"=" + $("#CAMPOI_" + selRec + "_2").val() + "&A219"+progressivoCli+"=D"; // indirizzo benef
	params = params + "&C220"+progressivoCli+"=" + $("#CAMPOI_" + selRec + "_3").val() + "&A220"+progressivoCli+"=D"; // cap benef
	params = params + "&C221"+progressivoCli+"=" + $("#CAMPOI_" + selRec + "_4").val() + "&A221"+progressivoCli+"=D"; // localita benef
	params = params + "&C04400=" + $("#CAMPOI_" + selRec + "_5").val() + "&A04400=D"; // paese benef
	
	var attributo="=D";		
	params = params + "&C086"+progressivoBk+"=" + $("#CAMPO_" + selRec + "_4").val() + "&A086"+progressivoBk+attributo; // id bk
	if($("#C24PFO").val().substring(0, 2)=="95" && $("#CAMPO_" + selRec + "_4").val()!="")attributo="=B";
	params = params + "&C217"+progressivoBk+"=" + $("#CAMPO_" + selRec + "_5").val() + "&A217"+progressivoBk+attributo; // rag soc bk 1
	params = params + "&C218"+progressivoBk+"=" + $("#CAMPOI_" + selRec + "_7").val() + "&A218"+progressivoBk+attributo; // rag soc bk 2
	
	params = params + "&C219"+progressivoBk+"=" + $("#CAMPOI_" + selRec + "_8").val() + "&A219"+progressivoBk+attributo; // indirizzo bk
	params = params + "&C220"+progressivoBk+"=" + $("#CAMPOI_" + selRec + "_9").val() + "&A220"+progressivoBk+attributo; // cap bk
	params = params + "&C221"+progressivoBk+"=" + $("#CAMPOI_" + selRec + "_10").val()+ "&A221"+progressivoBk+attributo; // localita bk
	params = params + "&C04400=" + $("#CAMPOI_" + selRec + "_11").val()+ "&A04400=D"; // paese bk

	params = params + '&TORNAINDIETRO=S' + MERGETORNAINDIBIS_Y;
	
	var progAzioneFunz = prog + "Z" + funz;

	doCallServer('', true, progAzioneFunz, params);//non esegue la submit della form, passa solo i parametri sulla request

}
/**
 * @param nomeCd codice dato
 * @utilizzo controlla se il codice dato e' di tipo multiriga 
 * @return boolean
 */
function isMultiriga(nomeCd){
	
	for (var i = 0; i < multirigaArray.length; i++) {
		if(nomeCd == multirigaArray[i])return true;
	}
	return false;
}

/**
 * @param nomeCd codice dato
 * @utilizzo Valorizza tutti gli attributi dei campi digitati a "D"
 * @return boolean
 */

function checkAttributi(a) {
	var alertMsg = "Errore Tecnico: ATTR-";
	if(linguaLabelsT1500 == "E"){
		alertMsg = "Technical Error: ATTR-";
	}
	
	for (var i = 0; i < a.length; i++) {

		if (a.elements[i].type == "text" && a.elements[i].name) { 

			var nome = a.elements[i].name; // Nome dell'input

			var codice = nome.substring(1, nome.length); 
			var attr = "A" + codice; 
			var the_char = nome.charAt(0); 

			if (the_char == 'C') {
				if (a.elements[attr]) {					
					if(a.elements[nome].value != "" && a.elements[attr].value == ""){						
						a.elements[attr].value = "D";	
					}
				} else { 
					if(isMultiriga(nome)){
						var attrMulti = "A" + codice.substring(0,4)+"0";
						if(a.elements[nome].value != "" && a.elements[attrMulti].value == ""){
							a.elements[attrMulti].value = "D"; 
						}
						continue; //se multiriga non da errore
					}
					alert(alertMsg+nome);//Non esiste l'attributo del campo=" + nome + " !!!");
					return false;
				}
			} 
		}
	}
	return true;
};


var oneTimeAdditionalParams = null;
function registerOneTimeAdditionalParams(params) {
    oneTimeAdditionalParams = params;
}

    /**
     * @param esito - esito del monitoring ibis
     * @param noSubmit - non invia i dati in submit
     * @param progAzioneFunz - progetto azione funzione da impostare nel campo FUNZIONE
     * @param params - parametri
     * 
     * @utilizzo invia i dati al server (con submit o request params)
     */

    function doCallServer(urlOverride, noSubmit, progAzioneFunz, params) {
	
        params = params || "";
        loadingDiv(true);
	
        var turnOffLoading = function () {
            loadingDiv(false);
        };
	
        var url = 'Ibis.do';
        if (urlOverride && urlOverride != '') url = urlOverride;

        var dynParameter = url + '?'
        if (oneTimeAdditionalParams) {
            dynParameter += oneTimeAdditionalParams + "&";
            oneTimeAdditionalParams = "";
        }
        dynParameter +='PARAMS=' + params;

        // Invia in submit la form
        if(!noSubmit){
            ctrlFieldFacoltativi();
		
            document.forms['formInserimento'].FUNZIONE.value = progAzioneFunz;
            document.forms['formInserimento'].action = dynParameter;
            //ma.
            //document.forms['formInserimento'].submit();
            Bridge.instance.post(document.forms['formInserimento'], turnOffLoading , turnOffLoading );
		
            //Non invia in submit la form
        }else{
            //ma.
            //document.location.href = PATH + dynParameter;
            Bridge.instance.redirect(PATH + dynParameter,  turnOffLoading , turnOffLoading);
        }
    }

    
    //Gestione Record e Pagina record selezionato
    function setPage(codlista){
    	var cwrecs_ = document.forms['formInserimento'].CWRECS.value;
        var cwrecs = cwrecs_.split(',');
        if(cwrecs.length > 1){
            var page_ = 0;
            page_ = parseInt(cwrecs[1]);
            if(page_ != 0 && page_ != $('#myTable').DataTable().page()){
                document.forms['formInserimento'].CWRECS.value = cwrecs[0]+""; //cancella la pagina e lascia solo il rec selezionato
                
                $('#myTable').DataTable().page(page_).draw(false);               
            }
            var recSel = cwrecs[0];
        	//var selPage = $('#myTable').DataTable().page();
            dynSelezionaRecordOneClick(codlista,recSel);
            
            $('#myTable tr.selected').removeClass('selected');
            $('#myTable').DataTable().row(recSel).nodes().to$().addClass('selected'); 
            //disattiva fileupload
		   	managePullSenzaRiferimento(recSel,true);
		   	//disattiva leggi comunicazioni per lista pratiche in Lav.
		   	if (codlista=='93290' && progettoFunzioneGlobal=='06501'){
		   		managePullLeggiComunicazioni(recSel,true);	
		   	}		   	             
        }else {
            return;
        }
       
    }
    
    
    /**
     * @param setBusy
     * @utilizzo imposta modal window loading
     */
    function loadingDiv(setBusy) {
    
        busy = setBusy;

        if (busy) {
            $(".section.clearfix").css('opacity', '.8');
            $(".loading-custom").css('display', 'inline');
        } else {
            $(".section.clearfix").css('opacity', '1');
            $(".loading-custom").css('display', 'none');
        }
    }

    /**
     * @utilizzo Ripulisce tutti i campi della form con valore Opzionale
     */
    function ctrlFieldFacoltativi(){		
        $("form").find('input[type=text]').each(function() {
            if ($(this).val() == opzionaleVar) { //TODO da internazionalizzare..				
                $(this).val("");
            }
        });
    }
    /**
     * @param checkName
     * @param attrCheckName
     * @param valoreCheck
     * @utilizzo cambia il valore ad checkbox nascosto
     */
    //TODO utilizzata?
    function checkChange(checkName,attrCheckName,valoreCheck){
        var codCheckHidd = "#W" + checkName + "vg";
        var codCheck = "#C" + checkName;
        var codCheckAttr = "#" + attrCheckName;
        if($(codCheckHidd).is(':checked')){	
            $(codCheckHidd).val(valoreCheck);
            $(codCheckHidd).attr('checked', 'checked');
        }else{
            $(codCheckHidd).val("N");
            $(codCheckHidd).removeAttr('checked');	
        }
        if($(codCheckHidd).is(':checked')){		
            $(codCheck).val($(codCheckHidd).val());
            $(codCheckAttr).val("D");
        }else {
            $(codCheck).val("N");
            $(codCheckAttr).val("D");	
        }
    }
    /**
     * @utilizzo focus sul primo campo disponibile
     */
    function dynDocload() {    	
      var arrayLength = sectionArray.length;
      setAllSections(arrayLength);// Gestione Sezioni completate o no        
    }
    
    /**
     * @param arrayLength
     * @utilizzo set legend/div ok o ko
     */
    function setAllSections(arrayLength){
    	var codeToFocus = null
        for (var i = 1; i <= arrayLength; i++) {
        	
            var divContenitore = "#div" + sectionArray[i];
            var legendObject = "legend" + sectionArray[i];
            var campoObblEmpty = false;
            var almenoUnCampoObbl = false;
            $(divContenitore).find('.obbl').each(function() {
                almenoUnCampoObbl = true;
                if ($(this).val() == "" && $(this).is(':visible')) {
                    campoObblEmpty = true; // ha trovato un campo non valorizzato
                }
            });
            $(divContenitore).find('input[type=text]').each(function() {
            	if(i===1){
            		codeToFocus = $(divContenitore).find("input:first");
            	}else if(i===2 && codeToFocus===null){
          			codeToFocus = $(divContenitore).find("input:first");
            	}
            	
                if ($(this).val() == opzionaleVar){//riattribuisce la classe di stile ai campi opzionali dopo un refresh della pagina				
                    $(this).addClass('default-text');
                }
            });            	
            if (campoObblEmpty && almenoUnCampoObbl) {
                setSectionKO("#" + legendObject);
            } 
        }
        //console.log(codeToFocus)
        if(codeToFocus)codeToFocus.focus();
        $(window).scrollTop(0);
    }
    /**
     * @param text testo da cambiare
     * @param strA carattere da sostituire
     * @param strB carattere che sostiusce
     * @utilizzo Sostituisce il carattere che viene passato in strA con quello passato in strB su tutta la stringa 
     */

    function replaceAllTextarea(text, strA, strB) {
        var appoggio;
        appoggio = text.replace(new RegExp(strA, "g"), strB);
        return appoggio;
    }

    /**
     * @param pdf tipo stampa
     * @utilizzo apre un popup di stampa PDF 
     */
    function visualStampa(pdf) {
	
        return;

    };

    /**
     * @param progrCd progressivo del codice dato
     * @utilizzo assume il valore dei codici dato specificati
     * @return hashParameters
     */
    function getDataFormAnagrafica(progrCd,hashParameters) {
        hashParameters = getData(document.forms['formInserimento'],"086" + progrCd,hashParameters);
        return hashParameters;
    }
    /**
     * @param aForm 
     * @param cd codice dato specificato
     * @param hashParameters
     * 
     * @utilizzo incrementa hashParameters
     * 
     * @return hashParameters
     */
    function getData(aForm,cd,hashParameters){
        var codice = "C" + cd;
        var attrib = "A" + cd;
        if (aForm.elements[codice]) {
            hashParameters[codice] = aForm.elements[codice].value;
            hashParameters[attrib] = "D";
        }
        return hashParameters;
    }
    /**
     * @param cd codice dato specificato
     * @param hashParameters
     * @utilizzo ripulisce i codici dato specificati
     */
    function cleanData(cd, isSelect){

        var codice = "C"+cd;
        var attrib = "A"+cd;

        if(!document.forms['formInserimento'].elements[codice])return;
	
        //codice
        if(isSelect){
            for (var j = 0; j < document.forms['formInserimento'].elements[codice].length; j++) {			
                if (document.forms['formInserimento'].elements[codice][j].value == "" || document.forms['formInserimento'].elements[codice][j].value == " ") {
                    document.forms['formInserimento'].elements[codice][j].selected = true;
                } else {
                    document.forms['formInserimento'].elements[codice][j].selected = false;
                }
            }
        }else{
            document.forms['formInserimento'].elements[codice].value = "";
        }
	
        //gestione attributo obbl
//        var valObb = eval('isCampoObbl_'+cd);
//        manageStyleFields(document.forms['formInserimento'].elements[codice],valObb);
        manageAttributi(document.forms['formInserimento'].elements[codice]);
	
        //attributo
        if (document.forms['formInserimento'].elements[attrib])document.forms['formInserimento'].elements[attrib].value = "D";
    }
    /**
     * @utilizzo ripulisce tutti codici dato specificati
     */
    function cleanDataRifPratica() {
        cleanData("37000");
        cleanData("217F0");
        cleanData("218F0");
        cleanData("219F0");
        cleanData("220F0");
        cleanData("221F0");
        cleanData("086B0");
        cleanData("217B0");
        cleanData("218B0");
        cleanData("219B0");
        cleanData("220B0");
        cleanData("221B0");
        cleanData("42190");
        cleanData("42180");
        cleanData("00700");
        cleanData("11000");
        cleanData("02930");
        cleanData("02930");
        cleanData("02700");
        cleanData("42530");
        cleanData("42540");
        cleanData("9410N");
        cleanData("9410A");
        cleanData("9410B");
        cleanData("04400",true);
	
    }

    /**
     * @utilizzo ripulisce tutti codici dato specificati
     */
    function cleanDataRicRubrica(aForm, progrCd_Cli, progrCd_Bk) {
        //dati cliente
        cleanData("217" + progrCd_Cli);
        cleanData("218" + progrCd_Cli);
        cleanData("219" + progrCd_Cli);
        cleanData("220" + progrCd_Cli);
        cleanData("221" + progrCd_Cli);
        cleanData("04400",true);
        //dati banca 
        cleanData("086" + progrCd_Bk);  
        cleanData("084" + progrCd_Bk);
        cleanData("217" + progrCd_Bk);
        cleanData("218" + progrCd_Bk);
        cleanData("219" + progrCd_Bk);
        cleanData("220" + progrCd_Bk);
        cleanData("221" + progrCd_Bk);
        $("#C218" + progrCd_Cli).val($("#C218" + progrCd_Cli).data('default-text'));
        $("#C218" + progrCd_Cli).addClass('default-text');
	
        $("#C217" + progrCd_Bk).val($("#C217" + progrCd_Bk).data('default-text'));
        $("#C217" + progrCd_Bk).addClass('default-text');
	
        $("#C218" + progrCd_Bk).val($("#C218" + progrCd_Bk).data('default-text'));
        $("#C218" + progrCd_Bk).addClass("default-text");

        $("#C086" + progrCd_Bk).val($("#C086" + progrCd_Bk).data('default-text'));
        $("#C086" + progrCd_Bk).addClass("default-text");
        $("#C219" + progrCd_Bk).val($("#C219" + progrCd_Bk).data('default-text'));
        $("#C219" + progrCd_Bk).addClass("default-text");
        $("#C221" + progrCd_Bk).val($("#C221" + progrCd_Bk).data('default-text'));
        $("#C221" + progrCd_Bk).addClass("default-text");
    }
    /**
     * @utilizzo ripulisce tutti codici dato specificati
     */
    function cleanDataRicAnagrafica(aForm, progrCd) {
    	cleanData("084" + progrCd);
    	cleanData("217" + progrCd);
        cleanData("218" + progrCd);
        cleanData("219" + progrCd);
        cleanData("220" + progrCd);
        cleanData("221" + progrCd);
	
        $("#C217" + progrCd).val($("#C217" + progrCd).data('default-text'));
        $("#C217" + progrCd).addClass("default-text");
	
        $("#C218" + progrCd).val($("#C218" + progrCd).data('default-text'));
        $("#C218" + progrCd).addClass("default-text");			
	
        $("#C219" + progrCd).val($("#C219" + progrCd).data('default-text'));
        $("#C219" + progrCd).addClass("default-text");
	
        $("#C220" + progrCd).val($("#C220" + progrCd).data('default-text'));
        $("#C220" + progrCd).addClass("default-text");
	
        $("#C221" + progrCd).val($("#C221" + progrCd).data('default-text'));
        $("#C221" + progrCd).addClass("default-text");

    }
    /**
     * @utilizzo assume il valore dei codici dato specificati
     * @return hashParameters
     */
    function getDataFormRifPratica(aForm,hashParameters) {
        hashParameters = getData(aForm,"38100",hashParameters);
        hashParameters = getData(aForm,"42100",hashParameters);
        hashParameters = getData(aForm,"F0211",hashParameters);
        hashParameters = getData(aForm,"42130",hashParameters);
        return hashParameters;
    }
    /**
     * @utilizzo assume il valore dei codici dato specificati
     * @return hashParameters
     */	
    function getDataFormRicRubrica(aForm,hashParameters) {
        hashParameters = getData(aForm,"37000",hashParameters);               
        return hashParameters;
    }
    
    /**
     * @utilizzo assume il valore dei codici dato specificati
     * @return hashParameters
     */	
    function getDataFormIBAN(aForm,hashParameters,obj) {
    	var iban1="";
    	var iban2="";
        
    	var codice1 = "C44000";
        var attrib1 = "A44000";
        var codice2 = "C44100";
        var attrib2 = "A44100";

		iban1=obj.value.substring(0,4);
		iban2=obj.value.substring(4);

		hashParameters[codice1] = iban1;
        hashParameters[attrib1] = "D";
        hashParameters[codice2] = iban2;
        hashParameters[attrib2] = "D"; 
        //paese
        hashParameters = getData(aForm,"04400",hashParameters);
        //C.D. necessario ad Host
        hashParameters["C24PFO"] = progettoFunzioneGlobal;
        hashParameters["A24PFO"] = "D";
        
        return hashParameters;
    }
    
    /**
     *
     */
    function assumiGeneralParameters(eForm,progFunz,hashParameters) {
        hashParameters["FUNZIONE"]= progFunz;
        hashParameters["AJAX_REQUEST_CODE"]="COMPL_ANAGR";
        hashParameters["WSESSIONID"]= sessIdGlobal; 
        assumiCOAUTAjax(eForm,hashParameters);
        return hashParameters;
    }
    
    
    /**
     * @utilizzo legge i dati dall'xml e valorizza i campi
     */
    function findXmlAndSetValueOnMap(xmldoc, aForm, cdPart, select, isPaese, checkbox, isBonifici) {
        var cd = "C" + cdPart;
        var att = "A" + cdPart;
        var valFilled = "";
        $(xmldoc).find(cd).each(function() {
            if (aForm.elements[cd]) {
                if (select) {
                    for (var j = 0; j < aForm.elements[cd].length; j++) {
                        var val = $(this).text();
                        if (isPaese) {
                            valFilled = val;
                        }	
                        if (aForm.elements[cd][j].value == valFilled) {
                            selected = true;
                            aForm.elements[cd].selectedIndex = j;
                        } else {
                            selected = false;
                        }
                    }
                } else if (checkbox) { 
                    var valCheckbox = $(this).text(); 
                    var imgCheck = "M" + cdPart;
				
                    if (valCheckbox != '') {
                        document.forms['formInserimento'].elements[imgCheck].checked = true;
                        document.forms['formInserimento'].elements[cd].value = valCheckbox;
                    }
                } else {
                    aForm.elements[cd].value = $(this).text();
                    if($(this).text() !=null){
                        $("#"+cd).removeClass('default-text');					
                    }
                }
			
                if($("#"+cd).hasClass("obbl")){
                    manageStyleFields(aForm.elements[cd],"S");
                    manageAttributi(aForm.elements[cd]);

                }
                else {
                    manageStyleFields(aForm.elements[cd],"S");
                    manageAttributi(aForm.elements[cd]);
                }
            }
		
            checkSection(aForm.elements[cd]);//controlla la sezione
        });
        $(xmldoc).find(att).each(function() {
        	if(isBonifici){ //setta l'attributo a B solo per le funzioni dei bonifici
        		if (aForm.elements[att]) aForm.elements[att].value = "B";
        	}else{
        		if (aForm.elements[att]) aForm.elements[att].value = $(this).text();	
        	}                        
        });
    }
    /**
     * @utilizzo imposta i codici coaut di licensing
     */
    function assumiCOAUT(eForm) {
        // Gestione COAUT
        var valCOAUT = eForm.elements["CCOAUT"].value;
        var valAUTCL = eForm.elements["CAUTCL"].value;
        var valAUTPR = eForm.elements["CAUTPR"].value;
        var valAUTFU = eForm.elements["CAUTFU"].value;
        var valAUTDT = eForm.elements["CAUTDT"].value;

        var coaut = "&CCOAUT=" + valCOAUT + "&ACOAUT=D&CAUTCL=" + valAUTCL
                + "&AAUTCL=D&CAUTPR=" + valAUTPR + "&AAUTPR=D&CAUTFU=" + valAUTFU
                + "&AAUTFU=D&CAUTDT=" + valAUTDT + "&AAUTDT=D";

        return coaut;
    }
    
    /**
     * @utilizzo imposta i codici coaut di licensing
     */
    function assumiCOAUTAjax(eForm,hashParameters) {
        // Gestione COAUT
        var valCOAUT = eForm.elements["CCOAUT"].value;
        var valAUTCL = eForm.elements["CAUTCL"].value;
        var valAUTPR = eForm.elements["CAUTPR"].value;
        var valAUTFU = eForm.elements["CAUTFU"].value;
        var valAUTDT = eForm.elements["CAUTDT"].value;

        hashParameters["CCOAUT"]=valCOAUT;
        hashParameters["ACOAUT"]="D";
        
        hashParameters["CAUTCL"]=valAUTCL;        
        hashParameters["AAUTCL"]="D";
        
        hashParameters["CAUTPR"]=valAUTPR;
        hashParameters["AAUTPR"]="D";
        
        hashParameters["CAUTFU"]=valAUTFU;
        hashParameters["AAUTFU"]="D";        

        hashParameters["CAUTDT"]=valAUTDT;
        hashParameters["AAUTDT"]="D";   

    }
    function assumiOtherParamsToPrint(hashParameters,dataLog,numLog) {
    	hashParameters['C36790'] = 'S';
    	hashParameters['A36790'] = 'D';
    	hashParameters['C102C0'] = dataLog;
    	hashParameters['A102C0'] = 'D';
    	hashParameters['C101C0'] = numLog;
    	hashParameters['A101C0'] = 'D';
    	return hashParameters;
    }

    
    /**
     * @param isObbl boolean
     * @param id id codice dato
     * @utilizzo gestisce lo stile dei campi obbligatori
     */
    function manageObbligatori(isObbl, id) {
        if (isObbl) {
            if($(id).val()==""){
                if(!($(id).prop('readonly'))){
                    $(id).removeClass("normal");
                    $(id).addClass("obbl");
                }
            }
        } else {
            if(!($(id).prop('readonly'))){
                $(id).removeClass("obbl");
                $(id).addClass("normal");
            }
        }
    }
    /**
     * @param id id sezione
     * @utilizzo chiude tutte le sezioni ad eccezione di id
     */
    function closeOtherSection(id) {
        for (var int = 0; int < sectionArray.length; int++) {
            if (id != sectionArray[int])
                if ($("#div" + sectionArray[int]).is(":visible") && !($("#div" + sectionArray[int]).hasClass("alwaysOpen"))) { 
                    toggleDiv(sectionArray[int], true);
                }
            ;
        }
    }
    /**
     * @param id id sezione
     * @utilizzo apre/chiude la sezione specificata in id
     */
    function toggleDiv(id, dont) {

        if($("#div" + id).is(":hidden")){//!important fix bug: quando le sezioni sono tutte aperte e ne chiudo una le chiudeva tutte.
            if (!dont)closeOtherSection(id);
        }
	
        //'fast' and 'slow' can be supplied 200 and 600 milliseconds, respectively.
        if (dont){
            $("#div" + id).toggle("slow", function() {
                // Animation complete.
                changeExpColl(id);
            });
        }
            //'fast' and 'slow' can be supplied 200 and 600 milliseconds, respectively.
        else{ 
            $("#div" + id).toggle("slow", function() {
                // Animation complete.
                changeExpColl(id);
            });
        }
	
        //Attribuisce il fuoco al primo campo visibile della sezione
        var firstInput = $("#div" + id).find('input[type=text],input[type=password],input[type=radio],input[type=checkbox],textarea,select').filter(':visible:first');
	
        if (firstInput != null) {
            firstInput.delay(600).focus();
        }
    }

    /**
     * @param id
     * @utilizzo cambia l'icona collapse o expand nella sezione
     */
    function changeExpColl(id){
        $('#div-Exp-Coll' + id).find("a").removeClass("hidden");
        if($("#div-Exp-Coll" + id).find("a").hasClass("expand")){
            $("#div-Exp-Coll" + id).find("a").removeClass("expand");
            $("#div-Exp-Coll" + id).find("a").addClass("collapse");    
        }
        else if($("#div-Exp-Coll" + id).find("a").hasClass("collapse")){ 
            $("#div-Exp-Coll" + id).find("a").removeClass("collapse")
            $("#div-Exp-Coll" + id).find("a").addClass("expand");
        }
    }

    /**
     * @param eForm
     * @utilizzo Controllo campi obbligatori
     */
    function checkObbl(eForm) {
        var alertMsg = "Valorizzare i campi obbligatori!";
        if(linguaLabelsT1500 == "E"){
            alertMsg = "Value Mandatory Fields!";
        }
        for (var i = 0; i < eForm.length; i++) {
            var codDatoObbl = eForm.elements[i].name;

            if(codDatoObbl == undefined)continue;//se il nome del file e' undefined esce
            if(codDatoObbl.indexOf("[")!=-1 || codDatoObbl.indexOf("]")!=-1)continue;//se il nome del file contiene "[]" esce
        
            if ($('#' + codDatoObbl).hasClass('obbl') && $('#' + codDatoObbl).val() == "") {
                alert(alertMsg);
                var legendObject = getLegendContenitoreID(eForm.elements[i]);// Cattura l'oggetto legend relativo alla sezione dell'oggetto obj
                var divContenitore = legendObject.replace("legend", "");// Cattura l'oggetto div contenitore relativo al campo obj
                closeOtherSection(divContenitore);// chiude tutti gli altri div
                // apre quello in cui e' presente il campo obbligatorio 
                $("#div" + divContenitore).show("slow"); //'fast' and 'slow' can be supplied 200 and 600 milliseconds, respectively.
                $('#' + codDatoObbl).delay(600).focus();
                return false;
            }
        }
        return true;
    }

    /**
     * @param obj
     * @utilizzo Controlla che tutti i campi obbligatori relativi alla sezione siano stati digitati
     */
    function checkSection(obj) {
	
        var legendObject = getLegendContenitoreID(obj);// Cattura l'oggetto legend relativo alla sezione dell'oggetto obj
        var divContenitore = "#div" + legendObject.replace("legend", "");// Cattura l'oggetto div contenitore relativo al campo obj
        var campoPieno = false;
        var campoObblEmpty = false;
        var isSezioneConCampoObbl = false;

        //cerca i campi obbligatori
        $(divContenitore).find('.obbl').each(function() {
		
            isSezioneConCampoObbl = true;
            if ($(this).val() == "" && $(this).is(':visible')) {
                campoObblEmpty = true; // ha trovato un campo non valorizzato ed obbligatorio
            }
        });
	
        //true: gestisce la sezione con campi obbligatori, tutti i campi obbligatori devono essere valorizzati altrimenti KO
        if(isSezioneConCampoObbl){  

            if (campoObblEmpty) {
                setSectionKO("#" + legendObject);
            } else {
                setSectionOK("#" + legendObject);
            }
            return;
        }
	
        //false: gestisce la sezione senza campi obbligatori - anche se un solo campo e' valorizzato la sezione e' OK, se tutti i campi non sono valorizzati la sezione e' KO
        if(!isSezioneConCampoObbl){ 
            $(divContenitore).find('.normal').each(function() {
                if ($(this).val() != "") {
                    campoPieno = true; // ha trovato un campo non valorizzato
                }
            });
            if (!campoPieno) {
                setSectionKO("#" + legendObject);
            } else {
                setSectionOK("#" + legendObject);
            }
        }
    }
    /**
     * @param obj
     * @utilizzo Cattura l'Id del Legend contenitore del campo specificato nell'argomento obj
     * @return string
     */
    function getLegendContenitoreID(obj) {
        var idLegend = "";
        while (obj && obj.parentElement) {
            obj = obj.parentElement;

            if (obj.tagName && obj.tagName.toLowerCase().indexOf("fieldset") != -1) {

                $(obj).find('legend').each(function() {
                    idLegend = this.id;
                    return false;
                });
            }
            if (idLegend != "") {
                break;
            }
        }
        return idLegend;
    }
    /**
     * @param legend
     * @utilizzo attribuisce classe KO al legend specificato
     */
    function setSectionKO(legend) {
        $(legend).removeClass("setSectionOK").addClass("setSectionKO");// section KO
    }
    /**
     * @param legend
     * @utilizzo attribuisce classe OK al legend specificato
     */
    function setSectionOK(legend) {
        $(legend).removeClass("setSectionKO").addClass("setSectionOK");// section OK
    }
    /**
     * @param obj
     * @utilizzo gestisce valori ed attributi dei campi specificati
     */
    function manageDatiSpedizione(obj){
        if (obj.value == "0") {
            $("#C368501").val("");
            $("#C368502").val("");
            $("#C368503").val("");
            $("#C368504").val("");
            $("#C368505").val("");
            $("#C368506").val("");
            $("#dettaglioDatiSpedizione").hide();		
            $("#dataUltimaSpedizione").show();
            $("#C02950").focus();

        } else if (obj.value == "1") {
            $("#C02950").val("");
            $("#dataUltimaSpedizione").hide();		
            $("#dettaglioDatiSpedizione").show();
            $("#C368501").focus();
            manageFacoltativi(true, "#C368502");
            manageFacoltativi(true, "#C368503");
            manageFacoltativi(true, "#C368504");
            manageFacoltativi(true, "#C368505");
            manageFacoltativi(true, "#C368506");
        }
    }
    
    /**
     * @param obj
     * @utilizzo gestisce valori ed attributi dei campi specificati
     */
    function manageSectionModifica(obj){
        if (obj == "S") {
            $("#fieldsetBeneficiario").hide();
            $("#fieldsetAltriDati").hide();
            $("#div_datiModTop").hide();
            $("#div_datiModBottom").hide();
            $("#div_importoIncremento").hide();
        } else{
            $("#fieldsetBeneficiario").show();
            $("fieldsetAltriDati").show();
            $("#div_datiModTop").show();
            $("#div_datiModBottom").show();
            $("div_importoIncremento").show();
        }
    	
        var prog = progettoFunzioneGlobal.substring(0, 2);
    	var funz = progettoFunzioneGlobal.substring(2, 5);
        var progAzioneFunz = prog + "C" + funz;
		//P2L SW23806-SH21256 Rettifica del pulsante Valida - F0830 deve partire con attributo C e non D
		var params = '&CF0830=S&AF0830=C';
		doCallServer('', false, progAzioneFunz, params);// esegue la submit della form
		return;	        
    }
    
    /**
     * @param valuePull
     * @param isOnload
     * @param flagTestoConcordato
     * @param testoOld
     * @param testoNew
     * @utilizzo gestisce valori ed attributi dei campi specificati
     */
    function manageTextAreaEditabile(valuePull,isOnload,flagTestoConcordato,testoOld,testoNew){
        var iForm = document.forms['formInserimento'];
        var azioneNew = "K";
        var funzNew = "";
      
        //Accetta
        if(valuePull == 'A'){
            funzNew = azioneNew+"645";	
            $("#A"+testoNew).val("P");
            $("#C"+testoNew).attr('readonly', 'true');
            $("#C"+testoNew).removeClass('normal');
            $("#C"+testoNew).addClass('protetto');		
            transferValueText(testoNew,testoOld);		
            //VALORIZZO LABEL DINAMICA prima textarea (9410O)
            $("#label_"+testoOld+"_A").show();	
            $("#label_"+testoOld+"_M").hide();
            $("#label_"+testoOld+"_R").hide();
            $("#label_"+testoOld+"_B").hide();
			
            //VALORIZZO LABEL DINAMICA seconda textarea (9410N)
            if(flagTestoConcordato == "N"){
                $("#label_TestoConcordato").show();	
                $("#label_"+testoNew+"_A").hide();
                $("#label_"+testoNew+"_M").hide();
                $("#label_"+testoNew+"_R").hide();
                $("#label_"+testoNew+"_B").hide();
            }else{
                $("#label_"+testoNew+"_A").show();
                $("#label_"+testoNew+"_M").hide();
                $("#label_"+testoNew+"_R").hide();
                $("#label_"+testoNew+"_B").hide();
                $("#label_TestoConcordato").hide();	
            }
            //modifica 
        }else if(valuePull == 'M'){
            funzNew = azioneNew+"642";	
            $("#A"+testoNew).val("D");	
            $("#C"+testoNew).removeAttr('readonly');
            $("#C"+testoNew).removeClass('protetto');
            $("#C"+testoNew).addClass('normal');		
            //		$("#secTextAreaOld").hide();
            //		$("#secTextAreaEditabile").show();
            //VALORIZZO LABEL DINAMICA prima textarea (9410O)
            $("#label_"+testoOld+"_M").show();
            $("#label_"+testoOld+"_A").hide();
            $("#label_"+testoOld+"_R").hide();
            $("#label_"+testoOld+"_B").hide();
            //VALORIZZO LABEL DINAMICA seconda textarea (9410N)
            $("#label_"+testoNew+"_M").show();
            $("#label_"+testoNew+"_A").hide();
            $("#label_"+testoNew+"_R").hide();
            $("#label_"+testoNew+"_B").hide();	
            $("#label_TestoConcordato").hide();	
            //VALORIZZO value textarea editabile trascinando il valore presente nella textarea 9410N
            transferValueTextToModify(isOnload, testoNew, testoOld);
            //rifiuta
        }else if(valuePull== 'R'){
            funzNew = azioneNew+"642";
            $("#A"+testoNew+"").val("P");
            $("#C"+testoNew+"").attr('readonly', 'true');
            $("#C"+testoNew+"").removeClass('normal');
            $("#C"+testoNew+"").addClass('protetto');
            transferValueText(testoNew,testoOld);					
            //VALORIZZO LABEL DINAMICA prima textarea (9410O)
            $("#label_"+testoOld+"_R").show();
            $("#label_"+testoOld+"_A").hide();
            $("#label_"+testoOld+"_M").hide();
            $("#label_"+testoOld+"_B").hide();
            //VALORIZZO LABEL DINAMICA seconda textarea (9410N)
            $("#label_"+testoNew+"_R").show();
            $("#label_"+testoNew+"_A").hide();
            $("#label_"+testoNew+"_M").hide();
            $("#label_"+testoNew+"_B").hide();
            $("#label_TestoConcordato").hide();	
            //abbandona
        }else if(valuePull == 'B'){
            funzNew = "C644";	
            $("#A"+testoNew).val("P");
            $("#C"+testoNew).attr('readonly', 'true');
            $("#C"+testoNew).removeClass('normal');
            $("#C"+testoNew).addClass('protetto');
            transferValueText(testoNew,testoOld);					
            //VALORIZZO LABEL DINAMICA prima textarea (9410O)
            $("#label_"+testoOld+"_B").show();
            $("#label_"+testoOld+"_A").hide();
            $("#label_"+testoOld+"_M").hide();
            $("#label_"+testoOld+"_R").hide();
            //VALORIZZO LABEL DINAMICA seconda textarea (9410N)
            $("#label_"+testoNew+"_B").show();
            $("#label_"+testoNew+"_A").hide();
            $("#label_"+testoNew+"_M").hide();
            $("#label_"+testoNew+"_R").hide();
            $("#label_TestoConcordato").hide();	
        }
        //valorizzo il campo di appoggio con il progetto funzione da passare ad Host
        if(iForm.elements["CH0011"]){
            iForm.elements["CH0011"].value = funzNew;
        }
    }
    
    /**
     * @param valuePull
     * @param isOnload
     * @param flagTestoConcordato
     * @param testoOld
     * @param testoNew
     * @utilizzo gestisce valori ed attributi dei campi specificati
     */
    function manageTextAreaDescrVariazioni(valuePull,isOnload,testoOld,testoNew){	
        var iForm = document.forms['formInserimento'];
        //Accetta
        if(valuePull == 'A'){
            $("#A"+testoNew).val("P");
            $("#C"+testoNew).attr('readonly', 'true');
            $("#C"+testoNew).removeClass('normal');
            $("#C"+testoNew).addClass('protetto');		
            transferValueText(testoNew,testoOld);		         
        //modifica 
        }else if(valuePull == 'M'){
            $("#A"+testoNew).val("D");	
            $("#C"+testoNew).removeAttr('readonly');
            $("#C"+testoNew).removeClass('protetto');
            $("#C"+testoNew).addClass('normal');		
            //VALORIZZO value textarea editabile trascinando il valore presente nella textarea 9410N
            transferValueTextToModify(isOnload, testoNew, testoOld);
        //abbandona
        }else if(valuePull == 'B'){
            $("#A"+testoNew).val("P");
            $("#C"+testoNew).attr('readonly', 'true');
            $("#C"+testoNew).removeClass('normal');
            $("#C"+testoNew).addClass('protetto');
            transferValueText(testoNew,testoOld);					           
        }
    }
    
    /**
     * @param isOnload
     * @utilizzo gestisce valori ed attributi dei campi specificati
     */
    function transferValueTextToModify(isOnload,testoNew,testoOld){
        if($("#C"+testoNew).val()!=null && isOnload!='S'){
            $("#C"+testoOld).val($("#C"+testoNew).val());
            $("#A"+testoOld).val("D");
        }
    }
    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati
     */
    function transferValueText(testoNew,testoOld){
        $("#C"+testoOld).val($("#"+testoOld+"_Hidden").val());
        $("#C"+testoNew).val($("#"+testoNew+"_Hidden").val());
    }
    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati
     */
    function nascondiSezioniDiScelta(){
        $("#secAccettazione").hide();
        $("#secModifica").hide();
        $("#secRifiuta").hide();
        $("#secAbbandona").hide();
	
        $("#div_bottoniActionsStatici").show();	
        $("#div_bottoniHost").hide(); 
        $("#div_bottoneAnnulla").hide();
	
        var iForm = document.forms['formInserimento'];
        if(iForm.elements["CH0011"]){
            iForm.elements["CH0011"].value = "";
        }
	
    }
    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati nei params
     */
    function gestisciSezioniDiScelta(div_section1,div_section2,div_section3,div_section4,codDatoFocus){
        $("#"+div_section1).show();
        if(div_section2 !=null){
            $("#"+div_section2).hide();	
        }
        if(div_section3 !=null){
            $("#"+div_section3).hide();
        }
        if(div_section4 !=null){
            $("#"+div_section4).hide();
        }
        if(codDatoFocus!=null){
            $("#"+codDatoFocus).focus();
        }
        $("#div_bottoniHost").show();
        $("#div_bottoneAnnulla").show();
        $("#div_bottoniActionsStatici").hide();	
    }
    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati nei params
     */
    function mostraActionsReinvioBozze(div_1,div_2,div_3,div_4){	
        $("#div_bottoniActionsStatici").show();
        if(div_1!=null){
            $("#"+div_1).show();
        }
        if(div_2!=null){
            $("#"+div_2).show();
        }
        if(div_3!=null){
            $("#"+div_3).show();
        }
        if(div_4!=null){
            $("#"+div_4).show();
        }

        $("#div_bottoniHost").hide();
    }
    
    
    function manageConti(value,divId,divId2,divId3){
    	
    	if(value == 'C'){
            $("#"+divId).show();
            $("#"+divId2).hide();	
            $("#"+divId3).hide();
            $("#C0841E").val("C/C");
    	}else if(value == 'D' || value == 'E'){
            $("#"+divId2).show();
            $("#"+divId).show();	
            $("#"+divId3).hide();
            $("#C0841E").val("C/D");
    	}else if(value == 'F'){
    		$("#"+divId2).show();
    		$("#"+divId3).show();
            $("#"+divId).hide();	
            $("#C0841E").val("");
    	}else{
            $("#"+divId).hide();
            $("#"+divId2).hide();	
            $("#"+divId3).hide();	
    	}
    }
    
    function manageContiBonifico(value,divId1,divId2,divId3,divId4){
    	
    	if(value == 'C'){
            $("#"+divId1).show();
            $("#"+divId2).hide();	
            $("#"+divId3).hide();
            $("#"+divId4).hide();
            $("#C08411").val("C/C");
            if(($("#C08612").val()!="" && $("#C08612").val()!= opzionaleVar))$("#C08612").val("");
            if($("#C08412").val()!="")$("#C08412").val("");
            if($("#C08512").val()!="")$("#C08512").val("");
            if($("#C007I0").val()!="")$("#C007I0").val("");
            if($("#C11400").val()!="")$("#C11400").val("");       
    	}else if(value == 'D'){
            $("#"+divId1).hide();
            $("#"+divId2).show();	
            $("#"+divId3).hide();
            $("#"+divId4).show();	
            $("#C08412").val("C/D");
            if(($("#C08611").val()!="" && $("#C08611").val()!= opzionaleVar))$("#C08611").val("");
            if($("#C08411").val()!="")$("#C08411").val("");
            if($("#C08511").val()!="")$("#C08511").val("");
            if($("#C007I0").val()!="")$("#C007I0").val("");
            if($("#C11400").val()!="")$("#C11400").val("");               
    	}else if(value == 'F'){
    		$("#"+divId1).hide();
    		$("#"+divId2).hide();
            $("#"+divId3).show();
            $("#"+divId4).show();
            if($("#C08460").val()!="")$("#C08460").val("");
            if(($("#C08611").val()!="" && $("#C08611").val()!= opzionaleVar))$("#C08611").val("");
            if($("#C08511").val()!="")$("#C08511").val("");
            if($("#C08411").val()!="")$("#C08411").val("");
            if(($("#C08612").val()!="" && $("#C08612").val()!= opzionaleVar))$("#C08612").val("");
            if($("#C08412").val()!="")$("#C08412").val("");
            if($("#C08512").val()!="")$("#C08512").val("");
            if($("#C007I0").val()!="")$("#C007I0").val("");
    	}else{
            $("#"+divId1).hide();
            $("#"+divId2).hide();	
            $("#"+divId3).hide();
            $("#"+divId4).hide();
            if($("#C08411").val()!="")$("#C08411").val("");
            if(($("#C08611").val()!="" && $("#C08611").val()!= opzionaleVar))$("#C08611").val("");
            if($("#C08511").val()!="")$("#C08511").val("");
            if(($("#C08612").val()!="" && $("#C08612").val()!= opzionaleVar))$("#C08612").val("");  
            if($("#C08412").val()!="")$("#C08412").val("");
            if($("#C08512").val()!="")$("#C08512").val("");               
            if($("#C007I0").val()!="")$("#C007I0").val("");
            if($("#C11400").val()!="")$("#C11400").val("");
    	}
    }
    
    function manageContiAccredito(value,divId1,divId2,divId3){    	
    	if(value == 'C'){
            $("#"+divId1).show();
            $("#"+divId2).hide();	
            $("#C0841A").val("C/C");
            if(($("#C0861B").val()!="" && $("#C0861B").val()!= opzionaleVar))$("#C0861B").val("");
            $("#C0851B").val("");
            $("#C0841B").val("");
            $("#C007T0").val("");
    	}else if(value == 'D'){
            $("#"+divId1).hide();
            $("#"+divId2).show();	
            $("#C0841B").val("C/D");
            if(($("#C0861A").val()!="" && $("#C0861A").val()!= opzionaleVar))$("#C0861A").val("");
            $("#C0851A").val("");
            $("#C0841A").val("");
    	}else{
            $("#"+divId1).hide();
            $("#"+divId2).hide();	
            if(($("#C0861A").val()!="" && $("#C0861A").val()!= opzionaleVar))$("#C0861A").val("");
            $("#C0851A").val("");
            $("#C0841A").val("");
            if(($("#C0861B").val()!="" && $("#C0861B").val()!= opzionaleVar))$("#C0861B").val("");
            $("#C0851B").val("");
            $("#C0841B").val("");
            $("#C007T0").val("");
    	}
    }
    
    function manageSpeseCommissioni(value,divId1,divId2,divId3){    	
    	if(value == 'O' || value == 'S'){
            $("#"+divId1).show();            
            $("#"+divId2).show();
            $("#"+divId3).show();            
    	}else{
            $("#"+divId1).hide();
            $("#"+divId2).hide();
            $("#"+divId3).hide();
        }  	
    }
    
    
    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati nei params
     */
    function manageSecData(value){ 
        if(value=="N"){
            $("#sectionData").show();
            //manageObbligatori(true,"#C02700");//set a obbligatorio
            $("#C02700").focus();
        }else {
            //manageObbligatori(false,"#C02700");
            $("#C02700").val("");
            $("#sectionData").hide();		
        }
    } 

    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati nei params
     */
    function manageSecDataExtend(value){
        if(value=="P"){
            $("#sectionData").show();
            $("#sectionRadio").show();
            $("#C0270N").focus();
        }else {
            $("#C0270N").val("");
            $("#sectionData").hide();
            $("#sectionRadio").hide();
        }
    } 
    
    function manageSecTestoDiscordanza(value){
    	 if(value=="N"){
             $("#sectionTestoDiscordanza").show();
             $("#C94070").focus();
         }else {
             $("#C94070").val("");
             $("#sectionTestoDiscordanza").hide();
         }
    }

    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati nei params
     */
    function manageSecDataOnLoad(valueData){
        if($("#CF1091").val() != 'N'){
            $("#sectionData").hide();
        }
    }
    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati nei params
     */
    function manageNomeFacSimile(value){
        var codice = "#C42131";
        if(value=="S"){
            $("#div_3686F").show();		
            $("#C3686F").focus();
        }else{
            $("#C3686F").val("");
            $("#div_3686F").hide();	
        }
    }
    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati nei params
     */
    function manageRadioExtend(value){
	
        if(value=="P"){
            $("#sec_EsitoExtend").show();
        }else {
            $("#sec_EsitoExtend").hide();
        }
    }
    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati nei params
     */
    function manageSecTolleranze(value){
        if (value == "") {
            $("#tolleranze").show();
            $("#C31920").focus();
		
        } else {
            $("#tolleranze").hide();
            $("#C31920").val("");
            $("#C31930").val("");
        }
    }
    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati nei params
     * Campi tolleranze sono obbligatori e complementari
     */
    function manageObblTolleranze(value) {
	
        if ($("#C31920").val() == '' && $("#C31930").val() == '') {
		
            manageObbligatori(true, "#C31920");//set a obbligatorio
            manageObbligatori(true, "#C31930");//set a obbligatorio
		
        } else if ($("#C31920").val() != '' || $("#C31930").val() != '') {

            manageObbligatori(false, "#C31920");
            manageObbligatori(false, "#C31930");
        }
    }
    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati nei params
     */
    function manageBancaUtilizzo(value) {

        if ((value == "A" && $("#divBancaUtilizzo").is(":visible"))||(value != "A" && $("#divBancaUtilizzo").is(":hidden")))return;
	
        if(value=="A"){ //Option: "Altra Bk Indicata" = A
            dontSkippy = true;
            $("#divBancaUtilizzo").show("slow");
            $("#C086L0").focus();		
            manageFacoltativi(true,"#C217L0");
            manageFacoltativi(true,"#C218L0");
            manageFacoltativi(true,"#C219L0");
            manageFacoltativi(true,"#C221L0");
        }
        else {
            dontSkippy = false;
            $("#divBancaUtilizzo").hide();
            $("#C086L0").val("");
            $("#C217L0").val("");
            $("#C218L0").val("");
            $("#C219L0").val("");
            $("#C220L0").val("");
            $("#C221L0").val("");
        }

        //resetto la variabile - setTimeout perche' c'e' uno show(slow=600) sulla visibilita' del div
        setTimeout(function(){ dontSkippy = false; }, 700); 
	
    }
    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati nei params
     */
    function manageNegoziabile(value){
        if (((value == "D"||value == "M"||value == "N") && $("#dettaglioPagamentiTag42").is(":visible"))||((value != "D" && value != "M" && value != "A"  && value != "N") && $("#dettaglioPagamentiTag42").is(":hidden"))) return;
        if (value == "D" || value == "M" || value == "N") { //apre sezione 
            $("#dettaglioPagamentiTag42").show();
		
            manageFacoltativi(true,"#C368401");//set a obbligatorio		
            manageFacoltativi(true, "#C368402");
            manageFacoltativi(true, "#C368403");
            manageFacoltativi(true, "#C368404");
            $("#C368401").focus();

            $("#W421B0vg").removeAttr('checked');
	    	$("#C421B0").val("N");	
            manageSectionTratta("N");
        }else if(value == "A"){
        	 $("#W421B0vg").attr('checked', 'checked');
        	 $("#C421B0").val("S");        	
        	 manageSectionTratta("S");
        	 
             $("#C368401").val("");
             $("#C368402").val("");
             $("#C368403").val("");
             $("#C368404").val("");
             $("#dettaglioPagamentiTag42").hide();        	 
        }else {							//chiude sezione
            $("#C368401").val("");
            $("#C368402").val("");
            $("#C368403").val("");
            $("#C368404").val("");
            $("#dettaglioPagamentiTag42").hide();
            
            $("#W421B0vg").removeAttr('checked');	
	    	$("#C421B0").val("N");	
            manageSectionTratta("N");
        }
    }

    /**
     * Il metodo permette la protezione e la sprotezione di un codicedato,
 	 * a fronte di un valore stabilito
     * @param valueCampo
     * @param value
     * @param codDato
     * @returns
     */
    function manageProtezioneCodDato(valueCampo,value,codDato, isNumerico,codDatoOriginario, onLoad){
    	var isNotOpzionale = false;
    	if(isNumerico)isNotOpzionale=true;    	
    	if(azione=='P' && onLoad=='S'){
	    	if(valueCampo==value){
	    		if($("#C"+codDato))proteggiENonSvuotaCampo(codDato);
	    		if ($("#span_residui")) {
    	        	$("#C"+codDato).val($("span#span_residui").text());
	        	}
	    	}else{
	    		if($("#C"+codDato))sproteggiCampo(codDato,'','',isNotOpzionale);
	    		$("#C"+codDato).focus();
	    		
	    	}
    	}
    	
    	else {
	    	if(valueCampo==value){
	    		if($("#C"+codDato))proteggiESvuotaCampo(codDato);
	    		if ($("#span_residui")) {
    	        	$("#C"+codDato).val($("span#span_residui").text());
    	        }
	    	}else{
	    		if($("#C"+codDato))sproteggiCampo(codDato,'','',isNotOpzionale);
	    		$("#C"+codDato).val("");
	    		$("#C"+codDato).focus();
	    	}
    	}

    }
   
    
    function manageSectionTratta(value){ 
    	if(value == "S"){
    		sproteggiCampo("421A0");
    		sproteggiCampo("368B0",true,4);
    		sproteggiCampo("217E0");
    		sproteggiCampo("218E0");
    		sproteggiCampo("219E0");
    		sproteggiCampo("220E0");
    		sproteggiCampo("221E0");
    	}else{  
    		proteggiESvuotaCampo("421A0");
    		proteggiESvuotaCampo("368B0",true,4);
    		proteggiESvuotaCampo("217E0");
    		proteggiESvuotaCampo("218E0");
    		proteggiESvuotaCampo("219E0");
    		proteggiESvuotaCampo("220E0");
    		proteggiESvuotaCampo("221E0");
    	}
    }
    
    function manageIbanNumConto(value){
    	if(value == 'N'){
    		sproteggiCampo("44309");
    		proteggiESvuotaCampo("44I60");
    	}else{
    		sproteggiCampo("44I60");
    		proteggiESvuotaCampo("44309");   		
    	}    	
    }
    
    function manageSectionTariffa(value,div){
    	if(value == 'S'){		
    		$("#"+div).show();
    		$("#C1100J").focus();
    	}else{	     		
    		$("#"+div).hide();
    	}
    }
    
    function manageRadioEsito(value,value2,onload){
    	if(value == 'M'){
    		if( value2 != 'B'){
    			$("#CA208Y")[0].checked = true;	
    		}    		
    		$("#div_esitoConferma").hide();
    		$("#div_esitoModifica").show();
    		$("#div_esitoModifica").removeClass('div_modificaHidden');
    		$("#div_esitoModifica").addClass('div_modifica');
    	}else{	     		
    		$("#div_esitoModifica").hide();    
    		$("#div_esitoConferma").show();
    		$("#div_esitoModifica").removeClass('div_modifica');
    		$("#div_esitoModifica").addClass('div_modificaHidden');
    	}
    }
    
    function transferValueA2080(value){
    	$("#CA2080").val(value);    
    }
    

    /**
     * 
     * @param value
     */    
    function manageStyleFieldsEsito(value,value2,onload){
    	if(value == 'M'){
    		if(onload != 'S'){
    			manageRadioEsito(value,value2,onload);	
    		}    		
    		sproteggiAllFields(true,false,true,true,true);    	
    		$("input[name='CF1871']").each(function(i) {
                $(this).removeAttr('disabled');
            });
    		$("input[name='C368H0']").each(function(i) {
    			$(this).removeAttr('disabled');
            });
    		$("input[name='C42190']").each(function(i) {
    			$(this).removeAttr('disabled');
            });
    		$("input[name='C4219V']").each(function(i) {
    			$(this).removeAttr('disabled');
            });
    		$("input[name='CFRT44']").each(function(i) {
    			$(this).removeAttr('disabled');
            });
    		$("input[name='CFLAGT']").each(function(i) {
    			$(this).removeAttr('disabled');
            }); 
    		$("input[name='CFLADL']").each(function(i) {
    			$(this).removeAttr('disabled');
            });  
    		$("input[name='CRCAN0']").each(function(i) {
    			$(this).removeAttr('disabled');
            }); 
    	}else{
    		if(onload!='S'){
        		if(value == 'A'){
        			manageRadioEsito(value,value2);	
        		}			    			
    		}
    		proteggiAllFields(true,false,true,true,true);
        	
    		$("input[name='CF1871']").each(function(i) {
                $(this).attr('disabled', 'disabled');
            });
    		$("input[name='C368H0']").each(function(i) {
                $(this).attr('disabled', 'disabled');
            });
    		$("input[name='C42190']").each(function(i) {
                $(this).attr('disabled', 'disabled');
            });
    		$("input[name='C4219V']").each(function(i) {
    			$(this).attr('disabled', 'disabled');
            });
    		$("input[name='CFRT44']").each(function(i) {
                $(this).attr('disabled', 'disabled');
            });    		
    		$("input[name='CFLAGT']").each(function(i) {
                $(this).attr('disabled', 'disabled');
            }); 
    		$("input[name='CFLADL']").each(function(i) {
                $(this).attr('disabled', 'disabled');
            }); 
    		$("input[name='CRCAN0']").each(function(i) {
                $(this).attr('disabled', 'disabled');
            }); 
    	}
    	if(value == ''){
    		transferValueA2080($("#CA208Z").val());
    	}
    }
    

    function sproteggiAllFields(proteggiText,proteggiRadio,proteggiCheck,proteggiSelect,proteggiButtons){
        if(proteggiText){
        	$("form").find('input[type=text]').each(function() {
            	$(this).removeAttr('readonly').removeClass('protettoNoPointer');
            	$(this).addClass('normal');
            	
            	if($(this).val() == ''){
        			$(this).addClass('default-text');
                    $(this).val($(this).data('default-text'));
                }
            });          	
        }
        
        if(proteggiRadio){
            $("form").find('input[type=radio]').each(function() {
		    	$(this).removeAttr('disabled');
		    	$(this).addClass('normal');            	
            });                       	
        }
        
        if(proteggiCheck){
            $("form").find('input[type=checkbox]').each(function() {
            	$(this).removeAttr('disabled');
            	$(this).addClass('normal');
            });  
        }
        if(proteggiSelect){
        	$("form").find('select').each(function() {
            	$(this).removeAttr('disabled');
            	$(this).addClass('normal');
            });	
        }   
        if(proteggiButtons){
        	$("form").find(':button').each(function() {
        		if($(this).hasClass("functionButton")){
        			$(this).show();
 	       	 	}    
            });	
        	$("form").find('img').each(function() {
        		$(this).show();
            });	
        }   
    }

    function proteggiAllFields(proteggiText,proteggiRadio,proteggiCheck,proteggiSelect,proteggiButtons){
    	if(proteggiText){
        	$("form").find('input[type=text]').each(function() {
                if ($(this).val() == opzionaleVar) {	
                    $(this).val("");
                }
            	$(this).removeClass('normal').removeClass('default-text');
                $(this).attr('readonly', 'true').addClass('protettoNoPointer');
            });  
    	}
    	if(proteggiRadio){
            $("form").find('input[type=radio]').each(function() {            	   
            	$(this).removeClass('normal').removeClass('default-text');
                $(this).attr('disabled', 'true');
                            
            });       
    	}
    	if(proteggiCheck){
            $("form").find('input[type=checkbox]').each(function() {
            	$(this).removeClass('normal').removeClass('default-text');
                $(this).attr('disabled', 'true');
            });                    		
    	}
    	if(proteggiSelect){
            $("form").find('select').each(function() {
            	$(this).removeClass('normal').removeClass('default-text');
                $(this).attr('disabled', 'true');
            });          		
    	}
        if(proteggiButtons){
        	$("form").find(':button').each(function() {
        		if($(this).hasClass("functionButton")){
        			$(this).hide();
 	       	 	}    
            });	
        	$("form").find('img').each(function() {
        		$(this).hide();
            });	
        } 
    	
    }
    
    /**
     * 
     * @param codDato
     * @param isMultiriga
     * @param numMultiriga
     */
    function sproteggiCampo(codDato,isMultiriga,numMultiriga,isNotOpzionale){
    	var attrCodDato = "#A"+ codDato;
    	var valCodDato = "#C"+ codDato;
		if(isMultiriga){
	    	$(attrCodDato).val("D");
	    	for(var i=0; i<numMultiriga; i++){
		    	valCodDato = "#C" + codDato + i;
				$(valCodDato).removeAttr('readonly');
				$(valCodDato).removeClass('protettoNoPointer');
				$(valCodDato).addClass('normal');	
	    	}
		}else{
	    	$(attrCodDato).val("D");
			$(valCodDato).removeAttr('readonly');
			$(valCodDato).removeClass('protettoNoPointer');
			$(valCodDato).addClass('normal');	
			
            if($(valCodDato).val() == '' && !isNotOpzionale){
    			$(valCodDato).addClass('default-text');
                $(valCodDato).val($(valCodDato).data('default-text'));
            }
		}
    }
    
    /**
     * 
     * @param codDato
     * @param isMultiriga
     * @param numMultiriga
     */
    function proteggiESvuotaCampo(codDato,isMultiriga,numMultiriga){
    	var attrCodDato = "#A"+ codDato;
    	var valCodDato = "#C"+ codDato;
    	if(isMultiriga){
    		$(attrCodDato).val("P");
    		for(var i=0; i<numMultiriga; i++){
    			valCodDato = "#C" + codDato + i;
    			$(valCodDato).val("");
                $(valCodDato).removeClass('normal');
                $(valCodDato).removeClass('default-text');
                $(valCodDato).attr('readonly', 'true');
                $(valCodDato).addClass('protettoNoPointer');		               	
    		}
    	}else{
  			cleanData(codDato);	
            $(valCodDato).removeClass('default-text');
            $(valCodDato).removeClass('normal');
    		$(valCodDato).attr('readonly', 'true');
            $(valCodDato).addClass('protettoNoPointer');		
    	}
    }
    
    function manageFacoltativi(isFacoltativo,codDato){
        if(isFacoltativo){
            $(codDato).addClass('default-text');
            $(codDato).val($(codDato).data('default-text'));
        }else{
            $(codDato).removeClass('default-text');
        }
    }
    
    /**
	* Setta il valore della option selezionata sul c.d. A2080
	*/
    function manageRiserve(value){
    	$("#CA2080").val(value);
    }
    
    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati nei params
     */
    function manageGenericSection(value,nameSection,codDatoFocus){
        if (value == "S") { //apre sezione 
            $("#"+nameSection).show();
            if(codDatoFocus!=null){
                $("#"+codDatoFocus).focus();
            }
        } else {							//chiude sezione		
            $("#"+nameSection).hide();
        }
    }

    /**
     * @utilizzo gestisce sezioni da visualizzare in base ai valori di una select
     */
    function manageDescrizioneSelect(obj,objVis,cd,isMultiriga){
    	// vengono passati i parametri obj (il valore attuale della select), objVis (il valore da confrontare)
    	// cd (il codice dato del campo da visualizzare) e isMultiriga
    	
    	// text è il primo campo di imput della sezione da visualizzare
    	var text;
    	
    	// il valore di text cambia se viene passato isMultiriga
    	if (isMultiriga){
	    	text = "#C" + cd + "1";
	    } else {
        	text = "#C" + cd;
    	}
        if (obj == objVis) {	//apre sezione, imposta il focus sul primo campo (gli eventuali altri verranno ciclati)
            $("#section" + cd).show();            
            $(text).focus();
            $(text).removeClass('default-text');
        } else {				//chiude sezione e svuota il valore text
            $(text).val("");
            $("#section" + cd).hide();
            $(text).addClass('default-text');
        }
    }    
    

    /**
     * @utilizzo gestisce valori ed attributi dei campi specificati nei params
     */
    function manageDescrizioneNormeApplicabili(value){
	
        if(value == ""){  
            manageObbligatori(true,"#C42570");//set a obbligatorio
        } else {							
            manageObbligatori(false, "#C42570");
        }
    }
    /**
     * @utilizzo gestisce campi obbligatori specificati nel param obj
     */
    function manageSectionBancaUtil(obj){
        if($(obj).val()==""){
            manageObbligatori(true, "#"+obj.name);//set a obbligatorio
        }else{
            manageObbligatori(false, "#"+obj.name);
        }
    }

    /**
     * @param funzione
     * @utilizzo valorizza il campo C42100 nei Crediti sull'evento onload
     */
    function Val42100(funzione){
        var funz = funzione.substring(1,4);// funzione
        var funzNew = "C" + funz;
        var iForm = document.forms['formInserimento'];
	
        if(document.forms['formInserimento'].elements["CH0241"]){
            document.forms['formInserimento'].elements["CH0241"].value = funzNew;
        }
        if(document.forms['formInserimento'].elements["CH0243"]){
            document.forms['formInserimento'].elements["CH0243"].value = funzNew;
        }
        if (iForm.elements["C42100"]){
            if (iForm.elements["C42100"].value != null){
                if(funz == '007'||funz == '507'||funz == '077'){
                    document.forms['formInserimento'].elements["C42100"].value = "R";
                }else{
                    document.forms['formInserimento'].elements["C42100"].value = iForm.elements["C42100"].value;
                }
            }
        }
    }

    /**
     * @param idSec
     * @param idSecPrec
     * @utilizzo gestisce lo skip dalla sezione correntea alla successiva
     */
    function skipSection(idSec,idSecPrec){
	
        if(dontSkippy){  //resetto la variabile
            dontSkippy = false;
            return;
        }
        var divContenitore = "#div" + idSec;
	
        if ($(divContenitore).is(":visible")) { 		//skip indietro
            toggleDiv(idSecPrec);
        }else{					
            toggleDiv(idSec);
        }
    }

    /**
     * @utilizzo gestisce lo skip dal pulsante 
     */
    function skipSectionButton(){
        if(dontSkippy){
            //resetto la variabile
            dontSkippy = false;
            return;
        }
        for (var int = 0; int < sectionArray.length; int++) {
            if ($("#div" + sectionArray[int]).is(":visible") && !($("#div" + sectionArray[int]).hasClass("alwaysOpen"))) {
                $("#div" + sectionArray[int]).hide("slow");//'fast' and 'slow' can be supplied 200 and 600 milliseconds, respectively.
                changeExpColl(sectionArray[int]);
                $("input[type=button]:first").delay(600).focus();
            }
        }
    }

    /**
     * @utilizzo controlli su caratteri msg swift
     */
    function controlCrt(o){
        var alertMsg = "Il campo valore deve essere valorizzato.\n Se vuoto inserire il (.)";
        if(linguaLabelsT1500 == "E"){
            alertMsg = "Mandatory field.\n If Empty, type (.)";
        }
        var val = o.value;
        if((val==' ') ||(val=='')){
            alert(alertMsg);
        }
    }
    /**
     * @utilizzo controlli su caratteri msg swift
     */
    function controlCrtriga(o,numCrtDefinito){
        var val = o.value;	    
        var numCrtMax = 50; 
        var alertMsg = "Raggiunta la lunghezza\nmassima di ";
        var alertMsg2 = " caratteri!";
        if(linguaLabelsT1500 == "E"){
            alertMsg = "It has been reached the max lenght\n of ";
            alertMsg2 = " characters!";
        }
	
        if(numCrtDefinito != "") numCrtMax = numCrtDefinito; 		
        if(val.length==numCrtMax){
            alert(alertMsg +  numCrtMax + alertMsg2);
        }
    }
    /**
     * @utilizzo controlli su caratteri msg swift
     */
    function controlCrtriga2(o,numCrtDefinito){
        var val = o.value;	 
        var numCrtMax = 16;  
        var alertMsg = "Raggiunta la lunghezza\nmassima di ";
        var alertMsg2 = " caratteri!";
        if(linguaLabelsT1500 == "E"){
            alertMsg = "It has been reached the max lenght\n of ";
            alertMsg2 = " characters!";
        }
        if(numCrtDefinito != "") numCrtMax = numCrtDefinito;
        if(val.length==numCrtMax){
            alert(alertMsg +  numCrtMax + alertMsg2);
        }
    }

    /**
     * @utilizzo Disabilita il pulsante backspace sull'evento bonKeyDown
     */
    function onKeyDownFunctions(){
        // Disabilita Backspace se ci troviamo su un  element di tipo diverso da text o textarea
        if((event.srcElement.type != 'textarea')) {		
            if((event.srcElement.type != 'text')){ 
                if (event.keyCode == 8) {//backspace
                    event.cancelBubble = true;
                    event.returnValue=false;
                    return false;
                }
            }
        }			
        // Disabilita Alt+left e Alt+right
        if(event.altKey ==1){
            if(event.keyCode == 37 || event.keyCode == 39){
                event.cancelBubble = true;
                event.returnValue=false;
                return false;
            }		
        }				
    }

    /**
     * @param descrizione
     * @param url
     * @param funzione
     * @utilizzo Richiama il p/f richiesto da menu
     */
    function callFunction(descrizione,url,funzione,numItem){
        if(document.forms['formInserimento']){
            if(document.forms['formInserimento'].elements["CMENAR"]){
                document.forms['formInserimento'].elements["CMENAR"].value = numItem;//id area selezionata
            }
        }
	
        loadingDiv(true);

        var turnOffLoading = function () {
            loadingDiv(false);
        };

        Bridge.instance.redirect(url, turnOffLoading, turnOffLoading);
    }

    /**
     * @param codPul
     * @param azione
     * @utilizzo definisce se lanciare i controlli di obbligatorieta sulle pagine in base al codice pulsante o all'azione
     * @return boolean
     */
    function controllaObbl(codPul,azione){
        //"0839" --> Elenco Modelli 
        //azione "L" --> Ricerche
        //azione "Z" --> Torna indietro
        //azione "BACKREFRESH" --> Torna indietro con refresh
        //azione "G" --> Salva, non deve controllare i campi obbligatori

        if(codPul!="0839" 
            && azione != "L" 
                && azione != "G" 
                    && azione != "Z" 
                        && azione != "BACKREFRESH"
                            && codPul!="0825"){
            return true;
        }else{
            return false;
        }
    }

    function closeTextarea(){
        $(".section.clearfix").css('opacity', '1');
        $(".boxTextareaMod").css('display', 'none');	
    }

    
    /**
     * @param codDato
     * @utilizzo apre popup textarea old presente nella Testata
     * @return void
     * TODO GESTIONE TEMPORANEA 
     */
    function openPopupTextAreaCredoc(codDato,label,codDato2,label2,codDato3,label3,codDato4,label4){	    	
        refreshPATH();
	
        var width = "550";
        var height = "600";
	
        var left = (screen.width/2)-(width/2);
        var top = (screen.height/2)-(height/2);
	
        var title = "Testo";
        currHelpPopupTitle = "Testo";
	
        currHelpLabel = label;
        currHelpLabel2 = label2; 
        currHelpLabel3 = label3;
        currHelpLabel4 = label4;
        
        currHelpDescription = $("#"+codDato).val();
        currHelpDescription2 = $("#"+codDato2).val();
        currHelpDescription3 = $("#"+codDato3).val();
        currHelpDescription4 = $("#"+codDato4).val();
        
        //se esiste gia' lo chiude
        if (typeof msgwindow == "object"){ msgwindow.close(); }
        var att_ = "location=no,toolbar=no,scrollbars=yes,resizable=no,width="+width+",height="+height+",top="+top+",left="+left;
        msgwindow = window.open(STATIC_FILES_PATH+"res/html/testoCredoc.html", "testo", att_);
	
		
    }

    /**
     * @param codDato
     * @utilizzo apre popup textarea old presente nella Testata
     * @return void
     */
    function openPopupTextArea(codDato,label){	
        refreshPATH();
	
        var width = "550";
        var height = "600";
	
        var left = (screen.width/2)-(width/2);
        var top = (screen.height/2)-(height/2);
	
        var title = "Testo";
        currHelpPopupTitle = "Testo";
	
        currHelpLabel = label;
        currHelpDescription = $("#"+codDato).val();
	
        //se esiste gia' lo chiude
        if (typeof msgwindow == "object"){ msgwindow.close(); }
        var att_ = "location=no,toolbar=no,scrollbars=yes,resizable=no,width="+width+",height="+height+",top="+top+",left="+left;
        msgwindow = window.open(STATIC_FILES_PATH+"res/html/testo.html", "testo", att_);
	
		
    }
    
    /**
     * @param codDato
     * @utilizzo apre popup help di campo e di funzione
     * @return void
     */
    function openPopupHelp(valore,label){	
        refreshPATH();
        var width= "540";
        var height= "270";
	
        var left = (screen.width/2) - (width/2);
        var top = (screen.height/2) - (height/2);
	
        var title = 'Help On Line';
        currHelpPopupTitle = "Help On Line";
	
        currHelpLabel = label;
        currHelpDescription = valore;
	
        //se esiste gia' lo chiude
        if (typeof msgwindow == "object"){ msgwindow.close(); }
        var att_ = "location=no,toolbar=no,scrollbars=yes,resizable=no,width="+width+",height="+height+",top="+top+",left="+left;
        msgwindow = window.open(STATIC_FILES_PATH + "res/html/testo.html", "testo", att_);
	
				
    }

    function recuperaLabel($this, id){
        var tagLabel = "";
        try{
            var objLabel = $('label[for="'+id+'"]');
            $(objLabel).each(function (i) {
                tagLabel = tagLabel + " " + $(this)[0].innerText; 
            });
		
            if(tagLabel.length <= 0) {
                $($this.parentElement.childNodes).each(function () {
                    if($(this)[0].nodeName == "LABEL" || $(this)[0].nodeName == "label"){
                        tagLabel = $(this)[0].innerText;	
                    }
                });
            }
            //default: se non ha trovato il tag label
            if(tagLabel.length <= 0) {
                tagLabel = "Help on Line";	
            }
        }catch(e){
            tagLabel = "Help on Line";
            return tagLabel;
        }
        return tagLabel;
    }

    /**
     * @param onlySet,progr,dir
     * @utilizzo Gestione della scrolling del tracking della Dashboard
     * @return void
     */
    function slide(onlySet,progr,dir){
        var contenitore = $("#contentTrackScrollable"+progr).width();//dimensione fissa
        var trackTable_width = $("#trk"+progr+" .progress-trackers").width(); //dimensione automatica
        var margin_left = $("#trackingBoxScrollable"+progr).css("margin-left").replace("px","");
	
        if(onlySet && (contenitore < trackTable_width)){
            $("#arrowLeft"+progr).show();
            $("#arrowRight"+progr).show();
            return;
        }
	
        if(dir=='r')      if((contenitore + (Math.abs(margin_left))) >= trackTable_width)return;
        else if(dir=='l') if((contenitore + (Math.abs(margin_left))) <= trackTable_width)return;
	
        var newmargin;
        if(dir=='r')
            newmargin = "-" + (Math.abs(margin_left) + 150);
        else if(dir=='l')
            newmargin = "-" + (Math.abs(margin_left) - 150);
	
        $("#trackingBoxScrollable"+progr).css('margin-left', newmargin+"px");
    }


    /**
     * 
     * @param sectionToShow
     * @param sectionsToHide
     */  
    function openTabsheetTestataCredoc(sectionToShow,sectionToHide1,sectionToHide2,sectionToHide3,sectionToHide4,sectionToHide5){    	
    	//chiude tutti gli altri
    	$("#"+sectionToHide1).hide();
    	$("#"+sectionToHide2).hide();
    	$("#"+sectionToHide3).hide();
    	$("#"+sectionToHide4).hide();
    	$("#"+sectionToHide5).hide();    
    	$(".tab-testataCredoc").removeClass("tabSel");
    	$(".descriptionTab-testataCredoc").removeClass("descSel");
    	
    	var idTabToShow="#tab-"+sectionToShow;
    	//apre quello selezionato
    	$(idTabToShow).addClass("tabSel");
    	$(idTabToShow+" .descriptionTab-testataCredoc").addClass("descSel");
    	$("#"+sectionToShow).show();

    }
    
    /**
     * se presenti errori Host viene riposizionato il focus 
     * sul primo campo CodiceErrore hidden in mappa per permettere 
     * alla pagina di riscrollare verso l'alto e mostrare l'errore
     * 
     */
    function focusCampoErrori(){
    	$("#CODICEERRORE").focus();
    }
 
    
    
    /**
     * Il metodo effettua una chiamata ajax per reperirer la descrizione estesa del documento
     * configurato nella select
     */
    function selezionaRiga(sessId, funzione, codDatoTextarea, codDatoSelect){    		
    	var aForm = document.forms['formInserimento'];
		try{
			refreshPATH();
	    	var url = PATH + 'AjaxControllerServlet';
	    	var hashParameters = getParameter(funzione, codDatoTextarea, codDatoSelect, aForm);
	    	jQuery.ajax({
				type : 'POST',
				url : url,
				data : hashParameters,
				dataType : "xml",
				success : function(data) {
					if(isErroreFunzione(data))return; //se errore lo mostra ed esce
					fillTextArea(data, aForm, codDatoTextarea);
				},
				error : function() {
					alert(alertMsg);
				}
			});
		} catch (e) {
			 alert("AjaxSearch="+e.description);
		}
	  	
    	// verifica se sono presenti options nella select
//		$('#L'+codDatoSelect+' option').each(function() {
//		    if(this.selected){
//		    }
//		});
    }
    
    function getParameter(funzione, codDatoTextarea, codDatoSelect, aForm){
    	var hashParameters = {};
    	var dynSelect = $('#L'+codDatoSelect+' option:selected').val();    	
    	var azfunz = aForm.FUNZIONE.value.substring(2);
    	var lingua = "";
    	if ($('#C33701').val()!= "")lingua = $('#C33701').val();
    	
        if (funzione != null) {
        	hashParameters["FUNZIONE"] = funzione;
        }    	
        if (codDatoTextarea != null) {
        	hashParameters["CODICEDATO"] = codDatoTextarea;
        }    	
        if (dynSelect != null) {
        	hashParameters["VALOREOPTION"] = dynSelect;
        }    	
        if (azfunz != null) {
        	hashParameters["H0241"] = azfunz;        	
        }  
        if (lingua != null) {
        	hashParameters["33701"] = lingua;
        }  
        hashParameters["CODICEDATOSELECT"] = codDatoSelect;
        hashParameters["AJAX_REQUEST_CODE"] = "SELEZ_TEXTAREA";        
        hashParameters["WSESSIONID"]= sessIdGlobal; 
        assumiCOAUTAjax(aForm,hashParameters);
                
        return hashParameters;
    }
    
  
    function fillTextArea(xmldoc, aForm, codDatoTextarea) {    	
    	try { 
    		// *** ESITO OK ***
    		var nodeCdTextarea = xmldoc.getElementsByTagName("CODDATO_TEXT_AREA")[0];
    		var cdTextarea = nodeCdTextarea.childNodes[0].nodeValue;
    		var codTextarea = "C" + cdTextarea;
    		var attrTextarea = "A" + cdTextarea;
        	
    		var nodeNewTextAreaValue = xmldoc.getElementsByTagName("NEW_VALUE_TEXT_AREA")[0];
        	var newTextAreaValue = nodeNewTextAreaValue.childNodes[0].nodeValue;
    		var textAreaField = document.getElementsByName(codTextarea)[0];
    		var attrTextAreaField = document.getElementsByName(attrTextarea)[0];
    		if(typeof textAreaField != "object") { 
    			return;
    		}
    		attrTextAreaField.value = "D";
    		var prevTextAreaValue = textAreaField.value;
        	// quando il campo della textarea e' vuoto non deve essere inserito il carattere di accapo
            if(prevTextAreaValue != "") {
    			textAreaField.value = unescape(prevTextAreaValue + "\r" + newTextAreaValue);
            } else {
            	textAreaField.value = prevTextAreaValue + unescape(newTextAreaValue);
            }                
    	} catch (e) {
    		alert("filldoTextarea=" + e.description);
    	}    	        
    }

// script per GARANZIE NEW
    /**
     * 
     * @param value
     */    
    function manageStyleFieldsEsitoGarBozze(value,value2,onload){
    	if(value == 'M'){
    		if(onload != 'S'){
    			manageRadioEsitoGarBozze(value,value2,onload);	
    		}    		

    		if(progettoAzioneFunzioneGlobal!='06U637' ){
        		sproteggiAllFields(true,false,true,true);    	
        		$("input[name='CF1091']").each(function(i) {
                    $(this).removeAttr('disabled');
                });
        		$("input[name='CA1970']").each(function(i) {
        			$(this).removeAttr('disabled');
                });  	    		
    		}
    	}else{
    		if(onload!='S'){
        		if(value == 'A'){
        			manageRadioEsitoGarBozze(value,value2);	
        		}			    			
    		}
    		proteggiAllFields(true,false,true,true);
        	
    		$("input[name='CF1091']").each(function(i) {
                $(this).attr('disabled', 'disabled');
            });
    		$("input[name='CA1970']").each(function(i) {
                $(this).attr('disabled', 'disabled');
            });
    	}
    	if(value == ''){
    		transferValueA2080($("#CA208Z").val());
    	}
    }
    
    function manageRadioEsitoGarBozze(value,value2,onload){
    	if(value == 'M'){
    		if( value2 != 'B'){
    			$("input[name='CA208Y']").each(function(i) {
                    //$(this)[1].attr('checked', 'checked');
    				$("input[name='CA208Y']")[1].checked = true;
                });    			
    		}    		
    		$("#div_esitoConferma").hide();
    		$("#div_esitoModifica").show();
    		$("#div_esitoModifica").removeClass('div_modificaHidden');
    		$("#div_esitoModifica").addClass('div_modifica');
    	}else{	     		
    		$("#div_esitoModifica").hide();    
    		$("#div_esitoConferma").show();
    		$("#div_esitoModifica").removeClass('div_modifica');
    		$("#div_esitoModifica").addClass('div_modificaHidden');
    	}
    }

    function managePeriodicita(value, div){
        if(value=="F"){
            $("#"+div).show();
            $("#CFPR10").focus();
            $("#C00310").val("");
            $("#C00320").val("");
            $("#C00310").attr('disabled', 'disabled');            
            $("#C00320").attr('disabled', 'disabled');
        }else {
            $("#C00310").removeAttr('disabled');            
            $("#C00320").removeAttr('disabled');
        	$("#CFPR10").val("");
            $("#"+div).hide();		
        }
    }

    /* !N.B. 
     * Deve usare l'attributo visibility e non display 
     * altrimenti quando hidden i dati contenuti nel div non viaggiano vs Host
     */
    function dynShowHideAlternate(iform,fieldName,fieldNumber,divId,divId2){
    	
    	if(iform.elements[fieldName]){
    		if(iform.elements[fieldName][fieldNumber].checked){
    			if(document.getElementById(divId2))document.getElementById(divId2).style.visibility = "hidden";
    			if(document.getElementById(divId))document.getElementById(divId).style.visibility = "visible";
    		}else{
    			if(document.getElementById(divId2))document.getElementById(divId2).style.visibility = "visible";
    			if(document.getElementById(divId))document.getElementById(divId).style.visibility = "hidden";
    		}			
    	}		
    }
    
    
    /*===================================================================//
     *  65757 - REMEDY 4294005
    	Set "S" sul campo WTXTHASBEENCLENED necessario al server per capire 
    	se una textarea è stata cancellata dall'utente
    =====================================================================*/	
    function hasBeenCleaned(obj){
    	if(document.forms[0].elements['WTXTHASBEENCLENED'+obj.id] && document.forms[0].elements['WTXTHASBEENCLENED'+obj.id].value == ""){
    		document.forms[0].elements['WTXTHASBEENCLENED'+obj.id].value = "S";	
    	}
    }
