<div id="MainSection" style="visibility: visible;">
    <div class="container"><div class="new-riquadro">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td colspan="2" class="page-title"><div class="search-flag"></div><h1>Esiti Bollettini Bancari</h1></td>
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
                        <span data-bind="enable: EsitiIncassiBBViewModel.PiazzaturaBollettino.PiazzaturaIdAziendaEnabled">
                            <select data-bind="value: EsitiIncassiBBViewModel.PiazzaturaBollettino.IdAzienda" id="EsitiIncassiBBViewModel_PiazzaturaBollettino_IdAzienda" name="EsitiIncassiBBViewModel.PiazzaturaBollettino.IdAzienda" style="width:350px;" class="new-form-control azienda"><option value="">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select>
                        </span>
                    </td>
                    <td style="width: 8%;">&nbsp;</td>
                </tr>
                <tr>
                    <td class="LabelWrap">
                        <span class="alert-text">*&nbsp;</span>Banca:
                    </td>
                    <td class="Valore200">
                        <span data-bind="enable: EsitiIncassiBBViewModel.PiazzaturaBollettino.PiazzaturaAbiBancaEnabled">
                            <select data-bind="value: EsitiIncassiBBViewModel.PiazzaturaBollettino.ABIBanca" id="EsitiIncassiBBViewModel_PiazzaturaBollettino_ABIBanca" name="EsitiIncassiBBViewModel.PiazzaturaBollettino.ABIBanca" style="width:350px;" class="new-form-control banca"><option value="">TUTTI</option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>
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
                        <span data-bind="enable: EsitiIncassiBBViewModel.PiazzaturaBollettino.PiazzaturaIdRapportoEnabled">
                            <select data-bind="value: EsitiIncassiBBViewModel.PiazzaturaBollettino.IdRapporto" id="EsitiIncassiBBViewModel_PiazzaturaBollettino_IdRapporto" name="EsitiIncassiBBViewModel.PiazzaturaBollettino.IdRapporto" style="width:350px;" class="new-form-control conto"><option value="">TUTTI</option><option value="2582120">11701-000000002407</option><option value="2582121">11701-000000002417</option><option value="2582122">11701-000000002418</option><option value="2582123">11701-000000002419</option><option value="2582124">11701-000000002420</option><option value="2582125">11701-000000002421</option><option value="2582126">11701-000000002422</option><option value="2582127">11701-000000002423</option><option value="2582128">11701-000000002424</option><option value="2582129">11701-000000002425</option><option value="2582130">11701-000000002426</option><option value="2582131">11701-000000002427</option><option value="2582132">11701-000000002428</option><option value="2582133">11701-000000002429</option><option value="812046">12900-000000047658</option><option value="812047">12900-000000047659</option><option value="812048">12900-000000047661</option></select>
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
                                    <td class="Valore100" style="width: 60%;"><input data-bind="value: EsitiIncassiBBViewModel.PiazzaturaBollettino.CodiceSia" id="EsitiIncassiBBViewModel_PiazzaturaBollettino_CodiceSia" name="EsitiIncassiBBViewModel.PiazzaturaBollettino.CodiceSia" readonly="readonly" type="text" value="" class="new-form-control"></td>
                                    <td style="width: 1%;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="LabelWrap">Righe per pagina:</td>
                                    <td class="Valore100"><select data-bind="value: EsitiIncassiBBViewModel.NumeroRighePerPagina" id="EsitiIncassiBBViewModel_NumeroRighePerPagina" name="EsitiIncassiBBViewModel.NumeroRighePerPagina" class="new-form-control"><option value="10">10</option>
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
                
                    <label for="Data_pagamento">Data pagamento</label>:
            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiIncassiBBViewModel.DtPagamento.From" id="EsitiIncassiBBViewModel_DtPagamento_From" name="EsitiIncassiBBViewModel.DtPagamento.From" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiIncassiBBViewModel_DtPagamento_From_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
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
                $("#EsitiIncassiBBViewModel_DtPagamento_From").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiIncassiBBViewModel_DtPagamento_From").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiIncassiBBViewModel_DtPagamento_From_imgcalendar").click(function(){
                    $("#EsitiIncassiBBViewModel_DtPagamento_From").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 16%;text-align:right">

            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiIncassiBBViewModel.DtPagamento.To" id="EsitiIncassiBBViewModel_DtPagamento_To" name="EsitiIncassiBBViewModel.DtPagamento.To" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiIncassiBBViewModel_DtPagamento_To_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
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
                $("#EsitiIncassiBBViewModel_DtPagamento_To").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiIncassiBBViewModel_DtPagamento_To").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiIncassiBBViewModel_DtPagamento_To_imgcalendar").click(function(){
                    $("#EsitiIncassiBBViewModel_DtPagamento_To").datepicker('show');
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
                
                    <label for="Data_valuta">Data valuta</label>:
            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiIncassiBBViewModel.DtValuta.From" id="EsitiIncassiBBViewModel_DtValuta_From" name="EsitiIncassiBBViewModel.DtValuta.From" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiIncassiBBViewModel_DtValuta_From_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
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
                $("#EsitiIncassiBBViewModel_DtValuta_From").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiIncassiBBViewModel_DtValuta_From").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiIncassiBBViewModel_DtValuta_From_imgcalendar").click(function(){
                    $("#EsitiIncassiBBViewModel_DtValuta_From").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 16%;text-align:right">

            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiIncassiBBViewModel.DtValuta.To" id="EsitiIncassiBBViewModel_DtValuta_To" name="EsitiIncassiBBViewModel.DtValuta.To" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiIncassiBBViewModel_DtValuta_To_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
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
                $("#EsitiIncassiBBViewModel_DtValuta_To").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiIncassiBBViewModel_DtValuta_To").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiIncassiBBViewModel_DtValuta_To_imgcalendar").click(function(){
                    $("#EsitiIncassiBBViewModel_DtValuta_To").datepicker('show');
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
<input data-bind="numeric: EsitiIncassiBBViewModel.Importo.From" id="EsitiIncassiBBViewModel_Importo_From" name="EsitiIncassiBBViewModel.Importo.From" type="text" value="" class="new-form-control">            </td>
            <td style="width: 16%;">
                &nbsp;
            </td>
            <td class="Valore200" style="width: 25%;">
<input data-bind="numeric: EsitiIncassiBBViewModel.Importo.To" id="EsitiIncassiBBViewModel_Importo_To" name="EsitiIncassiBBViewModel.Importo.To" type="text" value="" class="new-form-control">            </td>
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
    </div><div class="new-buttons"><input id="ank-btn-search" type="button" value="Visualizza" data-bind="enable: EsitiIncassiBBViewModel.PiazzaturaBollettino.HasRapporti, singleClick: function(){ KoGoTo('/anchise.web/ESITI/EsitiBB/Ricerca?trk=empty');}" class="btn"></div></div>
    <script type="text/javascript">
        $(document).ready(function() {
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
            }}
        );
        
        function hideFilter() {
            $("#ank-btn-FiltriAvanzati").attr('value', '>> Avanzate');
            $("#FiltriAvanzati").hide();
            $(".LinkedToFiltriAvanzati").hide();
        }

        function showFilter() {
            $("#ank-btn-FiltriAvanzati").attr("value", '<< Avanzate');
            $("#FiltriAvanzati").show();
            $(".LinkedToFiltriAvanzati").show();
        }
        
        });
    </script>
<script type="text/javascript">
                                            $(function () { RegisterViewModel("EsitiIncassiBBViewModel",{"PiazzaturaBollettino":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"DtPagamento":{"From":null,"To":null},"DtValuta":{"From":null,"To":null},"Importo":{"From":null,"To":null},"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":2,"OrdinamentoDirezione":2}, true);
            var root = rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino;
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
                rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdAzienda(),
                rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.ABIBanca(),
                rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdRapporto());
        
            var cmbAzienda = $('#EsitiIncassiBBViewModel_PiazzaturaBollettino_IdAzienda');
            var cmbBanca = $('#EsitiIncassiBBViewModel_PiazzaturaBollettino_ABIBanca');
            var cmbRapporto = $('#EsitiIncassiBBViewModel_PiazzaturaBollettino_IdRapporto');

            /*
             Change combo
            */
            function registerChangeCombo() {
                cmbAzienda.change(function () {
                    var selectedAzienda = rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdAzienda();

                    initializePiazzatura(selectedAzienda,"","");
                });

                cmbBanca.change(function () {
                    var selectedAzienda = rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdAzienda();
                    var selectedBanca = rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.ABIBanca();

                    initializePiazzatura(selectedAzienda,selectedBanca,"");
                });

                cmbRapporto.change(function () {
                    var selectedAzienda = rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdAzienda();
                    var selectedBanca = rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.ABIBanca();
                    var selectedRapporto = rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdRapporto();

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

                communicationSendObject('/anchise.web/ESITI/EsitiBB/InitializeByPiazzatura?trk=empty', piazzatura, initializeFromPiazzatura);
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

                rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.CodiceSia(emptySIA);
                rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.CodiceCuc(emptyCUC);
                rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdBanca(emptyIdBanca);
                rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IBAN(emptyIBAN);


                $.each(aziende, function (index, azienda) {
                    var option = $('<option></option>')
                        .val(azienda.IdAzienda)
                        .text(azienda.RagioneSociale);
                    cmbAzienda.append(option);

                    if (azienda.IdAzienda == piazzatura.IdAzienda) {
                        rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.CodiceSia(azienda.CodiceSIA);
                        rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.CodiceCuc(azienda.CodiceCUC);
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
                        rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdBanca(banca.Id);
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

                rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.HasRapporti(rapporti.length != 0);

                $.each(rapporti, function (index, rapporto) {
                    var option = $('<option></option>')
                        .val(rapporto.Id)
                        //.text(rapporto.CoordinateCc.RapportoConto);
                        .text(rapporto.AliasConto);
                    cmbRapporto.append(option);

                    if (rapporto.Id == piazzatura.IdRapporto) {
                        rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IBAN(rapporto.CoordinateCC.IBAN);
                    }
                });

                rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdAzienda(piazzatura.IdAzienda);
                rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.ABIBanca(piazzatura.ABIBanca);
                rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdRapporto(piazzatura.IdRapporto);

                UpdateViewModelBinding();
            }
        UpdateViewModelBinding();}); </script></div>