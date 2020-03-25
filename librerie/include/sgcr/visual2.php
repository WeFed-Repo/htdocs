<?php
if ($pag=="prepagata")
	{
?>
<div class="immaginonaContainer_percheUnaPrepagata">
	<img src="/prepagate/img/immaginona_percheUnaPrepagata.jpg" title="Carte" alt="Carte" border="0" />
</div>
<?php
	}
if ($pag=="richiedile")
	{
	?>
<div class="immaginonaContainer_richiedileOnline">
	<?php
	switch ($sez) 
		{
		case "0": case "1": case "2": case "3": case "4":
		?>
		<img src="/prepagate/img/immaginona_top_richiedileOnline.jpg" alt="Richiedile online" title="Richiedile online" border="0" />
	<?php
		break;
	//	case "1":
	?>
	<!img src="/prepagate/img/stepCOMPILARE.jpg" alt="Richiedile online" title="Richiedile online" border="0">
	<?php
		//break;
		//case "2":
		//break;
	}
?>
</div>
<?php	
	}
?>