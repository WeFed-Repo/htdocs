<?php
// crea le option di una select partendo da un array
function auto_input_select( $array ) {
  foreach ($array as $name => $opt): ?>
    <?php if( is_array( $opt ) ) { ?>
    <optgroup label="<?= $name ?>">
      <?php foreach ($opt as $o): ?>
        <option value="<?= strtolower(str_replace(' ', '_', $o)) ?>"><?= $o ?></option>
      <?php endforeach; ?>
    </optgroup>
  <?php } else { ?>
      <option value="<?= $name ? $name : strtolower(str_replace(' ', '_', $opt)) ?>">
        <?= $opt ?>
      </option>
    <?php } ?>
  <?php endforeach;
}

$strumenti = array(
  'Tutti gli strumenti',
  'Azioni',
  'Obbligazioni',
  'Derivati',
  'CW and Certificates',
  'ETF',
  'Marginazione',
  'Fondi',
);

$tipo_op_1 = array(1,2,3);
?>

<h2>Portafoglio simulato</h2>

<div id="collapse1b" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1b" style="height: auto;">

  <div class="row">
    <div class="col-xs-12 col-md-6 form-field-input">
      <label class="control-label">I tuoi portafogli</label>
      <div class="form-group">
        <div class="spsel spsel-hasactions nosel" id="spselPortafogli"  placeholder="Seleziona...">
          <input type="hidden" name="spselCTAinput2">
          <div class="spsel-options">
            <?php for($i=0;$i<=3;$i++) { ?>
            <div class="spsel-option" data-value="<?php print($i);?>">
              <a class="spsel-option-el">Portafoglio <?php print($i);?></a>
              <a class="spsel-addel btn-icon" data-el="icona_modifica_<?php print($i);?>">
                <i class="icon icon-r-modifica"></i>
              </a>
              <a class="spsel-addel btn-icon" data-el="icona_elimina_<?php print($i);?>">
                <i class="icon icon-r-elimina"></i>
              </a>
            </div>
            <?php } ?>
          </div>
        </div>
        <script type="text/javascript">
          $(function(){
            $("#spselPortafogli").spSel();
            $("#spselPortafogli .spsel-addel.btn-icon").click(function(e){
              e.stopPropagation();
              alert("Elemento selezionato: " + $(this).attr("data-el"));
            })
          });
        </script>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 no-label">
      <div class="btn-align-left">
        <a type="button" href="#!" class="btn btn-primary btn-aggiungi" title="Aggiungi">
          <i class="icon icon-add"></i>
          <span class="icon-text">Crea nuovo</span>
        </a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <div class="form-group">
        <label class="control-label">Strumenti finanziari</label>
        <select class="form-control" id="selectStatoOrdine">
          <?php auto_input_select( $strumenti ) ?>
        </select>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 form-field-input">
      <label class="control-label">Colonne visibili</label>
      <div class="form-group">
        <div class="spsel spsel-hasactions nosel" id="spselColonne"  placeholder="Seleziona...">
          <input type="hidden" name="spselCTAinput2">
          <div class="spsel-options">
            <div class="spsel-option" data-value="<?php print($i);?>">
              <a class="spsel-option-el">Predefinite</a>
            </div>
            <?php for($i=0;$i<=2;$i++) { ?>
            <div class="spsel-option" data-value="<?php print($i);?>">
              <a class="spsel-option-el">Vista <?php print($i);?></a>
              <a class="spsel-addel btn-icon" data-el="icona_modifica_<?php print($i);?>">
                <i class="icon icon-r-modifica"></i>
              </a>
              <a class="spsel-addel btn-icon" data-el="icona_elimina_<?php print($i);?>">
                <i class="icon icon-r-elimina"></i>
              </a>
            </div>
            <?php } ?>
            <div class="spsel-option" data-value="<?php print($i);?>">
              <a class="spsel-option-el">CREA NUOVA VISTA</a>
              <a class="spsel-addel btn-icon" data-el="icona_add_<?php print($i);?>">
                <i class="icon icon-r-user_add"></i>
              </a>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          $(function(){
            $("#spselColonne").spSel();
            $("#spselColonne .spsel-addel.btn-icon").click(function(e){
              e.stopPropagation();
              alert("Elemento selezionato: " + $(this).attr("data-el"));
            })
          });
        </script>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <a href="#" class="text-link">
        Simula compravendita
        <i class="icon icon_piumeno"></i>
        <i class="icon icon_cambi"></i>
      </a>
    </div>
    <div class="col-xs-12 col-md-6">
      <p class="note flRight noFloatMobile">
          <span class="flLeft">Ultimo Aggiornamento: <?= date('d/m/Y') ?> ore <?= date('h:i:s') ?></span>
          <a href="#" class="no-underline btn-icon flLeft padding-l-m" id="refreshBtn">
            <i class="icon icon-2x icon-update"></i>
          </a>
      </p>
    </div>

  </div>


  <!-- TABELLA -->

  <table cellspacing="0" cellpadding="0" border="0"  id="tableOrdiniMovimenti" class="sortableTable has-fixed-cols" data-fixed-cols="2">
      <thead>
          <tr>
              <th class="center"><a class="btn-icon" data-toggle="modal" data-target="#layerLegenda"><i class="icon icon-2x icon-info_fill"></i></a></th>
              <th class="left filter" data-sortable="true" id="filterTitolo">Titolo / ISIN</th>
              <th class="left">Tipo operazione</th>
              <th class="right">Q.t&agrave; immessa/ eseguita</th>
              <th class="right">Prezzo immesso/ eseguito</th>
              <th class="right">Data/ Ora</th>
              <th class="left">Stato ordine</th>
              <th class="left">Mercato</th>
              <th class="right">N. ordine sintetico</th>
          </tr>
      </thead>
      <tbody>
      <?php for($x=0;$x<=5;$x++) { ?>
        <tr>
            <td class="center">
              <a class="btn-icon btn-icon-operativa" data-isin="<?php print (999990 + $x )?>">
                <i class="icon icon-2x icon-ico_azioni02A"></i>
              </a>
            </td>
            <td class="left"><a href="">Lorem ipsum <?php print (999990 + $x ) ?></a></td>
            <td class="right"><?=
              $tipo_op_1[array_rand($tipo_op_1)];
            ?></td>
            <td class="right"><?php print rand(0,1);?> <br /> <?php print rand(0,1);?></td>
            <td class="right"><?php print rand(1000,1000000)/100;?></td>
            <td class="right">20/01/2020</td>
            <td class="right"><?= $tipo_op_1[array_rand($tipo_op_1)] ?></td>
            <td class="right"><?= $tipo_op_1[array_rand($tipo_op_1)] ?></td>
            <td class="right">00000<?= $x+15 ?></td>
        </tr>
      <?php } ?>
      </tbody>
  </table>

  <!-- PULSANTIERA SOTTO TABELLA -->
  <div class="btnWrapper marginTopMedium">
      <div class="btn-align-left">
          <a class="btn-link-icon" href="#"><i class="icon icon-excel_filled"></i><span>Scarica in Excel</span></a>
          <a class="btn-link-icon" href="#"><i class="icon icon-file_pdf_fill"></i><span>Scarica in PDF</span></a>
      </div>
      <div class="btn-align-right">
          <a class="btn-link-icon" data-toggle="modal" data-target="#layerCambio"><i class="icon icon_cambi"></i><span>Tasso di cambio</span></a>
      </div>
      <br class="clear">
  </div>
  <!-- FINE PULSANTIERA SOTTO TABELLA -->

</div>

<?php include("./parts/table_th_filter.php"); ?>
<?php include("./parts/icona_operativa.php"); ?>

<!-- INIZIALIZZAZIONI -->
<script type="text/javascript">
  $(function(){
    resizeTab('secondTab',0);
    appendDatePickerIcon('periodo');
    var tableOrdiniMovimenti = $('.sortableTable');
    tableOrdiniMovimenti.bootstrapTable({
      onPostBody: function(){
        // Funzioni da ripetere ad ogni refresh
        $(".table-btn-more").not("inited").click(function(){
          $("#layerConfronta").modal("show");
        });
        attivaIconaOperativa(".sortableTable");
      }
    });
    initThFilter();
  });
</script>
