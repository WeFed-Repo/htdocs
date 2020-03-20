<div class="main-content">
        <table class="main-content old-container">
            <tbody>
                <tr>
                    <td style="vertical-align: top;">
                        <div id="MainSection" style="visibility: visible;">

<div class="container"><div id="search" class="search new-riquadro">
    

<div class="page-title">
    <div class="search-flag">
    </div>
    <h1>
        Elenco Distinte
    </h1>
</div>
    <div id="sommarioMessagePanel" style="display: block;">
    <div id="errorPanel" class="col-xs-12 messagePanel error" style="margin-bottom: 0px; margin-top: 0px; display: block;">
        <h3 class="titleSection">Errore</h3>
        <p>
            </p><ul id="message"><li>CCIConnection(execute): CICSECI 9.2 c920-20170908-0821: resource=java:comp/env/eis/CICSHO functionName=PV010PU transactionID=ZIPV timeout=15000: CTG9631E Error occurred during an interaction with CICS: ECI_ERR_RESPONSE_TIMEOUT</li></ul>
        <p></p>
    </div>

    <div id="warnPanel" class="col-xs-12 messagePanel waiting" style="display: none; margin-bottom: 0; margin-top: 0;">
        <h3 class="titleSection">Attenzione</h3>
        <p>
            </p><ul id="message"></ul>
        <p></p>
    </div>
    <div id="infoPanel" class="col-xs-12 messagePanel alert" style="display: none; margin-bottom: 0; margin-top: 0;">
        <h3 class="titleSection">Attenzione</h3>
        <p>
            </p><ul id="message"></ul>
        <p></p>
    </div>
    <div id="successPanel" class="col-xs-12 messagePanel success" style="display: none; margin-bottom: 0; margin-top: 0;">
        <h3 class="titleSection">Esito operazione</h3>
        <p>
            </p><ul id="message"></ul>
        <p></p>
    </div>


    <script type="text/javascript">
        $(function() { 
            var me = $('#sommarioMessagePanel');

            var errorPanel = $('#errorPanel', me);
            var warnPanel = $('#warnPanel', me);
            var infoPanel = $('#infoPanel', me);
            var successPanel = $('#successPanel', me);


            var hideAll = function() {
                errorPanel.hide();
                warnPanel.hide();
                infoPanel.hide();
                successPanel.hide();
            };

            var getTargetPanel = function(errorObject) {
                var toRet = errorPanel;
                // in base a cosa capisco quale pannello devo aprire o chiudere ?
                if (errorObject && errorObject.Messages) {

                    switch (errorObject.Messages[0].Severity) {
                        case 1:
                            toRet = infoPanel;
                            break;
                        case 2:
                            toRet = warnPanel;
                            break;
                        case 3:
                            toRet = errorPanel;
                            break;
                        case 4:
                            toRet = successPanel;
                            break;
                        default:
                            toRet = errorPanel;
                    }
                }
                // in base a cosa capisco quale pannello devo aprire o chiudere ?
                return toRet;
            };

            var messageBuilder = function (errorObject) { 
                if (!errorObject)
                    return '';
                var resource = errorObject.ResourceKey || errorObject.ErrorMessageRes || errorObject.MessageRes;
                var message = errorObject.Message || errorObject.ErrorMessage; 
                if (resource) {
                    var toRet = sdk.resource.get(resource);

                    if (toRet.substring(0,'Risorsa:'.length) === 'Risorsa:'){
                        return message;
                    }

                    if (toRet.formatUnicorn && errorObject.ResourceFormatParameters) {
                        toRet = toRet.formatUnicorn(errorObject.ResourceFormatParameters);
                    }

                    return toRet;

                } else {
                    return message;
                }

            };

            var showMessage = function (errorObject) {
                hideAll();
                if (errorObject && errorObject.Messages) {
                    var targetPanel = getTargetPanel(errorObject);
                    var strMsg = '';
                    $.each(errorObject.Messages,
                        function (i, data) {
                            strMsg += '<li>' + messageBuilder(data) + '</li>';
                        });
                    $('#message', targetPanel).html(strMsg);
                    targetPanel.show();
                    me.show();
                    window.location.href = '#sommarioMessagePanel';
                } else {
                    //TODO: aggiunta David chiedere conferma!!!
                    var targetPanel1 = getTargetPanel(errorObject);
                    var strMsg1 = '';
                    strMsg1 += '<li>Errore generico</li>';
                    $('#message', targetPanel1).html(strMsg1);
                    targetPanel1.show();
                    me.show();
                    window.location.href = '#sommarioMessagePanel';
                }
            };

            var show = function() {
                me.show();
            };

            var hide = function() {
                me.hide();
            };


            hide();

            sdk.utils.pubsub.register('messagePanel.renderError', showMessage);
            sdk.utils.pubsub.register('messagePanel.hide', hide);
            sdk.utils.pubsub.register('messagePanel.show', show);


        });
    </script>
