    <div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div>
    <table style="width: 100%; height: 100%">
        <tbody>
            <tr>
                <td valign="top">
                    <table style="width: 100%; height: 100%">
                        <tbody>
                            <tr>
                                <td valign="top">
                                    <div class="container"><div class="old-pageContent new-riquadro">
                                    <div style="width:100%;margin:auto;padding-top:10px;" id="riepilogoMainPanel">
                                        
                                        

                                        <iframe name="downloadFrame" style="visibility: hidden; display: none; width: 0px; height: 0px;"></iframe>
                                        <form name="downloadFrameForm" id="downloadFrameForm" action="#" method="POST" target="downloadFrame">
                                            <input type="hidden" id="data" name="data" value="">
                                            <input type="hidden" id="format" name="format" value="">
                                        </form>

                                        <div id="PannelloControlloPanel">
                                            <form action="#" id="input_form">
                                            <input type="hidden" name="Paging.SortColumn" id="SortColumnIndex" value="0">
                                            <input type="hidden" name="Paging.SortAscending" id="SortOrder" value="false">
                                            <input type="hidden" name="Paging.Index" id="ItemIndex" value="0">
                                            <input type="hidden" name="Paging.Count" id="Count" value="">
                                            <div id="riepilogoFilterPanel">
                                                <!-- from function -->
                                                <div class="panel-group vnt-filter" id="accordion" style="background-color: rgb(247, 252, 247);">
                                                    <div class="panel vnt-filter" id="youBizWhiteBackground" style="background-color: rgb(255, 255, 255);">
                                                        <div class="old-pageTitle page-title"><div class="new-flag"></div><h1>Gestione Intestatari
                                                            </h1></div>
                                                        <div class="section" style="margin-top: 0px; padding-bottom: 0px;">
                                                            <table class="testoBlackSmall" style="width: 100% margin: auto">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width: 20%; padding-left: 5px;">
                                                                            Rag. Soc./Intestatario:
                                                                        </td>
                                                                        <td style="width: 25%">
                                                                            <select style="width: 200px" class="new-form-control" id="selAzienda" name="Piazzatura.CodiceAzienda"><option value="500000119">MARINUCCI YACHTING S.R.L.</option></select>
                                                                        </td>
                                                                        <td style="width: 20%; padding-left:30px">
                                                                            Posizione:
                                                                        </td>
                                                                        <td style="width: 25%">
                                                                            <select style="width: 200px" class="new-form-control" id="selPosizione" name="Piazzatura.Posizione"><option value="050342482000001062220">CARTA AZIENDALE                         </option></select>
                                                                        </td>
                                                                        <td style="width: 10%; text-align: right">
                                                                            <div data-toggle="collapse" class=" ybw-icon-expand ybw-icon-expand-up-down collapsed " data-parent="#accordion" href="#collapseOne" id="riepilogoFilterToggler">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse section" style="margin-top: 0px; padding-bottom: 0px;">
                                                        <div class="panel vnt-filter section" style="margin-top: 0px; padding-bottom: 0px; background-color: rgb(247, 252, 247);">
                                                            <table class="testoBlackSmall" border="0" style="">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                        </th>
                                                                        <th>
                                                                        </th>
                                                                        <th>
                                                                        </th>
                                                                        <th>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width: 20%; padding-left: 5px">
                                                                            Stato Carta:
                                                                        </td>
                                                                        <td style="width: 25%; padding-left: 11px">
                                                                            <select style="width: 130px" id="selStato" name="Status" class="new-form-control">
                                                                                <option value="">Tutti gli stati</option>
                                                                                <option selected="selected" value="4">
                                                                                    Da Consegnare</option>
                                                                                <option value="3">
                                                                                    Consegnata</option>
                                                                            </select>
                                                                            
                                                                        </td>
                                                                        <td style="width: 20%; padding-left:55px">
                                                                            Righe per pagina:
                                                                        </td>
                                                                        <td style="width: 25%; padding-left: 34px">
                                                                            <select class="new-form-control" id="selPagingItemsPerPage" name="Paging.Count">
                                                                                <option value="10">10</option>
                                                                                <option selected="selected" value="50">50</option>
                                                                                <option value="100">100</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="width: 10%;">&nbsp;</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="panel vnt-filter section old-buttons" style="text-align: center; margin-top: 0px; padding-bottom: 0px; background-color: rgb(247, 252, 247);">
                                                        
                                                    </div>
                                                    <span class="testoRedSmallBold" id="alertFiltriSet"></span>
                                                    <div class="vnt-filter" style="background-color: rgb(247, 252, 247);"></div>
                                                </div>
                                            </div>
                                            
                                            </form>
                                            <div id="riepilogoListPanel" style="display: block;">

