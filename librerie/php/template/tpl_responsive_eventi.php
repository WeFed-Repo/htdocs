<h2>Eventi</h2>
<script type="text/javascript" src="/wscmn/fe/js/priv_ret_eventi.js"></script>
<script src="/wscmn/js/ret/priv_widgets.js" type="text/javascript"></script>
<section>
	<!-- sezione immagine top da ridisegnare-->
	<img title="eventi" alt="eventi" src="/wscmn/fe/img/eventi/slider/defaultImg.gif">
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
					<div id="listaEV1" data-url="/librerie/include/commons/ajax/events_resp.php"></div>
					<div id="listaEV2" data-url="/librerie/include/commons/ajax/events_resp.php" style="display:none"></div>
					<div id="listaEV3" data-url="/librerie/include/commons/ajax/events_resp.php" style="display:none"></div>
				</div>
				<div id="eventiTab2"  style="display:none">
					<div id="listaEV4" data-url="/librerie/include/commons/ajax/events_resp.php"  style="display:none"></div>
				</div>
			</div>
			
	</div>
</div>
	

<!--js per paginazione -->
<script type="text/javascript">
	$(initEventPage);


</script>

</section>