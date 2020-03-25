<?php
global $contoLabelLongSingLow;
global $permettiDispositive;

if ($permettiDispositive) {
    ?>
<!----- TRASFERIMENTI VELOCI ----->
<!-- popup trasferimento CD conferma -->
<div class="modal fade" id="lbConferma1" tabindex="-1" role="dialog" aria-labelledby="lbConfermaLabel1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="lbConfermaLabel1">Trasferimento singolo</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div id="confermaContent1" class="confermaContent">
                        <section>
                            <p>
                                Stai per effettuare un trasferimento dal <?php echo $contoLabelLongSingLow ?> al deposito<br/>
                                Ti invitiamo a lasciare, sul <?php echo $contoLabelLongSingLow ?>,
                                <strong>la liquidit&agrave; sufficiente per coprire le spese</strong>
                                (imposta di bollo, addebiti carta di credito, etc..)</p>
                        </section>
                        <form class="formGenerico output" role="form">
                            <!--RIGA DIVISA IN TRE CAMPI -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Importo</label>
                                        <span class="output"><span id="importoDaVersareCD"></span> <span class="valuta"></span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Data di accredito</label>
                                        <span class="output"><span id="dataCD"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-ria separator-medium"></div>
                            <div class="form-group btnWrapper">
                                <div class="btn-align-center">
                                    <a type="button" href="javascript:" class="btn btn-default" id="annullaCD1"
                                       title="Annulla">Annulla</a>
                                    <a type="button" href="javascript:" class="btn btn-primary" id="disponiCD1"
                                       title="Conferma">Prosegui</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Div per la response delle dispositive in popup  -->
                    <section id="confermaResponse1" class="confermaResponse boxesitoWrap">
                        <div class="boxesito positivo confirmHead">
                            <div class="text">
                                <h4>Operazione eseguita correttamente</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                        <div class="boxesito negativo errorHead">
                            <div class="text">
                                <h4>Attenzione</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /popup trasferimento CD conferma -->

<!-- popup trasferimento CC conferma -->
<div class="modal fade" id="lbConferma2" tabindex="-1" role="dialog" aria-labelledby="lbConfermaLabel2">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="lbConfermaLabel2">Trasferimento singolo</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div id="confermaContent2" class="confermaContent">
                        <section>
                            <p>
                                Stai per effettuare un trasferimento dal <?php echo $contoLabelLongSingLow ?> al deposito</p>
                        </section>
                        <form class="formGenerico output" role="form">
                            <!--RIGA DIVISA IN TRE CAMPI -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Importo</label>
                                        <span class="output"><span id="importoDaVersareCC"></span> <span class="valuta"></span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Data di accredito</label>
                                        <span class="output"><span id="dataCC"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-ria separator-medium"></div>
                            <div class="form-group btnWrapper">
                                <div class="btn-align-center">
                                    <a type="button" href="javascript:" class="btn btn-default" id="annullaCC2"
                                       title="Annulla">Annulla</a>
                                    <a type="button" href="javascript:" class="btn btn-primary" id="disponiCC2"
                                       title="Conferma">Prosegui</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Div per la response delle dispositive in popup  -->
                    <section id="confermaResponse2" class="confermaResponse boxesitoWrap">
                        <div class="boxesito positivo confirmHead">
                            <div class="text">
                                <h4>Operazione eseguita correttamente</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                        <div class="boxesito negativo errorHead">
                            <div class="text">
                                <h4>Attenzione</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /popup trasferimento CC conferma -->

<!-- popup trasferimento CDER conferma -->
<div class="modal fade" id="lbConferma1a" tabindex="-1" role="dialog" aria-labelledby="lbConfermaLabel1a">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="lbConfermaLabel1a">Trasferimento singolo</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div id="confermaContent1a" class="confermaContent">
                        <section>
                            <p>
                                Stai per effettuare un trasferimento dal <?php echo $contoLabelLongSingLow ?> alla liquidit&agrave; derivati<br/>
                                Ti invitiamo a lasciare, sul <?php echo $contoLabelLongSingLow ?>,
                                <strong>la liquidit&agrave; sufficiente per coprire le spese</strong>
                                (imposta di bollo, addebiti carta di credito, etc..)</p>
                        </section>
                        <form class="formGenerico output" role="form">
                            <!--RIGA DIVISA IN TRE CAMPI -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Importo</label>
                                        <span class="output"><span id="importoDaVersareCDER"></span> <span class="valuta"></span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Data di accredito</label>
                                        <span class="output"><span id="dataCDER"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-ria separator-medium"></div>
                            <div class="form-group btnWrapper">
                                <div class="btn-align-center">
                                    <a type="button" href="javascript:" class="btn btn-default" id="annullaCDER1"
                                       title="Annulla">Annulla</a>
                                    <a type="button" href="javascript:" class="btn btn-primary" id="disponiCDER1"
                                       title="Conferma">Prosegui</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Div per la response delle dispositive in popup  -->
                    <section id="confermaResponse1a" class="confermaResponse boxesitoWrap">
                        <div class="boxesito positivo confirmHead">
                            <div class="text">
                                <h4>Operazione eseguita correttamente</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                        <div class="boxesito negativo errorHead">
                            <div class="text">
                                <h4>Attenzione</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /popup trasferimento CDER conferma -->

<!-- popup trasferimento CC2 conferma -->
<div class="modal fade" id="lbConferma2a" tabindex="-1" role="dialog" aria-labelledby="lbConfermaLabel2a">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="lbConfermaLabel2a">Trasferimento singolo</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div id="confermaContent2a" class="confermaContent">
                        <section>
                            <p>
                                Stai per effettuare un trasferimento dalla liquidit&agrave; derivati al <?php echo $contoLabelLongSingLow ?></p>
                        </section>
                        <form class="formGenerico output" role="form">
                            <!--RIGA DIVISA IN TRE CAMPI -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Importo</label>
                                        <span class="output"><span id="importoDaVersareCC2"></span> <span class="valuta"></span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Data di accredito</label>
                                        <span class="output"><span id="dataCC2"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-ria separator-medium"></div>
                            <div class="form-group btnWrapper">
                                <div class="btn-align-center">
                                    <a type="button" href="javascript:" class="btn btn-default" id="annullaCC2a"
                                       title="Annulla">Annulla</a>
                                    <a type="button" href="javascript:" class="btn btn-primary" id="disponiCC2a"
                                       title="Conferma">Prosegui</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Div per la response delle dispositive in popup  -->
                    <section id="confermaResponse2a" class="confermaResponse boxesitoWrap">
                        <div class="boxesito positivo confirmHead">
                            <div class="text">
                                <h4>Operazione eseguita correttamente</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                        <div class="boxesito negativo errorHead">
                            <div class="text">
                                <h4>Attenzione</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /popup trasferimento CC2 conferma -->
<!----- |FINE| TRASFERIMENTI VELOCI ----->

<!----- TRASFERIMENTI PERIODICI ----->
<!-- popup elimina trasferimento periodico conferma -->
<div class="modal fade" id="lbConferma3" tabindex="-1" role="dialog" aria-labelledby="lbConfermaLabel3">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i
                            class="icon icon-alert_error_fill icon-2x"></i></a>
                <h2 class="modal-title" id="lbConfermaLabel3">Trasferimento periodico</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div id="confermaContent3" class="confermaContent">
                        <section>
                            <p>
                                Stai per eliminare un trasferimento periodico dal <?php echo $contoLabelLongSingLow ?> al deposito</p>
                        </section>
                        <form class="formGenerico output" role="form">
                            <!--RIGA DIVISA IN TRE CAMPI -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Importo</label>
                                        <span class="output"><span id="importoDaEliminare"></span> <span class="valuta"></span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">A partire da</label>
                                        <span class="output"><span id="aPartireDa"></span></span>
                                    </div>

                                    <div class="clearfix visible-sm-block"></div>

                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Frequenza</label>
                                        <span class="output"><span id="frequenza"></span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Scadenza</label>
                                        <span class="output"><span id="scadenza"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-ria separator-medium"></div>
                            <div class="form-group btnWrapper">
                                <div class="btn-align-center">
                                    <a type="button" href="javascript:" class="btn btn-default" id="annulla3"
                                       title="Annulla">Annulla</a>
                                    <a type="button" href="javascript:" class="btn btn-primary" id="disponi3"
                                       title="Conferma">Prosegui</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Div per la response delle dispositive in popup  -->
                    <section id="confermaResponse3" class="confermaResponse boxesitoWrap">
                        <div class="boxesito positivo confirmHead">
                            <div class="text">
                                <h4>Operazione eseguita correttamente</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                        <div class="boxesito negativo errorHead">
                            <div class="text">
                                <h4>Attenzione</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /popup elimina trasferimento periodico conferma -->
<!-- popup conferma nuovo trasferimento periodico -->
<div class="modal fade" id="lbConferma4" tabindex="-1" role="dialog" aria-labelledby="lbConfermaLabel4">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="lbConfermaLabel4">Trasferimento periodico</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div id="confermaContent4" class="confermaContent">
                        <section>
                            <p>
                             Stai per disporre un trasferimento periodico dal <?php echo $contoLabelLongSingLow ?> al deposito.</p>
                        </section>
                        <form class="formGenerico output" role="form">
                            <!--RIGA DIVISA IN TRE CAMPI -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Importo</label>
                                        <span class="output"><span id="importoTR"></span> <span class="valuta"></span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">A partire da</label>
                                        <span class="output"><span id="aPartireDaTR"></span></span>
                                    </div>

                                    <div class="clearfix visible-sm-block"></div>

                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Frequenza</label>
                                        <span class="output"><span id="frequenzaTR"></span></span>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <label class="control-label">Scadenza</label>
                                        <span class="output"><span id="scadenzaTR"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-ria separator-medium"></div>
                            <div class="form-group btnWrapper">
                                <div class="btn-align-center">
                                    <a type="button" href="javascript:" class="btn btn-default" id="annulla4"
                                       title="Annulla">Annulla</a>
                                    <a type="button" href="javascript:" class="btn btn-primary" id="disponi4"
                                       title="Conferma">Prosegui</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Div per la response delle dispositive in popup  -->
                    <section id="confermaResponse4" class="confermaResponse boxesitoWrap">
                        <div class="boxesito positivo confirmHead">
                            <div class="text">
                                <h4>Operazione eseguita correttamente</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                        <div class="boxesito negativo errorHead">
                            <div class="text">
                                <h4>Attenzione</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /popup conferma nuovo trasferimento periodico -->
<!----- |FINE| TRASFERIMENTI PERIODICI ----->

<?php } /* Chiudo if ($permettiDispositive) */ ?>


