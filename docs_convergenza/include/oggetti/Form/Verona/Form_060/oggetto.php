<section>
	<form>
		<script>
			$(document).ready(function(){
			 $("#searchBeneficiari").on("focus",function(){
			 	$('.input-group-addon.light').addClass('input-focused');
			 });
			 $("#searchBeneficiari").on("blur",function(){
			 	$('.input-group-addon.light').removeClass('input-focused');
			 });	
			 $("#searchBeneficiari").on("keyup", function() {
			    var value = $(this).val().toLowerCase();
			   
			    $(".panel-title a").filter(function() {
			    	
					if(value.length>=3) {
						$(this).closest('.panel-default').toggle($(this).text().toLowerCase().indexOf(value) > -1);
					}
					if(value.length<3) {
						$(this).closest('.panel-default').show($(this).text());
					}
				});
				
			  });
			});
		</script>
		<div class="formWrapper">
				<div class="form-group">
					<div class="row">
						<div class="form-field-input col-xs-12 col-sm-6">
							<label class="control-label">Cerca*</label>
							<div class="input-group">
								<span class="input-group-addon light"><i class="icon icon-zoom_filled"></i></span>
								<input id="searchBeneficiari" type="text"  class="form-control" placeholder="cerca Beneficiario">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="form-field-input col-xs-12 col-sm-12">
							<div class="panel-group accordion" id="accordion" role="tablist">
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed" title="Alessandro e Francy" role="button" aria-expanded="false" aria-controls="collapse1">
							        Alessandro e Francy
							        	<span class="fRight">
							        		<i class="icon icon-3x icon-accordion_down"></i>
											<i class="icon icon-3x icon-accordion_up"></i>
										</span>
							        </a>
									
							     </h4>
							     <span class="fRight btn-accordion">
							     	<a href="javascript:;" title="modifica in rubrica Alessandro e Francy"><i class="icon icon-edit_fill ico-title"></i></a>
							        <a href="javascript:;" title="elimina da rubrica Alessandro e Francy"><i class="icon icon-delete_table" data-toggle="modal" data-target="#modaleElimina"></i></a>
							      </span>
							    </div>
							    <div id="collapse1" class="panel-collapse collapse">
							      <div class="panel-body">
								      	<h3 class="titleSection titleForm">Dati per bonifico</h3>
								      	<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Beneficiario</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">Mario Rossi</span>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">IBAN</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">IT12C1234512345678912345627</span>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Descrizione conto:</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">Conto Intesa</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<hr>
										<h3 class="titleSection titleForm">Dati per ricarica telefonica</h3>
								      	<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Operatore</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">Vodafone</span>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Numero di telefono</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">3451234567</span>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Descrizione</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">vodafone mario</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<hr>
										<h3 class="titleSection titleForm">Dati per ricarica carta prepagata</h3>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Tipologia carta</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">PostePay</span>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Numero carta</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">123456</span>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">C F. titolare</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">BFVNT65L71C794V</span>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Descrizione</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">ppay mario</span>
														</div>
													</div>
												</div>
											</div>
										</div>
								  </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed" title="Mario Rossi" role="button" aria-expanded="false" aria-controls="collapse2">
							       Mario Rossi
							      <span class="fRight">
							      		<i class="icon icon-3x icon-accordion_down"></i>
										<i class="icon icon-3x icon-accordion_up"></i>
									</span>
							  		</a>
							  		 
							      </h4>
							       <span class="fRight btn-accordion">
							     	<a href="javascript:;" title="modifica in rubrica"><i class="icon icon-edit_fill ico-title"></i></a>
							        <a href="javascript:;" title="elimina da rubrica"><i class="icon icon-delete_table" data-toggle="modal" data-target="#modaleElimina"></i></a>
							      </span>
							    </div>
							    <div id="collapse2" class="panel-collapse collapse">
							     <div class="panel-body">
								      	<h3 class="titleSection titleForm">Dati per bonifico</h3>
								      	<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Beneficiario</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">Mario Rossi</span>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">IBAN</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">IT12C1234512345678912345627</span>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Descrizione conto:</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">Conto Intesa</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<hr>
										<h3 class="titleSection titleForm">Dati per ricarica telefonica</h3>
								      	<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Operatore</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">Vodafone</span>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Numero di telefono</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">3451234567</span>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Descrizione</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">vodafone mario</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										
								  </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							      	<a  data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed" title="Scuola musica" role="button" aria-expanded="false" aria-controls="collapse3"> Scuola musica
							      	<span class="fRight">
							      			
							        		<i class="icon icon-3x icon-accordion_down"></i>
											<i class="icon icon-3x icon-accordion_up"></i>
										</span>

							      	</a>
							      </h4>
							       <span class="fRight btn-accordion">
							     	<a href="javascript:;" title="modifica in rubrica"><i class="icon icon-edit_fill ico-title"></i></a>
							        <a href="javascript:;" title="elimina da rubrica"><i class="icon icon-delete_table" data-toggle="modal" data-target="#modaleElimina"></i></a>
							      </span>
							    </div>
							    <div id="collapse3" class="panel-collapse collapse">
							      <div class="panel-body">
								      	<h3 class="titleSection titleForm">Dati per bonifico</h3>
								      	<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Beneficiario</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">Alessandro</span>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">IBAN</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">IT12C1234512345678912345627</span>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Descrizione conto:</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">Conto Intesa</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<hr>
										<h3 class="titleSection titleForm">Dati per ricarica telefonica</h3>
								      	<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Operatore</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">Tim</span>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Numero di telefono</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">3451234567</span>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Descrizione</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">vodafone mario</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<hr>
										<h3 class="titleSection titleForm">Dati per ricarica carta prepagata</h3>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Tipologia carta</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">PostePay</span>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Numero carta</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">123456</span>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-xs-12">
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">C F. titolare</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">BFVNT65L71C794V</span>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-6">
															<label class="control-label">Descrizione</label>
														</div>
														<div class="col-xs-6">
															<span class="resume">ppay mario</span>
														</div>
													</div>
												</div>
											</div>
										</div>
								  </div>
							    </div>
							  </div>
							</div>
						</div>
					</div>	
				</div>
		</div>
	</form>					
</section>

<div id="modaleElimina" class="modal fade" role="dialog">
  <div class="modal-dialog">
	<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h1 class="modal-title">TITOLO MODALE</h1>
      </div>
      <div class="modal-body">
       <p>Sei sicuro di voler eliminare il contatto Mario Rossi dalla tua rubrica?</p>
      </div>
      <div class="modal-footer">
       	 <div class="form-group btnWrapper clearfix">
	        <div class="btn-align-right">
	  		 	<div>
	  				<a type="button" href="#" class="btn btn-primary" title="ok">ok</a>
	  			</div>
	      	</div>
		      <div class="btn-align-back">
		          <div>
		            <a type="button" href="#" class="btn btn-default" title="annulla">annulla</a>
		          </div>
		      </div>
  		</div>
		</div>
    </div>
	</div>
</div>