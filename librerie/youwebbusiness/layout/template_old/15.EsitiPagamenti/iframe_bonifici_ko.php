<head>
</head>
<body class="sfondo normal-text">
    <div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="position: absolute; top: 0px; left: 0px; visibility: hidden; z-index: 1000;"> </div>
    <div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="position: absolute; top: 0px; left: 0px; visibility: hidden; z-index: 1000;"> </div>

    <!-- from waiting panel -->



<div id="response-box">
</div>
<form id="formExport" method="POST"></form>


    <div class="main-content">
        <table class="main-content old-container">
            <tbody>
                <tr>
                    <td style="vertical-align: top;">
                        <div id="MainSection" style="visibility: visible;">
    <div class="container"><div class="search new-riquadro">
        

<div class="page-title">
    <div class="search-flag">
    </div>
    <h1>
        Bonifici Italia-Richiesta Assegni
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
                    <span data-bind="enable: EsitiPagEPViewModel.PiazzaturaStipendio.PiazzaturaIdAziendaEnabled">
                        <select data-bind="value: EsitiPagEPViewModel.PiazzaturaStipendio.IdAzienda" id="EsitiPagEPViewModel_PiazzaturaStipendio_IdAzienda" name="EsitiPagEPViewModel.PiazzaturaStipendio.IdAzienda" class="new-form-control azienda"><option value="">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select>
                    </span>
                </td>
                <td class="banca">
                    <span data-bind="enable: EsitiPagEPViewModel.PiazzaturaStipendio.PiazzaturaAbiBancaEnabled">
                        <select data-bind="value: EsitiPagEPViewModel.PiazzaturaStipendio.ABIBanca" id="EsitiPagEPViewModel_PiazzaturaStipendio_ABIBanca" name="EsitiPagEPViewModel.PiazzaturaStipendio.ABIBanca" class="new-form-control banca"><option value="">TUTTI</option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>
                    </span>
                </td>
                <td class="conto">
                    <span data-bind="enable: EsitiPagEPViewModel.PiazzaturaStipendio.PiazzaturaIdRapportoEnabled">
                        <select data-bind="value: EsitiPagEPViewModel.PiazzaturaStipendio.IdRapporto" id="EsitiPagEPViewModel_PiazzaturaStipendio_IdRapporto" name="EsitiPagEPViewModel.PiazzaturaStipendio.IdRapporto" class="new-form-control conto"><option value="">TUTTI</option><option value="2582120">11701-000000002407</option><option value="2582121">11701-000000002417</option><option value="2582122">11701-000000002418</option><option value="2582123">11701-000000002419</option><option value="2582124">11701-000000002420</option><option value="2582125">11701-000000002421</option><option value="2582126">11701-000000002422</option><option value="2582127">11701-000000002423</option><option value="2582128">11701-000000002424</option><option value="2582129">11701-000000002425</option><option value="2582130">11701-000000002426</option><option value="2582131">11701-000000002427</option><option value="2582132">11701-000000002428</option><option value="2582133">11701-000000002429</option><option value="812046">12900-000000047658</option><option value="812047">12900-000000047659</option><option value="812048">12900-000000047661</option></select>
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
             <td><a id="tool-refresh" class="ank-icon-filter-apply inactive" title="Applica Filtro Rapido" data-bind="singleClick: function() { rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.FilterRefresh(); }, css:{ inactive: EsitiPagEPViewModel.PiazzaturaStipendio.piazzaturaUnChanged}, enable: EsitiPagEPViewModel.PiazzaturaStipendio.piazzaturaChanged"><img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_quick-filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-goto" class="ank-icon-filter-go" title="Filtri" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.FilterGoTo(); }, css:{ advanced: rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.isFilterAdvanceSet}"><img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-reset" class="ank-icon-filter-reset" title="Azzera filtri" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.FilterReset(); }"><img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_remove-filter.png" border="0" width="20" height="20"></a></td>
         </tr>
     </tbody>
 </table>


</td>
                        <td>
                            
                            <table class="export-toolbar" style="border-collapse: collapse; border: 0px;" cellpadding="0" cellspacing="0">
                            <tbody>
                                 <tr><td>&nbsp;</td></tr>
                                 <tr>
                                     <td>
                                        <span class="export-toolbar" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.GoToRicercaPerPDF();}">
                                           <a title="Stampa" class="ank-icon-export-Pdf"><img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_pdf.png" border="0" width="20" height="20"></a></span>
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

                    </td>
                </tr>
            </tbody>
         
        </table>
    </div>


<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-describedby="dialogmessage" aria-labelledby="ui-id-1" style="height: auto; width: auto; top: 204.5px; left: 920px; display: none; z-index: 101;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogmessage" style="opacity: 0; width: auto; min-height: 150px; max-height: 300px; height: auto;" class="ui-dialog-content ui-widget-content">
    <img src="/anchise.web/Contents/00000/it-IT/Images/preloader.gif?v=75">
</div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popup-dialog ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogpopup" aria-labelledby="ui-id-2" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogpopup" style="" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popupClass ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogerror" aria-labelledby="ui-id-3" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-3" class="ui-dialog-title">YouBusiness Web</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogerror" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
</body>