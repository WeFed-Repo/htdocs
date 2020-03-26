<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		  
		08/03/2017	
	</div>
</div>
					
					
	
<form id="formRecuperoPin" method="post" action="/WEBHT/recuperoCodici/pinConferma.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da442eec9c9a206749c1dcc2a26433dc"></div>
<div class="riquadro clearfix">
	   
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
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
		<span>Recupera codici</span>
 		<span class="hidden-xs">:&nbsp; Reset PIN</span>
 	</h1>
	
	<div class="col-xs-12 hidden-xs hidden-print">
	</div>
		
	
</div>
	

<!--div class="bs-example">
		<div class="form-group clearfix">
			<div class="col-xs-12 messagePanel clear-padding-topImportant error " style="display: block;">
				<h3 class="titleSection">Attenzione</h3>
				<div>
				<p>
						- Il codice identificativo è obbligatorio.<br>
				</p>
				</div>
			</div>
		</div>
	</div-->






	


	
	<div class="col-xs-12 margin-bottom20 margin-top20">
		<div class="col-xs-2">
			<img src="/HT/fe/img/icon_pin.png"  class="img-responsive">
		</div>
		<div class="col-xs-10">
			Se hai smarrito o dimenticato il tuo codice PIN, puoi richiedere di riceverne uno nuovo che dovrai necessariamente modificare una volta effettuato l'accesso al servizio. Per completare la richiesta devi disporre del <strong>Codice Identificativo</strong>, del <strong>Dispositivo di sicurezza</strong> (Card o Token), del <strong>cellulare</strong> e dell'accesso al tuo <strong>indirizzo Email</strong>.
			
		</div>
	</div>
	

	<div class="section clearfix margin-bottom20  center-blockWrap">
		<h3 class="titleSection">
		








		
			Recupero codici
		
		
		
		

</h3>
		<div class="bs-example margin20">
			<div class="form-group clearfix">
				<div class="row" style="margin-bottom:5px">
					<div class="col-sm-6 col-xs-12"><label for="username">Codice identificativo</label></div>
					<div class="col-sm-6 col-xs-12"><input type="text" name="username" maxlength="50" size="25" tabindex="1" value="" id="username" class="form-control"></div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<label for="OTP">
							<span class="hidden-xs"> 
								
									
										Password usa e getta (da Card, Token o da APP)
									
									
									
							</span> 
							<span class="visible-xs">
								Password usa e getta (da Card, Token o da APP)
							</span>						
						</label>
					</div>
					<div class="col-sm-6 col-xs-12">
						<input id="OTP" class="form-control" name="codiceOTP" type="text" value="" size="25" maxlength="6" autocomplete="off" tabindex="3">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="pull-right margin-bottom20">
		<a href="/WEBHT/RecuperoCodici" class="button btn btn-primary">Indietro</a>
		<input type="submit" name="conferma" value="Avanti" class="btn btn-primary" alt="Avanti">
	</div>

</div>


</form>






 <!--ESEMPIO DI CORREZIONE ERRORI INSERIMENTO TOKEN CON LA LIBRERIA JQUERY VALIDATOR -->
<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.validate.min.js"></script>
<script>
	$(function() {
			$("#formRecuperoPin").validate({
			rules: {
				username: { //vengono stabilite le regole per ogni campo da controllare
					required: true //controlla che il campo non sia vuoto
				},
				codiceOTP: { //vengono stabilite le regole per ogni campo da controllare
					required: true //controlla che il campo non sia vuoto
				},

			},
			highlight: function (element) {
			 $(element).closest( ".form-field-input" ).addClass( "has-error");	
			},
			unhighlight: function (element) {
				
				$(element).closest( ".form-field-input" ).removeClass( "has-error" );
			},

		})
		//tipo di messaggio se campo è vuoto
		$.validator.messages.required = 'Lorem ipsum dolor lorem';
		
	});
</script>


				