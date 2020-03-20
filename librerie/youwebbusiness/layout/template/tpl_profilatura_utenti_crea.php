<?php 
$tabActive = 0;
virtual('/youwebbusiness/layout/template/tpl_profilatura_utenti/header.php'); 
virtual('/youwebbusiness/layout/template/tpl_profilatura_utenti/dati.php'); 
?>

<div class="bordered">

  <form class="form-grid needs-validation" novalidate="">
    <div class="form-row align-items-end"><!-- align-items-end allinea tutti i campi in basso -->
      <div class="form-group col-12 col-sm-12 col-md-4">
        <label>Codice utente *</label>
        <input type="text" class="form-control" required>
      </div>
      <div class="form-group col-12 col-sm-6 col-md-4">
        <label>Password *</label>
        <input type="password" class="form-control" required>
      </div>
      <div class="form-group col-12 col-sm-6 col-md-4">
        <label>Conferma password *</label>
        <input type="password" class="form-control" required>
      </div>
    </div>
    <div class="form-row align-items-end">
      <div class="form-group col-12 col-sm-6 col-md-4">
        <label>Gruppo *</label>
        <select class="form-control">
          <option value="" disabled selected></option>
          <?php foreach ( profilatura_utenti_array() as $i=>$item) { ?>
            <option value="<?= $i ?>"><?= $item['title'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group col-12 col-sm-6 col-md-4">
        <label>Utente *</label>
        <input type="text" class="form-control" required>
      </div>
      <div class="form-group col-4 pb-2">
        <div class="form-check checkbox">
          <input class="form-check-input" type="checkbox" id="check1" name="inlineRadioOptions" value="">
          <label class="form-check-label" for="check1">Iter autorizzativo</label>
        </div>
      </div>
    </div>
    <div class="form-row align-items-end">
      <div class="form-group col-4 pb-2">
        <div class="form-check  checkbox">
          <input class="form-check-input" type="checkbox" id="check2" name="inlineRadioOptions" value="">
          <label class="form-check-label" for="check2">Clona profilatura</label>
        </div>
      </div>
      <div class="form-group col-4">
        <!-- TODO: nascondere il campo "Clona da" se "Clona profiilatura" è deselezionato -->
        <label>Clona da:</label>
        <select class="form-control">
          <option value="" selected></option>
        </select>
      </div>
    </div>
  </form>

</div>

<?php 
pulsantiera_obj(array(
  'right' => array(
    array(
      'class'=>'secondary',
      'label'=>'Elimina',
      'link'=>'tpl_profilatura_utenti'
    ),
    array(
      'class'=>'primary',
      'label'=>'Conferma',
      'link'=>'tpl_profilatura_utenti',
    )
  ),
));
?>