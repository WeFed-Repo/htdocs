<div class="main-content">
        <table class="main-content old-container">
            <tbody>
                <tr>
                    <td style="vertical-align: top;">
                        <div id="MainSection" style="visibility: visible;">
    <div class="container"><div class="warning new-riquadro">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td colspan="2" class="redtext page-title"><div class="search-flag"></div><h1>
                        Sono presenti errori nel flusso che ne impediscono l'importazione
                    </h1></td>
                </tr>
                <tr class="head-title">
                        <td style="text-align:center;width:550px;"> Riepilogo dei primi 10 errori rilevati:</td>
                    <td style="text-align:right; width:20px;">
                        
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">
                        <table cellpadding="0" cellspacing="0">

    <tbody><tr>
        <td style="border:1px solid;border-color: #cccccc">
            <table style=" border-collapse: collapse;" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <td style="vertical-align:top">
                        Progressivo:
                    </td>
                    <td style="vertical-align:bottom;font-weight:normal" nowrap="nowrap">
                        1
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top">
                        Record:
                    </td>
                    <td style="vertical-align:bottom;font-weight:normal" nowrap="nowrap">
                        
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top">
                        Posizione:
                    </td>
                    <td style="vertical-align:bottom;font-weight:normal" nowrap="nowrap">
                        
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top">
                        Lunghezza:
                    </td>
                    <td style="vertical-align:bottom;font-weight:normal" nowrap="nowrap">
                        
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top">
                        Nome del campo:
                    </td>
                    <td style="vertical-align:bottom;font-weight:normal" nowrap="nowrap">
                        
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top">
                        Valore errato:
                    </td>
                    <td style="vertical-align:bottom;font-weight:normal" nowrap="nowrap">
                        
                    </td>
                </tr>
            </tbody></table>
        </td>
        <td style="vertical-align:top;border:1px solid;border-color: #cccccc">
            <table style=" border-collapse: collapse;" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <td>
                        Commento:
                    </td>
                    <td style="font-weight:normal; text-align: left; white-space: normal;">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        Messaggio:
                    </td>
                    <td style="font-weight:normal; text-align: left; white-space: normal;">
                        Tipologia dispositiva non importabile.
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </tbody></table>
        </td>
    </tr>
                        </tbody></table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="redtext">
                        <table cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td>
                                    <label class="border-red">Il flusso è stato scartato</label>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <td class="Comandi">
                                        
                                    </td>
                                </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div><div class="new-buttons"><input id="ank-btn-ok" type="button" value="OK" data-bind="singleClick: function(){ KoGoTo('/anchise.web/DISTINTE/AssegnaConto?trk=empty');}" class="btn"></div></div>
<script type="text/javascript">
                                            $(function () { RegisterViewModel("ImportViewModel",[{"IdAzienda":null,"IdLogImportazioneFlusso":5402562,"SequenzaLogImportazioneFlusso":1,"TipoIdentificativoRecord":null,"DescrizioneValoreErrato":null,"ChiaveCodificaDato":null,"DescrizioneDato":null,"InfoDettaglioDato":null,"NumProgressivoDato":0,"NumLunghezzaDato":null,"NumInizioDato":null,"CodiceIdentificativoEsito":null,"CodiceProgressivoEsito":1,"Messaggio":"Tipologia dispositiva non importabile.","NumDisposizione":"0","NumSottodistinta":0}], true);UpdateViewModelBinding();}); </script></div>
                        

<style>
    .progress-label {
        position: absolute;
        left: 46%;
        top: 4px;
        font-weight: bold;
    }

    #progressbar{
        position:relative;
    }

    .ui-widget-header{
        background: darkorange;
    }

    .hide {
        display: none;
    }

    .text-center {
        text-align: center;
    }

    .bold {
        font-weight: bold;
    }

    .traffic-light-cell {
        width: 10%;
        padding-left: 10px;
    }

        .traffic-light-cell img {
            border: 0;
            width: 10px;
            height: 10px;
        }
</style>


