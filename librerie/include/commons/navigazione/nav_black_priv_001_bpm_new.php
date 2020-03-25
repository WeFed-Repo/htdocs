<img src="/img/ret/logo_print.gif" class="printlogo" alt=""/>
<?php	
	if ($bank != "webank" && $bank != "bpm")
	{
?>	
	<div id="headercontainer">
		<div class="tophead">
			<div class="header_ctr">
				<div  class="nome_header">Pierfrancesco Rossini</div>
				<div class="ico_header">
					<a class="ico01" href="#1" title="I miei dati"></a>
					<a class="ico02" href="#1" title="Alert"></a>
					<a class="ico03" href="#1" title="Sicurezza"></a>
					<br class="clear" />
				</div>
			</div>
			<div id="ctndx"> 
				<div class="esci">
					<a href="" class="esc">ESCI</a><br class="clear" />
					<a href="" class="cons">consultare e disporre</a>				
				</div>
			</div> 
		</div>
	</div>
	
	
<?php
	}
?>
<?php	
	if ($bank == "bpm")
	{
?>	
<div id="headercontainerFlat">
		<img src="/img/logo_print_new.gif" class="printlogoNew" alt=""/>
		<a href="#"><img src="/img/logo_bpm_flat2.png"  class="logo" alt="Banca Popolare di Milano"/></a>
		
		<div class="headerFloat">
			<ul class="headerRightTop">
				<li>
					<span><i class="icon-phone"></i>800 880 088</span>
				</li>
				<li>
					<a href="#"><span><i class="icon-ok"></i>Consultare e disporre</span></a>
				</li>
				<li>
					<a href="#"><span><i class="icon-off"></i>Esci</span></a>
				</li>
			</ul>
			<br class="clear" />
			<ul class="headerRightBottom">
				<li class="nameConto">
					<span>Massimiliano Rossi Vincenzi</span>
				</li>
				<li>
					<a href="#"><span><i class="icon-user"></i>I miei dati</span></a>
				</li>
				<li>
					<a href="#"><span><i class="icon-bell-alt"></i>Alert</span></a>
				</li>
				<li>
					<a href="#"><span><i class="icon-lock"></i>Sicurezza</span></a>
				</li>
			</ul>
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
			<img src="/img/ret/logo_webank2.gif" usemap="#logoimg" border="0" alt="Webank.it" />
			<map name="logoimg">
				<area shape="rect" coords="0,0,182,41" href="#" alt="Webank.it" title="Webank.it" />
			</map>        
		</div>
		<div class="header_ctr">
			<div class="nome_header">Pierfrancesco Rossini</div>
			<div class="ico_header">
				<a class="ico01" href="#1" title="I miei dati"></a>
				<a class="ico02" href="#1" title="Alert"></a>
				<a class="ico03" href="#1" title="Sicurezza"></a>
				<br class="clear" />
			</div>
		</div>
	    <div id="ctndx"> 
			<div class="esci">
				<a href="" class="esc">ESCI</a><br class="clear" />
				<a href="" class="cons">consultare e disporre</a>				
			</div>
	    </div> 
		<br class="clear" />
    </div>
<?php
	}
