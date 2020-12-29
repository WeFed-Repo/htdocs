<?php 
	// Raccolta "framework"
	virtual("/core/wbresp_functions.php"); 

	// Inizializzazioni e variabili esterne  
	$templatePath = "/template/template_wbresp/";
	$tpl = $_GET["tpl"];

	$isHp = ($tpl == "wbresp_home.php");
	$isCms = (strrpos($tpl, "_cms_") > 0);
	$isHpCms = ($tpl == "wbresp_home_cms.php");
	$isAOL = (strrpos($tpl, "_aol_") > 0);
	//Inizializza variabili per parametrizzare la home page
	$maincss = ($isHp)? "home-page": (($isAOL)? "contenuti_aol": "contenuti");
	$bodyClass = ($isAOL)? 'aol' : '';
?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
 		<title>Lorem ipsum - Webank</title>
		<meta name="description" content=" Mettiti in contatto con il nostro team di operatori che ogni giorno offre un'assistenza a 360°. Webank - La banca online dal 1999" >
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
		if (!$isCms && !$isHpCms) { ?>
        <link rel="stylesheet" href="/wbresp/css/bootstrap.min.css">
        <link rel="stylesheet" href="/wbresp/css/bootstrap-theme.css">
        <link rel="stylesheet" href="/wbresp/css/bootstrap-slider.min.css">
		
        <link rel="stylesheet" href="/wbresp/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox.min.css"/>
        <link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox-styles.min.css"/>
        <link rel="stylesheet" href="/wbresp/css/bootstrap-select.min.css"/>
        <link rel="stylesheet" href="/wbresp/css/base.css">
        
		<link rel="stylesheet" href="/wbresp/css/<?php print $maincss; ?>.css">
		 <link rel="stylesheet" href="/wbresp/css/buttons.css">
        <link rel="stylesheet" href="/wbresp/css/form.css">
        <?php	
			}
		?>
		<?php
		if ($isCms) { ?>
			<link rel="stylesheet" href="/wbresp/css/bootstrap.min.css">
			<link rel="stylesheet" href="/wbresp/css/bootstrap-theme.css">
			<link rel="stylesheet" href="/wbresp/css/bootstrap-slider.min.css">
			<link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox.min.css"/>
			<link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox-styles.min.css"/>
			<link rel="stylesheet" href="/wbresp/css/bootstrap-select.min.css"/>
			<link rel="stylesheet" href="/wbresp/css/form.css">
			<!--<link rel="stylesheet" href="/wbresp/css/mutuo.css">-->
			<link rel="stylesheet" href="/wbresp/css/contenuti_pubblica.css">
			<link rel="stylesheet" href="/wbresp/css/print.css" media="print">
			
		<?php	
			}
		?>
		<?php
		if ($isHpCms) { ?>
			<link rel="stylesheet" href="/wbresp/css/bootstrap.min.css">
			<link rel="stylesheet" href="/wbresp/css/bootstrap-theme.css">
			<link rel="stylesheet" href="/wbresp/css/bootstrap-slider.min.css">
			<link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox.min.css"/>
			<link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox-styles.min.css"/>
			<link rel="stylesheet" href="/wbresp/css/bootstrap-select.min.css"/>
			<link rel="stylesheet" href="/wbresp/css/form.css">
			<link rel="stylesheet" href="/wbresp/css/mutuo.css">
			<link rel="stylesheet" href="/wbresp/css/home_pubblica.css">
			<link rel="stylesheet" href="/wbresp/css/print.css" media="print">
			
		<?php	
			}
		?>
		<script src="/wbresp/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="/wbresp/js/vendor/jquery-1.11.2.min.js"></script>
    </head>

    <body class="<?php echo $bodyClass ?>">
    <script>
		var isCovid = true,
			dateCovidIni = "01/03/2020",
			dateCovidEnd = "31/08/2020";
	</script>
    <?php if ($isAOL): ?>
		<!-- HEADER AOL -->
		<?php virtual("/include/struttura_wbresp/header_aol.php"); ?>
	    <!-- FINE HEADER AOL -->
    <?php else: ?>
		<!-- LOGIN -->
		<?php virtual("/include/struttura_wbresp/barra_login.php"); ?>
	    <!-- FINE LOGIN -->
		
		<!-- NAVIGATORE  -->
		<?php virtual("/include/struttura_wbresp/nav.php"); ?>
	    <!-- FINE NAVIGATORE -->
    <?php endif; ?>
	
    <?php if (!$isHp && !$isHpCms) { ?>
    	<?php if (!$isAOL): ?>
			<!-- BARRA DEL TITOLO -->
			<?php virtual("/include/struttura_wbresp/barra_titolo.php"); ?>
			<!-- FINE  BARRA DEL TITOLO -->
    	<?php endif; ?>

		<!-- CONTENITORE PRINCIPALE -->
		<div class="mainContent">
			<div class="container">
				<div class="row rowArea1">
				
				<?php
					/* Identifica il tipo di layout da utilizzare a seconda del nome del template */

					if ($tpl == "") $tpl = "wbresp_placeholder.php";

					if (strrpos($tpl, "_full_") > 0) {
						/* Template 1 colonna "full page" */
						$tpltype = "full";
						$contclass = "col-lg-12";
					} else {
						$promo = isset($_GET["promo"])? $_GET["promo"] : null;

						if (strrpos($tpl, "_big_") > 0) {
							/* Template 2 colonne "big page" */
							$tpltype = "big";
							$contclass = "col-lg-9";
						} else {
							$subnav = isset($_GET["subnav"])? $_GET["subnav"] : null;

							/* Template 3 colonne "normal page" */
							$tpltype = "normal";
							$contclass = "col-lg-7";
						}
					}
				?>
				
				<!-- LAYOUT A 3 COLONNE -->
					<!-- spalla sinistra -->

					<?php if ($tpltype == "normal") { ?>
					<div class="col-lg-2 col-md-12 col-sm-12">
						<!-- Template nav -->
							<?php virtual("/include/struttura_wbresp/sub_nav.php"); ?>
						<!-- Fine template nav -->
					</div>
					<?php } ?>
					<!-- fine spalla sinistra -->

					<!-- contenitore principale colonna centrale -->
					<div class="<?php print $contclass;?> col-md-12 col-sm-12">
						<!-- Template contatti -->
							<?php virtual("/template/template_wbresp/".$tpl); ?>
						<!-- Fine template contatti -->
					</div>
					<!-- fine contenitore principale  -->

					<?php if ($tpltype != "full") { ?>
					<!-- COLONNA DESTRA PER WIDGET -->
					<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 widget-container">
						<!-- Colonna di destra -->
						<?php virtual("/include/struttura_wbresp/promo.php"); ?>
						<!-- Colonna di destra -->
					</div>
					<!-- FINE COLONNA DESTRA PER WIDGET -->
					<?php } ?>

					<!-- FINE LAYOUT A 3 COLONNE -->

				</div>
			</div><!-- /container -->
		</div>
		<!-- FINE CONTENITORE PRINCIPALE -->
    <?php 
	} else {
    	// HOME PAGE 
    ?>
		<?php virtual("/template/template_wbresp/".$tpl); ?>
    <?php
    }
    ?>
	
	
	<?php if ($isAOL): ?>
		<!-- FOOTER -->
		<?php virtual("/include/struttura_wbresp/footer.php"); ?>	
	    <!-- FINE FOOTER -->
    <?php else: ?>
		<!-- FOOTER -->
		<?php virtual("/include/struttura_wbresp/footer.php"); ?>	
	    <!-- FINE FOOTER -->
    <?php endif; ?>
	
	
	
	

	<script src="/wbresp/js/vendor/jquery.smooth-scroll.min.js"></script>
	<script src="/wbresp/js/vendor/jquery.touchSwipe.min.js"></script>
	<script src="/wbresp/js/vendor/jquery.viewportchecker.min.js"></script>
	<script src="/wbresp/js/jquery.validate.js"></script>
	<script src="/wbresp/js/vendor/bootstrap.min.js"></script>
	<script src="/wbresp/js/bootstrap-slider.min.js"></script>
	<script src="/wbresp/js/bootstrap-select.min.js"></script>
	<script src="/wbresp/js/main.js"></script>
	<script src="/wbresp/js/utilities.js"></script>

	<?php if ($isAOL): ?>
	<script src="/wbresp/js/aol/jquery.aol.validate.js"></script>
	<script src="/wbresp/js/aol/aol.js"></script>
	<?php endif; ?>

	<!-- Cookie bar -->
	<script src="/wbresp/js/cookiebar.js"></script>

	<!-- Cookie bar -->
	
	<!--- SOLO PER LIBRERIE -->
	<script>
	/// SOLO PER LIBRERIE
	ckdomain =  location.hostname;    
    /// FINE SOLO PER LIBRERIE
	</script>
	<!--- FINE SOLO PER LIBRERIE -->

    </body>
</html>
