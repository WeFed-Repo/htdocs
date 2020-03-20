var sdk;
var sdkParams;

(function (sdk, $, args) {
    // namespace Sdk.Utils
    sdk.utils = (function (utils, $, args) {
        // namespace sdk.utils.pubsub
        utils.pubsub = (function (pubsub, $, args) {

var params = {};
params = $.extend(params, args);

var _allChannels = {};

var _getUnicastChannelName = function (eventName, ownerName){
	return (eventName || '') + '-owner-' + (ownerName || '');
};
var _getBroadcastChannelName = function (eventName, ownerName){
	return (eventName || '');
};
            


/* costruisce un nuovo channel*/
var _createChannel = function(channelName){
	var tmpChannel = {
		channelName:channelName,
		listeners:[],
		reset:function(){this.listeners=[];},
		subscribe:function(){
			var args=arguments, argsLength = args.length,tmpListeners=this.listeners, tmpIndex, tmpParam, tmpParamToInsert;
			for(tmpIndex=0;tmpIndex<argsLength;tmpIndex++){
				tmpParam=args[tmpIndex];
			tmpParamToInsert=(typeof(tmpParam)==="function")?[tmpParam]:tmpParam;
			if((typeof(tmpParamToInsert)==="object")&&(tmpParamToInsert.length)){
				tmpListeners.push(tmpParamToInsert);
				}
			}
			return this;
			},
		unsubscribe:function(){
				
			var g=arguments,k,h,n=this.channels[this.channelName],f=g.length,e=n.length,m=0,d;
			for(k=0;k<f;k++){
				m=0;
				e=n.length;
				for(h=0;h<e;h++){
					d=h-m;
					if(n[d][0]===g[k]){
						n.splice(d,1);
						m++
					}
				}
			}
			return this;
		},
		broadcast:function(){
			var tmpFunc, tmpIndex, localListeners = this.listeners.slice(), listenersCount = localListeners.length;
			for(var tmpIndex = 0; tmpIndex < listenersCount; tmpIndex++){
					tmpFunc =localListeners[tmpIndex];
					if((typeof(tmpFunc)==="object")&&(tmpFunc.length)){
						h=tmpFunc[0];
						e=tmpFunc[1]||undefined;
						h.apply(e,arguments);
					}
			}
			return this;
			},
			broadcastByApply:function(parameters){
			var tmpFunc, tmpIndex, localListeners = this.listeners.slice(), listenersCount = localListeners.length;
			for(var tmpIndex = 0; tmpIndex < listenersCount; tmpIndex++){
					tmpFunc =localListeners[tmpIndex];
					if((typeof(tmpFunc)==="object")&&(tmpFunc.length)){
						h=tmpFunc[0];
						e=tmpFunc[1]||undefined;
						h.apply(e,parameters	);
					}
			}
			return this;
			},								
	};
	return tmpChannel;
};

/* rende il channel se già registrato */
var _getRegisteredChannel = function(channelName){
	if (!channelName ||
	typeof(channelName) !== 'string' || 
	channelName === ''){
		return null;
	}
	return _allChannels[channelName];
}; 

/* trova il channel o lo costruisce */
var _getChannel = function(channelName){
	if (!channelName ||
	typeof(channelName) !== 'string' || 
	channelName === ''){
		return null;
	}
	var toRet = _getRegisteredChannel(channelName);
	if (!toRet){
		toRet = _createChannel(channelName);
		_allChannels[channelName] = toRet;
	}
	return toRet;
};
	

var _subscribe = function (eventName, delegate) {
	var channelName = _getBroadcastChannelName(eventName, '');
	var tmpChannel = _getChannel(channelName); 
	if (tmpChannel)
		tmpChannel.subscribe(delegate);
};

var _publish = function() {
	var eventName = null;
	var args = [];
	if (arguments.length > 0){
		eventName = arguments[0];
		args = Array.prototype.slice.call(arguments, 1);
	}
	
	var channelName = _getBroadcastChannelName(eventName, '');
	var tmpChannel = _getRegisteredChannel(channelName); 
  if (tmpChannel)
    	tmpChannel.broadcastByApply(args);
}; 


var _unsubscribe = function (eventName, delegate) {
	var channelName = _getBroadcastChannelName(eventName, '');
	var tmpChannel = _getRegisteredChannel(channelName); 
  if (tmpChannel)
    	tmpChannel.unsubscribe(delegate);
};

var _sendNoop = function(eventName) {
	var channelName = _getBroadcastChannelName(eventName, '');
	var tmpChannel = _getRegisteredChannel(channelName); 
  if (tmpChannel)
    	tmpChannel.broadcast({ pubSubPlaceHolder: true });
};

var _isNoop = function(eventArg) {
    return eventArg && eventArg.pubSubPlaceHolder;
};


/* unicast: receive only from */ 
var _subscribeUnicast = function (ownerName,eventName,delegate){
	var channelUnicastName = _getUnicastChannelName(eventName, ownerName);
	var tmpChannel = _getChannel(channelUnicastName);
	if (tmpChannel)
		tmpChannel.subscribe(delegate);
};

var _subscribeBroadcast = function (ownerName,eventName,delegate){
	var channelBroadcastName = _getBroadcastChannelName(eventName, ownerName);
	var tmpChannel = _getChannel(channelBroadcastName);
	if (tmpChannel)            	
		tmpChannel.subscribe(delegate);
};

/* unicast: invia unicast se presente la definizione e comunque effettua il broadcast */ 
var _publishUnicast = function() {
	var ownerName = null;
	var eventName = null;
	var args = [];
	if (arguments.length >= 1){
		ownerName = arguments[0];
		eventName = arguments[1];
	}
	if (arguments.length >= 2){
		args = Array.prototype.slice.call(arguments, 2);
	}

	var channelUnicastName = _getUnicastChannelName(eventName,ownerName);
	var unicastChannel = _getRegisteredChannel(channelUnicastName); 
  if (unicastChannel)
    	unicastChannel.broadcastByApply(args);

};
/*broadcast: invia broadcast se presente la definizione */ 
var _publishBroadcast = function() {
	var ownerName = null;
	var eventName = null;
	var args = [];
	if (arguments.length >= 1){
		ownerName = arguments[0];
		eventName = arguments[1];
	}
	if (arguments.length >= 2){
		args = Array.prototype.slice.call(arguments, 2);
	}

	var channelBroadcastName = _getBroadcastChannelName(eventName,ownerName);
	var broadcastChannel = _getRegisteredChannel(channelBroadcastName); 
  if (broadcastChannel)
    	broadcastChannel.broadcastByApply(args);

};


var _subscribeUnicastAndBroadcast = function(ownerName,eventName,delegate) {
	_subscribeUnicast(ownerName,eventName,delegate);
	_subscribeBroadcast(ownerName,eventName,delegate);
};


var _subscribeUnicastOnly = function(ownerName,eventName,delegate) {
	_subscribeUnicast(ownerName,eventName,delegate);
};

var _publishUnicastAndBroadcast = function(){
	_publishUnicast.apply(this,arguments);
	_publishBroadcast.apply(this,arguments);
};
var _publishUnicastOnly = function(){
	_publishUnicast.apply(this, arguments);
};


 // publish and subscribe
pubsub["subscribe"] = _subscribe;
pubsub["publish"] = _publish;
pubsub["unsubscribe"] = _unsubscribe;


// event mode
pubsub["register"] = _subscribe;
pubsub["unregister"] = _unsubscribe;
pubsub["send"] = _publish;
pubsub["sendNoop"] = _sendNoop;
pubsub["isNoop"] = _isNoop;

// unicast events
/* ricevo eventi solo da uno specifico sender*/
pubsub["receiveAll"] = _subscribeUnicastAndBroadcast;
/* ricevo eventi solo da uno specifico sender*/
pubsub["receiveOnly"] = _subscribeUnicastOnly;
/* invio messaggi broadcast con rispetto degli unicast*/
pubsub["sendAll"] = _publishUnicastAndBroadcast;
/* invio solo a chi ha richiesto unicast degli unicast*/   
pubsub["sendOnly"] = _publishUnicastOnly;           


         
            
            return pubsub;
        })(utils.pubsub || {}, $, args && args.pubsub ? args.pubsub : {});
        // end namespace sdk.utils.pubsub
        return utils;
    })(sdk.utils || {}, $, args && args.utils ? args.utils : {});
    // end namespace sdk.utils
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);
