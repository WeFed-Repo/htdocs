        <div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div>
        
        <table style="width: 100%; height: 100%">
 <tbody>
  <tr>
   <td valign="top">
<table style="width: 100%; height: 100%" cellpadding="0" cellspacing="0">
 <tbody cellpadding="0" cellspacing="0">
  <tr cellpadding="0" cellspacing="0">
   <td valign="top" cellpadding="0" cellspacing="0">
    <div class="container" cellpadding="0" cellspacing="0"><div class="container" cellpadding="0" cellspacing="0"><div class="old-pageContent new-riquadro" cellpadding="0" cellspacing="0">
    <div style="width:100%;margin:auto;padding-top:10px;" id="riepilogoMainPanel" cellpadding="0" cellspacing="0">
     
     
     <div id="defaultPinPad"></div>
    <iframe name="downloadFrame" style="visibility: hidden; display: none; width: 0px; height: 0px;"></iframe>
    <form name="downloadFrameForm" id="downloadFrameForm" action="#" method="POST" target="downloadFrame">
     <input type="hidden" id="data" name="data" value="">
     <input type="hidden" id="format" name="format" value="">
    </form>
        
    
        <div class="titoloTabella old-pageTitle page-title"><div class="new-flag"></div><h1>Configurazione</h1></div>
    

     <div id="riepilogoPanel" cellpadding="0" cellspacing="0">
        <form action="#" id="input_form" name="input_form">
         <input type="hidden" name="PagingInfo.SortColumn" id="SortColumnIndex" value="0">
         <input type="hidden" name="PagingInfo.SortAscending" id="SortOrder" value="true">
         <input type="hidden" name="PagingInfo.Index" id="ItemIndex" value="10">
            <div id="riepilogoFilterPanel" style="display: none;">
             
                <!-- from function -->

<div class="panel-group vnt-filter" id="accordion" style="background-color: #f7fcf7 !important">
 <div class="panel vnt-filter" id="youBizWhiteBackground" style="background-color: rgb(255, 255, 255);">
  
 
  <div class="section" style="padding-bottom: 0px; margin-top: 0px;">
   <table class="testoBlackSmall" style="width: 70%; border-spacing: 2px; border-collapse: separate;">
       <thead>
         <tr>
            <th style="width: 15%;"></th>
            <th style="width: 100px;"></th>
            <th style="width: 1px;"></th>
            <th style="width: 15%;"></th>
            <th style="width: 100px;"></th>
            
         </tr>
        </thead>
        <tbody>
            <tr>
                <td nowrap=""><span class="testoRedSmallBold">*</span>&nbsp;Rag. Soc./Intestatario:</td>
                <td><select style="width: 285px" class="new-form-control" id="selAzienda" name="Piazzatura.IdAzienda"><option value="-1">seleziona...</option><option value="10">GE.CO.VE. SRL</option><option value="9">GESCO S.R.L.</option><option value="633660">PIEVE S.R.L.</option><option value="693088">PIEVE S.R.L.</option><option value="514369">SAN FERMO 12 S.R.L.</option><option value="13">SAR.MAR. SPA</option></select></td>
                <td>&nbsp;</td>
                <td style="text-align: right">Sia:</td>
                <td><input style="width: 80px" size="11" maxlength="10" type="text" id="codSia" name="codSia" class="new-form-control"><input type="hidden" id="selPagingItemsPerPage" name="PagingInfo.Count" value="10"></td>                
            </tr>
        </tbody>
   </table>

  </div>
  <br style="visibility: hidden; display: none;">
  <div style="background-image: url(&quot;/resources/05034/it-IT/TMIBBWEBServizi/img/riga-filtro.gif&quot;); height: 2px; visibility: hidden; display: none;"></div>    
  <br style="visibility: hidden; display: none;">
 </div>
    
    <div style="background-color:white;height:8px"></div>
   
 <div class="panel vnt-filter section" style="text-align: center; padding-bottom: 0px; margin-top: 0px; background-color: rgb(247, 252, 247);">
     <table style="width: 85%;">
         <tbody><tr>
             <td style="text-align: left"><span class="testoRedSmallBold">&nbsp;&nbsp;*	campi obbligatori</span></td>
             <td style="text-align: center" class="old-buttons">
                 <div class="button-set" style="float:none;text-align:left">
                    
                </div>
                <div style="clear: both"></div>
             </td>
         </tr>
     </tbody></table>
 </div>

  <span class="testoRedSmallBold section" id="alertFiltriSet" style="padding-bottom: 0px; margin-top: 0px;"></span>
  <div class="vnt-filter section" style="padding-bottom: 0px; margin-top: 0px; background-color: rgb(247, 252, 247);"></div>
