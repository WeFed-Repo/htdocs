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
	$url_webank = str_replace("site=youweb","site=webank",$url);
	$url_youweb = str_replace("site=webank","site=youweb",$url); 
?>
<div class="librerie-switch">
	<a href="<?php print $url_webank; ?>" class="webank">WB</a>
	<a href="<?php print $url_youweb; ?>" class="youweb">YW</a>
</div>