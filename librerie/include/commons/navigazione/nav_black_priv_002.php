<img src="/img/ret/logo_print.gif" class="printlogo">
<?php	
	if ($bank != "webank")
	{
?>	
	<div id="headercontainer">
		<div class="tophead">
			<div id="ctndx"> 
				<div class="esci">
					<a title="Numero verde" class="numeroverde2" href="#1">800.880.088</a><a title="Help Center" class="helpcenter2" href="#1">Aiuto</a>
					<a href="#1"><img class="logout" title="Esci" alt="Esci" src="/img/ret/btn_esci.gif"/></a>
				</div>
			<div class="switch2">
				<a href="#" class="switcher" title="Cliccando questo bottone, ti sar&agrave; richiesto di inserire la password di II livello">Vai al profilo <span>Consultare e disporre</span></a>
			</div>
			</div>
		</div>
	</div>
<?php
	}
?>
<div id="header"> 
	<!-- BLOCCO TESTATA -->
<?php	
	if ($bank == "webank" )
	{
?>	
	<div id="headnero">
		<div id="ctnloghi">
			<a href="#"><img src="/img/ret/logo_webank.gif" alt="Webank.it" title="Webank.it" /></a>
		</div>
		<div id="c2mToolbar"></div>
		<div class="assivirt" style="float:left;padding:30px 0 0 0;"><a href="javascript:;" onclick="vaOpen()" title="Paolo" style="color:#fff">Paolo</a></div>
		
		<div id="ctndx"> 
			<div class="esci">
				<a href="#1" class="numeroverde2" title="Numero verde">800.060.070</a><a href="#1" class="helpcenter2" title="Help Center">Aiuto</a>
				<a href="#1"><img src="/img/ret/btn_esci.gif" alt="Esci" title="Esci" class="logout" /></a>
			</div>
			<div class="switch">
				<a href="main.php?type=bus" class="switcher" title="Cliccando questo bottone, ti sar&agrave; richiesto di inserire la password di II livello">Vai al profilo <span>CONSULTARE E DISPORRE</span></a>
			</div>
		</div>   
	</div>
<?php
	}
