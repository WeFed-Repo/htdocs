<script type="text/javascript">	
//inizializzazione datepicker

$(function () {
	
	$("#datepickerToolDa").mask("99/99/9999");
	$("#datepickerToolDa").datepicker({
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
   	onClose: function(){
    	$('#datePickerWrapper').modal('hide');
    }
    })
    appendDatePickerIcon('datepickerToolDa');
   
   $("#datepickerToolA").mask("99/99/9999");
	$("#datepickerToolA").datepicker({
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
   	onClose: function(){
    	$('#datePickerWrapper').modal('hide');
    }
    })
   appendDatePickerIcon('datepickerToolA');

   });

</script>
<h2>Estratto conto e contabili</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabbig">
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_priv_contabili.php&responsive=y&liv0=1&liv1=0&liv2=0&liv3=3#">archivio documenti</a></li>
			<li class="on"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_priv_contabili_cartella.php&responsive=y&liv0=1&liv1=0&liv2=0&liv3=3#">cartelle personali</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_priv_contabili_gestione_serivizio.php&responsive=y&liv0=1&liv1=0&liv2=0&liv3=3#">gestione servizio</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_priv_contabili_info_servizio.php&responsive=y&liv0=1&liv1=0&liv2=0&liv3=3#">info servizio</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<section>
			<ul>
				<li>Puoi creare <strong>fino a 10 cartelle personali</strong>, dove copiare i tuoi documenti.</li>
				<li>Nella tabella, sono presenti cartelle con <strong>documenti del 2016</strong>. Per visualizzare altri documenti, utilizza il <strong>motore di ricerca in basso.</strong></li>
			</ul>
			<h4>Crea nuova cartella personale</h4>
			<form class="formGenerico" id="form01">
				<div class="formGenerico borderFormRounded">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<label class="control-label">Nome cartella</label>
								<input type="text" class="form-control clear-x" placeholder="max 15 caratteri" id="nomeCartella" name="nomeCartella">
							</div>
							<div class="col-sm-6 no-label">
								<div class="btn-align-left">
									<a type="button" class="btn btn-primary" id="btnCrea">Crea</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<h4>Documenti 2016</h4>
				<div class="formGenerico borderFormRounded">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<div class="checkbox inline">
											 <label class="textWrapper">
					         					<input type="checkbox" name="" id="">
					          					<span class="text">
					          					 <a href="#1">Cartella1</a>
													<a href="#1" class="btn-icon"><i class="icon icon-edit_fill icon-inline edit-inline" title="modifica"></i></a>		   
												</span>
					        				</label>
										</div>
									 </div>
									 <div class="col-sm-6">
									 	<span class="output">5 doc</span>
									 </div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<div class="checkbox inline">
											 <label class="textWrapper">
					         					<input type="checkbox" name="" id="">
					          					<span class="text">
					          					 <a href="#1">Cartella2</a>
													<a href="#1" class="btn-icon"><i class="icon icon-edit_fill  icon-inline edit-inline"  title="modifica"></i></a>		   
												</span>
					        				</label>
										</div>
									 </div>
									 <div class="col-sm-6">
									 	<span class="output">10 doc</span>
									 </div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<div class="checkbox inline">
											 <label class="textWrapper">
					         					<input type="checkbox" name="" id="">
					          					<span class="text">
					          					 <a href="#1">Cartella3</a>
													<a href="#1" class="btn-icon"><i class="icon icon-edit_fill  icon-inline edit-inline" title="modifica"></i></a>		   
												</span>
					        				</label>
										</div>
									 </div>
									 <div class="col-sm-6">
									 	<span class="output">0 doc</span>
									 </div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<div class="checkbox inline">
											 <label class="textWrapper">
					         					<input type="checkbox" name="" id="">
					          					<span class="text">
					          					 <a href="#1">Cartella4</a>
													<a href="#1" class="btn-icon"><i class="icon icon-edit_fill icon-inline edit-inline" title="modifica"></i></a>		   
												</span>
					        				</label>
										</div>
									 </div>
									 <div class="col-sm-6">
									 	<span class="output">0 doc</span>
									 </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group btnWrapper">
			       <div class="btn-align-right">
			            <a type="button" class="btn btn-primary" id="btnElimina" href="#">elimina cartelle</a>
			        </div>
			        <div class="clear"></div>
			    </div>
			</form>
		</section>
		<section>
				<div class="tithelp">
					<h4>Inserisci i parametri di ricerca (sono esclusi i conti estinti)</h4>
					<div class="flRight"><a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#helpRicerca"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
					<br class="clear">
				</div>
				<form class="formGenerico borderFormRounded" role="form" id="">
					<div class="form-group">
		    			<div class="row">
		   	 				<div class="col-sm-6 requiredField">
								<label class="control-label">Rapporto</label>
								<select class="form-control">
									<option>Solo conti correnti</option>
									<option>CC 01099 0000049199 EUR</option>
								</select>
		   	 				</div>
		   	 			</div>
		   	 		</div>
		   	 		
		   	 		<div class="form-group">
		    			<div class="row">
		   	 				<div class="col-sm-6 requiredField">
								<label class="control-label">Categoria documenti</label>
								<select class="form-control" id="selectCategoria">
									<option>Tutti</option>
									<option value="CC 01099 0000049199 EUR">CC 01099 0000049199 EUR</option>
								</select>
		   	 				</div>
		   	 				<div class="col-sm-6 requiredField" style="display:none" id="tipoDoc">
								<label class="control-label">Tipo documento</label>
								<select class="form-control">
									<option>Lorem ipsum dolor</option>
									<option>Lorem ipsum dolor</option>
								</select>
		   	 				</div>
		   	 			</div>
		   	 		</div>
		   	 		<div class="form-group">
		    			<div class="row">
		   	 				<div class="col-sm-6 requiredField">
								<label class="control-label">Stato</label>
								<select class="form-control" id="selectCategoria">
									<option>Tutti</option>
									<option>Letto</option>
									<option>Non letto</option>
								</select>
		   	 				</div>
		   	 				<div class="col-sm-6">
								<label class="control-label">Periodo</label>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-inline">
										 <div class="form-group">
											  <div class="input-group">
											     <div class="input-group-addon first">Dal</div>
											     <input type="text" id="datepickerToolDa" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
											     <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
											  </div>
											</div>
										</div> 
									</div>  
									<div class="col-sm-6">
									<div class="form-inline">
									  <div class="form-group">
										  <div class="input-group">
										     <div class="input-group-addon first">Al</div>
										     <input type="text" id="datepickerToolA" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
										     <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
										  </div>
										</div>
									</div>
									</div>
								</div>		
							</div>
		   	 			</div>
		   	 		</div>
		   	 		<div class="form-group btnWrapper">
						<div class="btn-align-right">
							<a type="button" class="btn btn-primary" id="">ricerca</a>
						</div>
						<br class="clear">
					</div>
		   	 		<script>
		   	 			$('#selectCategoria').bind('change', function() {
		   	 				if($(this).val()!== 'Tutti')
		   	 				{
		   	 				  $('#tipoDoc').show();
		   	 				}
		   	 				else{
		   	 				   $('#tipoDoc').hide();
		   	 				}
		   	 			})
		   	 		</script>
				</form>
		</section>
	</div>
</div>
<script>
$('#btnCrea').click(function(index){
	$(function () {
			var errors = [],
				nomeCartella = $("#nomeCartella");
			if (nomeCartella.val() === '') {
				errors.push({ field: nomeCartella, text: "Inserisci nome cartella" });
			}
			setHasErrors(errors, "#form01");
			if (errors.length) {
				$(errors[0].field).trigger('focus');
			}
			else{
				
				
			}
			return (!errors.length);
		})
				
})
</script>