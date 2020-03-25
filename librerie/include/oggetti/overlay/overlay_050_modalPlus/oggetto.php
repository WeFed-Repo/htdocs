<div class="modal fade modalPlus" id="modalPlusTest" tabindex="-1" role="dialog" aria-labelledby="modalPlusLabelTest">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="modalPlusLabelTest">Modal Plus test</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="confermaContent">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, magni. Repellat animi quia, debitis vero aperiam, sequi excepturi optio? Magni est, accusamus cumque enim! Amet nesciunt cupiditate veniam nam harum.</p>

                        <section>
                            <div class="formGenerico output">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="control-label-output">Lorem ipsum</label>
                                            <span class="output">Lorem ipsum</span>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="control-label-output">Lorem ipsum</label>
                                            <span class="output">Lorem ipsum</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="separator-ria separator-medium"></div>

                                <div class="form-group btnWrapper">
                                    <div class="btn-align-center">
                                        <a type="button" href="#!" class="btn btn-default modalPlusAnnulla" title="Annulla">Annulla</a>
                                        <a type="button" href="#!" class="btn btn-primary modalPlusConferma" id="modalPlusConfermaTest" title="Conferma">Prosegui con messaggio</a>
                                        <a type="button" href="#!" class="btn btn-primary modalPlusConferma" id="modalPlusErrorTest" title="Conferma">Prosegui con errore</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--Div per la response delle dispositive in popup  -->
                    <section class="confermaResponse boxesitoWrap" style="display: none">
                        <div class="boxesito positivo confirmHead">
                            <div class="text">
                                <div class="messageResponse">
                                </div>
                            </div>
                        </div>
                        <div class="boxesito negativo errorHead">
                            <div class="text">
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

<a type="button" href="#!" class="btn btn-primary" id="modalPlusBtnTest" title="Conferma">Apri Modal Plus</a>

<script>
    $(function () {
        var modalPlusTest = $('#modalPlusTest');
        $('#modalPlusConfermaTest').click(function () {
            setTimeout(function () {
                modalPlusTest.modalPlus('showMessage', 'Operazione eseguita correttamente');
            }, 1000);
        });
        $('#modalPlusErrorTest').click(function () {
            setTimeout(function () {
                modalPlusTest.modalPlus('showError', 'Errore tecnico');
            }, 1000);
        });
        $('#modalPlusBtnTest').click(function () {
            modalPlusTest.modalPlus();
        });
    });
</script>