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
     
     
     <div id="defaultPinPad"></div>
    <iframe name="downloadFrame" style="visibility: hidden; display: none; width: 0px; height: 0px;"></iframe>
    <form name="downloadFrameForm" id="downloadFrameForm" action="#" method="POST" target="downloadFrame">
     <input type="hidden" id="data" name="data" value="">
     <input type="hidden" id="format" name="format" value="">
    </form>
        
    
        <div class="titoloTabella old-pageTitle page-title"><div class="new-flag"></div><h1>Configurazione</h1></div>
    

     <div id="riepilogoPanel">
        <form action="#" id="input_form" name="input_form">
         <input type="hidden" name="PagingInfo.SortColumn" id="SortColumnIndex" value="0">
         <input type="hidden" name="PagingInfo.SortAscending" id="SortOrder" value="true">
         <input type="hidden" name="PagingInfo.Index" id="ItemIndex" value="0">
            <div id="riepilogoFilterPanel">
             
                <!-- from function -->

<div class="panel-group vnt-filter" id="accordion" style="background-color: rgb(247, 252, 247);">
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
        <div id="riepilogoListPanel"></div>
        <div id="adesioneListPanel"></div>
      </div>
 
     <div id="cartaPanel" class="row">
      <div id="cartaPanelContent" class="row"></div>
      <div id="cartaPanelFunction" class="row"></div>
     </div>

    </div>
    </div><div class="new-buttons"><input id="btnVisualizza" type="button" class="btn1" value="Visualizza" style="display: inline-block;"></div></div>
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