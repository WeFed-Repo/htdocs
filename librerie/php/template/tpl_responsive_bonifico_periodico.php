<script type="text/javascript">
    //inizializzazione datepicker
    $(function() {
        //$("#datepickerTool").mask("99/99/9999");
        $("#datepicker").datepicker({
            beforeShowDay: noHolidays,
			showOn: "button",
			buttonImage: "/img/ret/pixel_trasp.gif",
			buttonImageOnly: true,
			minDate: 1,
			dateFormat: "dd/mm/yy",
			showOtherMonths: false,
			onSelect: function(){$(this).next('.editable-clear-x').show()},
			prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
            nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
			beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
            onClose: function() {
                $('#datePickerWrapper').modal('hide');
            }
        })
        appendDatePickerIcon('datepicker');

         $("#datepicker2").datepicker({
            beforeShowDay: noHolidays,
			showOn: "button",
			buttonImage: "/img/ret/pixel_trasp.gif",
			buttonImageOnly: true,
			minDate: 1,
			dateFormat: "dd/mm/yy",
			showOtherMonths: false,
			onSelect: function(){$(this).next('.editable-clear-x').show()},
			prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
            nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
			beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
            onClose: function() {
                $('#datePickerWrapper').modal('hide');
            }
        })
        appendDatePickerIcon('datepicker2');
    });
</script>



