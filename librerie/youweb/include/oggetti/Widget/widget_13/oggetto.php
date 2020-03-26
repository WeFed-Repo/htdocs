<div class="riquadro">
	
	
	


<h1>
	
		<div class="flag hidden-xxs pannelloControlloAlert">&nbsp;</div>
	
	
		Notifiche
	
</h1>
	<form id="formSXPosta">
		<input type="hidden" name="svuotaCache" value="false" id="svuotaNuoviDoc">
		<span id="riquadroSpalla" class="context-buttons">
			<a title="Aggiorna" onclick="callNuoviDoc(true);" id="refresh" class="refreshButton pull-right"> </a>
		</span>
	</form>
	<div id="loadingNuoviDoc" class="caricamentoAjax" style="display: none;">
		<img src="/HT/IMAGES/caricamento.gif">
	</div>
	<div id="nuoviDoc">







<div class="bs-example form-horizontal padding-bottom10">
	<div class="form-group">	
		<div class="spallaSaldo">
			<div class="col-xs-12">
				<span class="clear-padding control-label floatl">
					Nella posta in arrivo ci sono <b>4 documenti da leggere</b>
				</span>
			</div>
			<div class="pull-right margin-top10">
				<input type="button" name="" value="Posta in arrivo" onclick="window.location.href=getPathContext()+ '/postaPersonale/nuoviDocumenti.do'" id="inArrivo" class="btn">
			</div>
		</div>
	</div>
</div></div>
</div>