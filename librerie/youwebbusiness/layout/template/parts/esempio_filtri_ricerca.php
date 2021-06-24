<!-- Form con filtri -->
<form>
        <div class="form-row">
            <div class="form-group col-xs-12 col-md-3">
                <label class="control-label">Periodo</label>
                <select class="form-control" name="periodo">
                    <option selected value="mensile">Mensile</option>
                    <option value="annuale">Annuale</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-md-3">
                <label class="control-label">Mese</label>
                <select class="form-control">
                    <option selected="">Lorem</option>
                    <option>Ipsum</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-md-2">
                <label class="control-label">Anno</label>
                <select class="form-control">
                    <option selected="">Lorem</option>
                    <option>Ipsum</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-md-2">
                <label class="control-label">Data da</label>
                <div class="input-group datepicker">
                      <input type="text" class="form-control" data-datepicker autocomplete="off" placeholder="Data"/>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="icon icon-ico_calendario"></i>
                        </span>
                      </div>
                    </div>
             
            </div>
            <div class="form-group col-xs-12 col-md-2">
                <label class="control-label">a</label>
                <div class="input-group datepicker">
                      <input type="text" class="form-control" data-datepicker autocomplete="off" placeholder="Data"/>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="icon icon-ico_calendario"></i>
                        </span>
                      </div>
                    </div>
            </div>
        </div>
        

        <div class="form-row">
            <div class="form-group col-xs-12 col-md-3">
                <label class="control-label">Tipologia transazioni</label>
                <div class="dropdown select-custom has-checkbox" name="scCheckbox" id="scCheckbox" data-placeholder="Seleziona"></div>
                <!-- Esempio di inizializzazione del dropdown -->
                <script src="./fe/js/init_select_custom.js"></script>
                <script>
                    //esegue la finta select con i check
                    $("#scCheckbox").initSelectCustom({
                        "nameSel":"scCheckbox",
                        //esempio di array con i valori per la select
                        "dataOptions" : [
                        {
                                "id": 0,
                                "text": "Tutte",
                                "value": "all" 
                                
                        },
                        {
                                "id": 1,
                                "text": "Create lorem ipsum",
                                "value": "1",
                                
                        },
                        {
                                "id": 2,
                                "text": "Create dolor sit amet",
                                "value": "2"
                        },
                        {
                                "id": 3,
                                "text": "Consectetur",
                                "value": "3"
                        }
                        ]

                    }, function(){
                            console.log("Esempio callback!");
                    })
                </script>
                <!-- Fine esempio -->
            </div>

            <div class="col-12 col-md-3">
                <label>Lorem</label>
                <input type="text" class="form-control" placeholder="Text">
              </div>
              <div class="col-12 col-md-2">
                <label>Lorem</label>
                <input type="text" class="form-control" placeholder="Text">
              </div>
              <div class="col-12 col-md-4">
                <div class="form-row pt-3 pt-sm-0">
                  <div class="form-group col-6">
                    <button class="btn btn-white btn-block no-label-md">
                      Reset
                    </button>
                  </div>
                  <div class="form-group col-6">
                    <button class="btn btn-white btn-block no-label-md">
                      Conferma
                    </button>
                  </div>
                </div>
              </div>
            </div>
</form>
<!-- FINE FORM CON FILTRI -->