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
    <form name="downloadFrameForm" id="downloadFrameForm" action="partial/ListaCarteExport.aspx" method="POST" target="downloadFrame">
     <input type="hidden" id="data" name="data" value="{&quot;Piazzatura&quot;:{&quot;CodiceAzienda&quot;:&quot;500000119&quot;,&quot;Posizione&quot;:&quot;050342482000001062220&quot;}}">
     <input type="hidden" id="format" name="format" value="txt">
    </form>

     <div id="PannelloControlloPanel">
        <form action="#" id="input_form">
            <div id="riepilogoFilterPanel">
        
  <!-- from function -->
                
<div class="panel-group vnt-filter" id="accordion" style="background-color: rgb(247, 252, 247);">
 <div class="panel vnt-filter" id="youBizWhiteBackground" style="background-color: rgb(255, 255, 255);">
  <div class="old-pageTitle page-title"><div class="new-flag"></div><h1>Gestione Posizione
      </h1></div>
 
  <div class="section" style="margin-top: 0px; padding-bottom: 0px;">
   <table class="testoBlackSmall" style="width: 100%; margin: auto">
    <tbody>
     <tr>
      <td style="width:20%; padding-left: 5px;">Rag. Soc./Intestatario:&nbsp;</td>
      <td style="width:25%"><select style="width: 200px" class="new-form-control" id="selAzienda" name="CodiceAzienda"><option value="500000119">MARINUCCI YACHTING S.R.L.</option></select></td>
      <td style="width:20%; padding-left: 30px;">Posizione:&nbsp;</td>
      <td style="width:25%"><select style="width: 200px" class="new-form-control" id="selPosizione" name="Posizione"><option value="050342482000001062220">CARTA AZIENDALE                         </option></select></td>
      <td style="width:10%; text-align: right">&nbsp;</td>
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
        <div id="riepilogoListPanel">

<div id="panelConfigPosizione" class="">
    <div id="evtDispatcher"></div>

    

    
    
    <div class="button-set">
        Download elenco carte associate alla posizione:&nbsp;
        <i id="exportTxt" class="vnt-icon vnt-icon-export-Txt">&nbsp;</i>
        <i id="exportExcel1" class="vnt-icon vnt-icon-export-Excel">&nbsp;</i>
        <i id="exportExcel2" class="vnt-icon vnt-icon-export-Excel97">&nbsp;</i>
    </div>

    <div style="clear: both"></div>

    <div class="vnt-page-heading old-sectionTitle" style="border: 0px; margin-bottom: 0px; background-color: rgba(0, 0, 0, 0); padding-left: 0px;"><h3 class="new-titleSection">Posizione</h3></div>

    

<div class="vnt-long-detail" style="border: 0px; background-color: rgba(0, 0, 0, 0);">
    
    <div class="panel">
        
        
        <div class="vnt-subdata">
             <table class="vnt-subdata hori-col" style="background-color: rgba(0, 0, 0, 0);">
             <thead>
              <tr class="youBizDarkGreenBackground">
               <th style="background-color: rgb(167, 206, 167);">Posizione</th>
               <th style="background-color: rgb(167, 206, 167);">Tipologia</th>
               <th style="background-color: rgb(167, 206, 167);">Conto di appoggio</th>
               <th style="background-color: rgb(167, 206, 167);">Massimo mensile ricaricabile</th> 
              </tr>
             </thead> 
             <tbody>
              <tr class="youBizGreenBackground" style="background-color: rgb(247, 252, 247);">
               <td class="center" style="background-color: rgb(247, 252, 247);">CARTA AZIENDALE                                             </td>
               <td class="center" style="background-color: rgb(247, 252, 247);">Prepagata</td>
               <td class="center" style="background-color: rgb(247, 252, 247);">000000240768</td>
               <td class="center" style="background-color: rgb(247, 252, 247);">99.999.999,99&nbsp;EUR</td>
              </tr>
             </tbody> 
             </table>
       </div>
        

        
        
    </div>
    
