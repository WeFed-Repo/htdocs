<?php
include("../core/base.php");

$tpl = $_GET["tpl"];
?><!DOCTYPE html>
<html lang="it">
	<head>
		<?php
		$site = 'webank';

		include("../include/struttura/head_meta.php");
		include("../include/struttura/head_css.php");
		include("../include/struttura/head_js.php");
		?>
		
	</head>
	<body class="webview<?php if ($navIndex[0] == "0" && sizeof($navIndex)==1) print " myhome" ;?> loading" style="display:none">
		<!-- CONTENT (dinamico a seconda del tipo di pagina da visualizzare - front page, pagina standard, pagina estesa) -->
		<div id="main">
			<div class="wrapper">
				<div class="container-fluid">
					<?php

						if ($tpl != "")
						{ 
						$structure = "full";
						virtual("strutt_webank_navigazione.php");
						}
					?>
				</div>
			</div>
		</div>
		<!-- /CONTENT -->
	</body>
</html>
