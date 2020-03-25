<h2>Linee attive</h2>

<section>
    <ul>
        <li>
            Nella tabella sotto trovi l'elenco delle linee vincolate attive.
        </li>
        <li>
            Il giorno lavorativo successivo alla scadenza della linea, l'importo &egrave; riaccreditato automaticamente sul deposito stesso. Un giorno
            dopo sono corrisposti i relativi interessi.
        </li>
        <li>
            Puoi svincolare, anche parzialmente, la linea prima della sua scadenza, ma attenzione: in questo caso ti saranno corrisposti gli interessi
            al tasso del deposito libero (non a quelli della linea).
        </li>
    </ul>
</section>

<!-- FORM -->
<section>

    <form class="formGenerico borderFormRounded" role="form" id="form01">

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label" for="conti">Deposito</label>
                    <div class="form-inline">
                        <div class="input-group">
                            <select class="form-control" name="" id="conti">
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR"
                                        accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR
                                </option>
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR"
                                        accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR
                                </option>
                            </select>
                            <div class="input-group-addon">
                                <a class="no-underline btn-icon" data-toggle="modal" data-target="#starAlert1">
                                    <i class="icon icon-star_fill" title="icon-star_fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="control-label">Totale vincolato</label>
                    <span class="output">11.935,05&euro;</span>
                </div>
            </div>
        </div>

    </form>

</section>
<!-- End FORM -->

<!--style>

.panel-selected_1 {
    position: relative;
    padding-top: 39px;
}
.panel-selected_1 .panel-heading {
    position: absolute;
    top: 0;
    left: 0px;
    height: 50px;
    width: 100%;
    padding: 6px 10px 6px 6px;
    background-color: #EFF3E2; 
}


.panel-heading a{
	background-color: #EFF3E2;	
}

.panel-accordion-body{
	padding-top: 30px;
}


@media (max-width: 767px) {
	.panel-selected_1 .panel-heading {
		padding:0;
	}

	.panel-accordion-body{
		padding-top: 60px;
	}
}

</style-->

<!--ACCORDION 040 -->
<section>

    <div class="panel-group" id="accordionPref" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default panel-selected_1">

            <div class="panel-heading" role="tab" id="headingOnePre">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#collapseOne2Pre" aria-expanded="false" aria-controls="collapseOne2Pre">
                        Imposte e oneri fiscali applicati alle somme vincolate
                        <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                    </a>
                </h4>
            </div>

            <div id="collapseOne2Pre" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOnePre">
                <div class="panel-body panel-accordion-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p><strong>Tassazione</strong><br/>
                                Gli interessi netti indicati in pagina sono stati calcolati in base al D.L. 66/2014 convertito nella Legge n. 89/2014,
                                che prevede una ritenuta:
                            </p>
                            <ul>
                                <li>
                                    del 20&percnt; sugli interessi maturati al 30/06/2014;
                                </li>
                                <li>
                                    del 26&percnt; sugli interessi maturati dal 01/07/2014.
                                </li>
                            </ul>
                            <p>
                                I vincoli attivati dal 1 luglio 2014 saranno tassati al 26&percnt;.<br/>
                                Sui <strong>i vincoli attivati prima del 1 luglio 2014</strong> gli interessi netti verranno rettificati sulla base
                                delle modifiche introdotte dalla nuova normativa.
                            </p>
                            <p>
                                Gli interessi sono espressi per approssimazione.
                            </p>
                            <p>
                                <strong>Imposta di bollo</strong><br/>
                                Sulle somme vincolate in conto corrente &egrave; prevista l'applicazione dell'imposta di bollo proporzionale pari allo
                                0,20&percnt; annuo calcolata sul saldo degli importi vincolati alla data di produzione dell'estratto conto in
                                proporzione al periodo rendicontato.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--END ACCORDION 040 -->

