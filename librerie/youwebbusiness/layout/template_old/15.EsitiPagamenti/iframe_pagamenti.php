<!DOCTYPE html>
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head></head>
<body>
    <div id="MainSection" style="visibility: visible;">
    <div class="container"><div class="new-riquadro">
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <td colspan="2" class="page-title"><div class="search-flag"></div><h1>Altri Pagamenti</h1></td>
                    </tr>
                </thead>
                <tbody>
                    <tr style="height: 1px;">
                        <td style="width: 66%;">
                            &nbsp;
                        </td>
                        <td style="width: 34%;">
                            &nbsp;
                        </td>
                    </tr>
                        <tr class="section">
                            <td>        
            <table cellpadding="0" cellspacing="0" class="old-inputForm">
                <tbody><tr>
                    <td class="LabelWrap" style="width: 26%;">
                        <span class="alert-text">*&nbsp;</span>Rag. Soc./ Intestatario:
                    </td>
                    <td class="Valore200" style="width: 66%;">
                        <span data-bind="enable: EsitiPagamentiViewModel.PiazzaturaPagamento.PiazzaturaIdAziendaEnabled">
                            <select data-bind="value: EsitiPagamentiViewModel.PiazzaturaPagamento.IdAzienda" id="EsitiPagamentiViewModel_PiazzaturaPagamento_IdAzienda" name="EsitiPagamentiViewModel.PiazzaturaPagamento.IdAzienda" style="width:350px;" class="new-form-control azienda"><option value="">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select>
                        </span>
                    </td>
                    <td style="width: 8%;">&nbsp;</td>
                </tr>
                <tr>
                    <td class="LabelWrap">
                        <span class="alert-text">*&nbsp;</span>Banca:
                    </td>
                    <td class="Valore200">
                        <span data-bind="enable: EsitiPagamentiViewModel.PiazzaturaPagamento.PiazzaturaAbiBancaEnabled">
                            <select data-bind="value: EsitiPagamentiViewModel.PiazzaturaPagamento.ABIBanca" id="EsitiPagamentiViewModel_PiazzaturaPagamento_ABIBanca" name="EsitiPagamentiViewModel.PiazzaturaPagamento.ABIBanca" style="width:350px;" class="new-form-control banca"><option value="">TUTTI</option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>
                        </span>
                    </td>
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td class="LabelWrap">
                        <span class="alert-text">*&nbsp;</span>Conto:
                    </td>
                    <td class="Valore200">
                        <span data-bind="enable: EsitiPagamentiViewModel.PiazzaturaPagamento.PiazzaturaIdRapportoEnabled">
                            <select data-bind="value: EsitiPagamentiViewModel.PiazzaturaPagamento.IdRapporto" id="EsitiPagamentiViewModel_PiazzaturaPagamento_IdRapporto" name="EsitiPagamentiViewModel.PiazzaturaPagamento.IdRapporto" style="width:350px;" class="new-form-control conto"><option value="">TUTTI</option><option value="2582120">11701-000000002407</option><option value="2582121">11701-000000002417</option><option value="2582122">11701-000000002418</option><option value="2582123">11701-000000002419</option><option value="2582124">11701-000000002420</option><option value="2582125">11701-000000002421</option><option value="2582126">11701-000000002422</option><option value="2582127">11701-000000002423</option><option value="2582128">11701-000000002424</option><option value="2582129">11701-000000002425</option><option value="2582130">11701-000000002426</option><option value="2582131">11701-000000002427</option><option value="2582132">11701-000000002428</option><option value="2582133">11701-000000002429</option><option value="812046">12900-000000047658</option><option value="812047">12900-000000047659</option><option value="812048">12900-000000047661</option></select>
                        </span>
                    </td>
                    <td>
                        &nbsp;
                    </td>
                </tr>
            </tbody></table>
        
