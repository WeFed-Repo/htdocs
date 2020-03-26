<div id="mainContent" class="center col-xs-12 template3">
	<div class="visible-print-block">
		<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage" />
		<div class="pull-right">
			<fmt:formatDate type="date" value="${now}" pattern="${fmtdate}" />
		</div>
	</div>
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1 col-xs-12" >
			<div class="riquadro clearfix" style="z-index:99">
				<div class="clearfix">
					<style>
						.imgSrv{
						float: none;
						}
					</style>
					<h1>
						<div class="hidden-print hidden-xxs flag news">&nbsp;</div>
						<span>Richieste finanziamento con documenti da ricaricare</span>
					</h1>
					<div class="col-xs-12">
						<div class="contentPagina">
							<div>Gentile cliente,<br /><br />da un controllo effettuato sulla <strong>tua richiesta di finanziamento online</strong>, risulta che alcuni documenti da te caricati risultano incompleti o illeggibili.&nbsp;<br />Per procedere con quanto necessario, ti invitiamo a cliccare ora sul pulsante "<strong>Le tue richieste</strong>" o ad accedere in un secondo momento nella sezione "<strong>Posta Personale &gt; Contratti e proposte</strong>".<br />Senza questa operazione, la tua richiesta di finanziamento non potr&agrave; purtroppo essere considerata.<br /></div>
							<div class="actions"><input style="text-transform: none;" onclick="document.location.href=getPathContext()+'/homepage.do'" name="home" type="button" value="Home" /> <input style="text-transform: none;" onclick="document.location.href=getPathContext()+'/postaPersonale/richieste.do'" name="Le tue richieste" type="button" value="Le tue richieste" /></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pull-right azioni margin-bottom20"></div>
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