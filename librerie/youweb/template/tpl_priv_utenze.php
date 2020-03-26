					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							15/03/2017	
						</div>
					</div>
					
					
					




<style type="text/css">
	.ui-menu .ui-menu-item a {
	    font-weight: normal;
	}
	.ui-widget-content a:hover {
		text-decoration: none;
	}
	
	#autocompletamento.placeh{
		color:#9a9a9a;
		font-style: italic;
	}
</style>
<script type="text/javascript">
	var lista = [];
	
		lista[0] = 'ACEA S.p.A.- ROMA';
	
		lista[1] = 'ACOSET SPA';
	
		lista[2] = 'ACQUE VERONESI';
	
		lista[3] = 'AEM - A2A';
	
		lista[4] = 'AEM COM SRL';
	
		lista[5] = 'AGS SPA - Peschiera del Garda';
	
		lista[6] = 'AGSM';
	
		lista[7] = 'AIMAG';
	
		lista[8] = 'AMAG SPA';
	
		lista[9] = 'AMAIE';
	
		lista[10] = 'AMAT SPA';
	
		lista[11] = 'AMGA Commerciale';
	
		lista[12] = 'ASPM COMMERCIALE SRL';
	
		lista[13] = 'ASPM SERVIZI AMBIENTALI SRL';
	
		lista[14] = 'ASPM SORESINA SERVIZI S.P.A.';
	
		lista[15] = 'ATC - AG. TERR. CASA PROV. DI Novara';
	
		lista[16] = 'AZIENDA ENERGETICA MUNICIPALE';
	
		lista[17] = 'BLUENERGY';
	
		lista[18] = 'COMUNE DI BOVOLONE';
	
		lista[19] = 'COMUNE DI CREMONA';
	
		lista[20] = 'COMUNE DI LODI - TARSU';
	
		lista[21] = 'COMUNE DI PIADENA';
	
		lista[22] = 'COMUNE DI SOSPIRO';
	
		lista[23] = 'COMUNE MALAGNINO';
	
		lista[24] = 'CONS. BONIF. COLLINE LIVORNESI';
	
		lista[25] = 'CONSORZIO BONIFICA EMILIA CENTRALE';
	
		lista[26] = 'CONSORZIO BONIFICA FIUMI E FOSSI';
	
		lista[27] = 'CONSORZIO BONIFICA RENANA';
	
		lista[28] = 'CONTARINA SPA - IGIENE AMBIENTALI';
	
		lista[29] = 'CONTARINA SPA - SERVIZI INTERATTIVI';
	
		lista[30] = 'COOP GAS';
	
		lista[31] = 'ENEL spa / ENEL ENERGIA';
	
		lista[32] = 'ENERCOM';
	
		lista[33] = 'ENI - GAS E POWER - SOFID';
	
		lista[34] = 'ENIA';
	
		lista[35] = 'EX FIORENTINA GAS';
	
		lista[36] = 'GAS SALES SRL';
	
		lista[37] = 'GEAL SPA';
	
		lista[38] = 'GENOVA ACQUE';
	
		lista[39] = 'GESTE SRL';
	
		lista[40] = 'HERA SPA';
	
		lista[41] = 'ICA';
	
		lista[42] = 'INDECAST SRL - ACQUA';
	
		lista[43] = 'INDECAST SRL-RIFIUTI';
	
		lista[44] = 'IREN EMILIA';
	
		lista[45] = 'IREN MERCATO';
	
		lista[46] = 'IREN TIA';
	
		lista[47] = 'LINEA GROUP SPA';
	
		lista[48] = 'LINEA PIU CREMA';
	
		lista[49] = 'META';
	
		lista[50] = 'METAENERGY';
	
		lista[51] = 'MISERICORDIA';
	
		lista[52] = 'NAPOLETANA GAS';
	
		lista[53] = 'POLIZIA MUNICIPALE CREMONA';
	
		lista[54] = 'SCS GESTIONI';
	
		lista[55] = 'SINERGAS';
	
		lista[56] = 'SOC. ELETTRICA LIPARESE';
	
		lista[57] = 'SORESINA RETI E IMPIANTI S.P.A';
	
		lista[58] = 'SORGEA SRL';
	
		lista[59] = 'SORIS';
	
		lista[60] = 'SORIT - CONS.BON.VALLI GRANDI';
	
		lista[61] = 'TEA ACQUE';
	
		lista[62] = 'TELECOM';
	
		lista[63] = 'TIDONE GAS ENERGIE SRL';
	
		lista[64] = 'TIM';
	
		lista[65] = 'V.E.R.I.T.A.S. (EX VESTA)';
	
	function __highlight(s, t) {
		var matcher = new RegExp("^("+$.ui.autocomplete.escapeRegex(t)+")", "i" );
  		return s.replace(matcher, "<strong>$1</strong>");
	}
	$(function() {
		$("#autocompletamento").autocomplete({
			source: function(req, resp) {
				        var re = $.ui.autocomplete.escapeRegex(req.term);
				        var matcher = new RegExp( "^" + re, "i" );
				        var a = $.grep(lista, function(item,index){
				            return matcher.test(item);
				        });
				        resp($.map(a, function(item) {
				            return {label: __highlight(item, req.term),
				                    value: item};
				          }));
				    },
			minLength: 1
		})
		.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
                  // only change here was to replace .text() with .html()
                  return $( "<li></li>" )
                        .data( "item.autocomplete", item )
                        .append( $( "<a></a>" ).html(item.label) )
                        .appendTo( ul );
        };
	});
	
	$(document).ready(function(){
		if ($("#autocompletamento").val() != "") {
			$("#autocompletamento").removeClass("placeh");
		} else {
			$("#autocompletamento").addClass("placeh");
			$("#autocompletamento").attr("value", "Inserisci il nome dell'utenza");
		}
		
		$("#autocompletamento").live('focus',function(){
			if($(this).hasClass("placeh")){
				$("#autocompletamento").attr("value", "");
				$("#autocompletamento").removeClass("placeh");
			}
		});
		$("#autocompletamento").live('focusout',function(){
			if($(this).attr("value") == ""){
				$("#autocompletamento").addClass("placeh");
				$("#autocompletamento").attr("value", "Inserisci il nome dell'utenza");
			}
		});
	});
	
