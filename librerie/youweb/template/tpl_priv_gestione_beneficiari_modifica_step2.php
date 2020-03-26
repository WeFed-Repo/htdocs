<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">06/04/2017</div>
</div>

<form id="formGestioneBeneficiari" method="post" action="/strutt_priv.php?pag=gestione_beneficiari_modifica_step3&lev1=pagamenti&wdg=06|02|03" class="form-horizontal">
	<div class="riquadro clearfix">
		<div class="pager clearfix pull-right">
			<div class="circle_line">&nbsp;</div>
			<div class="circle current_page">&nbsp;</div>
			<div class="circle current_page">&nbsp;</div>
		</div>
		<div class="clearfix">
<style>
.imgSrv{float: none;}
</style>
			<h1>
				<div class="hidden-print hidden-xxs flag gestioneBeneficiari">&nbsp;</div>
				<span>Gestione beneficiari</span>
				<span class="hidden-xs">:&nbsp; riepilogo</span>
			</h1>
			<div class="col-xs-12 hidden-xs hidden-print">
			</div>
		</div>
		<div id="erroreAjax" style="display: none">&nbsp;</div>
<!-- 	DATI BENEFICIARIO -->
		<div class="section clearfix">
			<h3 class="titleSection">Dati beneficiario</h3>
			<div class="bs-example clearfix">
				<div class="form-group col-sm-4 col-xs-12">
					<div class="form-field-resume">
						<label class="control-label"> Nome Beneficiario  </label> 
						<span class="resume"> NOME COGNOME </span>
					</div>
				</div>
				<div class="form-group col-sm-4 col-xs-12">
					<div class="form-field-resume">
						<label class="control-label"> Nickname </label> 
						<span class="resume"> NICKNAME (LABEL) </span>
					</div>
				</div>
			</div>
		</div>
<!-- COORDINATE BENEFICIARIO BONIFICO -->

		<div class="section clearfix">
			<h3 class="titleSection">Coordinate beneficiario bonifico</h3>
			<div class="bs-example clearfix">
				<div class="form-group col-sm-6 col-xs-12">
					<div class="form-field-resume">
						<label class="control-label"> IBAN per intero </label> 
						<span class="resume">IT00B0000000000000000000000</span>
					</div>
				</div>
			</div>
		</div>
<!-- DATI PER RICARICA CELLULARE -->
<!-- DATI PER RICARICA CARTA -->
<script type="text/javascript">
$(document).ready(function() { 
	if(!$("#codiceOTPConSMS").is(":disabled")){
		$('#codiceOTPConSMS').focus();
	}
});
</script>

		<div style="clear:both">
			<h3 class="titleSection"></h3>
		</div>
		<div class="section clearfix">
			<div class="bs-example">
				<div class="form-group">
					<div style="clear:both">
					<h3 class="titleSection">
						Conferma richiesta
							<a href="#" id="helpPopUp" onclick="javascript:OpenHelp('/template/modale.php?pagTit=Help: conferma richiesta&pagCont=testo02')">
								<img src="/HT/fe/img/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line">
							</a> 
						</h3>
					</div>

					<div class="form-field col-sm-5 col-xs-12 margin-bottom-xs-10">
						<label class="control-label">Per proseguire con la disposizione &egrave; necessario cliccare su "Genera password": un codice di 6 cifre verr&agrave; automaticamente inviato via SMS al numero <b>******9240</b></label>
					</div>




<!-- _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ -->

<div class="form-field col-sm-7 col-xs-12 margin-top-xs-10 margin-bottom-xs-10">
	<div class="col-xs-3 col-sm-3">
	<img src="/HT/fe/img/otp-phone-token2.png" class="img-responsive" title="otp sms" alt="otp sms">
	</div>
	<div class="col-xs-9 margin-bottom-xs-10 col-sm-3" >
		<input type="text" id="codiceOTPConSMS" value="" class="form-control thin wauto" maxlength="6" name="codiceOTPConSMS" autocomplete="off" tabindex="1" disabled="disabled">
	</div>
	<div class="col-xs-12 col-sm-5">
		<!--div class="pull-xs-right"-->
			<input type="button" name="invioOTPConSMS" tabindex="3" value="Genera password" onclick="javascript:inviaOtpSMS()" id="invioOTPConSMS" class="btn btn-primary">	
		<!--/div-->
	</div>
</div>

<!-- _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ -->

				</div>
			</div>
		</div>

		<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header clearfix">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
</form>

<div class="pull-right margin-bottom20">
	<form id="formIndietro" method="post" action="/strutt_priv.php?pag=gestione_beneficiari_modifica&lev1=pagamenti&wdg=06|02" class="floatl">
		<input type="submit" name="indietro" tabindex="3" value="Modifica" class="btn  btn-primary pull-right">
	</form>
	<input type="button" name="conferma" tabindex="2" value="Conferma" onclick="$('#formGestioneBeneficiari').submit()" class="btn btn-primary pull-right conferma">	
</div>

<script type="text/javascript">
var url = getPathContext() + "/pagamenti/invioOTPConSMSBeneficiari.do";

function inviaOtpSMS(button) {
	$.ajax({
		url : url,
		success : function(data) {
			if ($.trim(data) == "SMSOK") {
				$("#codiceOTPConSMS").removeAttr('disabled');
				$("#invioOTPConSMS").attr('disabled', 'disabled');
				$("input[name='conferma']").removeAttr('disabled').removeClass('disabled');
			} else {
				$("#erroreAjax").empty();
				$("#erroreAjax").append(data);
				$("#erroreAjax").show();
			}
		}
	});
}
</script>