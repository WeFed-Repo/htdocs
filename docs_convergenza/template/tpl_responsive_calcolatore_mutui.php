<h2>Fai il preventivo</h2>
<?php 

if($site === "youweb"){
	?>
	<p id="id_frase_introduttiva" style="display:none">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident magni, hic laboriosam, facere expedita suscipit odit soluta ut? Esse.</p>
	<?php
}

?>
<div class="row">
	<div class="<?php print ($site==="webank")? "col-sm-9 col-xs-12": "col-xs-12"; ?>">
		<script type="text/javascript" src="/common/fe/js/priv_calcolatore_mutui.js?a=423"></script>
		<div id="mCalcWrapper" class="loading">
		</div>
		<script type="text/javascript">
			var mCodice = "<?php print $_GET["codicemutuo"];?>",
				mValoreimmobile = "",
				mImportomutuo = "",
				mDurata = "",
				mAss="CAT",
				mAssicurazioni = "",
				mFinalita  = "Acquisto",
				mPrimacasa = "SI",
				mPagetopost  = "/connect.php?page=strutt_priv.php&tpl=tpl_responsive_finanziamenti_preventivo_step_1.php&liv0=5&liv1=0&liv2=1&liv3=0&responsive=y&fdeb=true",
				mUrl = "/include/ajax/calcolatore_mutui_json.php?rand=" + Math.random();
			$(window).on("load",mCalcShow); 
		</script>
		<?php if ($site === "youweb") { 
		?>
		<!-- Blocco CMB You -->
		<div class=" visible-sm visible-xs">
				<hr>
				<section>
					<div class="row">
						<div class="col-sm-6">
							<div class="testoIcona">
								<span class="icon-wrapper"><i class="icon icon-ico_cta_compara fLeft" title="ico_cta_prenota"></i></span>
								<div class="leftTesto glifiLeftText">
									<h3>Vuoi maggiori informazioni sui mutui?<br>Ti richiamiamo noi</h3>
									<a href="javascript:;" title="Call me back" class="btn btn-link">Call me back<i class="icon icon-arrow_right" title="icon-freccia_dx"></i></a>
								</div>	
							</div>	
						</div>
					</div>
				</section>
				<hr>
				<section>
					<div class="documenti">
						<h3 class="titleSection titleForm">DOCUMENTI DI TRASPARENZA</h3>
						<ul>
							<li><a target="_blank" href="#" title="Guida pratica al mutuo"><i class="icon icon-file_pdf_fill fLeft"></i><span class="fLeft btnLink paddingLeftSmall">Guida pratica al mutuo</span></a></li>
							<li><a target="_blank" href="#" title="Tassi d’usura in vigore"><i class="icon icon-file_pdf_fill fLeft"></i><span class="fLeft btnLink paddingLeftSmall">Tassi d’usura in vigore</span></a></li>
							<li><a target="_blank" href="#" title="Guida pratica all’ABF"><i class="icon icon-file_pdf_fill fLeft"></i><span class="fLeft btnLink paddingLeftSmall">Guida pratica all’ABF</span></a></li>
							<li><a target="_blank" href="#" title="Guida all’utilizzo del portale ABF"><i class="icon icon-file_pdf_fill fLeft"></i><span class="fLeft btnLink paddingLeftSmall">Guida all’utilizzo del portale ABF</span></a></li>
							<li><a target="_blank" href="#" title="Guida alla centrale dei rischi"><i class="icon icon-file_pdf_fill fLeft"></i><span class="fLeft btnLink paddingLeftSmall">Guida alla centrale dei rischi</span></a></li>
						</ul>
					</div>
				</section>
		</div>
		<!-- Fine blocco CMB You -->
		<hr>
		<p class="note"><strong>Messaggio pubblicitario con finalit&agrave; promozionale.</strong><br>
			Per le condizioni economiche di tutte le tipologie di mutuo fare riferimento alle Informazioni Generali sul Credito Immobiliare offerto a Consumatori disponibili presso le Filiali e online alla sezione "Trasparenza" sul sito <a href="http://www.bancobpm.it" target="_blank" title="BancoBpm">bancobpm.it</a>. L'erogazione del finanziamento &egrave; subordinata alla normale istruttoria da parte della Banca. Il credito &egrave; garantito da un'ipoteca sul diritto di propriet&agrave; o su altro diritto reale avente per oggetto un bene immobile residenziale.
		</p>

		<?php
		} 
		?>

	</div>
	<?php
		if($site==="webank") { ?>
		<div class="col-sm-3 col-xs-12">
			<h3>Pochi passi per richiedere il mutuo</h3>
			<p>
				Calcola la <strong>rata</strong>, scegli il <strong>mutuo</strong> che fa per te, aggiungi <strong>l'assicurazione</strong> 
				pi&ugrave; adatta a proteggere il tuo investimento e invia la <strong>richiesta</strong>.
			</p>
			<p>
				Uno dei nostri <strong>gestori mutui</strong> sar&agrave; a tua disposizione per seguirti in tutti i prossimi passi: 
				dalla prima verifica di fattibilit&agrave; fino all&#39;attivazione del mutuo.
			</p>
		</div>
		<?php
	}
	?>
</div>

	
