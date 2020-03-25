<!-- PAGINA RICERCA -->
<?php 
// Raccoglie le variabili da post
$codicesocieta = $_POST["codicesocieta"];
$codicecomparto = $_POST["codicecomparto"];
$divisa = $_POST["divisa"];
$fondosicav = $_POST["fondosicav"];

if(empty($codicesocieta)) {
	$codicesocieta = "12321";
	$codicecomparto = "312321";
	$divisa = "euro";
	$fondosicav = "Fondo";

}
?>
<!-- INCLUSIONI ESTERNE -->
<script type="text/javascript" src="/wscmn/js/amcharts/amcharts.js"></script>
<script type="text/javascript" src="/wscmn/fe/js/priv_fes_resp.js"></script>
<script type="text/javascript" src="/wscmn/fe/js/priv_fes_fondo_resp.js"></script>
<!-- FINE INCLUSIONI ESTERNE -->
<!-- ACQUISIZIONE DEI DATI ESTERNI ED INNESCHI VARI -->
<script type="text/javascript">
	// Esposizione dei parametri ricevuti in post
	fesFondoStart(
		{"codicesocieta": "<?php print ($codicesocieta); ?>",
		"codicecomparto": "<?php print ($codicecomparto); ?>",
		"divisa": "<?php print ($divisa); ?>", 
		"fondosicav":"<?php print ($fondosicav); ?>"}
	);

</script>
<h2>Scheda fondo</h2>
<div id="fesFondoWrap" class="loading"></div>

<!-- Disclaimer legale -->
<p class="note" id="noteRicerca">
<strong>Prima dell'adesione occorre leggere attentamente i prospetti informativi disponibili sul Sito</strong>, nonchè sul sito internet dell'offerente le quote/azioni dei Fondi/Sicav.<br>
I dati e le informazioni non costituiscono offerta al pubblico di prodotti e/o strumenti finanziari e non saranno da intendersi quali raccomandazioni personalizzate. Non costituiranno, pertanto, consulenza o parere della Banca sul merito di una particolare operazione o strategia di investimento con riguardo al profilo del singolo Cliente.<br>
Il Cliente, inoltre, deve considerare che i singoli Fondi comuni d'investimento e/o comparti di Sicav possono avere profili di rischio e caratteristiche diversi per i quali si invita a leggere i relativi prospetti informativi.<br>
Ciascun investimento è da ritenersi assunto dal Cliente a proprio esclusivo rischio in piena autonomia e resta nella totale disponibilità di quest'ultimo, il quale deve anche avere cura nel tempo di seguirne l'andamento.<br>
L'investimento in Fondi non garantisce sempre e comunque un rendimento ed è possibile che il capitale investito non venga restituito per intero.<br>
Ogni previsione di profitto o indicazione di risultati ottenuti in passato ha puramente carattere informativo, pertanto, i rendimenti passati dei singoli Fondi e/o comparti di Sicav non sono indicativi di quelli futuri. Con riguardo agli strumenti finanziari quotati sul mercato, il rendimento può variare nel tempo anche in funzione del prezzo di negoziazione sul mercato.<br>
I dati inerenti ai rendimenti dei Fondi/Sicav, e del relativo benchmark ove presente, sono al lordo degli oneri fiscali.<br>
Per informazioni in merito ai servizi di investimento e agli strumenti finanziari s'invita a consultare l'Informativa preliminare MiFID.<br>
Tutti i dati e le informazioni presenti su questa pagina sono di titolarità di FIDA S.r.l., che pertanto è responsabile dell'esattezza e veridicità dei dati forniti e/o elaborati. L'utilizzo a qualsiasi titolo dei dati, delle informazioni e delle notizie ricevute dal Cliente è pertanto a completo rischio del Cliente. Qualsiasi riproduzione, diffusione, comunicazione o utilizzo dei medesimi è vietata fuori dalle finalità private per cui sono forniti.
</p>
<!-- Fine disclaimer legale -->