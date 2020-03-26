					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							09/05/2017	
						</div>
					</div>
					
					
					
					



<div class="riquadro clearfix">

<form id="formConferma" method="post" action="/WEBHT/pagamenti/bonificoContinuativoEsitoRevoca.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="e62b05c97a935f7cad34c187fda6f502"></div>
	<input type="hidden" name="pagina" value="conferma">
	 
	
			
	



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag continuativo">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Revoca di bonifico ripetitivo</span>
 					
				
 					
 					
 						<span class="hidden-xs">:&nbsp; conferma</span>
 					
				
			
			
		
	</h1>
	
	



		<div class="section clearfix">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="boxDefault">
						<h3>
							
							








		
			Ordinante
		
		
		
		


						</h3>
						<div>
							<div class="row">
								<label>
									C/C di addebito
								</label>
						  		<span>
						  			000000000000
						  		</span>
				  			</div>
						  	<div class="row">
								<label>
									Indirizzo
								</label>
								<span>
									VIA AMERIGO VESPUCCI 111 
									00000&nbsp;MILANO
						            
								</span>
							</div>
							<div class="row">
								<label>
									Filiale
								</label>
						 		<span>
						 			MILANO - 0000
						 		</span>
				 			</div>
							<div class="row">
								<label>
									Intestato a
								</label>
						 	    <span>
						 	    	COGNOME NOME
						 	    </span>
				 			</div>
				 		</div>
					</div>
				</div>
		
				<div class="col-sm-6 col-xs-12">
					<div class="boxDefault">
						<h3>		  
							
							








		
			Beneficiario
		
		
		
		


						</h3>
						<div>
							<div class="row">
								<label>
									Beneficiario
								</label>
						 		<span>
						 			NOME COGNOME
						 		</span>
						 	</div>
							 
							 	<div class="row">
									<label>
										IBAN
									</label>
									<span>
										IT00&nbsp;
										B&nbsp;00000&nbsp;
										00000&nbsp;000000000000
									</span>
								</div>
							
							 
							 
								
							
							</div>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<div class="boxDefault">
							<h3>		
								
								








		
			Dati bonifico
		
		
		
		


							</h3>
							<div>
								<div class="row">
									<label>
										Causale 
									</label>
							 	 	<span>
							 	 		PROVA                                                       
							 	 	</span>
							 	</div>
							 	<div class="row">
									<label>
										Numero ordine
									</label>
									<span>
										1238004
									</span>
								</div>
							 	<div class="row">
									<label>
										Importo
									</label>
							  		<span>
							  			1
							  		</span>
							  	</div>
								<div class="row">
									<label>
										Data valuta
									</label>
							  		<span>
							  			01/12/2021
							  		</span>
							  	</div>
							 </div>
						</div>
					</div>				 
					<div class="col-sm-6 col-xs-12">
						<div class="boxDefault">
							<h3>				
								
								








		
			Periodicit&agrave; bonifico   
		
		
		
		


							</h3>
						
							<div>
								<div class="row">
									<label>
										Periodicit&agrave; bonifico   
									</label>
							  		<span>
							  			Altro
							  		</span>
							  	</div>
						  		<div class="row">
									<label>
							  			Numero Rate
							  		</label>
							  		<span>
							  			
								 			
								 		 		Fino a revoca
								 		 	
								 		 	
								 				
							  		</span>
							  	</div>
							  <div class="row">
									<label>
										A partire da  
									</label>
							 		<span>
							 			01/12/2021
							 		</span>
							  </div>
							  <div class="row">
									<label>
							  			Data ultimo pagamento effettuato
							  		</label>
							  		<span>
							  			
								 			
								 		 		Nessun pagamento
									 		 
									 		 
								 			
							  		</span>
							 </div>						  
							 <div class="row">
								<label>
									Fino a  
								</label>
						 		<span>
							 		
							 		 
							 		 	Revoca
							 		 
							 		 
							 		
							 	</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

<div class="pull-right margin-bottom20">
	<input type="button" name="annulla" value="Annulla" onclick="window.location='../pagamenti/bonificoContinuativoListaConferma.do?pagina=conferma';" class="btn btn-primary">
	<input type="button" name="conferma" value="Conferma" onclick="$('#formConferma').submit()" class="btn btn-primary execute">
</div>