<h2>INFO E ATTIVAZIONE</h2>

<div class="navfrontPage outerTab">
	<div class="innerTab">
		<ul class="newLabel">
			<li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_dailypay_attivazione.php&liv0=2&liv1=0&liv2=0&liv3=0&responsive=y#">Scheda prodotto</a></li>
			<li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_costi_condizioni_dailypay.php&liv0=2&liv1=0&liv2=0&liv3=0&responsive=y#">Costi e condizioni</a></li>
			<li class="on"><a href="#!">Richiesta</a></li>
		</ul>
	</div>
    <div class="separator"></div>


<div class="panel-nofill">
<p>Attiva il servizio DailyPay by Jiffy per poter scambiare denaro in tempo reale con i tuoi contatti, anche dal tuo smartphone con l'app Webank</p>

	<section>
	
<script type="text/javascript">
$(function() {

    /* */
    $('.editButton').click(function() {
        modificaStep($(this));

    });
    $("#btnInvio2").click(function() {
        proseguiStep($(this));
        $('#datiInput,#datiInput2').hide();
        $('#datiOutput,#datiOutput2').show();
    });

    $('#btnInvioLastStep').click(function() {
        proseguiStep($(this));
        $('#datiInput3').hide();
        $('#datiOutput3').show();
    });

    //esempio di errore
    $("#radioWrapper").find("input[type=radio]").removeAttr('checked');
    $("#btnInvio").click(function() {
        // Check giroconto
        var errors = [],
            check1 = $("#contratto2")

        if (!check1.is(':checked')) {
            errors.push({
                field: check1,
                text: "Per proseguire occorre prendere visione del Documento di Sintesi e dell'Informativa precontrattuale aprendo il relativo pdf."
            });
        }

        setHasErrors(errors, "#form01");
        if (errors.length) {
            $(errors[0].field).trigger('focus');
        } else {
            proseguiStep($(this));

        }
        return (!errors.length);
    });
});
</script>
<!--BOX ACCORDION NUMERATO -->
<div class="panel-nofill">
    <div class="panel-group panel-step unclosable" id="accordionCarteStep1" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default panel-selected">
            <div class="panel-heading" role="tab" id="carteStep1">
                <h4 class="panel-title">
                 <span class="number-step"><span class="number">1</span><i class="icon icon-check_ok"></i></span>
                <a class="" data-toggle="" href="#collapseCarteStep1" aria-expanded="true" aria-controls="collapseCarteStep1">
                    Richiedi DailyPay by Jiffy <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                </a>
                </h4>
            </div>
            
            <div class="border-panel-collapse">
                <div id="collapseCarteStep1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="carteStep1">
                    <div class="panel-body">
                        <div id="datiInput">
                            <form class="formGenerico" role="form" id="form01">
                                
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Intestatario</label>
                                                <span class="output">Franco Rossi</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="control-label">Conto di addebito</label>
                                                <div class="form-inline">
                                                    <div class="input-group">
                                                        <select class="form-control" name="" id="">
                                                            <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                                                            <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                                                        </select>
                                                        <div class="input-group-addon">
                                                            <a class="no-underline btn-icon" data-toggle="modal" data-target="#starAlert1">
                                                                <i class="icon icon-star_fill" title="icon-star_fill"></i>
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
                                                <label class="control-label-output">Numero di telefono</label>
                                                <span class="output">33******88</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="output">
                                                
												</span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12 requiredField">
                                                <label class="control-label">Informativa precontrattuale</label>
                                                <div class="checkbox">
                                                    <label id="richiesta1" class="textWrapper disabledField richiesta-1">
                                                        <span class="hovfin" data-toggle="tooltip" data-title="Prima di procedere, occorre prendere visione dell'informativa precontrattuale, aprendo il relativo Pdf, salvandolo e/o stampandolo in modo da poterlo conservare."></span>
                                                        <input type="checkbox" name="" id="contratto2" disabled>
                                                        <span class="text">Dichiaro di aver preso visione del<a href="#!" target="_blank" onclick="enableInput('#richiesta1');"> Documento di Sintesi e dell'Informativa precontrattuale</a> dopo averli stampati e/o salvati su supporto durevole. Puoi prendere visione anche del <a href="#!" target="_blank">foglio informativo.</a></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

						
<!--PASSWORD II livello -->								
							<h4>Password II livello</h4>
<div class="formGenerico bgPin32 borderFormRounded" role="form">
    <div class="form-group noMarginBottom">
        <div class="row">           
                <div class="pincode">           
                    <div class="col-sm-8 pintxt">
                        <p class="pin_testo">Inserisci la <strong class="negativo">PRIMA</strong> e <strong class="negativo">TERZA</strong> cifra del codice <strong class="negativo">12</strong> della tua <strong>Carta Servizi Telematici</strong></p>
                    </div>
                    <div class="col-sm-4 paddform">                     
                        <div class="form-inline">
                            <div class="input-group margBottSmall">                
                                <input type="number" class="form-control" maxlength="1">                           
                                <span>*</span>                     
                                <input type="number" class="form-control" maxlength="1"> 
                                <span>*</span>
                                <div class="clearfix"></div>         
                            </div>
                        </div>                      
                        <div class="form-inline" style="text-align:center">
                            <div class="input-group"> 
                                <span class="note">1</span>
                                <span class="note">2</span>
                                <span class="note">3</span>
                                <span class="note">4</span>   
                                <div class="clearfix"></div>  
                            </div>     
                        </div>
                    </div>  
                    <div class="clearfix"></div>         
                </div>     
        </div>
    </div>  
</div>
<!--END PASSWORD II livello -->

						
                                    <div class="form-group btnWrapper">
                                        <div class="btn-align-center">
                                            <a type="button" class="btn btn-primary proseguiButton" id="btnInvio">prosegui</a>
                                           
                                            <br class="clear">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>



<!-- SECONDO STEP-->

    <div class="panel-group panel-step disabled" id="accordionCarteStep2" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="carteStep2">
                <h4 class="panel-title">
             <span class="number-step"><span class="number">2</span><i class="icon icon-check_ok"></i></span>
                <a class="" data-toggle="" href="#collapseCarteStep2" aria-expanded="false" aria-controls="collapseCarteStep2">
                    Stampa il contratto<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                </a>
           </h4>
            </div>
            <div class="border-panel-collapse">
                <div id="collapseCarteStep2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="carteStep2">
                    <div class="panel-body">
                        <div id="datiInput2">
                            <form class="formGenerico" role="form">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <H3>Cosa resta da fare?</H3>
											<div class="box-generico-border">
												<div class="box-generico-text">
													<strong>STAMPA IL CONTRATTO</strong>
													<p>Firmalo e invialo per posta a:</p>
													<ul>
														<li>Webank</li>
														<li>c/o Banca Popolare di Milano</li>
														<li>Via Massaua, 4</li>
														<li>20146 Milano</li>
													</ul>
													<p>Una volta ricevuto il contratto, attiveremo il servizio e ti informeremo via email. 
													Successivamente, per <strong>iniziare a inviare</strong> e <strong>ricevere</strong> pagamenti, 
													dovrai <strong>configurare</strong> il servizio</p>
													<div class="form-group btnWrapper">
														<div class="btn-align-right">
															<a type="button" class="btn btn-primary" id="">stampa contratto</a>
														</div>
														<br class="clear">
													</div>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                        
                        
                            </form>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


	</section>

	
	
</div> <!--panel-nofill -->
</div> <!-- navfrontPage outerTab -->

	
	