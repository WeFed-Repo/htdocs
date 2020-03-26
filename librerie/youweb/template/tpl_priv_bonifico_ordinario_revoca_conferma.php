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
		<span>Esito annullo disposizione</span>
 	</h1>
	

<div class="col-xs-12 messagePanel success hidden-print" style="display: block;">
	<h3 class="titleSection hidden-print">Esito operazione</h3>
	<div>
	<p>Operazione eseguita con successo</p>
	</div>
</div>

		
		
		
			<div class="clearfix">
				<div class="section clearfix" id="bonOrdinarioBox">
					<div class="row">
<div class="col-sm-6 col-xs-12 margin-top-xs-10">
	<div class="boxDefault" style="min-height: 160px">
	<h3>Ordinante</h3>
	<div>
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
	</div>
	</div>
</div>
<div class="col-sm-6 col-xs-12 margin-top-xs-10">
	<div class="boxDefault" style="min-height: 160px">
	<h3>Beneficiario</h3>
	<div>
		<div class="row">
			<label>Intestato a  :</label>
			<span class="oLeft">NOME COGNOME</span>
		</div>
		<div class="row">
			<label>IBAN:</label>
			<span class="oLeft">IT99B0000000000000000000000</span>
		</div>
		<div class="row">
			<label>Banca beneficiario:</label>
			<span class="oLeft">BANCA POPOLARE DI SONDRIO&nbsp;-&nbsp;BANCA AGENZIA 0000</span>
		</div>
	</div>
	</div>
</div>
</div>
<div class="row">
	<div class="col-sm-6 col-xs-12 margin-top-xs-10">
	<div class="boxDefault"><h3>Dati disposizione</h3><div>
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
		<span class="oLeft">BONIFICO DI PROVA</span>
	</div>
	<div class="row">
		<label>Codice CRO/TRN:</label>
		<span class="oLeft">0000000000000000000000000000IT</span>
	</div>
</div></div></div>
<div class="col-sm-6 col-xs-12 margin-top-xs-10"><div class="boxDefault" style="height: 180px;"><h3>Dati esecuzione</h3><div>
<div class="row">
<label>Data esecuzione:</label>
<span class="oLeft">05/04/2017</span>
</div>
<div class="row">
<label>Data Valuta Beneficiario:</label>
<span class="oLeft">06/04/2017</span>
</div>
<div class="row">
<label>Data e ora inserimento:</label>
<span class="oLeft">05/04/2017 11.10.41</span>
</div>
<div class="row">
<label>Data Valuta Ordinante:</label>
<span class="oLeft">05/04/2017</span>
</div>
<div class="row">
<label>Stato e descrizione:</label>
<span class="oLeft">Revocata</span>
</div>
</div></div></div>
</div>

				</div>
			</div>
			
		
		

		<form id="formIndietro" method="post" action="/strutt_priv.php?pag=bonifico_ordinario_revoca&lev1=pagamenti&wdg=06|02" class="form-horizontal">
			<input type="hidden" name="codContoCorrente" value="000|0000|000000000000">
			
		</form>
</div>

 
	
	
	
<div class="pull-right margin-bottom20" id="bonificoOrdinarioBtn" >
			
				
	<input type="button" name="predisponi" value="Ripeti bonifico" onclick="$('#formBonifico').submit();" class="btn btn-primary" alt="Ripeti bonifico">
					
	<input type="button" name="conferma" value="Torna indietro" onclick="$('#formIndietro').submit();" class="btn btn-primary" alt="Torna indietro">
			
	<input type="button" name="stampa" value="Stampa per ricevuta" onclick="javascript:window.print();" class="btn btn-primary execute hidden-xs" alt="Stampa per ricevuta">

			
</div>
		
		
		
			
				
					
				
				
			
		
		
			<form id="formBonifico" method="post" action="/strutt_priv.php?pag=bonifico_ordinario&lev1=pagamenti&wdg=06|02">
				<input type="hidden" name="codBeneficiario" value="">
				<input type="hidden" name="codContoCorrente" value="001|0000|000000000000">
				<input type="hidden" name="conto" value="">
				<input type="hidden" name="abi" value="">
				<input type="hidden" name="tipoCoordinate" value="iban">
				<input type="hidden" name="cab" value="">
				<input type="hidden" name="cin" value="">
				<input type="hidden" name="nomeBeneficiario" value="NOME COGNOME">
				<input type="hidden" name="causale" value="BONIFICO DI PROVA">
				<input type="hidden" name="importoInt" value="1">
				<input type="hidden" name="importoDec" value="00">
				<input type="hidden" name="iban" value="IT99B0000000000000000000000">
				<input type="hidden" name="memorizza" value="">
				
				<input type="hidden" name="cdope" value="IH0000000000">
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
