<?php 
$tabActive = 0;
virtual('/youwebbusiness/layout/template/tpl_profilatura_utenti/header.php'); 
virtual('/youwebbusiness/layout/template/tpl_profilatura_utenti/dati.php'); 

$voci = array(
    array(
      'name'=>'Conti',
      'children'=>array(
        array('name'=>'Saldo e movimenti C/C','active'=>'true'),
        array('name'=>'Stampa mov. periodici'),
        array('name'=>'Riepilogo saldi'),
        array('name'=>'Portafoglio',
              'children'=>array(
                array('name'=>'Documenti e fatture','active'=>'true'),
                array('name'=>'Saldi','active'=>'true'),
                array('name'=>'Portafoglio sottovoce 1'),
              ),
            ),
        array('name'=>'Conti anticipi'),
        array('name'=>'Dossier titoli'),
        array('name'=>'Domiciliazioni','active'=>'true'),
        array('name'=>'Situazione assegni'),
      ),
    ),
    array(
      'name'=>'Pagamenti',
      'children'=>array(
        array('name'=>'Pagamenti sottovoce 1'),
        array('name'=>'Pagamenti sottovoce 2','active'=>'true'),
      ),
    ),
    array(
      'name'=>'Incassi',
      'children'=>array(
        array('name'=>'Incassi sottovoce 1'),
        array('name'=>'Incassi sottovoce 2'),
      ),
    ),
    array(
      'name'=>'Carte Business',
      'children'=>array(
        array('name'=>'Carte Business sottovoce 1'),
        array('name'=>'Carte Business sottovoce 2'),
      ),
    ),
    array(
      'name'=>'Documenti e Fatture',
      'children'=>array(
        array('name'=>'Documenti e Fatture sottovoce 1'),
        array('name'=>'Documenti e Fatture sottovoce 2','active'=>'true'),
      ),
    ),
    array(
      'name'=>'Dati e disposizioni',
      'children'=>array(
        array('name'=>'Dati e disposizioni sottovoce 1'),
        array('name'=>'Dati e disposizioni sottovoce 2'),
      ),
    ),
    array(
      'name'=>'Configura',
      'children'=>array(
        array('name'=>'Configura sottovoce 1'),
        array('name'=>'Configura sottovoce 2'),
      ),
    ),
    array(
      'name'=>'Estero',
      'children'=>array(
        array('name'=>'Estero sottovoce 1','active'=>'true'),
        array('name'=>'Estero sottovoce 2','active'=>'true'),
      ),
    ),
    array(
      'name'=>'Finanziamenti',
      'children'=>array(
        array('name'=>'Finanziamenti sottovoce 1'),
        array('name'=>'Finanziamenti sottovoce 2',),
      ),
    ),
    array(
      'name'=>'Profilo',
      'children'=>array(
        array('name'=>'Profilo sottovoce 1'),
        array('name'=>'Profilo sottovoce 2','active'=>'true'),
      ),
    ),


    array(
        'name'=>'Profilo',
        'children'=>array(
          array('name'=>'Profilo sottovoce 1'),
          array('name'=>'Profilo sottovoce 2','active'=>'true'),
        ),
      ),


  );
?>

<div class="bordered p-3 mb-3">
    <h2>
        <img class="icon" src="./fe/img/icon/email_open.svg">
        Nome azienda S.p.A.
    </h2>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-12">
                    <label class="output-label">
                        Descrizione del gruppo
                    </label>
                </div>
                <div class="col">
                    In questo gruppo si fanno bonifici ordinari
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-12">
                    <label class="output-label">
                        Utenti del gruppo
                    </label>
                </div>
                <div class="col">
                    3
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-end mt-3">
  <div class="col-12 col-md-6">
    <div class="form-row mx-0 d-flex justify-content-start">
      <a href="#" class="btn btn-link float-left mr-3 pl-0"  data-collapser="autorizzazioniAccordion" data-collapser-dir="show">Espandi tutto &nbsp; +</a>
      <a href="#" class="btn btn-link float-left mr-3"  data-collapser="autorizzazioniAccordion" data-collapser-dir="hide">Riduci tutto &nbsp; -</a>
    </div>
  </div>
  <div class="col-12 col-md-6">
    <div class="form-row mx-0 d-flex justify-content-end">
      <a href="#" class="btn btn-secondary float-right btn-w-md ml-3">Crea nuovo gruppo</a>
      <a href="#" class="btn btn-primary float-right btn-w-md ml-3">Salva</a>
    </div>
  </div>
</div>

<div class="c-autorizzazioni">
    <div class="c-autorizzazioni--row accordion bordered-style" id="autorizzazioniAccordion">
        <?php 
        $totale = count($voci);
        $colonne = 3;
        $per_colonna = (intdiv( $totale , $colonne))+1;
        $totale_con_scarto = ($per_colonna * $colonne);
        $newVoci = array();
        $i = 0;
        foreach ($voci as $k=>$voce) {
            $k = $k+1;
            $cambiariga = $k % $per_colonna;
            $newVoci[$i][] = $voce;
            if( $cambiariga == 0 ) $i++;
        }
        foreach ($newVoci as $voci) {  ?>
        <div class="c-autorizzazioni--col">
            <?php foreach ($voci as $voce) {
              $all = treeview_countKeys( $voce['children'], 'name' ); 
              $nodes = treeview_countKeys( $voce['children'], 'children' ); 
              $actives = treeview_countKeys( $voce['children'], 'active' ); 
              $total = $all - $nodes;
              $statusClass = $actives==0 ? 'is--empty' : ($actives===$total ? 'is--full' : 'is--partial');
              ?>
              <div class="card-wrapper treeview--wrapper">
                  <div class="card collapser treeview--item <?= $statusClass ?>">
                      <div class="card-header collapsed hide" data-toggle="collapse">
                          <h5 class="card-header-title mb-0"> 
                          <?= $voce['name'] ?> 
                          </h5>
                          <small class="count">
                            (<span class="actives"><?= $actives ?></span> /
                            <span class="total"><?= $total ?></span>)
                          </small>
                          <span class="card-header-icon plus-minus float-right"></span>
                      </div>
                      <div class="card-body collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            <?= treeview_obj(array($voce),true,false); ?>
                          </div>
                      </div>
                  </div>
              </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</div>