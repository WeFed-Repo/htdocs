<div class="widget loading dark">
	<h2>Situazione rapporti</h2>
	<a class="minibtn reload" id="sitRappReload"><span class="icon icon-aggiorna"></span></a>
	<!-- Fine selettore rapporto -->
	<div id="sitRapp" class="datioutput"></div>
	<a class="cta" href="#">Pannello rapporti</a>
	<script type="text/javascript">

	$(function(){

		// Funzione es. caricamento movimenti
		refreshSitRapp = function () {
			var srap = $('#sitRapp');
			srap.parents(".widget").addClass("loading dark");
			// Blocco interfaccia		
			$.ajax({
				async: true,
				method: "POST",
				dataType: 'html',
					url: '/include/oggetti/Widget/Verona/widget_N14/esempio_rapporti.php',
					success: function(response) {
					srap.html(response);
					srap.parents(".widget").removeClass("loading dark");
					}
				});
		};

		$("#sitRappReload").click(refreshSitRapp);

		/* Prima esecuzione*/
		refreshSitRapp();
		
	});
	
</script>
</div>
