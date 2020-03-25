<!--<div class="fpbanner"<?php if ($liv1 == "FI") {?> id="flashfinanziamenti" <?php if ($bank == "webank") { ?> onmouseout="thisMovie('flash_mutui').RipristinaBox();"<?php }?><?php }?>>-->
<?php
switch ($_GET['liv1']) {
	case "MH":
		if ($bank == "webank")
		{
			if ($ver != "ria" && $ver != "ria5" && $ver != "riaNonMigrato") ?>
			<!--<embed width="545" height="78" wmode="transparent" quality="high" bgcolor="#ffffff" name="promo" id="promo" style="" src="/wscmn/swf/ban_myhome2.swf?link0=http://www.google.it/search?hl=it|q=alpha&amp;target0=_blank&amp;link1=http://www.libero.it&amp;target1=_self" type="application/x-shockwave-flash"/>
			-->
		<div class="fpbanner" style="display:none;">
			<h1>Lorem ipsum dolor sit amet</h1>
			<p>Lorem amet ipsum dolor consectetur adipiscing elit summa cum laude. Lorem <strong>amet ipsum</strong> dolor consectetur adipiscing <strong>elit</strong> summa cum laude. Lorem amet ipsum dolor consectetur adipiscing elit summa cum laude. Lorem amet ipsum dolor consectetur adipiscing elit summa cum laude. Lorem amet ipsum dolor consectetur adipiscing elit summa cum laude. </p>
			<ul class="listafrec">
				<li><a title="#" href="#1">Lorem ipsum dolor sit amet, consectetuer</a></li>
				<li><a title="#" href="#1">Lorem ipsum dolor sit amet, consectetuer</a></li>
			</ul>
		</div>
		<!-- FINE BOX 1 -->
		
		<!-- FINE BOX 2 -->
		<!-- BOX 3 -->
		<div class="fpbanner" id="flashbanner1"><a href="#1" title="scopri"><img src="/img/ret/ban_nocarte.jpg"/></a></div>
		<script language="javascript" type="text/javascript">
   			var so = new SWFObject("/swf/ban_myhome2.swf?link0=http://www.google.it/search?hl=it|q=alpha&target0=_blank&link1=http://www.libero.it&target1=_self", "promo", "545", "78", "8", "#ffffff");
   			/*var so = new SWFObject("/wscmn/swf/swf-temporaneo.swf?link0=http://www.google.it/search?hl=it|q=alpha&target0=_blank&link1=http://www.libero.it&target1=_self", "promo", "192", "233", "8", "#ffffff");*/
  			so.addParam("wmode", "transparent");
			so.write("flashbanner1");
		</script>
		<!-- FINE BOX 3 -->	
			
			<?php
		}
		else
		{
			if ($ver != "ria" && $ver != "ria5" && $ver != "riaNonMigrato") ?><a href="#"><img src="/img/ret/ban_myhome.gif" title="Lorem ipsum dolor"></a><?php
		}
	break;
	
	case "FI":
		?>
		<!--
		<div class="fpbanner" id="flashfinanziamenti">
			<img id="" src="/img/ret/ban_finanziamenti.gif" usemap="#mappa" border="0" alt="" />
			<map id="" name="mappa">
				<area shape="rect" coords="22,43,172,88" href="#" alt="Mutui" title="Mutui" />
				<area shape="rect" coords="344,41,494,86" href="#" alt="Prestiti" title="Prestiti" />
			</map>		
		</div>
		<script type="text/javascript">			
			<?php if ($bank == "webank") { ?>
			var boxpromo = new  SWFObject("/swf/ban_finanziamenti.swf", "flash_mutui", "645", "278", "8", "#FFFFFF");  
			<?php } ?>
			 boxpromo.addParam("quality", "high");   
			 boxpromo.addParam("wmode", "transparent");   
			 boxpromo.addParam("allowScriptAccess","always");
			 boxpromo.addParam("FlashVars","link0=/index.html&target0=_self&link1=/index.html&target1=_self&link2=/index.html&target2=_self");
			 boxpromo.write("flashfinanziamenti");
		</script>
		-->
		<?php if ($bank != "webank") { ?>
			<div class="fpbanner">	
				<img id="" src="/img/ret/ban_finanziamenti.gif" usemap="#finanziamenti_mappa" border="0" alt="" />
				<map id="" name="finanziamenti_mappa">
					<area shape="rect" coords="22,43,172,88" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_il_mutuo_che_fa_per_te.php&liv0=6&liv1=0&liv2=0&liv3=0&responsive=y" alt="Mutui" title="Mutui" />
					<area shape="rect" coords="344,41,494,86" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_catalogo_preventivo_bpm.php&responsive=y&liv0=6&liv1=1&liv2=0" alt="Prestiti" title="Prestiti" />
				</map>	
			</div>
		<?php } ?>
		
		<?php if ($bank == "webank") { ?>
		<script type="text/javascript">
			// Attiva direttamente l'animazione della fp finanziamenti
			startfpFinAnimation();
		</script> 
		<div id ="fpFinAnimationWrapper"></div>
		<?php } ?>
	<?php
	break;
	
	case "AS":
		?>
		<img src="/img/ret/ban_assicurazioni.gif" title="Lorem ipsum dolor sit amet" usemap="#ban_assicurazioni_Map">
		<map name="ban_assicurazioni_Map">
			<area shape="rect" title="Bipiemme Vita" coords="201,13,337,65" href="#">
			<area shape="rect" title="Bipiemme Assicurazioni" coords="349,13,455,65" href="#">
		</map>
		<?php
	break;
	}
?>
<!-- </div> -->

