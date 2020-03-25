<?php if ($bank == "webank")
	{
?>
<!--FP Eventi -->
<br class="clear" />
<div id="intslideEventi"></div>
<script type="text/javascript">
	slideEventiInt('intslideEventi','/xml/ret/slideEventi.xml');
</script>


<br class="clear" /><br/>
<div class="tabber">
	<div class="tablistcellc">
		<a href="javascript:;" onclick="opentab(this);" class="active">Lorem ipsum 1</a>
		<a href="javascript:;" onclick="opentab(this);">Lorem ipsum 2</a>
	</div>
							
	<div class="boxcontainer">
		<div class="boxfpnews" style="background-color:#fff">
		<!-- Elenco degli eventi -->
			<div class="eventList">
				<?php 
				for ($i==0;$i<20; $i++)
				{
				?>
				<div class="eventRow<?php if($i==8) print " withImg"; ?> eventRowsmall" id="Evento<?php print($i); ?>">
					<div class="eventHover eventHoversmall" style="display:none"></div>
					<div class="eventWrap">
						<?php if ($i==8) {?><img class="eventLogo" src="/img/ico1gr_eventi_top.gif"><?php } ?>
						<div class="eventRowLeft">
							<span><?php print($i); ?>/05 - Luogo lorem ipsum dolor</span>
							<a href="javascript:;" title="Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude">Lorem ipsum dolor sit amet cons...</a>
						</div>
						<div class="eventRowRight">
							<div class="eventIcoWrap">
								<?php
								if ($i==2)
								{
								?>
								<a title="prospect"><img src="/img/event_ico_pro.gif"></a>
								<a title="streaming/live"><img src="/img/event_ico_srtliv.gif"></a>
								<?php
								}
								else if ($i==3)
								{
								?>
								<a title="prospect"><img src="/img/event_ico_pro.gif"></a>
								<a title="live"><img src="/img/event_ico_live.gif"></a>
								<?php
								}
								else
								{
								?>
								<a title="clienti"><img src="/img/event_ico_cust.gif"></a>
								<a title="streaming"><img src="/img/event_ico_stream.gif"></a>
								<?php
								}
								?>
							</div>
							<?php
							if ($i != 3)
							{ 					
							?>
							<a href="/connect.php?page=str_interna_pub_wb.php&amp;tpl=tpl_pub_area_eventi_registrazione.php" class="rightButt" title="Iscriviti"><img src="/img/event_btn_iscriviti.png"></a>
							<?php 
							}
							else
							{
							?>
							<span class="rightFull">completo</span>
							<?php
							}
							?>
						</div>
					</div>
					<div class="eventDetail" style="display:none">
						<div class="eventDetailBody">
							<div class="eventFiletto">&nbsp;</div>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laudeadipiscing elit summa cum laude. Lorem <a href="#">ipsum dolor</a> sit amet <strong>consectetur</strong> adipiscing elit summa cum laude.</p>
							<h5>Lorem dolor sit amet</h5>
							<ul class="strongflaglist">
								<li>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude strong love</li>
								<li>Dolor? Ipsum dolori ipsum vertebrae <strong>finalis</strong> mitiga cum aulin</li>
								<li>Corpus melassa dolor liquid tension opossum</li>
								<li>Tenebrae assault dolore daenebula altair chronicles</li>
							</ul>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laudeadipiscing elit summa cum laude. Lorem <a href="#">ipsum dolor</a> sit amet <strong>consectetur</strong> adipiscing elit summa cum laude.</p>
							<h5>Lorem dolor sit amet</h5>
							<ul class="strongflaglist">
								<li>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude strong love</li>
								<li>Dolor? Ipsum dolori ipsum vertebrae <strong>finalis</strong> mitiga cum aulin</li>
								<li>Corpus melassa dolor liquid tension opossum</li>
								<li>Tenebrae assault dolore daenebula altair chronicles</li>
							</ul>
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
		
		</div>

		<div class="boxfpnews" style="display: none;">
		</div>

		<div class="boxfpnews" style="display: none;">
		</div>
	</div>
	<div class="shadow2"></div>
</div>
<?php } ?>
<!-- FINE FP Eventi-->