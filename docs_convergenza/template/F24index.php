<html>
<head>
	<title>Librerie convergenza Nuove APP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- CSS -->
	<link rel="stylesheet" href="/common/fe/assets/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="/css/style.css">
	<!-- / CSS -->

	<!-- JS -->
	<script type="text/javascript" src="/common/fe/assets/jquery/jquery.js"></script>
	<!-- / JS -->
	<style>
		body #main.librerie h2 {border-bottom: solid 4px #ccc;margin-bottom:20px;}
		/*#main.librerie .elenco-oggetti li .links {width:150px!important}*/
		#main.librerie ul li a {width:45px!important}
	</style>
</head>

<body>
	<header class="librerie">
		<div class="wrapper">
			<h1>Librerie convergenza Nuove APP</h1>
		</div>
	</header>
	<?php
	$pagine = array(	'F24_esitoF24Vuoto'=>'01-F24 Inseriti - Mostra ultimi (vuoto)',
									'F24_esitoF24'=>'02-F24 Inseriti - Mostra ultimi (non vuoto)',
										'F24_nuovo'=>'03-Nuovo modulo - Step 1',
										'F24_esito'=>'04-Nuovo modulo - Step 1 (Errore in modale)',
										'F24_rubrica'=>'05-Nuovo modulo - Step 1 (rubrica)',
									'F24_modifica'=>'06-Nuovo modulo - Step 1 (rubrica - modifica)',
										'F24_step2'=>'07-Nuovo modulo - Step 2',
										'F24_lente1'=>'08-Nuovo modulo - Step 2 (modale di Ricerca codici identificativi)',
										'F24_lente2'=>'09-Nuovo modulo - Step 2 (modale di Ricerca codici ufficio sezione Erario)',
										'F24_step3'=>'10-Nuovo modulo (step 3)',
										'F24_lente3'=>'11-Nuovo modulo - Step 3 (modale di Ricerca codici tributo F24 Semplificato)',
									'F24_errore'=>'12-Nuovo modulo - errore',
										'F24_errore2'=>'13-Nuovo modulo - errore2'
								);

	if( isset($_GET['iframe_test']) ) { ?>

		<style>iframe {width:375px;height:667px;border:1px solid #ddd;margin:5px;}</style>
		<a href="/template/F24index.php?bank=<?php echo $_GET['bank'] ?>" style="margin:10px" class="button btn btn-default">Torna alla lista</a><br />
		<?php foreach ($pagine as $pagina => $titolo): ?>
			<iframe src="/template/<?php echo $pagina ?>.php?bank=<?php echo $_GET['bank'] ?>"></iframe>
		<?php endforeach; ?>

	<?php } else { ?>

		<div id="main" class="container librerie">
			<div class="row">
				<div class="col-md-7 col-xs-12">
					<h2>F24 semplificato</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-xs-12">
					<ul class="elenco-oggetti">
						<?php foreach ($pagine as $pagina => $titolo): ?>
						<li>
							<span><?php echo $titolo ?></span>
							<div class="links">
								<a href="/template/<?php echo $pagina ?>.php?bank=WB" target="_blank" class="mi">WE</a>
								<a href="/template/<?php echo $pagina ?>.php?bank=HT" target="_blank" class="vr">YOU</a>
								<a href="/template/<?php echo $pagina ?>.php?bank=AL" target="_blank" class="al">AL</a>
							</div>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>

			<br /><a href="/template/F24index.php?bank=<?php echo $_GET['bank'] ?>&iframe_test" style="margin:10px 0" class="button btn btn-default">Test iframe</a>

		</div>

	<?php } ?>
</body>
</html>
