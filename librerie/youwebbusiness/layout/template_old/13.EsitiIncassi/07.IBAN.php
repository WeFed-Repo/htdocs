<div id="MainSection" style="visibility: visible;">
    <div class="container"><div class="new-riquadro">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td colspan="2" class="page-title"><div class="search-flag"></div><h1>Esiti Allineamento Iban</h1></td>
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
                        <td>         <table cellpadding="0" cellspacing="0" class="old-inputForm">
                <tbody><tr>
                    <td class="LabelWrap" style="width: 26%;">
                        <span class="alert-text">*&nbsp;</span>Rag. Soc./ Intestatario:
                    </td>
                    <td class="Valore200" style="width: 66%;">
                        <span data-bind="enable: EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.PiazzaturaIdAziendaEnabled">
<select data-bind="value: EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda" id="EsitiAllineamentiArchiviIBANViewModel_PiazzaturaAllinementoArchiviIBAN_IdAzienda" name="EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda" style="width: 350px" class="new-form-control azienda"><option value="">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select>                        </span>
                    </td>
                    <td style="width: 8%;">&nbsp;</td>
                </tr>
                <tr>
                    <td class="LabelWrap">
                        <span class="alert-text">*&nbsp;</span>Banca:
                    </td>
                    <td class="Valore200">
                        <span data-bind="enable: EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.PiazzaturaAbiBancaEnabled">
<select data-bind="value: EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.ABIBanca" id="EsitiAllineamentiArchiviIBANViewModel_PiazzaturaAllinementoArchiviIBAN_ABIBanca" name="EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.ABIBanca" style="width: 350px" class="new-form-control banca"><option value="">TUTTI</option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>                        </span>
                    </td>
                </tr>
                
          </tbody></table> 
