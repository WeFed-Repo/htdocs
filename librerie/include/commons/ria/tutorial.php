<?php
	$section= $_GET ['section'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Webank Money Desk - Guida all'utilizzo</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<script src="/wscmn/js/ajax_low.js" type="text/javascript"></script>		
		<script src="/wscmn/js/ret/priv_utilities.js" type="text/javascript"></script>
	</head>
	<body style="background: #000000; text-align: center; margin:0; padding:0">
		<div id="myContent">
			<h1>Alternative content</h1>
			<p>
				<a href="http://www.adobe.com/go/getflashplayer">
				<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" border="0" /></a></p>             
		</div>
		<script language="javascript" type="text/javascript">
			var so = new SWFObject("/wscmn/swf/tutorial_webank.swf", "myContent", "850", "500", "9.0.0", "");
			so.addParam("wmode", "opaque");
			/*so.useExpressInstall("/wscmn/swf/expressinstall.swf");*/
			so.addVariable("posizione", "sezione<?php print $section;?>");
			so.write("myContent");
		</script>
	</body>
</html>