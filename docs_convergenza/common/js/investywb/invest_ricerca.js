
var struts2NamespaceVal	="/investywb";
var obskeyVal = "nav_priv_wbx_switch_new"; 	//nav_priv_wbx_switch

var festTabellaJson = {};
var constant_F="F", constant_S= "S", constant_N="N",
	constant_Sicav="Sicav", constant_Fondo="Fondo", constant_FondoPIR="Fondo PIR", constant_Unico_acquisto_PIC="Unico acquisto (PIC)"
	cod_soc_Fidelity_7002="7002"	
		;

var colonneTab =	[

	{
		field   : 'selezione',	//name=btSelectItem
		title   : '',
		'radio'	: "true"
	}
	,{
		field : 'nome',
		sortName: 'descrizione',
		title : 'Nome',
		sortable : true,
		order : 'asc'
	},
	{
		field : 'fesRating',
		title : 'Rating',
		sortable : true,
		'class'	: 'center'
	},
	{
		field : 'assogestioni',
		title : 'Assogestioni',
		sortable : true,
		'class'	: 'center'
	},
	{
		field : 'rendimento1a',
		title : 'Rend. 1A%',
		sortable : true,
		'class'	: 'center'
	},
	{
		field : 'nav',
		title : 'NAV',
		sortable : true,
		'class'	: 'center'
	},
	{
		field : 'divisa',
		title : 'VAL',
		sortable : true,
		'class'	: 'center'
	}
	];

//chiamata da openFundSearch() nel invest_switch.js
function initializzaRicerca(){
	$("#modalFundSelect").addClass("loading");
	
	$("#filterSwitch .btn").off("click");	//se no, ogni volta che apre modal, aggiunge click
	getFunds(true);
	
}


function getFunds(createFilter){
	$("#tbFunds").addClass("loading");
	
	var isinSel = $("#spselCTAinput").val();
	var fondoSel = Finance.fundData.fondi[isinSel];
	
	if(createFilter){
		$("#nomeisin,#macroCatVal,#codRatingVal,#fesRendimentoVal,#dividendiVal").val("");
	}
	
	var elencoFilterName = [];
	
	var dataToPost = {
					codice						:	fondoSel.codiceTitolo,			//codInt
					valutaRif					:	fondoSel.tipodivisa,
					codAzione					:	fondoSel.codazionefondo,
					codSocieta					:	fondoSel.codicesocietagestione,
					
					descrizione					: 	$("#nomeisin").val(),
					macroCat					: 	$("#macroCatVal").val(),
					codRating					: 	$("#codRatingVal").val(),
					fesRendimento				: 	$("#fesRendimentoVal").val(),
					dividendi					: 	$("#dividendiVal").val()
					
					,controValoreFondoOrigine 	: 	fondoSel.dettagli[idxDettaglioFondo].controvalore		//MIFID2 - 2/4
					,scontoFondoOrigine 		: 	fondoSel.dettagli[idxDettaglioFondo].sconto
					,depositoSelezionato		: 	$("#deposito").val()
		//			,codiceFondo				: 		//TODO codiceComparto
					};

	
	
	$.ajax({
		url:  wrp_script_direct + struts2NamespaceVal + "/FesTabellaSwitchJson.action" + "?cf=" + Math.random(),
		dataType: "json",
		type: "POST",
		data: dataToPost,
		success: function(data)
		{
			if(data.esito != "OK"){
				
			}
			else{
				festTabellaJson = data;
				
				if(createFilter){
					var keys = Object.keys(fesConf).sort();		//["codRating", "dividendi", "fesRendimento", "macroCat"]
					for (var idx=0; idx<keys.length; idx++){
						var filterName = keys[idx];
						getFormFilters(filterName);
						elencoFilterName[elencoFilterName.length] = filterName;
					}
				}
				
				
				// Apre e chiude i filtri
				$("#filterSwitch .btn").click(function() {
					$("#filterSwitch .btn, #filterFormFilters").toggle();

				});
				
				// Inizializzazione autocomplete della modale
				ricercaNomeIsinAuto();
				
				//popola Elenco Fondo Destinazione
				popolaElencoFondoDest();
				
				aggiornaConteFiltri();
//				$("#tbFunds input[name=btSelectItem]").click(fundRadioSel);
				
				// Click sul pulsante "scegli" nella modale
				$("#fundSelectBtn").click(function(){
						if(!$(this).hasClass("btn-default")){
							if( constant_S == datiSelect.fundDest.reinvestimento){
								verificaDatiCedola();
							}
							else{
								fundSelected();
							}
						}
				});
				
				
			}
		}
		,error:function(data)
		{
			//show error
		}
		,complete: function(){
			if(createFilter){
				$.each(elencoFilterName, function(idx, filterName){
					$("#"+filterName+"Sel").spSel(btnFtEnable);
				});
				$("#filterFormFilters").find(".spsel").click(closeOtherFilters);	//chiudere altri select ma anche aggiorna al base di altri filri selezionati
			}
			
			$("#tbFunds").removeClass("loading");
			$("#modalFundSelect").removeClass("loading");
		}
	});
}


