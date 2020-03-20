<div id="mainSection">
     <style>                   
.contentF23 > iframe {
    display: block;
    width: 100%;
    height: 600px;
    border: none;
    overflow: auto;
    overflow-y: scroll;
    overflow-x: hidden;
    /* min-height: 500px; */
}


</style>



<div id="893ad060f175437c81c900d6df0a5def_1">


<script type="text/javascript">
    $(function () {
        //Spiegazione codice.
        //Visto che: 
        //A: se visualizzata la pagina esterna per la compilazione del modulo --> rendere invisibile la sezione contentLeft e allargare la sezione mainContent
        //B: se visualizzata la pinpad --> rendere visibile la sezione contentLeft e dimensione della sezione mainContent come di default
        var jPanelContentLeft = $('#contentLeft');
        var jPanelMainContent = $('#mainContent');
        jPanelContentLeft.show();
        jPanelMainContent.removeClass('col-xs-100').addClass('col-xs-80');
    });
</script>
<div id="c731b8a7d7f8452496817ff29500be7b_1">

<script type="text/javascript">
    $(function () {
        $('.main').css('margin-top', '0');
        //Spiegazione codice.
        //Visto che: 
        //A: se visualizzata la pagina esterna per la compilazione del modulo --> rendere invisibile la sezione contentLeft e allargare la sezione mainContent
        //B: se visualizzata la pinpad --> rendere visibile la sezione contentLeft e dimensione della sezione mainContent come di default
        var jPanelContentLeft = $('#contentLeft');
        var jPanelMainContent = $('#mainContent');
        jPanelContentLeft.hide();
        jPanelMainContent.removeClass('col-xs-80').addClass('col-xs-100');
    });
</script>

<div id="b04bb7ab1195450590f9bd36802a97c4_5">
    <div id="contentf23" class="contentF23">
        
       <iframe id="iframef23" src="strutt_iframe.php?iframe=01.f23/iframe_moduloF23.php&cantiere=sdkext" scrolling="yes"></iframe>
        </frame>
    

         
    </div>
</div>  

  </div>  


<script type="text/javascript">
    $(function () {

        var jPanel = $('#c731b8a7d7f8452496817ff29500be7b_1');
        $("#btnAccedi", jPanel).addClass("disabled");
        var paramCartInfo = {"SecureType":3,"ApplicationPath":"/Youbiz.Sdk.Web","WorkflowHandlerUri":"","WorkflowHandlerChunkUri":"","CartMode":"40,0,10,23"};
        /*Tipi di pinpad                0:pinpad tipo old                1:pinpad Tipo new                2:pinpad Tipo Testuale            */
        if (paramCartInfo != null) {
            paramCartInfo.pinpadMode = 0;
            paramCartInfo.pathTokenImg = '/Youbiz.Sdk.Web/Contents/00000/it-IT/Images/pp/dispositivo_3.gif?v=118';
        }

        var paramOptions = {
            cartInfo: paramCartInfo,
            pinpadDisclaimer: ' Per effettuare l&#39;accesso al sito &#232; necessario inserire la password usa e getta riportata sul display del dispositivo di sicurezza.',
            idInputHidden: "field-otp-hidden",
            param : { ctrPinLenght : function(bEnabled) {if (bEnabled) {$("#btnAccedi", jPanel).removeClass('disabled');} else {$("#btnAccedi", jPanel).addClass('disabled');};}}
        }
        $("#pinpad", jPanel).pinpadnew(paramOptions);

        var valueToSubmit = $("#field-otp-hidden", jPanel);
        $("#btnAccedi", jPanel).click(function () {
            sdk.net.loadTarget(jPanel, '/Youbiz.Sdk.Web/F23/Modulo/GoToF23Module', { pinpadCode: valueToSubmit[0].value });
        });
    });
</script>
  </div>
</div>