<!-- dettaglio posizione inizio -->
<div class="panel">
    <div class="vnt-subdata-title old-sectionTitle" style="border: 0px; background-color: rgba(0, 0, 0, 0); padding-left: 0px;"><h3 class="new-titleSection">
   Dettaglio Posizione
</h3></div>

    <div class="vnt-subdata">
        
        
            <table class="vnt-subdata hori-col" style="background-color: rgba(0, 0, 0, 0);">
                 <thead>
              <tr class="youBizDarkGreenBackground">
               <th style="width: 380px; background-color: rgb(167, 206, 167);">Descrizione Posizione</th>
               <th style="background-color: rgb(167, 206, 167);">Carte in richiesta</th>
               <th style="background-color: rgb(167, 206, 167);">Carte in essere</th>
               <th style="background-color: rgb(167, 206, 167);">(di cui con) Funzione Debito attiva</th>
               <th style="background-color: rgb(167, 206, 167);">Saldo prepagato complessivo residente sulle carte</th>
               <th style="background-color: rgb(167, 206, 167);">Massimale mensile complessivo carte in modalità debito</th>
               <th style="background-color: rgb(167, 206, 167);">Massimale mensile residuo carte in modalità debito</th>
              </tr>
             </thead> 
                 <tbody>
              <tr class="youBizGreenBackground" style="background-color: rgb(247, 252, 247);">

               <td class="left" style="background-color: rgb(247, 252, 247);">&nbsp;
                 <a class="vnt-icon vnt-icon-edit" style="font-size: 15px;" data-type="posizionepopup" href="#"></a>&nbsp;CARTA AZIENDALE                                             &nbsp;
                
               </td>
               <td class="center" style="background-color: rgb(247, 252, 247);">3</td>
               <td class="center" style="background-color: rgb(247, 252, 247);">1</td>
               <td class="center" style="background-color: rgb(247, 252, 247);">0</td>
               
                    <td class="center" style="background-color: rgb(247, 252, 247);">13,57&nbsp;EUR</td>
                    <td class="center" style="background-color: rgb(247, 252, 247);">0,00&nbsp;EUR</td>
                    <td class="center" style="background-color: rgb(247, 252, 247);">0,00&nbsp;EUR</td>
               
              </tr>
             </tbody> 
             </table>        
        




</div>
</div>
<!-- dettaglio posizione fine -->    
    
<!-- dettaglio centro di costo inizio -->
<div class="panel">
    <div class="vnt-subdata-title old-sectionTitle" style="border: 0px; background-color: rgba(0, 0, 0, 0); padding-left: 0px;"><h3 class="new-titleSection">
   Centri di costo
