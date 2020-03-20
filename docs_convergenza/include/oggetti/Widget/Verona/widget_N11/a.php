<div class="widget" id="spallaRiepcarteel">
	<h2>Riepilogo carte</h2>
	<a class="minibtn reload" id="carteReload"><span class="icon icon-aggiorna"></span></a>
	<!-- Selettore rapporto -->
	<div class="dropdown selector" id="riepcartewrap">
		
		<input type="hidden" id="riepcarte" value="$AA$REl4G2VMQHEbZUxAcVdlTUh4X2RN">	
		<div class="selector-btn selector-el" data-toggle="dropdown">
				<span>DOMANIN FABRIZIO</span>
				<span class="carta">YouCard&nbsp;*9130</span>
		</div>
		
		<div class="dropdown-menu selector-els">
			<a class="selector-el selected" data-idel="$AA$REl4G2VMQHEbZUxAcVdlTUh4X2RN">
				<span>DOMANIN FABRIZIO</span>	
				<span class="carta">
					YouCard&nbsp;*9130
				</span>
			</a>
			<a class="selector-el" data-idel="$AA$RU14G2dETnkbZURJeVdnQkp/X2NM">
				<span>DOMANIN FABRIZIO</span>	
				<span class="carta">
					Bancomat&nbsp;*6868
				</span>
			</a>
		</div>
	</div>
	<div id="riepcarteel" class="datioutput"></div>
	<!-- Fine selettore rapporto -->
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
					url:getPathContext() + '/common/contentLeftMovimentiCartaConto.do',
					success: function(response) {
					srap.html(response);
					srap.parents(".widget").removeClass("loading dark");
					}
				});
		};

	//	$("#carteReload").click(refreshCarte);

		/* Prima esecuzione*/
		refreshCarte();

		//$("#riepcartewrap a.selector-el").click(refreshCarte);
	


	//$(".widget").on("click", "#riepcartewrap a.selector-el",refreshCarte );
	$("body").on("change","#spallaRiepcarteel", refreshCarte );
	});
</script>

</div>
