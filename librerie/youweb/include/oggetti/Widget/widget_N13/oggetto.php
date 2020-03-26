<div class="widget loading dark">
	<h2>Notifiche</h2>
	<a class="minibtn reload" id="notificheReload"><span class="icon icon-aggiorna"></span></a>
	<!-- Fine selettore rapporto -->
	<div id="sitNotifiche" class="datioutput"></div>
	<a class="cta" href="#">Posta in arrivo</a>
	<script type="text/javascript">

	$(function(){

		// Funzione es. caricamento movimenti
		refreshNotifiche = function () {
			var srap = $('#sitNotifiche');
			srap.parents(".widget").addClass("loading dark");
			// Blocco interfaccia		
			$.ajax({
				async: true,
				method: "POST",
				dataType: 'html',
					url: '/include/oggetti/Widget/widget_N13/esempio_notifiche.php',
					success: function(response) {
					srap.html(response);
					srap.parents(".widget").removeClass("loading dark");
					}
				});
		};

		$("#notificheReload").click(refreshNotifiche);

		/* Prima esecuzione*/
		refreshNotifiche();
		
	});
	
</script>
</div>
