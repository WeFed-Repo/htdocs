<div id="mainContent" class="center col-xs-12 template3">
	<div class="visible-print-block"> 
		<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
		<div class="pull-right">
			  
			<fmt:formatdate type="date" value="${now}" pattern="${fmtdate}">	
		</fmt:formatdate></div>
	</div>
	
	<div class="container">
	<div class="col-sm-10 col-sm-offset-1 col-xs-12">
		<div class="riquadro clearfix" style="z-index:99">
			
			<div class="clearfix">
<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag news">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Novit&agrave; all'accesso di YouWeb</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


					
				
				<div class="col-xs-12">
					







		<div class="contentPagina">
			<p><img style="margin-bottom: 10pt; float: left; margin-right: 5pt; border: 0px; max-width: 250px;" title="Cambio_codice_Identificativo" src="/HT/IMAGES/CONTENUTI/cambio-codice-identificativo_v1.png" alt="Cambio_codice_Identificativo"></p>
<p>&nbsp;</p>
<p>A partire dal <strong>4 luglio</strong> verr&agrave; <strong>modificata la Home page per accedere a YouWeb</strong>.<br> L'accesso a YouWeb avverr&agrave; in <strong>due semplici step</strong>: prima verr&agrave; richiesto l'inserimento del Codice Identificativo e del PIN e, successivamente alla <strong>conferma di queste credenziali</strong>, si acceder&agrave; ad una <strong>seconda pagina</strong> in cui verr&agrave; richiesto il <strong>codice OTP</strong> generato attraverso il dispositivo di sicurezza.<br><br> Dopo questi due passaggi potrai comodamente accedere in sicurezza al tuo YouWeb.<br><br> Se utilizzi la modalit&agrave; "easy" (con certificato digitale) la tua modalit&agrave; di accesso non varia.<br><br> Resta sempre aggiornato sulle prossime novit&agrave; di YouWeb!</p>
<p>&nbsp;</p>

		</div>



				</div>
			</div>
		</div>
	<div class="pull-right azioni margin-bottom20"><input class="btn btn-primary" style="text-transform: none;" onclick="document.location.href=getPathContext()+'/homepage.do'" name="home" type="button" value="Vai alla Home"></div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {		
		if ($(":button").length == 0 && $(":submit").length == 0) {
			setTimeout("window.location.reload()", 15000);			
		}
		
		$(".actions input[type='button']").each(function(){
		$(this).addClass("btn btn-primary");
	})
	var html = $('.actions').html();
	$('.actions').remove();
	$('#mainContent .azioni').append(html);
	});
</script>
				</div>