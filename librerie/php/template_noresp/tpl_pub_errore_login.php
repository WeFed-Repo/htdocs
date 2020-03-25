<div class="error_message">

<script language="JavaScript">
<!--MM: CONTROLLI FORM CONTATTO-->	
	
	function checklet(obj)
	{ 
		num=obj.value;
		name=obj.name;
		err = "false";
		if(num=='') return err;
		for(var i=0; i<num.length; i++)
		{
			if( (num.charAt(i)>='0') && (num.charAt(i)<='9'))
			{
				err = "true" ;
				alert("Il "+name+" non deve contenere numeri!");
				obj.focus();
				obj.select();
				break;
			}	
		}
		return err;
	}
	function validate()
	{
		var i =0
		var errore = "false";
		
		if ( errore =="false")
		{
			if(document.invio_segnalazione.nome.value == "")
			{
				errore = "true";
				alert ( "Inserire il nome");
				document.invio_segnalazione.nome.focus();
			}
		}
		if ( errore == "false")
		{
				if (document.invio_segnalazione.pubblico.value=="yes")
				errore = checklet (document.invio_segnalazione.nome);
		}
		if ( errore =="false")
		{
			if(document.invio_segnalazione.e_mail.value == "")
			{
				errore = "true";
				alert ( "Inserire l'indirizzo e-mail");
				document.invio_segnalazione.e_mail.focus();
				msgflag="true";
			}
		}	
		if ( errore == "false")		document.invio_segnalazione.submit()
	}	

	var green_number = '800.134.135';

	function getGreenNumber()
	{
		document.write(green_number);
	}

	</script>
	<br />


<p class="txt">
	Gentile cliente,<br>

	<b>il servizio non &egrave; momentaneamente disponibile per cause tecniche.</b><br><br>
	<b>Modulo di contatto</b><br>
	In attesa del ripristino del servizio, puoi <b>compilare i campi</b> sottostanti <b>per essere avvertito</b>
	non appena il sito sar&agrave; nuovamente attivo.<br>
	Ci scusiamo per il disagio arrecato.<br><br>

	Grazie.
</p>
<form Method="post" id="form_mailerr" name="invio_segnalazione">
	<input style="display:none" class="hidden" name="BV_UseBVCookie" value="Yes" type="hidden">
	<input style="display:none" class="hidden" name="salva" value="Yes" type="hidden">
	<input style="display:none" class="hidden" name="pubblico" value="yes" size="40" type="hidden">
	<h2>I tuoi dati</h2>
	<Label>Cognome e nome*</label>
	<input name="nome" value="" class="inputEmail" type="text">

	<br class="clear" />
	<label>Indirizzo e-mail per la risposta</label>
	<input name="e_mail" class="inputEmail" value="" type="text">
	<br class="clear" />
	<hr />
	<label class="errore">Data di segnalazione</label>
	<input style="display:none" class="hidden" type="hidden" name="data" value="18/05/2009 09:51:17">
	<div class="datatxt">

		18/05/2009        
	</div>
	<br class="clear" />
</form>


<div class="to_right invio_segnalazione_btn"> <a title="Invia" href="#1">Invia</a></div>

<!-- fine codice -->
  


							</div>