/* PREVENTIVATORE MUTUI */
/* istanzia l'oggetto contenente i dati modificati dall'utente */
var mPrevData,
mAss = "CAT";

/* Mostra l'html del calcolatore */
function mCalcShow()
{
	mCont = $("#mCalcWrapper");
	$.ajax({
		url: "/common/fe/html/priv_calcolatore_mutui.html?rand="+Math.random(),
		dataType: "html",
		success: function(data){
			mCont.html(data);
			mCalcInit();
			}
	});
}

function startPulseCalc()
{
	if (typeof ispulsing == "undefined") ispulsing = false;
	
	if (!ispulsing)
	{
		ispulsing = true;
		pCf = function()
			{
				$("#mutuoButton").css({"opacity": "0.3"}).animate({"opacity": "1"},700);
				pfTO = setTimeout(pCf,800);
			}
		pCf();
	}
	
}	
function stopPulseCalc()
{
	if (typeof pfTO == 'number') 
	{	
		clearTimeout(pfTO);
		ispulsing = false;
		$("#mutuoButton").css({"opacity": "1"})
	}
}

showResults = function () {
	// Blocca il pulsante
	$("#mutuoButton").addClass("btn-disabled");
	// Mostra i risultati 
	$("#mResults").show();
}

hideResults = function() {
 	// Sblocca il pulsante
	$("#mutuoButton").removeClass("btn-disabled");
	// Nascondi i risultati
	$("#mResults").hide();
}

/* Rimuove gli errori */
function mResetErrors () {
	var errors = new Array();
	setHasErrors(errors, "#formmutuo");
}

/* Mostra l'errore in stile flash */
function mShowError(field, errormessage)
{
	var field = $(field);
	var errors = new Array();
	errors.push({ field: field, text: errormessage });
	setHasErrors(errors, "#formmutuo");
	field.on("click keypress", mResetErrors);

}

/* Funzioni generiche */
function formatMigliaia(num)
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

function cleanInt(valore)
{
	var val = $.grep($(valore.split("")),function(n){
		var testStr = "01234567890";
		if (testStr.indexOf(n)>=0) return n
	});
	return Number(val.join(""));
}

// Controlli incrociati
function mCheckVal(field,fv)
{
	field = $(field);
	fv = (fv) ? fv : cleanInt(field.val());
	noerror = true;
	maxVal = (field.attr("id") == "mImporto") ? mMutuoMax : 9999999;
	minVal = (field.attr("id") == "mImporto") ? mMutuoMin : Math.ceil(mMutuoMin / mLtv * 100);
	if (fv>maxVal)
		{
			fv = maxVal;
			field.val(formatMigliaia(maxVal));
			mShowError(field,"Non &egrave; possibile inserire valori superiori a "+ formatMigliaia(maxVal) + " &euro;");
			noerror = false;
		}

	if (fv<minVal)
		{
			fv = minVal;
			field.val(formatMigliaia(minVal));
			mShowError(field,"Non &egrave; possibile inserire valori inferiori a "+ formatMigliaia(minVal) + " &euro;");
			noerror = false;
		}
	
	
	mVal = cleanInt(mForm.find("input[name=valoreimmobile]").val());
	mImp = cleanInt(mForm.find("input[name=importomutuo]").val());
	//Controlli incrociati sul valore dell'immobile
	if(field.attr("name")=="valoreimmobile")
	{
		//Controllo discesa valore immobile
		if (fv<((mImp/mLtv) * 100))
		{
			mShowError(mForm.find("input[name=importomutuo]"),"L'importo non pu&ograve; superare il " + mLtv + "% del valore dell'immobile.");
			mForm.find("input[name=valoreimmobile]").val(formatMigliaia(Math.ceil((mImp/mLtv) * 100)));
			noerror = false;
		}
		// Limitazione a 2 Milioni di Euro esclusiva per YouWeb/Acquisto + CATTOLICA
		if (feBank === "youweb" && fv>2000000 && mFinalita === "Acquisto" && mAss === "CAT") {
			field.val(2000000);
			mShowError(mForm.find("input[name=valoreimmobile]"),"La polizza casa utilizzata per la simulazione online prevede un valore di ricostruzione massimo pari a 2.000.000&euro;. Verifica in filiale le opzioni di assicurazione del tuo immobile.");
			noerror = false;
		}
	}
	else
	{
		//Controllo salita importo mutuo
		if (fv>((mVal/100) * mLtv))
		{
			mShowError(mForm.find("input[name=importomutuo]"),"L'importo non pu&ograve; superare il " + mLtv + "% del valore dell'immobile.");
			mForm.find("input[name=importomutuo]").val(formatMigliaia((mVal/100) * mLtv));
			noerror = false;
		}
	}
	return noerror;
}