<h2>Bonifico Periodico</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="#">inserimento nuovo</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_ordini_dett.php&responsive=y&liv0=1&liv1=1&liv2=0&liv3=1">gestione ordini</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<section>
			<ul>
				<li>Il <strong>bonifico periodico</strong> è un ordine di pagamento eseguito con <strong>periodicità predefinita a favore dello stesso beneficiario e con il medesimo importo</strong>.
 Devi per esempio pagare <strong>l’affitto di casa</strong>?
				Imposta un bonifico periodico e alle scadenze da te indicate eseguiremo i pagamenti.</li>                                             
				<li><strong>Costo dell’operazione: </strong><div id="pagamento" style="display: inline;"><strong>€ 0,65</strong>.</div>
				<div id="gratis" style="display: none">L’operazione non è soggetta a commissioni.</div>
				</li>
				<li><strong>Se vuoi effettuare un bonifico a favore di un beneficiario non presente in rubrica, </strong>
				<span class="txthelp"><strong class="closeable" data-toggle="tooltip" data-title="Per sicurezza, ti invieremo un <b>Sms</b> con un <b>codice di controllo</b> al numero 340*****41: dovrai inserirlo online per concludere l'operazione." data-original-title="" title="">tieni a portata di mano il tuo cellulare</strong></span>
				</li>
			</ul>
		</section>
		<section>
			<h4>Dati bonifico</h4>
			<div class="formGenerico borderFormRounded">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label class="control-label">Conto di addebito</label>
							<span class="output">CC 01099 0000049199 EUR</span>
							<input name="debitAccount" type="hidden" id="selConto" value="01099 - 0000049199 - EUR">
						</div>
						<div class="col-sm-6">
							<label class="control-label">IBAN ordinante</label>
							<span class="output" id="IbanId_ord">IT03D0558401799000000049199</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label class="control-label" id="importo">Importo*</label>
							<div class="form-inline">
		                        <div class="requiredField">
		                            <div class="input-group" id="italyCurrency">
		                                <input maxlength="10" id="importoField" value="" type="text" name="importo" class="form-control clear-x">
		                                <div class="input-group-addon">EUR</div>
		                            </div>
		                        </div>
							</div>
						</div>
						<div class="col-sm-6 requiredField">
	   	 					<label id="frequency" class="control-label txthelp closeable" data-toggle="tooltip" data-title="">Frequenza*</label>
							<div class="htmlTooltip"><p>La &ldquo;frequenza&rdquo; &egrave; riferita alla <strong>data esecuzione del primo bonifico</strong> che imposti.  
							Se, per esempio, indichi come &ldquo;data esecuzione primo bonifico&rdquo; mercoled&igrave; 20 febbraio e selezioni la frequenza &ldquo;settimanale&rdquo;, il successivo bonifico sar&agrave; eseguito <strong>mercoled&igrave; 27 febbraio</strong>.</p>
							</div>
							<select name="frequency" size="1" class="form-control">
			            		<option selected="selected" value="">--seleziona--</option>
								<option value="G07">Settimanale</option>
								<option value="G15">Quindicinale</option>
								<option value="M01">Mensile</option>
								<option value="M02">Bimestrale</option>
								<option value="M03">Trimestrale</option>
								<option value="M04">Quadrimestrale</option>
								<option value="M06">Semestrale</option>
								<option value="M12">Annuale</option>
							</select>
						</div>
					</div>
				</div>	
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label class="control-label" id="dataprimobon">Data esecuzione primo bonifico*</label>
							 <div class="row">
								<div class="col-sm-6">
									<div class="form-inline">
		                                <div class="input-group">
                                   			 <input type="text" id="datepicker" placeholder="gg/mm/aaaa" value="05/12/2017" class="form-control clear-x"> <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a> 
                                   		</div>
									</div>
		                        </div>
							</div>
						</div>
						<div class="col-sm-6">
							<label class="control-label" id="dataultimobon">Scadenza ordine</label>
								<div class="row">
										<div class="col-sm-3">
											<div class="radio inline">
					              				<label class="textWrapper">
												<input type="radio" onclick="$('#dataPre').hide()" checked="checked" value="STANDINGORDER_ONCOUNTERMAND" name="tipoScadenza">
												<span class="text">su richiesta</span>
					                         	</label>
				              				</div>
				              			</div>
										<div class="col-sm-4">
											<div class="radio inline">
							               <label class="textWrapper">
							<input onclick="$('#dataPre').show()" type="radio" value="STANDINGORDER_PREDEFINED" name="tipoScadenza">
							<span class="text">fino al giorno</span>
							           </label>
							            </div>
										</div>
										<div class="col-sm-5" id="dataPre" style="display:none">
											<div class="form-inline">
	                               				<div class="input-group">
                               					 	<input type="text" id="datepicker2" placeholder="gg/mm/aaaa" value="05/12/2017" class="form-control clear-x"> <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a> 
                               					</div>
											</div>
										</div>
       							 </div>
        				</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-12">
							<label class="control-label" id="reason">Causale*</label>
							<input value="" size="57" maxlength="122" class="form-control clear-x" name="reason" type="text">
							
						</div>	
					</div>
				</div>

			</div>
		</section>

		<section>
			<h4>Dati beneficiario</h4>
			<div class="formGenerico borderFormRounded" role="form" id="datiBeneficiario">
				<div class="form-group" id="rubricaBen">
		            <div class="row">
		                <div class="col-sm-6">
		                    <label class="control-label">Nome beneficiario*</label>
		                    <div class="form-inline">
		                        <div class="input-group">
		                            <input type="text" id="campoAutocomplete2" class="form-control clear-x" placeholder="scrivi o seleziona il nominativo">
		                            <script type="text/javascript">
		                                $("#campoAutocomplete2").autoComplete(["mario rossi", "mario bianchi", "filippo neri"], {
		                                    selectable: true
		                                   
		                                });
		                                $("#campoAutocomplete2").autocomplete().data("ui-autocomplete")._renderItem = stylingResults;
		                            </script>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-sm-6 no-label"> <span class="output">
		    					<a href="javascript:;" onclick="$('#nuovoBen').show();$('#rubricaBen').hide();">inserisci nuovo beneficiario</a>
		    				</span> </div>
		            </div>
       			 </div>
				 <div id="nuovoBen" style="display:none">
		            <div class="form-group">
		                <div class="row">
		                    <div class="col-sm-6">
		                        <label for="" class="control-label">Nome beneficiario*</label>
		                        <div class="form-inline">
		                            <div class="input-group">
		                                <input type="text" class="form-control clear-x"> </div>
		                        </div>
		                    </div>
		                    <div class="col-sm-6 no-label">
		                        <span class="output">
		    						<a href="javascript:;" onclick="$('#nuovoBen').hide();$('#rubricaBen').show();">aggiungi da rubrica</a>
		    					</span> </div>
		                </div>
		            </div>
		            <div class="form-group">
		                <div class="row">
		                    <div class="col-sm-6">
		                        <label for="" class="control-label">Iban Beneficiario*</label>
		                        <input type="text" class="form-control"> </div>
		                    <div class="col-sm-6 no-label">
		                        <span class="output">
		                            <a onclick="$('#contoInfo').toggle();">Non hai l'Iban?</a>
		                        </span>
		                    </div>
		                </div>
		            </div>
		            <div class="form-group">
		                <div class="row" id="contoInfo" style="display:none">
		                    <div class="col-sm-6">
		                        <label for="" class="control-label">Numero c/c*</label>
		                        <input type="text" class="form-control"> </div>
		                     <div class="col-sm-2">
		                        <label for="" class="control-label">Cin*</label>
		                        <input type="text" class="form-control"> 
		                    </div>
		                    <div class="col-sm-2">
		                        <label for="" class="control-label">Abi* <a href="#1" class="btn-icon"><i class="icon icon-small-zoom_more icon-inline" title="ricerca"></i></a></label>
		                        <input type="text" class="form-control"> 
		                    </div>
		                    <div class="col-sm-2">
		                        <label for="" class="control-label">Cab* <a href="#1" class="btn-icon"><i class="icon icon-small-zoom_more icon-inline" title="ricerca"></i></a></label>
		                        <input type="text" class="form-control"> </div>
		                </div>
		            </div>
		           
       			 </div>
				
				<div class="form-group">
		            <div class="row">
		                <div class="col-sm-6">
		                	<label for="" class="control-label">Indirizzo*</label>
		                	<input type="text" class="form-control clear-x">
		                </div>
		                 <div class="col-sm-6">
		                 	<label for="" class="control-label">Localit&agrave;*</label>
		                	<input type="text" class="form-control clear-x">
		                </div>
		            </div>
		        </div>
				<div class="form-group">
		            <div class="row">
		                <div class="col-sm-6">
		                	<div class="row">
		                		<div class="col-sm-4">
		                			<label for="" class="control-label">Cap*</label>
		                			<input type="text" class="form-control clear-x">
		                		</div>
		                		<div class="col-sm-4">
		                			<label for="" class="control-label">Provincia*</label>
		                			<select class="form-control">
		                				<option></option>
		                				<option>PV</option>
		                				<option>SO</option>
		                			</select>
		                		</div>
		                		<div class="col-sm-4">
		                			<label for="" class="control-label">Nazione*</label>
		                			<select class="form-control">
		                				<option></option>
		                				<option>IT</option>
		                				<option>ZA</option>
		                			</select>
		                		</div>
		                	</div>
		                </div>
		            </div>
		        </div>
		        <div class="form-group">
		            <div class="row">
		                <div class="col-sm-6">
		                	<label for="" class="control-label">Note</label>
		                	<input type="text" class="form-control clear-x">
		                </div>
		                <div class="col-sm-6 no-label">
							<div class="checkbox">
		       					<label class="textWrapper">
				         			<input type="checkbox" name="" id="">
				          			<span class="text">inserisci in rubrica</span>
				        		</label>
		     				</div>
     					</div>
		            </div>
		        </div>
			</div>
		</section>
		<div class="form-group btnWrapper">		
			<div class="stepBtn">
					Step <strong>1</strong> di 2
			</div>
			<div class="btn-align-right" id="buttRight0">
			 	<div>	 
					<a href="#" class="btn btn-primary" title="prosegui" id="btnProsegui">prosegui</a>
					
				</div>
			</div>	
 		</div>
 		<p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
	</div>
</div>