</td>
                            <td>
                                <table cellpadding="0" cellspacing="0" class="old-inputForm">
                                    <tbody><tr>
                                        <td class="LabelWrap" style="width: 39%;"><label for="SIA">SIA</label>:</td>
                                        <td class="Valore100" style="width: 60%;"><input data-bind="value: EsitiPagamentiViewModel.PiazzaturaPagamento.CodiceSia" id="EsitiPagamentiViewModel_PiazzaturaPagamento_CodiceSia" name="EsitiPagamentiViewModel.PiazzaturaPagamento.CodiceSia" readonly="readonly" type="text" value="" class="new-form-control"></td>
                                        <td style="width: 1%">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="LabelWrap">Righe per pagina:</td>
                                        <td class="Valore100"><select data-bind="value: EsitiPagamentiViewModel.NumeroRighePerPagina" id="EsitiPagamentiViewModel_NumeroRighePerPagina" name="EsitiPagamentiViewModel.NumeroRighePerPagina" class="new-form-control"><option value="10">10</option>
<option value="20">20</option>
<option value="50">50</option>
<option value="100">100</option>
</select></td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="Valore" colspan="3">
                                            &nbsp;
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                        <tr class="section">
                            <td>
                                <table cellpadding="0" cellspacing="0" class="old-inputForm">
                                    <tbody><tr>
                                        <td class="LabelWrap" style="width: 26%;">
                                            Tipo dispositivo
                                        </td>
                                        <td class="Valore200" style="width: 66%;">
                                            <select data-bind="value: EsitiPagamentiViewModel.IdDispositivo" id="EsitiPagamentiViewModel_IdDispositivo" name="EsitiPagamentiViewModel.IdDispositivo" class="new-form-control"><option value="">TUTTI</option>
<option value="EBB">Esiti Bollettino Bancario</option>
<option value="EBE">Esiti Pagamenti Estero</option>
<option value="ERF">Esiti Ritiro Effetti (Pagamenti Riba)</option>
<option value="YBN">Esiti Bonifici SEPA</option>
<option value="YST">Esiti Stipendi SEPA</option>
</select>
                                        </td>
                                        <td style="width: 8%"></td>
                                    </tr>
                                </tbody></table>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="section">
                            <td>&nbsp;</td>
                            <td>
                                <table cellpadding="0" cellspacing="0" class="old-inputForm">
                                    <tbody><tr>
                                        <td class="Label" style="width:60%">
                                            <input id="ank-btn-FiltriAvanzati" type="button" value="<< Avanzate" class="btn small">
                                        </td>
                                        <td style="width: 40%;"></td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                        <tr style="height:1pt;"><td colspan="2"></td></tr>
                     <!--  FILTRI AVANZATI -->
                        <tr id="FiltriAvanzati" style="border: 0px; display: table-row;" class="section">
                            <td>
                                <table cellpadding="0" cellspacing="0">
                                    <tbody><tr class="section">
                                        <td>
    <table cellpadding="0" cellspacing="0" class="old-inputForm">
                    <tbody><tr>
                        <td style="width: 26%">
                            &nbsp;
                        </td>
                        <td class="LabelOnLeft" style="width: 25%">
                            Da:
                        </td>
                        <td style="width: 16%">
                            &nbsp;
                        </td>
                        <td class="LabelOnLeft" style="width: 25%">
                            A:
                        </td>
                        <td style="width: 8%">
                            &nbsp;
                        </td>
                    </tr>

        <tr>
            <td class="LabelWrap" style="width: 26%">
                
                    <label for="Data_invio">Data invio</label>:
            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiPagamentiViewModel.DataInvio.From" id="EsitiPagamentiViewModel_DataInvio_From" name="EsitiPagamentiViewModel.DataInvio.From" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiPagamentiViewModel_DataInvio_From_imgcalendar" src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
