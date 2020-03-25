<style>
table.dettTable tr th {padding:5px!important}
#contenuti table.sortable th.sort{padding:5px!important}
table.dettTable tr td{padding:5px!important}
.actionLink img{float:none;padding-right:0}
.actionLink{text-align:center}
</style>
<!--OGGETTO NAVIGATORE INNER -->
<div class="tabInner">
	<ul class="flLeft">
		<li class="on"><a href="#">dati</a></li>
		<li class="off"><a href="#">lista addebiti</a></li>
	</ul>
	<ul class="flRight">
		<li><a href="#">torna ai mandati</a></li>
	</ul>
</div>
<script type="text/javascript">initTabInner()</script>
<!--OGGETTO NAVIGATORE INNER -->

<br class="clear"><br>
<!--OGGETTO TESTO DI SPIEGAZIONE DEL SDD -->
<table class="text01">
	<tr>
	<td rowspan="3"><img alt="" src="/wscmn/img/bollettini.jpg"></td>		
	<td><p><strong>L'addebito diretto SEPA</strong> (o SDD), che sostituisce l'attuale servizio di domiciliazione (RID), egrave; lo <strong>strumento di pagamento europeo</strong> per disporre incassi all'interno dell'area Sepa.</p>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<p><strong><a class="colorBank" onclick="openPopGuida(cgi_script+'/banking/webank/addebitidiretti/guidaSDD.jsp');" href="javascript:;">GUIDA AL SEPA DIRECT DEBIT</a></strong>
			</p>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<p>Se ti è stato <strong>espressamente richiesto dall'azienda creditrice</strong> in questa pagina puoi inserire i dati del mandato che hai sottoscritto per autorizzarne gli addebiti.</p>
		</td>
	</tr>

</table>

<div class="tithelp">
	<div class="helpleft">Lorem ipsum</div>
	<span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim" class="iconahelp"><img class="help" src="/img/ret/ico2or_help2.gif"></span>
	<br class="clear">
</div>

<table id="tb-paniere" cellspacing="0" cellpadding="0" border="0" class="dettTable sortable typeColor">
	<thead>
		<tr>
			<th rowspan="2" class="sort" id="th-descrizione" sort="default" format="URL">AZIENDA</th>
			<th rowspan="2" class="left" id="th-operativita" format="URL" style="text-align:left">ID MANDATO</th>
			<th rowspan="2" class="sort" id="th-stato" sort="default" format="URL">STATO</th>
			<th rowspan="2" id="th-provenienza" format="URL">PROVENIENZA</th>
			<th colspan="4">LOREM IPSUM</th>
		</tr>
		<tr>
			<th width="20" class="nobg" id="th-ico1">Dettagli</th>
			<th width="20" class="nobg" id="th-ico2">Modifica</th>
			<th width="20" class="nobg" id="th-ico3">Lista Addebiti</th>
			<th width="" class="nobg" id="th-ico4">Revoca</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>


<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript">
var data = [
	{
		"descrizione": "<span title='W1234R12984G1235748HW1234R12984G1235748H'>Lorem ipsumdolor sit lo..</span>",
		"url": "http://www.example.org",
		"operativita": "<span title='ASDFGHJKLA1234567890ASDFGHJKLA12345'>ASDFGHJKLA1234567890ASDFGHJKLA</span>",
		"stato": "bloccato",
		"provenienza": "creditore",
		"ico1": "<a href=\"#1\" title=\"Dettaglio\"><img src=\"/img/ret/ico1gr_dettaglio.gif\" alt=\"lorem ipsum\"></a>",
		"ico2": "<a href=\"#1\" title=\"Modifica\"><img src=\"/img/ret/ico1gr_modifica.gif\" alt=\"lorem ipsum\"></a>",
		"ico3": "<a href=\"#1\"  title=\"Lista Addebiti\"><img src=\"/img/ret/ico1gr_ammortamento.gif\" alt=\"lorem ipsum\"></a>",
		"ico4": "<a href=\"#1\" title=\"Revoca\"><img src=\"/img/ret/ico1gr_revoca.gif\" alt=\"Revoca\"></a>"
	},
	{
		"descrizione": "Lorem ispum dolor sit lorem ipsum",
		"url": "http://www.example.org",
		"operativita": "5964898989",
		"stato": "revocato",
		"provenienza": "creditore",
		"ico1": "<a href=\"#1\"><img src=\"/img/ret/ico1gr_dettaglio.gif\" alt=\"lorem ipsum\"></a>",
		"ico2": "<a href=\"#1\"><img src=\"/wscmn/img/ico1gr_modifica.gif\" alt=\"lorem ipsum\"></a>",
		"ico3": "<a class=\"linkInForm\" href=\"#1\">storna</a>",
		"ico4": "<div style=\"width:70px;float:left\"><a onclick=\"showFollowLevel(this,'levelSb')\" class=\"actionLink flLeft\" href=\"javascript:;\"><img title=\"annulla\" alt=\"annulla\" src=\"/img/ret/ico2inf_back.gif\">annulla</a><a  href=\"#1\" data-tooltip=\"lorem ipsum dolor\" style=\"float:right\;margin-top:5px;margin-left:2px\"><img src=\"/img/ret/ico2or_help2.gif\" alt=\"help\"></a></div>"
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