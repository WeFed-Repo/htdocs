<div class="main-content">
        <table class="main-content old-container">
            <tbody>
                <tr>
                    <td style="vertical-align: top;">
                        <div id="MainSection" style="visibility: visible;">
    <div class="container"><div class="new-riquadro">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td colspan="2" class="page-title"><div class="search-flag"></div><h1>Conti Anticipi
                    </h1></td>
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
                        <span data-bind="enable: ContiAnticipiViewModel.PiazzaturaContoAnticipo.PiazzaturaIdAziendaEnabled">
                            <select data-bind="value: ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdAzienda" id="ContiAnticipiViewModel_PiazzaturaContoAnticipo_IdAzienda" name="ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdAzienda" style="width:350px;" class="new-form-control azienda"><option value="">TUTTI</option><option value="12">CONSORZIO P.R.U. STADIO CONEGL</option><option value="318683">GE.CO.VE. IMMOBILIARE S.R.L.</option><option value="10">GE.CO.VE. SRL</option><option value="9">GESCO S.R.L.</option><option value="633660">PIEVE S.R.L.</option><option value="8">QUERCIA SRL</option><option value="514369">SAN FERMO 12 S.R.L.</option><option value="13">SAR.MAR. SPA</option><option value="49308">SARTI ANTONIO</option></select>
                        </span>
                    </td>
                    <td style="width: 8%;">&nbsp;</td>
                </tr>
                <tr>
                    <td class="LabelWrap">
                        <span class="alert-text">*&nbsp;</span>Banca:
                    </td>
                    <td class="Valore200">
                        <span data-bind="enable: ContiAnticipiViewModel.PiazzaturaContoAnticipo.PiazzaturaAbiBancaEnabled">
                            <select data-bind="value: ContiAnticipiViewModel.PiazzaturaContoAnticipo.ABIBanca" id="ContiAnticipiViewModel_PiazzaturaContoAnticipo_ABIBanca" name="ContiAnticipiViewModel.PiazzaturaContoAnticipo.ABIBanca" style="width:350px;" class="new-form-control banca"></select>
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
                        <span data-bind="enable: ContiAnticipiViewModel.PiazzaturaContoAnticipo.PiazzaturaIdRapportoEnabled">
                            <select data-bind="value: ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdRapporto" id="ContiAnticipiViewModel_PiazzaturaContoAnticipo_IdRapporto" name="ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdRapporto" style="width:350px;" class="new-form-control conto"></select>
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
                                    <td class="Valore100" style="width: 60%;"><input data-bind="value: ContiAnticipiViewModel.PiazzaturaContoAnticipo.CodiceSia" id="ContiAnticipiViewModel_PiazzaturaContoAnticipo_CodiceSia" name="ContiAnticipiViewModel.PiazzaturaContoAnticipo.CodiceSia" readonly="readonly" type="text" value="" class="new-form-control"></td>
                                    <td width="1%;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="LabelWrap">Righe per pagina:</td>
                                    <td class="Valore100"><select data-bind="value: ContiAnticipiViewModel.NumeroRighePerPagina" id="ContiAnticipiViewModel_NumeroRighePerPagina" name="ContiAnticipiViewModel.NumeroRighePerPagina" class="new-form-control"><option value="10">10</option>
<option value="20">20</option>
<option value="50">50</option>
<option value="100">100</option>
</select></td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr><td class="Valore" colspan="3">&nbsp;</td></tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr style="height:1pt;"><td colspan="2"></td></tr>
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
    </div><div class="new-buttons"><input id="ank-btn-search" type="button" value="Visualizza" data-bind="enable: ContiAnticipiViewModel.PiazzaturaContoAnticipo.HasRapporti, singleClick: function(){ KoGoTo('/anchise.web/CA/ContiAnticipi/Ricerca?trk=empty');}" disabled="" class="btn"></div></div>
<script type="text/javascript">
                                            $(function () { RegisterViewModel("ContiAnticipiViewModel",{"PiazzaturaContoAnticipo":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":1,"OrdinamentoDirezione":1}, true);
            var root = rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo;
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
                rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdAzienda(),
                rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.ABIBanca(),
                rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdRapporto());
        
            var cmbAzienda = $('#ContiAnticipiViewModel_PiazzaturaContoAnticipo_IdAzienda');
            var cmbBanca = $('#ContiAnticipiViewModel_PiazzaturaContoAnticipo_ABIBanca');
            var cmbRapporto = $('#ContiAnticipiViewModel_PiazzaturaContoAnticipo_IdRapporto');

            /*
             Change combo
            */
            function registerChangeCombo() {
                cmbAzienda.change(function () {
                    var selectedAzienda = rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdAzienda();

                    initializePiazzatura(selectedAzienda,"","");
                });

                cmbBanca.change(function () {
                    var selectedAzienda = rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdAzienda();
                    var selectedBanca = rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.ABIBanca();

                    initializePiazzatura(selectedAzienda,selectedBanca,"");
                });

                cmbRapporto.change(function () {
                    var selectedAzienda = rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdAzienda();
                    var selectedBanca = rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.ABIBanca();
                    var selectedRapporto = rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdRapporto();

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

                communicationSendObject('/anchise.web/CA/ContiAnticipi/InitializeByPiazzatura?trk=empty', piazzatura, initializeFromPiazzatura);
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

                rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.CodiceSia(emptySIA);
                rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.CodiceCuc(emptyCUC);
                rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdBanca(emptyIdBanca);
                rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.IBAN(emptyIBAN);


                $.each(aziende, function (index, azienda) {
                    var option = $('<option></option>')
                        .val(azienda.IdAzienda)
                        .text(azienda.RagioneSociale);
                    cmbAzienda.append(option);

                    if (azienda.IdAzienda == piazzatura.IdAzienda) {
                        rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.CodiceSia(azienda.CodiceSIA);
                        rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.CodiceCuc(azienda.CodiceCUC);
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
                        rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdBanca(banca.Id);
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

                rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.HasRapporti(rapporti.length != 0);

                $.each(rapporti, function (index, rapporto) {
                    var option = $('<option></option>')
                        .val(rapporto.Id)
                        //.text(rapporto.CoordinateCc.RapportoConto);
                        .text(rapporto.AliasConto);
                    cmbRapporto.append(option);

                    if (rapporto.Id == piazzatura.IdRapporto) {
                        rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.IBAN(rapporto.CoordinateCC.IBAN);
                    }
                });

                rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdAzienda(piazzatura.IdAzienda);
                rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.ABIBanca(piazzatura.ABIBanca);
                rootViewModel.ContiAnticipiViewModel.PiazzaturaContoAnticipo.IdRapporto(piazzatura.IdRapporto);

                UpdateViewModelBinding();
            }
        UpdateViewModelBinding();}); </script></div>
                        <script type="text/javascript">
    $(document).ready(function () {
        communicationLoad('/anchise.web/CA/ContiAnticipi?trk=empty');
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