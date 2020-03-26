<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">06/04/2017</div>
</div>

<script type="text/javascript">

var formInserimento;
var abiUtente = '05034';

$(document).ready(function(){
//initPopupJavascript();
//testABI();
//checkEnabled();
});

function formattaStr(campo, maxElem) {
stringa = campo.value;
var lung = stringa.length; // lunghezza stringa
if (lung > maxElem)  {
stringa = stringa.substring(0, maxElem);
}
stringa = stringa.toUpperCase();
//stringa = stringa.replace(/'/g,"`");
//stringa = stringa.replace(/"/g,"``");
campo.value = stringa;
}
</script>
<script type="text/javascript" src="/WEBHT/jsp/ht/pagamenti/bonifici/bonificoCompilazione/bonificoJavascript.jsp"></script>



<div class="riquadro clearfix">
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		<div class="circle current_page">&nbsp;</div>
		<div class="circle ">&nbsp;</div>
	</div>
	<div class="clearfix">
<style>
.imgSrv{float: none;}
</style>
		<h1>
			<div class="hidden-print hidden-xxs flag gestioneBeneficiari">&nbsp;</div>
			<span>Gestione beneficiari</span>
			<span class="hidden-xs">:&nbsp; compilazione 000</span>
		</h1>
		<div class="col-xs-12 hidden-xs hidden-print">
		</div>
	</div>
	<form id="formInserimento"  method="post" action="/strutt_priv.php?pag=gestione_beneficiari_modifica_step2&lev1=pagamenti&wdg=06|02" class="form-horizontal gestioneBenef">
		<input type="hidden" name="azioneBen" value="modifica">
		<input type="hidden" name="selBeneficiario" value="1">
<!-- MODIFICA DATI BENEFICIARIO  -->
		<div class="section clearfix">
			<h3 class="titleSection">Modifica dati beneficiario</h3>
			<div class="bs-example clearfix">
				<div class="form-group clearfix">
					<div class="form-field-input col-sm-6 col-xs-12">
						<label class="control-label" for="nomeBeneficiario">Nome Beneficiario  </label>
						<div class="form-field">
							<input type="text" name="nomeBeneficiario" maxlength="35" size="36" value="NOME COGNOME" onblur="formattaStr(this, 35)" id="nomeBeneficiario" class="form-control">
						</div>
					</div>
					<div class="form-field-input col-sm-6 col-xs-12">
						<label class="control-label" for="nickname">Nickname </label>
						<div class="form-field">
							<input type="text" name="nickname" maxlength="30" size="36" value="NICKNAME (LABEL)" readonly="readonly" id="nickname" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- -->		
		<div class="section clearfix">
			<h3 class="titleSection">Inserisci coordinate beneficiario</h3>
			<div class="bs-example clearfix">
				<div class="form-group clearfix">
					<div class="form-field-input col-xs-12 col-sm-4 hidden-xs">
						<label class="control-label">Bonifico verso:</label>
						<div class="form-field">
							<div class="col-xs-6">
								<input type="radio" name="bonificoVersoNazione" value="1" checked="checked" onclick="checkEnabled()">
								Italia
							</div>
							<div class="col-xs-6">
								<input type="radio" name="bonificoVersoNazione" value="2" onclick="checkEnabled()"> Altre Nazioni
							</div>
						</div>
					</div>
					<div class="form-field-input col-sm-8 col-xs-12">
						<label class="control-label">IBAN intero:</label>
						<div class="form-field">
							<div class=" col-sm-5 col-xs-12 col-prt-12">
								<input type="text" name="iban" maxlength="35" size="30" value="IT00B0000000000000000000000" onblur="formattaStr(this,35);testABI();" id="iban" class="form-control">
							</div>
							<div class="pull-right col-sm-6 col-xs-12 padding-top-xs-5 hidden-xs" id="btnIban">
								<input type="button" name="trovaAbiCab" value="Trova ABI/CAB" id="trovaAbiCab" class="btn" alt="" onclick="javascript:OpenHelp('/template/modale_abi-cab.html')">
								<input type="button" name="calcolaIban" value="Calcolo IBAN" id="calcolaIban" class="btn" alt="" onclick="javascript:OpenHelp('/template/modale_iban.html')">
								<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header clearfix">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
											</div>
											<div class="modal-body">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
<script>
$(document).ready(function(){
$("#btnIban").on("beneficiariEvent", function(event, stato){
if(stato == "enable"){
$("#btnIban input[type='button']").each(function(){
$(this).removeClass("disabled");
})
}else{
$("#btnIban input[type='button']").each(function(){
$(this).addClass("disabled");
})
}
})
})
</script>
				</div>
			</div>
		</div>



<!--  DATI PER RICARICA CELLULARE  -->
		<div class="section clearfix">
			<h3 class="titleSection">Inserisci dati per ricarica cellulare</h3>
			<div class="bs-example clearfix">
				<div class="form-group clearfix">
					<div class="form-field-input col-sm-6 col-xs-12">
						<label class="control-label" for="gestore">Gestore </label>
						<div class="form-field">
							<select name="operatore" class="form-control">
								<option value="1">Vodafone</option>
								<option value="2">Tim</option>
								<option value="3">Wind</option>
								<option value="4">Tiscali</option>
								<option value="5">H3G</option>
								<option value="8">PosteMobile</option>
								<option value="9">CoopVoce</option>
							</select>
						</div>
					</div>
					<div class="form-field-input col-sm-6 col-xs-12">
						<label class="control-label" for="prefTelefono">Numero di telefono </label>
						<div class="form-field">
							<input type="text" name="prefTelefono" maxlength="3" size="5" value="" class="form-control wauto  floatl-marginr10">
							<span class=" floatl-marginr10 top5">/</span>
							<input type="text" name="numTelefono" maxlength="7" size="9" value="" class="form-control wauto">
						</div>
					</div>
				</div>
			</div>
		</div>
<!--  DATI PER RICARICA CARTE  -->
		<div class="section clearfix">
			<h3 class="titleSection">Inserisci dati per ricarica carte</h3>
			<div class="bs-example clearfix">
				<div class="form-group clearfix">
					<div class="form-field-input col-sm-6 col-xs-12">
						<label class="control-label" for="cartaConto">Tipologia carta </label>
						<div class="form-field">
							<select name="tipoCarta" class="form-control">
								<option value="">Seleziona...</option>
								<option value="KALI">Kalibra</option>
								<option value="K2">K2</option>
								<option value="K3PP">YouCard</option>
								<option value="YOUP2P">Chat&amp;Cash</option>
							</select>
						</div>
					</div>
					<div class="form-field-input col-sm-6 col-xs-12">
						<label class="control-label" for="kalibra">Numero carta </label>
						<div class="form-field">
							<input type="text" name="numeroCarta" maxlength="16" size="18" value="" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<div class="pull-right margin-bottom20">
	<form 
			id="formIndietro" 
			method="post" 
			action="/strutt_priv.php?pag=gestione_beneficiari&lev1=pagamenti&wdg=06|02|03" 
			class="floatl">

			<input type="submit" name="indietro" value="Indietro" class="btn btn-primary">

	</form>
	
	<input type="button" name="modifica" value="Salva modifiche" onclick="$('#formInserimento').submit()" class="btn btn-primary">	
</div>