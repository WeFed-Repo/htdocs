<!-- SELETTORE RAPPORTO -->
<section>
	<form id="" method="post" action="">
		<div class="selezioneCC tabellaSelezioneCC">
			<h3 class="titleSection">Rapporto selezionato
				<a id="selezionaCC" class="btnSelezioneCC no-underline btn-icon" href="javascript:void(0);" title="seleziona rapporto" role="button" aria-pressed="false">
					<i class="icon icon-3x icon-accordion_down"></i>
					<i class="icon icon-3x icon-accordion_up"></i>
				</a>
			</h3>
			<div class="CCselezionato">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<div class="row">
							<span class="col-xs-6" id="labelIntestatario">Intestato a:</span>
							<span class="col-xs-6 output" id="intestazione">lorem ispum dolor sit lorem ipsum dolor</span>
						</div>
						<div class="row">
							<span class="col-xs-6" id="conto">Conto corrente</span>
							<span class="col-xs-6 output" id="numero">00000000</span>
						</div>
						<div class="row">
						   <span class="col-xs-6">
						    	Filiale:
						    </span>
					    	<span class="col-xs-6 output" id="agenzia">MILANO&nbsp;-&nbsp;2070</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6" id="numeri">
						<div class="row">
							<span class="col-xs-6">Saldo disponibile:</span>
							<span class="col-xs-6 output" id="disponibile"> <strong class="positivo">  88,00</strong></span>
						</div>
						<div class="row">
							<span  class="col-xs-6">Saldo contabile:</span>
							<span class="col-xs-6 output" id="contabile"><strong>- 88,00</strong></span>
						</div>
						<div class="row">
							<span class="col-xs-6">Affidamento:</span>
							<span class="col-xs-6 output" id="affidamento"><strong>0,00</strong></span>
						</div>
					</div>
				</div>
			</div>
			<div class="tabSelezioneCC" style="display: none;">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
					<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer">
						<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer"><table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
							<thead>
								<tr class="hover" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento decrescente" aria-sort="ascending">&nbsp;</th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th><th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th><th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th><th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th><th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="affidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Affidamento: ordinamento crescente">Affidamento</th><th headers="divisaSaldoAffidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="saldoIstantaneo" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Saldo Contabile: ordinamento crescente">Saldo Contabile</th><th headers="saldoDisponibile" class="hidden-xxs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Saldo Disponibile
								: ordinamento crescente">Saldo Disponibile
								</th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th></tr>
							</thead>
							<tbody>
							
							
							<tr role="row" class="odd">
								<td class="hidden sorting_1" style="text-align: center">
									<input type="radio" name="codContoCorrente" value="001|2070|207000000000" checked="checked">
								</td>
								<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2070|207000000000" checked="checked" onclick="submit();"></td>
								<td headers="tipoRapporto">Conto corrente</td>
								<td headers="ccRapporto">00000000</td>
								<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp;2070</td>
								<td headers="intestazioneRapporto">lorem ispum dolor sit lorem ipsum dolor</td>
								<td headers="divisaSaldoDisponibile" class="hidden"> EUR</td>
								<td headers="divisaSaldoContabile" class="hidden"> EUR</td>
								<td headers="affidamento" class=" hidden oRight">0,00 EUR</td>
								<td headers="divisaSaldoAffidamento" class="hidden">EUR</td>
								<td headers="saldoIstantaneo" class="hidden oRight">-88,00<span> EUR</span></td>
								<td headers="saldoDisponibile" class="oRight  hidden-xxs">88,00<span class="hidden-xs"> EUR</span></td>
								<td class="hidden">&nbsp;</td>
							</tr><tr role="row" class="even">
								<td class="hidden sorting_1" style="text-align: center">
									<input type="radio" name="codContoCorrente" value="001|2070|207000000000">
								</td>
								<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2070|207000000000" onclick="submit();">
								</td>
								<td headers="tipoRapporto">Conto deposito</td>
									<td headers="ccRapporto">00000000</td>
									<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp;2070</td>
									<td headers="intestazioneRapporto">Cognome Nome</td>
									<td headers="divisaSaldoDisponibile" class="hidden">EUR</td>
									<td headers="divisaSaldoContabile" class="hidden">EUR</td>
									<td headers="affidamento" class=" hidden oRight">0,00EUR</td>
									<td headers="divisaSaldoAffidamento" class="hidden">EUR</td>
									<td headers="saldoIstantaneo" class="hidden oRight">5,00<span>EUR</span></td>
									<td headers="saldoDisponibile" class="oRight  hidden-xxs">5,00<span class="hidden-xs">EUR</span></td>
									<td class="hidden">&nbsp;</td>
								</tr></tbody>
						</table></div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
			//se il conto è gia stato selezionato devo popolarlo via javascript, il default non va bene

			var tr = $("input[name='codContoCorrente']:checked").closest('tr');
					//popolo con i dati nella riga
					contoSelezionato = initContoSelezionato(tr);

					popolaSelezioneCC(contoSelezionato);


			 var submitOnClick = false; 
			 var str = $('#intestazione').text();
			/*if($.trim(str).length>26){
				$('#intestazione').removeClass('col-xs-6'); 
				$('#intestazione').addClass('col-xs-10');
				$('#labelIntestatario').addClass('hide');
			}*/
			submitOnClick = true;
			//se i rapporti sono maggiori di 8 deve essere fatta la paginazione
			CCselectionInit(submitOnClick, false, false);
			})
		</script>
	</form>
</section>