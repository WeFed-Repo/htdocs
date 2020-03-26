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
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag scaricaCarta">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Scarica carta</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>











	


<div class="section clearfix">
	<div class="row-height">
		<div class="col-sm-6 col-xs-12 col-height margin-bottom-xs-10">
			<div class="boxDefault inside inside-full-height">
				<h3>
					
					








		
			Carta da scaricare
		
		
		
		


				</h3>
				<div>
					<div class="row">
						<label>Intestata a:</label>
						<span>Cognome Nome</span>
					</div>					
					<div class="row">
						<label>Tipo carta:</label>
						<span>YouCard</span>
					</div>					
					<div class="row">
						<label>Numero carta:</label>
						<span>0000 0000 0000 0000</span>
					</div>					
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12 col-height margin-bottom-xs-10">
			<div class="boxDefault inside inside-full-height">
				<h3>
					
					








		
			Rapporto di accredito
		
		
		
		


				</h3>
				<div>
					<div class="row">
						<label>Conto di accredito:</label>
						<span>00000000</span>
					</div>					
					<div class="row">
						<label>Filiale:</label>
						<span>PAVIA - 0000</span>
					</div>					
					<div class="row">
						<label>Intestato a:</label>
						<span>Cognome Nome</span>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>





	
 
<form id="formScaricaCarta" method="post" action="/WEBHT/cartaConto/scaricaCartaConferma.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="cf0fafb8973f1b29a0b402012614c5a8"></div>
	<div class="section clearfix">
		<h3 class="titleSection">
			
			








		
			Importo da scaricare
		
		
		
		


		</h3>
		<div class="bs-example">
			<div class="form-group">
				<div class="form-field-input col-xs-12 col-sm-4">
					<label class="control-label">
						Massimo scaricabile
					</label>
					<div class="form-field">
						7,00&nbsp;EUR
					</div>
				</div>
				<div class="form-field-input col-sm-4 col-xs-12">
					<label class="control-label">
				 			Imposta l'importo da scaricare
				 	</label>	 			
		 			<div class="form-field margin-bottom10">
			 			<input type="text" name="importo" maxlength="6" size="6" value="" id="importo" class="form-control wauto floatl">
			 			<span style="float:left;padding:5px">,</span>
			 			<input type="text" name="decimali" maxlength="2" size="2" value="00" id="importoDecFinto" class="form-control wauto">
			 		</div>
				</div>
			</div>
		</div>
	</div>
</form>
</div>

<div class="pull-right margin-bottom20">
		
			<form id="formScaricaCarta" method="post" action="/WEBHT/cartaConto/scaricaCarta.do" class="form-horizontal" style="float:left"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="cf0fafb8973f1b29a0b402012614c5a8"></div>
			<input type="submit" name="modifica" value="Modifica" class="btn btn-primary" alt="Modifica">
			</form>
		
		<input type="button" name="ricaricaConferma" value="Avanti" onclick="$('#formScaricaCarta').submit()" class="btn btn-primary " alt="Avanti">
	</div>