<!-- Modal -->

<style>
  .radio-card{
    border-radius: 2px;
    border: solid 1px #dddddd;
    padding: 0 30px 0 30px;
    margin: 0 10px 10px 10px;
    min-height: 80px;
    /* IE FIX*/
    height:1px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    max-width:100%;
  }
  .radio-card .form-check{
    margin-bottom: 0px;
    padding-top: 0px;
  }
  .radio-card img{
    height: 60px;
    padding-left: 10px;
  }
  .radio-card label:not(:empty){
    padding-left: 30px;
  }

  /* @media (max-width: $bp_sm_max) { */
  @media (max-width: 500px) {
    .radio-card{
      padding: 0 10px 0 20px;
    }
    .radio-card label:not(:empty){
      padding-left: 10px;
    }
    .radio-card img{
      height: 50px;
      padding-left: 0px;
    }
  }

</style>

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

        <div class="form-row justify-content-center mt-4">
          <div class="form-group">

            <div class="radio-card">
              <div class="form-check radio">
                <input class="form-check-input" type="radio" id="radio1" name="inlineRadioOptions" value="">
                <label class="form-check-label" for="radio1"></label>
                <img src="./fe/img/placeholder-gestionale-sw-1.png">
              </div>
            </div>

            <div class="radio-card">
              <div class="form-check radio">
                <input class="form-check-input" type="radio" id="radio2" name="inlineRadioOptions" value="">
                <label class="form-check-label" for="radio2" ></label>
                <img src="./fe/img/placeholder-gestionale-sw-2.png">
              </div>
            </div>

            <div class="radio-card">
              <div class="form-check radio">
                <input class="form-check-input" type="radio" id="radio3" name="inlineRadioOptions" value="">
                <label class="form-check-label" for="radio3" ></label>
                <img src="./fe/img/placeholder-gestionale-sw-3.png">
              </div>
            </div>

            <div class="radio-card">
              <div class="form-check radio">
                <input class="form-check-input" type="radio" id="radio4" name="inlineRadioOptions" value="">
                <label class="form-check-label" for="radio4" >Altri gestionali</label>
              </div>
            </div>

          </div>
        </div>

      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary">INDIETRO</button>
        <button type="button" class="btn btn-primary">CONFERMA</button>
      </div>    
    </div>
  </div>
</div>
