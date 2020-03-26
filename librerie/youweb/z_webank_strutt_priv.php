<?php
	$liv0 = ($_GET["liv0"] != "") ? $_GET["liv0"] : 0;
	$disableCache = true;
	$random = $disableCache ? '' : mt_rand();
	$fdeb = $_GET["fdeb"];
	$dep = $_GET["dep"];
	$pag = $_GET["pag"];

	// Assembla le chiavi di navigazione
	$navIndex = array($liv0);
	if ($_GET["liv1"] != "") array_push($navIndex,$_GET["liv1"]);
	if ($_GET["liv2"] != "") array_push($navIndex,$_GET["liv2"]);
	if ($_GET["liv3"] != "") array_push($navIndex,$_GET["liv3"]);

	$nascondiDati = isset($_GET['idx']) && $_GET['idx'] == 'true';
?><!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<title><?php print $fullname; ?></title>
		<meta name="description" content="<?php print $fullname; ?>"/>

		<!-- MOBILE -->
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<!-- Allows fullscreen mode from the Homescreen -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Sets the color of the text/battery, wireless icons etc -->
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="HandheldFriendly" content="true"/>
		<meta name="MobileOptimized" content="320"/>
		<meta name="format-detection" content="telephone=no">
		<!-- / MOBILE -->

		<!-- FAVICON -->
		<link rel="icon" href="/favicon.ico">
		<link rel="manifest" href="/manifest.json">
		<meta name="apple-mobile-web-app-title" content="Webank Resp">
		<meta name="application-name" content="Webank Resp">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">  
		
		<!-- / FAVICON -->

		<!-- CSS -->
		
		<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/z_bootstrap.min.css"  />
		<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/z_main.css?v=161229"  />
		<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/z_webank-skin.css?v=161229"  />
		<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/z_priv_struttura-webank.css?v=161229"  />
			
		<?php
		// CSS SPECIALI
		$isRIA = ($tpl == "tpl_priv_fp_my_ria.php" || $tpl == "tpl_priv_fp_my_ria_new.php" || $tpl == "tpl_priv_fp_my_riadisab.php");
	    if ($isRIA) {
	    ?>
			<!-- CSS speciali per RIA, BEN FATTO, ECC, da importare solo in alcune pagine -->
			<link rel="stylesheet" type="text/css" href="/wscmn/fe/css/priv_fp_ria.css?r=<?php echo $random ?>" media="all" />
			<!-- FINE CSS SPECIALI -->
	    <?php
		}
		?>
		<!-- / CSS -->
		
		<script type="text/javascript">
			// Variabili per ambiente, riporta le chiavi del navigatore selezionate 
			var navIndex = [<?php print "'".implode("','",$navIndex)."'" ?>];

			var sectionTitle = "Webank";

			// Variabili per emulazione
			var cgi_script = "/webankpri";
			var imgPath = '/img/ret/';
			var pDis = true;
			var pCP = false;
			var abilOroCap = true;
			var isWebank = true;
			var hasCarte = false;
			var isComunita200Mov = true;
			var rbfLinkObj = {
				'bonifico': 'BON',
				'giroconto': 'GIR',
				'carta': 'PRJ'
			};
		</script>

		<!-- JS -->
		<script type="text/javascript" src="/librerie/include/commons/ajax/priv_menu.php?bank=<?php print $bank;?>&amp;r=<?php echo $random ?>"></script>

		<script type="text/javascript" src="/wscmn/fe/js/jquery.js?r="></script>

		
		<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/bootstrap.min.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/script/ie10-viewport.js"></script> 
		<script type="text/javascript" language="javascript" src="/HT/fe/js/script/jsapi.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.dataTables.dateIT.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.dataTables.altImg.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.dataTables.formattedNum.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.form.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.blockUI.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery-ui.selectToUISlider.js"></script>
		<script type="text/javascript" src="/wscmn/fe/js/bootstrap.min.js?r=<?php echo $random ?>"></script>
		<?php if ($bank == "bpm") { ?>
		<script type="text/javascript" src="/wscmn/fe/js/noresp_priv_uniform.js?r=<?php echo $random ?>"></script>
		<?php } ?>
		<!-- JS LIBRERIE (non includere in sviluppo) -->
		<script type="text/javascript" src="/librerie/js/priv_librerie.js?r=<?php echo $random ?>"></script>
		<!-- FINE JS LIBRERIE --> 
		<script type="text/javascript" src="/HT/fe/js/script/z_priv_generic.js?r=<?php echo $random ?>"></script>
		<script type="text/javascript" src="/wscmn/fe/js/noresp_priv_generic.js?r=<?php echo $random ?>"></script>
		<script type="text/javascript" src="/wscmn/fe/js/noresp_priv_utilities.js?r=<?php echo $random ?>"></script>
		<script type="text/javascript" src="/wscmn/fe/js/bootstrap-table.js?r=<?php echo $random ?>"></script>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/script/zfunzioniYW.js?v=161229"></script>
		<!--<script type="text/javascript" src="/wscmn/fe/js/html5shiv.js"></script>-->
		<!-- Css e JS di compatibilita' generica condizionato -->
		<!--[if lte IE 8]>
		<link href="/wscmn/fe/compat/js/css/priv_old.css" rel="stylesheet" type="text/css" media="all" >
		<script type="text/javascript" src="/wscmn/fe/compat/js/priv_old.js"></script>
		<![endif]-->
		<script type="text/javascript">
	function getPathImages() { return "/HT/fe/css/";}
	function getPathContext() { return "/WEBHT";}
	function getKBanca() { return "1";}
	function getLineaTol() { return "";}
	</script>

		<script type="text/javascript">

			if (navIndex.length>2)
				{ sectionTitle = menuData[navIndex[0]].voices[navIndex[1]].title;}
			else if (navIndex.length==1)
				{ sectionTitle = menuData[navIndex[0]].title;}
		</script>
		<!-- /JS -->
	</head>
	<body class="<?php if ($navIndex[0] == "0" && sizeof($navIndex)==1) print "myhome" ;?>">

		<!-- HEADING -->
		<?php virtual ("/include/struttura_new/z_webank-header.php"); ?>
		<!-- FINE HEADING -->
		
		<!-- MENU -->
		<?php virtual("/librerie/include/struttura/nav.php"); ?>
		<!-- FINE MENU -->
		
		<!-- TOOLBOX -->
		<?php  
		if($fixedDebug) {
			virtual("/librerie/include/struttura/toolbox_fixed.php"); 
			}
		else
			{
			virtual("/librerie/include/struttura/toolbox.php"); 
			}

		?>
		<!-- FINE TOOLBOX -->

		<div class="scrollable">
			<!-- CONTENT (dinamico a seconda del tipo di pagina da visualizzare - front page, pagina standard, pagina estesa) -->
			<div id="main">
				<div class="wrapper">
					<div class="container-fluid">
						<div class="row">
							<div id="leftmenu" class="col-sm-12 col-md-2">
								<h2>Titolo della sezione</h2>
								<ul>
									<li><a href="#">Quarto livello 1</a></li>
									<li class="selected"><a href="#">Quarto livello dolor sit amet consectetur</a></li>
									<li><a href="#">Quarto livello 3</a></li>
									<li><a href="#">Quarto livello 4</a></li>
									<li><a href="#">Quarto livello 5</a></li>
								</ul>
							</div>
							<div id="contenuti" class="contenuti col-sm-12 col-md-10">
								<?php 
								// Acquisizione del  template
								virtual ("/template/tpl_priv_".$pag.".php") ;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /CONTENT -->
			
			<!-- FOOTER -->
			<?php  virtual("/librerie/include/struttura/footer.php"); ?>
			<!-- /FOOTER -->
		</div>

		<?php
		// JS SPECIALI
		if (!$nascondiDati && $isRIA) {
	    ?>
			<!-- JS testo tooltip -->
			<?php virtual("/librerie/include/commons/ria/part/testoTooltip.php") ?>
			<!-- /JS testo tooltip -->

			<script type="text/javascript" src="/wscmn/js/calcoloInteressiVincoli.js?r=<?php echo $random ?>"></script>
			<script type="text/javascript" src="/wscmn/js/privata/SWFObject.js?r=<?php echo $random ?>"></script>
			<script type="text/javascript" src="/wscmn/js/ret/priv_widgets.js?r=<?php echo $random ?>"></script>
			<script type="text/javascript" src="/wscmn/fe/assets/amcharts/amcharts.js?r=<?php echo $random ?>"></script>
			<script type="text/javascript" src="/wscmn/fe/assets/amcharts/serial.js?r=<?php echo $random ?>"></script>
			<script type="text/javascript" src="/wscmn/fe/assets/amcharts/pie.js?r=<?php echo $random ?>"></script>
			<script type="text/javascript" src="/wscmn/fe/assets/amcharts/plugins/responsive/responsive.min.js?r=<?php echo $random ?>"></script>
			<script type="text/javascript" src="/wscmn/fe/js/ria/riaLinks.js?r=<?php echo $random ?>"></script>
			<script type="text/javascript" src="/wscmn/fe/js/ria/riaUtilities.js?r=<?php echo $random ?>"></script>
			<script type="text/javascript" src="/wscmn/fe/js/ria/riaAnimazioni.js?r=<?php echo $random ?>"></script>
			<script type="text/javascript" src="/wscmn/fe/js/ria/riaNavigazione.js?r=<?php echo $random ?>"></script>
			<script type="text/javascript" src="/wscmn/fe/js/ria/riaChiamate.js?r=<?php echo $random ?>"></script>
			<script type="text/javascript" src="/wscmn/js/priv_ret_rbf.js?r=<?php echo $random ?>"></script>

			<?php
				if ($permettiDispositive) {
			?>
			<script type="text/javascript" src="/wscmn/fe/js/ria/riaDispositive.js?r=<?php echo $random ?>"></script>
			<?php
				}
			?>

			<script type="text/javascript" src="/wscmn/fe/js/ria/ria.js?r=<?php echo $random ?>"></script>

			<!-- JS di personalizzazione per le librerie -->
			<script type="text/javascript" src="/librerie/include/commons/ria/ajax/librerie.js?r=<?php echo $random ?>"></script>
			<!-- FINE - JS di personalizzazione per le librerie -->

			<script type="text/javascript">
			function layerconti(conto,intestatari) {
				openPopOverLayer('layeralertconti','float', 1);
				$('contenuto')
					.innerHTML = '<div><p>Per operare sul conto corrente indicato, &egrave; necessario che <strong>tutti gli intestatari</strong> richiedano '+
									'l\'\<strong>abilitazione</strong> al servizio <strong>---</strong> presso la propria <strong>agenzia ---</strong>.</p>'+
								'</div>'+	
								'<div class="row-fluid">'+
									'<div class="span4">'+
										'<label class="nomefield"><strong>Conto corrente n&deg;</strong></label><br>'+
										'<span class="output">'+conto+'</span>'+
									'</div>'+
									'<div class="span8">'+
										'<label class="nomefield"><strong>Intestato a</strong></label><br>'+
										'<span class="output">'+intestatari+'</span>'+
									'</div>'+
								'</div>';
			}
			</script>
	    <?php
		}
		?>
	</body>
</html>
