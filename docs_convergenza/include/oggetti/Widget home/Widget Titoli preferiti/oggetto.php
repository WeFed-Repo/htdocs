<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.jqGrid.locale-it.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.jqGrid.js"></script>
<script type="text/javascript" src="/HT/JS/script/funzioniInvestimenti.js?v=161229"></script>

<script type="text/javascript" src="/HT/JS/HashMap.js"></script>
<script type="text/javascript" src="/HT/JS/script/funzioniJQGrid.js"></script>
<script type="text/javascript" src="/HT/JS/Highcharts/cs/chartserverHS.min.js"></script>
<script type="text/javascript" src="/HT/JS/Highcharts/js/highstock.js"></script>
<script type="text/javascript" src="/HT/JS/lightstreamer.js"></script>
<script type="text/javascript" src="/HT/JS/funzioniPush.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	titoliPreferitiHome();
		
	/** inizializzazione link da codificare */
	$('#refreshTitoliPreferiti').click(function() {
		titoliPreferitiHome();
	});	
	
	
});	

if(isMobile()){
	$( document ).ajaxComplete(function( event, xhr, settings ) {
		$("table#tableTitoliHome thead th:first-child").addClass("hidden-xs");
		$("table#tableTitoliHome tr").each(function(){
			$(this).find(" td:nth-child(1)").addClass("hidden-xs");
			$(this).find(" td:nth-child(2)>a").attr("onclick", "");
		})
	});
}
</script>
<div class="riquadro clearfix " id="titolipreferiti">
	<h1>
		<div class="flag hidden-xxs titoliPreferiti">&nbsp;</div>
		Titoli preferiti
	</h1>

	<!--div id="loadingtitolipreferiti" class="caricamentoAjax" style="display: none;">
		<img src="/HT/IMAGES/caricamento.gif">
	</div-->
	<span id="refreshTitoliPreferiti" class="context-buttons"> 
		<a title="Aggiorna" id="refresh" class="refreshButton pull-right"> </a>
	</span>
	<div id="pref" style="opacity: 1;">
		<div class="ui-state-highlight ui-corner-all boxMsg" style="position: relative; top: 0px; left: -0.463074px;">
			<span class="ui-icon ui-icon-info"></span>
			<strong>Attenzione:</strong> 
			<span class="msg">Titoli non presenti</span>
		</div>
	</div>
	<span style="padding-left:5px">Fonte dati: Borsa Italiana  Dati in tempo ritardato di 15 minuti</span> 
	<div id="actions" class="actions pull-right margin-bottom5">
		<div class="actions pull-right">
			<input class="btn button thin XL hidden-xs" value="Titoli preferiti" onclick="javascript:goToPage('/investimenti/titoliPreferiti.do')" type="button">
		</div>
	</div>
</div>