<script type="text/javascript">
	$(function() {
		var urlAjax = getPathContext()+ '/common/linkRapidi.do'
		$('#modificaLink').ajaxDialog('dialogLinkRapidi', urlAjax, { title:'Link rapidi' });
	});
</script>


	
		<div id="linkRapidi" class="riquadro clearfix">
			<h1>
				<div class="flag hidden-xxs linkRapidi">&nbsp;</div>Link rapidi
			</h1>
 			<span id="riquadroSpalla">
				<button class="modificaButton pull-right" value=" " name="modifica" id="modificaLink" aria-label="Modifica Link rapidi" title="Modifica Link rapidi"></button>
			</span>
			<ul>
			
			
				
				
					<li title="Bonifico ordinario" class="bonifico_sepa">
					<a href="/WEBHT/pagamenti/bonificoSepa.do" title="Bonifico ordinario"><b>Bonifico ordinario</b></a>
					</li>
				
			
			
			
				
				
					<li title="Ricariche telefoniche" class="ricariche_cellulare">
					<a href="/WEBHT/pagamenti/ricaricaDati.do" title="Ricariche telefoniche"><b>Ricariche telefoniche</b></a>
					</li>
				
			
			
			
				
				
					<li title="Gestione contatti" class="gestione_contatti">
					<a href="/WEBHT/serviziPerTe/contatti.do" title="Gestione contatti"><b>Gestione contatti</b></a>
					</li>
				
			
			
			
				
				
					<li title="Ultime disposizioni" class="ultime_disposizioni">
					<a href="/WEBHT/pagamenti/ultimeDisposizioni.do" title="Ultime disposizioni"><b>Ultime disposizioni</b></a>
					</li>
				
			
			
			
				
				
					<li title="Il tuo profilo" class="il_tuo_profilo">
					<a href="/WEBHT/serviziPerTe/ilTuoProfilo.do" title="Il tuo profilo"><b>Il tuo profilo</b></a>
					</li>
				
			
			
			</ul>
		</div>