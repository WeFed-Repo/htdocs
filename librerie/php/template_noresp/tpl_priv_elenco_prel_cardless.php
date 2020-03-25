<h1>LOREM IPSUM</h1>
<ul class="tabGeneric">
	<li>
		<span class="tabBorder"><span class="tabGradient"><a href="connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_stato_pratica_cardless.php">lorem ipsum dolor</a></span></span>
	</li>
	<li class="active"><span class="tabBorder"><span class="tabGradient"><a href="connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_elenco_prel_cardless.php">elenco prelievi cardless</a></span></span></li>
	<li><span class="tabBorder"><span class="tabGradient"><a href="connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_disattivazione_cardless.php">disattivazione</a></span></span></li>
</ul> 
<br class="clear">
<br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
<div class="borderFormRounded margBottomLarge noPadd" id="datiBox">
			<div class="formGeneric" id="formGeneric">
					   <div class="row-fluid noMargbottom">
								   <div id="conto" class="span4 paddMedium heightMin">
											   <label class="nomefield">Conto di addebito</label>
											   <span class="output">*** *** *** *XXX</span>
								   </div> 
								   <div id="intestazione" class="span4 paddMedium heightMin">
											   <label class="nomefield">Intestatario</label>
											   <span class="output">NOME COGNOME</span>
								   </div>
								 
					   </div>
					   <div class="row-fluid noMargbottom">
								   <div id="limiteSpesa" class="span4 paddMedium heightMin">
											   <label class="nomefield">Plafond</label>
											   <span class="output txtIco">XXX &euro;</span>
											   
								   </div>
								   <div id="totaleSpese" class="span4 paddMedium heightMin fontTotSpese">
											   <label class="nomefield">Totale prelievi</label>
											   <span class="output">X,XX &euro;</span>
								   </div>
								   <div id="residuo" class="span4 paddMedium heightMin fontTotSpese">
											   <label class="nomefield">Disponibilit&agrave; residua</label>
											   <span class="output colorver">XXX,XX &euro;</span>
								   </div>
					   </div>
								   
			</div>
</div>
<!-- Box bottoni interazione con i risultati -->
<div class="movimentiCont">
<div class="tithelp">
		<div class="helpleft helpleftb">Periodo movimenti
			<select class="margLeftMedium"><option>Ultimi 10 prelievi</option><option>Ultimo mese</option><option>Ultimi tre mesi</option><option>Ultimi 6 mesi</option></select>
		</div> 
	
		<div class="resPagflex">
			<div class="resPagRight flex">
				<div class="pulsantiera">
					<a class="excelmovlast" href="#" target="_blank" title="Esporta tutti i movimenti che hai cercato"></a>
				</div>
			</div>
		</div>
		<div class="clear"/>
</div>
			

<table id="tb-paniere" cellspacing="0" cellpadding="0" border="0" class="dettTable sortable">
	<thead>
		<tr>
			<th class="sort" id="th-data" sort="default" format="URL">DATA PRELIEVO</th>
			<th class="sort" id="th-descrizione" sort="operativita" format="operativita">DESCRIZIONE</th>
			<th class="sort" id="th-importo" sort="number" format="">LOREM IPSUM</th>
			<th class="nobg" id="th-ico1">PDF</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript">
var data = [
	{
		"data": "gg/mm/aaaa hh:mm",
		"descrizione": "LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"importo": 15,
		"ico1": "<a href=\"#1\"><img src=\"/wscmn/img/ret/ico1gr_pdftabmov.gif\"\></a>"
	},
	{
		"data": "gg/mm/aaaa hh:mm",
		"descrizione": "LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"importo": 150,
		"ico1": "<a href=\"#1\"><img src=\"/wscmn/img/ret/ico1gr_pdftabmov.gif\"\></a>"
	},
	{
		"data": "gg/mm/aaaa hh:mm",
		"descrizione": "LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT",
		"importo": 1500,
		"ico1": "<a href=\"#1\"><img src=\"/wscmn/img/ret/ico1gr_pdftabmov.gif\"\></a>"
	}
];

// Moltiplico i dati per averne di pi?
var dataTmp = $.extend(true, {}, data);
for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); }

var paniereTB = null;

// Crea la tabella ordinabile e paginabile
$(function () {
	var loOpe = $('#loOpe');
	paniereTB = new TableOrderer('paniere', {
		data: data,
		cellsClasses: ["first", "left", "right", "center"],
		paginate: false
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
<div class="resPagflex">
	<div class="resPagRight flex bottom noMarg">
		<div class="pulsantiera">
			<a class="excelmovlast" href="#" target="_blank" title="Esporta tutti i movimenti che hai cercato"></a>
		</div>
	</div>
</div>
<table class="condiz2Mov">
	<tr>
		<td><a id="btnStampaPaginaMov" class="print flRight" href="javascript:;" title="Stampa pagina">Stampa pagina</a></td>
	</tr>
</table>
</div>
<div class="boxesito attenzione">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<div class="row-fluid">
				<div class="span12">
					<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
				et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="paddBottomLarge">
	<div>
		<div class="flLeft"><img src="/img/ret/ico2or_non_spesa.gif" alt=""></div>
		<div class="paddLeftBoxIcoExtraLarge">
			<h2 class="titGeneric03 margBottomSmall txtSize13 lineHeight12 txtTransformUpper colorBank">lorem ipsum</h2>
			<p class="paddBottomSmall">Lorem ipsum <strong>dolor sit</strong> amease nsectetur <a href="#">adipisicing</a> eliteasdi eiusmod tempor incididunsadt labore et dolore magna alass Ut enim ad minim veniamasai nostrud exercitation ullamdsi.</p>
			<ul class="margLeftMedium paddLeftSmall"><li>Lorem ipsum</li><li>Lorem ipsum</li><li>Lorem ipsum</li></ul>
		</div>
	</div>
</div>
