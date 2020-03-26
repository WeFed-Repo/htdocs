<div class="riquadro clearfix">
	
	
	


<h1>
	
		<div class="flag hidden-xxs investimentiIndici">&nbsp;</div>
	
	
		Indici
	
</h1>
		<span id="refreshIndici" class="context-buttons">
		
			<a title="Aggiorna" id="refresh" class="refreshButton pull-right"> </a>
		</span>
		<div class="homePageHelp clear-padding margin-bottom10">
				Aggiornato alle <span id="oraRefresh">17:35</span>
			</div>
 







<script type="text/javascript">

	$(document).ready(function(){
		/* richiestaIndici(); */
		
			/** inizializzazione link da codificare */
	$('#refreshIndici').click(function() {
		richiestaIndici();
	});
		
});	

if(isMobile()){
	/*
	$( document ).ajaxComplete(function( event, xhr, settings ) {
		$(".investimentiMarquee #scorr a").each(function(){
			$(this).removeAttr("href");

		})
	});*/
}

</script>
	<div id="loadingindici" class="caricamentoAjax" style="display: none;">
				<img src="/HT/IMAGES/caricamento.gif">
			</div>
	<div id="marqueeWrapper" style="opacity: 1;">
		<div class="marquee investimentiMarquee">
			<div id="scorr" class="margin-bottom10"><div class="row"><div class="col-xs-9"><a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEMIB&amp;codice=FTSEMIB" title="FTSE MIB">FTSE MIB</a></div><div class="col-xs-3 oRight"><strong class="positivo"> 1,70% </strong></div></div><div class="row"><div class="col-xs-9"><a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEITSTAR&amp;codice=FTSEITSTAR" title="FTSE Italia STAR">FTSE Italia STAR</a></div><div class="col-xs-3 oRight"><strong class="positivo"> 1,24% </strong></div></div><div class="row"><div class="col-xs-9"><a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEITMIDCAP&amp;codice=FTSEITMIDCAP" title="FTSE Italia Mid Cap">FTSE Italia Mid Cap</a></div><div class="col-xs-3 oRight"><strong class="positivo"> 1,55% </strong></div></div><div class="row"><div class="col-xs-9"><a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEITSMACAP&amp;codice=FTSEITSMACAP" title="FTSE Italia Small Cap">FTSE Italia Small Cap</a></div><div class="col-xs-3 oRight"><strong class="positivo"> 1,27% </strong></div></div><div class="row"><div class="col-xs-9"><a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEITALLSHARE&amp;codice=FTSEITALLSHARE" title="FTSE Italia All-Share">FTSE Italia All-Share</a></div><div class="col-xs-3 oRight"><strong class="positivo"> 1,68% </strong></div></div></div>
		</div>
	</div>
	
	<div id="actions" class="actions pull-right margin-bottom5">
		<div class="actions pull-right">
			<input type="button" class="btn button thin XL hidden-xs" value="Indici" onclick="javascript:goToPage('/investimenti/indici.do')">
		</div>
	</div>

 
</div>