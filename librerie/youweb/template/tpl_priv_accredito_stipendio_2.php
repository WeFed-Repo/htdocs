					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							15/03/2017	
						</div>
					</div>
					
					


<script type="text/javascript">
	var popolaEmail = function(email) 
	{
		$('#email').html(email); 
		$('#dialogEmail').dialog('close');
	}
	
	var popolaRecapito = function(recapito) 
	{
		if (recapito!=undefined)
			$('#tdRecapito').html(recapito);
		$('#dialogRecapito').dialog('close');
	}
	
	$(function() 
	{
		var urlAjax = getPathContext()+ '/serviziPerTe/modificaContatto.do?popup=true'
		$('#contatti').ajaxDialog('dialogEmail', urlAjax, { title:'Modifica contatti' });
		if ($('#email').val()=='')
			$('#email').val("Inserisci e-mail");
			
		var urlAjaxRecapito = 'template/modale_modifica_recapito.php'
		$('#recapito').ajaxDialog('dialogRecapito', urlAjaxRecapito, { title:'Modifica recapito', closeOnEscape:false });
		$('#dialogRecapito').parent().children().children(".ui-dialog-titlebar-close").hide();
	});
	
	function modificaDatiResidenza()
	{
		$('#tabellaVisualizzazioneResidenza').css('display','none');
		$('#formModificaResidenza').css('display','');
	}
</script>
<div class="riquadro clearfix">
	
	
	
	
	




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
		<div class="circle current_page">&nbsp;</div>
			
		<div class="circle current_page">&nbsp;</div>
			
		<div class="circle ">&nbsp;</div>
			
	</div>



<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag accreditoStipendio">&nbsp;</div>
			
			<span>Accredito stipendio</span>
 					
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>  	     
	
	
	









	
	<div class="section clearfix">
		<h3 class="titleSection">
		Canale di comunicazione all'azienda
		</h3>
		<div class="bs-example form-horizontal">
			<div class="form-group">
				<div class="form-field-input col-xs-12">
					<label class="control-label">
				  		Hai deciso di comunicare al tuo datore di lavoro le coordinate per l'accredito dello stipendio tramite:
				  	</label>
					<label class="control-label">
				  		E-MAIL
				  	</label>
				</div>
			</div>
		</div>
	</div>
	
		<div class="section clearfix" id="accreditoS-2">
			<h3 class="titleSection">
				E-mail
			</h3>
			<div class="bs-example form-horizontal">
				<div class="form-group">
					<div class="form-field-input col-xs-12">
						<div class="form-field-input col-xs-2 clear-padding">
							<label class="control-label">
								MITTENTE:
							</label>
						</div>
						<div class="form-field-input col-xs-10 clear-padding">
							<label class="control-label">
								assistenza.clienti@bancopopolare.it
							</label>
						</div>
					</div>
					<div class="form-field-input col-xs-12">
						<div class="form-field-input col-xs-2 clear-padding">
							<label class="control-label">
								E-MAIL DESTINATARIO:
							</label>
						</div>
						<div class="form-field-input col-xs-10 clear-padding">
							<label class="control-label">
								a@a.it
							</label>
						</div>
					</div>
					<div class="form-field-input col-xs-12">
						<div class="form-field-input col-xs-2 clear-padding">
							<label class="control-label">
								IN CC:
							</label>
						</div>
						<div class="form-field-input col-xs-10 clear-padding">
							<label class="control-label" id="email">
								luca@gmail.com
								<input type="button" name="contatti" value="&nbsp;" id="contatti" class="btnEdit">
							</label>
						</div>
					</div>
					<div class="form-field-input col-xs-12">
						<div class="form-field-input col-xs-2 clear-padding">
							<label class="control-label">
								OGGETTO:
							</label>
						</div>
						<div class="form-field-input col-xs-10 clear-padding">
							<label class="control-label">
								ACCREDITO STIPENDIO - EAAUNS DCTIGCLA
							</label>
						</div>
					</div>
					<div class="form-field-input col-xs-12">
						<div class="form-field-input col-xs-2 clear-padding">
							<label class="control-label">
								TESTO:
							</label>
						</div>
						<div class="form-field-input col-xs-10 clear-padding">
							<label class="control-label">
								<p style="margin-bottom:5px;">Alla cortese attenzione: <i>a</i> di <i>a</i>.</p><p style="margin-bottom:5px;">Con la presente <b>Eaauns Dctigcla</b>, avvalendosi del servizio "Accredito Stipendio" di BANCO BPM S.p.A., chiede che dal prossimo mese il versamento della propria retribuzione venga effettuato verso le seguenti coordinate bancarie:</p><table style="width: 100%; border:none;"><colgroup><col width="20%"><col width="80%"></colgroup><tbody><tr><td style="padding:0; height: 15px;">IBAN:</td><td style="padding:0; height: 15px; font-weight:bold">IT25N0503411704000000001585</td></tr><tr><td style="padding:0; height: 15px;">Banca - Filiale:</td><td style="padding:0; height: 15px; font-weight:bold">Banca Popolare di Verona - VERONA AG. 3 - 0004</td></tr><tr><td style="padding:0; height: 15px;">Intestazione:</td><td style="padding:0; height: 15px; font-weight:bold">Iai Daeecadndgstv</td></tr><tr><td style="padding:0; height: 15px;">Codice fiscale:</td><td style="padding:0; height: 15px; font-weight:bold">CSTLCU71M27M172W</td></tr></tbody></table><p style="margin-top:10px;">Cordiali saluti.</p><p style="margin-top:5px;">Eaauns Dctigcla</p><table><tbody><tr><td style="padding:0; height: 13px; width: 40%;" id="tdRecapito"><p>Via Monte Tesoro 19/A<br>37132 Verona (VR)</p></td><td style="vertical-align:center; padding:0; width: 60%;"><input type="button" class="button" style="width:120px;" id="recapito" value="modifica" name="modificaRecapitoDati"></td></tr></tbody></table><p style="margin-top:10px; font-style: italic; font-size: 10px; color: gray;">Il Vostro recapito e-mail &egrave; stato utilizzato dalla banca esclusivamente per inviare la presente comunicazione come da richiesta del soggetto indicato nel testo dell'e-mail.</p>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	
</div>
<form name="formAccreditoStipendio" method="post" action="/strutt_priv_new.php?pag=accredito_stipendio_3&lev1=pagamenti&wdg=06|02"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="9a64c3833cf92e7c68fea6af8c5537fe"></div>
	<div class="pull-right margin-bottom20">
		
		<input type="submit" name="modifica" value="Modifica" class="btn btn-primary" alt="Modifica">
		
			
		
		
		<input type="submit" name="accreditoEsito" value="Invia" class="btn btn-primary execute" alt="Invia">
	</div>
</form>