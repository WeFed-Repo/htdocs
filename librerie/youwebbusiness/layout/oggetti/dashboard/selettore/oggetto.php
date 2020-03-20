<h1>
  Saldo e Movimenti
</h1>

<!-- SELETTORE RAPPORTO DI ESEMPIO -->
<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_rapporti/oggetto.php'); ?>
<!-- ./ SELETTORE RAPPORTO DI ESEMPIO -->

  <script>
  const tbdata = [
    {
      'valuta': '12/02/2019',
      'operazione': '12/02/2019',
      'causale': 'Lorem ipsum dolor sit amet',
      'importo': '1000,00',
      'divisa': 'EUR',
      'descrizione': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
      'link':'#'
    }, {
      'valuta': '13/02/2019',
      'operazione': '13/02/2019',
      'causale': 'consectetur adipisicing elit, sed do eiusmod tempor incididunt',
      'importo': '100,00',
      'divisa': 'EUR',
      'descrizione': 'Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet.',
      'link':'#'
    }, {
      'valuta': '14/02/2019',
      'operazione': '14/02/2019',
      'causale': 'sed do eiusmod tempor incididunt consectetur adipisicing elit',
      'importo': '-300,00',
      'divisa': 'EUR',
      'descrizione': 'Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet.',
      'link':'#'
    }
  ];
  $(function(){
    //console.error(' TODO: far funzionare la versione mobile. attualmente non inizializza la tabella coi dati del desktpo. forse problema con evento. ')
    $('#tableMovimenti').bootstrapTableDefault(tbdata)
  });
  </script>

  <section class="no-margin-section">
    <!-- Contenuto desktop -->
    <div class="bordered pt-0 d-none d-lg-block">
      <table id="tableMovimenti"
             data-bootstrap-table
             cellspacing="0"
             cellpadding="0"
             border="0"
             class="table table-striped"
             data-table-mobilized-desktop="tableMovimenti"
             >
         <thead>
            <tr>
              <!-- PER STAMPARE UNA CELLA CHE IN MOBILE SI VEDA COME TITOLO, USARE LA CLASSE .data-mobilized-title -->
              <th data-field="valuta" data-sortable="true" class="center">Valuta</th>
              <th data-field="operazione" data-sortable="true" class="center">Operazione</th>
              <th data-field="causale" data-sortable="true" class="left" data-formatter="formatLink">Causale</th>
              <th data-field="importo" data-sortable="true" data-formatter="tableCellValue" class="right">Importo</th>
              <th data-field="divisa" data-sortable="true" class="center">Divisa</th>
              <!-- PER STAMPARE UNA CELLA CHE IN MOBILE SI VEDA IN FULL WIDTH
                   (non titolo a sx e valore a dx ma con 2 righe separate), USARE LA CLASSE .data-mobilized-fullwidth -->
              <th data-field="descrizione" data-sortable="false" class="data-mobilized-fullwidth">Descrizione</th>
            </tr>
         </thead>
         <tbody></tbody>
      </table>
    </div>
    <!-- Fine contenuto desktop -->
    <!-- Contenuto mobile -->
    <div class="bordered p-0 d-block d-lg-none">
      <div class="mobile-data" data-table-mobilized-mobile="tableMovimenti"></div>
    </div>
    <!-- Fine contenuto mobile -->
  </section>

  <hr />
