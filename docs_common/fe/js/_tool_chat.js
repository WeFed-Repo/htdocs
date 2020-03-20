
var btnDiv = null;
var refreshCheckAvailable = 0;
var thisEntryPoint = '';
var objSessionChat = '';
var iframeWin = {};
var isIFrame = false;
var littleHeight = '30px';
var littleWidth = "150px";
var bigHeight = '';
var bigWidth = '';
/*
$( window ).unload(function() {
	resetSession();
});*/

$(document).ready(function(){
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
			closeDiv();
		}
	}
	//FINE RICEZIONE MSG DALLA CHAT
});

//AGGIORNAMENTO VISIBILITA'			
function setTimerCheckVisibility(ms, id, type){ 

	if( type === 1){
		isIFrame = true;
	} else {
		isIFrame = false;
	}
	btnDiv = $("#"+id);
	refreshCheckAvailable = ms;
	updateBtnVisibility();
	setTimeout(updateBtnVisibility, refreshCheckAvailable);
}

function updateBtnVisibility(){

	if(isAgentAvailable() === 'true'){
		if($( "#toggledBtn" ).length === 0){
			btnDiv.append("<input type=\"image\" src=\"chat.png\" onclick=\"openDiv();\" id=\"toggledBtn\"\>");	
		}
	}else{
		$( "#toggledBtn" ).remove();
	}
	setTimeout(updateBtnVisibility, refreshCheckAvailable);
}

function isAgentAvailable(){

	resultAvailable = 'false';
	$.ajax({
		type: 'GET',
		async: false,		
		url: 'https://ccenterecoll.bpmgrp.global/system/ws/chat/entrypoint/agentAvailability/'+thisEntryPoint,
		datatype: 'xml',
		cache: false,
		success: function(data) {
			var result = $.grep(data.documentElement.attributes, function(e){ return e.nodeName === 'available'; });
			if (result.length !== 0) {
				resultAvailable = result[0].nodeValue;
			}
		}
	}); 
	return resultAvailable;
}
//FINE AGGIORNAMENTO VISIBILITA'


//GESTIONE SESSIONE
function retrieveSession(){
	var objInfoChat = {};
	if(typeof(Storage) !== "undefined") {		
		objInfoChat.nome = window.sessionStorage.getItem("nome");
		objInfoChat.email = window.sessionStorage.getItem("email");
		objInfoChat.telefono = window.sessionStorage.getItem("telefono");
		objInfoChat.tipoRichiesta = window.sessionStorage.getItem("tipoRichiesta");
		objInfoChat.ndg = window.sessionStorage.getItem("ndg");
		objInfoChat.tipoCliente = window.sessionStorage.getItem("tipoCliente");
		objInfoChat.cbk = window.sessionStorage.getItem("cbk");
		objInfoChat.device = window.sessionStorage.getItem("device");
		objInfoChat.data = window.sessionStorage.getItem("data");
		objInfoChat.time = window.sessionStorage.getItem("time");
		objInfoChat.uniqueID = window.sessionStorage.getItem("uniqueID");
	}
	return objInfoChat;
}

function checkValidSession(){
	returnValue = false;
	var objInfoChat = retrieveSession();
	if(checkValidObjInfoChat(objInfoChat)){
		objSessionChat = objInfoChat;
		returnValue = true;
	}
	return returnValue;
}

function checkValidObjInfoChat(objInfoChat){
	returnValue = false;
	if(typeof(objInfoChat.uniqueID) !== "undefined" && objInfoChat.uniqueID != null){
		//ALTRI CONTROLLI???
		returnValue = true;
	}
	if(typeof isIFrame == "undefined" || isIFrame == null){
		//ALTRI CONTROLLI???
		isIFrame = false;
	}
	return returnValue;
}

function saveSessionInformation(objInfoChat){
	if(checkValidObjInfoChat(objInfoChat)){
		if(typeof(Storage) !== "undefined") {			
			window.sessionStorage.setItem("nome", objInfoChat.nome);
			window.sessionStorage.setItem("email", objInfoChat.email);
			window.sessionStorage.setItem("telefono", objInfoChat.telefono);
			window.sessionStorage.setItem("tipoRichiesta", objInfoChat.tipoRichiesta);
			window.sessionStorage.setItem("ndg", objInfoChat.ndg);
			window.sessionStorage.setItem("tipoCliente", objInfoChat.tipoCliente);
			window.sessionStorage.setItem("cbk", objInfoChat.cbk);
			window.sessionStorage.setItem("device", objInfoChat.device);
			window.sessionStorage.setItem("data", objInfoChat.data);
			window.sessionStorage.setItem("time", objInfoChat.time);
			window.sessionStorage.setItem("uniqueID", objInfoChat.uniqueID);
			window.sessionStorage.setItem("isIFrame", isIFrame);
			window.sessionStorage.setItem("password", token);
		}
	}
}
//FINE GESTIONE SESSIONE


//APERTURA-CHIUSURA CHAT
function defineEntryPoint(n){
	thisEntryPoint = n;
}