</div>

    <table class="toolbar" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td style="text-align: center;">
                    <div class="divgrid">
                        <table id="tabellaSommario" class="summary" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
                            <tbody id="bodyTabella"><tr class="subtitle bg-green-light" id="tr_az_8"><td class="tdleftWrap bg-green-light" colspan="6" id="div_8" style="border-bottom: 2px solid rgb(255, 255, 255); border-right: 1px solid rgb(255, 255, 255);"><h3 class="new-titleSection">QUERCIA SRL</h3></td><td class="tdrightWrap bg-green-light" style="border-bottom: 2px solid rgb(255, 255, 255);"><b id="b_tot_8">Tot. Distinte: 1</b></td></tr><tr class="subtitle" id="tr_tp_8"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);">Tipo Dispositivo</td><td style="border-right: 1px solid rgb(255, 255, 255);">In modifica <span><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_help.png" border="0" height="20" width="20" style="border: 0px; width: 13px; height: 13px; cursor: pointer;"></span></td><td style="border-right: 1px solid rgb(255, 255, 255);">Da autorizzare</td><td style="border-right: 1px solid rgb(255, 255, 255);">Parzialmente autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Confermata</td><td>N. Distinte</td></tr><tr class="alternacolor idAzienda8 treven" id="32_tr_8"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bonifico Singolo (Ordinario-Urgente)</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">1</span></td></tr><tr class="subtitle bg-green-light" id="tr_az_9"><td class="tdleftWrap bg-green-light" colspan="6" id="div_9" style="border-bottom: 2px solid rgb(255, 255, 255); border-right: 1px solid rgb(255, 255, 255);"><h3 class="new-titleSection">GESCO S.R.L.</h3></td><td class="tdrightWrap bg-green-light" style="border-bottom: 2px solid rgb(255, 255, 255);"><b id="b_tot_9">Tot. Distinte: 29</b></td></tr><tr class="subtitle" id="tr_tp_9"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);">Tipo Dispositivo</td><td style="border-right: 1px solid rgb(255, 255, 255);">In modifica <span><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_help.png" border="0" height="20" width="20" style="border: 0px; width: 13px; height: 13px; cursor: pointer;"></span></td><td style="border-right: 1px solid rgb(255, 255, 255);">Da autorizzare</td><td style="border-right: 1px solid rgb(255, 255, 255);">Parzialmente autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Confermata</td><td>N. Distinte</td></tr><tr class="alternacolor idAzienda9 trodd" id="9_tr_9"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Pagamento Deleghe F24</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">1</span></td></tr><tr class="alternacolor idAzienda9 treven" id="12_tr_9"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bonifici SEPA</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">2</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">20</span></td><td class="tdright"><span class="link">23</span></td></tr><tr class="alternacolor idAzienda9 trodd" id="16_tr_9"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Assegni Circolari</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">1</span></td></tr><tr class="alternacolor idAzienda9 treven" id="32_tr_9"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bonifico Singolo (Ordinario-Urgente)</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">3</span></td><td class="tdright"><span class="link">4</span></td></tr><tr class="subtitle bg-green-light" id="tr_az_12"><td class="tdleftWrap bg-green-light" colspan="6" id="div_12" style="border-bottom: 2px solid rgb(255, 255, 255); border-right: 1px solid rgb(255, 255, 255);"><h3 class="new-titleSection">CONSORZIO P.R.U. STADIO CONEGL</h3></td><td class="tdrightWrap bg-green-light" style="border-bottom: 2px solid rgb(255, 255, 255);"><b id="b_tot_12">Tot. Distinte: 64</b></td></tr><tr class="subtitle" id="tr_tp_12"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);">Tipo Dispositivo</td><td style="border-right: 1px solid rgb(255, 255, 255);">In modifica <span><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_help.png" border="0" height="20" width="20" style="border: 0px; width: 13px; height: 13px; cursor: pointer;"></span></td><td style="border-right: 1px solid rgb(255, 255, 255);">Da autorizzare</td><td style="border-right: 1px solid rgb(255, 255, 255);">Parzialmente autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Confermata</td><td>N. Distinte</td></tr><tr class="alternacolor idAzienda12 trodd" id="1_tr_12"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Ri.Ba.</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">1</span></td></tr><tr class="alternacolor idAzienda12 treven" id="5_tr_12"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Ritiro Effetti (Pagamento Riba)</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">2</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">2</span></td></tr><tr class="alternacolor idAzienda12 trodd" id="7_tr_12"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bonifici Italia</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">1</span></td></tr><tr class="alternacolor idAzienda12 treven" id="9_tr_12"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Pagamento Deleghe F24</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">2</span></td></tr><tr class="alternacolor idAzienda12 trodd" id="12_tr_12"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bonifici SEPA</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">2</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">2</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">3</span></td><td class="tdright"><span class="link">7</span></td></tr><tr class="alternacolor idAzienda12 treven" id="23_tr_12"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bollettino Bancario</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">2</span></td></tr><tr class="alternacolor idAzienda12 trodd" id="32_tr_12"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bonifico Singolo (Ordinario-Urgente)</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">6</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">12</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">31</span></td><td class="tdright"><span class="link">49</span></td></tr><tr class="subtitle bg-green-light" id="tr_az_13"><td class="tdleftWrap bg-green-light" colspan="6" id="div_13" style="border-bottom: 2px solid rgb(255, 255, 255); border-right: 1px solid rgb(255, 255, 255);"><h3 class="new-titleSection">SAR.MAR. SPA</h3></td><td class="tdrightWrap bg-green-light" style="border-bottom: 2px solid rgb(255, 255, 255);"><b id="b_tot_13">Tot. Distinte: 236</b></td></tr><tr class="subtitle" id="tr_tp_13"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);">Tipo Dispositivo</td><td style="border-right: 1px solid rgb(255, 255, 255);">In modifica <span><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_help.png" border="0" height="20" width="20" style="border: 0px; width: 13px; height: 13px; cursor: pointer;"></span></td><td style="border-right: 1px solid rgb(255, 255, 255);">Da autorizzare</td><td style="border-right: 1px solid rgb(255, 255, 255);">Parzialmente autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Confermata</td><td>N. Distinte</td></tr><tr class="alternacolor idAzienda13 treven" id="5_tr_13"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Ritiro Effetti (Pagamento Riba)</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">5</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">7</span></td><td class="tdright"><span class="link">12</span></td></tr><tr class="alternacolor idAzienda13 trodd" id="12_tr_13"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bonifici SEPA</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">2</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">3</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">173</span></td><td class="tdright"><span class="link">178</span></td></tr><tr class="alternacolor idAzienda13 treven" id="23_tr_13"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bollettino Bancario</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">1</span></td></tr><tr class="alternacolor idAzienda13 trodd" id="27_tr_13"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Stipendi SEPA</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">40</span></td><td class="tdright"><span class="link">40</span></td></tr><tr class="alternacolor idAzienda13 treven" id="32_tr_13"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bonifico Singolo (Ordinario-Urgente)</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">2</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">3</span></td><td class="tdright"><span class="link">5</span></td></tr><tr class="subtitle bg-green-light" id="tr_az_318683"><td class="tdleftWrap bg-green-light" colspan="6" id="div_318683" style="border-bottom: 2px solid rgb(255, 255, 255); border-right: 1px solid rgb(255, 255, 255);"><h3 class="new-titleSection">GE.CO.VE. IMMOBILIARE S.R.L.</h3></td><td class="tdrightWrap bg-green-light" style="border-bottom: 2px solid rgb(255, 255, 255);"><b id="b_tot_318683">Tot. Distinte: 8</b></td></tr><tr class="subtitle" id="tr_tp_318683"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);">Tipo Dispositivo</td><td style="border-right: 1px solid rgb(255, 255, 255);">In modifica <span><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_help.png" border="0" height="20" width="20" style="border: 0px; width: 13px; height: 13px; cursor: pointer;"></span></td><td style="border-right: 1px solid rgb(255, 255, 255);">Da autorizzare</td><td style="border-right: 1px solid rgb(255, 255, 255);">Parzialmente autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Confermata</td><td>N. Distinte</td></tr><tr class="alternacolor idAzienda318683 trodd" id="1_tr_318683"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Ri.Ba.</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">3</span></td></tr><tr class="alternacolor idAzienda318683 treven" id="5_tr_318683"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Ritiro Effetti (Pagamento Riba)</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">1</span></td></tr><tr class="alternacolor idAzienda318683 trodd" id="6_tr_318683"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Effetti Impagati</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">2</span></td></tr><tr class="alternacolor idAzienda318683 treven" id="12_tr_318683"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bonifici SEPA</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">1</span></td></tr><tr class="alternacolor idAzienda318683 trodd" id="13_tr_318683"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Incassi Direct Debit</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">1</span></td></tr><tr class="subtitle bg-green-light" id="tr_az_514369"><td class="tdleftWrap bg-green-light" colspan="6" id="div_514369" style="border-bottom: 2px solid rgb(255, 255, 255); border-right: 1px solid rgb(255, 255, 255);"><h3 class="new-titleSection">SAN FERMO 12 S.R.L.</h3></td><td class="tdrightWrap bg-green-light" style="border-bottom: 2px solid rgb(255, 255, 255);"><b id="b_tot_514369">Tot. Distinte: 27</b></td></tr><tr class="subtitle" id="tr_tp_514369"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);">Tipo Dispositivo</td><td style="border-right: 1px solid rgb(255, 255, 255);">In modifica <span><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_help.png" border="0" height="20" width="20" style="border: 0px; width: 13px; height: 13px; cursor: pointer;"></span></td><td style="border-right: 1px solid rgb(255, 255, 255);">Da autorizzare</td><td style="border-right: 1px solid rgb(255, 255, 255);">Parzialmente autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Confermata</td><td>N. Distinte</td></tr><tr class="alternacolor idAzienda514369 treven" id="5_tr_514369"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Ritiro Effetti (Pagamento Riba)</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">2</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">4</span></td><td class="tdright"><span class="link">6</span></td></tr><tr class="alternacolor idAzienda514369 trodd" id="12_tr_514369"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bonifici SEPA</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">20</span></td><td class="tdright"><span class="link">20</span></td></tr><tr class="alternacolor idAzienda514369 treven" id="32_tr_514369"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bonifico Singolo (Ordinario-Urgente)</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">1</span></td></tr><tr class="subtitle bg-green-light" id="tr_az_633660"><td class="tdleftWrap bg-green-light" colspan="6" id="div_633660" style="border-bottom: 2px solid rgb(255, 255, 255); border-right: 1px solid rgb(255, 255, 255);"><h3 class="new-titleSection">PIEVE S.R.L.</h3></td><td class="tdrightWrap bg-green-light" style="border-bottom: 2px solid rgb(255, 255, 255);"><b id="b_tot_633660">Tot. Distinte: 7</b></td></tr><tr class="subtitle" id="tr_tp_633660"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);">Tipo Dispositivo</td><td style="border-right: 1px solid rgb(255, 255, 255);">In modifica <span><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_help.png" border="0" height="20" width="20" style="border: 0px; width: 13px; height: 13px; cursor: pointer;"></span></td><td style="border-right: 1px solid rgb(255, 255, 255);">Da autorizzare</td><td style="border-right: 1px solid rgb(255, 255, 255);">Parzialmente autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Autorizzata</td><td style="border-right: 1px solid rgb(255, 255, 255);">Confermata</td><td>N. Distinte</td></tr><tr class="alternacolor idAzienda633660 trodd" id="1_tr_633660"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Ri.Ba.</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">1</span></td></tr><tr class="alternacolor idAzienda633660 treven" id="9_tr_633660"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Pagamento Deleghe F24</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright"><span class="link">1</span></td></tr><tr class="alternacolor idAzienda633660 trodd" id="12_tr_633660"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bonifici SEPA</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">3</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright"><span class="link">3</span></td></tr><tr class="alternacolor idAzienda633660 treven" id="32_tr_633660"><td class="tdleftWrapBold" style="border-right: 1px solid rgb(255, 255, 255);"><span class="linknounder">Bonifico Singolo (Ordinario-Urgente)</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright" style="border-right: 1px solid rgb(255, 255, 255);"><span class="link">1</span></td><td class="tdright"><span class="link">2</span></td></tr></tbody>
                        </table>
                        <table id="EmptyGridPanel" height="50" border="0" cellspacing="0" cellpadding="0" align="center" valig="top">
                            <tbody></tbody>
                        </table>
                        <table class="comandi Comandi" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>
