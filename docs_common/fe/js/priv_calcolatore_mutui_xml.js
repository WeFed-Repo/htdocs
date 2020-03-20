/* PREVENTIVATORE MUTUI */
/* Mostra l'html del calcolatore */
function mCalcShow()
{
	mCont = $("#mCalcWrapper");
	$.ajax({
		url: "/fe/html/priv_calcolatore_mutui.html?rand="+Math.random(),
		dataType: "html",
		success: function(data){
			mCont.html(data);
			mCalcInit();
			}
	});
}

function mCalcShowMobile()
{
	mCont = $("#mCalcWrapper");
	$.ajax({
		url: "/fe/html/priv_calcolatore_mutui.html?rand="+Math.random(),
		dataType: "html",
		success: function(data){
			mCont.html(data);
			mCalcInitMobile();
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
	$("#mDur").append($("<option value=\"20\">20</option>"));
	$("#mDur").val((mDurata != "" && mDurata != null)? mDurata : "20");
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
	mButton.click(function(){mGetData(),mResetErrors()});
	$("#mAcquisto").click(function(){
		$("#mCalcWrapper .innerTab li").removeClass("on");

		mForm.find("input[name=primacasa]").eq(0).attr("checked",true);
		mForm.find(".radiocont").show();
		$(this).parents("li").addClass("on");
		$("#mFin").val("Acquisto");
		$("#codiceMutuo").val("");
		$("#assicurazioni").val("");
		$("#mOverlay").hide();
		mGetData();
		});
	$("#mSurroga").click(function(){
		
		$("#mCalcWrapper .innerTab li").removeClass("on");
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
		mGetData();
	});
	/* Variabili grafiche */
	mGaugeMaxWidth = 430; 
	mGetData();
	
	// Funzione rendering assicurazioni
	appendAss = function(appnode, assArray)
	{
		for(x=0;x<assArray.length;x++)
		{
			assi = $(assArray[x]);
			assBlock = $("<div>").addClass("assBlock");
			assInput = $("<a>").addClass("check").attr({"data-codice": assi.attr("codice")}).append($("<i>").addClass("icon icon-checkbox"));
			if (assi.attr("obbligatoria") == "n")
			{
				assInput.attr("href","javascript:;");
				if (assi.attr("attiva")=="y") assInput.addClass("selected");
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
					$("#assicurazioni").val(assArray.join("|"));
					mGetData();
				});
			}
			else
			{
				assInput.addClass("selected default");
			}
			assBlock.append(assInput,$("<label>").addClass("title").append(assi.find("nomeprodotto").text()));
			assDetail.push(assi.find("descrizione").text());
			assBlock.append($("<a>").addClass("detail").attr({"codice":assDetail.length-1,"href":"javascript:;"}).append($("<i>").addClass("icon icon-info_fill")).click(mutuiAssDet));
			assBlock.append($("<span>").addClass("payoff").html(assi.find("payoff").text()));
			appnode.append(assBlock);
		}
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


//per la parte mobile
function mCalcInitMobile()
{
	
	//mUrl = (location.href.indexOf("libreriewebank") > 0 )? "/swf/xml/calc_mutui_detail.xml" : cgi_script + "/wb/simulazioneMutui.do";
	
	mEndUrl = mPagetopost;
	mForm = mCont.find("form").eq(0);
	
	
	// Valori di default nei vari campi
	$("#mFin").val(mFinalita);
	$("#m"+mFinalita).addClass("selected");
	
	mForm.find("input[value="+mPrimacasa+"]").attr("checked","checked");
	$("#codiceMutuo").val(mCodice);
	if (mValoreimmobile != "") $("#mValore").val(formatMigliaia(mValoreimmobile));
	if (mImportomutuo != "") {
		$("#mImporto").val(formatMigliaia(mImportomutuo));
	}
	else
	{
		$("#mImporto").val("120.000");
	}
	$("#mDur").append($("<option value=\"20\">20</option>"));
	$("#mDur").val((mDurata != "" && mDurata != null)? mDurata : "20");
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
	mButton.click(function(){mGetDataMobile(),mResetErrors()});
	$("#mAcquisto").click(function(){
		$("#mCalcWrapper .innerTab li").removeClass("on");

		mForm.find("input[name=primacasa]").eq(0).attr("checked",true);
		mForm.find(".radiocont").show();
		$(this).parents("li").addClass("on");
		$("#mFin").val("Acquisto");
		$("#codiceMutuo").val("");
		$("#assicurazioni").val("");
		$("#mOverlay").hide();
		mGetDataMobile();
		});
	$("#mSurroga").click(function(){
		
		$("#mCalcWrapper .innerTab li").removeClass("on");

		mForm.find("input[name=primacasa]").val("SI");
		mForm.find(".radiocont").hide();
		$(this).parents("li").addClass("on");
		$("#mFin").val("Surroga");
		// Reset dei valori
		$("#mValore").val("200.000");
		$("#mImporto").val("120.000");
		$("#codiceMutuo").val("");
		$("#mOverlay").hide();
		$("#assicurazioni").val("");
		mGetDataMobile();
	});
	/* Variabili grafiche */
	mGaugeMaxWidth = 430; 
	mGetDataMobile();
	
	// Funzione rendering assicurazioni
	appendAss = function(appnode, assArray)
	{
		for(x=0;x<assArray.length;x++)
		{
			assi = $(assArray[x]);
			assBlock = $("<div>").addClass("assBlock");
			assInput = $("<a>").addClass("check").attr({"data-codice": assi.attr("codice")}).append($("<i>").addClass("icon icon-checkbox"));
			if (assi.attr("obbligatoria") == "n")
			{
				assInput.attr("href","javascript:;");
				if (assi.attr("attiva")=="y") assInput.addClass("selected");
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
					$("#assicurazioni").val(assArray.join("|"));
					mGetDataMobile();
				});
			}
			else
			{
				assInput.addClass("selected default");
			}
			assBlock.append(assInput,$("<label>").addClass("title").append(assi.find("nomeprodotto").text()));
			assDetail.push(assi.find("descrizione").text());
			assBlock.append($("<a>").addClass("detail").attr({"codice":assDetail.length-1,"href":"javascript:;"}).append($("<i>").addClass("icon icon-info_fill")).click(mutuiAssDet));
			assBlock.append($("<span>").addClass("payoff").html(assi.find("payoff").text()));
			appnode.append(assBlock);
		}
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
	mCont.addClass("loading");
	$("#mOverlay").hide();
	isDetail = ($("#codiceMutuo").val().length > 0) ? true : false;
	mDurata = $("#mDur").val();
	
	// Effettua la chiamata ed agisce di conseguenza
	$.ajax({
		url: mUrl + "?rand=" + Math.random(),
		method: "post",
		data: {
			finalita: mForm.find("input[name=finalita]").val(),
			primacasa: mForm.find("input[name=primacasa]:checked").attr("value"),
			valoreimmobile: cleanInt(mForm.find("input[name=valoreimmobile]").val()),
			importomutuo: cleanInt(mForm.find("input[name=importomutuo]").val()),
			durata: mDurata,
			codicemutuo	: mForm.find("input[name=codicemutuo]").val(),
			assicurazioni: mForm.find("input[name=assicurazioni]").val()
		},
		dataType: "xml",
		success: function(data) {
			unsetLoadingOnObject("#calcolatoremutui");
			showResults();
			// stopPulseCalc();
			mRes.html("");
			mutui = $(data).find("mutui mutuo");
			assDetail = new Array();
			ratamax = 0;
			mSliderMin = 100;
			mSliderMax = 0;
			mLtv = 0;
			mMutuoMin = 1000000;
			mMutuoMax = 0;
			
			$.each(mutui,function(i,v){
				mutuo = $(v);
				
				// Modifica i parametri generali
				if (Number(mutuo.attr("duratamin"))<mSliderMin) mSliderMin = Number(mutuo.attr("duratamin"));
				if (Number(mutuo.attr("duratamax"))>mSliderMax) mSliderMax = Number(mutuo.attr("duratamax"));
				if (Number(mutuo.attr("mutuominimo"))<mMutuoMin) mMutuoMin = Number(mutuo.attr("mutuominimo"));
				if (Number(mutuo.attr("mutuomassimo"))>mMutuoMax) mMutuoMax = Number(mutuo.attr("mutuomassimo"));
				if (Number(mutuo.attr("ltv"))>mLtv) mLtv = Number(mutuo.attr("ltv"));
				
				//Assembla il nodo con i dettagli del mutuo (differenziando il dettaglio ed il comparativo)
				mNode = $("<div>").addClass("mData").append($("<h3>").addClass("title").html(mutuo.find("nome").text()));
				if (mutuo.attr("disponibile") == "y")
				{
					
					if (!isDetail) mNode.append(
							$("<a>").addClass("btn-icon documenti").html("<i class=\"icon icon icon icon-file_pdf\"></i><span>Scheda prodotto e Informazioni Generali</span>").attr({"href": mutuo.find("link").text(), "target": "_blank"})
					);

					
					/* Barre */
					var mGBlock = $("<div>").addClass("row");

					var mrata = Number(mutuo.attr("rata"));
					if (mrata > ratamax) ratamax = mrata;


					mGauge = $("<div>").addClass("rata-value").append($("<span>").addClass("rata-text").html(formatMigliaia(mutuo.attr("rata").split(".")[0]) + ",<span class=\"small\">"+ mutuo.attr("rata").split(".")[1]+"&nbsp;</span>&euro;<span class=\"smaller\">&nbsp;al mese</span>"));
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
						
						mScegli = $("<a>").addClass("btn btn-primary").html("Scegli").attr({"href":"javascript:;", "type":"button", "codMutuo" : mutuo.attr("codicemutuo")})
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
						}).append($("<i>").addClass("icon icon-f-row_expand"), $("<i>").addClass("icon icon-f-row_contract"));
					var tassiTesto = $("<span>").addClass("tassi-testo");
					var tassiTestoBase = $("<span>").addClass("testo-basic").html("Indice: "+mutuo.find("indice").text()+" - Spread: "+mutuo.find("spread").text()+" - Tasso: "+mutuo.find("tasso").text()+" - <strong>TAEG: "+mutuo.find("taeg").text()+"</strong>");
					var tassiTestoEsteso = $("<span>").addClass("testo-esteso").html(
						"Istruttoria:  "+ mutuo.find("istruttoria").text() + " &euro; " +
						"- Perizia:  "+ mutuo.find("perizia").text() + " &euro; " +
						"- Incasso rata: "+ mutuo.find("incassorata").text() + " &euro; " +
						"- Polizza casa:  "+ mutuo.find("polizza").text() + " &euro; " + 
						((mutuo.find("polizzafacoltativa").length>0)? "- Polizza facoltativa:  "+ mutuo.find("polizzafacoltativa").text() + " &euro; " : "") +
						"- Imposta sostitutiva: "+ mutuo.find("imposta").text() + " &euro; " + 						
						"- Costo totale del credito: "+ mutuo.find("costototcred").text() + " &euro; " + 
						"- Importo totale dovuto dal Consumatore: "+ mutuo.find("imptotcons").text() +" &euro;"
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
						mNodeDocUl.append($("<li>").append($("<a>").addClass("btn-icon").html("<i class='icon icon-file_pdf'></i><span>Scheda prodotto e Informazioni Generali</span>").attr({"href": mutuo.find("link").text(), "target": "_blank"})));
						mNodeDocUl.append($("<li>").append($("<a>").addClass("btn-icon").html("<i class='icon icon-file_pdf'></i><span>Piano di ammortamento</span>").attr({"href": mutuo.find("pianoammortamento").text(), "target": "_blank"})));
						
						mNode.append(mNodeDocUl);
						// Assicurazioni
						mNode.append($("<h4>").html("Assicurazione gi&agrave; compresa"));
						appendAss(mNode,mutuo.find("assicurazione[obbligatoria=y]"));
						
						if (mutuo.find("assicurazione[obbligatoria=n]").length>0 ) {
							mNode.append($("<h4>").addClass("assTitle").html("Assicurazioni facoltative, attivabili su richiesta del cliente"));
							appendAss(mNode,mutuo.find("assicurazione[obbligatoria=n]"));
						}
						
						//Pulsanti generici

						//Confronta i mutui
						mConf = $("<a>").addClass("btn btn-primary").html("Confronta i mutui").attr({"id":"conf","href":"javascript:;"});
						mConf.click(function(){
							$("#mOverlay").hide();
							$("#codiceMutuo").val("");
							mGetData();
						});

						//Richiedi il mutuo
						// Combina i parametri per l'url
						mEndUrlParams = "";
						mEndUrlParams = mEndUrlParams + "&finalita=" + mForm.find("input[name=finalita]").val();
						mEndUrlParams = mEndUrlParams + "&primacasa=" + mForm.find("input[name=primacasa]:checked").attr("value");
						mEndUrlParams = mEndUrlParams + "&valoreimmobile=" + cleanInt(mForm.find("input[name=valoreimmobile]").val());
						mEndUrlParams = mEndUrlParams + "&importomutuo=" + cleanInt(mForm.find("input[name=importomutuo]").val());
						mEndUrlParams = mEndUrlParams + "&durata=" + $("#mDur").val();
						mEndUrlParams = mEndUrlParams + "&codicemutuo=" + mForm.find("input[name=codicemutuo]").val();
						mEndUrlParams = mEndUrlParams + "&assicurazioni=" + mForm.find("input[name=assicurazioni]").val();
						mRichiedi = $("<a>").addClass("btn btn-primary btn-big btn-minw").html("RICHIEDI IL MUTUO").attr({"href":mEndUrl + mEndUrlParams});
						mNode.append($("<div>").addClass("form-group btnWrapper").append(
							$("<div>").addClass("btn-align-left").append(mConf),
							$("<div>").addClass("btn-align-right").append(mRichiedi),
							$("<br>").addClass("clear")
						));
						
						
						// NOTE LEGALI ASSOCIATE AL MUTUO //
						mNode.append($("<p>").addClass("legalnote note").html("L'erogazione del mutuo non &egrave; condizionata dalla sottoscrizione di coperture assicurative facoltative."));
						
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
			


			// Inizializza e resetta lo slider e la select alternativa
			mSliderDefault = $("#mDur").val();
			nTacc = mSliderMax - mSliderMin;
			var mSlide = $("#mAnni").sliderPlus(
				{
					value: mSliderDefault,
					min: mSliderMin,
					max: mSliderMax,
					step: 1,
					milestone: 5,
					start: hideResults
					/*
					change: function() {
						hideResul
					 	if($("#mDur").val()== mDurata) showResults();/* stopPulseCalc() ;
					}
					*/
				}
			);
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
				
			mCont.removeClass("loading");


		},
		
		
		error: function(xhr, status, error) {
			alert("Si sono verificati degli errori: riprovare piu' tardi");
		}
		
	});
}

function mGetDataMobile(){
// Blocca l'interfaccia
//mCont.addClass("loading");
$("#mOverlay").hide();
isDetail = ($("#codiceMutuo").val().length > 0) ? true : false;
mDurata = $("#mDur").val();

// Effettua la chiamata ed agisce di conseguenza
$.ajax({
	url: mUrl + "?rand=" + Math.random(),
	method: "post",
	data: {
		finalita: mForm.find("input[name=finalita]").val(),
		primacasa: mForm.find("input[name=primacasa]:checked").attr("value"),
		valoreimmobile: cleanInt(mForm.find("input[name=valoreimmobile]").val()),
		importomutuo: cleanInt(mForm.find("input[name=importomutuo]").val()),
		durata: mDurata,
		codicemutuo	: mForm.find("input[name=codicemutuo]").val(),
		assicurazioni: mForm.find("input[name=assicurazioni]").val()
	},
	dataType: "xml",
	success: function(data) {
		unsetLoadingOnObject("#calcolatoremutui");
		showResults();
		// stopPulseCalc();
		mRes.html("");
		mutui = $(data).find("mutui mutuo");
		assDetail = new Array();
		ratamax = 0;
		mSliderMin = 100;
		mSliderMax = 0;
		mLtv = 0;
		mMutuoMin = 1000000;
		mMutuoMax = 0;
		
		$.each(mutui,function(i,v){
			mutuo = $(v);
			
			// Modifica i parametri generali
			if (Number(mutuo.attr("duratamin"))<mSliderMin) mSliderMin = Number(mutuo.attr("duratamin"));
			if (Number(mutuo.attr("duratamax"))>mSliderMax) mSliderMax = Number(mutuo.attr("duratamax"));
			if (Number(mutuo.attr("mutuominimo"))<mMutuoMin) mMutuoMin = Number(mutuo.attr("mutuominimo"));
			if (Number(mutuo.attr("mutuomassimo"))>mMutuoMax) mMutuoMax = Number(mutuo.attr("mutuomassimo"));
			if (Number(mutuo.attr("ltv"))>mLtv) mLtv = Number(mutuo.attr("ltv"));
			
			//Assembla il nodo con i dettagli del mutuo (differenziando il dettaglio ed il comparativo)
			mNode = $("<div>").addClass("mData").append($("<h3>").addClass("title").html(mutuo.find("nome").text()));
			if (mutuo.attr("disponibile") == "y")
			{
				
				if (!isDetail) mNode.append(
						$("<a>").addClass("btn-icon documenti").html("<i class=\"icon icon icon icon-file_pdf\"></i><span>Scheda prodotto e Informazioni Generali</span>").attr({"href": mutuo.find("link").text(), "target": "_blank"})
				);

				
				/* Barre */
				var mGBlock = $("<div>").addClass("row");

				var mrata = Number(mutuo.attr("rata"));
				if (mrata > ratamax) ratamax = mrata;


				mGauge = $("<div>").addClass("rata-value").append($("<span>").addClass("rata-text").html(formatMigliaia(mutuo.attr("rata").split(".")[0]) + ",<span class=\"small\">"+ mutuo.attr("rata").split(".")[1]+"&nbsp;</span>&euro;<span class=\"smaller\">&nbsp;al mese</span>"));
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
					
					mScegli = $("<a>").addClass("btn btn-primary").html("Scegli").attr({"href":"javascript:;", "type":"button", "codMutuo" : mutuo.attr("codicemutuo")})
							.click(function(){
							$("#codiceMutuo").val($(this).attr("codMutuo"));
						mGetDataMobile();
					});

					mGBlock.append($("<div>").addClass("col-sm-2 hidden-xs").append($("<div>").addClass("btn-align-right").append(mScegli)));
				}
				mNode.append(mGBlock);
				mNode.append($("<span>").addClass("tassi").html("Indice: "+mutuo.find("indice").text()+" - Spread: "+mutuo.find("spread").text()+" - Tasso: "+mutuo.find("tasso").text()+" - <strong>TAEG: "+mutuo.find("taeg").text()+"</strong>"));
				
				if (!isDetail) mNode.append(($("<div>").addClass("hidden-sm hidden-md hidden-lg hidden-xl").append($("<div>").addClass("btn-align-right").append(mScegli.clone(true)))));
				mNode.css("display","none");
				
				if (isDetail)
				{
					// Dettagli documenti ed assicurazioni
					mNodeDocUl = $("<ul>").addClass("documenti");
					mNodeDocUl.append($("<li>").append($("<a>").addClass("btn-icon").html("<i class='icon icon-file_pdf'></i><span>Scheda prodotto e Informazioni Generali</span>").attr({"href": mutuo.find("link").text(), "target": "_blank"})));
					mNodeDocUl.append($("<li>").append($("<a>").addClass("btn-icon").html("<i class='icon icon-file_pdf'></i><span>Piano di ammortamento</span>").attr({"href": mutuo.find("pianoammortamento").text(), "target": "_blank"})));
					
					mNode.append(mNodeDocUl);
					// Assicurazioni
					mNode.append($("<h4>").html("Assicurazione gi&agrave; compresa"));
					appendAss(mNode,mutuo.find("assicurazione[obbligatoria=y]"));
					
					if (mutuo.find("assicurazione[obbligatoria=n]").length>0 ) {
						mNode.append($("<h4>").addClass("assTitle").html("Assicurazioni facoltative, attivabili su richiesta del cliente"));
						appendAss(mNode,mutuo.find("assicurazione[obbligatoria=n]"));
					}
					
					//Pulsanti generici

					//Confronta i mutui
					mConf = $("<a>").addClass("btn btn-primary").html("Confronta i mutui").attr({"id":"conf","href":"javascript:;"});
					mConf.click(function(){
						$("#mOverlay").hide();
						$("#codiceMutuo").val("");
						mGetDataMobile();
					});

					//Richiedi il mutuo
					// Combina i parametri per l'url
					mEndUrlParams = "";
					mEndUrlParams = mEndUrlParams + "&finalita=" + mForm.find("input[name=finalita]").val();
					mEndUrlParams = mEndUrlParams + "&primacasa=" + mForm.find("input[name=primacasa]:checked").attr("value");
					mEndUrlParams = mEndUrlParams + "&valoreimmobile=" + cleanInt(mForm.find("input[name=valoreimmobile]").val());
					mEndUrlParams = mEndUrlParams + "&importomutuo=" + cleanInt(mForm.find("input[name=importomutuo]").val());
					mEndUrlParams = mEndUrlParams + "&durata=" + $("#mDur").val();
					mEndUrlParams = mEndUrlParams + "&codicemutuo=" + mForm.find("input[name=codicemutuo]").val();
					mEndUrlParams = mEndUrlParams + "&assicurazioni=" + mForm.find("input[name=assicurazioni]").val();
					
					mRichiedi = $("<a>").addClass("btn btn-primary").html("RICHIEDI IL MUTUO").attr({"href":mEndUrl + mEndUrlParams});
					mNode.append($("<div>").addClass("form-group btnWrapper").append(
						$("<div>").addClass("btn-align-left").append(mConf),
						$("<div>").addClass("btn-align-right").append(mRichiedi),
						$("<br>").addClass("clear")
					));
					
					
					// NOTE LEGALI ASSOCIATE AL MUTUO //
					mNode.append($("<p>").addClass("legalnote note").html("L'erogazione del mutuo non &egrave; condizionata dalla sottoscrizione di coperture assicurative facoltative."));
					
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
		


		// Inizializza e resetta lo slider e la select alternativa
		mSliderDefault = $("#mDur").val();
		nTacc = mSliderMax - mSliderMin;
		var mSlide = $("#mAnni").sliderPlus(
			{
				value: mSliderDefault,
				min: mSliderMin,
				max: mSliderMax,
				step: 1,
				milestone: 5,
				start: hideResults
				/*
				change: function() {
					hideResul
				 	if($("#mDur").val()== mDurata) showResults();/* stopPulseCalc() ;
				}
				*/
			}
		);
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
			
		//mCont.removeClass("loading");


	},
	error: function(xhr, status, error) {
		alert("Si sono verificati degli errori: riprovare piu' tardi");
	}
});
}

