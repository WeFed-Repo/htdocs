/* PREVENTIVATORE PRESTITI */
/* Mostra l'html del calcolatore */
var prestCalcShow = function() {
	prestContainer = $("#prestCalcWrapper");
	$.ajax({
		url: "/common/fe/html/priv_calcolatore_prestiti.html?rand="+Math.random(),
		dataType: "html",
		success: function(data){
			prestContainer.html(data);
			prestCalcInit();
		}
	});
}

var  prestCalcInit = function() {
	 prestitoForm = prestContainer.find("form").eq(0);
	 prestIncr = 1000;
	 maxPrestVal = '';
	 minPrestVal = '';
	 resultWrapper = $("#ratePrestitiResults");
	 resultWrapperType = resultWrapper.find('.col-sm-6');
	 importoDef= '';
	 resultData = {};
	 counter = 0;
	 // Inizializza e resetta lo slider
	
	

	 //inserimento in campi valori in linea
	prestitoImp = prestitoForm.find("input[type=text]");
	prestitoImp.on("keydown",function(){this.value = cleanInt(this.value)
		
			
	});
	prestitoImp.on("focus",function(){this.value = cleanInt(this.value)});
	prestitoImp.on("blur",function(){this.value = formatMigliaia(this.value);prestCheckVal(this,cleanInt(this.value))})
	prestitoImp.on("keyup",function(){this.value = cleanInt(this.value);
			hideResults();
			
	});
	
	//evento click su bottone aggiungi o togli importo
	 prestitoForm.find(".plusmin").click(function(){
		    hideResults();
		    btn = $(this);
			field = prestitoForm.find("input[name="+btn.attr("data-refered")+"]");
			fieldValue = Math.floor(cleanInt(field.val())/prestIncr) * prestIncr;
			
			fieldValue = (btn.hasClass("min"))? (fieldValue - prestIncr) : (fieldValue + prestIncr);
			noerror = true;
			prestitiResetErrors();
			if (prestCheckVal(field,fieldValue)) field.val(formatMigliaia(fieldValue));
 	});
	prestButton = $("#prestitoButton");
	prestButton.click(function(event){
		if($(event.target).hasClass('btn-disabled'))
		{
			return false;
		}
		else {
			prestGetData();
		}
		
	});
	prestGetData();
}

