<section>
	<h2>Bonifico Ordinario</h2>
	<div class="boxesito positivo">
		<i class="icon icon-alert_ok icon-2x"></i>
			<div class="text">
				<div class="row">
					<div class="col-xs-12">
						<p><strong>OPERAZIONE COMPLETATA CORRETTAMENTE</strong><br>Puoi verificare in ogni momento lo stato dell'operazione da te inserita in esito disposizioni. <br>
	Una volta che il bonifico è stato eseguito e contabilizzato dalla banca puoi identificarlo tramite il «riferimento banca ordinante» che trovi nel dettaglio del movimento.
	</p>
					</div>
				</div>
			</div>
	</div>
	<div class="form-group btnWrapper">
	    <div class="btn-align-right">
	        <a type="button" id="AnnullaPin" class="btn btn-primary clearPin">esito disposizioni</a>
	        <a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_bonifico.php&liv0=1&liv1=1&liv2=0&liv3=0&responsive=y">nuovo bonifico</a>
	    </div>
	</div>
</section>

<?php if ($bank == "bpm") { 
?>
<!-- BANNER CON LANCIO DEL VIDEO IN UNA MODALE -->
<script type="text/javascript">
	// Inizializzazione del video in una modale al click del banner
	$(function(){
		$("#bannerVideo").click(function(){
			$("#layerVideo").modal("show");
		});
	});
</script>
<!-- Blocco overlayer video -->
<div class="modal fade" id="layerVideo" tabindex="-1" role="dialog" aria-labelledby="layerVideoLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="layerVideoLabel">&nbsp;</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div id="videoApp" style="margin:0 auto;text-align:center">
						 		<embed src="https://media.webank.it/vod/video_p2p_sc.mov" width="382" height="241" autoplay="true" scale="tofit" controller="true" pluginspage="http://www.apple.com/quicktime/download/"></embed>
						 	</div>
	                        <script defer="defer" type="text/javascript"> 
                                  var flashobject = new SWFObject("/swf/videoplayer.swf", "flash", "382", "241", "9", "#000000"); 
                                  flashobject.addParam("quality", "high"); 
                                  flashobject.addParam("wmode", "opaque"); 
                                  flashobject.addParam("allowfullscreen","false"); 
                                  flashobject.addParam("allowscriptaccess", "always"); 
                                  flashobject.addParam("FlashVars","videoLink=https://media.webank.it/vod/video_p2p_sc.flv"); 
                                  flashobject.write("videoApp");
	                        </script>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Fine blocco overlayer video -->

<section>
	<a id="bannerVideo" href="javascript:;" class="bannerbottom"><img src="/img/ret/BPM_dailypay_700x100.jpg"></a>
</section>
<!-- FINE DEL BANNER CON LANCIO DEL VIDEO -->
<?php
} ?>