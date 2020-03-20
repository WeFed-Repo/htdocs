<!--BOX CON IMMAGINE DI SFONDO SCURA DIVISA IN DUE COLONNE MA TITOLO ESTERNO, IMMAGINE A DESTRA -->
<?php
	if (!isset($isInvestimenti)) {
		$isInvestimenti = true;
	}
	if (!isset($isMutui)) {
		$isMutui = true;
	}
	if (!isset($styleDisplay)) {
		$styleDisplay = 'block';
	}
	
?>

<?php
		if ($isBlack) { ?>
<div class="col-xs-12 box06 bgrDark" id="<?php print$boxdueCol?>" style="background-image:url('<?php print$imgBackDark?>')">
<?php	
	}
	?>
<?php
		if (!$isBlack) { ?>	
		<div class="col-xs-12 box06 bgrLight" id="<?php print$boxdueCol?>" style="background-image:url('<?php print$imgBackLight?>');display:<?php print$styleDisplay?>">
		<?php	
		}
		?>
	<div>
		
		<div class="b3-container no-padding">
			<div id="<?php print$idCar?>" class="slide greenarrows carousel-moveplus"  data-interval="false">
				<ol class="carousel-indicators">
					<li data-target="#<?php print$idCar?>" data-slide-to="0" class="active"></li>
					<li data-target="#<?php print$idCar?>" data-slide-to="1"></li>
				</ol>
				<div class="item active item01">
					<div class="row">
						<div class="col-md-6 col-sm-12 <?php print$invertiColSx?>">
							<?php
							if (!$isMutui ) { ?>	<h4>TITOLO BOX</h4>
							
							<?php	
							}
							?>
							<!--AREA DI TESTO PERSONALIZZABILE CON LE 4 CLASSI titolo-grande(h3), titolo(h5), paragrafo-grande(p), paragrafo(p)-->
							<h3 class="titolo-grande">Titolo due box  che occupa 6 colonne </h3>
							<p class="paragrafo-grande">
								Lorem ipsum dolor sit amet, consectetur <strong>adipiscing elit</strong>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor
								
							</p>
							<!--AREA punto elenco non personalizzabile con le classi grandezza paragrafo-->
							<ul>
								<li><strong>Lorem</strong>  consectetur adipiscing elit, sed do eiusmod, consectetur adipiscing elit, sed do eiusmod,</li>
								<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
								<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
								<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
							</ul>
						</div>
						<div class="col-md-6 col-xs-12 text-align-center <?php print$invertiColDx?>">
							<img src="/wbresp/img/conto_webank/conto_webank-b6-1.png" class="img-responsive" alt="" title="">
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
				
				<?php
					if (!$isInvestimenti || $isMutui ) { ?>	
				<div class="item item02">
					<div class="row">
						<div class="col-md-6 col-sm-12 <?php print$invertiColSx?>">
							<?php
							if (!$isMutui ) { ?>	<h4>TITOLO BOX</h4>
							
							<?php	
							}
							?>
							<h3>Titolo due box  che occupa 6 colonne </h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur <strong>adipiscing elit</strong>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor
								
							</p>
							<ul>
								<li><strong>Lorem</strong>  consectetur adipiscing elit, sed do eiusmod, consectetur adipiscing elit, sed do eiusmod,</li>
								<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
								<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
								<li><strong>Lorem</strong>  ipsum dolor sit amet,</li>
							
							</ul>
						</div>
						<div class="col-md-6 col-xs-12 text-align-center <?php print$invertiColDx?>">
							<img src="/wbresp/img/conto_webank/conto_webank-b6-1.png" class="img-responsive" alt="" title="">
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
				
				<?php	
					}
				?>
			<!--
			<div class="item item01">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 <?php print$invertiColSx?>">
							<h4>TITOLO BOX</h4>
							<h3>Titolo due box  che occupa 6 colonne </h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur <strong>adipiscing elit</strong>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
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
						<div class="col-sm-6 col-xs-12 text-align-center <?php print$invertiColSx?>">
							<img src="/wbresp/img/conto_webank/conto_webank-b6-1.png" class="img-responsive" alt="" title="">
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
			 -->
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
<!--FINE BOX CON IMMAGINE DI SFONDO SCURA DIVISA IN DUE COLONNE -->