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

	virtual("/include/struttura_new/head.php"); 


?>
<!-- HEAD -->
<body id="bgBodyPublic">
	
	<div id="outerwrapper">
		<!-- HEADER -->
		<?php virtual ("/include/struttura_new/header_int.php") ?>
		<!-- / HEADER -->
		
		
		<div id="main">
			<div class="wrapper">

				<!-- CONTENITORE PRINCIPALE -->
				
				<div id="mainContentPub" <?php if($strutt=="full") print "class=\"full\""; ?>">
				
					
					<?php 
						// Acquisizione del  template

						virtual ("/template_int/tpl_int_".$pag.".php") ;

					?>	
				</div>
				
			</div>
		</div>
		

		<!-- FOOTER -->
		<?php virtual ("/include/struttura_new/footer_pub.php") ?>
		<!-- / FOOTER -->

	

	</div>
</body>
</html>