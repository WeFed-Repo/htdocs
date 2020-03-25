<h2>Confronta carte</h2>
<section>
	<form>
		<div class="form-group scrollFocus" id="aggiornaCarte">
			<div class="row">
				<div class="col-xs-4 align-center">
					<label class="confronta-carte">
						<span class="cartaOne"></span>
						<input type="checkbox" data-column="cartaOneTitle" value="nav_priv_wbx_compara_carte_cartiprOne">
						<p class="note">CARTIMPRONTA ONE</p>
					</label>
				</div>
				<div class="col-xs-4 align-center">
					<label class="confronta-carte">
						<span class="cartaGold"></span>
						<input type="checkbox" data-column="cartaGoldTitle">
						<p class="note">CARTIMPRONTA GOLD PLUS</p>
					</label>
				</div>
				<div class="col-xs-4 align-center">
					<label class="confronta-carte">
						<span class="cartaJeans"></span>
						<input type="checkbox" data-column="cartaJeansTitle">
						<p class="note">CARTA JE@NS</p>
					</label>
				</div>
			</div>
		</div>
	</form>
</section>
<section>
	<div id="tabellaComparazione" class="comparazioneFocus">
		<table cellspacing="0" cellpadding="0" border="0" id="confrontaTable">
				<thead>
					<tr>
						<th data-field="primaColonna" width="20%">&nbsp;</th>
						<th id="bancomatTitle" data-field="bancomatTitle" width="20%">Bancomat</th>
						<th data-field="cartaOneTitle" width="20%">&nbsp;</th>
						<th data-field="cartaGoldTitle" width="20%">&nbsp;</th>
						<th data-field="cartaJeansTitle" width="20%">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<tr class="titoloCaption visible-xs">
						<td>Caratteristiche principali</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="titoloCaption hidden-xs">
						<td colspan="5">Caratteristiche principali</td>
					</tr>
					<tr>
						<td>Tipologia</td>
						<td>Carta di debito</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="titoloCaption visible-xs">
						<td>Condizioni economiche</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="titoloCaption hidden-xs">
						<td colspan="5">Condizioni economiche</td>
					</tr>
					<tr>
						<td>Canone annuo</td>
						<td>Gratuito</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Costo prelievo ATM</td>
						<td>&euro; 0 in tutti gli sportelli ATM dell'area EURO; 2% del controvalore (con importo minimo di &euro; 3,62) con 1% di maggiorazione per il tasso di cambio nei Paesi Extra Euro</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Costo anticipo contante</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					
					<tr>
						<td>Plafond</td>
						<td>Max &euro; 7.750</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					
					<tr class="titoloCaption visible-xs">
						<td>Servizi e Benefici</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="titoloCaption hidden-xs">
						<td colspan="5">Servizi e Benefici</td>
					</tr>
					<tr>
						<td>Utilizzo online</td>
						<td class="align-center"><i class="icon icon-alert_error icon-2x stato-ko"></i></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>carta aggiuntiva</td>
						<td class="align-center"><i class="icon icon-alert_ok icon-2x stato-ok"></i></i></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Promozioni e Programmi fedelt&agrave;</td>
						<td class="align-center"><i class="icon icon-alert_ok icon-2x stato-ok"></i></td>
						<td class="align-center"></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td class="align-center"><div class="form-group btnWrapper">
			<div><a type="button" class="btn btn-primary btn-small" id="">richiedi ora</a></div></div><a href="">leggi di pi&ugrave;</a></td>
						<td class="align-center"></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
		</table>
	</div>
</section>



<script>
 var $table = $('#confrontaTable');
	$(function () {
	if(isSmallDevice){
	 	$table.bootstrapTable();
	 	 $table.bootstrapTable('mergeCells', {
			index: 0,
			field: 'primaColonna',
			colspan: 5
		 })
		 $table.bootstrapTable('mergeCells', {
			index: 2,
			field: 'primaColonna',
			colspan: 5
		 })
		  $table.bootstrapTable('mergeCells', {
			index: 5,
			field: 'primaColonna',
			colspan: 5
		 })
	 }
	 $('.confronta-carte input[type=checkbox]').click(function () {
   			var el = $(this),
   				valori = "nav_priv_wbx_compara_carte_bancomat,";
   			if (el.prop('checked')) {
   				el.closest('.confronta-carte').addClass('selected');
   			} else {
   				el.closest('.confronta-carte').removeClass('selected');
   			}
   			
			$('#aggiornaCarte').find("input:checked").each(function (index,checkBox){
				valori = valori + jQuery(checkBox).val() +",";
			});
   			$.ajax({
       		url: '/librerie/include/commons/ajax/confrontaCarte.html',
       		dataType: 'html',
			data: {elencoCarte:valori},
       		success: function(data) {
	       			$table.html(data);
	       		}
       		})

   	});

	});

</script>