</div>
            </div>
            <div id="riepilogoSubFilterPanel" style="display: none;">
                <table class="testoBlackSmall" style=" border-spacing: 2px; border-collapse: separate;">
                    <tbody><tr>
                        <td class="txt_center">
                            <table class="testoBlackSmall" style="width: 25%; margin: auto; border-spacing: 2px; border-collapse: separate;">
                                <thead>
                                     <tr>
                                        <th style="width: 50%;"></th>
                                        <th style="width: 0px;"></th>
                                     </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: left"><span class="testoBlackSmallBold">Rag. Soc./Intestatario</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><select style="width: 300px;text-align: center" class="new-form-control" id="selAziendaFiltroLista" name="Piazzatura.IdAzienda"><option value="-1">seleziona...</option><option value="10">GE.CO.VE. SRL</option><option value="9">GESCO S.R.L.</option><option value="633660">PIEVE S.R.L.</option><option value="693088">PIEVE S.R.L.</option><option value="514369">SAN FERMO 12 S.R.L.</option><option value="13">SAR.MAR. SPA</option></select></td>
                                        <td style="text-align: left"><img class="old-fieldQuickFilter" id="imgSearch" src="/resources/YouBiz/images/i_quick-filter.png" title="" style="cursor: pointer" border="0" height="20" width="20" cursor="pointer"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody></table>
                <!--tabella originale-->
            </div>
            <input type="hidden" id="fieldPrintError" name="IdErr">
        </form>
        <div id="riepilogoListPanel" cellpadding="0" cellspacing="0" style="display: none;">

<div id="totalDiv">
    <div id="eventDispatcher"></div>

    <div id="gestioneEmailTestata" class="" style="border: 1px solid black">
        <div class="" id="accordion">
            <table class="testoBlackSmall" style="width: 100%; margin: auto; border-spacing: 2px; border-collapse: separate;">
                <tbody><tr>
                    <td class="testoBlackNormal" style="text-align:left">
      Da questa sezione è possibile attivare e configurare il servizio Documenti on line. Con l’attivazione di questo servizio la documentazione cartacea inerente i rapporti selezionati non verrà più prodotta e sarà disponibile solo in formato elettronico.<br><br>
      Se si desidera ricevere una E-mail di notifica ogni volta che viene reso disponibile un nuovo documento, specificare l'indirizzo E-mail del destinatario nell'apposita sezione sottostante.Il servizio di notifica può essere disattivato eliminando l'indirizzo E-mail. E' possibile inoltre modificare l'indirizzo E-mail valorizzato.
    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>
                        <table>
                            <tbody><tr>
                                <td class="testoBlackNormal" style="text-align:left"><b>Servizio di notifica:</b>&nbsp;NON ATTIVO&nbsp;&nbsp;</td>
                                <td class="left"><b></b>&nbsp;</td>            
                            </tr>
                        </tbody></table>
                    </td>
                    
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td class="pl_header_table">
                        <table style="width: 100%;">
                            <tbody><tr>
                                <td class="left">&nbsp;<b>Gestione indirizzo E-mail</b></td>
                                <td class="youbizAlignRight right" style="text-align: right;"><div data-toggle="collapse" class="vnt-icon vnt-icon-up-down collapsed " data-parent="#accordion" href="#collapseOne" id="riepilogoFilterToggler"></div></td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
                <tr>
                    <td class="testoBlackNormal" style="text-align:left">
                        <div id="collapseOne" class="collapse">
                            <div class="">
                                <table width="100%" border="0" class="testoBlackNormal" cellpadding="0" cellspacing="0">
                                    <tbody><tr>
                                        <td>
                                            <table class="testoBlackNormal" border="0">
                                                <tbody><tr>
                                                    <td><b>E-mail&nbsp;:</b>&nbsp;</td>
                                                    <td><input type="text" id="txtMail" name="" size="50" maxlength="100" class="new-form-control"></td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="txt_center">
                                            <table width="100%">
                                                <tbody><tr>
                                                    <td>
                                                        <div class="button-set" style="float:none;text-align:center">
                                                            <input id="btnSaveMail" type="button" class="btn1 small" value="Conferma">
                                                            <input id="btnDeleteMail" type="button" class="btn1 small" value="Elimina">
                                                        </div>
                                                        <div style="clear: both"></div>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </div>
                        </div>    
                    </td>
                </tr>
            </tbody></table>
        </div>
    </div>
    <br>
    <div id="righexpaginaPanel">
        <table class="testoBlackSmall" style="width: 100%; margin: auto; border-spacing: 2px; border-collapse: separate;">
        <thead>
                <tr>
                <th style="width: 90%;"></th>
                <th style="width: 10%;"></th>
                </tr>
        </thead>
        <tbody>                                    
            <tr>
                <td style="width: 300px;">
                    <span class="testoBlackSmallBold">Rapporti per pagina:</span>
                    &nbsp;<a id="linkRow10" class="testoRedSmallBold" style="cursor:pointer">10</a>
                    &nbsp;<a id="linkRow20" class="testoBlackSmallBold" style="cursor:pointer">20</a>
                    &nbsp;<a id="linkRow50" class="testoBlackSmallBold" style="cursor:pointer">50</a>
                    &nbsp;<a id="linkRow100" class="testoBlackSmallBold" style="cursor:pointer">100</a>
                    &nbsp;<a id="linkRow200" class="testoBlackSmallBold" style="cursor:pointer">200</a>
                </td>
                
                
                

            </tr>
        </tbody>
    </table>
    </div>
    
    <div id="rapportiListTestata" class="vnt-filter section" style="border: 1px solid black">
    <table border="0" width="100%" style="margin: auto; border-spacing: 2px; border-collapse: separate;">
            <tbody>
                <tr>
                    <td class="testoBlackSmallBold left" style="white-space: nowrap; width: 150px">Rag. Soc./Intestatario:</td>
                    <td class="testoBlackSmall" colspan="3" style="white-space: nowrap; width: 300px"><div id="lblRagSocTestata">GE.CO.VE. SRL</div></td>
                </tr>
                <tr>
                    <td class="testoBlackSmallBold left" style="white-space: nowrap; width: 100px">ABI - Banca:</td>
                    <td class="testoBlackSmall" style="white-space: nowrap; width: 500px"><div id="lblAbiBancaTestata">05034 - BANCO BPM</div></td>
                </tr>
            </tbody>
    </table>