?>	
	
	<!-- FINE BLOCCO TESTATA -->

	<!-- MENU PRIMO LIVELLO -->
	<div id="menufirst">
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_my_ria.php&liv1=MH" title="My Home" class="menuvoice first" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_myhome_<?php if ($liv1 == "MH") print "active"; else print "normal";?>.gif" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_banking.php&liv1=BA" title="Sportello" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_sportello_<?php if ($liv1 == "BA") print "active"; else print "normal";?>.gif" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_carte.php&liv1=CA" title="Carte" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_carte_<?php if ($liv1 == "CA") print "active"; else print "normal";?>.gif" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_trading.php&liv1=TR" title="Trading" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret//ico1bt_nav_priv_wbx_trading_<?php if ($liv1 == "TR") print "active"; else print "normal";?>.gif" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_investimenti.php&liv1=RI" title="Investimenti" id="nav_priv_wbx_investimenti" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_investimenti_<?php if ($liv1 == "RI") print "active"; else print "normal";?>.gif" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_finanz.php&liv1=FI" title="Finanziamenti" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_finanziamenti_<?php if ($liv1 == "FI") print "active"; else print "normal";?>.gif" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_assic.php&liv1=AS" id="nav_priv_wbx_assicurazioniWB" title="Assicurazioni" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_assicurazioni_<?php if ($liv1 == "AS") print "active"; else print "normal";?>.gif" alt="" /></a>
	</div>
	<!-- MENU SECONDO LIVELLO -->
	<?php
	
	$liv1 = isset($_GET["liv1"])? $_GET["liv1"] : '';
	switch ($liv1)
	
	{
		//TRADING
		case "TR":
			$tr2 = isset($_GET["tr2"])? $_GET["tr2"] : 999;
			$tr3 = isset($_GET["tr3"])? $_GET["tr3"] : 999;
			$tr4 = isset($_GET["tr4"])? $_GET["tr4"] : 999;
			
			$trademenu_lev2 = array("Portafoglio","Compravendita","Quotazioni e mercati","Analisi, studi e educational","Costi e attivazione servizi","Piattaforme evolute");
			?>
			<div id="menusecond">
			<?php 
				for ($i=0; $i < sizeof($trademenu_lev2); $i++)
				{
			?><div class="level2voice<?php if ($tr2 == $i) print (" selected"); ?><?php if ($i==0) print(" first"); ?><?php if ($i==5) print(" last"); ?>"  onclick="menusecondclick(this);" onmouseleave="menusecondoutie(this);" onmouseout="menusecondoutmoz(this);" onmouseover="menusecondover (this);" >	
					<span><a href="javascript:;" ><?php print($trademenu_lev2[$i]);?></a></span>
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<h1><?php print($trademenu_lev2[$i]);?></h1>
								<ul>
								<?php
								
									/* Variabili WB */
									switch ($i) {
										
										case 0:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=0">Portafoglio</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=1">Portafoglio virtuale</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=2">Dettaglio liquidit&agrave;</a></li>
										<?php
										break;
										
										case 1:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=0">Ricerca titoli evoluta</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=1">Compravendita</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=2">Situazione ordini</a></li>
										
										<?php
										
										break;
										
										case 2:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=0&tr4=0">Overview sui mercati</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=1">Azioni</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=2">Obbligazioni</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=3">Derivati</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=4">CW</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=5">Certificates</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=6">ETF plus</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=7">Watchlist</a></li>
										<?php
										break;
										
										case 3:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=0">Strumenti di analisi</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=1">Studi e ricerche</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=2">Alerts e notifiche</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=3">Tutorial, eventi formativi</a></li>
										<?php
										break;
										
										case 4:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=0">Costi e attivazioni</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=1">Modulistica</a></li>
										<?php
										break;
										
										case 5:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=0">Overview e offerta piattaforme</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_tradp.php&liv1=TR&tr2=<?php print ($i);?>&tr3=1">Altri strumenti</a></li>
										<?php
										break;
									}
									?>	
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
				<?php
				}
				?>
			</div>
			<?php
		break;
		
		//INVESTIMENTI (RI)
		case "RI":
				
			
			$ri2 = $_GET["ri2"];
			$ri3 = $_GET["ri3"];
			$ri4 = $_GET["ri4"];
			
			if (!isset($ri2))
			{
				$ri2 = 999;
			}
			
			$investimenti_lev2 = array("I miei investimenti","Gestione deposito","Fondi e sicav","Collocamenti","Altri prodotti");
			
			?>
			<div id="menusecond">
			<?php 
				for ($i=0; $i < sizeof($investimenti_lev2); $i++)
				{
			?><div class="level2voice<?php if ($ri2 == $i) print (" selected"); ?><?php if ($i==0) print(" first"); ?><?php if ($i==5) print(" last"); ?>"  onclick="menusecondclick(this);" onmouseleave="menusecondoutie(this);" onmouseout="menusecondoutmoz(this);" onmouseover="menusecondover (this);" >	
					<span><a href="javascript:;" ><?php print($investimenti_lev2[$i]);?></a></span>
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<h1><?php print($investimenti_lev2[$i]);?></h1>
								<ul>
								<?php
								
									/* Variabili WB */
									switch ($i) {
										
										case 0:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=0&ri3=0">Portafoglio</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=0&ri3=1">Situazione ordini</a></li>
										<li><a href="#">Ipsum amet laude</a></li>
										<li><a href="#">Lorem dolor amet</a></li>
										<?php
										break;
										
										case 2:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=0">Investire in fondi e sicav</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=3">Ricerca guidata</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=1">Ricerca e analisi</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=2">Compravendita</a></li>
										<?php
										break;
										
										default:
										?>
										<li><a href="#">Lorem ipsum</a></li>
										<li><a href="#">Dolor lorem ipsum</a></li>
										<li><a href="#">Ipsum amet laude</a></li>
										<li><a href="#">Lorem dolor amet</a></li>
										<?php
										
										break;
									}
									?>	
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
				<?php
				}
				?>
			</div>
			<?php
		break;
		
		
		
		
		//MENU' BASE
		default:
			?>
			<div id="menusecond">
				<div class="level2voice first" onmouseover="menusecondover(this);" onmouseout="menusecondoutmoz(this);" onmouseleave="menusecondoutie(this);" onclick="menusecondclick(this);">	
					<span><a href="javascript:;" ><?php print $liv1."-";?>Normal</a></span>
					<!-- MENU TERZO LIVELLO NORMALE -->
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<ul>
									<li><a href="#">Ipsum dolor sit amet <span>&nbsp;</span></a></li>
									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Consectetur adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Dolor amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>
								</ul>
							</div>
						<div class="dx">
								<h1>Dolor sit amet consectetur</h1>
								<ul>
									<li><a href="#">Ipsum dolor sit amet</a></li>
									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Consectetur adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Consectetur adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Dolor amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>
								</ul>
							</div>
							<div class="footer">
								<div class="sx">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_order.gif" alt="" /></a><p>Lorem ipsum dolor sit amet<br />Consectetur <a href="#">adipiscing elit</a></p>
								</div>
								<div class="dx">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_star.gif" alt="" /></a><p>Dolor sit amet<br />Consectetur <a href="#">adipiscing elit</a></p>
								</div>
							</div>
						</div>
						<div class="thirdlevelbottom"></div>
					</div>
					<!-- FINE MENU TERZO LIVELLO  NORMALE-->
				</div>
				
				<div class="level2voice" onmouseover="menusecondover (this);"  onmouseout="menusecondoutmoz(this);" onmouseleave="menusecondoutie(this);" onclick="menusecondclick(this);">	
					<span><a href="javascript:;" ><?php print $liv1."-";?>Normal my menu</a></span>
					<!-- MENU TERZO LIVELLO NORMALE -->
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<h1>Lorem ipsum dolor</h1>
								<ul>
									<li><a href="#">Ipsum dolor sit amet</a></li>
									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Consectetur adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Dolor amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>
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
					<!-- FINE MENU TERZO LIVELLO  NORMALE-->
				</div>
				<div class="level2voice" onmouseover="menusecondover (this);"  onmouseout="menusecondoutmoz(this);" onmouseleave="menusecondoutie(this);" onclick="menusecondclick(this);">	
					<span><a href="javascript:;" ><?php print $liv1."-";?>Single column</a></span>
					<!-- MENU TERZO LIVELLO NORMALE -->
					<div class="menuthird small"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<ul>
									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Consectetur adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Dolor amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>
								</ul>
							</div>
							<div class="footer">
								<div class="sx">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_star.gif" alt="" /></a><p>Lorem ipsum dolor sit amet<br />Consectetur <a href="#">adipiscing elit</a></p>
								</div>
							</div>
						</div>
						<div class="thirdlevelbottom"></div>
					</div>
					<!-- FINE MENU TERZO LIVELLO  NORMALE-->
				</div>
				
				<div class="level2voice" onmouseover="menusecondover (this);"  onmouseout="menusecondoutmoz(this);" onmouseleave="menusecondoutie(this);" onclick="menusecondclick(this);">	
					<span><a href="javascript:;" ><?php print $liv1."-";?>Extended</a></span>
					<!-- MENU TERZO LIVELLO ESTESO-->
					<div class="menuthird extended">
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<ul>
									<li><a href="#">Ipsum dolor sit amet</a></li>
									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Consectetur adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Dolor amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>
								</ul>
							</div>
						<div class="dx">
								<h1>Dolor sit amet consectetur</h1>
								<ul>
									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>
									<li><a href="#">Consectetur adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Dolor amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>
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
								<div class="sx">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_order.gif" alt="" /></a><p>Lorem ipsum dolor sit amet<br />Consectetur <a href="#">adipiscing elit</a></p>
								</div>
								<div class="dx">&nbsp;</div>
								<div class="mymenu">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_gear.gif" alt="" /></a><p class="middle"><a href="#">Modifica My Menu</a></p>
								</div>
							</div>
						</div>
						<div class="thirdlevelbottom"></div>
					</div>
					<!-- FINE MENU TERZO LIVELLO ESTESO-->
				</div>
				
				<div class="level2voice" onmouseover="menusecondover (this);"  onmouseout="menusecondoutmoz(this);" onmouseleave="menusecondoutie(this);" onclick="menusecondclick(this);">	
					<span><a href="javascript:;" ><?php print $liv1."-";?>Lorem ipsum dolor</a></span>
					<!-- MENU TERZO LIVELLO NORMALE -->
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<ul>
									<li><a href="#">Ipsum dolor sit amet</a></li>
									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Consectetur adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Dolor amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>
								</ul>
							</div>
						<div class="dx">
								<h1>Dolor sit amet consectetur</h1>
								<ul>
									<li><a href="#">Ipsum dolor sit amet</a></li>
									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Consectetur adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Dolor amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>
								</ul>
							</div>
							<div class="footer">
								<div class="sx">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_order.gif" alt="" /></a><p>Lorem ipsum dolor sit amet<br />Consectetur <a href="#">adipiscing elit</a></p>
								</div>
								<div class="dx">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_star.gif" alt="" /></a><p>Dolor sit amet<br />Consectetur <a href="#">adipiscing elit</a></p>
								</div>
							</div>
						
						</div>
						<div class="thirdlevelbottom"></div>
					</div>
					<!-- FINE MENU TERZO LIVELLO  NORMALE-->
				</div>
				<div class="level2voice last" onmouseover="menusecondover (this);"  onmouseout="menusecondoutmoz(this);" onmouseleave="menusecondoutie(this);" onclick="menusecondclick(this);">	
					<span><a href="javascript:;" ><?php print $liv1."-";?>Lorem</a></span>
					<!-- MENU TERZO LIVELLO NORMALE -->
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<ul>
									<li><a href="#">Consectetur adipiscing elit amet</a></li>
									<li><a href="#">Amet</a></li>
									<li><a href="#">Ipsum dolor</a></li>
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Dolor amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>
								</ul>
							</div>
						<div class="dx">
								<h1>Dolor sit amet consectetur</h1>
								<ul>
									<li><a href="#">Ipsum dolor sit amet</a></li>
									<li><a href="#">Dolor sit amet</a></li>
									<li><a href="#">Consectetur adipiscing elit amet</a></li>
									<li><a href="#">Dolor amet</a></li>
									<li><a href="#">Ipsum dolor sit amet</a></li>
								</ul>
							</div>
							<div class="footer">
								<div class="sx">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_order.gif" alt="" /></a><p>Lorem ipsum dolor sit amet<br />Consectetur <a href="#">adipiscing elit</a></p>
								</div>
								<div class="dx">
									<a href="#"><img src="/img/ret/ico1gr_menulevel3_star.gif" alt="" /></a><p>Dolor sit amet<br />Consectetur <a href="#">adipiscing elit</a></p>
								</div>
							</div>
						
						</div>
						<div class="thirdlevelbottom"></div>
					</div>
					<!-- FINE MENU TERZO LIVELLO  NORMALE-->
				</div>
			</div>
			<?php
		break;
	
	}
	?>
	
</div>