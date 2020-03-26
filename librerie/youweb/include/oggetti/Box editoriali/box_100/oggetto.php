<div class="section clearfix">
	<form id="listaContiAppoggio" method="post" action="/WEBHT/cd/listaContiAppoggio.do" class="form-horizontal">
		<div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="32d4a420453aeaebe366e301792684da"></div>
		<h3 class="titleSection">
			Lorem ipsum dolor sit amet
		</h3>

		<div class="selezioneCC tabellaSelezioneCC">
			<div class="CCselezionato clearfix">
<!-- C'è anche la sezione saldo -->
<!-- C'è solo la sezione intestatario -->
				<div class="col-sm-6 col-xs-12">
					<span class="col-xs-4" id="labelIntestatario">Label:</span>
					<span class="col-xs-6" id="intestazione">Cognome Nome</span>
					<span class="col-xs-4" id="conto">Conto deposito</span>
					<span class="col-xs-6" id="numero">00000000</span>
				</div>
				<div class="col-sm-6 col-xs-12">
					<span class="col-xs-4 hidden-xs" id="conto">&nbsp;</span>
					<span class="col-xs-6 hidden-xs" id="conto">&nbsp;</span>
					<span class="col-xs-4">consectetuer adipiscing elit:</span>
					<span class="col-xs-6" id="agenzia">MILANO&nbsp;-&nbsp; 2070</span>
				</div>
			</div>
			<div class="tabSelezioneCC" style="display: none;">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
					<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer">
						<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer">
							<table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
							<tbody>
							<tr role="row" class="odd">
								<td class="hidden sorting_1">&nbsp;<input type="hidden" name="codContoCorrente" value="001|2070|207000000000"></td>
								<td headers="tipoRapporto">Conto deposito </td>
								<td headers="ccRapporto">00000000</td>
								<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp; 2070</td>
								<td headers="intestazioneRapporto">Cognome Nome</td>
								<td headers="divisaSaldoDisponibile" class="hidden"></td>
								<td headers="divisaSaldoContabile" class="hidden"></td>
								<td class="hidden">&nbsp;</td>
							</tr>
							</tbody>
							<thead>
							<tr class="hover" role="row">
								<th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento decrescente" aria-sort="ascending">&nbsp;</th>
								<th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th>
								<th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th>
								<th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th>
								<th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th>
								<th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th>
								<th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th>
								<th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th>
							</tr>
							</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- .selezioneCC.tabellaSelezioneCC -->
<script type="text/javascript">
$(document).ready(function(){
//se il conto è gia stato selezionato devo popolarlo via javascript, il default non va bene
var submitOnClick = false;
var str = $('#intestazione').text();
if($.trim(str).length>26){
	$('#intestazione').removeClass('col-xs-6');
	$('#intestazione').addClass('col-xs-10');
	$('#labelIntestatario').addClass('hide');
}
submitOnClick = true;
//se i rapporti sono maggiori di 8 deve essere fatta la paginazione	
CCselectionInit(submitOnClick, false, false);
})
</script>
	</form>
</div>
<div class="col-xs-12 col-sm-12">	
	<button class="btn btn-primary pull-right" onclick="$('#formGestContoAppoggio').submit()" style="margin-top: 10px;">
		Lorem ipsum  <span class="hidden-xs">dolor sit amet</span>
	</button>
</div>