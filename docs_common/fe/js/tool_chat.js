// v1.0.0.0
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
var chatPosition = "init";
var loadedJs = false;
var loadedCSS = false;
var maxTime = 100000;
var firstCallingTime = 0;
var lastCallinngTime = 0;

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
		var objReturnChat = JSON.parse(evt.data);
		if(objReturnChat.returnFunction === "closeChat"){
			egain_closeDiv();
		}
		if(objReturnChat.returnFunction === "startTyping"){
			egain_startTyping();
		}
		if(objReturnChat.returnFunction === "stopTyping"){
			egain_stopTyping();
		}
		if(objReturnChat.returnFunction === "chatPosition"){
			chatPosition = objReturnChat.position;
            var id = $( ".outerChat" ).attr('id');
	        var objInfoChat = egain_getChat(2, id);
            //$("#" + objInfoChat.btnDiv).html(chatBtnDisabled);
		}
	}
	//FINE RICEZIONE MSG DALLA CHAT
})();

//RECUPERO INDIRIZZO

function getChatTarget(){
	if(typeof getAmbiente != "undefined" && getAmbiente() == "produzione"){
		chatTarget = 'https://chat.bpmbanking.it';
	}else{
		chatTarget = 'https://nbacoll.bpmgrp.global:6133';
	}
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
	if($( "#chat" ).length === 0 && $( "#divswitch" ).length === 0 && $("#divFuoriOrario" ).length === 0){
		var req = $.ajax({
			url: objInfoChat.availPath + "checkChatEgainAvailability.jsp",
			data: {serviceId: objInfoChat.serviceId},
			cache: false
		});
		
		req.done(function(data){
				objInfoChat.cod = data.Cod;
				objInfoChat.msg = data.getMsg;
				objInfoChat.availableEP1 = data.AvailableEP1;
				objInfoChat.availableEP2 = data.AvailableEP2;
				objInfoChat.showPopUpFuoriOrario = (data.ShowPopUpFuoriOrario === 'true');
				objInfoChat.msgFuoriOrario = data.MsgFuoriOrario;	
		});
	}	
}

function egain_callInfoChat(objInfoChat){
	var req = $.ajax({
		url: objInfoChat.availPath + "checkChatEgainAvailability.jsp",
		data: {serviceId: objInfoChat.serviceId},
		cache: false
	});
	
	req.done(function(data){
			objInfoChat.cod = data.Cod;
			objInfoChat.msg = data.getMsg;
			objInfoChat.entryPoint1 = data.EntryPoint1;
			objInfoChat.availableEP1 = data.AvailableEP1;
			objInfoChat.entryPoint2 = data.EntryPoint2;
			objInfoChat.availableEP2 = data.AvailableEP2;
			objInfoChat.showPopUpFuoriOrario = (data.ShowPopUpFuoriOrario === 'true');
			objInfoChat.msgFuoriOrario = data.MsgFuoriOrario;
			//objInfoChat.template = "WebankPriv";
			//objInfoChat.codBanca = "19";
			objInfoChat.siteOrigin = "";
			objInfoChat.titoli = "";

			chatList.push(objInfoChat);	
			egain_updateBtnVisibility(objInfoChat);		
	});
}

//AGGIORNAMENTO VISIBILITA'			
function egain_setTimerCheckVisibility(id, type, ms, chatConfig){ 
	getChatTarget();
	
	var objInfoChat = chatConfig;
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
        }/*else{
            $.getScript("ui/1.11.4/jquery_ui.js",function(){
            });	
        }*/
	}
	
	var linkCss = 'https://ccenterecoll.bpmgrp.global/system/templates/chatLib/';
	if(objInfoChat.serviceId.indexOf("BPM") > 0){
		linkCss = linkCss + 'cssBPM';
	}else{
		linkCss = linkCss + 'cssWebank';
	}
	linkCss = linkCss + '.css';
	if(!loadedCSS){
		loadedCSS = true;
		/*
		var $link = $('<link/>', {
			rel: 'stylesheet',
			type: 'text/css',
			href: linkCss
		});
		//$link.appendTo('head');
		$('head').append($($link));*/
		var html = "<link rel='stylesheet' href='"+linkCss+"' type='text/css'>";
		$("head").append(html);
	}
}

