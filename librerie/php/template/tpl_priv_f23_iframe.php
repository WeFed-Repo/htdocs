<?php
$liv3 = $_GET["liv3"];

$iframecont = array(
		"tpl_priv_pagamento_f23_modulo.php",
		"tpl_priv_pagamento_f23_modulo.php",
		"tpl_priv_pagamento_f23_modulo.php",
		"tpl_priv_pagamento_f23_modulo.php",
		"tpl_priv_pagamento_f24_riepilogo.php"
	);
$ifpage = $iframecont[$liv3];

?>
<script type="text/javascript">
	
	var setIframeSize = function() {
		iFramePage.css("height",0);
		iFramePage.css("height",iFramePage.contents().height() + 30 + "px");
	};
	var refreshIframeSize = function(){
		setIframeSize();
		setTimeout(setIframeSize,500);
	}

	$(function(){
		iFramePage = $("#f24if").on("load",setIframeSize);
	});
</script>

<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="connect.php?page=strutt_priv.php&tpl=tpl_priv_f23_iframe.php&responsive=y&liv0=7&liv1=2&liv2=0&liv3=0&fdeb=true">F23 Ordinario</a></li>			
			<li><a href="connect.php?page=strutt_priv.php&tpl=tpl_priv_f23_iframe.php&responsive=y&liv0=7&liv1=2&liv2=0&liv3=4&fdeb=true">Riepilogo F23</a></li>
		</ul>
	</div>
	<div class="separator" style="min-width: 655px;"></div>
</div>
<iframe class="f24iframe" id="f24if" name="frF24Center" src="/librerie/php/template/f24/<?php print $ifpage; ?>"></iframe>
