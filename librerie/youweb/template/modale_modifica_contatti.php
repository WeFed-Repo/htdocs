<!--
<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-5" style="position: absolute; height: auto; width: 630px; top: 442.5px; left: 316.5px; display: block;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-5" class="ui-dialog-title">Modifica contatti</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div>
	<div id="dialog" class="ui-dialog-content ui-widget-content" style="max-height: none; width: auto; min-height: 119px; height: auto;">
		-->
		<div id="gridBody">
			<div class="contentFull">

				<div class="riquadro clearfix">

<script type="text/javascript">
$(document).ready(function() {
	$("#flagPredefinito:checkbox").prop('checked', true);
	$("#flagPredefinito:checkbox").click(function() { $(this).prop('checked', true);});
});

window.ajaxSubmit = function(element) {
	var uiDialogContent = $(element).closest("div.ui-dialog-content");
	$(uiDialogContent).dialog("disable");

	var action = $("#formGestioneContatti").attr("action");
	$.ajax({
		url: action,
		type: 'POST',
		data: $("#formGestioneContatti").serialize(),
		success: function (response) {
			if ($(response).find("div.messagePanel.success").length>0) { // aggiornamento contatto completato con successo
				$(uiDialogContent).dialog("close");
				if ($.isFunction(popolaEmail)) {
					popolaEmail($(response).find("#contatto").val());
				}
			}
			else { // aggiornamento contatto in errore
				$(uiDialogContent).find("div.riquadro.clearfix").html($(response).find("div.riquadro.clearfix").html());
			}
		} 
	});	
}
</script>

					<div class="clearfix">
					<style>
					.imgSrv{float: none;}
					</style>
						<h1>
							<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
							<span>Inserisci/Modifica contatto</span>
						</h1>
						<div class="col-xs-12 hidden-xs hidden-print padding-lr0">
							<div class="contentPagina">
								Qui sotto potrai inserire o modificare il tuo contatto.
							</div>
						</div>
					</div>


	<form id="formGestioneContatti" method="post" action="/WEBHT/serviziPerTe/aggiornaContatto.do">
					<div style="display:none">
					<input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="369cb222624fbf69e7f9d4adf905f9b3"></div>
						<input type="hidden" name="idContatto" value="MARIOROSSI@EXAMPLE.COM">
						<input type="hidden" name="popup" value="true">
						<input type="hidden" name="tipoContatto" value="EMAIL">
						<input type="hidden" name="azione" value="modifica">

						<div class="section clearfix">
							<h3 class="titleSection">Contatto</h3>
							<div class="col-xs-12">
								<div class="form-group">
									<div class="form-field-input col-sm-6 col-xs-12">
										<label class="control-label" for="cellulare">Indirizzo e-mail</label>
										<div class="form-field">	
											<input type="text" name="contatto" maxlength="60" size="40" value="MARIOROSSI@EXAMPLE.COM" id="contatto" class="form-control">
										</div>
									</div>
									<div class="form-field-input col-sm-6 col-xs-12 margin-top-xs-10 margin-top-sm-20">
										<div class="form-field-input col-xs-1 margin-top5">
											<input type="checkbox" name="flagPredefinito" value="on" checked="checked" id="flagPredefinito">
										</div>
										<div class="form-field-input col-xs-11">
											<label for="cellulare">Predefinito</label>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xs-12">
								<div class="form-group clearfix">
									<div class="form-field-input col-xs-12">
										<label class="control-label" for="cellulare">Acconsento al trattamento dei miei dati personali</label>
									</div>
									<div class="form-field-input col-xs-6">
										<div class="form-field-input col-xs-6 clear-padding">
											<label style="padding-top:2px" for="flagPrivacy"><input type="radio" name="flagPrivacy" value="true" checked="checked">Si</label>
										</div>
										<div class="form-field-input col-xs-6 clear-padding">
											<label style="padding-top:2px" for="flagPrivacy"><input type="radio" name="flagPrivacy" value="false">No</label>
										</div>
									</div>
									<div class="form-field-input col-xs-12 margin-bottom20">
										<div class="form-field">
											<textarea rows="5" cols="80" style="font-size: 10px; font-style: italic; background-color: white;" readonly="readonly" class="form-control">Il Suo indirizzo e-mail - fornito in questa occasione - potr&agrave; essere utilizzato con il suo consenso per trasmetterLe comunicazioni a fini di informazione commerciale, ricerche di di mercato, offerte dirette di prodotti o servizi della Banca e/o del Gruppo bancario BANCO BPM. I dati personali da Lei forniti verranno trattati dalla Banca - che opera in qualit&agrave; di Titolare del Trattamento con modalit&agrave; strettamente necessarie a tal fine. La informiamo che potr&agrave; esercitare i diritti previsti dall'articolo 7 del D.lgs n. 196/2003 ( tra i quali, ottenere conferma dell'esistenza di dati personali che La riguardano e chiedere l'aggiornamento, il blocco o la cancellazione degli stessi) inviandoci comunicazione per mezzo della sezione "Contattaci" ed anche opporsi all'utilizzo del suo indirizzo e-mail nei termini sopra specificati selezionando a tal proposito la casella "NO". Responsabile del trattamento: l'informazione &egrave; reperibile sul sito pubblico della Banca. </textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="section">
					<!-- BOX DI PIN/OTP -->
							<span id="otp">
								<h3 class="titleSection">Conferma richiesta</h3>
								<div class="form-horizontal" style="margin-top:10px">
									<div class="form-field col-sm-6 col-xs-12">
										<div class="form-field-input">
											<label class="control-label">Per proseguire &egrave; necessario inserire la <b>Password usa e getta</b> riportata sul display del dispositivo di sicurezza Servizi You.</label>
										</div>
									</div>
									<div class="form-field col-sm-5 col-xs-11 col-xs-offset-1 otp ">
										<div class="form-field-input">
											<img src="/HT/fe/img/OTPW.png">
											<input type="text" id="codiceOTP" value="" size="10" maxlength="6" name="codiceOTP" autocomplete="off" tabindex="1" class="form-control with-help" style="margin-top:5px" autofocus=""> 
											<a href="#" onclick="javascript:OpenHelp('/HT/HTML/HelpOtp.html')"><img src="/HT/fe/img/i_help.png" style="margin-top:0px;margin-left:3px" title="Help On Line" alt="Help On Line"></a>
										</div>
									</div>
								</div>
							</span>

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
				</div>
				<div class="pull-right margin-top20">
					<input type="button" name="confermaContatti" value="Conferma" onclick="ajaxSubmit(this);" class="btn btn-primary execute floatl" alt="Conferma">
				</div>
				
			</div>
		</div>
		<!--
	</div>
	<div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div>
</div>
-->