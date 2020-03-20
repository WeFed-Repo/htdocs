// v2.0.0.0
var EG_ACT_ID = ""

/* Identifica se l'ambiente e' sviluppo o produzione */
var chatAmbiente = function() {
	var chAmb = "sviluppo";
	var arrUrl = location.href.split("/")
	if (arrUrl[2] && arrUrl[2] === "www.webank.it" ) chAmb = "produzione";
	return chAmb;
}();

if(chatAmbiente == "produzione"){
	EG_ACT_ID="EG33352348";
}else{
	EG_ACT_ID="EG54991923";
}
  
(function(e,f){var d,c,b,a=e.createElement("iframe");a.src="about:blank";a.title="";a.id="egot_iframe";(a.frameElement||a).style.cssText="width:0;height:0;border:0";b=e.getElementsByTagName("script");b=b[b.length-1];b.parentNode.insertBefore(a,b);try{c=a.contentWindow.document}catch(g){d=e.domain,a.src="javascript:var d=document.open();d.domain='"+d+"';void(0);",c=a.contentWindow.document}c.open()._d=function(){var a=this.createElement("script");d&&(this.domain=d);a.src=f;this.isEGFIF= !0;this.body.appendChild(a)};c.write('<body onload="document._d();">');c.close()})(document,"//analytics.analytics-egain.com/onetag/"+EG_ACT_ID);
var egainDockChat = egainDockChat  || {};
egainDockChat.Locale  = "it-IT";
egainDockChat.PostChatAttributes = true;
if(!egainDockChat.launchChat){
	egainDockChat.CallQueue = egainDockChat.CallQueue || [];
	egainDockChat.CallQueue.push({name:'launchChat', args:[]});
}
			
var btnDiv = null;
var refreshCheckAvailable = 0;
var iframeWin = {};
var isIFrame = false;
var littleHeight = '40px';
var littleWidth = "190px";
var bigHeight = '';
var bigWidth = '';
var littleHeightPng = '22px';
var littleWidthPng= "22px";
var bigHeightPng = '';
var bigWidthPng = '';
var zIndex = '';
var chatTarget = '';
var chatTop = 0;
var scrollTimeout = null;
var lastScollTop = 0;
var showPopUpFuoriOrario = false;
var chatList = [];
var loadedJs = false;
var loadedCSS = false;
var calledObjInfoChat = {};
var manuallyCallChat = false;
var isChatAlive = false;
var maxTime = 100000;
var firstCallingTime = 0;
var lastCallinngTime = 0;
var chatLogout = "";
var disabilitoChat = true;

