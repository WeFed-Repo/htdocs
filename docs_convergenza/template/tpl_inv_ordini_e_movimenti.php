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
?>

<h2>Ordini e movimenti</h2>
<!-- SELETTORE DEPOSITO -->
<?php include ("./parts/selettore_deposito.php"); ?>
<!-- FINE SELETTORE DEPOSITO -->

<div class="navContSecondLev" id="secondTab">
  <div class=" outerTab">
    <ul class="tabWrapper tabsmall hidden-xs">
      <li class="on"><a href="#heading1b">Ordini titoli</a></li>
      <li class=""><a href="#heading2b">Ordini fondi</a></li>
      <li class=""><a href="#theading3b">Tutti i movimenti</a></li>
    </ul>
  </div>
  <div class="separator"></div>
  <div class="panel-group panel-fill" id="accordion2" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading visible-xs" role=" tab" id="heading1b">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b" aria-expanded="true" aria-controls="collapse1b" class="">
            Ordini titoli<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
          </a>
        </h4>
      </div>
      <div id="collapse1b" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1b" style="height: auto;">

        <div class="row">
          <div class="col-xs-12 col-md-6">
              <div class="form-group">
                <script type="text/javascript">
                $(function() {
                    $("#periodo").mask("99/99/9999");
                    $("#periodo").datepicker({
                        minDate: 1,
                        showOtherMonths: true,
                        showOn: "button",
                        prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
                        nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
                        buttonImage: "/img/ret/pixel_trasp.gif",
                        buttonImageOnly: true,
                        beforeShow: renderPickDateMobile,
                        onClose: function() { $('#datePickerWrapper').modal('hide'); }
                    });
                    appendDatePickerIcon('periodo');
                });
                </script>
                <label class="control-label" for="periodo">Periodo</label>
                <div class="input-group">
                  <input type="text" id="periodo"
                         placeholder="gg/mm/aaaa"
                         value="<?= ($site == "webank") ? date('d/m/Y',strtotime("-1 days")) : date('d/m/Y') ?>"
                         class="form-control clear-x">
                  <a class="input-group-addon date btn-icon" href="#!">
                    <i class="icon icon-calendar_filled"></i>
                  </a>
                </div>
              </div>
          </div>
          <?php if($site == "webank") { ?>
          <div class="col-xs-12 col-md-6">
            <div class="form-group">
              <?php $selectStrumento = array(
                'Titoli',
                'Derivati'
              ); ?>
              <label class="control-label">Strumento</label>
              <select class="form-control" id="selectStrumento">
                <?php auto_input_select( $selectStrumento ) ?>
              </select>
            </div>
          </div>
          <?php } ?>
          <div class="col-xs-12 col-md-6">
            <div class="form-group">
              <?php $selectTipoOperazione = array(
                'Tutte le operazioni',
                'Acquisto',
                'Vendita',
                'Acquisto intraday',
                'Vendita intraday',
                'Acquisto overnight',
                'Vendita overnight'
              ); ?>
              <label class="control-label">Tipi di operazione</label>
              <select class="form-control" id="selectTipoOperazione">
                <?php auto_input_select( $selectTipoOperazione ) ?>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div class="form-group">
              <?php $selectStatoOrdine = array(
                'Tutti',
                'Inseriti',
                'Eseguiti',
                'Parzialmente eseguiti',
                'Ineseguiti',
                'Cancellati',
                'Parzialmente cancellati',
                'In cancellazione',
              ); ?>
              <label class="control-label">Stato ordine</label>
              <select class="form-control" id="selectStatoOrdine">
                <?php auto_input_select( $selectStatoOrdine ) ?>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div class="form-group">
              <?php $selectMercato = array(
                'Tutti i mercati',
                'Azioni' => array(
                  'MTA',
                  'BIT GEM',
                  'AEX25',
                  'BEL20',
                  'FTSE100',
                  'IBEX35',
                  'NASDAQ',
                  'NYSE',
                  'PSI20',
                  'SBF',
                  'XETRA',
                  'Hi-MTF',
                  'EuroTLX',
                ),
                'SD Certificates' => array(
                  'SEDEX',
                  'ETF/ETC',
                  'ETFPlus',
                ),
                'Obbligazioni' => array(
                  'MOT',
                  'EuroTLX',
                  'Hi-MTF',
                  'EuroMOT',
                  'ExtraMOT',
                  'Best execution',
                  'Akros IS',
                ),
              ); ?>
              <label class="control-label">Mercato</label>
              <select class="form-control" id="selectMercato">
                <?php auto_input_select( $selectMercato ) ?>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 no-label">
  					<div class="btn-align-right">
  						<a type="button" class="btn btn-primary" href="#">Cerca</a>
  					</div>
          </div>

          <div class="col-xs-12">
            <p class="note flLeft noFloatMobile">
                <span class="flLeft">Ultimo Aggiornamento: <?= date('d/m/Y') ?> ore <?= date('h:i:s') ?></span>
                <a href="#" class="no-underline btn-icon flLeft padding-l-m" id="refreshBtn">
                  <i class="icon icon-2x icon-update"></i>
                </a>
            </p>
        </div>

        </div>

      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading visible-xs" role=" tab" id="heading2b">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b" aria-expanded="true" aria-controls="collapse2b" class="">
            Ordini fondi<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
          </a>
        </h4>
      </div>
      <div id="collapse1c" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2b" style="height: auto;">
        2
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading visible-xs" role=" tab" id="heading2c">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2c" aria-expanded="true" aria-controls="collapse2c" class="">
            Tutti i movimenti<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
          </a>
        </h4>
      </div>
      <div id="collapse2c" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2c" style="height: auto;">
        3
      </div>

    </div>
  </div>
</div>
<script>
//inizializzazione dei tab-accordion
//TRASFORMA IL TAB DI CONTENUTO IN ACCORDION SU MOBILE
//possono coesistere più gruppo di tab/accordion in pagina
//parametri: id contenitore e incice tab ch edeve essere aperto al load
$(function(){
  resizeTab('secondTab',0);
});
</script>
