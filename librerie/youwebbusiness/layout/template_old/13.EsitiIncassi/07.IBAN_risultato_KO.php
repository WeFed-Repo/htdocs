<div id="MainSection" style="visibility: visible;">
    <div class="container"><div class="search new-riquadro">
        

<div class="page-title">
    <div class="search-flag">
    </div>
    <h1>
        Esiti Allineamento Iban
    </h1>
</div>
        <table class="toolbar" cellpadding="0" cellspacing="0">
            <tbody>
                    <tr>
                        <td width="50%">&nbsp;</td>
                        <td>         <table class="piazzaturainline old-inputForm" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td>Rag. Soc./ Intestatario</td>
                <td>Banca</td>
               
            </tr>
            <tr>
                <td class="azienda">
                    <span data-bind="enable: EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.PiazzaturaIdAziendaEnabled">
<select data-bind="value: EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda" id="EsitiALIBANViewModel_PiazzaturaAllinementoArchiviIBAN_IdAzienda" name="EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda" style="width: 350px" class="new-form-control azienda"><option value="">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select>                    </span>
                </td>
                <td class="banca">
                    <span data-bind="enable: EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.PiazzaturaAbiBancaEnabled">
<select data-bind="value: EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.ABIBanca" id="EsitiALIBANViewModel_PiazzaturaAllinementoArchiviIBAN_ABIBanca" name="EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.ABIBanca" style="width: 350px" class="new-form-control banca"><option value="">TUTTI</option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>                    </span>
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
             <td><a id="tool-refresh" class="ank-icon-filter-apply inactive" title="Applica Filtro Rapido" data-bind="singleClick: function() { rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.FilterRefresh(); }, css:{ inactive: EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.piazzaturaUnChanged}, enable: EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.piazzaturaChanged"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_quick-filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-goto" class="ank-icon-filter-go" title="Filtri" data-bind="singleClick: function(){ rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.FilterGoTo(); }, css:{ advanced: rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.isFilterAdvanceSet}"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-reset" class="ank-icon-filter-reset" title="Azzera filtri" data-bind="singleClick: function(){ rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.FilterReset(); }"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_remove-filter.png" border="0" width="20" height="20"></a></td>
         </tr>
     </tbody>
 </table>


</td>
                        <td>
<!-- div class="export-toolbar" style="border: chocolate 1px solid;" -->
    
   <table class="export-toolbar" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
       <tbody>
           <tr><td>&nbsp;</td></tr>
           <tr>
                   <td style="width:20px;cursor:pointer;"><a title="Stampa" class="ank-icon-export-Pdf" onclick="javascript:KoExport('/anchise.web/ESITI/EsitiALIBAN/ExportAsPdf?trk=empty');"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_pdf.png" border="0" width="20" height="20"></a></td>
           </tr>
       </tbody>
   </table>
<!-- /div -->

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
                                            $(function () { RegisterViewModel("EsitiALIBANViewModel",{"PiazzaturaAllinementoArchiviIBAN":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"DataCreazione":{"From":null,"To":null},"DataRicezione":{"From":null,"To":null},"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":4,"OrdinamentoDirezione":2}, true);
             var root = rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN; 
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
                rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda(),
                rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.ABIBanca(),
                rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdRapporto());
    
             var cmbAzienda = $('#EsitiALIBANViewModel_PiazzaturaAllinementoArchiviIBAN_IdAzienda');
             var cmbBanca = $('#EsitiALIBANViewModel_PiazzaturaAllinementoArchiviIBAN_ABIBanca');
            
             /*
              Change combo
             */
             function registerChangeCombo() {
                 cmbAzienda.change(function () {
                     var selectedAzienda = rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda();
                
                     initializePiazzatura(selectedAzienda,"","");
                 });
        
                 cmbBanca.change(function () {
                     var selectedAzienda = rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda();
                     var selectedBanca = rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.ABIBanca();
                   
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
                 rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.CodiceSia(emptySIA);
                 rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdBanca(emptyIdBanca);
            
                 $.each(aziende, function (index, azienda) {
                     var option = $('<option></option>')
                         .val(azienda.IdAzienda)
                         .text(azienda.RagioneSociale);
                     cmbAzienda.append(option);
                
                     if (azienda.IdAzienda == piazzatura.IdAzienda) {
                         rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.CodiceSia(azienda.CodiceSIA);
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
                        rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdBanca(banca.Id);
                    }
                 });
                 // bug ie7
                 cmbBanca.removeClass("banca").addClass("banca");
            
                 rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda(piazzatura.IdAzienda);
                 rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.ABIBanca(piazzatura.ABIBanca);
                 rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdRapporto(piazzatura.IdRapporto);
                
                 UpdateViewModelBinding();
             }
         
        var piazz = rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN;
        piazz.piazzaturaUnChanged = ko.computed(
            function() {
                return rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda() == '' &&
                    rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.ABIBanca() == '';
            }
        );
                             
        piazz.piazzaturaChanged = ko.computed(
            function() {
                return rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.IdAzienda() != '' ||
                    rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN.ABIBanca() != '';
            }
        );

        piazz.FilterRefresh = function() {
            KoGoTo('/anchise.web/ESITI/EsitiALIBAN/FilterApply?trk=empty');
        };
        
        piazz.FilterGoTo = function() {
            KoGoTo('/anchise.web/ESITI/EsitiALIBAN/FilterGoTo?trk=empty');
        };
        
        piazz.FilterReset = function() {
            KoGoTo('/anchise.web/ESITI/EsitiALIBAN/FilterReset?trk=empty');
        };
    
                             var piazz = rootViewModel.EsitiALIBANViewModel.PiazzaturaAllinementoArchiviIBAN;
                             piazz.isFilterAdvanceSet = ko.computed(
                                 function() {
                                     return false;
                                 }
                             );
                         UpdateViewModelBinding();}); </script></div>