/*var getUrlParameter = function() {
    url = prestUrl;
    var args = new Array();
    var toReturn = {};
    var questionSplit = url.split('&');
   	for (arg in questionSplit) {
   		var parts = questionSplit[arg].split('=');
   		args[unescape(parts[0])] = unescape(parts[1])
   	}
   	return args;
}*/
var getSecciParameter = function() {
	var importoPrestito =  cleanInt(prestitoForm.find("input[name=importoprestito]").val());
	var numRate =  prestitoSlide.slider( "option", "value" );
	return '&importoPrestito=' + importoPrestito.toString() + '&numRate=' + numRate.toString();
}
var getDataAppuntamento = function() {
	var importoToSend =  cleanInt(prestitoForm.find("input[name=importoprestito]").val());
	var mesiToSend =  prestitoSlide.slider( "option", "value" );
	/*$('#sendDataAppuntamento').find('input[name=importoToSend]').val(importoToSend);
	$('#sendDataAppuntamento').find('input[name=mesiToSend]').val(mesiToSend);*/
	var pRichiediForm = $("#sendDataAppuntamento").empty(),
		mAppObj = {
			"Prodotto": "VERSATILO ZERO SPESE",
			"Importo prestito": formattaNumero(importoToSend,2),
			"Durata": mesiToSend
			
		}
	$.each(mAppObj,function(i,v){
			if(mAppObj[i] === undefined) {
				delete(mAppObj[i])
				}
			else
			{
				if (mAppObj[i] === "") delete(mAppObj[i])
			}
	});
	pRichiediForm.append($("<input>").attr({"name":"dati_simulazione","type":"hidden"}).val(JSON.stringify(mAppObj)));

	
}
var errorDati = function() {
	$('#formprestito').hide();
	$('#prestCalcWrapper').append('<div class="row"><div class="col-sm-6"><div class="messagePanel alert hidden-print"><div><h3>Al momento non &egrave; possibile fare il preventivo: contatta il tuo gestore.</h3><p>Ci scusiamo per il disagio.</p></div></div></div><div class="col-sm-6"><div class="btn-align-left"><a type="button" class="btn btn-primary proseguiButton" onclick="location.reload()">Fai il preventivo</a></div></div></div>')
}
var  prestGetData = function() {
	 
	 
	 prestContainer.addClass("loading");
	 /*var get = getUrlParameter();
	 var idprodotto = get['idprodotto'];
	 var codtabella = get['codtabella'];*/
	 
	 $.ajax({
		url: prestUrl,
		method: "post",
		data: {
			importoPrestito: cleanInt(prestitoForm.find("input[name=importoprestito]").val())
		},
		dataType: "json",
		success: function(data) {
			
			
			resultData = data;
			showResults();
			if(counter==0) {
				prestitoSlide = $("#prestMesi").sliderPlus(
				{
					value: resultData.numRateDef,
					min: resultData.numRateMin,
					max: resultData.numRateMax,
					range: "min",
					step: 6,
					milestone: 20,
					spinners: true,
					change: function() {popolaDatiPrestiti(resultData)}
				}
				);
			}
			

			$("#prestCalcWrapper").removeClass("loading");
			if(data.esito==='ok'){
				popolaDatiPrestiti(resultData);
			}
			else {
				errorDati();
			}
			
		},
		error: function(xhr, status, error) {
			$("#prestCalcWrapper").removeClass("loading");
			errorDati();
		}
	})
}
var popolaDatiPrestiti = function(resultData) {
	
	
	resultWrapperType.html("");
	$.each(resultWrapperType,function(i,v){
				//importo di default, se la chiamata è al load inserire importo default:
		 		if (counter===0) {
					importoDef = formatMigliaia(resultData.importoDef);

				}
				else {
					importoDef = $('#prestValore').val();
				}
				counter +=1;	
				$('#prestValore').val(importoDef);

				prestType = $(this).attr('data-type');
				var typeAss;
				switch (prestType) {
					  case "normal":
					    	typeAss = 'Rata senza copertura assicurativa',
					    	dataAss = resultData.normal,
					    	secciAss = resultData.linkSecciNormal + getSecciParameter()
						break;
					  case "assurance":
					    	typeAss = 'Rata con copertura assicurativa',
					    	dataAss = resultData.assurance,
					    	secciAss = resultData.linkSecciAssurance + getSecciParameter()
					  break;
					  default:
					   
				}
				
				maxPrestVal = resultData.importoMax;
				minPrestVal = resultData.importoMin;



				var prestitiNode = $("<div>").addClass("prestitiData").append($("<h4>").addClass("title").html(typeAss));
				var rateValue = prestitoSlide.slider( "option", "value" );
				//per ogni array di dati pesco il valore corrispondente al numero di rata
				var dataAssFiltered = dataAss.filter(function(dataAss){
					return dataAss.NumRate === rateValue
				});
				
				//console.log(dataAssFiltered);
				
				
				if(typeof dataAssFiltered[0] != 'undefined') {

					var decimali;
					
					if(typeof dataAssFiltered[0].Amount.toString().split(".")[1] != 'undefined') {
						decimali = dataAssFiltered[0].Amount.toFixed(2).split(".")[1]
					}
					else {
						decimali = '00';
					}

					var	prestitoRata = $("<div>").addClass("rata-value").append($("<span>").addClass("rata-text").html('<span class="text">La tua rata: </span>' + dataAssFiltered[0].Amount.toString().split(".")[0] + ",<span class=\"small\">"+ decimali+"&nbsp;</span>&euro;<span class=\"smaller\">&nbsp;al mese</span>")),
					prestitoRataWrapper = $("<div>").addClass("rata-progress").append(prestitoRata),
					prestitoInfo = $("<div>").addClass("rata-info").append($("<span>").html("TAN: ").append($("<strong class=\" verde\">").html(dataAssFiltered[0].TAN.toFixed(2).replace('.',',') + "%")))
					.append($("<strong>").html(" - TAEG: ").append($("<strong class=\" verde \">").html(dataAssFiltered[0].TAEG.toFixed(2).replace('.',',') + "%"+ '<a href="javascript:;" data-toggle="modal" data-target="#modaleTaeg"><i class="icon icon-info_fill" title="taeg"></i></a> '))),
					prestitoDoc = '<a target="_blank" href="' + secciAss + '"><i class="icon icon-file_pdf_fill fLeft" title="modulo secci"></i> <span class="fLeft btnLink paddingLeftSmall">Modulo SECCI</span></a><a class="no-underline btn-icon" href="javascript:;"><i class="icon icon-info_fill" data-toggle="tooltip" data-title="Attenzione: in questa fase possiamo fornirti un SECCI impostato esclusivamente sulla base delle preferenze da te manifestate. Per ricevere un SECCI con le condizioni finanziarie personalizzate, procedi con la richiesta in filiale e attendi l&rsquo;esito della consultazione dei Sistemi di Informazione Creditizia."></i></a>';
					prestitiNode.append(prestitoRataWrapper,prestitoInfo, prestitoDoc);
					$(this).append(prestitiNode)

					
				}
			})
	getDataAppuntamento();
	initTooltip();
}