/* Inizializzazione */
(function() {
	//RICEZIONE MSG DALLA CHAT
	
	if (window.addEventListener) {
		window.addEventListener("message", returnMessage, false);
	}
	else {
		window.attachEvent("onmessage", returnMessage);
	}	

	function returnMessage (evt) {
	try{
		var objReturnChat = JSON.parse(evt.data);

		if(objReturnChat === "GiveInfoChat" && manuallyCallChat){
			//console.log("sono in GiveInfoChat");
			manuallyCallChat = false;
			isChatAlive = true;
			
			var iframeWin = document.getElementById("egain-chat-iframe").contentWindow;
	
			var msg = {};
			msg.caller = "WB"
			msg.data = calledObjInfoChat;
			iframeWin.postMessage(JSON.stringify(msg), chatTarget);
		}else if(objReturnChat === "StopChat"){
			
			// [CR] 27/06/2017 Eseguo nuovamente chiamata per permettere sessioni successive alla chiusura chat
			eGainGetToken(function(data){
				for(i=0; i<chatList.length; i++){
					chatList[i].tokenId = data.tokenId;
					chatPosition = "init";
				}
			});					
			
			// [CR] 24/05/2017 abilito pulsante chat			
			$("#vvcButton").html("<li class=\"toolbtn\"><a class=\"icon icon-chat\" href=\"javascript:;\" onclick=\"egain_openDiv('WB_PRIV');\" id=\"toggledBtn\" title=\"Chat\"></a></li>");
			disabilitoChat = true;
			localStorage.removeItem("disabilitoChat");
			localStorage.removeItem("chatTop");
			localStorage.removeItem("chatLeft");
			
			isChatAlive = false;
			calledObjInfoChat.infoData = {};
			$(".handleEgainChat").remove();
			wStore.write("eGainTop",wStore.read("eGainTopInit") ); 
			wStore.write("eGainLeft",wStore.read("eGainLeftInit")); 
			// NASCONDO CHAT ALLA PRESSIONE DE TASTO CHIUDI
			$("#egain-chat-wrapper").hide();
			$("#egain-chat-wrapper").hide();
		}else if(objReturnChat.returnFunction === "chatData"){
			//console.log("sono in chatData");
			//$("#egain-chat-wrapper").hide();
			calledObjInfoChat.infoData= JSON.parse(objReturnChat.data);
			$("#chatIframe").remove();
			egainDockChat.launchChat();
			//$("#egain-chat-wrapper").hide();
			/*
			if(chatAmbiente != "produzione"){
				setTimeout(function(){	
					var egainHandle = $("<span>").addClass("handle").html("DRAGGAMI").css("background-color","#f00");
					$("#egain-chat-wrapper").prepend(egainHandle).css({"position":"absolute","top":0}).draggable({handle:".handle"});
				},1500);
			}*/
		}else if(objReturnChat.returnFunction === "setWrapperSize"){
			//console.log("sono in setWrapperSize");
			//$("#egain-chat-wrapper").css("transition", "height .5s")
			$("#egain-chat-wrapper").css("height",objReturnChat.height + "px");
			egain_draggable(0);
			$("#egain-chat-wrapper").show();
		}else if(objReturnChat === "closeDiv"){
			//console.log("sono in closeDiv");
			$("#waitDiv").remove();
			egain_draggable(0);	
			$("#egain-chat-wrapper").show();
			
		}
		
	}catch(e){}
		
	}
	
	$(window).scroll(function(){
        if($(".waitDiv").length > 0 || $("#egain-chat-wrapper").length > 0){
			maxZInd = 0;
			
			$( "body" ).find( "*:visible" ).filter(function(){ return $(this).css('z-index') !== 'auto'; } ).each(function() {
				if(!($(this).attr('id') == 'egain-chat-wrapper' || $(this).hasClass('waitDiv'))){
					var index_current = parseInt($(this).css("z-index"), 10);
					if(index_current > maxZInd) {
						maxZInd = index_current;
					}
				}
			});
			
			maxZInd = maxZInd + 10;
			
			if($(".waitDiv").length > 0){
				$(".waitDiv").css('z-index', maxZInd);
			}
			if($("#egain-chat-wrapper").length > 0){
				$("#egain-chat-wrapper").css('z-index', maxZInd);
			}
		}
    })
	
	//egain_draggable(1000);
	/*
	if(chatAmbiente != "produzione"){
		setTimeout(function(){	
			var egainHandle = $("<span>").addClass("handle").html("DRAGGAMI").css("background-color","#f00");
			$("#egain-chat-wrapper").prepend(egainHandle).css({"position":"absolute","top":0}).draggable({handle:".handle"});
		},1500);
	}*/
	//FINE RICEZIONE MSG DALLA CHAT
})();

