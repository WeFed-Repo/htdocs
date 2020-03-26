<div class="visible-print-block">
   <img src="/HT/fe/img/logo_bancobpm@2x.png" title="Torna all'homepage" alt="Torna all'homepage" />
   <div class="pull-right">
      01/03/2017  
   </div>
</div>
<!--[if gt IE 8]><!-->
<!--<![endif]-->
<div class="riquadro clearfix">
   <script type="text/javascript">
      $(document).ready(function(){
         $('.datepicker').datepicker({ minDate: '-1Y', buttonImage: '/HT/fe/img/calendar.png', maxDate: '+1Y' });
         $('table#CCMO').find('td').each(function(){
            if($(this).find('img').length > 0){
               var src = $(this).find('img').attr('src');
               if("/HT/fe/img/HBMVAAA.gif" == src){
                  $(this).find('img').wrap("<a href='javascript:apriAvviso()'></a>")
               }
            } 
         })
      });
      
      function apriAvviso() {
         $('#sgancio').dialog({
           buttons: [
          {
            text: "Chiudi",
            click: function() {
              $( this ).dialog( "close" );
            }
          }
        ],
        create:function () {
              $(this).closest(".ui-dialog")
                  .find(".ui-button:last")
                  .addClass("btn")
                  .addClass("btn-primary");
          },
          minWidth: 600, minHeight: 220, modal: true, resizable: false });
      }
      
      //metodo chiamato dal tabellatore!
      function MoveToPage(page) {
         var formMovimentiConto = document.getElementById("formMovimentiConto2");
         formMovimentiConto.pagina.value = page;
         formMovimentiConto.submit();
      }
      
      function movimentiContoSetupForm() {
         var formMovimentiConto = document.getElementById("formMovimentiConto2");      
         if (formMovimentiConto.tipoIntervallo[0].checked == true) {
            movimentiContoDisabilitaUltimiMovimenti();
         }
         if (formMovimentiConto.tipoIntervallo[1].checked == true) {
            movimentiContoDisabilitaPeriodo();
         }     
      }
      
      function movimentiContoDisabilitaUltimiMovimenti() {
         var formMovimentiConto = document.getElementById("formMovimentiConto2");   
         formMovimentiConto.dataInizio.disabled = false;
         formMovimentiConto.dataFine.disabled = false;   
         formMovimentiConto.ultimiMovimenti.disabled = true;
      }
      
      function movimentiContoDisabilitaPeriodo() {
         var formMovimentiConto = document.getElementById("formMovimentiConto2");   
         formMovimentiConto.dataInizio.disabled = true;
         formMovimentiConto.dataFine.disabled = true;
         formMovimentiConto.ultimiMovimenti.disabled = false;
      }
      
      function movimentiContoNuovaRicerca(strForm) {
         var myForm = document.getElementById(strForm);  
         myForm.compilazione.value = 'N';
         myForm.submit();
      }
   </script>

   
   <div class="clearfix">
      <style>
         .imgSrv{
         float: none;
         }
      </style>
      <h1>
         <div class="hidden-print hidden-xxs flag saldiMovimenti">&nbsp;</div>
         <span>Saldo e movimenti</span>
      </h1>
      <a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: saldo e movimenti&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/fe/img/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line" /></a>
      <div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header clearfix">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               </div>
               <div class="modal-body">
               </div>
            </div>
         </div>
      </div>
      <div class="col-xs-12 hidden-xs hidden-print">
         <div class="contentPagina">
            Di seguito viene visualizzata la situazione del tuo conto. Per ottenere la lista dei movimenti desiderata imposta i criteri a tuo piacimento e clicca sul pulsante "Ricerca".
         </div>
      </div>
   </div>



   <form id="formMovimentiConto2" class="border-bottom" method="post" action="/WEBHT/cc/movimentiConto.do">
      <div class="section clearfix">
         <h3 class="titleSection">
            Rapporto selezionato
         </h3>
         <div class="selezioneCC tabellaSelezioneCC">
            <div class="CCselezionato clearfix">
               <!-- C'è anche la sezione saldo -->
               <div class="col-sm-6 col-xs-12">
                  <span class="col-xs-4 col-xs-4" id="labelIntestatario">
                  Intestato a:
                  </span>
                  <span class="col-xs-6" id="intestazione">
                  Cognome Nome
                  </span>
                  <span class="col-xs-4" id="conto">
                  Conto corrente:
                  </span>
                  <span class="col-xs-6" id="numero">
                  00000000 
                  </span>
                  <span class="col-xs-4">
                  Filiale:
                  </span>
                  <span class="col-xs-6" id="agenzia">
                  MILANO&nbsp;-&nbsp;
                  0000
                  </span>
               </div>
               <div class="col-xs-12 col-sm-6" id="numeri">
                  <span id="disponibile">
                     Saldo disponibile:
                     <strong>
                     88,00
                     </strong>
                     <!-- Multivaluta Visualizza -->
                     <!-- Multivaluta Visualizza fine -->
                  </span>
                  <span id="contabile"> 
                  Saldo contabile: 
                  <strong>
                  88,00
                  </strong>
                  </span>
                  <span id="affidamento"> 
                  Affidamento: 
                  <strong>
                  0,00
                  </strong>
                  </span>
               </div>
               <!-- C'è solo la sezione intestatario -->
               <a id="selezionaCC" class="btnSelezioneCC" href="javascript:void(0);" title="seleziona rapporto" role="button" aria-pressed="false">
               <img src="/HT/fe/img/ico-select.png" id="btnSelezioneRapporto" />
               </a>
            </div>
            <div class="tabSelezioneCC" style="display: block;">
               <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                  <table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
                     <tbody>
                        <tr>
                           <td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0000|000000000000" checked="checked" />
                           </td>
                           <td headers="tipoRapporto">Conto corrente 
                           </td>
                           <td headers="ccRapporto">00000000</td>
                           <td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp; 
                              0000
                           </td>
                           <td headers="intestazioneRapporto">
                              Cognome Nome      
                           </td>
                           <td headers="divisaSaldoDisponibile" class="hidden">
                              EUR
                           </td>
                           <td headers="divisaSaldoContabile" class="hidden">
                              EUR
                           </td>
                           <td headers="affidamento" class=" hidden oRight">
                              0,00
                              EUR
                           </td>
                           <td headers="divisaSaldoAffidamento" class="hidden">
                              EUR
                           </td>
                           <td headers="saldoIstantaneo" class="hidden oRight">
                              88,00
                              <span>EUR</span>
                           </td>
                           <td headers="saldoDisponibile" class="oRight  hidden-xxs">
                              88,00
                              <span class="hidden-xs">EUR</span>
                           </td>
                           <!-- Multivaluta -->
                           <!-- Multivaluta fine -->
                           <td class="hidden">&nbsp;</td>
                        </tr>
                        <tr>
                           <td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0000|000000000000" />
                           </td>
                           <td headers="tipoRapporto">Conto deposito 
                           </td>
                           <td headers="ccRapporto">00000000</td>
                           <td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp; 
                              0000
                           </td>
                           <td headers="intestazioneRapporto">
                              Cognome Nome      
                           </td>
                           <td headers="divisaSaldoDisponibile" class="hidden">
                              EUR
                           </td>
                           <td headers="divisaSaldoContabile" class="hidden">
                              EUR
                           </td>
                           <td headers="affidamento" class=" hidden oRight">
                              0,00
                              EUR
                           </td>
                           <td headers="divisaSaldoAffidamento" class="hidden">
                              EUR
                           </td>
                           <td headers="saldoIstantaneo" class="hidden oRight">
                              5,00
                              <span>EUR</span>
                           </td>
                           <td headers="saldoDisponibile" class="oRight  hidden-xxs">
                              5,00
                              <span class="hidden-xs">EUR</span>
                           </td>
                           <!-- Multivaluta -->
                           <!-- Multivaluta fine -->
                           <td class="hidden">&nbsp;</td>
                        </tr>
                     </tbody>
                     <thead>
                        <tr class="hover">
                           <th class="hidden" style="width: 0px;">&nbsp;</th>
                           <th headers="tipoRapporto" class="sorting_asc" style="width: 0px;">Tipo rapporto</th>
                           <th headers="ccRapporto" class="sorting" style="width: 0px;">Numero</th>
                           <th headers="filialeRapporto" class="sorting hidden-xs" style="width: 0px;">Filiale</th>
                           <th headers="intestazioneRapporto" class="sorting" style="width: 0px;">Intestazione</th>
                           <th headers="divisaSaldoDisponibile" class="hidden" style="width: 0px;"> </th>
                           <th headers="divisaSaldoContabile" class="hidden" style="width: 0px;"> </th>
                           <th headers="affidamento" class="hidden sorting" style="width: 0px;">Affidamento</th>
                           <th headers="divisaSaldoAffidamento" class="hidden" style="width: 0px;"> </th>
                           <th headers="saldoIstantaneo" class="hidden sorting" style="width: 0px;">Saldo Contabile</th>
                           <th headers="saldoDisponibile" class="sorting hidden-xxs oRight" style="width: 0px;">
                              Saldo Disponibile
                           </th>
                           <th class="hidden" style="width: 0px;">&nbsp;</th>
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
         </div>
         <!-- .selezioneCC.tabellaSelezioneCC -->
         <script type="text/javascript">
            $(document).ready(function(){
            
                //se il conto è gia stato selezionato devo popolarlo via javascript, il default non va bene
                
               var tr = $("input[name='codContoCorrente']:checked").closest('tr');        
                     //popolo con i dati nella riga
                     contoSelezionato = initContoSelezionato(tr);
                     
                     popolaSelezioneCC(contoSelezionato);
                 
                 
                var submitOnClick = false;
                var str = $('#intestazione').text();
               if($.trim(str).length>26){
                  $('#intestazione').removeClass('col-xs-6');
                  $('#intestazione').addClass('col-xs-10');
                  $('#labelIntestatario').addClass('hide');
               }
                
               
               
               //se i rapporti sono maggiori di 8 deve essere fatta la paginazione  
               
                  
                     CCselectionInit(submitOnClick, false, false);
                  
                  
               
            })
            
         </script>
      </div>
      <div class="section clearfix">
      </div>
      <div class="section clearfix" id="formRisultati">
         <div class="context-buttons">
            <a href="#" id="btnRicerca" title="mostra parametri di ricerca" class="btnSelezioneOpen pull-right" role="button" aria-pressed="false"></a>
         </div>
         <input type="hidden" name="compilazione" value="S" />
         <input type="hidden" name="contoDeposito" value="N"/>
         <input type="hidden" name="movimentiK2" value="N"/>
         <input type="hidden" name="pagina" value="" />
         <input type="hidden" name="indiceColonna" value="0" id="indiceColonna" />
         <input type="hidden" name="tipoOrdinamento" value="desc" id="tipoOrdinamento" />    
         <h3 class="titleSection">
            Parametri di ricerca
         </h3>
         <div class="bs-example">
            <div class="form-group clearfix">
               <div class="col-xs-12">
                  Criteri: movimenti dal <b>30/01/2017</b> al <b>01/03/2017</b>, status movimento <b>TUTTI</b>, tipologia movimento <b>TUTTI</b>
               </div>
            </div>
         </div>
         <style>
            .titoloSgancio {
            border-bottom: 2px solid #0E6AB3;
            color: #0E6AB3;
            font-size: 16px;
            font-style: italic;
            font-weight: bold;
            line-height: 24px;
            margin: 0 0 8px;
            padding-left: 10px;
            padding-top: 0;
            text-align: left;
            width: 98.5%;
            }
            .no-close .ui-dialog-titlebar-close {
            display: none;
            }
         </style>
         <div id="sgancio" style="font-size: 13px; z-index: 1000; display: none;">
            <h1 class="titoloSgancio">Informazione per il cliente</h1>
            <div style="padding:10px;">
               Attenzione l'operazione è stata effettuata utilizzando vecchie coordinate IBAN. La Banca ha provveduto in automatico al corretto accredito/addebito. E' indispensabile, tuttavia, che siano comunicate a tutte le controparti le corrette coordinate IBAN del tuo conto corrente.<br/>
            </div>
         </div>
      </div>
      <div class="section clearfix" id="formRicerca">
         <div class="context-buttons">
            <a href="#" id="btnRicercaHide" title="nascondi parametri di ricerca" class="btnSelezioneClose pull-right" role="button" aria-pressed="true"> </a>
         </div>
         <h3 class="titleSection">  
            Parametri di ricerca  aa           
         </h3>
         <div class="bs-example">
            <div class="form-group clearfix">
               <div class="row">
                  <div class="col-sm-6 col-xs-12">
                     <div class="col-xs-12 clearpadding margin-bottom-xs-10">
                        <label style="padding-top:2px" for="intervalloPeriodo">
                        <input type="radio" name="tipoIntervallo" value="periodo" checked="checked" id="intervalloPeriodo" />
                        Periodo (gg/mm/aaaa)
                        </label>
                     </div>
                     <div class="col-xs-12 clearpadding ">
                        <div  class="col-sm-6 col-xs-12 margin-bottom-xs-10 xs-align-right">
                           <span class="float-xs-left">Dal </span>
                           <input type="text" name="dataInizio" size="16" value="30/01/2017" onclick="$('#intervalloPeriodo').prop('checked',true)" onchange="$('#intervalloPeriodo').prop('checked',true)" id="dataInizio" class="datepicker form-control wauto" />
                        </div>
                        <div  class="col-sm-6 col-xs-12 margin-bottom-xs-10 xs-align-right">
                           <span class="float-xs-left">Al </span>
                           <input type="text" name="dataFine" size="16" value="01/03/2017" onclick="$('#intervalloPeriodo').prop('checked',true)" onchange="$('#intervalloPeriodo').prop('checked',true)" id="dataFine" class="datepicker form-control wauto " />
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                     <label style="padding-top:2px" for="intervalloUltimiMovimenti">
                     <input type="radio" name="tipoIntervallo" value="ultimiGiorni" id="intervalloUltimiMovimenti" />
                     Ultimi movimenti
                     </label>
                     <select name="ultimiMovimenti" onclick="$('#intervalloUltimiMovimenti').prop('checked',true)" disabled="disabled" id="ultimiMovimenti" class="form-control">
                        <option value="7">7 giorni</option>
                        <option value="30" selected="selected">30 giorni</option>
                        <option value="90">90 giorni</option>
                        <option value="180">180 giorni</option>
                        <option value="365">1 anno</option>
                     </select>
                  </div>
               </div>
			   <div class="row">
							<div class="form-field-input col-sm-6 col-xs-12">
								<label class="control-label">
									Testo nella Causale
								</label>
								<div class="form-field">
									<input type="text" name="testoCausale" value="" id="testoCausale" class="form-control" />
														
								</div>
							</div>
							<div class="form-field-input col-sm-3 col-xs-12">
								<label class="control-label">
									Tipologia Movimento				
								</label>
								<div class="form-field">
									<select name="tipologiaMovimento" id="tipologiaMovimento" class="form-control"><option value="tutti" selected="selected">Tutti</option>
										<option value="entrate">In entrata</option>				
										<option value="uscite">In uscita</option></select>
																									
								</div>					
							</div>	
							<div class="form-field-input col-sm-3 col-xs-12">
								<label class="control-label">
									Status Movimento
								</label>					
								<div class="form-field">
									<select name="statusMovimento" id="statusMovimento" class="form-control"><option value="tutti" selected="selected">Tutti</option>										
										<option value="contabilizzato">Contabilizzato</option>
										<option value="prenotato">Prenotato</option></select>
																		
								</div>
						</div>							
						</div>

			   
			   
               <!--div class="row">
                  <div class="form-field-input col-sm-6 col-xs-12">
                     <label class="control-label">
                     Testo nella Causale
                     </label>
                     <div class="form-field">
                        <input type="text" name="testoCausale" value="" id="testoCausale" class="form-control" />
                     </div>
                  </div>
                  <div class="form-field-input col-sm-3 col-xs-12">
                     <label class="control-label">
                     Tipologia Movimento           
                     </label>
                     <div class="form-field">
                        <select name="tipologiaMovimento" id="tipologiaMovimento" class="form-control">
                           <option value="tutti" selected="selected">Tutti</option>
                           <option value="entrate">In entrata</option>
                           <option value="uscite">In uscita</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-field-input col-sm-3 col-xs-12">
                     <label class="control-label">
                     Status Movimento
                     </label>             
                     <div class="form-field">
                        <select name="statusMovimento" id="statusMovimento" class="form-control">
                           <option value="tutti" selected="selected">Tutti</option>
                           <option value="contabilizzato">Contabilizzato</option>
                           <option value="prenotato">Prenotato</option>
                        </select>
                     </div>
                  </div>
               </div-->
            </div>
         </div>
      </div>
      <div class="pull-right margin-bottom10 margin-top10" id="submitRicerca" style="display:none">
         <input type="submit" name="" value="Ricerca" class="btn btn-primary" />       
      </div>
   </form>
   <div class="section clearfix">
	<div class="pulsanti">
			<div class="context-buttons pull-left" style="margin-left:10px">
				<a href="#" onclick="javascript:exportExcel('formMovimentiConto2');" title="esporta in excel" id="excel" class="btnExcel" role="button"></a>
			</div>
			<div id="puls_gr_table_chart_timeline" class="context-buttons pull-right">
				<!--[if gt IE 8]><!-->
					<a href="javascript:;" title="Tabella" onclick="showTable()" id="btnTable" class="btnTable disabled" role="button"> </a>
					<a href="javascript:;" title="Grafico" onclick="caricaGrafico()" id="btnChart" class="btnChart" role="button"> </a>
					<a href="javascript:;" title="Timeline" onclick="showTimeline()" id="btnTimeline" class="btnTimeline" role="button"> </a>
				<!--<![endif]-->
					
			</div>
		</div>
		<div class="bs-example" style="position:relative; z-index:1">
			<div class="form-group">
					
				<div class="form-field-input col-xs-12 margin-bottom10 clear-padding" id="table">
					<!--           OPERA          -->




