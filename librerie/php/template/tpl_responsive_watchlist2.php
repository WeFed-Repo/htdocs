<h2>Tutte le watchlist</h2>
<section>
	<p>Puoi modificare la watchlist, inserendo nuovi titoli.</p>
	<form class="formGenerico borderFormRounded" role="form" id="form02">
			<div class="form-group">			
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<label class="control-label">Titolo</label>					
						<div class="editable-input"><input type="text" name="titolo" value="" class="form-control clear-x" autocomplete="off" placeholder="ISIN, simbolo, descrizione"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<label class="control-label">Mercato</label>
						<select class="form-control">
							<option>tutti</option>
							<option>lorem</option>
						</select>
					</div>
					<div class="col-xs-12 col-sm-4 no-label">
						<div class="btn-align-left">
							<a type="button" class="btn btn-primary" href="javascript:;" id="btnCerca">Cerca</a>
						</div>
					</div>
					
				</div>
			</div>
	</form>
</section>
<section class="formGenerico">
	<h4>Watchlist &quot;Watchlist standard&quot;</h4>
	<table>
		<tbody>
			<tr class="dispari">
				<td>BDB</td>
				<td>BANCO DI DESIO E BRIANZA</td>
				<td>MTA</td>
				<td class="center" width="20">
					<div class="checkbox"><label class="textWrapper"><input type="checkbox" name="" id=""><span class="text"></span></label></div>
		        </td>
			</tr>
			<tr class="pari">
				<td>FCA</td>
				<td>FIAT CHRYSLER AUTOMOBILES - ORDINARY SHARES EURO</td>
				<td>MTA</td>
				<td class="center" width="20">
					<div class="checkbox"><label class="textWrapper"><input type="checkbox" name="" id=""><span class="text"></span></label></div>
		        </td>
			</tr>
			<tr class="dispari">
				<td>BDB</td>
				<td>Option E-mini SP 500 2nd Friday 02-17 CALL 1000</td>
				<td>MTA</td>
				<td class="center" width="20">
					<div class="checkbox"><label class="textWrapper"><input type="checkbox" name="" id=""><span class="text"></span></label></div>
		        </td>
			</tr>
		</tbody>
	</table>
	<div class="form-group btnWrapper clearfix">	
		<div class="btn-align-right">
			<a type="button" class="btn btn-disabled">conferma rimozione</a>
		</div>
	</div>
	<div class="form-group btnWrapper">	
		<hr>
		<div class="btn-align-left">
			<a type="button" class="btn btn-primary" id="">lista watchlist</a>
		</div>
		<div class="btn-align-right">
			<a type="button" class="btn btn-disabled" id="">elimina watchlist</a>
		</div>
		<br class="clear">
	</div>
</section>

<!--EMULAZIONE ERRORE RICERCA E SUCCESSIVA ABILITAZIONE CAMPI -->
<script>
$('#btnCerca').click(function(index){
	$(function () {
			var errors = [],
				titolo = $("#titolo");
			if (titolo.val() === '') {
				errors.push({ field: titolo, text: "Inserisci almeno un carattere nel campo titolo" });
			}
			setHasErrors(errors, "#form01");
			if (errors.length) {
				$(errors[0].field).trigger('focus');
			}
			else{
				$('#risulatiTitoli').modal('show');
				$('#tableRicercaTitoli').bootstrapTable({data: dataRicerca.vetTitoli});
			}
			return (!errors.length);
		})
				
})

function setRadioRicerca(value, row, index, options){
	return '<div class="radio"><label><input id="radioRicercaTitolo' + index + '"' +'type="radio" name="radioRicercaTitolo" value="' + index +'"><span></span></label></div>'
}

