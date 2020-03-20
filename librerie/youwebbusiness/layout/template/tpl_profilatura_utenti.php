<?php 
  $tabActive = 0;
  virtual('/youwebbusiness/layout/template/tpl_profilatura_utenti/header.php'); 
  virtual('/youwebbusiness/layout/template/tpl_profilatura_utenti/dati.php'); 
?>

<div class="c-gruppi row">

  <?php foreach ( profilatura_utenti_array(true) as $box) { ?>
    <a href="strutt_priv.php?tpl=tpl_profilatura_utenti_modifica.php" 
      class="c-gruppi--box <?= $box['new-group'] ? 'add-new' : '' ?> col-12 col-sm-6 col-lg-4 col-xl-3 mb-3">
      <div class="bordered">
        <?php if( ! $box['blocked-group'] ) { ?>
          <span class="c-delete">
            <img class="icon" src="./fe/img/icon/close-simple.svg">
          </span>
        <?php } ?>
        <h2 class="c-title"><?= $box['title'] ?></h2>
        <p class="c-subtitle"> <?= ( !$box['new-group'] ) ? "Utenti: ".$box['users'] : "&nbsp;" ?> </p>
        <div class="c-icon">
          <img class="icon" src="./fe/img/icon/gruppi/<?= $box['icon'] ?>">
        </div>
        <div class="c-text">
          <?= $box['description'] ?>
        </div>
      </div>
    </a>
  <?php } ?>

</div>
</div>

<script>
$(function(){
  $('.c-gruppi--box').on('click','.c-delete',function(e){
    e.preventDefault();
    $('[data-modal="deleteGroup"]').modal('show');
  });
});
</script>

<!-- Modal -->
<div class="modal fade" data-modal="deleteGroup">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Elimina gruppo</h5>
      <a href="#" data-dismiss="modal" aria-label="Close" >
        <img src="./fe/img/icon/close.svg">
      </a>
    </div>
    <div class="modal-body">
      <p>
        <!-- mettere dinamicamente icona del gruppi da cancellare -->
        <img class="icon float-left text-primary" src="./fe/img/icon/autorizza.svg">
        <!-- mettere dinamicamente nome gruppo da cancellare -->
        <strong>Gruppo custom 3</strong>: 
        <!-- mettere dinamicamente descrizione gruppo da cancellare -->
        Lorem ipsum dolor sit amet.
      </p>
      <p class="h5 text-center text-secondary mt-3 pt-3">
        <strong>Sei sicuro di voler eliminare il gruppo selezionato?</strong>
      </p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
      <button type="button" class="btn btn-primary">Elimina gruppo</button>
    </div>
  </div>
</div>
