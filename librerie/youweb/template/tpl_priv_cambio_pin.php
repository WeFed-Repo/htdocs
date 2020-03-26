					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							22/05/2017	
						</div>
					</div>
					
					
					
					





<div class="riquadro clearfix">
	
	
	




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
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
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			
		
		
			
		
		
			
				
 					<span>Cambio PIN</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				







		<div class="contentPagina">
			Ti consigliamo di cambiare periodicamente il tuo codice PIN. Per effettuare l'aggiornamento inserisci il PIN attuale e successivamente, per due volte, il nuovo PIN. Ti consigliamo di creare un codice composto sia da lettere che numeri prestando attenzione alle lettere maiuscole e minuscole.  Tieni presente che da questa sezione effettui l'aggiornamento del solo PIN del YouWeb, per sostituire anche quello del YouCall accedi al servizio e scegli l'opzione 7 del risponditore vocale.
		</div>



			</div>
		
	
</div>
	
	








	


	
	<form id="formCambioPassword" method="post" action="/WEBHT/serviziPerTe/cambioPasswordConferma.do">
	<div class="section clearfix">
		<h3 class="titleSection">		
			
			








		
			Inserisci dati
		
		
		


		</h3>
		<div class="bs-example form-horizontal">
			<div class="form-group">
				<div class="form-field-input col-xs-12 col-sm-4">
					<label class="control-label" for="attuale">
						PIN attuale 
					</label>
					<div class="form-field">
						<input type="password" name="oldPwd" maxlength="30" size="35" value="" id="attuale" class="form-control">
					</div>
					
					<div style="margin-top:10px">
						<input type="checkbox" id="togglePassword">
						Mostra password
					</div>
					
				</div>
				<div class="form-field-input col-xs-12 col-sm-4">
					<label for="nuova" class="control-label">
						PIN nuovo 
					</label>
					<div class="form-field">
						<input type="password" name="newPwd" maxlength="30" size="35" value="" id="nuova" class="form-control">
					</div>
				</div>
				<div class="form-field-input col-xs-12 col-sm-4">
					<label for="conferma" class="control-label">
						Conferma PIN nuovo 
					</label>
					<div class="form-field">
						<input type="password" name="reNewPwd" maxlength="30" size="35" value="" id="conferma" class="form-control">
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	</form>
	



</div> 
<div class="pull-right"> 	
 	
 	<form id="formIndietro" method="post" action="/WEBHT/serviziPerTe/ilTuoProfilo.do" class="floatl">
		<input type="submit" name="annulla" value="Indietro" class="btn btn-primary" alt="">
 	</form>
 	
 	<input type="button" name="opera" value="Avanti" onclick="$('#formCambioPassword').submit()" id="confButt" class="btn btn-primary" alt="Avanti">
 </div>
<script type="text/javascript">
$(document).ready(function(){
	$("#togglePassword").click(function(e){
		//e.preventDefault();
		$('#attuale').each(function(){

			if($(this).attr("type") == "password"){
				$(this).attr("type", "text");
			}else{
				$(this).attr("type", "password");
			}
		});
		$('#nuova').each(function(){
			if($(this).attr("type") == "password"){
				$(this).attr("type", "text");
			}else{
				$(this).attr("type", "password");
			}
		});
		$('#conferma').each(function(){
			if($(this).attr("type") == "password"){
				$(this).attr("type", "text");
			}else{
				$(this).attr("type", "password");
			}
		})
	})
})


</script>