function egain_draggable(msTime){
	//if(chatAmbiente != "produzione"){
		setTimeout(function(){
			//[CR e EP 17052017] leggo da sessione le coordinate top e left della chat dopo il drag+cambio pagina
			var chatTop = localStorage.getItem("chatTop");
			var chatLeft = localStorage.getItem("chatLeft");
			
			// [CR e EP] 24/05/2017 leggo da sessione quale sia lo stato del bottone
			var disChat = localStorage.getItem("disabilitoChat");
			
			// [CR e EP] 24/05/2017 disabilito pulsante chat al cambio pagina se chat attiva
			if(disChat == "false" && disChat != null){
				$("#vvcButton").html("<li class=\"toolbtn disabled\"><span class=\"icon icon-chat \" href=\"javascript:;\" id=\"toggledBtn\" title=\"Chat\"></span></li>");
				disabilitoChat = false;
				//console.log("disabilitoChat: "+disabilitoChat);
			}
						
			var egtop = wStore.read("eGainTop");
			if(egtop == "" ||  egtop == null){
				egtop = parseInt($("#egain-chat-wrapper").css("top"), 10)-10; 
			}
			wStore.write("eGainTopInit",parseInt($("#egain-chat-wrapper").css("top"), 10)-10);
			var egleft = wStore.read("eGainLeft");
			//alert(egleft)
			if(egleft == "" || egleft == null){
				egleft = parseInt($("#egain-chat-wrapper").css("left"), 10);
				
			}
			wStore.write("eGainLeftInit",parseInt($("#egain-chat-wrapper").css("left"), 10));
			
			// [CR e EP 16052017] sistemata gestione draggabilità su tutto header della finestra
			var html = '<div class="handleEgainChat" style="width: 245px; height: 50px; padding-right: 10px; padding-left: 10px; position: absolute; z-index: 1000; background-color: transparent;"><div style="width: 100%; height: 100%;"></div></div>'

			// [CR e EP 17052017] nella funzione "stop" del draggable vengono salvate le coordinate top e left della chat in sessione
			$("#egain-chat-wrapper").prepend(html).draggable({iframeFix: true, handle:".handleEgainChat", stop: function( event, ui ) { wStore.write("eGainTop",ui.position.top); wStore.write("eGainLeft",ui.position.left); localStorage.setItem("chatTop", ui.position.top); localStorage.setItem("chatLeft", ui.position.left);}});
			
			
			// [CR e EP 17052017] al caricamento della chat verifico se sono presenti nuove coordinate in sessione e se ka sessione non è cambiata e in caso affermativo sposto la chat
			if(chatTop != null && calledObjInfoChat.tokenId == undefined){
				$("#egain-chat-wrapper").css('top', chatTop+"px");
			}
			
			if(chatLeft != null && calledObjInfoChat.tokenId == undefined){
				$("#egain-chat-wrapper").css('left', chatLeft+"px");
			}
			
		},msTime);
	//}
}

function getChatTarget(){
	if(chatAmbiente == "produzione"){
		chatTarget = 'https://chat.webank.it';
		chatLogout = 'https://loginchat.webank.it/oam/server/logout';
	}else{
		chatTarget = 'https://nbacoll.bpmgrp.global:6133';
		chatLogout = 'https://nsr.bpmlab.global:8443/oam/server/logout';
	}
	egainDockChat.serverURL = chatTarget + "/system";
}

function egain_getChat(type, value){
	var returnValue;
	var list;
	if(type == 1){ //value -> configurazione
		list = $.grep(chatList, function(e){return e.serviceId = value.serviceId || e.initServiceId == value.serviceId});
	}else{ //value -> id)
		list = $.grep(chatList, function(e){return e.serviceId = value || e.initServiceId == value});
	}
	 
	if(list.length == 0){
		returnValue = value;
	}else{
		returnValue = list[0];
	}
	return returnValue;
}

function egain_setChat(objInfoChat){
	var list = $.grep(chatList, function(e){return e.serviceId == objInfoChat.serviceId || e.initServiceId == objInfoChat.serviceId});
	if(list.length == 0){
		egain_callInfoChat(objInfoChat);
	}
	return;
}

function egain_updateInfoChat(objInfoChat){
	if(!isChatAlive && $( "#divswitch" ).length === 0 && $("#divFuoriOrario" ).length === 0){
		var req = $.ajax({
			url: objInfoChat.availPath + "chatAvailability.do",
			data: {serviceId: objInfoChat.serviceId},
			cache: false
		});
		
		req.done(function(data){
				if (data) {
					objInfoChat.cod = data.cod;
					objInfoChat.msg = data.getMsg;
					objInfoChat.availableEP1 = data.availableEP1;
					objInfoChat.availableEP2 = data.availableEP2;
					objInfoChat.showPopUpFuoriOrario = (data.showPopUpFuoriOrario === 'true');
					objInfoChat.msgFuoriOrario = data.msgFuoriOrario;	
				}
		});
	}	
}

