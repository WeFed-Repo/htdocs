vaAJAX = "",
vaAudioPath = "";

// Variabili globali 
var vaIsMobile = ($(window).width()<1024)? true : false;

// Porting funzioni esclusive
function thisMovie(movieName) {
    var movie = $("#" + movieName)[0];
    if (movie) return movie;
    else if ($.browser.msie) {
        return window[movieName];
    } else {
        return document[movieName];
    }
}

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


// vaAvatar
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
	started: false,
	init: function() {
		// Inizializza il video
		vaVideoTag= $("<video>").attr({"poster":"/WB/fe/img/paolo_avatar.jpg","muted":"muted"});
		vaVideoSource = $("<source>").attr({	
			"src":"/WB/fe/video/paolo_avatar.mp4",
			"type":"video/mp4"
			});
		vaAudioTag = $('<audio>').attr("autoplay","autoplay");

		//Mette il video online 
		$("#vaSpace").empty().append(vaVideoTag.append(vaVideoSource),vaAudioTag);
		// Quando il video e' completamente scaricato lo inizializza
		vaVid = $("#vaSpace video")[0];
		vaAudio = $("#vaSpace audio")[0];
		vaVideoTag.on("loadedmetadata", function(){
			// Loop da "fermo"
			vaAvatar.getPlay(vaAvatar.mileLoop,true);
		});
		vaAvatar.inited = true;
		
		// Forzatura per inizializzazione audio onload
		vaVideoTag.on("canplaythrough", function(){
			// Se sta "parlando" ma non e' ancora partito la prima volta
			if(!vaAvatar.started){
				if(!vaAudio.paused) {
					vaAvatar.talk();
				}
				else {
					vaAvatar.getPlay(vaAvatar.mileLoop,true);
				}
				vaAvatar.started = true;
			}
		});
	
	},
	getPlay : function(vidparams,loop) {
		if(vaAvatar.inited) {
			// Distrugge l'evento loop corrente (qualsiasi esso sia);
			try {
				if (typeof vaLooping != "undefined") clearTimeout(vaLooping);
				vaVid.currentTime = vidparams[0];
				vaVid.play();
				if (loop) {
					vaLooping = setTimeout(function(){vaVid.pause();vaAvatar.getPlay(vidparams,true)}, vidparams[1] * 1000);
				}
			}
			catch(err) {
				console.log("Errore nel flusso video:  " + err)
			}
		}
	},
	talk : function() {
		// vaVid.pause();
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
			
			vaVid.currentTime = 0;
			vaAvatar.getPlay(vaAvatar.emotions[emotion]);
			vaLooping = setTimeout(function(){vaAvatar.getPlay(vaAvatar.mileLoop,true)},vaAvatar.emotions[emotion][1] * 1000);
		}
	},
	setUrl : function (mp3,emotion) {
		if (!vaIsMobile) {
			vaAudio.src = mp3;
			vaAvatar.talk();
			$(vaAudio).on("ended error", function(){
			    vaVid.currentTime = 0;
			    vaAvatar.setEmotion(emotion);
			});
			$(vaAudio).on("error",function(){
				console.log("File audio non raggiungibile: " + mp3);
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
	},
	pauseAll: function() {
		if (!vaIsMobile && vaAvatar.inited) {
			vaAudio.pause();
			vaVid.pause();
		}
	}
}

// Funzione con immissione domanda (può essere passato dall'esterno tramite "domanda")
function vaAsking(domanda, history)
{
	// Se l'utente ha effettivamente fatto una domanda
	if (filterText(domanda) != "" && domanda != "fammi una domanda...")
	{
		//Altezza casella dialogo in azione
		vaTextSwitch.show();

		// Pulisce la domanda
		domanda = filterText(domanda);
		
		// Rimuove la frase di Benvenuto se presente
		if ($("#vaBenvenuto").length) { $("#vaBenvenuto").hide(); }
		
		//Nasconde l'extended view e la reinizializza
		vAss.removeClass("extended extended-opened");
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
		var par = new FormData();
		if(vaExtLoaded) {

			par.append("cf", Math.random());
			// par.append("history", "history"); --- Cambio su richiesta sviluppo
			par.append("historyFromRedirect", "history");
			par.append("doTts", vTTS);

		} else {

			par.append("cf", Math.random());
			par.append("userinput", domanda);
			par.append("doTts", vTTS);

		}

		// Variabili addizionali per VR
		if (typeof vaBanca != "undefined") par.append("vaBanca", vaBanca);
		if (typeof vaCodiceutente != "undefined") par.append("vaCodiceutente", vaCodiceutente);
		if (typeof vaPiattaforma != "undefined") par.append("vaPiattaforma", vaPiattaforma);
		if (typeof vaServizi != "undefined") par.append("vaServizi", vaServizi);
		if (typeof vaRicontrattualizzato != "undefined") par.append("vaRicontrattualizzato", vaRicontrattualizzato);
		if (typeof vaCampagne != "undefined") par.append("vaCampagne", vaCampagne);


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
				location.href = vaRedirectUrl(vaAnswerRoot.url,encodeURIComponent(btoa(filterText(domanda))), vAss.offset().left, vAss.offset().top);

				/* Redirect "rivisto per ancora" prima del 05-11
				var redurl = vaAnswerRoot.url,
					redanch = "";
				if (redurl.split("#").length>1) {
					redanch="#" + redurl.split("#")[1]
					redurl = redurl.split("#")[0];
				} 
				if (redurl.indexOf("?")<=0){
					redurl +="?"
				}
				
				location.href = redurl + "&sQuestion=" + encodeURIComponent(btoa(filterText(domanda))) + "&sLeft=" + vAss.offset().left + "&sTop=" + vAss.offset().top + redanch;
				*/
				
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

				// vaJsonAudio = (vaAnswerBody.audiopath)? ((typeof wrp_home_direct != "undefined")? wrp_home_direct : "/WEBEXT/wrapped/goToHomeDirect") + vaAnswerBody.audiopath : "";
				// Parametri testing locale: vaJsonAudio = (vaAnswerBody.audiopath)? ((typeof wrp_home_direct != "undefined")? wrp_home_direct : "") + vaAnswerBody.audiopath : "";
				vaJsonAudio = (vaAnswerBody.audiopath)? vaAudioPath + vaAnswerBody.audiopath : "";

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
							.html("Audio momentaneamente non disponibile");
						
						//Inserisce l'errore audio
						vAss.find("#vaSpace").prepend(vAudioErr);
					}
					vAudioErr.fadeIn(500);
					vAudioErr.delay(5000).fadeOut(500);
				}
				
				//Legge la history
				vaReadHistory(vaAnswerRoot.body.history,2);

				vaJsonAns = vaAnswerBody.text;

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
										$("<img>").attr("src","/WB/fe/img/va_survey.gif"),
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
					
					//Se c'e' un bottone solo non lo rende linkabile
					vaConsButt = vaExtCons.select("a");
					if (vaConsButt.length == 1) {vaConsButt[0].style.cursor = "default"};

					vAss.addClass("extended extended-opened");
					vaRepos();

				}
			}
			else
			{
				vaReadHistory(vaAnswerRoot.body.history,1);
			}
				
				vaDomanda[0].disabled = false;	
				vaDomanda[0].focus();
				$("#vaForm").removeClass("waiting");
			},
			//Chiamata fallita
			fail: function()
			{
				vaInsSentence("Si &egrave; verificato un errore imprevisto: al momento non posso darti una risposta. Riprova tra qualche minuto.","Paolo");
				vaDomanda[0].disabled = false;	
				vaDomanda[0].focus();
				$("#vaForm").removeClass("waiting");
			}
		});
	}
}


