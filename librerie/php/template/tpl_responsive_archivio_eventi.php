<h2>Archivio</h2>
<section>
	<div class="testoIcona">
		<i class="icon icon-2x icon-imieidati_mobile flLeft"></i>
		<div class="leftTesto">
			<h4>La formazione arriva nella tua città</h4>
		</div>	
	</div>
</section>
<section>
	<?php
$k = $_GET["k"];
if (empty($k)) $k = 20;
?>
<div class="panel-group" id="accordionEventi" role="tablist" aria-multiselectable="true">
<?php for ($i = 1; $i <= intval($k); $i++) { ?>
 	<div id="Evento100" class="panel panel-default eventRow eventi withImg">
		<div class="panel-heading" role="tab" id="heading<?php print($i) ?>">
		     <h4 class="panel-title row">
		        <a  class="noMargin collapsed col-sm-8" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php print($i) ?>" aria-expanded="true" aria-controls="collapse<?php print($i) ?>" title="Ciclo: Le Tecniche di Tom deMark">
		         	 <span class="eventRowLeft">
		         	 	<span class="text-event-small">Milano, 17/01/2017</span>
		         	 	<span class="text-event-title">Tutto sul money management</span>
		         	 </span>
					 
			 		  <!--<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>-->
		        	</a>
		     </h4>
		 </div>		 		 
		 <div id="collapse<?php print($i) ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php print($i) ?>">
      		<div class="panel-body">
					<hr>
					<p>Operare sul mercato dei bond con tecniche avanzate</p>
					<div class="row">
						<div class="col-sm-6">
							<div class="box-generico-border">
								<div class="box-generico-text">
									<p><strong>Lorem ipsum</strong></p>
									<p>Come sfruttare situazioni particolari di book, i meccanismi delle aste, determinare i livelli di ingresso e di uscita ottimali per il trading intraday e multiday, utilizzare i futures obbligazionari a fini di hedging oltre che come indicatori per l’operatività sui bond.</p>
									<hr>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="box-generico-border">
								<div class="box-generico-text">
									<p><strong>Lorem ipsum</strong></p>
									<p>Come sfruttare situazioni particolari di book, i meccanismi delle aste, determinare i liv</p>
									<hr>
									<div class="row">
										<div class="col-sm-12">
											<div class="eventRowLeft">
												<a class="btn-icon"><i class="icon icon-test"></i></a>
												<a class="btn-icon disabled"><i class="icon icon-test "></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="eventDetailConsole">
						<span class="eventDiff level2">
							<span>Difficolt&agrave;</span>
							<span class="diff">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</span>
					</div>
				</div>
		</div>
 	</div>
	<?php } ?>	 		 		 		 

</div>
</section>