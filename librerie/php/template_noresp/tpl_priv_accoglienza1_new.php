<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>LIBRERIE Bpm &raquo; Template struttura &raquo; Pagina interna privata</title>
	 <!-- INIZIO CODICE--> 
<?php virtual ("/wscmn/css/include_css_priv.html"); ?>
<?php virtual ("/js/include_js_priv.html"); ?>
<script type="text/javascript" src="/wscmn/js/responsive/generic.js"></script>



	<!-- FINE CODICE--> 
	<meta name = "viewport" content = "initial-scale = 1.0">
</head>

<body class="bgfp obs">
<!-- BOX SICUREZZA IN OVERLAYER -->		
	<div id="sicurezza">

		<div class="boxtitle">
			<div class="phonebox"><p>Servizio clienti nazionale<span>800 060 070</span></p></div>
			<p>Lorem ipsum <span>Dolor Sit</span> amet consectetur <span>Elit</span></p>
		</div>
		
		<div class="boxbody">
			<div id="contenuti">
			
			<!-- PARAGRAFO INTRODUTTIVO -->
			<p>
				Lorem ipsum dolor sit amet, lorem ipsum dolor sit <strong>amet dolor sit amet</strong>.
			</p>

			
			<!-- PRIMO BOX -->
			<div class="sicurezzabox">

				<h1><img src="/img/ret/sicurezza_dot_1.gif">Lorem ipsum dolor sit amet</h1>
				<table class="text01">
					<tr>
						<td>
							<p>
								Ut quis pede sit amet libero sollicitudin pharetra. Proin <strong>dapibus orci ac urna</strong>.
							</p>
							<p>
								Ut quis pede sit amet libero <strong>sollicitudin pharetra</strong>.
							</p>
							<ul>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Consectetur adipiscing elit 1,2,3,4.</li>
							</ul>
						</td>
					</tr>
				</table>
				
				<!-- INIZIO CODICE--> 
				
				<?php virtual ("/librerie/include/commons/boxeditoriali/box_black_priv_034s.html"); ?>
								
				
				<!-- ESEMPIO BOX CON TESTO CHE COMPARE -->
				<br class="clear">
				<div class="boxedform">
				<p>
					Lorem ipsum dolor sit amet consctetur adipiscing elit. Summa cum laude. Lauro ti sum. Simca sum laude cum lorem.Lorem ipsum dolor sit amet consctetur adipiscing elit. Summa cum laude. Lauro ti sum. Simca sum laude cum lorem.
				</p>
				<div class="fooform" style="position: absolute; clear:left; width:auto !important">
					<div class="fooformright">
							<a class="btnformright" title="Lorem ipsum" href="javascript:;" onclick="javascript: this.parentNode.parentNode.style.position='';$('pToShow').style.display='block';">
								<img alt="" src="/img/ret/btn_left_ar.gif"/><span>Dolor ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"/>
							</a>
					</div>
				</div>
				<br><br>
				<p id="pToShow" style="display:none; clear:both;">
					Lorem dolor amet consectetur adipiscing elit. Summa cum laude. <a href="#">Lorem dolor</a> amet consectetur adipiscing elit. Summa cum laude. Lorem dolor amet consectetur adipiscing elit. Summa cum laude. Lorem dolor amet consectetur <strong>adipiscing</strong> elit. Summa cum laude.
				</p>
				<div class="tithelp">
						<div class="helpleftblack">Dolor amet lorem ipsum</div>
						<br class="clear"/>
				</div>
				
				<div class="formGeneric">
					<form class="formCentered" autocomplete="off">
						<fieldset class="row">
							<label class="nomefield">Lorem ipsum</label>
							<input type="text" value=""></input>
						</fieldset>
					</form>
					<div class="aButtoncons formCentered btnSpaceAcc">
						<span><a href="javascript:;" class="aButton"><span>lorem ipsum</span></a></span>
					</div>					
					<br class="clear">
				</div>

				<div class="formGeneric">
					<form autocomplete="off">
					<div class="row-fluid">		
						<div class="span2">&nbsp;</div>
						<div class="span8 alctr"><strong>Vuoi fornire il consenso ai sensi della normativa xx del yy/2015?</strong></div>
						<div class="span2">&nbsp;</div>		
					</div>
					<div class="row-fluid">		
						<div class="span4">&nbsp;</div>
						<div class="span4">
							<fieldset class="row alctr">
								<input type="radio" name="radiobutton" value="radiobutton">do il consenso &nbsp;&nbsp;<input type="radio" name="radiobutton" value="radiobutton">non do il consenso
							</fieldset>						
					
							<div class="aButtoncons formCentered btnSpaceAcc">
								<span><a href="javascript:;" class="aButton"><span>conferma</span></a></span>
							</div>
						</div>
						<div class="span4"><br><br>		
							<div class="aButtoncons formCentered buttonacc">
								<a href="#">Compila pi&ugrave; tardi</a><br>
								<span class="note">(Tentativo 1 di 5)</span>
							</div>
						</div>		
					</div>	
					</form>
				</div>	
			</div>	
			<!-- FINE ESEMPIO BOX CON TESTO CHE COMPARE -->
				
					
				<!-- FINE CODICE-->
				
				<br class="clear" />
				
				
				
				<div class="boxseparator">&nbsp;</div>
				
			</div>
			
			<!-- SECONDO BOX -->
			
			<!-- ALERT SECONDO BOX -->
			<div style="display: none;top: 560px; left: 85px;" id="layeralert2" class="layeralert2">
				<div class="head"></div>
				<div class="body">
					<div class="important">
						<h3 class="verde">LOREM IPSUM</h3>
						<p>Lorem ipsum dolor sit amet,lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem. Lorem ipsum dolor sit amet,lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem. Lorem ipsum dolor sit amet,lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem. </p>
						<br class="clear"/>
						<form action="#" method="">
							<table>
									<tbody>
										<tr>
											<td class="radio"><input type="radio"/></td>
											<td class="label">Lorem ipsum dolor sit amet sit amet consectetur.</td>
											<td class="radio"><input type="radio"/></td>
											<td class="label">Lorem adipiscing elit adipiscing.</td>
										</tr>
									</tbody>
							</table>
						</form>
						<br class="clear"/>
						<a href="javascript:;" onclick="javascript: closeAlert('layeralert2','sicurezza')" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""/><span>Lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt=""/></a><a href="#1" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""/><span>Lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt=""/></a>
						<br class="clear"/>
					</div>
				</div>
				<div class="foot"></div>
				
			</div>
			<!-- FINE ALERT SECONDO BOX -->
			
		
			<div class="sicurezzabox">
				<h1><img src="/img/ret/sicurezza_dot_2.gif">Amet libero sollicitudin pharetra</h1>
				<table class="text01">
					<tr>
						<td>
							<p>
								Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Ut quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. In <strong>placerat</strong>, velit non auctor lobortis, erat sapien convallis odio, ac tempor nulla felis at quam. Suspendisse eros urna, porta sit amet, congue iaculis, adipiscing a, nibh. Vestibulum a nisi non metus gravida consequat. Phasellus est augue, venenatis sed, dictum a, euismod sit amet, pede. Nulla euismod sollicitudin pede. In vitae tortor et neque elementum congue.
							</p>
						</td>
					</tr>
				</table>
				
				<!-- BLOCCO CON TABELLA CONDIZIONALE E DINAMICA -->
				<div id="attivazioneDiv" style="display: block;">	
				<div class="tithelp">
				<div class="helpleftblack">Titolare effettivo dei rapporti con Webank<span class="tooltip"><a onmouseout="vedi('lampa1');" onmouseover="nascondi('lampa1');" href="#1"><img class="lampa" id="lampa1" src="/img/ret/lampa_off.gif"/><span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat.<br>Nullam nec justo eget turpis pharetra rhoncus.<br><ul><li>Lorem dolor ipsum dolor amet</li><li>Dolor ipsum dolor amet</li><li>Amet ipsum dolor amet ipsum lorem</li></ul></span></span></span></a></span></div>
				<div align="right" class="BvTableHeaderHelp"><a href="#1"><img src="/img/ret/ico2or_help2.gif" alt="help" /></a><a href="#1" class="hlp">help</a><br class="clear" /></div>
				<br class="clear" /></div>
				
				<div class="formGeneric">
						<div class="row-fluid">
						<div class="span2">&nbsp;</div>
						<div class="span4">
							<label class="nomefield">Lorem ipsum</label>
							<div class="row-fluid">
								<div class="span4">
									<select>
										<option>lorem</option>
										<option>lorem</option>
									</select>
								</div>
								<div class="span8"><input type="text"></div>
							</div>
						</div>
						<div class="span4">
							<label class="nomefield">Lorem ipsum</label>
							<select>
								<option>lorem</option>
								<option>lorem</option>
							</select>
						</div>
						<div class="span2">&nbsp;</div>						
					</div>
						<div class="aButtoncons formCentered btnSpaceAcc">
							<span><a href="javascript:;" class="aButton"><span>lorem ipsum</span></a></span>
							<span><a href="javascript:;" class="aButton"><span>lorem ipsum</span></a></span>
						</div>					
						<br class="clear">
					</div>
				
				
				<br><br>
				
				<div class="formGeneric">
					<div class="row-fluid">						
						<div>
							<label class="nomefield">Lorem impsum</label>							
							Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude.<br/><br/>							
							<input type="radio" name="radiobutton" value="radiobutton" class="nobor3"/><strong>&nbsp;SI</strong>
							<input type="radio" name="radiobutton" value="radiobutton" class="nobor3"/><strong>&nbsp;SI</strong>						
						</div>				
					</div>
				</div>
				
				
				
				<table class="canvas">
					<tbody><tr> 
							<td width="100" valign="top" class="right">Lorem impsum</td>
							<td colspan="3">
							Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. 
							</td>
					</tr>
					<tr>
						<td class="right"/>
					<td>
						<div class="nobor3"><input type="radio" name="radiobutton" value="radiobutton" class="nobor3"/><strong>&nbsp;SI</strong></div>
						<div class="nobor3"><input type="radio" name="radiobutton" value="radiobutton" class="nobor3"/><strong>&nbsp;NO</strong></div></td>
					</tr>
				</tbody></table>
				
				<!--BOX RISULTATI DI OUTPUT -->
				<div class="tithelp"><div class="helpleftblack">Lorem ipsum dolor</div></div>
					<table class="canvas">
						<tr> 
							<td><strong>Lorem ipsum dolor</strong><br/>lorem</td>
						</tr>
						<tr> 
							<td><strong>Lorem ipsum dolor</strong><br/>lorem</td>
						</tr>
						<tr> 
							<td class="right"><div class="alright">Lorem <a href="#"> laboris nisi ut aliquip </a>ex ea commodo consequat dolor sit</div></td>
						</tr>
					</table>
			
				<!--FINE BOX RISULTATI DI OUTPUT -->
				
				<div id="phonedataalternate" style="display:none; float:left;">
					<p>
						Quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. Quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. Quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. Quis pede sit amet libero sollicitudin pharetra. <a href="javascript:;" onclick="unlockFields('phonedata');">Proin dapibus orci ac urna?</a> 
					</p>
					<div class="tithelp">
						<div class="helpleftblack">Dolor amet lorem ipsum</div>
						<br class="clear"/>
					</div>
					<table class="canvas">
						<tr> 
							<td width="100" class="right">Lorem impsum</td>
							<td width="400" class="left">
							<input size="20">
							</td>
					</table>
					<div class="fooform" id="tabordini3buttons" >
						<div class="fooformright">
						<div><a title="Lorem ipsum" class="btnformright"  href="#" onclick="document.getElementById('attivazioneDiv').style.display='none'; document.getElementById('result').style.display='block';"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
						<br class="clear"/>
						</div>	
					</div>

					

				</div>
				<!-- FINE DEL BLOCCO CON TABELLA CONDIZIONALE E DINAMICA -->
				
			</div>
			
	</div>			
		<div id="result" style="display:none;">
				<?php virtual ("/librerie/include/commons/boxeditoriali/box_black_priv_077.html"); ?>
				</div>	
				<div class="boxseparator">&nbsp;</div>
			
			
			<!-- TERZO  BOX -->
			<div class="sicurezzabox">
				<h1 id="titSicurezza"><img src="/img/ret/sicurezza_dot_3.gif">Pede sit amet libero sollicitudin</h1>
				
				<h3 class="squaredotted">Quis PEDE DOLOR sit amet libero SOLLICITUDIN pharetra</h3>
				<!-- ESEMPIO QUESTIONARIO -->
				<?php virtual ("/librerie/include/commons/form/form_black_070_priv.html"); ?>
				<!-- FINE ESEMPIO QUESTIONARIO -->
				
				
				<!-- CONTENITORE DELLA DICHIARAZIONE -->
				<div class="dichiarazione">
					<table class="text01">
						<tr>
							<td>
								<h3 class="squaredotted">Quis PEDE DOLOR sit amet libero SOLLICITUDIN pharetra</h3>
								<p>
									Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Ut quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. In <strong>placerat</strong>, velit non auctor lobortis, erat sapien convallis odio, ac tempor nulla felis at quam.
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<form method="" action="">
									<input type="checkBox">&nbsp;<label>Quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna</label>
								</form>
							</td>
						</tr>
					</table>
					
					<!-- BLOCCO BOTT_003 -->
					<div class="fooform">
						<div class="fooformtop"></div>
						<div class="fooformright">
						<div><a title="Lorem ipsum" class="btnformright" href="javascript:;" onclick="$('titSicurezza').scrollTo();"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
						<br class="clear"/>
						</div>	
					</div>
					<!-- FINE BLOCCO BOTT_003 -->
				</div>

				
				
				<!-- CONTENITORE DELLA DICHIARAZIONE -->
				<div class="dichiarazione">
				<div class="filetto_tratteggiato"><img src="/img/ret/1px.gif"></div>
					<table class="text01">
						<tr>
							<td>
								<h3 class="squaredotted">Lorem ipsum DOLOR sit AMET consectetur adipiscing</h3>
								<p>
									Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Ut quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. In <strong>placerat</strong>, velit non auctor lobortis, erat sapien convallis odio, ac tempor nulla felis at quam.Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Ut quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. In <strong>placerat</strong>, velit non auctor lobortis, <strong>erat sapien convallis</strong> odio, ac tempor nulla felis at quam.
								</p>
							</td>
						</tr>
					</table>
					<!-- BLOCCO BOTT_003 -->
					<div class="fooform">
						<div class="fooformtop"></div>
						<div class="fooformright">
						<div><a title="Lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>consectetur</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
						<br class="clear"/>
						</div>	
					</div>
					<!-- FINE BLOCCO BOTT_003 -->
				</div>
				
				<!-- CONTENITORE DELLA DICHIARAZIONE -->
				<div class="dichiarazione">
				<div class="filetto_tratteggiato"><img src="/img/ret/1px.gif"></div>
					<table class="text01">
						<tr>
							<td>
								<h3 class="squaredotted">Lorem IMPSUM dolor sit amet</h3>
								<p>
									Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Ut quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. In <strong>placerat</strong>, velit non auctor lobortis, erat sapien convallis odio, ac tempor nulla felis at quam.Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Ut quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. In <strong>placerat</strong>, velit non auctor lobortis, <strong>erat sapien convallis</strong> odio, ac tempor nulla felis at quam.
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>
									<br>
									Dichiaro quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<form method="" action="">
									<input type="radio"><label>S&igrave;</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"><label>No</label>
								</form>
							</td>
						</tr>
					</table>
					<!-- BLOCCO BOTT_003 -->
					<div class="fooform">
						<div class="fooformtop"></div>
						<div class="fooformright">
						<div><a title="Lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>lorem</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
						<br class="clear"/>
						</div>	
					</div>
					<!-- FINE BLOCCO BOTT_003 -->
				</div>
				
				
				
				
				<div class="boxseparator">&nbsp;</div>
			</div>
			
			
			<!-- ADEGUATA VERIFICA -->
			<div class="sicurezzabox">
				<h1><img src="/img/ret/sicurezza_dot_2.gif">Normativa antiriciclaggio</h1>
				<table class="text01">
				<tr>
					<td><p>Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Ut quis pede sit amet libero sollicitudin pharetra. Proin dapibus orci ac urna. In <strong>placerat</strong>, velit non auctor lobortis, erat sapien convallis odio, ac tempor nulla felis at quam. Suspendisse eros urna, porta sit amet, congue iaculis, adipiscing a, nibh. Vestibulum a nisi non metus gravida consequat. Phasellus est augue, venenatis sed, dictum a, euismod sit amet, pede. Nulla euismod sollicitudin pede. In vitae tortor et neque elementum congue.</p></td>
				</tr>
				</table>
				<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_270.php"); ?>
				<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_280.php"); ?>
				<?php virtual("/librerie/include/commons/form/form_120_priv.php");?>
				<br />
				<div class="titform"><h2>Il tuo profilo</h2></div>
				<div class="boxform formacc">
					<div class="formGeneric adeveracc">
						<form id="formrichiesta2">
							<div class="row-fluid">
								<h2 class="normaAntir">Profilo personale</h2>
							</div>
							<fieldset class="first tolltipclick">
								<label class="nomefield nopadd">Persona politicamente esposta?</label>
								<span class="text nofl dotted">Importante: prima di rispondere leggi la 
								
									<span class="txthelp" data-tooltip="#ttHtmlContId">definzione</span>
						
								</span>
								<span class="ttHtmlContent" id="ttHtmlContId">Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007)</span>
								<div class="radiocont">
									<label class="trecampi"><input type="radio" name="pol">no</label>
									<label class="trecampi"><input type="radio" name="pol">si</label>
									</div>
							</fieldset>
							<fieldset>
								<label class="nomefield">Seconda cittadinanza (facoltativo)</label>
								<select>
									<option>Seleziona</option>
									<option>Lorem</option>
								</select>
							</fieldset>
							<div class="row-fluid">
								<h2 class="normaAntir">Profilo professionale e patrimoniale</h2>
							</div>
							<fieldset class="first">
								<label class="nomefield">Professione:</label>
								<select>
									<option>Seleziona</option>
									<option>Lorem</option>
								</select>
							</fieldset>
							<fieldset>
								<label class="nomefield">Settore dell'attivit&agrave; lavorativa:</label>
								<select>
									<option>Seleziona</option>
									<option>Lorem</option>
								</select>
							</fieldset>
							<fieldset class="row">
								<label class="nomefield">Dettaglio settore:</label>
								<select>
									<option>Seleziona</option>
									<option>Lorem</option>
								</select>
							</fieldset>
							<fieldset class="first">
								<label class="nomefield">Stato di svolgimento:</label>
								<select>
									<option>Seleziona</option>
									<option>Lorem</option>
								</select>
							</fieldset>
							<fieldset>
								<label class="nomefield">Provincia di svolgimento:</label>
								<select>
									<option>Seleziona</option>
									<option>Lorem</option>
								</select>
							</fieldset>
							<fieldset class="first">
								<label class="nomefield">Reddito annuo netto:</label>
								<select>
									<option>Seleziona</option>
									<option>Lorem</option>
								</select>
							</fieldset>
							<fieldset>
								<label class="nomefield">Dichiarazione origine del reddito:</label>
								<select>
									<option>Seleziona</option>
									<option>Lorem</option>
								</select>
							</fieldset>
							 <fieldset class="tolltipclick first">
								<label class="nomefield ico">Origine dei fondi:</label>
									<span class="iconahelp">
										<span class="closed">
										<span id="documenti7" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
										<span class="uniqTooltipPos"><a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help"></a>
											<span class="uniqTooltipInnerHTML">lorem ipsum dolor sit </span>
										</span>
										</span>
									</span>
									</span>
								
								<select>
									<option>Seleziona</option>
									<option>Lorem</option>
								</select>
							</fieldset>							
						</form>
					</div>
				</div>
				<div class="aButtoncons formCentered buttonacc">
					<a class="aButton"><span>Conferma</span></a>
					<br class="clear">
					<a href="#">compila pi&ugrave; tardi</a><br>
					<span class="note">(da compilare entro il 28/02/20012)</span>
				</div>
			</div>			
			<!-- FINE ADEGUATA VERIFICA -->
			</div>
		</div>
		<div class="boxend"></div>
	</div>
<!-- FINE BOX SICUREZZA IN OVERLAYER -->		
</body>
</html>