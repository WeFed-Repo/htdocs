// VARIABILI DI CONFIGURAZIONE
//Indirizzo per chiamate AJAX
var vaAJAX = (window.location.toString().indexOf("librerie") > 0 || window.location.toString().indexOf("/librerie/")) ? "/librerie/include/commons/ajax/priv_va.php" : cgi_script + "/common/virtass/virtass.jsp";
var vaInit = false,
	vaChanged = false,
	vaExtLoaded = false,
	vaFirstCall = false,
	vaFirstAss = false,
	vaProfile = "standard",
	vaIsMobile = ($(window).width()<1024)? true : false;

var vaAvatar = {
	// Variabili globali (milestone,duration)
	mileLoop :[30.4,8.3],
	mileLip : [23.6,7.0],
	emotions :{
		"neutral": [1.4,7.4],
		"happy" : [8.8,7.5],
		"angry" : [16.2,7.4]
	},
	inited: false,
	init: function() {
		// Inizializza il video
		vaVideoTag= $("<video>").attr("poster","/wscmn/fe/img/paolo_avatar.jpg");
		vaVideoSource = $("<source>").attr({	
			"src":"/wscmn/fe/video/paolo_avatar.mp4",
			"type":"video/mp4"
			});
		vaAudioTag = $('<audio>').attr("autoplay","autoplay");

		//Mette il video online 
		$("#vaSpace").empty().append(vaVideoTag.append(vaVideoSource),vaAudioTag);
		// Quando il video e' completamente scaricato lo inizializza
		vaVideoTag.on("loadedmetadata", function(){
			vaVid = $("#vaSpace video")[0];
			// Loop da "fermo"
			vaAvatar.getPlay(vaAvatar.mileLoop,true);
			vaAvatar.inited = true;
		});
		vaAudio = vaVid = $("#vaSpace audio")[0];
		
	},
	getPlay : function(vidparams,loop) {
		if(vaAvatar.inited) {
			// Distrugge l'evento loop corrente (qualsiasi esso sia);
			if (typeof vaLooping != "undefined") clearTimeout(vaLooping);
			vaVid.currentTime = vidparams[0];
			vaVid.play();
			if (loop) {
				vaLooping = setTimeout(function(){vaVid.pause();vaAvatar.getPlay(vidparams,true)}, vidparams[1] * 1000);
			}
		}
	},
	talk : function() {
		vaVid.pause();
		vaAvatar.getPlay(vaAvatar.mileLip,true);
	},
	setEmotion : function(emotion) {
		if(vaAvatar.inited) {
			if (typeof emotion == "undefined") {
				emotion = "neutral"}
			else
				{
					if (emotion != "neutral" && emotion != "happy" && emotion != "angry" ) emotion = "neutral";
				}
			if (typeof vaLooping != "undefined") clearTimeout(vaLooping);
			vaAudio.pause();
			vaVid.currentTime = 0;
			vaAvatar.getPlay(vaAvatar.emotions[emotion]);
			vaLooping = setTimeout(function(){vaAvatar.getPlay(vaAvatar.mileLoop,true)},vaAvatar.emotions[emotion][1] * 1000);
		}
	},
	setUrl : function (mp3,emotion) {
		if (!vaIsMobile && vaAvatar.inited) {
			vaAudio.src = mp3;
			vaAvatar.talk();
			$(vaAudio).on("ended", function(){
			    vaVid.currentTime = 0;
			    vaAvatar.setEmotion(emotion);
			});
		}
	},
	setVolume : function(vol) {
		if (!vaIsMobile && vaAvatar.inited) {
			vaAudio.volume = vol/100;
		}
	},
	stop: function() {
		if (!vaIsMobile && vaAvatar.inited) {
			vaAudio.pause();
			vaAvatar.getPlay(vaAvatar.mileLoop,true);
		}
	}
}

