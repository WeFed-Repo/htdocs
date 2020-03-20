<?php
	$nonTrading = false;
	$isBlack = false;
	$imgBackLight= '/wbresp/img/sfondi-box/trading_webank_bg_blocco2.jpg';
	$imgBackHero = '/wbresp/img/hero/main_hero_trading.jpg';
?>
<!--MINI HERO -->
<?php virtual ("/librerie/include/oggetti_wbresp/box/box_010.php")?>
<!--FINE MINI HERO -->
<!--DUE COLONNE SINISTRA WHITE CON SCHEDA FISSA-- LA PRIMA -->
<?php virtual ("/librerie/include/oggetti_wbresp/box/box_160.php")?>
<!--FINE DUE COLONNE SINISTRA WHITE CON SCHEDA FISSA-- LA PRIMA -->
<!--2 COLONNE SX BLACK -->
<?php
	$isBlack = true;
	$imgBackDark = '/wbresp/img/sfondi-box/trading_webank_bg_blocco3.jpg';
	$invertiColSx = 'col-md-push-6';
	$invertiColDx = 'col-md-pull-6';
?>
<?php virtual ("/librerie/include/oggetti_wbresp/box/box_030b.php")?>
<!--FINE 2 COLONNE SX BLACK -->
<!--2 RIGHE WHITE -->
<?php
	$isBlack = false;
	$idCar= 'carouselContoLight2';
?>
<?php virtual ("/librerie/include/oggetti_wbresp/box/box_180.php")?>
<!--FINE 2 RIGHE WHITE -->

<!--BLOCK IN TABELLA WHITE -->
<?php virtual ("/librerie/include/oggetti_wbresp/box/box_020.php")?>
<!--FINE BLOCK IN TABELLA WHITE -->
<!--2 COLONNE SX BLACK -->
<?php
	$isBlack = true;
	$imgBackDark = '/wbresp/img/sfondi-box/trading_webank_bg_blocco6.png';
	$invertiColSx = '';
	$invertiColDx = '';
?>
<?php virtual ("/librerie/include/oggetti_wbresp/box/box_030.php")?>
<!--FINE 2 COLONNE SX BLACK -->

