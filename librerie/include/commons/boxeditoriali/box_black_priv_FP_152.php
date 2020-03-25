<div class="tabber">
	<div class="tablistcellc">
		<a href="javascript:;" onclick="opentab(this);" class="active">Ultimi movimenti</a>
		<a href="javascript:;" onclick="opentab(this);">Esito disposizioni</a>
	</div>
	<div class="boxcontainer">
		<div>
		<?php 
		virtual("/librerie/include/commons/tabelle/tab_black_priv_025h.html");
		?>
		</div>
			
		<div style="display:none;">
		<?php 
		virtual("/librerie/include/commons/tabelle/tab_black_priv_025.html");
		?>
		</div>
		<div class="fooform">
			<div class="fooformright">
				<div><a title="Lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
				<br class="clear"/>
			</div><br class="clear"/>
		</div><br class="clear"/>
	<?php if ($bank != "webank")
		{?>
		<!-- DISCLAIMER-->
		<div class="noteDiscl">			
			<p class="note">Suspendisse sem mi, sodales in, porta et, consequat a, nisl. Morbi et nulla. Nulla urna. In a justo vitae eros tempor placerat. Phasellus semper faucibus velit. Proin elit. In hac habitasse platea dictumst. Donec purus. Donec varius egestas orci. </p>
		</div>
		<!-- FINE DISCLAIMER-->
	<?php } ?>
	</div>
	<div class="shadow2"></div>
</div>