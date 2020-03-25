<!-- codice da spostare nel css -->
<style>

.col-iban-last {width:90px}
.col-iban {width:100px}
</style>

<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>

<!--
<style type="text/css">
		@import url(/wscmn/css/priv_calendar.css);
</style>
-->
<section>
    <h2>Bollettini freccia</h2>
    <ul>
       <li>Il bollettino bancario Freccia è un <strong>bollettino precompilato</strong> dal creditore e inviato al debitore.</li>
        <li>La <strong>data di pagamento</strong> deve essere successiva alla data di inserimento (2 giorni lavorativi se la richiesta è inserita dopo le ore 18:00 oppure durante i giorni festivi e prefestivi)</li>
        <li><strong>Commissioni: € 0,00.</strong></li>
    </ul>
</section>

<section>
    <h4>Dati bollettino</h4>
    <form class="formGenerico borderFormRounded" role="form" id="formBonifico">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 ">
                    <label for="" class="control-label">Conto di addebito*</label>
                    <div class="form-inline">
                        <div class="input-group">
                            <select class="form-control" name="" id="">
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                            </select>
                            <div class="input-group-addon">
                                <a class="btn-icon" data-toggle="modal" data-target="#starAlert1" data-animation="false"> <i class="icon icon-star_fill" title="icon-star_fill"></i>
                                    <!--<i class="icon icon-star" title="icon-star"></i>-->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-7">
                            <label class="control-label" id="dataacc">Data pagamento*</label>
                            <div class="form-inline">
                                <div class="input-group">
                                    <input type="text" id="datepickerTool" placeholder="gg/mm/aaaa" class="form-control clear-x"> <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="control-label" id="dataacc">Saldo disponibile al 05/08/2015</label> <span class="output" id="balanceValue" value="4.604,07"><strong><a href="#">4.604,07 &euro;</a></strong></span> </div>
            </div>
        </div>
		
		<div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label" id="importo">Importo*</label>
                    <div class="form-inline">
                        <div class="requiredField">
                            <div class="input-group" id="italyCurrency">
                                <input maxlength="10" id="" value="" type="number" name="importo" class="form-control clear-x">
                                <div class="input-group-addon">EUR</div>
                            </div>
                        </div>
                        <div style="display:none" id="foreignCurrency">
                            <div class="input-group">
                                <input maxlength="10" id="importo2" value="" type="number" name="importo" class="form-control clear-x">
                                <div class="input-group-btn">
                                    <select name="divisa" id="divisaSelect">
                                        <option cambio="7.4363" value="DKK">CORONA DANESE</option>
                                        <option cambio="8.7036" value="NOK">CORONA NORVEGESE</option>
                                        <option cambio="9.1841" value="SEK">CORONA SVEDESE</option>
                                        <option cambio="1.4433" value="AUD">DOLLARO AUSTRALIANO</option>
                                        <option cambio="1.3751" value="CAD">DOLLARO CANADESE</option>
                                        <option cambio="8.578" value="HKD">DOLLARO HONG KONG</option>
                                        <option cambio="1.6279" value="NZD">DOLLARO NUOVA ZELANDA</option>
                                        <option cambio="1.0" value="EUR" selected="selected">EURO</option>
                                        <option cambio="1.0406" value="CHF">FRANCO SVIZZERO</option>
                                        <option cambio="13.4921" value="ZAR">RAND SUD AFRICA E NAMIBIA</option>
                                        <option cambio="0.7085" value="GBP">STERLINA INGLESE</option>
                                        <option cambio="1.115" value="USD">USA DOLLARI</option>
                                        <option cambio="138.084" value="JPY">YEN</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
		
		<div class="form-group">
            <div class="row">
                <div class="col-sm-6">
					<label class="control-label" id="causale">Codice identificativo pagamento*</label>
					<div class="row">
						<div class="col-sm-4">							
							
							  <div class="input-group">
								<div class="editable-input"><input maxlength="1" id="" value="" type="number" name="importo" class="form-control clear-x"></div>								 
							  </div>
												
						</div>
						<div class="col-sm-8">							
							
							  <div class="input-group">
								<div class="editable-input"><input maxlength="16" id="" value="" type="number" name="importo" class="form-control clear-x"></div>								 
							  </div>
												
						</div>
					</div>
				</div>
			</div>
        </div>
		
		<div class="form-group">
            <div class="row">
                <div class="col-sm-12">
					<label class="control-label" id="causale">Iban creditore</label>
					<div class="row small-input">
						<div class="col-xs-1 col-iban">							
							
							  <div class="input-group">
								<input maxlength="4"  id="" value="" type="text" name="iban1" class="form-control clear-x">							 
							  </div>
												
						</div>
						<div class="col-xs-1 col-iban">                           
                            
                              <div class="input-group">
                                <input maxlength="4"  id="" value="" type="text" name="iban2" class="form-control clear-x">                          
                              </div>
                                                 
                        </div>
						<div class="col-xs-1 col-iban">                           
                            
                              <div class="input-group">
                                <input maxlength="4"  id="" value="" type="text" name="iban3" class="form-control clear-x">                          
                              </div>
                                                  
                        </div>
						<div class="col-xs-1 col-iban">                           
                            
                              <div class="input-group">
                                <input maxlength="4"  id="" value="" type="text" name="iban4" class="form-control clear-x">                          
                              </div>
                                                 
                        </div>
						<div class="col-xs-1 col-iban">                           
                            
                              <div class="input-group">
                                <input maxlength="4"  id="" value="" type="text" name="iban5" class="form-control clear-x">                          
                              </div>
                                                
                        </div>
						<div class="col-xs-1 col-iban">                           
                           
                              <div class="input-group">
                                <input maxlength="4"  id="" value="" type="text" name="iban6" class="form-control clear-x">                          
                              </div>
                                                  
                        </div>
						<div class="col-xs-1 col-iban-last">							
							
							  <div class="input-group">
								<input maxlength="3" id="" value="" type="text" name="importo" class="form-control clear-x">								 
							  </div>
													
						</div>
					</div>
				</div>
			</div>
        </div>
		
		<div class="form-group">
            <div class="row">
                <div class="col-sm-8">
					<label class="control-label" id="causale">Cin</label>
					<div class="row">
						<div class="col-sm-4">							
							<div class="form-inline">
							 
								  <div class="input-group">
									<input maxlength="1" id="" value="" type="number" name="importo" class="form-control clear-x">
									 <div class="input-group-addon">importo</div>									 
								  </div>
								
							</div>							
						</div>
						<div class="col-sm-4">							
							<div class="form-inline">
							 
								  <div class="input-group">
									<input maxlength="1" id="" value="" type="number" name="importo" class="form-control clear-x">
									 <div class="input-group-addon">intermedio</div>									 
								  </div>
								</div>
														
						</div>
						<div class="col-sm-4">							
							<div class="form-inline">
							
								  <div class="input-group">
									<input maxlength="1" id="" value="" type="number" name="importo" class="form-control clear-x">
									 <div class="input-group-addon">complessivo</div>									 
								  </div>
								</div>
														
						</div>
					</div>
				</div>
			</div>
        </div>
		
		
		
		 <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
					<label class="control-label" id="causale">Codice esenzione*</label>
                    <div class="row">
						<div class="col-xs-2 col-md-2 col-sm-2 col-lg-2">							
							<select class="form-control"><option>1</option><option>3</option></select>
						</div>					
					</div>
				</div>
				<div class="col-sm-6">
					<label class="control-label" id="causale">Codice divisa*</label>
                    <span class="output">EURO</span>
				</div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="control-label" id="causale">Nome debitore*</label>
                    <input type="text" name="causale" maxlength="140" value="" class="form-control clear-x"> </div>
            </div>
        </div>
    </form>
