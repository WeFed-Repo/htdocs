<?php
	$pag = $_GET["pag"];
	$lev1 = $_GET["lev1"];
	$strutt = $_GET["strutt"];
	if (empty($strutt)) $strutt = "2col";
	
	if (!isset($pag)) $pag = "placeholder";

	$allowip = array(
		"10.8.102.17",
		"10.8.102.26",
		"10.8.102.75",
		"10.8.232.171",
		"10.8.102.64",
		"10.8.102.18",
		"10.8.102.118",
		"10.8.102.19",
		"10.8.102.205"
	);
	$ipallowed = in_array( $_SERVER['REMOTE_ADDR'], $allowip); 


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
<!-- HEAD -->
<?php

if($lev1=="investimenti") {
	virtual("/include/struttura_new/head_investimenti.php"); 
}
else
{
	virtual("/include/struttura_new/head.php"); 
}

?>
<!-- HEAD -->
<body>
	
	<div id="outerwrapper">
		<!-- HEADER -->
		<?php virtual ("/include/struttura_new/header.php") ?>
		<!-- / HEADER -->
		
		<!-- MENU -->
		<?php virtual ("/include/struttura_new/menu.php") ?>
		<!-- / MENU -->
		<div id="main">
			<div class="wrapper">

				<!-- CONTENITORE PRINCIPALE -->
				
				<div id="mainContent" <?php if($strutt=="full") print "class=\"full\"" ?>>
					<?php if ($pag != "homepage") { ?>
					<!-- BREADCRUMB -->
					<div class="breadcrumb">
						<span>Briciole di</span>
				       	<span>pane del sito</span>
					</div>
					<!-- FINE BREADCRUMB -->
					<?php
					}
					?>
					
					<?php 
						// Acquisizione del  template

						virtual ("/template/tpl_priv_".$pag.".php") ;

					?>	
				</div>
				<!-- SPAZIO PER I CONTENUTI -->
				<?php if ($strutt == "2col") {
				
					if ($pag=="personalizza_homepage") {
						?>
						<!-- SPALLA DESTRA -->
							<?php virtual ("/include/struttura_new/spalla_personalizza_homepage.php") ?>
						<!-- / SPALLA DESTRA -->
						<?php
					}
					else
					{
						?>
						<!-- SPALLA DESTRA -->
							<?php virtual ("/include/struttura_new/spalla_destra.php") ?>
						<!-- / SPALLA DESTRA -->
						<?php
						}
					}
				?>
			</div>
		</div>
		

		<!-- FOOTER -->
		<?php virtual ("/include/struttura_new/footer.php") ?>
		<!-- / FOOTER -->

		<!-- TOOLBOX (CODICE CON INCLUSIONE JSP) -->
		<?php virtual ("/include/struttura_new/toolbox.php") ?>
		<!-- FINE TOOLBOX (CODICE CON INCLUSIONE JSP) -->

	</div>

	<!--
	<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogLinkRapidi" aria-labelledby="ui-id-1" style="display: none; position: absolute;">
	   <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">Link rapidi</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div>
	   <div id="dialogLinkRapidi" class="ui-dialog-content ui-widget-content" style="max-height: 753px;"></div>
	   <div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div>
	</div>
	-->
</body>
</html>