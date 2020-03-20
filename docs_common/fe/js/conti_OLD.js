////////////////////////////////////////////// INIT METODI E VARIABILI COMUNI ////////////////////////////////////////////////
var sNameStile = "class";
var sNameColspan = "colspan";
var defaultDescForTd = 'Dai un nome alla linea';

function formatDouble( num ){
	//il numero ha la forma 
	num = Number(num);
	var val = String(num);
	var numChar = val.indexOf('.');
	var decimal = 0;
	//se la parte decimale non e presente
	if( numChar == -1 ){
		decimal = '00';
		numChar = val.length;
	}else{
		decimal = Number(val.substring(0,numChar+3));
		if( Number(val.charAt(numChar+3)) > 4 ){
			decimal = decimal + 0.01;
		}
		decimal = String(decimal).substring(numChar+1,numChar+3);
		if( decimal.length == 1)
			decimal = decimal +'0';
	}
	val = val.substring(0,numChar);
	var result='';
	var ind = 1;
	for( i=numChar; i>0 ;i-- ){
		//alert('i='+i+' ind='+ind+'  result='+result);
		if( ind == 3 && i != 1 ){
			result =   '.' + val.charAt(i-1) + result;
			ind = 0;
		}else{
			result = val.charAt(i-1) + result;
		}
		ind ++;
	}
	result = result +','+ decimal;
	return result;
}

function deleteBoxFormErrore(){
	//si elimina la pop up di errore
	var boxError = $('#errorsSection');
	if( boxError != null )
		$('#errorsSection').hide();
}
//////////////////////////////////////////////  END METODI E VARIABILI COMUNI ////////////////////////////////////////////////
//////////////////////////////////////////////  INIT  SOGLIE  ///////////////////////////////////////////////////////
var msgErrorImportoSoglia = "L'importo inserito non &egrave; corretto";
var msgErrorImportoMaxSoglia = "L'importo massimo inserito non &egrave; corretto";
var msgErrorImportoMinSoglia = "L'importo minimo inserito non &egrave; corretto";

function openAlertBonificoRicorrente(){
	openAlert('layerAlertSoglie');
}

function loadImgSoglia(){
	doValidations(loadBaseImgSoglia);
}

function loadBaseImgSoglia(){
	
	var valMin =  $('#sogliaMinInt').val();
	var valMax =  $('#sogliaMaxInt').val();
	var isValMax = false;
	var isValMin = false;
	if( valMin != null && valMin.length > 0 ){
		isValMin = true;
		$('#checkSogliaMin').checked="checked";
	}else{
		//si pulisce il div
		$("#imgInfSoglie").empty();
	}
	if( valMax != null && valMax.length > 0 ){
		isValMax = true;
		$('#checkSogliaMax').checked="checked";
	}else{
		//si pulisce il div
		$("#imgSupSoglie").empty();
	}
	formatDatiImgSoglia(imgPath, isValMin, isValMax, valMin , valMax);
}

function formatDatiImgSoglia(imgPath, isValMin, isValMax, valMin , valMax){
	try{
		if(isValMin){
			for( i=0; i<5; i++){
				valMin = valMin.replace('.','');
			}
			if(isNaN( valMin )){
				vet = new Array("checkSogliaMinID","sogliaMinTextID","sogliaMinID");
				addValidationError(vet, msgErrorImportoMinSoglia);
			}else{
				valMin = formatDouble( valMin );
			}
		}
		if(isValMax){
			for( i=0; i<5; i++){
				valMax = valMax.replace('.','');
			}
			if(isNaN( valMax )){
				vet = new Array("checkSogliaMaxID","sogliaMaxTextID","sogliaMaxID");
				addValidationError(vet, msgErrorImportoMaxSoglia);
			}else{
				valMax = formatDouble( valMax );
			}
		}		
		loadDatiImgSoglia( imgPath, isValMin, isValMax, valMin , valMax );
	}catch(e){
		vet = new Array("checkSogliaMaxID","sogliaMaxTextID","sogliaMaxID","checkSogliaMinID","sogliaMinTextID","sogliaMinID");
		addValidationError(vet, msgErrorImportoSoglia);
	}		
}

