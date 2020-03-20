<h2>Eventi</h2>
<script type="text/javascript" src="/WB/fe/js/eventi.js"></script>
<script src="/WB/fe/js/widgets.js" type="text/javascript"></script> 
<section class="hidden-xs">
	<!-- sezione immagine top da ridisegnare-->
	<img title="eventi" alt="eventi" src="/WB/fe/img/defaultImg.png" class="img-resp">
</section>
<!-- sezione eventi in tab-->
<section>

<!--TAB DI NAVIGAZIONE -->
<div class="navfrontPage navcommPage outerTab">
	<div class="tab-content-group">
			<div class="innerTab">
				<ul>
					<li class="on"><a data-wrapper="eventiTab1">In programma</a></li>
					<li class=""><a data-wrapper="eventiTab2">Passati</a></li>
				</ul>
			</div>
			<div class="separator"></div>
			<div class="panel-fill innerContFirstLev">
				<div id="eventiTab1">
					<div class="navContFirstLev outerTab">
						<div class="innerTab">
							<ul class="tabmedium">
								<li class="on"><a href="#" data-wrapper="listaEV1">Tutti gli eventi</a></li>
								<li><a href="#" data-wrapper="listaEV2">Prossimi eventi live</a></li>
								<li><a href="#" data-wrapper="listaEV3">Prossimi eventi in streaming</a></li>
							</ul>
						</div>
						<div class="separator"></div>
						<div class="panel-nofill">

						</div>
					</div>
					<div id="listaEV1" data-url="/include/ajax/events_resp.php?cntIniz=1&cntFina=20"></div>
					<div id="listaEV2" data-url="/include/ajax/events_resp.php?cntIniz=21&cntFina=40" style="display:none"></div>
					<div id="listaEV3" data-url="/include/ajax/events_resp.php?cntIniz=41&cntFina=60" style="display:none"></div>
				</div>
				<div id="eventiTab2"  style="display:none">
					<div id="listaEV4" data-url="/include/ajax/events_resp.php?cntIniz=61&cntFina=80" style="display:none"></div>
				</div>
			</div>
			
	</div>
</div>
	

<!--js per paginazione -->
<script type="text/javascript">
	$(initEventPage);

</script>

</section>