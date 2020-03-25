<div id="boxedCarouselAndroid" class="vtContainer">
		<div id="boxedCarouselSet2" class="bxslider">
			<img src="/img/ret/mobile_car_and1.jpg" />
			<img src="/img/ret/mobile_car_and2.jpg"/>
			<img src="/img/ret/mobile_car_and3.jpg"/>
			<img src="/img/ret/mobile_car_and4.jpg"/>
			<img src="/img/ret/mobile_car_and5.jpg"/>
		</div>
		<div id="boxedCarouselPager2" class="row-fluid">
			<div class="textboxeCarouselPages span8">
				<div class="visible"><p>TESTO 1 ANDR:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adfgd minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p></div>
				<div><p>TESTO 2:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adfgd minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p></div>
				<div><p>TESTO 3:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adfgd minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p></div>
				<div><p>TESTO 4:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adfgd minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p></div>
				<div><p>TESTO 5:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adfgd minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p></div>
			</div>
			<div id="boxedCarouselPagesAnd" class="span4 boxedCarouselPagesAnd"></div>
		</div>
		<script type="text/javascript">
			var carouselAnd = $("#boxedCarouselSet2").bxSlider({
				adaptiveHeight: true,
				infiniteLoop: true,
				touchEnabled: true,
				controls: true,
				useCSS: false,
				pagerSelector: $('#boxedCarouselPagesAnd'),
				onSlideBefore: function(currentIndex){
				  var count = carouselAnd.getCurrentSlide();
				   $("#boxedCarouselAndroid .textboxeCarouselPages div").hide();
					$("#boxedCarouselAndroid .textboxeCarouselPages div").eq(count).fadeIn(1000);
				}
			})
			$('.vtMenuT3 a').on('click', function() { 
				carouselAnd.reloadSlider();	
			 })
		</script>
</div>

<div id="boxedCarouselIOS" class="vtContainer" style="display:none">
		<div id="boxedCarouselSet" class="bxslider">
			<img src="/img/ret/mobile_car_ios1.jpg" />
			<img src="/img/ret/mobile_car_ios2.jpg"/>
			<img src="/img/ret/mobile_car_ios3.jpg"/>
			<img src="/img/ret/mobile_car_ios4.jpg"/>
			<img src="/img/ret/mobile_car_ios5.jpg"/>
		</div>
		<div id="boxedCarouselPager" class="row-fluid">
			<div class="textboxeCarouselPages span8">
				<div class="visible"><p>TESTO 1 IOS:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adfgd minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p></div>
				<div><p>TESTO 2 IOS:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adfgd minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p></div>
				<div><p>TESTO 3 IOS:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adfgd minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p></div>
				<div><p>TESTO 4 IOS:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adfgd minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p></div>
				<div><p>TESTO 5 IOS:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adfgd minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p></div>
			</div>
			<div id="boxedCarouselPagesIos" class="span4 boxedCarouselPagesIos"></div>
		</div>
		<script type="text/javascript">
			var carouselIos = $("#boxedCarouselSet").bxSlider({
				adaptiveHeight: true,
				infiniteLoop: true,
				touchEnabled: true,
				controls: true,
				useCSS: false,
				pagerSelector: $('#boxedCarouselPagesIos'),
				onSlideBefore: function(currentIndex){
				  var count = carouselIos.getCurrentSlide();
				   $("#boxedCarouselIOS .textboxeCarouselPages div").hide();
					$("#boxedCarouselIOS .textboxeCarouselPages div").eq(count).fadeIn(1000);
				}
			})
			$('.vtMenuT3 a').on('click', function() { 
				carouselIos.reloadSlider();	
			 })
		</script>
</div>



<script type="text/javascript" src="/wscmn/js/ret/priv_widgets.js"></script>
