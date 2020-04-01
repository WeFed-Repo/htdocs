<?php

function template_link($name) {
    return $name ? 'strutt_priv.php?tpl='.$name.'.php' : '#';
}

function btns_loop($btns,$single=false) {
    foreach( $btns as $btn ) {
        $singleClass = $single ? 'col-12 col-md-6' : 'col-6' ;
    ?>
    <div class="form-group <?= $singleClass ?> col-lg-4">
        <a href="<?= template_link($btn['link']) ?>"
            <?php if ($btn['disabled']) echo 'disabled="disabled"' ?>
            class="btn btn-<?php
                echo $btn['class'] ? $btn['class'] : ' primary ';
                if ($btn['disabled']) echo ' disabled ';
                echo $btn['inline'] ? '' : ' btn-block ';
                ?>">
            <?= $btn['label'] ? $btn['label'] : 'Bottone' ?>
        </a>
    </div>
<?php }
}

function pulsantiera_obj($btns,$single=false) {
    $leftOnly = ( $btns['left'] && !$btns['right'] );
    $oneLeft = (!$btns['right'] && count($btns['left'])==1);
    $oneRight = (!$btns['left'] && count($btns['right'])==1);
    $single = $oneLeft || $oneLeft;
    $orientation = $leftOnly ? 'start' : 'end';
    ?>
    <!-- pulsantiera -->
    <div class="row justify-content-<?= $orientation ?> mt-3">
        <?php if( $btns['left'] ) { ?>
        <div class="col-sm-6">
            <div class="form-row d-flex justify-content-start">
                <?php btns_loop($btns['left'],$single); ?>
            </div>
        </div>
        <?php } ?>
        <?php if( $btns['right'] ) { ?>
        <div class="col-sm-6">
            <div class="form-row d-flex justify-content-end">
                <?php btns_loop($btns['right'],$single); ?>
            </div>
        </div>
        <?php } ?>
    </div>
<?php }

function tabs_obj($tabs,$navClass='') { ?>
    <div class="nav-tabs-container clickScroll-container">
    <div class="clickScroll-overflow">
        <ul id="tabs" class="nav nav-tabs clickScroll <?= $navClass ?>" tm-tabs-navigator>
        <?php
            if( count( $tabs ) > 0 ) {
                foreach ($tabs as $i=>$tab) {
                    $isActive = $tab['active'] || ( !$tab['active'] && $tab['link'] && $_GET['tpl']==$tab['link'].'.php');
                    ?>
                    <li class="nav-item">
                        <a class="nav-link <?php
                            if($isActive) { echo ' active '; }
                            if ($tab['disabled']) echo ' disabled ';
                        ?>"
                        <?php if ($tab['disabled']) echo 'disabled' ?>
                        href="<?= template_link($tab['link']) ?>">
                            <?= is_array($tab) ? $tab['label'] : $tab ?>
                        </a>
                    </li>
                <?php
                }
            } else {
            echo "[AGGIUNGERE TABS]";
            } ?>
        </ul>
        <a class="clickScroll-arrow left">
        <i class="icon-arrow_left"></i>
        </a>
        <a class="clickScroll-arrow right">
        <i class="icon-arrow_right"></i>
        </a>
    </div>
    </div>
<?php }

function tabs_obj_filter($tabs,$navClass='') { ?>
    <div class="nav-tabs-container clickScroll-container">
    <div class="clickScroll-overflow">
        <ul id="tabs" class="nav nav-tabs nav-tabs--filters clickScroll <?= $navClass ?>" tm-tabs-navigator>
        <?php
            if( count( $tabs ) > 0 ) {
                foreach ($tabs as $i=>$tab) {
                    $isActive = $tab['active'];
                    $isAll = $tab['all'];
                    ?>
                    <li class="nav-item">
                        <label for="<?= is_array($tab) ? $tab['label'] : $tab ?>"
                            class="nav-link <?php
                                    if( $isActive ) { echo ' active '; }
                                    if( $isAll ) { echo ' all '; } ?>">
                                <?= is_array($tab) ? $tab['label'] : $tab ?>
                                <input type="checkbox"
                                       id="<?= is_array($tab) ? $tab['label'] : $tab ?>"
                                       <?php if($isActive) echo 'checked'; ?> />
                        </label>
                    </li>
                <?php
                }
            } else {
            echo "[AGGIUNGERE TABS]";
            } ?>
        </ul>
        <a class="clickScroll-arrow left">
        <i class="icon-arrow_left"></i>
        </a>
        <a class="clickScroll-arrow right">
        <i class="icon-arrow_right"></i>
        </a>
    </div>
    </div>
<?php }

function treeview_obj($voci,$firstLevelChangeLabel=false,$parentActive=false) {
    $singleAnchestor = count( $voci )==1; // conto se ho un solo padre in root
    echo '<div class="c-treeview">';
    treeview_loop($voci,$firstLevelChangeLabel,$parentActive,$singleAnchestor);
    echo '</div>';
}

// var globale per avere id univoci
$treeviewId = 0;
function treeview_loop($voci,
                       $firstLevelChangeLabel=false,
                       $parentActive=false,
                       $singleAnchestor=false) {
    global $treeviewId;
    echo '<ul>';
    foreach($voci as $voce) {
        $checked = ( $parentActive || $voce['active'] ? 'checked' : '');
        $label =  $firstLevelChangeLabel ? 'Seleziona tutto' : $voce['name'] ;
        $idName = preg_replace('/[^A-Za-z0-9\-]/', '', strtolower($voce['name']));
        $id =  'voce_'.$treeviewId.'_'.$idName;
        $activeChild = 0;
        $hasChildren = is_array($voce['children']) && count($voce['children']) > 0;
        if( $voce['children'] && is_array( $voce['children'] ) ) {
            foreach ($voce['children'] as $k=>$v) if( $v['active'] ) {
                $activeChild++;
            }
        }
        echo '<li>'; ?>
            <div class="form-check checkbox form-check-inline">
                <input class="form-check-input<?php
                            if($activeChild) echo ' partial';
                            if($hasChildren) echo ' node';
                        ?>"
                        type="checkbox"
                        id="<?= $id ?>"
                        name="<?= $id ?>"
                        value=""
                        <?= $checked ?>>
                <label class="form-check-label"
                       for="<?= $id ?>">
                    <?= $label ?>
                </label>
            </div>
            <?php
        if( $hasChildren ) {
            treeview_loop( $voce['children'], false, $voce['active'], false );
        }
        echo '</li>';
        $treeviewId++;
    }
    echo '</ul>';
}

function treeview_countKeys( $array, $needle ){
    $count=0;
    foreach ($array as $key => $value) {
        foreach ($value as $k => $v) {
            if( $v && $k == $needle ) $count ++;
            if( is_array($v) ) $count += treeview_countKeys( $v, $needle );
        }
    }
    return $count;
}

function modal_demo( $id='default',
                     $title="Modal title",
                     $text='Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                     $dimension='modal-lg' ) { ?>
  <div class="modal fade" data-modal="<?= $id ?>">
    <div class="modal-dialog modal-dialog-centered <?= $dimension ?>" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><?= $title ?></h5>
          <a href="#" data-dismiss="modal" aria-label="Close" >
            <img src="./fe/img/icon/close.svg">
          </a>
        </div>
        <div class="modal-body"><?= $text ?></div>
        <div class="modal-footer">
          <?php if($btn) { ?>
            <button type="button" class="btn btn-primary"><?= $btn ?></button>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<?php }
