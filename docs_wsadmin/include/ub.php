<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>
<style type="text/css">
		@import url(/wscmn/css/priv_calendar.css);
</style>
<script type="text/javascript">	
	$(function () {
				$("#datepickerFrom,#datepickerTo").datepicker({
					showOn: "button",
					buttonImage: "/img/btn_pickdate_priv.gif",
					buttonImageOnly: true,
					minDate: 1,
					//MxDate fissata solo come esempio
					maxDate: "+1M +10D",
					//fissare maxDate alla scadenza del certificato
					dateFormat: "dd/mm/yy",
					showOtherMonths: true
					
				});
			});
	
</script>
<div class="wtcontent">
	<h2>Bonifici in ingresso conto tecnico</h2>
	<form>
		<table class="inputtable bonificict" cellpadding="0" cellspacing="0" >	
			<tr>
				<td>
					<fieldset>
						<label>Stato</label>
						<select>
							<option selected value="">Bonifici IN (KO)</option>
						</select>
					</fieldset>
					<fieldset>
						<label>Periodo</label>
						<span class="fromDate">da</span>
						<div class="datepickerWrapper"><input type="text" id="datepickerFrom" class="withIco" value="07/12/1978"></div>
						<!--<script type="text/javascript">
							DatePickerControl.createDp ('datepicker1',"07/12/1978");
						</script>-->
						<span class="toDate">a</span> 
						<div class="datepickerWrapper"><input type="text" id="datepickerTo" class="withIco"></div>
						<!--<script type="text/javascript">
							DatePickerControl.createDp ('datepicker2');
						</script>-->
					</fieldset>
				</td>
			</tr>
		</table>
		<div class="buttonpanel">
			<a href="#" class="button">Aggiorna lista</a>
		</div>
	</form>
	<br class="clear">
	<h3>Elenco trasferimenti - Bonifici in ingresso in stato KO dal gg/mm/aaaa al gg/mm/aaaa</h3>
	<table class="inputtable bonificict nobottom" cellpadding="0" cellspacing="0" >	
		<tr>
			<td width="50%">
				<fieldset>
					<label>Importo totale</label>
					<span class="output">XXX.999.999,99</span>
				</fieldset>
			</td>
			<td>
				<fieldset>
					<label>N. bonifici</label>
					<span class="output">XXX</span>
				</fieldset>
			</td>
		</tr>
	</table>
	
	<table id="tb-bonifici" class="sortable resulttable notop" cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th class="sort" id="th-data" sort="data">Data richiesta</th><!-- orderup on -->
				<th class="sort" id="th-importo" sort="number">Importo</th>
				<th class="sort" id="th-ct" sort="default">Conto tecnico</th><!-- orderdown on -->
				<th class="sort" id="th-ndg" sort="default">NDG conto</th>
				<th class="sort" id="th-intestazione" sort="default">Intestazione controparte</th>
				<th class="sort" id="th-intermediario" sort="default">Nome intermediario</th><!-- orderup -->
				<th class="sort" id="th-punteggio" sort="number">Punteggio</th>
				<th class="sort" id="th-motivo" sort="default">Motivo</th><!-- orderdown -->
				<th>Causale</th>
				<th>Cambia stato</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="col-data">01/05/2012</td>
				<td class="col-importo right">9,99</td>
				<td class="col-ct">XXXXXXXXXXXXX</td>
				<td class="col-ndg">//</td>
				<td class="col-intestazione">//</td>
				<td class="col-intermediario">WEBANK S.P.A.</td>
				<td class="col-punteggio right"><span class="pos">80</span></td>
				<td class="col-motivo">Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. </td>
				<td><a class="ppopener" href="javascript:;" onclick="openPopup('/popup.php')">dettagli</a></td>
				<td class="center"><a href="/index.php?layout=int&page=ub_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
			</tr>
			<tr>
				<td class="col-data">01/02/2012</td>
				<td class="col-importo right">9.999,99</td>
				<td class="col-ct">XXXXXXXXXXXXX</td>
				<td class="col-ndg">//</td>
				<td class="col-intestazione">//</td>
				<td class="col-intermediario">WEBANK S.P.A.</td>
				<td class="col-punteggio right"><span class="neg">0</span></td>
				<td class="col-motivo">Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude</td>
				<td><a class="ppopener" href="javascript:;" onclick="openPopup('/popup.php')">dettagli</a></td>
				<td class="center"><a href="/index.php?layout=int&page=ub_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
			</tr>
			<tr>
				<td class="col-data">10/05/2012</td>
				<td class="col-importo right">0,99</td>
				<td class="col-ct">XXXXXXXXXXXXX</td>
				<td class="col-ndg">//</td>
				<td class="col-intestazione">//</td>
				<td class="col-intermediario">WEBANK S.P.A.</td>
				<td class="col-punteggio right"><span class="pos">90</span></td>
				<td class="col-motivo">Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude</td>
				<td></td>
				<td class="center"><a href="/index.php?layout=int&page=ub_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
			</tr>
			<tr>
				<td class="col-data">01/04/2012</td>
				<td class="col-importo right">99,99</td>
				<td class="col-ct">XXXXXXXXXXXXX</td>
				<td class="col-ndg">//</td>
				<td class="col-intestazione">//</td>
				<td class="col-intermediario">WEBANK S.P.A.</td>
				<td class="col-punteggio right"><span class="warn">50</span></td>
				<td class="col-motivo">Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude</td>
				<td></td>
				<td class="center"><a href="/index.php?layout=int&page=ub_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
			</tr>
			<tr>
				<td class="col-data">01/01/2012</td>
				<td class="col-importo right">99.999,99</td>
				<td class="col-ct">XXXXXXXXXXXXX</td>
				<td class="col-ndg">//</td>
				<td class="col-intestazione">//</td>
				<td class="col-intermediario">WEBANK S.P.A.</td>
				<td class="col-punteggio right"><span class="neg">0</span></td>
				<td class="col-motivo">Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude</td>
				<td></td>
				<td class="center"><a href="/index.php?layout=int&page=ub_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
			</tr>
			<tr>
				<td class="col-data">01/03/2012</td>
				<td class="col-importo right">999,99</td>
				<td class="col-ct">XXXXXXXXXXXXX</td>
				<td class="col-ndg">//</td>
				<td class="col-intestazione">//</td>
				<td class="col-intermediario">WEBANK S.P.A.</td>
				<td class="col-punteggio right"><span class="warn">50</span></td>
				<td class="col-motivo">Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude</td>
				<td></td>
				<td class="center"><a href="/index.php?layout=int&page=ub_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
			</tr>
		</tbody>
	</table>
