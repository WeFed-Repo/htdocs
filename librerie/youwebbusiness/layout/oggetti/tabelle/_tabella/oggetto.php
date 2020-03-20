<!-- NOTE: data-bootstrap-table inizializza lo stile e il sortable della tabella la classe .ellipsed nei radiobutton dei filtri forza la riga singola con i puntini [...] per i numeri negativi, aggiungere la classe "negativo" al tag che contiene il numero da formattare
es: <span class="negativo">-12345</span>
-->

<section class="no-margin-section">
  <div class="bordered pt-0 d-none d-lg-block">
    <table data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table table-striped" data-table-mobilized-desktop="dossierTable">
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
          </tr>
       </thead>
       <tbody>
         <?php // esempio ciclo per tabella in desktop ?>
         <?php for ($i = 0; $i <= 3; $i++) { ?>
           <tr data-index="<?= $i ?>">
             <td>Lorem ipsum</td>
             <td><a href="#">28/02/2019</a></td>
              <td>28/02/2019</td>
              <td><span class="">3.216,65</span></td>
              <td>EUR</td>
              <td>345</td>
              <td> Ipsum sit amet consectetur elit nulla voluptas odit iure sapiente praesentium ipsam quae blanditiis neque </td>
           </tr>
         <?php } ?>
      </tbody>
    </table>
  </div>
  <!-- Fine contenuto desktop -->

  <!-- Contenuto mobile -->
  <div class="bordered p-0 d-block d-lg-none">
    <div class="mobile-data" data-table-mobilized-mobile="dossierTable"></div>
  </div>
  <!-- Fine contenuto mobile -->
</section>
