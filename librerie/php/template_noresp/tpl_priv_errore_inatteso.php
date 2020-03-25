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

<?php
	
	if ($bank=="webank")
	{
		$homelink="/webankpri/wbOnetoone/myHome.do";
	}
	else
	{
		if ($customer=="bus")
		{
			$homelink="/imprpri/wbOnetoone/HomePrivata.do";
		}
		else
		{
			$homelink="/pri/wbOnetoone/myHome.do";
		}
	
	}
	
?>
</head>
<body class="bgfp">
<div id="testa"> 
  <div id="page1">
	<!-- DA UI -->
    <img src="/img/ret/logo_print.gif" class="printlogo">
<div id="header"> 
	<!-- BLOCCO TESTATA -->
	<?php
		if ($bank == "webank")
		{
	?>
	<div id="headnero"> 
		<div id="ctnloghi">
			<a href="#"><img src="/img/ret/logo_webank.gif" alt="Webank.it" title="Webank.it" /></a>
		</div>
	</div>
	<?php
		}
		else
		{
			?>
			<div id="headercontainer">
				<div class="tophead">
				</div>
			</div>
			<?php
		}
	?>
</div>	
<br class="clear" />
    <div id="content"> 
		<div id="crisi" style="margin-top:35px">
			<div class="boxalert">
				<div class="boxalertimage">
					<img src="/wscmn/img/ret/img_or_crisi_error.gif">
				</div>
				<div class="boxalertdescription">
					<span class="boxalerttitle">Si &egrave; verificato un errore inatteso</span>
					<p>
						Clicca <a href="<?php print $homelink; ?>"><strong>qui</strong></a> per ritornare alla home page.
					</p>
				</div>
			</div>
		</div>
	<div id="footer">
		<ul>
		</ul>
</div>
</div>
</div>
</div>
<iframe style="visibility: hidden;z-index:1999;" id="ifr" src="/img/ret/pixel_trasp.gif" frameborder="3" height="10" scrolling="no" width="10"></iframe> 	
</body>
</html>