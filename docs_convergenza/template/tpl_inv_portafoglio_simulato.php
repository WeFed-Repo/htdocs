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


  <div class="form-group">
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<label class="control-label">I tuoi portafogli</label>
          <div class="spsel spsel-hasactions nosel" id="spselPortafogli"  placeholder="Seleziona...">
            <input type="hidden" name="spselCTAinput2">
            <div class="spsel-options">
              <?php for($i=0;$i<=3;$i++) { ?>
              <div class="spsel-option" data-value="<?php print($i);?>">
                <a class="spsel-option-el">Portafoglio <?php print($i);?></a>
                <a class="spsel-addel btn-icon" data-el="icona_modifica_<?php print($i);?>">
                  <i class="icon icon-<?= ($site == "webank") ? 'r-modifica' : 'edit_fill' ?>"></i>
                </a>
                <a class="spsel-addel btn-icon" data-el="icona_elimina_<?php print($i);?>">
                  <i class="icon icon-<?= ($site == "webank") ? 'r-elimina' : 'delete_table' ?>"></i>
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
			<div class="col-xs-12 col-sm-4 no-label">
				<div class="btn-align-right">
          <a type="button" href="#" class="btn btn-primary" title="Crea nuovo">
            <?php if($site == "webank") echo '<i class="icon icon-add"></i>' ?>
            <span class="icon-text">Crea nuovo</span>
          </a>
				</div>
			</div>
		</div>
	</div>
  <div class="row">
    <div class="form-field-input col-xs-12 col-md-6">
      <div class="form-group">
        <label class="control-label">Strumenti finanziari</label>
        <select class="form-control" id="selectStatoOrdine">
          <?php auto_input_select( $strumenti ) ?>
        </select>
      </div>
    </div>
    <div class="form-field-input col-xs-12 col-md-6">
      <div class="form-group">
        <label class="control-label">Colonne visibili</label>
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
                <i class="icon icon-<?= ($site == "webank") ? 'r-modifica' : 'edit_fill' ?>"></i>
              </a>
              <a class="spsel-addel btn-icon" data-el="icona_elimina_<?php print($i);?>">
                <i class="icon icon-<?= ($site == "webank") ? 'r-elimina' : 'delete_table' ?>"></i>
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
    <div class="col-xs-8 col-sm-6">
      <a href="#" class="text-link">
        Simula compravendita
        <i class="icon icon_piumeno"></i>
      </a>
    </div>
    <div class="col-xs-4 col-sm-6">
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
              <th class="left"></th>
              <th class="left filter" data-sortable="true" id="filterTitolo">Titolo / Fondo</th>
              <th class="left">Mercato</th>
              <th class="right">Q.t&agrave; in portaf.</th>
              <th class="right">Q.t&agrave; disp.</th>
              <th class="right">Prz. medio carico</th>
              <th class="right">Settore</th>
              <th class="right">Valore Y</th>
              <th class="right">Ult. prz. ora</th>
              <th class="right">Controval. Eur</th>
              <th class="right">Utili /Perdite Eur VAR%</th>
              <th class="right"></th>
          </tr>
      </thead>
      <tbody>
      <?php for($x=0;$x<=5;$x++) { ?>
        <tr>
          <td class="center">
            <a class="btn-icon btn-icon-operativa" data-isin="<?php print (999990 + $x )?>">
              <i class="icon icon-2x icon_piumeno"></i>
            </a>
          </td>
          <td class="center">
            <a class="btn-icon btn-icon-modifica" data-isin="<?php print (999990 + $x )?>">
              <i class="icon icon-2x icon-<?= ($site == "webank") ? 'r-modifica' : 'edit_fill' ?>"></i>
            </a>
          </td>
          <td class="left"><a href="">Titolo azione <?= $x + 1 ?></a></td>
          <td class="left">MOT</td>
          <td class="right"><?php print rand(1000,1000000)/100;?></td>
          <td class="right"><?php print rand(1000,1000000)/100;?></td>
          <td class="right"><?php print rand(1000,1000000)/100;?></td>
          <td class="right">Settore <?= $x + 1 ?></td>
          <td class="right"><?php print rand(10,10000)/100;?>&euro;</td>
          <td class="right"><?php print rand(10,10000)/100;?> 00:00:00</td>
          <td class="right"><?php print rand(1000,1000000)/100;?></td>
          <td class="right negativo"><?php print rand(1000,1000000)/100;?></td>
          <td class="center">
            <a class="btn-icon btn-icon-azioni" data-isin="<?php print (999990 + $x )?>">
              <i class="icon icon-2x icon-ico_azioni02A"></i>
            </a>
          </td>
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

    $('.btn-icon-azioni').on('click', function (e) {
      e.preventDefault();
      $('#menuAzioni').modal();
    });

    $('.btn-icon-modifica').on('click', function (e) {
      e.preventDefault();
      $('#menuModifica').modal();
    });

  });