<!----- LINEE VINCOLATE ----->
<?php  if ($permettiDispositive) {  ?>
<!-- popup conferma elimina linea vincolata -->
<div class="modal fade" id="lbConferma6" tabindex="-1" role="dialog" aria-labelledby="lbConfermaLabel6">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="lbConfermaLabel6">Svincolo linea</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div id="confermaContent6" class="confermaContent">
                        <div id="boxRetentionLV"></div>

                        <section class="boxesitoWrap">
                            <div class="boxesito attenzione">
                                <div class="text">
                                    Ti ricordiamo che, <strong>svincolando ora la linea</strong>, gli interessi maturati saranno liquidati <strong>ai tassi del  deposito libero</strong> (non a quelli della linea).
                                </div>
                            </div>
                        </section>

                        <section>
                            <p>
                                Stai per <strong>svincolare questa linea</strong>, l'importo sar&agrave; riaccreditato
                                sul deposito libero.</p>
                        </section>
                        
                        <form class="formGenerico output" role="form">
                            <!--RIGA DIVISA IN TRE CAMPI -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="control-label">Nome</label>
                                        <span class="output"><span id="descLV6" class="lvName"></span></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Numero</label>
                                        <span class="output"><span id="numLV6"></span></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Apertura</label>
                                        <span class="output"><span id="dataALV6"></span></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Scadenza</label>
                                        <span class="output"><span id="dataSLV6"></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="control-label">Importo da svincolare</label>
                                        <span class="output"><span id="valoreVincolatoLV6"></span> <span class="valuta"></span></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label" for="parteLV">Vuoi svincolare solo una
                                            parte?</label>
                                        <input class="form-control clear-x" type="text" id="parteLV">
                                    </div>
                                </div>
                            </div>

                            <div class="separator-ria separator-medium"></div>

                            <div class="form-group btnWrapper">
                                <div class="btn-align-center">
                                    <a type="button" href="javascript:" class="btn btn-default" id="annulla6"
                                       title="Annulla">Annulla</a>
                                    <a type="button" href="javascript:" class="btn btn-primary" id="disponi6"
                                       title="Conferma">Prosegui</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="clear"></div>
                    <!--Div per la response delle dispositive in popup  -->
                    <section id="confermaResponse6" class="confermaResponse boxesitoWrap">
                        <div class="boxesito positivo confirmHead">
                            <div class="text">
                                <h4>Operazione eseguita correttamente</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                        <div class="boxesito negativo errorHead">
                            <div class="text">
                                <h4>Attenzione</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /popup conferma elimina linea vincolata -->

<!-- popup conferma nuova linea vincolata -->
<div class="modal fade" id="lbConferma7" tabindex="-1" role="dialog" aria-labelledby="lbConfermaLabel7">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="lbConfermaLabel7">Apertura linea vincolata</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div id="confermaContent7" class="confermaContent">
                        <section>
                			<p>Stai per impostare la linea vincolata indicata sotto.<br/></p>
                			
                			<ul>
                				<li>L'importo che investi viene prelevato dal tuo <strong>deposito libero</strong>.</li>
                				<li>Il giorno lavorativo  successivo alla scadenza della
                				linea, l'importo &egrave; <strong>riaccreditato automaticamente sul
                				deposito stesso</strong>. Un giorno dopo sono corrisposti i
                				relativi interessi.</li>
                			</ul>
                        </section>
                        
                        <form class="formGenerico output" role="form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="control-label">
                                            <span class="descLVlabel"><strong>Nome</strong>&nbsp;(opzionale)</span><br>
                                            <span class="descLVtext"></span>
                                        </label>
                                        <input type="text" id="inputX7" maxlength="20" value="" placeholder="Nessuna descrizione" class="form-control clear-x">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Apertura</label>
                                        <span class="output"><span id="dataCreazioneLV"></span></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Scadenza</label>
                                        <span class="output"><span id="dataScadenzaLV"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="control-label">Tasso</label>
                                        <span class="output"><span id="tassoLV"></span></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Durata</label>
                                        <span class="output"><span id="durataLV"></span></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Importo iniziale</label>
                                        <span class="output"><span id="valoreVincolatoLV"></span> <span class="valuta"></span><br/>
                                        <strong id="lblNonSvinc1" style="display:none">Svincolabile: NO</strong></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Importo finale</label>
                                        <span class="output"><span id="valoreFinaleLV"></span> <span class="valuta"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-ria separator-medium"></div>
                            <div class="form-group btnWrapper">
                                <div class="btn-align-center">
                                    <a type="button" href="javascript:" class="btn btn-default" id="annulla7"
                                       title="Annulla">Annulla</a>
                                    <a type="button" href="javascript:" class="btn btn-primary" id="disponi7"
                                       title="Conferma">Prosegui</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="clear"></div>
                    <!--Div per la response delle dispositive in popup  -->
                    <section id="confermaResponse7" class="confermaResponse boxesitoWrap">
                        <div class="boxesito positivo confirmHead">
                            <div class="text">
                                <h4>Operazione eseguita correttamente</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                        <div class="boxesito negativo errorHead">
                            <div class="text">
                                <h4>Attenzione</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /popup conferma nuova linea vincolata -->
<?php } ?>

