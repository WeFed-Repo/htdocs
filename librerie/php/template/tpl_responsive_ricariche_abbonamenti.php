<h2>Ricariche cellulari</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="#">nuova ricarica</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<section>
			<p>Se vuoi ricaricare un numero non presente in rubrica, <span class="txthelp closeable" data-toggle="tooltip" data-title="Per sicurezza, ti invieremo un Sms con un codice di controllo al numero 323*****67: dovrai inserirlo online per concludere l'operazione."> tieni a portata di mano il tuo cellulare</span></p>
			<div class="tithelp">
				<h4>Inserisci i dati</h4>
			</div>
			<form class="formGenerico borderFormRounded" role="form" id="">
				<div class="form-group">	 
			      	 <div class="row">
			       	 	<div class="col-sm-12">
							  <label class="control-label">Conto di addebito*</label>
								<div class="form-inline">		 
								  <div class="input-group">
			          					<select class="form-control" name="" id="">
											<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
											<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
									 	</select>
			         				 <div class="input-group-addon">
			         				 	<a class="no-underline btn-icon" data-toggle="modal" data-target="#starAlert1">
			         				 		<i class="icon icon-star_fill" title="icon-star_fill"></i>
			         				 		<!--<i class="icon icon-star" title="icon-star"></i>-->
			         				 	</a>
			         				 </div>
			        			  </div>
			        			</div>
						</div>
			       	 </div>
		    	</div>
				<div id="numeroCell">
			    	<div class="form-group"  style="display: block;">
				        <div class="row">
				            <div class="col-sm-6">
				                <div class="row"> 
									<div class="col-sm-8">
					               	   <label class="control-label">Numero cellulare*</label>
						               <div class="form-inline">
				                        <div class="input-group">
				                            <input type="text" id="campoAutocomplete" class="form-control clear-x" placeholder="scrivi o seleziona il nominativo">
				                            <script type="text/javascript">
				                                $("#campoAutocomplete").autoComplete(["mario rossi", "mario bianchi", "filippo neri"], {
				                                    selectable: true
				                                   
				                                });
				                                $("#campoAutocomplete").autocomplete().data("ui-autocomplete")._renderItem = stylingResults;
				                            </script>
				                        </div>
				                    	</div>
			                    	</div>
			                    	<div class="col-sm-4 no-label"> 
						            	<span class="output">
											<a href="javascript:;" onclick="$('#nuovoNumeroCell').show();$('#numeroCell').hide();">nuovo numero</a>
										</span> 
									</div>
								</div>
							</div>
				            <div class="col-sm-6">
								 <label class="control-label">Operatore*</label>
				            </div>
				        </div>
		       		</div>
		       		<div class="form-group" id="numeroCell" style="display: none;">
				        <div class="row">
				            <div class="col-sm-6">
								 <label class="control-label">Intestatario*</label>
								 <span class="output"></span>
				            </div>
				         </div>
				     </div>
			     </div>
			     <div id="nuovoNumeroCell" style="display:none">
					<div class="form-group">
				        <div class="row">
				            <div class="col-sm-6">
								<label class="control-label">Numero cellulare*</label>
								<div class="row">
			                		<div class="col-sm-4">
			                			<select name="prefisso_cell" size="1" class="form-control">
	              							<option value="320" selected="">320</option>
	              							<option value="324">324</option>
	             						</select>
			                		</div>
			                		<div class="col-sm-4">
			                			<input type="text" class="form-control clear-x">
			                		</div>
			                		<div class="col-sm-4">
			                			<span class="output">
											<a href="javascript:;" onclick="$('#numeroCell').show();$('#nuovoNumeroCell').hide();">aggiungi da rubrica</a>
										</span> 
			                		</div>
			                	</div>
				            </div>
				             <div class="col-sm-6">
								<label class="control-label">Operatore*</label>
								<select name="" size="1" class="form-control">
	              					<option value="lorem" selected="">lorem</option>
	              					<option value="lorem">lorem</option>
	             				</select>
							</div>
				        </div>
				     </div>
				     <div class="form-group">
						<div class="row">
				            <div class="col-sm-6">
				           		<label class="control-label">Intestatario*</label>
				           		<input type="text" class="form-control clear-x">
				            </div>
				            <div class="col-sm-6 no-label">
		                        <div class="checkbox">
		                            <label><input type="checkbox"> inserisci beneficiario in rubrica </label>
		                        </div>
	                    	</div>
				         </div>
				     </div>
			     </div>
			</form>
		</section>
		<section>
			<div class="form-group btnWrapper">
		        <div class="btn-align-right">
		            <a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&amp;tpl=">prosegui</a>
		        </div>
		        <div class="clear"></div>
    		</div>
    		<p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
		</section>
	</div>
</div>