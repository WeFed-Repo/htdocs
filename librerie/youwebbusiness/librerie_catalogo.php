<?php
	
	require_once('layout/struttura/functions/init.php');

	$tipo = $_GET["tipo"];

?><!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<!-- HEAD DELLA STRUTTURA -->
		<?php include 'layout/struttura/head.php'; ?>
		<!-- FINE HEAD DELLA STRUTTURA -->
		
		<!-- DECLINAZIONI PER LIBRERIE -->
		<link href="./librerie/css/librerie.css" rel="stylesheet" type="text/css" media="all" >
		<!-- FINE DECLINAZIONI PER LIBRERIE -->

	</head>
	<body>
		<header class="librerie">
			<div class="wrapper"> 
				<h1><a href="./index.php" class="btn-bak">&laquo;</a> <?php print ucwords($tipo); ?> - Librerie YouBusiness</h1>
			</div>
		</header>
		<div id="main" class="librerie">
			<div class="wrapper">
						<?php
							$basefolder = "layout/oggetti/".$tipo;
							if (file_exists($basefolder)) {

								$note = array();
								$elencocart = array();  
								$dh = opendir($basefolder);
									while (($file = readdir($dh)) !== false) { 
										if( ($file !='.')&&($file !='..'&&$file!='note.php') ){
											$elencocart[] = $file;
										} 
										if($file=='note.php') { 
											//array_merge( array($file), $elencocart );
											$note[] = $file;
										}
									} 
								closedir($dh); 

								// Elenco delle tipologie di oggetti (riassunto)
								asort($elencocart);

								$tipioggetti = array_merge($note,$elencocart);
								
								foreach ($tipioggetti as $tipooggetto) {
								?>
									<!-- Blocco oggetto -->
									<div class="row">
										<div class="col-sm-12">
											<?php if( $tipooggetto != 'note.php' ) { ?>
												<h2 class="titolo-oggetto"><?php print str_replace("_"," ",$tipooggetto); ?></h2>
											<?php } else { ?>
												<br /><h3>NOTE</h3>
											<?php } ?>
											<?php virtual ($basefolder."/".$tipooggetto."/oggetto.php");
											?>
										</div>
									</div>
									<!-- Fine blocco oggetto -->
								<?php 	
								}
							} 
						?>
				</div>
			</div>
	</body>
</html>