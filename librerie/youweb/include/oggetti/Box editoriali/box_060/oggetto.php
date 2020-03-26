
<form id="formMovimentiConto2" method="post" action="/WEBHT/cc/movimentiConto.do">
      <div class="section clearfix">
         <h3 class="titleSection">
            Rapporto selezionato
         </h3>

<div class="selezioneCC tabellaSelezioneCC">
	<div class="CCselezionato clearfix">
		<!-- C'è anche la sezione saldo -->
		<div class="col-sm-6 col-xs-12">
			<span class="col-xs-4 col-xs-4" id="labelIntestatario">
			Label:
			</span>
			<span class="col-xs-6" id="intestazione">
			Dato di output 		
			</span>
			<span class="col-xs-4" id="conto">
			Lorem ipsum dolor sit amet
			</span>
			<span class="col-xs-6" id="numero">consectetuer adipiscing elit</span>
			<span class="col-xs-4">
			Lorem ipsum dolor sit amet:
			</span>
			<span class="col-xs-6" id="agenzia">consectetuer adipiscing elit
			</span>
		</div>
		<div class="col-xs-12 col-sm-6" id="numeri">
			<span id="disponibile">
				Label:
				<strong>
				Dato di output
				</strong>
				<!-- Multivaluta Visualizza -->
				<!-- Multivaluta Visualizza fine -->
			</span>
			<span id="contabile"> 
			Lorem ipsum dolor sit amet: 
			<strong>
			consectetuer adipiscing elit
			</strong>
			</span>
			<span id="affidamento"> 
			Lorem ipsum dolor sit amet: 
			<strong>
			consectetuer adipiscing elit
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
			<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer">
				<table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
					<tbody>
						<tr role="row" class="odd">
							<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2070|207000000000" checked="checked"></td>
							<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2070|207000000000" checked="checked" onclick="submit();"></td>
							<td headers="tipoRapporto">consectetuer adipiscing elit</td>
							<td headers="ccRapporto">consectetuer adipiscing elit</td>
							<td headers="filialeRapporto" class="hidden-xs">consectetuer adipiscing elit</td>
							<td headers="intestazioneRapporto">consectetuer adipiscing elit</td>
							<td headers="divisaSaldoDisponibile" class="hidden">EUR</td>
							<td headers="divisaSaldoContabile" class="hidden">EUR</td>
							<td headers="affidamento" class=" hidden oRight">consectetuer adipiscing elit</td>
							<td headers="divisaSaldoAffidamento" class="hidden">EUR</td>
							<td headers="saldoIstantaneo" class="hidden oRight">consectetuer adipiscing elit<span>EUR</span></td>
							<td headers="saldoDisponibile" class="oRight  hidden-xxs">consectetuer adipiscing elit<span class="hidden-xs">EUR</span></td>
							<!-- Multivaluta -->
							<!-- Multivaluta fine -->
							<td class="hidden">&nbsp;</td>
						</tr>
						<tr role="row" class="even">
							<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0898|089800911819"></td>
							<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0898|089800911819" onclick="submit();"></td>
							<td headers="tipoRapporto">consectetuer adipiscing elit</td>
							<td headers="ccRapporto">consectetuer adipiscing elit</td>
							<td headers="filialeRapporto" class="hidden-xs">consectetuer adipiscing elit</td>
							<td headers="intestazioneRapporto">consectetuer adipiscing elit</td>
							<td headers="divisaSaldoDisponibile" class="hidden">EUR</td>
							<td headers="divisaSaldoContabile" class="hidden">EUR</td>
							<td headers="affidamento" class=" hidden oRight">consectetuer adipiscing elit EUR</td>
							<td headers="divisaSaldoAffidamento" class="hidden">EUR</td>
							<td headers="saldoIstantaneo" class="hidden oRight">consectetuer adipiscing elit <span>EUR</span></td>
							<td headers="saldoDisponibile" class="oRight  hidden-xxs">consectetuer adipiscing elit <span class="hidden-xs">EUR</span></td>
							<!-- Multivaluta -->
							<!-- Multivaluta fine -->
							<td class="hidden">&nbsp;</td>
						</tr>
					</tbody>
					<thead>
						<tr class="hover" role="row">
							<th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th>
							<th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th>
							<th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Titolo 01</th>
							<th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Titolo 02</th>
							<th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Titolo 03</th>
							<th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Titolo 04</th>
							<th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th>
							<th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th>
							<th headers="affidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Affidamento: ordinamento crescente">Titolo 05</th>
							<th headers="divisaSaldoAffidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th>
							<th headers="saldoIstantaneo" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Saldo Contabile: ordinamento crescente">Titolo 06</th>
							<th headers="saldoDisponibile" class="hidden-xxs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Saldo Disponibile: ordinamento crescente">Titolo 07</th>
							<th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
</form>
