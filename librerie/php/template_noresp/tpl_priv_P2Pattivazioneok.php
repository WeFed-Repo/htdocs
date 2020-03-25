<h1>LOREM IPSUM</h1>

<div class="boxesito positivo">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<div class="row-fluid">
				<div class="span12">
					<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
					et quas molestias excepturi  similiq</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="attivazioneWrapper" class="wrapperMessageLayer">
	<div class="borderFormRounded">
		<div class="formGeneric">
			<form id="form01">
				<!--RIGA DIVISA IN DUE CAMPI -->
				<div class="row">
					<div class="col-sm-6">
						<label class="nomefield">Conto Corrente</label>
						<select>
							<option>lorem</option>
							<option>lorem</option>
						</select>
					</div>
					<div class="col-sm-6">
						<label class="nomefield">Numero di telefono</label>
						<span class="output">+391234566</span>
					</div>
				</div>
			</form>
			<div class="aButtonconsRight">
				<span class="btnc"><a class="aButton" href="javascript:;"><span>prosegui</span></a></span>
			</div>
		</div>
	</div>
</div>

<br class="clear"><br>
<div class="borderFormRounded">
	<div class="formGeneric">
		<form>
			<div class="row">
				<div class="col-sm-3">
					<label class="nomefield">CONTO CC</label>
					<span class="output">XXXXXXXXXXXXXXXXX</span>
				</div>
				<div class="col-sm-3">
					<label class="nomefield">SALDO</label>
					<span class="output">10.000,45&euro;</span>
				</div>
				<div class="col-sm-3">
					<label class="nomefield">RESIDUO MENSILE</label>
					<span class="output">1.000,45&euro;</span>
				</div>
				<div class="col-sm-3">
					<label class="nomefield">RESIDUO GIORNALIERO</label>
					<span class="output">1.000,45&euro;</span>
				</div>
			</div>
		</form>
	</div>
</div>
<br class="clear"><br>
<div class="tithelp">
	<div class="helpleft">Lorem ispum</div>
</div>
<br class="clear"><br>
<div class="borderFormRounded searchFilter">
	<div class="formGeneric">
		<form>
			<div class="row">
				<div class="col-sm-6">
					<label class="nomefield">Conto c.c</label>
					<select>
						<option>xxxx</option>
						<option>xxxx</option>
					</select>
				</div>
				<div class="col-sm-6">
					<label class="nomefield">Periodo</label>
					<select>
						<option>Mese in corso</option>
						<option>Ultimi 3 mesi</option>
						<option>Ultimi 6 mesi</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-xs-6">
							<label class="nomefield">Importo da</label>
							<input type="text">
						</div>
						<div class="col-xs-6">
							<label class="nomefield">A</label>
							<input type="text">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<label class="nomefield">Categoria</label>
					<select>
						<option>Tutte</option>
						<option>Entrate</option>
						<option>Uscite</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label class="nomefield">Stato</label>
					<select>
						<option>Eseguiti</option>
						<option>Annullati</option>
						<option>Pending</option>
					</select>
				</div>
			</div>
			<div class="btnc aButtoncons"><a class="aButton" href="javascript:;"><span>cerca</span></a></div>
		</form>
	</div>
</div>

<br class="clear"><br>

<div class="resPagflex">
	<div class="resPagRightfixbg"></div>
	<div class="resPagRight flex">
		<div class="pulsantiera">
			<a class="excelmovlast noPaddright" href="#" target="_blank" title="Esporta tutti i movimenti che hai cercato"></a>
			<span class="separator"></span>
			<a class="printmov" href="" target="_blank" title="Scarica le ricevute dei movimenti che hai cercato"></a>
		</div>
	</div>
</div>
<div class="clear"/>

			

<table id="tb-MovP2P" cellspacing="0" cellpadding="0" border="0" class="dettTable sortable">
	<thead>
		<tr>
			<th class="unsort" id="th-data" sort="none" format="URL">DATA</th>
			<th class="unsort" id="th-operativita"  format="">DATA ESECUZIONE</th>
			<th class="unsort" id="th-beneficiario" sort="none">BENEFICIARIO/MITTENTE</th>
			<th class="unsort" id="th-descrizione" sort="none">DESCRIZIONE</th>
			<th class="unsort" id="th-importo" sort="none">MOVIMENTI</th>
			<th class="unsort" id="th-statuto" sort="none">STATUTO</th>
			<th id="th-fee" class="" sort="none"><input id="selTutti" type="checkbox" name="selTutti"/></th>
			<th id="th-del" class="" sort="none"></th>
	</tr>
	</thead>
	<tbody>
	</tbody>
</table>
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript">
var setmessageOk = function() {
setMsgOn({
		wrapper: '#tb-MovP2P',
		msgText: '<p>BRAVO</p><p>Hai annulato il movimento</p><a class="errclose" onclick="$(this).closest(\'.errorlayer\').remove()">&nbsp;</a>',
		boxClass: 'positivo',
		addictClass: 'roundedCorners smallWrapper closeIn',
		closeable : false
	});
}
var data = [
	{
		"data": "gg/mm/aaaa",
		"operativita": "gg/mm/aaaa",
		"beneficiario": "lorem",
		"descrizione": "lorem ipsum",
		"importo": '-60,00 &euro;',
		"statuto": '<span class="nega">IN ATTESA</span>',
		"fee": "<input type='checkbox' class='cbxP2P'>",
		"del": "<a href=\"javascript:;\" onclick=\"$(this).closest('tr').remove();setmessageOk()\"><img src=\"img/ret/ico1gr_revoca.gif\"></a>"
	},
	{
		"data": "gg/mm/aaaa",
		"operativita": "gg/mm/aaaa",
		"beneficiario": "lorem",
		"descrizione": "lorem ipsum",
		"importo": '+600,00 &euro;',
		"statuto": '<span class="posi">FATTO</span>',
		"fee": "<input type='checkbox' class='cbxP2P'>",
		"del": ""
	},
	{
		"data": "gg/mm/aaaa",
		"operativita": "gg/mm/aaaa",
		"beneficiario": "lorem",
		"descrizione": "lorem ipsum",
		"importo": '+700,00 &euro;',
		"statuto": '<span class="posi">FATTO</span>',
		"fee": "<input type='checkbox' class='cbxP2P'>",
		"del": ""
	}
];

// Moltiplico i dati per averne di pi?
var dataTmp = $.extend(true, {}, data);
for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); }

var tbodyMovP2P = null;

// Crea la tabella ordinabile e paginabile
$(function () {
	var loOpe = $('#loOpe');
	tbodyMovP2P = new TableOrderer('MovP2P', {
		data: data,
		cellsClasses: ["center", "center", "left", "left","right","left","center"],
		paginate: false
	});
	$('#selTutti').click(function(e){
		var el = $(e.target);
		var checked = (el.is(':checked'));
		$('#tb-MovP2P').find('.cbxP2P').each(function (index, item) {
			item = $(item);
			if(checked){item.prop('checked', 'checked')}
			else{item.prop('checked', '')}
		});
	});
});


</script>
<div class="resPagflex">
	<div class="resPagRightfixbg ie"></div>
	<div class="resPagRight flex bottom noMarg">
		<div class="pulsantiera">
			<a class="excelmovlast noPaddright" href="#" target="_blank" title="Esporta tutti i movimenti che hai cercato"></a>
			<span class="separator"></span>
			<a class="printmov" href="" target="_blank" title="Scarica le ricevute dei movimenti che hai cercato"></a>
		</div>
	</div>
</div>

