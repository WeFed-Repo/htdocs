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
          <th data-field="stato_2" class="left">Stato</th>
          <th data-field="codice" data-formatter="formatLink" class="left">Codice Utente</th>
          <th data-field="nome" class="left">Nome Utente</th>
          <th data-field="gruppo" class="left">Gruppo</th>
          <th data-field="firmatario" class="left">Firmatario</th>
          <th data-field="iter" class="center">Iter autorizzativo</th>
          <th data-field="mobile" class="left">Mobile</th>
        </tr>
    </thead>
    <tbody>
      <?php // esempio ciclo per tabella in desktop ?>
      <?php $array = array("inscadenza", "scaduta","incassata");?>
      <?php for ($i = 0; $i <= 2; $i++) { ?>
        <tr data-index="<?= $i ?>">
        <td> 
            <!--array per la classe colore dello stato fatturazione -->
            <div class="wrapper-icon-bullet"><span class="color-bfm_status_<?= $array[$i] ?> icon-bullet"></span> <span class="text"><?= $array[$i] ?></span></div>
          </td>
           <!-- colori disponibili: color-warning - giallo / color-success - verde / color-error - rosso -->
          <td><span class="color-warning icon-bullet"></span></td>
          <td><a href="#">UP5AD</a></td>
          <td>Amministratore</td>
          <td>Operatore Master</td>
          <td>Operatore Master</td>
          <td> <img class="icon color-greenLink" src="./fe/img/icon/autorizza.svg"> </td>
          <td> &nbsp; </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>