</div>

<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript">
var bonificiTB = null;

// Crea la tabella ordinabile e paginabile
document.observe("dom:loaded", function () {
	bonificiTB = new TableOrderer('bonifici', {});
	bonificiTB.orderTable('data', 'asc');
});
</script>

<div class="wtcontent">
	<br class="clear">
	<table cellspacing="0" cellpadding="0" class="inputtable">
		<tbody>
			<tr>
				<th colspan="2">Inserisci i parametri di ricerca</th>
			</tr>
			<tr>
				<td>
					<fieldset>
						<label>PERIODO ATTIVAZIONE POLIZZA</label>
						<span class="fromDate">da</span>
						<div class="datepickerWrapper">
							<input class="withIco hasDatepicker" id="polFromDate" name="polFromDate" type="text"><img class="ui-datepicker-trigger" src="/img/btn_pickdate_priv.gif" alt="..." title="...">
						</div>
						<span class="toDate">a</span>
						<div class="datepickerWrapper">
							<img class="ui-datepicker-trigger" src="/img/btn_pickdate_priv.gif" alt="..." title="...">
						</div>
					</fieldset>
					<fieldset>
						<label>PERIODO QUIETANZA POLIZZA</label>
						<span class="fromDate">da</span>
						<div class="datepickerWrapper">
							<input class="withIco hasDatepicker" id="rataFromDate" name="rataFromDate" type="text"><img class="ui-datepicker-trigger" src="/img/btn_pickdate_priv.gif" alt="..." title="...">
						</div>
						<span class="toDate">a</span>
						<div class="datepickerWrapper">
							<img class="ui-datepicker-trigger" src="/img/btn_pickdate_priv.gif" alt="..." title="...">
						</div>
					</fieldset>
					<!--checkbox in tabella -->
					<fieldset class="fieldsetElencoInput">
						<div>
							<label>TIPO POLIZZA</label>
						</div>
						<div>	
							<ul>						
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span>
								</li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span>
								</li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
							</ul>
						</div>
					</fieldset>
					<fieldset class="fieldsetElencoInput">
						<div>
							<label>TIPO POLIZZA</label>
						</div>
						<div>	
							<ul>						
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span>
								</li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span>
								</li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
							</ul>
						</div>
					</fieldset>
					
				</td>
				<td>
					<fieldset>
						<label>NUMERO POLIZZA</label> <input type="text" value="" size="40" name="idPolizza">
					</fieldset>
					<fieldset class="fieldsetElencoInput">
						<div>
							<label>TIPO POLIZZA</label>
						</div>
						<div>	
							<ul>						
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span>
								</li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span>
								</li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
							</ul>
						</div>
					</fieldset>
					<fieldset class="fieldsetElencoInput">
						<div>
							<label>TIPO POLIZZA</label>
						</div>
						<div>	
							<ul>						
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span>
								</li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span>
								</li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
							</ul>
						</div>
					</fieldset>
					<fieldset class="fieldsetElencoInput">
						<div>
							<label>TIPO POLIZZA</label>
						</div>
						<div>	
							<ul>						
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span>
								</li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span>
								</li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
								<li>
									<input class="" type="checkbox" value="60101" name="rataPromoP">
									<span>Protezione contraente</span></li>
							</ul>
						</div>
					</fieldset>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="buttonpanel">
		<a href="javascript:cerca();" class="button">CERCA</a>
	</div>
	<br class="clear">
	<table class="resulttable notop" cellspacing="0" cellpadding="0">
		<tbody><tr>
			<th>NUM POLIZZA</th>
			<th>ID UTENTE</th>
			<th>TIPO POLIZZA</th>
			<th>NOME</th>
			<th>COGNOME</th>
			<th>CANALE</th>
			<th>STATO</th>
			<th>DATA ADESIONE</th>
			<th>DATA CHIUSURA</th>
			<th>AGENZIA</th>
			<th>CONTO CORRENTE</th>
			<th>IMPORTI ADDEBITATI</th>
			<th>TIPO RATA</th>
			<th>ESITO RATA</th>
			<th>RATA PROMO</th>
		</tr>
	
	</tbody></table>
</div>