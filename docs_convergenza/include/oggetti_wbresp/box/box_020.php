<!--BOX SENZA O CON IMMAGINE DI SFONDO A SECONDA DELLA CLASSE, TITOLI CENTRATI-->
<?php
	if (!isset($nonConto)) {
		$nonConto = true;
	}
?>

<div class="col-xs-12 nopadding box02"  id="<?php print$boxInfo?>" >
	<!-- BOX -->
	<!-- Grandezze testi
		Ai TESTI IN GENERALE non possono essere applicate classi font diverse:
	-->
	
	<h4>TITOLO BOX</h4>
	<h3>Titolo due box</h3>
	<?php
		if ($nonConto) { ?>
	<p class="sottotitolo-02">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
	
		<!--<p class="sottotitolo-02">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
	<div class="col-xs-12">
		<img src="/wbresp/img/trading/container_04_icon.png" class="img-responsive imgCent" alt="">
	</div>
	<p class="sottotitolo-03">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
	<div class="row">
		<div class="col-sm-6 col-xs-12">
			<div class="feat feat1">
				<img src="/wbresp/img/app/feat1.png">
				<p><strong>Lorem</strong><br>
					 dolore magna aliqua. Ut enim ad minim veniam, quis
				</p>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="feat feat2">
				<img src="/wbresp/img/app/feat1.png">
				<p><strong>Lorem</strong><br>
					 dolore magna aliqua. Ut enim ad minim veniam, quis
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-xs-12">
			<div class="feat feat3">
				<img src="/wbresp/img/app/feat3.png">
				<p><strong>Lorem</strong><br>
					 dolore magna aliqua. Ut enim ad minim veniam, quis
				</p>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="feat feat4">
				<img src="/wbresp/img/app/feat4.png">
				<p><strong>Lorem</strong><br>
					 dolore magna aliqua. Ut enim ad minim veniam, quis
				</p>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12">
			<ul class="bullet-green">
				<li><span><b>ricaricare la carta fino a 2.500 €</b> attraverso il sito, l'app, un bonifico o presso gli sportelli automatici</span></li>
				<li><span><b>pagare e prelevare in tutto il mondo</b> con MasterCard</span></li>
				<li><span><b>pagare senza commissioni</b> in area Euro</span></li>
				<li><span><b>tenere sempre sotto controllo le tue spese</b> consultando il saldo e i movimenti della carta dal sito e dall'app.</span></li>
			</ul>
		</div>
	</div>-->
	
	
	<!-- OGGETTO PUNTI ELENCO SU DUE COLONNE CON IMMAGINE
		<div class="row first-row">
			<div class="col-sm-12">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. U</p>
			</div>
		</div>-->
	<?php	
	}
	?>
		<div class="row">
			<div class="col-sm-6 col-xs-12 elenco">
				<!--dare la possibilità di caricare con content le icone -->
				<img src="/wbresp/img/icone/ico_bonifici.png" class="ico" alt="">
				<p>
					<strong>LOREM IPSUM</strong> lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit,</strong> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 elenco">
				<img src="/wbresp/img/icone/ico_utenze.png" class="ico" alt="">
				<ul>
					<li>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipiscing elit</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-xs-12 elenco">
				<!--dare la possibilità di caricare con content le icone -->
				<img src="/wbresp/img/icone/ico_contante.png" class="ico" alt="">
				<p>
					<strong>Lorem ipsum</strong><br>
					Lorem ipsum dolor sit amet, consectetur <a href="#">adipiscing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 elenco">
				<img src="/wbresp/img/icone/ico_contanti.png" class="ico" alt="">
				<p>
					<strong>Lorem ipsum</strong><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-xs-12 elenco">
				<!--dare la possibilità di caricare con content le icone  -->
				<img src="/wbresp/img/icone/ico_ricariche.png" class="ico" alt="">
				<p>
					<strong>Lorem ipsum</strong><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 elenco">
				<img src="/wbresp/img/icone/ico_telepass.png" class="ico" alt="">
				<p>
					<strong>Lorem ipsum</strong><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-xs-12 elenco">
				<!--dare la possibilità di caricare con content le icone -->
				<img src="/wbresp/img/icone/ico_bollettini.png" class="ico" alt="">
				<p>
					<strong>Lorem ipsum</strong><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 elenco">
				<img src="/wbresp/img/icone/ico_assicurazioni.png" class="ico" alt="">
				<p>
					<strong>Lorem ipsum</strong><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-xs-12 elenco">
				<!--dare la possibilità di caricare con content le icone -->
				<img src="/wbresp/img/icone/ico_imposte.png" class="ico" alt="">
				<p>
					<strong>Lorem ipsum</strong><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 elenco">
				<img src="/wbresp/img/icone/ico_assegni.png" class="ico" alt="">
				<p>
					<strong>Lorem ipsum</strong><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-xs-12 elenco">
				<!--dare la possibilità di caricare con content le icone -->
				<img src="/wbresp/img/icone/ico_prestito.png" class="ico" alt="">
				<p>
					<strong>Lorem ipsum</strong><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 elenco">
				<img src="/wbresp/img/icone/ico_contanti.png" class="ico" alt="">
				<p>
					<strong>Lorem ipsum</strong><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-xs-12 elenco">
				<!--dare la possibilità di caricare con content le icone -->
				<img src="/wbresp/img/icone/ico_trasloco.png" class="ico" alt="">
				<p>
					<strong>Lorem ipsum</strong><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 elenco">
				<img src="/wbresp/img/icone/ico_pagamenti-reale.png" class="ico" alt="">
				<p>
					<strong>Lorem ipsum</strong><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				</p>
			</div>
		</div>
		<?php
		if ($nonConto) { ?>
		<div class="row">
			<p class="note-box">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
		</div>
		<?php	
	}
	?>
	
	<?php
		if ($nonConto) { ?>
	<div class="col-xs-12">
          <a class="btn-grlit alignCenter">LOREM IPSUM</a>
    </div>
	
	<div class="row">
	
		<div class="col-sm-6 col-xs-12">
			<a class="btn-whlit btn-fs14" href="">LOREM IPSUM</a>
		</div>
		
		<div class="col-sm-6 col-xs-12">
			<a class="btn-grlit btn-fs14">LOREM IPSUM DOLOR</a>
	   </div>
	 </div>
	 <?php	
	}
	?>
</div>
<!--FINE BOX SENZA O CON IMMAGINE DI SFONDO A SECONDA DELLA CLASSE, TITOLI CENTRATI-->