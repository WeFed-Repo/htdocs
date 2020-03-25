<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
<title>LIBRERIE Webank</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="it" />
<meta name="script" http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="script" http-equiv="Content-Style-Type" content="text/css" />
<!-- INIZIO CODICE-->
<link href="/wscmn/css/priv_generic.css" rel="stylesheet" type="text/css" media="all">
<link href="/wscmn/css/ret/priv_special.css" rel="stylesheet" type="text/css" media="all">
<link href="/css/ret/priv_color.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" media="print" href="/wscmn/css/priv_print.css" /><script src="/wscmn/js/ajax_low.js" type="text/javascript"></script>
<script src="/wscmn/js/ret/priv_utilities.js" type="text/javascript"></script>
<link href="/wscmn/css/ret/priv_special_wt.css" rel="stylesheet" type="text/css" media="all">
<!-- FINE CODICE-->
<script type="text/javascript">
function iframeloadblock ()
{
	//Apre l'overlayer
	openPopOverLayer('layeralert');
	//Carica l'iframe nel suo contenitore (ovviamente l'indirizzo va cambiato)
	window.open("/connect.php?page=tpl_priv_test_iframeoverlay_ifr.php", "funzione");
	//Aggiunge l'evento al load dell'i-frame
	addEvent(document.getElementById("funzione"),"load",function (){ calcHeightIframe();});

}
addEvent (window, "load", iframeloadblock);
</script>
</head>
<body class="bgfp">
	<!-- OVERLAYER PROVA -->
	<div class="layeralert" id="layeralert" style="display: none;">
		<div class="head handle"></div>
		<div class="body"> 
			<p>Lorem ipsum babbada, badda bai. Lorem dolor trauma sit amet consectetur adipiscing elit.</p>
			<br class="clear" /> 
			<a title="Lorem ipsum" class="btnformright" href="#1" onclick="javascript: closePopOverLayer('layeralert');"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>Lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a> <br class="clear" /> </div> 
			<div class="foot"></div> 
		</div>
	<!-- FINE OVERLAYER PROVA -->

	<div id="testa"> 
	  <div id="page1">
		<img src="/img/ret/logo_print.gif" class="printlogo">
	<div id="header"> 
	<!-- BLOCCO TESTATA -->
	
	<div id="headnero"> 
		<div id="ctnloghi">
			<a href="#"><img src="/img/ret/logo_webank.gif" alt="Webank.it" title="Webank.it" /></a>
		</div>

		<div id="ctndx"> 
			<div class="esci">
				<a href="#1" class="helpcenter" title="Help Center"></a><a href="#1" class="numeroverde" title="Numero verde"></a>
				<a href="#1"><img src="/img/ret/btn_esci.gif" alt="Esci" title="Esci" class="logout" /></a>
			</div>
			<div class="switch">
				<a href="main.php?type=bus" class="switcher" title="Cliccando questo bottone, ti sar&agrave; richiesto di inserire la password di II livello">Vai al profilo <span>CONSULTARE E DISPORRE</span></a>
			</div>

		</div>   
	</div>
	
	
	<!-- FINE BLOCCO TESTATA -->

	<!-- MENU PRIMO LIVELLO -->
	<div id="menufirst">
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_my_ria.php&liv1=MH" title="My Home" class="menuvoice first" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_myhome_normal.gif" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_banking.php&liv1=BA" title="Sportello" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_sportello_normal.gif" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_carte.php&liv1=CA" title="Carte" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_carte_normal.gif" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_trading.php&liv1=TR" title="Trading" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret//ico1bt_nav_priv_wbx_trading_normal.gif" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_investimenti.php&liv1=RI" title="Investimenti" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_investimenti_active.gif" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_finanz.php&liv1=FI" title="Finanziamenti" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_finanziamenti_normal.gif" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_assic.php&liv1=AS" title="Assicurazioni" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_assicurazioni_normal.gif" alt="" /></a>
	</div>
	<!-- MENU SECONDO LIVELLO -->
				<div id="menusecond">
			<div class="level2voice first"  onclick="menusecondclick(this);" onmouseleave="menusecondoutie(this);" onmouseout="menusecondoutmoz(this);" onmouseover="menusecondover (this);" >	
					<span><a href="javascript:;" >I miei investimenti</a></span>
					<div class="menuthird"><div class="menuthirdshadow"></div>

						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<h1>I miei investimenti</h1>
								<ul>
																		<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=0&ri3=0">Portafoglio</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=0&ri3=1">Situazione ordini</a></li>

										<li><a href="#">Ipsum amet laude</a></li>
										<li><a href="#">Lorem dolor amet</a></li>
											
								</ul>
							</div>
							<div class="mymenu">
								<h1>MY MENU</h1>
								<ul>

									<li><a href="#">Sit amet</a></li>
									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Dolor amet</a></li>

									<li><a href="#">Ipsum dolor sit amet</a></li>
								</ul>
							</div>
							<div class="footer">
								<div class="sx">&nbsp;</div>
								<div class="mymenu">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_gear.gif" alt="" /></a><p class="middle"><a href="#">Modifica My Menu</a></p>
								</div>

							</div>
						
						</div>
						<div class="thirdlevelbottom"></div>
					</div>
				</div>
				<div class="level2voice"  onclick="menusecondclick(this);" onmouseleave="menusecondoutie(this);" onmouseout="menusecondoutmoz(this);" onmouseover="menusecondover (this);" >	
					<span><a href="javascript:;" >Gestione deposito</a></span>
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>

						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<h1>Gestione deposito</h1>
								<ul>
																		<li><a href="#">Lorem ipsum</a></li>
										<li><a href="#">Dolor lorem ipsum</a></li>

										<li><a href="#">Ipsum amet laude</a></li>
										<li><a href="#">Lorem dolor amet</a></li>
											
								</ul>
							</div>
							<div class="mymenu">
								<h1>MY MENU</h1>
								<ul>

									<li><a href="#">Sit amet</a></li>
									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Dolor amet</a></li>

									<li><a href="#">Ipsum dolor sit amet</a></li>
								</ul>
							</div>
							<div class="footer">
								<div class="sx">&nbsp;</div>
								<div class="mymenu">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_gear.gif" alt="" /></a><p class="middle"><a href="#">Modifica My Menu</a></p>
								</div>

							</div>
						
						</div>
						<div class="thirdlevelbottom"></div>
					</div>
				</div>
				<div class="level2voice selected"  onclick="menusecondclick(this);" onmouseleave="menusecondoutie(this);" onmouseout="menusecondoutmoz(this);" onmouseover="menusecondover (this);" >	
					<span><a href="javascript:;" >Fondi e sicav</a></span>
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>

						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<h1>Fondi e sicav</h1>
								<ul>
																		<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=0">Investire in fondi e sicav</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=1">Ricerca e analisi</a></li>

										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=2">Compravendita</a></li>
											
								</ul>
							</div>
							<div class="mymenu">
								<h1>MY MENU</h1>
								<ul>
									<li><a href="#">Sit amet</a></li>

									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Dolor amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>

								</ul>
							</div>
							<div class="footer">
								<div class="sx">&nbsp;</div>
								<div class="mymenu">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_gear.gif" alt="" /></a><p class="middle"><a href="#">Modifica My Menu</a></p>
								</div>
							</div>

						
						</div>
						<div class="thirdlevelbottom"></div>
					</div>
				</div>
				<div class="level2voice"  onclick="menusecondclick(this);" onmouseleave="menusecondoutie(this);" onmouseout="menusecondoutmoz(this);" onmouseover="menusecondover (this);" >	
					<span><a href="javascript:;" >Collocamenti</a></span>
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>

						<div class="thirdlevelbody">
							<div class="sx">
								<h1>Collocamenti</h1>
								<ul>
																		<li><a href="#">Lorem ipsum</a></li>
										<li><a href="#">Dolor lorem ipsum</a></li>
										<li><a href="#">Ipsum amet laude</a></li>

										<li><a href="#">Lorem dolor amet</a></li>
											
								</ul>
							</div>
							<div class="mymenu">
								<h1>MY MENU</h1>
								<ul>
									<li><a href="#">Sit amet</a></li>

									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Dolor amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>

								</ul>
							</div>
							<div class="footer">
								<div class="sx">&nbsp;</div>
								<div class="mymenu">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_gear.gif" alt="" /></a><p class="middle"><a href="#">Modifica My Menu</a></p>
								</div>
							</div>

						
						</div>
						<div class="thirdlevelbottom"></div>
					</div>
				</div>
				<div class="level2voice"  onclick="menusecondclick(this);" onmouseleave="menusecondoutie(this);" onmouseout="menusecondoutmoz(this);" onmouseover="menusecondover (this);" >	
					<span><a href="javascript:;" >Altri prodotti</a></span>
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>

						<div class="thirdlevelbody">
							<div class="sx">
								<h1>Altri prodotti</h1>
								<ul>
																		<li><a href="#">Lorem ipsum</a></li>
										<li><a href="#">Dolor lorem ipsum</a></li>
										<li><a href="#">Ipsum amet laude</a></li>

										<li><a href="#">Lorem dolor amet</a></li>
											
								</ul>
							</div>
							<div class="mymenu">
								<h1>MY MENU</h1>
								<ul>
									<li><a href="#">Sit amet</a></li>

									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Dolor amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>

								</ul>
							</div>
							<div class="footer">
								<div class="sx">&nbsp;</div>
								<div class="mymenu">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_gear.gif" alt="" /></a><p class="middle"><a href="#">Modifica My Menu</a></p>
								</div>
							</div>

						
						</div>
						<div class="thirdlevelbottom"></div>
					</div>
				</div>
							</div>
				
