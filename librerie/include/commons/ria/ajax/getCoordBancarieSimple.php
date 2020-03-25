<div class="modal-header">
    <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
    <h2 class="modal-title" id="lbHomeInvioCoorBankLabel">Invio coordinate bancarie per email</h2>
</div>
<div class="modal-body" id="mailBody">
    <div class="container-fluid">
        <div id="confermaContentEmail" class="confermaContent">
            <section>
                <p>Puoi inserire fino a 10 indirizzi email alla volta, separati da virgola.</p>
            </section>
            <form class="formGenerico output" role="form" id="homeMailCoordBankForm" name="homeMailCoordBankForm" action="/webankpri/wbOnetoone/wbblack/ajax/json/inviaMailCoordBancarie.jsp">
                <!--RIGA DIVISA IN TRE CAMPI -->
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="control-label">Indirizzi email</label>
                            <input id="homeMailCBFdest" type="text" name="mailDest" class="form-control clear-x" placeholder="Indirizzi email separati da virgola">
                        </div>
                    </div>
                </div>
                <div class="separator-ria separator-medium"></div>
                <div class="form-group btnWrapper" id="homeMailCBFdestLabel">
                    <div class="btn-align-center">
                        <a type="button" href="#!" class="btn btn-default" id="annullaInviaEmail" title="Annulla">Annulla</a>
                        <a type="button" href="#!" class="btn btn-primary" id="btnInviaEmail" title="Conferma">Prosegui</a>
                    </div>
                </div>
            </form>
        </div>

        <!--Div per la response delle dispositive in popup  -->
        <section id="confermaResponseEmail" class="boxesitoWrap">
            <div id="mailEsitoOK" class="boxesito positivo confirmHead">
                <div class="text">
                    <h4>Operazione eseguita correttamente</h4>
                    <div class="messageResponse">
                    </div>
                </div>
            </div>
            <div id="mailEsitoKO" class="boxesito negativo errorHead">
                <div class="text">
                    <h4>Attenzione</h4>
                    <div id="invioMailWarng" class="messageResponse">
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script type="text/javascript">
$(function() {
    $('#btnInviaEmail').click(function() {
        if (checkMailCoordBank()) {
            inviaMailCoordBankSimple();
        }
        return false;
    })
    $('#homeMailCBFdest').keypress(function(event) {
        if (event.which == 13) {
            event.preventDefault();
            return false;
        }
    });
});
</script>