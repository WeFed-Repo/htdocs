<h1>
  Dossier Titoli
  <button type="button" class="btn-icon-help" data-modal-help></button>
</h1>

<!-- SELETTORE DOSSIER DI ESEMPIO -->
<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_dossier/oggetto.php'); ?>
<!-- END SELETTORE DOSSIER DI ESEMPIO -->

<!-- AZIONI TABELLA -->
<div class="azioni-tabella d-flex justify-content-between align-items-center">
  <div class="colonna1">
    <div class="d-flex justify-content-start">
      <div class="mr-3 nowrap">Dossier per pagina</div>
      <ul class="list-inline nowrap">
        <li class="list-inline-item active"><a href="#">10</a></li>
        <li class="list-inline-item"><a href="#">20</a></li>
        <li class="list-inline-item"><a href="#">50</a></li>
        <li class="list-inline-item"><a href="#">100</a></li>
      </ul>
    </div>
  </div>
  <div class="colonna2">
    <div class="d-flex justify-content-end">
      <a href="#" aria-label="CSV">
        <span> <img src="./fe/img/icon/excel.svg"> </span>
      </a>
      <a href="#" aria-label="Print">
        <span> <img src="./fe/img/icon/print.svg"> </span>
      </a>
    </div>
  </div>
</div>
<!-- END AZIONI TABELLA -->

<!-- TABERLLA RISULTATI -->
<section class="no-margin-section">
  <!-- contenuto desktop -->
  <div class="d-none d-lg-block mb-3">
      <div class="bordered pt-0 mb-3">
        <script>
        $(function(){
          $('[data-modal-help]').on('click',function(e){
            $('[data-modal="help"]').modal('show');
            var index = $(this).data('modal-help');
            // NOTE inserire qui la chiamata ajax ai dati della tabella
            // di help, usando il valore di data-modal-help,
            // che deve essere uguale all'id univoco della riga
            console.log('RIGA NUMERO '+index);
          });
        });</script>

      <table data-table-mobilized-desktop="exampleTable" data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-stretched">
       <thead>
          <tr>
            <th data-field="isin" data-sortable="true" class="data-mobilized-hide">Cod.ISIN</th> <!-- duplicata per visualizzazione in desktop -->
            <th data-field="intestatario" data-sortable="true" class="data-mobilized-title d-table-cell d-lg-none">Rag.Soc </th>
            <th data-field="isin" data-sortable="true" class="d-none">Cod.ISIN</th> <!-- duplicata per visualizzazione in mobile -->
            <th data-field="descrizione" data-formatter="largeField" class="">Descrizione</th><!-- data-mobilized-fullwidth -->
            <th data-field="data_saldo" data-sortable="true" class="center">Data Saldo</th>
            <th data-field="saldo" data-sortable="true" data-formatter="tableCellValue" class="right d-table-cell d-md-none d-lg-table-cell data-mobilized-hide">Saldo</th>
            <th data-field="div" data-sortable="true" class="left d-table-cell d-md-none d-lg-table-cell data-mobilized-hide">DIV</th>
            <th data-field="saldo_div" data-sortable="true" data-formatter="tableCellValue" class="right d-none d-md-table-cell d-lg-none">Saldo</th>
            <th data-field="intestatario" data-sortable="true" class="data-mobilized-hide">Rag.Soc</th>
            <th data-field="abi" data-sortable="true">ABI</th>
            <th data-field="cab" data-sortable="true">CAB</th>
            <th data-field="dossier" data-sortable="true">N.dossier</th>
          </tr>
       </thead>
       <tbody>
         <?php // esempio ciclo per tabella in desktop ?>
         <?php for ($i = 0; $i <= 3; $i++) { ?>
           <tr data-index="<?= $i ?>">
             <td> <a href ="javascript:;" data-modal-detail='<?= $i ?>'>IT0003804993</a> </td>
             <td>Immobiliare Paolon SPA</td>
             <td> <a href ="javascript:;" data-modal-detail='<?= $i ?>'>IT0003804993</a> </td>
             <td> Ipsum sit amet consectetur</td>

             <td>11/11/2011</td>

             <td>10.223,00</td>
             <td>EUR</td>
             <td>10.223,00 EUR</td>

             <td>Immobiliare Paolon SPA</td>

             <td>05032</td>
             <td>01424</td>
             <td>0300808016000</td>
           </tr>
         <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="pt-3 pb-3">
    <!-- PAGINATION -->
    <?php virtual('/youwebbusiness/layout/oggetti/tabelle/paginazione_e_totale/oggetto.php'); ?>
    <!-- END PAGINATION -->
    </div>
  </div>
  <!-- END contenuto desktop -->

  <!-- Contenuto mobile -->
  <div class="d-block d-lg-none">
    <div class="bordered p-0">
      <!-- TABELLA MOBILE -->
      <div class="mobile-data" data-table-mobilized-mobile="exampleTable"></div>
      <!-- END TABELLA MOBILE -->
    </div>
    <div class="p-3">
      <!-- PAGINATION -->
      <?php virtual('/youwebbusiness/layout/oggetti/tabelle/paginazione_e_totale/oggetto.php'); ?>
      <!-- END PAGINATION -->
    </div>
  </div>
  <!-- END contenuto mobile -->
</section>
<!-- END TABERLLA RISULTATI -->

<!-- MODALE HELP DI ESEMPIO -->
<?php virtual('/youwebbusiness/layout/oggetti/modale/modale_dettaglio_con_help/modale.php'); ?>
<!-- END MODALE HELP DI ESEMPIO -->

<!-- MODALE HELP DI ESEMPIO -->
<?php virtual('/youwebbusiness/layout/oggetti/modale/modale_help/modale.php'); ?>
<!-- END MODALE HELP DI ESEMPIO -->
