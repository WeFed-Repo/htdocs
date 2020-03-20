<?php 
$tabActive = 0;
virtual('/youwebbusiness/layout/template/tpl_profilatura_utenti/header.php'); 
virtual('/youwebbusiness/layout/template/tpl_profilatura_utenti/dati.php'); 
?>

<div class="bordered">
  <h4 class="mb-3">Inserisci i dati del gruppo</h4>
  <div class="form-row">
    <div class="form-group col-12 col-md-6">
      <label>Nome</label>
      <input type="text" class="form-control" placeholder="Inserisci il nome">
    </div>
    <div class="form-group col">
      <label>Descrizione</label>
      <input type="text" class="form-control" placeholder="Inserisci la descrizione">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-12 col-md-6">
      <h4 class="mb-3">Seleziona l'icona del gruppo</h4>
      <div class="d-flex">
        <div>
          <label id="selectedIcon" class="c-icon-preview active">
            <input type="radio" value="email_close" />
            <img class="icon m-auto float-none" src="./fe/img/icon/email_open.svg">
          </label>
        </div>
        <div class="flex-grow-1">
          <button class="btn btn-white btn-block m-0" data-modal-default="">Cambia icona del gruppo</button>
        </div>
      </div>
    </div>
    <div class="form-group col">
      <h4 class="mb-3">Abilitazioni</h4>
      <div class="row">
        <div class="col-12 col-xl-5">
          <div class="form-check radio mt-1">
            <input class="form-check-input" type="radio" id="abilitazioni_new" name="abilitazioni" value="new">
            <label class="form-check-label" for="abilitazioni_new">Nuovo set di abilitazioni</label>
          </div>
        </div>
        <div class="col">
          <div class="row">
            <div class="col-12 col-md-4 col-xl-5">
              <div class="form-check radio mt-1">
                <input class="form-check-input" type="radio" id="abilitazioni_copy" name="abilitazioni" value="copy">
                <label class="form-check-label" for="abilitazioni_copy">Copia da:</label>
              </div>
            </div>
            <div class="col">
              <select class="form-control">
                <option value="" disabled selected></option>
                <?php foreach ( profilatura_utenti_array() as $i=>$item) { ?>
                  <option value="<?= $i ?>"><?= $item['title'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
pulsantiera_obj(array(
  'right' => array(
    array(
      'class'=>'secondary',
      'label'=>'Annulla',
      'link'=>'tpl_profilatura_utenti'
    ),
    array(
      'class'=>'primary',
      'label'=>'Conferma',
      'link'=>'tpl_profilatura_utenti_abilitazioni',
      'disabled'=>( $gestione_gruppi_form_btn_disabled )
    )
  ),
));
?>

<!-- MODAL CHOOSE ICON -->
<div class="modal fade" data-modal="default" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Seleziona l'icona del gruppo</h5>
        <a href="#" data-dismiss="modal" aria-label="Close" >
          <img src="./fe/img/icon/close.svg">
        </a>
        </div>
      <div class="modal-body">
        
        <div id="chooseIconPreview" class="d-flex flex-wrap">

          <?php 
          $icons = array( 
            'email_open',
            'autorizza',
            'autorizza',
            'autorizza',
            'autorizza',
            'autorizza',
            'autorizza',
            'autorizza',
            'autorizza'
          );
          foreach ($icons as $i=>$icon) { ?> 
            <label class="c-icon-preview <?= $i==0 ? 'active': '' ?>" for="<?= $icon ?>">
              <input type="radio" id="<?= $icon ?>" value="<?= $icon ?>" />
              <img class="icon m-auto float-none" src="./fe/img/icon/<?= $icon ?>.svg">
            </label>
          <?php } ?>
        </div>
    
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-primary btn-w-md" data-dismiss="modal">Seleziona</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(function(){
    var selectedIcon = $('#selectedIcon');
    var container = $('#chooseIconPreview');
    var icons = container.find('.c-icon-preview:not(.active)');
    icons.on('click',function(){
      var value = $(this).find('input').val();
      container.find('.c-icon-preview.active').removeClass('active');
      $(this).addClass('active');
      selectedIcon.find('input').val( value );
      selectedIcon.find('img, svg').remove();
      selectedIcon.append('<img class="icon m-auto float-none" src="./fe/img/icon/'+value+'.svg">');
      imgToSvg( selectedIcon.find('img') );
    });
  });
</script>