<script type="text/javascript">
            $.datepicker.regional['it'] = {
                closeText: 'Chiudi',
                prevText: '&#x3c;Prec',
                nextText: 'Succ&#x3e;',
                currentText: 'Oggi',
                monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.regional['en'] = {
                closeText: 'Close',
                prevText: '&#x3c;Prev',
                nextText: 'Next&#x3e;',
                currentText: 'Today',
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Dicember'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.setDefaults($.datepicker.regional['it']);
            $(document).ready(function () {
                $("#EsitiPagamentiViewModel_DataInvio_From").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiPagamentiViewModel_DataInvio_From").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiPagamentiViewModel_DataInvio_From_imgcalendar").click(function(){
                    $("#EsitiPagamentiViewModel_DataInvio_From").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 16%;text-align:right">

            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiPagamentiViewModel.DataInvio.To" id="EsitiPagamentiViewModel_DataInvio_To" name="EsitiPagamentiViewModel.DataInvio.To" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiPagamentiViewModel_DataInvio_To_imgcalendar" src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
<script type="text/javascript">
            $.datepicker.regional['it'] = {
                closeText: 'Chiudi',
                prevText: '&#x3c;Prec',
                nextText: 'Succ&#x3e;',
                currentText: 'Oggi',
                monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.regional['en'] = {
                closeText: 'Close',
                prevText: '&#x3c;Prev',
                nextText: 'Next&#x3e;',
                currentText: 'Today',
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Dicember'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.setDefaults($.datepicker.regional['it']);
            $(document).ready(function () {
                $("#EsitiPagamentiViewModel_DataInvio_To").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiPagamentiViewModel_DataInvio_To").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiPagamentiViewModel_DataInvio_To_imgcalendar").click(function(){
                    $("#EsitiPagamentiViewModel_DataInvio_To").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 8%">
                &nbsp;
            </td>
        </tr>
    </tbody></table>
                                        </td>
                                    </tr>
                                    <tr class="section">
                                        <td>
    <table cellpadding="0" cellspacing="0" class="old-inputForm">

        <tbody><tr>
            <td class="LabelWrap" style="width: 26%">
                
                    <label for="Data_esecuzione">Data esecuzione</label>:
            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiPagamentiViewModel.DataEsecuzione.From" id="EsitiPagamentiViewModel_DataEsecuzione_From" name="EsitiPagamentiViewModel.DataEsecuzione.From" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiPagamentiViewModel_DataEsecuzione_From_imgcalendar" src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
<script type="text/javascript">
            $.datepicker.regional['it'] = {
                closeText: 'Chiudi',
                prevText: '&#x3c;Prec',
                nextText: 'Succ&#x3e;',
                currentText: 'Oggi',
                monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.regional['en'] = {
                closeText: 'Close',
                prevText: '&#x3c;Prev',
                nextText: 'Next&#x3e;',
                currentText: 'Today',
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Dicember'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.setDefaults($.datepicker.regional['it']);
            $(document).ready(function () {
                $("#EsitiPagamentiViewModel_DataEsecuzione_From").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiPagamentiViewModel_DataEsecuzione_From").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiPagamentiViewModel_DataEsecuzione_From_imgcalendar").click(function(){
                    $("#EsitiPagamentiViewModel_DataEsecuzione_From").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 16%;text-align:right">

            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiPagamentiViewModel.DataEsecuzione.To" id="EsitiPagamentiViewModel_DataEsecuzione_To" name="EsitiPagamentiViewModel.DataEsecuzione.To" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiPagamentiViewModel_DataEsecuzione_To_imgcalendar" src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
<script type="text/javascript">
            $.datepicker.regional['it'] = {
                closeText: 'Chiudi',
                prevText: '&#x3c;Prec',
                nextText: 'Succ&#x3e;',
                currentText: 'Oggi',
                monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.regional['en'] = {
                closeText: 'Close',
                prevText: '&#x3c;Prev',
                nextText: 'Next&#x3e;',
                currentText: 'Today',
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Dicember'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.setDefaults($.datepicker.regional['it']);
            $(document).ready(function () {
                $("#EsitiPagamentiViewModel_DataEsecuzione_To").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiPagamentiViewModel_DataEsecuzione_To").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiPagamentiViewModel_DataEsecuzione_To_imgcalendar").click(function(){
                    $("#EsitiPagamentiViewModel_DataEsecuzione_To").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 8%">
                &nbsp;
            </td>
        </tr>
    </tbody></table>
                                        </td>
                                    </tr>
                                    <tr class="section">
                                        <td>
    <table cellpadding="0" cellspacing="0" class="old-inputForm">

        <tbody><tr>
            <td class="LabelWrap" style="width: 26%;">
                    <label for="Importo">Importo</label>:
            </td>
            <td class="Valore200" style="width: 25%;">
<input data-bind="numeric: EsitiPagamentiViewModel.Importo.From" id="EsitiPagamentiViewModel_Importo_From" name="EsitiPagamentiViewModel.Importo.From" type="text" value="" class="new-form-control">            </td>
            <td style="width: 16%;">
                &nbsp;
            </td>
            <td class="Valore200" style="width: 25%;">
<input data-bind="numeric: EsitiPagamentiViewModel.Importo.To" id="EsitiPagamentiViewModel_Importo_To" name="EsitiPagamentiViewModel.Importo.To" type="text" value="" class="new-form-control">            </td>
            <td style="width: 8%;">
                &nbsp;
            </td>
        </tr>
    </tbody></table>

   
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr id="FiltriAvanzati1" style="border: 0px; display: table-row;" class="section">
                            <td>
                                <table cellpadding="0" cellspacing="0" class="old-inputForm">
                                    <tbody><tr>
                                        <td class="LabelWrap" style="width: 26%">
                                            Tipo dato:
                                        </td>
                                        <td class="Valore200" style="width: 25%">
                                            <select data-bind="value: EsitiPagamentiViewModel.IdTipoDato" id="EsitiPagamentiViewModel_IdTipoDato" name="EsitiPagamentiViewModel.IdTipoDato" class="new-form-control"><option value=""></option>
<option value="SD">Dispositivo</option>
<option value="SE">Esito</option>
<option value="SS">Esito Incrociato con dispositivo</option>
</select>
                                        </td>
                                        <td style="width: 16%">
                                            Stato pagamento:
                                        </td>
                                        <td class="Valore200" style="width: 25%">
                                            <select data-bind="value: EsitiPagamentiViewModel.IdPagamento" id="EsitiPagamentiViewModel_IdPagamento" name="EsitiPagamentiViewModel.IdPagamento" class="new-form-control"><option value=""></option>
<option value="ACSC">Addebitata</option>
<option value="CONF,ACTC">Confermata</option>
<option value="FIRM">Autorizzata</option>
<option value="PART">Parzialmente accettata</option>
<option value="PDNG">In lavorazione</option>
<option value="RJCT,TMTT,TMTB">Scartata</option>
</select>
                                        </td>
                                        <td style="width: 8%">
                                            &nbsp;
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr id="FiltriAvanzati2" style="height: 1pt; display: table-row;" class="section"><td colspan="2"></td></tr>
                        <tr id="FiltriAvanzati3" style="border: 0px; display: table-row;" class="section">
                            <td>
                                <table cellpadding="0" cellspacing="0" class="old-inputForm">
                                    <tbody><tr>
                                        <td class="LabelWrap" style="width: 26%;">&nbsp;</td>
                                        <td style="width: 66%;">
                                            <input data-bind="checked: EsitiPagamentiViewModel.CercaPerDistinta" id="EsitiPagamentiViewModel_CercaPerDistinta" name="EsitiPagamentiViewModel.CercaPerDistinta" type="checkbox" value="true"><input name="EsitiPagamentiViewModel.CercaPerDistinta" type="hidden" value="false">
                                            Cerca per distinta
                                        </td>
                                        <td style="width: 8%;">&nbsp;</td>
                                    </tr>
                                </tbody></table>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr id="FiltriAvanzati4" style="border: 0px; display: table-row;" data-bind="enable: EsitiPagamentiViewModel.CercaPerDistinta" class="section">
                            <td>
                                <table cellpadding="0" cellspacing="0">
                                    <tbody><tr class="section">
                                        <td>
    <table cellpadding="0" cellspacing="0" class="old-inputForm">
                    <tbody><tr>
                        <td style="width: 26%">
                            &nbsp;
                        </td>
                        <td class="LabelOnLeft" style="width: 25%">
                            Da:
                        </td>
                        <td style="width: 16%">
                            &nbsp;
                        </td>
                        <td class="LabelOnLeft" style="width: 25%">
                            A:
                        </td>
                        <td style="width: 8%">
                            &nbsp;
                        </td>
                    </tr>

        <tr>
            <td class="LabelWrap" style="width: 26%">
                
                    <label for="Data_invio">Data invio</label>:
            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiPagamentiViewModel.DataInvioDistinta.From" id="EsitiPagamentiViewModel_DataInvioDistinta_From" name="EsitiPagamentiViewModel.DataInvioDistinta.From" type="text" value="" class="hasDatepicker new-form-control" disabled="disabled">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiPagamentiViewModel_DataInvioDistinta_From_imgcalendar" src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
<script type="text/javascript">
            $.datepicker.regional['it'] = {
                closeText: 'Chiudi',
                prevText: '&#x3c;Prec',
                nextText: 'Succ&#x3e;',
                currentText: 'Oggi',
                monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.regional['en'] = {
                closeText: 'Close',
                prevText: '&#x3c;Prev',
                nextText: 'Next&#x3e;',
                currentText: 'Today',
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Dicember'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.setDefaults($.datepicker.regional['it']);
            $(document).ready(function () {
                $("#EsitiPagamentiViewModel_DataInvioDistinta_From").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiPagamentiViewModel_DataInvioDistinta_From").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiPagamentiViewModel_DataInvioDistinta_From_imgcalendar").click(function(){
                    $("#EsitiPagamentiViewModel_DataInvioDistinta_From").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 16%;text-align:right">

            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiPagamentiViewModel.DataInvioDistinta.To" id="EsitiPagamentiViewModel_DataInvioDistinta_To" name="EsitiPagamentiViewModel.DataInvioDistinta.To" type="text" value="" class="hasDatepicker new-form-control" disabled="disabled">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiPagamentiViewModel_DataInvioDistinta_To_imgcalendar" src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
<script type="text/javascript">
            $.datepicker.regional['it'] = {
                closeText: 'Chiudi',
                prevText: '&#x3c;Prec',
                nextText: 'Succ&#x3e;',
                currentText: 'Oggi',
                monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.regional['en'] = {
                closeText: 'Close',
                prevText: '&#x3c;Prev',
                nextText: 'Next&#x3e;',
                currentText: 'Today',
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Dicember'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.setDefaults($.datepicker.regional['it']);
            $(document).ready(function () {
                $("#EsitiPagamentiViewModel_DataInvioDistinta_To").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiPagamentiViewModel_DataInvioDistinta_To").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiPagamentiViewModel_DataInvioDistinta_To_imgcalendar").click(function(){
                    $("#EsitiPagamentiViewModel_DataInvioDistinta_To").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 8%">
                &nbsp;
            </td>
        </tr>
    </tbody></table>
                                        </td>
                                    </tr>
                                    <tr class="section">
                                        <td>
    <table cellpadding="0" cellspacing="0" class="old-inputForm">

        <tbody><tr>
            <td class="LabelWrap" style="width: 26%">
                
                    <label for="Data_esecuzione">Data esecuzione</label>:
            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiPagamentiViewModel.DataEsecuzioneDistinta.From" id="EsitiPagamentiViewModel_DataEsecuzioneDistinta_From" name="EsitiPagamentiViewModel.DataEsecuzioneDistinta.From" type="text" value="" class="hasDatepicker new-form-control" disabled="disabled">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiPagamentiViewModel_DataEsecuzioneDistinta_From_imgcalendar" src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
<script type="text/javascript">
            $.datepicker.regional['it'] = {
                closeText: 'Chiudi',
                prevText: '&#x3c;Prec',
                nextText: 'Succ&#x3e;',
                currentText: 'Oggi',
                monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.regional['en'] = {
                closeText: 'Close',
                prevText: '&#x3c;Prev',
                nextText: 'Next&#x3e;',
                currentText: 'Today',
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Dicember'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.setDefaults($.datepicker.regional['it']);
            $(document).ready(function () {
                $("#EsitiPagamentiViewModel_DataEsecuzioneDistinta_From").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiPagamentiViewModel_DataEsecuzioneDistinta_From").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiPagamentiViewModel_DataEsecuzioneDistinta_From_imgcalendar").click(function(){
                    $("#EsitiPagamentiViewModel_DataEsecuzioneDistinta_From").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 16%;text-align:right">

            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiPagamentiViewModel.DataEsecuzioneDistinta.To" id="EsitiPagamentiViewModel_DataEsecuzioneDistinta_To" name="EsitiPagamentiViewModel.DataEsecuzioneDistinta.To" type="text" value="" class="hasDatepicker new-form-control" disabled="disabled">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiPagamentiViewModel_DataEsecuzioneDistinta_To_imgcalendar" src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
<script type="text/javascript">
            $.datepicker.regional['it'] = {
                closeText: 'Chiudi',
                prevText: '&#x3c;Prec',
                nextText: 'Succ&#x3e;',
                currentText: 'Oggi',
                monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.regional['en'] = {
                closeText: 'Close',
                prevText: '&#x3c;Prev',
                nextText: 'Next&#x3e;',
                currentText: 'Today',
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Dicember'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.setDefaults($.datepicker.regional['it']);
            $(document).ready(function () {
                $("#EsitiPagamentiViewModel_DataEsecuzioneDistinta_To").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiPagamentiViewModel_DataEsecuzioneDistinta_To").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiPagamentiViewModel_DataEsecuzioneDistinta_To_imgcalendar").click(function(){
                    $("#EsitiPagamentiViewModel_DataEsecuzioneDistinta_To").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 8%">
                &nbsp;
            </td>
        </tr>
    </tbody></table>
                                        </td>
                                    </tr>
                                    <tr class="section">
                                        <td>
    <table cellpadding="0" cellspacing="0" class="old-inputForm">

        <tbody><tr>
            <td class="LabelWrap" style="width: 26%;">
                    <label for="Importo">Importo</label>:
            </td>
            <td class="Valore200" style="width: 25%;">
<input data-bind="numeric: EsitiPagamentiViewModel.ImportoDistinta.From" id="EsitiPagamentiViewModel_ImportoDistinta_From" name="EsitiPagamentiViewModel.ImportoDistinta.From" type="text" value="" disabled="disabled" class="new-form-control">            </td>
            <td style="width: 16%;">
                &nbsp;
            </td>
            <td class="Valore200" style="width: 25%;">
<input data-bind="numeric: EsitiPagamentiViewModel.ImportoDistinta.To" id="EsitiPagamentiViewModel_ImportoDistinta_To" name="EsitiPagamentiViewModel.ImportoDistinta.To" type="text" value="" disabled="disabled" class="new-form-control">            </td>
            <td style="width: 8%;">
                &nbsp;
            </td>
        </tr>
    </tbody></table>

   
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="LinkedToFiltriAvanzati" style="height: 1pt; display: table-row;">
                            <td colspan="2"></td>
                        </tr>
                        <tr style="height:12px;">
                            <td colspan="2" class="testoRedSmallBold">
                                * campi obbligatori
                            </td>
                        </tr>
                        <tr>
                            <td class="Comandi" colspan="2">
                                
                            </td>
                        </tr>
                        <tr style="height:5px;"><td>&nbsp;</td></tr>
                </tbody>
            </table>
        </div><div class="new-buttons"><input id="ank-btn-search" type="button" value="Visualizza" data-bind="enable: EsitiPagamentiViewModel.PiazzaturaPagamento.HasRapporti, singleClick: function(){ KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/Ricerca?trk=empty');}" class="btn"></div></div>
    
<script type="text/javascript">
                                            $(function () { RegisterViewModel("EsitiPagamentiViewModel",{"PiazzaturaPagamento":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"IdDispositivo":null,"DataInvio":{"From":null,"To":null},"DataEsecuzione":{"From":null,"To":null},"Importo":{"From":null,"To":null},"IdTipoDato":null,"IdPagamento":null,"CercaPerDistinta":false,"DataInvioDistinta":{"From":null,"To":null},"DataEsecuzioneDistinta":{"From":null,"To":null},"ImportoDistinta":{"From":null,"To":null},"IdDist":null,"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":6,"OrdinamentoDirezione":2}, true);
            var root = rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento;
            if (root.CodiceSia == undefined) {
                root.CodiceSia = ko.observable('');
            }

            if (root.IdBanca == undefined) {
                root.IdBanca = ko.observable('');
            }

            if (root.CodiceCuc == undefined) {
                root.CodiceCuc = ko.observable('');
            }

            if (root.IBAN == undefined) {
                root.IBAN = ko.observable('');
            }

            // Required for PiazzaturaToolbar
            if (root.HasRapporti == undefined) {
                root.HasRapporti = ko.observable(false);
            }

            if (root.PiazzaturaIdAziendaEnabled == undefined) {
                root.PiazzaturaIdAziendaEnabled = ko.observable(true);
            }

            if (root.PiazzaturaAbiBancaEnabled == undefined) {
                root.PiazzaturaAbiBancaEnabled = ko.observable(true);
            }

            if (root.PiazzaturaIdRapportoEnabled == undefined) {
                root.PiazzaturaIdRapportoEnabled = ko.observable(true);
            }

            initializePiazzatura(
                rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdAzienda(),
                rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.ABIBanca(),
                rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdRapporto());
        
            var cmbAzienda = $('#EsitiPagamentiViewModel_PiazzaturaPagamento_IdAzienda');
            var cmbBanca = $('#EsitiPagamentiViewModel_PiazzaturaPagamento_ABIBanca');
            var cmbRapporto = $('#EsitiPagamentiViewModel_PiazzaturaPagamento_IdRapporto');

            /*
             Change combo
            */
            function registerChangeCombo() {
                cmbAzienda.change(function () {
                    var selectedAzienda = rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdAzienda();

                    initializePiazzatura(selectedAzienda,"","");
                });

                cmbBanca.change(function () {
                    var selectedAzienda = rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdAzienda();
                    var selectedBanca = rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.ABIBanca();

                    initializePiazzatura(selectedAzienda,selectedBanca,"");
                });

                cmbRapporto.change(function () {
                    var selectedAzienda = rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdAzienda();
                    var selectedBanca = rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.ABIBanca();
                    var selectedRapporto = rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdRapporto();

                    initializePiazzatura(selectedAzienda,selectedBanca,selectedRapporto);
                });
            }

            function unregisterChangeCombo() {
                cmbAzienda.unbind('change');
                cmbBanca.unbind('change');
                cmbRapporto.unbind('change');
            }

            /*
            Initialize comboBox
        */

            function initializePiazzatura(selectedAzienda, selectedBanca, selectedRapporto) {
                // alert("Posting selectedAzienda: " + selectedAzienda +  " - selectedBanca: " + selectedBanca + " - selectedRapporto: " + selectedRapporto);
                var piazzatura =
                {
                    IdAzienda: selectedAzienda,
                    ABIBanca: selectedBanca,
                    IdRapporto: selectedRapporto
                };

                communicationSendObject('/anchise.web/ESITI/EsitiPAGPSD/InitializeByPiazzatura?trk=empty', piazzatura, initializeFromPiazzatura);
            }

            function initializeFromPiazzatura(response, isJson, piazzaturaRapporto) {
                unregisterChangeCombo();
                initializeComboBoxFromPiazzaturaRapporto(piazzaturaRapporto);
                registerChangeCombo();
            }

            /*
            Initialize comboBox from piazzatura rapporto
        */
            function initializeComboBoxFromPiazzaturaRapporto(piazzaturaRapporto) {
                var aziende = piazzaturaRapporto.Aziende;
                var rapporti = piazzaturaRapporto.Rapporti;
                var banche = piazzaturaRapporto.Banche;
                var piazzatura = piazzaturaRapporto.Piazzatura;

                // Combo azienda
                cmbAzienda.empty();
                if (aziende.length > 0) {
                    cmbAzienda
                        .append($('<option></option>')
                            .val("")
                            .html("TUTTI"));
                }

                var emptySIA = '';
                var emptyCUC = '';
                var emptyIdBanca = '';
                var emptyIBAN = '';

                rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.CodiceSia(emptySIA);
                rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.CodiceCuc(emptyCUC);
                rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdBanca(emptyIdBanca);
                rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IBAN(emptyIBAN);


                $.each(aziende, function (index, azienda) {
                    var option = $('<option></option>')
                        .val(azienda.IdAzienda)
                        .text(azienda.RagioneSociale);
                    cmbAzienda.append(option);

                    if (azienda.IdAzienda == piazzatura.IdAzienda) {
                        rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.CodiceSia(azienda.CodiceSIA);
                        rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.CodiceCuc(azienda.CodiceCUC);
                    }
                });

                // bug ie7
                cmbAzienda.removeClass("azienda").addClass("azienda");


                // Combo banca
                cmbBanca.empty();
                if (banche.length > 0) {
                    cmbBanca
                        .append($('<option></option>')
                            .val("")
                            .html("TUTTI"));
                }

                $.each(banche, function (index, banca) {
                    var description = banca.ABI + " - " + banca.Descrizione;
                    var option = $('<option></option>')
                        .val(banca.ABI)
                        .text(description);
                    cmbBanca.append(option);

                    if (banca.ABI == piazzatura.ABIBanca) {
                        rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdBanca(banca.Id);
                    }
                });
                // bug ie7
                cmbBanca.removeClass("banca").addClass("banca");


                // Combo rapporti
                cmbRapporto.empty();
                if (rapporti.length > 0) {
                    cmbRapporto
                        .append($('<option></option>')
                            .val("")
                            .html("TUTTI"));
                }
                // bug ie7
                cmbRapporto.removeClass("conto").addClass ("conto");

                rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.HasRapporti(rapporti.length != 0);

                $.each(rapporti, function (index, rapporto) {
                    var option = $('<option></option>')
                        .val(rapporto.Id)
                        //.text(rapporto.CoordinateCc.RapportoConto);
                        .text(rapporto.AliasConto);
                    cmbRapporto.append(option);

                    if (rapporto.Id == piazzatura.IdRapporto) {
                        rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IBAN(rapporto.CoordinateCC.IBAN);
                    }
                });

                rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdAzienda(piazzatura.IdAzienda);
                rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.ABIBanca(piazzatura.ABIBanca);
                rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdRapporto(piazzatura.IdRapporto);

                UpdateViewModelBinding();
            }
        
            var cercaPerDistintaProperty = rootViewModel.EsitiPagamentiViewModel.CercaPerDistinta;
            cercaPerDistintaProperty.subscribe(function(cercaPerDistinta) {
                $("#FiltriAvanzati4 :input").attr("disabled", false);
                if (!cercaPerDistinta) {
                    var emptyElement = '';

                    var dataInvioDistintaProperty = rootViewModel.EsitiPagamentiViewModel.DataInvioDistinta;
                    var dataEsecuzioneDistintaProperty = rootViewModel.EsitiPagamentiViewModel.DataEsecuzioneDistinta;
                    var importoDistintaProperty = rootViewModel.EsitiPagamentiViewModel.ImportoDistinta;

                    dataInvioDistintaProperty.From(emptyElement);
                    dataInvioDistintaProperty.To(emptyElement);

                    dataEsecuzioneDistintaProperty.From(emptyElement);
                    dataEsecuzioneDistintaProperty.To(emptyElement);

                    importoDistintaProperty.From(emptyElement);
                    importoDistintaProperty.To(emptyElement);
                    $("#FiltriAvanzati4 :input").attr("disabled", true);

                }
            });
        UpdateViewModelBinding();}); </script>
<script type="text/javascript">
    $(document).ready(function () {
        var mustExpand = "False".toLowerCase() == "true";
        if (mustExpand) {
            showFilter();
        } else {
            hideFilter();
        }

        $("#ank-btn-FiltriAvanzati").click(function (e) {
            e.preventDefault();

            if ($("#FiltriAvanzati").is(":hidden")) {
                showFilter();

            }
            else {
                hideFilter();
            }
        });

        // abilitazione o meno dei filtri ricerca x distinta al caricamento della pagina
        if ($("#FiltriAvanzati3").find(":checkbox").is(":checked")) {
            $("#FiltriAvanzati4 :input").attr("disabled", false);
        } else {
            $("#FiltriAvanzati4 :input").attr("disabled", true);
        }

        function hideFilter() {
            $("#ank-btn-FiltriAvanzati").attr('value', '>> Avanzate');
            $("#FiltriAvanzati").hide();
            $("#FiltriAvanzati1").hide();
            $("#FiltriAvanzati2").hide();
            $("#FiltriAvanzati3").hide();
            $("#FiltriAvanzati4").hide();
            $(".LinkedToFiltriAvanzati").hide();
        }

        function showFilter() {
            $("#ank-btn-FiltriAvanzati").attr("value", '<< Avanzate');
            $("#FiltriAvanzati").show();
            $("#FiltriAvanzati1").show();
            $("#FiltriAvanzati2").show();
            $("#FiltriAvanzati3").show();
            $("#FiltriAvanzati4").show();
            $(".LinkedToFiltriAvanzati").show();
        }
    });
</script></div>
</body>

</html>