</div><div class="new-buttons"><input id="ank-btn-back" type="button" value="Indietro" class="btn"></div></div>




<script type="text/javascript">

    var baseUrl = "http://localhost:8009/Anchise2.Web/";

    var responseTipologie;

    //PER DEBUG LOCALE
    //var entryPointComboTipologie = 'http://localhost/Anchise2.Web/Sommario/SommarioBridge/GetTipologieDispo';

    var entryPointComboTipologie = '/Anchise2.Web/Sommario/SommarioBridge/GetTipologieDispo';

    function groupBy(objArray, property) {
        return objArray.reduce(function (acc, obj) {
            var key = obj[property];
            if (!acc[key]) {
                acc[key] = [];
            }
            acc[key].push(obj);
            return acc;
        }, {});
    };
    function getTipologie(success) {

        sdk.net.json(entryPointComboTipologie, null,
            {
                successHandler: function (caller, data, jsonResponse, warningObject) {
                    var newArrayTipologie = [];
                    jsonResponse.Response.forEach(function (item, index) {
                        var IdGroupType = item.IdGroupType;
                        if (dictionaryIdFuncClasseServizio[IdGroupType] !== undefined) {

                            item.classiServizioItec = dictionaryIdFuncClasseServizio[IdGroupType].clItec;
                            item.classiServizioAnchise = dictionaryIdFuncClasseServizio[IdGroupType].clAnc;
                            item.descIt = dictionaryIdFuncClasseServizio[IdGroupType].descIt;
                            item.ordineInElenco = dictionaryIdFuncClasseServizio[IdGroupType].ordineInElenco;

                            newArrayTipologie.push(item);
                        }
                    });
                    responseTipologie = newArrayTipologie;

                    if (success && typeof success === 'function') {
                        success();
                    };
                },
                errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                    sdk.utils.log.errorMessage("ERROR " + textStatus);
                }
            });
    }

    function goToUrl(entryPoint,filter) {
        sdk.net.loadTarget($('#MainSection'), entryPoint, filter);
    }

    function goToListaDistinte(parametri) {
        var filter = costruisciFilter('', parametri);
        var goToAnchise2 = (parametri.responseTipologie.IterType) ? true : false;
        var queryString = {
            numRows: filter.NumeroRighePerPagina,
            max_items_number: filter.NumeroRighePerPagina,
            first_item_count: '1',
            filtroVisibilita: true,
            STATO: filter.IdStatoDistinta || '*',
            intestatario: filter.PiazzaturaRicercaDistinta.IdAzienda,
            sia: parametri.inputCodiceSia || '*',
            banca: filter.LegacyIdBanca,
            abi: filter.PiazzaturaRicercaDistinta.ABIBanca,
            rapporto: '',
            TIPO: parametri.tipologiaSelezionata,
            DA_IMPORTO: filter.Importo.From,
            A_IMPORTO: filter.Importo.To,
            DA_DATA_CREAZIONE: filter.DataCreazione.From,
            A_DATA_CREAZIONE: filter.DataCreazione.To
        };

        if (goToAnchise2) {

            $.post('/anchise.web/Sommario/SommarioA2/SetCookie' + '?'
                + $.param(queryString, true)).success(function (data) {
                    window.top.location.href = parametri.responseTipologie.Url;
                });
        }
        else {
            var formLegacy = $('<form></form>')
                .attr('id', 'formLegacy')
                .attr('method', 'POST');
            $(document.body).append(formLegacy);
            var href = parametri.responseTipologie.Url + '?' + $.param(queryString, true);
            formLegacy.empty();
            var legacyParameters;
            //var params = $.parseJSON(legacyParameters);
            var params;
            if (params != null) {
                $.each( params, function( pkey, pvalue ) {
                    var inputHidden = $('<input>').attr({ type: 'hidden', name: pkey, value: pvalue });
                    formLegacy.append(inputHidden);
                });
            }

            formLegacy.attr("action", href);
            formLegacy.submit();
        }
    }

    function costruisciFilter(filter, parametri) {
        if (typeof filter !== 'object') {
            var filter = new Object();
        }
        //imposto i filtri da passare alle liste o alla sommario
        filter.PiazzaturaRicercaDistinta = {
            IdAzienda: parametri.aziendaSelezionata,
            ABIBanca: parametri.rapportoSelezionato
        };
        filter.DataCreazione = {
            From: parametri.dataFrom,
            To: parametri.dataTo
        };
        filter.Importo = {
            From: parametri.importoFrom,
            To: parametri.importoTo
        };
        filter.NumeroRighePerPagina = parametri.numeroRighePagina;
        filter.IdStatoDistinta = parametri.statoSelezionato;
        filter.IdTipoDispositivo = parametri.responseTipologie.classiServizioAnchise;
        filter.LegacyIdBanca = parametri.idBanca;

        return filter;
    }

    function rigaAzienda(table, azienda, bTotDistinte, idAzienda) {
        var idTrAzienda = 'tr_az_' + idAzienda;
        var rigaAzienda = $('#' + idTrAzienda);

        if (rigaAzienda.length == 0) {

            var tr = $('<tr></tr>')
                .addClass('subtitle bg-green-light')
                .attr('id', idTrAzienda);

            var td = $('<td></td>')
                .addClass('tdleftWrap bg-green-light')
                .css('border-bottom', '2px solid rgb(255, 255, 255)')
                .css('border-right', '1px solid rgb(255, 255, 255)')
                .attr('colspan', '6')
                .attr("id", "div_" + idAzienda);
            var h3 = $('<h3></h3>').addClass('new-titleSection');
            h3.text(azienda);
            td.append(h3);
            tr.append(td);

            var tdTotale = $('<td></td>')
                .addClass('tdrightWrap bg-green-light')
                .css('border-bottom', '2px solid rgb(255, 255, 255)');
            tdTotale.append(bTotDistinte);

            tr.append(tdTotale);
            table.append(tr);
        }
    }

    function rigaTipoDispositivo(table, helpUrlModifica, idAzienda) {
        var idTrTipoDispositivo = 'tr_tp_' + idAzienda;
        var rigaTipoDispositivo = $('#' + idTrTipoDispositivo);
        if (rigaTipoDispositivo.length == 0) {

            var tr = $('<tr></tr>')
                .addClass('subtitle')
                .attr('id', idTrTipoDispositivo);

            var td = $('<td></td>')
                .addClass('tdleftWrapBold')
                .css('border-right', '1px solid rgb(255, 255, 255)')
                .text('Tipo Dispositivo');
            tr.append(td);

            td = $('<td></td>')
                .css('border-right', '1px solid rgb(255, 255, 255)')
                .text('In modifica ');

            var span = $('<span></span>')
                    .click(function () { window.open(helpUrlModifica, "Dettaglio", "toolbar=no,scrollbars=yes,status=no,width=534,height=340"); });

            var img = $('<img />')
                .attr('src', '/anchise.web/Contents/00000/it-IT/Images/help.gif?v=75')
                .css({
                    'border': '0',
                    'width': '13px',
                    'height': '13px',
                    'cursor': 'pointer'
                });

            span.append(img);
            td.append(span);

            tr.append(td);

            td = $('<td></td>')
                .css('border-right', '1px solid rgb(255, 255, 255)')
                .text('Da autorizzare');
            tr.append(td);

            td = $('<td></td>')
                .css('border-right', '1px solid rgb(255, 255, 255)')
                .text('Parzialmente autorizzata');
            tr.append(td);

            td = $('<td></td>')
                .css('border-right', '1px solid rgb(255, 255, 255)')
                .text('Autorizzata');
            tr.append(td);

            td = $('<td></td>')
                .css('border-right', '1px solid rgb(255, 255, 255)')
                .text('Confermata');
            tr.append(td);

            td = $('<td></td>')
                .text('N. Distinte');
            tr.append(td);
            table.append(tr);
        }
    }

    var drawColumn = function (className, styleKey, styleValue, content) {

        var td = $('<td></td>')
            .addClass(className)
            .css(styleKey, styleValue);
        td.append(content);

        return td;
    };

    var drawColumnStatoDistinta = function (className, styleKey, styleValue, riga, tipologia, currentIdAzienda, tr,filtri) {
        var span;
        var tot = 0;

        if (typeof riga !== 'undefined') {

            riga.forEach(function (item, index) {

                tot += item.TotaleDistinte;
            });

            //tot = riga[0].TotaleDistinte;
            span = $('<span></span>').addClass('link').text(tot);

            span.click(function () {
                clickAction(tipologia, riga[0].StatoDistinta, currentIdAzienda,filtri);
            });

        }
        else {
            span = '';
            //tot = 0;
        }

        var td = $('<td></td>')
            .addClass(className)
            .css(styleKey, styleValue);

        td.append(span);
        tr.append(td);

        return tot;
    };

    function rigaTipologia(indiceOrdinamento, itemx, style, objTotali, filtri) {

        var currentIdAzienda = itemx[0][0].idAzienda;
        var totaloneDistinte = 0;

        var tr = $('<tr></tr>')
            .addClass('alternacolor')
            .addClass('idAzienda' + currentIdAzienda)
            .attr("id", indiceOrdinamento + "_tr_" + currentIdAzienda);

        var span;
        span = $('<span></span>').addClass('linknounder').text(itemx[0].tipologia.descIt);

        span.click(function () {
            clickAction(itemx[0].tipologia, '', currentIdAzienda, filtri)
        });
        tr.append(drawColumn('tdleftWrapBold', 'border-right', style, span));

        //parte da 1 altrimenti aggiunge se stesso che ha indice zero
        for (var i = 1; i < itemx.length; i++) {
            for (var y = 0; y < itemx[i].length; y++) {
                itemx[0].push(itemx[i][y]);
            }
        }

        var groupByStatoDistinta = groupBy(itemx[0], 'StatoDistinta');
        //in modifica 6
        objTotali.totaloneDistinte += drawColumnStatoDistinta('tdright', 'border-right', style, groupByStatoDistinta[6], itemx[0].tipologia, currentIdAzienda, tr,filtri);

        //da autorizzare 1
        objTotali.totaloneDistinte += drawColumnStatoDistinta('tdright', 'border-right', style, groupByStatoDistinta[1], itemx[0].tipologia, currentIdAzienda, tr,filtri);

        //parzialmente autorizzata 5
        objTotali.totaloneDistinte += drawColumnStatoDistinta('tdright', 'border-right', style, groupByStatoDistinta[5], itemx[0].tipologia, currentIdAzienda, tr,filtri);

        //autorizzata 2
        objTotali.totaloneDistinte += drawColumnStatoDistinta('tdright', 'border-right', style, groupByStatoDistinta[2], itemx[0].tipologia, currentIdAzienda, tr,filtri);

        //confermata 3
        objTotali.totaloneDistinte += drawColumnStatoDistinta('tdright', 'border-right', style, groupByStatoDistinta[3], itemx[0].tipologia, currentIdAzienda, tr,filtri);

        objTotali.totaleDistintePerAzienda += objTotali.totaloneDistinte;

        //totale della riga
        span = $('<span></span>').addClass('link').text(objTotali.totaloneDistinte);
        span.click(function () {
            clickAction(itemx[0].tipologia, '', currentIdAzienda,filtri);
        });
        tr.append(drawColumn('tdright', '', null, span));

        objTotali.totaloneDistinte = 0;

        return tr;
    }

    function clickAction(tipologia, statoDistinta, currentIdAzienda, filtri) {
        var parametri = {
            aziendaSelezionata: currentIdAzienda,
            idBanca: filtri.LegacyIdBanca,
            rapportoSelezionato: filtri.PiazzaturaRicercaDistinta.ABIBanca,
            tipologiaSelezionata: (tipologia.IterType ? tipologia.classiServizioAnchise : tipologia.classiServizioItec),
            statoSelezionato: statoDistinta,
            numeroRighePagina: filtri.NumeroRighePerPagina,
            responseTipologie: tipologia,
            dataFrom: filtri.DataCreazione.From ? moment(filtri.DataCreazione.From, ["DD/MM/YYYY", "YYYY/MM/DDTHH:mm:ss"])._i : '',
            dataTo: filtri.DataCreazione.To ? moment(filtri.DataCreazione.To, ["DD/MM/YYYY", "YYYY/MM/DDTHH:mm:ss"])._i : '',
            importoFrom: filtri.Importo.From,
            importoTo: filtri.Importo.To
        };
        goToListaDistinte(parametri);
    };

    function formatDateFromServer(filter) {
        filter.DataCreazione.From = filter.DataCreazione.From ? moment(filter.DataCreazione.From).format("DD/MM/YYYY") : '';
        filter.DataCreazione.To = filter.DataCreazione.To ? moment(filter.DataCreazione.To).format("DD/MM/YYYY") : '';
    }

    function formatImportofromServer(filter) {
        //forzo a stringa per utilizzare il replace
        filter.Importo.From += '';
        filter.Importo.To += '';

        filter.Importo.From = filter.Importo.From.replace("." , ",");
        filter.Importo.To = filter.Importo.To.replace("." , ",");
    }



    var dictionaryIdFuncClasseServizio = {
    '8000': {
        clItec: 10,
        clAnc: 'AEA',
        idFunc: '1006130',
        ordineInElenco: 20,
        //descIt: 'Allineamento Archivi'
        descIt: 'Assegni Circolari'
    },
    '9000': {
        clItec: 11,
        clAnc: 'AEI',
        idFunc: '1006140',
        ordineInElenco: 4,
        //descIt: 'Allineamento Archivi IBAN'
        descIt: 'Allineamento Archivi IBAN'
    },
    '12000': {
        clItec: 42,
        clAnc: 'EIM',
        idFunc: '1004070,1004080',
        ordineInElenco: 6,
        //descIt: 'Effetti Impagati'
        descIt: 'Effetti Impagati'
    },
    '11000': {
        clItec: 28,
        clAnc: 'REF',
        idFunc: '1004070,1004080',
        ordineInElenco: 5,
        //descIt: 'Ritiro Effetti (Pagamento Riba)'
        descIt: 'Ritiro Effetti (Pagamento Riba)'
    },
    '31000': {
        clItec: 205,
        clAnc: 'IES',
        idFunc: '1002044',
        ordineInElenco: 18,
        //descIt: 'Incassi Estero'
        descIt: 'Incassi Estero'
    },
    '3000': {
        clItec: 4,
        clAnc: 'IMV',
        idFunc: '1006020',
        ordineInElenco: 2,
        //descIt: 'M.Av'
        descIt: 'M.Av'
    },
    '4000': {
        clItec: 5,
        clAnc: 'RMV',
        idFunc: '1006020',
        ordineInElenco: 19,
        //descIt: 'Richiamo M.Av'
        descIt: 'Richiamo M.Av'
    },
    '1000': {
        clItec: 2,
        clAnc: 'IRB',
        idFunc: '1006010',
        ordineInElenco: 1,
        //descIt: 'Ri.Ba.'
        descIt: 'Ri.Ba.'
    },
    '2000': {
        clItec: 3,
        clAnc: 'RRB',
        idFunc: '1006010',
        ordineInElenco: 21,
        //descIt: 'Richiamo Ri.Ba.'
        descIt: 'Richiamo Ri.Ba.'
    },
    '5000': {
        clItec: 6,
        clAnc: 'IRD',
        idFunc: '1006040',
        ordineInElenco: 3,
        //descIt: 'R.I.D'
        descIt: 'R.I.D'
    },
    '6000': {
        clItec: 7,
        clAnc: 'RRD',
        idFunc: '1006040',
        ordineInElenco: 22,
        //descIt: 'Richiamo R.I.D'
        descIt: 'Richiamo R.I.D'
    },
    '29000': {
        clItec: 201,
        clAnc: 'PAC',
        idFunc: '1004120',
        ordineInElenco: 16,
        //descIt: 'Assegni Circolari'
        descIt: 'Assegni Circolari'
    },
    '30000': {
        clItec: 202,
        clAnc: 'PAQ',
        idFunc: '1004130',
        ordineInElenco: 17,
        //descIt: 'Assegni di Quietanza'
        descIt: 'Assegni di Quietanza'
    },
    '15000': {
        clItec: 100,
        clAnc: 'PBB',
        idFunc: '1004140',
        ordineInElenco: 23,
        //descIt: 'Bollettino Bancario'
        descIt: 'Bollettino Bancario'
    },
    '17000': {
        clItec: 103,
        clAnc: 'PBE',
        idFunc: '1004050',
        ordineInElenco: 8,
        //descIt: 'Bonifico Estero'
        descIt: 'Bonifico Estero'
    },
    '13000': {
        clItec: 63,
        clAnc: 'PBO',
        idFunc: '1004020',
        ordineInElenco: 7,
        //descIt: 'Bonifici Italia'
        descIt: 'Bonifici Italia'
    },
    '18000': {
        clItec: 104,
        clAnc: 'PF4',
        idFunc: '1004090',
        ordineInElenco: 9,
        //descIt: 'Pagamento Deleghe F24'
        descIt: 'Pagamento Deleghe F24'
    },
    '19000': {
        clItec: 105,
        clAnc: 'RF4',
        idFunc: '1004090',
        ordineInElenco: 10,
        //descIt: 'Revoche F24'
        descIt: 'Revoche F24'
    },
    '20000': {
        clItec: 106,
        clAnc: 'PFI',
        idFunc: '1004100',
        ordineInElenco: 11,
        //descIt: 'Pagamento F24 Elementi Identificativi'
        descIt: 'Pagamento F24 Elementi Identificativi'
    },
    '28000': {
        clItec: 200,
        clAnc: 'PST',
        idFunc: '1004040',
        ordineInElenco: 15,
        //descIt: 'Stipendi Italia'
        descIt: 'Stipendi Italia'
    },
    '26000': {
        clItec: 174,
        clAnc: 'SAC',
        idFunc: '1006100',
        ordineInElenco: 14,
        //descIt: 'Allineamento SEDA'
        descIt: 'Allineamento SEDA'
    },
    '32000': {
        clItec: 206,
        clAnc: 'SLD',
        idFunc: '1002046',
        ordineInElenco: 24,
        //descIt: 'Strutture Libere'
        descIt: 'Strutture Libere'
    },
    '27000': {
        clItec: 175,
        clAnc: 'SRC',
        idFunc: '1006120',
        ordineInElenco: 25,
        //descIt: 'Richiesta rendiconto mandati SEDA'
        descIt: 'Richiesta rendiconto mandati SEDA'
    },
    '7000': {
        clItec: 8,
        clAnc: 'VRD',
        idFunc: '1006050',
        ordineInElenco: 26,
        //descIt: 'Variazioni Coordinate RID'
        descIt: 'Variazioni Coordinate RID'
    },
    '23000': {
        clItec: 151,
        clAnc: 'XBN,FBN',
        idFunc: '1004010,1004022',
        ordineInElenco: 12,
        //descIt: 'Bonifici SEPA'
        descIt: 'Bonifici SEPA'
    },
    '25000': {
        clItec: 171,
        clAnc: 'XDD',
        idFunc: '1006030',
        ordineInElenco: 13,
        //descIt: 'Incassi Direct Debit'
        descIt: 'Incassi Direct Debit'
    },
    '24000': {
        clItec: 152,
        clAnc: 'XST',
        idFunc: '1004030',
        ordineInElenco: 27,
        //descIt: 'Stipendi SEPA'
        descIt: 'Stipendi SEPA'
    },
    '33000': {
        clItec: 207,
        clAnc: 'IER',
        idFunc: '1006070',
        ordineInElenco: 28,
        //descIt: 'Elcos/Ribes'
        descIt: 'Elcos/Ribes'
    },
    '34000': {
        clItec: 208,
        clAnc: 'IEU',
        idFunc: '1006060',
        ordineInElenco: 29,
        //descIt: 'EuroIncassi'
        descIt: 'Euroincassi'
    },
    '35000': {
        clItec: 209,
        clAnc: 'MT1',
        idFunc: '1004060',
        ordineInElenco: 30,
        //descIt: 'MT101 Request for Transfer'
        descIt: 'MT101 Request for Transfer'
    },
    '22000': {
        clItec: 252,
        clAnc: 'IPA',
        idFunc: '1004023',
        ordineInElenco: 31,
        //descIt: 'Bonifico Instant Payments'
        descIt: 'Bonifico Singolo (Istantaneo)'
    },
    '23500': {
        clItec: 151,
        clAnc: 'VBN,OBN',
        idFunc: '1004021',
        ordineInElenco: 32,
        //descIt: 'Bonifico Singolo'
        descIt: 'Bonifico Singolo (Ordinario-Urgente)'
    },
    '37000': {
        clItec: 253,
        clAnc: 'RIT',
        idFunc: '1004180',
        ordineInElenco: 33,
        //descIt: 'Ricarica Telefonica'
        descIt: 'Ricarica Telefonica'
    },
    '36000': {
        clItec: 251,
        clAnc: 'BOP',
        idFunc: '1004150',
        ordineInElenco: 34,
        //descIt: 'Bollettino Postale'
        descIt: 'Bollettino Postale'
    }
};

