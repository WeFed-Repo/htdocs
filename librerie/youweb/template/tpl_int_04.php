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
						<span>Richieste finanziamento con documenti da ricaricare</span>
					</h1>
					<div class="col-xs-12">
						<div class="contentPagina">
							<div>Gentile cliente, risultano delle pratiche di richiesta finanziamento con dei documenti che devono essere ricaricati.</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pull-right azioni margin-bottom20"><input style="text-transform: none;" onclick="document.location.href=getPathContext()+'/homepage.do'" name="home" type="button" value="Home" class="btn btn-primary"> <input style="text-transform: none;" onclick="document.location.href=getPathContext()+'/postaPersonale/richieste.do'" name="Le tue richieste" type="button" value="Le tue richieste" class="btn btn-primary"></div>
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