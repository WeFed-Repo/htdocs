<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.jqGrid.locale-it.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.jqGrid.js"></script>
<script type="text/javascript" src="/HT/JS/script/funzioniInvestimenti.js?v=161229"></script>

<div class="riquadro clearfix">
	<h1>
		<div class="flag hidden-xxs investimentiIndici">&nbsp;</div>
		Indici
	</h1>
	<span id="refreshIndici" class="context-buttons">
		<a title="Aggiorna" id="refresh" class="refreshButton pull-right"> </a>
	</span>
<script type="text/javascript">

	$(document).ready(function(){
		richiestaIndici(true);
		
			/** inizializzazione link da codificare */
	$('#refreshIndici').click(function() {
		richiestaIndici(false);
	});
		
});	

if(isMobile()){
	$( document ).ajaxComplete(function( event, xhr, settings ) {
		$(".investimentiMarquee #scorr a").each(function(){
			$(this).removeAttr("href");

		})
	});
}

</script>
<!--div id="loadingindici" class="caricamentoAjax" style="display: none;">
	<img src="/HT/IMAGES/caricamento.gif">
</div-->
	<div id="marqueeWrapper" style="opacity: 1;">
		<div class="marquee investimentiMarquee">
			<div id="scorr" class="margin-bottom10">
				<div class="row">
					<div class="col-xs-6">
						<a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEMIB&amp;codice=FTSEMIB" title="FTSE MIB">FTSE MIB</a>
					</div>
					<div class="col-xs-2 oRight">21.442</div>
					<div class="col-xs-2 oRight">12:47</div>
					<div class="col-xs-2 oRight">
						<strong class="negativo"> -0,21% </strong>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEITSTAR&amp;codice=FTSEITSTAR" title="FTSE Italia STAR">FTSE Italia STAR</a>
					</div>
					<div class="col-xs-2 oRight">34.988</div>
					<div class="col-xs-2 oRight">12:47</div>
					<div class="col-xs-2 oRight">
						<strong class="negativo"> -0,69% </strong>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEITMIDCAP&amp;codice=FTSEITMIDCAP" title="FTSE Italia Mid Cap">FTSE Italia Mid Cap</a>
					</div>
					<div class="col-xs-2 oRight">40.251</div>
					<div class="col-xs-2 oRight">12:47</div>
					<div class="col-xs-2 oRight">
						<strong class="negativo"> -0,77% </strong>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEITSMACAP&amp;codice=FTSEITSMACAP" title="FTSE Italia Small Cap">FTSE Italia Small Cap</a>
					</div>
					<div class="col-xs-2 oRight">23.344</div>
					<div class="col-xs-2 oRight">12:47</div>
					<div class="col-xs-2 oRight">
						<strong class="negativo"> -0,57% </strong>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEITALLSHARE&amp;codice=FTSEITALLSHARE" title="FTSE Italia All-Share">FTSE Italia All-Share</a>
					</div>
					<div class="col-xs-2 oRight">23.666</div>
					<div class="col-xs-2 oRight">12:47</div>
					<div class="col-xs-2 oRight">
						<strong class="negativo"> -0,28% </strong>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="actions" class="actions pull-right margin-bottom5">
		<div class="actions pull-right">
			<input type="button" class="btn button thin XL hidden-xs" value="Indici" onclick="javascript:goToPage('/investimenti/indici.do')">
		</div>
	</div>
	<span style="padding-left:5px">Fonte dati: Borsa Italiana  Dati in tempo ritardato di 15 minuti</span> 
</div>

<!-- 	fix per centrarlo nella home -->
<style>
.caricamentoAjax {
left: 50%;
top: 50%;
}
</style>