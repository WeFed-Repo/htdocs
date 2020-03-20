<script type="text/javascript">
    $(document).ready(function() {
        var pdf1 = false, pdf2 = false, i = 0;

        $('[data-toggle="tooltip"]').click(function() {
            if(!$('#flagDocumentazione').is(':disabled')) {
                $(this).tooltip('destroy');
            } 
        });

        $('#pdf1').click(function(e) {
            e.preventDefault();
            pdf1 = true;
            if(pdf2) {
                $('#flagDocumentazione, #flagInformativa').attr('disabled', false);
            }
        });

        $('#pdf2').click(function(e) {
            e.preventDefault();
            pdf2 = true;
            if(pdf1) {
                $('#flagDocumentazione,#flagInformativa').attr('disabled', false);
            }
        });
    });
</script>
<section>
    <form method="post" action="" id="formAggCondContrattuali">
        <div class="formWrapper">
            <div class="form-group">
                <div class="documenti">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="titleSection titleForm"> INFORMATIVA PRECONTRATTUALE</h3>
                            <p>Clicca sui documenti per prenderne visione</p>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="has-feedback tooltip-wrapper">
                            <span data-toggle="tooltip" class="tooltip-masked" title="Lorem ipsum dolor sit amet, consectetur adipisci elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua."></span>
                            <input type="checkbox" name="flagDocumentazione" id="flagDocumentazione" disabled="disabled">
                        </label><span>Dichiaro di aver letto il <a href="#" id="pdf1" class="tooltip-masked-link">Contratto trading online</a>, il  <a href="#" id="pdf2" class="tooltip-masked-link">Foglio informativa</a> e averne compreso e salvato il contenuto.</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="has-feedback tooltip-wrapper">
                            <span data-toggle="tooltip" class="tooltip-masked" title="Lorem ipsum dolor sit amet, consectetur adipisci elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua."></span>
                            <input type="checkbox" name="flagInformativa" id="flagInformativa" disabled="disabled">
                        </label><span>Dichiaro di essere un utente non professionale (ai fini dell'attivazione dell'informativa delle Borse)</span>
                        <a class="no-underline btn-icon hidden-xs" data-toggle="modal" data-target="#modaleInfo"><i class="icon icon-info_fill"></i></a>
                    </div>
                </div>

                <div class="row">
                    <div class="form-field-input col-xs-12">
                        <div class="alignRight btnWrapper">
                            <a type="button" href="#" class="btn btn-default" id="" title="Indietro">Indietro</a>
                            <a type="button" href="#" class="btn btn-primary" id="" title="Prosegui">Prosegui</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<div id="modaleInfo" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h1 class="modal-title">UTENTE NON PROFESSIONALE</h1>
      </div>
      <div class="modal-body">
        <span>Lorem ipsumo dolor </span>
        <ul>
            <li>Lorem ipsumo dolor dolor sit</li>
             <li>Lorem ipsumo dolor dolor sit</li>
        </ul>
      </div>
      <div class="modal-footer">
        <div class="align-right">
            <input type="button" name="chiudi" value="Chiudi" data-dismiss="modal" class="btn  btn-primary" alt="Chiudi">
        </div>
        </div>
    </div>
    </div>
</div>