function loadDatiImgSoglia( prePath, isValMin, isValMax, valMin , valMax ){	
				
	//ora si verifica quale img inserire
	if( !isValMin && !isValMax){
		//nessuna soglia impostata
		$('#imgSoglia')[0].src = prePath+'ico2inf_nosoglia.jpg';
		$("#imgInfSoglie")[0].innerHTML = 'Sotto i &euro; sul c/c trasferisci dal dep.';
		$("#imgSupSoglie")[0].innerHTML = 'Oltre i &euro; in c/c trasferisci sul dep.';		
	}else{
		if( isValMin && isValMax){
			//soglie entrambe impostate
			$("#imgInfSoglie")[0].innerHTML = 'Sotto i '+valMin+'&euro; sul c/c trasferisci dal dep.';
			$("#imgSupSoglie")[0].innerHTML = 'Oltre i '+valMax+'&euro; in c/c trasferisci sul dep.';
			// /img/ret/
			$('#imgSoglia')[0].src = prePath+'ico2inf_soglie.jpg';
		}else{
			if( isValMin && !isValMax){
				//solo la soglia minima impostata
				$('#imgSoglia')[0].src = prePath+'ico2inf_sogliamin.jpg';
				$("#imgInfSoglie")[0].innerHTML = 'Sotto i '+valMin+'&euro; sul c/c trasferisci dal dep.';
				$("#imgSupSoglie")[0].innerHTML = 'Oltre i &euro; in c/c trasferisci sul Dep.';
			}else{
				if( !isValMin && isValMax){
					//solo la soglia massima  impostata
					$('#imgSoglia')[0].src = prePath+'ico2inf_sogliamax.jpg';
					$("#imgSupSoglie")[0].innerHTML = 'Oltre i '+valMax+'&euro; in c/c trasferisci sul dep.';
					$("#imgInfSoglie")[0].innerHTML = 'Sotto i &euro; sul c/c trasferisci dal dep.';
				}
			}
		}
	}
}

///////////////////////////////////////////////  END  SOGLIE //////////////////////////////////////////////////
///////////////////////////////////////////////// INT VINCOLI INSERT /////////////////////////////////////////////////
var msgErroreImportoVincolo= 'L&acute;importo inserito non &egrave; corretto';
var msgErroreNessunImportoVincolo= '<strong class="nega">ATTENZIONE!</strong><br/> Non &egrave; stato inserito nessun importo'

var msgErroreMargineVincolo= 'L&acute;importo inserito non &egrave; corretto perch&egrave; maggiore dell&#96;importo vincolabile.';
var msgErroreDurataVincolo= 'La durata inserita non &egrave; corretta';
var msgErroreDataVincolo= 'La data inserita non &egrave; corretta';
var msgErroreImportoVincolo2 = '<strong class="nega">ATTENZIONE.</strong> L&#96;importo indicato &egrave; maggiore dell&#96;importo vincolato. Correggi l&#96;importo.';
var msgErroreImportoVincolo3 = 'L&acute;importo non &egrave; corretto: inserire solo numeri, senza virgole o punti'
var msgErroreImportoVincolo4 = 'L&acute;importo inserito &egrave inferiore L&acute;importo minimo consentito';
var msgErroreMargineFreshMoney= 'L&acute;importo inserito non &egrave; corretto perch&egrave; maggiore dell&#96;importo disponibile su Extra Money' 

	
function selettoreImportoUp(){
	
	try{
		//campo del calcolatore
		var cap = $('#importoVincolo').val();
		if(cap.length == 0)
			cap = 0;
		if( isNaN(cap) )
			throw msgErroreImportoVincolo;
		
		var num = parseInt( cap ) + 100;
		$("#importoVincolo").val(num);
		
		settingInsertVincolo();
	}catch(e){
		addValidationError('importoVincoloTD',e );
	}		
}

function selettoreImportoDown(){
	try{
		var cap = $('#importoVincolo').val();
		if(parseInt( cap ) < 1)
			throw msgErroreImportoVincolo;
		var num = parseInt( cap ) - 100;
		if( num < 0)
			num = 0;
		$("#importoVincolo").val(num);
		settingInsertVincolo();
	}catch(e){
		addValidationError('#importoVincoloTD',e );
	}			
}	

