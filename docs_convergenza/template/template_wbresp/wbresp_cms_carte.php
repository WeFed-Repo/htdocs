<?php
	$nonCarte = false;
	$isBlack = true;
	$nonCms = false;
	$sliderBlack= 's1';
	$sliderLight= 's2';
	$boxdueCol= 's3';
	$imgBackDark = '/wbresp/img/sfondi-box/carte_webank_bg_blocco1.jpg';
	$imgBackLight = '/wbresp/img/sfondi-box/carte_webank_bg_blocco2.png';
	
?>
<!--BLOCK IN SLIDER BLACK -->
<?php virtual ("/include/oggetti_wbresp/box/box_170.php")?>
<!--FINE BLOCK IN SLIDER BLACK -->

<!--2 RIGHE WHITE -->
<?php
	$isBlack = false;
	$idCar= 'carouselContoLight';
?>
<?php virtual ("/include/oggetti_wbresp/box/box_180.php")?>
<!--FINE 2 RIGHE WHITE -->

<!--2 COLONNE SX WHITE -->
<?php
	$imgBackLight = '/wbresp/img/sfondi-box/carte_webank_bg_blocco3.png';
	$idCar= 'carouselContoLight2';
?>
<?php virtual ("/include/oggetti_wbresp/box/box_030.php")?>
<!--FINE 2 COLONNE SX WHITE -->
<!--2 RIGHE Black-->
<?php
	$isBlack = true;
	$idCar= 'carouselContoDark3';
	$imgBackDark = '/wbresp/img/sfondi-box/carte_webank_bg_blocco4.jpg';
?>
<?php virtual ("/include/oggetti_wbresp/box/box_180.php")?>
<!--FINE 2 RIGHE Black-->
<!--2 COLONNE DX WHITE -->
<?php
	$isBlack = false;
	$idCar= 'carouselContoLight3';
	$imgBackLight = '/wbresp/img/sfondi-box/carte_webank_bg_blocco5.png';
	$invertiColSx = 'col-md-push-6';
	$invertiColDx = 'col-md-pull-6';
?>
<?php virtual ("/include/oggetti_wbresp/box/box_030.php")?>
<!--FINE 2 COLONNE DX WHITE-->
<p class="note">MESSAGGIO PUBBLICITARIO CON FINALIT&Agrave; PROMOZIONALE<br>
					Per le condizioni economiche e contrattuali fare riferimento ai Fogli Informativi. Richieste soggette a valutazione ed approvazione da parte della Banca.
					</p>