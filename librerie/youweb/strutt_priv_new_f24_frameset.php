<?php
	$pag = $_GET["pag"];
	$lev1 = $_GET["lev1"];
	$strutt = $_GET["strutt"];
	
	if (!isset($pag)) $pag = "placeholder";

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="it-IT" xml:lang="it-IT">
<head>
	<title>YouWeb - Pagamento F24</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<style type="text/css">
			body {
				margin: 0px;
				padding: 0px;
				border: 0px;
			}

			div#headerF24 {
				position: fixed;
				top: 0px;
				width: 100%;
				height: 113px;
			}

			/* iframe itself */
			div#headerF24 > iframe {
				display: block;
				width: 100%;
				/*height: 100%;*/
				border: none;
			}

			/* iframe's parent node */
			div#contentF24 {
 				position: absolute;
 				top: 85px; /* Change with Height of #header */
     			bottom: 0px;
				width: 100%;
			}

			/* iframe itself */
			div#contentF24 > iframe {
				display: block;
				width: 100%;
				height: 100%;
				
				border: none;
				
 				overflow: auto;
				overflow-y: scroll; 
 				overflow-x: hidden;
			}
	</style>

</head>
<body>
 	<div id="headerF24">
		<iframe src="/template/tpl_priv_new_f24_frameset_header.php?pag=pagamento_f24_modulo"></iframe>
	</div>
 	<div id="contentF24" style="-webkit-overflow-scrolling: touch;">
    	<iframe id="frF24Center" name="frF24Center" src="/template/tpl_priv_new_<?php print $pag; ?>.php" scrolling="yes" ></iframe>
	</div>
</body>
</html>