<?php //virtual('/youwebbusiness/layout/oggetti/dashboard/selettore/oggetto.php'); ?>

<div class="dashboard">
<div class="row d-flex">
  <div class="col-12 col-lg-8 mt-3 d-flex ">
    <h4 class="title ellipsed">Promozioni</h4>
    <?php virtual('/youwebbusiness/layout/oggetti/dashboard/banner/oggetto.php'); ?>
  </div>
  <div class="col-12 col-sm-6 col-lg-4 d-flex mt-3 ">
    <h4 class="title ellipsed">Saldo e Movimenti</h4>
    <?php virtual('/youwebbusiness/layout/oggetti/dashboard/saldo_e_movimenti/oggetto.php'); ?>
  </div>
  <div class="col-12 col-sm-6 col-lg-4 d-flex mt-3">
    <h4 class="title ellipsed">Riepilogo distinte</h4>
    <?php virtual('/youwebbusiness/layout/oggetti/dashboard/riepologo/oggetto.php'); ?>
  </div>
  <div class="col-12 col-sm-6 col-lg-4 d-flex mt-3">
    <h4 class="title ellipsed">Calendario</h4>
    <?php virtual('/youwebbusiness/layout/oggetti/dashboard/calendario/oggetto.php'); ?>
  </div>
  <div class="col-12 col-sm-6 col-lg-4 d-flex mt-3">
    <h4 class="title ellipsed">Notifiche</h4>
    <?php virtual('/youwebbusiness/layout/oggetti/dashboard/notifiche/oggetto.php'); ?>
  </div>
  <?php /*<div class="col-12 XXX-col-sm-6 XXX-col-lg-4 d-flex mt-3 ">
    <h4 class="title ellipsed">Nuovo elemento</h4>
    <?php virtual('/youwebbusiness/layout/oggetti/dashboard/new/oggetto.php'); ?>
  </div>*/ ?>


    <div class="col-6 col-md-4 mt-3 mx-auto text-center d-block"><!-- d-block risolve l'allineamento dell'icona del bottone -->
      <a href="strutt_priv.php?tpl=tpl_home_configurator.php" class="dhb-link m-auto btn btn-link">
        <img class="icon icon-autorizza float-left" src="./fe/img/icon/icon-5.svg">
        <span class="pl-1">Configura homepage</span>
      </a>
    </div>



</div>
</div>
