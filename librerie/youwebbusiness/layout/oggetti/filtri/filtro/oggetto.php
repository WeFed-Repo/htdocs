<section class="c-filter no-margin-section">
  <div class="bordered pt-md-0 pt-lg-0 pb-3">
    <div class="d-block">
      <div class="table-heading table-heading-filters">

        <div class="row d-flex justify-content-between align-items-center pb-3">
          <div class="col">
            <h1 class="d-inline-block mb-0">Tipologie di documenti</h1> <span>Dal 09/09/2020 a 09/12/2020</span>
          </div>
        </div>

        <!-- FILTRI -->

        <div class="d-flex flex-wrap justify-content-between align-items-center">
          <div  class="flex-grow-1 mw-100 my-2">
            <?php
            $tabs = array(
              array('label'=>'TUTTI','active'=>true,'all'=>true),
              array('label'=>'ESTRATTI'),
              array('label'=>'CONTABILI'),
              array('label'=>'DDS'),
              array('label'=>'COMUNICAZIONI'),
              array('label'=>'PORTAFOGLIO'),
            );
            tabs_obj_filter($tabs); ?>
          </div>
          <div class="d-flex flex-wrap justify-content-end align-items-center flex-grow-1 mw-100">
            <div class="d-flex justify-flex-start flex-wrap align-items-center flex-grow-1">
              <div class="form-check radio">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1">
                <label class="form-check-label" for="inlineRadio1">Tutte</label>
              </div>
              <div class="form-check  radio">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                <label class="form-check-label" for="inlineRadio2">Letti</label>
              </div>
              <div class="form-check radio">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option3" checked>
                <label class="form-check-label" for="inlineRadio3">Non letti</label>
              </div>
            </div>
            <div class="form-group d-flex pl-2">
              <div class="form-check  checkbox switch">
                <input class="form-check-input" type="checkbox" id="switch1" name="notifica1" data-filter-button="filter01">
                <label class="form-check-label" for="switch1">Estendi la ricerca</label>
              </div>
            </div>
          </div>
        </div>

        <!-- fine  FILTRI -->

      </div>

        <?php virtual('/youwebbusiness/layout/oggetti/filtri/filtro/accordion_filtri_avanzati.php');?>

      </div>
    </div>
</section>