<!-- TABELLA -->
<section>

    <div>
        <h4 class="flLeft">
            Riepilogo dati
        </h4>

        <span class="flLeft">
		<a href="#" class="iconFormUpdate btn-icon" data-toggle="modal" data-target="#layerSepa">
			<i class="icon icon-help_filled icon-2x"></i>
		</a>
	</span>
        <span class="flRight">
		<a href="#" class="iconFormUpdate btn-icon ">
			<i class="icon icon-excel_filled icon-2x "></i>
		</a>
	</span>
    </div>

    <table id="tableOrdered" class="sortableTable">
        <thead>
            <tr>
                <th data-field="idVincolo" data-sortable="true" class="right">Numero linea
                    <span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
                </th>
                <th data-field="nomeLinea" data-sortable="true" class="left">Nome linea vincolata
                    <span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
                </th>
                <th data-field="tassoLordo" data-sortable="true" class="right">Tasso lordo
                    <span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
                </th>
                <th data-field="durataVincolo" data-sortable="true" class="right">Durata linea
                    <span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
                </th>
                <th data-field="dataApertura" data-sorter="fixDate" data-sortable="true" class="center">Data apertura
                    <span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
                </th>
                <th data-field="dataScadenza" data-sorter="fixDate" data-sortable="true" class="center">Data scadenza
                    <span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
                </th>
                <th data-field="importoVincolato" data-sortable="true" class="right">Importo iniziale(€)
                    <span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
                </th>
                <th data-field="importoAllaScadenza" data-sortable="true" class="right">Importo finale(€)
                    <span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
                </th>
                <th data-field="nSvin" data-sortable="false" id="svincola" class="center nodet">Svincola</th>
            </tr>
        </thead>
        <tfoot>
            <tr class="totali">
                <td colspan="6"><strong>Totale</strong></td>
                <td id="totImporto" class="right bgWhite"></td>
                <td id="totImportoScadenza" class="right bgWhite"></td>
                <td></td>
            </tr>
        </tfoot>
    </table>

    <!-- BTN -->

    <div class="form-group btnWrapper">

        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="" href="#">
                stampa
            </a>
        </div>
        <div class="clear"></div>

    </div>

    <div class="form-group btnWrapper">

        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio"
               href="/connect.php?page=strutt_priv.php&	tpl=tpl_responsive_apertura_nuova_linea.php&responsive=y&liv0=4&liv1=1&liv2=1&liv3=0">
                Apri nuova linea vincolata
            </a>
        </div>
        <div class="clear"></div>

    </div>
</section>
<!-- END BTN-->

<script>
    var $tableOrdered = $('#tableOrdered');
    $(function () {

        var valori = {
            "esitoCall": "true",
            "msgEsitoCall": "",
            "codEsitoCall": "",
            "totImporto": "2.151,00",
            "totImportoScadenza": "2.163,85",
            "dati": [
                {
                    "idVincolo": "149",
                    "durataVincolo": 6,
                    "importoAllaScadenza": "2,01",
                    "importoVincolato": "2,00",
                    "dataScadenza": "29\/09\/2016",
                    "dataApertura": "31\/03\/2016",
                    "tassoLordo": "1,00",
                    "nSvin": 0
                },
                {
                    "idVincolo": "162",
                    "durataVincolo": 3,
                    "nomeLinea": "gahahs",
                    "importoAllaScadenza": "1,00",
                    "importoVincolato": "1,00",
                    "dataScadenza": "06\/10\/2016",
                    "dataApertura": "07\/07\/2016",
                    "tassoLordo": "0,75",
                    "nSvin": 0
                },
                {
                    "idVincolo": "163",
                    "durataVincolo": 3,
                    "nomeLinea": "eri",
                    "importoAllaScadenza": "1,00",
                    "importoVincolato": "1,00",
                    "dataScadenza": "17\/10\/2016",
                    "dataApertura": "18\/07\/2016",
                    "tassoLordo": "0,75",
                    "nSvin": 0
                },

                {
                    "idVincolo": "133",
                    "durataVincolo": 12,
                    "importoAllaScadenza": "1,01",
                    "importoVincolato": "1,00",
                    "dataScadenza": "21\/02\/2017",
                    "dataApertura": "22\/02\/2016",
                    "tassoLordo": "1,20",
                    "nSvin": 0
                },
                {
                    "idVincolo": "139",
                    "durataVincolo": 12,
                    "importoAllaScadenza": "1,01",
                    "importoVincolato": "1,00",
                    "dataScadenza": "21\/02\/2017",
                    "dataApertura": "22\/02\/2016",
                    "tassoLordo": "1,20",
                    "nSvin": 0
                },
                {
                    "idVincolo": "161",
                    "durataVincolo": 12,
                    "nomeLinea": "test 25 agosto",
                    "importoAllaScadenza": "1,02",
                    "importoVincolato": "1,00",
                    "dataScadenza": "05\/07\/2017",
                    "dataApertura": "06\/07\/2016",
                    "tassoLordo": "1,20",
                    "nSvin": 0
                },
                {
                    "idVincolo": "168",
                    "durataVincolo": 18,
                    "nomeLinea": '<a href="#" class="no-underline btn-icon"  data-toggle="modal" data-target="#layerLinea">sono io</a>',
                    "importoAllaScadenza": "1.011,12",
                    "importoVincolato": "1.000,00",
                    "dataScadenza": "24\/02\/2018",
                    "dataApertura": "25\/08\/2016",
                    "tassoLordo": "1,00",
                    "nSvin": '<a href="#" class="no-underline btn-icon"  data-toggle="modal" data-target="#layer"><i class="icon icon-2x icon-sicurezza_desktop"></i></a>'
                }
            ]
        };


        //settare Importo iniziale - Importo finale
        var setMovInTable = function (valori) {

            var importo;
            var importoScadenza;

            importo = valori.totImporto;
            importoScadenza = valori.totImportoScadenza;

            $('#totImporto').html(importo);
            $('#totImportoScadenza').html(importoScadenza);
        };


        $tableOrdered.bootstrapTable({
            data: valori.dati,
            sortable: true,
            sortName: "idVincolo",
            sortOrder: "desc",


            rowStyle: function (row, index) {
                if (!(index % 2)) {
                    return {
                        classes: 'dispari'
                    }
                } else {
                    return {
                        classes: 'pari'
                    }
                }
            },

            onPostBody: function () {
                setMovInTable(valori);

            }
        });
    });