function egain_callInfoChat(objInfoChat){
	var req = $.ajax({

		url: objInfoChat.availPath + "chatAvailability.do",
		data: {serviceId: objInfoChat.serviceId},
		cache: false

	});
	
	req.done(function(data){

		if (data) {
			objInfoChat.cod = data.cod;
			objInfoChat.msg = data.getMsg;
			objInfoChat.entryPoint1 = data.entryPoint1;
			objInfoChat.availableEP1 = data.availableEP1;
			objInfoChat.entryPoint2 = data.entryPoint2;
			objInfoChat.availableEP2 = data.availableEP2;
			objInfoChat.showPopUpFuoriOrario = (data.showPopUpFuoriOrario === 'true');
			objInfoChat.msgFuoriOrario = data.msgFuoriOrario;
			objInfoChat.siteOrigin = "";
			objInfoChat.titoli = "";
			chatList.push(objInfoChat);	
			egain_updateBtnVisibility(objInfoChat);		
		}
	});
}

//AGGIORNAMENTO VISIBILITA'			
function egain_setTimerCheckVisibility(id, type, ms, chatConfig){ 
	getChatTarget();

	var objInfoChat = chatConfig;
	egainDockChat.Template = "aqua" + objInfoChat.template;
	
	if( type === 1){
		objInfoChat.isIFrame = true;
	} else {
		objInfoChat.isIFrame = false;
	}
	objInfoChat.btnDiv = id;
	objInfoChat.refreshCheckAvailable = ms;
	
	if(firstCallingTime == 0){
		firstCallingTime = new Date().getTime();
	}
	
	lastCallingTime = new Date().getTime();
		
	if(lastCallingTime - firstCallingTime < maxTime){
		egain_setChat(objInfoChat);
	}
	
}

function egain_loadJs(objInfoChat){
	if(!loadedJs){
		loadedJs = true;
        if(objInfoChat.serviceId.indexOf("PUB") > 0){
            $.getScript("/wscmn/js/jquery_ui.js",function(){
		  });	
        }
	}
}

function egain_updateBtnVisibility(objInfoChat){
		if(!isChatAlive && $( "#divswitch" ).length === 0){
            if((typeof objInfoChat != "undefined" && 
                ((typeof objInfoChat.availableEP1 != "undefined" && objInfoChat.availableEP1 == 'true') || 
                (typeof objInfoChat.availableEP2 != "undefined" && objInfoChat.availableEP2 == 'true'))) || 
                objInfoChat.showPopUpFuoriOrario){
                var strChatBtnEnabled = chatBtnEnabled.replace("openDiv()", "openDiv('" + objInfoChat.serviceId + "')");

                if(typeof $("#" + objInfoChat.btnDiv).html() == "undefined" || ( typeof $("#" + objInfoChat.btnDiv).html() != "undefined" && $("#" + objInfoChat.btnDiv).html() != strChatBtnEnabled)){
					if(disabilitoChat){						
						$("#" + objInfoChat.btnDiv).html(strChatBtnEnabled);
					}
                }
            }else{
				$("#" + objInfoChat.btnDiv).html(chatBtnDisabled);
            }
			egain_updateInfoChat(objInfoChat);
        }
       
    lastCallingTime = new Date().getTime();
	if(lastCallingTime - firstCallingTime < maxTime){
		setTimeout(egain_updateBtnVisibility, objInfoChat.refreshCheckAvailable, objInfoChat);
	}
	//console.log(isChatAlive);
}
//FINE AGGIORNAMENTO VISIBILITA'

