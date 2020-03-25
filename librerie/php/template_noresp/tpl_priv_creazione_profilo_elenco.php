<h1>GESTIONE PROFILI</h1>
<br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultricies mi nec nunc cursus et hendrerit urna mollis. Sed commodo gravida erat, non elementum mi eleifend ut. Fusce vehicula magna eget felis iaculis egestas. Nam dapibus sollicitudin volutpat.</p>
<div class="boxesito positivo" id="boxConfermaElPro" style="display:none">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
		</div>
	</div>
</div>
<div class="tithelp">
	<div class="helpleft paddTopMedium">Lorem ipsum</div>
	<span class="expleft"><a href="javascript:;" onclick="openPopGuida('/connect.php?page=tpl_popup_priv_book_bus_guida.php');" title="Guida alla compilazione"><br>Guida alla compilazione</a></span>
</div>
<br class="clear">

<table id="tb-elencoProfili" cellspacing="0" cellpadding="0" border="0" class="dettTable">
	<thead>
		<tr>
			<th id="th-profilo" sort="none">Profilo</th>
			<th id="th-descrizione" sort="none">Descrizione</th>
			<th id="th-modifica" sort="none">Modifica</th>
			<th id="th-elimina" sort="none">Elimina</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script type="text/javascript">
var data = [
	{
		"profilo": "<a href=\"#\" onclick=\"window.open('connect.php?page=tpl_popup_dettaglio.php','','width=700, height=400');\">1212111</a>",
		"descrizione": "Lorem ipsum dolor sit amet, consectetur adipiscing elit 123456",
		"modifica": "<a href=\"connect.php?page=str_priv_bus_int.php&tpl=tpl_priv_modifica_profilo_elenco.php\"><img src='img/bus/ico1gr_modifica.gif' /></a>",
		"elimina": "<a href=\"javascript:;\" onclick=\"openPopOverLayer('layeralert1', 'floating', 0.5)\"><img src='img/bus/ico1gr_revoca.gif' /></a>"
	},
	{
		"profilo": "<a href=\"#\"onclick=\"window.open('connect.php?page=tpl_popup_priv_utenti.riepilogo.php','','width=740, height=400');\">121213331</a>",
		"descrizione": "<span class=\"posi\">Lorem ipsum dolor sit amet, consectetur adipiscing elit 123456</span>",
		"modifica": "<a href=\"#\"><img src='img/bus/ico1gr_modifica.gif' /></a>",
		"elimina": "<a href=\"#\"><img src='img/bus/ico1gr_revoca.gif' /></a>"
	},
	{
		"profilo": "<a href=\"#\" onclick=\"window.open('connect.php?page=tpl_popup_priv_profilo_utenti.php','','width=740, height=400');\">1212111</a>",
		"descrizione": "<span class=\"nega\">Lorem ipsum dolor sit amet, consectetur adipiscing elit 123456</span>",
		"modifica": "<a href=\"#\"><img src='img/bus/ico1gr_modifica.gif' /></a>",
		"elimina": "<a href=\"#\"><img src='img/bus/ico1gr_revoca.gif' /></a>"
	},
	{
		"profilo": "<a href=\"#\">121213331</a>",
		"descrizione": "Lorem ipsum dolor sit amet, consectetur adipiscing elit 123456",
		"modifica": "<a href=\"#\"><img src='img/bus/ico1gr_modifica.gif' /></a>",
		"elimina": "<a href=\"#\"><img src='img/bus/ico1gr_revoca.gif' /></a>"
	},
	{
		"profilo": "<a href=\"#\">121213331</a>",
		"descrizione": "Short & Long",
		"modifica": "<a href=\"#\"><img src='img/bus/ico1gr_modifica.gif' /></a>",
		"elimina": "<a href=\"#\"><img src='img/bus/ico1gr_revoca.gif' /></a>"
	},
	{
		"profilo": "<a href=\"#\">121213331</a>",
		"descrizione": "Long",
		"modifica": "<a href=\"#\"><img src='img/bus/ico1gr_modifica.gif' /></a>",
		"elimina": "<a href=\"#\"><img src='img/bus/ico1gr_revoca.gif' /></a>"
	}
];

// Moltiplico i dati per averne di pi�
var dataTmp = $.extend(true, {}, data);
for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); }

var paniereTB = null;

// Crea la tabella ordinabile e paginabile
$(function () {
	var loOpe = $('#loOpe');
	paniereTB = new TableOrderer('elencoProfili', {
		data: data,
		cellsClasses: ["center", "center", "center", "center"],
		paginate: true
	});
	loSliderInit(0, 100, 0, sliderSetFilter);
});

function sliderFilter (obj, value, data) {
	return (parseInt(value, 10) >= data);
}

function sliderSetFilter (value) {	
	if (value == 0) { paniereTB.delFilter('modifica'); }
	else { paniereTB.addFilter('modifica', value, false, sliderFilter); }
}
</script>

<!-- LAYER DI ALERT-->
<div class="layeralert2" id="layeralert1" style="display:none;">
	<div style="cursor: move;" class="head handle" onmouseover="this.style.cursor='move'; $('layeralert1').dragHandle = new Draggable('layeralert1',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="this.parentNode.parentNode.style.display='none'; unobscurateAll();"/></div>
	<div class="body">
		<p>Attenzione! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultricies mi nec nunc cursus et hendrerit urna mollis. </p>
		<br class="clear" />
		<a title="conferma" class="btnformleft" href="#1" onclick="closePopOverLayer('layeralert1');"><img alt="" src="/img/bus/btn_left_bi.gif"/><span>annulla</span><img alt="" src="/img/bus/btn_right_bi.gif"/></a>
		<a title="conferma" class="btnformright" href="javscript:;" onclick="closePopOverLayer('layeralert1');$('#boxConfermaElPro').show();"><img alt="" src="/img/bus/btn_left_ar.gif"/><span>conferma</span><img alt="" src="/img/bus/btn_right_ar.gif"/></a>
		<br class="clear" />
	</div>
	<div class="foot"></div>
</div>
<!-- FINE LAYER DI ALERT-->