// Funzione con immissione domanda (può essere passato dall'esterno tramite "domanda")
function vaAsking(domanda, history)
{
	// Se l'utente ha effettivamente fatto una domanda
	if (domanda != "" && domanda != "Fammi una domanda...")
	{
		
		$("#vaAudioErrore").hide();
	
		//Altezza casella dialogo in azione
		vaTextSwitch.show();
		
		// Rimuove la frase di Benvenuto se presente
		if ($("#vaBenvenuto").length) { $("#vaBenvenuto").hide(); }
		
		//Nasconde l'extended view e la reinizializza
		vAss.removeClass("extended extended-min extended-smart");
		vaExtendedContents = false;
		
		//Reinizializza vTTS 
		vTTS = ($("#vaSliderWrapper").hasClass("mute")) ? false : true;
				
		//## Nasconde quanto presente nella casella di dialogo (togliere hide per lasciare cronologia)
		// vaDiag.select(".sent").each (function(vs) {vs.hide()});
		// vaDiag.animate({ height: vaDiagDefaultHeight + "px" }, 300);
		vaInsSentence = function (sent, user)
		{
			var newPhrase = $("<div>").addClass("sent").html("<p>" + ((user!="Paolo")? "Tu: " : "") + sent + "</p>");
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
			par = {"cf": Math.random(), "history": "history", "doTts": vTTS};
		} else {
			par = {"cf": Math.random(), "userinput": domanda, "doTts": vTTS};
		}
		new $.ajax({
		url: vaAJAX,
		data: par,
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
					if(vaAudioOn) {
							vaAvatar.setUrl(vaJsonAudio,vaEmotion)
						}
					else
						{
							vaAvatar.setEmotion(vaEmotion);
						}
					// Mostra l'interfaccia - temporaneamente rimosso
					vaCons.show();
				}
				else
				{
					vaAvatar.setEmotion(vaEmotion);
				}
				//Inizializza anche gli altri parametri (ev. mute)
				if (vaAudioOn) {
					vaAvatar.setVolume(vaVolume);
				}
				else
				{
					vaAvatar.setVolume(0);
				}
				
				
				// Se l'audio non perviene nonostante venga richiesto mostra un overlay di errore
				if (vaAudioOn && vaJsonAudio == "")
				{
					
					if (!$("#vaAudioErrore").length)
					{
						vAudioErr = $("<div>")
							.css({"z-index":getNextHighestZindex(), "display":"none"})
							.attr("id","vaAudioErrore")
							.html("audio momentaneamente non disponibile");
						
						//Inserisce l'errore audio
						$("#vaSpace").before(vAudioErr);
					}
					vAudioErr.fadeIn(500);
					$("#vaSliderWrapper, #vaTextControl").hide();
				}
				else
				{
					$("#vaSliderWrapper, #vaTextControl").show();
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
					vaExtBody.empty();
					
					// Fa apparire la linguetta
					vAss.addClass("extended");
					
					//Popola i vari contenitori e rende eventualmente visibili i pulsanti associati solo se i contenuti sono OK
					vaExtC = vaAnswerBody.extCont;
					
					for (x=0;x<vaExtC.length;x++)
					{
						//Creazione del contenitore e del pulsante 
						// Pulsante
						if (!$("#vaExt" + vaExtC[x].type).length)
						{
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
							vaExtBody.append(vaco);
						}
						
						//Carica le FAQ
						if (vaExtC[x].type == "Faq")
							{
								vaFaqLi = $("<li>").html("<a href=\"javascript:;\">"+vaExtC[x].title+"</a>");
								//Click sulla FAQ
								vaFaqLi.click(function()
								{
									var FaqValue = $(this).find("a")[0].innerHTML;
									// Inserisce il valore nel campo e fa partire la domanda
									vaDomandaInit();
									vaDomanda.val(FaqValue);
									vaAsking(FaqValue);
								});
								vaFaqUl.append(vaFaqLi);
							}
					}
					
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

				vaSpecialWordCode = "<span style='color:red'> CODICE \"{"+ vaSpecialWord + "}\" NON RICONOSCIUTO </span>";
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

	$("#toolbtnpaolo").parent("li").addClass("selected");
	wStore.write("vaOpened","true");

	// Elemento generico (indipendente dal load per non bloccare tutto).
	vAss = $("#virtAss"); 
	
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
				fail: function()
				{
					alert("Si e' verificato un errore nel reperimento dello storico della tua conversazione: riprova piu' tardi");
					vaLoad(sLeft,sTop,sQuestion,'');
				}
			});
	} else {
		vaLoad(sLeft,sTop,sQuestion,null);	
	}
	// $("body").prepend(vAss);
	
	$(".tooltcons.toolassistente, .tooltcons.toolassistente2").addClass("opened");
	// makeFocusable(vAss);
}