</section>



<section>
    <div class="form-group btnWrapper">
        <div class="stepBtn">Step <strong> 1 </strong> di 2</div>
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_bonifico_step2.php&liv0=1&liv1=1&liv2=0&liv3=0&responsive=y">prosegui</a>
        </div>
        <div class="clear"></div>
    </div>

    <div class="modal fade" id="starAlert1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body"> Vuoi impostare il conto <strong>CC 01077 0000049477 EUR </strong> come preferito? </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="btn-align-left">
                            <button type="button" class="btn btn-default" data-dismiss="modal">annulla</button>
                        </div>
                        <div class="btn-align-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">conferma</button>
                        </div>
                        <br class="clear">
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    //inizializzazione datepicker
    $(function() {
        //$("#datepickerTool").mask("99/99/9999");
        $("#datepickerTool").datepicker({
            showOtherMonths: true,
            beforeShowDay: highlightDays,
            showOn: "button",
            onSelect: function(){$(this).next('.editable-clear-x').show()},
            prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
            nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
            buttonImage: "/img/ret/pixel_trasp.gif",
            buttonImageOnly: true,
            beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
            onClose: function() {
                $('#datePickerWrapper').modal('hide');
            }
        })
        appendDatePickerIcon('datepickerTool');
    });
</script>
<!--esempio di gestione errore -->
<script type="text/javascript">
    $(function() {
        $("#btnInvio").click(function(event) {
            // Check giroconto
            var errors = [],
                testo1 = $("#datepickerTool")
            if (testo1.val() === '') {
                errors.push({
                    field: testo1,
                    text: "occorre inserire la data"
                });
                event.preventDefault();
            }
            setHasErrors(errors, "#formBonifico");
            return (!errors.length);
        });
    });
