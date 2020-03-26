<?php

$lrapidi = array(
	"bonifico_sepa" => "Bonifico ordinario",
	"saldo_movimenti" => "Saldo movimenti",
	"vincola_partite_conto_dep2" => "Vincola partite conto dep2",
	"tuoi_vincoli_conto_dep2" => "Tuoi vincoli conto dep2",
	"ricariche_cellulare" => "Ricariche cellulare",
	"bollettini_postali" => "Bollettini postali",
	"bollettino_mav" => "Bollettino mav",
	"bollettino_rav" => "Bollettino rav",
	"ultime_disposizioni" => "Ultime disposizioni",
	"domiciliazioni" => "Domiciliazioni",
	"gestione_beneficiari" => "Gestione beneficiari",
	"gestione_contatti" => "Gestione contatti",
	"carte_movimenti" => "Carte movimenti",
	"carte_ricarica" => "Carte ricarica",
	"carte_scarica" => "Carte scarica",
	"carte_cambio_pin" => "Carte cambio pin",
	"carte_pannello_controllo" => "Carte pannello controllo",
	"riepilogo_alert" => "Riepilogo alert",
	"posta_arrivo" => "Posta arrivo",
	"archivio_posta" => "Archivio posta",
	"titoli" => "Titoli",
	"titoli_dossier" => "Titoli dossier",
	"ordini_movimenti_titoli" => "Ordini movimenti titoli",
	"portafoglio_simulato_titoli" => "Portafoglio simulato titoli",
	"indici_mercati" => "Indici mercati",
	"youwin" => "Youwin",
	"youshop" => "Youshop",
	"il_tuo_profilo" => "Il tuo profilo",
	"rapporti_predefiniti" => "Rapporti predefiniti",
	"elenco_news" => "Elenco news",
	"pagamento_f24" => "Pagamento f24",
	"coordinate_iban" => "Coordinate iban",
	"saldo_a_data" => "Saldo a data",
	"finanziamenti" => "Finanziamenti",
	"gestione_patrimoniale" => "Gestione patrimoniale",
	"trasferimento_tra_conti" => "Trasferimento tra conti",
	"bollo_auto" => "Bollo auto"

	)
?>


<script type="text/javascript">
	$(function() {
		var urlAjax = '/template/modale_link_rapidi.php'
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
	<?php
		foreach ($lrapidi as $key => $value){ ?>
		<li title="<?php print $value; ?>" class="<?php print $key; ?>">
			<a href="/WEBHT/pagamenti/bonificoSepa.do" title="<?php print $value; ?>"><b><?php print $value; ?></b></a>
		</li>
		<?php	}
	?>
		
	
	</ul>
</div>