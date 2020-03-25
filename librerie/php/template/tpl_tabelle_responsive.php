<!--TABELLA DEI MOVIMENTI classe da aggiungere per scrollarla: responsive allscrollabled-table -->
<!--TABELLA DEI MOVIMENTI classe da aggiungere per disporre in verticale: responsive-stacked-table -->
<!--TABELLA DEI MOVIMENTI classe da aggiungere per tenere ferma una colonna passando come parametro il numero della colonna da bloccare colonna: responsive scrollabled-table -->
<!--TABELLA DEI MOVIMENTI classe da aggiungere per trasformarla in accordion: responsive-accordion-table -->
<style>
@media screen and (max-width: 640px) {
	table.responsive.allscrollabled-table {
		overflow-x: auto;
		display: block;
	}
}
</style>
<h1>TABELLA ALL SCROLLABLE</h1>
<table id="tb-responsive1" cellspacing="0" cellpadding="0" border="0" class="dettTable sortable responsive allscrollabled-table">
	<thead>
		<tr>
			<th class="sort" id="th-descrizione" sort="default" format="URL">DESCRIZIONE</th>
			<th  class="sort" id="th-operativita" sort="operativita" format="operativita">TIPO</th>
			<th class="sort" id="th-leva" sort="number" format="signedPercent">INCREMENTO</th>
			<th class="sort" id="th-coefficiente" sort="number" format="percent">LOREM IPSUM</th>
			<th class="sort" id="th-interesse" sort="number" format="subPercent">LOREM IPSUM</th>
			<th class="sort" id="th-fee" sort="number" format="signedSubPercent">LOREM IPSUM</th>
			<th class="sort nobg" id="th-ico1" sort="default" format="URL">LOREM</th>
			<th class="sort nobg" id="th-ico2" sort="default" format="URL">LOREM</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript" src="/wscmn/js/table_responsive.js"></script>
<script type="text/javascript">
var data = [
	{
		"descrizione": "Ricariche cellulare",
		"url": "http://www.example.org",
		"operativita": "Long",
		"leva": 15,
		"coefficiente": 93,
		"interesse": 0.945,
		"fee": -0.9741,
		"ico1": "<a href=\"#1\" onclick=\"openPopOverLayer('layeralertFolder', 'fixed', 1)\"><img src=\"/img/ret/ico1gr_compravendi.gif\" alt=\"lorem ipsum\"></a>",
		"ico2": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_copia.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"descrizione": "Bonifico",
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

//Moltiplico i dati per averne di pi
var dataTmp = $.extend(true, {}, data);
for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); }

var paniereTB = null;

