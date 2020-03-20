<?php

	require_once('layout/struttura/functions/init.php');

	// nome del template preso dalla GET (con fallback)
	$tpl = ( isset($_GET['tpl']) ) ? $_GET['tpl'] : 'tpl_placeholder.php';
	
	// indicare quali template devono avere la struttura a box con due solonne come quella della pagina di login
	$loginTemplates = array( 'tpl_login.php', 'tpl_login_post.php' ); // array dei template
	$isLogin = in_array($tpl, $loginTemplates); // controllo
	
	// indicare templates che NON DEVONO avere gli elementi delle pagine private
	$publicTemplates = array( 'tpl_login.php', 'tpl_login_help.php', 'tpl_login_post.php' ); // array dei template
	$isPublicPage = in_array($tpl, $publicTemplates); // controllo
?>

<!doctype html>
<html lang="it" class="<?php if($isPublicPage) echo 'tmp-public' ?> <?php if($isLogin) echo 'tmp-login' ?>" >
	<head>
		<?php include 'layout/struttura/head.php'; ?>
	</head>
	<body>
		<?php if(!$isLogin) { ?>
			<!-- Header -->
			<header>
				<?php include 'layout/struttura/header.php'; ?>
			</header>
			<!-- /Header -->
		<?php } ?>
		<!-- Contenitore principale -->
		<div id="main">
			<div class="wrapper">
				<div id="maincontent">
					<?php if(!$isLogin) { ?>
						<!-- Spalla menu -->
						<?php if(!$isPublicPage) { ?>
							<div id="menu">
								<nav>
									<?php if(!$isLogin) include 'layout/struttura/nav.php'; ?>
								</nav>
							</div>
						<?php } ?>
						<!-- Fine spalla menu -->
					<?php } ?>
					<!-- Spazio dei contenuti -->
					<div id="contenuti">
					 	<div class="container-fluid">
							<?php if(!$isPublicPage) { ?>
						 		<span class="breadcrumb d-none d-md-block"><span class="verde">Home</span> / Lorem / Ipsum / Dolor amet</span>
							<?php } ?>
							<?php include "layout/template/$tpl"; ?>
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
