<script type="text/javascript">

	var creplace = {
		"@iconColor1": ["rgb(153, 204, 102)","rgb(51, 150, 133)","rgb(142, 36, 36)"],
		"@iconColor2": ["rgb(212, 234, 187)","rgb(178, 215, 209)","rgb(219, 186, 186)"]
	}

	$(function(){
		/* GENERA IL CODICE */
		$("#codGenera").click(function(){
			$("#step1").addClass("loading");
			/* Effettua i replacements */
			var scode = $("#codSorgente").val();
			$.each(creplace,function(k,v){
				$.each(v,function(ind,val){
					scode = scode.split(val).join(k);
				});
			});
			$("#codDestinazione").val(scode);
			$("#step2").show();
			$("#step1").hide();
		});

		$("#codReset").click(function(){
			$("#step1").show().removeClass("loading");
			$("#codSorgente").val("");
			$("#step2").hide();
		});
	})
</script>
<style>
.inputcodice {width:100%;display:block;float:left;background:#eee; min-height:200px; vertical-align:top;}
.step {float:left;width:100%;}
a.libBtn {float:right; margin:10px 0 0; padding:10px 20px; border-radius:10px; color:#fff;text-decoration:none;text-transform:uppercase;}
</style>
<!-- CONTENT -->
<div id="librerie">
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="color borderlightcolor">Dinamizza css multicolor</h2>
					<div id="step1" class="step">
						<p style="padding-top:20px;display:block;float:left">Copia il css relativo ai soli glifi (es: da ".glyph-" in poi) dallo <strong>style.css</strong> generato da Icomoon ed incollalo qui sotto per effettuare la conversione.</p>
						<textarea id="codSorgente" class="inputcodice"></textarea>
						<a id="codGenera" href="javascript:;" class="libBtn bgcolor">Genera il codice</a>
					</div>
					<div id="step2" class="step" style="display:none">
						<p style="padding-top:20px;display:block;float:left">Codice convertito (con i nomi di variabile) da copiare ed inserire in <strong>_multicolor64.less</strong></p>
						<textarea id="codDestinazione" class="inputcodice"></textarea>
						<a id="codReset" href="javascript:;" class="libBtn bgcolor">Nuova conversione</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

