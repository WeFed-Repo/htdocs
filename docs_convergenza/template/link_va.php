<h2>Esempio funzionalit&agrave;</h2>
<?php
	$sTop = $_GET["sTop"];
	$sLeft = $_GET["sLeft"];
	$sQuestion = $_GET["sQuestion"];

	if ($sQuestion != "") { ?>
	<script>
	$(function(){
		vaOpenOnStart(<?php print $sLeft ?>,<?php print $sTop ?>,"cHJvdmEgYXR0ZXJyYWdnaW8=");
	});
	</script>
	<?php
	}

?>
<ul>
	<li><a href="#" onclick="vaOpen()">Apri assistente virtuale</a>
		<ul>
			<li><a href="#" onclick="vaAsking('prova extended')">Extended view</a></li>		
			<li><a href="#" onclick="vaAsking('prova survey')">Survey</a></li>
			<li><a href="#" onclick="vaAsking('prova redirect')">Redirect</a></li>		
		</ul>
	</li>
<ul>