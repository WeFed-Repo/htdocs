<div class="riquadro">
	
	
	


<h1>
	
		<div class="flag hidden-xxs pannelloControlloAlert">&nbsp;</div>
	
	
		Situazioni rapporti
	
</h1>
	<form id="formSXRapp">
		<input type="hidden" name="svuotaCache" value="false" id="svuotaSituazioneRapp">
		<span id="riquadroSpalla" class="context-buttons">
			<a title="Aggiorna" onclick="callSituazioneRapp(true);" id="refresh" class="refreshButton pull-right"> </a>
		</span>
	</form>
	<div id="loadingSitRapp" class="caricamentoAjax" style="display: none;">
		<img src="/HT/IMAGES/caricamento.gif">
	</div>
	<div id="situazioneRapp">







<div class="bs-example form-horizontal">
	<div class="form-group">	
		<div class="spallaSaldo">
			<div class="col-xs-12">
				<span class="col-xs-9 clear-padding control-label floatl">
					Rapporti in formato cartaceo 
				</span>
				<span class="clear-padding bold riquadroNumero floatr">
					0
				</span>
			</div>
			<div class="col-xs-12 margin-top10">
				<span class="col-xs-9 clear-padding control-label floatl">
					Rapporti in formato elettronico 
				</span>
				<span class="floatr bold clear-padding riquadroNumero">
					6
				</span>
			</div>
			
			<div class="pull-right margin-top10">
			
			
				<input type="button" name="" value="Pannello rapporti" onclick="window.location.href=getPathContext()+ '/cc/pannelloRapporti.do'" id="pannelloRapporti" class="btn">
			
			
			</div>
		</div>
	</div>
</div>
</div>
</div>