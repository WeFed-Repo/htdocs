// Funzione che filtra i testi per evitare problemi
function filterText(testo) {
	
	if (testo) {
		var tpulito = "",
		filterExp = /[^A-Za-z0-9_\u20AC\c$\c,\c'\c:\c_\c@\c.\c>\c)\s-\xC0-\xFF]/ig;
		tpulito = testo.replace(filterExp,"");
		return tpulito;	
	}
	else
	{
		return "";
	}

}

// Funzione che ritorna un url pulito per il redirect anche se dal Backend risulta malforme (05-11-2020)
var vaRedirectUrl = function(url,sQuestion,sLeft,sTop) {
	// Spezza l'url in un array ed estrae solo la prima parte
	urlArray = url.split("#").join("|").split("?").join("|").split("&").join("|").split("|");
	var baseUrl = urlArray.shift();
	var paramsArray = [];
	var anchor= ""
	// Smista le casistiche a seconda del carattere contenuto
	$.each(urlArray, function( i, v ) {
		if (v.indexOf("=")>=0) 
		{
			paramsArray.push(v)
		}
		else
		{
			anchor = "#" + v;
		}
	});
	//push dei parametri di default per il redirect
	if(sQuestion && sQuestion.length>0) paramsArray.push("sQuestion=" + sQuestion);
	if(sLeft) paramsArray.push("sLeft=" + sLeft);
	if(sTop) paramsArray.push("sTop=" + sTop);

	return baseUrl + (paramsArray.length>0 ? "?" + paramsArray.join("&") : "") + anchor;
}


/* Funzioni dell'assistente virtuale */
var vaInsSentence = function (sent, user, benvenuto)
{
	

	var newPhrase = $("<div>").addClass("dialogo");
	var iconcina = $("<div>").addClass("iconcina");
	var arrow = $("<div>").addClass("arrow");
	
	if (benvenuto) newPhrase.attr("id","vaBenvenuto");
	
	/*.html("<p><strong>" + user + ":</strong> " + sent + "</p>") */
	if (user == "paolo") 
	{
		iconcina.addClass("paolobot");
	}
	else
	{
		iconcina.addClass("icon icon-riepilogo_conto_iban");
	}
	newPhrase.append(iconcina,arrow,
		$("<div>").addClass("fumetto").append($("<p>").html(sent))
	).addClass(user);

	vaDiag.append(newPhrase);
	
	setTimeout(vaScrollLast,300);

}

// Funzione con immissione domanda (pu� essere passato dall'esterno tramite "domanda")
function vaAsking(domanda, history)
{
	// Se l'utente ha effettivamente fatto una domanda
	if (filterText(domanda) != "" && domanda != "Scrivi quello di cui hai bisogno")
	{
		
		// Rimuove la frase di Benvenuto se presente
		if ($("#vaBenvenuto").length) { $("#vaBenvenuto").hide(); }
		
		//Nasconde l'extended view e la reinizializza
		vaExt.removeClass("opened");
		vaExt.hide(); 
		vaExtendedContents = false;
		// vaExtCons.hide();
		

		//Domanda dell'utente
		vaInsSentence(domanda,"you");
		
		//Blocca l'interfaccia utente
		vaDomanda[0].value = "";
		vaDomanda[0].disabled = true;
		
		//## INVIA LE INFO AL BACKEND E LE ATTENDE IN ARRIVO 
		var par = new FormData();

		if(vaExtLoaded) {
			par.append("cf", Math.random());
			par.append("userinput", filterText(domanda));
			par.append("history", "history");
		} else {
			par.append("cf", Math.random());
			par.append("userinput", filterText(domanda));
		}
		if (typeof vaBanca != "undefined") par.append("vaBanca", vaBanca);
		if (typeof vaCodiceutente != "undefined") par.append("vaCodiceutente", vaCodiceutente);
		if (typeof vaPiattaforma != "undefined") par.append("vaPiattaforma", vaPiattaforma);
		if (typeof vaServizi != "undefined") par.append("vaServizi", vaServizi);
		if (typeof vaRicontrattualizzato != "undefined") par.append("vaRicontrattualizzato", vaRicontrattualizzato);
		if (typeof vaCampagne != "undefined") par.append("vaCampagne", vaCampagne);

		
		if (wStore.read("vaSessionid"))  par.append("sessionid", wStore.read("vaSessionid"));


		new $.ajax({
		url: vaAJAX,
		enctype : "multipart/form-data",
		processData : false,
		contentType : false,
		data: par,
		method: "POST",
		dataType: "json",
		success: function (data) {
			vaAnswerRoot = data;
			
			if (vaAnswerRoot.KO && vaAnswerRoot.KO !== '') {
				if (console.log) { console.log(vaAnswerRoot.KO); }
				return;
			}
			
			//Se passa l'url viene reindirizzato automaticamente alla pagina di destinazione con tanto di parametri userinput, top e left
			// Solo se la pagina non e' gia' stata caricata e la domanda risulta differente rispetto a quella di onload
			if (vaAnswerRoot.url && !vaExtLoaded)
			{
				
				location.href = vaRedirectUrl(vaAnswerRoot.url,encodeURIComponent(btoa(filterText(domanda))), vAss.position().left,vAss.position().top);

				/* Redirect "rivisto per ancora" prima del 05-11
				var redurl = vaAnswerRoot.url,
					redanch = "";
				if (redurl.split("#").length>1) {
					redanch="#" + redurl.split("#")[1]
					redurl = redurl.split("#")[0];
				} 
				location.href = redurl + ((redurl.indexOf("?"))? "&" : "?") + "sQuestion=" + encodeURIComponent(btoa(filterText(domanda))) + "&sLeft=" + vAss.position().left + "&sTop=" + vAss.position().top + redanch;
				*/
				
				// Redirect old
				// location.href = vaAnswerRoot.url + ((vaAnswerRoot.url.indexOf("?"))? "&" : "?") + "sQuestion=" + encodeURIComponent(btoa(filterText(domanda))) + "&sLeft=" + vAss.position().left + "&sTop=" + vAss.position().top;
				
				return 0;
			}
			else
			{
				vaExtLoaded = false;
				vaDomanda.className = "";
			}
			
			vaAnswerBody = vaAnswerRoot.body.answer;
			
			// Se il corpo della risposta e' vuoto legge solo la history
			if (vaAnswerBody)
				{
				//Legge la history
				vaReadHistory(vaAnswerRoot.body.history,2);

				vaJsonAns = vaAnswerBody.text;
				vaInsSentence(vaJsonAns,"paolo");

				//Aggiorna il sessionid se pervenuto
				if (vaAnswerBody.sessionid) wStore.write("vaSessionid", vaAnswerBody.sessionid);
				
				//Se esiste almeno un contenuto esteso
				if (vaAnswerBody.extCont)
				{
					// Apri l'extended view
					vAss.addClass("extended");

					//Ricezione contenuti estesi
					vaExtendedContents = true; 
				
					//Svuota completamente i contenitori
					vaExtBody.empty();
					// vaExtCons.html("");
					
					// Fa apparire la linguetta
					vaExt.fadeIn(300);
					
					//Popola i vari contenitori e rende eventualmente visibili i pulsanti associati solo se i contenuti sono OK
					/* vaExtC = vaAnswerBody.extCont; */
					vaExtContent = $("<div>")

					$.each(vaAnswerBody.extCont,function (i,v) {
						
						if(v.type == "Faq"){
							// Se non esiste crea il contenitore per le FAQ
							if (!vaExtBody.find(".extcont.faq").length) {
								vaExtBody.append($("<div>").addClass("extcont faq").append(
									$("<span>").addClass("title").html("F.A.Q."),
									$("<ul>").addClass("faq")
								));
							}
							// Pusha la Faq nel contenitore
							vaExtBody.find(".extcont.faq ul.faq").append($("<li>").append(v.title));
						}
						else
						{
							if (v.title=="EXTSURVEY") {
								vaValutazione = $("<div>").addClass("valutazione").on("mouseout",function(){if(!vaSurveyVoted) $(this).find(".vaStar").removeClass("on")});
									vaSurveyVoted = false;
									vaStarEvi = function(voto){
											$.each(vaValutazione.find(".vaStar"),function(i,v) {
											v = $(v);
											v.toggleClass("on",(i<voto));
										});
									}

									var vaStar = $("<a>").addClass("vaStar").click(
										function(){
											var star = $(this);
											var voto = star.attr("voto");
											vaStarEvi(voto); 
											vaAsking("- Hai Votato: " + voto + " stell" + ((voto>1)? "e":"a"));
											vaSurveyVoted = true;
										}).hover(function(){
											vaStarEvi( $(this).attr("voto")); 
										});

									for (var y=0;y<=4;y++) {
									vaValutazione.append(vaStar.clone(true).attr("voto",y+1));
									}

								vaExtBody.append($("<div>").addClass("extcont "+ v.type).append(
								$("<span>").addClass("title").append("Lascia il tuo feedback"),
								$("<p>").html("Ho risposto a tutte le tue domande? Esprimi la tua opinione e assegnami un punteggio, grazie al tuo contributo potr&ograve; ampliare le mie conoscenze."),
								vaValutazione
								));

							}
							else
							{
								vaExtBody.append($("<div>").addClass("extcont "+ v.type).append(
								$("<span>").addClass("title").append(v.title),
								v.content
								));
							}

						}

					});

					/*
						
					for (x=0;x<vaExtC.length;x++)
					{
						
						// Push dei contenuti nell'extended view



						
						//Creazione del contenitore e del pulsante 
						// Pulsante
						if (!$("#vaExt" + vaExtC[x].type).length)
						{
							
							vabt = $("<a>").addClass("consBtn").attr({"href":"javascript:;", "id":"vaExt" + vaExtC[x].type});
							if (x==0) vabt.addClass("selected");
							vabt.click( function() {
								vaExtBody.find(".extCont").hide();
								// vaExtCons.find(".consBtn").removeClass("selected");
								$(this).addClass("selected");
								$("#" + $(this).attr("id") + "Cont").fadeIn(300);
							});
						
							// vaExtCons.append(vabt);
							
							//Contenitore
							
							
							vaco = $("<div>").attr("id","vaExt"+ vaExtC[x].type +"Cont").addClass("extCont");
							

							vacoInnerHTML = "";
							if (vaExtC[x].type != "Faq")
							{	
								// HTML GENERICO
								if (vaExtC[x].title == "EXTSURVEY"){
									var vaextTit = $("<span>").addClass("vaExtTitle").html("Lasciami il tuo feedback").css("background-image","none");
									var vaSurvey = $("<div>").addClass("vaSurvey");
									vaValutazione = $("<div>").addClass("valutazione").on("mouseout",function(){if(!vaSurveyVoted) $(this).find(".vaStar").removeClass("on")});
									vaSurveyVoted = false;
									vaStarEvi = function(voto){
											$.each(vaValutazione.find(".vaStar"),function(i,v) {
											v = $(v);
											v.toggleClass("on",(i<voto));
										});
									}

									var vaStar = $("<a>").addClass("vaStar").click(
										function(){
											var star = $(this);
											var voto = star.attr("voto");
											vaStarEvi(voto); 
											vaAsking("- Hai Votato: " + voto + " stell" + ((voto>1)? "e":"a"));
											vaSurveyVoted = true;
										}).hover(function(){
											vaStarEvi( $(this).attr("voto")); 
										});

									for (var y=0;y<=4;y++) {
									vaValutazione.append(vaStar.clone(true).attr("voto",y+1));
									}
									
									vaSurvey.append(
										$("<img>").attr("src","/img/va_survey.gif"),
										$("<p>").html("<strong>Esprimi la tua opinione</strong> e assegnami un punteggio, grazie al tuo contributo potr&ograve; ampliare le mie conoscenze."),
										vaValutazione
										);
									vaco.empty().append(vaextTit,vaSurvey);
								}
								else
								{
									vacoInnerHTML = "<span class=\"vaExtTitle\">"+ vaExtC[x].title +"</span>";
									vaco.html(vacoInnerHTML + vaExtC[x].content);
								}
							}
							else
							{
								//Mette solo il titolo e la FAQ viene caricata in seguito
								vaco.append($("<span>").addClass("vaExtTitle").html("F.A.Q."));
								var vaFaqUl = $("<ul>");
								vaco.append(vaFaqUl);
							}
							if (x>0) vaco.hide();
							vaExtBody.append(vaco);
						}
						*/
						
						//Carica le FAQ
						/*
						if (vaExtC[x].type == "Faq")
							{
								vaFaqLi = $("<li>").html ("<a href=\"javascript:;\">"+vaExtC[x].title+"</a>");
								//Click sulla FAQ
								vaFaqLi.click(function()
								{
									var FaqValue = $(this).find("a")[0].innerHTML;
									//Inserisce il valore nel campo e fa partire la domanda
									vaDomandaInit();
									vaDomanda.val(FaqValue);
									vaAsking(FaqValue);
								});
								vaFaqUl.append(vaFaqLi);
							}
							
					}
					*/
					//Apre l'extended view
					vaLingSwitch();
					
					//Se c'e' un bottone solo non lo rende linkabile
					/*vaConsButt = vaExtCons.select("a");
					if (vaConsButt.length == 1) {vaConsButt[0].style.cursor = "default"};
					*/



				}
			}
			else
			{
				vaReadHistory(vaAnswerRoot.body.history,1);
			}
				vaDomanda[0].disabled = false;	
				vaDomanda[0].focus();
			},
			//Chiamata fallita
			fail: function()
			{
				vaInsSentence("Si &egrave; verificato un errore imprevisto: al momento non posso darti una risposta. Riprova tra qualche minuto.","Paolo");
				vaDomanda[0].disabled = false;	
				vaDomanda[0].focus();
			}
		});
	}
}


//Apre l'assistente virtuale
function vaOpen(sLeft,sTop,sQuestion)
{
	wStore.write("vaOpened","true");

	//Indirizzo per chiamate AJAX (lo fa tutte le volte che cerca di aprire l'assistente virtuale)
	vaAJAX = (typeof urlVa != "undefined") ? urlVa : "/include/ajax/assistente_virtuale.php" ;

	// Elemento generico (indipendente dal load per non bloccare tutto).
	vAss = $("#virtAss"); 
	if (!vaInit && !vaFirstCall && !vaExtLoaded && !vaFirstAss) 
	{
		
		//Carica la cronologia via Ajax

		var jsonPar = new FormData();

		jsonPar.append("history", "history");
		if (typeof vaBanca != "undefined") jsonPar.append("vaBanca", vaBanca);
		if (typeof vaCodiceutente != "undefined") jsonPar.append("vaCodiceutente", vaCodiceutente);
		if (typeof vaPiattaforma != "undefined") jsonPar.append("vaPiattaforma", vaPiattaforma);
		jsonPar.append("userinput", filterText(sQuestion));
		if (typeof vaServizi != "undefined") jsonPar.append("vaServizi", vaServizi);
		if (typeof vaRicontrattualizzato != "undefined") jsonPar.append("vaRicontrattualizzato", vaRicontrattualizzato);
		if (typeof vaCampagne != "undefined") jsonPar.append("vaCampagne", vaCampagne);

		$.ajax(
			{
				url: vaAJAX, 
				enctype : "multipart/form-data",
				processData : false,
				contentType : false,
				data: jsonPar,
				method: "POST",
				dataType: "json",
				success: function (data) {
					
					vaLoad(sLeft,sTop,sQuestion, data.body.history);	
					// $("body").prepend(vAss.show());
				},
				error: function()
				{

					vaLoad(sLeft,sTop,sQuestion,'',true);
					// $("body").prepend(vAss.show());
				}
			});
	} else {
		vaLoad(sLeft,sTop,sQuestion,null);	
		// $("body").prepend(vAss.show());
	}
	
	$(".tool-btn.virtass").addClass("active");
	makeFocusable(vAss);
	
}

//Inizializza l'assistente virtuale
function vaLoad(sLeft,sTop,sQuestion, history, errormode)
{
	
	if (!vaInit)
	{

		//Caricamento eventuali parametri in loading
		vaDiagDefaultHeight = 114;
		//Oggetti comuni
		vAss.css({"visibility":"hidden", "display" : "block" , "z-index" : getNextHighestZindex()});
		$("body").prepend(vAss);

		//INIZIALIZZAZIONE OGGETTI ASS. VIRTUALE
		if (!vaExtLoaded)
		{
			// Allineamento di default (centro schermo)
			vAss.css({"top":($(window).height()/2 - 225) + "px", "left": ($(window).width()/2 - 150) + "px"});
		}
		else
		{
			//Preserva l'allineamento caricandolo dai parametri in pagina
			vAss.css({"top":sTop + "px", "left": sLeft + "px"});
		}

		/* Check se Paolo e' fuori dallo schermo */
		vAss.draggable({
			handle:".vaTop",
			containment: "window",
			scroll: false
		});

		// Pulsante riduzione a icona
		vaWin = $("#virtAss .vaWindow");
		vaWinSwitch = function() {
			if (!vaWin.hasClass("closed"))
			{
				vaFiletto.show();
				vaExtCons.hide();
				vaBody.slideUp(300);
				vaWin.addClass("closed");
				vaExt.removeClass("opened");
			}
			else
			{
				vaFiletto.hide();
				vaBody.slideDown({duration: 0.3});
				vaWin.removeClass("closed");
			}
		}
		vaWin.click(vaWinSwitch); 
		
		// Pulsante chiusura della finestra
		vaClose = $("#virtAss .vaChiudi");
		vaClose.click(function() {
			vAss.fadeOut(300);
			$("#tools .tool-btn.virtass").removeClass("active")
			wStore.write("vaOpened","false");
		});
		var vaBody = vAss.find(".vaBody");
		var vaFiletto = vAss.find(".vaFiletto");
		
		
		// Comportamento del campo
		vaDomanda = $("#vaDom");
		vaDomandaInit = function()
		{
			if (this.value == "Scrivi quello di cui hai bisogno")
			{
				this.value = "";
				this.className = "";
			}
		}
		vaDomanda.focus(vaDomandaInit);
		vaDomanda.blur(function()
		{
			if (this.value == "")
			{
				this.value = "Scrivi quello di cui hai bisogno";
				this.className = "waiting";
			}
		});
		
		// Click sul pulsante
		vaAsk = $("#vaAsking");
		vaAsk.click(function(){vaAsking(vaDomanda.val())});
		vAss.css({"display":"none","visibility":"visible"});
		
		// Forza il submit
		$("#vaFormTag").on("submit", function() {vaAsking(vaDomanda.val())});
		
		// Oggetti visuale estesa
		vaExt = $("#vaExtended");
		vaLing = $("#vaLinguetta");
		vaExtBody = vaExt.find(".vaExtBody");
		// vaExtCons = $("#vaExtConsole");
		
		// Click sulla linguetta
		vaLingSwitch = function()
		{
			if (!vaExt.hasClass("opened"))
			{
				// Mostra l'extended view
				
				var newLeft = vAss.offset().left - 220;
				// vAss.animate({"left": newLeft + "px"},{duration: 300, queue:false});
				vaExt.addClass("opened");
				//vaExtBody.css("width",0);
				if(vaWin.hasClass("vaWindow closed")) vaWinSwitch();
				//vaExtBody.animate({width: "262px"}, 200);
				/*
				if (vaExtendedContents) 
				{
					vaExtCons.delay(200).fadeIn(300);
				}
				*/

				// Controlla che il tool con l'extended view resti nella larghezza della finestra
				var maxLeft = $(window).width() - 520;
				if (vAss.offset().left>maxLeft) vAss.css("left", maxLeft + "px");
			}
			else
			{
				vaExt.removeClass("opened");
				/* vaExtCons.hide(); */
			}
		}
		vaLing.click(vaLingSwitch);
		
		//Blocco dei testi
		vaDiag = $("#vaDialog");

		if (vaTsClosed)
		{
			vaDiag.hide();
		}
		
		
		//Funzione per scrolling contenuti
		vaScrollLast = function()
		{
			vaDiagOffset = 0;
			vaAllQuest = vaDiag.find(".dialogo");
			for (x=0;x<vaAllQuest.length; x++)
			{
				vaDiagOffset = vaDiagOffset + $(vaAllQuest[x]).outerHeight();
				if (x == vaAllQuest.length-1)
				{
					// se l'ultima risposta � pi� lunga dello schermo sottrae l'overflow della risposta 
					// rispetto al resto in modo da riposizionarsi all'inizio della stessa
					vaOffDiff = ($(vaAllQuest[x]).outerHeight()) - vaDiag.outerHeight();
					if (vaOffDiff>0)
					{
					 vaDiagOffset = vaDiagOffset - vaOffDiff;
					}
				}
			}
			vaDiagOffset = vaDiagOffset - vaDiag.outerHeight();
			vaDiag.scrollTop((vaDiagOffset > 0) ? vaDiagOffset : 0);
		}
		
		vaReadHistory = function(history, historyStop)
			{


			// Carica tutta la history oppure la frase di benvenuto qualora questa non fosse presente
			if (history!= null && history[0]!=null)
			{
				//Allunga gi� l'interfaccia
				vaDiag.animate ({"height" : vaDiagDefaultHeight + "px"},300);
				for (x=history.length-historyStop; x>=0;x--)
				{
					if (vaDiag.find("div:first-child").length > 0)
					{
						vaDiag.find("div:first-child").before($("<div>").addClass("sent answer").html("<p><strong>Paolo:</strong> " + history[x].answer.split("{}").join("") + "</p>"));
					}
					else
					{
						vaDiag.append($("<div>").addClass("sent answer").html("<p><strong>Paolo:</strong> " + history[x].answer.split("{}").join("") + "</p>"));
					}
					vaDiag.find("div:first-child").before($("<div>").addClass("sent").html("<p><strong>Tu scrivi:</strong> " + history[x].question + "</p>"));
				}
				setTimeout(vaScrollLast,300);
			}
		}
	
	
		if (vaExtLoaded)
		{
			vaAsking(sQuestion, "history");
		}
		else
		{
			if (errormode) {
					$($("#vaDialog").empty().append($("<div>").addClass("errore").html("Al momento l'assistente virtuale non &egrave; disponibile.<br>Riprovare piu' tardi.")))
					$("#vaForm").hide()
				}
			else {
				if ((history == null || history[0] == null || history == undefined) && !vaInit)
				{
					//Frase di benvenuto
					// vaBenv = $("<div>").addClass("dialogo").attr("id","vaBenvenuto").html("<p>" + vaMessBenvenuto + "</p>");
					vaInsSentence(vaMessBenvenuto,"paolo",true)

					// vaDiag.append(vaBenv);
				}
				else
				{
					vaReadHistory(history, 1);
				}
			}
		}
		vaScrollLast();
	}
	$("body").prepend(vAss.show());
	vaInit = true;
}

// Apertura dell'oggetto al loading della pagina puntando un JSON di configurazione onload (deocding da Base 64)
function vaOpenOnStart(sLeft,sTop,sQuestion)
{
	if(wStore.read("vaOpened")== "true")
	{
		vaExtLoaded = true;
		vaOpen(sLeft,sTop,atob(sQuestion));
	}
}

// Aggiunge una funzione onunload che invia le variabili solo 1 volta e SE necessario
function vaSetSoundPar()
{ 
if (vaChanged)
	{
		//Aggiorna il cookie
		writeCookie ("vaTsClosed", vaTsClosed);
	}
}

$(window).on("beforeunload", vaSetSoundPar);

/* Check benvenuto */
function vaBenvenuto() {
	
	vaDiagHeight = "";
	//Ingrandisce la casella di testo
	vaOpen();
	//Se occorre l'audio e questo � attivo, lo riproduce quando e se l'assistente e' disponibile
	var startMp3 = function()
	{
		if (vaAudioOn)
		{
			if (vaIsSwf)
			{
				if (vAssObj.setUrl)
					vAssObj.setUrl(vaMessBenvenutoUrl,"happy");
				else
					setTimeout(startMp3,500);
			}	
			else if (vAssObj.length && !vaIsSwf)
			{
				vAssObj[0].src = vaMessBenvenutoUrl;
			}
			else
			{
				setTimeout(startMp3,500);
			}
		}
	}
	setTimeout(startMp3);
}

/* GESTIONE DEI COOKIES */
function writeCookie (cookiename, cookievalue, cookieexpdate)
{
	//setta lo stato con expiry date di 1 anno (fino alla fine dell'anno successivo)
	if (!cookieexpdate)
	{
		var dataOggi = new Date();
		cookieexpdate = "Thu, 31-Dec-"+ (Number(dataOggi.getFullYear())+1) +" 23:59:59 GMT";
	}
	document.cookie = cookiename + "=" + cookievalue + "; expires= " + cookieexpdate ;
}

function readCookie (cookiename)
{
	var allCookies = document.cookie.split(";")
	var retValue = "";
	for (i=0;i<allCookies.length;i++)
	{
		if (allCookies[i].split("=")[0].replace(" ","") == cookiename)
		{
			retValue = allCookies[i].split("=")[1].replace(" ","");
		}
	}
	return retValue;
}
/* FINE GESTIONE DEI COOKIES */

// Variabili di inizializzazione assistente virtuale
var vaInit = false;
var vaChanged = false;
var vaExtLoaded = false;
var vaFirstCall = false;
var vaFirstAss = false;
/*
var vaProfile = "standard";
*/

// Variabili locali di inizializzazione default (on click)
vaMessBenvenuto = "Buongiorno! Sono Paolo e sono qui per aiutarti rispondendo alle tue richieste.<br>Scrivi domande brevi e semplici oppure scrivi <a onclick=\"vaAsking('- Guidami')\" href='javascript:;'><b>Guidami</b></a>, e ti aprir&ograve; il men&ugrave; delle funzioni pi&ugrave; utilizzate.";

if (readCookie("vaAudioOn") != "")
{
	//Valori da cookie
	var vaTsClosed = (readCookie("vaTsClosed") == "true")? true : false;
}	
else
{
	//Valori di default
	var vaTsClosed = false;
}

// Test onload messaggio di benvenuto
/*$(window).on("load", function () { if (vaFirstAss) vaBenvenuto(); }); */