</script>

<!--END  TABELLA-->

<!-- OVERLAYER 10 [ Dettaglio linee vincolate attive ] -->

<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
                <h2 class="modal-title" id="myModalLabel">Elenco linee attive</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>
                                <strong>Linee attive</strong><br/>
                                Di seguito la spiegazione delle voci presenti in tabella:
                            </p>

                            <ul>
                                <li>
                                    <strong>data di scadenza:</strong> è la data in cui scade la linea vincolata
                                </li>
                                <li>
                                    <strong>tasso di interesse:</strong> è il tasso lordo a cui vengono liquidati gli interessi alla scadenza del
                                    vincolo
                                </li>
                                <li>
                                    <strong>durata:</strong> è la durata del vincolo
                                </li>
                                <li>
                                    <strong>importo investito:</strong> è l'importo vincolato per ogni linea attiva
                                </li>
                                <li>
                                    <strong>importo a scadenza:</strong> è l'importo totale, comprensivo degli interessi liquidati a scadenza
                                </li>
                                <li>
                                    <strong>svincola:</strong> è la funzione che permette lo svincolo anticipato di una parte o dell'intera linea.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END OVERLAYER [ Dettaglio linee vincolate attive ] -->

<!-- MODALE SVINCOLO FINALE -->

<div class="modal fade" id="layeralert2F" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
                <h2 class="modal-title" id="myModalLabel">Svincolo linea anticipato</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul>
                                <li>A conferma dell'operazione ti sar&agrave; inviata una <strong>email</strong>.</li>
                                <li>Troverai l'importo svincolato <strong>direttamente nel deposito libero</strong>.</li>
                                <li>Gli <strong>interessi</strong> maturati sull'importo svincolato verranno contabilizzati nella prossima
                                    liquidazione <strong>al tasso del deposito libero</strong>.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="control-label-output">Importo da svincolare</label>
                            <span class="output" id="importoVincoloF"></span>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group btnWrapper">
                                <div class="btn-align-right">
                                    <a id="confermaDelete" type="button" class="btn btn-primary" data-dismiss="modal"
                                       onclick="$('#layeralertConferma').modal('show');$('#layeralert2F').modal('hide')">conferma</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FINE MODALE SVINCOLO FINALE -->

<!-- MODALE SVINCOLO FINALE -->

