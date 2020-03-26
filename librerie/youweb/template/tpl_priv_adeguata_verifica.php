					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							09/03/2017	
						</div>
					</div>
					
					
					
					



<script>
$(document).ready(function(e) {
  	if (isMobile()) {
		$("#tableListaAdeguataVerifica").cardBoxTable({
			colTitleIdx: 2,
			colsAction: [true, true, false, false, false, false],
			colActionPos: "top-right",
			show: function() {
				$('.section').addClass('cardbox-background');
				$(this).find('form').css('display', 'inline'); 
				//$(this).find('.cardbox-sep-button').css('margin-left', '0');
				$(this).find('img[id^="dettaglio"]').css('width','20px').css('height','20px');
				$(this).find('img[id^="modifica"]').css('width','20px').css('height','20px');
			}
		});
  	}
});
</script>


<div class="riquadro clearfix">

	
	








    
<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag adeguataVerifica">&nbsp;</div>
			<span>Adeguata verifica</span>
 	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	




<style type="text/css">
@media(max-width:991px){
	#cardbox-wrapper .col-xs-12.cardbox-border .descrizione .col-xs-12 .col-xs-9{
		text-align: left;
	}
}

</style>



	


	
	<div class="section clearfix">
		<table id="tableListaAdeguataVerifica" class=" table table-striped dataTable no-footer">
			<colgroup>
				<col width="3%">
				<col width="3%">
				<col width="25%">
				<col width="34%">
				<col width="25%">
				<col width="10%">
			</colgroup>
			<thead>
				<tr>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
					<th>Titolare</th>
					<th>Rapporto</th>
					<th>Data compilazione</th>
					<th>Canale</th>
				</tr>
			</thead>
			<tbody>
				
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio0" style="width: 20px; height: 20px;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica0" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Conti correnti e Conti deposito&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">27 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVWeb.gif" title="Web" alt="Web"></td>
				</tr>
			
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio1" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica1" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Carte prepagate&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">03 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVFil.gif"></td>
				</tr>
				
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio0" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica0" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Conti correnti e Conti deposito&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">27 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVWeb.gif" title="Web" alt="Web"></td>
				</tr>
			
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio1" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica1" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Carte prepagate&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">03 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVFil.gif"></td>
				</tr>
				
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio0" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica0" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Conti correnti e Conti deposito&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">27 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVWeb.gif" title="Web" alt="Web"></td>
				</tr>
			
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio1" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica1" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Carte prepagate&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">03 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVFil.gif"></td>
				</tr>
				
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio0" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica0" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Conti correnti e Conti deposito&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">27 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVWeb.gif" title="Web" alt="Web"></td>
				</tr>
			
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio1" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica1" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Carte prepagate&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">03 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVFil.gif"></td>
				</tr>
				
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio0" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica0" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Conti correnti e Conti deposito&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">27 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVWeb.gif" title="Web" alt="Web"></td>
				</tr>
			
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio1" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica1" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Carte prepagate&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">03 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVFil.gif"></td>
				</tr>
				
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio0" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica0" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Conti correnti e Conti deposito&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">27 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVWeb.gif" title="Web" alt="Web"></td>
				</tr>
			
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio1" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica1" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Carte prepagate&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">03 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVFil.gif"></td>
				</tr>
				
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio0" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica0" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Conti correnti e Conti deposito&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">27 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVWeb.gif" title="Web" alt="Web"></td>
				</tr>
			
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio1" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica1" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Carte prepagate&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">03 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVFil.gif"></td>
				</tr>
				
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio0" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="01">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica0" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Conti correnti e Conti deposito&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">27 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVWeb.gif" title="Web" alt="Web"></td>
				</tr>
			
				<tr>
					<td class="oRight">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img src="/HT/fe/img/i_dettaglio.gif" id="dettaglio1" style="width: 20px
; height: 20px
;" title="Dettaglio" alt="Dettaglio">
							</a>
						</form>
					</td>
					<td class="oLeft">
						<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do">
							<input type="hidden" name="codNaturaSelezionato" value="13">
							<input type="hidden" name="codFilialeSelezionato" value="2070">
							<a onclick="$(this).parent().submit();" href="#">
								<img id="modifica1" alt="modifica" title="Modifica questionario" src="/HT/fe/img/i_modifica.gif" style="width: 20px
; height: 20px
;">
							</a>
						</form>
					</td>
					<td class="oCenter">Nome Cognome</td>
					<td class="oCenter">Carte prepagate&nbsp;Filiale&nbsp;2070</td>
					<td class="oCenter">03 gennaio 2017</td>
					<td class="oCenter"><img src="/HT/fe/img/HBMVFil.gif"></td>
				</tr>
				
			</tbody>
		</table>
	</div>
</div>