<div id="movimentiListResult">
    <div id="evtDispatcher"></div>
    
    <div id="mainPanleinputIntestatario">
    <form action="#" id="insert_form">
    <div class="vnt-long-detail" style="border: 0px; background-color: rgba(0, 0, 0, 0);">
        <div class="vnt-subdata-title old-sectionTitle" style="border: 0px; background-color: rgba(0, 0, 0, 0); color: rgb(0, 0, 0); padding-left: 0px;"><h3 class="new-titleSection">Nuovo nominativo</h3></div>
        <div class="vnt-subdata">
            <table class="vnt-subdata hori-col vnt-table-padded">
                <thead>
                    <tr class="youBizDarkGreenBackground">
                        <th style="width: 20%; background-color: rgb(167, 206, 167);" class="center">Codice Fiscale:</th>
                        <th style="width: 20%; background-color: rgb(167, 206, 167);" class="center">Cognome:</th>
                        <th style="width: 20%; background-color: rgb(167, 206, 167);" class="center">Nome:</th>
                        <th style="width: 13%; background-color: rgb(167, 206, 167);" class="center">Tipo Carta:</th>
                        <th style="width: 13%; background-color: rgb(167, 206, 167);" class="center">Funzione Iniziale:</th>
                        <th style="width: 13%; background-color: rgb(167, 206, 167);" class="center">Centro di costo:</th>
                        <th style="width: 1%; background-color: rgb(167, 206, 167);" class="center">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="youBizGreenBackground">
                        <td class="center" style="background-color: rgb(247, 252, 247);"><input type="text" id="fieldCodiceFiscale" name="Nominativo.CodiceFiscale" style="text-align: left; width:100%;"></td>
                        <td class="center" style="background-color: rgb(247, 252, 247);"><input type="text" id="fieldCognome" name="Nominativo.Cognome" style="text-align: left;width:100%"></td>
                        <td class="center" style="background-color: rgb(247, 252, 247);"><input type="text" id="fieldNome" name="Nominativo.Nome" style="text-align: left;width:100%"></td>
                        <td class="center" style="background-color: rgb(247, 252, 247);"><select style="width:100%" id="selTipo" name="Nominativo.TipoCarta"><option value="1">Prepagata</option></select></td>
                        <td class="center" style="background-color: rgb(247, 252, 247);"><select style="width:100%" id="SelTipoAddebito" name="Nominativo.TipoAddebito"><option value="1">Prepagata</option></select></td>
                        <td class="center" style="background-color: rgb(247, 252, 247);"><select style="width:100%" class="" id="selCentroDiCosto" name="Nominativo.CentroDiCosto"><option value="">Selezionare centro di costo ...</option><option value="CC001">CC001 - CENTRO DI COSTO 1</option><option value="CC002">CC002 - CENTRO DI COSTO 2</option><option value="CC003">CC003 - CENTRO DI COSTO 3</option><option value="CC004">CC004 - CENTRO DI COSTO 4</option><option value="CC005">CC005 - CENTRO DI COSTO 5</option><option value="CC006">CC006 - CENTRO DI COSTO 6</option><option value="CC007">CC007 - CENTRO DI COSTO 7</option><option value="CC008">CC008 - CENTRO DI COSTO 8</option><option value="CC009">CC009 - CENTRO DI COSTO 9</option></select></td>
                        <td class="center" style="background-color: rgb(247, 252, 247);"><input data-action="Submit" type="button" class="bottom" id="btnAddNominativo" value="Inserisci" style="height: 22px; background-color: rgb(126, 168, 137);"></td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