function getFormFilters(filterName){	//["codRating", "dividendi", "fesRendimento", "macroCat"]
		
			var isRendimento = false, isRating=false;
			if("fesRendimento" == filterName){
				isRendimento = true;
			}
			else if("codRating" == filterName){
				isRating = true;
			}
			
			$("#"+filterName+"Sel").empty();
			$("<input>", {"type":"hidden", "id":filterName+"Val", "name":filterName+"Val"}).appendTo("#"+filterName+"Sel");
			$("<div>", {"class":"spsel-options", "id":filterName+"Ops"}).appendTo("#"+filterName+"Sel");
			var keyObj =  Object.keys(fesConf[filterName]);
			for(var idxVal=0; idxVal< keyObj.length; idxVal++){
				var filterNameKey = keyObj[idxVal];
				
				var tempVal = "", opVal="";
				if(isRendimento){
					tempVal = fesConf[filterName][filterNameKey].periodo; //.split(' ').join('')
					opVal = filterNameKey;
				}
				else{
					tempVal = fesConf[filterName][filterNameKey].nome;
					opVal = filterNameKey;	//da verificare come usare valore per filtri
					
					if(isRating){
						//TODO add img 
					}
				}
				$("<div>", {"class":"spsel-option", "id":filterName+"_"+idxVal, "data-value":opVal})
					.appendTo("#"+filterName+"Ops");
						
				if(isRendimento){
					$("<a>",{"class":"spsel-option-el"})
						.html(tempVal)
						.appendTo("#"+ filterName +"_"+idxVal);
//Slider
//					$("#"+ filterName +"_"+idxVal).find(".spsel-option-el").click(function(){showSlider(fesConf, filterName,filterNameKey);});
				}
				else{
					$("<label>",{"id":"label"+filterName+"_"+idxVal})
						.appendTo("#"+filterName+"_"+idxVal);
					var totCnt = 0;
					if(undefined!= festTabellaJson.statistiche[filterName][filterNameKey]){
						totCnt = festTabellaJson.statistiche[filterName][filterNameKey];
					}
					var opDisabled = (totCnt == 0) ? true : false;
					$("<input>",{"type":"checkbox", "value": opVal, "name": filterName+"Cb" , "id":"label"+filterName+"_"+idxVal, "disabled": opDisabled})
						.appendTo("#label"+ filterName + "_"+idxVal);
					$("<span>",{"class":"spsel-option-el"})
						.html(tempVal)
						.appendTo("#label"+ filterName +"_"+idxVal);
					$("<span>",{"class":"spse-countdetail"})
						.html("(" + totCnt + ")")
						.appendTo("#label"+ filterName +"_"+idxVal);
				}
				
			}
			
			//Slider
//			if(isRendimento){
//				addSlider($("#"+ filterName +"Ops").find(".spsel-options"), filterName+"Val");
//			}
			
//			$("#"+filterName+"Sel").spSel(btnFtEnable);
//			$("#filterFormFilters").find(".spsel").click(closeOtherFilters);	//chiudere altri select ma anche aggiorna al base di altri filri selezionati

}

