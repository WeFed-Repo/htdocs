<?php 
	// Componente switch sito (replace del parametro sito nell'url)
	$url = $_SERVER["REQUEST_URI"];
	if (strrpos($url,"site=")===false) {
		if(strrpos($url,"?")===false) {
			$url = $url."?site=webank";
		}
		else
		{
			$url = $url."&site=webank";
		}
	}
	$sitesdic = ["site=webank","site=youweb","site=aletti"];

	$url_webank = str_replace($sitesdic,"site=webank",$url);
	
	$url_youweb = str_replace($sitesdic,"site=youweb",$url); 
	
	$url_aletti = str_replace($sitesdic,"site=aletti",$url); 

?>
<div class="librerie-switch">
	<a href="<?php print $url_webank; ?>" class="webank">WB</a>
	<a href="<?php print $url_youweb; ?>" class="youweb">YW</a>
	<?php if ($_SERVER["HTTP_HOST"] == "convergenza.wefed.local")  { ?>
		<a href="<?php print $url_aletti; ?>" class="aletti">AL</a>
	<?php } ?>
</div>