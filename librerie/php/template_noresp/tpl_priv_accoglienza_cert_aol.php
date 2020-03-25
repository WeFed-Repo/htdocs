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
					<h1><img src="/img/ret/sicurezza_dot_1.gif">SCEGLI LA TUA PASSWORD DI ACCESSO</h1>
					<table class="text01">
						<tr>
							<td>
								<p>
								<strong>Crea la tua password di accesso definitiva.</strong> Potrai utilizzarla dal prossimo accesso al sito.<br />
                                   La password deve avere le seguenti caratteristiche:
								</p>
								<ul>
									<li>lunghezza minima 8 caratteri, massima 16 caratteri;</li>
									<li>utilizzare caratteri alfanumerici (deve essere presente almeno un carattere numerico);</li>
									<li>non utilizzare caratteri grafici (es.: - ? &amp; * ) o lettere accentate.</li>
								</ul>
							</td>
						</tr>
					</table>
					
					<div class="boxedform">
					<!-- blocco di esito più di 5 errori OTP-->
						 <?php 
		 
		  virtual("/librerie/include/commons/boxeditoriali/box_black_priv_034new.html");
		  ?>
					<!-- fine blocco di esito più di 5 errori OTP-->
					</div>
					<div class="boxedform">
						<!-- blocchi di esito andato a buon fine-->
						<div id="" class="boxinfo esitoposi">
							<div class="top"></div>
							<div class="middle"><span class="imgCont"></span><p><strong>LA TUA PASSWORD &Egrave; STATA CREATA</strong><br />Potrai utilizzarla dal prossimo accesso</p></div>
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
							<!--box attenzione -->
								<div id="confermaBoxUno" class="boxinfo warning">
									<div class="top"></div>
									<div class="middle"><span class="imgCont"></span><p>Ti invieremo un <strong>codice di controllo</strong> al numero <span><strong>111111111111</strong></span>; dovrai digitarlo per completare la procedura.</p></div>
									<div class="bottom"></div>
								</div>
							<!--fine box attenzione -->
						
								<form action="#" method="" id="formPwdAol">
									<table>
										<tr>
											<td class="label">Password</td>
											<td class="field"><input type="password"></td>
										</tr>
										<tr class="last">
											<td style="color:red;" class="label">Conferma password</td>
											<td class="field"><input type="password"></td>
										</tr>
									</table>
								</form>
								<div class="fooform medium">
									<div class="fooformright">
										<div><a href="#" class="btnformright" title="certifica in seguito">
												<img src="/img/ret/btn_left_ar.gif" alt="">
												<span>ricevi codice</span>
												<img src="/img/ret/btn_right_ar.gif" alt="">
											</a>
										</div>
										<br class="clear">
									</div>	
								</div>
								
								
								
								<div class="boxinfo warning" id="">
									<div class="top"></div>
									<div class="middle"><span class="imgCont"></span><p>Ti abbiamo inviato un <strong>codice di controllo</strong> al numero <span><strong>111111111111</strong></span>; digitalo per confermare la password.</p></div>
									<div class="bottom"></div>
								</div>
								
								<form action="#" method="" id="formCtrAol">
									<table>
										<tr class="last">
											<td class="label">Codice di controllo</td>
											<td class="field"><input type="text"></td>
										</tr>
									</table>
								</form>
								<div class="fooform medium">
									<div class="fooformright">
										<div><a href="#" class="btnformright" title="certifica in seguito">
												<img src="/img/ret/btn_left_ar.gif" alt="">
												<span>conferma</span>
												<img src="/img/ret/btn_right_ar.gif" alt="">
											</a>
										</div>
										<br class="clear">
									</div>
									<ul class="listafrec">
										<li>Il codice non è arrivato? <a title="#" href="#1">richiedi qui un nuovo codice</a></li>
	
									</ul>
								</div>
										
					</div>
					<!--prova di resa tabella con form centarto -->
								
								<!--<form action="#" method="" id="formPwdAol">
									<div style="width:575px; text-align:center; float:left;background-color:green" >
										<div style="margin:0 auto; width:71%; background-color:yellow">
											<div style="width:50%; background-color:red; float:left; text-align:right">Password</div>
											<div style="width:50%;background-color:grey; float:left;text-align:left"><select style="width:100%;padding:0"><option>prova</option></select></div>
										</div>
										<div style="margin:0 auto; width:71%; background-color:yellow;">
											<div style="width:50%; background-color:red; float:left;text-align:right">Conferma Password</div>
											<div style="width:50%;background-color:grey; float:left;text-align:left"><input type="text" style="width:98%;padding:0"></div>
										</div>
										<div style="margin:0 auto; width:71%; background-color:yellow;">
											<div style="width:50%; background-color:red; float:left;text-align:right">&nbsp;</div>
											<div style="width:50%;background-color:grey; float:left;text-align:left">
												<div style="float:right">
												<a title="certifica in seguito" class="btnformright" href="#">
													<img alt="" src="/img/ret/btn_left_ar.gif">
													<span>ricevi codice</span>
													<img alt="" src="/img/ret/btn_right_ar.gif">
												</a>
												</div>
											</div>
										</div>
									</div>
									
									
								</form>-->
					
			
		

					<!--fine blocchi di esito-->
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
										<select name="selectDom" class="large fielddisabled" disabled="">
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
									<td class="field"><input type="text" class="large fielddisabled" name="inputDom" disabled=""></td>
								</tr>
							</table>
						</form>
						<div class="fooform large">
							<div class="fooformright">
								<!-- bottone abiliatto nel caso di box positivo-->
								<div class="bottable"><a href="javascript:;" class="btnformright" title="certifica in seguito">
										<img src="/img/ret/btn_left_ar.gif" alt="">
										<span>salva</span>
										<img src="/img/ret/btn_right_ar.gif" alt="">
									</a>
								</div>
								<!-- fine bottone abilitato-->
								<!-- bottone disabilitato nel caso di box negativo-->
								<div class="bottdis"><img src="/img/ret/btndis_left.gif" alt=""><span title="Lorem ipsum">salva</span><img src="/img/ret/btndis_right.gif" alt=""></div>
								<!-- fine bottone disabilitato-->
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