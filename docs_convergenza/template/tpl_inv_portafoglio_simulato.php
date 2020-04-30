<?php
// crea le option di una select partendo da un array
function auto_input_select( $array ) {
  foreach ($array as $name => $opt): ?>
    <?php if( is_array( $opt ) ) { ?>
    <optgroup label="<?php print ( $name ) ?>">
      <?php foreach ($opt as $o): ?>
        <option value="<?php print ( strtolower(str_replace(' ', '_', $o))) ?>"><?php print ( $o ) ?></option>
      <?php endforeach; ?>
    </optgroup>
  <?php } else { ?>
      <option value="<?php print ( $name ? $name : strtolower(str_replace(' ', '_', $opt))) ?>">
        <?php print ($opt) ?>
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
  'Fondi e SICAV',
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

$tipo_op_1 = array(1,2,3);
?>

<h2>Portafoglio simulato</h2>

<p>Esercitati nel trading online! Puoi creare fino a 8 portafogli virtuali per valutare la performance delle tue scelte di investimento in tutta sicurezza.</p>
<br />

<div id="collapse1b" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1b" style="height: auto;">


  <div class="form-group">
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<label class="control-label">I tuoi portafogli</label>
        <select class="form-control" id="spselPortafogli">
          <?php auto_input_select( array('Portafoglio 1','Portafoglio 2','Portafoglio 3','Portafoglio 4') ) ?>
        </select>
			</div>
			<div class="col-xs-12 col-sm-4 no-label">
				<div class="btn-align-right">
          <a type="button" href="#" class="btn btn-primary" title="Crea nuovo" data-toggle="modal" data-target="#layerNuovo">
            <i class="icon icon-<?php print ( ($site == "webank") ? 'add' : 'add_filled') ?>"></i>
            <span class="icon-text">Crea nuovo</span>
          </a>
				</div>
			</div>
		</div>
	</div>
  <div class="row">
    <div class="form-field-input col-xs-12 col-md-6">
      <div class="form-group">
        <!-- SELECT MULTIFUNZIONE -->
        <div class="form-group">
            <label class="control-label">Colonne visibili</label>

            <!-- Overlayer eliminazione -->
            <div class="modal fade" id="layerEliminaColonna" tabindex="-1" role="dialog" aria-labelledby="layerEliminaColonnaLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                            <h2 class="modal-title" id="layerEliminaColonnaLabel">Cancella set colonne</h2>
                        </div>
                        <div class="modal-body">
                            <p>Stai cancellando la vista <strong id="cancellaVistaName"></strong>.<br>
                            Sei sicuro di voler procedere?</p>

                        </div>
                        <div class="modal-footer">
                            <div class="btn-align-left">
                                <a type="button" class="btn btn-default" data-dismiss="modal">Annulla</a>
                            </div>
                            <div class="btn-align-right">
                                <a type="button" class="btn btn-primary" data-dismiss="modal">S&igrave;, cancella</a>
                            </div>
                            <br class="clear">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fine overlayer eliminazione -->

            <!-- Overlayer confronto mercati -->
            <div class="modal fade" id="layerConfronta" tabindex="-1" role="dialog" aria-labelledby="layerConfrontaLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                            <h2 class="modal-title" id="layerConfrontaLabel">Confronta su altri mercati</h2>
                        </div>
                        <div class="modal-body">
                        <div class="headerContainerNoBootS">
                            <div class="tableContainerNoBootS">
                                <table>
                                    <thead>
                                        <th></th>
                                        <th class="left">Titolo/Fondo</th>
                                        <th class="left">Mercato</th>
                                        <th class="right">Q.t&agrave; in<br>portaf.</th>
                                        <th class="right">Ult. prz.ora</th>
                                        <th class="right">Controval. Eur</th>
                                        <th class="right">Utili/Perdite<br>Eur VAR%</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center"><a class="btn-icon btn-icon-operativa" data-isin="9873213"><i class="icon icon-2x icon-ico_azioni02A"></i></i></a></td>
                                            <td class="left">Titolo azione 1</td>
                                            <td class="left">MOT</td>
                                            <td class="right">20,000</td>
                                            <td class="right">101,01<br>11:17:05</td>
                                            <td class="right">20.202,00</td>
                                            <td class="right nega">-24,00<br>-0,1%</td>
                                        <tr>
                                        <tr class="sub">
                                            <td class="center"><a class="btn-icon btn-icon-operativa" data-isin="9873213"><i class="icon icon-2x icon-ico_azioni02A"></i></i></a></td>
                                            <td class="left indent">Titolo azione 1</td>
                                            <td class="left">MOT</td>
                                            <td class="right">20,000</td>
                                            <td class="right">101,01<br>11:17:05</td>
                                            <td class="right">20.202,00</td>
                                            <td class="right nega">-24,00<br>-0,1%</td>
                                        <tr>
                                        <tr class="sub">
                                            <td class="center"><a class="btn-icon btn-icon-operativa" data-isin="9873213"><i class="icon icon-2x icon-ico_azioni02A"></i></i></a></td>
                                            <td class="left indent">Titolo azione 1</td>
                                            <td class="left">MOT</td>
                                            <td class="right">20,000</td>
                                            <td class="right">101,01<br>11:17:05</td>
                                            <td class="right">20.202,00</td>
                                            <td class="right nega">-24,00<br>-0,1%</td>
                                        <tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Fine overlayer confronto mercati -->


            <!-- Overlayer tassi di cambio -->
            <div class="modal fade" id="layerCambio" tabindex="-1" role="dialog" aria-labelledby="layerCambioLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                            <h2 class="modal-title" id="layerCambioLabel">Confronta su altri mercati</h2>
                        </div>
                        <div class="modal-body">
                            <p>Di seguito si mostra il tasso di cambio con cui viene calcolato il controvalore in euro dei titoli.</p>
                            <div class="headerContainerNoBootS">
                                <div class="tableContainerNoBootS">
                                    <table>
                                        <thead>
                                            <th class="left">Valuta</th>
                                            <th class="right">Bid</th>
                                            <th class="right">Ask</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="left">EUR/GBP*</td>
                                                <td class="left">99,999999</td>
                                                <td class="left">99,999999</td>
                                            </tr>
                                            <tr>
                                                <td class="left">EUR/USD</td>
                                                <td class="left">199,999999</td>
                                                <td class="left">199,999999</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <p class="note">* Cambio EUR / GBP espresso in pence (centesimi di pound)</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fine overlayer tassi di cambio -->


            <!-- Overlay di selezione delle colonne -->
            <div class="modal fade" id="layerPers" tabindex="-1" role="dialog" aria-labelledby="layerPersLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                            <h2 class="modal-title" id="layerPersLabel">Modifica colonne</h2>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                            <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group marginBottomMedium">
                                            <label class="control-label flLeft noFloatMobile">Nome vista (max 25 caratteri)</label>
                                            <input maxlenght="25" type="text" class="form-control" id="inputSelColName">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label flLeft noFloatMobile">Seleziona le colonne da visualizzare (massimo X)</label>
                                            <p class="note flRight noFloatMobile"><strong>X</strong> di X selezionati</p>
                                            <br class="clear">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="checkbox inline">
                                                        <label class="textWrapper">
                                                                <input type="checkbox">
                                                                <span class="text">Lorem ipsum</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="checkbox inline">
                                                        <label class="textWrapper">
                                                                <input type="checkbox">
                                                                <span class="text">Lorem ipsum</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="checkbox inline">
                                                        <label class="textWrapper">
                                                                <input type="checkbox">
                                                                <span class="text">Lorem ipsum</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="checkbox inline">
                                                        <label class="textWrapper">
                                                                <input type="checkbox">
                                                                <span class="text">Lorem ipsum</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="checkbox inline">
                                                        <label class="textWrapper">
                                                                <input type="checkbox">
                                                                <span class="text">Lorem ipsum</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="checkbox inline">
                                                        <label class="textWrapper">
                                                                <input type="checkbox">
                                                                <span class="text">Lorem ipsum</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="checkbox inline">
                                                        <label class="textWrapper">
                                                                <input type="checkbox">
                                                                <span class="text">Lorem ipsum</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="checkbox inline">
                                                        <label class="textWrapper">
                                                                <input type="checkbox">
                                                                <span class="text">Lorem ipsum</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="checkbox inline">
                                                        <label class="textWrapper">
                                                                <input type="checkbox">
                                                                <span class="text">Lorem ipsum</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="checkbox inline">
                                                        <label class="textWrapper">
                                                                <input type="checkbox">
                                                                <span class="text">Lorem ipsum</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="checkbox inline">
                                                        <label class="textWrapper">
                                                                <input type="checkbox">
                                                                <span class="text">Lorem ipsum</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="checkbox inline">
                                                        <label class="textWrapper">
                                                                <input type="checkbox">
                                                                <span class="text">Lorem ipsum</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="btn-align-left">
                                <a type="button" class="btn btn-default" data-dismiss="modal">Annulla</a>
                            </div>
                            <div class="btn-align-right">
                                <a type="button" class="btn btn-primary" data-dismiss="modal">Crea</a>
                            </div>
                            <br class="clear">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fine overlay di selezione -->

            <!-- Attivazione Icona operativa-->
            <?php include("parts/icona_operativa.php"); ?>
            <!-- Fine attivazione icona operativa -->

            <script type="text/javascript">

                // funzione di apertura overlay di personalizzazione (emulazione)
                var persCol = function(nomevista){
                    $("#inputSelColName").val(nomevista);
                    $("#layerPers").modal("show");
                }

                /* Esempio inizializzazione */
                $(function(){
                    // Inizializza la special-select tipo "default" (esempio di callback)
                    $("#spselCol").spSel(
                        function(){
                            console.log($("input[name=spselCTAinput]").val())
                        }
                    );

                    $("#selColonne").click(function(){
                       persCol("");
                       $("#spselCol").removeClass("opened");
                    });

                    $("#spselCol .btn-icon[data-function=edit]").click(function(event){
                        event.preventDefault();
                        persCol($(this).attr("data-list-name"));
                        event.stopPropagation(); $("#spselCol").removeClass("opened");
                    });

                    $("#spselCol .btn-icon[data-function=delete]").click(function(event){
                        event.preventDefault();
                        $("#cancellaVistaName").html($(this).attr("data-list-name"));
                        $("#layerEliminaColonna").modal("show");
                        event.stopPropagation();
                    });

                });

            </script>
            <div class="spsel spsel-hasconsole nosel" id="spselCol" placeholder="Seleziona...">
                <input type="hidden" name="spselColinput" value="predefinite">
                <div class="spsel-options">
                    <div class="spsel-option" data-value="predefinite">
                        <a class="spsel-option-el">Predefinite</a>
                    </div>
                    <div class="spsel-option" data-value="mercati">
                        <a class="spsel-option-el">Mercati e prezzi</a>
                        <div class="spsel-btn-console">
                            <a class="btn-icon" data-list-name="Mercati e prezzi" data-function="edit"><i class="icon icon-edit_fill"></i></a>
                            <a class="btn-icon" data-list-name="Mercati e prezzi" data-function="delete"><i class="icon icon-delete_table"></i></a>
                        </div>
                    </div>
                    <div class="spsel-option" data-value="vista2">
                        <a class="spsel-option-el">Vista 2</a>
                        <div class="spsel-btn-console">
                            <a class="btn-icon" data-list-name="Vista 2" data-function="edit"><i class="icon icon-edit_fill"></i></a>
                            <a class="btn-icon" data-list-name="Vista 2" data-function="delete"><i class="icon icon-delete_table"></i></a>
                        </div>
                    </div>
                    <div class="spsel-option spsel-custom" id="selColonne">
                        <a class="spsel-option-el">Scegli colonne</a>
                        <div class="spsel-btn-console">
                            <i class="icon icon-row_expand"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FINE SELECT MULTIFUNZIONE -->
      </div>
    </div>
    <div class="form-field-input col-xs-12 col-md-6">
      <div class="form-group">
        <label class="control-label">Strumenti finanziari</label>
        <select class="form-control" id="selectStatoOrdine">
          <?php auto_input_select( $strumenti ) ?>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-5">
      <a href="#" class="btn-icon-simula text-link">
        Simula compravendita
        <i class="icon icon_piumeno"></i>
      </a>
      <br />
      <br />
    </div>
    <div class="col-xs-12 col-sm-7">
      <p class="note flRight noFloatMobile">
          <span class="flLeft">Ultimo Aggiornamento: <?php print ( date('d/m/Y') ) ?> ore <?php print ( date('h:i:s') ) ?></span>
          <a href="#" class="no-underline btn-icon flLeft padding-l-m" id="refreshBtn">
            <i class="icon icon-2x icon-update"></i>
          </a>
      </p>
    </div>

  </div>


  <!-- TABELLA -->
  <table cellspacing="0" cellpadding="0" border="0"  id="tableOrdiniMovimenti" class="sortableTable has-fixed-cols" data-fixed-cols="3">
      <thead>
          <tr>
              <th class="center"><a class="btn-icon" data-toggle="modal" data-target="#layerLegenda"><i class="icon icon-2x icon-info_fill"></i></a></th>
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
      <?php for($x=0;$x<=3;$x++) { ?>
        <tr>
          <td class="center">
            <a class="btn-icon btn-icon-modifica" data-isin="<?php print (999990 + $x )?>">
              <i class="icon icon-2x icon-<?php print(($site == "webank") ? 'r-modifica' : 'edit_fill') ?>"></i>
            </a>
          </td>
          <td class="left"><a href="">Titolo azione <?php print($x + 1) ?></a></td>
          <td class="left">MOT</td>
          <td class="right"><?php print rand(1000,1000000)/100;?></td>
          <td class="right"><?php print rand(1000,1000000)/100;?></td>
          <td class="right"><?php print rand(1000,1000000)/100;?></td>
          <td class="right">Settore <?php print ( $x + 1 )?></td>
          <td class="right"><?php print rand(10,10000)/100;?>&euro;</td>
          <td class="right"><?php print rand(10,10000)/100;?> 00:00:00</td>
          <td class="right"><?php print rand(1000,1000000)/100;?></td>
          <td class="right negativo"><?php print rand(1000,1000000)/100;?></td>
          <td class="center">
            <a class="btn-icon  btn-icon-operativa" data-isin="<?php print (999990 + $x )?>" data-isin="<?php print (999990 + $x )?>">
              <i class="icon icon-2x icon-ico_azioni02A"></i>
            </a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
      <tfoot>
            <tr>
                    <td colspan="2" class="bgWhite brdWhite"></td>
                    <td><strong> Totale portafoglio</strong></td>
                    <td colspan="7"></td>
                    <td class="right">123.404,00</td>
                    <td class="right nega">-24,00<br>-0,1%</td>
                    <td class="bgWhite brdWhite"></td>
            </tr>
      </tfoot>

  </table>

  <!-- PULSANTIERA SOTTO TABELLA -->
  <div class="btnWrapper marginTopMedium">
      <div class="btn-align-left">
          <a class="btn-link-icon" href="#"><i class="icon icon-excel_filled"></i><span>Scarica in Excel</span></a>
          <a class="btn-link-icon" href="#"><i class="icon icon-file_pdf_fill"></i><span>Scarica in PDF</span></a>
      </div>
      <div class="btn-align-right">
        <a class="btn-link-icon btn-tasso-cambio" data-toggle="modal" data-target="#layerCambio"><i class="icon icon_cambi"></i><span>Tasso di cambio</span></a>
      </div>
      <br class="clear">
  </div>
  <!-- FINE PULSANTIERA SOTTO TABELLA -->

  <div class="row marginTopMedium">
    <div class="col-xs-12 align-right marginTopMedium">Fonte dati: Borsa Italiana</div>
  </div>

</div>

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
                      <i class="icon icon-<?php print (($site == "webank") ? 'r-elimina' : 'delete_table') ?>"></i>
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

<div class="modal fade" id="menuSimula" tabindex="-1" role="dialog" aria-labelledby="menuModificaLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <a class="close btn-icon" data-dismiss="modal" aria-label="Close">
                <i class="icon icon-alert_error_fill icon-2x"></i>
              </a>
              <h2 class="modal-title">Simula compravendita</h2>
            </div>
            <div class="modal-body">
              <div class="simula-form">
                <div class="form-group" style="margin-bottom:0;">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                      <div class="form-group w100">
                        <label class="control-label">Titolo/Fondo</label>
                        <div class="editable-input">
                          <input type="text" name="" class="simula-input form-control clear-x" placeholder="ISIN/Descrizione/Titolo">
                          <span class="editable-clear-x" style="">
                            <i class="icon icon-close icon-1x"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-5">
                      <div class="form-group">
                        <label class="control-label">Mercato</label>
                        <select class="simula-input form-control" id="selectMercato">
                          <?php auto_input_select( $selectMercato ) ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-2 no-label">
                      <div class="btn-align-right">
                        <button id="simula-cerca" class="btn btn-primary" href="#">Cerca</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="simula-table" style="display:none">
                <h3>Risultati della ricerca</h3>
                <table cellspacing="0" cellpadding="0" border="0" id="tableSimula" class="sortableTable has-fixed-cols" data-fixed-cols="1">
                  <thead>
                    <tr>
                        <th class="left"></th>
                        <th class="left">Descrizione</th>
                        <th class="left">Simbolo</th>
                        <th class="left">Codice ISIN</th>
                        <th class="left">Mercato</th>
                        <th class="right">Prezzo Rif. Data</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php for($x=0;$x<=5;$x++) { ?>
                    <tr>
                      <td class="center">
                        <a class="btn-icon">
                          <i class="icon icon-2x icon_piumeno"></i>
                        </a>
                      </td>

                      <td class="left"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></td>
                      <td class="left">IT0005330961</td>
                      <td class="left">IT0005330961</td>
                      <td class="left"><?php print ($selectMercato['Azioni'][array_rand($selectMercato['Azioni'])]) ?></td>
                      <td class="right">100,00 <br />00/00/0000</td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>

<!-- Overlayer tassi di cambio -->
<div class="modal fade" id="layerCambio" tabindex="-1" role="dialog" aria-labelledby="layerCambioLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="layerCambioLabel">Confronta su altri mercati</h2>
            </div>
            <div class="modal-body">
                <p>Di seguito si mostra il tasso di cambio con cui viene calcolato il controvalore in euro dei titoli.</p>
                <div class="headerContainerNoBootS">
                    <div class="tableContainerNoBootS">
                        <table>
                            <thead>
                                <th class="left">Valuta</th>
                                <th class="right">Bid</th>
                                <th class="right">Ask</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="left">EUR/GBP*</td>
                                    <td class="left">99,999999</td>
                                    <td class="left">99,999999</td>
                                </tr>
                                <tr>
                                    <td class="left">EUR/USD</td>
                                    <td class="left">199,999999</td>
                                    <td class="left">199,999999</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p class="note">* Cambio EUR / GBP espresso in pence (centesimi di pound)</p>
            </div>
        </div>
    </div>
</div>
<!-- Fine overlayer tassi di cambio -->

<!-- Overlayer crea nuovo -->
<div class="modal fade modal-fixed-header modal-fixed-footer" id="layerNuovo" tabindex="-1" role="dialog" aria-labelledby="layerNuovoLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="layerNuovoLabel">Crea portafoglio simulato</h2>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-xs-12">
                  <label class="control-label">Scegli un nome per il tuo portafoglio.<br />Puoi creare altri <strong>8</strong> portafogli</label>
                </div>
              </div>
              <div class="row form-group w100">
                <div class="col-xs-12 col-sm-6">
                  <div class="input-group">
                    <input type="text" class="form-control " value="" maxlength="25" placeholder="Nome portafoglio simulato">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="align-right">
                <input type="button" name="annulla" value="Annulla" data-dismiss="modal" class="btn btn-secondary" alt="Annulla">
          			<input type="button" name="crea" value="Crea" data-dismiss="modal" class="btn btn-primary" alt="Crea">
              </div>
      		  </div>
        </div>
    </div>
</div>
<!-- Fine overlayer crea nuovo -->

<?php include("./parts/table_th_filter.php"); ?>
<?php include("./parts/icona_operativa.php"); ?>

<!-- INIZIALIZZAZIONI -->
<script type="text/javascript">
  $(function(){
    appendDatePickerIcon('periodo');
    var tableOrdiniMovimenti = $('.sortableTable');
    tableOrdiniMovimenti.bootstrapTable({
      onPostBody: function(){
        // Funzioni da ripetere ad ogni refresh
        $('.btn-icon-azioni').on('click', function (e) {
          e.preventDefault();
          $('#menuAzioni').modal();
        });
        $('.btn-icon-modifica').on('click', function (e) {
          e.preventDefault();
          $('#menuModifica').modal();
        });
        $('#menuSimula').on('hidden.bs.modal', function () {
          $('.simula-table').hide();
          $('#simula-cerca').removeAttr('disabled').removeClass('btn-disabled');
        });
        attivaIconaOperativa(".sortableTable");
      }
    });
    initThFilter();
    $('#simula-cerca').on('click', function (e) {
      e.preventDefault();
      $('#simula-cerca').attr('disabled','disabled').addClass('btn-disabled');
      $('.simula-table').show();
    });
    $('.simula-input').on('click change', function (e) {
      e.preventDefault();
      //$('.simula-table').hide();
      $('#simula-cerca').removeAttr('disabled').removeClass('btn-disabled');
    });
    $('.btn-icon-simula').on('click', function (e) {
      e.preventDefault();
      $('#menuSimula').modal();
    });
    initCheckCols();
    $('#wrapperCheckCols input').on('click', function (e) {
      initCheckCols();
    });
  });
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
  function initCheckCols() {
    var parent = $('#wrapperCheckCols');
    var totCols = $('.totCols');
    var max = 20;
    var num = parent.find('input:checked').size();
    $('.countCols').each(function(){ $(this).html( num ); })
    $('.maxCols').each(function(){ $(this).html( max ); })
    if(num >= max ) {
      parent.find('input:not(:checked)').attr('disabled','disabled');
      totCols.addClass('has-error');
    } else {
      parent.find('input:not(:checked)').removeAttr('disabled');
      totCols.removeClass('has-error');
    }
  }
</script>
