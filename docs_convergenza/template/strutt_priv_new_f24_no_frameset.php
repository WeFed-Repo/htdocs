<?php
	$pag = $_GET["pag"];
	$lev1 = $_GET["lev1"];
	$strutt = $_GET["strutt"];
	if (empty($strutt)) $strutt = "2col";
	
	if (!isset($pag)) $pag = "placeholder";

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
<!-- HEAD -->
<?php

if($lev1=="investimenti") {
	virtual("/include/struttura_new/head_investimenti.php"); 
}
else
{
	virtual("f24_head.php"); 
}

?>
<!-- HEAD -->
<body>
	
	<div id="outerwrapper">
		<!-- HEADER -->
		<?php virtual ("f24_header.php") ?>
		<!-- / HEADER -->
		
		<!-- MENU -->
		<?php virtual ("f24_menu.php") ?>
		<!-- / MENU -->
		<div id="main">
			<div class="wrapper">

				<!-- CONTENITORE PRINCIPALE -->
				
				<div id="mainContent" class="full">
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
			</div>
		</div>
		

		<!-- FOOTER -->
		<?php virtual ("/include/struttura_new/footer.php") ?>
		<!-- / FOOTER -->
	
	</div>

	
</body>
</html>