//FUNZIONI AUSILIARIE

//funzione per ripulire il campo importo di caratteri non numerici
var cleanInt = function(valore)
{
	var val = $.grep($(valore.split("")),function(n){
		var testStr = "01234567890";
		if (testStr.indexOf(n)>=0) return n
	});
	return Number(val.join(""));
}

/* Rimuove gli errori */
var prestitiResetErrors = function () {
	var errors = new Array();
	setHasErrors(errors, "#formprestito");
}

// Controlli incrociati
var prestCheckVal = function(field,fieldValue)
{
	
	field = $(field);
	noerror = true;
	if (fieldValue>maxPrestVal)
		{
			field.val(formatMigliaia(maxPrestVal));
			prestitiShowError(field,"Non &egrave; possibile inserire valori superiori a "+ formatMigliaia(maxPrestVal) + " &euro;");
			noerror = false;
		}

	if (fieldValue<minPrestVal)
		{
			field.val(formatMigliaia(minPrestVal));
			prestitiShowError(field,"Non &egrave; possibile inserire valori inferiori a "+ formatMigliaia(minPrestVal) + " &euro;");
			noerror = false;
		}
	return noerror;
}
var formatMigliaia = function (num)
{
	var rArr = new Array();
	// Interi
	var nInt = Number(num).toString().split(".")[0].split("").reverse();
	$.each(nInt, function (i,v) {
		if(i%3==0 && i>0) rArr.push(".");
		rArr.push(v);
	});
	return rArr.reverse().join("");
}

/* Mostra l'errore in stile flash */
var prestitiShowError = function(field, errormessage)
{
	var errors = new Array();
	errors.push({ field: field, text: errormessage });
	setHasErrors(errors, "#formprestito");
	field.on("click keypress", prestitiResetErrors);
}
var hideResults = function() {
 	// Sblocca il pulsante
	$("#prestitoButton").removeClass("btn-disabled").attr('disabled',false);
	$("#btnRichiediApp").addClass("btn-disabled").attr('disabled',true);
	// Nascondi i risultati
	resultWrapper.fadeOut(800);
}

var showResults = function () {
	// Blocca il pulsante
	$("#prestitoButton,#vaiApp").addClass("btn-disabled").attr('disabled',true);
	$("#btnRichiediApp").removeClass("btn-disabled").attr('disabled',false);
	// Mostra i risultati 
	resultWrapper.fadeIn(800);
}