<!-- popup dettagli linea vincolata -->
<div class="modal fade" id="lbConferma13" tabindex="-1" role="dialog" aria-labelledby="lbConfermaLabel13">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="lbConfermaLabel13">Dettagli linea vincolata</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div id="confermaContent13" class="confermaContent">
                        <form class="formGenerico output" role="form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="control-label" for="inputX13">
                                            <span class="descLVlabel"><strong>Nome</strong>&nbsp;(opzionale)</span><br>
                                            <span class="descLVtext"></span>
                                        </label>
                                        <input id="inputX13" type="text" maxlength="20" value="- nessuna descrizione -" class="form-control clear-x">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Numero</label>
                                        <span class="output"><span id="numeroLV13"></span></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Apertura</label>
                                        <span class="output"><span id="dataAperturaLV13"></span></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Scadenza</label>
                                        <span class="output"><span id="dataScadenzaLV13"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="control-label">Tasso</label>
                                        <span class="output"><span id="tassoLV13"></span>%</span>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Durata</label>
                                        <span class="output"><span id="durataLV13"></span>&nbsp;mesi</span>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Importo iniziale</label>
                                        <span class="output"><span id="valoreVincolatoLV13"></span> <span class="valuta"></span><br/>
                                        <strong id="lblNonSvinc2" style="display:none">Svincolabile: NO</strong></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="control-label">Importo finale</label>
                                        <span class="output"><span id="valoreFinaleLV13"></span> <span class="valuta"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-ria separator-medium"></div>
                            <div class="form-group btnWrapper">
                                <div class="btn-align-center">
                                    <a type="button" href="javascript:" class="btn btn-default" id="annulla13"
                                       title="Annulla">Annulla</a>
                                    <a type="button" href="javascript:" class="btn btn-primary" id="disponi13"
                                       title="Conferma">Prosegui</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="clear"></div>
                    <!--Div per la response delle dispositive in popup  -->
                    <section id="confermaResponse13" class="confermaResponse boxesitoWrap">
                        <div class="boxesito positivo confirmHead">
                            <div class="text">
                                <h4>Operazione eseguita correttamente</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                        <div class="boxesito negativo errorHead">
                            <div class="text">
                                <h4>Attenzione</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /popup dettagli linea vincolata -->
