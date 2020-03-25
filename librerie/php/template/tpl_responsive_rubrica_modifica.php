<h2>Rubrica</h2>
<h3>Modifica Contatto</h3>
<section>
	<h4>Informazioni di contatto</h4>
	<div class="box-generico-border paddMedium formGenerico">
		<div class="testoIcona display-tb">
			<div class="display-tc">
				<span class="icona-rubrica on rel-pos">
					<a class="btn-icon fix-pos" data-toggle="modal" data-target="#editPicture"><i class="icon icon-edit_fill"></i></a><i class="icon icon-2x icon-user"></i>
				</span>
				<div class="checkbox">
	   					<label class="textWrapper">
		         			<input type="checkbox" name="" id="">
		          			<span class="text">Contatto veloce</span>
		        		</label>
	     		</div>
     		</div>
			<div class="leftTesto display-tc">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label class="control-label txthelp closeable" data-toggle="tooltip" data-title="Inserisci il nome o una breve descrizione che ti aiuti a riconoscere il contatto.">Contatto</label>
							<input class="form-control clear-x" type="text" value="LOREM IPSUM">
						</div>
						<div class="col-sm-6">
							<label class="control-label-output">Email</label>
							<input class="form-control clear-x" type="text" value="">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label class="control-label txthelp closeable" data-toggle="tooltip" data-title="Ti ricordiamo che per i bonifici periodici l'indirizzo &egrave; obbligatorio.">Indirizzo</label>
							<input class="form-control clear-x" type="text" value="">
						</div>
						<div class="col-sm-6">
							<label class="control-label-output">Localit&agrave;</label>
							<input class="form-control clear-x" type="text" value="">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-2">
							<label class="control-label-output">Cap</label>
							<input class="form-control clear-x" type="text" value="">
						</div>
						<div class="col-sm-2">
							<label class="control-label-output">Provincia</label>
							<select class="form-control">
								<option>RM</option>
								<option></option>
							</select>
						</div>
						<div class="col-sm-2">
							<label class="control-label-output">Nazione</label>
							<select class="form-control">
								<option>IT</option>
								<option></option>
							</select>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</section>
