<!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Librerie YouBusiness</title>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link href="./librerie/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" >
		<link href="./librerie/css/librerie.css" rel="stylesheet" type="text/css" media="all" >
		<script type="text/javascript" language="javascript" src="./librerie/js/jquery.min.js"></script>
		<script type="text/javascript" language="javascript" src="./librerie/js/bootstrap.min.js"></script>
	</head>
	<body>
		<header class="librerie">
			<div class="wrapper">
				<h1>Librerie YouBusiness</h1>
			</div>
		</header>
		<div id="main" class="librerie">
			<div class="wrapper">
				<div class="row">
					<div class="col-sm-4">
						<h2>Struttura</h2>
						<ul class="librerie-lista">
							<li><a href="strutt_priv.php?tpl=tpl_placeholder.php">Struttura</a></li>
							<li data-noexport="true"><a href="strutt_priv_old.php?tpl=tpl_placeholder.php" data-noexport="true">Struttura vecchio sito</a></li>
						</ul>
						<div data-noexport="true">
							<h2>Guide</h2>
							<ul class="librerie-lista">
								<li><a href="./librerie_guidelines.php" data-noexport="true">Guidelines</a></li>
							</ul>
							<h2>Tools</h2>
							<ul class="librerie-lista">
								<li><a href="./librerie_genera_statico.php" data-noexport="true">Genera export statico</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<h2>Oggetti</h2>
						<ul class="librerie-lista">
						<?php
							$folder = "layout/oggetti/";
							$elencocart = array();
						    $dh = opendir($folder);
							while (($file = readdir($dh)) !== false) {
					            if( ($file !='.')&&($file !='..') ){
					            	$elencocart[] = $file;
					           }
				    		}
				    		closedir($dh);
				    		asort($elencocart);
							foreach ($elencocart as $tipooggetto) {
						   	?>
								<li>
									<?php if (file_exists("layout/oggetti/".$tipooggetto)) { ?>
										<a href="librerie_catalogo.php?tipo=<?php print $tipooggetto; ?>" ><?php print ucwords($tipooggetto); ?></a>
									<?php }?>
								</li>
					            <?php
								}
						?>
						</ul>
					</div>
					<div class="col-sm-4">
						<h2>Template</h2>
						<div class="template-tree">
							<?php include ("./librerie_build_menu_tree.php"); ?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</body>
</html>
