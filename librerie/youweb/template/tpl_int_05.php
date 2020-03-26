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
						<span>Campagna di controllo delle coordinate IBAN </span>
					</h1>
					<div class="col-xs-12">
						<div class="contentPagina">
							<div>
								<table>
								<tbody>
								<tr>
									<td><table>
									<tbody>
									<tr>
										<td><img title="imm_ass_cut" src="/HT/IMAGES/CONTENUTI/imm_ass_cut.gif" alt="imm_ass_cut" width="149" height="117"></td>
										<td><br>
											<p>Gentile cliente,</p>
											<p>ti invitiamo a controllare che i <strong>bonifici registrati a tuo favore</strong> sui tuoi conti siano stati effettuati utilizzando&nbsp;il <strong>corretto codice IBAN</strong>.<br><strong>Il servizio di conversione</strong> che, fino ad ora, ha automaticamente ricondotto i bonifici anche in caso di utilizzo di&nbsp;IBAN vecchio, <strong>sar&agrave; infatti a breve dismesso</strong>. <br><br></p>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<p><strong>Controlla tra i tuoi movimenti o nei tuoi estratti conto</strong>, i bonifici a tuo favore che utilizzano coordinate non corrette sono contraddistinti da uno specifico "triangolo". In questo caso, &egrave; necessario&nbsp;<strong>comunicare</strong> alle tue controparti (datore di lavoro, fornitori, clienti,...) <strong>il codice IBAN corretto</strong> che trovi nella pagina di "Riepilogo" della sezione "Conti e depositi".<br><br>L'Assistenza Clienti rimane a tua disposizione al numero verde <strong>800.024.024</strong> per qualsiasi informazione o dubbio.</p>
										</td>
									</tr>
									</tbody>
									</table></td>
									<td><strong><br></strong></td>
								</tr>
								<tr>
									<td colspan="2">&nbsp;</td>
								</tr>
								</tbody>
								</table>
								<strong>&nbsp; </strong>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pull-right azioni margin-bottom20"><input style="text-transform: none;" onclick="window.print()" name="Stampa" type="button" value="Stampa" class="btn btn-primary"><input style="text-transform: none;" onclick="document.location.href=getPathContext()+'/homepage.do'" name="home" type="button" value="Vai alla Home" class="btn btn-primary"></div>
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