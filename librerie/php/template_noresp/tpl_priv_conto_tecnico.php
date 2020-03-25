<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
<title>LIBRERIE Webank</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="it" />
<meta name="script" http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="script" http-equiv="Content-Style-Type" content="text/css" />
<?php 
	virtual ("/wscmn/css/include_css_priv.html");
	virtual ("/js/include_js_priv.html");
?>
<style>

</style>
<script type="text/javascript">

</script>
</head>
<body class="bgfp">
<div id="testa"> 
  <div id="page1">
   <div id="header"> 
	<!-- BLOCCO TESTATA -->
	
	<div id="headnero"> 
	    <div id="ctnloghi">
			<img border="0" alt="Webank.it" usemap="#logoimg" src="/img/ret/logo_webank2.gif">
			<map name="logoimg">
				<area title="Webank.it" alt="Webank.it" href="#" coords="0,0,182,41" shape="rect">
			</map>        
		</div>
		<div class="header_ctr">
			<div class="nome_header">Pierfrancesco Rossini</div>
			<div class="ico_header">
				<a title="I miei dati" href="#1" class="ico01"></a>
				<a title="Alert" href="#1" class="ico02"></a>
				<a title="Sicurezza" href="#1" class="ico03"></a>
				<br class="clear">
			</div>
		</div>
	    <div id="ctndx"> 
			<div class="esci">
				<a class="esc" href="">ESCI</a><br class="clear">
			</div>
	    </div> 
		<br class="clear">
    </div>
	
	
	<!-- FINE BLOCCO TESTATA -->

	<!-- MENU PRIMO LIVELLO -->
	<div id="menufirst">
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice first" title="My Home" href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_my_ria.php&amp;liv1=MH"><img alt="" src="/img/ret/ico1bt_nav_priv_wbx_myhome_normal.gif"></a>
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice" title="Sportello" href="/connect.php?page=tpl_priv_conto_tecnico.php&content=sportello_bolli"><img alt="" src="http://libreriewebank/img/ret/ico1bt_nav_priv_wbx_sportello<?php if ($_GET["content"]=="sportello_bolli") echo("_active"); else echo("_normal"); ?>.gif"></a>
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice" title="Carte" href="/connect.php?page=tpl_priv_conto_tecnico.php&content=carte"><img alt="" src="http://libreriewebank/img/ret/ico1bt_nav_priv_wbx_carte<?php if ($_GET["content"]=="carte") echo("_active"); else echo("_normal"); ?>.gif"></a>
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice" title="Trading" href="#"><img alt="" src="http://libreriewebank/img/ret//ico1bt_nav_priv_wbx_trading_normal.gif"></a>
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice" title="Investimenti" href="#"><img alt="" src="/img/ret/ico1bt_nav_priv_wbx_investimenti_normal.gif"></a>
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice" title="Finanziamenti" href="/connect.php?page=tpl_priv_conto_tecnico.php&content=finanziamenti"><img alt="" src="/img/ret/ico1bt_nav_priv_wbx_finanziamenti<?php if ($_GET["content"]=="finanziamenti") echo("_active"); else echo("_normal"); ?>.gif"></a>
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice" title="Assicurazioni" href="/connect.php?page=tpl_priv_conto_tecnico.php&content=assicurazioni"><img alt="" src="http://libreriewebank/img/ret/ico1bt_nav_priv_wbx_assicurazioni<?php if ($_GET["content"]=="assicurazioni") echo("_active"); else echo("_normal"); ?>.gif"></a>
	</div>
	<!-- MENU SECONDO LIVELLO -->
	<div id="menusecond"></div>

	
</div>
	<?php //virtual ("/librerie/include/commons/toolbox/tool_black_priv_001.php" ); ?>
    <!-- FINE CODICE-->
	<br class="clear" />
    <div id="content"> 
		<div id="fullpage">
			<div id="ct">
				<div class="topper"></div>
				<?php virtual ("/librerie/php/ct_fp_".$_GET['content'].".php" );?>
			</div>
		</div>
	</div>
<?php virtual ("/librerie/include/commons/footer/foot_black_002.php" ); ?>
</div>
<iframe style="visibility: hidden;z-index:1999;" id="ifr" src="/img/ret/pixel_trasp.gif" frameborder="3" height="10" scrolling="no" width="10"></iframe> 	
</body>
</html>