<!-- NOTE: data-bootstrap-table inizializza lo stile e il sortable della tabella la classe .ellipsed nei radiobutton dei filtri forza la riga singola con i puntini [...] per i numeri negativi, aggiungere la classe "negativo" al tag che contiene il numero da formattare
es: <span class="negativo">-12345</span>
-->

<section class="no-margin-section">
  <div class="bordered pt-0 d-none d-lg-block">
    <table data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-striped-double" data-table-mobilized-desktop="doubleTable">
      <?php virtual('/youwebbusiness/layout/oggetti/tabelle/_tabella_zebratura_doppia/tabella.php');?>
    </table>
  </div>
  <!-- Fine contenuto desktop -->

  <!-- Contenuto mobile -->
  <div class="bordered p-0 d-block d-lg-none">
    <div class="mobile-data" data-table-mobilized-mobile="doubleTable"></div>
  </div>
  <!-- Fine contenuto mobile -->
</section>
