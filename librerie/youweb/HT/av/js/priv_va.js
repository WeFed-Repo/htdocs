/* PORTING FUNZIONI DA NS. PRIV */

/*
 *  SWFObject v1.5: Flash Player detection and embed - http://blog.deconcept.com/swfobject/
 */
if(typeof deconcept==="undefined"){var deconcept={};}if(typeof deconcept.util==="undefined"){deconcept.util={};}if(typeof deconcept.SWFObjectUtil==="undefined"){deconcept.SWFObjectUtil={};}deconcept.SWFObject=function(_1,id,w,h,_5,c,_7,_8,_9,_a){if(!document.getElementById){return;}this.DETECT_KEY=_a?_a:"detectflash";this.skipDetect=deconcept.util.getRequestParameter(this.DETECT_KEY);this.params={};this.variables={};this.attributes=[];if(_1){this.setAttribute("swf",_1);}if(id){this.setAttribute("id",id);}if(w){this.setAttribute("width",w);}if(h){this.setAttribute("height",h);}if(_5){this.setAttribute("version",new deconcept.PlayerVersion(_5.toString().split(".")));}this.installedVer=deconcept.SWFObjectUtil.getPlayerVersion();if(!window.opera&&document.all&&this.installedVer.major>7){deconcept.SWFObject.doPrepUnload=true;}if(c){this.addParam("bgcolor",c);}var q=_7?_7:"high";this.addParam("quality",q);this.setAttribute("useExpressInstall",false);this.setAttribute("doExpressInstall",false);var _c=(_8)?_8:window.location;this.setAttribute("xiRedirectUrl",_c);this.setAttribute("redirectUrl","");if(_9){this.setAttribute("redirectUrl",_9);}};deconcept.SWFObject.prototype={useExpressInstall:function(_d){this.xiSWFPath=!_d?"expressinstall.swf":_d;this.setAttribute("useExpressInstall",true);},setAttribute:function(_e,_f){this.attributes[_e]=_f;},getAttribute:function(_10){return this.attributes[_10];},addParam:function(_11,_12){this.params[_11]=_12;},getParams:function(){return this.params;},addVariable:function(_13,_14){this.variables[_13]=_14;},getVariable:function(_15){return this.variables[_15];},getVariables:function(){return this.variables;},getVariablePairs:function(){var _16=[];var key;var _18=this.getVariables();for(key in _18){_16[_16.length]=key+"="+_18[key];}return _16;},getSWFHTML:function(){var _19="";if(navigator.plugins&&navigator.mimeTypes&&navigator.mimeTypes.length){if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","PlugIn");this.setAttribute("swf",this.xiSWFPath);}_19="<embed type=\"application/x-shockwave-flash\" src=\""+this.getAttribute("swf")+"\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\"";_19+=" id=\""+this.getAttribute("id")+"\" name=\""+this.getAttribute("id")+"\" ";var _1a=this.getParams();for(var key in _1a){_19+=[key]+"=\""+_1a[key]+"\" ";}var _1c=this.getVariablePairs().join("&");if(_1c.length>0){_19+="flashvars=\""+_1c+"\"";}_19+="/>";}else{if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","ActiveX");this.setAttribute("swf",this.xiSWFPath);}_19="<object id=\""+this.getAttribute("id")+"\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\">";_19+="<param name=\"movie\" value=\""+this.getAttribute("swf")+"\" />";var _1d=this.getParams();for(var key in _1d){_19+="<param name=\""+key+"\" value=\""+_1d[key]+"\" />";}var _1f=this.getVariablePairs().join("&");if(_1f.length>0){_19+="<param name=\"flashvars\" value=\""+_1f+"\" />";}_19+="</object>";}return _19;},write:function(_20){if(this.getAttribute("useExpressInstall")){var _21=new deconcept.PlayerVersion([6,0,65]);if(this.installedVer.versionIsValid(_21)&&!this.installedVer.versionIsValid(this.getAttribute("version"))){this.setAttribute("doExpressInstall",true);this.addVariable("MMredirectURL",escape(this.getAttribute("xiRedirectUrl")));document.title=document.title.slice(0,47)+" - Flash Player Installation";this.addVariable("MMdoctitle",document.title);}}if(this.skipDetect||this.getAttribute("doExpressInstall")||this.installedVer.versionIsValid(this.getAttribute("version"))){var n=(typeof _20==="string")?document.getElementById(_20):_20;n.innerHTML=this.getSWFHTML();return true;}else{if(this.getAttribute("redirectUrl")!==""){document.location.replace(this.getAttribute("redirectUrl"));}}return false;}};deconcept.SWFObjectUtil.getPlayerVersion=function(){var _23=new deconcept.PlayerVersion([0,0,0]);if(navigator.plugins&&navigator.mimeTypes.length){var x=navigator.plugins["Shockwave Flash"];if(x&&x.description){_23=new deconcept.PlayerVersion(x.description.replace(/([a-zA-Z]|\s)+/,"").replace(/(\s+r|\s+b[0-9]+)/,".").split("."));}}else{if(navigator.userAgent&&navigator.userAgent.indexOf("Windows CE")>=0){var axo=1;var _26=3;while(axo){try{_26++;axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash."+_26);_23=new deconcept.PlayerVersion([_26,0,0]);}catch(e){axo=null;}}}else{try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");}catch(e){try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");_23=new deconcept.PlayerVersion([6,0,21]);axo.AllowScriptAccess="always";}catch(e){if(_23.major===6){return _23;}}try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash");}catch(e){}}if(axo!==null){_23=new deconcept.PlayerVersion(axo.GetVariable("$version").split(" ")[1].split(","));}}}return _23;};deconcept.PlayerVersion=function(_29){this.major=_29[0]!==null?parseInt(_29[0]):0;this.minor=_29[1]!==null?parseInt(_29[1]):0;this.rev=_29[2]!==null?parseInt(_29[2]):0;};deconcept.PlayerVersion.prototype.versionIsValid=function(fv){if(this.major<fv.major){return false;}if(this.major>fv.major){return true;}if(this.minor<fv.minor){return false;}if(this.minor>fv.minor){return true;}if(this.rev<fv.rev){return false;}return true;};deconcept.util={getRequestParameter:function(_2b){var q=document.location.search||document.location.hash;if(_2b===null){return q;}if(q){var _2d=q.substring(1).split("&");for(var i=0;i<_2d.length;i++){if(_2d[i].substring(0,_2d[i].indexOf("="))===_2b){return _2d[i].substring((_2d[i].indexOf("=")+1));}}}return "";}};deconcept.SWFObjectUtil.cleanupSWFs=function(){var _2f=document.getElementsByTagName("OBJECT");for(var i=_2f.length-1;i>=0;i--){_2f[i].style.display="none";for(var x in _2f[i]){if(typeof _2f[i][x]==="function"){_2f[i][x]=function(){};}}}};if(deconcept.SWFObject.doPrepUnload){if(!deconcept.unloadSet){deconcept.SWFObjectUtil.prepUnload=function(){__flash_unloadHandler=function(){};__flash_savedUnloadHandler=function(){};window.attachEvent("onunload",deconcept.SWFObjectUtil.cleanupSWFs);};window.attachEvent("onbeforeunload",deconcept.SWFObjectUtil.prepUnload);deconcept.unloadSet=true;}}if(!document.getElementById&&document.all){document.getElementById=function(id){return document.all[id];};}var getQueryParamValue=deconcept.util.getRequestParameter;var FlashObject=deconcept.SWFObject;var SWFObject=deconcept.SWFObject;

