var sdk;
var sdkParams;

(function (sdk, $, args) {
    // namespace sdk.storage
    sdk.storage = (function (storage, $, args) {
        // namespace sdk.storage
        
        // interface to storage
        var _storageInteface = null;
        var _interfaceConf = null;
        var _maxDate = new Date(2100,1,1);
        
        var _marker = "__marker__";
			
        
        var createPageStorage = function(){
        	var toRet = {
        		_items :	{},
        		
        		setItem : function(key,val){
        			this._items[key]  =val;
        		},
        		
        		getItem : function(key){
        			return this._items[key];
        		},
        		
        		removeItem: function(key){
        			this._items[key] = undefined;
        		},
        		
        		clear: function(key){
        			this._items = {};
        		},
        		
        		key: function(key){
        			return null;
        		},
        		
        		length: function(){
        			this._items.length;
        		}
        	};
        		
        	return toRet;
        };
        	
        var storageAvailable = function (type) {
    		var storage;
    		try {
        		storage = window[type];
        		var x = '__storage_test__';
        		storage.setItem(x, x);
        		storage.removeItem(x);
        		return true;
    		}
    		catch(e) {
        		return e instanceof DOMException && (
                // everything except Firefox
                e.code === 22 ||
                // Firefox
                e.code === 1014 ||
                // test name field too, because code might not be present
                // everything except Firefox
                e.name === 'QuotaExceededError' ||
                // Firefox
                e.name === 'NS_ERROR_DOM_QUOTA_REACHED') &&
                // acknowledge QuotaExceededError only if there's something already stored
                (storage && storage.length !== 0);
    		}
		};
        
        // il tipo di storage da usare
        var _getInterface = function(){
        	if (storageAvailable('sessionStorage'))
        		return sessionStorage 
        	else 
        		return createPageStorage();
        };
        
        // il tipo di storage da usare
        var _getInterfaceConfig = function(openParam){
        	var interfaceConfig = {
        		basePath : '',
        		expireSeconds: 5 * 60};
        		
        return  $.extend({}, interfaceConfig, openParam);
        };
        
        // funzione per ofuscare la chiave
        var _encryptKey= function(rawKey){
        	if (!rawKey)
        		return null;
        	rawKey = _interfaceConf.basePath + "/" + rawKey;
        	// TODO: aggiungere anche ofuscamento 
        	return rawKey;
        };

				// funzione per ofuscare la chiave
        var _encryptData= function(rawData, expire){
        	if (rawData === undefined || rawData == null)
        		return null;
        	var innerObject = null;
        	if (typeof rawData === 'object'){
        		innerObject = rawData;
        	}
        	else
        		{
        			var wrapper = {_id_:'wrapper',val:rawData};
        			innerObject = wrapper;
        		}
        	var stringVal = JSON.stringify(innerObject);
        	
        	// TODO: crittografare il valore
        	
        	// expire ....
        	var currentTime = new Date();
        	var expireTime = _maxDate;
        	if (expire)
        		expireTime = new Date(currentTime.valueOf() + (_interfaceConf.expireSeconds * 1000));
        	stringVal = '' + currentTime.valueOf() + ',' + expireTime.valueOf()  + ',' + stringVal;

        	return stringVal;
        };    
        
        // funzione per ofuscare la chiave
        var _decryptData= function(cryptedData){
        	if (cryptedData === undefined || cryptedData == null)
        		return null;
        	
			var valueFormat = /^(\d+),(\d+),(.*)/g;
			var parts = valueFormat.exec(cryptedData);
			
			var toRet = {};
			
			if (parts != null){
				toRet.createTime = new Date(Number(parts[1]));
				toRet.expireTime = new Date(Number(parts[2]));
				// TODO: decrypt val
				var decryptedData =parts[3];

				var tmpObject = JSON.parse(decryptedData);
				if (tmpObject !== undefined && tmpObject !== null){
					if (tmpObject['_id_'])
						toRet.value = tmpObject['val'];		
					else
						toRet.value = tmpObject;		
				}
			}
			return toRet;
        };      
        
        // resets all data in store
        var _reset = function(){
        	_storageInteface.clear();	
        };
        
        // forzo hard init su session store solo ... 
        // il fenomeno della quota ... incasina tutto
        var _hardInit = function(){
        	try {
        		storage = window['sessionStorage'];
        		if (storage)
        			storage.clear();
    			}
    		catch(e) {
    		}
		};
        
        
        // inits the store ... 
        // performs a reset and then initializes
        var _initStore = function(initParam){
        	_reset();
        	// initializes with crypto info	
        };
        
        var _scavengeStore = function(){
        	var keysToDelete = [];
        	var currentTime = new Date();
        	for(var i =0; i < _storageInteface.length; i++){
        		var tmpKey = _storageInteface.key(i);
        		var item = _decryptData(_storageInteface.getItem(tmpKey));
        		if (item == null || 
        		item.value == null || 
        		item.expireTime == null || 
        		item.expireTime < currentTime ){
        			keysToDelete.push(tmpKey);
        			}
        		}
        	$.each(keysToDelete, function(index, item){
        		_storageInteface.removeItem(tmpKey);
        	});
        	
        	}
        
        // questo metodo inizializza la libreria per parlare correttamente con lo storage
        // il parametro di apertura contiene il path di traslazione
        var _openStore = function(openParam){
        	// imposta la configurazione per utilizzare l'interface
        	 _interfaceConf = _getInterfaceConfig(openParam);
        	 
        	 // verifico se è la prima apertura con questa configurazione
        	 if (_readData(_marker) == null){
        	 	_initStore();
        	 	_writeDataPersistent(_marker, new Date());
        	 }
        	 
        	 // check expired items
        	 _scavengeStore();
        	 
        };
        
        var _readData = function(key){
        	var storeKey = _encryptKey(key);
        	if (storeKey != null){
        	var storeData = _storageInteface.getItem(storeKey);
        	if (storeData){
        		var toRet = _decryptData(storeData);
						if (toRet == null || 
						toRet.value == null ||
						toRet.expireTime == null ||
						toRet.expireTime < new Date())
							_storageInteface.removeItem(storeKey);
						else
        			return toRet.value;
        		}	
        	}
        	return null;
        };

		var _writeDataInternal = function(expire, key, value){
        	var storeKey = _encryptKey(key);
        	if (storeKey != null){
        			var encryptedData = _encryptData(value, expire);
						if (encryptedData != null){
        			_storageInteface.setItem(storeKey, encryptedData);
							return true;
						}
					}
        	return false;
        };   

		var _writeData = function(key, value){
        	return _writeDataInternal(true, key, value);
        };   
        
        var _writeDataPersistent = function(key, value){
        	return _writeDataInternal(false, key, value);
        };       
        
        var _deleteData = function(key){
        	var storeKey = _encryptKey(key);
        	if (storeKey != null){
        			_storageInteface.removeItem(storeKey);
					}
        }; 
        
        var _dataInfo = function(key){
        	var storeKey = _encryptKey(key);
        	if (storeKey != null){
        			_storageInteface.removeItem(storeKey);
					}
        };      
        
        // init the interface
        _storageInteface = _getInterface();
        // set base config
        _interfaceConf = _getInterfaceConfig();
        
        // questa funzione è necessaria per effettuare il reset a fronte di quotaExceeded
       	storage['hardInit'] = _hardInit;
        storage['init'] = _initStore;
        storage['reset'] = _reset;
        
        storage['open'] = _openStore;
        
        storage['read'] = _readData;
        storage['write'] = _writeData;
        storage['writePersistent'] = _writeDataPersistent;
		storage['delete'] = _deleteData;        
        storage['info'] = _dataInfo;    
        
        return storage;
    })(sdk.storage || {}, $, args && args.storage ? args.storage : {});
    // end namespace sdk.storage
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);
