<h2>Portafoglio titoli e fondi</h2>
<!-- SELETTORE DEPOSITO -->
<?php include ("./parts/selettore_deposito.php"); ?>
<!-- FINE SELETTORE DEPOSITO -->

<!-- FUNZIONI PER EMULAZIONE -->
<script type="text/javascript">
// Funzione di caricamento dei dati (emulazione)
var loadTableData = function(){
    $("#pageData").addClass("loading");
    setTimeout(function(){
        $("#pageData").removeClass("loading");
    }, 1000);
}
    
$(function(){
    loadTableData();

    // Esempio interattivita' elementi
    $("#selectStrumentiFinanziari").change(loadTableData);
    $("#refreshBtn").click(loadTableData);
});

</script>
<!-- FINE FUNZIONI PER EMULAZIONE -->

<!-- WRAPPER DEI RISULTATI DI PAGINA -->
<div id="pageData" class="loading">
    <!-- FORM CON SELETTORI PER COLONNE E STRUMENTI -->
    <form class="formGenerico noMarginBottom">
        <div class="row">
            <div class="col-sm-6">
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
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                                    <h2 class="modal-title" id="layerConfrontaLabel">Confronta su altri mercati</h2>
                                </div>
                                <div class="modal-body">
                                    
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
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">Strumenti finanziari</label>
                    <select class="form-control" id="selectStrumentiFinanziari">
                        <option selected value="Tutti gli strumenti">Tutti gli strumenti</option>
                        <option value="Azioni">Azioni</option>
                        <option value="Obbligazioni">Obbligazioni</option>
                        <option value="Derivati">Derivati</option>
                        <option value="CW e Certificates">CW e Certificates</option>
                        <option value="ETF">ETF</option>
                        <option alue="Marginazione">Marginazione</option>
                        <option value="Fondi">Fondi</option>
                    </select>
                </div>
            </div>
        </div>
        <?php if ($site=="webank") { ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Valorizzazione prezzi</label>
                        <div class="row">
                            <div class="col-xs-6 col-sm-3">
                                <div class="radio inline">
                                    <label class="textWrapper">
                                        <input type="radio" name="" id="">
                                        <span class="text">Intraday</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="radio inline">
                                    <label class="textWrapper">
                                        <input type="radio" name="" id="">
                                        <span class="text">Overnight</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </form>

    <!-- FINE CON SELETTORI PER COLONNE E STRUMENTI -->
    <!-- BLOCCO AGGIORNAMENTI -->
    <div class="row">
        <div class="col-sm-4">
            <a href="#" class="text-link">Situazione PAC</a>
        </div>
        <div class="col-sm-8">
            <p class="note flRight noFloatMobile">
                <span class="flLeft">Ultimo Aggiornamento: 02/08/2016 ore 10:44:24</span> 
                <!--esempio di loading -->
                <a href="#1" class="no-underline btn-icon flLeft padding-l-m" id="refreshBtn"><i class="icon icon-2x icon-update"></i></a>
            </p>
        </div>
    </div>
    <!-- FINE BLOCCO AGGIORNAMENTI -->
    <section>
    
        <!-- MODALE HELP TABELLA -->
        <div class="modal fade" id="layerLegenda" tabindex="-1" role="dialog" aria-labelledby="layerLegendaLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                        <h2 class="modal-title" id="layerLegendaLabel">Legenda titoli in colonna</h2>
                    </div>
                    <div class="modal-body">
                        <p><strong>Titolo</strong> lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor </p>                                   
                        <p><strong>Div</strong> lorem ipsum dolo ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor </p>                                   
                        <p><strong>P. Medio Lorem Dolor </strong> lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor </p>                                   
                        <p><strong>Cambio</strong> lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor </p>                                   
                    </div>
                    <div class="modal-footer">
                        <div class="btn-align-right">
                            <a type="button" class="btn btn-primary" data-dismiss="modal">Chiudi</a>
                        </div>
                        <br class="clear">
                    </div>
                </div>
            </div>
        </div>
        <!-- FINE MODALE HELP TABELLA -->


        <!-- TABELLA -->
        <!-- FUNZIONI PER FILTRI -->
        <?php include("./parts/table_th_filter.php"); ?>
        <!-- FINE FUNZIONI PER FILTRI -->
        <script>
            // Esempio di creazione della tabella di bootstrap
            $(function(){
                var tablePortafoglio = $('#tablePortafoglio');
                tablePortafoglio.bootstrapTable({
                        onPostBody: function(){
                            // Funzioni da ripetere ad ogni refresh
                            $(".table-btn-more").not("inited").click(function(){
                                    $("#layerConfronta").modal("show");
                                });
                            attivaIconaOperativa("#tablePortafoglio");
                        }
                });

                // Inizializza i filtri addizionali
                initThFilter();
            });
        </script>
        <table cellspacing="0" cellpadding="0" border="0"  id="tablePortafoglio" class="sortableTable">
            <thead>
                <tr>
                    <th class="center"><a class="btn-icon" data-toggle="modal" data-target="#layerLegenda"><i class="icon icon-2x icon-info_fill"></i></a></th>
                    <th class="left filter" data-sortable="true" id="filterTitolo">
                        Titolo/Fondo
                    </th>
                    <th class="left">Mercato</th>
                    <th class="right">Q.t&agrave; in<br>portaf.</th>
                    <th class="right">Q.t&agrave;<br>disp.</th>
                    <th class="right">Prz. medio carico</th>
                    <th class="right">Prz. medio carico</th>
                    <th class="left">Settore</th>
                    <th class="right">Valore Y</th>
                    <th class="right">Ult. prz.ora</th>
                    <th class="right">Controval. Eur</th>
                    <th class="right">Utili/Perdite<br>Eur VAR%</th>
                </tr>
            </thead>
            <tbody>	
            <?php
                for($x=0;$x<=6;$x++)  {
                    ?>
                    <tr>
                        <td class="center"><a class="btn-icon btn-icon-operativa" data-isin="<?php print (999990 + $x )?>"><i class="icon icon-2x icon-ico_azioni02A"></i></a></td>
                        <td class="left">Titolo <?php print (999990 + $x ) ?></td>
                        <td class="left"><?php 
                            if ($x==0) {
                                ?>
                                <nobr>MOT <span class="table-btn-more" data-isin="09090909"></span></nobr>
                                <?php
                            }
                            else
                            {
                                print "MOT";
                            }
                        ?>    
                        </td>
                        <td class="right"><?php print rand(0,10000)/100;?></td>
                        <td class="right"><?php print rand(0,10000)/100;?></td>
                        <td class="right"><?php print rand(0,10000)/100;?></td>
                        <td class="right"><?php print rand(0,10000)/100;?></td>
                        <td class="left"><?php print ["Telecomunicazioni","Chimica e materie prime","Industria"][rand(0,2)];?></td>
                        <td class="right">00,0&euro;</td>
                        <td class="right">101,01<br>11:17:05</td>
                        <td class="right">20.202,00</td>
                        <td class="right nega">-24,00<br>-0,1%</td>
                    </tr>
                    <?php

                }            
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <td class="bgWhite brdWhite"></td>
                    <td colspan="9"><strong>Totale portafoglio</strong></td>
                    <td class="right">123.404,00</td>
                    <td class="right nega">-24,00<br>-0,1%</td>
                </tr>
            </tfoot>
        </table>


        <!-- FINE TABELLA -->

        <!-- PULSANTIERA SOTTO TABELLA -->
        <div class="btnWrapper">
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
    
    </section>
</div>
<!-- FINE WRAPPER DEI RISULTATI DI PAGINA -->

<!-- LISTA CON DETTAGLI -->
<section>
    <ul>
        <li>Per i titoli in divisa diversa dall'Euro, il "Prezzo di carico" e il "Prezzo di chiusura" sono espressi nella rispettiva valuta, mentre il "Controvalore di carico" e quello attuale sono espressi in Euro.</li>
        <li>Il "Prezzo medio di carico" e gli "Utili/Perdite" sono dati finanziari non validi ai fini fiscali per il calcolo del capital gain in quanto contengono, ad esempio, i dividendi per le azioni e il rateo per i titoli obbligazionari.</li>
        <li>Per conoscere il "Prezzo fiscale" delle posizioni in portafoglio accedi al dettaglio cliccando sull'icona operativa a fianco di ciascun titolo.</li>
    </ul>
</section>
<!-- FINE LISTA CON DETTAGLI -->


<!-- NOTE ESPANDIBILI -->
<section id="noteEtf">
    <div class="collapse-par">
        <div class="collapse-par-title collapsed" data-toggle="collapse" data-target="#collapseNoteEtf">Note fiscali sulla negoziazione degli ETF</div>
        <div class="collapse collapse-par-collapse" id="collapseNoteEtf">
            <p>Dal possesso di ETF (Exchange Traded Fund) si possono generare sia redditi di capitale, sia redditi diversi.</p>
            <p><strong>Redditi di capitale</strong></br>
            L'E.T.F. riconosce agli investitori i dividendi incassati a fronte delle azioni detenute in portafoglio, nonché i proventi del loro reinvestimento e quelli derivanti dalle operazioni di "prestito titoli" (ovvero dividendi).
            La normativa fiscale stabilisce che la differenza tra il ricavo e il costo sostenuto è oggetto di imponibilità fiscale, con la precisazione che il reddito di capitale è determinato dal differenziale positivo tra il NAV dell'operazione di vendita/rimborso e il NAV dell'operazione di acquisto/sottoscrizione, denominato Delta NAV. La sigla NAV è acronimo di Net Asset Value, e corrisponde al patrimonio netto del fondo diviso per il numero di quote in circolazione. Quando l'E.T.F. è acquistato e venduto nello stesso giorno, il suo Delta NAV sarà nullo.
            Nel caso in cui la posizione del cliente si sia formata sulla base di molteplici acquisti, effettuati a prezzi differenti, verrà utilizzato come prezzo NAV di acquisto un valore medio ponderato sulle quantità (calcolato sulla base dei valori lordi delle quote dei giorni in cui sono stati effettuati gli acquisti, ponderati sulle quantità).
            Sui redditi di capitale (proventi periodici e Delta NAV positivo) si applica una ritenuta del 12,50%, a titolo d'imposta per i percipienti persone fisiche e a titolo d'acconto nei confronti delle Società di capitali.
            </p>
            <p><strong>
            Redditi diversi</strong><br>
            L'eventuale reddito diverso è pari alla differenza tra prezzo di vendita e prezzo di acquisto meno il Delta NAV riferito alle medesime date di vendita e di acquisto. Le plus/minusvalenze come sopra determinate entreranno mensilmente a far parte del conteggio dell'imposta sostitutiva sui capital gain di cui al D. Lgs. 461/97 (Regime amministrato o gestito per le sole persone fisiche).</p>
        </div>
    </div>
</section>
<!-- FINE NOTE ESPANDIBILI -->