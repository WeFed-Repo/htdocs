
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">




<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
		
	







	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui_ng.min.css" />


<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.min.css"  />
<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.height.plugin.css" />

	<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/ie10-viewport.css"  />

<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-main.css?v=161220"  />
 

	<link media="screen and (max-width: 544px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xxs-mobile.css?v=161220" />
	<link media="screen and (max-width: 767px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xs-mobile.css?v=161220" />
	<link media="screen and (min-width: 768px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-sm-desktop.css?v=161220" />






	<link media="print" rel="stylesheet" type="text/css" href="/HT/CSS/print.css" />


<!--[if IE 8]>
<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/ie8.css" />
<![endif]-->



	

<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui.jqgrid_ng.css" />
<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui.multiselect.css" />


<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-migrate-1.0.0.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.ui.touch-punch.min.js"></script>

	<script type="text/javascript" language="javascript" src="/HT/JS/script/ie10-viewport.js"></script> 

<script type="text/javascript" language="javascript" src="/HT/JS/script/jsapi.js"></script>


<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.dateIT.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.altImg.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.formattedNum.js"></script>


<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.form.js"></script>





<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.blockUI.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.selectToUISlider.js"></script>
 
 

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script type="text/javascript" language="javascript" src="/HT/JS/script/html5.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/script/respond.min.js"></script>
<![endif]-->


<script type="text/javascript" language="javascript" src="/HT/JS/script/funzioniYW.js?v=161220"></script>






<script>


$(document).ready(function(e) {
	var resizeTimer;
	var servVal = false;
	$(window).resize(function () {
		if ( servVal != isMobile() && location.href.search('login') ==-1) {
			clearTimeout(resizeTimer);
			resizeTimer = setTimeout(function() {
				
				$.post(getPathContext()+'/common/refreshBreakpoint.do', { device: getBreakpoint()}, function(response, status) { 
					servVal = isMobile();
				});
			}, 500);
		}
	});
});
</script>

<script type="text/javascript">
function getPathImages() { return "/HT/IMAGES/";}
function getPathContext() {	return "/WEBHT";}
function getKBanca() {	return "1";}
function getLineaTol() {	return "IDT";}
</script>




<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.jqGrid.locale-it.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.jqGrid.js"></script>
<script type="text/javascript" src="/HT/JS/script/funzioniInvestimenti.js?v=161220"></script>

<script type="text/javascript" src="/HT/JS/HashMap.js"></script>
<script type="text/javascript" src="/HT/JS/script/funzioniJQGrid.js?v=161220"></script>
<script type="text/javascript" src="/HT/JS/Highcharts/cs/chartserverHS.min.js"></script>
<script type="text/javascript" src="/HT/JS/Highcharts/js/highstock.js"></script>
<script type="text/javascript" src="/HT/JS/lightstreamer.js"></script>
<script type="text/javascript" src="/HT/JS/funzioniPush.js"></script>
		
	







	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui_ng.min.css" />


<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.min.css"  />
<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.height.plugin.css" />

	<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/ie10-viewport.css"  />

<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-main.css?v=161220"  />
 

	<link media="screen and (max-width: 544px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xxs-mobile.css?v=161220" />
	<link media="screen and (max-width: 767px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xs-mobile.css?v=161220" />
	<link media="screen and (min-width: 768px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-sm-desktop.css?v=161220" />






	<link media="print" rel="stylesheet" type="text/css" href="/HT/CSS/print.css" />


<!--[if IE 8]>
<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/ie8.css" />
<![endif]-->


	
	<title>YouWeb</title>
	<style>
		html {
    		background: none repeat scroll 0 0 transparent;
    	}
	</style>
</head>
<body style="width: auto;">
<div><a id="top"></a></div>
<div id="gridBody">
<div class="contentFull riquadro clearfix " style="margin:10px">
	
	
	<!-- bookConferma.jsp -->





<script type="text/javascript">	
function pageScroll() {
    	window.scrollBy(0,700); 
    	//scrolldelay = setTimeout('pageScroll()',100); //eventuale scroll ogni N millisec
}
</script>
<body onLoad="pageScroll()">

<div class="contentInterno" style="margin-bottom: 10px;">	
	
	<h3 class="titleSection">








		
			Book
		
		
		

</h3>
	<!--NonAutorizzato-->



<div>

<div id="divNonAutorizzato">
		<p class="oCenter">Funzione disponibile per le linee <b>YouBanking, Universal e Day Trader</b> esclusivamente per i Titoli Italia<br /></p>
</div>
</div>
<!--/NonAutorizzato-->
</div>

<div class="contentInterno">
	<!-- tabellaConfermaOrdine -->