?>	
	
	<!-- FINE BLOCCO TESTATA -->

	<!-- MENU PRIMO LIVELLO da riportare poi le immagini con i nomi vecchi-->
	<?php if ($tpl=="tpl_priv_fp_investimenti.php" || $bank== "bpm") { ?>
	<style>
		/* Classi generiche */
		#menulev1 {width: 822pxpx;height:46px;list-style-type:none;margin:-13px 0 0;padding:0;}
		#menulev1 li {float:left;width:auto;margin:0;padding:0}
		#menulev1 a {float:left;height:33px;width:auto;padding:0 10px;color:#fff;text-decoration:none;text-transform:uppercase;margin: 13px 10px 0 0;line-height:33px;font-family:'FuturaBT-Book', Arial Narrow, Serif;font-size:12px;}
		#menulev1 a:hover {color:#66b0a3 !important}
		#menulev1 a.selected, #menulev1 a.selected:hover,#menulev1 a.selected.new {background-color:#fff;color:#666}
		#menulev1 a.new span{line-height:58px;background: transparent url(/img/ret/menu_btn_new.gif) no-repeat right top;height:46px;margin:-13px -23px 0 0;padding:0 23px 0 0;display:block;}
		#menulev1 a.new:hover span {cursor:pointer}
		#menulev1 a.new {background-color:#353535; margin-right:17px}
		#menulev1 a.selected.new span {background-image:none}
	</style>
	
	<ul id="menulev1">
		<li><a href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_my_ria.php&amp;liv1=MH"  id="nav_priv_wbx_myhome" title="My Home" class="<?php if ($liv1 == "MH") print "selected"; ?>"><span>My Home<span></a></li>
		<li><a href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_banking.php&amp;liv1=BA" id="nav_priv_wbx_sportello" title="Sportello" class="<?php if ($liv1 == "BA") print "selected"; ?> new"><span>Sportello</span></a></li>
		<?php if ($bank == "bpm") { ?>
		<li><a href="/connect.php?page=str_fp_priv.php&tpl=tpl_priv_fp_benfatto.php&liv1=RB" id="nav_priv_wbx_risparmio" title="Sportello" class="<?php if ($liv1 == "RB") print "selected"; ?>"><span>Risparmio ben fatto</span></a></li>
		<?php } ?> 
		<li><a href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_carte.php&amp;liv1=CA" id="nav_priv_wbx_carte" title="Carte" class="<?php if ($liv1 == "CA") print "selected";  ?>"><span>Carte</span></a></li>
		<li><a href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_trading.php&amp;liv1=TR" id="nav_priv_wbx_trading_wt" title="Trading" class="<?php if ($liv1 == "TR") print "selected"; ?>"><span>Trading</span></a></li>
		<li><a href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_investimenti.php&amp;liv1=RI" id="nav_priv_wbx_investimenti" title="Investimenti" class="<?php if ($liv1 == "RI") print "selected"; ?>"><span>Investimenti</span></a></li>
		<li><a href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_finanz.php&amp;liv1=FI" id="nav_priv_wbx_finanziamenti" title="Finanziamenti" class="<?php if ($liv1 == "FI") print "selected"; ?>"><span>Finanziamenti</span></a></li>
		<li><a href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_assic.php&amp;liv1=AS" id="nav_priv_wbx_assicurazioniWB"  title="Assicurazioni" class="<?php if ($liv1 == "AS") print "selected"; ?>"><span>Assicurazioni</span></a></li>
	</ul>
	
	<?php }

	else
	
	{
	?>
	
	<!-- VECCHIO -->
	<div id="menufirst">
		<a href="/connect.php?page=str_fp_priv_bpm_new.php&amp;tpl=tpl_priv_fp_my_ria.php&amp;liv1=MH" id="nav_priv_wbx_myhome" title="My Home" class="menuvoice first" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_myhome_<?php if ($liv1 == "MH") print "active"; else print "normal";?>.png" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv_bpm_new.php&amp;tpl=tpl_priv_fp_banking.php&amp;liv1=BA" id="nav_priv_wbx_sportello" title="Sportello" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_sportello_<?php if ($liv1 == "BA") print "active"; else print "normal";?>.png" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv_bpm_new.php&amp;tpl=tpl_priv_fp_carte.php&amp;liv1=CA" id="nav_priv_wbx_carte" title="Carte" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_carte_<?php if ($liv1 == "CA") print "active"; else print "normal";?>.png" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv_bpm_new.php&amp;tpl=tpl_priv_fp_trading.php&amp;liv1=TR" id="nav_priv_wbx_trading" title="Trading" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_trading_<?php if ($liv1 == "TR") print "active"; else print "normal";?>.png" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv_bpm_new.php&amp;tpl=tpl_priv_fp_investimenti.php&amp;liv1=RI" title="Investimenti" id="nav_priv_wbx_investimenti" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_investimenti_<?php if ($liv1 == "RI") print "active"; else print "normal";?>.png" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv_bpm_new.php&amp;tpl=tpl_priv_fp_finanz.php&amp;liv1=FI" title="Finanziamenti" id="nav_priv_wbx_finanziamenti" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_finanziamenti_<?php if ($liv1 == "FI") print "active"; else print "normal";?>.png" alt="" /></a>
		<a href="/connect.php?page=str_fp_priv_bpm_new.php&amp;tpl=tpl_priv_fp_assic.php&amp;liv1=AS" id="nav_priv_wbx_assicurazioni" title="Assicurazioni" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_assicurazioni_<?php if ($liv1 == "AS") print "active"; else print "normal";?>.png" alt="" /></a>
	</div>
	
	<?php 
	}
		?>
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
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close_flat.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<h1><?php print($trademenu_lev2[$i]);?></h1>
								<ul>
								<?php
								
									/* Variabili WB */
									switch ($i) {
										
										case 0:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=0">Portafoglio</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=1">Portafoglio virtuale</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=2">Dettaglio liquidit&agrave;</a></li>
										<?php
										break;
										
										case 1:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=0">Ricerca titoli evoluta</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=1">Compravendita</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=2">Situazione ordini</a></li>
										
										<?php
										
										break;
										
										case 2:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=0&tr4=0">Overview sui mercati</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=1">Azioni</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=2">Obbligazioni</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=3">Derivati</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=4">CW</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=5">Certificates</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=6">ETF plus</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=7">Watchlist</a></li>
										<?php
										break;
										
										case 3:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=0">Strumenti di analisi</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=1">Studi e ricerche</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=2">Alerts e notifiche</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=3">Tutorial, eventi formativi</a></li>
										<?php
										break;
										
										case 4:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=0">Costi e attivazioni</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=1">Modulistica</a></li>
										<?php
										break;
										
										case 5:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=0">Overview e offerta piattaforme</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_tradp.php&amp;liv1=TR&amp;tr2=<?php print ($i);?>&amp;tr3=1">Altri strumenti</a></li>
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
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close_flat.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<h1><?php print($investimenti_lev2[$i]);?></h1>
								<ul>
								<?php
								
									/* Variabili WB */
									switch ($i) {
										
										case 0:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_invp.php&amp;liv1=RI&ri2=0&ri3=0">Portafoglio</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_invp.php&amp;liv1=RI&ri2=0&ri3=1">Situazione ordini</a></li>
										<li><a href="#">Ipsum amet laude</a></li>
										<li><a href="#">Lorem dolor amet</a></li>
										<?php
										break;
										
										case 2:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_invp.php&amp;liv1=RI&ri2=2&ri3=0">Investire in fondi e sicav</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_invp.php&amp;liv1=RI&ri2=2&ri3=3">Ricerca guidata</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_invp.php&amp;liv1=RI&ri2=2&ri3=1">Ricerca e analisi</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_invp.php&amp;liv1=RI&ri2=2&ri3=2">Compravendita</a></li>
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
		
		//MY HOME (MH)
		case "MH":
				
			
			$ri2 = $_GET["ri2"];
			$ri3 = $_GET["ri3"];
			$ri4 = $_GET["ri4"];
			
			if (!isset($ri2))
			{
				$ri2 = 999;
			}
			
			$myhome_lev2 = array("Dati e impostazioni personali","Alert","Comunicazioni","Mobile","Acquisti online");
			
			?>
			<div id="menusecond">
			<?php 
				for ($i=0; $i < sizeof($myhome_lev2); $i++)
				{
				?><div class="level2voice<?php if ($ri2 == $i) print (" selected"); ?><?php if ($i==0) print(" first"); ?><?php if ($i==5) print(" last"); ?>"  onclick="menusecondclick(this);" onmouseleave="menusecondoutie(this);" onmouseout="menusecondoutmoz(this);" onmouseover="menusecondover (this);" >	
					<span><a href="javascript:;" ><?php print($myhome_lev2[$i]);?></a></span>
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close_flat.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<h1><?php print($myhome_lev2[$i]);?></h1>
								<ul>
								<?php
								
									/* Variabili WB */
									switch ($i) {
										
										case 0:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_invp.php&amp;liv1=RI&ri2=0&ri3=0">Portafoglio</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_invp.php&amp;liv1=RI&ri2=0&ri3=1">Situazione ordini</a></li>
										<li><a href="#">Ipsum amet laude</a></li>
										<li><a href="#">Lorem dolor amet</a></li>
										<?php
										break;
										
										case 2:
										?>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_invp.php&amp;liv1=RI&ri2=2&ri3=0">Investire in fondi e sicav</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_invp.php&amp;liv1=RI&ri2=2&ri3=3">Ricerca guidata</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_invp.php&amp;liv1=RI&ri2=2&ri3=1">Ricerca e analisi</a></li>
										<li><a href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_invp.php&amp;liv1=RI&ri2=2&ri3=2">Compravendita</a></li>
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
		
		//MENU' BEN FATTO
		case "RB":
		?>
		<div id="menusecond">
			<div class="level2voice" onmouseover="menusecondover(this);" onmouseout="menusecondoutmoz(this);" onmouseleave="menusecondoutie(this);" onclick="menusecondclick(this);">	
				<span><a href="javascript:;" >Gestione</a></span>
				<!-- MENU TERZO LIVELLO NORMALE -->
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close_flat.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<ul>
									<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_gestione.php&liv1=RB&liv2=1&liv3=1">Risparmio libero e obiettivi</a></li>
									<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_archivio_personali.php&liv1=RB&liv2=1&liv3=2&liv4=1">Archivio</a></li>
									<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_trasferisci.php&liv1=RB&liv1=RB&liv2=1&liv3=3&liv4=1">Trasferimenti</a></li>
								</ul>
							</div>
							<div class="dx">
								<h1>Dolor sit amet consectetur</h1>
								<ul>
									<li><a href="#">Ipsum dolor sit amet</a></li>
									<li><a href="#">Dolor sit amet</a></li>
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
			
			<div class="level2voice" onmouseover="menusecondover(this);" onmouseout="menusecondoutmoz(this);" onmouseleave="menusecondoutie(this);" onclick="menusecondclick(this);">	
				<span><a href="javascript:;" >Nuovo obiettivo</a></span>
				<!-- MENU TERZO LIVELLO NORMALE -->
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close_flat.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<ul>
									<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_crea.php&liv1=RB&liv1=RB&liv2=2&liv3=1&liv4=1">Crea obiettivo</a></li>
									<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_partecipa.php&liv1=RB&liv1=RB&liv2=2&liv3=2&liv4=1">Partecipa ad un obiettivo</a></li>
								</ul>
							</div>
							<div class="dx">
								<h1>Dolor sit amet consectetur</h1>
								<ul>
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
			
			
			
			<div class="level2voice" onmouseover="menusecondover(this);" onmouseout="menusecondoutmoz(this);" onmouseleave="menusecondoutie(this);" onclick="menusecondclick(this);">	
				<span><a href="javascript:;" >Promozioni in corso</a></span>
				<!-- MENU TERZO LIVELLO NORMALE -->
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close_flat.gif" alt="" /></a></div>
						<div class="thirdlevelbody">
							<div class="sx">
								<ul>
									<li><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_bazak.php&liv1=RB&liv1=RB&liv2=3&liv3=1">Bazak</a></li>
								</ul>
							</div>
							<div class="dx">
								<h1>Dolor sit amet consectetur</h1>
								<ul>
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
		
		
		//MENU' BASE
		default:
			?>
			<div id="menusecond">
				<div class="level2voice first" onmouseover="menusecondover(this);" onmouseout="menusecondoutmoz(this);" onmouseleave="menusecondoutie(this);" onclick="menusecondclick(this);">	
					<span><a href="javascript:;" ><?php print $liv1."-";?>Normal</a></span>
					<!-- MENU TERZO LIVELLO NORMALE -->
					<div class="menuthird"><div class="menuthirdshadow"></div>
						<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close_flat.gif" alt="" /></a></div>
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
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close_flat.gif" alt="" /></a></div>
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
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close_flat.gif" alt="" /></a></div>
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
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close_flat.gif" alt="" /></a></div>
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
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close_flat.gif" alt="" /></a></div>
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
						<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close_flat.gif" alt="" /></a></div>
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