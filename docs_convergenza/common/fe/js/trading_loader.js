// Loading TOL dinamico in differita
$(function(){
    // Script al domready
    var extContext = (typeof getPathExtContext == "undefined")?  "" : getPathExtContext();
    // Polyfill (caricabile in differita)
    $.getScript(extContext + "/wrapped/goToStaticDirect/tp/polyfill/promise.polyfill.min.js");
    
    // Script primario
    $.getScript(extContext + "/wrapped/goToStaticDirect/mww/mww.js", function(){
        $.getScript(extContext + "/wrapped/goToStaticDirect/youweb/widgetLoader.js", function(){
            $.getScript(extContext + "/wrapped/goToStaticDirect/mww/fileLoader.js",function(){
                $.getScript(extContext +  "/wrapped/goToStaticDirect/mww/net/ajax.js",function(){
                    $.getScript(extContext +  "/wrapped/goToStaticDirect/webank/boot.js",function(){
                        $(document).trigger("isTolLoaded");
                    });
                });
            });
        });
              
    });    
});