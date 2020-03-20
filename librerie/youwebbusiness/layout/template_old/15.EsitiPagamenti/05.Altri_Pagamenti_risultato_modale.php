<div id="MainSection" style="visibility: visible;">
    <div class="container"><div class="search new-riquadro">
        

<div class="page-title">
    <div class="search-flag">
    </div>
    <h1>
        Altri Pagamenti
    <a id="helpButton" class="helplink"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1>
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
                    <span data-bind="enable: EsitiPagamentiViewModel.PiazzaturaPagamento.PiazzaturaIdAziendaEnabled">
                        <select data-bind="value: EsitiPagamentiViewModel.PiazzaturaPagamento.IdAzienda" id="EsitiPagamentiViewModel_PiazzaturaPagamento_IdAzienda" name="EsitiPagamentiViewModel.PiazzaturaPagamento.IdAzienda" class="new-form-control azienda"><option value="">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select>
                    </span>
                </td>
                <td class="banca">
                    <span data-bind="enable: EsitiPagamentiViewModel.PiazzaturaPagamento.PiazzaturaAbiBancaEnabled">
                        <select data-bind="value: EsitiPagamentiViewModel.PiazzaturaPagamento.ABIBanca" id="EsitiPagamentiViewModel_PiazzaturaPagamento_ABIBanca" name="EsitiPagamentiViewModel.PiazzaturaPagamento.ABIBanca" class="new-form-control banca"><option value="">TUTTI</option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>
                    </span>
                </td>
                <td class="conto">
                    <span data-bind="enable: EsitiPagamentiViewModel.PiazzaturaPagamento.PiazzaturaIdRapportoEnabled">
                        <select data-bind="value: EsitiPagamentiViewModel.PiazzaturaPagamento.IdRapporto" id="EsitiPagamentiViewModel_PiazzaturaPagamento_IdRapporto" name="EsitiPagamentiViewModel.PiazzaturaPagamento.IdRapporto" class="new-form-control conto"><option value="">TUTTI</option><option value="2582120">11701-000000002407</option><option value="2582121">11701-000000002417</option><option value="2582122">11701-000000002418</option><option value="2582123">11701-000000002419</option><option value="2582124">11701-000000002420</option><option value="2582125">11701-000000002421</option><option value="2582126">11701-000000002422</option><option value="2582127">11701-000000002423</option><option value="2582128">11701-000000002424</option><option value="2582129">11701-000000002425</option><option value="2582130">11701-000000002426</option><option value="2582131">11701-000000002427</option><option value="2582132">11701-000000002428</option><option value="2582133">11701-000000002429</option><option value="812046">12900-000000047658</option><option value="812047">12900-000000047659</option><option value="812048">12900-000000047661</option></select>
                    </span>
                </td>
            </tr>
        </tbody></table>
</td>
                        <td>
                            <table class="filter-toolbar piazzaturainline old-inputForm" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td style="font-weight: bold;">
                                            Tipo dispositivo
                                        </td>
                                    </tr>
                                    <tr valign="bottom">
                                        <td>
                                            <select data-bind="value: EsitiPagamentiViewModel.IdDispositivo" id="EsitiPagamentiViewModel_IdDispositivo" name="EsitiPagamentiViewModel.IdDispositivo" class="new-form-control"><option value="">TUTTI</option>
<option value="EBB">Esiti Bollettino Bancario</option>
<option value="EBE">Esiti Pagamenti Estero</option>
<option value="ERF">Esiti Ritiro Effetti (Pagamenti Riba)</option>
<option value="YBN">Esiti Bonifici SEPA</option>
<option value="YST">Esiti Stipendi SEPA</option>
</select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
             <td><a id="tool-refresh" class="ank-icon-filter-apply inactive" title="Applica Filtro Rapido" data-bind="singleClick: function() { rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.FilterRefresh(); }, css:{ inactive: EsitiPagamentiViewModel.PiazzaturaPagamento.piazzaturaUnChanged}, enable: EsitiPagamentiViewModel.PiazzaturaPagamento.piazzaturaChanged"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_quick-filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-goto" class="ank-icon-filter-go" title="Filtri" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.FilterGoTo(); }, css:{ advanced: rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.isFilterAdvanceSet}"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-reset" class="ank-icon-filter-reset" title="Azzera filtri" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.FilterReset(); }"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_remove-filter.png" border="0" width="20" height="20"></a></td>
         </tr>
     </tbody>
 </table>


