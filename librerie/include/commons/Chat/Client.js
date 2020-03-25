// JScript File

var isConnected = false;

function init()
{
	IFM_ScriptCtrl.serverAddress = window.document.domain;
	IFM_ScriptCtrl.protocol = "http";
	IFM_ScriptCtrl.port = "80";
	IFM_ScriptCtrl.appName = "WebLightChat";
	
	IFM_ScriptCtrl.onInitOk = onInitOk;
	IFM_ScriptCtrl.onMessage = onMessage;
	IFM_ScriptCtrl.onChangeStatus = onStatus;
	
	IFM_ScriptCtrl.start();
}

function onInitOk()
{
	//call();
}

function onMessage(msgs)
{
	refreshHistory(msgs);
}

function onStatus(status)
{
	if ((!isConnected) && (status == SessionState.Connected))
		clearHistory();
		
	setStatusBar(status);
	updatebtnConnect(status);
	enableTextMessageBox(status);
	
	isConnected = ((status != SessionState.Disconnected) && (status != SessionState.OnTerminatingCall));
	enableSendButton();
	
	if (!isConnected)
	        window.location.href = window.location.href;//al momento nel caso di terminazione "pulita" (o di terminazione per timeout) della chiamata viene ricaricata la pagina iniziale,  ovviamente possibile aprirne un'altra
		//clearHistory();
	if(status == SessionState.ToBeDisposed)
	        window.location.href = "chatchiusa.html";//inserire qui la pagina che si vuole aprire in caso di problemi tecnici
}

function call(username)
{
	if ((IFM_ScriptCtrl.status == SessionState.Disconnected) || (IFM_ScriptCtrl.status == SessionState.ToBeDisposed) || (IFM_ScriptCtrl.status == SessionState.OnTerminatingCall))
		IFM_ScriptCtrl.call(8000, username);
	else
		IFM_ScriptCtrl.terminate();
	
}

function send()
{
	var obj = ifm_getElementById('txtMsg');
	if (obj)
	{
		IFM_ScriptCtrl.send(obj.value);
		
		var hist = ifm_getElementById('txtArea');
		if (hist)
		{
			if (hist.value != '')
				hist.value = hist.value + '\n';
			hist.value = hist.value + '[Chiamante] ' + obj.value;
		}
		
		obj.value = '';
	}
}

function setStatusBar(status)
{
	var obj = ifm_getElementById('txtStatus');
	
	if (obj)
	{
		var str = 'Non collegato';
		
		switch(status)
		{
		    case SessionState.OnTerminatingCall:
			case SessionState.Disconnected:
			case SessionState.ToBeDisposed:
				str = 'Scollegato';
				break;
			case SessionState.Calling:
				str = 'In Chiamata';
				break;
			case SessionState.Connected:
			case SessionState.IncomingMessages:
				str = 'Collegato';
				break;
		}
		
		if (document.all)		// ie
			obj.innerText = str;
		else
			obj.textContent = str;
	}
}

/*
*	Function:		clearHistory()
*	Description:	clear history messages window
*	Author:			fbo
*/

function refreshHistory(msgs)
{
	if (msgs != '')
	{
		var hist = ifm_getElementById('txtArea');
		if (hist)
		{
			hist.value += '\n' + msgs;
		}
		
		autoScrollHistory();
	}
}

/*
*	Function:		autoScrollHistory()
*	Description:	implement autoscroll for history messages window
*	Author:			fbo
*/

function autoScrollHistory()
{
	var obj = ifm_getElementById('txtArea');
	if (obj)
	{
		obj.scrollTop = obj.scrollHeight;
	}
}

/*
*	Function:		clearHistory()
*	Description:	clear history messages window
*	Author:			fbo
*/

function clearHistory()
{
	var hist = ifm_getElementById('txtArea');
	if (hist)
	{
		hist.value = '';
	}
}

/*
*	Function:		enableSendButton()
*	Description:	enable send button if txtMsg contains at least one character,
*						otherwise send button is disabled.
*	Author:			fbo
*/

function enableSendButton()
{
	var txtMsg = ifm_getElementById('txtMsg');
	if (!txtMsg)
		return;	// object not found
	
	var btnSend = ifm_getElementById('btnSend');
	if (!btnSend)
		return;	// object not found
	
	// btnSend.disabled = ((txtMsg.value == '') || (!isConnected)); 
	btnSend.disabled = !((txtMsg.value != '') && (isConnected));
}

/*
*	Function:		updatebtnConnect()
*	Description:	enable or disable btnConnect button based on connection status
*	Author:			fbo
*/

function updatebtnConnect(status)
{
	var btnConnect = ifm_getElementById('btnConnect');
	// var btnSend = ifm_getElementById('btnSend');
	
	// btnSend.disabled = status < SessionState.Connected;
	btnConnect.disabled = !(status == SessionState.Disconnected || 				
		status >= SessionState.Connected);
	
	var str;
	if ((status == SessionState.Connected) || (status == SessionState.IncomingMessages))
		str = 'Termina';
	else
		str = 'Chiama';
	
	btnConnect.value = str;
}

/*
*	Function:		enableTextMessageBox()
*	Description:	set readonly or not txtMsg control, based on connection status
*	Author:			fbo
*/

function enableTextMessageBox(status)
{
	var txtMsg = ifm_getElementById('txtMsg');
	if (!txtMsg)
		return;	// object not found
	txtMsg.readOnly = status == SessionState.Connected ? false : true;
}

/*
*	Function:		checkEnter()
*	Description:	when enter is pressed in the txtMsg window and there is something written,
*						it send message to server
*	Author:			fbo
*/

function checkEnter(e)
{
	var code;
	
	if (window.event)
		code = e.keyCode;
	else
	if (e.which)
	{
		code = e.which;
	}
	else
		alert('error - unsupported function');
	
	var txtMsg = ifm_getElementById('txtMsg');
	if (!txtMsg)
		return;	// object not found
		
	if (code == 0x0d) 
	{
		if (txtMsg.value != '')
			send();
		
		if (window.event)
			event.returnValue = false;
		else
		{
			e.preventDefault();
		}
		
		autoScrollHistory();
	}
}


function ifm_getElementById(id)
{
	var utility = new IFM_Utility();
	return utility.getElementById(id);
}