<div id="MainSection" style="visibility: visible;">
    <div class="container"><div class="search new-riquadro">
        

<div class="page-title">
    <div class="search-flag">
    </div>
    <h1>
        Esiti Bollettini Bancari
    </h1>
</div>
        <table class="toolbar" cellpadding="0" cellspacing="0">
            <tbody>
                   <tr>
                        <td width="50%">&nbsp;</td>
                        <td>        <table class="piazzaturainline old-inputForm" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td>
                    Rag. Soc./ Intestatario
                </td>
                <td>
                    Banca
                </td>
                <td>
                    Conto
                </td>
            </tr>
            <tr>
                <td class="azienda">
                    <span data-bind="enable: EsitiIncassiBBViewModel.PiazzaturaBollettino.PiazzaturaIdAziendaEnabled">
                        <select data-bind="value: EsitiIncassiBBViewModel.PiazzaturaBollettino.IdAzienda" id="EsitiIncassiBBViewModel_PiazzaturaBollettino_IdAzienda" name="EsitiIncassiBBViewModel.PiazzaturaBollettino.IdAzienda" class="new-form-control azienda"><option value="">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select>
                    </span>
                </td>
                <td class="banca">
                    <span data-bind="enable: EsitiIncassiBBViewModel.PiazzaturaBollettino.PiazzaturaAbiBancaEnabled">
                        <select data-bind="value: EsitiIncassiBBViewModel.PiazzaturaBollettino.ABIBanca" id="EsitiIncassiBBViewModel_PiazzaturaBollettino_ABIBanca" name="EsitiIncassiBBViewModel.PiazzaturaBollettino.ABIBanca" class="new-form-control banca"><option value="">TUTTI</option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>
                    </span>
                </td>
                <td class="conto">
                    <span data-bind="enable: EsitiIncassiBBViewModel.PiazzaturaBollettino.PiazzaturaIdRapportoEnabled">
                        <select data-bind="value: EsitiIncassiBBViewModel.PiazzaturaBollettino.IdRapporto" id="EsitiIncassiBBViewModel_PiazzaturaBollettino_IdRapporto" name="EsitiIncassiBBViewModel.PiazzaturaBollettino.IdRapporto" class="new-form-control conto"><option value="">TUTTI</option><option value="2582120">11701-000000002407</option><option value="2582121">11701-000000002417</option><option value="2582122">11701-000000002418</option><option value="2582123">11701-000000002419</option><option value="2582124">11701-000000002420</option><option value="2582125">11701-000000002421</option><option value="2582126">11701-000000002422</option><option value="2582127">11701-000000002423</option><option value="2582128">11701-000000002424</option><option value="2582129">11701-000000002425</option><option value="2582130">11701-000000002426</option><option value="2582131">11701-000000002427</option><option value="2582132">11701-000000002428</option><option value="2582133">11701-000000002429</option><option value="812046">12900-000000047658</option><option value="812047">12900-000000047659</option><option value="812048">12900-000000047661</option></select>
                    </span>
                </td>
            </tr>
        </tbody></table>
</td>
                        <td>


 <table class="filter-toolbar" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
     <tbody>
         <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
         </tr>
         <tr>
             <td><a id="tool-refresh" class="ank-icon-filter-apply inactive" title="Applica Filtro Rapido" data-bind="singleClick: function() { rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.FilterRefresh(); }, css:{ inactive: EsitiIncassiBBViewModel.PiazzaturaBollettino.piazzaturaUnChanged}, enable: EsitiIncassiBBViewModel.PiazzaturaBollettino.piazzaturaChanged"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_quick-filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-goto" class="ank-icon-filter-go" title="Filtri" data-bind="singleClick: function(){ rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.FilterGoTo(); }, css:{ advanced: rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.isFilterAdvanceSet}"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-reset" class="ank-icon-filter-reset" title="Azzera filtri" data-bind="singleClick: function(){ rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.FilterReset(); }"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_remove-filter.png" border="0" width="20" height="20"></a></td>
         </tr>
     </tbody>
 </table>


</td>
                        <td>
                                <table class="export-toolbar" style="border-collapse: collapse;border:0px;" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr><td>&nbsp;</td></tr>
                                        <tr>
                                            <td>
                                                    <span class="export-toolbar" data-bind="singleClick: function(){ rootViewModel.EsitiIncassiBBViewModel.GoToRicercaPerPDF();}">
                                                        <a title="Stampa" class="ank-icon-export-Pdf"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_pdf.png" border="0" width="20" height="20"></a>
                                                    </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                        </td>
                     <td width="50%">&nbsp;</td>
                    </tr>
                 </tbody>
            </table>

            <table class="toolbar" cellpadding="0" cellspacing="0">
            <tbody>
                    <tr>
                        <td>
                            <table id="EmptyGridPanel" height="50" border="0" cellspacing="0" cellpadding="0" align="center" valig="top">
    <tbody>
            <tr>
                <td>
                    <div class="messagePanel alert" style="display: block;">
                        <h3 class="titleSection">Attenzione</h3>
                        <p>
                            <strong>Non risulta alcun dato per i parametri di ricerca immessi</strong>
                        </p>
                    </div>
                </td>
            </tr>
    </tbody>
</table>

                        </td>
                    </tr>
            </tbody>
        </table>
    </div><div class="new-buttons"></div></div>
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
        
                             //debugger;
                             var piazz = rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino;
                             piazz.piazzaturaUnChanged = ko.computed(
                                 function() {
                                     return rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdAzienda() == '' &&
                                         rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.ABIBanca() == '' &&
                                         rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdRapporto() == '';
                                 }
                             );
                             
                             piazz.piazzaturaChanged = ko.computed(
                                 function() {
                                     return rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.HasRapporti() && (rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdAzienda() != '' ||
                                         rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.ABIBanca() != '' ||
                                         rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino.IdRapporto() != '');
                                 }
                             );
                             
                             piazz.FilterRefresh = function() {
                                KoGoTo('/anchise.web/ESITI/EsitiBB/FilterApply?trk=empty');
                             };
        
                             piazz.FilterGoTo = function() {
                                KoGoTo('/anchise.web/ESITI/EsitiBB/FilterGoTo?trk=empty');
                             };
        
                             piazz.FilterReset = function() {
                                KoGoTo('/anchise.web/ESITI/EsitiBB/FilterReset?trk=empty');
                             };
                         
                             var piazz = rootViewModel.EsitiIncassiBBViewModel.PiazzaturaBollettino;
                             piazz.isFilterAdvanceSet = ko.computed(
                                 function() {
                                     return false;
                                 }
                             );
                         
        var root = rootViewModel.EsitiIncassiBBViewModel;
        root.GoToRicercaPerPDF = function() {
                             
        
               
        var action = '/anchise.web/ESITI/EsitiBB/GoToIndexPDF?trk=empty';
       
            var objectToSend = ko.mapping.toJS(root);
            communicationLoad(action, objectToSend, true);

        };

    UpdateViewModelBinding();}); </script></div>