//Apre l'assistente virtuale
function vaOpen(sLeft,sTop,sQuestion)
{
	
	//Indirizzo per chiamate AJAX
	vaAJAX = (typeof urlVa != "undefined") ? urlVa :  "/include/ajax/assistente_virtuale.php";

	wStore.write("vaOpened","true");

	// Elemento generico (indipendente dal load per non bloccare tutto).
	vAss = $("#virtAss").hide(); 


	if (!vaInit && !vaExtLoaded && !vaFirstAss) 
	{
		var par = new FormData();
		par.append("history", "history");

		// Variabili addizionali per VR
		if (typeof vaBanca != "undefined") par.append("vaBanca", vaBanca);
		if (typeof vaCodiceutente != "undefined") par.append("vaCodiceutente", vaCodiceutente);
		if (typeof vaPiattaforma != "undefined") par.append("vaPiattaforma", vaPiattaforma);
		if (typeof vaServizi != "undefined") par.append("vaServizi", vaServizi);
		if (typeof vaRicontrattualizzato != "undefined") par.append("vaRicontrattualizzato", vaRicontrattualizzato);
		if (typeof vaCampagne != "undefined") par.append("vaCampagne", vaCampagne);


		//Carica la cronologia via Ajax
		$.ajax(
			{
				url: vaAJAX, 
				enctype : "multipart/form-data",
				processData : false,
				contentType : false,
				data: par,
				method: "POST",
				dataType: "json",
				success: function (data) {
					vaLoad(sLeft,sTop,filterText(sQuestion), data.body.history);	
				},
				fail: function()
				{
					alert("Si e' verificato un errore nel reperimento dello storico della tua conversazione: riprova piu' tardi");
					vaLoad(sLeft,sTop,filterText(sQuestion),'');
				}
			});
	} else {
		vaLoad(sLeft,sTop,sQuestion,null);	
	}
	$("body").prepend(vAss);
	// vAss.show();
	$(".tooltcons.toolassistente, .tooltcons.toolassistente2").addClass("opened");
	makeFocusable(vAss);
}