function closeOtherFilters(){
    if($("#filterFormFilters").find(".spsel").length){
		var ele = $("#filterFormFilters").find(".spsel");
		var eleOpened = this;
        $.each(ele, function(index, value){
			if(eleOpened != value){
				$(value).removeClass("opened");
			}
		});
        aggiornaConteFiltri();
	}
}

function aggiornaConteFiltri(){
	var isRendimento = false;
	
	var keys = Object.keys(fesConf).sort();		//["codRating", "dividendi", "fesRendimento", "macroCat"]
	for (var idx=0; idx<keys.length; idx++){
		var filterName = keys[idx];
		if("fesRendimento" == filterName){
			isRendimento = true;
		}
		if(!isRendimento){
			var keyObj =  Object.keys(fesConf[filterName]);
			for(var idxVal=0; idxVal< keyObj.length; idxVal++){
				var filterNameKey = keyObj[idxVal];
				
				var totCnt = 0;
				if(undefined!= festTabellaJson.statistiche[filterName][filterNameKey]){
					totCnt = festTabellaJson.statistiche[filterName][filterNameKey];
				}
				var opDisabled = (totCnt == 0) ? true : false;
				$("#"+"label"+filterName+"_"+idxVal).attr("disabled",opDisabled);
				$("#"+"label"+filterName+"_"+idxVal).find(".spse-countdetail").text("(" + totCnt + ")")
			}
		}
		isRendimento = false;
	}
}