</div>
    <br>
    <div id="rapportiListTitle" class="titoloTabella old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">&nbsp;Elenco Rapporti</h3></div>
    <div id="rapportiListResult">
    
    <table id="Table1" class="vnt-result-tbl old-table table" style="" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th data-value="0"><span>Rapporto</span><i class="vnt-icon vnt-icon-asc selected"></i><i class="vnt-icon vnt-icon-desc "></i></th>
                <th data-value="1"><span>Modalità Attuale di Pubblicazione</span><i class="vnt-icon vnt-icon-asc "></i><i class="vnt-icon vnt-icon-desc "></i></th>
                <th data-value="2"><a href="#" id="idLinkAbilita"><span style="color:#003365;text-decoration:underline">Abilita</span></a></th>
                <th data-value="3"><a href="#" id="idLinkDisabilita"><span style="color:#003365;text-decoration:underline">Disabilita</span></a></th>                    
            </tr>
        </thead>
        <tfoot>
            <tr>
            <td colspan="8">
            <table class="paer old-pager">
            <tbody>
            <tr>
            <td style="width: 50%; font-size: 13px; font-weight: bold" id="Td1">Totale: 18</td>
            <td style="width: 50%" nowrap="" class="right">
                <table>
                    <tbody>
                    <tr>
                    <td><i class="vnt-icon vnt-icon-pager-first " title="Prima pagina"></i></td>
                    <td><i class="vnt-icon vnt-icon-pager-prev " title="Pagina precente"></i></td>
                    <td style="font-weight: bold"><input id="movimentiListResult_PaginaRichiesta" maxlength="4" align="right" value="2" size="4" type="text" class="new-form-control">&nbsp;/&nbsp;2</td>
                    <td style="font-weight: bold">&nbsp;<a id="vaiA" title="Vai" href="#">Vai</a>&nbsp;</td>
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

     </tbody><tbody>
                                   
                        <tr class="even">
                            <td class="left">&nbsp;Mutui 2/000000059339 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="rlpqy8JJQloJuI0VeB7MSLCP78G1dEhJERpz1BMKYX7BNRU47X1bo0iGDPZK0qE3zhc0s9QA6xGljWirOE5dcW7ULIjlzjFDL6g669W3Y15r5NUTX54QV0QjLXrUIr1PwYGVPqoa7xmMZfPJ99DM6QwqnmHokoH7%2BRKU%2FG3dmkOkS9wkXI9tDxwe94GlaQ2GofVfrn9V%2F7iHsKRZdiFZH3P9ju1HDTe4scCmaCoZQQ0%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059339" data-descrrapporto="000000059339 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="odd">
                            <td class="left">&nbsp;Mutui 2/000000059340 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="7koTfzoMnyiyH2gjbqxsRx4hJ%2B3cX8cFpLeZ4q4WbfvB2uqEt%2FPcGq6p1394EIibRQ6cajxGYRdsVDovdtP0i2wHrvyvcNhRHUH5liVxb8aF1Mhv66Qs3WJi0WQIliKLjAJ5zcVL6m4XBfIKxRDZgD5SJcl%2FALMmxbtGztX4ccK%2BMu1a1kzi4OvhafPPVgoFlqiJ4vN9AfxJDZCJ5KZJsbY%2FcZyxil0Q7TpkKiiZ2uU%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059340" data-descrrapporto="000000059340 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="even">
                            <td class="left">&nbsp;Mutui 2/000000059341 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="tvAw95rjYg6IjJmJGiweFhWUPz9fTlt0bQeKe%2Fn1ux7rUN2fyBBTZYVvLGpqd8V8B20YjmY9b4h73BsEO2aR%2Feq6eUQpCss%2F2Qkc7rhz%2FeuMOmuvpSl2vKEPQj%2FNmLMn33dLFv3Nw42XAKWfBTBwKQVsQcfGPIWRs5v3UkT5jK%2B8EfYevl%2BnD%2B6tpiJMBkqe%2Fbpa%2FLai588i%2FIBqeRNAYRnK9uvqExIClv2eCJ1hGGA%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059341" data-descrrapporto="000000059341 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="odd">
                            <td class="left">&nbsp;Mutui 2/000000059342 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="cFGO1DFYZRYggbuh88ly86PB8o57EsT47qS31xIeouNzsgsHvRhwB62PBVIj5IlK2fc1g36sVO%2FafEfV70X5F%2FGNQ%2B276B0QECcIA2Na3K4XsVe0XreHkCotQZ%2FIqKVsfHch2nvTqheS%2BxSMGOqFSnYMURuqwGc4P1IejFRQX3PNeTwHhpA2yZdCIxYidZjhfrml6C0bdbhzFz0Lj6NmJXyCSZUABFbuE8rqQdIdNNs%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059342" data-descrrapporto="000000059342 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="even">
                            <td class="left">&nbsp;Mutui 2/000000059343 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="WsQTej3KpMGwxqTE1JjwanENJUzBJ3o4FoccLPIp%2FVdS8hTyK8NuA5q7KY3vGiBYwmVV2%2FKRVBTCqDv1YLsaZN3VkbDxGzxys6v0GfQkd77HA5OYsuh0%2Be0%2B9g30jUistpkp%2FtAO%2F6nsX28iT4rJsdI6%2Fk%2BZIOXbeShltIWoBzPtd7oMPdbKPbAW3fGrDNasKK2hqH9TKU5ZfVlZ1scGyJeBYDcKfE0fdOP3YrtFgxk%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059343" data-descrrapporto="000000059343 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="odd">
                            <td class="left">&nbsp;Mutui 2/000000059344 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="wqkvEV%2BYig9amtMNJ2kxjpheN6rxd2SBVpY65%2BDbSsAcXvXWsziVpeRjsH1WQh%2FkuCQWRcSf645YbACDQw9h4Vb9s8RmxeK5Z0Of8g3%2FdfGfj1rD4ssH3nqFMppJbORCQeo%2FhuXdSpN3VLoZuXdg5ZwCjKGga67gF7dkWiEg%2FyREzgbMUVV8Y2GiSF%2BblpXQqYYUlj86cTS4PA%2BzWSlpjHO5GkJVJv%2BG7eOctjXUWOs%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059344" data-descrrapporto="000000059344 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="even">
                            <td class="left">&nbsp;Conto corrente Italia 2/00036186 - CONTO UNICO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="sC0orUKjGkj7wf5nmhK5nBWJlsQcGLD8AlfMzyLzGmm1QalJdGSR13mBUNkDG2g6cb7Rf7FLlGvLvZHLYfcuu2WHwFkAhRE%2BsY4sF5DNvuB0XUhf9nsXo8yIdcArnbokOYiXDkBE%2BlOoejMnauKOZn1YHVn7mv0EqtJsbpIoys0rOk23nj21WmwuKstDDzjQKXVOihuI2O%2FJzJs66auYFMrpBNMZsAtOV%2FHlrevojSg%3D" data-intestazione="GE.CO.VE. SRL" data-codice="00036186" data-descrrapporto="00036186 CONTO UNICO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="odd">
                            <td class="left">&nbsp;Dossier Titoli 2/00561761 - DEP.VALORI IN AMMINISTR.<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="t0NvZhCiDYB%2BJfdEyojlhJJfrjZx9DBPJoCsKTzmd%2FLoEViQUXEGjxhyX%2FXtQs1rbbTI8DVXlz4cfX9yaY63CHGMX%2FR4QCeMQzOcksPd4pM9Lt9YIiR3sAZGsvOsyww1rWRG3dimyesR1IIZsbpnYy85ds5i0VA9NDMsd%2BPGHPaXUzsK6KsExll3NMLLxaP%2F73MkExHZU7KfLgjIPj3B1p%2BksHf5u1dsXX%2B5IVXQIes%3D" data-intestazione="GE.CO.VE. SRL" data-codice="00561761" data-descrrapporto="00561761 DEP.VALORI IN AMMINISTR." data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                            

                                    </tbody>

                                    </table>
    <div class="button-set old-buttons" style="float:none;text-align:center">
                                        
                                    </div>
    <div style="clear: both"></div>