function settingInsertVincolo(){
	try{	
		//alert("settingInsertVincolo : $('#durataVincolo').val()=" +$('#durataVincolo').val());
		var val = $('#durataVincolo').val().split("#");
		var importoMinimo = val[6];
		var isNotSvin = val[7];
		var moltiplicatore = val[9];
		//alert("moltiplicatore=" + moltiplicatore);
		
		var importo = $('#importoVincolo').val();
		if(importo.lastIndexOf('.')>0)
			throw msgErroreImportoVincolo3;
		
		if( isNaN( importo ) )
			throw msgErroreImportoVincolo3;
		
		var margine = $('#margineCD').val();
//		if( Number(importo) > Number(margine) )
//			throw msgErroreMargineVincolo;
		if( Number(importo) > 1000000 ){
			importo = 1000000;
			$('#importoVincolo').val(1000000);
		}
		var durata = val[2];
		//alert ("durata=" +durata);
		var tassoL = val[1];
		var dataI =  val[3];
		//alert ("dataI=" +dataI);
		var dataF =  val[4];
		//alert ("dataF=" +dataF);
		var tassoN =  val[5];
		if( isNaN( durata ) )
			throw msgErroreDurataVincolo;
		//alert ( importo + " - " + tassoN + " - " + dataF + "- " + dataI + " - " + durata)
		var rend  = calcolaInteressiLV( importo, moltiplicatore);
		//alert ("rend 0=" +rend[0]+ " ; rend 1=" +rend[1]);
		$("#interessiLordi")[0].innerHTML = "<strong>"+ rend[0] +" EUR</strong>";
		$("#tassoLordo")[0].innerHTML = "<strong>"+tassoL +"%</strong>";
	}catch(e){
		addValidationError('importoVincoloTD',e );
	}		
}

function settingInsertVincoloFresh(){
	try{	
		//alert("settingInsertVincoloFresh");
		var val = $('#durataVincoloFresh').val().split("#");
		//alert("durataVincoloFresh=" + val);
		var valFresh = $('#margineFresh').val();
		//alert("valFresh="+valFresh);
		var importo = $('#importoVincoloFresh').val();
		//alert("importo="+importo);
		
		if(importo.lastIndexOf('.')>0)
			throw msgErroreImportoVincolo3;
		
		if( isNaN( importo ) )
			throw msgErroreImportoVincolo3;
		
		if ( Number(importo) > Number(valFresh) )
			throw msgErroreMargineFreshMoney;
		
		var margine = $('#margineCD').val();
		//alert("margine="+margine);
		
		if( Number(importo) > Number(margine) )
			throw msgErroreMargineVincolo;
		var durata = val[2];
		//alert ("durata=" +durata);
		var tassoL = val[1];
		var dataI =  val[3];
		//alert ("dataI=" +dataI);
		var dataF =  val[4];
		//alert ("dataF=" +dataF);
		var tassoN =  val[5];
		if( isNaN( durata ) )
			throw msgErroreDurataVincolo;
		var moltiplicatore = val[9];
		//alert ("isNaN=" +isNaN( durata ));
		//alert ( importo + " - " + tassoN + " - " + dataF + "- " + dataI + " - " + durata)
		//var rend  = loadInteressiAscadenza( importo, tassoN, dataF, dataI, durata);
		var rend  = calcolaInteressiLV( importo, moltiplicatore);
		//alert ("rend=" +rend);
		$("#interessiNettiFresh")[0].innerHTML = "<strong>"+ rend[0] +" &euro;</strong>";
		//$("#interessiLordi")[0].innerHTML = "<strong>"+ formatDouble( rend ) +" EUR</strong>";
		
	}catch(e){
		addValidationError('',e );
	}		
}



function loadInteressiAscadenza( importo, moltiplicatore) {
	//alert("loadInteressiAscadenza");
	if( dataF.length != 10){
		addValidationError('importoVincoloTD',msgErroreDataVincolo);
	}
	if( dataI.length != 10){
		addValidationError('importoVincoloTD',msgErroreDataVincolo);
	}	
	var res = 0;
	try{
//		res = loadInteressiNettoVincolo( importo, tassoN, dataF, dataI, durata); 
		res = calcolaRendimentoLV(importo, moltiplicatore);
	}catch(e){
		addValidationError('importoVincoloTD',msgErroreDataVincolo);
	}	
	return res;
}

function loadInsertVincoloBase(){
	//alert ("loadInsertVincoloBase");
	var importo = $('#importoVincolo').val();
	if( importo.length > 0 ){
		settingInsertVincolo();
	}
}

function loadInsertVincoloFresh(){
	//alert ("loadInsertVincoloFresh");
	var importoVincoloFresh = $('#importoVincoloFresh');
	if(importoVincoloFresh.length && importoVincoloFresh.val()!='') {
		settingInsertVincoloFresh();
	}
}



function submitVincoloForm(elem){
	var importoVincoloFresh = $('#importoVincoloFresh');
	if(importoVincoloFresh.length && importoVincoloFresh.val()!='')
	{
		if(doValidations(settingInsertVincoloFresh)){
		$('#vincoloForm').submit();
		elem.disabled=true;
		}
	}
	
	else if(doValidations(settingInsertVincolo)){
		$('#vincoloForm').submit();
		elem.disabled=true;
	}
}

function svuota(id){
	id = jqc(id);
	if($(id)!=null && $(id).val()!="")
	{
		//alert ("Attenzione svuoto " + id);
		$(id).val("");
	}
}
///////////////////////////////////////////////// END VINCOLI INSERT //////////////////////////////////////////

