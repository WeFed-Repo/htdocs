/* PREVENTIVATORE MUTUI */
/* Variabili globali */
var mHtmlUrl = "/wbresp/html/mutui_calcolatore.html",
	mUrl = "/librerie/include/commons/ajax/calcolatore_mutui_json.php",
	mPagetopost = "/";

// Modo "promo" solo console
var mPromoMode = false;

/* Passaggio parametri default */
var mCodice = "",
mValoreimmobile = "",
mImportomutuo = "",
mDurata = "",
mAssicurazioni = "",
mFinalita  = "Acquisto",
mPrimacasa = "SI",
mStoreId = "";


 mutuiIE8 = (document.all && document.querySelector && !document.addEventListener);

function setLoading()
{
	mCont.addClass("loading");
} 
function unsetLoading()
{
	mCont.removeClass("loading");
}

/* Mostra l'html del calcolatore */
function mCalcShow()
{
	$.ajax({
		url: mHtmlUrl,
		dataType: "html",
		success: function(data){
			$("#mutuiWrap").html(data);
			mCalcInit();
			},
		error: function() 
			{
				alert("Errore nel recupero del codice del cruscotto.");				
			}
	});
}

function setOverlay(el,code)
{
	var el = $(el);
	if(!el.attr("data-overlay-id")) {
		var olid = "overlay-" + parseInt(Math.random() * 100000);
		el.attr({"data-overlay-id": olid});
		var ol = $("<div>").attr({"id":olid}).addClass("overlay");
		if (code)
		{
			var bgol = $("<div>").addClass("bgol");
			ol.append(bgol);
		}
		else
		{
			ol.addClass("loading");
		}
		el.append(ol);
	}
}

function unsetOverlay(el)
{
	var el = $(el);
	var olid= el.attr("data-overlay-id");
	if(olid) {
		$("#" + olid).remove();
		el.attr("data-overlay-id");
	}
}

function startPulseCalc()
{
	// Il bottone diventa verde
	mButton.removeClass("btn-whlit btn-whlit-arrow").addClass("btn-grlit btn-grlit-arrow");
	// "svuota i risultati"
	mRes.hide();
	
}	
function stopPulseCalc()
{
	// Il bottone diventa/torna bianco
	mButton.removeClass("btn-grlit btn-grlit-arrow").addClass("btn-whlit btn-whlit-arrow");
	// "mostra i risultati"
	mRes.show();
}

/* Mostra l'errore in stile flash */
function mShowError(field, errormessage)
{
	// Mostra un errore
	field = $(field);
	field.tooltip({title:errormessage,html:true, trigger:"manual"});
	field.tooltip("show");

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

	var errField = field;
	var errMsg = "";

	if (fv>maxVal)
		{
			fv = maxVal;
			field.val(formatMigliaia(maxVal));
			errField = field;
			errMsg = "Non e' possibile inserire valori superiori a "+ formatMigliaia(maxVal) + " &euro;";
			noerror = false;
		}

	if (fv<minVal)
		{
			fv = minVal;
			field.val(formatMigliaia(minVal));
			errField = field;
			errMsg = "Non e' possibile inserire valori inferiori a "+ formatMigliaia(minVal) + " &euro;";
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
			errField = mForm.find("input[name=importomutuo]");
			errMsg = "L'importo non puo' superare il " + mLtv + "% del valore dell'immobile.";
			mForm.find("input[name=valoreimmobile]").val(formatMigliaia(Math.ceil((mImp/mLtv) * 100)));
			noerror = false;
		}
	}
	else
	{
		//Controllo salita importo mutuo
		if (fv>((mVal/100) * mLtv))
		{
			errField = mForm.find("input[name=importomutuo]");
			errMsg = "L'importo non puo' superare il " + mLtv + "% del valore dell'immobile.";
			mForm.find("input[name=importomutuo]").val(formatMigliaia((mVal/100) * mLtv));
			noerror = false;
		}
	}
	if (!noerror) {
		mShowError(errField,errMsg);
	}

	return noerror;
}

