<?php
// crea le option di una select partendo da un array
function auto_input_select( $array ) {
  foreach ($array as $name => $opt): ?>
    <?php if( is_array( $opt ) ) { ?>
    <optgroup label="<?php print ( $name ) ?>">
      <?php foreach ($opt as $o): ?>
        <option value="<?php print ( strtolower(str_replace(' ', '_', $o))) ?>"><?php print ( $o) ?></option>
      <?php endforeach; ?>
    </optgroup>
  <?php } else { ?>
      <option value="<?php print ( $name ? $name : strtolower(str_replace(' ', '_', $opt))) ?>">
      <?php print ( $opt )?>
      </option>
    <?php } ?>
  <?php endforeach;
}

$selectStrumento = array(
  'Titoli',
  'Derivati'
);

$selectTipoOperazione = array(
  'Tutte le operazioni',
  'Acquisto',
  'Vendita',
  'Acquisto intraday',
  'Vendita intraday',
  'Acquisto overnight',
  'Vendita overnight'
);

$selectStatoOrdine = array(
  'Tutti',
  'Inseriti',
  'Eseguiti',
  'Parzialmente eseguiti',
  'Ineseguiti',
  'Cancellati',
  'Parzialmente cancellati',
  'In cancellazione',
);

$selectMercato = array(
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
);

$tipo_op_1 = array('Acquisto', 'Vendita');
$tipo_op_2 = array('', 'intraday', 'overnight');

$selectPeriodoFondi = array(
  'Ultimi 7 giorni',
  'Ultimi 30 giorni',
  'Ultimi 3 mesi',
  'Ultimi 6 mesi',
);

$selectStatoOrdineFondi = array(
  'Tutti gli stati',
  'Eseguito',
  'Accettato',
  'In esecuzione',
);

$selectTipoOperazioneFondi = array(
  'Tutte le operazioni',
  'Sottoscrizione',
  'Rimborso',
  'Switch',
  'Rata PAC',
  'Rimborso programmato',
  'Reinvest. cedola',
  'Accredito cedola',
  'Carico quote',
  'Scarico quote',
  'Carico quote fusione',
  'Scarico quote fusione',
  'Trasferimenti in ingresso',
  'Trasferimenti in uscita',
  'Altro',
);

$selectPeriodoMovimenti = array(
  ( ($site == "webank") ? 'Ieri' : 'Oggi' ),
  'Ultimi 7 giorni',
  'Ultimi 30 giorni',
  'Ultimi 3 mesi',
  'Ultimi 6 mesi',
);

$selectCausaleMovimenti = array(
  'Tutte le causali',
  'Causale 1',
  'Causale 2',
  'Causale 3',
  'Causale 4',
  'Causale 5',
);

function print_periodo_switch($periodo) {
  $site = $GLOBALS["site"];?>
  <div class="form-group w100 select-periodo-switch">
    <div>
      <div data-inputtoggle class="input-group" style="display:none">
        <div class="row">
          <div class="col-xs-6">
            <label class="control-label">Dal</label>
  		 			<div class="input-group">
  					    <input type="text" placeholder="gg/mm/aaaa"  class="periodo form-control clear-x"
                value="<?php print (($site == "webank") ? date('d/m/Y',strtotime("-1 days")) : date('d/m/Y')) ?>">
  					    <a class="input-group-addon date">
                  <?php if($site == "webank") { ?>
                    <i class="icon icon-calendar_filled"></i>
                  <?php } else { ?>
                    <img src="/HT/fe/img/calendar.png">
                  <?php } ?>
                </a>
  	     		  </div>
          </div>
          <div class="col-xs-6">
            <label class="control-label">Al</label>
  		 			<div class="input-group">
  					    <input type="text" placeholder="gg/mm/aaaa"  class="periodo form-control clear-x"
                value="<?php print (($site == "webank") ? date('d/m/Y',strtotime("-1 days")) : date('d/m/Y')) ?>">
  					    <a class="input-group-addon date">
                  <?php if($site == "webank") { ?>
                    <i class="icon icon-calendar_filled"></i>
                  <?php } else { ?>
                    <img src="/HT/fe/img/calendar.png">
                  <?php } ?>
                </a>
  	     		  </div>
          </div>
        </div>
      </div>
      <div data-inputtoggle>
        <label class="control-label">Periodo</label>
        <select class="form-control">
          <?php auto_input_select( $periodo ) ?>
        </select>
      </div>
    </div>
    <a class="print_periodo_switch">
      <?php if($site == "webank") { ?>
        <i class="icon icon-calendario"></i>
      <?php } else { ?>
        <img src="/HT/fe/img/calendar.png">
      <?php } ?>
    </a>
  </div>
<?php } ?>