////////////////////////////////////////////////  INIT VINCOLI LISTA //////////////////////////////////////////

function boxCaricamentoVincoli(id,numCell){
	id = jqc(id);
	var sTable = $(id);
	var sRow = $('<tr>').insertAfter(sTable.find('tr:nth-child(1)'));
	sRow.attr(sNameStile, 'dispari');
	var tdCell = $('<td>').appendTo(sRow)
	.attr(sNameStile, 'left')
	.attr(sNameColspan, numCell);
	var img = $('<img>')
	.attr('src',imgPath+'ico2inf_loading.gif')
	.attr(sNameStile,'caricamento');
	tdCell.append(img)
	.append('caricamento in corso');
}

function deleteTableVincoli(id){
	id = jqc(id);
	var sTable = $(id);
	var rows = sTable.find('tr:nth-child(n+2)').remove();
}

function cambioImgVincoli( id, ord ,tipOrd){
	id = jqc(id);
	var classTh = 'sort asc';
	if( tipOrd == 'D')
		classTh = 'sort desc';
	var linkOne = $(id);
	linkOne.attr('href',"javascript:loadListaVincoli('"+ord+"');");
	linkOne.closest('th').attr('class', classTh);
	
}
 
function loadListaVincoliBase(){
	if(window.ActiveXObject){
		sNameStile = "class";
		sNameColspan = "colSpan";
	}
	var contoCD = loadContoSelVincolo();
	callListaVincoli( contoCD, '');	
}

function loadListaVincoli( tipoCall ){
	if(window.ActiveXObject){
		sNameStile = "class";
		sNameColspan = "colSpan";
	}

	//si cancellano le righe
	deleteTableVincoli('tableVincoli');
	boxCaricamentoVincoli('tableVincoli','8');
	if( tipoCall == 'sel' ){
		//dalla select
		callSelectVincoli();
	}else{
		var contoCD = loadContoSelVincolo();
		if( tipoCall == 'ord1A' ){
			//ordina per data di scadenza
			cambioImgVincoli( "ordDataVincolo", 'ord1D' ,'D');
			callListaVincoli( contoCD, 'Sasc');
		}else{
			if( tipoCall == 'ord2A' ){
				//ordina per tasso
				cambioImgVincoli( "ordTassoVincolo", 'ord2D' ,'D');
				callListaVincoli( contoCD, 'Tasc');
			}else{
				if( tipoCall == 'ord3A' ){
					//ordina per durata
					cambioImgVincoli( "ordDurataVincolo", 'ord3D' ,'D');
					callListaVincoli( contoCD, 'Dasc');
				}else{
					if( tipoCall == 'ord1D' ){
						//ordina per data di scadenza
						cambioImgVincoli( "ordDataVincolo", 'ord1A' ,'A');
						callListaVincoli( contoCD, 'Sdis');
					}else{
						if( tipoCall == 'ord2D' ){
							//ordina per tasso
							cambioImgVincoli( "ordTassoVincolo", 'ord2A' ,'A');
							callListaVincoli( contoCD, 'Tdis');
						}else{
							if( tipoCall == 'ord3D' ){
								//ordina per durata
								cambioImgVincoli( "ordDurataVincolo", 'ord3A' ,'A');
								callListaVincoli( contoCD, 'Ddis');
							}else{
								if( tipoCall == 'ord5A' ){
									//ordina per apertura
									cambioImgVincoli( "ordDataAperturaVincolo", 'ord5D' ,'D');
									callListaVincoli( contoCD, 'Aasc');
								}else{
									if( tipoCall == 'ord5D' ){
										//ordina per apertura
										cambioImgVincoli( "ordDataAperturaVincolo", 'ord5A' ,'A');
										callListaVincoli( contoCD, 'Adis');
									}else{
										if( tipoCall == 'ord4D' ){
											//ordina per apertura
											cambioImgVincoli( "ordNumVincolo", 'ord4A' ,'A');
											callListaVincoli( contoCD, 'Ndis');
										}else{
											if( tipoCall == 'ord4A' ){
												//ordina per apertura
												cambioImgVincoli( "ordNumVincolo", 'ord4D' ,'D');
												callListaVincoli( contoCD, 'Nasc');
											}else{
												//load iniziale
												callListaVincoli( '', '');			
											}						
										}						
									}					
								}			
							}
						}
					}
				}
			}
		}
	}
}

function callSelectVincoli(){
	var contoCD = loadContoSelVincolo();
	callListaVincoli( contoCD, '');
}

