<!-- JS RISERVATO ALLA PAGINA -->
<script type="text/javascript" src="/wscmn/js/amcharts/amcharts.js"></script>
<script type="text/javascript" src="/wscmn/js/priv_ret_bf_fp.js"></script>
<script type="text/javascript">
	// Variabili da valorizzare lato sviluppo
	var bfDetailUrl = "/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_gestione_obiettivo.php&liv1=RB&liv2=1&liv3=1"; // Inserire pagina di dettaglio obiettivo alla quale passare il dato identificativo
	var bfDetailLibero = "/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_gestione_libero.php&liv1=RB&liv2=1&liv3=1"; // Inserire pagina di dettaglio risparmio libero
	var bfCreaUrl = "/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_crea.php&liv1=RB&liv1=RB&liv2=2&liv3=1&liv4=1"; // Url creazione nuovo obiettivo
	
	// Inizializzazione controlli in carico a sviluppo (select)
	$(function(){
		// Select conto
		$("#idNumeroConto").on("change", function(){
			
			bfGraphInit(); // Inizializza/ricrea il grafico e la legenda
			
			// Aggiungere eventuale chiamata per caricamento alert
			
		});

		// Pulsanti modifica e salva alert (front end solo emulato)
		
		// Modifica
		bfAlModifica = $("#alertModifica");
		bfAlSalva = $("#alertSalva");
		bfAlForm = $("#formAlert");
		
		// Salva
		bfAlSalva.click(function(){
			bfAlSalva.hide();
			
			// Overlay di caricamento
			setLoadingOn(bfAlForm);
			bfAlSalva.hide();
			// Eventuale disposizione della chiamata
			
			bfAlModifica.show();
			bfAlForm.find("input").attr("disabled",true);
			unsetLoadingOn(bfAlForm);
		});
		bfAlModifica.click(function(){
			bfAlModifica.hide();
			bfAlSalva.show();
			bfAlForm.find("input").attr("disabled",false);
		});
	});
</script>
<!-- CONTROLLI IN PAGINA -->

<!-- SELETTORE RAPPORTO -->
<div class="formGeneric borderFormRounded margBottomLarge">
	<div class="row-fluid">
		<div class="span4">
			<label class="nomefield">Conto n.</label>
			<!-- Multiselettore -->
			<select class="withIco" id="idNumeroConto">
				<option value="1" selected>123 - Full BF</option>
				<option value="2">124 - No obiettivi</option>
				<option value="3">125 - Saldo 0 no obiettivi</option>
				<option value="4">126 - Solo obiettivi, niente libero</option>
			</select>
			<a href="#" title="Lorem ipsum" class="flRight"><img src="/img/ico1gr_preferito.gif" alt="Lorem ipsum"></a>
			<!-- Fine multiselettore -->
			<!-- SELEZIONE UNICO CONTO (OUTPUT)--
			<span class="output">00000 - 0000005060 - EUR</span><input type="hidden" id="idNumeroConto" value="00000 - 0000005060 - EUR">
			-- FINE SELEZIONE UNICO CONTO (OUTPUT)-->
		</div>
		<div class="span2">&nbsp;</div>
		<div class="span6">
			<label class="nomefield">&nbsp;</label>
			<a href="javascript:;" onclick="javascript:window.open('/html/bf_guida.html','main3','width=600,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes')" class="guida">Guida al servizio<span class="iconahelp"></span></a>
		</div>
	</div>
</div>
<!-- FINE SELETTORE RAPPORTO -->

<h2>La tua situazione</h2>
<!-- GRAFICO -->
<div class="row-fluid margBottomMedium" id="graphContainer">
	<div class="span6"><div id="graphLegenda"></div></div>
	<div class="span6"><div id="graphDiv"></div>
	</div>
</div>
<!-- FINE GRAFICO -->

<br class="clear">
<h2>Imposta alert</h2>
<form id="formAlert">
	<table class="form04">
		<tr class="subtitolo">
			<td class="left nobord">Tipo notifica</td>
			<!-- ATTENZIONE! Il costo cambia a seconda dell'operatore -->
			<td class="center nobord">Sms (<span id="smsPrice">0,25</span> &euro;)</td>
			<td class="center nobord">E-mail (gratis)</td>
			<td class="center nobord">
				<a href="javascript:;" class="aButton" id="alertModifica"><span>Modifica</span></a>
				<a href="javascript:;" class="aButton" id="alertSalva" style="display:none"><span>Salva</span></a>
			</td>
		</tr>
		<tr class="bianco">
			<td class="txt2">Gestione obiettivi di risparmio</td>
			<td class="txt2 center nobord"><input type="checkbox" disabled value="0"/></td>
			<td class="txt2 center nobord"><input type="checkbox" disabled value="1" /></td>
			<td class="txt2 center nobord">&nbsp;</td>
		</tr>
		<tr class="bianco">
			<td class="txt2">Trasferimento da c/c per superamento soglia massima</td>
			<td class="txt2 center nobord"><input type="checkbox" disabled value="0" /></td>
			<td class="txt2 center nobord"><input type="checkbox" disabled value="1" /></td>
			<td class="txt2 center nobord">&nbsp;</td>
		</tr>
		<tr class="bianco">
			<td class="txt2">Trasferimento verso c/c per superamento soglia minima</td>
			<td class="txt2 center nobord"><input type="checkbox" disabled value="0"/></td>
			<td class="txt2 center nobord"><input type="checkbox" disabled value="0"/></td>
			<td class="txt2 center nobord">&nbsp;</td>
		</tr>
	</table>
</form>