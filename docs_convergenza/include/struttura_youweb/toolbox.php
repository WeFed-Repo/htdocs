<!-- TOOLBOX (INCLUDE VIA JSP)  -->
<script type="text/javascript" src="/HT/fe/js/script/toolbox.js"></script>
<div id="tools" class="nochat">
	
	<!-- BLOCCO ASSISTENTE VIRTUALE -->
	<div id="virtAss" style="display:none">
		<div id="vaExtended" style="display:none">
			<div class="vaExtTop">
				<span class="title">Vedi anche</span>
				<a href="javascript:;" id="vaLinguetta" title="Espandi">
					<span class="icon icon-piu"></span>
					<span class="icon icon-meno"></span>
				</a>
			</div>
			<div id="vaExtConsole" style="display:none">
			</div>
			<div class="vaExtBody"></div>
		</div>
		<div class="vaContainer">
			<div class="vaTop">
				<span id="vaTitle">Paolo. L'assistente virtuale</span>
				<a href="javascript:;" class="vaChiudi" title="Chiudi">&nbsp;</a>
			</div>
			<div class="vaBody">
				<div id="vaDialog">
				</div>
				<form autocomplete="off" id="vaFormTag" action="javascript:;" method="post">
					<div id="vaForm">
						<input type="text" id="vaDom" maxlength="200" name="campo" class="waiting" value="Scrivi quello di cui hai bisogno"/>
						<a title="Chiedi a Paolo" href="javascript:;" id="vaAsking" class="icon icon-riepilogo_conto_iban"></a>
					</div>
				</form>
				<br class="clear"/>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="/HT/fe/js/script/assistente_virtuale.js"></script>
	<script type="text/javascript">
		
		<?php 
			?>
				var vaBanca = 20,
				vaCodiceutente = "1FD234567890",
				vaPiattaforma = "consultareEdisporre";


				<?php 
					// Simula un redirect
					if ($_GET["sQuestion"] != "") {
						?>
							vaExtLoaded = true;
							vaOpenOnStart(<?php print $_GET["sLeft"];?>,<?php print $_GET["sTop"];?>,"<?php print $_GET["sQuestion"];?>");
						<?php
					}
				?>

				/* Variabili assistente virtuale

				$(function(){
					
				// Inizializzazioni assistente virtuale
				vaOpen(); // Apertura forzata con benvenuto generico

				// Apertura da "redirect" su "Bonifico" con posizione 200 px da sinistra e 100 dall'alto
				vaExtLoaded = true;
				vaOpenOnStart(200,100,"prova extended");
				
				});
				
				*/

			<?php

		?>
	
	</script>
	<!-- FINE BLOCCO ASSISTENTE VIRTUALE -->


	<div class="toolbox-wrap">
		<div class="toolbox toolbox-prenota">
			<div class="shadow"></div>
			<a href="javascript:;" class="toolbox-toggle">Hai bisogno di aiuto?</a>
			<div class="toolbox-console">
			    <?php virtual("/include/oggetti/Overlayer/commons/010_call_me_back/oggetto.php"); ?>
				<a class="tool-btn virtass"><span class="tool-icon"></span>Chiedi a Paolo</a>
				<div id="chatBtn"></div>
			</div>
		</div>
	</div>
</div>
<!-- FINE TOOLBOX (INCLUDE VIA JSP)  -->