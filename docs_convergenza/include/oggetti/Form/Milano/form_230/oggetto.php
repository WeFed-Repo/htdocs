<h2>Fai il preventivo</h2>
<p>Inserisci le informazioni richieste per calcolare la rata più adatta alle tue esigenze</p>
<div class="row">
	<div class="col-xs-12">
		<script type="text/javascript" src="/common/fe/js/priv_calcolatore_prestiti.js?a=423"></script>
		<div id="prestCalcWrapper" class="loading">
		</div>
		<script type="text/javascript">
			var prestUrl = "/include/ajax/calcolatore_prestiti_json.php?rand=" + Math.random();
			$(window).on("load",prestCalcShow); 
		</script>
	</div>
</div>