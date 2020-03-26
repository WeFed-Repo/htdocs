<div class="visible-print-block"> 
	<img src="/HT/fe/img/logo_youweb.png" title="Torna all'homepage" alt="Torna all'homepage">
		<div class="pull-right">
								  
				12/06/2017	
		</div>
</div>
						

						

						
						





<style type="text/css">
	.box50perc .row span {width: 50%;}
 	.box50perc .row label {width: 50%;}
</style>

<script type="text/javascript">
	$(document).ready(function()
	{
		/*CODICE JAVASCRPIT CHE OCCORRE PER CENTRARE IN ALTEZZA L'IMMAGINE*/
		var altezzaImmagine = $('#immagineFinanziamento').height();
		var altezzaContenitore = $('#divContenitoreImmagine').parent().height();
		var margine = Math.floor((altezzaContenitore-altezzaImmagine)/2);
		$('#immagineFinanziamento').css('margin-top',margine+'px');
	});
</script>



<div class="riquadro clearfix">
	
	









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag richiestaFinanziamento">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Richiesta finanziamento</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	<div class="section clearfix">
		<div class="row margin-top20 margin-bottom20">
			<div class="col-sm-12 col-xs-12">
				<div class="col-sm-12 col-xs-12">
					<strong>Tramite questa procedura puoi richiedere il finanziamento alle seguenti condizioni:</strong>
				</div>
				<div class="col-sm-9 col-xs-12 margin-top10">
					<div class="boxDefault box50perc">
						<h3 style="text-transform: none;">Riepilogo finanziamento</h3>
						<div>
							<div class="row">
								<label>Importo richiesto&nbsp;*</label>
								<span>800,00&nbsp;&euro;</span>
							</div>
							<div class="row">
								<label>Numero rate</label>
								<span>18</span>
							</div>
							<div class="row">
								<label>Importo della rata&nbsp;**</label>
								<span>44,44&nbsp;&euro;</span>
							</div>
							
							<div class="row">
								<label>TAN</label>
								<span>0,00&nbsp;%</span>
							</div>
							<div class="row">
								<label>TAEG</label>
								<span>0,00&nbsp;%</span>
							</div>
							<div class="row">
								<div class="floatl margin-right20" style="font-size: 0.8em; font-style: italic; width: 100%;">
									*&nbsp;L'importo del finanziamento &egrave; stato arrotondato per eccesso rispetto al prezzo del tuo ordine. (es un ordine da 942 euro genera un importo richiesto di 950 euro)
								</div>
								<div class="floatl margin-right20" style="font-size: 0.8em; font-style: italic; width: 100%;">
									**&nbsp;Il piano di ammortamento con l'elenco completo delle 18 rate ti sar&agrave; consegnato in filiale 
								</div>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<form id="formRichiestaFinanziamento" method="post" action="/WEBHT/finanziamento/richiestaFinanziamentoIntestazione.do">
	<div class="pull-right">
		
		<input type="submit" name="intestazione" value="Procedi" class="btn btn-primary" alt="Procedi">
	</div>
</form>
