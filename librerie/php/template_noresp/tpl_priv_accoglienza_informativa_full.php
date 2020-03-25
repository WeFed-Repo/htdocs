<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>LIBRERIE Bpm &raquo; Template struttura &raquo; Pagina interna privata</title>
	 <!-- INIZIO CODICE--> 
		<?php virtual ("/wscmn/css/include_css_priv.html"); ?>
		<?php virtual ("/js/include_js_priv.html"); ?>
	<!-- FINE CODICE--> 
</head>

<body class="bgfp obs" >
<!-- BOX SICUREZZA IN OVERLAYER -->		
		<div id="sicurezza">
			<div class="boxtitle">
				<div class="phonebox"><p>Servizio clienti nazionale<span>800 060 070</span></p></div>
				<p>Lorem ipsum <span>Dolor Sit</span> amet consectetur <span>Elit</span></p>
			</div>
			<script type="text/javascript">
			/* FUNZIONE DI TESTING ERRORI (SOLO A SCOPO DI EMULAZIONE) */
			function testInformativa()
			{
				var errortest = false;
				var errorlist = "";
				
				//resetta tutti campi a "normali"
				fieldResetError('checkInformativa');
				fieldResetError('consensoBpm');
				fieldResetError('consensoTerzi');
				fieldResetError('consensoPromo');
				
				//Check "presa visione"
				if (!document.getElementById('checkVisione').checked)
				{
					fieldSetError('checkInformativa');
					errorlist=errorlist + "<li>Per proseguire &egrave; necessario che tu prenda visione del nuovo testo riguardante l'informativa sul trattamento dei dati personali. Per farlo ti invitiamo a visualizzare il testo aprendo il documento PDF attraverso il link sottostante.</li>";
					errortest = true;
				}
				
				//Check "invio documentazione"
				if (!(document.getElementById('cn1_S').checked || document.getElementById('cn1_N').checked))
				{
					fieldSetError('consensoBpm');
					errorlist=errorlist + "<li>Devi dare o negare il consenso per l'utilizzo di dati personali per l'invio di offerte promozionali da parte del gruppo Bpm.</li>";
					errortest = true;
				}
				
				if (!(document.getElementById('cn2_S').checked || document.getElementById('cn2_N').checked))
				{
					fieldSetError('consensoTerzi');
					errorlist=errorlist + "<li>Devi dare o negare il consenso per l'utilizzo di dati personali per l'invio di offerte promozionali da parte di terzi.</li>";
					errortest = true;
				}
				
				if (!(document.getElementById('cn3_S').checked || document.getElementById('cn3_N').checked))
				{
					fieldSetError('consensoPromo');
					errorlist=errorlist + "<li>Devi dare o negare il consenso per l'utilizzo di dati personali per l'invio di offerte promozionali da parte di terzi e ricerche.</li>";
					errortest = true;
				}
				
				if (errortest)
				{
					document.getElementById("ErroriValidazioneList").innerHTML = errorlist;
					document.getElementById("ErroriValidazione").style.display = "block";
				}
				else
				{
					parent.location.href = "/connect.php?page=tpl_priv_accoglienza_informativa_full_end.php";
				}
			}
			</script>
			<div class="boxbody">
				<div id="contenuti">
					<!-- PARAGRAFO INTRODUTTIVO -->
					<p>
						Prima di accedere al tuo conto ti invitiamo a <strong>compiere alcuni passi fondamentali</strong>.
					</p>
					
					<h1><img src="/img/ret/sicurezza_dot_2.gif">Modifica password personale</h1>
					<table class="text01">
						<tr>
							<td>
								<p>
									Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Ut quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. In <strong>placerat</strong>, velit non auctor lobortis, erat sapien convallis odio, ac tempor nulla felis at quam. Suspendisse eros urna, porta sit amet, congue iaculis, adipiscing a, nibh. Vestibulum a nisi non metus gravida consequat. Phasellus est augue, venenatis sed, dictum a, euismod sit amet, pede. Nulla euismod sollicitudin pede. In vitae tortor et neque elementum congue.
								</p>
								<ul>
									<li>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</li>
									<li>Ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</li>
									<li>Dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</li>
								</ul>
							</td>
						</tr>
					</table>
					<div class="boxedform">
					<div class="tithelp">
							<div class="helpleftblack">Dolor amet lorem ipsum</div>
							<br class="clear">
						</div>
					<form action="#" method="">
					<table>
						<tbody><tr>
							<td class="label">Lorem ipsum dolor<br>(5 amet)</td>
							<td class="field"><input type="password"></td>
						</tr>
						<tr>
							<td style="color: red;" class="label">Sit consectetur</td>
							<td class="field"><input type="password"></td>
						</tr>
						<tr class="last">
							<td class="label">Adipiscing elit</td>
							<td class="field"><input type="password"></td>
						</tr>
					</tbody></table>
					</form>
					<div class="fooform">
						<div class="fooformright">
							<div><a href="javascript:schippaCellulareAcc();void(0)" class="btnformright" title="certifica in seguito">
									<img src="/img/ret/btn_left_ar.gif" alt="">
									<span>lorem ipsum</span>
									<img src="/img/ret/btn_right_ar.gif" alt="">
								</a>
							</div>
							<br class="clear">
						</div>	
					</div>
				</div>
				<div class="boxseparator">&nbsp;</div>	
					<div class="sicurezzabox">
					<h1><img src="/img/ret/sicurezza_dot_2.gif">Amet libero sollicitudin pharetra</h1>
					<table class="text01">
						<tbody><tr>
							<td>
								<p>
									Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Ut quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. In <strong>placerat</strong>, velit non auctor lobortis, erat sapien convallis odio, ac tempor nulla felis at quam. Suspendisse eros urna, porta sit amet, congue iaculis, adipiscing a, nibh. Vestibulum a nisi non metus gravida consequat. Phasellus est augue, venenatis sed, dictum a, euismod sit amet, pede. Nulla euismod sollicitudin pede. In vitae tortor et neque elementum congue.
								</p>
							</td>
						</tr>
					</tbody></table>
					
					<!-- BLOCCO CON TABELLA CONDIZIONALE E DINAMICA -->
					<div style="display: block;" id="attivazioneDiv">	
					<div class="tithelp">
					<div class="helpleftblack">Titolare effettivo dei rapporti con Webank <span onmousemove="createUniqTooltip(event, this, 'medium');" onmouseover="createUniqTooltip(event, this, 'medium');" onmouseout="removeUniqTooltip(event,this);" class="uniqTooltipText nodotted" id="tooltip1">
							<span class="uniqTooltipPos"><a href="#1" onmouseover="nascondi('lampa1');" onmouseout="vedi('lampa1');"><img src="/img/ret/lampa_off.gif" id="lampa1" class="lampa"></a></span>
							<span class="uniqTooltipInnerHTML">
								Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. 
							</span>
						</span>
					</div>
					<div align="right" class="BvTableHeaderHelp"><a href="#1"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><a class="hlp" href="#1">help</a><br class="clear"></div>
					<br class="clear"></div>
					<div id="phonedata">
						<table class="canvas">
							<tbody><tr> 
								<td width="100" class="right">Lorem impsum</td>
								<td>
								<select name="select" style="visibility: visible;">
									<option>
									</option><option>333</option>
									<option>334</option>
									<option>335</option>
								</select>
								&nbsp;
								<input size="12">
								</td>
								<td>Dolor</td>
								<td>
								<select name="select" style="visibility: visible;">
									<option>Sit</option>
									<option>Amet</option>
									<option>Consectetur</option>
									<option>Adipiscing</option>
								</select>
								</td>
						</tr></tbody></table>
					</div>
					<div id="phonedatabuttons" class="fooform">
						<div class="fooformright">
						<div><a onclick="lockFields('phonedata'); document.getElementById('phonedatabuttons').style.display='none'; document.getElementById('phonedataalternate').style.display='block';" href="javascript:;" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""><span>lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div><div><a href="#1" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""><span>dolor sit amet</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
						<br class="clear">
						</div>	
					</div>
					<br><br>
					<table class="canvas">
						<tbody><tr> 
								<td width="100" valign="top" class="right">Lorem impsum</td>
								<td colspan="3">
								Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. 
								</td>
						</tr>
						<tr>
						    <td class="right">
						</td><td>
							<div class="nobor3"><input type="radio" class="nobor3" value="radiobutton" name="radiobutton"><strong>&nbsp;SI</strong></div>
						    <div class="nobor3"><input type="radio" class="nobor3" value="radiobutton" name="radiobutton"><strong>&nbsp;NO</strong></div></td>
						</tr>
					</tbody></table>
					
					
					
					<div style="display: none; float: left;" id="phonedataalternate">
						<p>
							Quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. Quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. Quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. Quis pede sit amet libero sollicitudin pharetra. <a onclick="unlockFields('phonedata');" href="javascript:;">Proin dapibus orci ac urna?</a> 
						</p>
						<div class="tithelp">
							<div class="helpleftblack">Dolor amet lorem ipsum</div>
							<br class="clear">
						</div>
						<table class="canvas">
							<tbody><tr> 
								<td width="100" class="right">Lorem impsum</td>
								<td width="400" class="left">
								<input size="20">
								</td>
						</tr></tbody></table>
						<div id="tabordini3buttons" class="fooform">
							<div class="fooformright">
							<div><a onclick="document.getElementById('attivazioneDiv').style.display='none'; document.getElementById('result').style.display='block';" href="#" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""><span>lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
							<br class="clear">
							</div>	
						</div>

						

					</div>
					<!-- FINE DEL BLOCCO CON TABELLA CONDIZIONALE E DINAMICA -->
					
				</div>
				
		</div>
					
					<div class="boxseparator">&nbsp;</div>	
					
					<!-- BLOCCO DI CODICE DATI PERSONALI -->	
					<script type="text/javascript">loadFormControl ()</script>
					<div class="sicurezzabox">
						<h1><img src="/img/ret/sicurezza_dot_3.gif">Adempimenti di legge e informative</h1>
						<h3 class="squaredotted">Informativa sul trattamento dei dati personali</h3>
						<!-- BOX ERRORE -->
						<div id="ErroriValidazione" style="display:none;">
						<div class="boxtop"><img border="0" src="/img/ret/box_msgtop.jpg" alt=""></div>
						<br class="clear">
						<div class="boxtxt">
							<p class="box_mess">
								<img border="0" src="/img/ret/box_attenzione.jpg" alt=""><br>
								Per proseguire &egrave; necessario che tu prenda visione del nuovo testo riguardante l'informativa sul trattamento dei dati personali. Per farlo ti invitiamo a visualizzare il testo aprendo il documento PDF attraverso il link sottostante e successivamente spuntare la casella di presa visione.
							</p> 
							<ul id="ErroriValidazioneList" class="alert">
							</ul>
							<br class="clear">
						</div>
						<br class="clear">
						<div class="boxbottom"><img border="0" src="/img/ret/box_msgbottom.jpg" alt=""></div>
						</div>
						<!-- / BOX ERRORE -->
						<p>
							Ti informiamo che &egrave; stata acquisita la nuova normativa in tema di privacy sul trattamento dei dati personali. Con l'introduzione di tale informativa <strong>non sar&agrave; apportata alcuna modifica ai consensi</strong> sul trattamento dei dati personali <strong>precedentemente espressi</strong>.
						</p>
						<p>
							Per dichiarare di prendere visione e successivamente esprimere i consensi &egrave; necessario aprire, attraverso il link sottostante, e leggere il nuovo testo dell'informativa per il trattamento dei dati personali.
						</p>
						<p>
							Visualizza la nuova <a href="#### LINK AL PDF #####" onclick="fieldEnable('checkInformativa');fieldEnable('consensoBpm');fieldEnable('consensoTerzi');fieldEnable('consensoPromo');" target="_blank">informativa sul trattamento dei dati personali</a>.
						</p>
						<form autocomplete="off">
							<fieldset id="checkInformativa" class="disabled">
								<label><input type="checkbox" disabled="false" value="off" id="checkVisione" onclick="fieldCheck(this, 'checkInformativa');" title="Per poter dichiarare &egrave; necessario prendere prima visione del PDF contenente l'informativa attraverso il link appena sopra."/>Dichiaro di aver preso visione della nuova informativa</label>
							</fieldset>
							<table class="text01">
								<tr>
									<td>
										<p>
											Con riferimento a tale informativa chiediamo il Tuo consenso al trattamento dei dati personali, per finalit&agrave; non necessarie all'adempimento degli obblighi contrattuali descritte.E' sufficiente che barri una delle due caselle se desideri o meno che i Tuoi dati siano:
										</p>
									</td>
								</tr>
								<tr>
									<td>
										<br><p>utilizzati per l'invio, da parte della Banca, di comunicazioni concernenti l'offerta di prodotti o servizi del gruppo Bipiemme e per l'elaborazione di studi e di ricerche di mercato.</p>
									</td>
								</tr>
								<tr>
									<td>
										<fieldset id="consensoBpm" class="disabled">
											<label><input id="cn1_S" name="g1" type="radio" value="Y" disabled="disabled" onclick="fieldCheck(this, 'consensoBpm');" title="Lorem ipsum dolor tooltip">do il consenso</label>&nbsp;&nbsp;&nbsp;&nbsp;<label><input value="N" name="g1" id="cn1_N" vaule="N" type="radio" disabled="disabled" onclick="fieldCheck(this, 'consensoBpm');" title="Lorem ipsum dolor tooltip">nego il consenso</label>
										</fieldset>
									</td>
								</tr>
								<tr>
									<td>
										<br><p>utilizzati per l'invio, da parte della Banca, di comunicazioni concernenti l'offerta di prodotti o servizi di soggetti terzi</p>
									</td>
								</tr>
								<tr>
									<td>
										<fieldset id="consensoTerzi" class="disabled">
											<label><input name="g2" id="cn2_S" type="radio" value="Y" disabled="disabled" onclick="fieldCheck(this, 'consensoTerzi');" title="Lorem ipsum dolor tooltip">do il consenso</label>&nbsp;&nbsp;&nbsp;&nbsp;<label><input value="N" name="g2" id="cn2_N" type="radio" disabled="disabled" onclick="fieldCheck(this, 'consensoTerzi');" title="Lorem ipsum dolor tooltip">nego il consenso</label>
										</fieldset>
									</td>
								</tr>
								<tr>
									<td>
										<br><p>comunicati a societ&agrave; terze ai fini di promozione di prodotti o servizi e di ricerche di mercato</p>
									</td>
								</tr>
								<tr>
									<td>
										<fieldset id="consensoPromo" class="disabled">
											<label><input name="g3" id="cn3_S" type="radio" value="Y" disabled="disabled" onclick="fieldCheck(this, 'consensoPromo');" title="Lorem ipsum dolor tooltip">do il consenso</label>&nbsp;&nbsp;&nbsp;&nbsp;<label><input value="N" name="g3" id="cn3_N" type="radio" disabled="disabled" onclick="fieldCheck(this, 'consensoPromo');" title="Lorem ipsum dolor tooltip">nego il consenso</label>
										</fieldset>
									</td>
								</tr>
							</table>
							<br>
						</form>
					</div>	
					<div id="formInfoPrivacyLoading" class="fooform">
						<div class="fooformtop"></div>
						<div id="formInfoPrivacyDisplay" class="fooformright">
							<div>
								<a title="conferma" class="btnformright" href="javascript:;" onclick="testInformativa();void(0);">
									<img alt="" src="/img/ret/btn_left_ar.gif"/>
									<span>conferma</span>
									<img alt="" src="/img/ret/btn_right_ar.gif"/>
								</a>
							</div>
							<br class="clear"/>
						</div>	
					</div>
					
					<!-- FINE BLOCCO DI CODICE DATI PERSONALI -->
					<div class="dichiarazione">
						<table class="text01">
							<tbody><tr>
								<td>
									<h3 class="squaredotted">Lorem ipsum DOLOR sit AMET consectetur adipiscing</h3>
									<p>
										Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Ut quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. In <strong>placerat</strong>, velit non auctor lobortis, erat sapien convallis odio, ac tempor nulla felis at quam.Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Ut quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. In <strong>placerat</strong>, velit non auctor lobortis, <strong>erat sapien convallis</strong> odio, ac tempor nulla felis at quam.
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<form action="" method="" class="error">
										<input type="checkBox">&nbsp;<label>Quis pede sit amet libero <strong>sollicitudin</strong> pharetra. Proin dapibus orci ac urna</label>
									</form>
								</td>
							</tr>
						</tbody></table>
						<!-- BLOCCO BOTT_003 -->
						<div class="fooform">
							<div class="fooformtop"></div>
							<div class="fooformright">
							<div><a href="#1" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""><span>consectetur</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
							<br class="clear">
							</div>	
						</div>
						<!-- FINE BLOCCO BOTT_003 -->
					</div>
					
					<div class="dichiarazione">
						<table class="text01">
							<tbody><tr>
								<td>
									<h3 class="squaredotted">Lorem ipsum DOLOR sit AMET consectetur adipiscing</h3>
									<p>
										Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Ut quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. In <strong>placerat</strong>, velit non auctor lobortis, erat sapien convallis odio, ac tempor nulla felis at quam.Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Ut quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. In <strong>placerat</strong>, velit non auctor lobortis, <strong>erat sapien convallis</strong> odio, ac tempor nulla felis at quam.
									</p>
								</td>
							</tr>
						</tbody></table>
						<!-- BLOCCO BOTT_003 -->
						<div class="fooform">
							<div class="fooformtop"></div>
							<div class="fooformright">
							<div><a href="#1" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""><span>consectetur</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
							<br class="clear">
							</div>	
						</div>
						<!-- FINE BLOCCO BOTT_003 -->
					</div>
					
					
				<br class="clear">	
				<div class="boxseparator">&nbsp;</div>	
				</div>
			</div>
			<div class="boxend"></div>
		</div>
<!-- FINE BOX SICUREZZA IN OVERLAYER -->		


<!-- PAGINA STANDARD (SOSTITUIRE CON QUALSIASI COSA)-->
<div id="testa" style="text-align: center;">
	     <img src="/img/ret/str_myhome_ss.gif">
</div>
<!-- FINE PAGINA STANDARD (SOSTITUIRE CON QUALSIASI COSA NEL BODY) -->

</body>
</html>