<script type="text/javascript">
function annullaOrdine(){
	var isin = $('#formCompraVendi').find('input[name="isin"]').val();
	var codMercatoInfo = $('#formCompraVendi').find('input[name="codMercatoInfo"]').val();
	var codAreaFinanza = $('#formCompraVendi').find('input[name="codAreaFinanza"]').val();
	var orderFrom = $('#formCompraVendi').find('input[name="orderFrom"]').val();
	if(orderFrom === 'pagina')
		goToPage('/investimenti/compraVendiTitolo.do','isin',isin,'codMercatoInfo',codMercatoInfo,'codAreaFinanza',codAreaFinanza);
	else
		goToPage('/investimenti/bookOrdina.do','isin',isin,'codMercatoInfo',codMercatoInfo,'codAreaFinanza',codAreaFinanza);
}
function submitCompraVendi() {
	var value=$('#avvertenza').prop('checked');
	if (value) {
		$('#pulsantiConferma').children().prop('disabled',true);
		setTimeout(function(){$('#formCompraVendi').submit();},1);
	}
	else
		alert('Per eseguire è necessario valorizzare il flag di presa visione.'); 	
} 
</script>
	<div class="OUT2ColDiff section clearfix form-horizontal">
	
		
	<h3 class="titleSection">








		
			Ordine
		
		
		

</h3>
	
	

	
	<!-- formattazioni -->
	
	
	
	
	
		<div class="bs-example">		
			<div class="form-group">
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Ordinante</label>
					<span class="resume">TALLO MAURO LUCA              </span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Dossier</label>
					<span class="resume">000000106440 - TALLO MAURO LUCA</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Intestatario</label>
					<span class="resume">TALLO MAURO LUCA              </span>				
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Operazione</label>
					<span class="resume">Acquisto</span>
				</div>
				<div class="form-field-resume col-xs-6">
				<label class="control-label">Titolo</label>
					<span class="resume">Amazon.com, Inc.</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">ISIN</label>
					<span class="resume">US0231351067</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Divisa Emissione</label>
					<span class="resume">USD</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Divisa Trattazione</label>
					<span class="resume">USD</span>
				</div>
			<div class="form-field-resume col-xs-6">
				<label class="control-label"> Mercato</label>
					<span class="resume"><font style="text-transform:capitalize;">NASDAQ</font></span>
				</div>
			<div class="form-field-resume col-xs-6">
					<label class="control-label">Quantità</label>
					<span class="resume">1 titoli</span>
				</div>			
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Prezzo di Mercato</label>
					<span class="resume">
						944,7600
					</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Tipo ordine</label>
					<span class="resume">Al Meglio</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Prezzo limite</label>
					<span class="resume">				
						Al Meglio
						
					</span>
				</div>
				
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Validit&agrave;</label>
					<span class="resume">Val. per la seduta</span>	
				</div>
				
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Data Validit&agrave;</label>
					<span class="resume">18/05/2017</span>
				</div>
				
				
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Fase</label>
					<span class="resume">Corrente</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">CTV teorico</label>
					<span class="resume">770,3500 EUR</span>
				</div>
				
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Data Ora</label>
					<span class="resume">18/05/2017 11:55</span>
				</div>
				
			</div>
		</div>
	 </div>
	<h1>Attenzione</h1>
	<p>Con riferimento al contratto con Voi in essere, Vi incarico di trattare l'ordine che precede, relativo ai prodotti/strumenti finanziari indicati, in relazione al quale prendo espressamente atto delle seguenti avvertenze:</p>
	<ul>
		
			<li>ATTENZIONE, ORDINE AL MEGLIO.                                         </li>
		
			<li>ORDINE CON ISTRUZIONE SPECIFICA IN RELAZIONE ALLA SEDE DI ESECUZIONE  </li>
		
			<li>INDICATORE CONOSCENZA SCADUTO O NON RACCOLTO</li>
		
	</ul>
	






<div class="divForm">	
	<form id="formCompraVendi" method="post" action="/WEBHT/investimenti/compraVendiTitoloConfermaOrdine.do">
	<input type="hidden" name="isin" value="US0231351067" />
	<input type="hidden" name="codMercatoInfo" value="NASDAQ" />
	<input type="hidden" name="codAreaFinanza" value="00003101950" />
	<input type="hidden" name="orderFrom" value="popup" />
	<input type="hidden" name="tokenTol" value="aa44042413d0adb01a5c23abac96cb1f" />
	<input type="hidden" name="prezzoFisMob" value="F" />
	<input type="hidden" name="comboFisso" value="" />
	<input type="hidden" name="textPrezzoFis" value="" />
	<input type="hidden" name="comboMobile" value="" />
	<input type="hidden" name="percPrezzoMob" value="" />
	
	
				
		
			<p>
			  <b>Dichiaro di aver preso atto delle avvertenze ricevute </b>&nbsp;
			  <input type="checkbox" name="ckConf" value="S" id="avvertenza" />
			</p>
			<br />
			  
			  <div class="oRight" id="pulsantiConferma" style="padding: 4px 0px">
			  	<input type="button" name="" value="Annulla" onclick="annullaOrdine()" class="btn btn-primary" />
			  	<input type="button" name="" value="Esegui" onclick="submitCompraVendi()" class="btn btn-primary execute" />
			  </div>
		
	
</form>
</div>
<!-- tabellaConfermaOrdine END-->

</div>

<!-- bookConferma.jsp END -->
</div>
<div class="toldisclaimer pull-right">
	<span>Fonte dati: Borsa Italiana</span>
	 
</div>
</div>
</body>
</html>
