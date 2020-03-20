var sdk;
var sdkParams;

(function (sdk, $, args) {
    // namespace sdk.session
    sdk.session = (function (session, $, args) {
        // namespace sdk.session
        var menuKey = '_menuId_';
        var menuKeyExists = '_menuIdExists_';

        var userInfoKey = '_userInfoId_';
        var userInfoKeyExists = '_userInfoIdExists_';

        var menuPartMain = 'main';
        var menuPartConf = 'conf';
        var menuPartMy = 'my';
        var menuPartCustom = 'custom';
        var currentFunctionId = undefined;
        var promises = [];

        var _setMenu = function(menuContainer){
            sdk.storage.writePersistent(menuKey, menuContainer);
            if (menuContainer != undefined) {
                sdk.storage.writePersistent(menuKeyExists, true);
            }

            _executePromises('menu');
        };

        var _setUserInfo = function (userInfoContainer) {
            sdk.storage.writePersistent(userInfoKey, userInfoContainer);
            if (userInfoContainer != undefined) {
                sdk.storage.writePersistent(userInfoKeyExists, true);
            }

            _executePromises('userInfo');
        };

	    var _getRawMenu = function(menuType){
            if (!menuType) {
                return null;
            }

        	var tmpMenu = sdk.storage.read(menuKey);
        	if (tmpMenu != null){
        		return tmpMenu[menuType];
        	}
        	return null;
        };    
        
        var _getMainMenu = function(){
        	return _getRawMenu(menuPartMain);
        };    
        var _getConfMenu = function () {
            return _getRawMenu(menuPartConf);
        };
        var _getMyMenu = function () {
            return _getRawMenu(menuPartMy);
        };
        var _getCustomMenu = function () {
            return _getRawMenu(menuPartCustom);
        };

        var _getUserInfo = function () {
            return sdk.storage.read(userInfoKey); 
        };

        var _setFunctionId = function (id) {
            currentFunctionId = id;
        };
        var _getFunctionId = function () {
            return currentFunctionId;
        };

        var _hasMenu = function () {
            
            if (sdk.storage.read(menuKeyExists) == null)
                return false;

            return true;
        };

        var _hasUserInfo = function () {

            if (sdk.storage.read(userInfoKeyExists) == null)
                return false;

            return true;
        };

        var stackItemSearch = function (menu, functionId) {

            var stack = [];
            var itemFunctionId = undefined;

            if (menu == undefined) return itemFunctionId;

            // popolo stack con radici
            for (var i = 0; i < menu.length; i++) {
                stack.push({ item: menu[i], parent: null });
            }

            while (stack.length > 0) {
                
                var item = stack[stack.length - 1];

                // rimuovo ultimo item;
                stack.pop();

                if (item.item.func == functionId) {
                    // trovato, esco
                    itemFunctionId = item;
                    break;
                }

                if (item.item.childs.length > 0) {
                    for (var i = 0; i < item.item.childs.length; i++) {
                        stack.push({ item: item.item.childs[i], parent: item });
                    }
                }
            }

            return itemFunctionId;
        };

        var _getNodesFunctionId = function (functionId, property) {

            if (functionId == undefined) {
                functionId = currentFunctionId;
            }

            var itemFunctionId = undefined;
            var returnArray = [];

            itemFunctionId = stackItemSearch(_getRawMenu(menuPartMain), functionId)

            if (itemFunctionId == undefined) {
                itemFunctionId = stackItemSearch(_getRawMenu(menuPartConf), functionId)
            }

            if (itemFunctionId == undefined) {
                itemFunctionId = stackItemSearch(_getRawMenu(menuPartMy), functionId)
            }

            if (itemFunctionId == undefined) {
                itemFunctionId = stackItemSearch(_getRawMenu(menuPartCustom), functionId)
            }

            if (itemFunctionId != undefined) {
                // popolo returnArray
                var temp = itemFunctionId;

                if (property == undefined) {
                    returnArray.push(temp.item);
                    while (temp.parent != undefined) {
                        temp = temp.parent;
                        returnArray.push(temp.item);
                    }
                } else {
                    if (temp.item.hasOwnProperty(property)) {
                        returnArray.push(temp.item[property]);
                        while (temp.parent != undefined) {
                            temp = temp.parent;
                            returnArray.push(temp.item[property]);
                        }
                    }
                }
            }

            return returnArray.reverse();
        };

        var _getTitleFunctionId = function (functionId) {

            if (functionId == undefined) {
                functionId = currentFunctionId;
            }

            var itemFunctionId = undefined;
            var caption = '';

            itemFunctionId = stackItemSearch(_getRawMenu(menuPartMain), functionId)

            if (itemFunctionId == undefined) {
                itemFunctionId = stackItemSearch(_getRawMenu(menuPartConf), functionId)
            }

            if (itemFunctionId == undefined) {
                itemFunctionId = stackItemSearch(_getRawMenu(menuPartMy), functionId)
            }

            if (itemFunctionId == undefined) {
                itemFunctionId = stackItemSearch(_getRawMenu(menuPartCustom), functionId)
            }

            if (itemFunctionId != undefined) {
                caption = itemFunctionId.item.caption;
            }

            return caption;
        }

        var _getNodesBrothersFunctionId = function (functionId, property) {

            if (functionId == undefined) {
                functionId = currentFunctionId;
            }

            var itemFunctionId = undefined;
            var returnArray = [];

            itemFunctionId = stackItemSearch(_getRawMenu(menuPartMain), functionId)

            if (itemFunctionId == undefined) {
                itemFunctionId = stackItemSearch(_getRawMenu(menuPartConf), functionId)
            }

            if (itemFunctionId == undefined) {
                itemFunctionId = stackItemSearch(_getRawMenu(menuPartMy), functionId)
            }

            if (itemFunctionId == undefined) {
                itemFunctionId = stackItemSearch(_getRawMenu(menuPartCustom), functionId)
            }

            if (itemFunctionId != undefined) {
                var temp = itemFunctionId;
                var tempArray = [];

                tempArray.push(temp.item);
                while (temp.parent != undefined) {
                    temp = temp.parent;
                    tempArray.push(temp.item);
                }

                // se sono almeno di terzo livello
                if (tempArray.length >= 3) {
                    // popolo returnArray
                    var parent;
                    if (itemFunctionId.parent != undefined) {
                        parent = itemFunctionId.parent;

                        for (var i = 0; i < parent.item.childs.length; i++) {
                            if (property == undefined) {
                                returnArray.push(parent.item.childs[i]);
                            } else {
                                if (parent.item.childs[i].hasOwnProperty(property)) {
                                    returnArray.push(parent.item.childs[i][property]);
                                }
                            }
                        }
                    }
                }
            }

            return returnArray;
        };

        var _promiseMenu = function (delegateFunc) {
            if (_hasMenu()) {
                delegateFunc.apply();
            } else {
                promises.push({ key: 'menu', value: delegateFunc });
            }
        };

        var _promiseUserInfo = function (delegateFunc) {
            if (_hasUserInfo()) {
                delegateFunc.apply();
            } else {
                promises.push({ key: 'userInfo', value: delegateFunc });
            }
        };
        
        var _executePromises = function (key) {
           
            for (var i = 0; i < promises.length; i++) {
                try {
                    if (promises[i].key == key) {
                        promises[i].value.apply();
                    }
                }
                catch (err) {
                    
                }
            }
            
            for (var i = promises.length - 1; i >= 0; i--) {
                if (promises[i].key == key) {
                    promises.splice(i, 1);
                }
            }
        }

        session['onMenuLoaded'] = _promiseMenu;
        session['onUserInfoLoaded'] = _promiseUserInfo;

        session['setMenu'] = _setMenu;
        session['setUserInfo'] = _setUserInfo;

        session['getMainMenu'] = _getMainMenu;
        session['getConfMenu'] = _getConfMenu;
        session['getMyMenu'] = _getMyMenu;
        session['getCustomMenu'] = _getCustomMenu;
        session['getUserInfo'] = _getUserInfo;

        session['setFunctionId'] = _setFunctionId;
        session['getFunctionId'] = _getFunctionId;

        session['hasMenu'] = _hasMenu;
        session['hasUserInfo'] = _hasUserInfo;

        session['getNodesFunctionId'] = _getNodesFunctionId;
        session['getTitleFunctionId'] = _getTitleFunctionId;
        session['getNodesBrothersFunctionId'] = _getNodesBrothersFunctionId;

        return session;
    })(sdk.session || {}, $, args && args.session ? args.session : {});
    // end namespace sdk.session
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);