function mCalcInit()
{
	
	mEndUrl = mPagetopost;
	mCont = $("#mutuiWrap");
	mForm = mCont.find("form").eq(0);

	// mNoteP = $("#mNotes").show();
	
	// Valori di default nei vari campi
	$("#mFin").val(mFinalita);
	$("#m"+mFinalita).addClass("selected");
	
	// Flagga prima o seconda casa
	mForm.find("input[name=primacasa][value="+mPrimacasa+"]").attr("checked",true);

	// Tooltip del campo
	$("#ttSeconda").tooltip(); 

	// Select alternativa allo slider 
	sliderSelect = $("#selectDurata");
	sliderSelect.change(function(){
		var val = $(this).val();
		if (!mutuiIE8) {
			mSlide.slider("setValue",parseFloat(val));
		}
		else
		{
			$("input[name=durata]").val(val)
		}
		
		mSlideHandle.html(val);
		startPulseCalc();
		mForm.find(".sliderBlock .plusmin").removeClass("disabled");
		if((val) >= mSliderMax) mSliderButPlus.addClass("disabled");
		if((val) <= mSliderMin) mSliderButMin.addClass("disabled");

	});


	$("#codiceMutuo").val(mCodice);
	if (mValoreimmobile != "") $("#mValore").val(formatMigliaia(mValoreimmobile));
	if (mImportomutuo != "") {
		$("#mImporto").val(formatMigliaia(mImportomutuo));
	}
	else
	{
		$("#mImporto").val("120.000");
	}
	if (mDurata != "") $("#mDur").val(mDurata);
	$("#assicurazioni").val(mAssicurazioni);
	
	// Controlli "in linea" sull'immissione dei dati
	mInp = mForm.find("input[type=text]");
	mInp.on("keyup",function(){this.value = cleanInt(this.value);startPulseCalc()});
	mInp.on("focus",function(){this.value = cleanInt(this.value)});
	mInp.on("blur",function(){this.value = formatMigliaia(this.value);mCheckVal(this);});
	
	mForm.find(".radiocont label").click(startPulseCalc);
	
	// Funzione pulsanti + e - 
	// Incremento standard dei campi
	mInc = 5000;
	// Massima percentuale importo mutuo vs. valore immobile
	mForm.find(".spinnerblock .plusmin").click(function(){
		startPulseCalc();
		var bt = $(this);
		var f = mForm.find("input[name="+bt.attr("data-refered")+"]");
		fv = Math.floor(cleanInt(f.val())/mInc) * mInc;
		fv = (bt.hasClass("min"))? fv - mInc : fv + mInc;
		// Controllo a 0
		noerror = true;
		if (mCheckVal(f,fv)) f.val(formatMigliaia(fv));
 	});
	
	// pulsanti plusmin slider
	mSliderButPlus = mForm.find(".sliderBlock .plusmin.plus");
	mSliderButMin = mForm.find(".sliderBlock .plusmin.min");

	mForm.find(".sliderBlock .plusmin").click(function(){
		
		mForm.find(".sliderBlock .plusmin").removeClass("disabled");
		var cValue = mSlide.slider("getValue");
		if ($(this).hasClass("plus")) {
			cValue = cValue + 1;
		}
		else
		{
			cValue = cValue - 1;
		}

		if(cValue >= mSliderMin && cValue <= mSliderMax) {

			sliderSelect.val(cValue);
			mSlideHandle.html(cValue);
			mSlide.slider("setValue",cValue);
			startPulseCalc();
		}

		if ((cValue <= mSliderMin || cValue >= mSliderMax)) $(this).addClass("disabled");
	});

	mRes =  $("#mResults");
	mButton = $("#mutuoButton");

	if (mPromoMode) 
		{
			mButton.hide();
			mGoCalcolaBtn =  $("#mutuoGoCalcola").show().click(function(){

			// Combina i parametri per l'url
			mEndUrlParams = "";
			mEndUrlParams = mEndUrlParams + "&finalita=" + mForm.find("input[name=finalita]").val();
			mEndUrlParams = mEndUrlParams + "&primacasa=" + mForm.find("input[name=primacasa]:checked").val();
			mEndUrlParams = mEndUrlParams + "&valoreimmobile=" + cleanInt(mForm.find("input[name=valoreimmobile]").val());
			mEndUrlParams = mEndUrlParams + "&importomutuo=" + cleanInt(mForm.find("input[name=importomutuo]").val());
			mEndUrlParams = mEndUrlParams + "&durata=" + mForm.find("input[name=durata]").val();
			mEndUrlParams = mEndUrlParams + "&codicemutuo=" + mForm.find("input[name=codicemutuo]").val();
			mEndUrlParams = mEndUrlParams + "&assicurazioni=" + mForm.find("input[name=assicurazioni]").val();

			/* Vai alla pagina di destinazione */			
			parent.location.href = mEndUrl + mEndUrlParams ;

			});
		}

	mButton.click(function(){mGetData()});
	$("#mAcquisto").click(function(){
		$(".mTabs a").removeClass("selected");
		mForm.find("input[name=primacasa]").eq(0).trigger("click");
		// mForm.find(".radioprimacasa").css("visibility", "visible");
		mForm.find(".radioprimacasa").show();
		$(this).addClass("selected");
		$("#mFin").val("Acquisto");
		$("#codiceMutuo").val("");
		$("#assicurazioni").val("");
		// $("#mOverlay").hide();
		mGetData();
		});
	$("#mSurroga").click(function(){
		$(".mTabs a").removeClass("selected");
		mForm.find("input[name=primacasa]").eq(0).trigger("click")
		// mForm.find(".radioprimacasa").css("visibility", "hidden");
		mForm.find(".radioprimacasa").hide();
		$(this).addClass("selected");
		$("#mFin").val("Surroga");
		// Reset dei valori
		$("#mValore").val("200.000");
		$("#mImporto").val("120.000");
		$("#codiceMutuo").val("");
		// $("#mOverlay").hide();
		$("#assicurazioni").val("");
		mGetData();
	});
	// Rimuove prima/seconda casa
	if (mFinalita == "Surroga") {
		mForm.find(".radioprimacasa").hide();
	}


	/* Click su prima/seconda casa */
	mForm.find("input[name=primacasa]").click(startPulseCalc);


	/* Variabili grafiche */
	mGaugeMaxWidth = 430; 
	mGetData();
	
	
	// Funzione rendering assicurazioni
	appendAss = function(appnode, assArray)
	{
		$.each(assArray,function(i,v){
			var assi = v;
			assBlock = $("<div>").addClass("assBlock");
			assInput = $("<a>").addClass("check").attr({"data-codice": assi.codPacchetto});
			if (!assi.obbligatoria)
			{
				assInput.attr("href","javascript:;");
				if (assi.attiva) assInput.addClass("selected");
				assInput.click(function()
				{
					//Ceck input in maniera esclusiva
					// $("#mOverlay").hide();
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
			assBlock.append(assInput,$("<label>").addClass("title").append(assi.nomeprodotto),$("<a>").addClass("icoinfo").attr({"codice":assDetail.length,"data-toggle":"modal","data-target":"#assDettaglio"}));
			assDetail.push(assi.descrizione);
			assBlock.append($("<span>").addClass("payoff").html(assi.payoff));
			appnode.append(assBlock);
		});
	}
	setModalMobile();
	// Funzione layer dettaglio assicurazione
	$('#assDettaglio').on('show.bs.modal', function (event) {
	  var assinfo = $(event.relatedTarget) // Button that triggered the modal
	 $(this).find(".modal-body").html( assDetail[assinfo.attr("codice")]);
	});
	
	/* Controllo eventi per tooltip */
	mCalcControls = $("#mCalcCons").find("a.plusmin, #mImporto, #mValore");
	$("body").on("click",function(e){
		if(mCalcControls.index($(e.target))==-1)
		{
			setTimeout(
				function(){mCalcControls.tooltip("destroy");},3000);
		}
	});
}

// Invio e ricezione dei dati
function mGetData()
{
	mCont.removeClass("detail");

	// Blocca l'interfaccia
	setLoading("#MutuiWrap");
	$("#mOverlay").hide();
	isDetail = ($("#codiceMutuo").val().length > 0) ? true : false;
	if (isDetail) mCont.addClass("detail");

	// Effettua la chiamata ed agisce di conseguenza
	$.ajax({
		url: mUrl + "?rand="+Math.random(),
		method: "post",
		data: {
			finalita: mForm.find("input[name=finalita]").val(),
			primacasa: mForm.find("input[name=primacasa]:checked").val(),
			valoreimmobile: cleanInt(mForm.find("input[name=valoreimmobile]").val()),
			importomutuo: cleanInt(mForm.find("input[name=importomutuo]").val()),
			durata: mForm.find("input[name=durata]").val(),
			codicemutuo	: mForm.find("input[name=codicemutuo]").val(),
			assicurazioni: mForm.find("input[name=assicurazioni]").val(),
			storeid: mStoreId
		},
		dataType: "json",
		success: function(data) {

			
			stopPulseCalc();
			mRes.html("");
			mutui = data.mutui;
			assDetail = new Array();
			ratamax = 0;
			mSliderMin = 100;
			mSliderMax = 0;
			mLtv = 0;
			mMutuoMin = 1000000;
			mMutuoMax = 0;
			
			$.each(mutui,function(i,v){
				mutuo = v;
				
				// Modifica i parametri generali
				if (mutuo.duratamin<mSliderMin) mSliderMin = mutuo.duratamin;
				if (mutuo.duratamax>mSliderMax) mSliderMax = mutuo.duratamax;
				if (mutuo.mutuominimo<mMutuoMin) mMutuoMin = mutuo.mutuominimo;
				if (mutuo.mutuomassimo>mMutuoMax) mMutuoMax = mutuo.mutuomassimo;
				if (mutuo.ltv>mLtv) mLtv = mutuo.ltv;
				
				if (!mPromoMode) {

				//Prepara i contenitori
				mNodeHead = $("<div>").addClass("col-xs-12");
				mNodeLeft = $("<div>").addClass("col-xs-12");
				if (!isDetail) mNodeLeft.addClass("col-sm-9");
				mNodeRight = $("<div>").addClass("col-xs-12 col-sm-3");

				//Assembla il nodo con i dettagli del mutuo (differenziando il dettaglio ed il comparativo)
				mNode = $("<div>").addClass("mData").append(
					
					$("<div>").addClass("row").append(
						mNodeHead.append($("<span>").addClass("title").html(mutuo.nome)),
						mNodeLeft,mNodeRight)
					// Nodo nome mutuo
				).hide();

				
				if (mutuo.disponibile)
				{

					if (!isDetail) mNodeHead.append($("<a>").addClass("scheda hidden-xs").html("Scheda prodotto e Informazioni Generali").attr({"href": mutuo.link, "target": "_blank"}));
					mrata = mutuo.rata;
					if (mrata > ratamax) ratamax = mrata;
					
					mGauge = $("<div>").addClass("mGauge").append($("<span>").addClass("rata").html("<span class='smaller hidden-xs'>La tua rata: </span>" + formatMigliaia(mutuo.rata.toString().split(".")[0]) + ",<span class=\"small\">"+ mutuo.rata.toString().split(".")[1]+"&nbsp;&euro;</span><span class=\"smaller\">&nbsp;al mese</span>"));
					mGauge.attr("w",mrata);

					mGBlock = $("<div>").addClass("mBlock").append(mGauge);
					if (!isDetail)
					{
						mScegli = $("<a>").addClass("btn-whlit btn-whlit-arrow btn-blacktxt btn-fs14 btn-gray-border uppercase").html("Scegli").attr({"href":"javascript:;", "codMutuo" : mutuo.codicemutuo});
						mScegli.click(function(){
							$("#codiceMutuo").val($(this).attr("codMutuo"));
							mGetData();
							moveToAnchor ("#mutuiWrap");
						});
						mNodeRight.append(mScegli);
					}
					mNodeLeft.append(mGBlock);

					// Blocco tassi
					var tassiSwitch = $("<a>").addClass("tassi-switch").click(function(){
							$(this).parents(".tassi").toggleClass("opened");
							$(this).parents(".tassi").find(".testo-esteso").slideToggle();
						}).append($("<i>").addClass("icon icon-f-row_expand"), $("<i>").addClass("icon icon-f-row_contract"));
					var tassiTesto = $("<span>").addClass("tassi-testo");
					var tassiTestoBase = $("<span>").addClass("testo-basic").html("Indice: "+mutuo.indice +" - Spread: "+mutuo.spread +" - Tasso: "+mutuo.tasso +" - <strong>TAEG: "+mutuo.taeg+"</strong>");
					
					var tassiTestoEsteso = $("<span>").addClass("testo-esteso").html(
						"Istruttoria:  "+ mutuo.istruttoria + " &euro; " +
						"- Perizia:  "+ mutuo.perizia + " &euro; " +
						"- Incasso rata: "+ mutuo.incassorata + " &euro; " +
						"- Polizza casa:  "+ mutuo.polizza + " &euro; " + 
						((mutuo.polizzafacoltativa && mutuo.polizzafacoltativa.length>0)? "- Polizza facoltativa:  "+ mutuo.polizzafacoltativa + " &euro; " : "") +
						"- Imposta sostitutiva: "+ mutuo.imposta + " &euro; " + 						
						"- Costo totale del credito: "+ mutuo.costototcred + " &euro; " + 
						"- Importo totale dovuto dal Consumatore: "+ mutuo.imptotcons +" &euro;"
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


					mNodeLeft.append($("<a>").addClass("scheda" + ((!isDetail) ? " hidden-sm hidden-md hidden-lg":"")).html("Scheda prodotto e Informazioni Generali").attr({"href": mutuo.link, "target": "_blank"}));
					
					if (isDetail)
					{
						// mNoteP.hide();
						// Dettagli documenti ed assicurazioni
						
						mNodeLeft.append($("<a>").addClass("scheda").html("Piano di ammortamento").attr({"href": mutuo.pianoammortamento, "target": "_blank"}));
						

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
						mNode.append($("<span>").addClass("assTitle").html("Assicurazione gratuita"));

						appendAss(mNode,assObb);
						
						if (assFac.length>0) {
							mNode.append($("<span>").addClass("assTitle").html("Assicurazioni facoltative, attivabili su richiesta del cliente"));
							appendAss(mNode,assFac);
						}
						
						//Pulsanti generici
						//Confronta i mutui
						mConf = $("<a>").addClass("btn-whlit btn-whlit-arrowleft btn-adaptive btn-fs14 btn-blacktxt  uppercase fleft").html("Confronta i mutui").attr({"id":"conf","href":"javascript:;"});
						mConf.click(function(){
							$("#mOverlay").hide();
							$("#codiceMutuo").val("");
							mGetData();
							moveToAnchor("#mutuiWrap");
						});
						//Richiedi il mutuo
						// Combina i parametri per l'url
						mEndUrlParams = "";
						mEndUrlParams = mEndUrlParams + "&finalita=" + mForm.find("input[name=finalita]").val();
						mEndUrlParams = mEndUrlParams + "&primacasa=" + mForm.find("input[name=primacasa]:checked").val();
						mEndUrlParams = mEndUrlParams + "&valoreimmobile=" + cleanInt(mForm.find("input[name=valoreimmobile]").val());
						mEndUrlParams = mEndUrlParams + "&importomutuo=" + cleanInt(mForm.find("input[name=importomutuo]").val());
						mEndUrlParams = mEndUrlParams + "&durata=" + mForm.find("input[name=durata]").val();
						mEndUrlParams = mEndUrlParams + "&codicemutuo=" + mForm.find("input[name=codicemutuo]").val();
						mEndUrlParams = mEndUrlParams + "&assicurazioni=" + mForm.find("input[name=assicurazioni]").val();
						
						mRichiedi = $("<a>").addClass("btn-grlit btn-grlit-arrow fright").html("Richiedi il mutuo").attr({"href":mEndUrl + mEndUrlParams});
						mNode.append($("<div>").addClass("goCons").append(mConf,mRichiedi));

						// NOTE LEGALI ASSOCIATE AL MUTUO //
						
						mNode.append($("<p>").addClass("legalnote").html("L'erogazione del mutuo non &egrave; condizionata dalla sottoscrizione di coperture assicurative facoltative."));
						
						}
					}
					else
					{
						// Mutuo non disponibile
						if (!mPromoMode) { mNode.append($("<div>").addClass("message").html("<p>Prodotto non disponibile per i parametri selezionati.</p>"))}
						// mNoteP.show();
					}
				}
				if (!mPromoMode) {
					mRes.append(mNode);
					mNode.fadeIn();
				}
			});
			

			// Inizializza e resetta lo slider
			mSliderDefault = parseFloat($("#mDur").val());
			if (mutuiIE8) {
				// HACK PER IE (forza la select e crea un fake slider)
				mSlide = $("<input>");
				$(".sliderWrapper").find(".hidden-xs").hide();
				$(".sliderWrapper").find(".hidden-sm").removeClass("hidden-sm hidden-md hidden-lg");
			}
			else
			{	
				mSlide = $("#mDur").slider(
					{
						value: mSliderDefault,
						min: mSliderMin,
						max: mSliderMax,
						step: 1,
						tooltip: "hide"
					}
				).on("slide slideStop",function(event) {
						mSlideHandle.html(event.value);
						sliderSelect.val(event.value)
						startPulseCalc();
						mForm.find(".sliderBlock .plusmin").removeClass("disabled");
						if((event.value) >= mSliderMax) mSliderButPlus.addClass("disabled");
						if((event.value) <= mSliderMin) mSliderButMin.addClass("disabled");
				});
			}
			mSlideHandle = mForm.find(".slider-handle.min-slider-handle");
			mSlideHandle.html(mSliderDefault);

			/* Inserisce l'html delle milestones */
			mForm.find(".sliderrange .min").html(mSliderMin);
			mForm.find(".sliderrange .max").html(mSliderMax);


			
			/* Select alternativa */
			sliderSelect.empty();
			for (x=mSliderMin;x<=mSliderMax;x++) {sliderSelect.append($("<option>").attr("value",x).html(x))}
			sliderSelect.val(mSliderDefault);

			mGs = $(".mGauge");
			for(x=0;x<mGs.length;x++)
			{
				el = mGs.eq(x);
				// Larghezza delle barre 
				w =  (Number(el.attr("w"))/(ratamax) * 100);
				el.animate({"width": w +"%"});
			}
			unsetLoading("#mutuiWrap");
			
		},
		error: function()
		{
			// alert("Si sono verificati degli errori: riprovare piu' tardi");
		}
	});
}


// Caricamento oggetto onload
if (window.attachEvent){
	// alert("attachEvent");
	window.attachEvent("onload", mCalcShow);
} else {
	// alert("addEventListener " + n + h);
	window.addEventListener("load", mCalcShow, false);
}