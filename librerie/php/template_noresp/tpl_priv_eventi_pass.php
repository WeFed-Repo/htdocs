<h1>Lorem ipsum</h1>

<div class="eventoTitle">
<img src="/img/ret/img_eventi_tit.gif" title="">	
	<div class="boxcomunicaz_dettaglio">
		<span class="titolo">Sottotitolo sezione</span>
	</div>
<br class="clear" />	
</div>


		<!-- Elenco degli eventi -->
			<div class="eventList">
				<?php 
				for ($i==0;$i<20; $i++)
				{
				?>
				<div class="eventRow<?php if($i==8) print " withImg"; ?>" id="Evento<?php print($i); ?>">
					<div class="eventHover" style="display:none"></div>
					<div class="eventWrap">
						<?php if ($i==8) {?><img class="eventLogo" src="/img/ico1gr_eventi_top.gif"><?php } ?>
						<div class="eventRowLeft">
							<span><?php print($i); ?>/05 - Luogo lorem ipsum dolor</span>
							<a href="javascript:;" title="Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude">Lorem ipsum dolor sit amet cons...</a>
						</div>
						<div class="eventRowRight">
							<div class="eventIcoWrap">
								
							</div>						
						</div>
					</div>
					<div class="eventDetail" style="display:none">
						<div class="eventDetailBody">
							<div class="eventFiletto">&nbsp;</div>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laudeadipiscing elit summa cum laude. Lorem <a href="#">ipsum dolor</a> sit amet <strong>consectetur</strong> adipiscing elit summa cum laude.</p>
							<div class="eventContBox">
								<strong>Lorem ipsum</strong><br/>Lorem ipsum dolor
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laudeadipiscing</p>
								<span class="bgIcoTxt"><a href="#1" onclick="javascript:obscurateAll(1); openAlert('layeralert1');"><img src="/img/ret/btn_eventi_txt.gif" alt="" /></a></span> <span class="bgIcoVid"><a href="#1" onclick="javascript:obscurateAll(1); openAlert('layeralert2');"><img src="/img/ret/btn_eventi_vid.gif" alt="" /></a></span><br class="clear" />
							</div>							
							<div class="eventContBox">
								<strong>Lorem ipsum</strong><br/>Lorem ipsum dolor
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laudeadipiscing</p>
								<span class="bgIcoTxt"></span> <span class="bgIcoVid"></span><br class="clear" />
							</div>
							<div class="eventContBox">
								<strong>Lorem ipsum</strong><br/>Lorem ipsum dolor
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laudeadipiscing</p>
								<span class="bgIcoTxt"><a href="#1" onclick="javascript:obscurateAll(1); openAlert('layeralert1');"><img src="/img/ret/btn_eventi_txt.gif" alt="" /></a></span> <span class="bgIcoVid"><a href="#1" onclick="javascript:obscurateAll(1); openAlert('layeralert2');"><img src="/img/ret/btn_eventi_vid.gif" alt="" /></a></span><br class="clear" />
							</div>
							<div class="eventContBox">
								<strong>Lorem ipsum</strong><br/>Lorem ipsum dolor
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laudeadipiscing</p>
								<span class="bgIcoTxt"></span> <span class="bgIcoVid"><a href="#1" onclick="javascript:obscurateAll(1); openAlert('layeralert2');"><img src="/img/ret/btn_eventi_vid.gif" alt="" /></a></span><br class="clear" />
							</div>
							<div class="eventContBox">
								<strong>Lorem ipsum</strong><br/>Lorem ipsum dolor
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laudeadipiscing</p>
								<span class="bgIcoTxt"><a href="#1" onclick="javascript:obscurateAll(1); openAlert('layeralert1');"><img src="/img/ret/btn_eventi_txt.gif" alt="" /></a></span> <span class="bgIcoVid"></span><br class="clear" />
							</div>
							<div class="eventDetailConsole">
								<span class="eventDiff level2"><span>Difficolt&agrave;</span><span class="diff">&nbsp;</span></span><div class="vertFiletto">&nbsp;</div><a href="#" target="_blank" clasS="eventPdf">Lorem ipsum</a>
							</div>
							
						</div>
						<div class="eventDetailBottom">&nbsp;</div>
					</div>
				</div>
				<?php 
				} 
				?>
			</div>
			<script type="text/javascript">
				initEventList(<?php print $openedEvent; ?>);
			</script>			
	<!-- / Elenco degli eventi -->
		
		
<div class="layeralert2" id="layeralert1" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert1').dragHandle = new Draggable('layeralert1',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="unobscurateAll(); closeAlert('layeralert1');"/></div>
	<div class="body">
		<h2>Liberatoria lorem ipsum</h2>
		<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laudeadipiscing</p>
		<ul class="pdfinline">
			<li><a href="#">Manuale operativo</a></li>
		</ul><br class="clear" />
		<input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton">lorem Lorem ipsum sed diam nonummy nibh euismod<br class="clear" /><br />
		<div class="fooform">
			<div class="fooformleft">
				<div><a href="#1" class="btnformleft" title="lorem ipsum"><img src="/img/ret/btn_left_bi.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/btn_right_bi.gif" alt="" /></a></div>		
			<br class="clear" />
			</div>		
			<div class="fooformright">
				<div><a href="#1" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>	
			<br class="clear" />
			</div>	
			<br class="clear" />
		</div>		
	</div>
<div class="foot"></div>
</div>

<div class="layeralert4" id="layeralert2" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert2').dragHandle = new Draggable('layeralert2',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="unobscurateAll(); closeAlert('layeralert2');"/></div>
	<div class="body">
	<div id="splayer" class="margvideo">
			<embed src="/video/<?php print $movie; ?>.mov" width="500" height="303" autoplay="true" scale="tofit" controller="true" pluginspage="http://www.apple.com/quicktime/download/"></embed>
	</div>
		<script type="text/javascript" defer="defer">		  
			var flashobject = new SWFObject("/swf/videoplayer_500_281.swf", "videoPromoWow", "500", "303", "9", "#121212");
			flashobject.addParam("quality", "high");
			flashobject.addParam("salign", "tl");			
			flashobject.addParam("wmode", "opaque");
			flashobject.addParam("allowfullscreen","true");
			flashobject.addParam("FlashVars","videoLink=/video/<?php print $movie; ?>.flv");
			flashobject.write("splayer");
		</script>	
	</div>
<div class="foot"></div>
</div>
	
	<div class="fooform">
	<div class="fooformtop">&nbsp;</div>
	<div class="fooformleft">
		<div><a href="#1" class="btnformleft" title="lorem ipsum"><img src="/img/ret/btn_left_bi.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/btn_right_bi.gif" alt="" /></a></div>	
	</div>		
	<br class="clear" />
	</div>
