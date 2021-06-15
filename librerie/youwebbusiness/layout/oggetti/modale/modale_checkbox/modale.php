<!-- Modal -->
<div class="modal fade modale-checkbox" data-modal="check-box">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-end">
        <h5 class="modal-title modal-title-grey text-center">Collega il gestionale di fatturazione elettronica</h2>
        <a href="#" data-dismiss="modal" aria-label="Close" >
          <img src="./fe/img/icon/close.svg">
        </a>
      </div>
      <div class="modal-body mb-2">       
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 text-center pl-lg-5 pr-3">
            <p class="mb-4">
            Collegando il tuo gestionale di fatturazione elettronica. 
            Le tue fatture verranno mostrate direttamente sul portale e riconciliate automaticamente 
            </p>
          </div>
        </div>

        <!-- Form Group con checkbox -->
        <div class="form-row justify-content-center mt-4">
          <div class="form-group">

            <div class="radio-card">
              <div class="form-check radio">
                <input class="form-check-input" type="radio" id="radio1" name="inlineRadioOptions" value="">
                <label class="form-check-label" for="radio1"></label>
                <img class="form-check-img" src="./fe/img/placeholder-gestionale-sw-1.png">
              </div>
            </div>

            <div class="radio-card">
              <div class="form-check radio">
                <input class="form-check-input" type="radio" id="radio2" name="inlineRadioOptions" value="">
                <label class="form-check-label" for="radio2" ></label>
                <img class="form-check-img" src="./fe/img/placeholder-gestionale-sw-2.png">
              </div>
            </div>

            <div class="radio-card">
              <div class="form-check radio">
                <input class="form-check-input" type="radio" id="radio3" name="inlineRadioOptions" value="">
                <label class="form-check-label" for="radio3" ></label>
                <img class="form-check-img" src="./fe/img/placeholder-gestionale-sw-3.png">
              </div>
            </div>

            <div class="radio-card">
              <div class="form-check radio">
                <input class="form-check-input" type="radio" id="radio4" name="inlineRadioOptions" value="">
                <label class="form-check-label" for="radio4" >Altri gestionali</label>
              </div>
            </div>

            <div class="form-group col-12 px-sm-5 mt-5">
              <label class="control-label">Api UID</label>
              <input type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group col-12 px-sm-5">
              <label class="control-label">Api Key</label>
              <input type="text" class="form-control" placeholder="">
            </div>

          </div>
        </div>
        <!-- END Form Group con checkbox -->
        
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 text-center">
            <p class="mb-4">
              Disclaimer: relativo a ...
            </p>
          </div>
        </div>

        <!-- IN BODY ALERT -->
        <div class="alert alert-danger full-h-n1">
          Ci dispiace, il collegamento non è andato a buon fine. Riprova più tardi.
        </div>
        <!-- END IN BODY ALERT -->

      </div> 
      <!-- Caso 1 -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary">INDIETRO</button>
        <button type="button" class="btn btn-primary" disabled>CONFERMA</button>
      </div>     
    </div>
  </div>
</div>

<script>
  $(function(){
    // Funzione per gestire il bordo Verde, l'attivazione dell'input da click sulla card intera e l'attivazione del bottone nel footer
    $(".radio-card").click(function () {        
        $(".radio-card").removeClass("selected");
        $(this).addClass("selected");
        $(this).find('.radio input[type="radio"]').prop('checked', true);

        $(".modal-footer button[disabled]").prop('disabled', false);      
    });
  });
</script>