</script>

<script src="/anchise.web/Contents/00000/it-IT/Scripts/alten-anchise.js?v=75" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {

        // questa variabile serve per aggiungere al set di risorse dell'sdk le risorse che mi servono in questo contesto della sommario
        
        
        //vars
        var filtri ={"PiazzaturaRicercaDistinta":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"IdTipoDispositivo":null,"Importo":{"From":null,"To":null},"DataCreazione":{"From":null,"To":null},"CheckValidita":0,"IdStatoDistinta":null,"ListaStatiDistinta":null,"IdDistinteDaDisaggregare":[],"IdDistinteDaCopiare":[],"IdDistinteDaEliminare":[],"IdDistinteDaFirmare":[],"IdAziendaSelected":0,"LegacyParameters":null,"LegacyCodiceSIA":null,"LegacyIdBanca":null,"LegacyFirst_item_count":null,"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":1,"OrdinamentoDirezione":2};
        formatDateFromServer(filtri);
        formatImportofromServer(filtri);

        function setIdBanca(idBanca) {
            filtri.LegacyIdBanca = idBanca;
        };

        //recupero id banca
        var entryPointPiazzaturaLookupAction = '/Anchise.Web/Sommario/SommarioA2/InitializeByPiazzatura?trk=empty';
        var piazzatura = {
            IdAzienda: filtri.PiazzaturaRicercaDistinta.IdAzienda,
            ABIBanca: filtri.PiazzaturaRicercaDistinta.ABIBanca,
            IdRapporto: null
        };
        sdk.net.json(entryPointPiazzaturaLookupAction,
            piazzatura,
            {
                successHandler: function (caller, data, jsonResponse, warningObject) {
                    var banche = jsonResponse.Banche;
                    $.each(banche, function (index, banca) {
                        if (banca.ABI == piazzatura.ABIBanca) {
                            setIdBanca(banca.Id);
                        }
                    });
                },
                errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                    sdk.utils.log.errorMessage("ERRORE " + textStatus);
                }
            });
        
        if (!sessionStorage.getItem('fromWidget') === 'true' || sessionStorage.getItem('fromWidget') === null) {

            FormatYouBizDom($('#MainSection'), false);        
        }
        sessionStorage.removeItem("fromWidget");

        var listaIntestatari = '';
        var listaRapporti = '';
        var listaStatiDistinta = "1,2,3,5,6";
        var listaTipologie = '';
        var entryPointPiazzaturaLookupAction = '/anchise.web/Sommario/SommarioA2/InitializeByPiazzatura?trk=empty';
        var piazzatura;
        var baseUrl = "http://localhost:8009/Anchise2.Web/";

        //PER DEBUG LOCALE
        //var url    = 'http://localhost/Anchise2.Web/Sommario/SommarioBridge/SommarioFindCbi';
        //var urlSdk = 'http://localhost/Youbiz.Sdk.Web/OrderChain/SummaryAnchiseService/Summary';

        var url    = '/Anchise2.Web/Sommario/SommarioBridge/SommarioFindCbi';
        var urlSdk = '/youbiz.sdk.web/OrderChain/SummaryAnchiseService/Summary';

        var elencoTipologie;
        var style = '1px solid rgb(255, 255, 255)';

        var oggettoTabellaJson = [];

        sdk.utils.pubsub.register('callWs1', callWs1);
        sdk.utils.pubsub.register('callWs2', callWs2);
        sdk.utils.pubsub.register('applicaCss', applicaCss);
        sdk.utils.pubsub.register('mostraNessunRisultato', mostraNessunRisultato);

        //click indietro
        $('#ank-btn-back').click(function () {
            unregisterTuttiPubSub();
            var entryPointSommarioA2 = '/anchise.web/Sommario/SommarioA2/FiltriDistinte?trk=empty';
            filtri.ListaStatiDistinta = null;
            communicationLoad(entryPointSommarioA2, filtri);
        });

        function unregisterTuttiPubSub() {
            sdk.utils.pubsub.unregister('callWs1', callWs1);
            sdk.utils.pubsub.unregister('callWs2', callWs2);
            sdk.utils.pubsub.unregister('applicaCss', applicaCss);
            sdk.utils.pubsub.unregister('mostraNessunRisultato', mostraNessunRisultato);
        }

        //declare function nessun risultato
        var nessunRisultato = function () {
            var table = $('tbody', $('#EmptyGridPanel'));
            var tr = $('<tr></tr>');
            var td = $('<td></td>');
            var div = $('<div></div>')
                .addClass('messagePanel alert')
                .css('display', 'block');
            var h3 = $('<h3></h3>').text('Attenzione').addClass('titleSection');
            var p = $('<p></p>');
            var strong = $('<strong></strong>').text('Non risulta alcun dato per i parametri di ricerca immessi');
            p.append(strong);
            div.append(h3);
            div.append(p);
            td.append(div);
            tr.append(td);
            table.append(tr);

            sdk.utils.pubsub.unregister('mostraNessunRisultato', mostraNessunRisultato);

        };


        //declare function popola tabella
        var popolaTabella = function (data) {
            var sommario = data;

            var table = $('tbody', $('#tabellaSommario'));

            //costruisco la pagina di sommario
            $.each(sommario, function (azienda, item) {

                var objTotali = {
                    totaleDistintePerAzienda : 0,
                    totaloneDistinte: 0,
                    totaleDistintePerAziendaDesc: 'Tot. Distinte: '
                };
                var bTotDistinte = $('#' + 'b_tot_' + item[0].idAzienda);

                if (bTotDistinte.length !== 0) {

                    objTotali.totaleDistintePerAzienda = parseInt(
                        bTotDistinte.text()
                            .substring(bTotDistinte.text()
                                .lastIndexOf(':') + 1, bTotDistinte.text()
                                .length)
                            .trim());
                } else {
                    bTotDistinte = $('<b></b>').attr('id', 'b_tot_' + item[0].idAzienda);
                }
                
                rigaAzienda(table, item[0].RagioneSociale, bTotDistinte, azienda);
                rigaTipoDispositivo(table, '/ibbweb/newstyle/html/help/AreaDispositiva/GestioneDistinte/StatoModifica.htm', item[0].idAzienda);

                var groupByclasseServizio = groupBy(item, 'ClasseServizio');
                var array = [];

                //each per assegnare la proprietà ordineInElenco
                $.each(groupByclasseServizio, function (indexAA, itemxx) {
                    var groupByclasseServizioAnchise = groupBy(elencoTipologie, 'classiServizioAnchise');
                    var elemenoClasse = groupByclasseServizioAnchise[indexAA];

                    if (typeof elemenoClasse !== 'undefined') {
                        groupByclasseServizio[indexAA].ordineInElenco = elemenoClasse[0].ordineInElenco;
                        groupByclasseServizio[indexAA].tipologia = elemenoClasse[0];
                    } else {
                        $.each(groupByclasseServizioAnchise, function (index, item) {
                            if (index.indexOf(indexAA) !== -1) {
                                groupByclasseServizio[indexAA].ordineInElenco = item[0].ordineInElenco;
                                groupByclasseServizio[indexAA].tipologia = item[0];
                            }
                        })
                    }
                    array.push(groupByclasseServizio[indexAA]);
                });

                var ordineInElenco = groupBy(array, 'ordineInElenco');

                var append = true;
                
                $.each(ordineInElenco, function (i, itemx) {
                    var indiceOrdinamento = i;
                    //questa IF serve per identificare se una tipologia è stata mappata nella variabile dictionaryIdFuncClasseServizio. Se è undefined significa che non è mappata e quindi non verrà aggiunta la riga
                    if (indiceOrdinamento !== "undefined") {
                        
                        var tr = rigaTipologia(indiceOrdinamento, itemx, style, objTotali, filtri);
                        var trACuiAnteporreAltraTr;

                        //recupero l'elenco dei tr di una determinata azienda che sono già state inserite in tabella
                        $.each($('tr.' + "idAzienda" + item[0].idAzienda), function (i, x) {

                            var idOfTr = $(this).attr('id');
                            var indice = idOfTr.substring(0, idOfTr.indexOf('_'));

                            if (parseInt(indiceOrdinamento) > parseInt(indice)) {
                                trACuiAnteporreAltraTr = '#' + idOfTr;
                                append = true;
                            } else {
                                trACuiAnteporreAltraTr = '#'+idOfTr;
                                append = false;
                                return append;
                            }
                        })
                        //inserisco la riga solo se tutte le righe già inserite hanno un indice minore di quello da inserire.
                        if (append) {
                            if (trACuiAnteporreAltraTr === undefined) {
                                trACuiAnteporreAltraTr = $('#tr_tp_' + item[0].idAzienda);
                            }
                            $(trACuiAnteporreAltraTr).after(tr);

                            append = false;
                        } else {
                            $(trACuiAnteporreAltraTr).before(tr);
                            append = false;
                        }
                    }
                })

                bTotDistinte.text(objTotali.totaleDistintePerAziendaDesc + objTotali.totaleDistintePerAzienda);
                objTotali.totaleDistintePerAzienda = 0;


            })
        };

        var flagPerAbilitazioni = {
            f1 : false,
            f2: false,
            nessunRisultatoF1: false,
            nessunRisultatoF2: false

        }

        function applicaCss(flagPerAbilitazioni) {
            if (flagPerAbilitazioni.f1 == true && flagPerAbilitazioni.f2 == true) {
                //per avere le righe alternate
                $('table.grid>tbody>tr:odd').addClass('trodd');
                $('table.grid>tbody>tr:even').addClass('treven');

                $('table.summary>tbody>tr.alternacolor:odd').addClass('trodd');
                $('table.summary>tbody>tr.alternacolor:even').addClass('treven');

                //chiamata a una funzione per la manipolazione del DOM
                //FormatYouBizDom($('#MainSection'), false);
                sdk.utils.pubsub.unregister('applicaCss', applicaCss);
            }

            $('img[src*="help.gif"]').each(function (index, element) {
                replaceIcon($(this), 'i_help');
            });
        }

        function replaceIcon(element, filename) {
            var imagePath = globalRestylingImagePath;
            if (element.is('a')) {
                if ($('img', element).length > 0)
                    $('img', element).attr('src', imagePath + filename + '.png').attr('border', 0).attr('height', 20).attr('width', 20);
                else
                    element.html('<img src="' + imagePath + filename + '.png' + '" border="0" width="20" height="20" />');
            } else
                element.attr('src', imagePath + filename + '.png').attr('border', 0).attr('height', 20).attr('width', 20);

            element.removeClass('ui-icon').removeClass('ank-icon');
        }

        //function scatenata da chiamata ws2 per popolare la tabella e applicare gli stili
        function callWs1(groupByAzienda) {
            popolaTabella(groupByAzienda);
            sdk.utils.pubsub.unregister('callWs1', callWs1);

            flagPerAbilitazioni.f1 = true;
            sdk.utils.pubsub.send('applicaCss', flagPerAbilitazioni);
        }

        //function scatenata da chiamata ws2 per popolare la tabella e applicare gli stili
        function callWs2(groupByAzienda) {
            popolaTabella(groupByAzienda);
            sdk.utils.pubsub.unregister('callWs2', callWs2);

            flagPerAbilitazioni.f2 = true;
            sdk.utils.pubsub.send('applicaCss', flagPerAbilitazioni);
        }

        function mostraNessunRisultato(flagPerAbilitazioni) {
            if (flagPerAbilitazioni.nessunRisultatoF1 == true && flagPerAbilitazioni.nessunRisultatoF2 == true) {
                nessunRisultato();
                sdk.utils.pubsub.unregister('mostraNessunRisultato', mostraNessunRisultato);
            }

        }

        //call function che recupera la tipologie
        getTipologie(function () {

            elencoTipologie = responseTipologie;
            responseTipologie.forEach(function (item, index) {
                listaTipologie += item.classiServizioAnchise + ',';
            });

            listaTipologie = listaTipologie.replace(/,\s*$/, "");
            var piazzatura =
                {
                    IdAzienda: filtri.PiazzaturaRicercaDistinta.IdAzienda,
                    ABIBanca: filtri.PiazzaturaRicercaDistinta.ABIBanca,
                    IdRapporto: filtri.PiazzaturaRicercaDistinta.IdRapporto
                };

            sdk.net.json(entryPointPiazzaturaLookupAction,
                piazzatura,
                {
                    successHandler: function (caller, data, jsonResponse, warningObject) {
                        listaRapporti = '';
                        listaIntestatari = '';

                        var groupByIdAzienda = groupBy(jsonResponse.Aziende, 'IdAzienda');

                        if (typeof groupByIdAzienda[piazzatura.IdAzienda] === 'undefined') {
                            //recupero gli id azienda
                            for (var a1 in groupByIdAzienda) {
                                listaIntestatari += a1 + ',';
                            }
                            listaIntestatari = listaIntestatari.replace(/,\s*$/, "");
                        } else {
                            listaIntestatari = piazzatura.IdAzienda;
                        }

                        //recupero la lista dei rapporti
                        for (var r1 in jsonResponse.Rapporti) {
                            listaRapporti += jsonResponse.Rapporti[r1].Id + ',';
                        }
                        listaRapporti = listaRapporti.replace(/,\s*$/, "");

                        var elencoStatiDistintaForParam;
                        
                        if (filtri.IdStatoDistinta !== null) {
                            elencoStatiDistintaForParam = filtri.IdStatoDistinta;
                        } else {
                            if (filtri.ListaStatiDistinta !== null) {
                                elencoStatiDistintaForParam = filtri.ListaStatiDistinta;
                            }else {
                                elencoStatiDistintaForParam = listaStatiDistinta;
                            }
                        }

                        //chiamata ad A2 per la sommario
                        var param = {
                            'searchParam': {
                                'ListaIntestatari': listaIntestatari,
                                'ListaRapporti': listaRapporti,
                                'listaStatoDistinta': elencoStatiDistintaForParam,
                                'ListaTipologieDistinte': (filtri.IdTipoDispositivo || listaTipologie),
                                'CodiceAbi': filtri.PiazzaturaRicercaDistinta.ABIBanca,
                                'Importo': filtri.Importo,
                                'DataCreazione': {
                                    'From': filtri.DataCreazione.From ? moment(filtri.DataCreazione.From, ["DD/MM/YYYY", "YYYY/MM/DDTHH:mm:ss"]) : '',
                                    'To': filtri.DataCreazione.To ? moment(filtri.DataCreazione.To, ["DD/MM/YYYY", "YYYY/MM/DDTHH:mm:ss"]): ''
                                },
                                'NumeroRighePerPagina': filtri.NumeroRighePerPagina,
                                'OrdinamentoColonna': 1,
                                'OrdinamentoDirezione': 2,
                                'PaginaRichiesta': 1
                            }
                        };
                        sdk.net.json(url,
                            param,
                            {
                                successHandler: function (caller, data, jsonResponse, warningObject) {
                                    //debugger
                                    if (jsonResponse.Response.length > 0) {
                                        var groupByAzienda = groupBy(jsonResponse.Response, 'idAzienda');
                                        sdk.utils.pubsub.send('callWs1', groupByAzienda);
                                    } else {
                                        flagPerAbilitazioni.nessunRisultatoF1 = true;
                                        sdk.utils.pubsub.send('mostraNessunRisultato', flagPerAbilitazioni);

                                        flagPerAbilitazioni.f1 = true;
                                        sdk.utils.pubsub.send('applicaCss', flagPerAbilitazioni);
                                    }
                                },
                                errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {

                                    flagPerAbilitazioni.nessunRisultatoF1 = true;
                                    sdk.utils.pubsub.send('mostraNessunRisultato', flagPerAbilitazioni);

                                    flagPerAbilitazioni.f1 = true;
                                    sdk.utils.pubsub.send('applicaCss', flagPerAbilitazioni);

                                    sdk.utils.log.errorMessage("ERROR " + textStatus);
                                }
                            });
                    },
                    errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {

                        flagPerAbilitazioni.nessunRisultatoF1 = true;
                        sdk.utils.pubsub.send('mostraNessunRisultato', flagPerAbilitazioni);

                        sdk.utils.log.errorMessage("ERROR " + textStatus);
                    }
                });







            ///////////////////////////////////////////// SECONDA CHIAMATA a mondo Online //////////////////////////////////////////////////
            sdk.net.json(entryPointPiazzaturaLookupAction,
                piazzatura,
                {
                    successHandler: function (caller, data, jsonResponse, warningObject) {

                        listaRapporti = '';
                        listaIntestatari = '';

                        var groupByIdAzienda = groupBy(jsonResponse.Aziende, 'IdAzienda');

                        if (typeof groupByIdAzienda[piazzatura.IdAzienda] === 'undefined') {
                            //recupero gli id azienda
                            for (var a1 in groupByIdAzienda) {
                                listaIntestatari += a1 + ',';
                            }
                            listaIntestatari = listaIntestatari.replace(/,\s*$/, "");
                        } else {
                            listaIntestatari = piazzatura.IdAzienda;
                        }

                        //recupero la lista dei rapporti
                        for (var r1 in jsonResponse.Rapporti) {
                            listaRapporti += jsonResponse.Rapporti[r1].Id + ',';
                        }
                        listaRapporti = listaRapporti.replace(/,\s*$/, "");

                        var elencoStatiDistintaForParam;
                        if (filtri.IdStatoDistinta !== null) {
                            elencoStatiDistintaForParam = filtri.IdStatoDistinta;
                        } else {
                            if (filtri.ListaStatiDistinta !== null) {
                                elencoStatiDistintaForParam = filtri.ListaStatiDistinta;
                                
                            } else {
                                elencoStatiDistintaForParam = '0';
                            }
                        }

                        //chiamata a mondo Online per la sommario:
                        /* ci sono delle differenze.
                        listaStatoDistinta se non è impostato passo zero e se li calcola lui
                        ListaTipologieDistinte se non è impostato passo vuoto e se li calcola lui. 06/05/19 - Logica cambiata: ora passo la lista completa e ci pensano loro a filtrare
                        */
                        var param = {
                            'searchParam': {
                                'ListaIntestatari': listaIntestatari,
                                'ListaRapporti': listaRapporti,
                                'listaStatoDistinta': elencoStatiDistintaForParam,
                                'ListaTipologieDistinte': (filtri.IdTipoDispositivo || listaTipologie),
                                'CodiceAbi': filtri.PiazzaturaRicercaDistinta.ABIBanca,
                                'Importo': filtri.Importo,
                                'DataCreazione': {
                                    'From': new Date(moment(filtri.DataCreazione.From)),
                                    'To': new Date(moment(filtri.DataCreazione.To))
                                },
                                'NumeroRighePerPagina': filtri.NumeroRighePerPagina,
                                'OrdinamentoColonna': 1,
                                'OrdinamentoDirezione': 2,
                                'PaginaRichiesta': 1
                            }
                        };
                        //debugger;
                        sdk.net.json(urlSdk,
                            param,
                            {
                                successHandler: function (caller, data, jsonResponse, warningObject) {
                                    //debugger;
                                    if (jsonResponse.length > 0) {

                                        var groupByAzienda = groupBy(jsonResponse, 'idAzienda');
                                        sdk.utils.pubsub.send('callWs2', groupByAzienda);

                                    } else {

                                        flagPerAbilitazioni.nessunRisultatoF2 = true;
                                        sdk.utils.pubsub.send('mostraNessunRisultato', flagPerAbilitazioni);

                                        flagPerAbilitazioni.f2 = true;
                                        sdk.utils.pubsub.send('applicaCss', flagPerAbilitazioni);
                                    }
                                },
                                errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                                    flagPerAbilitazioni.nessunRisultatoF2 = true;
                                    sdk.utils.pubsub.send('mostraNessunRisultato', flagPerAbilitazioni);

                                    flagPerAbilitazioni.f2 = true;
                                    sdk.utils.pubsub.send('applicaCss', flagPerAbilitazioni);

                                    sdk.utils.log.errorMessage("ERROR " + textStatus);
                                    sdk.utils.pubsub.send('messagePanel.renderError', errorObject);

                                }
                            });
                    },
                    errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {

                        flagPerAbilitazioni.nessunRisultatoF2 = true;
                        sdk.utils.pubsub.send('mostraNessunRisultato', flagPerAbilitazioni);

                        sdk.utils.log.errorMessage("ERROR " + textStatus);
                    }

                });
            ///////////////////////////////////////////// SECONDA CHIAMATA a DAVID //////////////////////////////////////////////////



        });

    });
