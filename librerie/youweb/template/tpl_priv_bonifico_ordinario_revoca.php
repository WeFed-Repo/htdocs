					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							05/04/2017	
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
		<span>Dettaglio disposizione</span>
 	</h1>
	
	


				 
				
			
			  
			
		
		
		
		
		
			<div class="clearfix">
				<div class="section clearfix" id="bonOrdinarioBox">
					<div class="row">
<div class="col-sm-6 col-xs-12 margin-top-xs-10">
<div class="boxDefault" style="min-height:160px">
<h3>Ordinante</h3><div>
<div class="row">
<label>Conto di addebito:</label>
<span class="oLeft">00000000</span>
</div>
<div class="row">
<label>Intestato a:</label>
<span class="oLeft">COGNOME NOME</span>
</div>
<div class="row">
<label>Filiale:</label>
<span class="oLeft">MILANO - 0000</span>
</div>
</div></div></div>
<div class="col-sm-6 col-xs-12 margin-top-xs-10"><div class="boxDefault" style="min-height:160px
"><h3>Beneficiario</h3><div>
<div class="row">
<label>Intestato a  :</label>
<span class="oLeft">NOME COGNOME</span>
</div>
<div class="row">
<label>IBAN:</label>
<span class="oLeft">IT99B00000000000000000000000</span>
</div>
<div class="row">
<label>Banca beneficiario:</label>
<span class="oLeft">BANCA POPOLARE DI SONDRIO&nbsp;-&nbsp;BANCA AGENZIA 0000</span>
</div>
</div></div></div>
</div>
<div class="row">
<div class="col-sm-6 col-xs-12 margin-top-xs-10"><div class="boxDefault"><h3>Dati disposizione</h3><div>
<div class="row">
<label>Importo:</label>
<span class="oRight">1,00</span>
</div>
<div class="row">
<label>Commissioni:</label>
<span class="oRight">0,00</span>
</div>
<div class="row">
<label>Importo totale:</label>
<span class="oRight">1,00</span>
</div>
<div class="row">
<label>Causale:</label>
<span class="oLeft">BONIFICO DI PROVA2</span>
</div>
<div class="row">
<label>Codice CRO/TRN:</label>
<span class="oLeft">0000000000000000000000000000IT</span>
</div>
</div></div></div>
<div class="col-sm-6 col-xs-12 margin-top-xs-10"><div class="boxDefault" style="height: 180px;"><h3>Dati esecuzione</h3><div>
<div class="row">
<label>Data esecuzione:</label>
<span class="oLeft">28/04/2017</span>
</div>
<div class="row">
<label>Data Valuta Beneficiario:</label>
<span class="oLeft">02/05/2017</span>
</div>
<div class="row">
<label>Data e ora inserimento:</label>
<span class="oLeft">05/04/2017 11.34.40</span>
</div>
<div class="row">
<label>Data Valuta Ordinante:</label>
<span class="oLeft">28/04/2017</span>
</div>
<div class="row">
<label>Stato e descrizione:</label>
<span class="oLeft">A scadenza</span>
</div>
</div></div></div>
</div>

				</div>
			</div>
			
		
		
		
		
		
			
			
			
				
			
		
		<form id="formIndietro" method="post" action="/strutt_priv.php?pag=bonifico_ordinario_step3&lev1=pagamenti&wdg=06|02" class="form-horizontal">
			<input type="hidden" name="codContoCorrente" value="000|0000|00000000000">
			
		</form>
</div>

 
		
	
		
		
		<form id="formDettaglioDisposizione" method="post" action="/strutt_priv.php?pag=bonifico_ordinario_revoca_conferma&lev1=pagamenti&wdg=06|02" onreset="submitForm('formIndietro')">
			
			<div class="divForm">
				<input type="hidden" name="codice" value="IH7000000000" id="codice">
				<input type="hidden" name="tipoOperazione" value="revoca" id="tipoOperazione">
				<input type="hidden" name="contoDeposito" value="N">
			</div>
			





<div class="pull-right margin-bottom20">
	<input type="reset" value="Indietro" class="btn btn-primary" alt="Indietro">
	<input type="submit" value="Revoca" class="btn btn-primary execute" alt="Revoca">
</div>

		</form>
		
	
	

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