</div>	<!-- INIZIO CODICE-->
		<!-- NUOVO STILE TOOLBOX -->
<!-- TOOLBOX -->
<div id="fixedtools">

	<div class="console" id="toolconsole" onmouseout="if (thisMovie('flash_toolbox')) thisMovie('flash_toolbox').userOut();" onmouseover="if (thisMovie('flash_toolbox')) thisMovie('flash_toolbox').userOver();">
		<!-- VERSIONE PER BROWSER SENZA PLUGIN: LASCIO I LINK -->
		<a id="toolbutton1" href="javascript:;" onclick="opentool(1,'enlarged')" class="label tool1" title="" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span><strong>Paolo</strong>,<br />l'assistente virtuale</span></span></a>
		<a id="toolbutton2" href="javascript:;" onclick="opentool(2)" class="label tool2 label2" title="Help Center" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span><strong>Help Center</strong><br />ti richiama</span></span></a>		
		<a id="toolbutton4" href="javascript:;" onclick="openChat(1)" class="label tool4" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span><strong>Help Center</strong><br />in chat</span></span></a>
		<a id="toolbutton3" href="#1" class="label tool3" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span>Manda una e-mail</span></span></a>
		<a id="toolbutton6" href="javascript:;" onclick="opentool(6)" class="label tool6" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span>FAQ</span></span></a>
		<a id="toolbutton7" href="javascript:;" onclick="opentool(7)" class="label tool7" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span>Glossario</span></span></a>
		<a href="javascript:;" class="label sicurezza" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span>Sicurezza</span></span><br><br></a>
		<!-- FINE VERSIONE PER BROWSER SENZA PLUGIN: LASCIO I LINK ORIGINALI -->
	</div>
	
	<script type="text/javascript">
	function openChat(x)
	{
		if (x == 1)
		{
		//window.open('/nocommit/chat_chiusa.html', 'Chat', 'width=180,height=260,resizable=false');
		window.open('/librerie/include/chat/Client.htm', 'Chat', 'width=180,height=260,resizable=false');
		}
		else if (x == 2)
		{
		window.open('/librerie/include/chat/client_new.html', 'Chat', 'width=186,height=323,resizable=false');
		}
		else
		{
		window.open('/Clientchat2.html', 'Chat2', 'width=180,height=260,resizable=false');
		}
	}
	
		//SWFObject console
	//se non e' IE 5
	if (!(navigator.appVersion.indexOf("MSIE 5")>=0))
	{
		var tool_bar = new SWFObject ("/wscmn/swf/toolbar.swf", "flash_toolbox", "65", "466", "8", "#dedede");
		tool_bar.addParam("wmode", "transparent");
		tool_bar.addParam("allowScriptAccess","always");
		tool_bar.addParam("quality", "high");
		tool_bar.addParam("FlashVars","xmlfile=/wscmn/swf/xml/toolbar_actions.xml&bgPaolo=0x8AB10B");
		tool_bar.write("toolconsole");
	}
	</script>
	
	</script>

	<div class="toolcontainer">
		<!-- TOOL 1 -->
		<div class="tool toollarge" id="tool1">
			<div class="toolhead" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
				<span class="tooltit handle">Paolo, l'assistente virtuale</span><img src="/wscmn/img/ret/xtool.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
			</div>
			<div class="paolo">
				<iframe frameborder="0" src="/librerie/include/commons/toolbox/paolo.html" scrolling="no" style="width:344px; height: 140px; overflow: hidden !important; border:none; margin:0; padding:0;" class="paolo" id="paoloframe">Paolo</iframe>

			</div>
			<br class="clear" /><a href="javascript:;" onclick="restrictPaolo();" class="paoloswitch" id="paolocontrai"></a><a href="javascript:;" onclick="enlargePaolo();" class="paoloswitch" id="paoloespandi"></a>
		</div>
		
		
		<!-- TOOL 2 -->
		<div class="tool" id="tool2">
			<div class="toolhead" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
				<span class="tooltit handle">Help center ti richiama</span><img src="/wscmn/img/ret/xtool.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
			</div>

			<div>
				<p class="operatori">Gli operatori del Customer Care ti richiamano quando vuoi tu.</p>
				<form class="formoperatori" method="" action="">
					<p><label>Tel.</label><input type="text" size="4" maxlength="4"/><input type="text" maxlength="16" size="16"/></p>
					<p><label>Giorno</label><select class="txtgiorno" name="giorno"><option selected="selected" value="uno">12/07/2007 - gio.</option><option value="due">13/07/2007 - ven.</option><option value="tre">16/07/2007 - lun.</option></select></p>
					<p><label>Fascia oraria</label><select class="txtfascia" name="fascia"><option selected="selected" value="uno">09.00 - 10.00</option><option value="due">10.00 - 11.00</option><option value="tre">11.00 - 12.00</option></select></p>

					<p><label>Psw chiamata</label><input type="text" class="txtpswchiamata" maxlength="12" size="14"/></p>
					<p class="txtsoloperinfo">( solo per info sul c/c )</p>
					<div style="float:right;padding-right:8px"><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>Invia</span><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div>
				</form>
			</div>
			<br /><br /><br />
			<br class="clear" />

		</div>
		
		<!-- TOOL 3 e 4 OGGI INESISTENTI 
		<div class="tool" id="tool3">
			<div class="dx handle"></div>
			<div class="sx"><p class="tooltit">Manda una email </p><div><form method="" action=""><p class="txttiporich"><label>Tipo di richiesta o segnalazione</label></p><select name="siti"><option selected="selected" value="uno">Ass.za procedure finanziarie</option><option value="due">Ass.za procedure bancarie</option><option value="tre">Assistenza tecnica</option><option value="quattro">Informazioni commerciali</option><option value="cinque">Suggerimenti/reclami</option><option value="tre">Altro</option></select><br/><br/><label class="txtscrivimess">Scrivi il messaggio</label><textarea></textarea><br /><br /><div style="padding-left:8px"><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>Cancella</span><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div><div style="float:right;padding-right:8px"><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>Invia</span><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div></form></div>
		<br /><br /><br />
		</div>
			<br class="clear" />
		</div>
		
		
		<div class="tool" id="tool4">
			<div class="dx handle"><img src="/img/ret/xtool.gif" onclick="closetools()" class="close" /></div>
			<div class="sx"><div><iframe frameborder="0" style="margin:0;padding:0;border:none" src="Clientchat2.html">Chat</iframe>
				</div>
			</div>
			<br class="clear" />
		</div>
		 -->
		
		<!-- TOOL 6 -->
		<div class="tool" id="tool6">
			
				<div class="toolhead" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
				<span class="tooltit handle">Faq</span>
				<img src="/wscmn/img/ret/xtool.gif" onclick="closetools()" class="close"  alt="Chiudi" title="Chiudi"/>
				</div>

			<div> 
			<div class="dxboxtools6b"> 
	        <p class="txtdxboxtools6"><b>Titolo</b></p>
			<div class="faq">
	        <div class="faqoff"> 
	          <p onclick="this.parentNode.className=(this.parentNode.className=='faqoff')?'faqon':'faqoff'" class="clic"><a href="#1">Domanda della prima FAQ?</a></p>
	          <div class="faqcont">Testo della faq esploso Testo della faq esploso Testo 
	            della faq esploso Testo della faq esploso Testo della faq esploso <br />
	            Testo della faq esploso
	            <ul>

								<li>la classe CU di Bonus Malus (sia di provenienza, sia di assegnazione)</li> 
								<li>i sinistri avvenuti negli ultimi 5 anni "pagati" (quindi di tua responsabilità) e "riservati" (ancora in fase di definizione sulla responsabilità).</li> 
							</ul>
						</div>
	        </div>
	        <div class="faqoff"> 
	          <p onclick="this.parentNode.className=(this.parentNode.className=='faqoff')?'faqon':'faqoff'" class="clic"><a href="#1">Domanda 
	            della seconda FAQ? Domanda della seconda FAQ? Domanda della seconda 
	            FAQ?</a></p>
	          <p class="faqcont">Testo della faq esploso Testo della faq esploso Testo 
	            della faq esploso Testo della faq esploso Testo della faq esploso 
	            Testo della faq esploso</p>

	        </div>
	        <div class="faqoff"> 
	          <p onclick="this.parentNode.className=(this.parentNode.className=='faqoff')?'faqon':'faqoff'" class="clic"><a href="#1">Domanda 
	            della terza FAQ?</a></p>
	          <p class="faqcont">Testo della faq esploso Testo della faq esploso Testo 
	            della faq esploso Testo della faq esploso Testo della faq esploso 
	            Testo della faq esploso</p>
	        </div>
			</div>
	        <p><a class="altre" href="#1"><img src="/img/ret/bullet1.gif"/> Altre Faq</a></p>

	      </div>
				</div>
			
			<br class="clear" />
		</div>
		
		<!-- TOOL 7 -->
		<div class="tool" id="tool7">
			<div class="toolhead" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
				<span class="tooltit handle">Glossario</span>

				<img src="/wscmn/img/ret/xtool.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
			</div>
			<div><form class="boxtools7form" method="" action="">
	        <p class="boxtools7form2">
	          <input type="text" class="boxtools7form3"/>
	          <a title="Lorem ipsum" class="btnevid1" href="#1"><img alt="" src="/img/ret/btn_left_sm1.gif"/><span>Invia</span><img alt="" src="/img/ret/btn_right_sm1.gif"/></a><br class="clear" /></p>
	      </form>
	      <br/>

		  
	      <div class="boxtools7form6">
	        <p><b>Lorem ipsum</b></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse 
	          sagittis ligula nec nisl. Vivamus a tortor. Maecenas adipiscing condimentum 
	          lectus. Mauris congue sapien semper turpis. Suspendisse dapibus. Integer 
	          quis tortor. Nunc at velit non mi rutrum sollicitudin. Mauris tellus. 
	          Aenean et est. Donec neque nulla, sodales eu, tincidunt id, egestas 
	          id, mi. Maecenas risus leo, nonummy ac, eleifend vel, vulputate sed, 
	          libero. Suspendisse viverra nibh nec sem.</p>    
		  		</div>
				</div>
			<br class="clear" />
		</div>
		
	</div>
