<?php
	$ri5 = $_GET["ri5"];
	
	if (sizeOf($ri5)<=0)
	{
		$ri5=0;
	}
?>
<div class="divtabellalist">
	<table class="tabellalist" border="0">
		<tbody>
			<tr>
<tr>
<?php

if ($ri5 == 0)
{

	$iframelink = "http://fondisicav.webank.local/4tk21g96bx/landing/default.aspx";

?>
			
				<td class="on first"><a title="Ricerca veloce" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=1&ri4=0&ri5=0">Ricerca veloce</a></td>
				<td class="off"><a title="Ricerca avanzata" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=1&ri4=0&ri5=1">Ricerca avanzata</a></td>												
				
<?php
}
else
{
	
	$iframelink = "http://fondisicav.webank.local/4tk21g96bx/fundscreener/default.aspx";

?>
				<td class="off first"><a title="Ricerca veloce" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=1&ri4=0&ri5=0">Ricerca veloce</a></td>
				<td class="on"><a title="Ricerca avanzata" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=1&ri4=0&ri5=1">Ricerca avanzata</a></td>												
<?php
}
?>
				<td class="end"> </td>
			</tr>
		</tbody>
	</table>
</div>
<script src="/wscmn/js/ret/setiframe.js" language="javascript" type="text/javascript"></script>
<script type="text/javascript">document.domain = new String( document.domain.substring( document.domain.indexOf('.') + 1) );</script>
<iframe  name="funzione" id="funzione" scrolling="auto" height="500" frameborder="0" width="700px" onload="setTimeout('calcHeightIframe()', 100);" src="<?php print ($iframelink); ?>"></iframe>
