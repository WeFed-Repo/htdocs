<div class="widget loading dark">
	<h2>Ultimi movimenti</h2>
	<a class="minibtn reload" id="movimentiReload"><span class="icon icon-aggiorna"></span></a>

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
	<div class="dropdown selector" id="umselrapp">
		<input type="hidden" id="umrappid" value="1"/>	
		<div class="selector-btn selector-el" data-toggle="dropdown">
			<span>Mario Rossi</span>
			<span class="selrappconto">1156456456566555</span>
		</div>
		<div class="dropdown-menu selector-els">
			<a 	class="selector-el selected" data-idel="1">
				<span>Mario Rossi</span>
				<span class="selrappconto">1156456456566555</span>
			</a>
			<a class="selector-el" data-idel="2">
				<span>Lucilla Verdi</span>
				<span class="selrappconto">1156456456566579</span>
			</a>
			<a class="selector-el" data-idel="3">
				<span>Mario Rossi</span>
				<span class="selrappconto">1156456456566779</span>
			</a>
			<a class="selector-el" data-idel="4">
				<span>Mario Rossi</span>
				<span class="selrappconto">1156456456566871</span>
			</a>
			<a class="selector-el" data-idel="5">
				<span>Mario Rossi</span>
				<span class="selrappconto">1156456456566872</span>
			</a>

		</div>
	</div>
	<!-- Fine selettore rapporto -->
	<div id="ultimimovimenti" class="datioutput"></div>

	<script type="text/javascript">

		$(function(){

			

			// Funzione es. caricamento movimenti
			refreshMovimenti = function () {
				var srap = $('#ultimimovimenti');
				srap.parents(".widget").addClass("loading dark");
				// Blocco interfaccia		
				$.ajax({
					async: true,
					method: "POST",
					data: {
						nconto : $("#umrappid").val()
					},
					dataType: 'html',
						url: '/include/oggetti/Widget/widget_N01/esempio_movimenti.php',
						success: function(response) {
						srap.html(response);
						srap.parents(".widget").removeClass("loading dark");
						}
					});
				};

			$("#movimentiReload").click(refreshMovimenti);

			/* Prima esecuzione*/
			refreshMovimenti();

			$("#umrappid").on("change", refreshMovimenti);

		});
		
	</script>
	
</div>

