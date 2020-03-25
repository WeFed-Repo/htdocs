<div class="maincontentobject">
		<div id="maincontentobjectmenu">
		<?php 
		if (empty($tpl))
		{
		?>
		<a href="javascript:;" alt="guarda" class="selected" onclick="mainContentObjectOpen('guarda');" id="tabguarda"/><a href="javascript:;" alt="ascolta" onclick="mainContentObjectOpen('ascolta');" id="tabascolta"/><a class="disabled"></a>
		<?php
		}
		?>
		</div>
		<div id="maincontentobjectarea">
			<!-- PRIMA AREA -->
			<?php
			if ($tpl == "tpl_pub_tcube_wb.php")
			{
			?>
			<div class="objectarea" id="guarda">
				<script type="text/javascript" defer="defer">		  
					var flashobject = new SWFObject("/wscmn/swf/guarda_terzo_livello.swf", "flashguarda", "546", "215", "7", "#ffffff");
					flashobject.addParam("quality", "high");		
					flashobject.addParam("wmode", "opaque");
					flashobject.addParam("FlashVars","filePath=/img/guarda_terzo_livello.jpg");
					flashobject.write("guarda");
				</script>
			</div>
			<?php
			}
			else
			{
			?>
			<div class="objectarea" id="guarda"></div>
			<script type="text/javascript" defer="defer">		  
				var flashobject = new SWFObject("/wscmn/swf/videoplayer_tl.swf", "flashguarda", "559", "228", "7", "#ffffff");
				flashobject.addParam("quality", "high");		
				flashobject.addParam("wmode", "opaque");
				flashobject.addParam("allowfullscreen","true");
				flashobject.addParam("FlashVars","videoLink=/swf/test.flv");
				flashobject.write("guarda");
			</script>
			<?php
			}
			?>
			
			<!-- SECONDA AREA -->
			<div class="objectarea" id="ascolta" style="display:none;">
			<script type="text/javascript">		  
				var audioobject = new SWFObject("/wscmn/swf/audioplayer_tl.swf", "flashascolta","559", "228", "7", "#000000");
				audioobject.addParam("quality", "high");
				audioobject.addParam("wmode", "opaque");
				audioobject.addParam("allowfullscreen","false");
				audioobject.addParam("Flashvars","audioLink=/mp3/090306-melog.mp3")
				audioobject.write("ascolta"); 
				
			</script>
			</div>
			
			<!-- TERZA AREA -->
			
			<div class="objectarea" id="simula" style="display:none;">
			<script type="text/javascript">		  
				var flashobject = new  SWFObject("/wscmn/swf/ria_terzo_livello.swf", "flash", "546", "215", "7", "#FFFFFF");
				flashobject.addParam("quality", "high");		
				flashobject.addParam("wmode", "opaque");
				flashobject.write("simula");
			</script>
			</div>
			
		</div>
</div>
