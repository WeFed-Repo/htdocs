<div class="no-margin-section">
  <!-- Elemento d'esempio a cui puntare -->
  <div class="bordered pb-2 mt-3 pb-3 pl-2 pr-2" id="toform-1">
    <!-- accordion button mobile --->
    <a href="javascript:void(0)" class="d-block d-md-none btn btn-link mb-0 pb-0 pt-0 text-right" data-filter-button="filter-distinte">
      <i class="icon icon-arrow_down" title="icon-filtri-avanzati"></i> Filtri avanzati
    </a>
    <form class="form-grid needs-validation" novalidate>
      <div class="form-row">
        <div class="form-group col-sm-6 col-md-4">
          <label>Tipo disposizione</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group col-sm-6 col-md-4">
          <label>Stato disposizione</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group col-sm-4 d-flex align-items-end justify-content-between">
          <!-- accordion button desktop --->
          <a href="javascript:void(0)" class="d-none d-md-block btn btn-link float-right mb-3 btn-w-sm" data-filter-button="filter-distinte">
            <i class="icon icon-arrow_down mt-2" title="icon-filtri-avanzati"></i> Filtri avanzati
          </a>
          <a href="javascript:void(0)" class="d-none d-md-block btn btn-white float-right mb-3 btn-w-sm"> Applica </a>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <section class="px-3" data-filter-form="filter-distinte" style="display:none;" data-toggle-filter-parent>
            <div class="form-row">
              <div class="form-group col-6 col-sm-3 col-md-2">
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
              <div class="form-group col-6 col-sm-3 col-md-2">
                <label class="control-label">Data a</label>
                <div class="input-group datepicker">
                  <input type="text" class="form-control" data-datepicker autocomplete="off" placeholder="Data"/>
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="icon icon-ico_calendario"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group col-6 col-sm-3 col-md-2">
                <label>Importo da</label>
                <input type="text" class="form-control" placeholder="Text">
              </div>
              <div class="form-group col-6 col-sm-3 col-md-2">
                <label>Importo a</label>
                <input type="text" class="form-control" placeholder="Text">
              </div>
              <div class="form-group col-6 col-md-4 d-flex align-items-end">
                <div class="form-check checkbox pb-2">
                  <input class="form-check-input" type="checkbox" id="effettuacheck" name="effettuacheck">
                  <label class="form-check-label" for="effettuacheck" >Effettua il check</label>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="row d-md-none">
        <div class="col col-sm-6 m-auto">
          <a href="javascript:void(0)" class="btn btn-block btn-white float-right mb-3 btn-w-sm"> Applica </a>
        </div>
      </div>
    </form>
  </div>

  <!-- Stile inline per simulare lo spazio necessario allo scroll -->
  <div class="d-flex justify-content-center align-items-center" style="height:400px; background-color:gray; width:100%; font-size:30px;">
    <p style="color:white;">Spazio d'esempio</p>
  </div>
</div>

<div class="no-margin-section">
  <!-- Elemento in stile anchor -->
  <div class="bordered box-order-form pb-2 mt-3 pb-3 pl-2 pr-2">
    <form class="form-grid row d-flex align-items-center">

      <div class="col col-12 col-md-7">
        <h3 class="title">Uscite categorizzate</h3>
        <span class="text-with-icon-inline right-icon">Dal 20/01/2021 al 18/02/2021 
          <a class="icon-inline" href="javascript:;" title="" fe-data-stid="toform-1"><i class="icon icon-modifica mr-0"></i></a>
        </span>
      </div>

      <div class="col col-7 col-md-3">
        <div class="form-group mx-2 my-0">
          <select class="form-control my-0">
            <option selected="">Ordine decrescente</option>
            <option>Ordine crescente</option>
          </select>
        </div>
      </div>

      <div class="col col-5 col-md-2 group-icon d-flex justify-content-around">
        <a class="icon-inline px-2" href="javascript:;" title=""><i class="icon icon-pdf mr-0"></i></a>
        <a class="icon-inline px-2" href="javascript:;" title=""><i class="icon icon-excel mr-0"></i></a>
        <a class="icon-inline px-2" href="javascript:;" title=""><i class="icon icon-excel_2000 mr-0"></i></a>
      </div>

    </form>
  </div>
</div>

<script>
  $(function(){
    // Funzione per gestire l'Append
    function scrolltoid() {
      // Set distanza top (per evitare problemi barre o elementi fissati top)
      var ypos = 80;
      let toid = '#' + $(this).attr("fe-data-stid");
      $('html, body').animate({
        scrollTop: ($(toid).offset().top - ypos)
      }, 1000);
    }
    
    $(document).on('click', ('[fe-data-stid]'), scrolltoid);

  });
</script>
