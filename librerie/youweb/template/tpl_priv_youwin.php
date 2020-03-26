		
					
					
					




<script type="text/javascript" language="Javascript"> 
	$(document).ready(function() {
		$('#formPrivacyYouWin').submit(function() {
  			if ($('input[name=flagConsenso]:checked').val() == 'false') {
  				window.close();
  				return false;
  			} else {
  				return true;
  			}
		});
	
		$('input[name=flagConsenso]').click(function() {
	    	if ($('input[name=flagConsenso]:checked').val() == 'true') {
	    		$('#btnAccedi').prop('disabled', false);
	    	} else {
	    		$('#btnAccedi').prop('disabled', true);
	    	}
		});
	}); 
</script>

<form id="formPrivacyYouWin" method="post" action="/WEBHT/serviziPerTe/youWin/privacy/update.do">

<div class="riquadro clearfix">




<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			
		
		
			
		
		
			
		
			
				
 					<span>Consenso alla privacy</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	

 









	



<div class="row">
	<div class="col-xs-12">
		<div class="contentPagina">
			<table>
			<tbody><tr>
				<td>
					<img title="YouWin" src="/HT/IMAGES/CONTENUTI/youwin_accedi_byWeb.gif" alt="Vinci e Sconta" width="150" height="142"></td><td>
				</td><td>
					
					







		<div class="contentPagina">
			Ai fini di potere accedere sia nella presente che in ulteriori analoghe occasioni alle videate che consentono di entrare nella piattaforma YouWin:
		</div>



					<div style="text-align: center;">
						<input type="radio" name="flagConsenso" value="true" id="privacyDoConsenso" class="sfondoForm">&nbsp;
						<strong><label for="privacyDoConsenso">presto il consenso</label></strong>
						&nbsp;&nbsp;
						<input type="radio" name="flagConsenso" value="false" checked="checked" id="privacyNonDoConsenso" class="sfondoForm">&nbsp;
						<strong><label for="privacyNonDoConsenso">nego il consenso</label></strong>
					</div><br>
					
					







		<div class="contentPagina">
			<div>
<div>
<div>al trattamento dei miei dati personali (cognome, nome, codice contratto, indirizzo, utenza telefonica) che saranno utilizzati ai fini della partecipazione ai Concorsi durante tutto&nbsp; il loro svolgimento, nei termini e modalit&agrave; previsti dai rispettivi Regolamenti pubblicati su questo sito.</div>
</div>
</div>
<br>
		</div>



				</td>
			</tr>
			</tbody></table>
	
			<br>	
		</div>
	</div>
</div>
</div>	


<div class="pull-right margin-botton10">
	
	<input type="button" name="chiudi" value="Chiudi" onclick="window.close();" class="btn btn-primary" alt="Chiudi">
	
	
	<input type="submit" name="accedi" value="Accedi" disabled="disabled" id="btnAccedi" class="btn btn-primary" alt="Accedi">
</div>
</form>