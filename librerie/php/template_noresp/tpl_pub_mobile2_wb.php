<?php 
	virtual ("/librerie/php/str_left_pub_wb.php");
?>
<div id="maincontent">
	<div class="maincontenttopper"></div>
	<!-- titolo -->
	<?php virtual("/librerie/include/commons/titoli/pub_wb_int_tit_003.php"); ?>
	<!-- visual dinamico -->
	<div class="maincontentobject">
		<div id="maincontentobjectarea">
			<!-- PRIMA AREA -->
			<div class="objectarea" id="guarda" style="display:none;"><embed src="https://media.webank.it/vod/video_mobile2.mov" width="382" height="241" autoplay="true" scale="tofit" controller="true" pluginspage="http://www.apple.com/quicktime/download/"></embed></div>
			<script type="text/javascript" defer="defer">		  
				var flashobject = new SWFObject("/wscmn/swf/videoplayer.swf", "flashguarda", "382", "241", "7", "#000000");
				flashobject.addParam("quality", "high");		
				flashobject.addParam("wmode", "opaque");
				flashobject.addParam("FlashVars","videoLink=https://media.webank.it/vod/video_mobile2.flv");
				flashobject.write("guarda");
			</script>
		</div>
		<div id="maincontentobjectmenu">
		</div>
	</div>
	<!-- /visual dinamico -->
	
	<?php virtual("/librerie/include/commons/testi/pub_wb_int_txt_008.php"); ?>
	<?php virtual("/librerie/include/commons/testi/pub_wb_int_txt_008.php"); ?>
	<?php virtual("/librerie/include/commons/testi/pub_wb_int_txt_008.php"); ?>
	<div class="textRow">
		<div class="textRowLeft">
			<h5>SCARICA L'APP CHE FA PER TE</h5>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. 
				<br><br>
Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
			</p>
		</div>
		<div class="imgRowRight bordered">
			<div class="imgRowRightTop">
				<span class="titRowRight">lorem</span>
				<div class="linkRowRight">
					<a href="#" title="Iphone"><img src="/wscmn/img/btn_apple_store_download_ita.png" alt="Iphone"></a>
					<a href="#" title="Iphone"><img src="/wscmn/img/btn_android_store_download_ita.png" alt="Android"></a>
				</div>
			</div>
			<div class="imgRowRightBottom">
				<span class="titRowRight">ipsum</span>
				<div class="linkRowRight">
					<a href="#" title="Iphone"><img src="/wscmn/img/btn_apple_store_download_ita.png" alt="Iphone"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="textRow">
		<div class="textRowLeft">
			<h5>SCARICA L'APP CHE FA PER TE</h5>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. 
				<br><br>
Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
			</p>
		</div>
		<div class="imgRowRight bordered">
			<div class="imgRowRightTop">
				<div class="linkRowRight">
					<a href="#" title="Iphone"><img src="/wscmn/img/btn_apple_store_download_ita.png" alt="Iphone"></a>
					<a href="#" title="Iphone"><img src="/wscmn/img/btn_android_store_download_ita.png" alt="Android"></a>
				</div>
			</div>
		</div>
	</div>
</div>