</script>
	<form id="formBolletta" method="post" action="/WEBHT/pagamenti/bollettaConferma.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="009a69e58dea5925cea9beca8d22b201"></div>
<div class="riquadro clearfix">
	

<script type="text/javascript">
$(document).ready(function(){
	$('.datepicker').datepicker({
		minDate: new Date(1489532400000),
		maxDate: '+1Y',
		buttonImage: '/HT/fe/img/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
	});

	$('.datepickerDisabled').datepicker({
		minDate: new Date(1489532400000),
		maxDate: '+1Y',
		buttonImage: '/HT/fe/img/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
		disabled: true
	});
		
	$('.calendarioDefault').datepicker({
		minDate: new Date(1489532400000),
		maxDate: '+1Y',
		buttonImage: '/HT/fe/img/calendar.png',
		beforeShowDay: noWeekendsOrHolidays
	});
	
	var formSubmitted=false;
	$('form').submit(function() {
		if (formSubmitted)
			return false;
		else 
			formSubmitted=true;	
		return true;
	});
});
</script>

		 
		
		
		
		
		




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag utenze">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Utenze</span>
 					
				
 					
 					<span class="hidden-xs">:&nbsp; compilazione</span>
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: utenze&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>



		
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				







		<div class="contentPagina">
			<p>La funzione "Pagamento utenze" permette di pagare solo&nbsp;alcune aziende di servizio pubblico.<br>Per sapere se è possibile pagare l'utenza di tuo interesse, digita la prima lettera dell'intestazione nel campo "Utenza da pagare".</p>
		</div>



			</div>
		
	
</div> 
		
		








	


		






	
	<h3 class="titleSection">Selezione Rapporto</h3>
	<div class="section">
		




  






	
	
		
	








