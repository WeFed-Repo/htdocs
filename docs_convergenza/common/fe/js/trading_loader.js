// Loader dinamico risorse TOL
var isTolLoaded = false;

/*
</script>
	<script type="text/javascript" src="/common/fe/assets/amcharts/amcharts.js"></script>
	<script type="text/javascript" src="/common/fe/assets/amcharts/pie.js"></script>
	<script type="text/javascript" src="/WEBHTEXT"></script>
	<script type="text/javascript" src="/WEBHTEXT"></script>
	<script type="text/javascript" src="/WEBHTEXT"></script>
	<script type="text/javascript" src="/WEBHTEXT></script>
	<script type="text/javascript" src="/WEBHTEXT"></script>
	<script type="text/javascript" src="/WEBHTEXT"></script>


*/

$(function(){
    // Script al domready

    var extContext = getPathExtContext();
    // Polyfill (caricabile in differita)
    $.getScript(extContext + "/wrapped/goToStaticDirect/tp/polyfill/promise.polyfill.min.js");
    
    // Script primario
    $.getScript(extContext + "/wrapped/goToStaticDirect/mww/mww.js", function(){
        $.getScript(extContext + "/wrapped/goToStaticDirect/youweb/widgetLoader.js", function(){
            $.getScript(extContext + "/wrapped/goToStaticDirect/mww/fileLoader.js",function(){
                $.getScript(extContext +  "/wrapped/goToStaticDirect/mww/net/ajax.js",function(){
                    $.getScript(extContext +  "/wrapped/goToStaticDirect/webank/boot.js",function(){
                        isTolLoaded = true;
                    });
                });
            });
        });
              
    });    
});