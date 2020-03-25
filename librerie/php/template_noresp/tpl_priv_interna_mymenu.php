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
<!-- FINE CODICE-->
</head>
<body class="bgfp">
<div id="testa"> 
  <div id="page1">
    <?php 
	if ($customer != "bus") 
				virtual("/librerie/include/commons/navigazione/nav_black_priv_001.php");
			else 
				virtual("/librerie/include/commons/navigazione/nav_wb_priv_001_bus.php");
	?>
	<?php virtual ("/librerie/include/commons/toolbox/tool_black_priv_001.php" ); ?>
    <!-- FINE CODICE-->
	<br class="clear" />
    <div id="content"> 
		<div id="fullpage">
			<h1>My menu</h1>
			<p>Lorem ipsum dolor sit amet consectetur <strong>adipiscing elit</strong>. Ipsum loret.</p>
			<?php virtual ("/librerie/include/commons/boxeditoriali/box_black_priv_120.html" ); ?>
 	</div>
<?php virtual ("/librerie/include/commons/footer/foot_black_002.php" ); ?>
</div>
<iframe style="visibility: hidden;z-index:1999;" id="ifr" src="/img/ret/pixel_trasp.gif" frameborder="3" height="10" scrolling="no" width="10"></iframe> 	
</body>
</html>