<script>
$(document).ready(function(){

	
	
	movimentiSelectionInit(false);
	

});
</script>











	



<div class="SelezioneMovimenti">
	<div class="tabSelezioneMovimenti" style="display: block;">
		<div id="CCMO_wrapper" class="dataTables_wrapper no-footer"><table id="CCMO" class="table table-striped dataTable no-footer" role="grid">
<colgroup>
<col width="15%">
<col width="15%">
<col width="18%">
<col width="5%">
<col width="36%">
<col width="5%">
<col width="5%">
</colgroup>
<thead>
<tr class="hover" role="row"><th class="date sorting sorting_desc sorting_disabled" title="Data Contabile" rowspan="1" colspan="1" style="width: 106px;">Data Contabile</th><th class="hidden-xs date sorting sort_none sorting_disabled" title="Data Valuta" rowspan="1" colspan="1" style="width: 107px;">Data Valuta</th><th class="number sorting sort_none sorting_disabled oRight" title="Importo" rowspan="1" colspan="1" style="width: 133px;">Importo</th><th class="hidden-xs text sorting sort_none sorting_disabled" title="Divisa" rowspan="1" colspan="1" style="width: 36px;">Divisa</th><th class="text sorting sort_none sorting_disabled" title="Causale" rowspan="1" colspan="1" style="width: 288px;">Causale</th><th class="hidden-xs text sorting sort_none sorting_disabled" title="Status" rowspan="1" colspan="1" style="width: 38px;">Status </th><th class="hidden-xs image sorting sort_none sorting_disabled" title="Canale" rowspan="1" colspan="1" style="width: 41px;">Canale</th></tr>
</thead>
<tbody>



