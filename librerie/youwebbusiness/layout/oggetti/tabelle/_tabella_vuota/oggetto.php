<!-- NOTE: data-bootstrap-table inizializza lo stile e il sortable della tabella la classe .ellipsed nei radiobutton dei filtri forza la riga singola con i puntini [...] per i numeri negativi, aggiungere la classe "negativo" al tag che contiene il numero da formattare
es: <span class="negativo">-12345</span>
-->

<section class="no-margin-section">
  <div class="bordered pt-0 d-none d-lg-block">
    <table data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table table-striped">
      <thead>
        <!-- ESEMPIO HEADER -->
         <tr>
           <th data-field="titolo" class="center data-mobilized-title">Titolo</th>
           <th data-field="contabile" data-formatter="formatLink" class="center"><span class="d-inline d-md-none">Data </span>Contabile</th>
           <th data-field="valuta" data-sortable="true" class="center"><span class="d-inline d-md-none">Data </span>Valuta</th>
           <th data-field="importo" data-sortable="true" data-formatter="tableCellValue" class="right">Importo</th>
           <th data-field="divisa" data-sortable="true" class="center">Divisa</th>
           <th data-field="causale" data-sortable="true" class="left">Causale</th>
            <th data-field="descrizione" data-sortable="false" class="data-mobilized-fullwidth">Descrizione movimento</th>
            <th data-field="azioni" data-sortable="false">Azioni</th>
         </tr>
      </thead>

      <!-- SE NELLA TABELLA NON VIENE STAMPATA ALCUNA RIGA, VIENE VISUALIZZATO IL MESSAGGIO DI DEFAULT "Nessun elemento trovato" -->

    </table>
  </div>

</section>
