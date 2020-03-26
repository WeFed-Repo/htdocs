<div class="widget loading dark">

	<h2>Riepilogo depositi</h2>
	<script>
		CCNumber = 1
	</script>
	<a class="minibtn reload" id="depReload"><span class="icon icon-aggiorna"></span></a>

	<!-- Rapporto singolo -->
	<!--	
	<div class="selector">
		<div class="selector-singolo">
			<span>Mario Rossi</span>
			<span class="selrappconto">1156456456566555</span>
		</div>
	</div>
	-->
	<!-- Rapporto singolo -->

	<!-- Selettore rapporto -->
	<div class="dropdown selector" id="riepdepwrap">
		<input type="hidden" id="riepdep" value="1"/>	
		<div class="selector-btn selector-el" data-toggle="dropdown">
			<span>Mario Rossi</span>
			<span class="deposito">DEP-456456566555</span>
		</div>
		<div class="dropdown-menu selector-els">
			<a 	class="selector-el selected" data-idel="1">
				<span>Mario Rossi</span>
				<span class="deposito">DEP-456456566555</span>
			</a>
			<a class="selector-el" data-idel="2">
				<span>Lucilla Verdi</span>
				<span class="deposito">DEP-456456566532</span>
			</a>
			<a class="selector-el" data-idel="3">
				<span>Mario Rossi</span>
				<span class="deposito">DEP-456456566541</span>
			</a>
			<a class="selector-el" data-idel="4">
				<span>Mario Rossi</span>
				<span class="deposito">DEP-456456566577</span>
			</a>
			<a class="selector-el" data-idel="5">
				<span>Mario Rossi</span>
				<span class="deposito">DEP-456456566588</span>
			</a>

		</div>
	</div>
	<!-- Fine selettore rapporto -->
	<div id="riepdeposito" class="datioutput"></div>
	
<script type="text/javascript">

	$(function(){

		// Funzione es. caricamento movimenti
		refreshDep = function () {
			var srap = $('#riepdeposito');
			srap.parents(".widget").addClass("loading dark");
			// Blocco interfaccia		
			$.ajax({
				async: true,
				method: "POST",
				data: {
					nconto : $("#riepdep").val()
				},
				dataType: 'html',
					url: '/include/oggetti/Widget/widget_N05/esempio_depositi.php',
					success: function(response) {
					srap.html(response);
					srap.parents(".widget").removeClass("loading dark");
					}
				});
		};

		$("#depReload").click(refreshDep);

		/* Prima esecuzione*/
		refreshDep();

		$("#riepdep").on("change",refreshDep);
	
	});
	
</script>
</div>