//Inizializza l'assistente virtuale
function vaLoad(sLeft,sTop,sQuestion, history)
{
	
	if (!vaInit)
	{
		
		//Caricamento eventuali parametri in loading
		// vaDiagDefaultHeight = 114;
		//Oggetti comuni
		// vAss.show();
		// vAss.css({"visibility":"hidden", "display" : "block" , "z-index" : getNextHighestZindex()});
		// $("body").prepend(vAss);
		
		//INIZIALIZZAZIONE OGGETTI ASS. VIRTUALE
		if (!vaExtLoaded)
		{
			
			//Allineamento di default
			var sTop = tooldefaultpos[1];
			var sLeft = tooldefaultpos[0];
		}
		//Preserva l'allineamento caricandolo dai parametri in pagina
		vAss.css({"top":sTop + "px", "left": sLeft + "px"});
		

		// Pulsante riduzione a icona
		vaWin = $("#virtAss .vaWindow");
		vaWinSwitch = function() {
			if (vAss.hasClass("mini"))
			{
				// Espande
				vAss.removeClass("mini")	
				vAss.css("left",vAss.offset().left - 153 + "px");
			}
			else
			{
				// Contrae
				vAss.addClass("mini")
				vAss.css("left",vAss.offset().left + 153 + "px");	
			}
		}
		vaWin.click(vaWinSwitch); 
		
		// Pulsante chiusura della finestra
		vaClose = $("#virtAss .vaChiudi");
		vaClose.click(function() {
			/* $("#toolbtnpaolo").trigger("click"); */
			wStore.write("vaOpened","false");
			/* Interrompe l'audio se necessario */
			vaAvatar.stop();
		
		});
		var vaBody = vAss.find(".vaBody");
		var vaFiletto = vAss.find(".vaFiletto");
		
		//## AREA DINAMICA SWF
		vaSpacex = $("#vaSpace");
		// Area Assistente virtuale SWF
		/*
		vaIsSwf = true; 
		*/
		//Inserisce l'swf dell'assistente virtuale
		//if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		/*
		var vaSwf = "/wscmn/swf/paolo_avatar.swf" ;
		try {
			vaFlash = new SWFObject (vaSwf, "va_flash", "266", "225", "8", "#dedede");
			vaFlash.addParam("wmode", "transparent");
			vaFlash.addParam("allowScriptAccess","always");
			vaFlash.addParam("quality", "high");
			vaFlash.addParam("FlashVars","");
			vaFlash.write("vaSpace");
			//}
		}
		catch (error) {
			vaIsSwf = false;
		}
		finally {
			if(thisMovie("va_flash"))
			{
				vAssObj = thisMovie("va_flash");
				vaIsSwf = true;
			}
			else
			{
				//Istanza l'audio player HTML5 (se possibile)
				vaSpacex = $("#vaSpace");
				vaIsSwf = false;
				vAssObj = $('<audio>').attr("autoplay","autoplay");
				// Audioplayer
				vaSpacex.append(vAssObj);
				// Sostitutivo immagine
				vaImgSost = "/wscmn/img/ret/virtass.jpg";
				vaSpacex.append($("<img>").attr("src",vaImgSost));
			}
		}
		*/

		// Inserisce l'oggetto assistente virtuale o istanzia un oggetto alternativo
		/*
		vaSpacex = $("#vaSpace");
		vaVideoPath = "";
		vaAudio = $('<audio>').attr("autoplay","autoplay");
		vAssObj = {}
		*/
		
		// AVATAR
		vaAvatar.init();
		

		//Console
		vaCons = $(".vaConsole");
		
		// Slider
		vaSlid = $("#vaSlider");
		//Funzione per il setting del volume
		vaSetVol = function(vol){
			vaAvatar.setVolume(vol);
			vaVolume = vol;
		};
		vaSlid.empty();
		vaSlidWrap = $("#vaSliderWrapper");
		vaSlid.slider ({
		  orientation: "vertical",
		  min: 0,
		  range: "min",
		  max: 100,
		  value: vaVolume,
		  slide: function(event, ui) {
			  vaChanged = true;
			  vaVolume = ui.value;
			  if (ui.value == 0)
			  {
			  		vaSlidWrap.removeClass("volmax").addClass("mute");
			  		vaAudioOn = false;
			  		vTTS = false;
			  		vaAvatar.setVolume(0);
			  }
			  else
			  {
			  		vTTS = true;
			  		vaSlidWrap.removeClass("mute volmax")
			  		vaAudioOn = true;
			  		if (ui.value>50) {
			  			vaSlidWrap.addClass("volmax")
			  		}
			  		vaSetVol(ui.value);

					
			  }
			}
		  });
		vaSlid.find(".ui-slider-handle").append(
			$("<i>").addClass("icon icon-audio_max"),
			$("<i>").addClass("icon icon-audio_middle"),
			$("<i>").addClass("icon icon-audio_off")
		);
		vaSlidWrap.show().addClass(((vaVolume==0)? "mute" : "")).addClass(((vaVolume>0)? "volmax" : ""));
		
		
		//## AREA DINAMICA SWF
		// Switch mostra/nascondi testo
		vaTextSwitch = $("#vaTextControl");
		
		// if (!vaExtLoaded) vaTextSwitch.hide();
		vaTextSwitch.click(function()
		{
			var btn = $(this);
			if (vaDiag.is(":visible")){

				btn.addClass("hidetext")
				vaDiag.slideUp(300);
				vaChanged = true;
				vaTsClosed = true;
			}
			else
			{
				btn.removeClass("hidetext")
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
			var vD = $(this);
			if (vD.val() == "Fammi una domanda...")
			{
				vD.val("").parents("form").removeClass("waiting");
			}
		}
		vaDomanda.focus(vaDomandaInit);
		vaDomanda.blur(function()
		{
			var vD = $(this);
			if (vD.val() == "")
			{
				vD.val("Fammi una domanda...").parents("form").addClass("waiting");
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
		$("#vaLinguetta").click(function()
			{
				if (vAss.hasClass("extended-min"))
				{
					vAss.removeClass("extended-min")
				}
				else
				{
					vAss.addClass("extended-min");
			}});
		vaExtTitle = $("#vaExtTitle").click(function(){vAss.toggleClass("extended-smart")});
		vAss.find(".vaContainer .titolo").click(function(){vAss.removeClass("extended-smart")});
		vaExtBody = vaExt.find(".vaExtBody");
		
		
		//Blocco dei testi
		vaDiag = $("#vaDialog");

		if (vaTsClosed == "true")
		{
			vaDiag.hide();
			vaTextSwitch.show();
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
				// vaDiag.animate ({"height" : vaDiagDefaultHeight + "px"},300);
				for (x=history.length-historyStop; x>=0;x--)
				{
					if (vaDiag.find("div:first-child").length > 0)
					{
						vaDiag.find("div:first-child").before($("<div>").addClass("sent answer").html("<p><strong>Paolo:</strong> " + history[x].answer.split("{}").join("") + "</p>"));
					}
					else
					{
						vaDiag.append($("<div>").addClass("sent answer").html("<p>" + history[x].answer.split("{}").join("") + "</p>"));
					}
					vaDiag.find("div:first-child").before($("<div>").addClass("sent").html("<p>Tu: " + history[x].question + "</p>"));
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
			if (vaIsSwf) {
				checkFunc();
			}
			else
			{
				vaAsking(sQuestion, "history");
			}
		}
		else
		{
			if ((history == null || history[0] == null || history == undefined) && !vaInit)
			{
				//Frase di benvenuto
				vaBenv = $("<div>").addClass("sent answer").attr("id","vaBenvenuto").html("<p>" + vaMessBenvenuto + "</p>");
				vaDiag.append(vaBenv);
				
				// Allunga l'interfaccia alla defaultHeight
				// if (getBank() == "Webank") vaDiag.css("height",122);
				
			}
			else
			{
				vaReadHistory(history, 1);
			}
		}
		vaScrollLast();
	}
	vaInit = true;
	vAss.show();
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
		wStore.write("vaAudioOn", vaAudioOn);
		wStore.write("vaVolume", vaVolume);
		wStore.write("vaTsClosed", vaTsClosed);
	}
}

$(window).on("beforeunload", vaSetSoundPar);

/* Check benvenuto */
function vaBenvenuto() {
	

	// Inizializza messaggio di benvenuto personalizzato a seconda della provenienza
	switch (vaProfile) {
		case "mifid":
			vaMessBenvenuto = "Benvenuto in Webank!<br>Il tuo <b>profilo MiFID</b>, ovvero il livello di esperienza e conoscenza in materia di investimenti finanziari, <b>&egrave; in scadenza</b>.<br>In assenza di dati aggiornati, completi e veritieri Webank non potr&agrave; stabilire se il servizio o lo strumento sia per te appropriato, <b>e non potr&agrave; quindi garantirti la normale operativit&agrave;</b>.<br><a onclick=\"vaAsking('Aggiornamento questionario Mifid')\" href='javascript:;'>Aggiorna subito il questionario MiFID</a>.";
			vaMessBenvenutoUrl = "/swf/vaBenvenuto_mifid.mp3";

		break;
		
		default:
			vaMessBenvenuto = "Benvenuto! Sono Paolo, l'assistente virtuale di " + getBank() + ", e sono qui per <b>rispondere</b> alle tue domande. Scrivi \"<strong class=\"evident\">GUIDAMI</strong>\" nella mia finestra di dialogo e ti accompagner&ograve; all'interno del sito a tutte le funzioni pi&ugrave; utilizzate dai nostri clienti.";
			vaMessBenvenutoUrl = "/swf/vaBenvenuto.mp3";

		break;
	}
	
	vaOpen();

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
	setTimeout(startMp3,200);
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


// Variabili locali di inizializzazione default (on click)
vaMessBenvenuto = "Buongiorno! Sono Paolo e sono qui per aiutarti e per rispondere alle tue domande. Scrivi domande brevi e semplici in modo che io possa capirti meglio.";

// Audio di default, eventualmente viene sovrascritto se presente il cookie
if (wStore.read("vaAudioOn") != "")
{
	//Valori da cookie
	vaAudioOn = (wStore.read("vaAudioOn")=="true")? true : false;
	vaVolume = wStore.read("vaVolume") ;
	vaTsClosed = wStore.read("vaTsClosed"); 
}	
else
{
	//Valori di default
	vaAudioOn = true;
	vaVolume = 50;
	vaTsClosed = "false";
}

// Test onload messaggio di benvenuto
$(window).on("load", function () { if (vaFirstAss) vaBenvenuto(); });


