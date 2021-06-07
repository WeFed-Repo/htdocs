<!-- TABELLA RISTILIZZATA -->
<style>
    .table-space-row {
        border-collapse: separate!important;
        border-spacing: 0 1em;
    }
    .table-space-row td{
        background-color:#ddd;
    }
    .table-space-row td:first-child{
        border-radius: 5px 0 0 5px;
    }
    .table-space-row td:last-child{
        border-radius: 0px 5px 5px 0;
    }
   
</style>

<div tm-bstable-v2="" class="px-3">
        <table data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table table-space-row" data-table-mobilized-desktop="NewTable">
        <thead>
    <tr>
      <!-- PER STAMPARE UNA CELLA CHE IN MOBILE SI VEDA COME TITOLO, USARE LA CLASSE .data-mobilized-title -->
      <th data-field="titolo" class="center data-mobilized-title">Titolo</th>
      <th data-field="contabile" data-formatter="formatLink" class="center"><span class="d-inline d-md-none">Data </span>Contabile</th>
      <th data-field="valuta" data-sortable="true" class="center"><span class="d-inline d-md-none">Data </span>Valuta</th>
      <th data-field="importo" data-sortable="true" data-formatter="tableCellValue" class="right">Importo</th>
      <th data-field="divisa" data-sortable="true" class="center">Divisa</th>
      <th data-field="causale" data-sortable="true" class="left">Causale</th>
      <!-- PER STAMPARE UNA CELLA CHE IN MOBILE SI VEDA IN FULL WIDTH
           (non titolo a sx e valore a dx ma con 2 righe separate), USARE LA CLASSE .data-mobilized-fullwidth -->
       <th data-field="descrizione" data-sortable="false" class="data-mobilized-fullwidth">Descrizione movimento</th>
       <th data-field="azioni" data-sortable="false">Azioni</th>
    </tr>
 </thead>
 <tbody>
   <?php // esempio ciclo per tabella in desktop ?>
   <?php for ($i = 0; $i <= 3; $i++) { ?>
     <tr data-index="<?= $i ?>">
        <td><a href="#" class="color-warning">Lorem ipsum</a></td>
        <td><a href="#">28/02/2019</a></td>
        <td>28/02/2019</td>
        <td><span class="">3.216,65</span></td>
        <td>EUR</td>
        <td>345</td>
        <td>
          Ipsum sit amet consectetur elit nulla voluptas odit iure sapiente
          praesentium ipsam quae blanditiis neque
        </td>
        <td class="text-center">
          <div class="btn-group dropdown">
            <span type="button"
                  class="cursor-pointer"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false">
              <img src="./fe/img/icon/more.svg">
            </span>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Lorem ipsum dolor sit amet long label</a>
              <span class="dropdown-item disabled" disabled>Disabled</span>
              <a class="dropdown-item" href="#">Another action (<?php echo $i ?>)</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
        </td>
     </tr>
   <?php } ?>
</tbody>

        </table>
        <div class="clearfix"></div>
</div>