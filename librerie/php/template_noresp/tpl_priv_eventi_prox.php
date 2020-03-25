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
				for ($i==0;$i<100; $i++)
				{
				?>
				<div class="eventRow<?php if($i==8) print " withImg"; ?>" id="Evento<?php print($i); ?>" style="display:none;">
					<div class="eventHover" style="display:none"></div>
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
			<div id="paginatorDiv"></div>
	<!-- / Elenco degli eventi -->
	
	<div class="fooform">
	<div class="fooformtop">&nbsp;</div>
	<div class="fooformleft">
		<div><a href="#1" class="btnformleft" title="lorem ipsum"><img src="/img/ret/btn_left_bi.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/btn_right_bi.gif" alt="" /></a></div>	
	</div>		
	<br class="clear" />
	</div>
	<script type="text/javascript" src="/wscmn/js/ret/priv_widgets.js"></script>
	<script type="text/javascript">
	initEventList(<?php print $openedEvent; ?>);
	$(function () {
		paginator({
			container: '#paginatorDiv',
			items: '.eventRow',
			beforeChangePage: function () {
				$('.eventDetail').hide();
				$('.eventRow').removeClass('opened');
			}
		});
	});
	</script>
		
