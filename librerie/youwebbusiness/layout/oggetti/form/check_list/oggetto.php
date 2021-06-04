<form class="form-grid">
      <div class="form-row">
        <div class="form-group col-12 col-lg-4">
            <select class="form-control" id="selectSoc">
                <option selected="">Seleziona</option>
                <option>Ipsum</option>
                <option>Ipsum</option>
                <option>Ipsum</option>
                <option>Ipsum</option>
            </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-4">
          <div class="form-check checkbox">
              <input class="form-check-input" type="checkbox"  name="checkSelectorAll" value="" id="checkSelectorAll">
              <label for="checkSelectorAll">Seleziona tutti</span></label>
            </div>
        </div>
      </div>
      <div class="form-row">
          <div class="col-sm-12">
              <div class="check-options-wrapper">
                 <?php for ($i = 0; $i <= 5; $i++) { ?>
                  <div class="bordered check-options-list">
                      <div class="form-row">
                          <div class="form-group col-lg-3 col-xl-3">
                              <div class="form-check checkbox">
                                  <input class="form-check-input" type="checkbox" id="sel<?= $i ?>" name="checkSelector" value="">
                                  <label for="sel<?= $i ?>"><span>Conto lorem ipsum dolor lorem ipsum dolor</span></label>
                              </div>
                          </div>
                          <div class="form-group col-lg-3 col-xl-3">
                              <span class="label">Banca:</span>
                              <span class="text-output">0534 - Banco BPM SPA</span>
                          </div>
                          <div class="form-group col-lg-2 col-xl-2">
                            <span class="label">Rapporto:</span>
                            <span class="text-output">8949 - 000000000356</span>
                          </div>
                          <div class="form-group col-lg-4 col-xl-4">
                            <span class="label">Iban:</span>
                            <span class="text-output">IT60X0542811101000000123456</span>
                          </div>
                      </div>
                  </div>
                 <?php } ?>
              </div>
            </div>
      </div>

      <!--paginazione presente solo in versione mobile -->
      
    <div class="row d-block d-lg-none pb-2">
        <div class="col-sm-12 d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item page-item-arrow">
                    <a class="page-link" href="#" aria-label="Previous">
                    <i class="icon-arrow_left"></i>
                    </a>
                </li>
                <!-- il link attivo deve avere un tag span e non un tag a -->
                <li class="page-item active"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item page-item-arrow">
                    <a class="page-link" href="#" aria-label="Next">
                    <i class="icon-arrow_right"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-sm-12">
            <hr>
        </div>
    </div>
        
                 
    <div class="form-row d-flex justify-content-end">
        <div class="col col-lg-2">
            <button class="btn btn-white brd-green fl-right btn-xs-full" id="btnApplica">
                    <i class="icon icon-ico_applica"></i>Applica
            </button>
        </div>
    </div>
</form>

<!-- emulazione funzioni di check -->
<script type="text/javascript">
    var  allChecks = $('input[name="checkSelector"]');
    $('input[name="checkSelectorAll"]').on("click",function(){
     var isChecked = $(this).is(":checked");
         isChecked ? allChecks.prop( "checked", true ) : allChecks.prop( "checked", false );
        
    })

    $("#btnApplica").on("click",function(e){
        e.preventDefault();
        returnNumberOfChecked();
    })
    var returnNumberOfChecked = function() {
        var nChecked = 0;
        var valueRapporti = $(".dati-value.rapporti");
        for(var i=0; i< allChecks.length; i++) {
            if(allChecks[i].checked)
            nChecked++
        }
        nChecked === 0 ? valueRapporti.html("Nessuno") : valueRapporti.html(nChecked + " " + "conti visualizzati")
      
    }
 
</script>