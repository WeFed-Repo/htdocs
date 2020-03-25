<h2>BPM Masterpass</h2>

<section>
<div class="box-generico-border box-generico-card">
	<h3 class="lineBottom">I tuoi acquisti online semplici e sicuri</h3>
	<div class="row">
		<div class="col-sm-10">
			<div class="box-generico-text">
				<p>
					<strong>BPM MasterPass</strong> &egrave; il nuovo servizio di <strong>pagamento digitale</strong> del Gruppo Bipiemme che ti permette di fare <strong>shopping online</strong> senza dover inserire ogni volta i dati della carta.<br/>
				
					<strong>Crea</strong> il tuo <strong>account</strong> sul sito BPM MasterPass: registra i dati delle tue carte di credito e gli indirizzi di spedizione.<br/>
				
					Al momento dell'acquisto &egrave; sufficiente accedere a BPM MasterPass: il pagamento sar&agrave; effettuato in un clic.<br/>
				
					Semplice, sicuro, veloce.
				</p>
				<p>
					Scopri il mondo BPM MasterPass: <a href="#" data-toggle="modal" data-target="#layerSepa">Guarda il video</a>
				</p>
			</div>
		</div>
		<div class="col-sm-2">
			<img src="/img/ret/lg_masterpass.gif">
		</div>
	</div>
</div>
</section>


<!-- box_060 -->
<section>
	<hr>
	<div class="row">
		<div class="col-sm-6">
			<div class="box-generico promo-plus">
				<p class="plus-big">Gratuito</p>
				<p>
					BPM MasterPass funziona con le principali carte di credito e prepagate.
					Non hai canone o tasse sul suo utilizzo.
				</p>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="box-generico promo-plus last">
				<p class="plus-big">Sicuro</p>
				<p>
					I tuoi dati personali sono sempre protetti.
					E con gli alert Sms puoi scegliere di ricevere 
					una conferma per ogni tuo acquisto. 
				</p>
			</div>
		</div>
	</div>
	<hr>

	<div class="row">
		<div class="col-sm-5">
			Usa BPM MasterPass ovunque trovi questo logo.
		</div>
		<div class="col-sm-7">
			<img src="/wscmn/img/ret/logo_masterpass.jpg">
		</div>
	</div>
</section>

<section>
<h3>Registrati a bpm masterpass</h3>
<p>
	Per registrarti richiedi <strong>gratuitamente</strong> il tuo 	&laquo;codice invito&raquo; e accedi al BPM MasterPass.
</p>	
<div class="row">
	<div class="col-sm-3">
		<div class="form-group btnWrapper">
			<div class="btn-align-left">
				<a type="button" class="btn btn-primary" id="richiedi">Richiedi il tuo codice</a>
			</div>
			<br class="clear">
		</div>
	</div>
	<div class="col-sm-3">
		<p id="codeMasterPass"></p>
	</div>
</div>

<hr/>
</section>




<section>
	<div class="form-group btnWrapper">
		<div class="btn-align-right">
			<a type="button" class="btn btn-disabled" id="accedi" disabled href="#">Accedi a BPM masterpass</a>
		</div>
		<br class="clear">
	</div>
</section>




<!-- JS  -->
<script type="text/javascript">
	$("#richiedi").on('click' , function(){
		$("#codeMasterPass").html("<h3>25QVSQ6V6Q</h3>");
		$("#accedi").removeAttr("disabled").removeClass("btn-disabled").addClass("btn-primary");
		$("#richiedi").removeAttr("enabled").removeClass("btn-primary").addClass("btn-disabled");

	});
</script>
<!-- END JS-->



<!-- Overlayer -->


   


<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
							#videowrapper {width:100%;float:left;display:block; margin-bottom: 30px;}
						</style>		

						<div id="videowrapper"></div>

						<script type="text/javascript">
							getVideo({
								wrapper: "#videowrapper",
								videopath : "/wscmn/video/nuova_app_webank.mp4",
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



