<style>
	table.dettTable tfoot td {font-weight:bold;border-top:solid 2px #ccc}
</style>
<table id="tb-paniere" cellspacing="0" cellpadding="0" border="0" class="dettTable sortable">
	<thead>
		<tr>
			<th rowspan="2" class="sort" id="th-descrizione" sort="default" format="URL">LOREM IPSUM</th>
			<th rowspan="2" class="sort" id="th-operativita" sort="operativita" format="operativita">LOREM IPSUM</th>
			<th rowspan="2" class="sort" id="th-leva" sort="number" format="signedPercent">LOREM IPSUM</th>
			<th rowspan="2" class="sort" id="th-coefficiente" sort="number" format="percent">LOREM IPSUM</th>
			<th rowspan="2" class="sort" id="th-interesse" sort="number" format="subPercent">LOREM IPSUM</th>
			<th rowspan="2" class="sort" id="th-fee" sort="number" format="signedSubPercent">LOREM IPSUM</th>
			<th colspan="2">LOREM IPSUM</th>
		</tr>
		<tr>
			<th class="sort nobg" id="th-ico1" sort="default" format="URL">LOREM</th>
			<th class="sort nobg" id="th-ico2"" sort="default" format="URL">LOREM</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="7">TOTALE</td>
			<td>839213,3</td>
		</tr>
	</tfoot>
</table>
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript">
var data = [
	{
		"descrizione": "LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"url": "http://www.example.org",
		"operativita": "Long",
		"leva": 15,
		"coefficiente": 93,
		"interesse": 0.945,
		"fee": -0.9741,
		"ico1": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_compravendi.gif\" alt=\"lorem ipsum\"></a>",
		"ico2": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_copia.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"descrizione": "PROIN VEL ELEIFEND QUAM. VESTIBULUM AT TORTOR SED RISUS PORTTITOR PRETIUM SED SIT AMET ERAT",
		"url": "http://www.example.org",
		"operativita": "Short",
		"leva": 30,
		"coefficiente": 97,
		"interesse": 0.983,
		"fee": 0.973,
		"ico1": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_compravendi.gif\" alt=\"lorem ipsum\"></a>",
		"ico2": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_copia.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"descrizione": "SOLLICITUDIN IN VULPUTATE QUIS",
		"url": "http://www.example.org",
		"operativita": "Short & Long",
		"leva": -45,
		"coefficiente": 99,
		"interesse": 0.985,
		"fee": -0.883,
		"ico1": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_compravendi.gif\" alt=\"lorem ipsum\"></a>",
		"ico2": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_copia.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"descrizione": "SUMMA CUM LAUDE",
		"url": "http://www.example.org",
		"operativita": "Short",
		"leva": 80,
		"coefficiente": 96,
		"interesse": 0.996,
		"fee": 0.995,
	},
	{
		"descrizione": "VIVAMUS MALESUADA CONDIMENTUM NUNC",
		"url": "http://www.example.org",
		"operativita": "Short & Long",
		"leva": -93,
		"coefficiente": 96,
		"interesse": 0.973,
		"fee": 0.937,
	},
	{
		"descrizione": "UT VOLUTPAT LECTUS EUISMOD VEL",
		"url": "http://www.example.org",
		"operativita": "Long",
		"leva": 100,
		"coefficiente": 98,
		"interesse": 0.969,
		"fee": -0.978,
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
	/*
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
	*/
});

function sliderFilter (obj, value, data) {
	return (parseInt(value, 10) >= data);
}

function sliderSetFilter (value) {	
	if (value == 0) { paniereTB.delFilter('leva'); }
	else { paniereTB.addFilter('leva', value, false, sliderFilter); }
}
</script>