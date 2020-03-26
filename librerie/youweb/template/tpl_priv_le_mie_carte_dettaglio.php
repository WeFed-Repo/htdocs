					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/04/2017	
						</div>
					</div>
					
					
					
					





<div class="riquadro clearfix">
	
	
	
	
	
	
	
	




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag dettaglioCarte">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Dettaglio carta</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	
	<div class="margin-bottom10">
		





<div class="section clearfix">
	<h3 class="titleSection">	
		








		
			Carta selezionata
		
		
		
		


	</h3>
	<div class="selezioneCC tabellaSelezioneCC">
		<div class="CCselezionato clearfix">
			<div class="col-sm-6 col-xs-12">
				<span class="col-xs-4">
					Tipo carta
				</span>
				<span class="col-xs-6">
					<strong>
						
				 			
				 				
				 				YouCard
			                
			                
			          	
			          </strong>
				</span>
				<span class="col-xs-4">
					Numero carta
				</span>
				<span class="col-xs-6">
					<strong>
						*0000
					</strong>
				</span>
				<span class="col-xs-4">
					Filiale
				</span>
				<span class="col-xs-6">
					<strong>
						MILANO - 0000
					</strong>
				</span>
			</div>
			<div class="col-sm-6 col-xs-12">
				<span class="col-xs-4">
					Intestatario
				</span>
				<span class="col-xs-6">
					<strong>
						COGNOME NOME
					</strong>
				</span>
					
						<span class="col-xs-4">
								Scadenza carta
						</span>
						<span class="col-xs-6">
							<strong>
								31/10/2020
							</strong>
						</span>
					
			</div>
		</div>
	</div>
</div>
	</div>

	<div class="section clearfix">
		
			<div class="row">
				<div class="col-sm-6 col-xs-12 margin-top-xs-10">
					<div class="boxDefault">
						<h3>
							Dati carta
						</h3>
						<div>
							<div class="row">
								<label>
									IBAN:
								</label>
								<span>
									IT00N0000000000000000000000
								
								</span>
							</div>
							<div class="row">
								<label>
									Tipo carta:
								</label>
								<span>
									YouCard
								</span>
							</div>
							<div class="row">
								<label>
									Stato:
								</label>
								<span>
									ATTIVO
								</span>

							</div>
							<div class="row">
								<label>
									Dove:
								</label>
								<span>
									
										
											
												
												
													
														
													
														Solo in Italia
													
														
													
											
										
											
									
								</span>
							</div>
							
						</div>
					</div>				
				</div>
				<div class="col-sm-6 col-xs-12 margin-top-xs-10">
					<div class="boxDefault importo">
						<h3>	
							Utilizzo carta
						</h3>
						<div>
							<div class="row">
								<label>
									
									
									
										Saldo prepagata:
									
									
								</label>
								<span class="oRight">
									
										
										
																	
												
													
														7,00 &euro;
													
												
												
											
										
									
								</span>
							</div>
							<div class="row">
								<label>
									Complessivo mensile:
								</label>
								<span class="oRight">
									3.000,00 &euro;
								</span>
							</div>
							<div class="row">
								<label>
									Importo utilizzato:
								</label>
								<span class="oRight">
									0,00 &euro;
								</span>
							</div>
							<div class="row">
								<label>
									Importo residuo:
								</label>
								<span class="oRight">
									3.000,00 &euro;
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
	
	<div class="row">
		
			<div class="col-sm-6 col-xs-12 margin-top-xs-10">
				<div class="boxDefault">
					<h3>
						Conto di appoggio
					</h3>
					<div>
						<div class="row">
							<label>
								Numero conto:
							</label>
							<span>
								00000000
							</span>
						</div>
						<div class="row">
							<label>
								Filiale:
							</label>
							<span>
								MILANO - 0000
							</span>
						</div>
						<div class="row">
							<label>
								Intestato a:
							</label>
							<span>
								COGNOME NOME
							</span>
						</div>
					</div>
				</div>
			</div>
		
			
		</div>
	</div>
</div>

<div class="pull-right margin-bottom20">
	<input type="button" name="Esegui" value="Riepilogo" onclick="javascript:window.location.href ='/strutt_priv_new.php?pag=le_mie_carte&lev1=carte&wdg=11|02'" class="btn btn-primary" alt="Riepilogo">
</div>
<script>
$(document).ready(function(){
	
	var height = 0, width = 0;
	
	$('.innerBoxWhite').each(function(){
		if($(this).height()>height){
			height = $(this).height();
		}
		if($(this).width()>width){
			width = $(this).width();
		}
	});
	
	$('.innerBoxWhite').each(function(){
		/*$(this).width(width);*/
		$(this).height(height);
	});

	var altezza = 0;
	$('.box-riepilogo').each(function(){
		var altezzaTemp = $(this).height();
		if(altezzaTemp > altezza){
			altezza = altezzaTemp;
		}
	})
	$('.box-riepilogo').height(altezza);	
	});
</script>