function egain_updateBtnVisibility(objInfoChat){
    if(chatPosition == "end"){
        $("#" + objInfoChat.btnDiv).html(chatBtnDisabled);
    }else{
        if($("#chat" ).length === 0 && $( "#divswitch" ).length === 0){
            if((typeof objInfoChat != "undefined" && 
                ((typeof objInfoChat.availableEP1 != "undefined" && objInfoChat.availableEP1 == 'true') || 
                (typeof objInfoChat.availableEP2 != "undefined" && objInfoChat.availableEP2 == 'true'))) || 
                objInfoChat.showPopUpFuoriOrario){
                var strChatBtnEnabled = chatBtnEnabled.replace("openDiv()", "openDiv('" + objInfoChat.serviceId + "')");

                if(typeof $("#" + objInfoChat.btnDiv).html() == "undefined" || ( typeof $("#" + objInfoChat.btnDiv).html() != "undefined" && $("#" + objInfoChat.btnDiv).html() != strChatBtnEnabled)){
                    $("#" + objInfoChat.btnDiv).html(strChatBtnEnabled);
                }
            }else{
                $("#" + objInfoChat.btnDiv).html(chatBtnDisabled);
            }
        }
       egain_updateInfoChat(objInfoChat)
    }
	lastCallingTime = new Date().getTime();
	if(lastCallingTime - firstCallingTime < maxTime){
		setTimeout(egain_updateBtnVisibility, objInfoChat.refreshCheckAvailable, objInfoChat);
	}
}