<h2>Ordini e movimenti</h2>
<!-- SELETTORE DEPOSITO -->
<?php include ("./parts/selettore_deposito.php"); ?>
<!-- FINE SELETTORE DEPOSITO -->

<div class="navContSecondLev" id="secondTab">
  <?php if($site != "webank") { ?><br /><?php } ?>
  <div class="outerTab">
    <ul class="tabWrapper tabsmall hidden-xs">
      <li class="on"><a href="#heading1b">Ordini titoli</a></li>
      <li class=""><a href="#heading2b">Ordini fondi</a></li>
      <li class=""><a href="#theading3b">Tutti i movimenti</a></li>
    </ul>
  </div>
  <div class="separator"></div>
  <?php if($site != "webank") { ?><br /><?php } ?>
  <div class="panel-group panel-fill" id="accordion2" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default <?php print (($site != "webank") ? 'panel-accordion ' : '') ?>">
      <div class="panel-heading visible-xs" role=" tab" id="heading1b">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b" aria-expanded="true" aria-controls="collapse1b" class="">
            Ordini titoli<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
          </a>
        </h4>
      </div>
      <div id="collapse1b" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1b" style="height: auto;">
        <div class="panel-body">
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <?php print_periodo_switch( $selectPeriodoMovimenti ); ?>
          </div>
          <?php if($site == "webank") { ?>
          <div class="form-field-input col-xs-12 col-md-6">
            <div class="form-group">
              <label class="control-label">Strumento</label>
              <select class="form-control" id="selectStrumento">
                <?php auto_input_select( $selectStrumento ) ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <?php } ?>
          <div class="form-field-input col-xs-12 col-md-6">
            <div class="form-group">
              <label class="control-label">Tipi di operazione</label>
              <select class="form-control" id="selectTipoOperazione">
                <?php auto_input_select( $selectTipoOperazione ) ?>
              </select>
            </div>
          </div>
          <?php if($site != "webank") { ?>
          </div>
          <div class="row">
          <?php } ?>
          <div class="form-field-input col-xs-12 col-md-6">
            <div class="form-group">
              <label class="control-label">Stato ordine</label>
              <select class="form-control" id="selectStatoOrdine">
                <?php auto_input_select( $selectStatoOrdine ) ?>
              </select>
            </div>
          </div>
          <div class="form-field-input col-xs-12 col-md-6">
            <div class="form-group">
              <label class="control-label">Mercato</label>
              <select class="form-control" id="selectMercato">
                <?php auto_input_select( $selectMercato ) ?>
              </select>
            </div>
          </div>

          <?php if($site != "webank") { ?>
          </div>
          <div class="row">
          <?php } ?>

          <div class="col-xs-12 <?php print(($site == "webank") ? 'col-md-6 no-label' : '') ?> ">
  					<div class="btn-align-right">
  						<a type="button" class="btn btn-primary" href="#">Cerca</a>
  					</div>
          </div>

        </div>
        <div class="row">

          <div class="col-xs-12">
            <p class="note flLeft noFloatMobile marginTopMedium">
                <span class="flLeft">Ultimo Aggiornamento: <?php print(date('d/m/Y')) ?> ore <?php print(date('h:i:s')) ?></span>
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
            <?php for($x=0;$x<=10;$x++) { ?>
              <tr>
                  <td class="center">
                    <a class="btn-icon btn-icon-operativa" data-isin="<?php print (999990 + $x )?>">
                      <i class="icon icon-2x icon-ico_azioni02A"></i>
                    </a>
                  </td>
                  <td class="left"><a href="">Lorem ipsum <?php print (999990 + $x ) ?></a></td>
                  <td class="right"><?php print ($tipo_op_1[array_rand($tipo_op_1)].' '.$tipo_op_2[array_rand($tipo_op_2)]);?></td>
                  <td class="right"><?php print rand(0,1);?> <br /> <?php print rand(0,1);?></td>
                  <td class="right"><?php print rand(1000,1000000)/100;?></td>
                  <td class="right">20/01/2020</td>
                  <td class="right"><?php print ($selectStatoOrdine[array_rand($selectStatoOrdine)]) ?></td>
                  <td class="right"><?php print ($selectMercato['Azioni'][array_rand($selectMercato['Azioni'])]) ?></td>
                  <td class="right">00000<?php print ($x+15) ?></td>
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
            <!--div class="btn-align-right">
                <a class="btn-link-icon" data-toggle="modal" data-target="#layerCambio"><i class="icon icon_cambi"></i><span>Tasso di cambio</span></a>
            </div-->
            <br class="clear">
        </div>
        <!-- FINE PULSANTIERA SOTTO TABELLA -->


      </div>
    </div>
    </div>
    <div class="panel panel-default <?php print (($site != "webank") ? 'panel-accordion ' : '') ?>">
      <div class="panel-heading visible-xs" role=" tab" id="heading2b">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b" aria-expanded="true" aria-controls="collapse2b" class="">
            Ordini fondi<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
          </a>
        </h4>
      </div>
      <div id="collapse2b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2b" style="height: auto;">
        <div class="panel-body">
        <div class="row">
          <div class="form-field-input col-xs-12 col-md-6">
            <?php print_periodo_switch( $selectPeriodoFondi ); ?>
          </div>
          <?php if($site == "webank") { ?>
          <div class="form-field-input col-xs-12 col-md-6">
            <div class="form-group">
              <label class="control-label">Stato ordine</label>
              <select class="form-control" id="selectStatoOrdineFondi">
                <?php auto_input_select( $selectStatoOrdineFondi ) ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <?php } ?>
          <div class="form-field-input col-xs-12 col-md-6">
            <div class="form-group">
              <label class="control-label">Tipi di operazione</label>
              <select class="form-control" id="selectTipoOperazioneFondi">
                <?php auto_input_select( $selectTipoOperazioneFondi ) ?>
              </select>
            </div>
          </div>
          <?php if($site != "webank") { ?>
          </div>
          <div class="row">
          <?php } ?>
          <div class="col-xs-12 <?php print (($site == "webank") ? 'col-md-6 no-label' : '') ?> ">
            <div class="btn-align-right">
              <a type="button" class="btn btn-primary" href="#">Cerca</a>
            </div>
          </div>
          <div class="col-xs-12">
            <p class="note flLeft noFloatMobile marginTopMedium">
                <span class="flLeft">Ultimo Aggiornamento: <?php print ( date('d/m/Y')) ?> ore <?php print ( date('h:i:s')) ?></span>
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
                <th class="left filter" data-sortable="true" id="filterTitolo">Fondo / ISIN</th>
                <th class="left">Stato ordine</th>
                <th class="right">Quote/ azioni</th>
                <th class="left">Tipo operazione</th>
                <th class="right">Controv. in Euro</th>
                <th class="right">Ultimo prezzo</th>
                <th class="right">Data Valuta</th>
                <th class="right">Data Inserim.</th>
              </tr>
            </thead>
            <tbody>
            <?php for($x=0;$x<=10;$x++) { ?>
              <tr>
                  <td class="center">
                    <a class="btn-icon btn-icon-operativa" data-isin="<?php print (999990 + $x )?>">
                      <i class="icon icon-2x icon-ico_azioni02A"></i>
                    </a>
                  </td>
                  <td class="left"><a href="#">Ipsum dolor sit amet</a> <?php print rand(1000,1000000)/100;?> </td>
                  <td class="left"><?php
                    $a1 = $selectStatoOrdineFondi;
                    array_shift($a1);
                    $a1[] = 'Annullato';
                    echo $a1[array_rand($a1)];
                  ?></td>
                  <td class="left"><?php print rand(1000,1000000)/100;?></td>
                  <td class="left"><?php
                    $a2 = $selectTipoOperazioneFondi;
                    array_shift($a2);
                    echo $a2[array_rand($a2)];
                  ?></td>
                  <td class="right"><?php print rand(1000,1000000)/100;?></td>
                  <td class="right"><?php print rand(1000,1000000)/100;?></td>
                  <td class="right">20/01/2020</td>
                  <td class="right">20/01/2020</td>
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
            <!--div class="btn-align-right">
                <a class="btn-link-icon" data-toggle="modal" data-target="#layerCambio"><i class="icon icon_cambi"></i><span>Tasso di cambio</span></a>
            </div-->
            <br class="clear">
        </div>
        <!-- FINE PULSANTIERA SOTTO TABELLA -->
      </div>
    </div>
    </div>
    <div class="panel panel-default <?php print (($site != "webank") ? 'panel-accordion ' : '') ?>">
      <div class="panel-heading visible-xs" role=" tab" id="heading2c">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2c" aria-expanded="true" aria-controls="collapse2c" class="">
            Tutti i movimenti<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
          </a>
        </h4>
      </div>
      <div id="collapse2c" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2c" style="height: auto;">
        <div class="panel-body">
          <div class="row">
            <div class="form-field-input col-xs-12 col-md-6">
              <?php print_periodo_switch( $selectPeriodoMovimenti ); ?>
            </div>
            <div class="form-field-input col-xs-12 col-md-6">
              <div class="form-group">
                <label class="control-label">Causale</label>
                <select class="form-control" id="selectTipoOperazioneFondi">
                  <?php auto_input_select( $selectCausaleMovimenti ) ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 ">
    					<div class="btn-align-right">
    						<a type="button" class="btn btn-primary" href="#">Cerca</a>
    					</div>
            </div>
            <div class="col-xs-12">
              <p class="note flLeft noFloatMobile marginTopMedium">
                  <span class="flLeft">Ultimo Aggiornamento: <?php print ( date('d/m/Y')) ?> ore <?php print ( date('h:i:s')) ?></span>
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
                  <th class="left filter" data-sortable="true" id="filterTitolo">Descrizione</th>
                  <th class="left">Causale</th>
                  <th class="right">Data e ora inserim.</th>
                  <th class="right">Quantità</th>
                  <th class="left">Divisa</th>
                  <th class="right">Prezzo</th>
                  <th class="right">Controv Euro</th>
                  <th class="left">Stato</th>
                  <th class="center">Data valuta</th>
                  <th class="right">Numero ordine</th>
                </tr>
              </thead>
              <tbody>
              <?php for($x=0;$x<=10;$x++) { ?>
                <tr>
                  <td class="left">UBI BANCA</td>
                  <td class="left">
                    <?php echo $selectCausaleMovimenti[array_rand($selectCausaleMovimenti)]; ?>
                  </td>
                  <td class="center">20/01/2020 10:10</td>
                  <td class="right"><?php print rand(1000,1000000)/100;?></td>
                  <td class="left">EUR</td>
                  <td class="right"><?php print rand(1000,1000000)/100;?></td>
                  <td class="right"><?php print rand(1000,1000000)/100;?></td>
                  <td class="left"><?php
                    $st = array('Eseguito','Ineseguito');
                    echo $st[array_rand($st)];
                  ?></td>
                  <td class="center">20/01/2020</td>
                  <td class="right">0000-000-0000</td>
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
              <!--div class="btn-align-right">
                  <a class="btn-link-icon" data-toggle="modal" data-target="#layerCambio"><i class="icon icon_cambi"></i><span>Tasso di cambio</span></a>
              </div-->
              <br class="clear">
          </div>
          <!-- FINE PULSANTIERA SOTTO TABELLA -->
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("./parts/table_th_filter.php"); ?>
<?php include("./parts/icona_operativa.php"); ?>

<!-- INIZIALIZZAZIONI -->
<script type="text/javascript">
  $(function(){
    resizeTab('secondTab',0);
    $(".periodo").mask("99/99/9999");
    $(".periodo").datepicker({
    minDate: 1,
    showOtherMonths: true,
    showOn: "focus",
    prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
    nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
    beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
      onClose: function(){
        $('#datePickerWrapper').modal('hide');
      }
    })

    $('.print_periodo_switch').click(function(e){
      $(this).parent().find('[data-inputtoggle]').toggle();
    });

    var tableOrdiniMovimenti = $('.sortableTable');
    tableOrdiniMovimenti.bootstrapTable({
      onPostBody: function(){
        attivaIconaOperativa(".sortableTable");
      }
    });
    initThFilter();
  });
</script>
