<div class="bannernav">
	<div class="navigator" id="bannernavNavigator">
		<a href="#" class="base" title="Lorem"></a>
		<a href="#" class="push" title="Ipsum amet" onclick="this.parentNode.style.display='none';document.getElementById('bannernavDetails2').style.display = 'block';"></a>
		<?php
		if ($bank != "ca")
			{
			?>
			<a href="#" class="pro" title="Consectetur" onclick="this.parentNode.style.display='none';document.getElementById('bannernavDetails3').style.display = 'block';"></a>
			<?php
			}
			?>
	</div>
	<div class="details" style="display: none;" id="bannernavDetails1">
		<a href="javascript:;" onclick="this.parentNode.style.display='none'; document.getElementById('bannernavNavigator').style.display = 'block';" class="close"></a>
		<h1>Compravendita base</h1>
		<div class="buttoncontainer"><a href="javascript:;" class="btnevid1" title="Serve aiuto?"><img src="/img/ret/btn_left_sm1.gif" alt=""/><span>Lorem ipsum</span><img src="/img/ret/btn_right_sm1.gif" alt=""/></a></div>
		<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, lorem amet ipsum lorem.</p>
	</div>
	<div class="details" style="display: none;" id="bannernavDetails2">
		<a href="javascript:;" onclick="this.parentNode.style.display='none'; document.getElementById('bannernavNavigator').style.display = 'block';" class="close"></a>
		<h1>Trading desk push</h1>
		<div class="buttoncontainer"><a href="javascript:;" class="btnevid1" title="Compravendita"><img src="/img/ret/btn_left_sm1.gif" alt=""/><span>Compravendita</span><img src="/img/ret/btn_right_sm1.gif" alt=""/></a><a href="javascript:;" class="btnevid1" title="Serve aiuto?"><img src="/img/ret/btn_left_sm1.gif" alt=""/><span>Lorem ipsum</span><img src="/img/ret/btn_right_sm1.gif" alt=""/></a></div>
		<p>Lorem amet dolor ipsum dolor sit amet consectetur adipiscing elit.<br>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
	</div>
	<div class="details" style="display: none;" id="bannernavDetails3">
		<a href="javascript:;" onclick="this.parentNode.style.display='none'; document.getElementById('bannernavNavigator').style.display = 'block';" class="close"></a>
		<h1>Trading desk pro</h1>
		<div class="buttoncontainer"><a href="javascript:;" class="btnevid1" title="Serve aiuto?"><img src="/img/ret/btn_left_sm1.gif" alt=""/><span>Lorem ipsum</span><img src="/img/ret/btn_right_sm1.gif" alt=""/></a></div>
		<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor.</p>
	</div>
</div>