<!----- |FINE| LINEE VINCOLATE ----->


<!----- COORDINATE BANCARIE ----->
<!-- popup stampa coordinate PDF -->
<div class="modal fade" id="lbConferma9" tabindex="-1" role="dialog" aria-labelledby="lbConfermaLabel9">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i
                            class="icon icon-alert_error_fill icon-2x"></i></a>
                <h2 class="modal-title" id="lbConfermaLabel9">Stampa coordinate bancarie</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div id="confermaContent9" class="confermaContent">
                        <section class="box">
            				<p>Porta le tue coordinate bancarie sempre con te, stampa un documento PDF <br>con i tuoi dati di <?php echo $contoLabelLongSingLow ?>.</p>
                        </section>
                        <div class="form-group btnWrapper">
                            <div class="btn-align-center">
                                <a type="button" href="javascript:" class="btn btn-default" id="annulla9"
                                   title="Annulla">Annulla</a>
                                <a type="button" href="javascript:" class="btn btn-primary" id="linkStampaCoordinate"
                                   title="Apri PDF">Apri PDF</a>
                            </div>
                        </div>
                    </div>
                    <!--Div per la response delle dispositive in popup  -->
                    <section id="confermaResponse9" class="confermaResponse boxesitoWrap">
                        <div class="boxesito positivo confirmHead">
                            <div class="text">
                                <h4>Operazione eseguita correttamente</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                        <div class="boxesito negativo errorHead">
                            <div class="text">
                                <h4>Attenzione</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /popup stampa coordinate PDF -->

