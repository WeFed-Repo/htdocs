// JScript source code
var IFM_ScriptCtrl = new IFM_ScriptControl();

function IFM_ScriptControl()
{
	// --- membri privati -- 
	var _this = this;			// permette ai metodi privati di accedere all'oggetto
	var _txFrame = null;		// frame di trasmissione messaggi
	var _timerId;
	// --- membri privati -- 
	
	// -- properieta' pubbliche --
	_this.protocol = "https";
	_this.serverAddress = "localhost";
	_this.port = "443";
	_this.appName = "WebLightChat";
	_this.status = SessionState.Disconnected;
	// -- properieta' pubbliche --
	
	
	// -- metodo pubblico --
	_this.txFrameReady = function()
	{
		_this.register();
	
		if (_this.onInitOk != null)
			_this.onInitOk();
	}
	
	_this.start = function()
	{
		var src = "$protocol://$serverAddress:$port/$appName/TxFrame.aspx";
		
		src = src.replace("$protocol", _this.protocol);
		src = src.replace("$serverAddress", _this.serverAddress);
		src = src.replace("$port", _this.port);
		src = src.replace("$appName", _this.appName);

		_txFrame = document.createElement( "iframe" );
		// _txFrame.attachEvent('onreadystatechange', _this.txFrameReady);
		
		_txFrame.name = "txIFrame";
		_txFrame.id = "txIFrame";
		_txFrame.style.display = "none";		
		_txFrame.src = src;
		
		document.body.appendChild(_txFrame);
		_timerId = setTimeout(_this.onTimer, 50);		
	}
	
	_this.onTimer = function()
	{
		clearTimeout(_timerId);
		
		var iframe = window.frames[_txFrame.name];
		
		if ((iframe) && (iframe.register))
		{
			_this.register();
		
			if (_this.onInitOk != null)
				_this.onInitOk();
		}
		else
			_timerId = setTimeout(_this.onTimer, 50);
	}
	
	_this.register = function()
	{
			// register to TxFrame script
		var iframe = window.frames[_txFrame.name];
		if (iframe != null)
			iframe.register(_this);	
	}
	
	_this.call = function(virtualExtension, setupInfo)
	{
		_this.register();
		
		var iframe = window.frames[_txFrame.name];
		
		if (iframe != null)
			iframe.call(virtualExtension, setupInfo);
	}
	
	_this.terminate = function()
	{
		var iframe = window.frames[_txFrame.name];
		
		if (iframe != null)
			iframe.terminate();
	}
	
	_this.send = function(msg)
	{
		var iframe = window.frames[_txFrame.name];
		
		if (iframe != null)
			iframe.send(msg);
	}
	
	_this.onInitOk = null;
	_this.onChangeStatus = null;
	_this.onMessage = null;
}


function IFM_Utility()
{
	var _this = this;			// permette ai metodi privati di accedere all'oggetto
	
	_this.getElementById = function (id_elemento) 
	{
		  // elemento da restituire
		  var elemento;
	     
		  // se esiste il metodo getElementById
		  // questo if sarà diverso da false, null o undefined
		  // e sarà quindi considerato valido, come un true
		  if(document.getElementById)
			elemento = document.getElementById(id_elemento);
	     
		  // altrimenti è necessario usare un vecchio sistema
		  else
			elemento = document.all[id_elemento];

		  // restituzione elemento
		  return elemento;
	}
}