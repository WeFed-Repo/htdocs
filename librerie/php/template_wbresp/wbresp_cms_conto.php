
<?php    
	$nonConto = false;
	$isBlack = true;
	$nonCms = false;
	$imgBackDark = '/wbresp/img/sfondi-box/conto_webank_bg_blocco3.jpg';
	$imgBackLight = '/wbresp/img/sfondi-box/conto_webank_bg_blocco4.jpg';
	$imgBackHero = '/wbresp/img/hero/main_hero_conto.jpg';
	$boxInfo= 's2';
	$sliderBlack= 's3';
	$sliderLight= 's4';
	$boxScacchi= 's5';
	$boxdueCol= 's6'
?>
<!--MINI HERO -->
<?php virtual ("/librerie/include/oggetti_wbresp/box/box_010.php")?>
<!--FINE MINI HERO -->

<!--BLOCK IN TABELLA WHITE -->
<?php virtual ("/librerie/include/oggetti_wbresp/box/box_020.php")?>
<!--FINE BLOCK IN TABELLA WHITE -->

<!--BLOCK IN SLIDER BLACK -->
<?php virtual ("/librerie/include/oggetti_wbresp/box/box_170.php")?>
<!--FINE BLOCK IN SLIDER BLACK -->

<!--BLOCK IN SLIDER WHITE -->
<?php
	$isBlack = false;
?>
<?php virtual ("/librerie/include/oggetti_wbresp/box/box_170.php")?>
<!--FINE BLOCK IN SLIDER WHITE -->

<!--SCACCHI -->
<?php virtual ("/librerie/include/oggetti_wbresp/box/box_150.php")?>
<!--FINE SCACCHI -->

<!--2 COLONNE SX BLACK -->
<?php
	$isBlack = true;
	$imgBackDark = '/wbresp/img/sfondi-box/conto_webank_bg_blocco6.jpg';
	$idCar= 'carouselContoDark2';
?>
<?php virtual ("/librerie/include/oggetti_wbresp/box/box_030.php")?>
<!--FINE 2 COLONNE SX BLACK -->