</form>
</div>

    <table id="Table1" class="vnt-result-tbl old-table" style="">
    <thead>
      <tr>
       <th>&nbsp;</th>
       <th data-value="0"><span>Data Richiesta</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc selected"></i></th>
       <th data-value="1"><span>Codice Fiscale</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
       <th data-value="2"><span>Cognome</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
       <th data-value="3"><span>Nome</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
       <th data-value="4"><span>Tipo Carta</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
       <th data-value="5"><span>Funzione</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
       <th data-value="6"><span>Centro di costo</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
       <th data-value="7"><span>Stato Carta</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
     </tr>
    </thead>
    
   <tfoot>
     <tr>
      <td colspan="9">
       <table class="paer old-pager" style="width: 100%">
      <tbody>
       <tr>
        <td style="width: 50%; font-size: 13px; font-weight: bold" id="Td1">Totale: 3</td>
        <td style="width: 10%" nowrap="" align="right">
         <table>
          <tbody>
           <tr>
            <td><i class="vnt-icon vnt-icon-pager-first vnt-hidden" title="Prima pagina"></i></td>
            <td><i class="vnt-icon vnt-icon-pager-prev vnt-hidden" title="Pagina precente"></i></td>
            <td><input id="movimentiListResult_PaginaRichiesta" maxlength="4" align="right" value="1" size="4" type="text">&nbsp;/&nbsp;1</td>
            <td>&nbsp;<a id="vaiA" title="Vai" href="#">Vai</a>&nbsp;</td>
            <td><i class="vnt-icon vnt-icon-pager-next vnt-hidden" title="Pagina successiva"></i></td>
            <td><i class="vnt-icon vnt-icon-pager-last vnt-hidden" title="Ultima pagina"></i></td>
           </tr>
          </tbody>
         </table>
        </td>
       </tr>
      </tbody>
     </table>
      </td>
     </tr>
    </tfoot>
    
    <tbody>
    
    
    <tr class="even">
         <td class="center">
             
                <i id="deleteRow" class="vnt-icon vnt-icon-delete" role="captureidDeleteRow" data-card="{&quot;CodiceAzienda&quot;:&quot;500000119&quot;,&quot;Posizione&quot;:&quot;050342482000001062220&quot;,&quot;IdCarta&quot;:null,&quot;Abi&quot;:null}" data-action="483830">&nbsp;</i>
             
         </td>
         <td class="center">10/10/2019</td>
         <td class="center">RSSMRA80A01F205X</td>
         <td class="left">ROSSI                         </td>
         <td class="left">MARIO                         </td>
         <td class="center">Prepagata</td>
         <td class="center">Prepagata</td>
         <td class="center">CC001</td>
         <td class="center">Richiesta</td>
    </tr>

         
    <tr class="odd">
         <td class="center">
             
                <i id="deleteRow" class="vnt-icon vnt-icon-delete" role="captureidDeleteRow" data-card="{&quot;CodiceAzienda&quot;:&quot;500000119&quot;,&quot;Posizione&quot;:&quot;050342482000001062220&quot;,&quot;IdCarta&quot;:null,&quot;Abi&quot;:null}" data-action="483831">&nbsp;</i>
             
         </td>
         <td class="center">10/10/2019</td>
         <td class="center">LDGHTH80A01F205P</td>
         <td class="left">LEDGER                        </td>
         <td class="left">HEATH                         </td>
         <td class="center">Prepagata</td>
         <td class="center">Prepagata</td>
         <td class="center">CC005</td>
         <td class="center">Richiesta</td>
    </tr>

         
    <tr class="even">
         <td class="center">
             
                <i id="deleteRow" class="vnt-icon vnt-icon-delete" role="captureidDeleteRow" data-card="{&quot;CodiceAzienda&quot;:&quot;500000119&quot;,&quot;Posizione&quot;:&quot;050342482000001062220&quot;,&quot;IdCarta&quot;:null,&quot;Abi&quot;:null}" data-action="483840">&nbsp;</i>
             
         </td>
         <td class="center">10/10/2019</td>
         <td class="center">VRDMRA80A01L781G</td>
         <td class="left">VERDI                         </td>
         <td class="left">MARIA                         </td>
         <td class="center">Prepagata</td>
         <td class="center">Prepagata</td>
         <td class="center">CC005</td>
         <td class="center">Richiesta</td>
    </tr>

         
    </tbody>
    </table>
    
</div>



    
</div>
                                        </div>
                                        <div id="cartaPanel" class="row" style="display: none;">
                                            <div id="cartaPanelContent" class="row">
                                            </div>
                                            <div id="cartaPanelFunction" class="row">
                                            </div>
                                        </div>
                                    </div>
                                    </div><div class="new-buttons"><input style="margin: 0 auto;" id="btnVisualizza" type="button" class="btn1" value="Visualizza"></div></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>




    <script type="text/javascript">
        $(function () {
            $(".section").css("margin-top", "0");
            $(".section").css("padding-bottom", "0");
            $(".vnt-filter").css('background-color', '#f7fcf7');
            $("#youBizWhiteBackground.vnt-filter").css('background-color', 'white');

            $(".popup-dialog .ui-widget-header").css("background-color", "#357745");
        });
    </script>
<div class="ui-dialog ui-widget ui-widget-content ui-corner-all communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-id-1" style="outline: 0px; z-index: 1002; height: auto; width: auto; top: 137px; left: 433.5px; display: none;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="connectionPanel" style="width: auto; height: 143px; display: block; opacity: 0; min-height: 0px;" class="ui-dialog-content ui-widget-content" scrolltop="0" scrollleft="0">
                                            <img src="/TMIBBWEBServizi/Common/Client/Contents/style/site/site.1.0.0/images/attesa.gif" style="margin: auto;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all popup-dialog ui-draggable ui-dialog-buttons" tabindex="-1" role="dialog" aria-labelledby="ui-id-2" style="outline: 0px; z-index: 1004; height: auto; width: auto; top: 243px; left: 547px; display: block;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" style="background-color: rgb(53, 119, 69);"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="pop" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 46px; height: auto;" scrolltop="0" scrollleft="0"><br>Campo Codice Fiscale obbligatorio</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" style="background-color: #357745;">Ok</button></div></div></div><div class="ui-widget-overlay" style="width: 1311px; height: 556px; z-index: 1003; opacity: 0.1;"></div>