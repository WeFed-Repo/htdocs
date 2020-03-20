var sdk;
var sdkParams;
(function (sdk, $, args) {
    // namespace sdk.dom
    sdk.dom = (function (dom, $, args) {
        // namespace sdk.dom
        dom.fumetto = (function (fumetto, $, args) {
            
            var fumettoActiveClass = 'fumetto_active';
            var fumettoRepositoryName = 'fumettoRepository';
            var fumettoRepositoryMenuName = 'fumettoRepositoryMenu';
             // the currentOwner
            var _tooltipOwner = '';
            var initialized = false;
            
            var _isCurrentOwnerOrChild = function(testOwner, action){
            	var toRet = testOwner && 
            		(_tooltipOwner === testOwner ||
            		$(_tooltipOwner).find(testOwner).length > 0);
            		sdk.utils.log.debugMessage(action + " --> " + testOwner+ " is currentOwner: " + toRet);
            		return toRet;
            };
            
            var _removeAllHelp = function() {
            	// sdk.utils.log.debugMessage("removing all. current owner: " + _tooltipOwner);
            	if (_tooltipOwner !== ''){
            		$(_tooltipOwner).removeClass(fumettoActiveClass);
            		_tooltipOwner = '';
            	}
                
                    $("a[data-tag-title]")
                        .each(function() {
                            $(this).attr('title', $(this).attr('data-tag-title'));
                        });
                    $("div[id^='popover'].fumetto")
                        .each(function () {
                        		sdk.utils.log.debugMessage("calling destroy");
                            $(this).prev().popover('hide');
                        });
                
                
            };
            
            var _parsePopover = function(helpId) {
                if ('undefined' !== helpId) {
                    var id = helpId.substr(5);
                    var selidArray = $("[id='" + id + "']:visible");
                    if ($(selidArray).length === 0) {
                        return false;
                    }

                    helpId = "#" + helpId;
                    var title = $(helpId).find('.popover-title').text();
                    var content = $(helpId).find('.popover-content').html();
                    var placement = $(helpId).attr('class');
                    var selid = selidArray[0];

                    var originalTitle = "";
                    if ($(selid).is('a')) {
                        originalTitle = $(selid).attr("title");
                    }

                    $(selid)
                        .attr("data-toggle", "popover")
                        .attr("title", title)
                        .attr("data-html", "true")
                        .attr("data-content", content)
                        .attr("data-placement", placement)
                        .attr("container", "body")
                        .attr("data-animation", "fade")
                        .attr("data-tag-title", originalTitle);

                    $(".popover-content").addClass("clearfix");
                    $(selid)
                        .popover({
                            template:
                                '<div class="popover fumetto" role="tooltip"><div class="arrow fumetto"></div><h3 class="popover-title fumetto"></h3><div class="popover-content fumetto"></div></div>'
                        })
                        .popover("show");
                }
            };
            
            

						var _activatePopup = function(newOwner, helpId){
                            
            	if (_tooltipOwner != ''){
            		$(_tooltipOwner).removeClass(fumettoActiveClass);
            	}
            	_tooltipOwner = newOwner;
            	
            	$(_tooltipOwner).addClass(fumettoActiveClass);

              $("#" + fumettoRepositoryName + " > div").each(function () {
              	var currentName = $(this).attr('id');
              	if (!helpId || currentName === 'help_' + helpId){
              		sdk.utils.log.debugMessage("activating:" + currentName);
									_parsePopover(currentName);
              	}
              			
              });
              
              $("#" + fumettoRepositoryMenuName + " > div").each(function () {
                  var currentName = $(this).attr('id');
              	if (!helpId || currentName === 'help_' + helpId)
                  		_parsePopover(currentName);
              });   
            };
            
            var _pageInit = function() {
                // sdk.utils.log.debugMessage("fumetto global init");
                
                if (initialized)
                {
                	return;
                }
                
                initialized = true;
                
                $("body").click(function(event) {
                    try {
                    	if (!event || !event.target)
                    		return;
                    	
                    	sdk.utils.log.debugMessage("global event on: --> " + event.target.id);
                    	if (event.target.id !== ''){
                    		var eventOwner = '#' + event.target.id;	
                    		if (_isCurrentOwnerOrChild(eventOwner, 'global')){
                      	return;
                      }
                    	}
                      
                      _removeAllHelp();
                    } catch (err) {
                        sdk.utils.log.errorException("fumetto error on global click", err);
                    }
                });

                $(window).resize(function() {
                    try {
                        _removeAllHelp();
                    } catch (err) {
                        sdk.utils.log.errorException("fumetto error on global resize", err);
                    }
                });

                // sdk.utils.log.debugMessage("end fumetto global init");

            };
            
            
            
            var _show = function (handler, tooltip) {
                // sdk.utils.log.debugMessage("fumetto open");

                var eventTarget = '';
                // potrebbe essere un funmetto
                //if (handler && handler.event && handler.event.id) {
                //    eventTarget = '#' + handler.event.id;
                //}

                if (handler && handler.id) {
                    eventTarget = '#' + handler.id;
                }
                
                if (eventTarget === '') {
                    return;
                }

                

							
								if (_isCurrentOwnerOrChild(eventTarget, 'show')){
									_removeAllHelp();
									return;
								}
								_removeAllHelp();
							 _activatePopup(eventTarget, tooltip);
            };
            
            var _init = function () {
								_show({ id:'tooltipHelp'});
            };

            fumetto["init"] = _init;
            fumetto["initialize"] = _pageInit;

            // initializes
            sdk.utils.pubsub.subscribe('showFumetto', _show)
            // _pageInit();


            return fumetto;
        })(dom.fumetto || {}, $, args.fumetto || {});
        // namespace sdk.dom
        return dom;
    })(sdk.dom|| {}, $, args && args.dom ? args.dom : {});
    // end namespace sdk.core
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);
