<?php
	$nonCms = false;
	if (!isset($isBlack)) {
		$isBlack = true;
	}
	if ($isBlack == true && !isset($idCar)) {
		$idCar = 'carouselContoBlack';
	}
	else if($isBlack == false && !isset($idCar))  {
		$idCar = 'carouselContoLight';
	}
	if (!isset($nonCarte)) {
		$nonTrading = true;
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
	
	<!--sezione dedicata allo slider -->
		<div class="row b3-container no-padding">
			<div id="<?php print$idCar?>" class="slide greenarrows carousel-moveplus"  data-interval="false">
				<ol class="carousel-indicators">
					<li data-target="#<?php print$idCar?>" data-slide-to="0" class="active"></li>
					<li data-target="#<?php print$idCar?>" data-slide-to="1"></li>
				</ol>
				<div class="item active item01">
					<h4>TITOLO BOX</h4>	
					<!--AREA DI TESTO PERSONALIZZABILE CON LE 4 CLASSI titolo-grande(h3), titolo(h5), paragrafo-grande(p), paragrafo(p)-->
					<h3 class="titolo-grande">Lorem ipsum dolor sit amet</h3>
					<img src="/wbresp/img/prodotti/trading_slideimg_01.jpg" class="img-center" alt="" title="">
					<p class="text-align-center paragrafo-grande">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu</p>
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							  <a class="btn-whlit btn-fs14" href="">LOREM IPSUM</a>
						</div>
						<div class="col-sm-6 col-xs-12">
							<a class="btn-grlit btn-fs14">LOREM IPSUM DOLOR</a>
					   </div>
					</div>
				</div>
				<div class="item item02">
					<h4>TITOLO BOX</h4>	
					<!--AREA DI TESTO PERSONALIZZABILE CON LE 4 CLASSI titolo-grande(h3), titolo(h5), paragrafo-grande(p), paragrafo(p)-->
					<h3 class="titolo-grande">Lorem ipsum dolor sit amet</h3>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<h5 class="titolo">Lorem ipsum dolor sit amet</h5>
							<!--AREA punto elenco non personalizzabile con le classi grandezza paragrafo-->
							<ul>
								<li><strong>Lorem</strong>  consectetur adipiscing elit, sed do eiusmod, consectetur adipiscing elit, sed do eiusmod,</li>
								<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
								<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
								<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
								<li><strong>Lorem</strong>  consectetur adipiscing elit, sed do eiusmod, consectetur adipiscing elit, sed do eiusmod,</li>
								<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
								<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
							</ul>
							<p class="paragrafo-grande">Lorem ipsum dolor sit amet</p>
						</div>
						<div class="col-md-6 col-sm-12 hidden-xs">
							<img src="/wbresp/img/prodotti/trading_slideimg_02.jpg" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							  <a class="btn-whlit btn-fs14" href="">LOREM IPSUM</a>
						</div>
						<div class="col-sm-6 col-xs-12">
							<a class="btn-grlit btn-fs14">LOREM IPSUM DOLOR</a>
					   </div>
					</div>
				</div>
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
</div>

<!-- da includere nella struttura di pagina-->
<!--<script src="/wbresp/js/vendor/bootstrap.min.js"></script>
<script src="/wbresp/js/vendor/jquery.smooth-scroll.min.js"></script>
<script src="/wbresp/js/vendor/jquery.touchSwipe.min.js"></script>
<script src="/wbresp/js/bootstrap-slider.min.js"></script>
<script src="/wbresp/js/vendor/jquery.viewportchecker.min.js"></script>
<script src="/wbresp/js/bootstrap-select.min.js"></script>
<script src="/wbresp/js/main.js"></script>
<script src="/wbresp/js/utilities.js"></script>-->