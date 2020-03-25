<h2>Archivio</h2>

<section>
	<p>
		In questa pagina hai a disposizione una biblioteca multimediale degli argomenti trattati nei nostri eventi.<br/>
		Utilizza la ricerca per selezionare ciò che vuoi rivedere o che più ti interessa.
	</p>
</section>

<section>
	<form class="formGenerico borderFormRounded" role="form" id="form01">
	<div class="form-group">
	    <div class="row">
			<div class="col-sm-12">
				<label class="control-label">Nome evento</label>
				<input type="text" name="" class="form-control clear-x" value="">
			</div>
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
			<div class="col-sm-6">
				<label class="control-label">Relatore</label>
				<input type="text" name="" class="form-control clear-x" value="">
			</div>
			<div class="col-sm-6">
				<label class="control-label">Periodo</label>
				<select class="form-control">
						<option>Seleziona</option>
						<option>ultimo mese</option>
						<option>ultimi 3 mesi</option>
						<option>ultimi 6 mesi</option>
						<option>ultimo anno</option>
				</select>
			</div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="form-group btnWrapper">
				<div class="btn-align-center">
					<a type="button" class="btn btn-primary" id="btnInvio" href="#">Cerca</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="form-group btnWrapper">
		<div class="stepBtn"></div>
		<div class="btn-align-left">
			<a type="button" class="btn btn-default">Torna alla pagina iniziale</a>
		</div>
		<br class="clear">
	</div>
</section>


<section>
<div class="panel-group" id="accordionEventi" role="tablist" aria-multiselectable="true" style="display: none">

 	<div id="Evento100" class="panel panel-default eventRow eventi withImg">
		<div class="panel-heading" role="tab" id="heading">
		     <h4 class="panel-title row">
		        <a  class="noMargin collapsed col-sm-8" data-toggle="collapse" data-parent="#accordion" href="#collapse" aria-expanded="true" aria-controls="collapse" title="Ciclo: Le Tecniche di Tom deMark">
		         	 <span class="eventRowLeft">
		         	 	<span class="text-event-small">Milano, 17/01/2017</span>
		         	 	<span class="text-event-title">Tutto sul money management</span>
		         	 </span>
					 
			 		
		        	</a>
		     </h4>
		 </div>		 		 
		 <div id="collapse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading">
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
</div>
</section>

<script type="text/javascript">
	
	$("#btnInvio").on('click' , function(){
		$("#accordionEventi").show();
	});

</script>


