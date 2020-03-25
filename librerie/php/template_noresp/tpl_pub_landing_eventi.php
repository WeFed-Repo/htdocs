<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Banca online WeBank</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>  
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="SHORTCUT ICON" href="favicon.ico"/>
<link rel="stylesheet" href="/css/pub_landing_eventi.css" />	 
<script type="text/javascript" src="/js/pub_landing_eventi.js"></script>	
</head>
<?php
	$movie = $_GET["movie"];
?>
<body>
	<div id="main">
		<h1><span>Webank</span></h1>
		<div id="splayer">
			<embed src="<?php print $movie; ?>.mov" width="500" height="303" autoplay="true" scale="tofit" controller="true" pluginspage="http://www.apple.com/quicktime/download/"></embed>
		</div>
		<script type="text/javascript" defer="defer">		  
			var flashobject = new SWFObject("/swf/videoplayer_500_281.swf", "videoPromoWow", "500", "303", "9", "#121212");
			flashobject.addParam("quality", "high");
			flashobject.addParam("salign", "tl");			
			flashobject.addParam("wmode", "opaque");
			flashobject.addParam("allowfullscreen","true");
			flashobject.addParam("FlashVars","videoLink=<?php print $movie; ?>.flv");
			flashobject.write("splayer");
		</script>
		<!-- FINE HEADER -->
		<p>© 2009 Webank S.p.A. - P.IVA 13191900151 - Gruppo Bipiemme</p>
		<!-- FINE FOOTER -->
		<!-- FINE CONTENITORE PRINCIPALE -->
	</div>
</body>
</html>