</td>
                        <td>
                        <table class="export-toolbar" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <td style="width:20px">
                                            <a title="Stampa" class="ank-icon-export-Pdf" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.GoToRicercaPerPDF();}"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_pdf.png" border="0" width="20" height="20"></a>
                                        
                                    </td>
                                    <td style="width:20px">
                                            <a title="Stampa" class="ank-icon ui-icon ank-icon-export-Excel" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.GoToRicercaPerExcel();}"></a>
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
                        <td nowrap="nowrap">
                            <div class="paging">
                                <span class="spacer">&nbsp;</span>
                                
    <span class="rpp">
        Esiti per pagina:
            <span class="rpp-current">10</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetItemsPerPageAndGo('20');}">20</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetItemsPerPageAndGo('50');}">50</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetItemsPerPageAndGo('100');}">100</span>
    </span>

                                
<span class="help">
    
</span>

<script type="text/javascript">
    $(document).ready(function () {
        $("#helpButton").click(function (e) {
            e.preventDefault();
            var href = '/ibbweb2/newstyle/static/help/it/esiti/pagamenti/listaesiti.html';
            window.open(href, "Dettaglio", "toolbar=no,scrollbars=yes,status=no,width=534,height=240");
        });
    });
</script>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="divgrid">
                                    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            
            <tr class="columns">
                <th style="width: 70px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Dato
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(1, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(1, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 70px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Tipo Disp.
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(2, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(2, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 200px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Ordinante
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(3, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(3, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th>
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Beneficiario - Creditore
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(4, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(4, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 70px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Esecuzione
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(5, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(5, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 70px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Data flusso
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(6, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down-active" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(6, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 110px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Importo
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(7, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.SetSortData(7, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 25px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Div
                </td>
            </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 25px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Esito Ord.
                </td>
            </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 70px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Num. Disposiz.
                </td>
            </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 100px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Stato Disposizione
                </td>
            </tr>
        </tbody>
    </table>

                </th>
            </tr>
        </thead>
        <tbody>
                <tr class="treven">
                    <td>
                        
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo"> 
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_banca.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo">

                    </td>
                    <td>
                        Bonifico SEPA
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        <label for="item_BeneficiarioRagioneSociale" title="AUTOMOBILE CLUB MODENA">AUTOMOBILE CLUB MODENA</label>
                    </td>
                    <td>
                        17/05/2019
                    </td>
                    <td>
                        17/09/2019
                    </td>
                    <td class="tdright">
                        5,00

                    </td>
                    <td>
                        EUR
                    </td>
                    <td>
                        
                    <img src="/anchise.web/Contents/00000/it-IT/Images/esito_ordinante_unchecked.jpg?v=75" alt="NO" title="NO">

                    </td>
                    <td>
                        
                    </td>
                    <td>
                            <span class="link" data-bind="singleClick: function(){ (rootViewModel.EsitiPagamentiViewModel).GoToDettaglio(102707148, 2582121, 106609,'SS', 'YBN'); }">
                                Confermata
                            </span>
                    </td>
                </tr>
                <tr class="trodd">
                    <td>
                        
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo"> 
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_banca.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo">

                    </td>
                    <td>
                        Bonifico SEPA
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        <label for="item_BeneficiarioRagioneSociale" title="AUTOMOBILE CLUB MODENA">AUTOMOBILE CLUB MODENA</label>
                    </td>
                    <td>
                        18/03/2019
                    </td>
                    <td>
                        17/09/2019
                    </td>
                    <td class="tdright">
                        2,00

                    </td>
                    <td>
                        EUR
                    </td>
                    <td>
                        
                    <img src="/anchise.web/Contents/00000/it-IT/Images/esito_ordinante_unchecked.jpg?v=75" alt="NO" title="NO">

                    </td>
                    <td>
                        
                    </td>
                    <td>
                            <span class="link" data-bind="singleClick: function(){ (rootViewModel.EsitiPagamentiViewModel).GoToDettaglio(102707146, 812047, 106609,'SS', 'YBN'); }">
                                Confermata
                            </span>
                    </td>
                </tr>
                <tr class="treven">
                    <td>
                        
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=75" alt="Dispositivo" title="Dispositivo">

                    </td>
                    <td>
                        Rit.Effet.
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        
                    </td>
                    <td>
                        30/09/2019
                    </td>
                    <td>
                        17/09/2019
                    </td>
                    <td class="tdright">
                        1,00

                    </td>
                    <td>
                        EUR
                    </td>
                    <td>
                        

                    </td>
                    <td>
                        
                    </td>
                    <td>
                            <span class="link" data-bind="singleClick: function(){ (rootViewModel.EsitiPagamentiViewModel).GoToDettaglio(66852806, 2582120, 106609,'SD', 'ERF'); }">
                                Autorizzata
                            </span>
                    </td>
                </tr>
                <tr class="trodd">
                    <td>
                        
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo"> 
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_banca.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo">

                    </td>
                    <td>
                        Bonifico SEPA
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        <label for="item_BeneficiarioRagioneSociale" title="AUTOMOBILE CLUB MODENA">AUTOMOBILE CLUB MODENA</label>
                    </td>
                    <td>
                        28/08/2019
                    </td>
                    <td>
                        16/09/2019
                    </td>
                    <td class="tdright">
                        12,00

                    </td>
                    <td>
                        EUR
                    </td>
                    <td>
                        
                    <img src="/anchise.web/Contents/00000/it-IT/Images/esito_ordinante_unchecked.jpg?v=75" alt="NO" title="NO">

                    </td>
                    <td>
                        
                    </td>
                    <td>
                            <span class="link" data-bind="singleClick: function(){ (rootViewModel.EsitiPagamentiViewModel).GoToDettaglio(102707141, 812046, 106609,'SS', 'YBN'); }">
                                Confermata
                            </span>
                    </td>
                </tr>
                <tr class="treven">
                    <td>
                        
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo"> 
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_banca.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo">

                    </td>
                    <td>
                        Bonifico SEPA
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        <label for="item_BeneficiarioRagioneSociale" title="AUTOMOBILE CLUB">AUTOMOBILE CLUB</label>
                    </td>
                    <td>
                        16/09/2019
                    </td>
                    <td>
                        16/09/2019
                    </td>
                    <td class="tdright">
                        10,00

                    </td>
                    <td>
                        EUR
                    </td>
                    <td>
                        
                    <img src="/anchise.web/Contents/00000/it-IT/Images/esito_ordinante_unchecked.jpg?v=75" alt="NO" title="NO">

                    </td>
                    <td>
                        
                    </td>
                    <td>
                            <span class="link" data-bind="singleClick: function(){ (rootViewModel.EsitiPagamentiViewModel).GoToDettaglio(102707139, 812046, 106609,'SS', 'YBN'); }">
                                Confermata
                            </span>
                    </td>
                </tr>
                <tr class="trodd">
                    <td>
                        
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo"> 
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_banca.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo">

                    </td>
                    <td>
                        Bonifico SEPA
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        <label for="item_BeneficiarioRagioneSociale" title="AUTOMOBILE CLUB MODENA">AUTOMOBILE CLUB MODENA</label>
                    </td>
                    <td>
                        13/09/2019
                    </td>
                    <td>
                        13/09/2019
                    </td>
                    <td class="tdright">
                        12,00

                    </td>
                    <td>
                        EUR
                    </td>
                    <td>
                        
                    <img src="/anchise.web/Contents/00000/it-IT/Images/esito_ordinante_unchecked.jpg?v=75" alt="NO" title="NO">

                    </td>
                    <td>
                        
                    </td>
                    <td>
                            <span class="link" data-bind="singleClick: function(){ (rootViewModel.EsitiPagamentiViewModel).GoToDettaglio(102707066, 812046, 106609,'SS', 'YBN'); }">
                                Confermata
                            </span>
                    </td>
                </tr>
                <tr class="treven">
                    <td>
                        
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo"> 
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_banca.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo">

                    </td>
                    <td>
                        Bonifico SEPA
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        <label for="item_BeneficiarioRagioneSociale" title="AUTOMOBILE CLUB">AUTOMOBILE CLUB</label>
                    </td>
                    <td>
                        12/09/2019
                    </td>
                    <td>
                        12/09/2019
                    </td>
                    <td class="tdright">
                        10,00

                    </td>
                    <td>
                        EUR
                    </td>
                    <td>
                        
                    <img src="/anchise.web/Contents/00000/it-IT/Images/esito_ordinante_unchecked.jpg?v=75" alt="NO" title="NO">

                    </td>
                    <td>
                        
                    </td>
                    <td>
                            <span class="link" data-bind="singleClick: function(){ (rootViewModel.EsitiPagamentiViewModel).GoToDettaglio(102707007, 812047, 106609,'SS', 'YBN'); }">
                                Confermata
                            </span>
                    </td>
                </tr>
                <tr class="trodd">
                    <td>
                        
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo"> 
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_banca.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo">

                    </td>
                    <td>
                        Bonifico SEPA
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        <label for="item_BeneficiarioRagioneSociale" title="AUTOMOBILE CLUB">AUTOMOBILE CLUB</label>
                    </td>
                    <td>
                        12/09/2019
                    </td>
                    <td>
                        12/09/2019
                    </td>
                    <td class="tdright">
                        10,00

                    </td>
                    <td>
                        EUR
                    </td>
                    <td>
                        
                    <img src="/anchise.web/Contents/00000/it-IT/Images/esito_ordinante_unchecked.jpg?v=75" alt="NO" title="NO">

                    </td>
                    <td>
                        
                    </td>
                    <td>
                            <span class="link" data-bind="singleClick: function(){ (rootViewModel.EsitiPagamentiViewModel).GoToDettaglio(102707005, 812047, 106609,'SS', 'YBN'); }">
                                Confermata
                            </span>
                    </td>
                </tr>
                <tr class="treven">
                    <td>
                        
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo"> 
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_banca.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo">

                    </td>
                    <td>
                        Bonifico SEPA
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        <label for="item_BeneficiarioRagioneSociale" title="AUTOMOBILE CLUB MODENA">AUTOMOBILE CLUB MODENA</label>
                    </td>
                    <td>
                        18/03/2019
                    </td>
                    <td>
                        12/09/2019
                    </td>
                    <td class="tdright">
                        2,00

                    </td>
                    <td>
                        EUR
                    </td>
                    <td>
                        
                    <img src="/anchise.web/Contents/00000/it-IT/Images/esito_ordinante_unchecked.jpg?v=75" alt="NO" title="NO">

                    </td>
                    <td>
                        
                    </td>
                    <td>
                            <span class="link" data-bind="singleClick: function(){ (rootViewModel.EsitiPagamentiViewModel).GoToDettaglio(102706995, 812047, 106609,'SS', 'YBN'); }">
                                Confermata
                            </span>
                    </td>
                </tr>
                <tr class="trodd">
                    <td>
                        
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo"> 
    <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_banca.gif?v=75" alt="Esito Incrociato con dispositivo" title="Esito Incrociato con dispositivo">

                    </td>
                    <td>
                        Bonifico SEPA
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        <label for="item_BeneficiarioRagioneSociale" title="AUTOMOBILE CLUB MODENA 2">AUTOMOBILE CLUB MODENA 2</label>
                    </td>
                    <td>
                        12/09/2019
                    </td>
                    <td>
                        12/09/2019
                    </td>
                    <td class="tdright">
                        1,00

                    </td>
                    <td>
                        EUR
                    </td>
                    <td>
                        
                    <img src="/anchise.web/Contents/00000/it-IT/Images/esito_ordinante_unchecked.jpg?v=75" alt="NO" title="NO">

                    </td>
                    <td>
                        
                    </td>
                    <td>
                            <span class="link" data-bind="singleClick: function(){ (rootViewModel.EsitiPagamentiViewModel).GoToDettaglio(102706989, 812046, 106609,'SS', 'YBN'); }">
                                Confermata
                            </span>
                    </td>
                </tr>
        </tbody>
    </table>
<script language="javascript">
    $(function () {
        $('table.grid>tbody>tr:odd').addClass('trodd');
        $('table.grid>tbody>tr:even').addClass('treven');

        $('table.summary>tbody>tr.alternacolor:odd').addClass('trodd');
        $('table.summary>tbody>tr.alternacolor:even').addClass('treven');
    });
 </script>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap">
                            <div class="paging">
                                    <table class="pager" cellpadding="0" cellspacing="0">
   <tbody><tr style="height: 16px;">
       <td id="PagerTotal">
           Totale: 228
       </td>
       <td nowrap="nowrap" id="PagerActions" class="right">
           <table cellpadding="0" cellspacing="0" class="old-inputForm">
               <tbody>
                   <tr>
                       <td><a class="ui-icon ank-icon ank-icon-pager-first" title="Prima pagina" data-bind="visible: rootViewModel.EsitiPagamentiViewModel.CanGoToFirst, singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.GoToFirst(); }" style="display: none;"></a></td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-prev" title="Pagina precente" data-bind="visible: rootViewModel.EsitiPagamentiViewModel.CanGoToPrevious, singleClick: function(){  rootViewModel.EsitiPagamentiViewModel.GoToPrevius();}" style="display: none;"></a></td>
                       <td><input align="right" data-bind="numericrange: EsitiPagamentiViewModel.PaginaRichiesta, minValue: 1, maxValue: 23, fallbackValue : 1" id="EsitiPagamentiViewModel_PaginaRichiesta" maxlength="4" name="EsitiPagamentiViewModel.PaginaRichiesta" size="4" type="text" value="" class="new-form-control"> / 23</td>
                       <td><a class="" title="Vai" data-bind="enable: rootViewModel.EsitiPagamentiViewModel.CanGo, singleClick: function(){rootViewModel.EsitiPagamentiViewModel.GoToPage(); }">Vai</a>&nbsp;&nbsp;</td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-next" title="Pagina successiva" data-bind="visible: rootViewModel.EsitiPagamentiViewModel.CanGoToNext, singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.GoToNext(); }"></a></td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-last" title="Ultima pagina" data-bind="visible: rootViewModel.EsitiPagamentiViewModel.CanGoToLast, singleClick: function(){ rootViewModel.EsitiPagamentiViewModel.GoToLast(); }"></a></td>
                   </tr>
               </tbody>
           </table>
       </td>
   </tr>
  </tbody></table>

                            </div>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div><div class="new-buttons"></div></div>
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
        
                             //debugger;
                             var piazz = rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento;
                             piazz.piazzaturaUnChanged = ko.computed(
                                 function() {
                                     return rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdAzienda() == '' &&
                                         rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.ABIBanca() == '' &&
                                         rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdRapporto() == '';
                                 }
                             );
                             
                             piazz.piazzaturaChanged = ko.computed(
                                 function() {
                                     return rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.HasRapporti() && (rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdAzienda() != '' ||
                                         rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.ABIBanca() != '' ||
                                         rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdRapporto() != '');
                                 }
                             );
                             
                             piazz.FilterRefresh = function() {
                                KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/FilterApply?trk=empty');
                             };
        
                             piazz.FilterGoTo = function() {
                                KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/FilterGoTo?trk=empty');
                             };
        
                             piazz.FilterReset = function() {
                                KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/FilterReset?trk=empty');
                             };
                         
                             var piazz = rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento;
                             piazz.isFilterAdvanceSet = ko.computed(
                                 function() {
                                     return false;
                                 }
                             );
                         
                        var piazz = rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento;
                        piazz.piazzaturaUnChanged = ko.computed(
                            function() {
                                return rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdAzienda() == '' &&
                                    rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.ABIBanca() == '' &&
                                    rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdRapporto() == '' &&
                                    rootViewModel.EsitiPagamentiViewModel.IdDispositivo() == '';
                            }
                        );

                        piazz.piazzaturaChanged = ko.computed(
                            function() {
                                return rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.HasRapporti() && (rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdAzienda() != '' ||
                                    rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.ABIBanca() != '' ||
                                    rootViewModel.EsitiPagamentiViewModel.PiazzaturaPagamento.IdRapporto() != '') ||
                                    rootViewModel.EsitiPagamentiViewModel.IdDispositivo() != '';
                            }
                        );
                    
              var root = rootViewModel.EsitiPagamentiViewModel;
              root.SetItemsPerPageAndGo = function(itemsPerPage) {
                  rootViewModel.EsitiPagamentiViewModel.NumeroRighePerPagina(itemsPerPage);
                  rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta(1);
                  
                  if ("false" == "true") {
                    // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                    // in quanto quello corrente non è quello corretto
                    KoGoToUsingObject('/anchise.web/ESITI/EsitiPAGPSD/PageSetItemsPerPage?trk=empty', 'EsitiPagamentiViewModel', true);
                  } else {
                    // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                    KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/PageSetItemsPerPage?trk=empty');
                  }
              };
    
                        var root = rootViewModel.EsitiPagamentiViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty', 'EsitiPagamentiViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EsitiPagamentiViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty', 'EsitiPagamentiViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EsitiPagamentiViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty', 'EsitiPagamentiViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EsitiPagamentiViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty', 'EsitiPagamentiViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EsitiPagamentiViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty', 'EsitiPagamentiViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EsitiPagamentiViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty', 'EsitiPagamentiViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EsitiPagamentiViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagamentiViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty', 'EsitiPagamentiViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/SortApply?trk=empty');
                         }
                        };
                    
    var root = rootViewModel.EsitiPagamentiViewModel;
    root.GoToDettaglio = function(id, idRapporto, idOrdinante, idTipoDato, idDispositivo) {
        var action = '/anchise.web/ESITI/EsitiPAGPSDDettaglio/DettaglioEsitoPAGPSD?trk=empty';
                var dataToSend = {
                    IdRapporto: idRapporto,
                    Id : id,
                    IdAzienda: idOrdinante,
                    IdTipoDato: idTipoDato,
                    IdTipoDisposizione: idDispositivo

                };

                communicationLoad(action, dataToSend, true, 880);
            };
            root.GoToDistDettaglio = function(id, ordinante, ibanOrdinante, idDispositivo, numDispo, importo) {
                var action = '/anchise.web/ESITI/EsitiPAGPSDDistDettaglio?trk=empty';
                var filter = ko.mapping.toJS(root);
                sessionStorage.setItem("EsitiFilterBack", JSON.stringify(filter));
                sessionStorage.setItem("EsitiDistData", JSON.stringify({Ordinante: ordinante, Iban: ibanOrdinante, Tipo: idDispositivo, NumeroDisp: numDispo, Totale: importo }));
                var dataToSend = {
                    PaginaRichiesta : 1,
                    NumeroRighePerPagina: filter.NumeroRighePerPagina,
                    Importo: {
                        From: filter.Importo.From,
                        To: filter.Importo.To
                    },
                    DataInvio: {
                        From: filter.DataInvio.From,
                        To: filter.DataInvio.To
                    },
                    DataEsecuzione: {
                        From: filter.DataEsecuzione.From,
                        To: filter.DataEsecuzione.To
                    },
                    IdDist : id
                };
                communicationLoad(action, dataToSend);
            };
        
         var root = rootViewModel.EsitiPagamentiViewModel;
        
         root.ResetPaginaRichiesta = function() {
             var originalPaginaRichiesta = 1;
             rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta(originalPaginaRichiesta);
         };

         root.CanGoToFirst = ko.computed(
             function() {
                 // var canGoToFirst = rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta() != 1;
                 var canGoToFirst = 1 != 1;
                 return canGoToFirst ;
             }
         );
              
         root.CanGoToPrevious = ko.computed(
             function() {
                 // var canGoToPrevious = rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta() > 1;
                 var canGoToPrevious = 1 > 1;
                 return canGoToPrevious ;
             }
         );
              
         root.CanGo = ko.computed(
             function() {
                 var canGo = (rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta() != 1) && (rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta() >= 1) && (rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta() <= 23);
                 return canGo ;
             }
         );
              
         root.CanGoToNext = ko.computed(
             function() {
                 // var canGoToNext = rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta() < 23;
                 var canGoToNext = 1 < 23;
                 return canGoToNext ;
             }
         );
              
         root.CanGoToLast = ko.computed(
             function() {
                 // var canGoToLast = rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta() != 23;
                 var canGoToLast = 1 != 23;
                 return canGoToLast ;
             }
         );


         root.GoToFirst = function() {
             var firstPage = '1';
             rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta(firstPage);
              
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/ESITI/EsitiPAGPSD/PageGoToFirst?trk=empty', 'EsitiPagamentiViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                 KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/PageGoToFirst?trk=empty');
             }
         };

          root.GoToLast = function() {
             var lastPage = '23';
             rootViewModel.EsitiPagamentiViewModel.PaginaRichiesta(lastPage);
              
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/ESITI/EsitiPAGPSD/PageGoToLast?trk=empty', 'EsitiPagamentiViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                 KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/PageGoToLast?trk=empty');
             }
         };

         root.GoToNext = function() {
             rootViewModel.EsitiPagamentiViewModel.ResetPaginaRichiesta(); 
             
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/ESITI/EsitiPAGPSD/PageGoToNext?trk=empty', 'EsitiPagamentiViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/PageGoToNext?trk=empty');
             }
         };
         
         root.GoToPrevius = function() {
             rootViewModel.EsitiPagamentiViewModel.ResetPaginaRichiesta(); 
             
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/ESITI/EsitiPAGPSD/PageGoToPrevious?trk=empty', 'EsitiPagamentiViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/PageGoToPrevious?trk=empty');
             }
         };
         
         root.GoToPage = function() {
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/ESITI/EsitiPAGPSD/PageGoTo?trk=empty', 'EsitiPagamentiViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/ESITI/EsitiPAGPSD/PageGoTo?trk=empty');
             }
         };

     
            var root = rootViewModel.EsitiPagamentiViewModel;
            root.GoToRicercaPerPDF = function() {

                var action = '/anchise.web/ESITI/EsitiPAGPSD/GoToIndexPDF?trk=empty';
                var objectToSend = ko.mapping.toJS(root);
                communicationLoad(action, objectToSend, true);
            };

            root.GoToRicercaPerExcel = function () {
                var action = '/anchise.web/ESITI/EsitiPAGPSD/GoToIndexExcel?trk=empty';
                var objectToSend = ko.mapping.toJS(root);
                communicationLoad(action, objectToSend, true);
            };
UpdateViewModelBinding();}); </script></div>