</td>
                        <td>
                            <table cellpadding="0" cellspacing="0" class="old-inputForm">
                                <tbody><tr>
                                    <td class="LabelWrap" style="width: 39%;"><label for="SIA">SIA</label>:</td>
                                    <td class="Valore100" style="width: 60%;"><input data-bind="value: EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.CodiceSia" id="EsitiAllineamentiArchiviIBANViewModel_PiazzaturaAllinementoArchiviIBAN_CodiceSia" name="EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.CodiceSia" readonly="readonly" type="text" value="" class="new-form-control"></td>
                                    <td width="1%;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="LabelWrap">Righe per pagina</td>
                                    <td class="Valore100"><select data-bind="value: EsitiAllineamentiArchiviIBANViewModel.NumeroRighePerPagina" id="EsitiAllineamentiArchiviIBANViewModel_NumeroRighePerPagina" name="EsitiAllineamentiArchiviIBANViewModel.NumeroRighePerPagina" class="new-form-control"><option value="10">10</option>
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
                
                    <label for="Data_creazione">Data creazione</label>:
            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiAllineamentiArchiviIBANViewModel.DataCreazione.From" id="EsitiAllineamentiArchiviIBANViewModel_DataCreazione_From" name="EsitiAllineamentiArchiviIBANViewModel.DataCreazione.From" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiAllineamentiArchiviIBANViewModel_DataCreazione_From_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
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
                $("#EsitiAllineamentiArchiviIBANViewModel_DataCreazione_From").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiAllineamentiArchiviIBANViewModel_DataCreazione_From").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiAllineamentiArchiviIBANViewModel_DataCreazione_From_imgcalendar").click(function(){
                    $("#EsitiAllineamentiArchiviIBANViewModel_DataCreazione_From").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 16%;text-align:right">

            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiAllineamentiArchiviIBANViewModel.DataCreazione.To" id="EsitiAllineamentiArchiviIBANViewModel_DataCreazione_To" name="EsitiAllineamentiArchiviIBANViewModel.DataCreazione.To" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiAllineamentiArchiviIBANViewModel_DataCreazione_To_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
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
                $("#EsitiAllineamentiArchiviIBANViewModel_DataCreazione_To").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiAllineamentiArchiviIBANViewModel_DataCreazione_To").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiAllineamentiArchiviIBANViewModel_DataCreazione_To_imgcalendar").click(function(){
                    $("#EsitiAllineamentiArchiviIBANViewModel_DataCreazione_To").datepicker('show');
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
                
                    <label for="Data_ricezione">Data ricezione</label>:
            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiAllineamentiArchiviIBANViewModel.DataRicezione.From" id="EsitiAllineamentiArchiviIBANViewModel_DataRicezione_From" name="EsitiAllineamentiArchiviIBANViewModel.DataRicezione.From" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiAllineamentiArchiviIBANViewModel_DataRicezione_From_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
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
                $("#EsitiAllineamentiArchiviIBANViewModel_DataRicezione_From").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiAllineamentiArchiviIBANViewModel_DataRicezione_From").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiAllineamentiArchiviIBANViewModel_DataRicezione_From_imgcalendar").click(function(){
                    $("#EsitiAllineamentiArchiviIBANViewModel_DataRicezione_From").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 16%;text-align:right">

            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiAllineamentiArchiviIBANViewModel.DataRicezione.To" id="EsitiAllineamentiArchiviIBANViewModel_DataRicezione_To" name="EsitiAllineamentiArchiviIBANViewModel.DataRicezione.To" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiAllineamentiArchiviIBANViewModel_DataRicezione_To_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
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
                $("#EsitiAllineamentiArchiviIBANViewModel_DataRicezione_To").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiAllineamentiArchiviIBANViewModel_DataRicezione_To").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiAllineamentiArchiviIBANViewModel_DataRicezione_To_imgcalendar").click(function(){
                    $("#EsitiAllineamentiArchiviIBANViewModel_DataRicezione_To").datepicker('show');
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
                            </tbody></table>
                        </td>
                        <td>
                            &nbsp;
                        </td>
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
    </div><div class="new-buttons"><input id="ank-btn-search" type="button" value="Visualizza" data-bind="singleClick: function(){ KoGoTo('/anchise.web/ESITI/EsitiALIBAN/Ricerca?trk=empty');}" class="btn"></div></div>
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
              }
        );

              function hideFilter() {
                  $("#ank-btn-FiltriAvanzati").attr('value', '>> Avanzate');
                  $("#FiltriAvanzati").hide();
              }

              function showFilter() {
                  $("#ank-btn-FiltriAvanzati").attr("value", '<< Avanzate');
                  $("#FiltriAvanzati").show();
              }

          });
    </script>
<script type="text/javascript">
                                            $(function () { RegisterViewModel("EsitiAllineamentiArchiviIBANViewModel",{"PiazzaturaAllinementoArchiviIBAN":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"DataCreazione":{"From":null,"To":null},"DataRicezione":{"From":null,"To":null},"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":4,"OrdinamentoDirezione":2}, true);
             var root = rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN; 
             if (root.CodiceSia == undefined) { 
                root.CodiceSia = ko.observable('');
             }
             
             if (root.IdBanca == undefined) { 
                root.IdBanca = ko.observable('');
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
                rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda(),
                rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.ABIBanca(),
                rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdRapporto());
    
             var cmbAzienda = $('#EsitiAllineamentiArchiviIBANViewModel_PiazzaturaAllinementoArchiviIBAN_IdAzienda');
             var cmbBanca = $('#EsitiAllineamentiArchiviIBANViewModel_PiazzaturaAllinementoArchiviIBAN_ABIBanca');
            
             /*
              Change combo
             */
             function registerChangeCombo() {
                 cmbAzienda.change(function () {
                     var selectedAzienda = rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda();
                
                     initializePiazzatura(selectedAzienda,"","");
                 });
        
                 cmbBanca.change(function () {
                     var selectedAzienda = rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda();
                     var selectedBanca = rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.ABIBanca();
                   
                     initializePiazzatura(selectedAzienda,selectedBanca,"");
                 });
             }
            
             function unregisterChangeCombo() {
                 cmbAzienda.unbind('change');
                 cmbBanca.unbind('change');
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

                 communicationSendObject('/anchise.web/ESITI/EsitiALIBAN/InitializeByPiazzatura?trk=empty', piazzatura, initializeFromPiazzatura);
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
                 var emptyIdBanca = '';
                 rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.CodiceSia(emptySIA);
                 rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdBanca(emptyIdBanca);
            
                 $.each(aziende, function (index, azienda) {
                     var option = $('<option></option>')
                         .val(azienda.IdAzienda)
                         .text(azienda.RagioneSociale);
                     cmbAzienda.append(option);
                
                     if (azienda.IdAzienda == piazzatura.IdAzienda) {
                         rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.CodiceSia(azienda.CodiceSIA);
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
                        rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdBanca(banca.Id);
                    }
                 });
                 // bug ie7
                 cmbBanca.removeClass("banca").addClass("banca");
            
                 rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda(piazzatura.IdAzienda);
                 rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.ABIBanca(piazzatura.ABIBanca);
                 rootViewModel.EsitiAllineamentiArchiviIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdRapporto(piazzatura.IdRapporto);
                
                 UpdateViewModelBinding();
             }
         UpdateViewModelBinding();}); </script></div>