</div>

</div>

</div>
        <div id="adesioneListPanel">
<div id="totalDiv">
    
    <div id="gestioneAdesioneOnLineTestata" class="">
        <div id="eventDispatcher"></div>    
        <div class="old-pageTitle page-title"><div class="new-flag"></div><h1>Elenco rapporti da abilitare al servizio Documenti On Line </h1></div>
        <br>
        <div id="rapportiListResult">
            <table id="Table1" class="vnt-result-tbl" style="">
                <thead>
                    <tr>
                        <th data-value="0"><span>Rag.Soc./Intestatario</span></th>
                        <th data-value="0"><span>Rapporto</span></th>
                        <th data-value="0"><span>Rapporto e Descrizione</span></th>
                    </tr>
                </thead>
                
                <tbody>
                
                           
                        <tr class="even">
                            <td class="center">GE.CO.VE. SRL</td>
                            <td class="center">000000059339</td>
                            <td class="left">000000059339 MUTUO CASA FONDIARIO VERONA AG. 1</td>
                        </tr>
                                       
                        <tr class="odd">
                            <td class="center">GE.CO.VE. SRL</td>
                            <td class="center">000000059340</td>
                            <td class="left">000000059340 MUTUO CASA FONDIARIO VERONA AG. 1</td>
                        </tr>
                            

                                    </tbody>
            </table>
        </div>
        <div class="button-set" style="float:none;text-align:left">
	        <span class="testoBlackSmall">Per poter completare l’operazione è necessario prendere visione delle norme contrattuali che regolano il servizio riportate nel pdf.</span>
        </div>
        <br>
        <div class="button-set" style="float:none;text-align:left">
            <table class="testoBlackSmall" style="width: 100%; margin: auto;">
                <thead>
                    <tr>
                        <th style="width: 0px;"></th>
                        <th style="width: 500px;"></th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr valign="middle">
                        <td style="text-align: right">
                            <a href="/resources/05034/it-IT/TMIBBWEBServizi/img/adesione_documenti_online.pdf" target="_blank" class="testoBlackSmall">
                                <img src="/resources/05034/it-IT/TMIBBWEBServizi/img/icona_pdf.gif" border="0" style="cursor: pointer" title="Apri contratto di Adesione">
                            </a>
                        </td>
                        <td style="text-align: left" valign="bottom">
                            <a href="/resources/05034/it-IT/TMIBBWEBServizi/img/adesione_documenti_online.pdf" target="_blank" class="testoBlackSmall">
                                Norme di adesione al servizio Documenti on line
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <div class="button-set" style="float:none;text-align:left">
            <span class="testoRedSmallBold">*</span>&nbsp;<input type="checkbox" id="chkAdesione">
            <span class="testoBlackSmall">Dichiaro di aver preso visione delle norme contrattuali e di accettarne i termini.</span>
        </div>
        <br>
        <div class="button-set" style="float:none;text-align:left">
            <table class="testoBlackSmall" style="width: 100%; margin: auto;">
                <thead>
                    <tr>
                        <th style="width: 20px;"></th>
                        <th style="width: 500px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="testoRedSmallBold">&nbsp;&nbsp;*campi obbligatori</span></td>
                        <td>
                            <div class="button-set old-buttons" style="float:none;text-align:center">
                                
                                
                            </div>
                            <div style="clear: both"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
      </div>
 
     <div id="cartaPanel" class="row">
      <div id="cartaPanelContent" class="row"></div>
      <div id="cartaPanelFunction" class="row"></div>
     </div>

    </div>
    </div><div class="new-buttons"><input id="cmdAnnulla" type="button" class="btn1" value="Annulla" style="display: inline-block;"><input id="cmdConferma" type="button" class="btn1" value="Conferma" style="display: inline-block;"></div></div><div class="new-buttons"><input id="btnConfirm" type="button" class="btn1" value="Conferma" style="visibility: hidden; display: none;"></div><div class="new-buttons"><input id="btnVisualizza" type="button" class="btn1" value="Visualizza" style="visibility: hidden; display: none;"></div></div>
   </td>
  </tr>
 </tbody>