function mCalcInit()
{
	
	//mUrl = (location.href.indexOf("libreriewebank") > 0 )? "/swf/xml/calc_mutui_detail.xml" : cgi_script + "/wb/simulazioneMutui.do";
	
	mEndUrl = mPagetopost;
	mForm = mCont.find("form").eq(0);
	
	
	// Valori di default nei vari campi
	$("#mFin").val(mFinalita);

	// Resetta la finalita' e attiva il tab relativo
	$("#mCalcWrapper .innerTab li").removeClass("on");
	$("#m"+mFinalita).parents("li").addClass("on");
	// Se e' una surroga nasconde il radio prima/seconda casa
	if (mFinalita == "Surroga") {
		mForm.find("input[name=primacasa]").eq(0).attr("checked",true);
		mForm.find(".radiocont").hide();
	}
	
	mForm.find("input[value="+mPrimacasa+"]").eq(0).attr("checked","checked");
	$("#codiceMutuo").val(mCodice);
	if (mValoreimmobile != "") $("#mValore").val(formatMigliaia(mValoreimmobile));
	if (mImportomutuo != "") {
		$("#mImporto").val(formatMigliaia(mImportomutuo));
	}
	else
	{
		$("#mImporto").val("120.000");
	}
	
	mDurata = (mDurata != "" && mDurata != null) ? parseFloat(mDurata) : 20;
	$("#mDur").append($("<option value=\""+mDurata+"\">"+mDurata+"</option>"));
	$("#mDur").val(mDurata);
	$("#assicurazioni").val(mAssicurazioni);
	
	// Controlli "in linea" sull'immissione dei dati
	mInp = mForm.find("input[type=text]");
	mInp.on("keyup",function(){this.value = cleanInt(this.value);
			hideResults();
			/*
			startPulseCalc()
			*/
		});
	mInp.on("focus",function(){this.value = cleanInt(this.value)});
	mInp.on("blur",function(){this.value = formatMigliaia(this.value);mCheckVal(this);});
	
	mForm.find(".radiocont label").click(
		hideResults
		/*
		startPulseCalc
		*/
		);
	
	// Funzione pulsanti + e - 
	// Incremento standard dei campi
	mInc = 5000;
	// Massima percentuale importo mutuo vs. valore immobile
	mForm.find(".plusmin").click(function(){
		hideResults();
		/*
		startPulseCalc();
		*/
		var bt = $(this);
		var f = mForm.find("input[name="+bt.attr("data-refered")+"]");
		fv = Math.floor(cleanInt(f.val())/mInc) * mInc;
		fv = (bt.hasClass("min"))? fv - mInc : fv + mInc;
		// Controllo a 0
		noerror = true;
		mResetErrors();
		if (mCheckVal(f,fv)) f.val(formatMigliaia(fv));
 	});
	
	
	mRes =  $("#mResults");
	mButton = $("#mutuoButton");
	mButton.click(function(){
		if(!$(this).hasClass("btn-disabled")) {mGetData(),mResetErrors()}
	});
	$("#mAcquisto").click(function(){
		mFinalita = "Acquisto";
		$("#mCalcWrapper .innerTab li").removeClass("on");
		mForm.find("input[name=primacasa]").eq(0).attr("checked",true);
		mForm.find(".radiocont").show();
		$(this).parents("li").addClass("on");
		$("#mFin").val("Acquisto");
		$("#codiceMutuo").val("");
		$("#assicurazioni").val("");
		$("#mOverlay").hide();
		mResetErrors();
		mCheckVal($("input[name=valoreimmobile]"));
		mGetData();
		});
	$("#mSurroga").click(function(){
		
		$("#mCalcWrapper .innerTab li").removeClass("on");
		mFinalita = "Surroga";
		mForm.find("input[name=primacasa]").eq(0).attr("checked",true);
		mForm.find(".radiocont").hide();
		$(this).parents("li").addClass("on");
		$("#mFin").val("Surroga");
		// Reset dei valori
		$("#mValore").val("200.000");
		$("#mImporto").val("120.000");
		$("#codiceMutuo").val("");
		$("#mOverlay").hide();
		$("#assicurazioni").val("");
		mResetErrors();
		mGetData();
	});
	/* Variabili grafiche */
	mGaugeMaxWidth = 430; 
	mGetData();
	
	// Funzione rendering assicurazioni
	appendAss = function(appnode, assArray)
	{

		$.each(assArray,function(i,assi){
			assBlock = $("<div>").addClass("assBlock");
			assInput = $("<a>").addClass("check").attr({"data-codice": assi.codPacchetto}).append($("<i>").addClass("icon icon-checkbox"));
			if (!assi.obbligatoria)
			{
				assInput.attr("href","javascript:;");
				if (assi.attiva) assInput.addClass("selected");
				assInput.click( function()
				{
					//Ceck input in maniera esclusiva
					$("#mOverlay").hide();
					if ($(this).hasClass("selected")) 
					{
						$(this).removeClass("selected");
					}
					else
					{
						// Rimuove da tutti gli elementi la classe e la mette solo su quello selezionato
						$(".assBlock a.check.selected:not(.default)").removeClass("selected");
						$(this).addClass("selected");
					}
					//Ricalcolo assicurazioni
					var assArray = new Array();
					$.each($(".assBlock a.check.selected"), function(index,value)
						{
							assArray.push($(value).attr("data-codice"));
						}
					);
					$("#assicurazioni").val(assArray.join("-"));
					mGetData();
				});
			}
			else
			{
				assInput.addClass("selected default");
			}
			assBlock.append(assInput,$("<label>").addClass("title").append(assi.nomeprodotto));
			assDetail.push(assi.descrizione);
			assBlock.append($("<a>").addClass("detail").attr({"codice":assDetail.length-1,"href":"javascript:;"}).append($("<i>").addClass("icon icon-info_fill")).click(mutuiAssDet));
			assBlock.append($("<span>").addClass("payoff").html(assi.payoff));
			appnode.append(assBlock);

		});

	}
	
	// Funzione layer dettaglio assicurazione
	mutuiAssDet = function()
	{
		if (typeof mOlAss == "undefined")
		{
			mAssOl = getModal({id:"mOlAss"});
		}
		mAssOl.find(".modal-body .col-xs-12").empty().html(assDetail[$(this).attr("codice")]);
		mAssOl.modal("show");
	};
}


