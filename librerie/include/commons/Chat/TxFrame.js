// JScript File

// -- global variables --
var _status = SessionState.Disconnected;	// -- global variable to hold session current status
var _timerId = 0;
var target = null;	// reference to IFM_ScriptControl object
// -- global variables --

// -- functions --

function register(trgt)
{
	target = trgt;
}

function call(virtualExtension, setupInfo)
{
	TxFrame.Call(virtualExtension, setupInfo);
	enableStatusTimer(true);
}

function terminate()
{
	TxFrame.TerminateCall();
	enableStatusTimer(true);
}

function send(msg)
{
	TxFrame.SendMessage(msg);
}

function getMessages()
{
	var response = TxFrame.GetMessages();
			
	if (response.error != null)
	{
		alert(response.error);
		return;
	}
	
	var msgs = response.value;
	
	if (msgs != '')
	{
		if (target != null)
			target.onMessage(msgs);
	}
}

function disposeSession()
{
	TxFrame.DisposeSession();
}

/*
*	Function:		onGetStatus()
*	Description:	getStatus callback 
*	Author:			fbo
*/

function onGetStatus(response)
{
	if (response.error != null)
	{
	   alert(response.error);
	   return;
	}
	
	_status = response.value;
	
	if (target != null)
	{
		target.status = _status;
		target.onChangeStatus(_status);
	}
	
	switch(_status)
	{
		case SessionState.IncomingMessages:
			getMessages();
			break;
		//mmr
		case SessionState.OnTerminatingCall:
		case SessionState.ToBeDisposed:
		{	
			disposeSession();
			break;
		}
	}
	
	enableStatusTimer(_status != SessionState.ToBeDisposed || _status != SessionState.OnTerminatingCall);
	//mmr
}

/*
*	Function:		enableStatusTimer()
*	Description:	enable or disable status timer
*	Author:			fbo
*/

function enableStatusTimer(enable)
{
	if (enable)
		_timerId = setTimeout(onStatusTimer, 1000);
	else
		clearTimeout(_timerId);
}

/*
*	Function:		onStatusTime()
*	Description:	status timer event handler
*	Author:			fbo
*/

function onStatusTimer()
{
	TxFrame.GetStatus(onGetStatus);
}

// -- functions --