</script>

</div>
                        <div id="mario">
    <script type="text/javascript">
        $(document).ready(function () {
            var filter = {"PiazzaturaRicercaDistinta":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"IdTipoDispositivo":null,"Importo":{"From":null,"To":null},"DataCreazione":{"From":null,"To":null},"CheckValidita":0,"IdStatoDistinta":null,"ListaStatiDistinta":null,"IdDistinteDaDisaggregare":[],"IdDistinteDaCopiare":[],"IdDistinteDaEliminare":[],"IdDistinteDaFirmare":[],"IdAziendaSelected":0,"LegacyParameters":null,"LegacyCodiceSIA":null,"LegacyIdBanca":null,"LegacyFirst_item_count":null,"PaginaRichiesta":0,"NumeroRighePerPagina":0,"OrdinamentoColonna":-1,"OrdinamentoDirezione":0};
            
            if (sessionStorage.getItem('fromWidget') === 'true') {
                
                var entryPointSommarioA2 = '/anchise.web/Sommario/SommarioA2/Ricerca?trk=empty';
                filter.ListaStatiDistinta = sessionStorage.getItem('listaStati');

                communicationLoad(entryPointSommarioA2, filter);
            } else {

                var entryPointFiltriDistinte = '/anchise.web/Sommario/SommarioA2/FiltriDistinte?trk=empty';
                communicationLoad(entryPointFiltriDistinte);
            }

            
            sessionStorage.removeItem("listaStati");
    });
    </script>
</div>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td style="vertical-align: bottom;">
                        


                    </td>
                </tr>
            </tfoot>
        </table>
    </div>