<h1>Le app di <?php print ($bank); ?></h1>
<!-- BOX SUPERIORE -->
<script type="text/javascript" src="/wscmn/js/jquery.bxslider.js"></script>
<!-- BOX DESCRITTIVO -->
<div class="boxedInfo large">
	<!-- CAROUSEL -->
	<div id="boxedCarousel">
		<div id="boxedCarouselArrows">
			<a class="left" href="javascript:;"></a>
			<a class="right" href="javascript:;"></a>
		</div>
		<div id="boxedCarouselSet">
			<img src="/img/ret/mobile_car_1.jpg" />
			<img src="/img/ret/mobile_car_2.jpg"/>
			<?php
			if ($bank=="webank")
			{
			?>
			<img src="/img/ret/mobile_car_3.jpg"/>
			<?php } ?>
		</div>
		<div id="boxedCarouselPager">
			<div id="boxedCarouselPages"></div>
		</div>
		<script type="text/javascript">
			var bCS = $("#boxedCarouselSet").bxSlider({
				adaptiveHeight: true,
				infiniteLoop: true,
				touchEnabled: true,
				controls: false,
				useCSS: false,
				pagerSelector: $('#boxedCarouselPages'),
				speed: 300
			});
			$("#boxedCarouselArrows a.left").click(function() {bCS.goToPrevSlide()});
			$("#boxedCarouselArrows a.right").click(function() {bCS.goToNextSlide()});
		</script>
	</div>
	
	<!-- FINE CAROUSEL -->
	<?php
			if ($bank=="webank")
			{
			?>
	<h3 class="titleFiletto"><span>Lorem ipsum dolor sit amet</span></h3>
	<ul class="flaglist">
		<li>Lorem ipsum dolor sit amet consectetur</li>
		<li>Lorem ipsum dolor sit amet consectetur</li>
		<li>Lorem ipsum dolor <strong>sit amet</strong></li>
		<li>Lorem ipsum dolor adipiscing elit summa cum laude</li>
		<li>Lorem ipsum dolor sit collauda amet consectetur</li>
	</ul>
	<ul class="flaglist">
		<li>Lorem ipsum dolor sit amet consectetur</li>
		<li>Lorem ipsum dolor sit amet consectetur</li>
		<li>Lorem ipsum dolor sit amet</li>
		<li>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude</li>
		<li>Lorem ipsum dolor sit amet consectetur</li>
	</ul>
		<!-- OVERLAY VIDEO -->
		<!-- OVERLAYER VIDEO FONDI E SICAV -->
		<div class="layeralert2" id="videoLay" style="display: none">
			<div class="head" ><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="javascript: closePopOverLayer('videoLay'); "/></div>
			<div id="bodyPopUp" class="body">
				<div class="important">
					<!-- Corpo overlay -->
					<div id="videoApp" style="margin:0 0 0 20px">
						<embed src="https://media.webank.it/vod/video_mobile.mov" width="382" height="241" autoplay="true" scale="tofit" controller="true" pluginspage="http://www.apple.com/quicktime/download/"></embed>
					</div>
					<script defer="defer" type="text/javascript"> 
						var flashobject = new SWFObject("/swf/videoplayer.swf", "flash", "382", "241", "9", "#000000"); 
						flashobject.addParam("quality", "high"); 
						flashobject.addParam("wmode", "opaque"); 
						flashobject.addParam("allowfullscreen","false"); 
						flashobject.addParam("allowscriptaccess", "always"); 
						flashobject.addParam("FlashVars","videoLink=https://media.webank.it/vod/video_mobile.flv"); 
						flashobject.write("videoApp");
					</script> 
					<!-- Fine corpo overlay -->
					</div>
				</div>
			<div class="foot"></div>
		</div>
		<!-- FINE OVERLAYER VIDEO FONDI E SICAV -->
		<a href="javascript:;" onclick="openPopOverLayer('#videoLay')" class="rightPromo"><img src="/img/ret/mobile_promo_right.gif"></a>
		<!-- FINE OVERLAY VIDEO + BOTTONE -->
	<?php } ?>

	<?php
			if ($bank=="bpm")
			{
			?>
	<h3 class="titleFiletto"><span>Lorem ipsum dolor sit amet</span></h3>
	<ul class="flaglist dueCol">
		<li>Lorem ipsum dolor sit amet consectetur</li>
		<li>Lorem ipsum dolor sit amet consectetur</li>
		<li>Lorem ipsum dolor <strong>sit amet</strong></li>
		<li>Lorem ipsum dolor adipiscing elit summa cum laude</li>
		<li>Lorem ipsum dolor sit collauda amet consectetur</li>
	</ul>
	<ul class="flaglist dueCol">
		<li>Lorem ipsum dolor sit amet consectetur</li>
		<li>Lorem ipsum dolor sit amet consectetur</li>
		<li>Lorem ipsum dolor sit amet</li>
		<li>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude</li>
		<li>Lorem ipsum dolor sit amet consectetur</li>
	</ul>
	
	<?php } ?>
	