function openDiv() {
	if(isIFrame){
		if(isAgentAvailable() === 'true'){
			if($( "#chat" ).length === 0){
				var html = '';
				html = html + "<div style=\"height: 0px;\"><div id='chat' class='div-chat chat' >"; //Contenitore
				html = html + "<div class='chatheader'><div class='chatheader-image'><img src='chat.png'></div><div class='chatheader-button' id='btnCloseChat'><i class=\"fa fa-times fa-2x\"></i></div><div class='chatheader-button' id='btnHideChat'><i class=\"fa fa-compress fa-2x\"></i></div><div class='chatheader-button' id='btnShowChat'><i class=\"fa fa-expand fa-2x\"></i></div></div><div class='intestazioneChat' id='intestazioneChat'><label class='intestazioneChat'>CHATTA CON WEBANK</label></div>"; //HEADER				
				html = html + "<iframe id='chatIframe' class='iframe-chat' src='https://ccenterecoll.bpmgrp.global/system/templates/chat/BPMpub/beginchat.asp?v=1' class='ui-widget-content'></iframe>"; //CHAT
				html = html + "</div></div>"; //Contenitore
			
				var $newdiv1 = $(html); 
				
				$( "body" ).prepend( $newdiv1);
				
				$("#chatIframe").height( $("#chat").height() - $(".chatheader").height() - $("#intestazioneChat").height());
				
				$(function() {
					$( "#chat" ).draggable();
					$( "#chat" ).resizable({
						resize: function(){
							$("#chatIframe").height( $("#chat").height() - $(".chatheader").height() - $("#intestazioneChat").height() );
						}
					});
					
					$('#chatIframe').on('load', function(event ){
						callEGain();
						$( this ).off( event );
					});
					
				
					$("#btnHideChat").click(function (){
						if($('#chatIframe').is(":visible")){
							nascondiChat();
						}
					});
					
					$("#btnShowChat").click(function (){
						if($('#chatIframe').is(":hidden")){
							mostraChat();
						}
					});
					
					$("#btnShowChat").hide();
					
					$("#btnCloseChat").click(function (){
						//closeDiv();
						
						if($('#chatIframe').is(":visible")){
							mostraChat();
						}
						var objReturnChat2 = {};
						objReturnChat2.returnFunction = "closeChatFromDiv";						
						iframeWin.postMessage(JSON.stringify(objReturnChat2), "https://ccenterecoll.bpmgrp.global");
					});
				});
			}
		} 
	}else if (typeof(Storage) !== "undefined" && (typeof(window.sessionStorage.getItem("uniqueID")) == "undefined" || window.sessionStorage.getItem("uniqueID") == null)){
		callEGain();
	}
	
	return;
}

function nascondiChat(){
	bigHeight = $('#chat').height();
	bigWidth = $('#chat').width();
	$('.intestazioneChat').hide();
	$('#chatIframe').hide();
	$("#btnHideChat").hide();
	$("#btnShowChat").show();
	$('#chat').height(littleHeight);
	$('#chat').width(littleWidth);
	$('#chat').css("border-radius", "10px");
}

function mostraChat(){
	$('.intestazioneChat').show();
	$('#chatIframe').show();
	$("#btnHideChat").show();
	$("#btnShowChat").hide();
	$('#chat').height(bigHeight);
	$('#chat').width(bigWidth);
	$('#chat').css("border-radius", "0px");
}

function closeDiv() {
	if(isIFrame){
		$( "#chat" ).remove();
	} else {
		iframeWin.close();
		iframeWin = {};
	}
	resetSession();
}

function resetSession() {
	if(typeof(Storage) !== "undefined") {		
		sessionStorage.clear();
	}
}

function callEGain() {
	saveSessionInformation(objInfoChat);
	/* fine raccolta informazioni */
	
	if(isIFrame){
		iframeWin = document.getElementById("chatIframe").contentWindow;		
		// iframeWin.postMessage(JSON.stringify(objInfoChat), "https://ccenterecoll.bpmgrp.global");
		iframeWin.postMessage(JSON.stringify(objInfoChat), "https://ccenterecoll.bpmgrp.global");
	} else {
		iframeWin = window.open('https://nsr.sviluppo.bpm.local:7012/system/templates/chat/WebankPriv/beginchat.asp?v=1', 'formpopup', 'height=570,width=442,directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no');
		setTimeout(callEGainPopUp, 1000);
	}
}

function callEGainPopUp() {
	var objInfoChat = {};
	if(checkValidSession()){ //RECUPERO CHAT
		objInfoChat.nome = objSessionChat.nome;
		objInfoChat.email = objSessionChat.email;
		objInfoChat.telefono = objSessionChat.telefono;
		objInfoChat.tipoRichiesta = objSessionChat.tipoRichiesta;
		objInfoChat.ndg = objSessionChat.ndg;
		objInfoChat.tipoCliente = objSessionChat.tipoCliente;
		objInfoChat.cbk = objSessionChat.cbk;
		objInfoChat.device = objSessionChat.device;
		objInfoChat.data = objSessionChat.data;
		objInfoChat.token = objSessionChat.token;
		objInfoChat.time = objSessionChat.time;
		objInfoChat.uniqueID = objSessionChat.uniqueID;
	}
		
	iframeWin.postMessage(JSON.stringify(objInfoChat),"https://ccenterecoll.bpmgrp.global");
}
//FINE APERTURA-CHIUSURA CHAT