
alert(123);
//Indirizzo per chiamate AJAX
vaAJAX = (window.location.toString().indexOf("librerie") > 0) ? "/librerie/include/commons/ajax/priv_va.php" : cgi_script + "/common/virtass/virtass.jsp";

// Funzione con immissione domanda (può essere passato dall'esterno tramite "domanda")
function vaAsking(domanda, history)
{
	event.preventDefault();
	
	// Se l'utente ha effettivamente fatto una domanda
	if (domanda != "" && domanda != "fammi una domanda...")
	{
		

		//Altezza casella dialogo in azione
		vaTextSwitch.show();

		// Blocco interfaccia
		$("#vaFormTag").addClass("loading");

		
		// Rimuove la frase di Benvenuto se presente
		if ($("#vaBenvenuto").length) { $("#vaBenvenuto").hide(); }
		
		//Nasconde l'extended view e la reinizializza
		vaExt.removeClass("opened");
		vaExt.hide(); 
		vaExtendedContents = false;
		vaExtCons.hide();
		
		//Reinizializza vTTS 
		vTTS = (vaMute.className == "vaAudio off") ? false : true;
				
		//## Nasconde quanto presente nella casella di dialogo (togliere hide per lasciare cronologia)
		// vaDiag.select(".sent").each (function(vs) {vs.hide()});
		vaDiag.animate({ height: vaDiagDefaultHeight + "px" }, 300);
		vaInsSentence = function (sent, user)
		{
			var newPhrase = $("<div>").addClass("sent").html("<p><strong>" + user + ":</strong> " + sent + "</p>");
			if (user == "Paolo") 
			{
				newPhrase.addClass("answer");
			}
			vaDiag.append(newPhrase);
			setTimeout(vaScrollLast,300);
		}
		//Domanda dell'utente
		vaInsSentence(domanda,"Tu scrivi");
		
		//Blocca l'interfaccia utente
		vaDomanda[0].value = "";
		vaDomanda[0].disabled = true;
		
		//## INVIA LE INFO AL BACKEND E LE ATTENDE IN ARRIVO 
		var par;
		if(vaExtLoaded) {
			par =   {"cf": Math.random(), "history": "history", "doTts": vTTS};
		} else {
			par =   {"cf": Math.random(), "userinput": domanda, "doTts": vTTS};
		}
		new $.ajax({
		url: vaAJAX,
		data: par,
		method: "POST",
		dataType: "json",
		success: function (data) {

			$("#vaFormTag").removeClass("loading");

			vaAnswerRoot = data;
			
			if (vaAnswerRoot.KO && vaAnswerRoot.KO !== '') {
				if (console.log) { console.log(vaAnswerRoot.KO); }
				return;
			}
			
			//Se passa l'url viene reindirizzato automaticamente alla pagina di destinazione con tanto di parametri userinput, top e left
			// Solo se la pagina non e' gia' stata caricata e la domanda risulta differente rispetto a quella di onload
			if (vaAnswerRoot.url && !vaExtLoaded)
			{
				location.href = vaAnswerRoot.url + "&sQuestion=" + domanda + "&sLeft=" + vAss.offset().left + "&sTop=" + vAss.offset().top;
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
				vaJsonAudio = vaAnswerBody.audiopath;
				
				//Legge l'emotion di Paolo
				vaEmotion = vaAnswerBody.emotion;
				
				//Inizializza il flusso audio, se presente
				if (vaJsonAudio && vaJsonAudio.length>0)
				{
					vaObj.read(vaJsonAudio,vaEmotion);
					// Mostra l'interfaccia - temporaneamente rimosso
					vaCons.show();
				}
				else
				{
					vaObj.emotion(vaEmotion);
				}
				//Inizializza anche gli altri parametri (ev. mute)
				if (!vaAudioOn) {
					vaAudio[0].mute();
				}

				
				
				// Se l'audio non perviene nonostante venga richiesto mostra un overlay di errore
				if (vaAudioOn && vaJsonAudio == "")
				{
					if (!$("#vaAudioErrore").length)
					{
						vAudioErr = $("<div>")
							.css({"z-index":getNextHighestZindex(), "display":"none"})
							.attr("id","vaAudioErrore")
							.html("Audio momentaneamente non disponibile");
						
						//Inserisce l'errore audio
						vAss.find(".vaContainer > div:first-child").before(vAudioErr);
					}
					vAudioErr.fadeIn(500);
					vAudioErr.delay(5000).fadeOut(500);
				}
				
				//Legge la history
				vaReadHistory(vaAnswerRoot.body.history,2);

				vaJsonAns = vaAnswerBody.text;

				// Elaborazione codici speciali nelle risposte "in linea" di Paolo
				if (vaJsonAns.indexOf ("{")){
					vaJsonAns = vaSpecialAns(vaJsonAns);
				}

				vaInsSentence(vaJsonAns,"Paolo");
				
				//Se esiste almeno un contenuto esteso
				if (vaAnswerBody.extCont)
				{
					//Ricezione contenuti estesi
					vaExtendedContents = true; 
				
					//Svuota completamente i contenitori
					vaExtBody.html("");
					vaExtCons.html("");
					
					// Fa apparire la linguetta
					vaExt.fadeIn(300);
					
					//Popola i vari contenitori e rende eventualmente visibili i pulsanti associati solo se i contenuti sono OK
					vaExtC = vaAnswerBody.extCont;
					
					for (x=0;x<vaExtC.length;x++)
					{
						//Creazione del contenitore e del pulsante 
						// Pulsante
						if (!$("#vaExt" + vaExtC[x].type).length)
						{
							vabt = $("<a>").addClass("consBtn").attr({"href":"javascript:;", "id":"vaExt" + vaExtC[x].type});
							if (x==0) vabt.addClass("selected");
							vabt.click( function() {
								vaExtBody.find(".extCont").hide();
								vaExtCons.find(".consBtn").removeClass("selected");
								$(this).addClass("selected");
								$("#" + $(this).attr("id") + "Cont").fadeIn(300);
							});
							
							vaExtCons.append(vabt);
							
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
						
						//Carica le FAQ
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
					
					//Apre l'extended view
					vaLingSwitch();
					
					//Se c'e' un bottone solo non lo rende linkabile
					vaConsButt = vaExtCons.select("a");
					if (vaConsButt.length == 1) {vaConsButt[0].style.cursor = "default"};
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
			error: function()
			{
				vaInsSentence("Si &egrave; verificato un errore imprevisto: al momento non posso darti una risposta. Riprova tra qualche minuto.","Paolo");
				vaDomanda[0].disabled = false;	
				vaDomanda[0].focus();
			}
		});
	}
}


function vaSpecialAns(ansbody)
{
	// Estrae il testo speciale e rimpiazza ogni occorrenza
	$.each(ansbody.split("{"),function(i,v){
		if (v.indexOf("}")>=0){
		var vaSpecialWord = v.split("}")[0];
		var vaSpecialWordCode = "";

		var vvcPh = {
			"BPM Banking": "vvc_placeholder_561f93c903e3eb94058b45ca",
			"Webank" :"vvc_placeholder_561f9370bef945d9338b4578"
		}

		switch (vaSpecialWord) {
			// CASO CHAT (VUOTO)
			case "":

				vaSpecialWordCode ="<span id='"+ vvcPh[getBank()] +"'></span>";
				// Innesca la funzione legata al pulsante
				
				setTimeout(function(){
					$.getScript("//cloudando.vivocha.com/a/webank/api/vivocha.js");
				},1000);
				break;

			default:

				vaSpecialWordCode = "<span style='color:red'> CODICE \"{"+ vaSpecialWord + "}\" NON RICONOSCIUTO </span>"
				break;

		}

		// Rimpiazzo del codice;
		ansbody = ansbody.replace("{" + vaSpecialWord + "}", vaSpecialWordCode);
		}
	});


	return ansbody ;
}

//Apre l'assistente virtuale
function vaOpen(sLeft,sTop,sQuestion)
{
	wStore.write("vaOpened","true");
	
	// Elemento generico (indipendente dal load per non bloccare tutto).
	vAss = $("#toolAss"); 
	if (!vaInit && !vaFirstCall && !vaExtLoaded && !vaFirstAss) 
	{
		//Carica la cronologia via Ajax
		$.ajax(
			{
				url: vaAJAX, 
				dataType: "json",
				async: false,
				data: {"history": "history"},
				success: function (data) {
					vaLoad(sLeft,sTop,sQuestion, data.body.history);	
				},
				error: function()
				{
					alert("Si e' verificato un errore nel reperimento dello storico della tua conversazione: riprova piu' tardi");
					vaLoad(sLeft,sTop,sQuestion,'');
				}
			});
	} else {
		vaLoad(sLeft,sTop,sQuestion,null);	
	}
	// vAss.css("display","block");
	// $(".tooltcons.toolassistente, .tooltcons.toolassistente2").addClass("opened");
	// makeFocusable(vAss);
}




/* Automazioni assistente virtuale */
vaVideoInit = function(callback){

	var vaObj = $("<video>").attr({"src":"/wscmn/fe/video/paolo_avatar.mp4"});
	vaAudio = $("<audio>").attr({"controls":false});
	
	vaObj.on("canplaythrough",function(){
		if (typeof vaObjInited == "undefined") {
			$("#vaObjCont").removeClass("loading");
			vaObjInited = true;
			vaObj.loop();
		}
	});
	// Associa i vari comportamenti e le emozioni
	$.extend(vaObj,{
			reset : function () {
				if (typeof vaObj.vaLooping != "undefined") clearTimeout(vaObj.vaLooping);
				if (typeof vaObj.vaTalking != "undefined") clearTimeout(vaObj.vaTalking);
			},
			talking : function() {
				vaObj.reset();
				vaObj[0].currentTime = 23.55;
				vaObj[0].play();
				vaObj.vaTalking = setTimeout(function(){vaObj.talking()},7150)
			},
			emotion: function(emotion){
				vaObj.reset();
				var emotime = 1.1;
				var emoduration = 7700;
				switch (emotion) {

					case "happy":
						emotime = 8.7;
					break;

					case "hungry":
						emotime = 16.25;
						emoduration = 7300;
					break;
				}
				vaObj[0].currentTime = emotime;
				vaObj[0].play();
				setTimeout(vaObj.loop,emoduration);
			},
			loop : function() {
				vaObj.reset();
				vaObj[0].currentTime = 30.4;
				vaObj[0].play();
				vaObj.vaLooping = setTimeout(function(){vaObj.loop()},8000)
			},
			read : function(mp3, emotion) {
				vaAudio.empty().attr({"src":mp3,"type":"audio/mpeg"});
				vaAudio[0].play();
				vaObj.talking();
				vaAudio[0].onended = function () {
					vaObj.emotion(emotion);
				}
			}
		 });

		return vaObj;

	};


//Inizializza l'assistente virtuale
function vaLoad(sLeft,sTop,sQuestion, history)
{
	if (!vaInit)
	{

		// Inizializza il video
		vaObj = vaVideoInit();
		$("#vaObjCont").empty().append(vaObj,vaAudio);

		
		//Caricamento eventuali parametri in loading
		vaDiagDefaultHeight = 114;
		//Oggetti comuni
		// vAss.css({"visibility":"hidden", "display" : "block" , "z-index" : getNextHighestZindex()});
		// $("body > div:first-child").before(vAss);
		
		//INIZIALIZZAZIONE OGGETTI ASS. VIRTUALE
		if (vaExtLoaded)
		{
			//Preserva l'allineamento caricandolo dai parametri in pagina
			vAss.css({"margin-top":sTop + "px", "margin-left": sLeft + "px"});
			//Allineamento di default
			/*
			var startlr =  $("#fixedtools").offset();
			var vAssStartLeft = (sLeft) ? sLeft : startlr.left - 262 ;
			var vAssStartTop = (sTop) ? sTop  : startlr.top;
			vAss.css({"top":vAssStartTop + "px", "left": vAssStartLeft + "px"});
			*/
		}
		
		// Pulsante riduzione a icona
		/*
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
		*/


		// Pulsante chiusura della finestra
		/*
		vaClose = $("#virtAss .vaChiudi");
		vaClose.click(function() {
			vAss.fadeOut(300);
			$(".tooltcons.toolassistente, .tooltcons.toolassistente2").removeClass("opened");
			wStore.write("vaOpened","false");
		});
		var vaBody = vAss.find(".vaBody");
		var vaFiletto = vAss.find(".vaFiletto");
		*/
		//## AREA DINAMICA SWF
		
		// Area Assistente virtuale SWF
		
		//Inserisce l'swf dell'assistente virtuale

		//Console
		vaCons = $(".vaConsole");
		
		// Volume on-off
		vaMute = $("#vaMute");
	
		if (!vaAudioOn) vaMute.addClass("off");
		vaMute.click(function ()
		{
			vaChanged = true;
			if(!vaMute.hasClass("off"))
			{
				// Spegne audio
				vaMute.addClass("off");
				vaAudio[0].muted = true;
				vaAudioOn = false;
			}
			else
			{
				// Accende audio
				vaMute.removeClass("off");
				vaAudio[0].muted = false;
				vaAudioOn = true;
			}
		});
		
		// Slider
		vaSlid = $("#vaSlider");
		
		//Funzione per il setting del volume
		vaSetVol = function(vol){
			vaAudio[0].volume = vol/100;
			vaVolume = vol;
		};
		
		vaSlid.empty();
		
		vaSlid.slider ({
		  orientation: "horizontal",
		  min: 0,
		  max: 100,
		  value: vaVolume,
		  slide: function(event, ui) {
			  vaSetVol(ui.value);
			  vaChanged = true;
			}
		  });
		
		
		//## AREA DINAMICA SWF
		
		// Switch mostra/nascondi testo
		vaTextSwitch = $("#vaTextControl");
		
		if (!vaExtLoaded) vaTextSwitch.hide();
		vaTextSwitch.html((vaTsClosed) ? "[+] mostra testo" : "[-] nascondi testo");
		vaTextSwitch.click(function()
		{
			if (this.innerHTML == "[-] nascondi testo")
			{
				this.innerHTML = "[+] mostra testo";
				vaDiag.slideUp(300);
				vaChanged = true;
				vaTsClosed = true;
			}
			else
			{
				this.innerHTML = "[-] nascondi testo";
				vaDiag.slideDown(300);
				setTimeout(vaScrollLast,310);
				vaChanged = true;
				vaTsClosed = false;
			}
		});
		
		// Comportamento del campo
		vaDomanda = $("#vaDom");
		vaDomandaInit = function()
		{
			if (this.value == "fammi una domanda...")
			{
				this.value = "";
				$(this).removeClass("waiting");
			}
		}
		vaDomanda.focus(vaDomandaInit);
		vaDomanda.blur(function()
		{
			if (this.value == "")
			{
				this.value = "fammi una domanda...";
				$(this).addClass("waiting");
			}
		});
		
		// Click sul pulsante
		vaAsk = $("#vaAsking");
		vaAsk.click(function(){vaAsking(vaDomanda.val())});
		// vAss.css({"display":"none","visibility":"visible"});
		
		// Forza il submit
		$("#vaFormTag").on("submit", function() {vaAsking(vaDomanda.val())});
		
		// Oggetti visuale estesa
		vaExt = $("#vaExtended");
		vaLing = $("#vaLinguetta");
		vaExtBody = vaExt.find(".vaExtBody");
		vaExtCons = $("#vaExtConsole");
		
		// Click sulla linguetta
		vaLingSwitch = function()
		{
			if (!vaExt.hasClass("opened"))
			{
				// Mostra l'extended view
				vaExt.addClass("opened");
				vaExtBody.css("width",0);
				if(vaWin.hasClass("vaWindow closed")) vaWinSwitch();
				vaExtBody.animate({width: "262px"}, 200);
				if (vaExtendedContents) 
				{
					vaExtCons.delay(200).fadeIn(300);
				}
			}
			else
			{
				vaExt.removeClass("opened");
				vaExtCons.hide();
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
			vaAllQuest = vaDiag.find("div.sent:not(#vaBenvenuto)");
			for (x=0;x<vaAllQuest.length; x++)
			{
				vaDiagOffset = vaDiagOffset + $(vaAllQuest[x]).outerHeight();
				if (x == vaAllQuest.length-1)
				{
					// se l'ultima risposta è più lunga dello schermo sottrae l'overflow della risposta 
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
				//Allunga già l'interfaccia
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
			//Continua a pingare l'oggetto finche' non risponde
			checkFunc = function()
			{
				// Test con una funzione qualsiasi
				if (vAssObj.setVolume)
				{
					vaAsking(sQuestion, "history");
				}
				else
				{
					setTimeout (checkFunc,1000);
				}
			}
			checkFunc();
		}
		else
		{
			if ((history == null || history[0] == null || history == undefined) && !vaInit)
			{
				//Frase di benvenuto
				vaBenv = $("<div>").addClass("sent").attr("id","vaBenvenuto").html("<p>" + vaMessBenvenuto + "</p>");
				vaDiag.append(vaBenv);
				
				// Allunga l'interfaccia alla defaultHeight
				if (getBank() == "Webank") vaDiag.css("height",122);
				
			}
			else
			{
				vaReadHistory(history, 1);
			}
		}
		vaScrollLast();
		
	}

	vaInit = true;
}

// Apertura dell'oggetto al loading della pagina puntando un JSON di configurazione onload
function vaOpenOnStart(sLeft,sTop,sQuestion)
{
	if(wStore.read("vaOpened")== "true")
	{
		vaExtLoaded = true;
		vaOpen(sLeft,sTop,sQuestion);
	}
}

// Aggiunge una funzione onunload che invia le variabili solo 1 volta e SE necessario
function vaSetSoundPar()
{ 
if (vaChanged)
	{
		//Aggiorna il cookie
		writeCookie ("vaAudioOn", vaAudioOn);
		writeCookie ("vaVolume", vaVolume);
		writeCookie ("vaTsClosed", vaTsClosed);
	}
}

$(window).on("beforeunload", vaSetSoundPar);

/* Check benvenuto */
function vaBenvenuto() {
	
	vaDiagHeight = "";

	// Inizializza messaggio di benvenuto personalizzato a seconda della provenienza
	switch (vaProfile) {
		case "mifid":
			vaMessBenvenuto = "Benvenuto in Webank!<br>Il tuo <b>profilo MiFID</b>, ovvero il livello di esperienza e conoscenza in materia di investimenti finanziari, <b>&egrave; in scadenza</b>.<br>In assenza di dati aggiornati, completi e veritieri Webank non potr&agrave; stabilire se il servizio o lo strumento sia per te appropriato, <b>e non potr&agrave; quindi garantirti la normale operativit&agrave;</b>.<br><a onclick=\"vaAsking('Aggiornamento questionario Mifid')\" href='javascript:;'>Aggiorna subito il questionario MiFID</a>.";
			vaMessBenvenutoUrl = "/swf/vaBenvenuto_mifid.mp3";
			vaDiagHeight = "140px";
		break;
		
		default:
			vaMessBenvenuto = "Benvenuto! Sono Paolo, l'assistente virtuale di " + getBank() + ", e sono qui per <b>rispondere</b> alle tue domande. Scrivi \"<strong class=\"evident\">GUIDAMI</strong>\" nella mia finestra di dialogo e ti accompagner&ograve; all'interno del sito a tutte le funzioni pi&ugrave; utilizzate dai nostri clienti.";
			vaMessBenvenutoUrl = "/swf/vaBenvenuto.mp3";
			vaDiagHeight = "80px";
		break;
	}
	
	//Ingrandisce la casella di testo
	vaOpen();
	vaDiag.css("height",vaDiagHeight);
	//Se occorre l'audio e questo è attivo, lo riproduce quando e se l'assistente e' disponibile
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
var vaProfile = "standard";

// Variabili locali di inizializzazione default (on click)
vaMessBenvenuto = "Buongiorno! Sono Paolo e sono qui per aiutarti e per rispondere alle tue domande. Scrivi domande brevi e semplici in modo che io possa capirti meglio.";

/* MESSAGGI SKINNATI PER BANCA E FUSIONE
vaMessBenvenuto = function() {
	if ((getBank() == "Webank") && (cgi_script != "/webankpub") ) {
		// MESSAGGIO DIVERSO DA COMMITTARE TRA IL 17 ED IL 23/11/2014
		// return "Buongiorno! Sono Paolo e sono qui per aiutarti e per rispondere alle tue domande.<br>Il <b>23 novembre</b> &egrave; prevista la <a onclick=\"vaAsking('fusione')\" href='javascript:;'>fusione per incorporazione</a> di <b>Webank</b> in <b>BPM</b>. Ti ricordo che l'accesso al sito www.webank.it, alle piattaforme T3 e alle nostre app non sar&agrave; disponibile <b>dalle 22.30 del 21 novembre</b> e torner&agrave; ad essere operativo il <b>24 novembre</b>.";
		// MESSAGGIO POST-FUSIONE
		return "Buongiorno! Sono Paolo e sono qui per aiutarti e per rispondere alle tue domande.<br>Come ti abbiamo comunicato nelle scorse settimane, il <b>23 novembre</b> &egrave; avvenuta la fusione per incorporazione di <b>Webank</b> in <b>BPM</b>: <a onclick=\"vaAsking('- nuovo iban')\" href='javascript:;'>scopri subito il tuo nuovo IBAN</a> e tutto quello che c'&egrave; da sapere.";
	}
	else {
		return "Buongiorno! Sono Paolo e sono qui per aiutarti e per rispondere alle tue domande. Scrivi domande brevi e semplici in modo che io possa capirti meglio.";
	}
}();
*/


// Audio di default, eventualmente viene sovrascritto se presente il cookie
if (readCookie("vaAudioOn") != "")
{
	//Valori da cookie
	var vaAudioOn = (readCookie("vaAudioOn") == "true")? true : false;
	var vaVolume = readCookie("vaVolume");
	var vaTsClosed = (readCookie("vaTsClosed") == "true")? true : false;
}	
else
{
	//Valori di default
	var vaAudioOn = true;
	var vaVolume = 50;
	var vaTsClosed = false;
}

// Test onload messaggio di benvenuto
addEvent(window,"load",function(){if (vaFirstAss) vaBenvenuto();});