//priv_fes_ricerca_resp.js - Slider
function addSlider(fesSliderSelect, fesCurrentField){	//fesConf, fesCurrentField, filterNameKey
	var fesSliderConsole = $("<div>").addClass("sliderConsole");
//	fesSliderSelect = this;
////	fesSliderSelect = $("<select>").addClass("form-control");
////	// Popola la select
////	fesSliderSelect.append($("<option>").attr({"value":""}).html("-- seleziona l'arco temporale --"));
////	$.each(fesConf[fesCurrentField], function(key,v){
////			fesSliderSelect.append($("<option>").attr({"value":key.toString()}).html(v.periodo));
////	});
////	fesSliderSelect.on("change",function()		{
//			sliderOpt = fesConf[fesCurrentField][filterNameKey];	//$(this).find("option:selected").val().split("|").splice(0,5).join("|")
//			if (sliderOpt)
//			{
//				// Inizializza i campetti con i valori per lo slider
//				var valMin = (Number(sliderOpt.defaultmin)<Number(sliderOpt.min)) ? sliderOpt.defaultmin :sliderOpt.min;
//				var valMax = (Number(sliderOpt.defaultmax)>Number(sliderOpt.max)) ? sliderOpt.defaultmax :sliderOpt.max;
//				fesSliderDal.val(Number(sliderOpt.defaultmin));	
//				fesSliderAl.val(Number(sliderOpt.defaultmax));
//				
//				
//				// Inizializza/ricrea lo slider	
//				fesSlider.slider("option",
//				{
//					range: true,
//					min: Number(valMin),
//					max: Number(valMax),
//					step: 0.01,
//					values: [sliderOpt.defaultmin, sliderOpt.defaultmax]
//				});
//				
//				// Aggiorna tutte le milestones 
//				var mileStep = (Number(valMax) - Number(valMin))/6;
//				$.each($(".slider-milestones .number"),function(i,v)
//					{
//						$(v).html( Math.round((Number(valMin) + (i * mileStep)) * 100)/100 + "%");
//					}
//				);
//
//				fesSliderCont.show();
//				fesSliderForm.show();
//			}
//			else
//			{
//				fesSliderForm.hide();
//				fesSliderCont.hide();
//			}
////		});
	
	fesInputFixnum = function()
	{
		var fieldVal = $(this).val().split("");
		cleanedVal = $.grep (fieldVal, function(n, i){
			var testText = "0123456789.-";
			return (testText.indexOf(n)>=0);
		});
		$(this).val(cleanedVal.join("").split(".",2).join("."));
	}
	
	fesSliderDal=  $("<input>").addClass("form-control").attr({"type":"text","maxlength":6}).on("keyup",fesInputFixnum);
	fesSliderAl = $("<input>").addClass("form-control").attr({"type":"text","maxlength":6}).on("keyup",fesInputFixnum);
	fesSliderRefresh = $("<a>").addClass("refresh icon icon-update");
	fesSliderRefresh.click(function(){
		// Controlli incrociati
		if (Number(fesSliderDal.val()) > Number(sliderOpt.max)) fesSliderDal.val(sliderOpt.max);
		if (Number(fesSliderDal.val()) < Number(sliderOpt.min)) fesSliderDal.val(sliderOpt.min);
		if (Number(fesSliderAl.val()) > Number(sliderOpt.max)) fesSliderAl.val(sliderOpt.max);
		if (Number(fesSliderAl.val()) < Number(sliderOpt.min)) fesSliderAl.val(sliderOpt.min);
		if (Number(fesSliderDal.val()) > Number(fesSliderAl.val())) fesSliderDal.val(fesSliderAl.val());
		if (Number(fesSliderAl.val()) < Number(fesSliderDal.val())) fesSliderAl.val(fesSliderDal.val());
		fesSliderDal.val(Math.round(Number(fesSliderDal.val())*100)/100);
		fesSliderAl.val(Math.round(Number(fesSliderAl.val())*100)/100);

		// Refresh dei dati sullo slider
		fesSlider.slider("option",
				{
					values: [ Number(fesSliderDal.val()),  Number(fesSliderAl.val())]
				});
	});
	var fesSliderForm = $("<div>").addClass("sliderConsole sliderForm form-group").hide().append(
			
			$("<div>").addClass("row").append(

				$("<div>").addClass("col-xs-12").append(
					$("<label>").addClass("control-label").html("Rendimento"),	//fesSelectTitle
					$("<div>").addClass("row").append(
						$("<div>").addClass("col-sm-5 col-xs-12").append(
							$("<div>").addClass("form-inline").append(
								$("<div>").addClass("input-group").append(
									 $("<div>").addClass("input-group-addon first").html("Dal"),
				     				 fesSliderDal.addClass("form-control"),
				     				 $("<div>").addClass("input-group-addon").html("%")
								)
							)
						),
						$("<div>").addClass("col-sm-5 col-xs-10").append(
							$("<div>").addClass("form-inline").append(
								$("<div>").addClass("input-group").append(
									 $("<div>").addClass("input-group-addon first").html("Al"),
				     				 fesSliderAl.addClass("form-control"),
				     				 $("<div>").addClass("input-group-addon").html("%")
									)
								)
							),
						$("<div>").addClass("col-xs-2").append(fesSliderRefresh)
					)
				)
			)
		
	);
//	fesSliderConsole.append(
//		$("<div>").addClass("form-group").append($("<div>").addClass("row").append($("<div>").addClass("col-xs-12").append($("<label>").addClass("control-label").html("Arco temporale"),
//		fesSliderSelect))),
//		fesSliderForm
//	);
	fesSliderSelect.append(fesSliderForm);
	
	var fesSlider = $("<div>");
	/*
	var fesSliderMilestones = $("<div>").addClass("fesSliderMilestones");
	for (x=0;x<7;x++)
	{
		fesSliderMilestones.append($("<span>").addClass("mile").append($("<span>").addClass("stone"),$("<span>").addClass("number")))
	}
	
	*/

	var fesSliderCont = $("<div>").addClass("fesSliderCont").hide().append($("<div>").addClass("sliderRange").append(fesSlider));
	fesSelContForm = $("<form>").attr("autocomplete","off");
	fesSelContForm.addClass("formGenerico").append(fesSliderConsole,fesSliderCont);
	fesSlider.sliderRange({milestones:7,
		slide: function( event, ui ) {
			fesSliderDal.val(ui.values[0]);
			fesSliderAl.val(ui.values[1]);
			}
		});
	
	// Eventualmente precarica i dati se il campo &egrave; inizializzato
	var fesFieldVal = $("#" + fesCurrentField).val();
	if (fesFieldVal.length)
	{
		// Inizializza la select
		fesSliderSelect.val(fesFieldVal.split("|").splice(0,5).join("|"));
		fesSliderSelect.trigger("change");
		var valArray = fesFieldVal.split("|");
		fesSliderDal.val([3]);
		fesSliderAl.val(fesFieldVal.split("|")[4]);
		fesSliderRefresh.trigger("click");
	}	
}