</div>
<!-- FINE BOX DESCRITTIVO -->
<h2 class="helveTit">Lorem ipsum dolor sit lorem?</h2>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur <strong>adipiscing</strong> elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. </p>
<div class="infomidlarge">
	<img src="/img/ret/mobile_store.gif" class="qr">
		<?php
			if ($bank=="webank")
			{
			?>
	
	<div class="col2">
		<h2 class="titGeneric02 colorDark3">Lorem ipsum dolor</h2>
		<div class="boxedInfo">
			<div class="flLeft first">
				<div class="flLeft paddRightSmall">
					<h2 class="titGeneric02 txtSize16 colorDark3">iPhone</h2>
					<a href="#"><img src="/wscmn/img/btn_apple_store.gif" alt=""/></a>
				</div>
				<div class="flRight">
					<h2 class="titGeneric02 txtSize16 colorDark3">Android</h2>
					<a href="#"><img src="/wscmn/img/btn_google_play.gif" alt=""/></a>
				</div>
			</div>
			<div class="flLeft">
				<div class="flLeft">
					<h2 class="titGeneric02 txtSize16 colorDark3">Black Berry</h2>
					<a href="#"><img src="/wscmn/img/btn_blackbarry.gif" alt=""/></a>
				</div>
				<div class="flRight">
					<h2 class="titGeneric02 txtSize16 colorDark3">NOKIA</h2>
					<a href="#"><img src="/wscmn/img/btn_nokia.gif" alt=""/></a>
				</div>
			</div>
		</div>
	</div>	
	<div class="col1">
		<h2 class="titGeneric02 colorDark3">Lorem dolor</h2>
		<div class="boxedInfo">
		<div class="flLeft first">	
			<div>
				<h2 class="titGeneric02 txtSize16 colorDark3">iPad</h2>
				<a href="#"><img src="/wscmn/img/btn_apple_store.gif" alt=""/></a>
			</div>
		</div>	
		<div>
			<h2 class="titGeneric02 txtSize16 colorDark3">Windows Store</h2>
			<a href="#"><img src="/wscmn/img/btn_win_store.gif" alt=""/></a>
		</div>
		
		</div>
	</div>
	<br class="clear">
	<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. </p>
	<h2 class="titGeneric02 colorDark3">Lorem ipsum dolor</h2>
	<div class="boxedInfo large">
		<div class="txtIconaDx">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboredolor 
	in reprehenderit in voluptate velit esscillum dolore eu fugiat nulla pariatur. Excepteur sint occaei cupidatat 
	non proident, sunt in culpa qui officia.</div>
		<div class="IconaDx">
			<h2 class="titGeneric02 txtSize16 colorDark3">iPad</h2>
			<a href="#"><img alt="" src="/wscmn/img/btn_apple_store.gif"></a>
		</div>
	</div>
	
	<h2 class="titGeneric02 colorDark3">Lorem ipsum dolor</h2>
	<div class="boxedInfo large">
		<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboredolor 
	in reprehenderit in voluptate velit esscillum dolore eu fugiat nulla pariatur. Excepteur sint occaei cupidatat 
	non proident, sunt in culpa qui officia.</div>
	</div>
	
	<?php } ?>
	<?php
			if ($bank=="bpm")
			{
			?>
			
	<div class="colhalf">
		<div class="boxedInfo">
			<div class="first">
				<h2 class="titGeneric02 txtSize16 colorDark3">iPhone</h2>
				<a href="#"><img src="/wscmn/img/btn_apple_store.gif" alt=""/></a>
			</div>
			<div class="">
				<h2 class="titGeneric02 txtSize16 colorDark3">Android</h2>
				<a href="#"><img src="/wscmn/img/btn_google_play.gif" alt=""/></a>
			</div>
		</div>
	</div>	
	<div class="colhalf">
		<div class="boxedInfo">
			<div class="">
				<h2 class="titGeneric02 txtSize16 colorDark3">iPad</h2>
				<a href="#"><img src="/wscmn/img/btn_apple_store.gif" alt=""/></a>
			</div>
		
		</div>
	</div>	
	<h2 class="helveTit">Lorem ipsum dolor sit lorem?</h2>
	<div class="boxedInfo large">
		<img src="/img/ret/banner_app.jpg" class="flLeft"/>
		<p class="txtDx">Lorem ipsum dolor sit amet, consectetur aici
elit, sed do eiusmod tempor incididunt ut labore 
dolore magna aliqua.t enim ad <br/><br/><strong class="colorBank">minim veni
am,</strong> quis nostrud exercitation ullamco laboris
aliquip ex ea commodo consequat.</p>
	</div>
	
	<?php } ?>
</div>
<!-- FINE BOX SUPERIORE -->