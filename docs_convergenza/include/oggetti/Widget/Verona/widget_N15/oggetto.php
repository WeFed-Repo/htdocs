<div class="widget loading dark">
	<h2>Indici</h2>
	<a class="minibtn reload" id="indiciReload"><span class="icon icon-aggiorna"></span></a>
	<!-- Fine selettore rapporto -->
	<div id="indicielenco" class="datioutput"></div>
	<a class="cta" href="#">Indici</a>
	<script type="text/javascript">

		$(function(){

			// Funzione es. caricamento movimenti
			refreshIndici = function () {
				var srap = $('#indicielenco');
				srap.parents(".widget").addClass("loading dark");
				// Blocco interfaccia		
				$.ajax({
					async: true,
					method: "POST",
					dataType: 'html',
						url: '/include/oggetti/Widget/Verona/widget_N15/esempio_indici.php',
						success: function(response) {
						srap.html(response);
						srap.parents(".widget").removeClass("loading dark");
						}
					});
			};

			$("#indiciReload").click(refreshIndici);

			/* Prima esecuzione*/
			refreshIndici();
			
		});
		
	</script>
</div>
