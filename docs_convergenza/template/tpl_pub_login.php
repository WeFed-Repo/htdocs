

<div class="contentLogin">

<div class="row">
    <div class="col-sm-5 col-sm-push-7">
<!-- FORM -->
<form class="form-horizontal" id="frmLogin" name="frmLogin"
 action="/WEBHT/j_security_check" method="post"	target="_top">
	<div class="riquadro clearfix">
		<script type="text/javascript" language="JavaScript">
			<!--
			if (navigator.cookieEnabled == false) {
				document.write('<div class="box-esito messagePanel error" style="display:block"><h3 class="titleSection">Attenzione</h3><p><strong>Per accedere al sito è necessario che il browser utilizzato accetti i cookie.</strong></p></div>');
			} //-->
		</script>
			<noscript>
				<div class="messagePanel error show" role="alert">
					<h3 class="titleSection">Attenzione</h3>
					<div><strong>Javascript disabilitato!</strong> <br />
						Per accedere e visualizzare correttamente il sito è necessario abilitare i controlli JavaScript nelle impostazioni del browser.
					</div>
				</div>
			</noscript>

			<div class="row bgLoginForm">
	
				<div class="col-sm-12 hidden-xs">
					<p>
						<a href="https://youwebcertificato.bancopopolare.it/" onclick="createCookieAccess()">
							Accesso Easy
						</a>
						<a href="#!" class="publicHelp"></a>
					</p>
				</div>

				<div class="col-sm-12">
					<div class="form-field-input">
						<label class="control-label">
						Codice Identificativo
							 <a href="#!" data-toggle="popover" data-trigger="focus"  data-placement="bottom" data-content="lorem ipsum lorem lorem" class="publicHelp">
							 	
							 </a>
						</label>
						<div class="form-field">
							<input id="utente"  class="form-control" name="j_username" type="text"  size="25" maxlength="50" autocomplete="off" placeholder="Codice Identificativo" tabindex="1" autofocus/>	
						</div>	
					</div>
				</div>	

				<div class="col-sm-12">
					<div class="form-field-input">
					<label class="control-label">PIN <u><a href="#!" data-toggle="popover" data-trigger="click" data-placement="bottom" data-content="<p>Il PIN é strettamente personale ed é parzialmente riportato sul “Foglio codici” rilasciato in fase di sottoscrizione del servizio. Il codice PIN é modificabile all’interno della tua area riservata (dopo la fase di login) nella sezione “Il mio profilo”.<br/><br/> <strong>Per i clienti ex BPM Banking il PIN corrisponde alla Password utilizzata su BPM Banking.</strong><br/><br/> Verifica di non aver attivo il Blocco Maiuscole.<br/><br/> É sempre possibile recuperare il PIN utilizzando la procedura “RECUPERA CODICI” accessibile dal meú in alto. <br/><br/>Per qualsiasi necessitá non esitare a contattare l’Assistenza Clienti</p>" class="publicHelp" data-original-title="" title="">
