
var sdk;
var sdkParams;
/*
functions:

"create"] = params: 
		JSModel - the javascript model
		Sanitizer - optional, function to sanitize jsModel
            bind["bindFunction"] = _createComputed;
						bind["addFunction"] = _addFunction;
						bind["apply"] = _applyBind;		
						
						bind["commit"] = _commitChanges;	
						bind["undo"] = _undoChanges;	
						bind["update"] = _updateJs;	
						
										
            bind["getJS"] = _toJs;
            bind["getJSON"] = _toJSON;

						bind["utilGetJSFromVmRoot"] = _toJsUtil;
            bind["utilGetJSONFromVmRoot"] = _toJSONUtil;						

*/

(function (sdk, $, args) {

    //custom binding handlers
    ko.bindingHandlers.stopBinding = {
        init: function (element, valueAccessor) {

            return {
                controlsDescendantBindings: valueAccessor()
            };
        }
    }

    // namespace Sdk.Utils
    sdk.utils = (function (utils, $, args) {
        // namespace sdk.utils.bind
        utils.bind = (function (bind, $, args) {
        	
        		var _viewModelName = '_tmpVm';
        		var _viewModelJsName = '_vmJS';
						var _sanitizerName = '_vmSanitizer';        		
            
            var params = {
                debugMessageEnabled: false,
                errorMessageEnabled: true,
                remoteLoggingEnabled: false
            };
            
            var _defaultSanitizer = function(tmpModelJs){return tmpModelJs;}
            
            var _createViewModelContainer = function(viewmodelJs, viewModel, sanitizer){
            	var toRet = {};
            	toRet[_viewModelName] = viewModel;
            	toRet[_viewModelJsName] = viewmodelJs;
            	toRet[_sanitizerName] = sanitizer || _defaultSanitizer ;
            	/*
            	toRet[_viewModelName]['_changed'] = ko.computed(function(){
            			var vmKo = _toJsUtil(toRet[_viewModelName]);
            			var vmJs = _toJs(toRet);
            			var newObj = $.extend({}, vmKo, vmJs);
            			return JSON.stringify(vmKo) != JSON.stringify(newObj);
            			
            	
            		}, toRet[_viewModelName]);
*/
            	return toRet;
            	};
            	
            	
            
            var _checkViewModelType = function(viewModelContainer, raiseError){
            	return 
            		_checkObject(viewModelContainer, raiseError, 'object', 'ViewModel container') &&
            		_checkObject(viewModelContainer[_viewModelName], raiseError, 'object', 'ViewModel temporary object') &&
								_checkObject(viewModelContainer[_viewModelJsName], raiseError, 'object', 'ViewModel current object') && 
								_checkObject(viewModelContainer[_sanitizerName], raiseError, 'function', 'ViewModel sanitizer');
            };
            
            var _checkObject = function(tmpObject, raiseError, objectType, objectDescription){
            	if (raiseError === undefined)
            		raiseError = true;
            		
            	if (tmpObject === null || tmpObject === undefined)
            		if (raiseError)
            			throw objectDescription + ' is null';
            		else
            			return false;	
            	if (typeof tmpObject !== objectType) 
								if (raiseError)
            			throw objectDescription + ' is not an ' + objectType;
            		else
            			return false;	
            	return true;	
            };



            // crea un viewmodel container da un js
            var _createBind = function (viewModelJs, sanitizer) {
            	_checkObject(viewModelJs, true, 'object', 'required viewModel');
            	if (sanitizer){
            	_checkObject(sanitizer, true, 'function', 'required sanitizer');
            	}
            	sanitizer = sanitizer || _defaultSanitizer;
            	
               var tmpViewModel = ko.mapping.fromJS(sanitizer(viewModelJs), sanitizer); 
               return _createViewModelContainer(viewModelJs, tmpViewModel, sanitizer);
            };
            
            
            // crea una function computed basata sul metodo
            var _createComputed = function (viewModelContainer, functionName, functionToCompute) {
            	_checkViewModelType(viewModelContainer);
            	var tmpFunction = ko.computed( functionToCompute, viewModelContainer[_viewModelName]);
            	viewModelContainer[_viewModelName][functionName] = tmpFunction;
            	return viewModelContainer;
            };

						// aggiunge una funzione function computed basata sul metodo
           var _addFunction = function (viewModelContainer, functionName, functionToCompute) {
            	_checkViewModelType(viewModelContainer);
            	viewModelContainer[_viewModelName][functionName] = functionToCompute;
            	return viewModelContainer;
            }; 
            
             var _commitChanges = function (viewModelContainer) {
             	_checkViewModelType(viewModelContainer);
            	var newJs = _toJsUtil(viewModelContainer[_viewModelName]);
            	viewModelContainer[_viewModelJsName] = newJs;
            	return viewModelContainer;
            }; 

						var _undoChanges = function (viewModelContainer) {
							_checkViewModelType(viewModelContainer);
            	ko.mapping.fromJS(viewModelContainer[_viewModelJsName], viewModelContainer[_viewModelName]);
            	return viewModelContainer;
            }; 

						var _updateJs = function (viewModelContainer, newViewModelJs) {
							_checkViewModelType(viewModelContainer);
							_checkObject(newViewModelJs, true, 'object', 'new object');
							var sanitizedObject = viewModelContainer[_sanitizerName](newViewModelJs);
							 
							/* if (sanitizedObject["_changed"])
								delete sanitizedObject["_changed"];
								*/
               	
							viewModelContainer[_viewModelJsName] = sanitizedObject;
							_undoChanges(viewModelContainer);
            	return viewModelContainer;
            };             
                                 
            

						// applica il bind sul DOM
            var _applyBind = function (viewModelContainer, selector) {
            	_checkViewModelType(viewModelContainer);
            	 var selected = $(selector);
               if (selected.length > 0)
               		ko.applyBindings(viewModelContainer[_viewModelName], selected[0]);
               return viewModelContainer;
	          };
            
            //rimuove il bind sul DOM
            var _cleanNode = function (selector, cleanExternalHandler) {
                if (cleanExternalHandler == undefined) {
                    cleanExternalHandler = $.noop;
                }
                var selected = $(selector);
                if (selected.length > 0) {
                    ko.utils.domNodeDisposal['cleanExternalData'] = cleanExternalHandler;
                    ko.cleanNode(selected[0]);
                }
            };
            
	          // rende il JS corrented
            var _toJs = function (viewModelContainer) {
            	_checkViewModelType(viewModelContainer);
               return viewModelContainer[_viewModelJsName];
            };

						// rende il JS corrented
            var _toJSON = function (viewModelContainer) {
            	_checkViewModelType(viewModelContainer);
               return JSON.stringify(viewModelContainer[_viewModelJsName]);
            };	
                  
               // questa parte di utility si applica direttamente ad oggetto vm knockout      
	          // rende il JS corrented
            var _toJsUtil = function (viewModel) {
               var toRet = ko.toJS(viewModel);
               if (toRet["__ko_mapping__"])
               	delete toRet["__ko_mapping__"];
               return toRet;
            };
	                    
            
						var _koNoFunctionsSerializer = function(key, value){
							if (value == null) return value;
    					if (typeof value == 'function') return ;
    					if (value.mappedProperties != null) return ;
							return value;
						}
						
						var _toJSONUtil = function(viewModel){
            	return ko.toJSON(viewModel, _koNoFunctionsSerializer);
            }

	
            // export
            bind["create"] = _createBind;
            bind["bindFunction"] = _createComputed;
						bind["addFunction"] = _addFunction;
						bind["apply"] = _applyBind;		
                        bind["cleanNode"] = _cleanNode;
						bind["commit"] = _commitChanges;	
						bind["undo"] = _undoChanges;	
						bind["update"] = _updateJs;	
						
										
            bind["getJS"] = _toJs;
            bind["getJSON"] = _toJSON;

						bind["utilGetJSFromVmRoot"] = _toJsUtil;
            bind["utilGetJSONFromVmRoot"] = _toJSONUtil;						
						
            // bind done
            return bind;
        })(utils.bind || {}, $, args.bind || {});
        // end namespace sdk.utils.bind
        return utils;
    })(sdk.utils || {}, $, (args || {}).utils || {});
    // end namespace sdk.utils
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);