<tr role="row" class="odd">
<td class="oCenter">03/02/2017</td>
<td class="oCenter hidden-xs">03/02/2017</td>
<td class="importo oRight positivo oRight">5,00</td>
<td class="oCenter hidden-xs">EUR</td>
<td class="oLeft break-xs">trasferim.tra conti - trasferimento da conto *1794</td>
<td class="oCenter hidden-xs">Cont.</td>
<td class="oCenter orderAsc hidden-xs"><img src="/HT/fe/img/HBMVWeb.gif" alt="Web" title="Web"></td>
</tr><tr role="row" class="even">
<td class="oCenter">27/01/2017</td>
<td class="oCenter hidden-xs">27/01/2017</td>
<td class="importo oRight negativo oRight">-7,00</td>
<td class="oCenter hidden-xs">EUR</td>
<td class="oLeft break-xs">add. pagam. diversi - ricarica carta conto youweb  n. *9130            del 27/01/2017 ore 11:55</td>
<td class="oCenter hidden-xs">Cont.</td>
<td class="oCenter orderAsc hidden-xs"><img src="/HT/fe/img/HBMVApp.gif" alt="App" title="App"></td>
</tr><tr role="row" class="odd">
<td class="oCenter">27/01/2017</td>
<td class="oCenter hidden-xs">27/01/2017</td>
<td class="importo oRight negativo oRight">-10,00</td>
<td class="oCenter hidden-xs">EUR</td>
<td class="oLeft break-xs">trasferim.tra conti - trasferimento a conto *1794</td>
<td class="oCenter hidden-xs">Cont.</td>
<td class="oCenter orderAsc hidden-xs"><img src="/HT/fe/img/HBMVWeb.gif" alt="Web" title="Web"></td>
</tr></tbody>
</table></div>

		
		
	</div>