/*


/* Lettura e scrittura localstorage o cookies */
// Scrittura/lettura dati su localStorage o cookie statico
var wStore = (function(){
	// true se il browser non utilizza localHost (lo inizializza una volta sola)
	var checkStorage = (("localStorage" in window) && window["localStorage"] !== null),

	write = function (key,value,expdays) 
	{
		if(checkStorage)
		{
			// utilizza localStorage
			localStorage.setItem(key, value);
		}
		else
		{
			// Scrive nel cookie
			var expdate=new Date();
			if (typeof expdays == "undefined")
				{			
					expdays= 365;
				}
			expdate.setDate(expdate.getDate() + expdays);
			document.cookie = key + "=" + escape(value) + "; expires=" + expdate.toUTCString();
		}
	},
	
	read = function(key)
	{
		if(checkStorage)
		{
			// legge da localStorage
			return localStorage.getItem(key);
		}
		else
		{
			// Legge dal cookie
			var valToReturn = null;
			$.each(document.cookie.split(";"), function(i, v) {
				if (v.split("=")[0] == key) {
					valToReturn = unescape(v.split("=")[1]);
				}
			});
			return valToReturn;
		}
	}
	
	session = function(key,value){
		var hasSS = (("localStorage" in window) && window["localStorage"] !== null);
		if (hasSS) {
			if (typeof value !="undefined"){
				// Scrive
				sessionStorage[key] = value;
			}
			return sessionStorage[key];
		}
		else
		{
			// Scrive un cookie
			var valToReturn = null;
			if (typeof value !="undefined"){
				var expdate=new Date();
				expdate.setDate(expdate.getDate() + 1);
				document.cookie = key + "=" + escape(value) + "; expires=" + expdate.toUTCString();
			}
			$.each(document.cookie.split(";"), function(i, v) {
				if (v.split("=")[0] == key) {
					valToReturn = unescape(v.split("=")[1]);
				}
			});
			return valToReturn;
		}
	}
	
	return {write: write, read: read, session: session}
}());

