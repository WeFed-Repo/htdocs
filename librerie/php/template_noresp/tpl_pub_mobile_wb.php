<?php 
	virtual ("/librerie/php/str_left_pub_wb.php");
?>
<div id="maincontent">
	<div class="maincontenttopper"></div>
	<!-- titolo -->
	<?php virtual("/librerie/include/commons/titoli/pub_wb_int_tit_003.php"); ?>
	<!--fine  titolo -->
	
	<!-- visual dinamico -->
	<div class="maincontentobject">
		<div id="maincontentobjectarea">
			<!-- PRIMA AREA -->
			<div class="objectarea" id="guarda" style="display:none;"><embed src="https://media.webank.it/vod/video_mobile.mov" width="382" height="241" autoplay="true" scale="tofit" controller="true" pluginspage="http://www.apple.com/quicktime/download/"></embed></div>
			<script type="text/javascript" defer="defer">		  
				var flashobject = new SWFObject("/wscmn/swf/videoplayer.swf", "flashguarda", "382", "241", "7", "#000000");
				flashobject.addParam("quality", "high");		
				flashobject.addParam("wmode", "opaque");
				flashobject.addParam("FlashVars","videoLink=https://media.webank.it/vod/video_mobile.flv");
				flashobject.write("guarda");
			</script>
			<!-- TERZA AREA -->
			<div class="objectarea" id ="simula"><img src="/img/visual_simula_app.jpg" alt="Webank App"></div>
		</div>
		<div id="maincontentobjectmenu">
		</div>
	</div>
	<!-- /visual dinamico -->
	<h3>LA BANCA NELLE TUE TASCHE</h3>
	<p>Contollare il saldo, Ricariccare il cel, lorem ipsum dolor sic amet lorem ipsum dolor sic amet ipsum dolor sic amet lorem ipsum dolor sic ametipsum dolor sic amet lorem ipsum dolor sic amet</p>
	<h5>A tutto Trading!</h5>
	<p>Scopri T3 per iPad, la nuova app di Webank che ti permette di fare trading in qualsiasi momento e ovunque tu sia.</p>
	<div class="filettobutton">
		<a title="Scopri T3 per iPad" href="#" class="greenbutton"><span>Scopri T3 per iPad</span></a>
	</div>
	<p class="black"><strong>...lorem ipsum dolor</strong><br>Lorem ipsum dolor Lorem ipsum dolor  Lorem ipsum dolor Lorem ipsum dolor  Lorem ipsum dolor Lorem ipsum dolor  Lorem ipsum dolor Lorem ipsum dolor.</p>
	<br>
	<h3>LOREM IPSUM DOLOR SIT AMET</h3>
	<!-- BOX PULSANTINI -->
	<div class="boxevidenza">
	<div class="top"></div>
		<div class="middle">
			<div class="bg">
				<h5>Lorem ipsum dolor sit amet</h5>
				<p class="black"> Lorem ipsum dolor Lorem ipsum dolor  Lorem ipsum dolor Lorem ipsum dolor  Lorem ipsum dolor Lorem ipsum dolor  Lorem ipsum dolor.</p>
				<div class="boxedButt">
					<span>iPhone</span>
					<a href="#" target="_blank" title="Vai all'App Store"><img src="/wscmn/img/btn_apple_store.gif" title="App Store"></a>
				</div>
				<div class="boxedButt">
					<span>iPad</span>
					<a href="#" target="_blank" title="Vai all'App Store"><img src="/wscmn/img/btn_apple_store.gif" title="App Store"></a>
				</div>
			</div>
		</div>
		<div class="bottom"></div>
	</div>
	<!-- BOX PULSANTINI -->
	<div class="boxevidenza">
	<div class="top"></div>
		<div class="middle">
			<div class="bg">
				<h5>Lorem ipsum dolor sit amet</h5>
				<p class="black"> Lorem ipsum dolor Lorem ipsum dolor  Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor  Lorem ipsum dolor.</p>
				<div class="boxedButt">
					<span>Android</span>
					<a href="#" target="_blank" title="Vai a Google Play"><img src="/wscmn/img/btn_google_play.gif" title="Google Play"></a>
				</div>
				<div class="boxedButt">
					<span>Black Berry</span>
					<a href="#" target="_blank" title="Vai al Black Berry App World"><img src="/wscmn/img/btn_blackbarry.gif" title="Black Berry App World"></a>
				</div>
				<div class="boxedButt">
					<span>NOKIA</span>
					<a href="#" target="_blank" title="Vai all'Ovi Nokia"><img src="/wscmn/img/btn_nokia.gif" title="Ovi Nokia"></a>
				</div>
				<div class="boxedButt">
					<span>Windows Store</span>
					<a href="#" target="_blank" title="Vai al Windows Store"><img src="/wscmn/img/btn_win_store.gif" title="Windows Store"></a>
				</div>
			</div>
		</div>
		<div class="bottom"></div>
	</div>
</div>
<?php 
	virtual ("/librerie/php/str_right_pub_wb.php");
?>