</div>

<!--           /OPERA           -->
					<div class="visible-print-block pull-right">
						<span>Pagina: 1 / 1</span>
					</div>
				</div>
				<div id="loadingChart" class="caricamentoAjax" style="display: none;">
					<img src="/HT/IMAGES/caricamento.gif">
				</div>
				<div id="areaChart" style="margin-top:40px">
				
				</div>
				<div class="form-field-input col-xs-12 margin-bottom10 clear-padding" id="timeLine">
				</div>
			</div>
		</div>
		
	</div>
</div>
<style>
   .titoloSgancio {
   border-bottom: 2px solid #0E6AB3;
   color: #0E6AB3;
   font-size: 16px;
   font-style: italic;
   font-weight: bold;
   line-height: 24px;
   margin: 0 0 8px;
   padding-left: 10px;
   padding-top: 0;
   text-align: left;
   width: 98.5%;
   }
   .no-close .ui-dialog-titlebar-close {
   display: none;
   }
</style>
<div id="sgancio" style="font-size: 13px; z-index: 1000; display: none;">
   <h1 class="titoloSgancio">Informazione per il cliente</h1>
   <div style="padding:10px;">
      Attenzione l'operazione è stata effettuata utilizzando vecchie coordinate IBAN. La Banca ha provveduto in automatico al corretto accredito/addebito. E' indispensabile, tuttavia, che siano comunicate a tutte le controparti le corrette coordinate IBAN del tuo conto corrente.<br/>
   </div>