<script type="text/javascript">
    var polling;
    var initialJobItems;
    var PROG_DURATION = 350;

    var AsyncStatus = (function(){
        // enum ASYNC$LKStatus
        var INSERITO = 0;
        var INELABORAZIONE = 1;
        var OK = 2;
        var WARNING= 3;
        var KO = 4;
        // method
        var IsDone = function (idStatus){
            return idStatus > 1;
        };

        return {
            INSERITO: INSERITO,
            INELABORAZIONE: INELABORAZIONE,
            OK: OK,
            WARNING: WARNING,
            KO: KO,
            IsDone: IsDone
        }
    }());

    // Stop polling execution and 'redirect' to result page
    var exitFromProgressPage = function (importAndItems){
        clearTimeout(polling);

        $('#numImportazione').text(importAndItems.Job.NumeroImportazione);

        $('.traffic-light-cell').find('img')
                                .attr({"src": "/anchise.web/Contents/00000/it-IT/Images/semaforo_verde.png?v=77" });

        setProgressBar(100, function() {
            var id = 3117290;
            var d = {
                jobId: id
            };

            $("#divImport").hide();
            communicationLoad('/anchise.web/DISTINTE/AssegnaConto/GetImportDetail?trk=empty', d);
        });
    };

    // Set timeout before invoke doPoll function
    var setTimeoutDoPoll = function (){
        polling = setTimeout(doPoll, 500);
    };

    // Set the length and the style of the progressbar
    // percentage in [0,100]
    var setProgressBar = function (percentage, callback){
        var progressbar = $( "#progressbar" );

        progressbar.progressbar("value", parseInt(percentage));

        if (callback && typeof callback == "function") {
            callback();
        }
    };

    // Update panel status job items named 'ElaborazioneDati'
    var updateElaborazioneDati = function (jobAndItems){
        var ji = jobAndItems.JobItems;
        var numImported = 0,
            numModified = 0,
            numRejected = 0;

        for (var i = 0; i < ji.length; i++) {
            switch (ji[i].IdStatus) {
                case AsyncStatus.OK:
                    numImported++;
                    break;
                case AsyncStatus.WARNING:
                    numModified++;
                    break;
                case AsyncStatus.KO:
                    numRejected++;
                    break;
            }
        }

        $('#jiImported').text(numImported);
        $('#jiModified').text(numModified);
        $('#jiRejected').text(numRejected);
    }

    // Polling
    function doPoll() {

        var d = { id: 3117290 };

        $.ajax({
            url: '/anchise.web/DISTINTE/AssegnaConto/GetJobProgress?trk=empty',
            data: d,
            cache: false,
            method: 'GET',
            success: function (res) {

                if(!initialJobItems) {
                    initialJobItems = res.JobItems.length;
                    $('#initialJobItems').text(res.JobItems.length);
                }

                if (initialJobItems > 1) {
                    // Multidistinta
                    $('#divMultidistinta').show();

                    updateElaborazioneDati(res);

                    setProgressBar(res.Job.Percentage);

                    if(res.Job.ExitFromProgressPage){
                        exitFromProgressPage(res);
                    }else{
                        setTimeoutDoPoll();
                    }
                }else{
                    // Singola
                    if(res.Job.ExitFromProgressPage){
                        exitFromProgressPage(res);
                    }else{
                        var progPercentage = (res.JobItems.length > 0) ? res.JobItems[0].Perc : 0;

                        setProgressBar(progPercentage);

                        setTimeoutDoPoll();
                    }
                }

            }
        });
    }

    // Document Ready
    $(document).bind("ready",function() {

        // Restyling
        var mainSectionSelector = '#MainSection';
        var mainSection = $(mainSectionSelector);
        var divImport = $('#divImport').parent();

        divImport.remove();
        mainSection.html(divImport);

        mainSection.css('visibility', 'hidden');
        FormatYouBizDom(mainSection, false);
        mainSection.css('visibility', 'visible');

        // Initialize progressbar
        var progressbar = $( "#progressbar" ),
            progressLabel = $( ".progress-label" );

        progressbar.progressbar({
            value: false,
            change: function() {
                progressLabel.text( progressbar.progressbar( "value" ) + "%" );
            }
        });

        // Polling
        setTimeoutDoPoll();

    });
</script>

                    </td>
                </tr>
            </tbody>
                <tfoot>
                    <tr>
                        <td style="vertical-align: bottom;">
                            
<div class="divFooter" id="divFooter">
    <div class="container-fluid footer" style="">
        <div class="footer-container" style="color: #003b79;">
            <div class="row" style="padding: 0; margin: 0 auto">
                <div class="col-xs-6" style="padding: 0; margin-top: 0">
                    <div class="col-xs-12">
                        <h4 style="font-size: 14.6px;">
                            Assistenza Clienti
                        </h4>
                    </div>
                    <div class="col-xs-12" style="margin-bottom: 6px;line-height: 1.2em;font-size: 1.2em;">
                        <div style="display: inline-block;">
                            <img src="/anchise.web/Contents/00000/it-IT/Images/assistenza-footer.png?v=77">
                        </div>
                        <div style="display: inline-block; width: 84%; vertical-align: top;font-size: 13.26px;">
                            Numero Verde
                            <strong>
                                800.607.227
                            </strong>
                            <br>
                            Dall'estero
                            <strong>
                                +39 02.43371097
                            </strong>
                        </div>
                    </div>
                    <div class="col-xs-12" style="margin-bottom: 6px;line-height: 1.2em;font-size: 1.2em;">
                        <div style="display: inline-block;">
                            <img src="/anchise.web/Contents/00000/it-IT/Images/gestore-footer.png?v=77">
                        </div>
                        <div style="display: inline-block; width: 84%; vertical-align: top;font-size: 13.26px;">
                            <span style="white-space: nowrap">
                                Per qualsiasi altra esigenza è a tua disposizione
                            </span>
                            <br>
                            il <strong>Gestore</strong> presso la tua filiale di riferimento
                        </div>
                    </div>
                </div>
                <div class="col-xs-6" style="padding: 0">
                    <div class="footer-logo"><span>Banco Popolare</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 txt_center" style="font-size: 11.06px;">
                    © 2000-2015 - Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright
                </div>
            </div>
        </div>
    </div>
</div>

                        </td>
                    </tr>
                </tfoot>
            
        </table>
    </div>