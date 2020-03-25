<h1>ELENCO AUTORIZZATORI</h1><br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
<table id="tb-elencoAutorizzazioni" cellspacing="0" cellpadding="0" border="0" class="dettTable">
	<thead>
		<tr>
			<th id="th-firmatari" sort="none">Firmatari singoli</th>
			<th id="th-firma" sort="none">Massimale di firma</th>
			<th id="th-stato" sort="none">Stato del certificato</th>
			<th id="th-gestione" sort="none">Gestione certificato</th>
			<th id="th-dettaglio" sort="none">Dett</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>

<script type="text/javascript">

var data = [
	{
		"firmatari": "Alessio Palermo",
		"firma": "9.999.999,99 EUR",
		"stato": "Autorizzato, emesso o pubblicato",
		"gestione": "-",
		"dettaglio": "<a href=\"/connect.php?page=str_priv_bus_int.php&tpl=tpl_priv_dettaglio_autorizzaziori.php\"><img src='img/bus/ico1gr_dettaglio.gif' title='dettaglio'/></a>"
	},
	{
		"firmatari": "MArio Rossi",
		"firma": "9.999.999,99 EUR",
		"stato": "Autorizzato, emesso o pubblicato",
		"gestione": "-",
		"dettaglio": "<a href=\"javascript:;\"><img src='img/bus/ico1gr_dettaglio.gif' title='dettaglio'/></a>"
	}
];

// Moltiplico i dati per averne di pi�

// Crea la tabella ordinabile e paginabile
$(function () {
	paniereTB = new TableOrderer('elencoAutorizzazioni', {
		data: data,
		cellsClasses: ["left", "left", "left", "left", "left", "center"]
	});
	
});
</script>