</h3></div>

    <div class="vnt-subdata" style="margin-bottom:15px">
 <table class="vnt-subdata hori-col" id="youBizBorderSpacing" style="background-color: rgba(0, 0, 0, 0); border-spacing: 3px;">
 
 <tbody>
     
     
     <tr>
            <td class="left youBizGreenBackground" style="background-color: rgb(247, 252, 247);">
             &nbsp;<a class="vnt-icon vnt-icon-edit" style="font-size: 15px;" data-type="centrodicostopopup" href="#" data-id="CC001" data-val="CENTRO DI COSTO 1"></a>&nbsp;CC001&nbsp;-&nbsp;CENTRO DI COSTO 1&nbsp;
            </td>
     </tr>
     
     <tr>
            <td class="left youBizGreenBackground" style="background-color: rgb(247, 252, 247);">
             &nbsp;<a class="vnt-icon vnt-icon-edit" style="font-size: 15px;" data-type="centrodicostopopup" href="#" data-id="CC002" data-val="CENTRO DI COSTO 2"></a>&nbsp;CC002&nbsp;-&nbsp;CENTRO DI COSTO 2&nbsp;
            </td>
     </tr>
     
     <tr>
            <td class="left youBizGreenBackground" style="background-color: rgb(247, 252, 247);">
             &nbsp;<a class="vnt-icon vnt-icon-edit" style="font-size: 15px;" data-type="centrodicostopopup" href="#" data-id="CC003" data-val="CENTRO DI COSTO 3"></a>&nbsp;CC003&nbsp;-&nbsp;CENTRO DI COSTO 3&nbsp;
            </td>
     </tr>
     
     <tr>
            <td class="left youBizGreenBackground" style="background-color: rgb(247, 252, 247);">
             &nbsp;<a class="vnt-icon vnt-icon-edit" style="font-size: 15px;" data-type="centrodicostopopup" href="#" data-id="CC004" data-val="CENTRO DI COSTO 4"></a>&nbsp;CC004&nbsp;-&nbsp;CENTRO DI COSTO 4&nbsp;
            </td>
     </tr>
     
     <tr>
            <td class="left youBizGreenBackground" style="background-color: rgb(247, 252, 247);">
             &nbsp;<a class="vnt-icon vnt-icon-edit" style="font-size: 15px;" data-type="centrodicostopopup" href="#" data-id="CC005" data-val="CENTRO DI COSTO 5"></a>&nbsp;CC005&nbsp;-&nbsp;CENTRO DI COSTO 5&nbsp;
            </td>
     </tr>
     
     <tr>
            <td class="left youBizGreenBackground" style="background-color: rgb(247, 252, 247);">
             &nbsp;<a class="vnt-icon vnt-icon-edit" style="font-size: 15px;" data-type="centrodicostopopup" href="#" data-id="CC006" data-val="CENTRO DI COSTO 6"></a>&nbsp;CC006&nbsp;-&nbsp;CENTRO DI COSTO 6&nbsp;
            </td>
     </tr>
     
     <tr>
            <td class="left youBizGreenBackground" style="background-color: rgb(247, 252, 247);">
             &nbsp;<a class="vnt-icon vnt-icon-edit" style="font-size: 15px;" data-type="centrodicostopopup" href="#" data-id="CC007" data-val="CENTRO DI COSTO 7"></a>&nbsp;CC007&nbsp;-&nbsp;CENTRO DI COSTO 7&nbsp;
            </td>
     </tr>
     
     <tr>
            <td class="left youBizGreenBackground" style="background-color: rgb(247, 252, 247);">
             &nbsp;<a class="vnt-icon vnt-icon-edit" style="font-size: 15px;" data-type="centrodicostopopup" href="#" data-id="CC008" data-val="CENTRO DI COSTO 8"></a>&nbsp;CC008&nbsp;-&nbsp;CENTRO DI COSTO 8&nbsp;
            </td>
     </tr>
     
     <tr>
            <td class="left youBizGreenBackground" style="background-color: rgb(247, 252, 247);">
             &nbsp;<a class="vnt-icon vnt-icon-edit" style="font-size: 15px;" data-type="centrodicostopopup" href="#" data-id="CC009" data-val="CENTRO DI COSTO 9"></a>&nbsp;CC009&nbsp;-&nbsp;CENTRO DI COSTO 9&nbsp;
            </td>
     </tr>
     
  
 </tbody> 
 </table>

</div>
</div>
<!-- dettaglio centro di costo fine -->    
    
</div>
</div>




    
</div>
      </div>
 
     <div id="cartaPanel" class="row" style="display: none;">
      <div id="cartaPanelContent" class="row"></div>
      <div id="cartaPanelFunction" class="row"></div>
     </div>

    </div>
    </div><div class="new-buttons"><input style="margin: 0 auto;" id="btnVisualizza" type="button" class="btn1" value="Visualizza"></div></div>
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
            $(".section").css("margin-top", "0");
            $(".section").css("padding-bottom", "0");
            $(".vnt-filter").css('background-color', '#f7fcf7');
            $("#youBizWhiteBackground.vnt-filter").css('background-color', 'white');
        });
    </script>
