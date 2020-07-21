<?php
	$nonCarte = false;
	$isBlack = true;
	$nonCms = false;
	
	$imgBackHero = '/wbresp/img/hero/main_hero_prestiti_e_fidi.jpg';
	$isInvestimenti = false;
	$imgBackDark = '/wbresp/img/sfondi-box/carte_webank_bg_blocco1.jpg';
	$imgBackLight = '/wbresp/img/sfondi-box/carte_webank_bg_blocco2.png';
	
?>
<!--MINI HERO -->
<?php virtual ("/include/oggetti_wbresp/box/box_010.php")?>
<!--FINE MINI HERO -->

<!--2 COLONNE DX WHITE -->
<?php
	$isBlack = false;
	$imgBackLight = '/wbresp/img/sfondi-box/carte_webank_bg_blocco3.png';
	$idCar= 'carouselContoLight2';
	$invertiColSx = '';
	$invertiColDx = '';
	$boxdueCol= 's2';
?>
<?php virtual ("/include/oggetti_wbresp/box/box_030.php")?>
<!--FINE 2 COLONNE DX WHITE -->

<!--2 COLONNE SX WHITE -->
<?php
	$isBlack = false;
	$imgBackLight = '/wbresp/img/sfondi-box/carte_webank_bg_blocco3.png';
	$idCar= 'carouselContoLight2';	
	$invertiColSx = 'col-md-push-6';
	$invertiColDx = 'col-md-pull-6';
	$boxdueCol= 's3';
?>
<?php virtual ("/include/oggetti_wbresp/box/box_030.php")?>
<!--FINE 2 COLONNE SX WHITE -->

<!--2 RIGHE WHITE -->
<?php
	$isBlack = false;
	$imgBackLight = '/wbresp/img/sfondi-box/carte_webank_bg_blocco3.png';
	$idCar= 'carouselContoLight2';	
	$invertiColSx = 'col-md-push-6';
	$invertiColDx = 'col-md-pull-6';
	$boxdueCol= 's4';
?>
<?php virtual ("/include/oggetti_wbresp/box/box_030.php")?>
<!--FINE 2 RIGHE WHITE -->

<!-- BOX NO CMS -->
	<div class="prestiti container05" id="s5">
		<div class="row">
		  <div class="col-lg-12 col-sm-12 col-xs-12">
			<h4>Attivalo online</h4>
			<h3>Puoi richiederli direttamente online dall'area riservata.</h3>
			<h5>Prestito e Fido sono riservati ai correntisti Webank.</h5>
		  </div>
		</div>
		<div class="row">
		  <div class="col-lg-6 col-sm-6 col-xs-12">
			<p class="punti punto1">
			  Scegli il prodotto di tuo interesse
			</p>
			<p class="punti punto2">
			  Compila la richiesta online
			</p>
			<p class="punti punto3">
			  Stampa e invia il pacchetto di attivazione per completare la richiesta
			</p>
			<p class="punti punto4">
			  Ricevi l'esito in tempi brevi e hai la disponibilit&agrave; direttamente sul tuo conto webank
			</p>
		  </div>
		  <div class="col-lg-6 col-sm-6 col-xs-12">
			<img class="blockimg" src="/wbresp/img/prestiti/img4.png"  alt="Prestito Webank Small - Attivalo online" />
		  </div>
		</div>
		<div class="row">
		  <div class="col-md-12">&nbsp;</div>
		  <div class="col-lg-6 col-md-6 col-sm-12">

		  </div>
		  <div class="col-lg-6 col-md-6 col-sm-12">
			<a class="btn-grlit btn-grlit-arrow btn-fs14 btn-hover-white uppercase trading" href="javascript:apriConto();">Apri conto Webank</a>
		  </div>
		</div>
	</div>
<!--FINE BOX NO CMS -->