<section>
<h4>Coordinate per pagamenti e ricariche</h4>
<div class="navContSecondLev" id="secondTab2">
	<div class=" outerTab">
		<ul class="tabWrapper tabflex hidden-xs">
			<li class="on"><a href="#heading1b">Bonifici Italia ed estero</a></li>
			<li class=""><a href="#heading2b">Ricariche cellulare e carte prepagate</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-group panel-fill" id="accordion2" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role="tab" id="heading1b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b" aria-expanded="false" aria-controls="collapse1b" class="collapsed">Bonifici Italia ed estero<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse1b" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1b">
				<div class="panel-body">
					<div class="tab-wrap formGenerico" id="tabAlert1">
						<div index="0" class="rubricaContattoSpan">
							<div class="form-group" index="0">
								<div class="row">
									<div class="col-sm-5">
										<label class="control-label">Iban*</label>
										<div class="form-inline">
					                        <div class="input-group">
					                            <input type="text" class="form-control clear-x" name="" id="" value="IT70U0542851150000000021034">
					                            <div class="input-group-addon">
					                                <a class="btn-icon"> <i class="icon icon-star_fill" title="icon-star_fill"></i>
					                                    <!--<i class="icon icon-star" title="icon-star"></i>-->
					                                </a>
					                            </div>
					                        </div>
	                    				</div>
									</div>
									<div class="col-sm-3">
										<label class="control-label">Beneficiario*</label>
										 <input type="text" class="form-control clear-x" name="" id="" value="Vitali Laura">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Note</label>
										 <input type="text" class="form-control clear-x" name="" id="">
									</div>
								</div>
							</div>
							<div class="form-group" index="0">
								<div class="row">
									<div class="col-sm-5">
										<label class="control-label txthelp closeable" data-toggle="tooltip" data-title="Il Bic è necessario per i pagamenti internazionali e identifica la banca del beneficiario. Ricordati di compilare anche il campo 'Nazione'.">Codice BIC*</label>
										<input type="text" class="form-control clear-x" name="" id="" value="BEPOIT21891">
									</div>
									<div class="col-sm-3">
										<label class="control-label-output">Conto corrente n&deg;</label>
										<input type="text" class="form-control clear-x" name="" id="" value="">
									</div>
								</div>
							</div>
							<div class="form-group" index="0">
								<div class="row">				
									<div class="col-xs-12">
										<a class="no-underline btn-icon collapsed" onclick="addBonifico()"> <i class="icon icon-row_expand marginRight_Micro"></i><i class="icon icon-row_contract"></i>aggiungi altre coordinate</a>
									</div>			
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--STESSA FUNZIONE IN SVILUPPO MODIFICATA SOLO CON NUOVO HTML -->
			<script type="text/javascript">
			function addBonifico(div){
				indexBonifico = $('.rubricaContattoSpan').length;
				$('#tabAlert1').append(	
					'<div index="'+ indexBonifico +'" class="rubricaContattoSpan">'
					+'<div class="form-group" index="'+ indexBonifico +'">'	
						+'<div class="row">'			
							+'<div class="col-sm-5">'				
								+'<label class="control-label" id="numeroIban'+indexBonifico+'">Iban*</label>'
								+'<div class="form-inline"><div class="input-group"><input type="hidden" name="idRapporto" value="0" index="'+indexBonifico+'"/>'
								+'<input type="hidden" name="idAnagraficaRapporto" value="0" index="'+indexBonifico+'"/>'
								+'<input type="text" class="inputIban'+indexBonifico+' form-control clear-x" name="numeroIban" index="'+indexBonifico+'" maxlength="34"/>'
								+'<div class="input-group-addon"><a href="javascript:;" onclick="setPreferito('+indexBonifico+', \'Rapporto\')" title="Preferito" class="btn-icon"><i class="icon icon-star" title="icon-star"></i></a>'
								+'<input type="hidden" name="preferitoRapporto" value="0" index="'+indexBonifico+'" id="inputPreferitoRapporto'+indexBonifico+'"/>'
							+'</div>'
						+'</div>'
						+'</div>'
						+'</div>'
						+'<div class="col-sm-3">'
							+'<label class="control-label" id="beneficiario'+indexBonifico+'"> Beneficiario *</label>'
							+'<input type="text" class="inputIban'+indexBonifico+' form-control clear-x" name="beneficiario" index="'+indexBonifico+'" maxlength="255"/>'
						+'</div>'
						+'<div class="col-sm-4">'
							+'<label class="control-label" id="noteIban'+indexBonifico+'">Note</label>'
							+'<input type="text" class="inputIban'+indexBonifico+' form-control clear-x" name="noteIban" index="'+indexBonifico+'" maxlength="255"/>'
						+'</div>'
					+'</div>'
					+'</div>'
					+'<div class="form-group" index="'+indexBonifico+'">'
						+ '<div class="row">'
						+'<div class="col-sm-5">'
							+'<label class="control-label txthelp closeable" id="codiceBic'+indexBonifico+'" data-toggle="tooltip" data-title="Il Bic è necessario per i pagamenti internazionali e identifica la banca del beneficiario. Ricordati di compilare anche il campo \'Nazione\'">Codice BIC</label>'
							+'<input type="text" class="inputIban'+indexBonifico+' form-control clear-x" name="codiceBic" index="'+indexBonifico+'"  maxlength="12"/>'
						+'</div>'
						
						+'<div class="col-sm-3">'
							+'<label class="control-label" id="numeroCc'+indexBonifico+'">Conto corrente n°</label>'
							+'<input type="text" class="inputIban'+indexBonifico+' form-control clear-x" name="numeroCc" index="'+indexBonifico+'" maxlength="35"/>'
						+'</div>'
						
						
					+'</div>'
					+'</div>'
					+'<div class="form-group" index="'+indexBonifico+'">'
						+ '<div class="row">'
						+'<div class="col-sm-12">'			
							+'<a class="btn-icon" href="#" onclick="removeAddressBookRow(this , \'Rapporto\')"><i class="icon icon-alert_error_fill marginRight_Micro"></i >Rimuovi</a>'				
						+'</div>'
					+'</div>'
					+'</div>'
					+'</div>'
				);
				 initTooltip();
				return false;
			}
			function removeAddressBookRow(span , name) {
			
			if(name != 'Poste'){
				var isPreferito = $(span).closest('.rubricaContattoSpan').find('input[name=preferito'+name+']').val();		
				if(isPreferito==1){
					setPreferito(0,name);
				}		
			}	
			$(span).closest('.rubricaContattoSpan').remove();	
			return false;
		}
			</script>
			<!--FINE STESSA FUNZIONE IN SVILUPPO MODIFICATA SOLO CON NUOVO HTML -->
		</div>
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role="tab" id="heading2b">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b" aria-expanded="false" aria-controls="collapse2b" class="collapsed">Ricariche cellulare e carte prepagate<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse2b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2b">
				<div class="panel-body">
					<div class="tab-wrap formGenerico">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label">Numero di cellulare</label>
									<div class="form-inline">
				                        <div class="input-group">
				                            <div class="editable-input"><input type="text" class="form-control clear-x" name="" id=""></div>
				                            <div class="input-group-addon">
				                                <a class="btn-icon"> <i class="icon icon-star_fill" title="icon-star_fill"></i>
				                                </a>
				                            </div>
				                        </div>
	                    			</div>
								</div>
								<div class="col-sm-4">
									<label class="control-label-output">Operatore</label>
									<select class="form-control">
										<option>--scegli--</option>
										<option>TIM</option>
										<option>TRE</option>
									</select>
								</div>
								<div class="col-xs-10 col-sm-3">
									<label class="control-label-output">Note</label>
									<input type="text" class="form-control clear-x" name="" id="">
								</div>
								<div class="col-xs-1 no-label">
									<a class="btn-icon"><i class="icon icon-2x icon-f-row_expand"></i></a>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label">Carta n&grad;</label>
									<div class="form-inline">
				                        <div class="input-group">
				                            <div class="editable-input"><input type="text" class="form-control clear-x" name="" id="" value="84537515468348348384"></div>
				                            <div class="input-group-addon">
				                                <a class="btn-icon"> <i class="icon icon-star_fill" title="icon-star_fill"></i>
				                                </a>
				                            </div>
				                        </div>
	                    			</div>
								</div>
								<div class="col-sm-4">
									<label class="control-label-output">Tipo carta</label>
									<select class="form-control">
										<option>--scegli--</option>
										<option>Atm</option>
										
									</select>
								</div>
								<div class="col-xs-10 col-sm-3">
									<label class="control-label-output">Note</label>
									<input type="text" class="form-control clear-x" name="" id="">
								</div>
								<div class="col-xs-1 no-label">
									<a class="btn-icon"><i class="icon icon-2x icon-f-row_expand"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<p xlass="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
