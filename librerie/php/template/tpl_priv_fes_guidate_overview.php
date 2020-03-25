<?php
	$isConsultare = false;
?>
<h2>Overview</h2>

<section>
	<h3>Semplifica il tuo modo di investire</h3>
	<p>Le migliori soluzioni d’investimento <strong>in pochi click. Potrai investire e  costruire  il tuo portafoglio in autonomia, orientandoti  facilmente nell'universo degli oltre 3.000  Fondi e Sicav.</strong>
</p>
</section>
<section>
	<div class="row">
		<div class="col-xs-12">
			<h4>Top Selection</h4>
			<div class="testoIcona">
				<span class="glyph glyph-top_selection flLeft"></span>
				<div class="leftTesto glifiLeftText">
					<p>La soluzione semplice e immediata per investire in un solo fondo selezionato tra i migliori disponibili, senza rinunciare alla diversificazione che proprio i fondi e le Sicav ti offrono.</p>
					<ol>
						<li> Scopri la nostra TOP SELECTION</li>
						<li>Scegli il fondo in cui investire</li>
						<li>Sottoscrivi il fondo in un click</li>
					</ol>
					<div class="form-group btnWrapper">
						<div class="btn-align-left">
							<a href="#" data-toggle="modal" data-target="#video1" title="Visualizza il tutorial">Visualizza il tutorial</a>
						</div>
						<div class="btn-align-right">
							<?php if ($isConsultare) { ?>
							<a type="button" class="btn btn-primary" href="#!" title="Vai alla top selection" data-target="#layerConsultare" data-toggle="modal">Vai alla top selection</a>
							<?php } else { ?>
							<a type="button" class="btn btn-primary" href="#!" title="Vai alla top selection">Vai alla top selection</a>
							<?php } ?>
						</div>
						<br class="clear">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="row">
		<div class="col-xs-12">
			<h4>Portafoglio modello</h4>
			<div class="testoIcona">
				<span class="glyph glyph-portafoglio_modello flLeft"></span>
				<div class="leftTesto glifiLeftText">
					<p>Soluzioni intuitive e facili per costruire il tuo portafoglio e diversificarlo in massima autonomia partendo da Portafogli Modello pensati per diversi profili di investimento.</p>
					<ol>
						<li>Seleziona il PORTAFOGLIO MODELLO che preferisci</li>
						<li>Scopri la composizione del portafoglio scelto</li>
						<li> Scegli  e sottoscrivi i singoli fondi da inserire in portafoglio</li>
					</ol>
					<div class="form-group btnWrapper">
						<div class="btn-align-left">
							<a href="#" data-toggle="modal" data-target="#video2" title="Visualizza il tutorial">Visualizza il tutorial</a>
						</div>
						<div class="btn-align-right">
							<?php if ($isConsultare) { ?>
							<a type="button" class="btn btn-primary" href="#!" title="Vai alla top selection" data-target="#layerConsultare" data-toggle="modal">Vai al portafoglio modello</a>
							<?php } else { ?>
							<a type="button" class="btn btn-primary" href="#!" title="Vai al portafoglio modello">Vai al portafoglio modello</a>
							<?php } ?>
						</div>
						<br class="clear">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="row banner-inv">
		<div class="col-xs-3 col-sm-2 inv-left"></div>
		<div class="col-xs-9 col-sm-10 no-gutter inv-right"> 
			<p>Ti potrebbe interessare anche...</p>
			<div class="form-group btnWrapper">
				
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" id="">Soluzioni self</a>
				</div>
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" id="">Piani di accumulo</a>
				</div>
				<br class="clear">
			</div>
		</div>
	</div>
</section>
<!-- Overlayer -->
<div class="modal fade" id="video1" tabindex="-1" role="dialog" aria-labelledby="videoTopSelection">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<!-- VIDEO  -->
							<script src="/wscmn/fe/js/priv_videoplayer.js" type="text/javascript"></script>		
							<style>
								#videoTopSelection {width:100%;float:left;display:block; margin-bottom: 30px;}
							</style>		
							<div id="videoTopSelection"></div>
							<script type="text/javascript">
								getVideo({
									wrapper: "#videoTopSelection",
									videopath : "https://media.webank.it/vod/video_masterpass.mp4",
									autoplay: false,
									initialVolume: 0.8
								});
							</script>
							<!-- END VIDEO -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Overlayer -->
<!-- Overlayer -->
<div class="modal fade" id="video2" tabindex="-1" role="dialog" aria-labelledby="videoPortafoglioModello">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<!-- VIDEO  -->
							<script src="/wscmn/fe/js/priv_videoplayer.js" type="text/javascript"></script>		
							<style>
								#videoPortafoglioModello {width:100%;float:left;display:block; margin-bottom: 30px;}
							</style>		
							<div id="videoPortafoglioModello"></div>
							<script type="text/javascript">
								getVideo({
									wrapper: "#videoPortafoglioModello",
									videopath : "https://media.webank.it/vod/video_masterpass.mp4",
									autoplay: false,
									initialVolume: 0.8
								});
							</script>
							<!-- END VIDEO -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Overlayer -->

<?php if ($isConsultare) { ?>
<!-- Overlay -->
<div class="modal fade" id="layerConsultare" tabindex="-1" role="dialog" aria-labelledby="labelConsultare">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="labelConsultare">Profilo consultare</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<p>Questa funzione &egrave; disponibile solo accedendo con il profilo
							&quot;Consultare e disporre&quot;. Utilizza il link in altro a destra.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Overlay -->
<?php } ?>
