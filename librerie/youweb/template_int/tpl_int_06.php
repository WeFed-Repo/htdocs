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
		<span>Comunicazione alla clientela</span>
 	</h1>
	
	


	<div class="col-xs-12">
		<div class="contentPagina">
			<p>
			<!--img style="margin-bottom: 10pt; float: left; margin-right: 15pt; border: 0px;" title="attenzione" src="/HT/fe/img/IC_Feedback-Alert_20px_2x.png" alt="attenzione" width="100" height="100"--> 
			<span class="imgTpl8"></span>

			Gentile cliente,<br><br>da una verifica sui nostri Database ci risulta scaduto il tuo documento d'identit&agrave;. Qualora non avessi gi&agrave; provveduto, ti preghiamo di<br> recarti con un documento in corso di validit&agrave; presso la tua filiale, al fine di aggiornare la tua posizione anagrafica consentendoti cos&igrave; la prosecuzione della tua normale operativit&agrave;.</p>

		</div>



				</div>
			</div>
	<div class="pull-right azioni margin-bottom20">
	<input class="btn btn-primary" style="text-transform: none;" onclick="document.location.href=getPathContext()+'/homepage.do'" name="home" type="button" value="Vai alla Home"></div>
		</div>



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