<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>LIBRERIE WEBANK &raquo; Template struttura &raquo; Pagina interna privata</title>
	 <!-- INIZIO CODICE--> 
<?php virtual ("/wscmn/css/include_css_priv.html"); ?>
<?php virtual ("/js/include_js_priv.html"); ?>
	<!-- FINE CODICE--> 
</head>
<body class="bgfp obs" >
		<div id="sicurezza">
		
			<div class="boxtitle">
				<div class="phonebox"><p>Servizio clienti nazionale<span>800 060 070</span></p></div>
				<p>Lorem ipsum <span>Dolor Sit</span> amet consectetur <span>Elit</span></p>
			</div>
			
			<div class="boxbody">
				<div id="contenuti">
				
				<!-- PARAGRAFO INTRODUTTIVO -->
				<p>
					Prima di accedere al tuo conto ti invitiamo a <strong>compiere alcuni passi fondamentali </strong>
				</p>

				<div class="sicurezzabox" id="sicurezzaPwd">
					<h1><img src="/img/ret/sicurezza_dot_1.gif">MODIFICA LA TUA PASSWORD DI ACCESSO</h1>
					<table class="text01">
						<tr>
							<td>
								<p>Per motivi di sicurezza ti chiediamo di <strong>modificare la password iniziale</strong>.</p>
								<p>La nuova password deve avere le seguenti caratteristiche:</p>
								<ul>
									<li>lunghezza minima 8 caratteri, massima 16 caratteri;</li>
									<li>utilizzare caratteri alfanumerici (deve essere presente almeno un carattere numerico);</li>
									<li>non utilizzare caratteri grafici (es.: - ? &amp; * ) o lettere accentate.</li>
								</ul>
							</td>
						</tr>
					</table>
					<div class="boxedform">
						<!-- blocchi di esito andato a buon fine-->
						<div id="" class="boxinfo esitoposi">
							<div class="top"></div>
							<div class="middle"><span class="imgCont"></span><p><strong>LA TUA PASSWORD &Egrave; STATA MODIFICATA</strong><br />Potrai utilizzarla dal prossimo accesso</p></div>
							<div class="bottom"></div>
						</div>
					</div>
					<div class="boxedform">
						<!-- blocchi di esito ko-->
						<div id="" class="boxinfo esitonega">
							<div class="top"></div>
							<div class="middle"><span class="imgCont"></span><p><strong>NON E' STATO POSSIBILE SALVARE LA PASSWORD</strong><br />Per accedere al sito, ti preghiamo di contattare il Servizio Clienti al numero 800 060 070</p></div>
							<div class="bottom"></div>
						</div>
					</div>
					<div class="boxedform">
							
						<form action="#" method=""  id="formPwdAol">
									<table>
										<tr>
											<td class="label" id="labelVecchiaPwd">Password iniziale (5 cifre)</td>
						
											<td class="field"><input type="password" name="vecchiaPassword" id="vecchiaPassword"></td>
										</tr>
										<tr>
											<td style="" class="label" id="labelNuovaPwd">Nuova password</td>
											<td class="field"><input type="password" name="nuovaPassword" id="nuovaPassword"></td>
										</tr>
										<tr class="last">
											<td class="label" id="labelConfermaPwd">Conferma password</td>
											<td class="field"><input type="password" name="confermaNuovaPassword" id="confermaNuovaPassword"></td>
										</tr>
									</table>
								</form>
								
							
						
								<div class="fooform  medium">
									<div class="fooformright">
										<div><a href="#" class="btnformright" title="certifica in seguito">
												<img src="/img/ret/btn_left_ar.gif" alt="">
												<span>conferma</span>
												<img src="/img/ret/btn_right_ar.gif" alt="">
											</a>
										</div>
										<br class="clear">
									</div>	
								</div>
								
								
					</div>
				
					
					<div class="boxseparator">&nbsp;</div>
				</div>
				
				<div class="sicurezzabox" id="sicurezzaDom">
					<h1><img src="/img/ret/sicurezza_dot_2.gif">SCEGLI LA DOMANDA SEGRETA</h1>
					<table class="text01">
						<tr>
							<td>
								<p>
								<strong>Scegli una domanda segreta</strong>; la <strong>risposta</strong> che indicherai ci servir&agrave; per essere certi della tua identit&agrave; nei momenti di contatto con Webank (es. per recuperare le tue credenziali di accesso al conto, in caso di smarrimento).
								</p>
								
							</td>
						</tr>
					</table>
					<div class="boxedform">
						<form action="#" method="" id="formDomAol">
							<table>
								<tr>
									<td class="label">Domanda segreta</td>
									<td class="field">
										<select name="selectDom" class="large">
											<option>-- seleziona --</option>
											<option>Qual &egrave; il cognome di tua madre da nubile?</option>
											<option>Qual &egrave; stata la marca della tua prima auto?</option>
											<option>Qual &egrave; il nome della scuola in cui ti sei diplomato?</option>
											<option>Qual &egrave; il numero civico della casa in cui sei cresciuto? </option>
											<option>Chi era il tuo eroe d'infanzia?</option>
										</select>
									</td>
								</tr>
								<tr class="last">
									<td class="label">Risposta</td>
									<td class="field"><input type="text" class="large" name="inputDom"></td>
								</tr>
							</table>
						</form>
						<div class="fooform large">
							<div class="fooformright">
								<div class="bottable"><a href="javascript:;" class="btnformright" title="">
										<img src="/img/ret/btn_left_ar.gif" alt="">
										<span>salva</span>
										<img src="/img/ret/btn_right_ar.gif" alt="">
									</a>
								</div>
								<div class="bottdis"><img src="/img/ret/btndis_left.gif" alt=""><span title="Lorem ipsum">salva</span><img src="/img/ret/btndis_right.gif" alt=""></div>
								<br class="clear">
							</div>	
						</div>
					
					
					</div>
				
					
				</div>
				<div class="sicurezzabox">
					<h1><img src="/img/ret/sicurezza_dot_3.gif">CERTIFICA I TUOI RECAPITI</h1>
					<table class="text01 nopadd">
			
						<tr>
							<td>
								<p>
									Ti chiediamo di certificare la tua <strong>identità digitale</strong>, ovvero di fornirci alcuni dati che utlizzeremo nell'ambito del
									<strong><a href="javascript:top.pop_up_int('/webankpri/common/ExternalHelp.jsp?cf=0.756309407631905&amp;key=PRGSIC0801&amp;fromLogin=true');">Programma Sicurezza</a>.</strong>
									Si tratta di una serie di iniziative che abbiamo messo in campo per consentirti di utlizzare il tuo 
									<strong>internet banking in tutta sicurezza</strong> ed evitare frodi informatiche. I dati non saranno in alcun modo utilizzati per fini 
									promozionali.
									<br> <br>
								</p>
								
							</td>
						</tr>
			
					</table>
					<!--box attenzione -->
						<div class="boxedform">	
							<div id="confermaBoxUno" class="boxinfo warning">
									<div class="top"></div>
									<div class="middle"><span class="imgCont"></span><p>Ti raccomandiamo di indicarci dei <strong>recapiti validi ed appartenenti esclusivamente a te</strong>; se ci&ograve; non fosse possibile, per accedere al sito chiama il Servizio Clienti al numero <strong>800 060 070</strong>.</p></div>
									<div class="bottom"></div>
							</div>
						</div>
						<br class="clear" />
						<!--fine box attenzione -->
					<table class="text01 nopadd"><tr><td>
					<p><strong>Inserisci e certifica il tuo numero di cellulare.</strong><br />Teni a portata di mano il tuo cellulare: dopo la tua richiesta ti invieremo un codice di controllo necessario per confermare il tuo numero.</p>
					</td></tr>
					</table>
					<div id="attivazioneDiv" >
						<form action="#" method="" id="formCertAol">
							<table class="canvas" id="tabordini3">
								<tr> 
									<td>Numero cellulare</td>
									<td>
										<input value="" name="prefixCell" id="" maxlength="3" size="3">
										<input value="" name="numeroCell" id="numero_cell"  maxlength="7" size="15">
									</td>
									<td>Operatore</td>
									<td>
										<select name="" id="">

											<option>lorem</option>

											<option>ipsum</option>

											<option>dolor</option>
										</select>
									</td>
								</tr> 
							</table>
						</form>
							<div class="fooform large">
							<div class="fooformright">
								<div class="bottable"><a href="javascript:;" class="btnformright" title="richiedi codice">
										<img src="/img/ret/btn_left_ar.gif" alt="">
										<span>richiedi codice</span>
										<img src="/img/ret/btn_right_ar.gif" alt="">
									</a>
								</div>
								<div class="bottdis"><img src="/img/ret/btndis_left.gif" alt="richiedi codice"><span title="certifica">richiedi codice</span><img src="/img/ret/btndis_right.gif" alt=""></div>
								<br class="clear">
							</div>	
							
						</div>
						<div class="boxedform">
					<!-- blocco di esito più di 5 errori OTP-->
						<div class="errorForm">
							<div class="top"><img src="/img/ret/str_erroreform_top_dx.gif"></div>
							<div class="middle">
								<p class="box_mess errortop">
									<img alt="" src="/img/ret/attenzione.jpg"><br class="clear">
									<strong class="black">ERRORI CERTIFICAZIONI RECAPITI</strong>
								</p>
									
								<p class="box_mess">Il numero di cellulare indicato &egrave; già presente nei nostri sistemi ma associato ad un altro codice fiscale. Per proseguire devi modificare il numero di cellulare e certificarlo.<br />
								Se non disponi di un altro numero di cellulare, per accedere al sito chiama il Servizio Clienti al numero 800 060 070.
								</p>
							</div>
							<div class="bottom"><img src="/img/ret/str_erroreform_bottom_dx.gif"></div>
						</div>
					<!-- fine blocco di esito più di 5 errori OTP-->
					</div>
						<br class="clear"/>
						<table class="text01 nopadd"><tr><td>
							<p><strong>Inserisci il codice di controllo</strong></p>
						</td></tr></table>
						<form method="" action="#">
							<div class="boxedform">
								<table>
										<tr class="last">
											<td class="label">Codice di controllo</td>
											<td class="field"><input type="text"></td>
										</tr>
									</table>
							</div>
						</form>
						<div class="fooform medium">
							<div class="fooformright">
								<div class="bottable"><a href="javascript:;" class="btnformright" title="">
										<img src="/img/ret/btn_left_ar.gif" alt="">
										<span>certifica</span>
										<img src="/img/ret/btn_right_ar.gif" alt="">
									</a>
								</div>
								<div class="bottdis"><img src="/img/ret/btndis_left.gif" alt=""><span title="certifica">certifica</span><img src="/img/ret/btndis_right.gif" alt=""></div>
								<br class="clear">
							</div>	
							<ul class="listafrec"><li>Il codice non è arrivato? <a href="#1" title="#">richiedi qui un nuovo codice</a></li></ul>
						</div>
						
						<table class="text01 nopadd"><tr><td>
							<p><strong>Inserisci e certifica il tuo indirizzo email.</strong><br />Controlla la tua posta:dopo la tua richiesta ti invieremo un codice di controllo necessario per confermare la tua email</p>
						</td></tr></table>
						
						<form action="#" method="" id="formMailAol">
							<table class="canvas" id="tabordini3">
								<tr>
									<td id="labelVecchiaPwd" width="243" style="text-align:right!important">email</td>
									<td class="field" width="295"><input type="text" id="" name="mailAol"></td>
								</tr>
							</table>
						</form>
						
						<div class="fooform medium">
							<div class="fooformright">
								<div class="bottable"><a href="javascript:;" class="btnformright" title="">
										<img src="/img/ret/btn_left_ar.gif" alt="">
										<span>richiedi codice</span>
										<img src="/img/ret/btn_right_ar.gif" alt="">
									</a>
								</div>
								<div class="bottdis"><img src="/img/ret/btndis_left.gif" alt=""><span title="richiedi codice">richiedi codice</span><img src="/img/ret/btndis_right.gif" alt=""></div>
								<br class="clear">
							</div>	
						</div>
					</div>

				</div>
			
				</div>
			</div>
			<div class="boxend"></div>
		</div>
		
<!-- PAGINA STANDARD (SOSTITUIRE CON QUALSIASI COSA)-->
<div id="testa" style="text-align: center;">
	     <img src="/img/ret/str_myhome_ss.gif">
</div>
<!-- FINE PAGINA STANDARD (SOSTITUIRE CON QUALSIASI COSA NEL BODY) -->

		
		
</body>
</html>