</a>
					</label>
						<div class="form-field">
						<input id="password" class="form-control" name="j_password" type="password" value="" size="25" maxlength="50" autocomplete="off" tabindex="2" placeholder="PIN"/>
						</div>	
					</div>
				</div>


				<div class="col-sm-12">
					<input type="submit" class="btn btn-primary btnLogin" value="ACCEDI">
				</div>

			</div>


		
		</div>
	</form>
	 


	<script>
	$(function(){
		
		OpenHelp('/template/warning.php');

		$('#passwordLabel').popover(
			{
				trigger: 'focus',
        		template: '<div class="credenzialiPopOver popover"><div class="arrow"></div><div class="popover-content"></div></div>',
       			html: true,
        		content: 'Se sei un cliente ex BPM Banking, inserisci la tua attuale <strong>PASSWORD</strong> nel campo <strong>PIN</strong><br><img src="/HT/fe/img/login_password.png">',
        		placement:'top'
			}
		);

		/*$('#utente').popover(
			{
				trigger: 'manual',
        		template: '<div class="credenzialiPopOver popover"><div class="arrow"></div><div class="popover-content"></div></div>',
       			html: true,
        		content: 'Per gli ex clienti BPM Banking inserire la <strong>User ID</strong><br><img src="/HT/fe/img/login_userid.png">',
        		placement:'top'
			}
		);*/
		$('#password').popover(
				{
					trigger: 'focus',
	        		template: '<div class="credenzialiPopOver popover"><div class="arrow"></div><div class="popover-content"></div></div>',
	       			html: true,
	        		content: 'Se sei un cliente ex BPM Banking, inserisci la tua attuale <strong>PASSWORD</strong> nel campo <strong>PIN</strong><br><img src="/HT/fe/img/login_password.png">',
	        		placement:'top'
				}
			);
		/*$('#utente').click(function(){
			$(this).popover('show')
		})*/
		$('#password').blur(function(){
			$(this).popover('hide')
		})
	})

  </script>
		
	
<!-- END FORM-->
    </div>

    <div class="col-sm-7 col-sm-pull-5 loginTxt">
  		<div class="logoLogin"></div>
  		<div class="textLogin"> 
  			<!--p>
  				Buongiorno
  			</p-->
  			
  			<h3>
  				Entra nella tua Banca online
  			</h3>
			<div class="row margin-bottom20">
				<div class="col-xs-3">
					<img src="/HT/fe/img/ico_app.png" alt="YouApp" class="img-resp"/>
				</div>
				<div class="col-xs-9">
					<h4><strong>YouAPP</strong></h4>
					<p>Scaricala e completa la tua esperienza digitale <strong><a href="#" style="text-decoration:none;"><u>Scopri le novità</u> ></a></strong></p>
				</div>
			</div>
			<div class="row margin-bottom40">
				<div class="col-xs-3">
					<img src="/HT/fe/img/ico_guidaNew.png" alt="YouApp" class="img-resp"/>
				</div>
				<div class="col-xs-9">
					<h4><strong>Guida Operativa al Servizio</strong></h4>
					<p>Scopri come utilizzare le nostre funzionalità <strong><a href="#" style="text-decoration:none;"><u>Apri la Guida</u> ></a></strong></p>
				</div>
			</div>

			<p>
				<strong><a href="#" class="arrow-link">Primo accesso?</a></strong>
			</p>
			<p>
				<strong><a href="#" class="arrow-link">Come utilizzare il token</a></strong>
			</p>

			
			
			
			<!--p>
				Questa è la pagina di accesso a --- . Inserisci <strong>Codice Identificativo, PIN</strong>
				e clicca sul pulsante "Accedi". Se hai installato il tuo certificato digitale su questo PC puoi effettuare l'accesso in <strong><u>	modalit&agrave; Easy.</u></strong> 
			</p>

			<p>
				Se sei un cliente ex Banca Popolare di Milano			

				<span><input type="button" class="btn" value="COME ACCEDERE AL TUO CONTO"></span>
			</p-->
  		</div>
    </div>
</div>
	
</div>








<!-- ESEMPIO DI SCRIPT PER IL POPOVER-->
<script>
	$(document).ready(function() {
			$('[data-toggle="popover"]').popover({ 
				html : true
				});
		});
</script>




 <!-- JS gestione errori campi di input  -->



 <!--ESEMPIO DI CORREZIONE ERRORI INSERIMENTO TOKEN CON LA LIBRERIA JQUERY VALIDATOR -->
<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.validate.min.js"></script>
<script>
	$(function() {
			$("#frmLogin").validate({
			rules: {
				j_password: { //vengono stabilite le regole per ogni campo da controllare
					required: true //controlla che il campo non sia vuoto
				},
				j_username: { //vengono stabilite le regole per ogni campo da controllare
					required: true //controlla che il campo non sia vuoto
				}

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




















