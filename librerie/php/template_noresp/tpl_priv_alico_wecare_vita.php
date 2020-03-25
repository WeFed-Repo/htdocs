<?php
// Carico le variabili POST necessarie
$senior = (isset($_GET['senior']) && $_GET['senior'] == 'y')? 'true' : 'false';
$isProfiloConsultare = true;
?>
<h1 id="id_label">Preventivo e acquisto online</h1>
<div class="fooform fooform_tit" id="id_aggiorna" style="display:none;"></div>
<br class="clear">

<script>
// Variabili d'ambiente
var librerie = true;
var pathLibrerie = '/librerie/include/commons/ajax';
var cgi_script = '/webankpri';
</script>
<script>
	var prevenSlider = {
			data:null,
			obj: null,
			obj2: null,
			loaded: false,
			val: 0,
			capitale:null,
			durata:null,
			durataMaxPerCapitale: null,
			senior: <?php echo $senior ?>
		},
		// prevenConf = {
		// 	"capitaleMax": 250000,
		// 	"durataMax": 24,
		// 	"durataMaxPerCapitale": {
		// 		"50000": 24,
		// 		"100000": 24,
		// 		"150000": 14,
		// 		"200000": 14,
		// 		"250000": 14
		// 	}
		// }
		prevenConf = {
			"capitaleMax": 150000,
			"durataMax": 8,
			"durataMaxPerCapitale": {
				"50000": 8,
				"100000": 8,
				"150000": 5
			}
		}
		// prevenConf = {
		// 	"capitaleMax": 100000,
		// 	"durataMax": 5,
		// 	"durataMaxPerCapitale": {
		// 		"50000": 5,
		// 		"100000": 5
		// 	}
		// }
		;
</script>
<script src="/js/ret/priv_prevenslider.js"></script>
<script>
	var hasMobile = false;

	var pathSito= '/webankpri';
	
	var isProfiloConsultare = false;
	var descrizConsultare = 'Questa funzione è disponibile solo accedendo con il profilo " Consultare e disporre "';
	
	$(document).ready(function () {
		
		<?php if (!$isProfiloConsultare) { ?>
			// Controlla la disponibilit? per la rata mensile
			$('#pagMeseBtn').click(function (e) {
				checkDisponibilita ('Mensile');
			});
			
			// Controlla la disponibilit? per la rata annuale
			$('#pagAnnoBtn').click(function (e) {
				checkDisponibilita ('Annuale');
			});
		<?php } else { ?>
			$('#pagMeseBtn').title = descrizConsultare;
			$('#pagAnnoBtn').title = descrizConsultare;
		<?php } ?>
	});

	function submitAccount(){
		$('#step').val(0);
		document.simulazioneAlico.submit();
	}
	
	function showPremiPdf(){
		fumatore_ = ($('#fumatore').val() == 'SI')?'true' : 'false';
		capitAssicurato_ = prevenSlider.capitale;
		linkPremi = cgi_script + '/wbOnetoone/alico.do?step=7&capitaleAssicurato=' + capitAssicurato_ + '&fumatore='+ fumatore_;
		window.open(linkPremi);
	}

	function controlli(tipologia_polizza,tipo_premio){
		var tipologia_polizza_scelta = tipologia_polizza;
		$('#frazionamento').val('Mensile');	
		if('WECARE VITA' != 'WECARE VITA'){
			if (tipologia_polizza_scelta == "Individuale"){
					$('#premio').val(0.0);
					$('#individuale_familiare').val(tipologia_polizza_scelta);		
				}
			else{
					$('#premio').val(0.0);
					$('#individuale_familiare').val(tipologia_polizza_scelta);
				}
		}else{
			if(tipo_premio == 'Mensile'){
				$('#frazionamento').val(tipo_premio);
				$('#premio').val(30);
				$('#fumatore').val("true");
				$('#capitaleAssicurato').val(100000);
			}else{
				$('#frazionamento').val(tipo_premio);
				$('#premio').val(300);
				$('#capitaleAssicurato').val(100000);
				$('#fumatore').val("true");
			}
		}
		$('#step').val(1);
		
		document.simulazioneAlico.submit();
	}

	
	function checkDisponibilita (tipo) {
		if(!hasMobile){
			openPopOverLayer('layeralert2', 'floating', 1);
		}else{
			var capitale = prevenSlider.capitale;
			var durata = prevenSlider.durata;
			var dataKey = $('#fumatore').val() + capitale.toString();
			var data = prevenSlider.data;
			var premio = (tipo == 'Mensile')? data.mese : data.anno;
	
			$('#step').val(1);
			$('#frazionamento').val(tipo);
			$('#premio').val(premio);
			$('#capAssicurato').val(capitale);
			$('#durata').val(durata);
			$('#fumatore').val(($('#fumatore').val()== 'SI')?'true' : 'false');
			document.simulazioneAlico.submit();
		}
	}
	//End alico
