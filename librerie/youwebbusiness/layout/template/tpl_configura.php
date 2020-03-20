<?php
$boxes = array(
  array(
    'title'=>'Anagrafiche',
    'description'=>'In questa sezione puoi gestire le anagrafiche (Clienti, Fornitori, Dipendenti) della tua Azienda.',
    'icon'=>'anagrafiche.svg',
  ),
  array(
    'title'=>'Postazione',
    'description'=>'In questa sezione puoi visualizzare le Aziende, i Conti e le Banche collegate alla tua Postazione. <br />In particolare puoi anche personalizzare il nome dei conti per una più facile gestione.',
    'icon'=>'postazione.svg',
  ),
  array(
    'title'=>'Profilatura Utenti',
    'description'=>'In questa sezione trovi tutte le funzioni per diversificare l\'operatività degli utenti della Postazione in base al ruolo ricoperto in Azienda.',
    'icon'=>'profilatura-utenti.svg',
    'link'=>'strutt_priv.php?tpl=tpl_profilatura_utenti.php',
    //'desktop-only'=>true
  ),
  array(
    'title'=>'Documenti on line',
    'description'=>'In questa sezione puoi attivare il servizio di invio in formato elettronico della documentazione bancaria relativa ai rapporti della tua Azienda (estratti conto, contabili, …).',
    'icon'=>'documenti-online.svg',
  ),
  array(
    'title'=>'Info Bonifico',
    'description'=>'In questa sezione puoi configurare il servizio di Info Bonifico per ricevere un SMS e/o una mail quando invii una distinta di Bonifico.',
    'icon'=>'info-bonifico.svg',
  ),
  array(
    'title'=>'Schedulatore',
    'description'=>'In questa sezione puoi configurare il servizio Schedulatore che ti consente di automatizzare le operazioni di esportazione dei dati nel gestionale della tua azienda e quelle di importazione per l’inoltro delle disposizioni con YouBusiness Web.',
    'icon'=>'schedulatore.svg',
  ),
);
?>

<div class="with-stepper">
	<h1>
		Configura
	</h1>
</div>

<div class="configura">
  <div class="row">

    <?php foreach ($boxes as $box) { ?>

    <div class="col-12 col-sm-6 col-lg-4 mb-3">
      <div class="configura--box <?= $box['desktop-only'] ? 'desktop-only' : '' ?>">
        <div class="c-header">
          <h2 class="c-title"> <?= $box['title'] ?> </h2>
          <div class="c-icon">
            <img class="icon" src="./fe/img/icon/gruppi/<?= $box['icon'] ?>">
          </div>
        </div>
        <?php if ($box['desktop-only']) { ?>
          <!-- NOTE: la classe .configura--desktop-only va applicata a .configura--box in 
                     caso la funzionalità sia disponibile solo in versione desktop, 
                     così come il contenuto del div con classe .desktop-only-content -->
          <div class="c-body desktop-only-content">
            Funzionalità disponibile solo in versione Desktop
            <img class="icon" src="./fe/img/icon/autorizza.svg">
          </div>
        <?php } ?>
        <div class="c-body">
          <div class="c-description">
            <?= $box['description'] ?>
          </div>
          <div class="c-cta">
            <a href="<?= $box['link'] ? $box['link'] : '#' ?>">ACCEDI</a>
          </div>
        </div>
      </div>
    </div>

    <?php } ?>

  </div>
</div>