// Crea la tabella ordinabile e paginabile
$(function () {
	var loOpe = $('#loOpe');
	paniereTB = new TableOrderer('responsive1', {
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
	//loSliderInit(0, 100, 0, sliderSetFilter);
});
function sliderFilter (obj, value, data) {
	return (parseInt(value, 10) >= data);
}

function sliderSetFilter (value) {	
	if (value == 0) { paniereTB.delFilter('leva'); }
	else { paniereTB.addFilter('leva', value, false, sliderFilter); }
}

</script>



<h1>TABELLA SCROLLABLE CON UNA COLONNA FISSA </h1>
<table id="tb-responsive2" cellspacing="0" cellpadding="0" border="0" class="dettTable sortable responsive scrollabled-table">
	<thead>
		<tr>
			<th class="sort" id="th-descrizione" sort="default" format="URL">DESCRIZIONE</th>
			<th  class="sort" id="th-operativita" sort="operativita" format="operativita">TIPO</th>
			<th class="sort" id="th-leva" sort="number" format="signedPercent">INCREMENTO</th>
			<th class="sort" id="th-coefficiente" sort="number" format="percent">LOREM IPSUM</th>
			<th class="sort" id="th-interesse" sort="number" format="subPercent">LOREM IPSUM</th>
			<th class="sort" id="th-fee" sort="number" format="signedSubPercent">LOREM IPSUM</th>
			<th class="sort nobg" id="th-ico1" sort="default" format="URL">LOREM</th>
			<th class="sort nobg" id="th-ico2" sort="default" format="URL">LOREM</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript" src="/wscmn/js/table_responsive.js"></script>
<script type="text/javascript">
var data = [
	{
		"descrizione": "Ricariche cellulare",
		"url": "http://www.example.org",
		"operativita": "Long",
		"leva": 15,
		"coefficiente": 93,
		"interesse": 0.945,
		"fee": -0.9741,
		"ico1": "<a href=\"#1\" onclick=\"openPopOverLayer('layeralertFolder', 'fixed', 1)\"><img src=\"/img/ret/ico1gr_compravendi.gif\" alt=\"lorem ipsum\"></a>",
		"ico2": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_copia.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"descrizione": "Bonifico",
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

//Moltiplico i dati per averne di pi
var dataTmp = $.extend(true, {}, data);
for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); }

var paniereTB = null;

// Crea la tabella ordinabile e paginabile
$(function () {
	var loOpe = $('#loOpe');
	paniereTB = new TableOrderer('responsive2', {
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
	//loSliderInit(0, 100, 0, sliderSetFilter);
});
function sliderFilter (obj, value, data) {
	return (parseInt(value, 10) >= data);
}

function sliderSetFilter (value) {	
	if (value == 0) { paniereTB.delFilter('leva'); }
	else { paniereTB.addFilter('leva', value, false, sliderFilter); }
}

//inizializzazione delle diverse tipologie tabella

$(function(){scrollTableFidexCol('0')});
$(window).bind('resize',function(){scrollTableFidexCol('0')})

</script>
<h1>TABELLA ACCORDION</h1>
<table id="tb-responsive4" cellspacing="0" cellpadding="0" border="0" class="dettTable sortable responsive accordion-table">
	<thead>
		<tr>
			<th class="sort" id="th-descrizione" sort="default" format="URL">DESCRIZIONE</th>
			<th  class="sort" id="th-operativita" sort="operativita" format="operativita">TIPO</th>
			<th class="sort" id="th-leva" sort="number" format="signedPercent">INCREMENTO</th>
			<th class="sort" id="th-coefficiente" sort="number" format="percent">LOREM IPSUM</th>
			<th class="sort" id="th-interesse" sort="number" format="subPercent">LOREM IPSUM</th>
			<th class="sort" id="th-fee" sort="number" format="signedSubPercent">LOREM IPSUM</th>
			<th class="sort nobg" id="th-ico1" sort="default" format="URL">LOREM</th>
			<th class="sort nobg" id="th-ico2" sort="default" format="URL">LOREM</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript" src="/wscmn/js/table_responsive.js"></script>
<script type="text/javascript">
var data = [
	{
		"descrizione": "Ricariche cellulare",
		"url": "http://www.example.org",
		"operativita": "Long",
		"leva": 15,
		"coefficiente": 93,
		"interesse": 0.945,
		"fee": -0.9741,
		"ico1": "<a href=\"#1\" onclick=\"openPopOverLayer('layeralertFolder', 'fixed', 1)\"><img src=\"/img/ret/ico1gr_compravendi.gif\" alt=\"lorem ipsum\"></a>",
		"ico2": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_copia.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"descrizione": "Bonifico",
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

//Moltiplico i dati per averne di pi
var dataTmp = $.extend(true, {}, data);
for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); }

var paniereTB = null;

// Crea la tabella ordinabile e paginabile
$(function () {
	var loOpe = $('#loOpe');
	paniereTB = new TableOrderer('responsive4', {
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
	//loSliderInit(0, 100, 0, sliderSetFilter);
});
function sliderFilter (obj, value, data) {
	return (parseInt(value, 10) >= data);
}

function sliderSetFilter (value) {	
	if (value == 0) { paniereTB.delFilter('leva'); }
	else { paniereTB.addFilter('leva', value, false, sliderFilter); }
}

//inizializzazione delle diverse tipologie tabella

$(function(){accordionTable('3')});
$(window).bind('resize',function(){if($('.icon-accordion').length==0){accordionTable('3')}})

</script>

<h1>TABELLA VERTICALE </h1>
<table id="tb-responsive3" cellspacing="0" cellpadding="0" border="0" class="dettTable sortable responsive stacked-table">
	<thead>
		<tr>
			<th class="sort" id="th-descrizione" sort="default" format="URL">DESCRIZIONE</th>
			<th  class="sort" id="th-operativita" sort="operativita" format="operativita">TIPO</th>
			<th class="sort" id="th-leva" sort="number" format="signedPercent">INCREMENTO</th>
			<th class="sort" id="th-coefficiente" sort="number" format="percent">LOREM IPSUM</th>
			<th class="sort" id="th-interesse" sort="number" format="subPercent">LOREM IPSUM</th>
			<th class="sort" id="th-fee" sort="number" format="signedSubPercent">LOREM IPSUM</th>
			<th class="sort nobg" id="th-ico1" sort="default" format="URL">LOREM</th>
			<th class="sort nobg" id="th-ico2" sort="default" format="URL">LOREM</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript" src="/wscmn/js/table_responsive.js"></script>
<script type="text/javascript">
var data = [
	{
		"descrizione": "Ricariche cellulare",
		"url": "http://www.example.org",
		"operativita": "Long",
		"leva": 15,
		"coefficiente": 93,
		"interesse": 0.945,
		"fee": -0.9741,
		"ico1": "<a href=\"#1\" onclick=\"openPopOverLayer('layeralertFolder', 'fixed', 1)\"><img src=\"/img/ret/ico1gr_compravendi.gif\" alt=\"lorem ipsum\"></a>",
		"ico2": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_copia.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"descrizione": "Bonifico",
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

//Moltiplico i dati per averne di pi
var dataTmp = $.extend(true, {}, data);
for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); }

var paniereTB = null;

// Crea la tabella ordinabile e paginabile
$(function () {
	var loOpe = $('#loOpe');
	paniereTB = new TableOrderer('responsive3', {
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
	//loSliderInit(0, 100, 0, sliderSetFilter);
});
function sliderFilter (obj, value, data) {
	return (parseInt(value, 10) >= data);
}

function sliderSetFilter (value) {	
	if (value == 0) { paniereTB.delFilter('leva'); }
	else { paniereTB.addFilter('leva', value, false, sliderFilter); }
}

//inizializzazione delle diverse tipologie tabella

$(function(){addLabelStackTable()});
$(window).bind('resize',function(){addLabelStackTable()})

</script>