<div class="modal fade" id="layeralertConferma" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
                <h2 class="modal-title" id="myModalLabel">Svincolo linea anticipato</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <section class="boxesitoWrap">
                        <div class="boxesito positivo">
                            <div class="text">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>Operazione eseguita correttamente</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- FINE MODALE SVINCOLO FINALE -->

<!-- OVERLAYER 10 [ Dettaglio ICONE ] -->

<div class="modal fade" id="layer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
                <h2 class="modal-title" id="myModalLabel">Svincolo linea anticipato</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <img src="/wscmn/wbx/upload/cellette/banner_retention_430x40.gif" class="center-block marginBottomMini" alt="Banner"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>
                                <strong>Stai per svincolare questa linea,</strong> l'importo sarà riaccreditato sul deposito libero.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">

                            <!-- Box Giallo-->
                            <section class="boxesitoWrap">
                                <div class="boxesito attenzione">
                                    <i class="icon icon-alert_caution icon-2x"></i>
                                    <div class="text">
                                        <p>
                                            Ti ricordiamo che, svincolando ora la linea, gli interessi maturati saranno liquidati ai tassi del
                                            deposito libero (non a quelli della linea).
                                        </p>
                                    </div>
                                </div>
                            </section>
                            <!-- Box giallo-->
                            <!--FORM -->
                            <section>

                                <form class="formGenerico borderFormRounded" role="form" id="form01">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Data apertura</label>
                                                <span class="output">24/05/2016</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Data scadenza</label>
                                                <span class="output">24/05/2017</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Nome linea</label>
                                                <span class="output">pippo pluto paperino</span>
                                            </div>
                                            <div class="col-sm-6">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Importo da vincolare</label>
                                                <span class="output">55,00€</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Numero</label>
                                                <span class="output">123</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label" for="importo">Vuoi vincolare solo una parte ?
                                                    Indica qui l'importo </label>
                                                <input type="text" name="" class="form-control clear-x" id="importo">
                                            </div>
                                            <div class="col-sm-6">

                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <!--END  FORM -->

                                <!-- BTN STEP -->
                                <div class="form-group btnWrapper">
                                    <div class="btn-align-left">
                                        <a type="button" class="btn btn-default" href="#">annulla</a>
                                    </div>
                                    <div class="btn-align-right">
                                        <a type="button" class="btn btn-primary" id="btnInvio" href="#"
                                           onclick="$('#layer').modal('hide');$('#layeralert2F').modal('show');">
                                            svincola</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!--END  BTN STEP -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END OVERLAYER [ Dettaglio ICONE ] -->

<!-- Overlayer [nomeLinea]-->

<div class="modal fade" id="layerLinea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
                <h2 class="modal-title" id="myModalLabel">Modifica il nome della linea vincolata</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>
                                Puoi modificare il nome usato per identificare questa linea vincolata
                            </p>

                            <!--FORM -->
                            <section>

                                <form class="formGenerico borderFormRounded" role="form" id="form01">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Linea N&deg;</label>
                                                <span class="output">168</span>
                                            </div>
                                            <div class="col-sm-6">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Tasso</label>
                                                <span class="output">1,00&percnt;</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Durata</label>
                                                <span class="output">18 mesi</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Data apertura</label>
                                                <span class="output">25/08/2016</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="control-label-output">Data scadenza</label>
                                                <span class="output">23/02/2017</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label">Importo</label>
                                                <span class="output">1000,00&euro;</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="control-label">Importo finale</label>
                                                <span class="output">1011,00&euro;</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="control-label" for="nomeLV">Nome linea (opzionale) </label>
                                                <input type="text" name="" class="form-control clear-x" id="nomeLV">
                                            </div>
                                            <div class="col-sm-6">

                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <!-- BTN STEP -->
                                <div class="form-group btnWrapper">
                                    <div class="btn-align-right">
                                        <a type="button" class="btn btn-primary" href="#">salva</a>
                                    </div>
                                    <div class="btn-align-right">
                                        <a type="button" class="btn btn-primary" id="btnInvio" href="#">
                                            annulla</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!--END  BTN STEP -->

                            </section>
                            <!--END  FORM -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Overlayer [nomeLinea]-->






