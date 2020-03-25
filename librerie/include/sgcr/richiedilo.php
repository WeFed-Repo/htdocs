<?php
if ($pag != "richiedile")
	{
	if ($pag == "cartajeans")
		{
		?>
		<a href="/index.php?page=paginterna.php&pag=richiedile&amp;sez=1" id="b_richiedila_online" class="rollover" title="Richiedila online"><img src="/prepagate/img/s.gif" alt="Richiedila online" title="Richiedila online" border="0" /><span class="hide">Richiedila online</span></a>
		<?php
		}
	else
		{
?>
<!--a href="/index.php?page=paginterna.php&pag=richiedile&sez=0" id="b_richiedila_online" class="rollover" title="Richiedila online"><img src="/prepagate/img/s.gif" alt="Richiedila online" title="Richiedila online" border="0" /><span class="hide">Richiedila online</span></a-->
<?php
		}
	}
else
	{
?>
<a href="/index.php?page=paginterna.php&pag=richiedile&amp;sez=<?php print $sez+1;?>" title="Richiedile online" class="rollover" id="b_richiedile_online"><img border="0" title="Richiedi" alt="Richiedi" src="/prepagate/img/s.gif"/><span class="hide">Richiedi</span></a>
<?php
	}
?>