// Invio e ricezione dei dati
function mGetData()
{
	// Blocca l'interfaccia
	$("#mOverlay").hide();
	isDetail = ($("#codiceMutuo").val().length > 0) ? true : false;
	$("#id_frase_introduttiva").toggle(!isDetail);
	mCont.removeClass("dettaglio").addClass("loading " +  ((isDetail)? "dettaglio":""));
	mDurata = $("#mDur").val();

	// Valorizza la variabile con i parametri della simulazione
	mPrevData = {
		finalita: mForm.find("input[name=finalita]").val(),
		primacasa: mForm.find("input[name=primacasa]:checked").attr("value"),
		valoreimmobile: cleanInt(mForm.find("input[name=valoreimmobile]").val()),
		importomutuo: cleanInt(mForm.find("input[name=importomutuo]").val()),
		durata: mDurata,
		codicemutuo	: mForm.find("input[name=codicemutuo]").val(),
		assicurazioni: mForm.find("input[name=assicurazioni]").val(),
		nome: (mCodice==="")? ("tutti i prodotti " + feBank).toUpperCase() : ""
	}
	
	// Effettua la chiamata ed agisce di conseguenza
	$.ajax({
		url: mUrl,
		method: "post",
		data: mPrevData,
		dataType: "json",
		success: function(data) {
			mCont.removeClass("loading");
			showResults();
			// stopPulseCalc();
			mRes.html("");
			mutui = data.mutui;
			assDetail = new Array();
			ratamax = 0;
			mSliderMin = 100;
			mSliderMax = 0;
			mLtv = 0;
			mMutuoMin = 1000000;
			mMutuoMax = 0;

			var erroreGenericoMsg = "";
			
			$.each(mutui,function(i,v){
				mutuo =v;
				
				// Modifica i parametri generali
				if (mutuo.duratamin<mSliderMin) mSliderMin = mutuo.duratamin;
				if (mutuo.duratamax>mSliderMax) mSliderMax = mutuo.duratamax;
				if (mutuo.mutuominimo<mMutuoMin) mMutuoMin = mutuo.mutuominimo;
				if (mutuo.mutuomassimo>mMutuoMax) mMutuoMax = mutuo.mutuomassimo;
				if (mutuo.ltv>mLtv) mLtv = mutuo.ltv;

				// Input errore generico 
				if (mutuo.messaggioGenerico =="errore generico") {
					erroreGenericoMsg = mutuo.messaggio;
				}
				
				//Assembla il nodo con i dettagli del mutuo (differenziando il dettaglio ed il comparativo)
				mNode = $("<div>").addClass("mData").append($("<h3>").addClass("title").html(mutuo.nome));
				if (mutuo.disponibile)
				{
				


					if (!isDetail)
					{
						var infoGeneraliLink = (feBank ==="webank") ? 
							$("<a>").addClass("btn-icon documenti").html("<i class=\"icon icon icon icon-file_pdf icon-documenti\"></i><span>Scheda prodotto e Informazioni Generali</span>").attr({"href": mutuo.link, "target": "_blank"})
							:
							$("<a>").addClass("btn-icon documenti").html("<i class=\"icon icon icon icon-file_pdf icon-documenti\"></i><span>Informazioni Generali</span>").attr({"href": mutuo.link, "target": "_blank"})

 						mNode.append(infoGeneraliLink);

					}

					/* Barre */
					var mGBlock = $("<div>").addClass("row");

					var mrata = mutuo.rata;
					if (mrata > ratamax) ratamax = mrata;


					mGauge = $("<div>").addClass("rata-value").append($("<span>").addClass("rata-text").html(((feBank==="youweb")? "<span class=\"smaller\">La tua rata: </span>" : "") + formatMigliaia(mutuo.rata.toString().split(".")[0]) + ","+ mutuo.rata.toString().split(".")[1]+"&nbsp;&euro;<span class=\"smaller\">&nbsp;al mese</span>"));
					mGauge.attr("w",mrata);

					var mRataProgress = $("<div>").addClass("rata-progress").append(		
							mGauge,
							$("<div>").addClass("rata-trail trail-bg")
						);


					/*
					<div class="rata-progress"><div class="rata-value" style="width: 100%;"><span class="rata-text">562,13 € al mese</span></div><div class="rata-trail trail-bg"></div></div>
					*/
					mGBlock.append($("<div>").addClass((!isDetail)?"col-sm-10 col-xs-12":"col-xs-12").append(mRataProgress));

					if (!isDetail)
					{
						
						mScegli = $("<a>").addClass("btn btn-primary").html("Scegli").attr({"href":"javascript:;", "type":"button", "codMutuo" : mutuo.codicemutuo})
								.click(function(){
								$("#codiceMutuo").val($(this).attr("codMutuo"));
							mGetData();
						});

						mGBlock.append($("<div>").addClass("col-sm-2 hidden-xs").append($("<div>").addClass("btn-align-right").append(mScegli)));
					}
					mNode.append(mGBlock);

					// Blocco tassi
					var tassiSwitch = $("<a>").addClass("tassi-switch").click(function(){
							$(this).parents(".tassi").toggleClass("opened");
							$(this).parents(".tassi").find(".testo-esteso").slideToggle();
						}).append($("<i>").addClass("icon icon-"+ ((feBank==="webank")? "f-":"") +"row_expand"), $("<i>").addClass("icon icon-"+ ((feBank==="webank")? "f-":"") +"row_contract"));
					var tassiTesto = $("<span>").addClass("tassi-testo");
					var tassiTestoBase = $("<span>").addClass("testo-basic").html("Indice: <span class=\"evidenziato\">"+mutuo.indice +"</span> - Spread: <span class=\"evidenziato\">"+mutuo.spread +"</span> - Tasso: <span class=\"evidenziato\">"+mutuo.tasso +"</span> - <strong>TAEG: <span class=\"evidenziato\">"+mutuo.taeg+"</span></strong>");
										var tassiTestoEsteso = $("<span>").addClass("testo-esteso").html(
						"Istruttoria:  "+ mutuo.istruttoria + " &euro; " +
						"- Perizia:  "+ mutuo.perizia + " &euro; " +
						"- Incasso rata: "+ mutuo.incassorata + " &euro; " +
						"- Polizza casa<span class=\"siYnoW\">*</span>:  "+ mutuo.polizza + " &euro; " + 
						((mutuo.polizzafacoltativa && mutuo.polizzafacoltativa.length>0)? "- Polizza facoltativa:  "+ mutuo.polizzafacoltativa + " &euro; " : "") +
						"- Imposta sostitutiva: "+ mutuo.imposta + " &euro; " + 						
						"- Costo totale del credito: "+ mutuo.costototcred + " &euro; " + 
						"- Importo totale dovuto dal Consumatore: "+ mutuo.imptotcons +" &euro;" +
						((feBank==="youweb")? "<br><span class=\"note\"><br>*<i>Per il calcolo del TAEG &egrave; stata utilizzata una delle polizze collocate dal Gruppo Banco BPM.</i></span>" : "")
					);
					
					// Fine blocco tassi 
					if (!isDetail) {
						mNode.append($("<div>").addClass("tassi").append(
								tassiSwitch, tassiTesto.append(tassiTestoBase,tassiTestoEsteso.hide())
							)
						)
					}
					else
					{
						mNode.append($("<div>").addClass("tassi detail").append(
								tassiTesto.append(tassiTestoBase,tassiTestoEsteso)
							)
						)
					}

					if (!isDetail) mNode.append(($("<div>").addClass("hidden-sm hidden-md hidden-lg hidden-xl").append($("<div>").addClass("btn-align-right").append(mScegli.clone(true)))));
					mNode.css("display","none");
					
					if (isDetail)
					{
						// Dettagli documenti ed assicurazioni
						mNodeDocUl = $("<ul>").addClass("documenti");
						mNodeDocUl.append($("<li>").append($("<a>").addClass("btn-icon").html("<i class='icon icon-file_pdf icon-documenti'></i><span><span class=\"siWnoY\">Scheda prodotto e </span>Informazioni Generali</span>").attr({"href": mutuo.link, "target": "_blank"})));
						mNodeDocUl.append($("<li>").append($("<a>").addClass("btn-icon").html("<i class='icon icon-file_pdf icon-documenti'></i><span>Piano di ammortamento</span>").attr({"href": mutuo.pianoammortamento, "target": "_blank"})));
						
						mNode.append(mNodeDocUl);
		
						// Discriminazione assicurazioni
						var assObb = [], assFac = [];

						$.each(mutuo.assicurazioni,function(i,v){
							var ass = v;
							if (ass.obbligatoria) {
								assObb.push(ass)
							}
							else
							{
								assFac.push(ass)
							}
						});

						// Assicurazioni
						mAss = $("<div>").addClass("assicurazioni");
						mAss.append($("<h4>").html("Assicurazione gi&agrave; compresa"));

						appendAss(mAss,assObb);
						
						if (assFac.length>0 ) {
							mAss.append($("<h4>").addClass("assTitle").html("Assicurazioni facoltative, attivabili su richiesta del cliente"));
							appendAss(mAss,assFac);
						}
						mNode.append(mAss);
						//Pulsanti generici

						//Prepara il bottone "confronta i mutui"
						mConf = $("<a>").addClass("btn btn-primary").html("Confronta i mutui").attr({"id":"conf","href":"javascript:;"});
						mConf.click(function(){
							$("#mOverlay").hide();
							$("#codiceMutuo").val("");
							mGetData();
						});

						// Estende i parametri da inviare alla pagina di destinazione
						$.extend(mPrevData, {
							nome: mutuo.nome,
							rata: mutuo.rata,
							indice: mutuo.indice,
							spread:mutuo.spread,
							tasso:mutuo.tasso,
							taeg:mutuo.taeg,
							istruttoria:mutuo.istruttoria,
							perizia:mutuo.perizia,
							incassorata:mutuo.incassorata,
							polizza:mutuo.polizza,
							imposta:mutuo.imposta,
							costototcred:mutuo.costototcred,
							imptotcons:mutuo.imptotcons
						});
						
						// Solo per Webank appende direttamente la console di richiesta
						if (feBank === "webank") {
							//Pulsante richiedi il mutuo
							var mRichiedi = $("<a>").addClass("btn btn-primary btn-big btn-minw").html("RICHIEDI IL MUTUO").attr({"href":mEndUrl + "&"+ $.param(mPrevData)});
							mNode.append($("<div>").addClass("form-group btnWrapper").append(
									$("<div>").addClass("btn-align-left").append(mConf),
									$("<div>").addClass("btn-align-right").append(mRichiedi),
									$("<br>").addClass("clear")
								),
								$("<p>").addClass("legalnote note").html("L'erogazione del mutuo non &egrave; condizionata dalla sottoscrizione di coperture assicurative facoltative.")
							);
						}


					}	
					
				}
				else
				{
					// Mutuo non disponibile
					mNode.append($("<div>").addClass("message").html("<p>Prodotto non disponibile per i parametri selezionati.</p>"))
				}
				
				mRes.append(mNode);
				mNode.fadeIn();
			});
			
			// In caso di errore generico distrugge il contenitore e inserisce il messaggio
			if (erroreGenericoMsg != "") {
				mRes.empty().append($("<div>").addClass("errore-generico").append("<p>").html(erroreGenericoMsg));
			}

			// Inizializza e resetta lo slider e la select alternativa
			mSliderDefault = $("#mDur").val();
			nTacc = mSliderMax - mSliderMin;
			$("#mAnni").nextAll(".slider-spin").remove();
			var mSlide = $("#mAnni").unwrap(".slider-spin").sliderPlus(
				{
					value: mSliderDefault,
					min: mSliderMin,
					max: mSliderMax,
					range: "min",
					step: 1,
					milestone: 5,
					start: hideResults,
					spinners: true
				}
			);
			$("#mAnni").nextAll(".slider-spin").click(hideResults);
			$("#mDur").change(hideResults);
						
			mGs = $(".rata-value");
			for(x=0;x<mGs.length;x++)
			{
				el = mGs.eq(x);
				w =  Number(el.attr("w"))/(ratamax) * 100;
				el.animate({"width": w +"%"});
			}
			
			//Riadatta, se necessario, gli elementi di "contorno"
			if($("#ctcont").length) $("#ctcont").css("height",$("#calcolatoremutui").height() + 50 + "px");
				

			// Solo per youWeb appende la console con la presa dell'appuntamento e i vari pulsanti
			if (feBank === "youweb"){

				var mRichiediAction = function() {
					var mRichiediForm = $("#formPrevData").empty(),
					/* VERSIONE "CABULA"
					mAppObj= {
						"Assicurazione": mPrevData.assicurazioni,
						"Codice mutuo": mPrevData.codicemutuo,
						"Nome mutuo": mPrevData.nome,
						"Costo totale del credito": mPrevData.costototcred,
						"Durata": mPrevData.durata,
						"Importo mutuo": mPrevData.importomutuo,
						"imposta sostitutiva": mPrevData.imposta,
						"Importo totale dovuto dal Consumatore": mPrevData.imptotcons,
						"Incasso rata": mPrevData.incassorata,
						"Indice": mPrevData.indice,
						"Istruttoria": mPrevData.istruttoria,
						"Perizia": mPrevData.perizia,
						"Polizza casa": mPrevData.polizza,
						"Prima casa": mPrevData.primacasa,
						"Importo rata": mPrevData.rata,
						"Spread": mPrevData.spread,
						"TAEG": mPrevData.taeg,
						"Tasso": mPrevData.tasso,
						"Valore immobile": mPrevData.valoreimmobile
					};
					*/

					/* RICHIESTA B.M. SCOTTI */
					mAppObj = {
						"Prodotto": (isDetail)? (mPrevData.nome + " " + feBank.toUpperCase() ): mPrevData.nome,   
						"Finalita'": mPrevData.finalita,
						"Prima casa": mPrevData.primacasa,
						"Valore immobile": formattaNumero(mPrevData.valoreimmobile,2),
						"Importo mutuo": formattaNumero(mPrevData.importomutuo,2),
						"Durata": mPrevData.durata,
						"Spese Istruttoria": mPrevData.istruttoria,
						"Spese Perizia": mPrevData.perizia,
						"Spese Incasso Rata": mPrevData.incassorata,
						"Rata": (mPrevData.rata)? formattaNumero(mPrevData.rata,2) :"",
						"Tasso":mPrevData.tasso,
						"Premio polizza RC": mPrevData.polizza,
						"Importo totale dovuto": mPrevData.imptotcons
					}

					// Processa i valori
					$.each(mAppObj,function(i,v){
						if(mAppObj[i] === undefined) {
							delete(mAppObj[i])
						}
						else
						{
							if (mAppObj[i] === "") delete(mAppObj[i])
						}
					});
					
					
										
					/* $.each(mPrevData,function(k,v){
						mRichiediForm.append(
							$("<input>").attr({"name":k,"type":"hidden"}).val(v)
						)
					});
					*/


					mRichiediForm.append(
						$("<input>").attr({"name":"dati_simulazione","type":"hidden"}).val(JSON.stringify(mAppObj))
					)

					mRichiediForm.submit();
				}

				var mRichiediForm = $("<form>").attr({"id":"formPrevData","action":mEndUrl,"method":"post"}).hide();

				// Azione sul pulsante di richiesta appuntamento
				var mRichiediApp = $("<div>").addClass("testoIcona AssIco").append(
					$("<span>").addClass("icon-wrapper").append("<i class=\"icon icon-ico_cta_prenota fLeft\" title=\"ico_cta_compara\"></i>"),
					$("<div>").addClass("leftTesto glifiLeftText").append(
						$("<h3>").html("Contatta il tuo gestore per saperne di pi&ugrave; <br> e avviare la richiesta di mutuo"),
						mRichiediForm,
						$("<a>").addClass("btn-link").html("PRENDI UN APPUNTAMENTO IN FILIALE<i class=\"icon icon-arrow_right\" title=\"icon-freccia_dx\"></i>").click(mRichiediAction)
					)
				);
				var mConsoleBack = ((isDetail)? mConf : $("<a>").addClass("btn btn-primary").html("Indietro").click(function(){history.back(1)}));
				$("#mResults").append($("<section>").append($("<div>").addClass("row").append(
					$("<div>").addClass("col-xs-12 col-sm-6").append(mConsoleBack),
					$("<div>").addClass("col-xs-12 col-sm-6").append(mRichiediApp)
				)));
			}
			mCont.removeClass("loading");
		},
		
		error: function(xhr, status, error) {
			alert("Si sono verificati degli errori: riprovare piu' tardi");
		}
		
	});
}