</div>
<script type="text/javascript">
   $(document).ready(function(){
      $("#loadingChart").hide();
      
      $('.btnSelezioneClose').click(function(){
         $("#formRisultati").show();
         $("#formRicerca").hide();
         $("#submitRicerca").hide();
      })
      $("#btnRicerca").click(function(){
            $("#formRisultati").hide();
            $("#formRicerca").show();
            $("#submitRicerca").show();
      })
      
      $("#intestazione").change(function(){
         $('#formMovimentiConto2').find("input[type='submit']").click();
      })
      
      if($("#intervalloPeriodo:checked")){
         $("#dataFine").removeAttr("disabled");
         $("#dataInizio").removeAttr("disabled");
         $("#ultimiMovimenti").attr("disabled", "disabled");

      }
      if($("#intervalloUltimiMovimenti").is(':checked')){
         $("#dataFine").attr("disabled" ,"disabled");
         $("#dataInizio").attr("disabled", "disabled");
         $("#ultimiMovimenti").removeAttr("disabled");
         
      }
      
      $("#intervalloUltimiMovimenti").click(function(){
         $("#dataFine").attr("disabled" ,"disabled");
         $("#dataInizio").attr("disabled", "disabled");
         $("#ultimiMovimenti").removeAttr("disabled");
         $('#dataInizio,#dataFine').next('.ui-datepicker-trigger').css({
         'cursor':'not-allowed',
         'opacity':'0.5'
         })
         $('#dataInizio').datepicker('disable');
         $('#dataFine').datepicker('disable');
      })
      $("#intervalloPeriodo").click(function(){
         $("#dataFine").removeAttr("disabled");
         $("#dataInizio").removeAttr("disabled");
         $("#ultimiMovimenti").attr("disabled", "disabled");
         $('#dataInizio,#dataFine').next('.ui-datepicker-trigger').css({
         'cursor':'pointer',
         'opacity':'1'
         });
         $('#dataInizio').datepicker('enable');
         $('#dataFine').datepicker('enable');
         
      });
      if(importi.length<=0){
         $('#btnTable').addClass('disabled');
         $('#btnChart').addClass('disabled');
         $('#btnTimeline').addClass('disabled');
      }
      
   });
   
   var saldiContabili = [];
   var dateContabili = [];
   
      var fido = 0.00;
   
   
   var timeline = null;
   var groupCount = 2;
   var names = ['Entrata', 'Uscita'];
   var groups = [];
   var items = [];
   //var itemsDataset = new vis.DataSet();
   var itemsDataset;  // AA 
   var importi = [];
   var giorni = [];
   var causali = [];
   
   
      importi.push("5,00");
      causali.push("trasferim.tra conti");
      
         giorni.push("02/03/2017");
      
      
   importi.reverse();
   causali.reverse();
   giorni.reverse();
   
   //creo l'array per disegnare il grafico dei saldi
   
       dateContabili.push('02/03/2017')
         saldiContabili.push(83.0)
   
       dateContabili.push('03/01/2017')
         saldiContabili.push(88.0)
   
   
   
   
   function showTable(){
   if(!$('#btnTable').hasClass('disabled')){
         
      $('#timeLine').css('display', 'none');
         $('#table').css('display', 'block');
         $('#areaChart').css('display', 'none');
         $('body,html').scrollTop($('#table').offset().top);
      
      if($('#wMessage').css('display') == 'block'){
         $('#table').css('display', 'none');
      }
      if(importi.length>0){
         $('#btnTable').addClass('disabled');
         if($('#btnChart').hasClass('disabled'))
            $('#btnChart').removeClass('disabled');
         else if($('#btnTimeline').hasClass('disabled'))
            $('#btnTimeline').removeClass('disabled');
      }
   }
   }
   
   function caricaGrafico(){
     //  $('.wrapper').css('overflow','visible');
     if(!$('#btnChart').hasClass('disabled')){
         $("#loadingChart").show();
      if(saldiContabili.length>0){
         var options = {packages: ['corechart'], callback : drawChart};
         google.load('visualization', '1.0', options);
         $('#wMessage').css('display', 'none');
       }
         
         $('#timeLine').css('display', 'none');
         $('#table').css('display', 'none');
         $('#areaChart').css('display', 'block');
         $('body,html').scrollTop($('#areaChart').offset().top);
      
      if($('#wMessage').css('display') == 'block'){
         $('#areaChart').css('display', 'none');
      }
         
      $('#btnChart').addClass('disabled');
      if($('#btnTable').hasClass('disabled'))
         $('#btnTable').removeClass('disabled');
      else if($('#btnTimeline').hasClass('disabled'))
         $('#btnTimeline').removeClass('disabled');
      }
   }
   
   // load le risorse vis.js e vis.css in modo dinamico 
   function loadResource() {
   $('<link rel="stylesheet" type="text/css" href="/HT/CSS/vis.css" >').appendTo("head")
   $.ajax({
         async: false,
         url: "/HT/JS/script/vis.js",
         dataType: "script"
   });
   }
   
   function showTimeline(){
   loadResource();
   
   if(!$('#btnTimeline').hasClass('disabled')){
      if (timeline == undefined){
         if(importi.length>0)
            drawTimeline()
      }else{
         timeline.redraw();
      }
      
      if(importi.length<1){
         $('#wMessage').css('display', 'block');
      }
      
      $('#timeLine').css('display', 'block');
       $('body,html').scrollTop($('#timeLine').offset().top);
         $('#table').css('display', 'none');
      $('#areaChart').css('display', 'none');
      
      if($('#wMessage').css('display') == 'block'){
         $('#timeLine').css('display', 'none');
      }
      
      $('#btnTimeline').addClass('disabled');
      if($('#btnTable').hasClass('disabled'))
         $('#btnTable').removeClass('disabled');
      else if($('#btnChart').hasClass('disabled'))
         $('#btnChart').removeClass('disabled');
   }
   }
   
   function drawChart() {
     
      //saldo minimo
      var min = Math.min.apply(Math, saldiContabili);
      //saldo massimo
      var max = Math.max.apply(Math, saldiContabili);
      
         var rows = [];
      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Day');
      data.addColumn('number', 'Saldo');
      //data.addColumn({id:'i0', type:'number', role:'interval'});
         //data.addColumn({id:'i1', type:'number', role:'interval'});
      //data.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
      if(fido > 0){
         data.addColumn('number', 'Affidamento');
      data.addColumn({id:'i0', type:'number', role:'interval'});
          data.addColumn({id:'i1', type:'number', role:'interval'});
       data.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
   }
   if(min<0){
      data.addColumn('number', 'Negativo');
      data.addColumn({id:'i0', type:'number', role:'interval'});
          data.addColumn({id:'i1', type:'number', role:'interval'});
   }
   
   var minvert = min;
   if(min>fido && fido > 0)
      minvert = fido;
   var vertmax = max;
   if(fido>max)
      vertmax = fido;
   
   //creo l array delle righe per disegnare il grafico
   for(i=0;i<saldiContabili.length;i++){
      var temp = [];
      temp.push(new Date(dateContabili[i]));
      temp.push(saldiContabili[i]);
      //temp.push(saldiContabili[i]);
      //temp.push(min);
      
      //temp.push('<span>' + dateContabili[i] + '<br /> Saldo: ' + 
         //       saldiContabili[i] + '<span>');
      if(fido > 0){
         temp.push(fido);
         temp.push(fido);
         temp.push(0);
         temp.push('Fido: ' + fido.toLocaleString('de-DE'));
      }
      if(min<0){
         temp.push(0);
         temp.push(0);
         temp.push(minvert-((vertmax-minvert)*0.1));
      }
      //temp.push('<span>' + dateContabili[i] + '<br />Affidamento: ' + fido);
      rows.push(temp);
   }
   
      data.addRows(rows);
      
   var serie = {};
         serie[0] = {color: '#0e977f', visibleInLegend: true, pointSize: 4};
         if(fido>0){
            serie[1] = {color: '#ffe538', visibleInLegend: true, pointSize: 0};
            if(min<0)
               serie[2] = {color: '#FF3657', visibleInLegend: true, pointSize: 0, enableInteractivity: false};
         }else if(min<0){
            serie[1] = {color: '#FF3657', visibleInLegend: true, pointSize: 0, enableInteractivity: false};
         }        
   
   var heightParent = $('#movimentiGrafico').height();
         var widthParent = $('#movimentiGrafico').width();
         
         var options = {
             curveType: 'function',
             legend: 'right',
             lineWidth: 2,
             height: 500,
             weight: widthParent,
             intervals: { 'style':'area' },
             series: serie,
             animation:{
            duration: 1000,
            startup: true,
            easing: 'out'
             
         },
          legend: 'none',
             tooltip: {isHtml: true},
             vAxis: {
               viewWindow: {
             max: vertmax+((vertmax-minvert)*0.1),
             min: minvert-((vertmax-minvert)*0.1),
           },
            format: '##,##0.00',
            gridlines: {
            count: 10
           }
         },
        hAxis: {
         viewWindow: {
             max: new Date(dateContabili[dateContabili.length-1]),
             min: new Date(dateContabili[0]),
           },
           format:'dd/MM',
           gridlines: {
            count: 10,
           }
        },
        axisColor :'red'
      };
   
   var formatter = new google.visualization.NumberFormat({negativeColor: 'red', negativeParens: false, pattern: '##,##0.00'});
         formatter.format(data, 1); 
         
         var chart = new google.visualization.LineChart(document.getElementById('areaChart'));
         google.visualization.events.addListener(chart, 'ready', function(){
            $("#loadingChart").hide();

         });
         chart.draw(data, options);
     }
     
     //disegno timeline
     function initTimeline(){
   for (var g = 1; g <= groupCount; g++) {
      groups.push({id: g, content: names[g-1]});
   }
   
   var countItemsDay = 0;
   for(var i=0;i<importi.length;i++){
      
      if(i>0 && giorni[i]==giorni[i-1]){
         countItemsDay++;
      }else if(i>0 && giorni[i]!=giorni[i-1]){
         countItemsDay = 0;
      }
      
      var temp = {};
      temp['start'] = giorni[i];
      temp['causaleAbbr'] = causali[i];
      temp['dettagli'] = {"dataOperazione": giorni[i],"dataValuta": "2015-02-10", "causale": causali[i]};
      if(importi[i].indexOf('-')>-1){
         //se è negativo è un movimento in uscita
         temp['importo'] = '<strong class=\'red\'>' + importi[i] + '</strong>';
         temp['group'] = 2;
      }
      else{
         temp['importo'] = '<strong class=\'blue\'>' + importi[i] + '</strong>';
         temp['group'] = 1;
      }
      items.push(temp);
   }
   // create a dataset with items
   itemsDataset = new vis.DataSet(); // AA 
   for (var i = 0; i < items.length; i++) {
      var start = new Date(items[i].start);
      var group = items[i].group;
      itemsDataset.add({
         id: i,
         group: group,
         content: items[i].importo +
               '<p>' + items[i].causaleAbbr + '</p>' +
               '<div class="modal-info">' + 
                  '<strong>Data oper.:</strong><br />' + new Date(items[i].dettagli.dataOperazione).toLocaleDateString() + '<br>' + 
                  '<strong>Causale:</strong><br />' + items[i].dettagli.causale + '<br />' +
               '</div>',
         start: start,
         type: 'box',
      });
   }
   //startDate = new Date(giorni[0]).toLocaleDateString('en-EN');
   //endDate = new Date(giorni[giorni.length-1]).toLocaleDateString('en-EN');
   }
   
   
   function drawTimeline(){
   if(importi.length>0){
      initTimeline();
      // create visualization
      var container = $('#timeLine')[0];
      var options = {
         groupOrder: 'content',
         clickToUse: false,
         showCurrentTime: false,
         type: "box",
         zoomable: true,
         orientation: 'top',
         format: {
           minorLabels: {
             millisecond:'SSS',
             second:     's',
             minute:     'HH:mm',
             hour:       'HH:mm',
             weekday:    'D',
             day:        'D',
             month:      'MMM',
             year:       'YYYY'
           },
           majorLabels: {
             millisecond:'HH:mm:ss',
             second:     'D MMMM HH:mm',
             minute:     'D MMMM',
             hour:       'D MMMM',
             weekday:    'MM/YYYY',
             day:        'MM/YYYY',
             month:      'YYYY',
             year:       ''
           }
         }
      };
      
      timeline = new vis.Timeline(container);
      timeline.setOptions(options);
      timeline.setGroups(groups);
      timeline.setItems(itemsDataset);
      timeline.focus(timeline.setSelection([]));
      
      timeline.on('select', function(properties){
         if (properties.items.length > 0) {
            var box = $(timeline.itemSet.items[properties.items[0]].dom.box);
            var info = $('.modal-info', box);
         
            if (!info.hasClass('visible')) {
               hideInfoPanel($('.modal-info.visible'));
               
               //info.width($(timeline.itemSet.items[properties.items[0]].dom.box).width() + 2);
               //info.css('width', $(timeline.itemSet.items[properties.items[0]].dom.box).css('width'));
               info.css('width', box.css('width'));
               if (box.offset().top + info.height() + 10 > box.parent().parent().offset().top + box.parent().parent().height() - 30) {
                  info.addClass('top-down');
               }
               
               info.slideDown(300).addClass('visible');
               timeline.focus(properties.items[0]);
            }
            else {
               info.slideUp(300);
               info.removeClass('visible');
               timeline.fit();
            }
         }
         else {
            hideInfoPanel($('.modal-info.visible'));
         }
      });
      
      timeline.on('rangechange', function(properties){
         if(properties.byUser){
            hideInfoPanel($('.modal-info.visible'));
         }
      });
      
      timeline.on('click', function(properties){
         if(properties.item == null){
            timeline.fit();
         }
      });
      
      return true;
   }
   return false;
   }
   
   function hideInfoPanel(toHide) {
   toHide.slideUp(200);
   toHide.removeClass('visible');
   }
   
</script>