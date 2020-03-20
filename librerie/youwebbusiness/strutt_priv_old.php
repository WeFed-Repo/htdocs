<?php
	$tpl = ( isset($_GET['tpl']) ) ? $_GET['tpl'] : 'tpl_placeholder.php';
	$asis = ( isset($_GET['asis']) ) ? $_GET['asis'] : 'false';
	$cantiere = ( isset($_GET['cantiere']) ) ? $_GET['cantiere'] : 'a2';
	$strtype = "old";
?><!doctype html>
<html lang="it">
	<head>
		<?php include 'layout/struttura/head_old.php'; ?>
	</head>
	<body class="cant-<?php print $cantiere; ?> <?php if ($tpl==="configura/gestione_gruppi.php" || $tpl==="configura/gestione_gruppi_dettaglio.php" || $tpl==="configura/gestione_gruppi_aggiungi.php" || $tpl==="configura/gestione_gruppi_overlay.php") print " widget";?>">
		<!-- Header -->
		<header>
			<?php include 'layout/struttura/header.php'; ?>
		</header>
		<!-- /Header -->

		<!-- Contenitore principale -->
		<div id="main">
			<div class="wrapper">
				<div id="maincontent">
					<!-- Spalla menu -->
					<div id="menu">
						<nav>
							<?php include 'layout/struttura/nav.php'; ?>
						</nav>
					</div>
					<!-- Fine spalla menu --> 

					<!-- Spazio dei contenuti -->
					<div id="contenuti">
					 	<div class="container-fluid">
						 	<span class="breadcrumb d-none d-md-block"><span class="verde">Lorem</span> / Ipsum / Dolor amet</span>
							<?php
								include "layout/template_old/$tpl";
							?>
						</div>
					</div>
					<!-- Fine spazio dei contenuti -->

				</div>
			</div>
		</div>
		<!-- /Contenitore principale -->

		<!-- Footer -->
		<footer>
			<?php include 'layout/struttura/footer.php'; ?>
		</footer>
		<!-- /Footer -->

	</body>
</html>
