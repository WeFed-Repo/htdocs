<div class="spacerdark"></div>
<?php if (isset($promo)) { 

if ($promo == "aol") {
	
	// PROMO DA VARIARE A SECONDA DELLO STEP IN AOL
	?>
	
	<!-- Tieni con te -->
	<div class="widget-aol">
		<div class="widget-head">
			<h4>Tieni con te</h4>
		</div>
		<div class="widget-body">
			<ul>
		        <li>Carta d'identit&agrave;</li>
		        <li>Codice Fiscale</li>
		        <li>Cellulare con SIM attiva</li>
		    </ul>
		</div>
	</div>
	<!-- Fine tieni con te -->

	<!-- Offerta conto Webank -->
	<div class="widget-aol">
		<div class="widget-head">
			<h4>Offerta conto Webank</h4>
		</div>
		<div class="widget-body">
			<ul>
		        <li>Lorem ipsum dolor sit amet</li>
		        <li>Consectetur adipisicing elit</li>
		        <li>Similique <strong>recusandae</strong> asperiores aliquid</li>
		    </ul>
		</div>
	</div>
	<!-- Offerta conto Webank -->
	
	
	<?php if ($aolstep == 0) { ?>
	<!-- Widget container per promo (indicare file HTML della promo -->
	<div class="widget-aol widget-evidente">
		<img src="/wbresp/img/2018_promo_livello5.jpg">
		<a href="#!" class="verifica collapsed" data-toggle="collapse" data-target="#collapseAolPromo" aria-expanded="false" aria-controls="collapseAolPromo"><span>Verifica le condizioni</span></a>
		<div class="dettagli collapse" id="collapseAolPromo">
			<p>Apri il conto corrente e il deposito titoli entro il 31/03/2016 e perfeziona l’apertura entro il 15/04/2016, potrai beneficiare di:</p>
			<ul>
				<li>Commissioni di negoziazione livello 5 sino al 30/06/2016; </li>
				<li>Piattaforma T3 con canone gratuito fino al 30/06/2016;</li>
				<li>esenzione dal pagamento dell’imposta di bollo proporzionale (0,2% su base annua) sulle somme vincolate in conto corrente per il 2016;</li>
				<li>esenzione dall’imposta di bollo fissa sul conto corrente di 34,20€ dovuta per giacenze medie superiori a 5.000€ per il 2016;</li>
				<li>in caso di trasferimento titoli in entrata da altra banca entro il 31/05/2016 potrai beneficiare anche dell’esenzione dal pagamento dell’imposta di bollo proporzionale (0,2% su base annua) sul deposito titoli.</li>
			</ul>
			<p>Consulta tutti i dettagli su Regolamento, Fogli Informativi e Informativa Precontrattuale</p>
		</div>
	</div>

	<!-- Fine widget container per promo -->
	<?php } 
	else
	{
	?>
	<!-- Widget riepilogo promozioni -->
	<div class="widget-aol widget-riepilogopromo">
		<div class="item">
			<h4>Offerta Lorem ipsum</h4>
			<p>Similique <strong>recusandae</strong> asperiores aliquid Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
		<div class="item">
			<h4>Dolor cibo dico</h4>
			<p>Similique <strong>recusandae</strong> asperiores aliquid Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			<div class="inevidenza">
				<p>Lorem ipsum dolor sit amet consectetur <strong>1.55%</strong> amet!</p>
			</div>
		</div>
		<div class="item">
			<h4>Pi&ugrave; di XYZ 3.0% Lorem dolor amet ipsum!</h4>
			<p>Similique <strong>recusandae</strong> asperiores aliquid Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			<div class="inevidenza">
				<p>Lorem ipsum dolor sit amet consectetur <strong>1.55%</strong> amet!</p>
			</div>
		</div>
	</div>
	<!-- Fine widget riepilogo promozioni -->
	<?php
	}
	?>
	
	<!-- Convenzioni collassabili -->
	<div class="widget-aol widget-collapsible">
		<div class="widget-head">
			<h4 class="switchable collapsed" data-toggle="collapse" data-target="#collapseConvenzione" aria-expanded="false" aria-controls="collapseConvenzione">Amici di we@service <span class="openclose"></span></h4>
		</div>
		<div class="widget-body collapse"  id="collapseConvenzione">
			<ul>
			  	<li><strong>Bolli gratuiti</strong> sul conto corrente per 12 mesi</li>
			  	<li><strong>Sconto sul tasso pari a 0,10% (10 basis point)</strong> su tutti i mutui del catalogo Webank</li>
			</ul>
		</div>
	</div>

	<!-- Fine convenzioni collassabili -->

	
	<!-- Documenti collassabili -->
	<div class="widget-aol widget-collapsible">
		<div class="widget-head">
			<h4 class="ico-pdf switchable"  data-toggle="collapse" data-target="#collapseDocs" aria-expanded="true" aria-controls="collapseDocs">Documenti <span class="openclose"></span></h4>
		</div>
		<div class="widget-body collapse in" id="collapseDocs">
			<ul class="listaLink">
			  	<li><a href="#">Foglio informativo</a></li>
				<li><a href="#">Condizioni generali</a></li>
				<li><a href="#">Comunicazione sull'anatocismo bancario</a></li>
				<li><a href="#">Modulo richiesta</a></li>
				<li><a href="#">Documento di sintesi</a></li>
				<li><a href="#">Informativa precontrattuale servizi a distanza</a></li>
				<li><a href="#">Principali diritti del cliente</a></li>
				<li><a href="#">Guida pratica al conto</a></li>
				<li><a href="#">Guida pratica e modulo per ricorrere all'Arbitrio</a></li>
				<li><a href="#">Modulo di richiesta servizio Prelievo Cardless</a></li>
				<li><a href="#">Foglio informativo servizio Prelievo Cardless</a></li>
			</ul>
			<hr>
			<h5>Richiesta deposito titoli</h5>
			<ul class="listaLink">
				<li><a href="#">Condizioni generali</a></li>
				<li><a href="#">Documento di sintesi</a></li>
				<li><a href="#">Informativa Mifid</a></li>
				<li><a href="#">Guida camera conciliazione della CONSOB</a></li>
		    </ul>
		</div>
	</div>

	<!-- Fine documenti collassabili -->


	<?php
}
else
{

	// PROMO PARTE PUBBLICA "NORMALI"

?>
<!-- Chiamata ai widget dinamici -->
<div id="widgetContainer" class="loading"></div>
<script type="text/javascript">
<?php switch($promo) {

	case "docaol";
	?>
	 var loadWidgets = ["wdg_doc_aol_tracking_default.html"];
	<?php break;
	default: ?>
	var loadWidgets = ["wdg_ban_applewatch.html"];
<?php } ?>
</script>
<!-- Fine chiamata ai widget dinamici -->
<?php } 

}
?>
