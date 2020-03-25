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
</head>
<style>
	#fixedtools {margin-top: -32px; margin-left:878px !important}
</style>
<body class="bgfp">
<div id="testa"> 
  <div id="page1">
   <div id="header"> 
	<!-- BLOCCO TESTATA -->
	
	<div id="headnero"> 
		<div id="ctnloghi">
			<a href="#"><img title="Webank.it" alt="Webank.it" src="/img/ret/logo_webank.gif"></a>
		</div>
		<div id="ctndx"> 
			<div class="esci">
				<a title="Help Center" class="helpcenter" href="#1"></a><a title="Numero verde" class="numeroverde" href="#1"></a>
				<a href="#1"><img class="logout" title="Esci" alt="Esci" src="/img/ret/btn_esci.gif"></a>
			</div>
			<div class="switch">
				<a title="Cliccando questo bottone, ti sarà richiesto di inserire la password di II livello" class="switcher" href="main.php?type=bus">Vai al profilo <span>CONSULTARE E DISPORRE</span></a>
			</div>
		</div>   
	</div>
	
	
	<!-- FINE BLOCCO TESTATA -->

	<!-- MENU PRIMO LIVELLO -->
	<div id="menufirst">
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice first" title="My Home" href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_my_ria.php&amp;liv1=MH"><img alt="" src="/img/ret/ico1bt_nav_priv_wbx_myhome_normal.gif"></a>
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice" title="Sportello" href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_banking.php&amp;liv1=BA"><img alt="" src="http://libreriewebank/img/ret/ico1bt_nav_priv_wbx_sportello_active.gif"></a>
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice" title="Carte" href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_carte.php&amp;liv1=CA"><img alt="" src="http://libreriewebank/img/ret/ico1bt_nav_priv_wbx_carte_normal.gif"></a>
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice" title="Trading" href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_trading.php&amp;liv1=TR"><img alt="" src="http://libreriewebank/img/ret//ico1bt_nav_priv_wbx_trading_normal.gif"></a>
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice" title="Investimenti" href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_investimenti.php&amp;liv1=RI"><img alt="" src="/img/ret/ico1bt_nav_priv_wbx_investimenti_normal.gif"></a>
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice" title="Finanziamenti" href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_finanz.php&amp;liv1=FI"><img alt="" src="/img/ret/ico1bt_nav_priv_wbx_finanziamenti_normal.gif"></a>
		<a onmouseout="menufirstout(this);" onmouseover="menufirstover(this);" class="menuvoice" title="Assicurazioni" href="/connect.php?page=str_fp_priv.php&amp;tpl=tpl_priv_fp_assic.php&amp;liv1=AS"><img alt="" src="http://libreriewebank/img/ret/ico1bt_nav_priv_wbx_assicurazioni_normal.gif"></a>
	</div>
	<!-- MENU SECONDO LIVELLO -->
	<div id="menusecond"></div>
				
</div>
	<?php virtual ("/librerie/include/commons/toolbox/tool_black_priv_001.php" ); ?>
    <!-- FINE CODICE-->
	<br class="clear" />
    <div id="content"> 
		<div id="fullpage">
			<style>
				#fullpage div.fullswfcontainer {margin: 0; width: 850px; height: 420px; overflow:visible; display:block; float:left;}
				#fullpage div.fullswfcontainer div.fullswf {margin: -34px 0 0 -3px; width: 868px; height: 440px; display:block; float:left; position: absolute;}
			</style>	
			<div class="fullswfcontainer">
				<div class="fullswf" id="fullswf"></div>
			</div>
			
			<script type="text/javascript" language="javascript">
				var so = new SWFObject("/wscmn/swf/holder_contotecnicisti.swf", "tecnicisti", "868", "440", "8", "#ffffff");
				so.addParam("wmode", "transparent");
				so.write("fullswf");
				</script>
		</div>
	</div>
<?php virtual ("/librerie/include/commons/footer/foot_black_002.php" ); ?>
</div>
<iframe style="visibility: hidden;z-index:1999;" id="ifr" src="/img/ret/pixel_trasp.gif" frameborder="3" height="10" scrolling="no" width="10"></iframe> 	
</body>
</html>