//APERTURA-CHIUSURA CHAT
function egain_getPosition(newElement, objInfoChat){
	var xyChatBtn = {};

	if(objInfoChat.serviceId == 'WB_PUB'){
		if($(".sectionTitle").length == 0){
			xyChatBtn.top = $(window).height()/2;
		}else{
			xyChatBtn.top = $(".sectionTitle").offset().top;
		}
		if(xyChatBtn.top == 0){
			xyChatBtn.top = 120;
		}
		
		xyChatBtn.left = $(window).width()/2;
		xyChatBtn.left  = xyChatBtn.left  - newElement.width()/2;
	}else{
		xyChatBtn = $("#"+ objInfoChat.btnDiv).parent().offset();
		
		xyChatBtn.left  = xyChatBtn.left  - newElement.width();
		xyChatBtn.left  = xyChatBtn.left  - 10;
	}
	
	if(xyChatBtn.top <= 0){
		xyChatBtn.top = 100;
	}
	
	if(xyChatBtn.left <= 0){
		xyChatBtn.left  = $(window).width()/2;
		xyChatBtn.left  = xyChatBtn.left  - newElement.width()/2;
		xyChatBtn.left  = xyChatBtn.left  - newElement.css('padding-left').substring(0, (newElement.css('padding-left').length -2))/2;
	}
	return xyChatBtn;
}

function egain_openFuoriOrario(id) {
	var objInfoChat = egain_getChat(2, id);
	
	var html = '';
	html = html + "<div id=\"divFuoriOrario\" style=\"height: 0px;\" class='onTop'><div class='div-switch' ><div class='chatheader-button' id='btnCloseFuoriOrario'><div class=\"div-switch-close\"></div></div><div class='div-switch-main' style='padding-top: 19px;'>&nbsp;Il servizio &egrave; disponibile dalle 9 alle 18<br>dal luned&igrave; al venerd&igrave;";
	if(objInfoChat.serviceId.indexOf("WB") >= 0){
		html = html + "<div class='footer-switch' style='color:white' >Puoi contattarci al numero verde <br>800 060 070"; //HEADER
	}else{
		html = html + "<div class='footer-switch' style='color:white' >Puoi contattarci al numero verde <br>800 88 00 88"; //HEADER
	}
	html = html + "</div></div></div></div>"; //Contenitore
	
	var $newdivFuoriOrario = $(html); 
	$( "body" ).prepend($newdivFuoriOrario);
	
	$("#btnCloseFuoriOrario").click(function (){
		if($('#divFuoriOrario').is(":visible")){
			egain_nascondiFuoriOrario();
		}
	});
	
	$( "#divFuoriOrario" ).draggable({containment: "document"});
	
	$( "#divFuoriOrario" ).css('position', 'absolute');
	var xyTarget = egain_getPosition($( ".div-switch" ), objInfoChat);
	$( "#divFuoriOrario" ).css('top', xyTarget.top);
	$( "#divFuoriOrario" ).css('left', xyTarget.left);
	
	$( ".div-switch" ).show();
}

function egain_nascondiFuoriOrario() {
	$( "#divFuoriOrario" ).remove();
}