</script>



<div class="modal fade" id="menuAzioni" tabindex="-1" role="dialog" aria-labelledby="menuAzioniLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
            </div>
            <div class="modal-body">
              <table>
                <tr><td>Azione 1</td></tr>
                <tr><td>Azione 2</td></tr>
                <tr><td>Azione 3</td></tr>
                <tr><td>Azione 4</td></tr>
              </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-fixed-footer" id="menuModifica" tabindex="-1" role="dialog" aria-labelledby="menuModificaLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <a class="close btn-icon" data-dismiss="modal" aria-label="Close">
                <i class="icon icon-alert_error_fill icon-2x"></i>
              </a>
              <h2 class="modal-title">Elimina / Modifica riga</h2>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-xs-12 col-md-8">
                  Titolo
                </div>
              </div>
              <div class="row">
                <div class="col-xs-8">
                  <br class="hidden-md hidden-lg hidden-xl" />
                  <strong>BTP 0,05% EUR 15.04.2018-15.04-2021</strong>
                </div>
                <div class="col-xs-4">
                  <div class="btn-align-left">
                    <a class="btn-link-icon" href="#">
                      <i class="icon icon-<?= ($site == "webank") ? 'r-elimina' : 'delete_table' ?>"></i>
                      <span>Elimina riga</span>
                    </a>
                  </div>
                </div>
              </div>
              <br />
              <hr />
              <form class="formGenerico">
                <div class="form-group">
                    <div class="row">
                      <div class="col-xs-6 requiredField">
                          <label class="control-label">Quantità</label>
                          <div class="editable-input">
                            <input type="text" class="form-control clear-x" name="qta">
                            <span class="editable-clear-x" style="">
                              <i class="icon icon-close icon-1x"></i>
                            </span>
                          </div>
                      </div>
                        <div class="col-xs-6 requiredField">
                            <label class="control-label">Prezzo</label>
                            <div class="editable-input">
                              <input type="text" class="form-control clear-x" name="prezzo">
                              <span class="editable-clear-x" style="">
                                <i class="icon icon-close icon-1x"></i>
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6 requiredField">
                          <!--<label class="control-label">Data inserimento</label>
                          <div class="form-inline">
                            <div class="input-group">
                              <input type="text" id="dataInserimento" placeholder="gg/mm/aaaa" class="form-control clear-x width-100">
                              <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
          		       	 			</div>
            							</div>-->

                          <div class="form-group w100">
                            <label class="control-label">Periodo</label>
                              <div class="input-group">
                                  <input type="text"
                                         id="dataInserimento"
                                         placeholder="gg/mm/aaaa"
                                         value=""
                                         class="form-control datepicker input-inline clear-x">
                                  <span class="editable-clear-x" style="display: inline;"><i class="icon icon-close icon-1x"></i></span>
                                <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
                            </div>
                          </div>

                        </div>
                        <div class="col-xs-6 requiredField">
                          <label class="control-label">Cambio</label>
                          <div class="editable-input">
                            <input type="text" class="form-control clear-x" name="cambio">
                            <span class="editable-clear-x" style="">
                              <i class="icon icon-close icon-1x"></i>
                            </span>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6 requiredField">
                            <label class="control-label">Operatività</label>
                            <div class="editable-input">
                              <select name="operativita" class="form-control">
                                <option value="ordinaria">Ordinaria</option>
                                <option value="intraday">Intraday</option>
                                <option value="overnight">Overnight</option>
                              </select>
                            </div>
                        </div>
                    </div>
                  </div>
              </form>
              <small>Tutti i campi sono obbligatori</small>
            </div>
            <div class="modal-footer">
            	<div class="btn-align-center">
            		<a type="button" class="btn btn-primary">Modifica riga</a>
            	</div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
//inizializzazione datepicker
$(function() {
  $("#dataInserimento").mask("99/99/9999");
  $("#dataInserimento").datepicker({
      beforeShowDay: highlightDays,
      //beforeShowDay: noHolidays,  //si applica se si vuole che i fine sttimana e festivi non siano delezionabili
      minDate: 0,
      showOtherMonths: true,
      showOn: "button",
      prevText: "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
      nextText: "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
      // buttonImage: "/img/ret/pixel_trasp.gif",
      buttonImageOnly: true,
      beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
      onClose: function() {
          $('#datePickerWrapper').modal('hide');
      }
  });
  appendDatePickerIcon('dataInserimento');
});
</script>
