<?php 
$tabActive = 0;
virtual('/youwebbusiness/layout/template/tpl_profilatura_utenti/header.php'); 
virtual('/youwebbusiness/layout/template/tpl_profilatura_utenti/dati.php'); 
?>

<div class="bordered pt-0 d-block">
  <table data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table table-striped">
    <thead>
        <tr>
          <th data-field="stato" class="left">Stato</th>
          <th data-field="numero" class="left">Numero seriale</th>
          <th data-field="utente" class="left">Utente</th>
          <th data-field="nome" class="left">Nome e Cognome</th>
          <th data-field="fine" class="left">Fine validità</th>
        </tr>
    </thead>
    <tbody>
      <?php // esempio ciclo per tabella in desktop ?>
      <?php for ($i = 0; $i <= 5; $i++) { ?>
        <tr data-index="<?= $i ?>">
          <td> 
            <!-- colori disponibili: color-warning - giallo / color-success - verde / color-error - rosso -->
            <span class="color-warning icon-bullet"></span> 
          </td>
          <td> 12312342354534 </td>
          <td> admin </td>
          <td> Mario Rossi </td>
          <td> 00/00/0000 </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>