<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
				<div class="col-sm-6 col-xs-12">
				
					<span class="col-xs-4 col-xs-4 hide" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-10" id="intestazione">
 								Oes Nalgiocdgtus Gr Iaeaanc 		
							
							</span>
					<span class="col-xs-4" id="conto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</span>
				    <span class="col-xs-6" id="numero">00585163</span>
				    <span class="col-xs-4">
				    	Filiale:
				    </span>
				    <span class="col-xs-6" id="agenzia">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</span>
				</div>
				<div class="col-xs-12 col-sm-6" id="numeri">
					<span id="disponibile"> 
						
						Saldo disponibile:
						
						
						
							
								<strong>
														99.999.988.859,58
														EUR
													</strong>
							
							
						
						<!-- Multivaluta Visualizza -->
						
						<!-- Multivaluta Visualizza fine -->
					</span>
					<span id="contabile"> 
						Saldo contabile: 
						
							
								<strong>
														99.999.996.137,57
														EUR
													</strong>
							
							
						
					</span>
					
						<span id="affidamento"> 
							Affidamento: 
							
								
									<strong>
															10.000,00
															EUR
														</strong>
								
								
							
						</span>
					
					
					
				</div>
			
			
			<!-- C'è solo la sezione intestatario -->
			
			
			
				<a id="selezionaCC" class="btnSelezioneCC" href="javascript:void(0);" title="seleziona rapporto" role="button" aria-pressed="false">
					<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto">
				</a>
			
		</div>
	
	<div class="tabSelezioneCC" style="display: none;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer"><table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
				<tbody>
					
						
					
						
					
				<tr role="row" class="odd">
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400585163" checked="checked">
												</td>
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00585163</td>
							<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</td>
							<td headers="intestazioneRapporto">
 								Oes Nalgiocdgtus Gr Iaeaanc 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								EUR
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								EUR
							</td>
							
							
							
								
									
									
										
										
											
												
													
														<td headers="affidamento" class=" hidden oRight">
															10.000,00
															EUR
														</td>
														<td headers="divisaSaldoAffidamento" class="hidden">
															EUR
														</td>
													
												
											
											
												
													<td headers="saldoIstantaneo" class="hidden oRight">
														99.999.996.137,57
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														99.999.988.859,58
														<span class="hidden-xs">EUR</span>
													</td>
												
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="even">
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400002700">
												</td>
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00002700</td>
							<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</td>
							<td headers="intestazioneRapporto">
 								Didugt L. Caetntaosca 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
								
									
									
										
											<td align="center">Non disponibile</td>
											<td class="hidden"></td>
											<td class="hidden"></td>
											<td class="hidden"></td>
										
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr></tbody>
					<thead>
						<tr class="hover" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th><th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th><th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th><th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="affidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Affidamento: ordinamento crescente">Affidamento</th><th headers="divisaSaldoAffidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="saldoIstantaneo" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Saldo Contabile: ordinamento crescente">Saldo Contabile</th><th headers="saldoDisponibile" class="hidden-xxs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="
									
										Saldo Disponibile
									
									
								: ordinamento crescente">
									
										Saldo Disponibile
									
									
								</th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th></tr>
					</thead>
			</table></div>
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
			<h3 class="titleSection">Inserisci coordinate beneficiario</h3>

	<div class="bs-example">
		<div class="form-group">
		
		<div class="form-field-input col-xs-12 col-sm-4">
		
			<label class="control-label">Utenza da pagare
			
			




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: utenze&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>

			</label>
			<div class="form-field">
				<input type="text" name="tipoBolletta" size="30" value="Inserisci il nome dell'utenza" id="autocompletamento" class="placeh form-control ui-autocomplete-input" autocomplete="off">
			<label>Importo</label>
			<div class="form-field">
			<input type="text" name="importoInt" maxlength="6" size="6" value="" id="importoInt" style="width:auto;float: left; text-align: right;" class="form-control">
             	<div class=" floatl-marginr10 top10">&nbsp;,</div>
				<input type="text" name="importoDec" maxlength="2" size="2" value="00" id="importoDec" style="width:auto" class="form-control">&nbsp;EUR
			</div>
		</div>
		</div>
		
		<div class="form-field-input col-xs-12 col-sm-4">
				<label class="control-label">Numero conto corrente postale</label>
				<input type="text" name="numeroCCPostale" maxlength="12" size="20" value="" id="numeroCCPostale" class="form-control">
				<label for="dataEsecuzione" class="control-label">Data esecuzione
				
				




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: utenze&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>

				</label>
				<input type="text" name="dataEsecuzione" size="12" value="06/04/2017" id="dataEsecuzione" class="datepicker form-control floatl-marginr10 wauto" />
			</div>
		<div class="form-field-input col-xs-12 col-sm-4">
			<label class="control-label">Codice Bolletta
			 	<a href="#" onclick="javascript:ApriPopup('/HT/IMAGES/PAGAMENTI/BOL/BOLLETTA.gif',450,275,'popup')" class="hidden-xs"><img src="/HT/fe/img/i_dettaglio.gif" height="14" width="14" title="Dettaglio" alt="Dettaglio"></a>
			</label>
			<div class="form-field">
				<input type="text" name="codice" maxlength="18" size="29" value="" id="codice" class="form-control form-control-fixed-width">
			  
			</div>
		</div>

		</div>
	</div>
	
</div>

	<div class="section clearfix">
		






<script type="text/javascript">
	var popolaEmail = function(email) {
		$('#email').val(email);
	}
	$(function() {
		var urlAjax = /*getPathContext()+*/ '/template/modale_modifica_contatti.php?popup=true'
		$('#contatti').ajaxDialog('dialog', urlAjax, { title:'Modifica contatti' });
		if ($('#email').val()=='')
			$('#email').val("Inserisci e-mail");
	});
</script>

	<h3 class="titleSection">Notifica all'ordinante</h3>
	<div class="bs-example form-horizontal">
	<div class="form-group">
		<div class="form-field-input col-sm-6 col-xs-12">
			<div class="form-field-input">
				<label class="control-label">
					La notifica viene inviata nel caso in cui l'ordine non vada a buon fine. Per ricevere la notifica anche in caso di esito positivo accedi alla sezione Alert-&gt;conto
				</label>
			</div>
		</div>
		<div class="form-field-input col-sm-6 col-xs-12">
			<div class="form-field-input">
				<label class="control-label">
					
					Indirizzo e-mail




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: utenze&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>

				</label>
				<div class="form-field">
					<div class="form-field-input col-sm-10 col-xs-12"> 
						<input type="text" name="email" maxlength="60" value="luca@gmail.com" readonly="readonly" id="email" class="form-control">
					</div>
					<div class="form-field-input col-sm-2 hidden-xs">
						<input type="button" name="contatti" value="&nbsp;" id="contatti" class="btnEdit">
					</div>
				</div>
			</div>
		</div>
	</div></div>

	</div>
						
</div>

<div class="pull-right margin-bottom20">
<input type="button" name="avanti" value="Avanti" onclick="$('#formBolletta').submit()" class="btn btn-primary" alt="Avanti">
</div>
</form>