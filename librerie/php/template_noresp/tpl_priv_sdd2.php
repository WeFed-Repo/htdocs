<style>
table.dettTable tr th {padding:5px!important}
#contenuti table.sortable th.sort{padding:5px!important}
table.dettTable tr td{padding:5px!important}
.actionLink img{float:none;padding-right:0}
.actionLink{text-align:center}
</style>

<table id="tb-paniere" cellspacing="0" cellpadding="0" border="0" class="dettTable sortable">
	<thead>
		<tr>
			<th width="200"  class="sort" id="th-descrizione" sort="default" format="URL">AZIENDA</th>
			<th  style="text-align:left" id="th-operativita">ID MANDATO</th>
			<th class="sort" id="th-stato" sort="default" format="URL">STATO</th>
			<th width="20" id="th-provenienza" format="URL">PROVENIENZA</th>
			<th width="20" class="nobg" id="th-ico1">LOREM IPSUM</th>
		</tr>
		
	</thead>
	<tbody>
	</tbody>
</table>
<div id="iconaOperativaMenu1_html" class="sezioneLinks2" style="display: none;">
	<div class="topSx"><div class="topDx"><div class="topCenter">scegli...</div></div></div>
	<div class="bodySx">
		<div class="bodyDx">
			<div class="bodyCenter">
				<ul class="azioni">
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOn"><a title="C/V" href="link1.htm"><span>Dettagli</span></a></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOff"><span title="C/V">Dettagli</span></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOn"><a title="C/V" href="link1.htm"><span>Modifica</span></a></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOff"><span title="C/V">Modifica</span></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOn"><a title="C/V" href="link1.htm"><span>Lista addebiti</span></a></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOff"><span title="C/V">Lista addebiti</span></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="bottomSx borderBottom"><div class="bottomDx borderBottom"><div class="bottomCenter borderBottom"></div></div></div>
</div>


<!-- |FINE| LAYER MENU -->
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript">
var icoOperativa = "<div class=\"linkTooltip\"><a href=\"javascript:;\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'left', this, []);\" class=\"linkVai\" id=\"link14\" title=\"scegli l'operazione da effettuare\"></a>";
var data = [
	{
		"descrizione": "LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"url": "http://www.example.org",
		"operativita": "<span title='W1234R12984G1235748HW1234R12984G1235748H'>WB234R929X4G1235748H..</span>",
		"stato": "bloccato",
		"provenienza": "creditore",
		"ico1": icoOperativa
	},
	{
		"descrizione": "PROIN VEL ELEIFEND QUAM. VESTIBULUM AT TORTOR SED RISUS PORTTITOR PRETIUM SED SIT AMET ERAT",
		"url": "http://www.example.org",
		"operativita": "5964898989",
		"stato": "attivo",
		"provenienza": "creditore",
		"ico1": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_tradingtitoli.gif\" alt=\"lorem ipsum\"></a>"
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