function showSlider(fesConf,fesCurrentField,filterNameKey){
	sliderOpt = fesConf[fesCurrentField][filterNameKey];	//$(this).find("option:selected").val().split("|").splice(0,5).join("|")
	if (sliderOpt)
	{
		// Inizializza i campetti con i valori per lo slider
		var valMin = (Number(sliderOpt.defaultmin)<Number(sliderOpt.min)) ? sliderOpt.defaultmin :sliderOpt.min;
		var valMax = (Number(sliderOpt.defaultmax)>Number(sliderOpt.max)) ? sliderOpt.defaultmax :sliderOpt.max;
		fesSliderDal.val(Number(sliderOpt.defaultmin));	
		fesSliderAl.val(Number(sliderOpt.defaultmax));
		
		
		// Inizializza/ricrea lo slider	
		fesSlider.slider("option",
		{
			range: true,
			min: Number(valMin),
			max: Number(valMax),
			step: 0.01,
			values: [sliderOpt.defaultmin, sliderOpt.defaultmax]
		});
		
		// Aggiorna tutte le milestones 
		var mileStep = (Number(valMax) - Number(valMin))/6;
		$.each($(".slider-milestones .number"),function(i,v)
			{
				$(v).html( Math.round((Number(valMin) + (i * mileStep)) * 100)/100 + "%");
			}
		);

		fesSliderCont.show();
		fesSliderForm.show();
	}
	else
	{
		fesSliderForm.hide();
		fesSliderCont.hide();
	}
}

//Funzione di abilitazione/disabilitazione del pulsante
var btnFtEnable = function () {
	$("#btnLoadFundTable, #btnResetFundTable").removeClass("btn-default").addClass("btn-primary");
	bindEvent("#btnLoadFundTable","click");	//TODO - se gia resistrato, non fare di nuovo
	bindEvent("#btnResetFundTable","click");
	
	$("#btnLoadFundTable").click(function(){
		getFunds(false);
	});
	
	$("#btnResetFundTable").click(function(){
		getFunds(true);

		if($("#filterFormFilters").find(".spsel").length){ 
			$("#filterFormFilters").find(".spsel").addClass("nosel");
		}

		$("#btnLoadFundTable, #btnResetFundTable").removeClass("btn-primary").addClass("btn-default");
		unbindEvent("#btnLoadFundTable","click");
		unbindEvent("#btnResetFundTable","click");	
	});
	
	if(""!=$("#macroCatVal").val() || ""!=$("#codRatingVal").val() || ""!=$("#fesRendimentoVal").val() || ""!=$("#dividendiVal").val()){
	  getFunds(false);	//verifica se aggiorna altri filtri al base di qc scelta di filtro
	}

}

var tendinaNomeIsin = function(ul, item) {
    "use strict";
	    var resultItem,
	        x = new RegExp('\\b' + $.ui.autocomplete.escapeRegex(this.term), 'ig');
		
		resultItem = item.label.replace(x, function(Match) {
		    return '<strong>' + Match + '</strong>';
		});
		
		return $("<li></li>").data("item.autocomplete", item).append("<a class='autocomplete_link'>" + resultItem + "</a>").appendTo(ul.css("z-index", getNextHighestZindex()));
}

