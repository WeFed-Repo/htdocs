<!--Fisso/Con oscuramento/small-->
<div class="layeralert" id="layeralert01b" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert01b').dragHandle = new Draggable('layeralert01b',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="javascript: closePopOverLayer('layeralert01b'); "/></div>
	<div class="body">
		<div class="important">
			<h3 class="verde">Sottotitolo pagina</h3>
			<p>Lorem ipsum dolor sit amet,lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem</p>
		</div>
		<br class="clear" />
		<a title="Lorem ipsum" class="btnformleft" href="#1" onclick="javascript: closePopOverLayer('layeralert01b');"><img alt="" src="/img/ret/btn_left_bi.gif"/><span>Lorem ipsum</span><img alt="" src="/img/ret/btn_right_bi.gif"/></a><a href="javascript:;" onclick="eliminadaWachlist()" title="Lorem ipsum" class="btnformright"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>Lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a>
	</div>
	<div class="foot"></div>
</div>
<!--FINE Fisso/Con oscuramento/small -->



<script type="text/javascript" src="/wscmn/js/ret/priv_fes.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/priv_fes_watchlist.js"></script>
<h1>Watchlist</h1>
<p class="note right" style="margin-top:-20px !important">Aggiornato alle hh.mm.ss del dd/mm/yyyy (*)</p>

<div class="fondiwatchlist">
	<div class="borderFormRounded">
		<div class="formGeneric">
			<form>
				<div class="row-fluid">
					<div class="span6">
						<div class="row-fluid noMargbottom">
							<div class="span8">
								<label class="nomefield">Lorem watchlist</label>
								<select><option>lorem </option></select>
							</div>
						</div>
					</div>
					<div class="span6">
						<label id="" class="nomefield">&nbsp;</label>
						<a href="#" class="flRight linkInForm margTopMedium">nuova watchlist</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<br class="clear"><br>

	<table class="condiz2Mov">
		<tr>
			<td class="flLeft"><a href="javascript:;" title="confronta selezionati" id="fesConfLink" data-baseurl="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_fes_faidate_ricerca.php" style="display:none">confronta selezionati</a>&nbsp;</td>
			<td class="txtAlRight"><a href="javascript:;" class="noPaddright" title="aggiungi fondo a watchlist">aggiungi fondo a watchlist</a></td>
		</tr>
	</table>
	<!--TABELLA-->
	<table id="tb-watchlist" cellspacing="0" cellpadding="0" border="0" class="dettTable sortable">
		<thead>
			<tr>
				<th id="th-check">&nbsp;</th>
				<th class="sort" id="th-nome" sort="default" format="nome">Nome fondo</th>
				<th class="sort" id="th-categoria">Categoria Assogestioni</th>
				<th class="sort" id="th-rendimento" sort="number" format="signedPercent">Rend. YTD</th>
				<th class="sort" id="th-przultimo" sort="none">Val.quota/NAV</th>
				<th class="sort" id="th-val" sort="none" format="subPercent">Valuta</th>
				<th class="sort cellEvident" id="th-datains" sort="none" format="signedSubPercent">In watchlist da</th>
				<th class="sort cellEvident" id="th-przinserimento" sort="none">Val.quota/ NAV inserimento in WL</th>
				<th class="sort cellEvident" id="th-diff" sort="number" format="signedSubPercent" style="width:55px">Var. %</th>
				<th class="sort icone2" id="th-icone" sort="none" format="icone">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	<!--FINE TABELLA-->
	<br/>
	<table class="condiz2Mov">
		<tr>
			<td class="flLeft"><!--a href="javascript:;" title="confronta selezionati">confronta selezionati</a-->&nbsp;</td>
			<td class="txtAlRight"><a id="btnMSmoneyMov" class="formms" href="javascript:;" title="Formato Excel" target="_blank">Formato Excel</a>
				<a id="btnStampaPaginaMov" class="print noPaddright" href="javascript:;" title="Stampa pagina">Stampa pagina</a></td>
		</tr>
	</table>
	<br/>
<!-- visual sotto cms-->
	<div class="imagecontainer">
		<img title="Lorem ipsum" src="http://librerie/img/str_imm_ingombro.gif"/>
	</div>
<!-- fine visual sotto cms-->
<br class="clear"><br>
<!-- note -->
	<div class="filettoGenericoOrizzontale02 margBottomSmall"></div>
	<p class="note">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis tellus. </p>
	<p class="note">* Praesent at ipsum. Integer vitae eros. <strong>Aliquam egestas dapibus tellus</strong>. Ut vel mi eu purus feugiat porta.</p>
	<p class="note">** Praesent at ipsum. <a href="" title="Integer vitae eros">Integer vitae eros</a>. Aliquam egestas dapibus tellus. Ut vel mi eu purus feugiat porta.</p>
<!-- fine note -->
</div>


