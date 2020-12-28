<?php
	$tpl = $_GET["tpl"];

	if(empty($tpl)) $tpl = "tpl_pub_placeholder.php";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
<!-- HEAD -->
<?php

if($lev1=="investimenti") {
	virtual("/include/struttura_youweb/head_investimenti.php"); 
}
else
{
	virtual("/include/struttura_youweb/head_pub.php"); 
}
?>

<!-- HEAD -->

<body id="bgBodyPublic">

	<!--<div id="cookie-bar" class="fixed bottom"><div class="cookie-content"><p>Questo sito utilizza i cookie per migliorare l'esperienza di navigazione degli utenti e per raccogliere informazioni sull'utilizzo del sito stesso.  Vengono utilizzati solo cookie tecnici e non anche cookie di profilazione. Questo sito consente l'invio di cookie di terze parti. E' possibile conoscere i dettagli consultando la nostra privacy policy <a href="http://www.bancobpm.it/media/Privacy_Policy.pdf" target="_blank">Qui</a>. Proseguendo nella navigazione si accetta l'uso dei cookie; in caso contrario è possibile abbandonare il sito.</p><a href="" class="cb-enable x">&nbsp;</a></div></div>-->
	<video id="video" playsinline autoplay muted loop>
		<source src="/HT/fe/video/video.mp4" type="video/mp4"/>
	</video>
	<script>
		var video = $('#video');
		video.on('loadstart',function(){
  		   video.hide();
		})
		video.on('play',function(){
  			 video.fadeIn();
		})
	</script>
	<div id="outerwrapper" class="outerWrapperPubblic">
		<!-- HEADER -->
		<?php virtual ("/include/struttura_youweb/header_pub.php") ?>
		<!-- / HEADER -->
		
		<!-- MENU -->
		<?php virtual ("/include/struttura_youweb/menu_pub.php") ?>
		<!-- / MENU -->
		<div id="main">
			<div class="wrapper" id="mainContentPub">

				<!-- CONTENITORE PRINCIPALE -->
				
				<div  class="full">
					<?php 
						// Acquisizione del template
						virtual ("./".$tpl);
					?>	
				</div>
				
			</div>
		</div>
		

		<!-- FOOTER -->
		<?php virtual ("/include/struttura_youweb/footer_pub.php") ?>
		<!-- / FOOTER -->

	

	</div>
	<script type="text/javascript" src="/HT/fe/js/script/cookiebar.js"></script>
</body>
</html>