</table>
    </td>
 </tr>
    <tr>
			<td valign="bottom">
				<div class="divFooter">
		            <div class="row footer">
			            <div class="container">
				            <div class="col-xs-4">
					            <div class="assistenza clearfix">
						            <h4>Assistenza Clienti</h4>
						            <div class="clearfix">
							            <a class="ico-assistenza" href="#">&nbsp;</a>
							            <div>
								            Numero verde:&nbsp;<strong>800.607.227</strong><br>
								            Dall'estero:&nbsp;<strong>+39 02.43371097</strong>
							            </div>
						            </div>
						            <div class="clearfix">
							            <a class="ico-gestore" href="#">&nbsp;</a>
							            <div>Per qualsiasi altra esigenza è a tua disposizione<br>
							            il <strong>Gestore</strong> presso la tua filiale di riferimento</div>
						            </div>
					            </div>
				            </div>
				            <div class="col-xs-4">					            
				            </div>
				            <div class="col-xs-4">
					            <div class="footer-logo"> <span>Banco Popolare</span> </div>
				            </div>
				            <div class="col-xs-12 margin-top10 txt_center disclaimer">
					            © 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright
				            </div>
			            </div>
		            </div>
	            </div>
			</td>
		</tr>

 </tbody>
</table>

    
  


    <script type="text/javascript">
        $(function () {
            $(".section").css('padding-bottom', '0');
            $(".section").css('margin-top', '0');
            $(".vnt-filter").css('background-color', '#f7fcf7');
            $("#youBizWhiteBackground.vnt-filter").css('background-color', 'white');
            $("input.btn.small").css('margin-bottom', 0);
        });
    </script>


  <form name="frmGoInArrivo" id="frmGoInArrivo" action="" method="post">
      <input type="hidden" name="idRapporto" value="">
      <input type="hidden" name="idAzienda" value="">
      <input type="hidden" name="dataDA" value="">
      <input type="hidden" name="dataDA" value="">
      <input type="hidden" name="KeyForDocument" value="">
  </form>

<div class="ui-dialog ui-widget ui-widget-content ui-corner-all communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-id-1" style="outline: 0px; z-index: 1002; height: auto; width: auto; top: 1042px; left: 425px; display: none;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="connectionPanel" style="width: auto; height: 143px; display: block; opacity: 0; min-height: 0px;" class="ui-dialog-content ui-widget-content" scrolltop="0" scrollleft="0"><img src="/TMIBBWEBServizi/Common/Client/Contents/style/site/site.1.0.0/images/attesa.gif" style="margin: auto;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all popup-dialog ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-id-2" style="display: none; outline: 0px; z-index: 1000;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="pop" class="ui-dialog-content ui-widget-content"></div></div>