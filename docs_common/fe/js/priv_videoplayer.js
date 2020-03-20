/* UTILIZZO *//*getVideo({	wrapper: "#splayer",	videopath : "/wscmn/swf/video_prova.mp4",	autoplay: false,	initialVolume: 0.8});*/var getVideo = function (obj) {			// Funzioni ed assemblaggio della console		var wrapper = $(obj.wrapper);		var wr = $("<div>").addClass("videoPlayer").addClass("loading").attr({"fullScreenEnabled":true,"inited":false});		var vtag = $("<video>").attr({"autoplay":obj.autoplay,"poster":obj.videopath.replace(".mp4",".jpg")});		var vtagSrc = $("<source>").attr({"src": obj.videopath, "type":"video/mp4"});		/* Codice embedding per chi non legge l'html (SWF videoplayer )*/		altVideo = $("<object type=\"application/x-shockwave-flash\">"		+ "<param name=\"movie\" value=\"/swf/videoplayer_big.swf\">"		+ "<param name=\"allowfullscreen\" value=\"true\">"		+ "<param name=\"flashVars\" value =\"videoLink=" + obj.videopath + "\">"		+ "</object>").css({			"visibility":"visible",			"width": wrapper.width() + "px",			"height": wrapper.height()+ 2 + "px",			"padding" : 0,			"margin" : 0		});				vtag.append(vtagSrc,altVideo);		wr.append(vtag);		// wr.append(altVideo);		wrapper.empty().append(wr);		    // Se il tag "video" � supportato			if(!!document.createElement('video').canPlayType)			{				// Quando il video pu� partire lo inizializza								vtag.on("loadedmetadata",function() {					// Se il video non e' stato inizializzato lo inizializza					if (wr.attr("inited") == "false") {												/* CONSOLE */						var vidConsole = $("<div>").addClass("console");												// Pulsante play grande						var pPlay = $("<a>").addClass("playBig");						pPlay.click(function() {playBut.trigger("click")});						wr.prepend(pPlay);												//Play/pause						var playBut = $("<a>").attr({"href":"javascript:;"}).addClass("vidBtn play");						if(obj.autoplay) wr.addClass("pause");						playBut.click(function()							{								v = $(this).parents(".videoPlayer").find("video")[0];								vcont = $(this).parents(".videoPlayer").eq(0);								if(v.paused)								{									v.play();									vcont.addClass("pause");								}								else								{									v.pause();									vcont.removeClass("pause");								}								//in generale se si chiude un overlayer si mette in pausa il video...								$(".videoPlayer").closest('.modal').on('hidden.bs.modal', function (e) {									v.pause();									vcont.removeClass("pause");								})															});													//Timeline						var timeLineCont = $("<div>").addClass("vidBox timeLine");						var timeLine = $("<div>").addClass("bar");						timeLine.width(0);						timeLineCont.append(timeLine);						timeLine.slider({							range:"min",							min:0,							max: 0,							value: 0,							step:0.5,							slide: function( event, ui ) {								vtag = $(this).parents(".videoPlayer").find("video");								var vcont = $(this).parents(".videoPlayer");								vtag[0].currentTime = ui.value;								vtag[0].play();								vcont.addClass("pause");							}						});												vtag.on("timeupdate",function(){							timeLine.slider("value",vtag[0].currentTime)						});										// Controllo volume						vtag[0].volume = (obj.initialVolume) ? obj.initialVolume : 0.5;						var volumeContCont = $("<div>").addClass("vidBox volume");						volumeIco = $("<span>").addClass("volIcon");						volumeCont = $("<div>").addClass("bar");						volumeContCont.append(volumeIco,volumeCont);												volumeCont.slider({							range:"min",							min:0,							max:1,							step:0.1,							value:vtag[0].volume, 							slide: function( event, ui ) {									var vtag = $(this).parents(".videoPlayer").find("video");									vtag[0].volume = ui.value;								}							});												vtag.on("timeupdate progress",function(){							// Cambia i parametri della barra							var tlBar = $(this).parent(".videoPlayer").find(".timeLine .bar");							tlBar.slider({"max": this.buffered.end(0)});							tlBar.css("width", (100/this.duration * this.buffered.end(0)) + "%");						});												vtag.on("ended",function(){this.pause()});												// Full screen (Se supportato						if (document.fullscreenEnabled || document.webkitFullscreenEnabled || document.mozFullScreenEnabled || document.msFullscreenEnabled)						{							var fullScreen = $("<a>").addClass("vidBtn fullscreen").attr({"href":"javascript:;"});							fullScreen.click(function(){								var vCont = $(this).parents(".videoPlayer")[0];								if ($(vCont).hasClass("fs"))								{									 if (document.cancelFullScreen) {									  document.cancelFullScreen();									} else if (document.mozCancelFullScreen) {									  document.mozCancelFullScreen();									} else if (document.webkitCancelFullScreen) {									  document.webkitCancelFullScreen();									}									else if (document.msCancelFullscreen) {									  document.msCancelFullscreen();									} 									else if (document.exitFullscreen) {									  document.exitFullscreen();									}									$(vCont).removeClass("fs");								}								else								{									var fs = vCont.requestFullScreen || vCont.webkitRequestFullScreen || vCont.mozRequestFullScreen ||  vCont.msRequestFullscreen;									fs.call(vCont);									$(vCont).addClass("fs");								}							});						}						else						{							// Full screen non supportato							wr.addClass("nofullscreen");						}												// Evento generico fullscreen						// Modifiche di layout associate all'evento fullscreen						$(document).bind('webkitfullscreenchange mozfullscreenchange fullscreenchange',function(e){							vWrap =$(".videoPlayer").eq(0);							if(vWrap.height() == 0)							{								vWrap.removeClass("fs");								vidRepos();							}						});																		// Eventi del video 						vtag.on("ended",function(){							vTag = $(this)[0];							vTag.currentTime = 0;							$(vTag).parents(".videoPlayer").removeClass("pause");						});												// Funzione che riposiziona alcuni oggetti - pulsante play e video stesso (si attiva se non e' ancora definita per tutti gli overlay)						if (typeof vidRepos == "undefined"){							vidRepos = function(){								$.each($(".videoPlayer"), function(i,v){										var vCont = $(v);										var vTag = vCont.find("video");										vTag.css("margin", 0);																				// Controllo altezza contenitore rispetto al video con eventuale inserimento del margine										var vConsole = vCont.find(".console");										var vMargin = vCont.height() - vTag.height() - vConsole.height();										if (vMargin > 0)										{											vTag.css({"margin-top":  vMargin/2 + "px", "margin-bottom":  vMargin/2 + "px"})										}										// Riposizionamento pulsante Play										vCont.find(".playBig").css({"width": vTag.width() + "px", "height": vTag.height() + "px"});								});							}						}						vidRepos();						$(window).on("resize",function(){							vidRepos();						});												vidConsole.append(playBut,timeLineCont,volumeContCont,fullScreen);						wr.append(vidConsole);												// Video inizializzato						wr.removeClass("loading").attr("inited",true);					}				});			}			else			{				// Tag video non supportato			}}/* Apertura automatica in overlayer */var olVid;var openVideo = function(url,addparams) {	// Check esistenza overlay    if (typeof olVid == "undefined"){    	vidWrap = $("<div>").attr("id","videowrapper");	    olVid = getModal({	        id:"layerVideo",	        body: vidWrap	        });	    olVid.find("a.close").click(function(){vidWrap.empty();});	}	// Svuota il contenitore	vidWrap.empty();		// Inizializzazione di default	var params = {		autostart : false	}	// Sovrascrive eventuali parametri di default	if (addparams) {		if (typeof addparams.autostart != "undefined")  params.autostart = addparams.autostart;	}	getVideo({		wrapper: "#videowrapper",		videopath : url,		autoplay: params.autostart,		initialVolume: 0.8	});		olVid.modal("show");}/* Inizializzazione degli url */$(function () {	$("*[data-toggle='video-overlay']").click(function(){		var url = $(this).attr("data-video-url");		openVideo(url);	});});