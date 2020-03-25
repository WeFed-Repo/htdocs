<?php
//array con le voci
switch ($ri2) {
	
	case 0:
		switch ($ri3) 
		{
		case 0:
			$riLevel3 = "I miei investimenti";
			$riLevel4 = "Portafoglio";
			break;			
		
		case 1:
			$riLevel3 = "I miei investimenti";
			$riLevel4 = "Situazione ordini|Situazione ordini (caso coll obbligazioni)|Situazione ordini (caso PCT)";
			break;		
		}
	break;
	
	case 2:
	switch ($ri3)
		{
		case 0:
			$riLevel3 = "Investire in fondi e sicav";
			$riLevel4 = "La nostra offerta|La nostra offerta2|Societ&agrave; di gestione|Tempistiche e costi|Glossario | PAC";
			break;	
			
		case 1:
			$riLevel3 = "Ricerca e analisi";
			$riLevel4 = "Ricerca|Trova fondi alternativi|Classifiche|Confronta i fondi|News";
			break;	
		
		case 2:
			$riLevel3 = "Compravendita";
			$riLevel4 = "Acquisto|Vendita|Switch|Versamenti aggiuntivi Pac|Situazione ordini";
			break;	
			
		case 3:
			$riLevel3 = "Ricerca guidata";
			$riLevel4 = "Il servizio";
			break;	
		
		}
		break;	
		}
	$ri4array = explode("|", $riLevel4);
		
		
?>
<div id="menusxc">
	<h1><?php print $riLevel3;?></h1>
	<div class="menusxcontainer">
	<?php
	for ($a=0; $a<sizeOf($ri4array); $a++)
	{
	?>
		<a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=<?php print($ri2); ?>&ri3=<?php print($ri3); ?>&ri4=<?php print($a); ?>"<?php if ($ri4 == $a) {?> class="selected"<?php }?>><span><?php print ($ri4array[$a]); ?></span></a>
	<?php
	}
	?>
	<br class="clear" />
	<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_intsx_010.php");?>
	
	</div>
</div>