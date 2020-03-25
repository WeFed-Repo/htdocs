<h1>COLLETTA</h1>
<p>Il funzione P2P vi permette di effettuare dei pagamenti in tempo reale con vostri amici</p>
<div class="tithelp">
	<div class="helpleft">Richiesta</div>
	<br class="clear">
</div>
<div class="borderFormRounded">
	<div class="formGeneric">
		<form id="form01">
			<legend class="colorBank">Informazioni colletta</legend>
			<div class="row">
				<div class="col-sm-6">
					<label class="nomefield">Importo (&euro;)*</label>
					<input type="text">
				</div>
				<div class="col-sm-6">
					<label class="nomefield">Nome colletta</label>
					<input type="text">
				</div>
			</div>
			<legend class="colorBank">Io</legend>
			<div class="row">
				<div class="col-sm-12">
					<label class="nomefield"><input type="checkbox">Includi me stesso nella colletta</label>
				</div>
			</div>
			<div class="bloccoToClone" id="beneficiari">
				<div class="bloccoDebitore">
				<legend class="colorBank"><span>Debitore $$1</span></legend> 
				<div class="bloccoRubrica">
					<div class="row">
						<div class="col-sm-6">
							<label class="nomefield">Nome debitore</label>
							<input type="text" id="nomeDebitoreAutocomplete$$1" class="inputAuto">
							
						</div>
						<div class="col-sm-6">
							<label class="nomefield">Telefono debitore</label>
							<input type="text">
						</div>
						<!--<div class="col-sm-6">
							<label class="nomefield"> &nbsp;</label>
							<span class="output">
								<a href="javascript:;" onclick="$(this).closest('.bloccoRubrica').hide();$(this).closest('.bloccoRubrica').next('.bloccoNoRubrica').show();">inserisci nuovo beneficiario</a>
							</span>
						</div>-->
						
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label class="nomefield">E mail debitore</label>
							<input type="text">
						</div>
						<div class="col-sm-6">
							<a href="javascript:;" onclick="deleteBloccoDebitore(this);" class="deleteDeb" style="display:none">elimina debitore</a> 
						</div>
					</div>
				</div>
				
				<!--<div class="bloccoNoRubrica" style="display:none">
					<div class="row">
						<div class="col-sm-6">
							<label class="nomefield">Nome debitore</label>
							<input type="text">
						</div>
						<div class="col-sm-6">
							<label class="nomefield"> &nbsp;</label>
							<span class="output">
								<a href="javascript:;" onclick="$(this).closest('.bloccoNoRubrica').hide();$(this).closest('.bloccoNoRubrica').prev('.bloccoRubrica').show();">aggiungi da rubrica</a>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label class="nomefield">Telefono debitore</label>
							<input type="text">
						</div>
						<div class="col-sm-6">
							<label class="nomefield">E mail debitore</label>
							<input type="text">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label class="nomefield">&nbsp;</label>
							<label class="output">
								<input type="checkbox" id="checkBenef">&nbsp; inserisci debitore in rubrica
							</label>
						</div>
					</div>
				</div><br>-->
					
				</div>
			</div>
			<div id="beneficiariDin"></div>
			<a href="javascript:;" title="" onclick="showNewBen();resetAuto();initAuto()" class="openDet">+ Aggiungi debitore</a>
		</form>
	</div>
	<div class="aButtonconsRight">
	<span class="btnc"><a class="aButton" href="javascript:;" id="demoSetErrorBtn"><span>prosegui</span></a></span>
</div>
</div>
<br class="clear"><br>
<div class="tithelp">
	<div class="helpleft">Tutte le collette</div>
	<br class="clear">
</div>
<div class="borderFormRounded searchFilter">
	<div class="formGeneric">
		<form>
			<div class="row">
				<div class="col-sm-6">
					<label class="nomefield">Periodo</label>
					<select>
						<option>xxxx</option>
						<option>xxxx</option>
					</select>
				</div>
				<div class="col-sm-6">
					<label class="nomefield">Stato</label>
					<select>
						<option>Tutti</option>
						<option>in attesa</option>
						<option>chiusa</option>
					</select>
				</div>
			</div>
		</form>
	</div>

	<div class="aButtonconsRight">
		<span class="btnc"><a class="aButton" href="javascript:;" id="demoSetErrorBtn"><span>prosegui</span></a></span><br class="clear"><br>
	</div>
</div>

<script type="text/javascript">
	/* Box aggiungi nuovi beneficiari */
	showNewBen();
	initAuto();
	function initAuto()
	{
	var arrayNumeriTelefono = ['pippo','franco','pluto','paperino']
	$('.inputAuto').eq($('.inputAuto').length-1).autoComplete(arrayNumeriTelefono, {
		selectable: true,
		clearable: false,
		filter: 'function'
	})
	}
	function resetAuto()
	{
	  $('.ui-autocomplete').hide();
	}
</script>
<div class="clear"/><br>
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
			<th class="unsort" id="th-creatore" sort="none">CREATORE</th>
			<th class="unsort" id="th-ncolletta" sort="none">NOME COLLETTA</th>
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
		"creatore": "lorem",
		"descrizione": "lorem ipsum",
		"ncolletta": "lorem ipsum",
		"importo": '-60,00 &euro;',
		"statuto": '<span class="nega">IN ATTESA</span>',
		"fee": "<input type='checkbox' class='cbxP2P'>",
		"del": "<a href=\"javascript:;\" onclick=\"$(this).closest('tr').remove();setmessageOk()\"><img src=\"img/ret/ico1gr_revoca.gif\"></a>"
	},
	{
		"data": "gg/mm/aaaa",
		"operativita": "gg/mm/aaaa",
		"creatore": "lorem",
		"descrizione": "lorem ipsum",
		"ncolletta": "lorem ipsum",
		"importo": '+600,00 &euro;',
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
		cellsClasses: ["center", "center", "left","left","left","right","left","center"],
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
<br class="clear">
<div class="p2pFooter">
	<img src="/wscmn/img/ret/logo_jiffy.gif" alt="Logo Jiffy" title="Jiffy">
</div>

