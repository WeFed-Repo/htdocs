<!doctype html>
<html lang="it">
	<head>
		<?php include 'layout/struttura/head.php'; ?>
	</head>
	<body>
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
						<?php
							$tpl = ( isset($_GET['tpl']) ) ? $_GET['tpl'] : 'index.php';
							include "layout/template/$tpl";
						?>
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
