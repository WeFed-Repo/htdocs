<!-- Titolo -->
<h1>
    Entrate e Uscite <button type="button" class="btn-icon-help" data-modal-help=""></button>
</h1>
<!-- /Titolo -->

<!-- Tabber -->
<div class="no-margin-section">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#">Andamento</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Categorie</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Ricorrenti</a></li>
    </ul>
</div>
<!-- /Tabber -->

<!-- SELETTORE RAPPORTO BFM -->
<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_bfm/oggetto.php'); ?>
<!-- ./ SELETTORE RAPPORTO BFM -->

<!-- Blocco filtrato -->
<section>
  <div class="bordered pt-0 no-margin-section">

     <div class="table-heading table-heading-filters table-heading-filters-big">
        <div class="table-heading-firstline row d-flex justify-content-between align-items-center">
          <div class="col col-sm-7 col-lg-5">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Parametri di ricerca</h3>
                </div>
                <div class="col-sm-6 pt-1">
                    <span><strong>Mensile - Ottobre 2021</strong></span>
                </div>
            </div>
          </div>
          <div class="col d-flex justify-content-end flex-nowrap align-items-center">
            <div class="d-flex flex-grow-0-x pl-2">
              <a href="javascript:void(0)" class="btn btn-white fl-left mb-0" data-filter-button="filter01">
                <i class="icon icon-arrow_down" title="icon-aggiorna"></i>
                Filtra
              </a>
            </div>
          </div>
        </div>

      <!-- Esempio di filtri -->
      <div class="table-filters-accordion" data-filter-form="filter01" style="display:none">
        <?php include ("parts/esempio_filtri_ricerca.php"); ?>
      </div>

      <div>
        <!-- Contenuti visibili sempre -->
        <!-- Esempio grafico interattivo (solo desktop)-->
        <div class="d-none d-sm-block pt-3">
            <?php include("parts/grafico_entrateuscite.php"); ?>
        </div>
        <!-- /Esempio grafico interattivo -->


        <!-- Fine contenuti visibili sempre -->
      </div>

    </div>

  </div>

</section>




