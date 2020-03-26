<form id="formSM">
	<input type="hidden" name="svuotaCache" value="false" id="svuota">
</form>
<div class="riquadro clearfix">
<h1>
	
		<div class="flag hidden-xxs saldiMovimenti">&nbsp;</div>
		Ultimi Movimenti
</h1>
<div id="result">
			<div id="loading" class="caricamentoAjax" style="display: none;">
				<img src="/HT/IMAGES/caricamento.gif">
			</div>
			<span id="riquadroSpalla" class="context-buttons">
				<a title="Aggiorna" onclick="call(true);" id="refresh" class="refreshButton pull-right"> </a>
			</span>
			
			<div class="smSpalla clearfix margin-bottom10">
				<div class="bs-example form-horizontal">
					<div class="form-group">
						<div class="col-xs-12">
							<label class="control-label bold">
								Conto corrente&nbsp;00001585
&nbsp;di&nbsp;Idda Asdetgenicva
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="homePageHelp clear-padding margin-bottom10">
				Ultimi 2 movimenti del rapporto predefinito
			</div>
			
				<div class="spallaSaldo">
					<div class="col-xs-12">
						<span class="control-label floatl">
							Data esecuzione
						</span>
						<span class="spallaSX bold floatr clear-padding-top">
							23/02/2017
						</span>
					</div>
					<div class="col-xs-12">
						<span class="control-label floatl">
							Importo:
						</span>
						
							
								<span class="spallaSX floatr negativo bold oRight clear-padding-top">
									-1,00&nbsp;&euro;
								</span>
							
							
						
					</div>
					<div class="col-xs-12">
						<span class="control-label floatl">
							Causale:
						</span>
						<span class="spallaSX bold floatr clear-padding-top">
							vostra disposizione
						</span>
					</div>
					
						<div class="form-field-resume col-xs-12 oCenter margin-bottom10">
							<label class="control-label">&nbsp;</label>
						</div>
					
				</div>
			
				<div class="spallaSaldo">
					<div class="col-xs-12">
						<span class="control-label floatl">
							Data esecuzione
						</span>
						<span class="spallaSX bold floatr clear-padding-top">
							23/02/2017
						</span>
					</div>
					<div class="col-xs-12">
						<span class="control-label floatl">
							Importo:
						</span>
						
							
								<span class="spallaSX floatr negativo bold oRight clear-padding-top">
									-1,00&nbsp;&euro;
								</span>
							
							
						
					</div>
					<div class="col-xs-12">
						<span class="control-label floatl">
							Causale:
						</span>
						<span class="spallaSX bold floatr clear-padding-top">
							vostra disposizione
						</span>
					</div>
					
						<div class="form-field-resume col-xs-12 oCenter margin-bottom10">
							<label class="control-label">&nbsp;</label>
						</div>
					
				</div>
			
			<div class="padding-bottom10">
				&nbsp;
			</div>
	




</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#svuota').val('false');
		$.ajax({
			async: true,
			beforeSend:function(){
		        // show gif here, eg:
		        $("#loading").show();
		    },
		    complete:function(){
		        // hide gif here, eg:
		        $("#loading").hide();
		    },
			dataType: 'html',
 			url: getPathContext() + '/common/saldoMovimenti.do',
			success: function(response) {
				  $('#result').html(response);
  			}
		 });
	});
	
	function call(svuota){
		$('#svuota').val(svuota);
		$.ajax({
			async: true,
			beforeSend:function(){
		        // show gif here, eg:
		        $("#loading").show();
		    },
		    complete:function(){
		        // hide gif here, eg:
		        $("#loading").hide();
		    },
			dataType: 'html',
			data: $('#formSM').serialize(),
 			url: getPathContext() + '/common/saldoMovimenti.do',
			success: function(response) {
				  $('#result').html(response);
  			}
		 });
	}
</script>