// Rileva il massimo z-index in tutto il documento corrente
function getNextHighestZindex()
{
	var highestIndex = 0;
	$("div").each(function() {
		zInd = (this.style.zIndex) ? parseFloat(this.style.zIndex) : parseFloat($(this).css("z-index"));
		if (!isNaN(zInd) && zInd > highestIndex && zInd < 16777271) 
			{
				highestIndex = zInd;
			}
	});
	return (highestIndex + 1);
}

/* thisMovie per SWF */
function thisMovie(movieName) {
	var movie = $("#" + movieName)[0];
	if (movie) return movie;
	else if($.browser.msie){
    	return window[movieName];
    } 
	else {
    	return document[movieName];
	}	
}


// Funzione con immissione domanda (pu� essere passato dall'esterno tramite "domanda")
function vaAsking(domanda, history)
{
	// Se l'utente ha effettivamente fatto una domanda
	if (domanda != "" && domanda != "fammi una domanda...")
	{
		//Altezza casella dialogo in azione
		vaTextSwitch.show();
		
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
				
				if (vaIsSwf)
				{
					//Inizializza il flusso audio, se presente
					if (vaJsonAudio && vaJsonAudio.length>0)
					{
						vAssObj.setUrl(vaJsonAudio,vaEmotion);
						vAssObj.setEmotion(vaEmotion);
						// Mostra l'interfaccia - temporaneamente rimosso
						vaCons.show();
					}
					else
					{
						vAssObj.setEmotion(vaEmotion);
					}
					//Inizializza anche gli altri parametri (ev. mute)
					if (vaAudioOn) {
						vAssObj.setVolume(vaVolume);
					}
					else
					{
						vAssObj.setVolume(0);
					}
				}
				else
				{
					vAssObj[0].src = vaJsonAudio;
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
	$("body").prepend(vAss);
	vAss.css("display","block");
	$(".tooltcons.toolassistente, .tooltcons.toolassistente2").addClass("opened");
	/* makeFocusable(vAss); */
	//## Se e' ie6 gli appende in fondo un iframe per facilitarne il trascinamento sulle select
	//## In casi estremi adoperare hideAllSelect();
	if ($.browser.msie && $.browser.version < 7)
	{
		ie6iframe = vAss.find(".ie6overlay");
		if (!ie6iframe)
		{
			ie6iframe = $("<iframe>").addClass("ie6overlay").attr("src","about:blank");
			ie6iframe.css({"width": vAss.width() + "px" , "height":vAss.height() + "px", "margin-top": "-" + vAss.height() + "px"});
			vAss.append(ie6iframe);
		}
	}
}

//Inizializza l'assistente virtuale
function vaLoad(sLeft,sTop,sQuestion, history)
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
			//Allineamento di default
			/*
			var startlr =  $("#fixedtools").offset();
			var vAssStartLeft = (sLeft) ? sLeft : startlr.left - 262 ;
			var vAssStartTop = (sTop) ? sTop  : startlr.top;
			*/
			/* Nuovo allineamento per fixed responsive */
			// vAss.css({"top":vAssStartTop + "px", "left": vAssStartLeft + "px"});
			vAss.css({"top":100 + "px", "left":10 + "px"});
		}
		else
		{
			//Preserva l'allineamento caricandolo dai parametri in pagina
			vAss.css({"margin-top":sTop + "px", "margin-left": sLeft + "px"});
		}
		
		vAss.draggable({
			handle:"#vaTitle",
			scroll:true,
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
		});
		var vaBody = vAss.find(".vaBody");
		var vaFiletto = vAss.find(".vaFiletto");
		
		//## AREA DINAMICA SWF
		
		// Area Assistente virtuale SWF
		vaIsSwf = true;
		
		//Inserisce l'swf dell'assistente virtuale
		
		//if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		var vaSwf = "/HT/av/swf/paolo_avatar.swf" ;
		try {
			vaFlash = new SWFObject (vaSwf, "va_flash", "258", "220", "8", "#dedede");
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

		//Console
		vaCons = $(".vaConsole");
		
		// Volume on-off
		vaMute = $("#virtAss .vaAudio");
	
		if (!vaAudioOn) vaMute.addClass("off");
		vaMute.click(function ()
		{
			vaChanged = true;
			if(!vaMute.hasClass("off"))
			{
				// Spegne audio
				vaMute.addClass("off");
				if (vaIsSwf)
				{	
					vAssObj.setVolume(0);
					//vAssObj.setAudioOn(false);
				}
				else
				{
					vAssObj[0].muted = true;
				}
				vaAudioOn = false;
			}
			else
			{
				// Accende audio
				vaMute.removeClass("off");
				if (vaIsSwf)
				{	
					vAssObj.setVolume(vaVolume);
				}
				else
				{
					vAssObj[0].muted = false;
				}	
				vaAudioOn = true;
			}
		});
		
		// Slider
		vaSlid = $("#vaSlider");
		
		//Funzione per il setting del volume
		vaSetVol = function(vol){
			if (vaIsSwf)
			{
					//## Mettere qui la funzione aggiornamento volume by Artificial Solutions (dovrebbe essere gi� quella corretta)
					if (vaAudioOn) vAssObj.setVolume(vol);
			}
			else
			{
					vAssObj[0].volume = vol/100;
			}
			vaVolume = vol;
		};
		
		vaSlid.html("");
		
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
				this.className = "";
			}
		}
		vaDomanda.focus(vaDomandaInit);
		vaDomanda.blur(function()
		{
			if (this.value == "")
			{
				this.value = "fammi una domanda...";
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
				checkFunc()
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
				vaBenv = $("<div>").addClass("sent").attr("id","vaBenvenuto").html("<p>" + vaMessBenvenuto + "</p>");
				vaDiag.append(vaBenv);
				
				// Allunga l'interfaccia alla defaultHeight
				/* if (getBank() == "Webank") vaDiag.css("height",122); */
				
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
			vaMessBenvenuto = "Benvenuto! Sono Paolo, l'assistente virtuale di YouWeb, e sono qui per <b>rispondere</b> alle tue domande. Scrivi \"<strong class=\"evident\">GUIDAMI</strong>\" nella mia finestra di dialogo e ti accompagner&ograve; all'interno del sito a tutte le funzioni pi&ugrave; utilizzate dai nostri clienti.";
			vaMessBenvenutoUrl = "/swf/vaBenvenuto.mp3";
			vaDiagHeight = "80px";
		break;
	}
	
	//Ingrandisce la casella di testo
	vaOpen();
	vaDiag.css("height",vaDiagHeight);
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
var vaProfile = "standard";

// Variabili locali di inizializzazione default (on click)
vaMessBenvenuto = "Buongiorno! Sono Paolo e sono qui per aiutarti e per rispondere alle tue domande. Scrivi domande brevi e semplici in modo che io possa capirti meglio.";

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
$(window).on("load", function () { if (vaFirstAss) vaBenvenuto(); });

//Indirizzo per chiamate AJAX
vaAJAX = "/HT/av/ajax/virtass.json"; /* INSERIRE QUI EVENTUALE URL CHIAMATA BACKEND */