</div>
<!-- FINE TOOLBOX -->    <!-- FINE CODICE-->

	<br class="clear" />
    <div id="content"> 
		<!-- SPALLA -->
		
 		<div id="menusxc">
	<h1>Ricerca e analisi</h1>
	<div class="menusxcontainer">
			<a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=1&ri4=0" class="selected"><span>Ricerca</span></a>
			<a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=1&ri4=1"><span>Trova fondi alternativi</span></a>
			<a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=1&ri4=2"><span>Classifiche</span></a>
			<a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=1&ri4=3"><span>Confronta i fondi</span></a>
			<a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=1&ri4=4"><span>News</span></a>
			<br class="clear" />
			<!-- funzione solo esemplificativa di loading-->
			</div>
		</div>		
		<!-- FINE SPALLA--> 
		<div id="contenuti">

      	
		<script src="/wscmn/js/ret/setiframe.js" language="javascript" type="text/javascript"></script>
	<script type="text/javascript">document.domain = new String( document.domain.substring( document.domain.indexOf('.') + 1) );</script>
	<iframe  name="funzione" id="funzione" scrolling="auto" height="500" frameborder="0" width="700px">
	</iframe>
    	</div>	
	</div>
	<div id="footer">

		<ul>
			<li><a href="#1" title="Dati Societari">Dati societari</a> | </li>
			<li><a href="#1" title="Trasparenza">Trasparenza</a> | </li>
			<li><a href="#1" title="Fogli Informativi">Fogli informativi</a> | </li>

			<li><a href="#1" title="Privacy">Privacy</a> | </li>
			<li><strong><a target="_blank" href="http://www.faresolidale.it/" title="Solidariet&agrave;">Solidariet&agrave;</a></strong></li>
			
		</ul>
		<p>&copy;2009 WeBank S.p.A. - P.IVA 13191900151 -  Gruppo Bipiemme</p>
</div>  </div>
</div>
<iframe style="visibility: hidden;z-index:1999;" id="ifr" src="/img/ret/pixel_trasp.gif" frameborder="3" height="10" scrolling="no" width="10"></iframe> 	
</body>
</html>
