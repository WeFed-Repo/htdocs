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
                
                
        
                <iframe name="download" width="1px" height="1px" style="display: none"></iframe>
                <form name="frmDownload" id="frmDownload" action="#" method="POST" target="download">
                    <input type="hidden" name="arrToken" value="">
                    <input type="hidden" name="NameSaveDoc" value="">
                    <input type="hidden" name="DTRiferimento" value="">
                    <input type="hidden" name="TypeRep" value="">
                </form>
                
                
                    <div class="titoloTabella old-pageTitle page-title"><div class="new-flag"></div><h1>In Arrivo</h1></div>
                

                <div id="riepilogoPanel">
                    <form action="#" id="input_form" name="input_form">
                     <input type="hidden" name="PagingInfo.SortColumn" id="SortColumnIndex" value="">
                     <input type="hidden" name="PagingInfo.SortAscending" id="SortOrder" value="">
                     <input type="hidden" name="PagingInfo.Index" id="ItemIndex" value="">
         
                     <div id="riepilogoFilterPanel" style="display: block;">
                         <!-- from function -->
                        <div class="panel-group vnt-filter" id="accordion" style="background-color: rgb(247, 252, 247);">
                             <div class="panel vnt-filter" id="youBizWhiteBackground" style="background-color: rgb(255, 255, 255); overflow: visible;">
                              
     
                                    <div class="section" style="padding-bottom: 0px; margin-top: 0px;">
                                    <table class="testoBlackSmall" style="width: 70%; border-spacing: 2px; border-collapse: separate;">
                                <thead>
                                    <tr>
                                    <th style="width: 15%;"></th>
                                    <th style="width: 100px;"></th>
                                    <th style="width: 1px;"></th>
                                    <th style="width: 15%;"></th>
                                    <th style="width: 100px;"></th>
                                    <th style="width: 1px;"></th>
                                    <th style="width: 0%;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td nowrap=""><span class="testoRedSmallBold">*</span>&nbsp;Rag. Soc./Intestatario:&nbsp;</td>
                                        <td><select style="width: 285px" class="new-form-control" id="selAzienda" name="Piazzatura.IdAzienda"><option value="-1">seleziona...</option><option value="10">GE.CO.VE. SRL</option><option value="9">GESCO S.R.L.</option><option value="633660">PIEVE S.R.L.</option><option value="693088">PIEVE S.R.L.</option><option value="514369">SAN FERMO 12 S.R.L.</option><option value="13">SAR.MAR. SPA</option></select></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: right" nowrap="">Sia:&nbsp;&nbsp;&nbsp;<input style="width: 80px" size="11" maxlength="10" type="text" id="codSia" name="codSia" class="new-form-control"></td>
                                    </tr>
                                    <tr>
                                        <td nowrap="">Rapporto:</td>
                                        <td><select style="width: 285px" class="new-form-control" id="selRapporto" name="Piazzatura.CodiceRapporto"><option value="-1">Tutti</option></select></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Data dal:</td>
                                        <td colspan="2">
                                            <table>
                                                <tbody><tr>
                                                    <td>
                                                        <input style="width: 100%" size="11" maxlength="10" type="text" id="fieldDataFrom" name="" onkeypress="return onlyDate(event)" class="datepicker fieldDataFromYBW new-form-control hasDatepicker">
                                                        <input type="hidden" id="fieldDataFromHidden" name="dataDa">
                                                    </td>
                                                    <td>&nbsp;&nbsp;</td>
                                                    <td>
                                                        <a class="icon-replace icon-calendar active" onclick="$('.datepicker.fieldDataFromYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar fieldDataFromYBW" src="/resources/YouBiz/images/calendar.png" border="0" height="20" width="20" id="dp1569400849075"></a>
                                         
                                      
                                                        
                                                    </td>
                                                    <td style="width: 47px">&nbsp;</td>
                                                    <td style="text-align: right">&nbsp;al:&nbsp;&nbsp;</td>
                                                    <td>
                                                        <input style="width: 100%" size="11" maxlength="10" type="text" id="fieldDataTo" name="" onkeypress="return onlyDate(event)" class="datepicker fieldDataToYBW new-form-control hasDatepicker">
                                                        <input type="hidden" id="fieldDataToHidden" name="dataA">
                                                    </td>
                                                    <td>&nbsp;&nbsp;</td>
                                                    <td>
                                                        <a class="icon-replace icon-calendar active" onclick="$('.datepicker.fieldDataToYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar fieldDataToYBW" src="/resources/YouBiz/images/calendar.png" border="0" height="20" width="20" id="dp1569400849076"></a>
                                         
                                      
                                                        
                                                    </td> 
                                                </tr>
                                            </tbody></table>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: right">
                                            <div data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseOne" id="riepilogoFilterToggler">
	                                            <input type="button" class="btn1 small" id="cmdAvanzate" style="margin-right: 0px; margin-bottom: 0px;" value=">> Avanzate">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                                        <br style="visibility: hidden; display: none;">
                                        <div style="background-image: url(&quot;/resources/05034/it-IT/TMIBBWEBServizi/img/riga-filtro.gif&quot;); height: 2px; visibility: hidden; display: none;"></div>
                                        <br style="visibility: hidden; display: none;">
                                     </div>
                             <div style="background-color:white;height:8px"></div>
                             <div id="collapseOne" class="panel-collapse section collapse" style="padding-bottom: 0px; margin-top: 0px; height: 10px;">
                              <div class="panel vnt-filter section" style="padding-bottom: 0px; margin-top: 0px; background-color: rgb(247, 252, 247); overflow: visible;">
                               <table class="testoBlackSmall" style="width:100%; border-spacing: 2px; border-collapse: separate;">
                                <thead>
                                 <tr>
                                    <th style="width:13%;"></th>
                                    <th style="width: 300px;"></th>
                                    <th style="width: 0%;"></th>
                                    <th style="width: 20%;"></th>
                                    <th style="width: 10%;"></th>
                                    <th style="width: 10%;"></th>
                                 </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tipo documento:&nbsp;</td>
                                    <td><select style="width: 350px" id="selTipoDocumento" name="dummyTipoDocumento" class="new-form-control">
                                            <option selected="selected" value="">Tutti</option>  
                                            <option value="3">Contabili</option>  
                                            <option value="2">Documenti di Sintesi e Proposte di Modifiche Unilaterali</option>  
                                            <option value="1">Estratto Conto</option>
                                        </select> 
                                        <input type="hidden" id="hiddenTipoDocumento" name="TipoDocumento" value=""> 
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Stato :&nbsp;</td>
                                    <td><select style="width: 180px" id="selStatoDocumento" name="dummyStatoDocumento" class="new-form-control">
                                            <option selected="selected" value="">Tutti</option>  
                                            <option value="1">Letto</option>  
                                            <option value="0">NonLetto</option>  
                                        </select>
                                        <input type="hidden" id="hiddenStatoDocumento" name="StatoDocumento" value="">
                                        <input type="hidden" id="selPagingItemsPerPage" name="PagingInfo.Count" value="10">
                                        <input type="hidden" id="fieldDocumentArrayPdf" name="ActionDocumento.Array" value="">
                                        <input type="hidden" id="fieldDocumentArrayPdfB" name="ActionDocumento.ArrayB" value="">
                                        <input type="hidden" id="fieldDocActionPdf" name="ActionDocumento.Action" value="">
                                        <input type="hidden" id="fieldDocActionDescrizionePdf" name="ActionDocumento.Descrizione" value="">
                                        <input type="hidden" id="fieldDocActionDataRiferimentoPdf" name="ActionDocumento.DataRiferimento" value="">            
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                </tbody>
                               </table>

                              </div> 
                              <br style="visibility: hidden; display: none;">
                              <div style="background-image: url(&quot;/resources/05034/it-IT/TMIBBWEBServizi/img/riga-filtro.gif&quot;); height: 2px; visibility: hidden; display: none;"></div>
                              <br style="visibility: hidden; display: none;">
                             </div>
                             <div class="panel vnt-filter section" style="text-align: center; padding-bottom: 0px; margin-top: 0px; background-color: rgb(247, 252, 247); overflow: visible;">
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
                              <span class="testoRedSmallBold " id="alertFiltriSet"></span>
                              <div class="vnt-filter section" style="padding-bottom: 0px; margin-top: 0px; background-color: rgb(247, 252, 247);"></div>
                              </div>
                        </div>
                    </div>
                     <div id="riepilogoSubFilterPanel" style="visibility: hidden; display: none;">
                            <table class="testoBlackSmall" style="width: 55%;padding-right:200px; border-spacing: 2px; border-collapse: separate;">
                                <thead>
                                     <tr>
                                        <th style="width: 20px;"></th>
                                        <th style="width: 40px;"></th>
                                        <th style="width: 40px;"></th>
                                        <th style="width: 0px;"></th>
                                        <th style="width: 0px;"></th>
                                        <th style="width: 0px;"></th>
                                     </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td style="text-align: left"><span class="testoBlackSmallBold">Rag. Soc./Intestatario</span></td>
                                        <td style="text-align: left"><span class="testoBlackSmallBold">Rapporto</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><select style="width: 300px;text-align: left;" class="new-form-control" id="selAziendaFiltroLista" name="Piazzatura.IdAzienda"><option value="-1">seleziona...</option><option value="10">GE.CO.VE. SRL</option><option value="9">GESCO S.R.L.</option><option value="633660">PIEVE S.R.L.</option><option value="693088">PIEVE S.R.L.</option><option value="514369">SAN FERMO 12 S.R.L.</option><option value="13">SAR.MAR. SPA</option></select></td>
                                        <td><select style="width: 300px;text-align: left;" class="new-form-control" id="selRapportoFiltroLista" name="Piazzatura.CodiceRapporto"></select></td>
                                        <td><img id="imgSearch" class="old-fieldQuickFilter" src="/resources/YouBiz/images/i_quick-filter.png" title="" style="cursor: pointer" border="0" height="20" width="20"></td>
                                        <td><img id="imgGoFiltro" class="old-fieldFilter" src="/resources/YouBiz/images/i_filter.png" style="cursor: pointer" title="Filtri" border="0" height="20" width="20"></td>
                                        <td><img id="imgAzzeraFiltri" class="old-fieldRemoveFilter" src="/resources/YouBiz/images/i_remove-filter.png" style="cursor: pointer" title="Azzera Filtri" border="0" height="20" width="20"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                     <input type="hidden" id="fieldPrintError" name="IdErr" value="">
                    </form>
                    <div id="riepilogoListPanel"></div>
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