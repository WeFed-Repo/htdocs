<h2>Test iframe</h2>
<section>
	<h3>Altezza calcolata dinamicamente (serve stesso document.domain)
	<iframe class="resp-iframe" src="iframe.php"></iframe>
</section>
<section>
	<h3>Altezza fissa (per ovviare a problemi di sicurezza)</h3>
	<iframe class="resp-iframe fixed-height" src="iframe.php" style="height:500px"></iframe>
</section>

<section>
	<h3>Sorgente esterna</h3>
	<script>
		
		// Funzione per
		$(window).on("message onmessage",function(e){
			var evData = e.originalEvent.data? JSON.parse(e.originalEvent.data) : null;
			 if(evData && evData.eventname && evData.eventname === "changeheightiframe")
		    {
		        $("#" + evData.iframeid).css("height",evData.newheight)
		    }
		});

	</script>
	<iframe class="resp-iframe fixed-height" src="http://libreriewebank.wefed.local/iframe.php" style="height:100px" id="iFrameExt"></iframe>
</section>