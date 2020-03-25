<?php
switch ($pag) 
	{
	case "cartainrete": case "cartajeans": case "firstcard": case "bpmcontante": case "tesseratifoso":
?>
<ul>
	<li><a id="<?php print $id1;?>" class="rollover" href="index.php?page=paginterna.php&pag=<?php print $pag;?>&sez=1" title="Cos'&#232;"><img src="/prepagate/img/s.gif" width="86" height="79" alt="Cos'&#232;" title="Cos'&#232;" border="0" /></a><span class="hide">Cos'è</span></li>
	<li><a id="<?php print $id2;?>" class="rollover" href="index.php?page=paginterna.php&pag=<?php print $pag;?>&sez=2" title="Come richiederla"><img src="/prepagate/img/s.gif" width="172" height="79" alt="Come richiederla" title="Come richiederla" border="0" /></a><span class="hide">Come richiederla</span></li>
	<li><a id="<?php print $id3;?>" class="rollover" href="index.php?page=paginterna.php&pag=<?php print $pag;?>&sez=3" title="Come ricaricarla"><img src="/prepagate/img/s.gif" width="161" height="79" alt="Come ricaricarla" title="Come ricaricarla" border="0" /></a><span class="hide">Condizioni</span></li>
</ul>
<?php
	break;
	
	default:
		
	break;
	}
?>