<!-- popup invia coordinate -->
<div class="modal fade" id="lbConferma10" tabindex="-1" role="dialog" aria-labelledby="lbConfermaLabel10">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="lbConfermaLabel10">Invio coordinate bancarie</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div id="confermaContent10" class="confermaContent">
                        <section>
                            <p>Invia ad un indirizzo email le tue coordinate bancarie.<br/></p>
                        </section>

                        <div id="entrambeTXT" class="form-group">
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <label class="control-label-output" for="ICemail">Email destinatario</label>
                                    <input type="text" id="ICemail" class="coordinate" name="emailDest" />
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <label class="control-label-output" for="ICemailConf">Conferma email</label>
                                    <input type="text" id="ICemailConf" class="coordinate" name="emailConf" />
                                </div>

                                <div class="clearfix visible-sm-block"></div>

                                <div class="col-sm-6">
                                    <label class="control-label-output" for="ICmessaggio">Messaggio</label>
                                    <textarea type="text" id="ICmessaggio" class="coordinate" name="messaggio"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group btnWrapper">
                            <div class="btn-align-center">
                                <a type="button" href="javascript:" class="btn btn-default" id="annulla10"
                                   title="Annulla">Annulla</a>
                                <a type="button" href="javascript:" class="btn btn-primary" id="linkInviaCoordinate"
                                   title="Apri PDF">Apri PDF</a>
                            </div>
                        </div>
                    </div>
                    <!--Div per la response delle dispositive in popup  -->
                    <section id="confermaResponse10" class="confermaResponse boxesitoWrap">
                        <div class="boxesito positivo confirmHead">
                            <div class="text">
                                <h4>Operazione eseguita correttamente</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                        <div class="boxesito negativo errorHead">
                            <div class="text">
                                <h4>Attenzione</h4>
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /popup invia coordinate -->