function egain_isInTime(){
	var returnValue = true;
	
	var d = new Date();
	var weekDay = d.getDay();
	
	if(weekDay > 0 && weekDay < 6){
		var specialDays = [];
		specialDays.push("25/12/2016");
		specialDays.push("26/12/2016");
		specialDays.push("31/12/2016");
		specialDays.push("01/01/2017");
		specialDays.push("06/01/2017");
		specialDays.push("07/01/2017");
		specialDays.push("27/01/2017");
		
		var isSpecialDay = false;
		var day = d.getDate();
		var month = d.getMonth();
		var year = d.getFullYear();
			
		for(i = 0; i < specialDays.length; i++){
			var aSpecialDay = specialDays[i].split("/");
			if(day == aSpecialDay[0] && month+1 == aSpecialDay[1] && year == aSpecialDay[2]){
				isSpecialDay = true;
			}
		}
		
		if(isSpecialDay){
			returnValue = false;
		}else{
			var h = d.getHours();
			var m = d.getMinutes();
			
			var hMin = 9;
			var mMin = 0;
			var hMax = 18;
			var mMax = 00;
			
			if(h < hMin || h == hMin && m < mMin || h > hMax || h == hMax && m > mMax){
				returnValue = false;
			}
		}
	}else{
		returnValue = false;
	}
	
	return returnValue;
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
	
	//alert(objInfoChat);
	//objInfoChat.showPopUpFuoriOrario = !egain_isInTime();
	if(objInfoChat.showPopUpFuoriOrario && $("#divFuoriOrario" ).length === 0){
		egain_openFuoriOrario(id);
	}else if(objInfoChat.availableEP1 == "true" && objInfoChat.availableEP2 == "true"){
		if($("#chat" ).length === 0 && $( "#divswitch" ).length === 0 && $("#divFuoriOrario" ).length === 0){
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
	
	if($(btn).hasClass('btn-switch')){
		objInfoChat.serviceId = objInfoChat.serviceId + tematica;
		objInfoChat.entryPointId = entryPoint;
		
		$( "#divswitch" ).remove();
		
		egain_startChat(objInfoChat);
	}
}
	
function egain_startChat(objInfoChat){
	if(objInfoChat.isIFrame){
		if($( "#chat" ).length === 0 && $( "#divswitch" ).length === 0 && $("#divFuoriOrario" ).length === 0){
			var html = '';
			html = html + "<div style=\"height: 0px;\" class='onTop'><div id='chat' class='div-chat chat' >"; //Contenitore
			html = html + "<div id=\"" + objInfoChat.serviceId + "\" class='outerChat'>";
            html = html + "<div class='chatheader-image'><div class='chatheader-image-chat'></div></div>";
			html = html + "<div class='intestazioneChat'><label class='intestazioneChat'>CHAT</label></div>";
			html = html + "<div class='chatheader-typing'><div class='chatheader-typing-img'></div></div>";
			html = html + "<div class='chatheader-button' id='btnCloseChat'><div class='chatheader-button-close'></div></div>";
			html = html + "<div class='chatheader-button' id='btnHideChat'><div class='chatheader-button-minimize'></div></div>";
			html = html + "<div class='chatheader-button' id='btnShowChat' style='display: none;'><div class='chatheader-button-maximize'></div></div>";
			html = html + "</div>";			
			html = html + "<iframe id='chatIframe' class='iframe-chat' src="+ chatTarget +"/system/templates/chat/" + objInfoChat.template + "/beginchat.asp?v=1&token=" + objInfoChat.tokenId + " class='ui-widget-content'></iframe>"; //CHAT
           	html = html + "</div></div>"; //Contenitore
			//alert (html);
			var $newdiv1 = $(html); 
			
			$( "body" ).prepend( $newdiv1);
			
			$("#chatIframe").height( $("#chat").height() - $(".outerChat").height());
			$("#chatIframe").width( $("#chat").width());
			
			$( "#chat" ).draggable({iframeFix: true, containment: "document"});
			$( "#chat" ).on("mousedown", function(){
				$(this).css('cursor', "move");
			});
			$( "#chat" ).on("mouseup", function(){
				$(this).css('cursor', "standard");
			});
			
			$( "#chat" ).css('position', 'absolute');
			var xyTarget = egain_getPosition($( "#chat" ), objInfoChat);
			$( "#chat" ).css('top', xyTarget.top);
			$( "#chat" ).css('left', xyTarget.left);
			chatTop = xyTarget.top;
			
			$( "#chat" ).show();
				
			$(window).scroll(function(e){
				if(scrollTimeout){
					scrollTimeout = null;
				}
								
				scrollTimeout = setTimeout(function(){
					var thisScollTop = $(window).scrollTop();
					if(thisScollTop > lastScollTop){ 
						if(thisScollTop + chatTop + $( "#chat" ).outerHeight() <= $(document).outerHeight()){
							$( "#chat" ).css('top', thisScollTop + chatTop);
						}
					} else { 
						if(thisScollTop + chatTop + $( "#chat" ).outerHeight() <= $(document).outerHeight()){
							$( "#chat" ).css('top', thisScollTop + chatTop);
						}else{
							$( "#chat" ).css('top', $(document).outerHeight() - $( "#chat" ).outerHeight());
							chatTop = $(document).outerHeight() - $( "#chat" ).outerHeight() - thisScollTop;
						}
					}
					
					lastScollTop = thisScollTop;
				}, 100);
			});
				
			$('#chatIframe').on('load', function(event ){
				egain_callEGain();
				$( this ).off( event );
			});
				
			$("#btnHideChat").click(function (){
				if($('#chatIframe').is(":visible")){
					egain_nascondiChat();
				}
			});
				
			$("#btnShowChat").click(function (){
				if($('#chatIframe').is(":hidden")){
					egain_mostraChat();
				}
			});
				
			$("#btnShowChat").hide();
				
			$("#btnCloseChat").click(function (){		
				if(!$('#chatIframe').is(":visible")){
					egain_mostraChat();
				}
				if(chatPosition == "chat"){
					var objReturnChat2 = {};
					objReturnChat2.returnFunction = "closeChatFromDiv";
					iframeWin.postMessage(JSON.stringify(objReturnChat2), chatTarget);
				}else{
					egain_closeDiv();
				}
				
			});
		}
	}else if (typeof(objInfoChat.entryPointId) == "undefined" || objInfoChat.entryPointId == null){
		egain_callEGain();
	}
	
	return;
}

function egain_nascondiChat(){
	bigHeight = $('#chat').height();
	bigWidth = $('#chat').width();
	bigHeightPng = $('.chatheader-image-chat').height();
	bigWidthPng = $('.chatheader-image-chat').width();
	$('.intestazioneChat').hide();
	$('#chatIframe').hide();
	$("#btnHideChat").hide();
	$("#btnShowChat").show();
	$('#chat').height(littleHeight);
	$('#chat').width(littleWidth);
	$('.chatheader-image-chat').height(littleHeightPng);
	$('.chatheader-image-chat').width(littleWidthPng);
	$('#chat').css("border-radius", "10px");
}

function egain_mostraChat(){
	$('.intestazioneChat').show();
	$('#chatIframe').show();
	$("#btnHideChat").show();
	$("#btnShowChat").hide();
	$('#chat').height(bigHeight);
	$('#chat').width(bigWidth);
	$('.chatheader-image-chat').height(bigHeightPng);
	$('.chatheader-image-chat').width(bigWidthPng);
	$('#chat').css("border-radius", "0px");
	$('.chatheader-typing').hide();

	if($(window).scrollTop() + chatTop + $( "#chat" ).outerHeight() <= $(window).height()){
		$('#chat').css('top', ($(window).scrollTop()+chatTop)+'px');
	}else{
		$('#chat').css('top', ($(window).height() - $('#chat').height())+'px');
	}
		
	chatTop = 0;
}

function egain_startTyping(){
	if($('#chat').height() == littleHeight.substring(0,2)){
		if(!$('.chatheader-typing').is(":visible")){
			$('.chatheader-typing').show();
		}
	}
}

function egain_stopTyping(){
	//if($('#chat').height() == littleHeight.substring(0,2)){
		if($('.chatheader-typing').is(":visible")){
			$('.chatheader-typing').hide();
		}
	//}
}

function egain_closeDiv() {
	var id = $( ".outerChat" ).attr('id');
	var objInfoChat = egain_getChat(2, id);
	objInfoChat.serviceId = objInfoChat.initServiceId;
	
	if(objInfoChat.isIFrame){
		$( "#chat" ).remove();
	} else {
		iframeWin.close();
		iframeWin = {};
	}
	chatPosition = "end";
	
	eGainGetToken(function(data){
		for(i=0; i<chatList.length; i++){
			chatList[i].tokenId = data.tokenId;
			chatPosition = "init";
		}
	});

}

function egain_callEGain() {
	var id = $( ".outerChat" ).attr('id');
	var objInfoChat = egain_getChat(2, id);
	
	if(objInfoChat.isIFrame){
		iframeWin = document.getElementById("chatIframe").contentWindow;
		iframeWin.postMessage(JSON.stringify(objInfoChat), chatTarget);
	} else {
		iframeWin = window.open(chatTarget + '/system/templates/chat/' + objInfoChat.template + '/beginchat.asp?v=1', 'formpopup', 'height=570,width=442,directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no');
		setTimeout(egain_callEGainPopUp, 1000, objInfoChat);
	}
}

function egain_callEGainPopUp() {	
	iframeWin.postMessage(JSON.stringify(objInfoChat), chatTarget);
}
//FINE APERTURA-CHIUSURA CHAT