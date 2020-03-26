<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">06/04/2017</div>
</div>

<form id="formGestioneBeneficiari" method="post" action="/strutt_priv.php?pag=gestione_beneficiari_elimina_step2&lev1=pagamenti&wdg=06|02|03" class="form-horizontal">
	<div class="riquadro clearfix">
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
						<span class="resume"> IT00B0000000000000000000000</span>
					</div>
				</div>
			</div>
		</div>
<!-- DATI PER RICARICA CELLULARE -->
<!-- DATI PER RICARICA CARTA -->
	</div>
</form>

<div class="pull-right margin-bottom20">
	<form id="formIndietro" method="post" action="/strutt_priv.php?pag=gestione_beneficiari&lev1=pagamenti&wdg=06|02" class="floatl">
		<input type="submit" name="indietro" tabindex="3" value="Indietro" class="btn btn-primary pull-right">
	</form>
	<input type="button" name="elimina" tabindex="2" value="Elimina" onclick="$('#formGestioneBeneficiari').submit()" class="btn btn-primary pull-right conferma">	
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