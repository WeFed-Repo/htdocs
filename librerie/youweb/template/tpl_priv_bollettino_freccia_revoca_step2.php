					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							12/05/2017	
						</div>
					</div>
					
					
					
					





<div class="riquadro clearfix">
	
	
	
	
	








	


	
	
	
		
			
			  
				
					
					
					
				
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag ultimeDisposizioni">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Esito annullo disposizione</span>
 					
				
			
			
		
	</h1>
	
	


			  
			
		
		
		
			





<div class="col-xs-12 messagePanel success hidden-print" style="display: block;">
	<h3 class="titleSection hidden-print">Esito operazione</h3>
	<div>
	<p><strong>
		
	    
	    
    		
    		
	    		Operazione eseguita con successo
    		
	    
	   	
		
		
		
	</strong></p>
	</div>
</div>

		
		
		
			<div class="clearfix">
				<div class="section clearfix">
					<div class="row">
<div class="col-sm-6 col-xs-12 margin-top-xs-10"><div class="boxDefault"><h3>Dettaglio disposizione</h3><div>
<div class="row">
<label>Conto di addebito:</label>
<span class="oLeft">00003610</span>
</div>
<div class="row">
<label>Intestato a:</label>
<span class="oLeft">URLAAL OC ULOMAT</span>
</div>
<div class="row">
<label>Filiale:</label>
<span class="oLeft">SEDE DI LODI - 2001</span>
</div>
<div class="row">
<label>Riferimento interno:</label>
<span class="oLeft">IH7132047166</span>
</div>
<div class="row">
<label>Operazione:</label>
<span class="oLeft">Freccia</span>
</div>
</div></div></div>
<div class="col-sm-6 col-xs-12 margin-top-xs-10"><div class="boxDefault" style="height: 180px;"><h3>Dati disposizione</h3><div>
<div class="row">
<label>Importo:</label>
<span class="oRight">161,64</span>
</div>
<div class="row">
<label>Commissioni:</label>
<span class="oRight">0,00</span>
</div>
<div class="row">
<label>Importo totale:</label>
<span class="oRight">161,64</span>
</div>
<div class="row">
<label>Descrizione pagamento:</label>
<span class="oLeft">                                                                                                                                                                                                        </span>
</div>
</div></div></div>
</div>
<div class="row">
<div class="col-sm-6 col-xs-12  margin-top-xs-10"><div class="boxDefault"><h3>Dati esecuzione</h3><div>
<div class="row">
<label>Stato e descrizione:</label>
<span class="oLeft">Revocata</span>
</div>
<div class="row">
<label>Data esecuzione:</label>
<span class="oLeft">31/05/2017</span>
</div>
<div class="row">
<label>Data e ora inserimento:</label>
<span class="oLeft">12/05/2017 14.14.03</span>
</div>
<div class="row">
<label>Codice bollettino:</label>
<span class="oLeft">310982505065556849957 </span>
</div>
</div></div></div>
</div>

				</div>
			</div>
			
		
		
		
		
		
			
			
			
				
			
		
		<form id="formIndietro" method="post" action="/WEBHT/pagamenti/ultimeDisposizioniConferma.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="0c3972e9c30ca5f648109ef00675684b"></div>
			<input type="hidden" name="codContoCorrente" value="001|2001|200100003610">
			
		</form>
</div>

 
	
	
	
		<div class="pull-right margin-bottom20">
			
			
			<input type="button" name="conferma" value="Torna indietro" onclick="$('#formIndietro').submit();" class="btn btn-primary" alt="Torna indietro">
			
				<input type="button" name="stampa" value="Stampa per ricevuta" onclick="javascript:window.print();" class="btn btn-primary execute hidden-xs" alt="Stampa per ricevuta">
			
		</div>
		
		
		
		
	

<script>
function heightFix(){
	var default_alt = 0;
	$(".col-sm-6").each(function(index){
		var alt = $(this).find('.boxDefault').height();
		if(index % 2 != 0){
			//$(this).css("padding", "10px 10px 0px 10px");
			if(alt > default_alt ){
				var previous = index  - 1;
				$(".col-sm-6:eq("+previous+")").find(".boxDefault").height(alt);
				//$(this).css("padding", "10px 10px 0px 10px");
			}else{
				
				$(this).find(".boxDefault").height(default_alt);
			}
			default_alt = 0;
		}else{
			default_alt = alt;
			//$(this).css("padding", "10px 0px 0px 10px");
		}
		//$(".col-xs-6:eq(0)").css("padding", "10px 5px 0px 10px");

	})
}

$(document).ready(function(){
	if (!isMobile()) heightFix();
});

$( window ).resize(function() {
	if (!isMobile()) heightFix();
});

</script>