</script>
<!--OVERLAYER SEPA -->
<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">Cos'&egrave; l'area sepa?</h2> </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                         <p> La <strong>Sepa</strong>, ovvero la <strong>Single Euro Payments Area</strong> (Area Unica dei Pagamenti in Euro), &egrave; l'area in cui i cittadini, le imprese e le pubbliche amministrazioni possono <strong>effettuare e ricevere pagamenti in euro</strong>, sia all'interno dei confini nazionali che fra i Paesi che ne fanno parte, alle <strong>stesse condizioni</strong> previste nel proprio Paese.
                          </p>
                        <h3>I paesi dell'area sepa</h3>
                        <p>Paesi dell'Unione Europea</p>
                        <div class="col-sm-3 col-xs-6"> <strong>Austria</strong>
                            <br> <strong>Belgio</strong>
                            <br> <strong>Bulgaria</strong>
                            <br> <strong>Cipro</strong>
                            <br> <strong>Croazia</strong>
                            <br> <strong>Danimarca</strong>
                            <br> <strong>Estonia</strong>
                            <br> </div>
                        <div class="col-sm-3 col-xs-6"> <strong>Finlandia</strong>
                            <br> <strong>Francia</strong>
                            <br> <strong>Germania</strong>
                            <br> <strong>Grecia</strong>
                            <br> <strong>Irlanda</strong>
                            <br> <strong>Italia</strong>
                            <br> <strong>Lettonia</strong>
                            <br> </div>
                        <div class="col-sm-3 col-xs-6"> <strong>Lituania</strong>
                            <br> <strong>Lussemburgo</strong>
                            <br> <strong>Malta</strong>
                            <br> <strong>Paesi Bassi</strong>
                            <br> <strong>Polonia</strong>
                            <br> <strong>Portogallo</strong>
                            <br> <strong>Regno Unito</strong>
                            <br> </div>
                        <div class="col-sm-3 col-xs-6"> <strong>Repubblica Ceca</strong>
                            <br> <strong>Repubblica Slovacca</strong>
                            <br> <strong>Romania</strong>
                            <br> <strong>Slovenia</strong>
                            <br> <strong>Spagna</strong>
                            <br> <strong>Svezia</strong>
                            <br> <strong>Ungheria</strong>
                            <br> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>