<div class="ui-dialog ui-widget ui-widget-content ui-corner-all communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-id-1" style="outline: 0px; z-index: 1002; height: auto; width: auto; top: 190.5px; left: 433.5px; display: none;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="connectionPanel" style="width: auto; height: 143px; display: block; opacity: 0; min-height: 0px;" class="ui-dialog-content ui-widget-content" scrolltop="0" scrollleft="0">
         <img src="/TMIBBWEBServizi/Common/Client/Contents/style/site/site.1.0.0/images/attesa.gif" style="margin: auto;">
     </div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all popup-dialog ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-id-2" style="display: none; outline: 0px; z-index: 1000;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" style="background-color: rgb(53, 119, 69);"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="pop" class="ui-dialog-content ui-widget-content"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all popup-dialog ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-id-3" style="display: none; outline: 0px; z-index: 1000;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" style="background-color: rgb(53, 119, 69);"><span id="ui-id-3" class="ui-dialog-title">Info</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="popupCentroDiCosto" class="ui-dialog-content ui-widget-content">
         <form action="#" id="popupCentroDiCostoForm">
         <table class="vnt-subdata hori-col">
          <thead>
           <tr>
            <th style="width: 30%"></th>
            <th style="width: 70%"></th>
           </tr>
          </thead>
          <tbody>
              
           <tr>
            <td colspan="2"><br></td>
           </tr>
                
           <tr>
            <td class="right">Centro di costo:</td>
            <td class="left" style="padding-left: 5px"><span id="popupCentroDiCostoFormIdLabel"></span>&nbsp;-&nbsp;<span id="popupCentroDiCostoFormName"></span></td>
           </tr>
           <tr>
            <td colspan="2"><br></td>
           </tr>
           <tr>
            <td class="right" style="padding-left: 14px">Nuova descrizione:</td>
            <td class="left" style="padding-left: 5px">
             <input type="text" id="popupCentroDiCostoFormDescrizione" style="width: 90%" name="dSCCosto">
             <input type="hidden" id="popupCentroDiCostoFormId" name="cCosto" value="'+id+'" style="visibility: hidden">
            </td>
           </tr>
          </tbody>
         </table>
        </form>
  </div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all popup-dialog ui-draggable ui-dialog-buttons" tabindex="-1" role="dialog" aria-labelledby="ui-id-4" style="outline: 0px; z-index: 1004; height: auto; width: 500px; top: 150px; left: 405.5px; display: block;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" style="background-color: rgb(53, 119, 69);"><span id="ui-id-4" class="ui-dialog-title">Info</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="popupPosizione" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 46px; height: auto;" scrolltop="0" scrollleft="0">
        <form action="#" id="popupPosizioneForm">
         <table class="vnt-subdata hori-col">
          <thead>
           <tr>
            <th style="width: 180px"></th>
            <th style="width: 180px"></th>
           </tr>
          </thead>
          <tbody>
              
           <tr>
            <td colspan="2"><br></td>
           </tr>
            
           <tr>
            <td class="right">Posizione:&nbsp;</td>
            <td class="left">CARTA AZIENDALE                                             &nbsp;</td>
           </tr>
           <tr>
            <td colspan="2"><br></td>
           </tr>
           <tr>
            <td class="right">Nuova descrizione:&nbsp;</td>
            <td class="left"><input type="text" id="popupPosizioneFormDescrizione" style="width: 80%" name="PIntPosizione"></td>
           </tr>
          </tbody>
         </table>
        </form>
  </div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" style="background-color: #357745;">Annulla</button><button type="button" style="background-color: #357745;">Conferma</button></div></div></div><div class="ui-widget-overlay" style="width: 1311px; height: 986px; z-index: 1003; opacity: 0.1;"></div>