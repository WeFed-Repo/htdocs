<div class="widget loading dark">
	<h2>Riepilogo carte</h2>
	<script>
		CCNumber = 2
	</script>
	<a class="minibtn reload" id="carteReload"><span class="icon icon-aggiorna"></span></a>

	<!-- Rapporto singolo -->
	<!--	
	<div class="selector">
		<div class="selector-singolo">
			<span>Mario Rossi</span>
			<span class="carta">YouCard *0000</span>
		</div>
	</div>
	-->
	<!-- Rapporto singolo -->

	<!-- Selettore rapporto -->
	<div class="dropdown selector" id="riepcartewrap">
		<input type="hidden" id="riepcarte" value="1"/>	
		<div class="selector-btn selector-el" data-toggle="dropdown">
			<span>Mario Rossi</span>
			<span class="carta">YouCard *0000</span>
		</div>
		<div class="dropdown-menu selector-els">
			<a 	class="selector-el selected" data-idel="1">
				<span>Mario Rossi</span>
				<span class="carta">YouCard *3213</span>
			</a>
			<a class="selector-el" data-idel="2">
				<span>Lucilla Verdi</span>
				<span class="carta">YouCard *9998</span>
			</a>
		</div>
	</div>
	<!-- Fine selettore rapporto -->
	<div id="riepcarteel" class="datioutput"></div>
	<script type="text/javascript">

	$(function(){

		// Funzione es. caricamento movimenti
		refreshCarte = function () {
			var srap = $('#riepcarteel');
			srap.parents(".widget").addClass("loading dark");
			// Blocco interfaccia		
			$.ajax({
				async: true,
				method: "POST",
				data: {
					nconto : $("#riepcarte").val()
				},
				dataType: 'html',
					url: '/include/oggetti/Widget/Verona/widget_N11/esempio_carte.php',
					success: function(response) {
					srap.html(response);
					srap.parents(".widget").removeClass("loading dark");
					}
				});
		};

		$("#carteReload").click(refreshCarte);

		/* Prima esecuzione*/
		refreshCarte();

		$("#riepcarte").on("change",refreshCarte);

	});
	
</script>
</div>


