					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
					
					
					



<form id="formAllarmiDossier" method="post" action="/WEBHT/sm/dossier.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="7b04613eeb827929266bc339aa6319ef"></div>
<div class="riquadro clearfix">
<!-- This Page Is Valid XHTML 1.0 Transitional -->  









	




 






<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag pannelloControllo">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Allarmi dossier</span>
 					
				
			
			
		
	</h1>
	
	






<div class="divForm">			
<div class="section clearfix">	
	




<div class="selezioneCC"> 

			<h3 class="titleSection">
	
	
	








		
			Seleziona Dossier
		
		
		
		

</h3>
	<div class="tabellaSelezioneCC">	
		<table class="table">
		    <colgroup> 
		      <col width="3%"> 
		      <col width="18%"> 
		      <col width="40%"> 
		      <col width="40%">                   
		    </colgroup> 
		    <tbody>
		    <tr>
		    	<th>&nbsp;</th>
		        <th>Dossier</th>
		        <th>Filiale</th>
		        <th>Intestazione</th>     
			</tr>
			
			
				<tr>
			      	<td><input type="radio" name="chiaveDossier" value="007|0004|000000583508" checked="checked" onclick="submit();" id="chiaveDossier"></td>    	
		         	
		         	<td>000000583508</td> 
		         	<td>VERONA AG. 3 - 0004</td> 
		         	<td>ACOC SAIIDT  AEGNUNORESGALG</td>
				</tr>		
			
				<tr>
			      	<td><input type="radio" name="chiaveDossier" value="007|0004|000092994750" onclick="submit();" id="chiaveDossier"></td>    	
		         	
		         	<td>000092994750</td> 
		         	<td>VERONA AG. 3 - 0004</td> 
		         	<td>NSECIAD UGACLAT</td>
				</tr>		
						
		    </tbody> 
		</table>
	</div>
</div>

	</div>
	<div class="section clearfix">
		<h3 class="titleSection">	
		








		
			Impostazione Allarmi
		
		
		
		


		</h3>
		
		<script>
		$(function() {
		var widthDevice = (window.innerWidth > 0) ? window.innerWidth : screen.width;  
		if (widthDevice<992) {$("#tableInfoDossier").cardBoxTable({   //deve diventare verticale già a 991px
		colTitleIdx: 4
		});}});
		</script>

		 <div id="allarmiDossier" class="table-responsive" style="display: block;">
	
		 <table id ="tableInfoDossier" class="tabellaBlu table allarmi">
			<colgroup> 
				<col width="79%"> 
				<col width="7%">
				<col width="7%">
				<col width="7%">
			</colgroup>
			<thead> 
			<tr>
				<th>Descrizione del messaggio di allarme</th>
				<th style="text-align:center">Sms</th>
				<th style="text-align:center">E-mail</th>
				<th style="text-align:center">App</th>
			</tr>
			</thead>


			<tbody> 
			
			


			<tr>	
				<td>Eseguiti Ineseguiti di borsa</td>
	  	      	<td style="text-align:center"><input type="checkbox" name="eseguitiIneseguiti.sms" value="on" id="eseguitiIneseguiti.sms" class="sfondoForm" title="Avviso tramite SMS"></td>
			  	<td style="text-align:center"><input type="checkbox" name="eseguitiIneseguiti.email" value="on" class="sfondoForm" title="Avviso tramite email"></td>
			  	<td style="text-align:center"><input type="checkbox" name="eseguitiIneseguiti.app" value="on" checked="checked" class="sfondoForm" title="Avviso tramite app"></td>
			</tr>
			<tr>	
			  	<td>Valore totale Dossier a fine giornata (invio h. 8.30)</td>
	  	      	<td style="text-align:center"><input type="checkbox" name="valoreDossier.sms" value="on" id="valoreDossier.sms" class="sfondoForm" title="Avviso tramite SMS"></td>
			  	<td style="text-align:center"><input type="checkbox" name="valoreDossier.email" value="on" class="sfondoForm" title="Avviso tramite email"></td>
			  	<td style="text-align:center"><input type="checkbox" name="valoreDossier.app" value="on" class="sfondoForm" title="Avviso tramite app"></td>
			</tr>
			</tbody> 
		</table>
	</div>
		</div>
	</div></div>  
		
		<div class="pull-right margin-bottom20">
		
		  	  
	 	<div class="actions">
			<input type="submit" name="annulla" value="Annulla" class="button btn btn-primary" alt="Annulla">
			<input type="submit" name="conferma" value="Conferma" class="button btn btn-primary execute" alt="Conferma">
		</div>  	</div>
	</form>