//Inizializza l'assistente virtuale
function vaLoad(sLeft,sTop,sQuestion, history)
{
	if (!vaInit)
	{
		//Caricamento eventuali parametri in loading
		vaDiagDefaultHeight = 180;
		//Oggetti comuni
		vAss.css({"visibility":"hidden", "z-index" : getNextHighestZindex()});
		$("body").prepend(vAss);
		
		//INIZIALIZZAZIONE OGGETTI ASS. VIRTUALE
		if (!vaExtLoaded)
		{
			vAss.css(toolInitPos);
		}
		else
		{
			//Preserva l'allineamento caricandolo dai parametri in pagina
			vAss.css({"top":sTop + "px", "left": sLeft + "px"});
		}
		
		vAss.draggable({
			handle:"#vaTitle",
			scroll:true,
			containment: "document",

			start: function(event,ui){
				$(this).data("startingScrollTop", $('html, body').scrollTop());
			},
			drag: function(event,ui) {
				ui.position.top -= parseInt($(this).data("startingScrollTop"), 10);
			}
		});

		//Se il sistema operativo e' linux cambia il letter spacing
		if (navigator.platform.indexOf("Linux")>=0)
		{
			$("#vaTitle").css("letter-spacing","-1px");
		}
		
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
			$(".tooltcons.toolassistente, .tooltcons.toolassistente2").removeClass("opened");
			wStore.write("vaOpened","false");
			/* Interrompe l'audio se necessario */
			vaAvatar.stop();
			
		});
		var vaBody = vAss.find(".vaBody");
		var vaFiletto = vAss.find(".vaFiletto");
		
		//## AREA DINAMICA SWF
		
		// Area Assistente virtuale SWF
		vaIsSwf = true;
		
		//Inserisce l'swf dell'assistente virtuale
		// AVATAR
		vaAvatar.init();

		//Console
		vaCons = $(".vaConsole");
		
		// Volume on-off
		vaMute = $("#virtAss .vaAudio").hide();
		
		// Slider
		vaSlid = $("#vaSlider");
		
		//Funzione per il setting del volume
		vaSetVol = function(vol){
			vaAvatar.setVolume(vol);
			vaVolume = vol;
		};
		
		vaSlid.empty().wrap($("<div>").attr("id","vaSliderWrapper"));;
		vaSlidWrap = $("#virtAss").find("#vaSliderWrapper");

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
		
		if (!vaExtLoaded) vaTextSwitch.hide();
		vaTextSwitch.append($("<span>").addClass("switch").append($("<i>").addClass("icon icon-show_text"),$("<i>").addClass("icon icon-hide_text"))).addClass((vaTsClosed) ? "closed" : "opened");


		vaTextSwitch.click(function()
		{
			var bt = $(this);
			if (bt.hasClass("opened"))
			{
				bt.removeClass("opened").addClass("closed");
				vaDiag.slideUp(300);
				vaChanged = true;
				vaTsClosed = true;
			}
			else
			{
				bt.removeClass("closed").addClass("opened");
				vaDiag.slideDown(300);
				setTimeout(vaScrollLast,310);
				vaChanged = true;
				vaTsClosed = false;
			}
		});
		
		
		// Comportamento del campo
		$("#vaForm").addClass("waiting");
		vaDomanda = $("#vaDom");

		vaDomandaInit = function()
		{
			var inp = $(this);
			if (inp.val() == "fammi una domanda...")
			{
				inp.val("");
				$("#vaForm").removeClass("waiting");
			}
		}
		vaDomanda.focus(vaDomandaInit);
		vaDomanda.blur(function()
		{
			var inp = $(this);
			if (inp.val() == "")
			{
				inp.val("fammi una domanda...");
				$("#vaForm").addClass("waiting");
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
		// Appende il titoletto "Contenuti correlati"
		vaExtTitle = $("<span>").addClass("vaExtTitle").html("Contenuti correlati");
		if(!vaExt.find(".vaExtTop .vaExtTitle").length) vaExt.find(".vaExtTop").prepend(vaExtTitle);

		vaExtBody = vaExt.find(".vaExtBody");
		vaExtCons = $("#vaExtConsole");


		// Click sulla linguetta
		vaLingSwitch = function()
		{
			if (!vAss.hasClass("extended-opened"))
			{
				vAss.addClass("extended-opened")
			}
			else
			{
				vAss.removeClass("extended-opened")
			}

			// Eventuale riposizionamento nel contenitore
			setTimeout(vaRepos,100);

		}
		vaLing.click(vaLingSwitch);
		
		// Riposizionamento
		vaRepos = function(){
			// Se l'assistente non sta nello schermo, lo riposiziona
			var vaO = vAss.offset(),
				vaDW = vAss.width(),
				vaDH = vAss.height(),
				win = $(window);
			console.log()
			if (vaO.top<0) vAss.css("top",0);
			if ((vaO.left + vaDW)> win.width()) vAss.css("left",win.width()-vaDW + "px");
		}
		$(window).on("resize",vaRepos);

		//Blocco dei testi
		vaDiag = $("#vaDialog");

		if (vaTsClosed)
		{
			vaDiag.hide();
		}
		
		
		//Funzione per scrolling contenuti
		vaScrollLast = function()
		{
			var lastQ = vaDiag.find(".sent").last();
			vaDiag.scrollTop(0);
			vaDiag.scrollTop(lastQ.offset().top - lastQ.height());
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
				if (vaAvatar.setVolume)
				{
					vaAsking(sQuestion, "history");
				}
				else
				{
					setTimeout (checkFunc,1000);
				}

			}
			checkFunc()
		}
		else
		{
			if ((history == null || history[0] == null || history == undefined) && !vaInit)
			{
				//Frase di benvenuto
				vaBenv = $("<div>").addClass("sent").attr("id","vaBenvenuto").html("<p>" + vaMessBenvenuto + "</p>");
				vaDiag.append(vaBenv);
				
			}
			else
			{
				vaReadHistory(history, 1);
			}
		}
		vaScrollLast();
	}
	vAss.show();
	vaInit = true;
	if(sQuestion && !vaExtLoaded) vaAsking(sQuestion);
}

