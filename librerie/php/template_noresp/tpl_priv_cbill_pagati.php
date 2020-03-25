<h1>CBILL</h1>
<!-- Blocco tab -->
<div class="divtabellalist">
	<table class="tabellalist" border="0">
		<tr>
			<td class="off first"><a title="Nuovo bollettino" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_cbill_nuovo.php">Nuovo<br> bollettino</a></td>
			<td class="on"><a title="Bollettini pagati" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_cbill_pagati.php">Bollettini<br>pagati</a></td>
			<td class="end"></td>
		</tr>
	</table>
</div>
<!-- Fine blocco tab -->
<div class="tithelp">
	<div align="right" class="BvTableHeaderHelp"><a href="#1" class="hlp">help</a><a href="#1"><img src="/img/ret/ico2or_help2.gif" alt="help"></a><br class="clear"></div>
	<br class="clear">
</div>
<br class="clear">
<!-- form filtro-->
<div class="borderFormRounded searchFilter">
	<div class="formGeneric">
		<form>
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Tipo disposizione</label>
					<span class="output">Bollettini postali</span>
				</div>
				<div class="span6">
					<label class="nomefield">Conto corrente</label>
					<select class="withIco">
						<option>lorem</option>
						<option>lorem</option>
					</select>
					<a class="flRight" title="Lorem ipsum" href="#"><img alt="Lorem ipsum" src="/img/ico1gr_preferito.gif"></a>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Periodo</label>
					<select><option>lorem ipsum</option></select>
				</div>
				<div class="span6">
					<label class="nomefield">Importo</label>
					<div class="row-fluid">	
						<div class="span1">
							<label id="dataDal">da</label>
						</div>
						<div class="span3">
							 <input type="text" value=""  class="withIco" name="">
						</div>
						<div class="span1">
							<strong>EUR</strong>
						</div>
						<div class="span2">&nbsp;</div>
						<div class="span1">
							<label>a</label>
						</div>
						<div class="span3">	
							<input type="text" class="withIco" name="">
						</div>
						<div class="span1">
							<strong>EUR</strong>
						</div>						
					</div>
				</div>
			</div>
		</form>
		<div class="btnc aButtoncons"><a href="javascript:;" class="aButton"><span>lorem ipsum</span></a></div>
	</div>
</div>
<br class="clear"><br>
<table id="tb-paniere" cellspacing="0" cellpadding="0" border="0" class="dettTable sortable">
	<thead>
		<tr>
			<th class="sort" id="th-Id">ID biller/codice SIA azienda</th>
			<th class="sort" id="th-codice">Codice bollettino</th>
			<th class="sort" id="th-importo">Importo</th>
			<th class="sort left" id="th-dataC">Data di pagamento</th>
		</tr>
	
	</thead>
	<tbody>
	</tbody>
</table>


<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript">
var data = [
	{
		"Id": "LOREM IPSUM DOLOR",
		"codice": "234182489194",
		"importo": 1500,
		"dataC": '10/06/2014'
	},
	{
		"Id": "PROIN VEL ELEIFEND",
		"codice": "234182489194",
		"importo": 3000,
		"dataC": '10/06/2014'
	},
	{
		"Id": "SOLLICITUDIN IN VULPUTATE QUIS",
		"codice": "234182489194",
		"importo": 1000,
		"dataC": '10/06/2014'
	}
];

// Moltiplico i dati per averne di più
var dataTmp = $.extend(true, {}, data);
for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); }

var paniereTB = null;

// Crea la tabella ordinabile e paginabile
$(function () {
	var loOpe = $('#loOpe');
	paniereTB = new TableOrderer('paniere', {
		data: data,
		cellsClasses: ["first", "center", "center", "center", "center", "center", "center", "center"],
		paginate: true
	});
	paniereTB.orderTable('descrizione', 'asc');
	loOpe.find('.uniqTooltipIco>a').each(function (n, i) {
		var valueToFilter = null;
		i = $(i);
		i.click(function (e) {
			var el = $(e.target);
			if (!el.hasClass('selected')) {
				loOpe.find('.uniqTooltipIco>a.selected').eq(0).removeClass('selected');
				el.addClass('selected');
				switch (n) {
					case 0: paniereTB.delFilter('operativita');
							paniereTB.orderTable('operativita', 'asc');
							break;
					case 1: paniereTB.addFilter('operativita', 'short', true, null);
							paniereTB.orderTable('operativita', 'asc');
							break;
					case 2: paniereTB.addFilter('operativita', 'long', true, null);
							paniereTB.orderTable('operativita', 'asc');
				}
			}
		});
	});
	loSliderInit(0, 100, 0, sliderSetFilter);
});

function sliderFilter (obj, value, data) {
	return (parseInt(value, 10) >= data);
}

function sliderSetFilter (value) {	
	if (value == 0) { paniereTB.delFilter('leva'); }
	else { paniereTB.addFilter('leva', value, false, sliderFilter); }
}
</script>