function callListaVincoli( contoCD, ordinamento) {
			
	var url = cgi_script + "/bnkg/listaVincoliConti.do?method=ajax&contoSelVincolo="+contoCD+"&tipoOrd="+ordinamento+"&cf="+Math.random();
	//alert(url);
    if (window.XMLHttpRequest) {
        var req = new XMLHttpRequest();
        req.onreadystatechange = function() { processReqChangeVincoli(req); };	       
        req.open("GET", url, true);
        req.send(null);
    } else if (window.ActiveXObject) {
        var req = new ActiveXObject("Microsoft.XMLHTTP");
        if (req) {
            req.onreadystatechange = function() { processReqChangeVincoli(req); };
            req.open("GET", url, true);
            req.send();
        }    
    }	
}

function processReqChangeVincoli(req){
	// only if req shows "loaded"
	if (req.readyState == 4){
	    // only if "OK"
	    //alert("prima del 200 "+req.status);
	    if(req.status == 200){
			viewListaVincoli(req);
		}else{
		   	alert("Errore reperimento dati:\n" + req.statusText+" status:"+req.status);
		}
	}
}

function viewListaVincoli(req) {

	var resJson = req.responseText;
	//alert("result:"+resJson);
	var resultJson = eval("("+resJson+")");
	//alert("esito="+resultJson.esitoCall);
	//si verifica se siamo in presenza di esito positivo
	$("#totVincoli")[0].innerHTML = '<strong>'+resultJson.totImporto+' EUR</strong>';
	if( resultJson.esitoCall == 'true' ){
		//box dati
		writeListaVincoli(resultJson);
	}else{
		//box errore
		writeErrorListaVincoli(resultJson);	
	}
}

function writeListaVincoli(resultJson) {
	//alert("writeListaVincoli");
	var sTable = $("#tableVincoli");
	var isInformativo = $("#info").val();
	sTable.find('tr:nth-child(2)').remove();
	var sRow = null;
	var tdDurata = null;
	var tdImAscad = null;
	var tdInfo = null;
	var tdImVin = null;
	var tdDataScad = null;
	var tdTassoL = null;
	var tdSvincola = null;
	var sNameColspan = 'colSpan';
	var tdIdVincolo = null;
	var vetDati = resultJson.dati;
	var numElem = vetDati.length;
	var importo = null;
	var importoFinale = null;
	for( i=0; i<numElem; i++){
		sRow = $('<tr>').insertAfter(sTable.find('tr:first'));
		if(i%2==0)
			sRow.attr(sNameStile, 'pari');
		else
			sRow.attr(sNameStile, 'dispari');
		
		tdIdVincolo = $('<td>').attr(sNameStile, 'center').html(vetDati[i].idVincolo).appendTo(sRow);
		tdNomeLinea = $('<td>').attr(sNameStile, 'center').appendTo(sRow);
		if(vetDati[i].nSvin==0){
			var anchorElement = $('<a>', {'href': 'javascript:'})
				.click(createFakeFunction(callSetDescrizioneVincolo, [vetDati[i].idVincolo, vetDati[i].dataScadenza, vetDati[i].tassoLordo, vetDati[i].durataVincolo, vetDati[i].importoVincolato, vetDati[i].importoAllaScadenza, vetDati[i].nomeLinea, vetDati[i].dataApertura]));
			if(!isMissingVar(vetDati[i].nomeLinea)){
				anchorElement.html(escapeHTML(vetDati[i].nomeLinea))
				.attr('title', "Modifica il nome della linea")
				.appendTo(tdNomeLinea);
			}else{
				anchorElement.html(defaultDescForTd)
				.attr('title', "Clicca per assegnare un nome alla linea")
				.appendTo(tdNomeLinea);
			}
		}else{
			tdNomeLinea.html(escapeHTML(vetDati[i].nomeLinea));		
		}
		$('<td>').attr(sNameStile, 'center').html(vetDati[i].tassoLordo).appendTo(sRow);
		$('<td>').attr(sNameStile, 'center').html(vetDati[i].durataVincolo).appendTo(sRow);
		$('<td>').attr(sNameStile, 'center').html(vetDati[i].dataApertura).appendTo(sRow);
		$('<td>').attr(sNameStile, 'center').html(vetDati[i].dataScadenza).appendTo(sRow);
		$('<td>').attr(sNameStile, 'right').html(vetDati[i].importoVincolato).appendTo(sRow);
		tdImAscad = $('<td>').attr(sNameStile, 'right').html(vetDati[i].importoAllaScadenza).appendTo(sRow);
		tdInfo = $('<td>').attr(sNameStile, 'center').appendTo(sRow);
		var img = $('<img>');
		if(isInformativo == 'true' || vetDati[i].nSvin!=0 ){
			
			var nonDispStr = '';
			if(isInformativo == 'true')
				nonDispStr = 'Questa funzione non &egrave; disponibile nel profilo &quot;Consultare&quot;.';
			else
				nonDispStr = 'Questa &egrave; la linea '+escapeHTML(vetDati[i].nomeLinea)+', non svincolabile, che hai attivato per ricevere il premio.';
			var tdInnerHTML = '<img src="'+imgPath +'ico1gr_svincola_off.gif" alt="'+ nonDispStr +'" title="'+ nonDispStr +'"/>';
			tdInfo.html(tdInnerHTML);
			/*img.attr('src',imgPath+'ico1gr_svincola_off.gif');
			img.attr('alt', 'Questa funzione non \u0026egrave; disponibile nel profilo "Consultare".');
			img.attr('title', 'Questa funzione non \u0026egrave; disponibile nel profilo "Consultare".');
			tdImAscad.append( img );*/

		}else{
			var sAA = $('<a>', {'href': 'javascript:'});
			sAA.click(createFakeFunction(callDeleteVincolo, [vetDati[i].idVincolo, vetDati[i].importoVincolato, vetDati[i].dataApertura, vetDati[i].dataScadenza, vetDati[i].tassoLordo, vetDati[i].nomeLinea]));
			img.attr({ 'src': imgPath+'ico1gr_svincola.gif', 'alt': "Svincola" });
			tdInfo.append(sAA.append(img));
		}
	}
	
	//per visualizzazione footer riga totale importo
	sRow = $('<tr>').appendTo(sTable)
	.attr(sNameStile, 'color2');
//	if(numElem+1%2==0)
//		sRow.attr(sNameStile, 'pari');
//	else
//		sRow.attr(sNameStile, 'dispari');
	$('<td>').appendTo(sRow)
	.attr(sNameStile, 'tot')
	.attr( sNameColspan , 6 )
	.append($('<strong>').html('TOTALE'));
	
	$('<td>').appendTo(sRow)
	.attr(sNameStile, 'right')
	.append($('<strong>').html(resultJson.totImporto));
	
	$('<td>').appendTo(sRow)
	.attr(sNameStile, 'right')
	.append($('<strong>').html(resultJson.totImportoScadenza));

	$('<td>').appendTo(sRow)
	.attr(sNameStile, 'right')
	.html('&nbsp;');
	
}

