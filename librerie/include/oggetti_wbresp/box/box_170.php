<?php
	$nonCms = false;
	if (!isset($isBlack)) {
		$isBlack = true;
	}
	if ($isBlack == true) {
		$idCar = 'carouselContoBlack';
	}
	else {
		$idCar = 'carouselContoLight';
	}
	if (!isset($nonCarte)) {
		$nonCarte = true;
	}
?>

<?php
		if ($isBlack) { ?> <div class="col-xs-12 box03 boxSliderInner bgrDark" id="<?php print$sliderBlack?>" style="background-image:url('<?php print$imgBackDark?>')">
<?php	
	}
	?>
	<?php
		if (!$isBlack) { ?> <div class="col-xs-12 box03 boxSliderInner  bgrLight" id="<?php print$sliderLight?>" style="background-image:url('<?php print$imgBackLight?>')">
	<?php	
		}
		?>
	<h4>TITOLO BOX</h4>
	<!--AREA DI TITILO PERSONALIZZABILE CON LE 4 CLASSI titolo-grande(h3), titolo(h5), paragrafo-grande(p), paragrafo(p)-->
	<h3 class="titolo-grande">Lorem ipsum dolor sit amet.
	consectetur adipiscing elit!</h3>
	<?php
		if ($nonCarte) { ?><p class="paragrafo-grande">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu</p><?php	
	}
	?>
	
	
	
<!--sezione dedicata allo slider -->
	<div class="row b3-container no-padding">
	<div id="<?php print$idCar?>" class="slide greenarrows carousel-moveone"  data-interval="false">
	  <!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#<?php print$idCar?>" data-slide-to="0" class="active"></li>
			<li data-target="#<?php print$idCar?>" data-slide-to="1"></li>
			<li data-target="#<?php print$idCar?>" data-slide-to="2"></li>
			<?php if ($isBlack) { ?>  <li data-target="#<?php print$idCar?>" data-slide-to="3"></li> <?php	
	}
	?>
		</ol>
		<!-- Wrapper for slides -->
		
			<div class="item active item01">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<?php  if ($isBlack == true)  
					{ ?>
					<img src="/wbresp/img/prodotti/cartimpronta.png" class="sliderImg" alt="Cartimpronta ONE">
					<?php } else { ?>
					<img src="/wbresp/img/conto_webank/conto_webank-b4-1.png" class="sliderImg" alt="">
					<?php } ?>
					<h5 class="titolo">TITOLO PRODOTTO</h5>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor 
					</p>
				</div>
			 </div>
			<div class="item item02">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<?php  if ($isBlack == true)  
					{ ?>
					<img src="/wbresp/img/prodotti/bancomat.png" class="sliderImg" alt="Bancomat Webank">
					<?php } else { ?>
					<img src="/wbresp/img/conto_webank/conto_webank-b4-1.png" class="sliderImg" alt="">
					<?php } ?>
					
					<h5 class="titolo">TITOLO PRODOTTO</h5>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
					</p>
					<ul>
						<li>Lorem ipsum dolor sit amet,</li>
						<li>Lorem ipsum dolor sit amet,</li>
						<li>Lorem ipsum dolor sit amet,</li>
					</ul>
				</div>
			</div>
			<div class="item item03">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<?php  if ($isBlack == true)  
					{ ?>
					<img src="/wbresp/img/prodotti/cartajeans.png" class="sliderImg" alt="Carta Je@ns">
					<?php } else { ?>
					<img src="/wbresp/img/conto_webank/conto_webank-b4-1.png" class="sliderImg" alt="">
					<?php } ?>
					<h5 class="titolo">TITOLO PRODOTTO</h5>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor 
					</p>
				</div>
			</div>
			<?php if ($isBlack == true && $nonCarte )  
			{ ?>
			<div class="item item04">
                <div class="col-xs-12 col-sm-6 col-md-4">
					<img src="/wbresp/img/prodotti/cartimpronta.png" class="sliderImg" alt="Cartimpronta ONE">
					<h5 class="titolo">TITOLO PRODOTTO</h5>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor 
					</p>
				</div>
			 </div>
			<?php
			}
			?>
		
		<a class="left carousel-control" href="#!" role="button" data-target="#<?php print$idCar?>" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#!" role="button" data-target="#<?php print$idCar?>" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			 <span class="sr-only">Next</span>
		</a>
	</div>
	</div>
	<!--BOTTONIERA CON DUE PULSANTI -->
	<?php if ($nonCarte) { ?>
	<div class="row spaceTopSlider">
		<div class="col-sm-6 col-xs-12">
			<a class="btn-whlit btn-fs14" href="">LOREM IPSUM</a>
		</div>
		<div class="col-sm-6 col-xs-12">
			<a class="btn-grlit btn-fs14">LOREM IPSUM DOLOR</a>
		</div>
	 </div>
	 <!--FINE BOTTONIERA CON DUE PULSANTI -->
	 <?php
		}
	?>
	<?php if (!$nonCarte) { ?>
	<!--BOTTONIERA CON UN SOLO PULSANTE CENTRATO -->
	<div class="row spaceTopSlider">
		<div class="col-xs-12">
			<a class="btn-grlit btn-fs14 center">LOREM IPSUM DOLOR</a>
		</div>
	</div>
	 <!--FINE BOTTONIERA CON UN SOLO PULSANTE CENTRATO -->
	  <?php
		}
	?>
</div>
