<!-- TABELLA RISTILIZZATA  classi aggiuntive:
table-space-row => crea spazio tra le righe
table-header-light => stile chiaro dell'header
table-font-small => font-size 12px
-->

<div tm-bstable-v2="" class="px-3">
        <table data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table table-space-row table-header-light table-font-small" data-table-mobilized-desktop="NewTable">
    <thead>
    <tr>
      <!-- PER STAMPARE UNA CELLA CHE IN MOBILE SI VEDA COME TITOLO, USARE LA CLASSE .data-mobilized-title -->
      <th data-field="Categoria">Categoria</th>
      <th data-field="contabile" data-sortable="true">Rapporto</th>
      <th data-field="valuta" data-sortable="true">Descrizione</th>
      <th data-field="importo" data-sortable="true">Data prevista</th>
      <th data-field="divisa" data-sortable="true">Periodicità</th>
      <th data-field="causale" data-sortable="true">Importo</th>
     <th  data-field="azioni" data-sortable="false"></th>
    </tr>
 </thead>
 <tbody>
   <?php // esempio ciclo per tabella in desktop ?>
   <?php for ($i = 0; $i <= 3; $i++) { ?>
     <tr data-index="<?= $i ?>">
        <td>
            <span class="text-with-squared">
              <span class="squared ico-wrapper bkg-bfm_bollette "><i class="icon icon-category_bollette"></i></span>
              <a href="#" class="text color-greenLink">Bollette</a>
            </span>
        </td>
        <td>lorem ipsum</td>
        <!--SCON QUESTA CLASSE VIENE SETTATO UN MAX_WIDTH PER GARANTIRE L'ELLIPSED-->
        <td class="ellipsed">
            Lorem ipsum dolor sit amet long label Lorem ipsum dolor sit amet long label Lorem ipsum dolor sit amet long label Lorem ipsum dolor sit amet long label</div>
        </td>
        <td>01/02/2021</td>
        <td>EUR</td>
        <td>345</td>
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
<div class="row justify-content-end mr-1">
  <a href="#">Vedi tutte</a>
</div>