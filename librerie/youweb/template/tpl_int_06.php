<div id="mainContent" class="center col-xs-12 template3">
	<div class="visible-print-block"> 
		<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
		<div class="pull-right">
			<fmt:formatdate type="date" value="${now}" pattern="${fmtdate}">	
			</fmt:formatdate>
		</div>
	</div>

	<div class="container">
		<div class="col-sm-10 col-sm-offset-1 col-xs-12">
			<div class="riquadro clearfix" style="z-index:99">
				<div class="clearfix">
<style>
.imgSrv{float: none;}
</style>

					<h1>
						<div class="hidden-print hidden-xxs flag news">&nbsp;</div>
						<span>NUOVA CARTA DA PERSONALIZZARE</span>
					</h1>
					<div class="col-xs-12">
						<div class="contentPagina">
							<table style="width: 98%;">
							<tbody>
							<tr>
								<td><img title="CarteDaPersonalizzare" src="/HT/IMAGES/CONTENUTI/CarteDaPersonalizzare.png" alt="CarteDaPersonalizzare" width="222" height="142"></td>
								<td><strong>Hai una carta da personalizzare.</strong> <br><br>In data 01/02/2017 &egrave; stata emessa una carta bancomat a te intestata. <br><br>Attraverso il servizio YouWeb puoi <strong>personalizzarla</strong> scegliendo le immagini da una <strong>galleria a te dedicata</strong>. <br><br>Effettua subito questa semplice operazione e la carta che sceglierai verr&agrave; spedita entro pochi giorni al tuo indirizzo di corrispondenza con l'aspetto grafico che pi&ugrave; ti piace.</td>
							</tr>
							<tr>
								<td colspan="2">Clicca su "<strong>Personalizza adesso</strong>" per scegliere subito la grafica della tua nuova carta.<br>Se vuoi effettuare questa operazione in un secondo momento clicca su "Pi&ugrave; tardi".</td>
							</tr>
							</tbody>
							</table><br>
						</div>
					</div>
				</div>
			</div>
			<div class="pull-right azioni margin-bottom20"><input style="text-transform: none;" onclick="document.location.href=getPathContext()+'/homepage.do'" name="home" type="button" value="Pi&ugrave; tardi" class="btn btn-primary"> <input class="XXL btn btn-primary" style="text-transform: none;" onclick="document.location.href=getPathContext()+'/cartaConto/cartaDaPersonalizzareLista.do'" name="home" type="button" value="Personalizza adesso"></div>
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