//emulazione json ricerca titoli
//var dataRicerca = {"isEsito":"true","codEsito":"100","vetTitoli":[{"descrizione":"BANCA CARIGE ORD","desc_mercato":"NO FTMIB SHARES","codice_mnemonico":"CRG","borsa":"MI","stock_code":"961543","isin":"IT0005108763","mercato":"EQCON"},{"descrizione":"BANCA CARIGE RSP","desc_mercato":"MTA INSTR. NO MO","codice_mnemonico":"CRGR","borsa":"MI","stock_code":"961544","isin":"IT0005108771","mercato":"EQCON"},{"descrizione":"BANCA FINNAT","desc_mercato":"STAR","codice_mnemonico":"BFE","borsa":"MI","stock_code":"127","isin":"IT0000088853","mercato":"EQCON"},{"descrizione":"BANCA GENERALI","desc_mercato":"NO FTMIB SHARES","codice_mnemonico":"BGN","borsa":"MI","stock_code":"122721","isin":"IT0001031084","mercato":"EQCON"},{"descrizione":"BANCA IFIS","desc_mercato":"STAR","codice_mnemonico":"IF","borsa":"MI","stock_code":"38796","isin":"IT0003188064","mercato":"EQCON"},{"descrizione":"BANCA INTERMOBILIARE","desc_mercato":"NO FTMIB SHARES","codice_mnemonico":"BIM","borsa":"MI","stock_code":"199","isin":"IT0000074077","mercato":"EQCON"},{"descrizione":"BANCA MPS","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BMPS","borsa":"MI","stock_code":"961858","isin":"IT0005092165","mercato":"EQCON"},{"descrizione":"BANCA POP EMILIA ROMAGNA","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BPE","borsa":"MI","stock_code":"132","isin":"IT0000066123","mercato":"EQCON"},{"descrizione":"BANCA POPOLARE DI MILANO","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"PMI","borsa":"MI","stock_code":"20","isin":"IT0000064482","mercato":"EQCON"},{"descrizione":"BANCA POPOLARE SONDRIO","desc_mercato":"NO FTMIB SHARES","codice_mnemonico":"BPSO","borsa":"MI","stock_code":"30","isin":"IT0000784196","mercato":"EQCON"},{"descrizione":"BANCA PROFILO","desc_mercato":"NO FTMIB SHARES","codice_mnemonico":"PRO","borsa":"MI","stock_code":"2138","isin":"IT0001073045","mercato":"EQCON"},{"descrizione":"BANCA SISTEMA SPA","desc_mercato":"STAR","codice_mnemonico":"BST","borsa":"MI","stock_code":"973658","isin":"IT0003173629","mercato":"EQCON"},{"descrizione":"MEDIOBANCA","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"MB","borsa":"MI","stock_code":"131","isin":"IT0000062957","mercato":"EQCON"},{"descrizione":"UBI BANCA","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"UBI","borsa":"MI","stock_code":"66834","isin":"IT0003487029","mercato":"EQCON"}],"numValues":"14","msgEsito":" "}
var dataRicerca = {"isEsito":"true","codEsito":"100","vetTitoli":[{"descrizione":"BANCA POP EMILIA ROMAGNA","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BPE","borsa":"MI","stock_code":"132","isin":"IT0000066123","mercato":"EQCON"},{"descrizione":"BANCA POPOLARE DI MILANO","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"PMI","borsa":"MI","stock_code":"20","isin":"IT0000064482","mercato":"EQCON"},{"descrizione":"BANCA POPOLARE SONDRIO","desc_mercato":"NO FTMIB SHARES","codice_mnemonico":"BPSO","borsa":"MI","stock_code":"30","isin":"IT0000784196","mercato":"EQCON"},{"descrizione":"BANCO POPOLARE","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BP","borsa":"MI","stock_code":"853192","isin":"IT0005002883","mercato":"EQCON"},{"descrizione":"BANCO POPOLARE BPM","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BP","borsa":"MI","stock_code":"1086795","isin":"IT0005002883","mercato":"EQCON"},{"descrizione":"BANCO POPOLARE BPM 2015 NO TAX","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BP","borsa":"MI","stock_code":"1086801","isin":"IT0005002883","mercato":"EQCON"},{"descrizione":"BANCO POPOLARE BPM 2015 SI TAX","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BP","borsa":"MI","stock_code":"1086800","isin":"IT0005002883","mercato":"EQCON"},{"descrizione":"BANCO POPOLARE BPM 2016 NO TAX","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BP","borsa":"MI","stock_code":"1086794","isin":"IT0005002883","mercato":"EQCON"},{"descrizione":"BANCO POPOLARE BPM 2016 SI TAX","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BP","borsa":"MI","stock_code":"1086798","isin":"IT0005002883","mercato":"EQCON"}],"numValues":"9","msgEsito":" "}
</script>
<!--overlayer risultati -->
<div class="modal fade slide-right" id="risulatiTitoli" tabindex="-1" role="dialog" aria-labelledby="risulatiTitoli">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="risulatiTitoli">Risultati della ricerca</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<section>
								<table cellpadding="0" cellspacing="0" id="tableRicercaTitoli" class="formGenerico" >
									<thead>
										<tr>
											<th class="center" data-field="radio" data-formatter="setRadioRicerca"></th>
											<th data-field="descrizione" class="left">Descrizione</th>
											<th data-field="isin">Codice ISIN</th>
										</tr>
									</thead>
								</table>


								<div class="form-group btnWrapper">
								    <div class="btn-align-right">
								        <a type="button" class="btn btn-primary" id="" href="javascript:;"  onclick="unObscurateElement('#fieldsInsOrd');$('#ultimoPrezzoInfo,#tableTit').show()" data-dismiss="modal" role="button" title="Conferma ricerca">conferma</a>
								    </div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