// Apertura dell'oggetto al loading della pagina puntando un JSON di configurazione onload
function vaOpenOnStart(sLeft,sTop,sQuestion)
{
	if(wStore.read("vaOpened") == "true")
	{
		vaExtLoaded = true;
		vaOpen(sLeft,sTop,atob(sQuestion));
		//Caso con URL non decodificato
		// vaOpen(sLeft,sTop,atob(decodeURIComponent(sQuestion)));

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
			vaMessBenvenuto = "Benvenuto in Webank!<br>Il tuo <b>profilo MiFID</b>, ovvero il livello di esperienza e conoscenza in materia di investimenti finanziari, <b>&egrave; in scadenza</b>.<br>In assenza di dati aggiornati, completi e veritieri Webank non potr&agrave; stabilire se il servizio o lo strumento sia per te appropriato, <b>e non potr&agrave; quindi garantirti la normale operativit&agrave;</b>.<br><a href='/webankpri/wbOnetoone/2l/do/FMP/SelezioneDepositiMifid.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_questionario_MIFID_wt'>Aggiorna subito il questionario MiFID</a>.";
			vaMessBenvenutoUrl = "/WB/fe/audio/vaBenvenuto_mifid.mp3";
		break;
		
		default:
			vaMessBenvenuto = "Benvenuto! Sono Paolo, l'assistente virtuale di Webank, e sono qui per <b>rispondere</b> alle tue domande. Scrivi \"<strong class=\"evident\">GUIDAMI</strong>\" nella mia finestra di dialogo e ti accompagner&ograve; all'interno del sito a tutte le funzioni pi&ugrave; utilizzate dai nostri clienti.";
			vaMessBenvenutoUrl = "/WB/fe/audio/vaBenvenuto.mp3";
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
			if (vaAvatar.setUrl)
				vaAvatar.setUrl(vaMessBenvenutoUrl,"happy");
			else
				setTimeout(startMp3,500);
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



$(function(){

	// Test onload messaggio di benvenuto
	if (vaFirstAss) vaBenvenuto(); 

	// Azioni su MyHomeTop (assistente virtuale in pagina)
	if ($("#myhometop").length)  {
		var mht = $("#myhometop");

		mht.find("form").on("submit", function(e){
				e.preventDefault();
			})

		mht.find(".btn-primary").click(function(){

			if($("#paoloDomanda").val().length){
				vaOpen(null,null,$("#paoloDomanda").val());
			}
		});
	}

});



