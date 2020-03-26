	<div class="visible-print-block"> 
		<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
		<div class="pull-right">
			  
			22/05/2017	
		</div>
	</div>
					
					
					
					

















<script><!--
	$(document).ready(function() {
		// add onchange
		$('input[name="annulla"]').click(function () {
			document.location.href= "ilTuoProfilo.do";
		});	
	});
--></script>





<form id="formRichiediDispositivoSicurezza" method="post" action="/WEBHT/serviziPerTe/sostituzioneDispositivoSicurezzaConferma.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="db1a784cf1227c82eb04f182049bd745"></div>
	<div class="riquadro clearfix">
		
		
		




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		<div class="circle current_page">&nbsp;</div>
		<div class="circle current_page">&nbsp;</div>
		<div class="circle ">&nbsp;</div>
		<div class="circle ">&nbsp;</div>
	</div>






<div class="clearfix">

<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			...	
	</h1>
	
	<div class="col-xs-12 hidden-xs hidden-print"></div>
		
	
</div>
		








	


	<div>
		<div class="col-sm-6 col-xs-12">	
			<div class="innerBoxWhite verificaAltezza">
				<div class="box-riepilogo alt1">
					<div>
						<h1 class="boxTitle txt_center">Dispositivo di sicurezza</h1>
					</div>
					<div style="line-height: 24px;">
						<table style="width:100%;">
							<colgroup>
								<col width="30%">
								<col width="70%">
							</colgroup>
							<tbody><tr>
								<td style="padding-right: 0px; vertical-align: middle;">
									<img src="/HT/fe/img/OTPWT.png" style="margin-bottom:-3px" alt="Dispositivo di sicurezza">
								</td>
								<td style="padding-right: 5px;">
									<div>
										 <div class="col-xs-12">Descrizione</div>
										 <div class="col-xs-12"><b>Dispositivo di sicurezza in formato token</b></div>
									</div>
									<div>
										 <div class="col-xs-12">Attivazione:</div>
										 <div class="col-xs-12"><b>0,00 €</b></div>
									</div>
									<div>
										 <div class="col-xs-12">Spese di spedizione:</div>
										 <div class="col-xs-12"><b>0,00 €</b></div>
									</div>
								</td>
							</tr>
						</tbody></table>
					</div>
				</div>
			</div>			
		</div>
		<div class="col-sm-6 col-xs-12" >
			<div class=" innerBoxWhite verificaAltezza">
				<div class="box-riepilogo alt1">
					<div>
						<h1 class="boxTitle txt_center">
							I tuoi dati
						</h1>
					</div>
					<div style="line-height: 24px;">
						<table style="width:100%;">
							<tbody><tr>
								<td>
									<div>
										 <div class="col-xs-12">Nome e cognome:</div>
										 <div class="col-xs-12"><b>MAURO LUCA TALLO</b></div>
									</div>
									<div>
										 <div class="col-xs-12">Indirizzo spedizione:</div>
										 <div class="col-xs-12"><b>FRAZIONE BARAZZINA II 10  26812 BORGHETTO LODIGIANO (LO)
</b></div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Per garantirti una spedizione in sicurezza, se l'indirizzo non è corretto, devi contattare la tua filiale di riferimento per la correzione.</td>
							</tr>
						</tbody></table>
					</div>
				</div>
			</div>
		</div>
	</div>


		<div class="divForm">
			






<style type="text/css">
tr.spaces>td {
	padding-bottom: 10px;
	padding-top: 10px;
}
</style>
<script type="text/javascript">
	popolaEmail = function(email) {
		$('#email').val(email);
		$('#dialog').dialog('close');
	}
	$(function() {
		var urlAjax = getPathContext()
				+ '/serviziPerTe/modificaContatto.do?popup=true'
		$('#contatti').ajaxDialog('dialog', urlAjax, {
			title : ''
		});
		if ($('#email').val() == '')
			$('#email').val("Inserisci e-mail");
	});
</script>

<div class="section clearfix">

	<h3 class="titleSection">
		Recapiti
	</h3>


	<div class="bs-example">
	
		<div class="form-group clearfix">
			<div class="form-field-input col-xs-12">
			
				<label class="control-label" for="email">Email:
				</label>
				 
				<div class="form-field">
						
						
							<input type="text" name="email" maxlength="60" size="35" value="mauroluca.tallo2@bancopopolare.it" readonly="readonly" id="email" class="form-control wauto">
							
			<input type="button" name="contatti" value="&nbsp;" id="contatti"  class="btnEdit">
								
						
					</div>
			</div>
		</div>
	</div>
</div>
		</div>
	</div>
	<div class="actions pull-right">
			
		<input type="button" name="annulla" value="Annulla" class="btn btn-primary" alt="Annulla">
		
		<input type="submit" name="conferma" value="Avanti" class="button btn btn-primary" alt="Avanti">
	</div>
</form>