function egain_openDiv(id) {
	var objInfoChat = egain_getChat(2, id);
	egain_loadJs(objInfoChat);
	
	if(objInfoChat.showPopUpFuoriOrario && $("#divFuoriOrario" ).length === 0){
		egain_openFuoriOrario(id);
	}else if(objInfoChat.availableEP1 == "true" && objInfoChat.availableEP2 == "true"){
		//alert(isChatAlive)
		if(!isChatAlive && $( "#divswitch" ).length === 0 && $("#divFuoriOrario" ).length === 0){
			
			// [CR e EP] 24/05/2017 disabilito pulsante chat per scelta Banking/Trading
			disabilitoChat = false;
			$("#vvcButton").html("<li class=\"toolbtn disabled\"><span class=\"icon icon-chat \" href=\"javascript:;\" id=\"toggledBtn\" title=\"Chat\"></span></li>");
			
			var html = '';
			html = html + "<div id=\"divswitch\" style=\"height: 0px;\" class='onTop'><div class='div-switch' ><div class='chatheader-button' id='btnCloseSwitch'><div class=\"div-switch-close\"></div></div><div class='div-switch-main' >Argomento della chat:";
			html = html + "<div class='footer-switch' >"; //HEADER
			html = html + "<input type=\"button\" onclick=\"egain_setTematica('_B','" + objInfoChat.entryPoint1 + "', this, '" + objInfoChat.serviceId + "')\" class=\"btn-switch\" value=\"Banking\"> "
			html = html + "<input type=\"button\" onclick=\"egain_setTematica('_T','" + objInfoChat.entryPoint2 + "', this, '" + objInfoChat.serviceId + "')\" class=\"btn-switch\" value=\"Trading\"> "
			html = html + "</div></div></div></div>"; //Contenitore
			
			var $newdivSwitch = $(html); 
			$( "body" ).prepend($newdivSwitch);
			
			$("#btnCloseSwitch").click(function (){
				if($('#divswitch').is(":visible")){
					// [CR] 24/05/2017 abilito pulsante chat
					$("#vvcButton").html("<li class=\"toolbtn\"><a class=\"icon icon-chat\" href=\"javascript:;\" onclick=\"egain_openDiv('WB_PRIV');\" id=\"toggledBtn\" title=\"Chat\"></a></li>");
					disabilitoChat = true;
					egain_nascondiSwitch();
				}
			});
			
			$( "#divswitch" ).draggable({containment: "document"});
			$( "#divswitch" ).on("mousedown", function(){
				$(this).css('cursor', "move");
			});
			$( "#divswitch" ).on("mouseup", function(){
				$(this).css('cursor', "standard");
			});
			
			$( "#divswitch" ).css('position', 'absolute');
			var xyTarget = egain_getPosition($( ".div-switch" ), objInfoChat);
			$( "#divswitch" ).css('top', xyTarget.top);
			$( "#divswitch" ).css('left', xyTarget.left);
			
			$( ".div-switch" ).show();
		}
	}else{
		if(typeof objInfoChat.entryPoint1 != "undefined" && objInfoChat.entryPoint1 != ""){
			objInfoChat.entryPointId = objInfoChat.entryPoint1;
		}else if(typeof objInfoChat.entryPointId2 != "undefined" && objInfoChat.entryPointId2 != ""){
			objInfoChat.entryPointId = objInfoChat.entryPoint2;
		}
		
		egain_startChat(objInfoChat);
	}
}

function egain_nascondiSwitch(){
	$( "#divswitch" ).remove();
}

function egain_setTematica(tematica, entryPoint, btn, id){
	var objInfoChat = egain_getChat(2, id);
	localStorage.setItem("disabilitoChat", disabilitoChat);
	
	if($(btn).hasClass('btn-switch')){
		objInfoChat.serviceId = objInfoChat.serviceId + tematica;
		objInfoChat.entryPointId = entryPoint;
		
		$( "#divswitch" ).remove();
		
		egain_startChat(objInfoChat);
	}
}
	
function egain_startChat(objInfoChat){
	//egain_AddWaiting();
		
	calledObjInfoChat = objInfoChat;
	manuallyCallChat = true;
	egainDockChat.EntryPointId  = objInfoChat.entryPointId;
	
	html = "<iframe id='chatIframe' style='position: absolute;width: 0px;border: 0px;' src="+ chatTarget +"/system/templates/chat/" + egainDockChat.Template + "/beginchat.asp?v=1&token=" + objInfoChat.tokenId + "&serviceId=" + objInfoChat.serviceId + " class='ui-widget-content'></iframe>";
	//setTimeout(function(){	
		var $newdiv1 = $(html); 
		$( "body" ).append( $newdiv1);
	//},3000);
	
}

