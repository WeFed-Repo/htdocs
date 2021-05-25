<h2>Esempio funzionalit&agrave;</h2>
<?php
	$sQuestion = $_GET["sQuestion"];
	$sTop = $_GET["sTop"];
	$sLeft = $_GET["sLeft"];
	

	if ($sQuestion != "") { ?>
	<script>
	$(function(){
		vaOpenOnStart(<?php print $sLeft ?>,<?php print $sTop ?>,"<?php print $sQuestion; ?>");
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
			<li><a href="#" onclick="vaAsking('prova redirect link_va.php')">Redirect</a></li>		
		</ul>
	</li>
<ul>