function createFakeFunction (func, args) {
	return function () { func.apply(window, args); };
}

function writeErrorListaVincoli(resultJson) {
	deleteTableVincoli('tableVincoli');
	$("#tableVincoli tr:last").after("<tr class='dispari'><td class='left' colspan=7>"+resultJson.msgEsitoCall+"</td></tr>");
}

function callDeleteVincolo(idVincolo, importo, dataA, dataS,tassoL,nomeLinea) {
	//si elimina un eventuale riga di errore
	$("#msgErrorVincoli").empty();
	$("#conditionedinput").val('');
	$("#importoVincolo")[0].innerHTML = importo+' EUR';
	$("#importoTotVincolo").val(importo);
	$("#dataAperturaVincolo")[0].innerHTML = dataA;
	$("#dataScadenzaVincolo")[0].innerHTML = dataS;
	$("#idVincolo")[0].innerHTML = idVincolo;
	$("#tassoLVincolo").val(tassoL);
	$("#codCancellaVincolo").val(idVincolo);
	if(isMissingVar(nomeLinea)) {
		$("#nomeLinea").empty();
		$("#trNomeLinea").hide();
	}
	else {
		$("#nomeLinea").html(escapeHTML(nomeLinea));
		$("#trNomeLinea").show();
	}
	openAlert('layeralert2');
	
	$('#boxRetention').empty();
	
	if (viewBannerRetention(dataA, dataS)) 
	{
		jqAJAXCall('POST', 'html', "/webankpri/wbOnetoone/wbblack/ajax/json/getBannerRetention.jsp",
			function (html) {
				$("#boxRetention").html(html).show();
			},
			null, {dataScadenza: dataS, path: "NAV_SVINCOLA" }
		);
	};
}