</script>


<form name="simulazioneAlico" method="POST" action="">
	<!-- inizio parte testuale -->
	<div id="testo_polizza">
		<table class="text01 tabwecare">
			<tr>
				<td><strong>Fai subito il preventivo</strong> personalizzato in base  alle tue esigenze e alle tue caratteristiche. Potrai <strong>acquistare</strong> la polizza direttamente <strong>online</strong> con addebito sul conto corrente Webank, <strong>scegliendo</strong> l&rsquo;importo del capitale e la soluzione di pagamento che preferisci.<br /><br />
					E se il tuo stato di salute cambia, <strong>il premio rimane bloccato</strong> per tutta la durata della polizza!
				</td>
				<td>
					<img title="WECARE VITA PIU" alt="WECARE VITA PIU" src="/img/ret/img_wecare_vita2.gif" />
				</td>
			</tr>
			<tr>
				<td colspan="2"><br /></td>
			</tr>
		</table>
	</div>
	<!-- inizio parte simulatore -->
	
	
	<div id="prevenBox">
		<?php include("../librerie/include/commons/boxeditoriali/box_black_priv_241.php"); ?>
	</div>
	
	
	<!-- fine parte simulatore -->
		
	<!-- inizio parte box polizze -->
	<div id="spazio_box_polizze">
	</div>

	<input id="step" type="hidden" class="importo" name="step" value="1">	
	<input type="hidden" id="frazionamento" name="frazionamento" value="">
	<input type="hidden" id="capAssicurato" name="capitaleAssicurato" value="">
	<input type="hidden" id="premio" name="premio" value="">
	<input type="hidden" id="individuale_familiare" name="individuale_familiare" value="">	
	<input type="hidden" value="nav_priv_wbx_assicurazioniWB" name="tabId">
 	<input type="hidden" value="nav_priv_wbx_vita_preventivo" name="OBSKEY">
</form>

<br class="clear"><br><br>

<p class="note">In questa fase i dati non verranno registrati né comunicati a società esterne.</p>

<div id="layeralert1" class="selOverlay" style="display: none">
	<h2><img src="/img/ret/tit_metlife_overlay.gif" alt=""></h2><a class="close"></a>
	<div class="fesSelCont" id="selContCodSocieta">
		<div class="row">
			<div class="col-xs-4">
				<img src="/img/ret/snoopy_ops.gif" alt="">
			</div>
			<div class="col-xs-8">
				<h3>NON &Egrave; POSSIBILE PROCEDERE</h3>
				<p>
					Questo prodotto NON &egrave; adatto al tuo profilo,
					in quanto non &egrave; possibile aderire se fumi pi&ugrave; di 20 sigarette al giorno.<br />
					Ti consigliamo di vedere <b>Wecare Protezione</b>.
				</p>
			</div>
		</div>
	</div>
	<div class="aButtoncons"><a id="chiudiNoDisp" class="aButton" href="javascript:;">chiudi</a></div>
</div>

<div id="layeralert2" class="selOverlay" style="display: none">
	<h2><img src="/img/ret/tit_metlife_overlay.gif" alt=""></h2><a class="close"></a>
	<div class="fesSelCont" id="selContCodSocieta">
		<div class="row">
			<div class="col-xs-4">
				<img src="/img/ret/snoopy_ops.gif" alt="">
			</div>
			<div class="col-xs-8">
				<p id="msgLayer3">
					L&rsquo;acquisto della polizza dovr&agrave; essere confermato attraverso un codice inviato sul
					cellulare. Prima di proseguire &egrave; necessario aderire al programma sicurezza certificando
					il cellulare
				</p>
			</div>
		</div>
	</div>
	<div class="aButtoncons">
		<a id="chiudiNoDisp" class="aButton flLeft" href="javascript:;">torna alla pagina Assicurazioni</a>
		<a id="chiudiNoDisp" class="aButton flRight" href="javascript:;">certifica numero</a>
		<br class="clear">
	</div>
</div>