					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							09/05/2017	
						</div>
					</div>
					
					
					






<form id="revoca" method="post" action="/WEBHT/pagamenti/bonificoContinuativoConfermaRevoca.do">
<div class="riquadro clearfix">
	
	
	 
			
	




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				
			
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
		
				
				<div class="hidden-print hidden-xxs flag continuativo">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Ordine di bonifico ripetitivo</span>
 					
				
 					
 					
 						<span class="hidden-xs">:&nbsp; esito</span>
 					
				
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	





<div class="col-xs-12 messagePanel success hidden-print" style="display: block;">
	<h3 class="titleSection hidden-print">Esito operazione</h3>
	<div>
	<p><strong>
		
	    
	    
    		
    		
	    		Operazione eseguita con successo
    		
	    
	   	
		
		
		
	</strong></p>
	</div>
</div>

	
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
								Conto di addebito
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
								00000&nbsp;MILANO &nbsp;
								
									(MI)
								
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
							<label>IBAN</label>
							<span>IT00B0000000000000000000000</span>
						</div>		
							<div class="row">
								<label>Beneficiario</label>
								<span>NOME COGNOME</span>					
							</div>							
							<div class="row">
								<label>Causale</label>
								<span>BANCA POPOLARE DI MILANO S.P.A.         &nbsp;-&nbsp;WEBANK AGENZIA 0000                     </span>							
							</div>							
						</div>
				</div>
			</div>
		</div>

	<div class="row">

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
							
								
								
								
								
								
									Semestrale
								
							
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
					<div class="row">
						<label>
							Giorno valuta beneficiario
						</label>
						<span>
							
						   		01
					   		
					   		
						</span>
					</div>
					<div class="row">
						
					</div>
					<div class="row">
						<label>
							A partire da
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
					
					








		
			Dati bonifico
		
		
		
		


				</h3>
				<div>
					<div class="row">
						<label>
							Importo
						</label>
						<span class="oRight">
							1,00
						</span>
					</div>
					<div class="row">
						<label>
							Stato e descrizione
						</label>
						<span>
							Eseguita
						</span>					
					</div>
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
							Data e ora pagamento
						</label>
						<span>
							09/05/2017 alle ore 14:08.36
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<input type="hidden" name="codContoCorrente" value="001|2070|207000001788" id="codContoCorrente">
<input type="hidden" name="selezionato" value="1238004" id="selBonRip">
<input type="hidden" name="revoca" value="revoca" id="revocaBon">

<div class="pull-right margin-bottom20">
		
		
	<input type="button" name="revoca" value="Revoca" onclick="$('#revoca').submit();" class="btn btn-primary" alt="Revoca">
	<input type="button" name="listaBonCont" value="Lista bonifici ripetitivi" onclick="javascript:goToPage('/pagamenti/bonificoContinuativoLista.do')" class="btn btn-primary" alt="Lista bonifici ripetitivi">
</div>
</form>





					
