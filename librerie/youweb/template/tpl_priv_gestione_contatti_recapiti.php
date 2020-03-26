					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							29/06/2017	
						</div>
					</div>
					
					
					
					







<script>
	$(document).ready(function(e) {
	  	if (isMobile()) {
			$('.gestisci').css('text-align','center');
	  	}
	  	else{
	  		$('.gestisci').css('text-align','right');
	  	}
	});
	
	/* function showIndirizzi(){
		$('.indirizzi').removeClass('hidden-xs');
		$('.mail-cellulari').addClass('hidden-xs');
		$('#divIndirizzi').css('background','url("/HT/IMAGES/nGrafica/evidenziatabutton.png")right center no-repeat');
		$('#divMailCellulari').css('background','url("/HT/IMAGES/nGrafica/sf_titolo.png") right center no-repeat'); 
	}*/
	
	function showMailCellulari(){
		$('.indirizzi').addClass('hidden-xs');
		$('.mail-cellulari').removeClass('hidden-xs');
		$('#divMailCellulari').css('background','url("/HT/IMAGES/nGrafica/evidenziatabutton.png") right center no-repeat ');
		$('#divIndirizzi').css('background','url("/HT/IMAGES/nGrafica/sf_titolo.png") right center no-repeat');
		
	}
	
	function goToResidenza(){
		$('#residenzaForm').submit();
	}
	
	function setWidth(reference){
		$(this).css("width", $(reference).css("width"));
	}
	</script>


<div class="riquadro clearfix">

	
	
	
	









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag gestioneContatti">&nbsp;</div>
			
			
		
		
			
		
		
			
				I miei contatti
			
		
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	
	<div class="section clearfix">
		<div class="col-xs-12 margin-bottom20 selector visible-xs">
			<div class="titleSection col-xs-6" id="divMailCellulari" onclick="showMailCellulari()">
				Contatti
			</div>
	
			
		</div>
		
		
		<div class="row-height margin-bottom-sm-10 mail-cellulari">
			<div class="col-xs-12 col-sm-6 col-height margin-bottom-xs-10">
				<div class="boxDefault inside inside-full-height">
					<h3>
						EMail
					</h3>
					<div class="col-xs-12"  id="messageContainer">
						<div class="col-xs-12">
							<div id="topMessage">
								Vuoi aggiornare il tuo indirizzo di posta elettronica o aggiungerne uno nuovo? Clicca il pulsante sottostante.
							</div>
							<div style=" padding-top: 15px" id="bottomMessage">
								La tua Email predefinita &egrave; la seguente:<br>
							</div>
							<div style="padding-top: 10px; overflow:hidden; text-overflow:ellipsis" id="mailAddress">
								<span style="color: rgb(120,120,120); font-weight: bold">OSANDROSILVIA@ALICE.IT</span>
							</div>
						</div>
					</div>
					
					<script>
						$('#topMessage').setWidth($('#messageContainer'));
						$('#bottomMessage').setWidth($('#messageContainer'));
						$('#mailAddress').setWidth($('#messageContainer'));
					</script>
					
					<div class="row gestisci" style="text-align: right;">
						<form id="formGestioneEMail" method="post" action="/WEBHT/serviziPerTe/contattiERecapiti/EMail.do">	
							<input type="submit" name="loadEMail" value="Gestisci" class="btn btn-primary">
						</form>	
					</div>
				</div>
			</div>
			
			
			<div class="col-xs-12 col-sm-6 col-height margin-bottom-xs-10">
				<div class="boxDefault inside inside-full-height">
					<h3>
						Cellulari
					</h3>  
					<div class="col-xs-12">
						<div class="col-xs-12">
							<div>
								Desideri aggiungere un nuovo numero di cellulare o modificare il predefinito? Clicca il pulsante sottostante.
							</div>
							<div style="padding-top: 15px">
								Il tuo cellulare predefinito &egrave; il seguente: <br>  
							</div>
							<div style="padding-top: 10px; overflow:hidden; text-overflow:ellipsis">
								<span style="color: rgb(120,120,120); font-weight: bold">3281751525</span>
							</div>
						</div>
					</div>

					<div class="row gestisci" style="text-align: right;">
						<form id="formGestioneCellulari" method="post" action="/WEBHT/serviziPerTe/contattiERecapiti/Cellulari.do">	
							<input type="submit" name="loadCellulari" value="Gestisci" class="btn btn-primary">
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
		
	</div>
</div>