function callSetDescrizioneVincolo(idVincolo, dataS, tassoL, durataV,importoV,importoS,nomeL, dataA) {
	//alert("callSetDescrizioneVincolo");
	//si elimina un eventuale riga di errore
	$("#msgErrorVincoli3").empty();
	$("#importoV")[0].innerHTML = importoV+' EUR';
	$("#importoS")[0].innerHTML = importoS+' EUR';
	$("#dataScadenzaV")[0].innerHTML = dataS;
	$("#dataAperturaV")[0].innerHTML = dataA;
	$("#durataV")[0].innerHTML = durataV+' mesi';
	$("#idV")[0].innerHTML = idVincolo;
	$("#tassoL")[0].innerHTML = tassoL+'%';
	var el = $("#inputX1");
	var input = el.find('input:first');
	inputcont = input.closest('.inputcont');
	if ($.trim(input.val()) == '') svuotaInputX(input.closest('.inputcont'));
	if(isMissingVar(nomeL)){
		$("#nomeL").val(getWatermark ($('#inputX1')));
		$("#setDescVincoloTitolo")[0].innerHTML = 'DAI UN  NOME ALLA LINEA VINCOLATA';
		$("#setDescVincoloPar")[0].innerHTML = 'Puoi assegnare un nome per identificare questa linea vincolata';
		inputcont.removeClass('Active').addClass('Inactive');
	}else{
		$("#nomeL").val(nomeL);
		$("#setDescVincoloTitolo")[0].innerHTML = 'MODIFICA IL NOME DELLA LINEA VINCOLATA';
		$("#setDescVincoloPar")[0].innerHTML = 'Puoi modificare il nome usato per identificare questa linea vincolata';
		inputcont.removeClass('Inactive').addClass('Active');
	}
	openAlert('layerSetDescrizioneVincolo');
	
	 
}


function loadDeleteVincolo(){
	$("#msgErrorVincoli2").empty();
	var contoCD = loadContoSelVincolo();
	var tassoL = $("#tassoLVincolo").val();
	tassoL = tassoL.replace(',','.');
	var dataFin = $("#dataScadenzaVincolo").html();
	var dataIn = $("#dataAperturaVincolo").html();
	var importo = $("#importoTotVincolo").val();
	var importoParziale = $("#conditionedinput").val();
	var codVincolo = $("#codCancellaVincolo").val(); 
	// alert('importo='+importo+"  importoParziale="+importoParziale+" check="+check+" codVincolo="+codVincolo);
	var importoTot = importo;
	for( i=0; i<5; i++){
		importoTot = importoTot.replace('.','');
	}
	importoTot = importoTot.replace(',','.');
	if(importoParziale!=null && importoParziale!="" ){
		//se l'importo contiene punti o virgole non valido e lo segnalo al cliente
		if (importoParziale.lastIndexOf(',') > 0 || importoParziale.lastIndexOf('.') > 0){
			$("#msgErrorVincoli")[0].innerHTML = msgErroreImportoVincolo3;
		}else if( isNaN( importoParziale ) ){
			$("#msgErrorVincoli")[0].innerHTML = msgErroreImportoVincolo2;
		}else{
			if(  Number(importoParziale) > Number(importoTot) ){
				$("#msgErrorVincoli")[0].innerHTML = msgErroreImportoVincolo2;
			}else{
				
				if(importoParziale==""){
					$("#msgErrorVincoli")[0].innerHTML = msgErroreNessunImportoVincolo;
				}else if(Number(importoParziale) < 1 ){
					$("#msgErrorVincoli")[0].innerHTML = msgErroreImportoVincolo2;
				}else{
					$("#msgErrorVincoli").empty();
					$("#importoVincoloF")[0].innerHTML = formatDouble( importoParziale )+'EUR';
					loadDeleteVincolo2(contoCD, importoTot, importoParziale, true, codVincolo, tassoL, dataFin, dataIn);
				}
			}
		}
	}else{
		importoParziale = "00000";
		$("#importoVincoloF")[0].innerHTML =  importo +'EUR';
		loadDeleteVincolo2( contoCD, importoTot, importoParziale, false, codVincolo,tassoL, dataFin, dataIn);
	}
	
}

function loadDeleteVincolo2( contoCD, importo, importoParz, isParz, codVincolo,tasso,dataFin,dataIn){
	closeAlert('layeralert2');
	var link = "callCancellaVincolo('"+contoCD+"','"+importo+"','"+importoParz+"','"+isParz+"','"+codVincolo+"','"+tasso+"','"+dataFin+"','"+dataIn+"');";
	pulsanteSvincolo( link )
	openAlert('layeralert2F');
}