<div class="form-group btnWrapper">
	<div class="btn-align-left">
		<a type="button" class="btn btn-default">rubrica</a>
	</div>
	<div class="btn-align-right">
		<a type="button" class="btn btn-primary" id="">salva contatto</a>
	</div>
	<br class="clear">
</div>
<script>
	//inizializzazione dei tab-accordion
	//TRASFORMA IL TAB DI CONTENUTO IN ACCORDION SU MOBILE
	//possono coesistere più gruppo di tab/accordion in pagina
	//parametri: id contenitore e incice tab ch edeve essere aperto al load
	$(function(){
		resizeTab('secondTab2',0);
	});
</script>
</section>
<div class="modal fade" id="editPicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
			</div>
			<div class="modal-body">
				<div class="container-fluid formGenerico">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-4">
								<span class="icona-rubrica"><a href="javascript:;" class="btn-icon"><i class="icon icon-2x icon-user"></i></a></span>
							</div>
							<div class="col-xs-4">
								<span class="icona-rubrica"><a href="javascript:;" class="btn-icon"><i class="icon icon-2x icon-user"></i></a></span>
							</div>
							<div class="col-xs-4">
								<span class="icona-rubrica"><a href="javascript:;" class="btn-icon"><i class="icon icon-2x icon-user"></i></a></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-4">
								<span class="icona-rubrica"><a href="javascript:;" class="btn-icon"><i class="icon icon-2x icon-user"></i></a></span>
							</div>
							<div class="col-xs-4">
								<span class="icona-rubrica"><a href="javascript:;" class="btn-icon"><i class="icon icon-2x icon-user"></i></a></span>
							</div>
							<div class="col-xs-4">
								<span class="icona-rubrica"><a href="javascript:;" class="btn-icon"><i class="icon icon-2x icon-user"></i></a></span>
							</div>
						</div>
					</div>
					<div class="form-group btnWrapper">
						<div class="btn-align-center">
							<a type="button" class="btn btn-primary" id="">salva</a>
							<br class="clear">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function () {
		var divToSelect = $("#editPicture .btn-icon");
		divToSelect.click(function () {
			divToSelect.closest('.icona-rubrica').removeClass('on');
			$(this).closest('.icona-rubrica').addClass('on');
		});
	});
</script>
<!-- -->
