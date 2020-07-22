<!--<?php
	if (!isset($nonConto)) {
		$nonCarte = true;
	}
?>
<!--BOX CON IMMAGINE DI SFONDO SCURA DIVISA IN DUE COLONNE MA TITOLO INTERNO, IMMAGINE A SINISTRA
<?php
		if ($isBlack) { ?>
<div class="col-xs-12 box06 bgrDark" id="<?php print$boxdueCol?>" style="background-image:url('<?php print$imgBackDark?>')">
<?php	
	}
	?>
<?php
		if (!$isBlack) { ?>	
		<div class="col-xs-12 box06 bgrLight" id="<?php print$boxdueCol?>" style="background-image:url('<?php print$imgBackLight?>')">
		<?php	
		}
		?>
	<div class="row">
		<!--sezione dedicata allo slider 
		<h4>TITOLO BOX</h4>
			<div class="row b3-container no-padding">
				<div id="<?php print$idCar?>" class="slide greenarrows carousel-moveplus"  data-interval="false">
					<ol class="carousel-indicators">
						<li data-target="#<?php print$idCar?>" data-slide-to="0" class="active"></li>
						<li data-target="#<?php print$idCar?>" data-slide-to="1"></li>
					</ol>
					<div class="item active item01">
						<div class="col-sm-7">
							 <h3>Titolo due box  che occupa 7 colonne </h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur <strong>adipiscing elit</strong>, sed do eiusmod tempor incididunt ut labore et
								</p>
								<ul>
									<li><strong>Lorem</strong>  consectetur adipiscing elit, sed do eiusmod, consectetur adipiscing elit, sed do eiusmod,</li>
									<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
									<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
									<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
									<li><strong>Lorem</strong>  consectetur adipiscing elit, sed do eiusmod, consectetur adipiscing elit, sed do eiusmod,</li>
									<li><strong>Lorem</strong>  consectetur adipiscing elit, sed do eiusmod, consectetur adipiscing elit, sed do eiusmod,</li>
									<li><strong>Lorem</strong>  consectetur adipiscing elit, sed do eiusmod, consectetur adipiscing elit, sed do eiusmod,</li>
								</ul>
						</div>
						<div class="col-sm-5">
							<img src="/wbresp/img/carte/cartadebito.png" class="img-responsive" alt="Carta di debito internazionale" title="Carta di debito internazionale - Con la carta di debito hai un canone gratuito e puoi fare più di quanto immagini">
						</div>
						<div class="row">
							<?php if (!$nonCarte) { ?>	
							<div class="col-sm-6 col-xs-12">
								  <a class="btn-whlit btn-fs14" href="">LOREM IPSUM</a>
							</div>
							<?php	
							}
							?>
							<div class="col-sm-6 col-xs-12">
								<a class="btn-grlit btn-fs14">LOREM IPSUM DOLOR</a>
						   </div>
						</div>
					</div>
					<!--<div class="item item02">
						<div class="col-sm-7">
							 <h3>Titolo due box  che occupa 7 colonne </h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur <strong>adipiscing elit</strong>, sed do eiusmod tempor incididunt ut labore et
								</p>
								<ul>
									<li><strong>Lorem</strong>  consectetur adipiscing elit, sed do eiusmod, consectetur adipiscing elit, sed do eiusmod,</li>
									<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
									<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
									<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
									<li><strong>Lorem</strong>  consectetur adipiscing elit, sed do eiusmod, consectetur adipiscing elit, sed do eiusmod,</li>
									<li><strong>Lorem</strong>  consectetur adipiscing elit, sed do eiusmod, consectetur adipiscing elit, sed do eiusmod,</li>
									<li><strong>Lorem</strong>  consectetur adipiscing elit, sed do eiusmod, consectetur adipiscing elit, sed do eiusmod,</li>
								</ul>
						</div>
						<div class="col-sm-5">
							<img src="/wbresp/img/carte/cartadebito.png" class="img-responsive" alt="Carta di debito internazionale" title="Carta di debito internazionale - Con la carta di debito hai un canone gratuito e puoi fare più di quanto immagini">
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
</div>
<!--FINE BOX CON IMMAGINE DI SFONDO SCURA DIVISA IN DUE COLONNE MA TITOLO INTERNO, IMMAGINE  A SINISTRA -->