function callCancellaVincolo( contoCD, importo, importoParz, isParz, codVincolo, tasso, dataFin, dataIn) {	
	$("#divLoadDeleteVincolo")[0].innerHTML='<img src="'+imgPath+'ico2inf_loading.gif" class="caricamento">caricamento in corso';
	var url = cgi_script + "/bnkg/confermaVincoloConti.do?method=deleteAjax&contoSelVincolo="+contoCD+"&importoVincolo="+importo+"&importoParzVincolo="+importoParz+"&isParzVincolo="+isParz+"&codVincolo="+codVincolo+"&tassoLVin="+tasso+"&dataFinVin="+dataFin+"&dataInVin="+dataIn+"&cf="+Math.random();
	//alert(url);
    if (window.XMLHttpRequest) {
        var req = new XMLHttpRequest();
        req.onreadystatechange = function() { processReqDeleteVincolo(req); };	       
        req.open("GET", url, true);
        req.send(null);
    } else if (window.ActiveXObject) {
        var req = new ActiveXObject("Microsoft.XMLHTTP");
        if (req) {
            req.onreadystatechange = function() { processReqDeleteVincolo(req); };
            req.open("GET", url, true);
            req.send();
        }    
    }	
}

function processReqDeleteVincolo(req){
	// only if req shows "loaded"
	if (req.readyState == 4){
	    // only if "OK"
	    //alert("prima del 200 "+req.status);
	    if(req.status == 200){    	
	    	viewDeleteVincolo(req);
		}else{
		   	alert("Errore reperimento dati:\n" + req.statusText+" status:"+req.status);
		}
	}
}



function viewDeleteVincolo(req) {
	var resJson = req.responseText;
	var resultJson = eval("("+resJson+")");
	if( resultJson.esitoCall == 'true' ){
    	closeAlert('layeralert2F');
		loadListaVincoli('sel');
	}else{
		$("#msgErrorVincoli2")[0].innerHTML =resultJson.msgEsitoCall;
		$("#divLoadDeleteVincolo").empty();
	}
}


function pulsanteSvincolo(link) {
	//si ripristina il vecchio layer
	$("#divLoadDeleteVincolo").empty();
	var container = $("#divLoadDeleteVincolo");
	var sLink = $('<a>')
	.attr('href','javascript:'+link)
	.attr('title','Conferma')
	.attr(sNameStile,'btnformright');
	var imgL = $('<img>')
	.attr('alt','')
	.attr('src', imgPath+'btn_left_ar.gif');
	var imgR = $('<img>')
	.attr('alt','')
	.attr('src', imgPath+'btn_right_ar.gif');
	var span = $('<span>')
	.append("Conferma");
	sLink.append(imgL)
	.append( span )
	.append(imgR);
	container.append(sLink);
}

function loadContoSelVincolo(){
	var contoCD = $("#contoSelVincolo").val();
	return contoCD;
}

function loadSetDescrVincolo(){
	//alert("loadSetDescrVincolo");
	$("#msgErrorVincoli2").empty();
	var contoCD = loadContoSelVincolo();
	
	var idLinea = $("#idV").html();
	var nomeLinea = $("#nomeL").val();
	if(nomeLinea == getWatermark ($('#inputX1'))){
		nomeLinea = null;
	}
    var dataS =  $("#dataScadenzaV").html();
	callSetDescrVincolo( idLinea, nomeLinea, contoCD,dataS);
}

function callSetDescrVincolo( idLinea, nomeLinea, contoCD, dataS) {	
	//alert("callSetDescrVincolo");
	var url = "/confermaVincoloConti.do";
	var AjaxUrl = cgi_script + '/bnkg' + url;
	var parameters = {
		"method": "setDescrAjax",
		"contoSelVincolo": contoCD, 
		"idLinea": idLinea, 
		"nomeLinea": nomeLinea,	
		"dataScadenza": dataS,	
		"cf": Math.random()
	};
	jqAJAXCall('POST', 'json', AjaxUrl, viewSetDescrizioneVincolo, viewSetDescrizioneVincolo, parameters);
}

function processReqSetDescrizioneVincolo(req){
	

	// only if req shows "loaded"
	if (req.readyState == 4){
	    // only if "OK"
	    //alert("prima del 200 "+req.status);
		if(req.status == 200){    	
			viewSetDescrizioneVincolo(req);
		}else{
		   	alert("Errore reperimento dati:\n" + req.statusText+" status:"+req.status);
		}
	}
}

function viewSetDescrizioneVincolo(resultJson) {
	var warning = '<strong class="nega">ATTENZIONE!</strong><br/>';
	if( resultJson.esitoCall == 'true' ){
    	closeAlert('layerSetDescrizioneVincolo');
		loadListaVincoli('sel');
	}else{
		$("#msgErrorVincoli3")[0].innerHTML = warning + resultJson.msgEsitoCall ;
		$("#divLoadDeleteVincolo").empty();
	}
}


function isMissingVar (variable) {
	return (typeof variable == 'undefined' || variable === null)? true : false;
}
////////////////////////////////////////////////  END VINCOLI LISTA ///////////////////////////////////////////
