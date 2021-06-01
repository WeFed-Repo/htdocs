<form class="form-grid">
      <div class="form-row">
        <div class="form-group col-sm-4">
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
              <input class="form-check-input" type="checkbox"  name="checkSelectorAll" value="">
              <label>Seleziona tutti</span></label>
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
                                  <label>Conto lorem ipsum dolor</span></label>
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
</form>

<!-- emulazione funzioni di check -->
<script type="text/javascript">
    $('input[name="checkSelectorAll"]').on("click",function(){
     var isChecked = $(this).is(":checked"),
          allChecks = $('input[name="checkSelector"]');
          isChecked ? allChecks.prop( "checked", true ) : allChecks.prop( "checked", false )
    })
</script>