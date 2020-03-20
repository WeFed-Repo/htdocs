<!DOCTYPE html>
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head></head>
<body>        
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
    <div class="container" cellpadding="0" cellspacing="0"><div class="old-pageContent new-riquadro" cellpadding="0" cellspacing="0">
    <div style="width:100%;margin:auto;padding-top:10px;" id="riepilogoMainPanel" cellpadding="0" cellspacing="0">
     
     
     <div id="defaultPinPad"></div>
    <iframe name="downloadFrame" style="visibility: hidden; display: none; width: 0px; height: 0px;"></iframe>
    <form name="downloadFrameForm" id="downloadFrameForm" action="#" method="POST" target="downloadFrame">
     <input type="hidden" id="data" name="data" value="">
     <input type="hidden" id="format" name="format" value="">
    </form>
        
    
        <div class="titoloTabella old-pageTitle page-title"><div class="new-flag"></div><h1>Configurazione<a class="old-fieldHelp  old-pageHelp" href="#" onclick="goTMHelp('ListaRapporti.aspx','0','14')"><img src="/resources/YouBiz/images/i_help.png" class="imgSrv" alt="Help On Line" border="0" height="20" width="20"></a></h1></div>
    

     <div id="riepilogoPanel" cellpadding="0" cellspacing="0">
        <form action="#" id="input_form" name="input_form">
         <input type="hidden" name="PagingInfo.SortColumn" id="SortColumnIndex" value="0">
         <input type="hidden" name="PagingInfo.SortAscending" id="SortOrder" value="true">
         <input type="hidden" name="PagingInfo.Index" id="ItemIndex" value="0">
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
            <div id="riepilogoSubFilterPanel" style="display: block;">
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
        <div id="riepilogoListPanel" cellpadding="0" cellspacing="0">

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
                    <td><i class="vnt-icon vnt-icon-pager-first vnt-hidden" title="Prima pagina"></i></td>
                    <td><i class="vnt-icon vnt-icon-pager-prev vnt-hidden" title="Pagina precente"></i></td>
                    <td style="font-weight: bold"><input id="movimentiListResult_PaginaRichiesta" maxlength="4" align="right" value="1" size="4" type="text" class="new-form-control">&nbsp;/&nbsp;2</td>
                    <td style="font-weight: bold">&nbsp;<a id="vaiA" title="Vai" href="#">Vai</a>&nbsp;</td>
                    <td><i class="vnt-icon vnt-icon-pager-next " title="Pagina successiva"></i></td>
                    <td><i class="vnt-icon vnt-icon-pager-last " title="Ultima pagina"></i></td>
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
                            <td class="left">&nbsp;Mutui 2/000000059329 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="OQAFo%2Fp%2FZ2lmKUeqm9WfXzH8jZu3CydYad35Ny7V2Zip0hsJLTfUzLvOTuswxzMk5Paegczg2E2uqChpesTG9yXyKC%2FDD%2Bjx6U2JPO1suQX358htW16q6FFury3wj81ro94v773glmyx%2BA2jxnrcVaN0Op2gzyYXIcAFRy4NvMoJ2AwC03CeNhHk5FkaEHsEvd1D%2BrC86wZCywG%2B%2BwSgyP4vjjdkn7Lh%2BR6ZO%2BNAPxM%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059329" data-descrrapporto="000000059329 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="odd">
                            <td class="left">&nbsp;Mutui 2/000000059330 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="75p0LFdDV32G%2BVKIRsRyEb0xVNQQhbMBk81ARl29UZaVtFt74UZ1Rcc3AvELY%2FBW0%2BEzTXVJuCeQdKP8YzQ677RmDfeBG47dxvImtGMjY7dKRGxzLicQbeSwpAylu%2BQmjF%2BKP05G0ZKFempCRdfyg1B84KsGD8JpdIkaAofxJLuRet4Sg2L2NDhpqB8lntCpQB0ZOW1%2FooEbUqxdSD6VvRcyCWfS5Bd5ZwF4N6PPMXc%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059330" data-descrrapporto="000000059330 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="even">
                            <td class="left">&nbsp;Mutui 2/000000059331 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="0T%2BJJzhY69ScAmrc9w8WQHVvhD8YGwXxYrsUp1H0Ve6jHwgXBMBPWfgwYSqSQe2%2Fiu88gSfDfEH9uRfu1GmUZ%2BNMDp9xqCD7ZSn%2Bh1qHbMcJXf6i%2F3THTKbirqrMGEMuRh%2BMpEiv%2FDtSeWu1dfd8qAzawu%2FtxABEOSirHxYb1l0d657hOck9aYcI5QW4o1XXGR97DU4ByOr95D2L1EbBiQ8lWIMsT14xo3YAk9fROYs%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059331" data-descrrapporto="000000059331 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="odd">
                            <td class="left">&nbsp;Mutui 2/000000059332 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="dMh9P6lOA9snUIKhvlxziMsU%2BmqhvY%2BQckBmTsxB92pknZDlIYAC1l81uNvzpBAgaaIQtAKZ2%2F35BO1TeB8khzaVQw8oWKJp%2BFvuGIa%2BVc%2F3Vb5PBpO2l0V7GsPy9Faad7%2B0GJiG62ULL7WX8EgiwiiCkBQmPxpuseQBps3Xy%2FqlFmwYXmldUk3%2B7wKgokdqGTDIsaF8Y%2Ft6dsaX7SoJqBdJQHMhmqkRE1dZEQERFOQ%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059332" data-descrrapporto="000000059332 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="even">
                            <td class="left">&nbsp;Mutui 2/000000059333 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="dMq7iOUUeIEBXZty%2BYKBTGAeyCybL7qbPoYsyuiCtB1sFiYn9vitHJqn96x07oe%2BTzD4SWHhFoc6%2Fh%2FFENXl7sg2%2FznPFHhYY%2FVZRe7V2b5eC3Fa%2BSX3yFVgylAnNdkuAW%2B6bA0Ra51p%2FhoUSO4ayqUcYlCCUmN005bCfaDq8dfv8%2BXqibiTBAhjnFTexZ4QBBKyPRzxzG3FkH5zZ4mJnUnuzevR4NHoQYjwbU3HXzE%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059333" data-descrrapporto="000000059333 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="odd">
                            <td class="left">&nbsp;Mutui 2/000000059334 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="XpVu60NsDM%2BVuWrWejC3nrY12mKOYQvmcSILYAKmd13gc5gIqb5czujZxDAm92ZFLv2ko2d9o1lep%2BmCaF%2BJ5MXThyzzwUbEz6YDML%2FwXxpRavVbF876yp1maMVoqhSReX%2BLSHqlSsi8uJ6Qr%2FAfvevG0yKVmPLKZSzZFuIbYpt0MFOocaz1fEM%2FV0RIQcpH%2B%2BZ0t9pTlSP6Z0GTZSDu3P8gN7fLBJLuj7d9P%2BXzgzQ%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059334" data-descrrapporto="000000059334 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="even">
                            <td class="left">&nbsp;Mutui 2/000000059335 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="Iu7Crmh9zxWrGfu4%2BHS9qEw%2FKaQKeE%2Bxr0Bzy1TQULLmyw1%2FqsDqbi2ns4AJsf%2B5Z0mSzjTdLv2qSvXFXPADKefvl5rvyB956CcneLptg46hu4C1yCkdepDdP7sgSoAF2Wg49EmngkLwtl4SHVV78eEuEZ4uj%2FJZlPnA%2BJG7FHGp%2F36mW2nKxsssrRAdCJ8SFeJ2aS38799tfZcxh%2Bzd02yWLkRLSZU%2BhOHcRj6MBrM%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059335" data-descrrapporto="000000059335 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="odd">
                            <td class="left">&nbsp;Mutui 2/000000059336 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="dM2JAiIYKtILeVHc4DSKfucDfixGzUdOMOiMY3QnQJ2Y8UZ0%2FjfVOcTevTiq44L%2BBbhyJXpIfz9ZD4zEgeLh1%2BXO6CoZli1Ek0%2FFr2laMaGQ%2BiPvqbgzu0qs2J1kvJ30rSciKv6pSUyGoDNUs393vpGJLEwYnFQj8fbRfb4W%2B7V4i4qSMdIT5yBrB4NNsZKDdNyv%2Fo%2F3q3SNrxf6qp1e5TwLChaG%2BPAUQwpqVa9mbc8%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059336" data-descrrapporto="000000059336 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="even">
                            <td class="left">&nbsp;Mutui 2/000000059337 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="Vb17lGYP1hEOhmXxenwdVYFfPOIh2kvQ5xQqEcawRenP4Q1Xy5QsC8xT5JuHcLyDgTXXsleQNE9C8SR8bahSKGHOREJjzhyxetmWA4iPq%2BSleKjbYXrSspoE7J5hQ%2BXY8J66utiELMs0TLpQ2J%2BjbYM%2BwhwnQEGow7LkYsRROkspR3p1aU6iPLTeTexHD1XkaSDIeCj2AhEFjBqN7OzMAzcevnB2iTZlITYmfk3pwGU%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059337" data-descrrapporto="000000059337 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
                            <td class="center"></td>
                        </tr>
    
                                       
                        <tr class="odd">
                            <td class="left">&nbsp;Mutui 2/000000059338 - MUTUO CASA FONDIARIO<br>&nbsp;Filiale: VERONA AG. 1<br>&nbsp;Intestato a GE.CO.VE. SRL</td>
                            <td class="center"><span class="testoBlackSmallBold">Disponibile tramite posta ordinaria</span><br>Formato Cartaceo</td>
                            <td class="center"><input type="checkbox" name="" role="checked-actionAbilita" data-id="10" data-token="%2B1AXOdVVSBgDyxyDyZ3gzjUiG3%2BShmwrx%2BeHDrAfkXoWKn%2BCc69WQgPDK9MlV8V29xIoOBpxpsG2KdqXZaaFabnFd3bM%2FdwVrAaAxKIYMbz19n9YrqFstPXrBiJPC%2FhuRh4slpNF%2BEcCAPvdTsALGmVH09MRazT3WM7eHlWLPANx%2Fy2fugpKOf0MXpQDyIpf8vpeYHhv7T8yNbfnvuJvSzM9tZ4xw6uqOFohyKQe%2BwA%3D" data-intestazione="GE.CO.VE. SRL" data-codice="000000059338" data-descrrapporto="000000059338 MUTUO CASA FONDIARIO" data-descfiliale="VERONA AG. 1"></td>
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
        <div id="adesioneListPanel"></div>
      </div>
 
     <div id="cartaPanel" class="row">
      <div id="cartaPanelContent" class="row"></div>
      <div id="cartaPanelFunction" class="row"></div>
     </div>

    </div>
    </div><div class="new-buttons"><input id="btnConfirm" type="button" class="btn1" value="Conferma" style="display: inline-block;"></div><div class="new-buttons"><input id="btnVisualizza" type="button" class="btn1" value="Visualizza" style="visibility: hidden; display: none;"></div></div>
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

<div class="ui-dialog ui-widget ui-widget-content ui-corner-all communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-id-1" style="outline: 0px; z-index: 1002; height: auto; width: auto; top: 195px; left: 433.5px; display: none;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="connectionPanel" style="width: auto; height: 143px; display: block; opacity: 0; min-height: 0px;" class="ui-dialog-content ui-widget-content" scrolltop="0" scrollleft="0"><img src="/TMIBBWEBServizi/Common/Client/Contents/style/site/site.1.0.0/images/attesa.gif" style="margin: auto;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all popup-dialog ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-id-2" style="display: none; outline: 0px; z-index: 1000;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="pop" class="ui-dialog-content ui-widget-content"></div></div>
</body>
</html>