function egain_AddWaiting(){
	var inwaitDiv = "<div id='waitDiv' style='height: 0px; !important; position: absolute; box-sizing: content-box; ";
	inwaitDiv = inwaitDiv + "'>";
	inwaitDiv = inwaitDiv + "<div class='waitDiv' style='padding: 0px 10px; position: fixed; bottom: 20px; right: 415px; width: 305px; height: 570px; overflow: hidden; visibility: visible; z-index: 16000; opacity:1; border: 0px; transition: transform 0.2s ease-in-out; background: transparent;' >"; 
	inwaitDiv = inwaitDiv + "<div style='border-color:rgb(199, 199, 199); border-style: solid; border-width: 1px;'>";
	if(egainDockChat.Template.indexOf("Webank")>0){
		inwaitDiv = inwaitDiv + "<div style='background-color: white; height: 60px;'>";
	}else{
		inwaitDiv = inwaitDiv + "<div style='background-color: #007C66; height: 60px;'>";
	}
    inwaitDiv = inwaitDiv + "<div class='header-row content' style='padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;'>";
    inwaitDiv = inwaitDiv + "<div class='row clearfix'>";
    inwaitDiv = inwaitDiv + "<div class='col-xs-3'>";
	if(egainDockChat.Template.indexOf("Webank")>0){
		inwaitDiv = inwaitDiv + "<img src='"+chatTarget+"//system/templates/chatLib/chat.png' style='height: 32px; width: 40px; top: 10px; position: absolute;'>";
	}else{
		inwaitDiv = inwaitDiv + "<img src='"+chatTarget+"//system/templates/chatLib/chat_bpm.png' style='height: 32px; width: 40px; top: 10px; position: absolute;'>";
	}
    inwaitDiv = inwaitDiv + "</div>";
    inwaitDiv = inwaitDiv + "<div class='col-xs-6'>";
    inwaitDiv = inwaitDiv + "<div class='header-message clearfix'>";
    inwaitDiv = inwaitDiv + "<div class='avatar' style='margin-top: -10px;'>";
	if(egainDockChat.Template.indexOf("Webank")>0){
		inwaitDiv = inwaitDiv + "<label style='visibility: visible; cursor: pointer; position: absolute; top: 10px;  color: #8ab10b; font-size: 28px; font-weight: bold; font-family: sans-serif; line-height: 1.25 !important;'>CHAT</label>";
	}else{
		inwaitDiv = inwaitDiv + "<label style='visibility: visible; cursor: pointer; position: absolute; top: 10px;  color: white; font-size: 28px; font-weight: bold; font-family: sans-serif; line-height: 1.25 !important;'>CHAT</label>";
	}
    inwaitDiv = inwaitDiv + "</div>";
    inwaitDiv = inwaitDiv + "</div>";
    inwaitDiv = inwaitDiv + "</div>";
    inwaitDiv = inwaitDiv + "<div class='col-xs-3'>";
    inwaitDiv = inwaitDiv + "<div class='pull-right'>";
    inwaitDiv = inwaitDiv + "</div>";
    inwaitDiv = inwaitDiv + "</div>";
    inwaitDiv = inwaitDiv + "</div>";
    inwaitDiv = inwaitDiv + "</div>";
    inwaitDiv = inwaitDiv + "<div class='shadow' style='top: 50px; left: 0; height: 8px; margin-bottom: 5px; width: 100%; background: #ccc; opacity: 0.5; z-index: 100; position: relative;'></div>";
    inwaitDiv = inwaitDiv + "</div>";
    inwaitDiv = inwaitDiv + "<div style='background-color: ghostwhite;padding: 40px;height: 500px;'>";
    inwaitDiv = inwaitDiv + "<img src='"+chatTarget+"/system/templates/chatLib/gen_preloader.gif' style='margin-left: 40px;width: 60%;'>";
    inwaitDiv = inwaitDiv + "<div style='margin-top: 20px; font-family: ralewaymedium,Arial,serif; font-size: 18px !important; color: #666;'>Caricamento in corso...</div>";
	inwaitDiv = inwaitDiv + "</div>";
    inwaitDiv = inwaitDiv + "</div>";
	inwaitDiv = inwaitDiv + "</div>";
	inwaitDiv = inwaitDiv + "</div>";
	
	var $newdiv2 = $(inwaitDiv); 
	$( "body" ).append( $newdiv2);	
}

//FINE APERTURA-CHIUSURA CHAT