<!-- invia email -->
<div class="modal fade" id="lbHomeInvioCoorBank" tabindex="-1" role="dialog" aria-labelledby="lbHomeInvioCoorBankLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" id="homeInvioCoorBank"></div>
    </div>
</div>
<!-- /invia email -->
<!----- |FINE| COORDINATE BANCARIE ----->

<!----- DETTAGLIO EXTRA MONEY ----->
<div style="display: none;">
    <div id="extramoneyinfo">
        <div class="formGenerico formResponsive">
            <div class="form-group">
                <label class="control-label">Deposito</label>
                <div class="form-inline">        
                    <div class="input-group">
                      <select class="form-control" size="1" name="contoSelModal" id="contoSelModal">
                            <option value="00596 - 0000099102 - EUR" selected="selected" accountid="00596 - 0000099102 - EUR" accountidtoshow="00596 - 0000099102 - EUR">
                                    00596 - 0000099102 - EUR
                            </option>
                            <option value="00596 - 0000099112 - EUR" selected="selected" accountid="00596 - 0000099112 - EUR" accountidtoshow="00596 - 0000099112 - EUR">
                                    00596 - 0000099112 - EUR
                            </option>
                            <option value="00596 - 0000099103 - EUR" selected="selected" accountid="00596 - 0000099103 - EUR" accountidtoshow="00596 - 0000099103 - EUR">
                                    00596 - 0000099103 - EUR
                            </option>
                            <option value="00596 - 0000099113 - EUR" selected="selected" accountid="00596 - 0000099113 - EUR" accountidtoshow="00596 - 0000099113 - EUR">
                                    00596 - 0000099113 - EUR
                            </option>
                            <option value="00596 - 0000099123 - EUR" selected="selected" accountid="00596 - 0000099123 - EUR" accountidtoshow="00596 - 0000099123 - EUR">
                                    00596 - 0000099123 - EUR
                            </option>
                            <option value="00596 - 0000099133 - EUR" selected="selected" accountid="00596 - 0000099133 - EUR" accountidtoshow="00596 - 0000099133 - EUR">
                                    00596 - 0000099133 - EUR
                            </option>
                            <option value="00596 - 0000081080 - EUR" selected="selected" accountid="00596 - 0000081080 - EUR" accountidtoshow="00596 - 0000081080 - EUR">
                                    00596 - 0000081080 - EUR
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <section class="boxesitoWrap">
            <div class="boxesito negativo">
                <div class="text">
                    <p>
                        <strong>Errore caricamento dati</strong><br>
                        S&igrave; verificato un problema tecnico durante il caricamento dati.<br>
                        <a id="exmRetry" href="javascript:">Prova di nuovo</a>
                    </p>
                </div>
            </div>
        </section>

        <section class="exmResult">
            <p><strong>Scopri il dettaglio dei movimenti, entrate e uscite, che compongono il tuo saldo Extra Money.</strong></p>
            <div class="exmMovs">
                <table data-toggle="table" class="collapsableTable collapsed" id="tableEntrate">
                    <thead>
                        <tr>
                            <th class="left thTitle extended">TOTALE ENTRATE<br><span class="update"></span>
                            </th>
                            <th class="right thVal"><span id="totEntrate"></span>&nbsp;&euro;</th>
                            <th class="right thArrow">
                                <span class="toggleCollapse">
                                    <i class="icon icon-arrow_down"></i>
                                    <i class="icon icon-arrow_up"></i>
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <table data-toggle="table" class="collapsableTable collapsed" id="tableUscite">
                    <thead>
                        <tr>
                            <th class="left thTitle extended">TOTALE USCITE<br><span class="update"></span></th>
                            <th class="right thVal"><span id="totUscite"></span>&nbsp;&euro;</th>
                            <th class="right thArrow">
                            <span class="toggleCollapse">
                                <i class="icon icon-arrow_down"></i>
                                <i class="icon icon-arrow_up"></i>
                            </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <table data-toggle="table" class="collapsableTable collapsed">
                    <thead>
                        <tr>
                            <th class="left thTitle extended">TOTALE LINEE VINCOLATE EXTRA MONEY<br><span class="update"></span></th>
                            <th class="right thVal"><span id="totLineeVincEM"></span>&nbsp;&euro;</th>
                            <th class="right thArrow">&nbsp;</th>
                        </tr>
                    </thead>
                </table>
                <table data-toggle="table" class="collapsableTable collapsed exmBonus">
                    <thead>
                        <tr>
                            <th class="left thTitle extended">BONUS<br><span class="update"></span></th>
                            <th class="right thVal"><span id="totDeroga"></span>&nbsp;&euro;</th>
                            <th class="right thArrow">&nbsp;</th>
                        </tr>
                    </thead>
                </table>
                <div class="exmTotal">
                    <table data-toggle="table" class="collapsableTable collapsed total">
                        <thead>
                            <tr>
                                <th class="left thTitle extended">IMPORTO INVESTIBILE<br><span class="update"></span></th>
                                <th class="right thVal"><span id="totInvestibile"></span>&nbsp;&euro;</th>
                                <th class="right thArrow">&nbsp;</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        window.$extramoneyInfo = $('#extramoneyinfo');
        window.$contoSelModal = $('#contoSelModal');
        window.hasSelectConto = $contoSelModal[0].tagName === 'SELECT';
        window.$extramoneyModal = getModal({
            id:"exmInfoModal",
            titolo:"Riepilogo",
            body: $extramoneyInfo
        });
        window.$totEntrate = $('#totEntrate');
        window.$boxesitoWrap = $extramoneyInfo.find('.boxesitoWrap');
        window.$exmResult = $extramoneyInfo.find('.exmResult');
        window.$totUscite = $('#totUscite');
        window.$totLineeVincEM = $('#totLineeVincEM');
        window.$totDeroga = $('#totDeroga');
        window.$totInvestibile = $('#totInvestibile');
        window.$tableEntrateBody = $('#tableEntrate tbody');
        window.$tableUsciteBody = $('#tableUscite tbody');
        window.$updateArr = $('.exmMovs .update');

        /* TEST */
        window.testMode = true;
        window.testJson = {
            "dataCalcolo": "25/02/2019",
            "totEntrate": 11000000,
            "totUscite": 12000000,
            "entrate": [
            {
                "categoria": "voce entrata0",
                "nota": "nota 0",
                "valore": 13000000
            },
            {
                "categoria": "voce entrata1",
                "nota": "nota 1",
                "valore": 14000000
            }],
            "uscite": [],
            "totLineeVincEM": 17000000,
            "deroga": 18000000,
            "totInvestibile": 19000000
        };

        window.addVoci = function ($tableBody, voci) {
            var len = voci.length;
            var i;
            var trClass;
            var nota;

            $tableBody.html('');

            if (len) {
                for (i = 0; i < len; ++i) {
                    trClass = i / 2 ? 'dispari' : 'pari';

                    nota = !voci[i].nota
                        ? ''
                        : '<br><span class="indent nota">' + voci[i].nota + '</span>';

                    $tableBody.append(
                        '<tr class="' + trClass + '">' +
                            '<td class="left"><span class="indent">' + voci[i].categoria + '</span>' + nota + '</td>' +
                            '<td class="right">' + formattaNumero(voci[i].valore) + '&nbsp;&euro;</td>' +
                            '<td class="right">&nbsp;</td>' +
                        '</tr>'
                    );
                }
                $tableBody.closest('.table').removeClass('noVoci');
            } else {
                $tableBody.closest('.table').addClass('noVoci');
            }
        }

        window.showData = function (json) {
            $updateArr.html('al giorno ' + json.dataCalcolo);
            $totEntrate.html(formattaNumero(json.totEntrate));
            $totUscite.html(formattaNumero(json.totUscite));
            $totLineeVincEM.html(formattaNumero(json.totLineeVincEM));
            $totDeroga.html(formattaNumero(json.deroga));
            $totInvestibile.html(formattaNumero(json.totInvestibile));

            addVoci($tableEntrateBody, json.entrate);
            addVoci($tableUsciteBody, json.uscite);

            $boxesitoWrap.hide();
            $exmResult.show();
        }

        window.showError = function () {
            $boxesitoWrap.show();
            $exmResult.hide();
        }

        window.getEmInfo = function () {
            var contoSelezionato = $contoSelModal.val();

            var filiale = parseFloat(contoSelezionato.split("-")[0].trim());
            var conto = parseFloat(contoSelezionato.split("-")[1].trim());
            var campagna =  'aaaa';

            if (testMode) {
                showData(testJson);
            } else {
                if (!$extramoneyInfo.hasClass("loading")) {
                    $extramoneyInfo.addClass("loading");
                    $.ajax({
                        type: 'POST',
                        url:  cgi_script + '/conti/dettaglioExtraMoney.action',
                        data: {filiale: filiale, conto: conto, campagna: campagna, accountID: contoSelezionato},
                        dataType: 'json',
                        success: function(json) {
                            if (json.esito && json.esito === 'ok') {
                                showData(json);
                            } else {
                                showError();
                            }

                            $extramoneyInfo.removeClass("loading");
                        },
                        error: function(json) {
                            showError();
                        }
                    });
                }
            }
        }

        window.getEmModal = function (contoSelezionato) {
            if (hasSelectConto) {
                $contoSelModal.val(contoSelezionato).change();
            } else {
                getEmInfo();
            }

            $extramoneyInfo.find('.collapsableTable').addClass('collapsed');
            $extramoneyModal.modal('show');
        }

        if (window.hasSelectConto) {
            window.$contoSelModal.change(getEmInfo);
        }

        $('#exmRetry').click(window.getEmInfo);

        $('.collapsableTable').on('click', '.toggleCollapse', function (e) {
            e.preventDefault();
            $(e.delegateTarget).toggleClass('collapsed');
            return false;
        }).on('selectstart mousedown', 'th', function () {
            return false;
        });
    });
</script>
<!----- |FINE| DETTAGLIO EXTRA MONEY ----->
