					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							<fmt:formatdate type="date" value="${now}" pattern="${fmtdate}">	
						</fmt:formatdate></div>
					</div>
					
					
					
					




 


<div class="container">
	<div class="col-sm-10  col-xs-12">
		<div class="riquadro clearfix" style="z-index:99">
			
			<div class="clearfix">
				
					
					
						



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag news">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Utenti Non Professional</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


					
				
				<div class="col-xs-12">
					







		<div class="contentPagina">
			<div id="messaggio">
<p>Gentile cliente,</p>
<p>in conformit&agrave; alla regolamentazione adottata da Borsa Italiana S.p.A. relativamente alla classificazione degli utenti utilizzatori dei dati di mercato forniti dalla stessa, ti chiediamo di sottoscrivere la seguente dichiarazione, operando la scelta di seguito evidenziata, in quanto fruitore del Servizio "<em>Tr@de On Line</em>".</p>
<p><em>L'utente non professionale &egrave; definito come segue:</em></p>
<ul>
<li><em>sottoscrive il servizio come persona fisica e non in nome e per conto di societ&agrave;; </em></li>
<li><em>non &egrave; registrato o ammesso come negoziatore professionale, consulente finanziario o soggetto avente funzioni assimilabili presso borse, autorit&agrave; di vigilanza, associazioni o altre organizzazioni professionali, n&eacute; agisce come tale;&nbsp; </em></li>
<li><em>non distribuisce, ripubblica o fornisce in altro modo i dati di mercato a terze parti; </em></li>
<li><em>non utilizza i dati di mercato in relazione alla gestione del patrimonio di societ&agrave; o nell'ambito di un' attivit&agrave; imprenditoriale o professionale</em>.</li>
</ul>
<p>Qualora si dichiari di essere utente professionale, la banca provveder&agrave; contestualmente a disattivare&nbsp; il servizio Trade On Line e di conseguenza sospender&agrave; l'addebito del canone in conformit&agrave; a quanto previsto dalle Condizioni Economiche del servizio.</p>

<form id="formPresaVisione" action="/presaVisione/serviziNBA.do" method="post"> <input name="codServizio" type="hidden" value="TDPRO">
<div class="divForm boxContent">
<table>
<tbody>
<tr>
<td><input name="parametro" type="radio" value="NOP"></td>
<td><label for="parametro">Dichiaro di essere utente non professionale</label></td>
</tr>
<tr>
<td><label for="codPv"><input name="parametro" type="radio" value="SIP"></label></td>
<td>Dichiaro di essere utente professionale</td>
</tr>
</tbody>
</table>
</div>


<p>Il Contact Center rimane a disposizione al numero verde 800 024 024 per eventuali ulteriori informazioni.</p>


</form></div>

<script type="text/javascript">// <![CDATA[
$(document).ready(function() {
	$("#dialog-confirm").dialog({
		title: '',
		dialogClass: 'no-close',
		height:180,
		width: 350,
		modal: true,
		autoOpen: false,
		resizable: false,
		close: function () {dialogConfirmNo();}
	});
});
function dialogConfirm(mex){
	$("#message-confirm").html(mex);
	$("#dialog-confirm").dialog('open');
}
function dialogConfirmYes(){
	$('#formPresaVisione').attr('action', getPathContext()+$('#formPresaVisione').attr('action'));
	$('#formPresaVisione').submit();
}
function dialogConfirmNo(){
	$("#dialog-confirm").dialog( "close" );
}
function conferma() {
	var valore = $('input[name="parametro"]:checked').val();
	if (valore=="NOP") {
		dialogConfirm('Hai dichiarato di essere <b>utente non professionale</b>.');
	} else if (valore=="SIP") {
		dialogConfirm('Hai dichiarato di essere <b>utente professionale</b>.<br />Se confermi questa scelta, a partire dal prossimo accesso a YouWeb, <b>non potrai pi&ugrave; accedere alla sezione Investimenti</b>.');
	} else {
		alert('Selezionare una tipologia di utente'); 
	}
}
// ]]></script>
		</div>



				</div>
			</div>
		</div>
	<div class="pull-right azioni margin-bottom20"><input onclick="conferma()" alt="Conferma" type="button" value="Conferma" class="btn btn-primary"></div>
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
