<h2>Apertura nuova linea</h2>


<section class="boxesitoWrap">
    <div class="boxesito positivo">
        <i class="icon icon-alert_ok icon-2x"></i>
        <div class="text">
            <div class="row">
                <div class="col-xs-12">
                    <p><strong>L'operazione &egrave; stata completata correttamente</strong></p>
                    <p>A conferma dell'operazione ti sar&agrave; inviata una email.</p>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- FORM -->
<section>
    <div class="tithelp">
        <h4>Riepilogo dati</h4>
        <br class="clear">
    </div>
    <form class="formGenerico borderFormRounded" role="form" id="form01">

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Deposito</label>
                    <span class="output">01096 - 0000085969 - EUR</span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label-output"></label>
                    <span class="output"></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Tasso lordo</label>
                    <span class="output">0,75%</span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label-output">Durata vincolo</label>
                    <span class="output">3 mesi</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Data inizio</label>
                    <span class="output">24/08/2016</span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label-output">Data fine</label>
                    <span class="output">23/11/2016</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Importo da vincolare</label>
                    <span class="output">55,00€</span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label-output">Importo a scadenza</label>
                    <span class="output">55,07€</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Nome linea vincolata</label>
                    <span class="output">prova test</span>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>

    </form>


    <!-- Icona stampa documenti -->
    <div class="form-group btnWrapper">

        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio" href="">
                stampa documenti</a>
        </div>
        <div class="clear"></div>
    </div>
    <!-- icona stampa documenti -->


    <!-- BTN STEP -->
    <div class="form-group btnWrapper">
        <div class="stepBtn">Step <strong> 2 </strong> di 2</div>
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio" href="/template/strutt_webank.php?tpl=sportello/tpl_apertura_nuova_linea.php">
                apri nuova linea</a>
        </div>

        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio" href="/template/strutt_webank.php?tpl=sportello/tpl_linee_attive.php">
                linee attive</a>
        </div>
        <div class="clear"></div>
    </div>
    <!--END  BTN STEP -->

</section>


<!-- Overlayer-->


<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
                <h2 class="modal-title" id="myModalLabel">Apertura linea di vincolo</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <p><strong>Apertura nuova linea</strong><br/>
                                Di seguito la spiegazione delle voci presenti in tabella:</p>
                            <ul>
                                <li>
                                    <strong>deposito:</strong> &egrave; la linea su cui viene aperto il vincolo.
                                </li>
                                <li><strong>importo da vincolare:</strong> &egrave; l'importo della linea di vincolo.</li>
                                <li><strong>tasso d'interesse:</strong> &egrave; il tasso lordo a cui vengono liquidati gli interessi alla scadenza
                                    del vincolo
                                </li>
                                <li><strong>durata vincolo:</strong> &egrave; la durata del vincolo</li>
                                <li><strong>data inizio:</strong> &egrave; la data di apertura della linea vincolata</li>
                                <li><strong>data fine:</strong> &egrave; la data di chiusura della linea vincolata.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End Overlayer-->