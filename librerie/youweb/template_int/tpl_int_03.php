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
					<h1><div class="hidden-print hidden-xxs flag news">&nbsp;</div><span>Special Day di aprile</span></h1>
					<div class="col-xs-12">
						<div class="contentPagina">
							<table class="tplPubTable">
							<tbody>
							<tr>
								<td valign="top"><img title="YouWinSpecial2" src="/HT/IMAGES/CONTENUTI/YouWinSpecial2.png" alt="YouWinSpecial2" ></td>
								<td valign="middle">
								<p><strong>Al via gli "Special Day" di YouWin!<br></strong>Non perdere l'edizione speciale del gratta e vinci in esclusiva dal<strong> 5 al 7 di&nbsp;aprile</strong> e scopri subito se uno dei<strong> 640 premi</strong> &egrave; tuo.<br><br>
								Sei un<strong> Esperto</strong>? Un <strong>Campione</strong>? Una <strong>Leggenda</strong>?<br><br>
								<strong>Accedi subito al portale YouWin</strong> e scopri qual &egrave; il tuo livello in base al numero di operazioni effettuate su <strong>YouWeb</strong>&nbsp;e <strong>YouApp</strong> nel mese di marzo.</p>
								<p><strong></strong></p>
								<p><strong></strong></p>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
								<div class="pull-right azioni margin-bottom20">
			<input style="text-transform: none;" class="XXL btn btn-primary" onclick="javascript:OpenWindow(getPathContext()+'/serviziPerTe/youWin.do','_blank',''); return false;" name="home" type="button" value="Vai a YouWin"> <input style="text-transform: none;" onclick="document.location.href=getPathContext()+'/homepage.do'" name="NonOra" type="button" value="Vai alla Home" class="btn btn-primary"></div>
				</div>
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
</div>