function ricercaNomeIsinAuto(){
	var cacheAC = [];
	$("#nomeisin")
		.keydown(function (event) {
		            if (event.which === 13) {
		                event.preventDefault();
		            }})
		.autoComplete([], {
		        "minLength": 3,
		        "filter": function(request, response) {
		            var term = request.term;
		            if (term in cacheAC) {
		                response(cacheAC[term]);
		                return;
		            }
//		            $.getJSON(wrp_script_direct + struts2NamespaceVal + "/FdaAutoCom.action", request, function(res) {
		            	var data = festTabellaJson.data;
		            	if (data.length) {
		            		data = $.map(data, function(item) {
		            			if( item.descrizione.toLowerCase().indexOf(term.toLowerCase()) >=0 ||
		            				item.isin.toLowerCase().indexOf(term.toLowerCase()) >=0 
		            			){
		            				return { "label": item.nome, "value": item.nome };	//item.isin
		            			}
		     
                                
                            });
		            	}
		                cacheAC[term] = data;
		                response(data);
//		            });
//		            $.getJSON(wrp_script_direct + struts2NamespaceVal + "/FdaAutoCom.action", request, function(res) {
//		            	var data = $.parseJSON(res.data);
//		            	if (data.length) {
//		            		data = $.map(data, function(item) {
//                                return { "label": item.nome, "value": item.nome };	//item.isin
//                            });
//		            	}
//		                cacheAC[term] = data;
//		                response(data);
//		            });
		        },
		        "selectable": false,
		        "clearable": true,
		        "renderItem": tendinaNomeIsin
    }).on("keyup",btnFtEnable);
}

var fundRadioSel = function(row){
	// Prende i parametri dal radio selezionato e li mette nel bottone
	$("#fundSelectBtn")
//		.attr({"data-fundname":$(this).attr("data-fundname"),"data-isin":$(this).attr("data-isin")})
		.removeClass("btn-default").addClass("btn-primary");
	datiSelect.fundDest = row;
	
	//TODO - scroll to bottom
}


function popolaElencoFondoDest(){
	$("#tbFunds").addClass("loading");
	var currCode = $("#spselCTAinput").val();
	swDataSwitchAll = festTabellaJson.data;
	swDataSwitch = [];
	if (typeof swDataSwitchAll != "undefined") {
		$.each(swDataSwitchAll,function(i,v){
			if(v.isin == currCode)
				return;
			v.descrizione = v.nome;
//			var pir='';
			if (v.pir!=undefined && v.pir == "S"){
				v.nome = "<span class=\"labelpir\">PIR</span>" + v.nome;
//				pir = v.pir;
			}
//			v.selezione = "<a href=\"javascript:;\" onclick=\"swGetFundToSwitch("+v.codiceInterno+")\">seleziona</a>";
//			v.selezione = ""; //TODO da verificare se esiste opzione in bootstrap
			v.rendimento1a=v.rendimento1a.replace(".",",");
			v.nav=v.nav.replace(".",",");
			v.fesRating = "<div class=\"rating\">";
//			v.indexAss = i;
			// Rating
			for (x=1;x<=5;x++) v.fesRating += "<i class=\"icon icon-corona"+ ((x<=v.rating)? " icon-corona-on" : "") +"\"></i>";
			v.fesRating += "</div>";
			
			swDataSwitch.push(v);
		});
	}
	
	$('#tbFunds').bootstrapTable({
        data: {},
        sortable: true,
        sortOrder: "asc",
        sortName: "nome",
        pagination : "true",
//        paginationVAlign : "bottom",
        pageSize: 15,
        pageList: [15, 30, 60, 'tutti'],
		rowStyle: function(row, index) {
			if(index % 2 == 0)
			{
				return {
					classes: 'dispari'
				}
			}
			else {
				return {
					classes: 'pari'
				}
			}
		   }
        ,columns			: colonneTab
    });
	$('#tbFunds').bootstrapTable('load', swDataSwitch); 
	
	$('#tbFunds').on('check.bs.table', function (e, row) {
		fundRadioSel(row);
	});
	
	
	$("#tbFunds").removeClass("loading");
}

