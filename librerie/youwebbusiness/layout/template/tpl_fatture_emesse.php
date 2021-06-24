<!-- Titolo -->
<h1>
    Gestione Fatture<button type="button" class="btn-icon-help" data-modal-help=""></button>
</h1>
<!-- /Titolo -->

<!-- Tabber -->
<div class="no-margin-section">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#">Fatture emesse</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Fatture ricevute</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Top 5 Clienti/Fornitori</a></li>
    </ul>
</div>
<!-- /Tabber -->

<!-- SELETTORE RAPPORTO BFM -->
<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_tooltip/oggetto.php'); ?>
<!-- ./ SELETTORE RAPPORTO BFM -->

<!-- Blocco filtrato -->
<section>
  <div class="bordered pt-0 no-margin-section">

     <div class="table-heading table-heading-filters table-heading-filters-big">
        <div class="table-heading-firstline row d-flex justify-content-between align-items-center">
          <div class="col col-sm-7 col-lg-5">
                    <h3 class="mb-0">Parametri di ricerca</h3>
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

      <div class="table-filters-accordion" data-filter-form="filter01" style="display:none">
        <?php include ("parts/esempio_filtri_ricerca.php"); ?>
      </div>

     
    </div>

  </div>

</section>




<!--ES. BOX STATO FATTURE INTERATTIVO-->
<?php virtual('/youwebbusiness/layout/oggetti/box/box_stato_fatture/oggetto.php'); ?>
<!-- ./ BOX STATO FATTURE INTERATTIVO-->
      


<!-- Grafico standalone fatture -->
<!-- Script per gestione grafici -->
<script type="text/javascript" src="./fe/js/grafici.js"></script>
<!-- Fine importazione assets per grafici -->
<link rel="stylesheet" href="./fe/css/grafici.css" />

      <div class="bordered">

        <div class="row">
          <div class="col col-sm-8">
            <div class="row">
              <div class="col-sm-6">
                <h4>Grafico andamento fatture emesse</h4>
              </div>
              <div class="col-sm-6">
                <strong>Annuale - Gen/Dic - 2020</strong>
              </div>
            </div>
          </div>
          <div class="col col-sm-4"></div>
       
          <div id="istogrammaPile" class="graph-space"></div>
          <script type="text/javascript">
          // Esempio variabile complementare (mesi dell'anno in lingua)
          var mesi = ["Gen", "Feb", "Mar", "Apr","Mag","Giu","Lug","Ago","Set","Ott","Nov","Dic"]
          
          // Dataset del grafico
          var piledata = [
              <?php for ($x=1;$x<=12;$x++){ 
              if ($x>1) print ",";    
                  ?>
                  {
                      "mese": new Date(2020, <?php print $x-1 ?>, 1),
                      "incassate":<?php print rand(0,250000)/100;; ?>,
                      "inscadenza": <?php print rand(0,250000)/100; ?>,
                      "scadute":<?php print rand(0,250000)/100; ?>
                  }
              <?php 
              }
              ?>
          ];

          // Rendering del grafico a "pile"
          Graph.plot({
              graphtype: "piles",
              idcontainer: "istogrammaPile",
              dataProvider: piledata,
              categoryField: "mese",
              categoryAxis: {
                  labelFunction: function(category){
                  var mesedata = new Date(category);
                  return mesi[mesedata.getMonth()] + " " + mesedata.getFullYear();
                  }
              },
              valueAxis: {
                  labelFunction: function(val) {
                      return val + " \u20AC"
                  }
              },
              graphs: [ {
              valueField: "incassate",
              type: "column",
              fillAlphas:1,
              lineColor: "#2f9988",
              balloonText: "[[value]] &euro;"
          },
          {
              valueField: "inscadenza",
              type: "column",
              fillAlphas:1,
              lineColor: "#f6cf49",
              balloonText: "[[value]] &euro;"
          },
          {
              valueField: "scadute",
              type: "column",
              fillAlphas:1,
              lineColor: "#7d48aa",
              balloonText: "[[value]] &euro;"
          }
          ]
          });

          </script>
      </div>



      <!-- Fine grafico standalone fatture -->