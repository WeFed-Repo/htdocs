<link media="all" type="text/css" rel="stylesheet" href="/css/ret/helpcenter.css"/>
<script>
function functionOnChange(idContainer,idMessaggio,valore){
	
	var container = document.getElementById(idContainer);
	var div = document.getElementById(idMessaggio);
	var div_testo = '<div class="testoMess2">';
	var img_inizio = '<img src="/wscmn/img/str_bg_sugg_top2.gif" class="suggtop" alt=""/>';
	var img_inizio_reclami = '<img src="/wscmn/img/str_bg_tempirisposta_top2.gif" class="suggtop" alt=""/>';
	var img_fine ='<img src="/wscmn/img/str_bg_sugg_bottom2.gif" class="suggbot" alt=""/>';
	var div_testo_chiusura ='</div>';
	
	if ( valore=='Seleziona' || 
			valore=='Info conto e/o carte' || 
			valore=='Assistenza navigazione' || 
			valore=='Info offerta commerciale' || 
			valore=='Info trading' ||
			valore=='Suggerimenti' ||
			valore=='Altro'){
		container.style.display='none';	
	}
        else 
        {
                container.style.display='block';
	 		if ( valore=='Reclami')
			{
				messaggio='<ul><li>L\'Ufficio Reclami fornir&agrave; una risposta via email nel pi&ugrave; breve tempo possibile. Come previsto dalla normativa vigente, la risposta arriver&agrave; comunque <b>entro 30 giorni</b> se il reclamo &egrave; relativo a operazioni e servizi bancari e finanziari (ad es. carte di credito, mutui, conti correnti, etc.). <b>Entro 90 giorni</b>, se il reclamo &egrave; inerente a servizi di investimento.</li><li>Per abbreviare i tempi, ti suggeriamo di fornire il maggior <b>numero di dettagli</b>.</li></ul><br class=\"clear\" />';
				div.innerHTML = img_inizio_reclami + div_testo + messaggio + div_testo_chiusura + img_fine;
			}
	        else 
			{
				messaggio='Per modificare il tuo <b>indirizzo email</b>: <ul><li>clicca su My Home> Identit�? e sicurezza >  Recapiti > Email</li><li><b>modifica l\'\indirizzo</b> email precedentemente inserito</li><li>inserisci i codici di controllo che riceverai tramite <b>sms e al nuovo indirizzo email</b></li></ul><b>Se desideri ulteriori informazioni, prosegui con la compilazione del form.</b>';
				div.innerHTML = img_inizio + div_testo + messaggio + div_testo_chiusura + img_fine;
			}
	}
	
}
</script>

<!-- ESEMPIO DI LANCIO DI PAOLO ONLOAD CON PARAMETRI CAMBIATI -->
<?php
if ($_GET["va"] == "load")
{
?>
<script type="text/javascript">

//Carica i parametri di esempio ed apre l'assistente virtuale
vaOpenOnStart("/wscmn/xml/virtass_load.php?");

</script>
<?php
}
?>
<!-- FINE ESEMPIO DI LANCIO DI PAOLO ONLOAD CON PARAMETRI ONLOAD CAMBIATI -->

				<h1 id="id_label">Email</h1> <div class="fooform fooform_tit" id="id_aggiorna" style="display:none;"></div>
					<br class="clear">
					<div id="errorsSection" style="display: none;">
					<div class="boxtop"><img src="/img/ret/box_msgtop.jpg" border="0" alt="" /></div>
					<div class="boxtxt">
						<p class="box_mess">
						<img src="/img/ret/img_or_form.gif" border="0" alt="" class="dx" />
						<img src="/img/ret/box_attenzione.jpg" border="0" alt="" />
						<strong id='error_box'><font color="white"> </font></strong>				
						<br />
						</p>
						<br />
						<ul class="alert" id="errorMessages">
						</ul>
						<br class="clear"/>
					</div>
		<div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" border="0" alt="" /></div>
	 <br class="clear"/>
	</div>
			<div>
				<form method="POST" action="" name="contattaci_mail" autocomplete="off">
					<input type="hidden" name="BV_UseBVCookie" value= "Yes">

					<input type="hidden" name="tabId" value="nav_priv_wbx_helpcenter" />
					<input type="hidden" name="OBSKEY" value="nav_priv_wbx_hc_email" />
					<input type="hidden" name="salva" value="Yes">
					<input type="hidden" name="pubblico" value="yes" >
							<h4>Hai bisogno di assistenza? Vuoi informazioni commerciali? Hai dei suggerimenti?</h4>
							<p>Compila il form sottostante, ti risponderemo al pi� presto.</p>
							<p>Se vuoi invece inviarci un reclamo, <a href="#">vai nella sezione apposita</a>.</p>
					<table class="form01 form01help">
						<tr> 
							<td class="uno" style="width:95px" id="surname">Cognome*</td>
							<td style="width:240px"> <input name="cognome" id="cognome" type="text" class="grande" value="" /></td>
							<td class="uno" style="width:95px" id="name">Nome*</td>
							<td style="width:240px"><input type="text" name="nome" id="nome" value="" class="grande" /></td>

						</tr>
						<tr> 
							<td class="uno" id="ind_e_mail">Indirizzo email*</td>
							<td width="200"><input name="e_mail" id="e_mail" type="text" class="grande" value="condes@condes.it"</td>
							<td class="uno">Tipo di richiesta*</td>
							<td width="170">
							<select id="select_tipo" onchange="functionOnChange('containerMess','testoMess',typeRic[typeRic.selectedIndex].value);" value="" name="typeRic">

								<option value="Seleziona" selected="selected">Seleziona</option>
			                    <option value="Assistenza navigazione">Assistenza alla navigazione</option>
			                    <option value="Info conto e/o carte">Informazioni sul conto e/o sulle carte</option>
			                    <option value="Info trading">Informazioni trading</option>
			                    <option value="Info offerta commerciale">Informazioni sull'offerta commerciale</option>
			                    <option value="Modifica email">Modifica indirizzo email</option>

			                    <option value="Reclami">Reclami</option>
			                    <option value="Suggerimenti">Suggerimenti</option>
			                    <option value="Altro">Altro</option>
							</select>						
							</td>
						</tr>
						<tr class="bianco"> 
							<td colspan="4">
								<div class="for_080">
									<div id="containerMess" class="txtvis">
										<div id="testoMess">
										</div>  
									</div> 
								</div> 
							 </td>
						 </tr>
						<tr> 
							<td class="uno" valign="top">Messaggio*</td>
						
							<td colspan="3"><textarea name="messaggio" id="emailMessage"></textarea></td>
							<script type="text/javascript">emailOptimizer("emailMessage")</script>
						</tr>
					</table>

					
				</form>
			<div class="fooform form01help">	
				<div class="fooformleftb">
					<div class="text">(*) campi obbligatori</div>	
				</div>
				<div class="fooformrightb">
					<div><a href="Javascript:invia('' ,document.contattaci_mail.typeRic.value);" title="Invia" class="btnformright"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>Invia</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
				<br class="clear" />
				</div>	
				<br class="clear" />
				</div>
			</div>