//Funzione di selezione del fondo di destinazione
var fundSelected = function(){
	
	// Chiude la modale
	$("#modalFundSelect").modal("hide");
	
	$("#fondoDest").removeClass("nosel").addClass("spsel-hasicon");
	$("#fondoDest .spsel-option.spsel-selected").empty();
	$("<a>", {"class":"spsel-addel btn-icon", "id":"a_div_fund_dest"+0, "data-isin": datiSelect.fundDest.isin})
		.html("<i class='icon icon-info'></i>")
		.appendTo("#fondoDest .spsel-option.spsel-selected");
	
	$("<a>", {"class":"spsel-option-el", "id":"aa_div_fund_dest"+0})
		.html(datiSelect.fundDest.nome + " (ISIN: " + datiSelect.fundDest.isin + " )")
		.appendTo("#fondoDest .spsel-option.spsel-selected");
	
	//Modal di scheda fondo
	$("#modalFondo").modal("hide");
	$("#fondoDest .spsel-addel.btn-icon").click(function(e){
		e.stopPropagation();
		fesFondoShow({"codiceIsin":$(this).attr("data-isin"), "showButtonContainer":false});	//TODO - change /investimento a /investywb
		$("#modalFondo").modal("show");
	});
	
	$("#fondoDest .spsel-option-el").click(openFundSearch);
	
	var tipoStrumento = constant_Sicav;
	if(constant_F == datiSelect.fundDest.fondosicav){
		tipoStrumento = constant_Fondo;
	}
	
	$("#idDestTipo")		.text(tipoStrumento);
	$("#idDestSocGest")		.text(datiSelect.fundDest.descSocieta);
	$("#idDestCatAssog")	.text(datiSelect.fundDest.assogestioni);
	$("#idDestModInv")		.text(constant_Unico_acquisto_PIC);
	$("#idDestDataNav")		.text(datiSelect.fundDest.dataPrezzoQuota);
	$("#idDestNavDivisa")	.text(datiSelect.fundDest.nav 	  + " " + datiSelect.fundDest.divisa);
	$("#idDestMinPrimSottDivisa").text(datiSelect.fundDest.isotmin + " " + datiSelect.fundDest.divisa);
	$("#idDestMinSottSucDivisa") .text(datiSelect.fundDest.isotsuc + " " + datiSelect.fundDest.divisa);
	$("#idDestSpeseIng")	.text(datiSelect.fundDest.ingresso);
	$("#idDestSpeseGest")	.text(datiSelect.fundDest.gestione);
	$("#idDestSpeseUsc")	.text(datiSelect.fundDest.uscita);
	$("#idDestSpeseDirFis")	.text(datiSelect.fundDest.swicth);
	$("#dirFissTooltip")	.attr("data-title", dirFissTooltipVal);
	
	$("#coordinatePagamentoCedola").val("");							//reset flag se era settato prima
	$("#codiceIsinSwitch")		.val(datiSelect.fundDest.isin);
	$("#codiceTitoloSwitch")	.val(datiSelect.fundDest.codiceInterno);
	$("#codiceFondoSwitch")		.val(datiSelect.fundDest.codicecomparto);
	$("#dataNAVSwitch")			.val(datiSelect.fundDest.dataPrezzoQuota);		
	$("#descrizioneFondoSwitch").val(datiSelect.fundDest.nome);
	$("#divisaSwitch")			.val(datiSelect.fundDest.divisa);		
	$("#flagReinv")				.val("");								//reset flag se era settato prima
	$("#mezzoPagamentoCedola")	.val("");								//reset flag se era settato prima
	$("#NAVSwitch")				.val(datiSelect.fundDest.nav);		
	$("#percScontoCom")			.val(datiSelect.fundDest.scontopercom);
	
	//riepilogo
	$("#catAssogSwitch")		.val(datiSelect.fundDest.assogestioni);
	$("#descrSocietaGestione")	.val(datiSelect.fundDest.descSocieta);
	$("#commIngressoSwitch")	.val(datiSelect.fundDest.ingresso);
	$("#commUscitaSwitch")		.val(datiSelect.fundDest.uscita);
	$("#commGestioneSwitch")	.val(datiSelect.fundDest.gestione);
	$("#dirittiFissiSwitch")	.val(datiSelect.fundDest.swicth);
//	$("#dirFissiDividendoSwitch").val(datiSelect.fundDest.swicth); //TODO ?
	
	
	$("#cedolaFondoDest").hide();
	if(undefined != datiSelect.fundDest.datiCedola){
		$("#noObbligoCedola,.socGestioneFidelity").hide();
		$("#flagReinvSi,#flagReinvNo").show();
		
		if(constant_S == datiSelect.fundDest.reinvestimento){
			
			$('#noObbligoCedola').show();
			$("#flagReinvSi,#flagReinvNo").prop('checked', false);
			$('#flagReinvSi,#flagReinvNo').removeAttr('disabled');
			
			if(datiSelect.fundDest.datiCedola.resFlagReinvestimento =="") { 	//&& constant_N == datiSelect.fundDest.obbligoCedola
				if(constant_S == datiSelect.fundDest.obbligoCedola){	//reinv in cc
					$("#flagReinvSi,#flagReinvNo").attr('disabled', 'disabled');
					$("#flagReinvNo").prop('checked', true);
					$("#flagReinvSi").prop('checked', false);
					$("#flagReinvNo").trigger("click");
				}
				
			} 
//			else if(datiSelect.fundDest.datiCedola.resFlagReinvestimento=="" && constant_S == datiSelect.fundDest.obbligoCedola) {
//				$("#noObbligoCedola").show();
//				$("#noObbligoCedola").find("div")[0].style.display="none";
//				$("input[name=flagReinvestimento]")[1].checked=true;
//			} 
			else if(constant_S == datiSelect.fundDest.datiCedola.resFlagReinvestimento) {
				$("#flagReinvSi,#flagReinvNo").attr('disabled', 'disabled');
				$("#flagReinvNo").prop('checked', false);
				$("#flagReinvSi").prop('checked', true);
				$("#flagReinvSi").trigger("click");
			} 
			else if(constant_N == datiSelect.fundDest.datiCedola.resFlagReinvestimento) {
				$("#flagReinvSi,#flagReinvNo").attr('disabled', 'disabled');
				$("#flagReinvNo").prop('checked', true);
				$("#flagReinvSi").prop('checked', false);
				$("#flagReinvNo").trigger("click");
			}

			$("#coordinatePagamentoCedola")	.val(datiSelect.fundDest.datiCedola.reqCordPagCedola);
			$("#mezzoPagamentoCedola")		.val(datiSelect.fundDest.datiCedola.reqMezPagCedola);
			
			$("#idDestPeriodoReInv")		.text(datiSelect.fundDest.periodoCedola);
			$("#idDestDirFisReInv")			.text(datiSelect.fundDest.dirittiFissiCedola);
			$("#dirittiFissiDividendoSwitch").val(datiSelect.fundDest.dirittiFissiCedola); 
			$("#idDestDatiReInv").show();
		}
		if(cod_soc_Fidelity_7002 == datiSelect.fundDest.codicesocieta){
			$(".socGestioneFidelity").show();
		}
		
		$('input[name=flagReinvestimento]').click(function() {
			$("#flagReinv").val($(this).val());
			resetHasErrors($("#noObbligoCedola").parent());
		});
		
		$("#cedolaFondoDest").show();
	}
	resetHasErrors($("#fondoDestErr").parent());
	$("#formFondoDest").show();
	
}

//TODO - verifica Cedola
function verificaDatiCedola(){
	$.ajax({ 
		url : wrp_script_direct + struts2NamespaceVal + "/VerificaDatiCedola.action",
		data:{
//			reinvestimento	 : datiSelect.fundDest.reinvestimento,
			codiceFondoSwitch: datiSelect.fundDest.codicecomparto,
			deposito		 : datiSelect.deposito
			
		},
		dataType : "json",
		success  : function(data) {
			if(data.datiCedola.esito == "KO"){
				//TODO - show errore cedola
			}
			datiSelect.fundDest.datiCedola=data.datiCedola;
			fundSelected();
		}
		,complete: function(){
			
		}
	});
}
