<div id="header"> 
	<!-- BLOCCO TESTATA -->
	  
	<div id="headnero"> 
	    <div id="ctnloghi">
			<img src="/img/ret/logo_webank_business2.gif" usemap="#logoimg" border="0" alt="Webank.it Business" />
			<map name="logoimg">
				<area shape="rect" coords="0,0,182,41" href="#" alt="Webank.it Business" title="Webank.it Business" />
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
				<a href="" class="esc">ESCI</a>				
			</div>
	    </div> 
		<br class="clear" />
    </div>
	<!-- FINE BLOCCO TESTATA -->

	<!-- MENU PRIMO LIVELLO -->
	<div id="menufirst">
		<a href="?page=str_fp_priv.php&tpl=tpl_priv_fp_my_noria.php&customer=bus&liv1=MH" title="My Home" class="menuvoice first" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_myhome_<?php if ($liv1 == "MH") print "active"; else print "normal";?>.gif" alt="" /></a>
		<a href="?page=str_fp_priv.php&tpl=tpl_priv_fp_banking.php&customer=bus&liv1=BA" title="Sportello" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_sportello_<?php if ($liv1 == "BA") print "active"; else print "normal";?>.gif" alt="" /></a>
		<a href="?page=str_fp_priv.php&tpl=tpl_priv_fp_incassi.php&customer=bus&liv1=IN" title="Incassi" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_incassi_<?php if ($liv1 == "IN") print "active"; else print "normal";?>.gif" alt="" /></a>
		<a href="?page=str_fp_priv.php&tpl=tpl_priv_fp_carte.php&customer=bus&liv1=CA" title="Carte" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_carte_<?php if ($liv1 == "CA") print "active"; else print "normal";?>.gif" alt="" /></a>
		<a href="?page=str_fp_priv.php&tpl=tpl_priv_fp_anagrafiche.php&customer=bus&liv1=AN" title="Anagrafiche" class="menuvoice" onmouseover="menufirstover(this);" onmouseout="menufirstout(this);"><img src="/img/ret/ico1bt_nav_priv_wbx_anagrafiche_<?php if ($liv1 == "AN") print "active"; else print "normal";?>.gif" alt="" /></a>
	</div>
	<!-- MENU SECONDO LIVELLO -->
	<div id="menusecond">
		<div class="level2voice first" onmouseover="menusecondover(this);" onmouseout="menusecondoutmoz(this);" onmouseleave="menusecondoutie(this);" onclick="menusecondclick(this);">	
			<span><a href="javascript:;" ><?php print $liv1."-";?>Normal</a></span>
			<!-- MENU TERZO LIVELLO NORMALE -->
			<div class="menuthird"><div class="menuthirdshadow"></div>
				<div class="thirdlevelarrowbox"><img src="/img/ret/str_menulevel3_arrow.gif" alt="" /></div>
				<div class="thirdleveltop"><a href="javascript:;" onclick="javascript: menuthirdlevelclose(this);"><img src="/img/ret/ico1gr_menulevel3_close.gif" alt="" /></a></div>
				<div class="thirdlevelbody">
					<div class="sx">
						<h1>Lorem ipsum dolor</h1>
						<ul>
							<li><a href="#">Ipsum dolor sit amet</a> <span>NEW!</span></li>
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
							<a href="#"><img src="/img/ret/ico1gr_menulevel3_gear.gif" alt="" /></a><p>Consectetur color amet <br />elit <a href="#">adipiscing</a>amet</p>
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
						<h1>Lorem ipsum dolor</h1>
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
		
		<div class="level2voice last" onmouseover="menusecondover (this);"  onmouseout="menusecondoutmoz(this);" onmouseleave="menusecondoutie(this);" onclick="menusecondclick(this);">	
			<span><a href="javascript:;" ><?php print $liv1."-";?>Extended</a></span>
			<!-- MENU TERZO LIVELLO ESTESO-->
			<div class="menuthird extended">
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
							<a href="#"><img src="/img/ret/ico1gr_menulevel3_gear.gif" alt="" /></a><p>Consectetur color amet <br />elit <a href="#">adipiscing</a>amet</p>
						</div>
					</div>
				</div>
				<div class="thirdlevelbottom"></div>
			</div>
			<!-- FINE MENU TERZO LIVELLO ESTESO-->
		</div>
		
	</div>
</div>