<div class="maincontentobject">
		<div id="maincontentobjectarea">
			<!-- PRIMA AREA -->
			<div class="objectarea" id="a"></div>
			<script type="text/javascript">		  
				var flashobject = new  SWFObject("/wscmn/swf/segnaposto_video.swf", "flash", "382", "241", "7", "#FFFFFF");
				flashobject.addParam("quality", "high");		
				flashobject.addParam("wmode", "opaque");
				flashobject.write("a");
			</script>
			<div class="objectarea" id="ascolta" style="display:none;"></div>
				<script type="text/javascript">		  
				var flashobject = new  SWFObject("/wscmn/swf/segnaposto_audio.swf", "flash", "382", "241", "7", "#FFFFFF");
				flashobject.addParam("quality", "high");		
				flashobject.addParam("wmode", "opaque");
				flashobject.write("ascolta");
			</script>
			<!-- SECONDA AREA -->
		</div>
		<div id="maincontentobjectmenu">
			<a id="tabguarda" onclick="mainContentObjectOpen('guarda');" class="selected" alt="guarda" href="javascript:;"/><a id="tabascolta" onclick="mainContentObjectOpen('ascolta');" alt="ascolta" href="javascript:;"/><a class="disabled"/>
		</div>
</div>