<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript">
var data = [
	{
		"check": "<input type=\"checkbox\" value=\"codiceFida\">",
		"nome": "Allianz Asia Pacific Equity CT EUR",
		"url": "http://www.example.org",
		"categoria": "Lorem ipsum dolor sit........",
		"rendimento": 15,
		"przultimo": "93,010",
		"val": "EUR",
		"datains": "XX/XX/XXXX",
		"przinserimento": "93,010",
		"diff": "- 99,00",
		"ico1": "<div class=\"linkTooltip\" style=\"float:left !important\"><a class=\"linkVai\" title=\"scegli l\'operazione da effettuare\" href=\"javascript:;\" codicesocieta=\"1\" codicecomparto=\"313123\" divisa=\"213\" fondosicav=\"F\"></a><div class=\"sezioneLinks2\"></div></div>",
		"ico2": "<a href=\"javascript:;\" onclick=\"openPopOverLayer('layeralert01b', 'floating', 4)\"><img src=\"/wscmn/img/ico1gr_revoca.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"check": "<input type=\"checkbox\">",
		"nome": "PROIN VEL ELEIFEND QUAM. VESTIBULUM AT TORTOR SED RISUS PORTTITOR PRETIUM SED SIT AMET ERAT",
		"url": "http://www.example.org",
		"categoria": "Lorem ipsum dolor sit........",
		"rendimento": 30,
		"przultimo": "93,010",
		"val": "EUR",
		"datains": "XX/XX/XXXX",
		"przinserimento": "93,010",
		"diff": 15,
		"ico1": "<div class=\"linkTooltip\" style=\"float:left !important\"><a class=\"linkVai\" title=\"scegli l\'operazione da effettuare\" href=\"javascript:;\" codicesocieta=\"1\" codicecomparto=\"313123\" divisa=\"213\" fondosicav=\"F\"></a><div class=\"sezioneLinks2\"></div></div>",
		"ico2": "<a href=\"#1\"><img src=\"/wscmn/img/ico1gr_revoca.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"check": "<input type=\"checkbox\">",
		"nome": "SOLLICITUDIN IN VULPUTATE QUIS",
		"url": "http://www.example.org",
		"categoria": "Lorem ipsum dolor sit........",
		"rendimento": -45,
		"przultimo": "93,010",
		"val": "EUR",
		"datains": "XX/XX/XXXX",
		"przinserimento": "93,010",
		"diff": 15,
		"ico1": "<div class=\"linkTooltip\" style=\"float:left !important\"><a class=\"linkVai\" title=\"scegli l\'operazione da effettuare\" href=\"javascript:;\" codicesocieta=\"1\" codicecomparto=\"313123\" divisa=\"213\" fondosicav=\"F\"></a><div class=\"sezioneLinks2\"></div></div>",
		"ico2": "<a href=\"#1\"><img src=\"/wscmn/img/ico1gr_revoca.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"check": "<input type=\"checkbox\">",
		"nome": "SUMMA CUM LAUDE",
		"url": "http://www.example.org",
		"categoria": "Lorem ipsum dolor sit........",
		"rendimento": 80,
		"przultimo": "93,010",
		"val": "USD",
		"datains": "XX/XX/XXXX",
		"przinserimento": "93,010",
		"diff": 15,
		"ico1": "<div class=\"linkTooltip\" style=\"float:left !important\"><a class=\"linkVai\" title=\"scegli l\'operazione da effettuare\" href=\"javascript:;\" codicesocieta=\"1\" codicecomparto=\"313123\" divisa=\"213\" fondosicav=\"F\"></a><div class=\"sezioneLinks2\"></div></div>",
		"ico2": "<a href=\"#1\"><img src=\"/wscmn/img/ico1gr_revoca.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"check": "<input type=\"checkbox\">",
		"nome": "VIVAMUS MALESUADA CONDIMENTUM NUNC",
		"url": "http://www.example.org",
		"categoria": "Lorem ipsum dolor sit........",
		"rendimento": -93,
		"przultimo": 96,
		"val": "CHF",
		"datains": "XX/XX/XXXX",
		"przinserimento": "93,010",
		"diff": 15,
		"ico1": "<div class=\"linkTooltip\" style=\"float:left !important\"><a class=\"linkVai\" title=\"scegli l\'operazione da effettuare\" href=\"javascript:;\" codicesocieta=\"1\" codicecomparto=\"313123\" divisa=\"213\" fondosicav=\"F\"></a><div class=\"sezioneLinks2\"></div></div>",
		"ico2": "<a href=\"#1\"><img src=\"/wscmn/img/ico1gr_revoca.gif\" alt=\"lorem ipsum\"></a>"
	},
	{
		"check": "<input type=\"checkbox\">",
		"nome": "UT VOLUTPAT LECTUS EUISMOD VEL",
		"url": "http://www.example.org",
		"categoria": "Lorem ipsum dolor sit........",
		"rendimento": 100,
		"przultimo": "98",
		"val": "EUR",
		"datains": "XX/XX/XXXX",
		"przinserimento": "93,010",
		"diff": 15,
		"ico1": "<div class=\"linkTooltip\" style=\"float:left !important\"><a class=\"linkVai\" title=\"scegli l\'operazione da effettuare\" href=\"javascript:;\" codicesocieta=\"1\" codicecomparto=\"313123\" divisa=\"213\" fondosicav=\"F\"></a><div class=\"sezioneLinks2\"></div></div>",
		"ico2": "<a href=\"#1\"><img src=\"/wscmn/img/ico1gr_revoca.gif\" alt=\"lorem ipsum\"></a>"
	}
];

// Moltiplico i dati per averne di più
/*var dataTmp = $.extend(true, {}, data);
for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); }*/

var watchlistTB = null;

// Crea la tabella ordinabile e paginabile
$(function () {
	watchlistTB = new TableOrderer('watchlist', {
		data: data,
		cellsClasses: [/*"first", */"left", "left", "right", "right", "center", "center", "right", "right", "center icopad"],
		paginate: false
	});
	watchlistTB.orderTable('nome', 'asc');
	setIcopad();
	
	// Attribuisce la funzione ai checkBox
	setCBWl();
	
});

function format_icone (objVal, obj) {
	var ico1 = obj.ico1? obj.ico1 : '',
		ico2 = obj.ico2? obj.ico2 : '';
	return ico1 + '' + ico2;
}

function format_nome (objVal, obj) {
	return '<a href=\"' + obj.url + ' \">' + obj.nome + '</a>';
}
</script>